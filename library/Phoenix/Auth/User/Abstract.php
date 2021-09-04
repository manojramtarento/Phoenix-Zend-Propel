<?php

abstract class Phoenix_Auth_User_Abstract
{

    /**
     * @var integer
     */
    protected $userId;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $mail;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $mobile;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $userModel;

    /**
     * @var array
     */
    protected $groups;

    /**
     * @var integer
     */
    protected $currentOrganisation;

    /**
     * @var string
     */
    protected $organisationModel;

    /**
     * Checks weither a user has access to the given feature, based on the user role(s)
     *
     * @param  numeric $iFonctionId
     * @return boolean
     */
    abstract public function isAllowed($iFonctionId) : bool;
    
    /**
     * Gets all groups of user
     *
     * @return array
     */
    abstract public function getGroups() : array;

    /**
     * Load groups from dababase by login
     *
     * @param  string $sLogin
     * @return array
     * @throws \InvalidArgumentException
     */
    protected function loadGroupsByLogin($sLogin)
    {
        if (! is_string($sLogin)) {
            throw new \InvalidArgumentException('Argument "$sLogin" expects a string, "' . (is_object($sLogin) ? get_class($sLogin) : gettype($sLogin)) . '" given');
        }
        $aGroups = array();

        $oUser = UsersQuery::create()->findOneByUserLogin($sLogin);
        if ($oUser instanceof \Users) {
            $oUserRoles = \LnkUsersAclGroupsQuery::create()
                    ->useAclGroupsQuery()
                    ->filterByGroupOrganisationId(Zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())
                    ->endUse()
                    ->findByUserId($oUser->getUserId());
                    
            foreach ($oUserRoles as $oUserRole) {
                $oAclGroups = $oUserRole->getAclGroups();
                $aGroups[$oAclGroups->getGroupId()] = $oAclGroups->toArray(\BasePeer::TYPE_FIELDNAME);
            }
        }

        return $aGroups;
    }

    /**
     * Checks if a user has a group
     *
     * @param  integer $iGroupId
     * @return boolean
     */
    public function hasGroup($iGroupId)
    {
        if (! is_integer($iGroupId)) {
            throw new \InvalidArgumentException('Argument "$iGroupId" expects a string, "' . (is_object($iGroupId) ? get_class($iGroupId) : gettype($iGroupId)) . '" given');
        }

        return in_array($iGroupId, $this->getGroupIds());
    }

    /**
     * Get a user groups Ids array
     *
     * @return array
     */
    public function getGroupIds()
    {
        return array_reduce($this->getGroups(), function ($aGroupIds, $aRaw) {
            $aGroupIds[] = $aRaw['group_id'];
            return $aGroupIds;
        }, array());
    }
    
    /**
     * Check if use has role IT
     *
     * @return boolean
     */
    public function isDev()
    {
        return $this->hasGroup(AclGroups::IT);
    }

    /**
     * @return string
     */
    public function getNomPrenom()
    {
        return $this->getLastName() . ' ' . $this->getFirstName();
    }

    /**
     * @return integer
     * @throws \LogicException
     */
    public function getUserId()
    {
        if (is_integer($this->userId) || $this->userId === null) {
            return $this->userId;
        }
        throw new \LogicException('Property "userId" expects an integer or null value, "' . (is_object($this->userId) ? get_class($this->userId) : gettype($this->userId)) . '" defined');
    }

