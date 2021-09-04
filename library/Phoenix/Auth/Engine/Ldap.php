<?php


class Phoenix_Auth_Engine_Ldap extends Phoenix_Auth_Engine_AbstractEngine
{
    /**
     * @var Zend_Auth_Adapter_Ldap
     */
    protected $adapter;

    /**
     * Tell if user creation is allowed or not
     *
     * @return bool
     */
    public function allowsUserCreation() : bool
    {
        return false;
    }

    /**
     * Initialize an authentication adapter
     *
     * @param string $sUsername
     * @param string $sPassword
     * @return Zend_Auth_Adapter_Interface
     */
    public function getAuthenticationAdapter(string $sUsername = null, string $sPassword = null) : Zend_Auth_Adapter_Interface
    {
        if ($this->adapter) {
            if ($sUsername !== null) {
                $this->adapter->setUsername($sUsername);
            }
            if ($sPassword !== null) {
                $this->adapter->setPassword($sPassword);
            }
            return $this->adapter;
        }
       
         // Initialize adapter for ldap
        return $this->adapter = new Zend_Auth_Adapter_Ldap($this->getLdapConfig(), $sUsername, $sPassword);
    }

    /**
     * Fetch user entity from user login
     *
     * @param Zend_Auth $oZendAuth
     * @return Users
     * @throws \LogicException
     */
    public function fetchUserFromUserLogin(Zend_Auth $oZendAuth) : Users
    {
        $sUserLogin = $this->adapter->getUsername();
        $oUsers = UsersQuery::create()->findOneByUserLogin($sUserLogin);
        if (! $oUsers instanceof Users) {
            // Create new user if login not found
            $oUsers = new Users();
        }

        $aAttributes = array('memberof', 'givenname', 'sn', 'mail', 'telephonenumber', 'mobile');

        $oAdapter = $this->getAuthenticationAdapter();
        $aLdapData = $oAdapter->getLdap()->searchEntries('(&(samaccountname=' . $sUserLogin . '))', $oAdapter->getLdap()->getBaseDn(), Zend_Ldap::SEARCH_SCOPE_SUB, $aAttributes);
       
        // Edit or add user data with those brought from AD
        $oUsers->setUserLogin($sUserLogin);
        $oUsers->setUserNom($aLdapData[0]['sn'][0] ?? '');
        $oUsers->setUserPrenom($aLdapData[0]['givenname'][0] ?? '');
        $oUsers->setUserMail($aLdapData[0]['mail'][0] ?? '');
        $oUsers->setUserPhone($aLdapData[0]['telephonenumber'][0] ?? '');
        $oUsers->setUserMobile($aLdapData[0]['mobile'][0] ?? '');
        $oUsers->save();
        return $oUsers;
    }

    /**
     * Retrieve Ldap configuration
     *
     * @return array
     */
    protected function getLdapConfig() : array
    {
        // Retrieve connection settings from AD
        return Zend_Registry::get('config')->ldap->toArray();
    }

}
