<?php

/**
 * This class has been made as a service to be used by the controller users
 * located in the administration module
 *
 * This class is used to retrieve users data
 */
class Phoenix_Administration_Users_Service_UsersService
{

    /**
     * @var integer
     */
    const NUMBER_OF_ELEMENTS_PER_PAGE = 50;

    /**
     * @var \Zend_Db_Select
     */
    protected $zendDbSelect;

    /**
     * Builds and returns a paginator of users
     *
     * @param  integer $iPageNumber
     * @param  integer $iSearchedUserTypeId
     * @return \My_Paginator
     * @throws \InvalidArgumentException
     */
    public function getUsersPaginator($iPageNumber, $iSearchedUserTypeId)
    {
        if (! is_integer($iPageNumber)) {
            throw new \InvalidArgumentException('Argument "$iPageNumber" expects an integer, "' . (is_object($iPageNumber) ? get_class($iPageNumber) : gettype($iPageNumber)) . '" given');
        }

        $oZendDbSelect = $this->getZendDbSelect();
        $oZendDbSelect->from('users')
                ->joinLeft('r_user_types', 'r_user_types.r_user_type_id = users.r_user_type_id')
                ->joinLeft('lnk_users_organisations', 'lnk_users_organisations.lnk_users_organisations_user_id  = users.user_id',array())
                ->where('lnk_users_organisations.lnk_users_organisations_organisation_id = ?', Zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())
                ->order('user_id asc');


        if (! empty($iSearchedUserTypeId)) {
            $oZendDbSelect->where('users.r_user_type_id = :user_type_id')
                    ->bind(array(':user_type_id' => $iSearchedUserTypeId));
        }

        // Initiating a search engine for quick researchs
        $oSearchEngine = new \My_Search_Engine($oZendDbSelect);
        $oSearchEngine->findWordOn(
            array(
                    'user_nom' => array('operator' => 'like'),
                    'user_prenom' => array('operator' => 'like'),
                    'user_mail' => array('operator' => 'like'),
                    'user_login' => array('operator' => 'like'),
                )
        );

        // Initiating a search engine for advanced researchs
        $oSearchEngine->findByFields(
            array(
                    'user_nom' => array('operator' => 'like'),
                    'user_prenom' => array('operator' => 'like'),
                    'user_mail' => array('operator' => 'like'),
                    'user_phone' => array('operator' => 'like'),
                    'user_mobile' => array('operator' => 'like'),
                )
        );
        $oSearchEngine->makeOrderBy();

        // Initiating paginator adapter
        $oPaginatorAdapter = new \Zend_Paginator_Adapter_DbSelect($oSearchEngine->getSelect());
        // Creating paginator
        $oPaginator = new \My_Paginator($oPaginatorAdapter);

        return $oPaginator->setCurrentPageNumber($iPageNumber)
                        ->setItemCountPerPage(self::NUMBER_OF_ELEMENTS_PER_PAGE);
    }

    /**
     * Gets a user instance by user id
     *
     * @param  integer $iUserId
     * @return \Users
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getUserByUserId($iUserId)
    {
        if (! is_integer($iUserId)) {
            throw new \InvalidArgumentException('Argument "$iUserId" expects an integer, "' . (is_object($iUserId) ? get_class($iUserId) : gettype($iUserId)) . '" given');
        }

        $oUsers = \UsersQuery::create()->findOneByUserId($iUserId);

        if (! $oUsers instanceof \Users) {
            throw new \LogicException('No user has been found for the given user id : "' . $iUserId . '"');
        }

        return $oUsers;
    }
    
    
    /**
     * Create user from given data and returns the new user object on success. On failure It returns
     * an array of validation errors
     *
     * @param  array $aUserData
     * @return \Users|array
     */
    public function createUser(array $aUserData)
    {
        $oUser = new Users();
        $oUser->fromArray($this->getAllowedUserData($aUserData), \BasePeer::TYPE_FIELDNAME);
        if ($oUser->validate()) {
            $oUser->save();
            return $oUser;
        }
        return $oUser->getValidationFailures();
    }

