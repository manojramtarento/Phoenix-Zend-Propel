<?php

interface Phoenix_Auth_Engine_EngineInterface
{

    /**
     * Initialize an authentication adapter
     *
     * @param string $sLogin
     * @param string $sPassword
     * @return Zend_Auth_Adapter_Interface
     */
    public function getAuthenticationAdapter(string $sLogin, string $sPassword) : Zend_Auth_Adapter_Interface;

    /**
     * Initialize an instance of User object
     *
     * @param Zend_Auth $oZendAuth
     * @return Phoenix_Auth_User_Abstract
     */
    public function getAuthenticatedUser(Zend_Auth $oZendAuth) : ?Phoenix_Auth_User_Abstract;

    /**
     * Tell if user creatin is allowed or not
     *
     * @return bool
     */
    public function allowsUserCreation(): bool;

}
