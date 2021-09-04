<?php

class Phoenix_Controller_Plugin_Acl extends Zend_Controller_Plugin_Abstract
{

    /**
     * Acl active, defined in config file
     * @var boolean
     */
    protected $enableAcl = true;

    public function __construct()
    {
        $this->enableAcl = isset(My_Env::getInstance()->getConfig()->my->acl->enable) ? My_Env::getInstance()->getConfig()->my->acl->enable : false;
    }

    /**
     * Forbid behavior
     */
    protected function forbidBehavior()
    {
        // #30994 : Appel d'une méthode centralisé qui encode chaque paramètre d'URL
        $aEncodedElements = Phoenix_Data_Convert::getEncodedUrl($this->_request->getParams());

        $oZendControllerActionHelperRedirector = new Zend_Controller_Action_Helper_Redirector();
       
        if ($this->_request->isXmlHttpRequest()) {
            $oZendControllerActionHelperRedirector->direct('index', 'forbidden', 'default', array('format' => 'json')+$aEncodedElements);
        } else {
            // Check authentication
            $oZendControllerActionHelperRedirector->gotoSimpleAndExit('index', 'forbidden', 'default');
        }
    }

    public function preDispatch(Zend_Controller_Request_Abstract $oRequest)
    {
        parent::preDispatch($oRequest);
        if (! $this->enableAcl) {
            return;
        }
        
        $sModule = $oRequest->getModuleName();
        $sControllerName = $oRequest->getControllerName();
        $sActionName = $oRequest->getActionName();
        
        // Cli mode, only cron module is allowed
        if ($sModule === 'cron' && ($oUser = Phoenix_Auth_User::getInstance()) instanceof Phoenix_Auth_User_Cli) {
            try {
                if (! $oRequest->getParam('organisationName')) {
                    throw new \InvalidArgumentException('"organisationName" param is empty');
                }
                $oUser->setOrganisation($oRequest->getParam('organisationName'));
                if (Phoenix_Auth_User::mvcActionIsAllowed($sModule, $sControllerName, $sActionName) === false) {
                    throw new Zend_Controller_Action_Exception('Vous n’êtes pas autorisé à exécuter ce traitement', 403);
                }
            } catch (Exception $oException) {
                Phoenix_Logger::getInstanceErreur()->handleException($oException);
            }
            return;
        }
        
        
        
        // Auth action must be allowed for everybody
        if ($sModule === 'default' && $sControllerName === 'auth') {
            return;
        }
        
        // Forbidden action must be allowed for everybody
        if ($sModule === 'default' && $sControllerName === 'forbidden' && $sActionName === 'index') {
            return;
        }
        
        // Error action must be allowed for everybody
        if ($sModule === 'default' && $sControllerName === 'error' && $sActionName === 'error') {
            return;
        }
        
        // Redirect authenticated user of organisation is not set
        if (($oUser = Zend_Auth::getInstance()->getStorage()->read()) instanceof Phoenix_Auth_User_Abstract && $oUser->getCurrentOrganisation() === null) {
            $oZendControllerActionHelperRedirector = new Zend_Controller_Action_Helper_Redirector();
            return $oZendControllerActionHelperRedirector->gotoSimpleAndExit('organisation', 'auth', 'default');
        }
             
         
        if (! Zend_Auth::getInstance()->hasIdentity() && $sControllerName !== 'auth') {
            if ($this->_request->isXmlHttpRequest()) {
                $oJsonHelper = new Zend_View_Helper_Json();
                $this->getResponse()->setBody($oJsonHelper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_REDIRECT, 'http://'.$_SERVER['HTTP_HOST']), false))->sendResponse();
                exit(0);
            }
            $oZendControllerActionHelperRedirector = new Zend_Controller_Action_Helper_Redirector();
            // Save the current url for redirect after authentication
            $sRequestUri = $_SERVER['REQUEST_URI'];
            $oZendSessionNamespace = new Zend_Session_Namespace('My_Controller_Plugin_Auth');
            $oZendSessionNamespace->requestUri = $sRequestUri;
            return $oZendControllerActionHelperRedirector->gotoSimpleAndExit('index', 'auth', 'default');
        }

        if (Phoenix_Auth_User::mvcActionIsAllowed($sModule, $sControllerName, $sActionName) === false) {
            return $this->forbidBehavior();
        }
    }

}
