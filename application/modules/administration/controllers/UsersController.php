<?php

class Administration_UsersController extends My_Controller_Action
{

    /**
     *
     * @var \Phoenix_Administration_Users_Service_UserService
     */
    protected $adminstrationUsersService;

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->view->paginator = $this->getAdministrationUsersService()->getUsersPaginator((int) $this->getParam('page'), (int) $this->getParam('find_r_user_type_id'));
    }

    /**
     * Opens a pop up to manage a given role
     *
     * @throws \LogicException
     */
    public function loaduserdatamanagementpopupAction()
    {
        $this->_helper->layout->disableLayout();
        if (! $this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        $oAdministrationUsersService = $this->getAdministrationUsersService();
        $this->view->userCreationAllowed = Phoenix_Auth_User::getAuthenticationEngine()->allowsUserCreation();
        $this->view->selectListLanguages = $oAdministrationUsersService->getUiSupportedLanguages();
        $iUserId = (int) $this->getRequest()->getPost('userId');
        if ($iUserId) {
            $this->view->user = $oAdministrationUsersService->getUserByUserId($iUserId);
        }
    }
    
    /**
     * Create a new user
     *
     * @throws \LogicException
     */
    public function createAction()
    {
        $oRequest = $this->getRequest();

        if (! $oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $oAdministrationUsersService = $this->getAdministrationUsersService();
        if (is_array($aErrors = $oAdministrationUsersService->createUser($this->getRequest()->getPost()))) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->getHelper('HtmlList')->htmlList($aErrors)));
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, $this->view->translate('msg_create_user_success')));
        }
    }
    
    /**
     * Updates user data
     *
     * @throws \LogicException
     */
    public function saveuserdataAction()
    {
        $oRequest = $this->getRequest();

        if (! $oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $oAdministrationUsersService = $this->getAdministrationUsersService();
        if (is_array($aErrors = $oAdministrationUsersService->updateUser($this->getRequest()->getPost()))) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->getHelper('HtmlList')->htmlList($aErrors)));
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, $this->view->translate('msg_save_user_success')));
        }
    }

    /**
     * Deletes a user record
     *
     * @throws \LogicException
     */
    public function deleteuserrecordAction()
    {

        $oRequest = $this->getRequest();

        if (! $oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        $iUserId = (int) $oRequest->getPost('userId');
        if (! $iUserId) {
            throw new \LogicException('userId was not found in POST parameters');
        }

        $oAdministrationUsersService = $this->getAdministrationUsersService();
        if ($oAdministrationUsersService->deleteUserRecord($iUserId)) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate('msg_delete_user_success') . '.'));
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('msg_delete_user_failure') . '.'));
        }
    }

    /**
     * Lazy loads an adminstrationUsersService
     *
     * @return \Phoenix_Administration_Users_Service_UsersService
     * @throws \LogicException
     */
    public function getAdministrationUsersService()
    {
        // Lazy load if undefined
        if ($this->adminstrationUsersService === null) {
            $this->adminstrationUsersService = new \Phoenix_Administration_Users_Service_UsersService();
        }
        if ($this->adminstrationUsersService instanceof \Phoenix_Administration_Users_Service_UsersService) {
            return $this->adminstrationUsersService;
        }
        throw new \LogicException('Property "adminstrationUsersService" expects an instance of \Phoenix_Administration_Users_Service_UsersService, "' . (is_object($this->adminstrationUsersService) ? get_class($this->adminstrationUsersService) : gettype($this->adminstrationUsersService)) . '" defined');
    }
}
