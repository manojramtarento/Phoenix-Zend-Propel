<?php

abstract class My_Controller_Action extends Zend_Controller_Action
{

    /**
     * @param Zend_Controller_Request_Abstract $oRequest
     * @param Zend_Controller_Response_Abstract $oResponse
     * @param array $aInvokeArgs
     */
    public function __construct(Zend_Controller_Request_Abstract $oRequest, Zend_Controller_Response_Abstract $oResponse, array $aInvokeArgs = array())
    {
        parent::__construct($oRequest, $oResponse, $aInvokeArgs);
        Phoenix_Translate::initTranslate();
    }

    /**
     * Returns the environment configuration
     * @return Zend_Config_Ini
     */
    public function getConfig()
    {
        return Zend_Registry::get('config');
    }
}
