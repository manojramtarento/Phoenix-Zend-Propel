<?php

class Phoenix_Auth_Engine_Database extends Phoenix_Auth_Engine_AbstractEngine
{
    /**
     * Initialize an authentication adapter
     *
     * @param string $sLogin
     * @param string $sPassword
     * @return Zend_Auth_Adapter_Interface
     */
    public function getAuthenticationAdapter(string $sLogin, string $sPassword) : Zend_Auth_Adapter_Interface
    {
        $oAdapter = new Zend_Auth_Adapter_DbTable(
            Zend_Db_Table::getDefaultAdapter(),
            'users',
            'user_login',
            'user_password',
            'MD5(CONCAT(?, user_password_salt))'
        );
        $oAdapter->setIdentity($sLogin);
        $oAdapter->setCredential($sPassword);
        return $oAdapter;
    }

    /**
     * Fetch user entity from user login
     *
     * @param Zend_Auth $oZendAuth
     * @return Users
     * @throws \LogicException
     */
    public function fetchUserFromUserLogin(Zend_Auth $oZendAuth) : ?Users
    {
        $oUsers = UsersQuery::create()->filterByUserLogin($oZendAuth->getIdentity()) 
                  ->useLnkUsersOrganisationsQuery()->endUse()
                  ->findOne(); 
	    return $oUsers;
    }

    /**
     * Tell if user creatin is allowed or not
     *
     * @return bool
     */
    public function allowsUserCreation() : bool
    {
        return true;
    }
}