    /**
     * @param integer $iUserId
     * @return \Phoenix_Auth_User_Abstract
     * @throws \InvalidArgumentException
     */
    public function setUserId($iUserId)
    {
        if (is_integer($iUserId) || $iUserId === null) {
            $this->userId = $iUserId;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$iUserId" expects an integer or null value, "' . (is_object($iUserId) ? get_class($iUserId) : gettype($iUserId)) . '" given');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getLogin()
    {
        if (is_string($this->login)) {
            return $this->login;
        }
        throw new \LogicException('Property "login" expects a string, "' . (is_object($this->login) ? get_class($this->login) : gettype($this->login)) . '" defined');
    }

    /**
     * @param string $sLogin
     * @return \Phoenix_Auth_User_Abstract
     * @throws \InvalidArgumentException
     */
    public function setLogin($sLogin)
    {
        if (is_string($sLogin)) {
            $this->login = $sLogin;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sLogin" expects a string, "' . (is_object($sLogin) ? get_class($sLogin) : gettype($sLogin)) . '" given');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getFirstName()
    {
        if (is_string($this->firstName) || $this->firstName === null) {
            return $this->firstName;
        }
        throw new \LogicException('Property "firstName" expects a string or null value, "' . (is_object($this->firstName) ? get_class($this->firstName) : gettype($this->firstName)) . '" defined');
    }

    /**
     * @param string $sFirstName
     * @return \Phoenix_Auth_User_Abstract
     * @throws \InvalidArgumentException
     */
    public function setFirstName($sFirstName)
    {
        if (is_string($sFirstName) || $sFirstName === null) {
            $this->firstName = $sFirstName;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sFirstName" expects a string or null value, "' . (is_object($sFirstName) ? get_class($sFirstName) : gettype($sFirstName)) . '" given');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getLastName()
    {
        if (is_string($this->lastName) || $this->lastName === null) {
            return $this->lastName;
        }
        throw new \LogicException('Property "lastName" expects a string or null value, "' . (is_object($this->lastName) ? get_class($this->lastName) : gettype($this->lastName)) . '" defined');
    }

    /**
     * @param string $sLastName
     * @return \Phoenix_Auth_User_Abstract
     * @throws \InvalidArgumentException
     */
    public function setLastName($sLastName)
    {
        if (is_string($sLastName) || $sLastName === numm) {
            $this->lastName = $sLastName;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sLastName" expects a string or null value, "' . (is_object($sLastName) ? get_class($sLastName) : gettype($sLastName)) . '" given');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getMail()
    {
        if (is_string($this->mail) || $this->mail === null) {
            return $this->mail;
        }
        throw new \LogicException('Property "mail" expects a string or null value, "' . (is_object($this->mail) ? get_class($this->mail) : gettype($this->mail)) . '" defined');
    }

    /**
     * @param string $sMail
     * @return \Phoenix_Auth_User_Abstract
     * @throws \InvalidArgumentException
     */
    public function setMail($sMail)
    {
        if (is_string($sMail) || $sMail === null) {
            $this->mail = $sMail;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sMail" expects a string or null value, "' . (is_object($sMail) ? get_class($sMail) : gettype($sMail)) . '" given');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getMobile()
    {
        if (is_string($this->mobile) || $this->mobile === null) {
            return $this->mobile;
        }
        throw new \LogicException('Property "mobile" expects a string or null value, "' . (is_object($this->mobile) ? get_class($this->mobile) : gettype($this->mobile)) . '" defined');
    }

    /**
     * @param string $sMobile
     * @return \Phoenix_Auth_User_Abstract
     * @throws \InvalidArgumentException
     */
    public function setMobile($sMobile)
    {
        if (is_string($sMobile) || $sMobile === null) {
            $this->mobil = $sMobile;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sMobile" expects a string or null value, "' . (is_object($sMobile) ? get_class($sMobile) : gettype($sMobile)) . '" given');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getPhone()
    {
        if (is_string($this->phone) || $this->phone === null) {
            return $this->phone;
        }
        throw new \LogicException('Property "phone" expects a string or null value, "' . (is_object($this->phone) ? get_class($this->phone) : gettype($this->phone)) . '" defined');
    }

    /**
     * @param string $sPhone
     * @return \Phoenix_Auth_User_Abstract
     * @throws \InvalidArgumentException
     */
    public function setPhone($sPhone)
    {
        if (is_string($sPhone) || $sPhone === null) {
            $this->phone = $sPhone;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sPhone" expects a string or null value, "' . (is_object($sPhone) ? get_class($sPhone) : gettype($sPhone)) . '" given');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getLanguage()
    {
        if (! $this->language) {
            $this->language = 'fr_FR';
        }
        if (is_string($this->language)) {
            return $this->language;
        }
        throw new \LogicException('Property "language" expects a string, "' . (is_object($this->language) ? get_class($this->language) : gettype($this->language)) . '" defined');
    }

    /**
     * @param string $sLanguage
     * @throws \InvalidArgumentException
     */
    public function setLanguage($sLanguage)
    {
        if (is_string($sLanguage) || $sLanguage === null) {
            $this->language = $sLanguage;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sLanguage" expects a string or null value, "' . (is_object($sLanguage) ? get_class($sLanguage) : gettype($sLanguage)) . '" given');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getType()
    {
        if (is_string($this->type) || $this->type === null) {
            return $this->type;
        }
        throw new \LogicException('Property "type" expects a string or null value, "' . (is_object($this->type) ? get_class($this->type) : gettype($this->type)) . '" defined');
    }

    /**
     * @param string $sType
     * @return \Phoenix_Auth_User_Abstract
     * @throws \InvalidArgumentException
     */
    public function setType($sType)
    {
        if (is_string($sType) || $sType === null) {
            $this->type = $sType;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sType" expects a string or null, "' . (is_object($sType) ? get_class($sType) : gettype($sType)) . '" given');
    }

    /**
     * @param \Users $oUsers
     * @return \Phoenix_Auth_User_Abstract
     */
    public function setUserModel(\Users $oUsers)
    {
        if (($sUsers = serialize($oUsers)) === false) {
            throw new \RuntimeException('An error occurred while serializing object \Users');
        }

        $this->userModel = $sUsers;
        return $this;
    }

    /**
     * @return \Users
     * @throws \RuntimeException
     * @throws \LogicException
     */
    public function getUserModel()
    {
        if (($oUserModel = unserialize($this->userModel)) === false) {
            throw new \RuntimeException('An error occurred while unserializing object \Users');
        }
        if ($oUserModel instanceof \Users) {
            return $oUserModel;
        }
        throw new \LogicException('Property "userModel" expects an instance of \Users, "' . (is_object($this->userModel) ? get_class($this->userModel) : gettype($this->userModel)) . '" defined');
    }

    /**
     * @param array $aGroups
     * @return \Phoenix_Auth_User_Abstract
     */
    public function setGroups(array $aGroups)
    {
        $this->groups = $aGroups;
        return $this;
    }


    /**
     * @return null or Organisations
     * @throws \RuntimeException or \LogicException
     */
    public function getCurrentOrganisation() : ? Organisations
    {
        if (! $this->currentOrganisation) {
            return null;
        }
        if (($oOrganisation = unserialize($this->currentOrganisation)) === false) {
            throw new \RuntimeException('An error occurred while unserializing object \Organisations');
        }
        if ($oOrganisation instanceof Organisations) {
            return $oOrganisation;
        }
        throw new \LogicException('Property "$currentOrganisation" expects an instance of \Organisations, "' . (is_object($this->currentOrganisation) ? get_class($this->currentOrganisation) : gettype($this->currentOrganisation)) . '" defined');
    }

    /**
     * @param LnkUsersOrganisations $oLnkUsersOrganisations
     * @return Phoenix_Auth_User_Abstract
     * @throw \RuntimeException or \InvalidArgumentException
     */
    public function setCurrentOrganisation(LnkUsersOrganisations $oLnkUsersOrganisations) : Phoenix_Auth_User_Abstract
    {

        $oOrganisation = OrganisationsQuery::create()->findPk($oLnkUsersOrganisations->getLnkUsersOrganisationsOrganisationId());
        if ($oOrganisation instanceof Organisations) {
            if (($this->currentOrganisation = serialize($oOrganisation)) === false) {
                throw new \RuntimeException('An error occurred while serializing object \Organisations');
            }
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$oOrganisation" should be instance of Organisations, "' . (is_object($oOrganisation) ? get_class($oOrganisation) : gettype($oOrganisation)) . '" given');
    }

    /**
     * @param \Users $oUsers
     * @return \Phoenix_Auth_User_Abstract
     * @throw \RuntimeException
     */
    public function setOrganisationModel(\Users $oUsers) : Phoenix_Auth_User_Abstract
    {

        $oOrganisation = LnkUsersOrganisationsQuery::create()->filterByLnkUsersOrganisationsUserId($oUsers->getUserId())->useOrganisationsQuery()->endUse()->with('Organisations')->find();
        if (($sOrganisation = serialize($oOrganisation)) === false) {
            throw new \RuntimeException('An error occurred while serializing object \Users');
        }

        $this->organisationModel = $sOrganisation;
        return $this;
    }

    /**
     * @return \PropelObjectCollection
     * @throws \RuntimeException
     * @throws \LogicException
     */
    public function getOrganisationModel()
    {

        if (($oOrganisationModel = unserialize($this->organisationModel)) === false) {
            throw new \RuntimeException('An error occurred while unserializing object \Users');
        }
        if ($oOrganisationModel instanceof \PropelObjectCollection) {
            return $oOrganisationModel;
        }
        throw new \LogicException('Property "organisationModel" expects an instance of \PropelObjectCollection, "' . (is_object($this->organisationModel) ? get_class($this->organisationModel) : gettype($this->organisationModel)) . '" defined');
    }
         
}
