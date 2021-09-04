<?php

class AuthController extends My_Controller_Action
{

    public function init()
    {
        $this->_helper->layout()->setLayout('auth');
    }

    /**
     * Redirect to home page if user is authenticated
     */
    protected function preventReAuth()
    {
        if (Zend_Auth::getInstance()->getIdentity() instanceof Phoenix_Auth_User_Human) {
            $this->_helper->redirector('index', 'accueil', 'default');
        }
    }
    
    

    /**
     * Display authentication form
     */
    public function indexAction()
    {
        // Redirect to home page if user is authenticated
        $this->preventReAuth();
    }

    /**
     * Set the authenticated user's organisation
     * Throws \UnexpectedValueException
     */
    public function organisationAction()
    {
        $this->_helper->layout()->setLayout('organisation');
        if ($this->getRequest()->isPost()) {
            $iOrganisationId = $this->_request->getPost('currentOrganisationId');
            if(!$iOrganisationId)
            {
                throw new \UnexpectedValueException('$iOrganisationId expects an integer greater than 0');
            }
            try {

                $oAuthUser = Zend_Auth::getInstance()->getStorage()->read();
                $oLnkUsersOrganisations =  LnkUsersOrganisationsQuery::create()->filterByLnkUsersOrganisationsUserId($oAuthUser->getUserId())->filterByLnkUsersOrganisationsOrganisationId($iOrganisationId)->useOrganisationsQuery()->endUse()->find(); 
                if (current($oLnkUsersOrganisations) instanceof LnkUsersOrganisations) {
                    $oAuthUser->setUserCurrentOrganisation(current($oLnkUsersOrganisations));
                    $oZendSessionNamespace = new Zend_Session_Namespace('My_Controller_Plugin_Auth');
                    if (empty($oZendSessionNamespace->request_uri)) {
                        $this->_helper->redirector('index', 'accueil', 'default');
                        exit(0);    
                    }
                    $this->_redirect($oZendSessionNamespace->request_uri);
                } else {
                    $this->_helper->FlashMessenger('Mauvaise authentification', 'error');
                    Phoenix_Auth_User::logout();
                    $this->_helper->redirector('', 'auth');
                }
            } catch (Exception $oException) {
                // 38239 If Any exception happens, we log the reel exception, display a friendly error
                // Message to the user and redirect to the authentification page after clearing the user identity data
                Phoenix_Logger::getInstanceErreur()->handleException($oException);
                $this->_helper->FlashMessenger('Une erreur système est survenue lors de la connexion', 'error');
                Zend_Auth::getInstance()->clearIdentity();
                Phoenix_Auth_User::logout();
                $this->_helper->redirector('index', 'auth', 'default');
            }
        }
        
        $oAuthUser = Zend_Auth::getInstance()->getStorage()->read();
        if ($oAuthUser instanceof Phoenix_Auth_User_Abstract) {  
                $this->view->oraganisation = $oAuthUser->getOrganisationModel();
        }else {
              $this->_helper->FlashMessenger('Mauvaise authentification', 'error');
              Phoenix_Auth_User::logout();
              $this->_helper->redirector('index', 'auth', 'default');
            }
    }
    
    /**
     * Performs authentication
     */
    public function loginAction()
    {
        
        $this->_helper->viewRenderer->setNoRender(true);
        
        // Redirect to home page if user is authenticated
        $this->preventReAuth();

        if ($this->getRequest()->isPost()) {
            $sLogin = $this->_request->getPost('login');
            $sPassword = $this->_request->getPost('password');

            try {
                if (($oAuthUser = Phoenix_Auth_User::authenticate($sLogin, $sPassword)) instanceof Phoenix_Auth_User_Human) 
                {
                    if( count($oAuthUser->getOrganisationModel()) > 1){
                         $this->_helper->redirector('organisation', 'auth', 'default');
                         exit(0);
                    }
                    $oAuthUser->setUserCurrentOrganisation(current($oAuthUser->getOrganisationModel()));
                    $oZendSessionNamespace = new Zend_Session_Namespace('My_Controller_Plugin_Auth');
                    if (empty($oZendSessionNamespace->requestUri)) {
                        $this->_helper->redirector('index', 'accueil', 'default');
                        exit(0);    
                    }
                    $this->_redirect($oZendSessionNamespace->requestUri);
                } else {
                    $this->_helper->FlashMessenger('Mauvais identifiant/mot de passe', 'error');
                    $this->_helper->redirector('', 'auth');
                }
            } catch (Exception $oException) {
                // 38239 If Any exception happens, we log the reel exception, display a friendly error
                // Message to the user and redirect to the authentification page after clearing the user identity data
                Phoenix_Logger::getInstanceErreur()->handleException($oException);
                $this->_helper->FlashMessenger('Une erreur système est survenue lors de la connexion', 'error');
                Zend_Auth::getInstance()->clearIdentity();
                $this->_helper->redirector('index', 'auth', 'default');
            }
        }
    }

    /**
     * Performs log-out
     */
    public function logoutAction()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);
        Phoenix_Auth_User::logout();
        $this->_helper->redirector('index', 'auth', 'default');
    }
}
