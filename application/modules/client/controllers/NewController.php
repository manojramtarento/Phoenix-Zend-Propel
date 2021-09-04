<?php

class Client_NewController extends My_Controller_Action
{

    /**
     * Client account creation
     *
     * @throws \RuntimeException
     */
    public function indexAction()
    {
        // Processing the form data
        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();

            $oClientOrErrors = Clients::createClientFromData($aData, $_FILES);
            if ($oClientOrErrors instanceof Clients) {
                $oZendControllerActionHelperRedirector = new Zend_Controller_Action_Helper_Redirector();
                return $oZendControllerActionHelperRedirector->gotoUrlAndExit('/client/fiche/index/cl_id/' . $oClientOrErrors->getClId());
            }
            $this->_helper->PropelFailures()->registerErrors($oClientOrErrors);
        }
    }
}
