<?php

class ErrorController extends My_Controller_Action
{

    public function errorAction()
    {


        //rollback des transaction en cours
        Propel::getConnection()->forceRollBack();


        $errors = $this->_getParam('error_handler');

        
        //38239 Log error message with some useful data
         
        $oUser = Phoenix_Auth_User::getInstance();
        $sUserName = $oUser ? (is_string($oUser) ? $oUser : $oUser->getNomPrenom()) : 'Non connecté';
        $sErreur = '- Utilisateur : ' . $sUserName . '
                    - Type erreur : ' . $errors->type . '
                    - Erreur : ' . $errors->exception->getFile() . ' (' . $errors->exception->getLine() . ') : ' . $errors->exception->getMessage() . '
                    - Trace : ' . PHP_EOL . $errors->exception->getTraceAsString();
        Phoenix_Logger::getInstanceErreur()->logError($sErreur, 'E_ERROR', $errors->exception->getCode());
        
        if(!$oUser){
            $this->_helper->layout()->setLayout('auth');
        }

        /**
         * comportement pour php cli
         */
        if (PHP_SAPI == "cli") {
            echo 'Erreur : ' . PHP_EOL . $sErreur;
        } elseif ($this->_request->isXmlHttpRequest()) {
            /**
             * comportement pour requêtes ajax
             */
            $this->_helper->ViewRenderer->setNoRender(true);
            $this->getResponse()->clearBody();
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(true, $errors->exception->getFile() . ' (' . $errors->exception->getLine() . ') : ' . $errors->exception->getMessage() . '<br />' . nl2br($errors->exception->getTraceAsString())));
        } else {
            /**
             * comportement pour requête http classique
             */
            if (!$errors || !$errors instanceof ArrayObject) {
                $this->view->message = 'You have reached the error page';
                return;
            }

            switch ($errors->type) {
                case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ROUTE:
                case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
                case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
                    // 404 error -- controller or action not found
                    $this->getResponse()->setHttpResponseCode(404);
                    $this->view->message = 'Page not found';
                    break;
                default:
                    // application error
                    $this->getResponse()->setHttpResponseCode(500);
                    $this->view->message = 'Application error';
                    break;
            }

            // conditionally display exceptions
            if ($this->getInvokeArg('displayExceptions') == true) {
                $this->view->exception = $errors->exception;
            }

            $this->view->request = $errors->request;
        }
    }
}