    /**
     * Updates user data and returns the user on success. On failure It returns
     * an array of validation errors
     *
     * @param  array $aUserData
     * @return \Users|array
     * @throws \InvalidArgumentException
     */
    public function updateUser(array $aUserData)
    {
        if (! isset($aUserData['user_id'])) {
            throw new \InvalidArgumentException('Key "user_id" is missing for the given user data :' . print_r($aUserData, true));
        }

        $oUser = $this->getUserByUserId((int) $aUserData['user_id']);
        $oUser->fromArray($this->getAllowedUserData($aUserData), \BasePeer::TYPE_FIELDNAME);
        if ($oUser->validate()) {
            $oUser->save();
            return  $oUser;
        }
        return $oUser->getValidationFailures();
    }

    /**
     * Builds an array of the allowed user data that can be updated, and populates it with the sent data
     *
     * @param  array $aUserData
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getAllowedUserData(array $aUserData)
    {
        $aAllowedUserData = array(
            'user_id' => true,
            'user_language' => true,
            'r_user_type_id' => true,
        );
        
        if (Phoenix_Auth_User::getAuthenticationEngine()->allowsUserCreation()) {
            $aAllowedUserData['user_login'] = true;
            $aAllowedUserData['user_nom'] = true;
            $aAllowedUserData['user_prenom'] = true;
            $aAllowedUserData['user_mail'] = true;
            $aAllowedUserData['user_phone'] = true;
            $aAllowedUserData['user_mobile'] = true;
            $aAllowedUserData['user_password'] = true;
        }
        
        return array_intersect_key($aUserData, $aAllowedUserData);
    }

    /**
     * Delete a user record and returns true, or returns false in case It's impossible to delete the user
     *
     * @param  integer $iUserId
     * @return boolean
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function deleteUserRecord($iUserId)
    {
        if (! is_integer($iUserId)) {
            throw new \InvalidArgumentException('Argument "$iUserId" expects an integer, "' . (is_object($iUserId) ? get_class($iUserId) : gettype($iUserId)) . '" given');
        }

        $oUser = UsersQuery::create()->findPk($iUserId);

        if (! $oUser instanceof \Users) {
            throw new \LogicException('No user has been found for the given user id : "' . $iUserId . '"');
        }
        
        $oLnkUsersOrganisations = LnkUsersOrganisationsQuery::create()->filterByLnkUsersOrganisationsUserId($oUser->getUserId());

        if ($oLnkUsersOrganisations->count() > 1)
        {
            $oLnkUsersCurrentOrganisations = $oLnkUsersOrganisations->filterByLnkUsersOrganisationsOrganisationId(Zend_Auth::getInstance()->getStorage()->read()->getCurrentOrganisation()->getOrganisationId())->findOne();
            if ($oLnkUsersCurrentOrganisations instanceof LnkUsersOrganisations)
            {
              $oLnkUsersOrganisations->delete();  
              return true;
            }
            throw new \UnexpectedValueException('$oLnkUsersCurrentOrganisations should be a instance of  "\LnkUsersOrganisations", "' . (is_object($oLnkUsersCurrentOrganisations) ? get_class($oLnkUsersCurrentOrganisations) : gettype($oLnkUsersCurrentOrganisations)) . '" retrieved');
        } else {
            if ($oUser->checkIfUserCanBeSafelyDeleted()) {
              $oLnkUsersOrganisations->delete();  
              $oUser->delete();
              return true;
            }
        }
        return false;
    }

    /**
     * Returns an array of the user interface supported languages
     *
     * @return array
     * @throws \LogicException
     * @throws \RuntimeException
     */
    public function getUiSupportedLanguages()
    {
        $sUiLanguagesFilePath = APPLICATION_PATH . '/modules/default/configs/UserLanguages.php';
        if (! file_exists($sUiLanguagesFilePath)) {
            throw new \LogicException('The configuration language file "' . $sUiLanguagesFilePath . '" does not exists');
        }

        if (false === ($aUiSupportedLanguages = include $sUiLanguagesFilePath)) {
            throw new \RuntimeException('An error occurred while including file "' . $sUiLanguagesFilePath . '"');
        }

        $aFormattedUiSupportedLanguages = array();
        foreach ($aUiSupportedLanguages as $sLanguageKey => $sLanguageValue) {
            $aFormattedUiSupportedLanguages[$sLanguageKey] = array('label' => $sLanguageKey, 'value' => $sLanguageKey);
        }

        return $aFormattedUiSupportedLanguages;
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
     * @return \Phoenix_Administration_Rules_Service_RulesService
     */
    public function setZendDbSelect(\Zend_Db_Select $oZendDbSelect)
    {
        $this->zendDbSelect = $oZendDbSelect;
        return $this;
    }
}
