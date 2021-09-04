<?php

class Administration_RolesController extends My_Controller_Action
{

    /**
     *
     * @var \Phoenix_Administration_Roles_Service_RolesService
     */
    protected $adminstrationRolesService;

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->view->paginator = $this->getAdminstrationRolesService()->getRolesPaginator((int) $this->_getParam('page'));
		$this->view->findword =  $this->_getParam('findword');
    }

    /**
     * Opens a pop up to manage a given role
     *
     * @throws \LogicException
     */
    public function loadrolemanagementpopupAction()
    {
        $this->_helper->layout->disableLayout();
        if (!$this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $iRoleId = (int) $this->getRequest()->getPost('roleId');
        $sRoleName = $this->getRequest()->getPost('roleName');
        $oAdminstationRolesService = $this->getAdminstrationRolesService();
        if ($iRoleId) {
            if (!$sRoleName) {
                throw new \LogicException('roleName was not found in POST parameters');
            }
            $this->view->usersHavingRole = $oAdminstationRolesService->getUsersHavingRoleByRoleId($iRoleId);
            $this->view->usersLackingRole = $oAdminstationRolesService->getUsersLackingRole(array_keys($this->view->usersHavingRole));
            $this->view->roleId = $iRoleId;
            $this->view->roleName = $sRoleName;
        } else {
            $this->view->usersHavingRole = array();
            $this->view->usersLackingRole = $oAdminstationRolesService->getAvailableUsers();
            $this->view->roleName = '';
        }
    }

    /**
     * Updates role members
     *
     * @throws \LogicException
     */
    public function saveroleAction()
    {
        if (!$this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $aData = $this->getRequest()->getPost();

        if (empty($aData['roleName'])) {
            $this->_helper->FlashMessenger($this->view->translate('msg_role_name_is_missing_error'), 'error');
            $this->_redirect($this->_request->getHeader('Referer'), array('prependBase' => false));
        }

        $iRoleId = isset($aData['roleId']) ? (int) $aData['roleId'] : null;
        $aResponse = $this->getAdminstrationRolesService()->saveRoleSettings($iRoleId, $aData['roleName'], isset($aData['usershavingrole']) ? $aData['usershavingrole'] : array());

        if ($aResponse) {
            $oCurrentView = $this->view;
            $this->_helper->FlashMessenger(array_map(function ($sErrosMessage) use ($oCurrentView) {
                        return $oCurrentView->translate($sErrosMessage);
            }, My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($aResponse)), 'error');
        } else {
            $sSuccessMessage = isset($aData['roleId']) ? 'msg_update_user_role_success' : 'msg_create_user_role_success';
            $this->_helper->FlashMessenger($this->view->translate($sSuccessMessage), 'success');
        }
        $this->_redirect($this->_request->getHeader('Referer'), array('prependBase' => false));
    }

    /**
     * Deletes a role
     */
    public function deleteroleAction()
    {
        if ($this->_request->isPost()) {
            $iRoleId = (int) $this->getRequest()->getPost('roleId');
            if (($aResponse = $this->getAdminstrationRolesService()->deleteRole($iRoleId))) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate(reset($aResponse)) . '.'));
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate('msg_delete_role_success') . '.'));
            }
        }
    }

    /**
     * Lazy loads an adminstrationRolesService
     *
     * @return \Phoenix_Administration_Roles_Service_RolesService
     * @throws \LogicException
     */
    public function getAdminstrationRolesService()
    {
        // Lazy load if undefiend
        if ($this->adminstrationRolesService === null) {
            $this->adminstrationRolesService = new \Phoenix_Administration_Roles_Service_RolesService();
        }
        if ($this->adminstrationRolesService instanceof \Phoenix_Administration_Roles_Service_RolesService) {
            return $this->adminstrationRolesService;
        }
        throw new \LogicException('Property "adminstrationRolesService" expects an instance of \Phoenix_Administration_Roles_Service_RolesService, "' . (is_object($this->adminstrationRolesService) ? get_class($this->adminstrationRolesService) : gettype($this->adminstrationRolesService)) . '" defined');
    }
}
