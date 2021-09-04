<?php

abstract class Phoenix_Auth_Engine_AbstractEngine implements Phoenix_Auth_Engine_EngineInterface
{
    /**
     * Initialize an instance of User object
     *
     * @param Zend_Auth $oZendAuth
     * @return Phoenix_Auth_User_Abstract
     */
    public function getAuthenticatedUser(Zend_Auth $oZendAuth) : ?Phoenix_Auth_User_Abstract
    {
        $oUser = $this->fetchUserFromUserLogin($oZendAuth);
		if(!$oUser instanceof Users){
			return null;
		}
        $oAuthUser = new Phoenix_Auth_User_Human();
        $oAuthUser->setUser($oUser);

        return $oAuthUser;
    }

    /**
     * Fetch user entity from zend auth
     *
     * @param Zend_Auth $oZendAuth
     * @return Users
     */
    abstract public function fetchUserFromUserLogin(Zend_Auth $oZendAuth) : ?Users;



}
