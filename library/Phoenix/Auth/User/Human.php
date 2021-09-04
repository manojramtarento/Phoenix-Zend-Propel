<?php

class Phoenix_Auth_User_Human extends Phoenix_Auth_User_Abstract
{
    
    /**
     * Assing current user entity
     *
     * @param Users $oUser
     * @return Phoenix_Auth_User_Human
     */
    public function setUser(Users $oUser) : Phoenix_Auth_User_Human
    {
        $this->setUserId($oUser->getUserId());
        $this->setLogin($oUser->getUserLogin());
        $this->setLastName($oUser->getUserNom());
        $this->setFirstName($oUser->getUserPrenom());
        $this->setMail($oUser->getUserMail());
        $this->setPhone($oUser->getUserPhone());
        $this->setMobile($oUser->getUserMobile());
        $this->setLanguage($oUser->getUserLanguage());
        $this->setType($oUser->getRUserTypes() === null ? null : $oUser->getRUserTypes()->getRUserTypeShortName());
        $this->setUserModel($oUser);
        $this->setOrganisationModel($oUser);
        return $this;
    }
    
    /**
     * Assign user current organisation entity
     *
     * @param LnkUsersOrganisations $oLnkUsersOrganisations
     * @return Phoenix_Auth_User_Human
     */
    public function setUserCurrentOrganisation(LnkUsersOrganisations  $oLnkUsersOrganisations) : Phoenix_Auth_User_Human
    {
        $this->setCurrentOrganisation($oLnkUsersOrganisations);
        return $this;
    }
    
    

    /**
     * Force retrieve of accurate user groupe names. As group names might be updated, the stored group name might be obsolete
     *
     * @return array
     * @throws \LogicException
     */
    public function getGroups() : array
    {
        // Load groups from database by user login
        $aGroups = $this->loadGroupsByLogin($this->getLogin());
        if (is_array($aGroups)) {
            return $aGroups;
        }
        throw new \LogicException('Property "groups" expects an array, "' . (is_object($this->groups) ? get_class($this->groups) : gettype($this->groups)) . '" defined');
    }
    
    /**
     * Checks weither a user has access to the given feature, based on the user role(s)
     *
     * @param  numeric $iFonctionId
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function isAllowed($iFonctionId) : bool
    {
        if (! is_numeric($iFonctionId)) {
            throw new \InvalidArgumentException('Argument "$iFonctionId" expects a numeric, "' . (is_object($iFonctionId) ? get_class($iFonctionId) : gettype($iFonctionId)) . '" given');
        }

        $oAcl = Phoenix_Acl_Session::getInstance();

        foreach ($this->getGroups() as $aGroup) {
            if ($oAcl->has($iFonctionId) && $oAcl->isAllowed($aGroup['group_id'], $iFonctionId)) {
                return true;
            }
        }
        return false;
    }


}
