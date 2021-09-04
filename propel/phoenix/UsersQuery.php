<?php

/**
 * Skeleton subclass for performing query and update operations on the 'users' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class UsersQuery extends BaseUsersQuery
{

    /**
     * recherche des utilisateurs selon groupe AD
     *
     * @param  type $groupAdId
     * @return PropelObjectCollection|array|mixed
     */
    public function findByGroupAd($groupAdId)
    {

        $result = $this->useLnkUsersAclGroupsQuery()->filterByGroupId($groupAdId)->endUse()->find();

        return $result;
    }

    /**
     * return an indexed array of users having a given user type
     *
     * @param  integer $iUserType
     * @param  array $aIncludeUsers
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getUsersByRUserTypeId($iUserType, array $aIncludeUsers = null)
    {

        if (!is_integer($iUserType)) {
            throw new \InvalidArgumentException('Argument "$iUserType" expects an int , "' . (is_object($iUserType) ? get_class($iUserType) : gettype($iUserType)) . '" given');
        }

        return self::create()->filterByRUserTypeId($iUserType)
                        ->_or()
                        ->filterByUserId($aIncludeUsers)
                        ->withColumn('CASE WHEN user_nom IS NOT NULL THEN CONCAT(users.user_nom, \' \', user_prenom) ELSE CONCAT(users.user_id, \' \', user_prenom) END', 'label')
                        ->withColumn('users.user_id', 'value')
                        ->select('label')
                        ->orderBy('label')
                        ->find()
                        ->toArray('value', false, Basepeer::TYPE_FIELDNAME);
    }

    /**
     * Return an indexed array of users as user_id => "user_lastname user_firstname" or "user_id user_firstname" if the user_lastname is missing
     *
     * @return array
     */
    public function getAvailableUsers()
    {
	 
        return self::create()
						->useLnkUsersOrganisationsQuery()->filterByLnkUsersOrganisationsOrganisationId(zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())->endUse()
						->withColumn('CASE WHEN user_nom IS NOT NULL THEN CONCAT(users.user_nom, \' \', user_prenom) ELSE CONCAT(users.user_id, \' \', user_prenom) END', 'label')
                        ->withColumn('users.user_id', 'value')
                        ->select('label')
                        ->orderBy('label', Criteria::ASC)
                        ->find()
                        ->toArray('value', false, Basepeer::TYPE_FIELDNAME);
    }

    /**
     * Return un indexed array of users that are not in the given array
     * The array is indexed as following : user_id => "user_lastname user_firstname" or "user_id user_firstname" if the user_lastname is missing
     *
     * @param  array $aUsersHavingRole
     * @return type
     */
    public function getUsersNotInUsersList(array $aUsersHavingRole)
    {
        return self::create()->filterByUserId($aUsersHavingRole, Criteria::NOT_IN)
						->useLnkUsersOrganisationsQuery()->filterByLnkUsersOrganisationsOrganisationId(zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())->endUse()
                        ->withColumn('CASE WHEN user_nom IS NOT NULL THEN CONCAT(users.user_nom, \' \', user_prenom) ELSE CONCAT(users.user_id, \' \', user_prenom) END', 'label')
                        ->withColumn('users.user_id', 'value')
                        ->select('label')
                        ->orderBy('label', Criteria::ASC)
                        ->find()
                        ->toArray('value', false, Basepeer::TYPE_FIELDNAME);
    }
}
