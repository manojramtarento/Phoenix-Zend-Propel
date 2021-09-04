<?php

class Administration_RcurrenciesController extends My_Controller_Action
{

    /**
     *
     * @var \Phoenix_Administration_RCurrencies_Service_RCurrenciesService
     */
    protected $adminstrationRCurrenciesService;

    /**
     * Index action
     */
    public function indexAction()
    {
        $oAdminstrationRCurrenciesService = $this->getAdminstrationRCurrenciesService();
        if ($this->getParam('format') === 'csv') {
            // export context
            My_File_Transfer::getInstance()->send($oAdminstrationRCurrenciesService->buildExport());
        } else {
            // View context
            $this->view->paginator = $this->getAdminstrationRCurrenciesService()->getRCurrenciesPaginator((int) $this->getParam('page'));
        }
    }

    /**
     * Opens a pop up to edit a currency
     *
     * @throws \LogicException
     */
    public function loadrcurrencyeditionpopupAction()
    {
        $this->_helper->layout->disableLayout();
        if (!$this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $iRCurrencyId = (int) $this->getRequest()->getPost('r_currency_id');
        if ($iRCurrencyId) {
            $oAdminstrationRCurrenciesService = $this->getAdminstrationRCurrenciesService();
            $this->view->rCurrency = $oAdminstrationRCurrenciesService->getRCurrencyByRCurrencyId($iRCurrencyId);
        }
    }

    /**
     * Updates a currency data
     *
     * @throws \LogicException
     */
    public function savercurrencydataAction()
    {
        $oRequest = $this->getRequest();

        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $aData = $this->getRequest()->getPost();
        $oAdminstrationRCurrenciesService = $this->getAdminstrationRCurrenciesService();
        if ($aErrors = $oAdminstrationRCurrenciesService->saveRCurrencyData($aData)) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->getHelper('HtmlList')->htmlList($aErrors)));
        } else {
            $sSuccessMessage = ($aData['r_currency_id']) ? 'msg_update_r_currency_success' : 'msg_create_r_currency_success';
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, $this->view->translate($sSuccessMessage)));
        }
    }

    /**
     * Deletes a currency record
     *
     * @throws \LogicException
     */
    public function deletercurrencyrecordAction()
    {

        $oRequest = $this->getRequest();

        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        $iRCurrencyId = (int) $oRequest->getPost('r_currency_id');
        if (!$iRCurrencyId) {
            throw new \LogicException('r_currency_id was not found in POST parameters');
        }

        $oAdminstrationRCurrenciesService = $this->getAdminstrationRCurrenciesService();
        if ($oAdminstrationRCurrenciesService->deleteRCurrencyRecord($iRCurrencyId)) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate('msg_delete_r_currency_success') . '.'));
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('msg_delete_r_currency_failure') . '.'));
        }
    }

    /**
     * Lazy loads an adminstrationRCurrenciesService
     *
     * @return \Phoenix_Administration_RCurrencies_Service_RCurrenciesService
     * @throws \LogicException
     */
    public function getAdminstrationRCurrenciesService()
    {
        // Lazy load if undefined
        if ($this->adminstrationRCurrenciesService === null) {
            $this->adminstrationRCurrenciesService = new \Phoenix_Administration_RCurrencies_Service_RCurrenciesService();
        }
        if ($this->adminstrationRCurrenciesService instanceof \Phoenix_Administration_RCurrencies_Service_RCurrenciesService) {
            return $this->adminstrationRCurrenciesService;
        }
        throw new \LogicException('Property "adminstrationRCurrenciesService" expects an instance of \Phoenix_Administration_RCurrencies_Service_RCurrenciesService, "' . (is_object($this->adminstrationRCurrenciesService) ? get_class($this->adminstrationRCurrenciesService) : gettype($this->adminstrationRCurrenciesService)) . '" defined');
    }
}
