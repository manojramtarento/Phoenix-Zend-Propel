<?php

class Administration_RcountriesController extends My_Controller_Action
{

    /**
     * @var \Phoenix_Administration_RCountries_Service_RCountriesService
     */
    protected $adminstrationRCountriesService;

    /**
     * Index action
     */
    public function indexAction()
    {
        $oAdminstrationRCountriesService = $this->getAdminstrationRCountriesService();
        $aParams = $this->_request->getParams();
        if ($this->getParam('format') === 'csv') {
            // export context
            My_File_Transfer::getInstance()->send($oAdminstrationRCountriesService->buildExport($aParams));
        } else {
            // View context
            $this->view->paginator = $oAdminstrationRCountriesService->getRCountriesPaginator((int) $this->getParam('page'), $aParams);
        }
    }

    /**
     * Opens a pop up to edit a country
     *
     * @throws \LogicException
     */
    public function loadrcountryeditionpopupAction()
    {
        $this->_helper->layout->disableLayout();
        if (!$this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $iRCountryId = (int) $this->getRequest()->getPost('r_country_id');
        $oAdminstrationRCountriesService = $this->getAdminstrationRCountriesService();
        if ($iRCountryId) {
            $this->view->rCountry = $oAdminstrationRCountriesService->getRCountryByRCountryId($iRCountryId);
        }
        $this->view->rCultures = $oAdminstrationRCountriesService->getRCulturesList();
    }

    /**
     * Updates a country data
     *
     * @throws \LogicException
     */
    public function savercountrydataAction()
    {
        $oRequest = $this->getRequest();

        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $aData = $this->getRequest()->getPost();

        if ($aErrors = $this->getAdminstrationRCountriesService()->saveRCountryData($aData)) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->getHelper('HtmlList')->htmlList($aErrors)));
        } else {
            $sSuccessMessage = $aData['r_country_id'] ? 'msg_update_r_country_success' : 'msg_create_r_r_country_success';
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, $this->view->translate($sSuccessMessage)));
        }
    }

    /**
     * Deletes a country record
     *
     * @throws \LogicException
     */
    public function deletercountryrecordAction()
    {
        $oRequest = $this->getRequest();

        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        $iRCountryId = (int) $oRequest->getPost('r_country_id');
        if (!$iRCountryId) {
            throw new \LogicException('r_country_id was not found in POST parameters');
        }

        if ($this->getAdminstrationRCountriesService()->deleteRCountryRecord($iRCountryId)) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate('msg_delete_r_country_success') . '.'));
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('msg_delete_r_country_failure') . '.'));
        }
    }

    /**
     * @throws \LogicException
     */
    function culturelanguagesAction()
    {
        $oRequest = $this->getRequest();
        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (!$oRequest->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $oRequest->getPost();
        if (!isset($aParams['r_culture_ids'])) {
            throw new \LogicException('"' . __METHOD__ . '" expects parameter "r_culture_ids" to be given. But these parameters received', print_r($aParams, true));
        }

        $this->_helper->Json($aParams['r_culture_ids'] ? $this->getAdminstrationRCountriesService()->getLanguagesLabelsByRCulturesIds($aParams['r_culture_ids']) : array());
    }

    /**
     * Lazy loads an adminstrationRCcountriesService
     *
     * @return \Phoenix_Administration_RCountries_Service_RCountriesService
     * @throws \LogicException
     */
    public function getAdminstrationRCountriesService()
    {
        // Lazy load if undefined
        if ($this->adminstrationRCountriesService === null) {
            $this->adminstrationRCountriesService = new \Phoenix_Administration_RCountries_Service_RCountriesService();
        }
        if ($this->adminstrationRCountriesService instanceof \Phoenix_Administration_RCountries_Service_RCountriesService) {
            return $this->adminstrationRCountriesService;
        }
        throw new \LogicException('Property "adminstrationRCountriesService" expects an instance of \Phoenix_Administration_RCountries_Service_RCountriesService, "' . (is_object($this->adminstrationRCountriesService) ? get_class($this->adminstrationRCountriesService) : gettype($this->adminstrationRCountriesService)) . '" defined');
    }
}
