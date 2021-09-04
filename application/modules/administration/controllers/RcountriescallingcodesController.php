<?php

class Administration_RcountriescallingcodesController extends My_Controller_Action
{

    /**
     *
     * @var \Phoenix_Administration_RCountriesCallingCodes_Service_RCountriesCallingCodesService
     */
    protected $adminstrationRCountriesCallingCodesService;

    /**
     * Index action
     */
    public function indexAction()
    {

        $oAdminstrationRCountriesCallingCodesService = $this->getAdminstrationRCountriesCallingCodesService();

        if ($this->getParam('format') === 'csv') {
            // export context
            My_File_Transfer::getInstance()->send($oAdminstrationRCountriesCallingCodesService->buildExport());
        } else {
            // View context
            $this->view->paginator = $this->getAdminstrationRCountriesCallingCodesService()->getRCountriesCallingCodesPaginator((int) $this->getParam('page'));
        }
    }

    /**
     * Opens a pop up to edit a calling code
     *
     * @throws \LogicException
     */
    public function loadrcountrycallingcodeeditionpopupAction()
    {
        $this->_helper->layout->disableLayout();
        if (!$this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $iRCountryCallingcodeId = (int) $this->getRequest()->getPost('r_country_calling_code_id');
        if ($iRCountryCallingcodeId) {
            $oAdminstrationRCountryCallingCodeService = $this->getAdminstrationRCountriesCallingCodesService();
            $this->view->rCountryCallingCode = $oAdminstrationRCountryCallingCodeService->getRCountryCallingCodeByRCountryCallingCodeId($iRCountryCallingcodeId);
        }
    }

    /**
     * Updates a country calling code data
     *
     * @throws \LogicException
     */
    public function savercountrycallingcodedataAction()
    {
        $oRequest = $this->getRequest();

        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $aData = $this->getRequest()->getPost();

        $oAdminstrationRCountryCallingCodeService = $this->getAdminstrationRCountriesCallingCodesService();
        if ($aErrors = $oAdminstrationRCountryCallingCodeService->saveRCountryCallingCodeData($aData)) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->getHelper('HtmlList')->htmlList($aErrors)));
        } else {
            $sSuccessMessage = ($aData['r_country_calling_code_id']) ? 'msg_update_r_country_calling_code_success' : 'msg_create_r_country_calling_code_success';
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, $this->view->translate($sSuccessMessage)));
        }
    }

    /**
     * Deletes a counrty calling code record
     *
     * @throws \LogicException
     */
    public function deletercountrycallingcoderecordAction()
    {

        $oRequest = $this->getRequest();

        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        $iRCountryCallingcodeId = (int) $oRequest->getPost('r_country_calling_code_id');
        if (!$iRCountryCallingcodeId) {
            throw new \LogicException('r_country_calling_code_id was not found in POST parameters');
        }

        $oAdminstrationRCountryCallingCodeService = $this->getAdminstrationRCountriesCallingCodesService();
        if ($oAdminstrationRCountryCallingCodeService->deleteRCountryCallingCodeRecord($iRCountryCallingcodeId)) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate('msg_delete_r_country_calling_code_success') . '.'));
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('msg_delete_r_country_calling_code_failure') . '.'));
        }
    }

    /**
     * Lazy loads an adminstrationRCountriesCallingCodesService
     *
     * @return \Phoenix_Administration_RCountriesCallingCodes_Service_RCountriesCallingCodesService
     * @throws \LogicException
     */
    public function getAdminstrationRCountriesCallingCodesService()
    {
        // Lazy load if undefined
        if ($this->adminstrationRCountriesCallingCodesService === null) {
            $this->adminstrationRCountriesCallingCodesService = new \Phoenix_Administration_RCountriesCallingCodes_Service_RCountriesCallingCodesService();
        }
        if ($this->adminstrationRCountriesCallingCodesService instanceof \Phoenix_Administration_RCountriesCallingCodes_Service_RCountriesCallingCodesService) {
            return $this->adminstrationRCountriesCallingCodesService;
        }
        throw new \LogicException('Property "adminstrationRCountriesCallingCodesService" expects an instance of \Phoenix_Administration_RCountriesCallingCodes_Service_RCountriesCallingCodesService, "' . (is_object($this->adminstrationRCountriesCallingCodesService) ? get_class($this->adminstrationRCountriesCallingCodesService) : gettype($this->adminstrationRCountriesCallingCodesService)) . '" defined');
    }
}
