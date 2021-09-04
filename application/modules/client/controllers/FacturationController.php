<?php

class Client_FacturationController extends My_Controller_Action
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $iClId = $this->_getParam('cl_id');
        $oClients = ClientsQuery::create()->findOneByClId($iClId);
        $aData = $oClients->toArray(BasePeer::TYPE_FIELDNAME);
        $this->view->assign($aData);

        $oClientFactureOptions = ClientFactureOptionsQuery::create()->findOneByClId($iClId);
        if (!$oClientFactureOptions instanceof ClientFactureOptions) {
            $oClientFactureOptions = new ClientFactureOptions;
            $oClientFactureOptions->setClId($iClId);
            $oClientFactureOptions->save();
        }

        $aData = $oClientFactureOptions->toArray(BasePeer::TYPE_FIELDNAME);

        // Retrieve country name
        if (!empty($aData['cl_fact_country_id']) && ($oRCountry = RCountriesQuery::create()->findPk($aData['cl_fact_country_id'])) instanceof RCountries) {
            $aData['cl_fact_country_name'] = $oRCountry->getRCountryName();
        }

        $this->view->assign($aData);
    }

    /**
     * AJAX function. Update fields
     */
    public function updateAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->updateField(array('ClientFactureOptions'));
            $this->_helper->json($oResponse);
        }
    }

    public function updateecheanceAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->updateField(array('ClientFactureOptions'));
            $this->_helper->json($oResponse);
        }
    }
}
