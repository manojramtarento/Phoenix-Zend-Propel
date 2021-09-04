<?php

/**
 * This class has been made as a service to be used by the controller roles
 * located in the administration module
 *
 * This class is used to manage roles
 */
class Phoenix_Administration_Roles_Service_RolesService
{

    /**
     * Indicates the number of rows to display per page
     */
    const NUMBER_OF_ROW_PER_PAGE = 50;

    /**
     * @var \Zend_Db_Select
     */
    protected $zendDbSelect;

    /**
     * Builds and returns a paginator of roles
     *
     * @param  integer $iPageNumber
     * @return \My_Paginator
     * @throws \InvalidArgumentException
     */
    public function getRolesPaginator($iPageNumber)
    {
        if (!is_integer($iPageNumber)) {
            throw new \InvalidArgumentException('Argument "$iPageNumber" expects an integer, "' . (is_object($iPageNumber) ? get_class($iPageNumber) : gettype($iPageNumber)) . '" given');
        }

        $oZendDbSelect = $this->getZendDbSelect();
        $oZendDbSelect->from('acl_groups', array('group_id as role_id', 'group_name as role_name', 'number_of_members' => new \Zend_Db_Expr('(SELECT COUNT(*) FROM lnk_users_acl_groups WHERE group_id = acl_groups.group_id)')))
			          ->where('group_organisation_id = ?', zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())
					  ->order('role_id asc');

        // // Initiating a search engine for quick researchs
        $oSearchEngine = new \My_Search_Engine($oZendDbSelect);
        $oSearchEngine->findWordOn(
            array(
                    'group_name' => array('operator' => 'like')
                )
        );
        $oSearchEngine->makeOrderBy();

        // Creating paginator adapter
        $oPaginatorAdapter = new \Zend_Paginator_Adapter_DbSelect($oSearchEngine->getSelect());
        // Creating paginator
        $oPaginator = new \My_Paginator($oPaginatorAdapter);

        return $oPaginator->setCurrentPageNumber($iPageNumber)
                        ->setItemCountPerPage(self::NUMBER_OF_ROW_PER_PAGE);
    }

    /**
     * Retrieves a set of users having the given role
     *
     * @param  integer $iRoleId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getUsersHavingRoleByRoleId($iRoleId)
    {

        if (!is_integer($iRoleId)) {
            throw new \InvalidArgumentException('Argument "$iRoleId" expects an integer, "' . (is_object($iRoleId) ? get_class($iRoleId) : gettype($iRoleId)) . '" given');
        }

        return LnkUsersAclGroupsQuery::create()->getUsersHavingRoleByRoleId($iRoleId);
    }

    /**
     * Retrieves a set of users lacking the given role
     *
     * @param  array $aUsersHavingRole
     * @return array
     */
    public function getUsersLackingRole(array $aUsersHavingRole)
    {
        return UsersQuery::create()->getUsersNotInUsersList($aUsersHavingRole);
    }

    /**
     * Retrieves a set of available users
     *
     * @return array
     */
    public function getAvailableUsers()
    {
        return UsersQuery::create()->getAvailableUsers();
    }

    /**
     * Saves role name and owners
     *
     * @param  integer $iRoleId | null
     * @param  array $aUsers
     * @return array
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function saveRoleSettings($iRoleId, $sRoleName, array $aUsers)
    {
        
        if (!is_null($iRoleId) && !is_integer($iRoleId)) {
            throw new \InvalidArgumentException('Argument "$iRoleId" expects either an integer or null value, "' . (is_object($iRoleId) ? get_class($iRoleId) : gettype($iRoleId)) . '" given');
        }

        if (!is_string($sRoleName)) {
            throw new \InvalidArgumentException('Argument "$sRoleName" expects a string, "' . (is_object($sRoleName) ? get_class($sRoleName) : gettype($sRoleName)) . '" given');
        }

        $oAclGroup = is_null($iRoleId) ? new \AclGroups() : \AclGroupsQuery::create()->findOneByGroupId($iRoleId);

        if (!$oAclGroup instanceof \AclGroups) {
            throw new \LogicException('No role has been found for the given role id "' . $iRoleId . '"');
        }

        if ($aResponse = AclGroupsQuery::create()->updateGroupName($oAclGroup, $sRoleName)) {
            return $aResponse;
        }

        // Delete all role owners
        LnkUsersAclGroupsQuery::create()->filterByGroupId($oAclGroup->getGroupId())->delete();

        // Saving new role owners
        foreach ($aUsers as $iUserId) {
            $oLnkUsersAclGroups = new LnkUsersAclGroups();
            $oLnkUsersAclGroups->setGroupId($oAclGroup->getGroupId());
            $oLnkUsersAclGroups->setUserId($iUserId);
            if ($oLnkUsersAclGroups->validate()) {
                $oLnkUsersAclGroups->save();
                // Update current user session if add/update current user roles
                if(Zend_Auth::getInstance()->getStorage()->read()->getUserId() == $iUserId)
                {
                    $oPhoenix_Acl_Loader = new Phoenix_Acl_Loader();
                    $oZend_Session_Namespace = new Zend_Session_Namespace('Phoenix_Acl_Session');
                    $oZend_Session_Namespace->instance = $oPhoenix_Acl_Loader->getAcl();
                }
            } else {
                return $oLnkUsersAclGroups->getValidationFailures();
            }
        }
        return array();
    }

    /**
     * Checks if a role has owners, or if it's referenced in one or many tables, deletes the role otherwise
     *
     * @param  integer $iRoleId
     * @return array
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function deleteRole($iRoleId)
    {
        if (!is_integer($iRoleId)) {
            throw new \InvalidArgumentException('Argument "$iRoleId" expects an integer, "' . (is_object($iRoleId) ? get_class($iRoleId) : gettype($iRoleId)) . '" given');
        }

        $oRole = AclGroupsQuery::create()->findPk($iRoleId);

        if (!$oRole instanceof \AclGroups) {
            throw new \LogicException('No role has been found for the given role id : "' . $iRoleId . '"');
        }

        if ($oRole->countLnkUsersAclGroupss()) {
            return array('role_deletion_validation_failed_role_has_users');
        }
        if ($oRole->checkIfRoleCanBeSafelyDeleted()) {
            $oRole->delete();
            return array();
        }

        return array('role_deletion_validation_failed_role_is_referenced');
    }

    /**
     * Gets the zendDbSelect property value
     *
     * @return \Zend_Db_Select
     * @throws \LogicException
     */
    public function getZendDbSelect()
    {
        // Lazy load if not defiend
        if ($this->zendDbSelect === null) {
            $this->zendDbSelect = new \Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        }
        if ($this->zendDbSelect instanceof \Zend_Db_Select) {
            return $this->zendDbSelect;
        }
        throw new \LogicException('Property "zendDbSelect" expects an instance of \Zend_Db_Select, "' . (is_object($this->zendDbSelect) ? get_class($this->zendDbSelect) : gettype($this->zendDbSelect)) . '" defined');
    }

    /**
     * Sets the zendDbSelect property value
     *
     * @param  \Zend_Db_Select $oZendDbSelect
     * @return \Phoenix_Administration_Roles_Service_RolesService
     */
    public function setZendDbSelect(\Zend_Db_Select $oZendDbSelect)
    {
        $this->zendDbSelect = $oZendDbSelect;
        return $this;
    }
}
