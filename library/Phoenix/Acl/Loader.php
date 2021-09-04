<?php

/**
 * Retrieving Phoenix available roles and ressources, Building an instance of Zend_Acl
 * That handles the permissions of roles to the ressources
 *
 *  @author info20
 */
class Phoenix_Acl_Loader
{

    /**
     *
     * @var \Zend_Acl
     */
    protected $zendAcl;

    /**
     * Loads roles into zendAcl object
     *
     * @return \Phoenix_Acl_Loader
     */
    private function loadRoles()
    {

        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aRoles = $oZendDbSelect->from('acl_groups', 'group_id')->query()->fetchAll();
        $oZendAcl = $this->getZendAcl();
        foreach ($aRoles as $aRole) {
            $oZendAcl->addRole(new Zend_Acl_Role($aRole['group_id']));
        }
        return $this;
    }

    /**
     * Loads ressources into zendAcl object
     *
     * @return \Phoenix_Acl_Loader
     */
    private function loadResssources()
    {

        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aRessources = $oZendDbSelect->from('acl_fonctionnalites', 'fonc_id')->distinct()->query()->fetchAll();
        $oZendAcl = $this->getZendAcl();

        foreach ($aRessources as $aRessource) {
            $oZendAcl->addResource(new Zend_Acl_Resource($aRessource['fonc_id']));
        }
        return $this;
    }

    /**
     * Building a Zend_Acl object and defining the autorisations
     *
     * @return \Zend_Acl
     */
    public function getAcl()
    {

        $this->loadRoles()->loadResssources();
        $oZendAcl = $this->getZendAcl();

        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        
        $aAllowed = $oZendDbSelect->from('lnk_acl_groups_fonctionnalites')
            ->joinLeft('acl_groups', 'acl_groups.group_id  = lnk_acl_groups_fonctionnalites.lnk_acl_groups_fonctionnalite_group_id',array())
            ->where('acl_groups.group_organisation_id = ?', Zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())
            ->query()->fetchAll();

        foreach ($aAllowed as $aAllow) {
            $oZendAcl->allow($aAllow['lnk_acl_groups_fonctionnalite_group_id'], $aAllow['lnk_acl_groups_fonctionnalite_fonc_id']);
        }

        return $oZendAcl;
    }

    /**
     * Lazy loads zendAcl property if undefined
     *
     * @return \Phoenix_Administration_Roles_Service_RolesService
     * @throws \LogicException
     */
    public function getZendAcl()
    {
        // Lazy load if undefiend
        if ($this->zendAcl === null) {
            $this->zendAcl = new \Zend_Acl();
        }
        if ($this->zendAcl instanceof \Zend_Acl) {
            return $this->zendAcl;
        }
        throw new \LogicException('Property "zendAcl" expects an instance of \Zend_Acl, "' . (is_object($this->zendAcl) ? get_class($this->zendAcl) : gettype($this->zendAcl)) . '" defined');
    }

    /**
     * Sets the zendAcl property value
     *
     * @param  \Zend_Acl $oZendAcl
     * @return \Phoenix_Acl_Loader
     */
    public function setZendAcl(\Zend_Acl $oZendAcl)
    {
        $this->zendAcl = $oZendAcl;
        return $this;
    }
}
