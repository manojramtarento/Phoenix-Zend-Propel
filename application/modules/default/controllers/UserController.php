<?php

class UserController extends My_Controller_Action
{

    public function indexAction()
    {
        $oFileSignature = Phoenix_Auth_User::getInstance()->getUserModel()->getUploadedSignature();

        if ($oFileSignature != null) {
            $this->view->showdeletesignature = true;
            $this->view->signature = $oFileSignature->getFileContent();
            $this->view->filesignatureid = $oFileSignature->getFileId();
        } else {
            $this->view->showdeletesignature = false;
            $this->view->signature = Phoenix_Auth_User::getInstance()->getUserModel()->getDefaultSignature();
        }

        $this->view->user = Phoenix_Auth_User::getInstance();
        $this->view->userLanguage = UsersQuery::create()->findPk($this->view->user->getUserId())->getUserLanguage();
        $this->view->selectListLanguages = include __DIR__ . '/../configs/UserLanguages.php';
        $this->view->userCreationAllowed = Phoenix_Auth_User::getAuthenticationEngine()->allowsUserCreation();
    }

    /**
     * Upload signature
     */
    public function uploadsignatureAction()
    {
        $this->_helper->ViewRenderer->setNoRender(true);
        $aParams = $this->_request->getParams();
        $aErrors = array();
        if ($this->_helper->FileTransfer()->isUploaded()) {
            $oUser = UsersQuery::create()->findPk($aParams['user_id']);
            try {
                if ($oUser->addFileSigature($this->_helper->FileTransfer()->receive()) === false) {
                    $aErrors = $oUser->getValidationFailures();
                    $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
                }
            } catch (Exception $oException) {
                $aErrors[] = $oException->getMessage();
            }
        }

        if ($aErrors) {
            $this->_helper->FlashMessenger($aErrors, 'error');
        }

        $this->_helper->Redirector('index');
    }
    
    /**
     * Update user password
     *
     * @throws \LogicException
     */
    public function updatepasswordAction()
    {
        $oRequest = $this->getRequest();

        if (! $oRequest->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }
        $oAdministrationUsersService = new \Phoenix_Administration_Users_Service_UsersService();
        if (is_array($aErrors = $oAdministrationUsersService->updateUser(array(
                'user_id' => Phoenix_Auth_User::getInstance()->getUserId(),
                'user_password' => $this->getRequest()->getPost('user_password'),
            )))) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->FlashMessenger($aErrors, 'error');
        } else {
            $this->_helper->FlashMessenger($this->view->translate('Mot de passe mis à jour avec succès'), 'default');
        }
        $this->_helper->Redirector('index');
    }

    /**
     * Delete signature
     */
    public function deletesignatureAction()
    {
        $this->_helper->ViewRenderer->setNoRender(true);
        $aParams = $this->_request->getParams();

        $oFile = FilesQuery::create()->findPk($aParams['fileid']);
        $oFile->delete();
        $this->_helper->Redirector('index');
    }

    /**
     * Change user default Language
     */
    public function changelanguageAction()
    {
        $aParams = $this->_request->getParams();
        $oUser = UsersQuery::create()->findPk($aParams['user_id']);
        $oUser->setUserLanguage($aParams['language']);
        $oUser->save();

        Phoenix_Auth_User::refreshAuthenticatedUser();

        $this->_helper->Redirector('index');
    }
}
