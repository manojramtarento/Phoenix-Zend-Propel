<?php


class ForbiddenController extends My_Controller_Action
{

    public function init()
    {
        $this->_helper->ContextSwitch()->addActionContext('index', 'json')->initContext();
    }

    public function indexAction()
    {


        if ($this->getRequest()->isXmlHttpRequest()) {
            $aParams = $this->_request->getParams();

            $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, array(
                'msg' => 'Vous n\'avez pas le droit d’exécuter cette action',
            ));
            if (isset($aParams['fieldId'])) {
                $oResponse->fieldId = $aParams['fieldId'];
            }

            $this->_helper->Json($oResponse);
        } else {
            $oUser = Phoenix_Auth_User::getInstance();
            if (! $oUser) {
                $this->_helper->layout()->setLayout('auth');
            }
        }
    }

}
