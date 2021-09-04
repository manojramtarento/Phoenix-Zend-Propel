<?php

class Administration_RlanguagesController extends My_Controller_Action
{

    /**
     *
     * @var \Phoenix_Administration_RLanguages_Service_RLanguagesService
     */
    protected $adminstrationRLangagesService;

    /**
     * Index action
     */
    public function indexAction()
    {

        $oAdminstrationRLanguagesService = $this->getAdminstrationRLanguagesService();

        if ($this->getParam('format') === 'csv') {
            // export context
            My_File_Transfer::getInstance()->send($oAdminstrationRLanguagesService->buildExport());
        } else {
            // View context
            $this->view->paginator = $this->getAdminstrationRLanguagesService()->getRLanguagesPaginator((int) $this->getParam('page'));
        }
    }

    /**
     * Opens a pop up to edit a language
     *
     * @throws \LogicException
     */
    public function loadrlanguageeditionpopupAction()
    {
        $this->_helper->layout->disableLayout();
        if (!$this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $sRLangCode = $this->getRequest()->getPost('r_lang_code');
        if ($sRLangCode) {
            $oAdminstrationRLanguagesService = $this->getAdminstrationRLanguagesService();
            $this->view->rLanguage = $oAdminstrationRLanguagesService->getRLanguageByRLangCode($sRLangCode);
        }
    }

    /**
     * Updates a language data
     *
     * @throws \LogicException
     */
    public function saverlanguagedataAction()
    {
        $oRequest = $this->getRequest();

        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $aData = $this->getRequest()->getPost();
        $oAdminstrationRLanguagesService = $this->getAdminstrationRLanguagesService();
        if (is_array($aErrors = $oAdminstrationRLanguagesService->saveRLanguageData($aData))) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->getHelper('HtmlList')->htmlList($aErrors)));
        } else {
            $sSuccessMessage = (!empty($aData['old_r_lang_code'])) ? 'msg_update_r_language_success' : 'msg_create_r_language_success';
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, $this->view->translate($sSuccessMessage)));
        }
    }

    /**
     * Deletes a language record
     *
     * @throws \LogicException
     */
    public function deleterlanguagerecordAction()
    {

        $oRequest = $this->getRequest();

        if (!$oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        $sRLangCode = $oRequest->getPost('r_lang_code');
        if (!$sRLangCode) {
            throw new \LogicException('r_lang_code was not found in POST parameters');
        }

        $oAdminstrationRLanguagesService = $this->getAdminstrationRLanguagesService();
        if ($oAdminstrationRLanguagesService->deleteRLanguageRecord($sRLangCode)) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate('msg_delete_r_language_success') . '.'));
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('msg_delete_r_language_failure') . '.'));
        }
    }

    /**
     * Lazy loads an adminstrationRLangagesService
     *
     * @return \Phoenix_Administration_RLanguages_Service_RLanguagesService
     * @throws \LogicException
     */
    public function getAdminstrationRLanguagesService()
    {
        // Lazy load if undefined
        if ($this->adminstrationRLangagesService === null) {
            $this->adminstrationRLangagesService = new \Phoenix_Administration_RLanguages_Service_RLanguagesService();
        }
        if ($this->adminstrationRLangagesService instanceof \Phoenix_Administration_RLanguages_Service_RLanguagesService) {
            return $this->adminstrationRLangagesService;
        }
        throw new \LogicException('Property "adminstrationRLangagesService" expects an instance of \Phoenix_Administration_RLanguages_Service_RLanguagesService, "' . (is_object($this->adminstrationRLangagesService) ? get_class($this->adminstrationRLangagesService) : gettype($this->adminstrationRLangagesService)) . '" defined');
    }
}
