<?php

class Administration_RculturesController extends My_Controller_Action
{

    /**
     * @var \Phoenix_Administration_RCultures_Service_RCulturesService
     */
    protected $adminstrationRCulturesService;

    /**
     * Index action
     */
    public function indexAction()
    {
        $oAdminstrationRCulturesService = $this->getAdminstrationRCulturesService();
        if ($this->getParam('format') === 'csv') {
            // export context
            My_File_Transfer::getInstance()->send($oAdminstrationRCulturesService->buildExport());
        } else {
            // View context
            $this->view->paginator = $oAdminstrationRCulturesService->getRCulturesPaginator((int) $this->getParam('page'));
        }
    }

    /**
     * Opens a pop up to edit a language culture
     *
     * @throws \LogicException
     */
    public function loadrcultureeditionpopupAction()
    {
        $this->_helper->layout->disableLayout();
        if (!$this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $iRCultureId = (int) $this->getRequest()->getPost('r_culture_id');
        if ($iRCultureId) {
            $this->view->rCulture = $this->getAdminstrationRCulturesService()->getRCultureByRCultureId($iRCultureId);
        }
    }

    /**
     * Updates a language culture data
     *
     * @throws \LogicException
     */
    public function saverculturedataAction()
    {
        $oRequest = $this->getRequest();

        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $aData = $this->getRequest()->getPost();

        if ($aErrors = $this->getAdminstrationRCulturesService()->saveRCultureData($aData)) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->getHelper('HtmlList')->htmlList($aErrors)));
        } else {
            $sSuccessMessage = ($aData['r_culture_id']) ? 'msg_update_r_culture_success' : 'msg_create_r_r_culture_success';
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, $this->view->translate($sSuccessMessage)));
        }
    }

    /**
     * Deletes a language culture record
     *
     * @throws \LogicException
     */
    public function deleterculturerecordAction()
    {

        $oRequest = $this->getRequest();

        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        $iRCultureId = (int) $oRequest->getPost('r_culture_id');
        if (!$iRCultureId) {
            throw new \LogicException('r_culture_id was not found in POST parameters');
        }

        if ($this->getAdminstrationRCulturesService()->deleteRCultureRecord($iRCultureId)) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate('msg_delete_r_culture_success') . '.'));
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('msg_delete_r_culture_failure') . '.'));
        }
    }

    /**
     * Lazy loads an adminstrationRCculturesService
     *
     * @return \Phoenix_Administration_RCultures_Service_RCulturesService
     * @throws \LogicException
     */
    public function getAdminstrationRCulturesService()
    {
        // Lazy load if undefined
        if ($this->adminstrationRCulturesService === null) {
            $this->adminstrationRCulturesService = new \Phoenix_Administration_RCultures_Service_RCulturesService();
        }
        if ($this->adminstrationRCulturesService instanceof \Phoenix_Administration_RCultures_Service_RCulturesService) {
            return $this->adminstrationRCulturesService;
        }
        throw new \LogicException('Property "adminstrationRCulturesService" expects an instance of \Phoenix_Administration_RCultures_Service_RCulturesService, "' . (is_object($this->adminstrationRCulturesService) ? get_class($this->adminstrationRCulturesService) : gettype($this->adminstrationRCulturesService)) . '" defined');
    }
}
