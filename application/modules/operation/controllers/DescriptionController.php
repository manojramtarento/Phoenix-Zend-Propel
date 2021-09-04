<?php

class Operation_DescriptionController extends My_Controller_Action
{

    /**
     * @var \Phoenix_Operation_Description_Service_DescriptionService
     */
    protected $operationDescriptionService;


    /**
     * Display the operation description page
     */
    public function indexAction()
    {
        $aParams = $this->_request->getParams();
        $oOperation = OperationsQuery::create()->filterByPrimaryKey($aParams['op_id'])
            ->leftJoinClients()
            ->with('Clients')
            ->findOne();

        $sParentOperationNumber = '-';
        if ($oOperation instanceof Operations) {
            $this->view->operation = $oOperation;
            // Retrieving operation parent id, when the operation is a copy
            $oOriginalOperationId = $oOperation->getOpParentId();

            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $this->view->ClientContacts = $oZendDbSelect->from('contacts', array('ct_id'))
                ->where('cl_id = ?', $oOperation->getOpClId())
                ->query()->fetchAll();

            $oParentOperation = OperationsQuery::create()->findPk($oOriginalOperationId);

            if ($oParentOperation instanceof Operations) {
                // Retries parent operation Number
                $sParentOperationNumber = $oParentOperation->getOpNumber();
            }

            if ($oOperation->getOperationTemplate()) {
                if (($oOperationRelatedTemplate = $oOperation->getOperationTemplate()) instanceof \ROperationTypeSubTpl) {
                    $sOriginalOperationTemplate = $oOperation->getOperationOstTplId() . ', ' . $oOperationRelatedTemplate->getOstTplLibelle();
                } else {
                    $sOriginalOperationTemplate = $this->view->translate('message_deleted_template');
                }
            } else {
                $sOriginalOperationTemplate = $this->view->translate('message_no_template_used');
            }





            $this->view->original_operation_number = $sParentOperationNumber;
            $this->view->original_operation_template = $sOriginalOperationTemplate;
            $this->view->activitiesKpis = RActivityKpiQuery::create()->find();
            $this->view->countDetachedOperationOptions = \ROperationOptionsQuery::create()->countDetachedOperationOptions();
        } else {
            $oZendControllerActionHelperRedirector = new Zend_Controller_Action_Helper_Redirector();
            $oZendControllerActionHelperRedirector->gotoUrlAndExit('/operation/listing/index');
        }
    }

    /**
     * Change of the customer related to the transaction
     */
    public function changeclientAction()
    {

        $aParams = $this->_request->getParams();

        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
        $oOperation->setOpClId($aParams['op_cl_id']);
        $oOperation->setOpCtFactAddrId(null);
        if ($oOperation->validate()) {
            $oOperation->save();
        } else {
            $sError = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oOperation->getValidationFailures());
            $this->_helper->FlashMessenger($sError, 'error');
        }

        $this->_helper->Redirector('index', 'description', 'operation', array('op_id' => $aParams['op_id']));
    }

    /**
     * Updating the field values of an operation
     */
    public function updatefieldoperationAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $sFieldName = $this->_request->getParam('fieldName');
            $sFieldValue = $this->_request->getParam('fieldValue');

            if (in_array($sFieldName, array('op_stamp_start', 'op_stamp_end', 'op_dateConso_start', 'op_dateConso_end', 'op_datePoste_end', 'op_date_archivage_end'))) {
                $oOperation = new Operations();
                // Checking if the given date is valid
                if (false === $oOperation->validateOperationDatesFormat(array($sFieldName => $sFieldValue))) {
                    $aErrors = $this->_helper->PropelFailures()->validationFailuresToArray($oOperation->getValidationFailures());
                    $this->_helper->json(new Phoenix_Ajax_Components_Response_UpdateField(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors, null, null, $this->_request->getParam('fieldId'), null));
                }
                // Formatting date for MySQL
                $this->_request->setParam('fieldValue', Phoenix_Data_Convert::FormatDateForMysql($sFieldValue));
            }

            $aOptions = array();
            if ($sFieldName == 'cl_site_id_for_log' && OperationsQuery::create()->findPk($this->_request->getParam('primaryValue'))->isPushedToGedelog()) {
                $aOptions['action'] = Phoenix_Ajax_Components_Response::ACTION_DISPLAY_WARNINGS;
                $aOptions['msg'] = $this->view->translate('Vous venez de changer l\'adresse logistique du client, vous devez contacter le service Logistique pour changement éventuel de l\'adresse dans le WMS GEDELOG.');
            }

            $sResponse = $this->_helper->AjaxComponents()->updateField(array('Operations', 'OperationsExt'), array('fieldValue' => $this->_request->getParam('fieldValue')), $aOptions);
            $this->_helper->Json($sResponse);
        }
    }

    /**
     * Update the frequency of sending stats
     */
    public function updatefreqstatmailAction()
    {
        $this->_forward('updatefieldoperation');
    }

    /**
     * Updating the attachment of the excel file to the stats
     */
    public function updateattachfilestatsexcelAction()
    {
        $this->_forward('updatefieldoperation');
    }

    /**
     * Force creation of tasks if not created for an accepted operation
     */
    public function createtasksAction()
    {
        $this->_helper->ViewRenderer->setNoRender(true);

        $aParams = $this->_request->getParams();
        try {
            $sResult = Data_Task_Management::createTasksForOperation($aParams['op_id']);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $sResult . ' ' . $this->view->translate('tâches viennent d\'être créées pour cette opération')));
        } catch (Phoenix_Exception_UserError $oException) {
            $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $oException->getMessage()));
        } catch (Phoenix_Exception_UserWarning $oException) {
            $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_WARNINGS, $oException->getMessage()));
        }
    }

    /**
     * Initialization of the operation in gedelog
     */
    public function initgedelogAction()
    {
        $this->_helper->ViewRenderer->setNoRender(true);

        $oOperation = OperationsQuery::create()->findPk($this->getParam('op_id'));

        $oExternalConnectionGedelog = Phoenix_ExternalConnection_Gedelog::getInstance();

        if ($aErrors = $oExternalConnectionGedelog->validateOperation($oOperation)) {
            return $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
        }

        $oExternalConnectionGedelog->initOperation($oOperation);
        $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate('L\'opération a été poussée dans Gedelog')));
    }

    /**
     * Changing the status of the operation
     */
    public function modifierstatutAction()
    {

        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $this->view->op_id = $aParams['op_id'];
        $this->view->op_status_id = $this->_request->getParam('op_status_id', null);

        if (! isset($aParams['hs_new_statut_id'])) {
            return;
        }
        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
        if (! $oOperation instanceof Operations) {
            return $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                'The given operation identifiant ."' . $aParams['hs_new_statut_id'] . '" doesn\'t seem to be a valid operation'
            ));
        }

        $iOldOperationStatus = $oOperation->getOpStatusId();
        $oOperation->setOpStatusId($aParams['hs_new_statut_id'], $this->_request->getParam('hs_refus_id', null));
        if (! $oOperation->validate()) {
            $aErrors = $oOperation->getValidationFailures();
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToArray($aErrors);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                $aErrors
            ));
            return $this->view;
        }

        // Operation and status are saved
        $oOperation->save();

        $this->view->operation = OperationsQuery::create()->findPk($aParams['op_id']);
        
        $iOperationStatusId = $oOperation->getOpStatusId();
        if (! in_array($iOperationStatusId, array(Operations::STATUS_ACCEPTE, Operations::STATUS_SOLDE))) {
            return $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP,
                'id_dialog_modifier_statut'
            ));
        }

        // If the new status is 'Accepted', we will send an email to the managers and we will create the associated tasks
        if ($iOperationStatusId === Operations::STATUS_ACCEPTE) {
            // We send the appropriate mail, check the presence of the recipient email
            try {
                ($iOldOperationStatus == Operations::STATUS_SOLDE) ? Phoenix_MailSender::notifyOperationStepedBackToAcceptedStatus($oOperation, date('d/m/Y')) : Phoenix_MailSender::notifyOperationAcceptee($oOperation);
            } catch (LogicException $oLogicException) {
                $sMessage = '<li>' . $this->view->translate('L\'opération est passée en statut acceptée, en revanche l\'email ne peut pas être envoyé') . '.';
                $sMessage .= '<br />' . $this->view->translate($oLogicException->getMessage()) . '</li>';
                $aMsg[] = $sMessage;
            } catch (Exception $oException) {
                $sMessage = '<li>' . $this->view->translate('L\'opération est passée en statut acceptée, en revanche l\'email ne peut pas être envoyé') . ', ' . $this->view->translate('veuillez contactez le SI') . '.';
                $sMessage .= '<br />' . $oException->getMessage() . '</li>';
                $aMsg[] = $sMessage;
                \CSErrorHandler::getInstance()->handleException($oException);
            }

            if (! $oOperation->isLanguageFactOk()) {
                $aMsg[] = '<li>' . $this->view->translate('Les relances sur le compte client sont en Français. Vous pouvez modifier la langue sur la fiche client, onglet facturation.') . '</li>';
            }

            // If some messages has been set, display them, otherwise close the popup
            if (! empty($aMsg)) {
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE,
                    $aMsg
                ));
            }

            return $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP,
                'id_dialog_modifier_statut'
            ));
        }
        
        if ($iOperationStatusId === Operations::STATUS_SOLDE) {
            try {
                Phoenix_MailSender::notifyOperationSolde($oOperation, date('d/m/Y'));
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP,
                    'id_dialog_modifier_statut'
                ));
            } catch (Exception $oException) {
                $sMessage = '<li>' . $this->view->translate('L\'opération est passée en statut soldé, en revanche l\'email ne peut pas être envoyé, veuillez contactez le SI') . '.';
                $sMessage .= '<br /><strong style="color:red">' . get_class($oException) . ' - "' . $oException->getMessage() . '" - ' . $oException->getFile() . ' (' . $oException->getLine() . ') </strong></li>';
                \CSErrorHandler::getInstance()->handleException($oException);
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE,
                    $sMessage
                ));
            }
        }
    }

    /**
     * Ajax function. Send cotation to the client
     */
    public function senddevisAction()
    {
        $this->_helper->layout->disableLayout();

        if (! $this->_request->isPost()) {
            return;
        }

        $aData = $this->getRequest()->getPost();

            // We're retrieving data from the current operation.
        if (empty($aData['op_id']) || ! is_numeric($aData['op_id'])) {
            throw new \LogicException('Post param "op_id" is undefined');
        }

        $oOperation = OperationsQuery::create()->findOneByOpId($aData["op_id"]);
        if (! $oOperation instanceof Operations) {
            return $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                array($this->view->translate('Cette opération est invalide'))
            ));
        }

        // Retrieves the sales director
        $oUserDC = $oOperation->getUserDC();
        if (! $oUserDC instanceof Users) {
            $aErrors[] = $this->view->translate('Aucun DC n\'est sélectionné');
            return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
        }

        // Retrieves the latest quotation
        $oQuotation = $oOperation->getFileDevisLastVersion();
        if (! $oQuotation instanceof Files) {
            $aErrors[] = $this->view->translate('Aucun devis n\'a été généré pour cette opération.');
            return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
        }

        $this->view->op_id = $oOperation->getOpId();
        $this->view->op_libelle = $oOperation->getOpLibelle();
        // Retrieves the client label
        $this->view->cl_libelle = ClientsQuery::create()->findOneByClId($oOperation->getOpClId())->getClLibelle();

        // Render template subject
        $oTemplateManager = new Phoenix_TemplateManager_Quotation();
        $oTemplateManager->setOperation($oOperation);

        $this->view->mail_subject = $oTemplateManager->renderTemplateFromSetting(Settings::SETTING_KEY_TPL_QUOTATION_MAIL_SUBJECT);
        $this->view->mail_content = $oTemplateManager->renderTemplateFromSetting(Settings::SETTING_KEY_TPL_QUOTATION_MAIL_BODY);

        if ($iOperationContactId = $oOperation->getOpCtId()) {
            $oContact = ContactsQuery::create()->findOneByCtId($iOperationContactId);
            if ($oContact instanceof Contacts) {
                $this->view->mail_dest_to = $oContact->getCtEmail();
            }
        }

        if (empty($aData['submit_send_devis'])) {
            return;
        }

        // Retrieves mail information
        $this->view->mail_dest_to = $aData['mail_dest']['to'];
        $this->view->mail_dest_cc = $aData['mail_dest']['cc'];
        $this->view->mail_dest_bcc = $aData['mail_dest']['bcc'];
        $this->view->mail_subject = $aData['mail_subject'];
        $this->view->mail_content = $aData['mail_content'];

        $aMails = explode(',', $aData['mail_dest']['to']) + explode(',', $aData['mail_dest']['cc']) + explode(',', $aData['mail_dest']['bcc']);

        // Integrity tests
        $aErrors = array();
        if (empty($aData['mail_dest']['to'])) {
            $aErrors['mail.mail_dest_to'] = array(new ValidationFailed('mail_dest_to', $this->view->translate('Le destinataire du mail doit être indiqué')));
        } else {
            foreach ($aMails as $sMail) {
                if (! Zend_Validate::is($sMail, 'Zend_Validate_EmailAddress')) {
                    $aErrors['mail.mail_dest_to'] = array(new ValidationFailed('mail_dest_to', $this->view->translate('Une ou des adresses sont mal renseignées')));
                    break;
                }
            }
        }

        if (empty($aData['mail_subject'])) {
            $aErrors['mail.mail_subject'] = array(new ValidationFailed('mail_subject', $this->view->translate('Le sujet du mail doit être indiqué')));
        }

        if ($aErrors) {
            return $this->_helper->PropelFailures()->registerErrors($aErrors);
        }

        $oContract = null;
        $oTransportPlan = null;
        // Retrieve the file 'contract' if requested
        if (isset($aData['mail_pj_contrat']) && ! empty($aData['mail_pj_contrat'])) {
            $oContract = FilesQuery::create()->findPk($aData['mail_pj_contrat']);
        }
        // Retrieve the file 'plan' if requested
        if (isset($aData['mail_pj_plan']) && ! empty($aData['mail_pj_plan'])) {
            $oTransportPlan = FilesQuery::create()->findPk($aData['mail_pj_plan']);
        }

        // Sends the appropriate mail
        Phoenix_MailSender::operationsSendDevis(
            $aData['mail_subject'],
            $aData['mail_content'],
            $oUserDC->getUserMail(),
            $oUserDC->getUserPrenomNom(),
            $aData['mail_dest'],
            $oOperation,
            $oQuotation,
            $oContract,
            $oTransportPlan
        );

        $this->_response->clearBody();
        $this->_response->setBody($this->view->translate('Devis envoyé'));

        $this->_helper->ViewRenderer->setNoRender(true);
    }

    /**
     * Ajax function : viewing the different quotations recorded
     */
    public function visualiserdevisversionsAction()
    {
        $this->_helper->layout->disableLayout();

        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();
            $oOperation = null;

            // Retrieves data from the current operation
            if (isset($aData['op_id']) && is_numeric($aData['op_id'])) {
                $oOperation = OperationsQuery::create()->findOneByOpId($aData['op_id']);
            }

            if ($oOperation instanceof Operations) {
                $this->view->devis = $oOperation->getFilesDevis();

                if (! empty($aData['submit_save_new_devis'])) {
                    $this->_response->clearBody();
                    $this->_response->setBody($this->view->translate('Devis envoyé'));
                    $this->_helper->ViewRenderer->setNoRender(true);
                }
            } else {
                $this->_response->clearBody();
                $this->_response->setBody($this->view->translate('Erreur: Cette opération est invalide'));
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }
    }

    /**
     * Ajax function: returns the html code to display for the statuses
     */
    public function updatestatutviewAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();

        $this->view->op_id = $aParams['op_id'];
        $this->view->op_status_id = $this->_request->getParam('op_status_id', null);
        $this->view->operation = OperationsQuery::create()->findPk($aParams['op_id']);

        $oView = $this->view->render('/description/histostatut.phtml');

        $this->_helper->Json($oView);
    }

    /**
     * Upload of a contract
     */
    public function uploadcontratAction()
    {
        $this->_helper->ViewRenderer->setNoRender(true);
        $aParams = $this->_request->getParams();
        $aErrors = array();
        $oFileTransfer = $this->_helper->FileTransfer();
        if ($oFileTransfer->isUploaded()) {
            $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
            try {
                if ($oOperation->addFileContrat($oFileTransfer->receive()) === false) {
                    $aErrors = $oOperation->getValidationFailures();
                    $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
                }
            } catch (Exception $oException) {
                $aErrors[] = $oException->getMessage();
            }
        } else {
            $aErrors[] = 'Aucun fichier uploadé';
            if ($aFileTransFerMessages = $oFileTransfer->getMessages()) {
                array_merge($aErrors, $aFileTransFerMessages);
            }
        }

        if ($aErrors) {
            $this->_helper->FlashMessenger($aErrors, 'error');
        }
        $this->_helper->Redirector('index', null, null, array('op_id' => $aParams['op_id']));
    }

    /**
     * Upload of transport plan
     */
    public function uploadplantransportAction()
    {
        $this->_helper->ViewRenderer->setNoRender(true);
        $aParams = $this->_request->getParams();
        $aErrors = array();
        if ($this->_helper->FileTransfer()->isUploaded()) {
            $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
            try {
                if ($oOperation->addFilePlanTransport($this->_helper->FileTransfer()->receive()) === false) {
                    $aErrors = $oOperation->getValidationFailures();
                    $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
                }
            } catch (Exception $oException) {
                $aErrors[] = $oException->getMessage();
            }
        }

        // 36321 foreach argument bug correction
        if (count($aErrors)) {
            $this->_helper->FlashMessenger($aErrors, 'error');
        }

        $this->_helper->Redirector('index', null, null, array('op_id' => $aParams['op_id']));
    }

    /**
     * Removal of a contract
     */
    public function deletecontratAction()
    {
        $oFile = FilesQuery::create()->findPk($this->_request->getParam('file_id'));
        $oFile->delete();
        $this->_forward('contratversions', null, null, array('op_id' => $oFile->getFileEntityId()));
    }

    /**
     * Removal of a transport plan
     */
    public function deleteplantransportAction()
    {
        $oFile = FilesQuery::create()->findPk($this->_request->getParam('file_id'));
        $oFile->delete();
        $this->_forward('plantransportversions', null, null, array('op_id' => $oFile->getFileEntityId()));
    }

    /**
     * Removal of a quote in pdf format
     */
    public function deletedevisAction()
    {
        $oFile = FilesQuery::create()->findPk($this->_request->getParam('file_id'));
        $oFile->delete();
        $this->_forward('devisversions', null, null, array('op_id' => $oFile->getFileEntityId()));
    }

    /**
     * Download transport plan
     */
    public function downloadplantransportAction()
    {
        $oFile = FilesQuery::create()->findPk($this->_request->getParam('file_id'));
        $this->_helper->FileTransfer()->send($oFile->getFilePath());
    }

    /**
     * Download a contract
     */
    public function downloadcontratAction()
    {
        $oFile = FilesQuery::create()->findPk($this->_request->getParam('file_id'));
        $this->_helper->FileTransfer()->send($oFile->getFilePath());
    }

    /**
     * Download a cotation in pdf format
     */
    public function downloaddevisAction()
    {
        $oFile = FilesQuery::create()->findPk($this->_request->getParam('file_id'));
        $this->_helper->FileTransfer()->send($oFile->getFilePath());
    }

    /**
     * Download of quotation in pdf format (no history)
     */
    public function downloadgenerateddevisAction()
    {
        $aParams = $this->_request->getParams();

        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);

        if ($oOperation instanceof Operations) {
            Phoenix_File_Operation_PdfGenerator::getInstance()->downloadPdfQuotation($oOperation);
        } else {
            $this->_helper->Redirector('index', null, null, array('op_id' => $aParams['op_id']));
        }
    }

    /**
     * Registration of the cotation in the state in pdf format for historization
     */
    public function savegenerateddevisAction()
    {
        $aParams = $this->_request->getParams();
        $sOperationId = $aParams['op_id'];

        $oOperation = OperationsQuery::create()->findPk($sOperationId);

        // Generete pdf quotation and save
        Phoenix_File_Operation_PdfGenerator::getInstance()->generatePdfQuotationAndSave($oOperation, false);

        $aErrors = $oOperation->getValidationFailures();
        if ($aErrors) {
            $sError = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $sError));
        }

        $this->_forward('devisversions', null, null, array('op_id' => $sOperationId));
    }

    /**
     * Display of uploaded contract versions
     */
    public function contratversionsAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
        $this->view->contrats = $oOperation->getFilesContrat();
    }

    /**
     * Displaying uploaded transport plan versions
     */
    public function plantransportversionsAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
        $this->view->planstransport = $oOperation->getFilesPlanTransport();
    }

    /**
     * Display of uploaded versions of quotes
     */
    public function devisversionsAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
        $this->view->oQuotes = $oOperation->getFilesDevis();
    }

    /**
     * Download a quotation in excel format
     */
    public function devisexcelAction()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);

        $sOperationId = $this->getParam('op_id');
        $oOperation = OperationsQuery::create()->findPk($sOperationId);
        Phoenix_File_Operation_ExcelGenerator::getInstance()->dowloadExcelQuotation($oOperation);
    }

    /**
     * Popup display for managing recipients of statistics sent by mail
     */
    public function popupdestinatairesAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $this->view->op_id = $this->_request->getParam('op_id');
        $this->view->op_cl_id = $this->_request->getParam('op_cl_id');

        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);

        $this->_request->setParam('op_mails_dest', $oOperation->getOpMailsDest());

        // Retrieve the customer's contacts from the operation
        $aContacts = ContactsQuery::getByOpIdAndClIdWithSendMail($aParams['op_id'], $aParams['op_cl_id']);

        $this->view->contacts = $aContacts;
    }

    /**
     * Updating the recipients of the statistics
     */
    public function majstatdestinatairesAction()
    {

        $aParams = $this->_request->getParams();
        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);

        if ($this->_request->getParam('submit_destinataires', null) != null) {
            $aErrors = array();

            // Update of the free text entry field for e-mail addresses
            $oOperation->setOpMailsDest($aParams['op_mails_dest']);
            if ($oOperation->validate()) {
                $oOperation->save();
            } else {
                $aErrors = $oOperation->getValidationFailures();
                $this->_helper->PropelFailures()->registerErrors($aErrors);
            }

            // Updated contacts checked
            $aCtId = $this->_request->getParam('ct_id');
            LnkOperationsContactsMailQuery::create()->filterByOpId($aParams['op_id'])
                ->update(array('SendMail' => false));

            if (isset($aCtId)) {
                foreach ($aCtId as $iContactId) {
                    if (LnkOperationsContactsMailQuery::create()->filterByCtId($iContactId)->filterByOpId($aParams['op_id'])->count() > 0) {
                        LnkOperationsContactsMailQuery::create()->filterByCtId($iContactId)->filterByOpId($aParams['op_id'])->update(array('SendMail' => true));
                    } else {
                        $oLnkOperationsContactsMail = new LnkOperationsContactsMail();
                        $oLnkOperationsContactsMail->setOpId($aParams['op_id'])
                            ->setCtId($iContactId)
                            ->setSendMail(true)
                            ->save();
                    }
                }
            }

            if (count($aErrors) <= 0) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP,
                    'id_dialog_destinataires'
                ));
            }
        }

        $this->_forward('popupdestinataires');
    }

    /**
     * Updates Operation Option
     *
     * @throws \LogicException
     */
    public function updateoptionAction()
    {
        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getAllParams();

        if (! isset($aParams['isLinked'])) {
            throw new \LogicException('Parameter "isLinked" is expected but was not found in the posted parameters');
        }
        if (! isset($aParams['optionId'])) {
            throw new \LogicException('Parameter "optionId" is expected but was not found in the posted parameters');
        }

        if (! isset($aParams['opId'])) {
            throw new \LogicException('Parameter "opId" is expected but was not found in the posted parameters');
        }

        $aParams = $this->_request->getParams();
        $bIOptionLinked = ($aParams['isLinked'] == 'true' ? true : false);
        $iROpOptionId = (int) $aParams['optionId'];
        $oOperation = OperationsQuery::create()->getOperationByOpId((int) $aParams['opId']);
        $oOperationDescriptionService = $this->getAdminstrationUsersService();
        $oOperationDescriptionService->setOperation($oOperation);


        if ($oOperationDescriptionService->isInternationalOpPackSelected($bIOptionLinked, $iROpOptionId)) {
            // If no countries are linked to the operation or only "France" is linked, then we uncheck the international pack option and we send a warning
            if ($oOperationDescriptionService->areCountriesMissingForTheSelectedInternationalPack()) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('Merci de préciser la liste des pays concernés avant de valider l\'option'), 'uncheckPack'));
                return $this->view;
            }
        }

        if ($oOperationDescriptionService->hasROpOptionLinkedServices($iROpOptionId)) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, array('bIsLinked' => $bIOptionLinked, 'iROpOptionId' => $iROpOptionId, 'iOperationId' => $oOperation->getOpId()), 'forwardProcess'));
        }

        $oOperation->replaceOption($iROpOptionId, $bIOptionLinked);
        if (in_array($iROpOptionId, ROperationOptions::getOptEntrepot()) && $oOperationDescriptionService->hasTheOperationASpecificStatusAndIsPushedToGedelog()) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_WARNINGS, $this->view->translate('gedelog_repository_change_warning_message') . '.'));
        }

        $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, 'maj ok'));
    }

    /**
     * Adds operation options and its related services
     *
     * @throws \LogicException
     */
    public function addoperationoptionAction()
    {

        if (! $this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->_request->isXmlHttpRequest()) {
            throw new \LogicException('addoperationoption Action is only accessible through AJAX');
        }

        $aParams = $this->getAllParams();

        if (! isset($aParams['iROpOptionId'])) {
            throw new \LogicException('Parameter "iROpOptionId" is expected but was not found in the posted parameters');
        }

        if (! isset($aParams['iOperationId'])) {
            throw new \LogicException('Parameter "iOperationId" is expected but was not found in the posted parameters');
        }

        $iROpOptionId = (int) $aParams['iROpOptionId'];
        $this->_helper->layout->disableLayout();
        $oOperationDescriptionService = $this->getAdminstrationUsersService();
        $oOperationDescriptionService->setOperation(OperationsQuery::create()->getOperationByOpId((int) $aParams['iOperationId']));
        $aROpOptionRelatedRubricsAndActifServices = $oOperationDescriptionService->getROpOptionRelatedRubricsAndActifServices($iROpOptionId);

        if (isset($aParams['submit_add_services'])) {
            $aSelectedOptions = isset($aParams['r_prestation_id']) ? $aParams['r_prestation_id'] : array();
            $oOperationDescriptionService->addROpOperationOptionRelatedServicesToTheQuote($aSelectedOptions, $aROpOptionRelatedRubricsAndActifServices);
            $oOperationDescriptionService->updateOperationOption($iROpOptionId, 1);

            if (in_array($iROpOptionId, ROperationOptions::getOptEntrepot()) && $oOperationDescriptionService->hasTheOperationASpecificStatusAndIsPushedToGedelog()) {
                $sMessage = '<ul><li>';
                $oCurrentObject = $this;
                $sMessage .= implode('</li><li>', array_map(function ($sTranslationKey) use ($oCurrentObject) {
                    return $oCurrentObject->view->translate($sTranslationKey);
                }, array('adding_r_operation_option_related_services_success_message', 'gedelog_repository_change_warning_message')));
                $sMessage = $sMessage . '</li></ul>';
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_WARNINGS, $sMessage));
            }
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate('adding_r_operation_option_related_services_success_message')));
        }

        $this->view->activesServicesGroupedByRubric = $aROpOptionRelatedRubricsAndActifServices;
        $this->view->rOpOptionId = $aParams['iROpOptionId'];
        $this->view->operationId = $aParams['iOperationId'];
    }

    /**
     * Removes operation option displays a set of related services
     *
     * @throws \LogicException
     */
    public function removeoperationoptionAction()
    {

        if (! $this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->_request->isXmlHttpRequest()) {
            throw new \LogicException('removeoperationoption Action is only accessible through AJAX');
        }

        $aParams = $this->getAllParams();

        if (! isset($aParams['iROpOptionId'])) {
            throw new \LogicException('Parameter "iROpOptionId" is expected but was not found in the posted parameters');
        }

        if (! isset($aParams['iOperationId'])) {
            throw new \LogicException('Parameter "iOperationId" is expected but was not found in the posted parameters');
        }

        $iROpOptionId = (int) $aParams['iROpOptionId'];
        $this->_helper->layout->disableLayout();
        $oOperationDescriptionService = $this->getAdminstrationUsersService();
        $oOperationDescriptionService->setOperation(OperationsQuery::create()->getOperationByOpId((int) $aParams['iOperationId']));
        $aROpOptionRelatedRubricsAndActifServices = $oOperationDescriptionService->getROpOptionRelatedRubricsAndActifServices($iROpOptionId);
        $oOperationDescriptionService->updateOperationOption($iROpOptionId, 0);
        $this->view->activesServicesGroupedByRubric = $aROpOptionRelatedRubricsAndActifServices;
    }

    /**
     * Updating the number of recipients on the Recipient Popup Display button
     */
    public function btndestAction()
    {
        $this->_helper->layout->disableLayout();

        if ($this->_request->isXmlHttpRequest()) {
            $aParams = $this->_request->getParams();
            $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);

            $this->view->mails = $oOperation->getDestinatairesStats();
        }
    }

    /**
     * Display of generated statistics
     */
    public function statistiquesAction()
    {
        $this->_helper->layout->disableLayout();

        $aParams = $this->_request->getParams();
        $aParams['page'] = isset($aParams['page']) ? $aParams['page'] : 1;

        $aFileTypes = array();
        if ($aParams['file_type'] == RFileCategories::STAT_PDF) {
            // 37043 Getting the at the same time old and new version of statistic files
            $aFileTypes = array(RFileCategories::STAT_PDF, RFileCategories::STAT_JSON);
        } else {
            $aFileTypes = array(RFileCategories::STAT_EXCEL);
        }

        $aFiles = FilesQuery::create()->filterByFileCategoryId($aFileTypes)
            ->filterByFileEntityId($aParams['op_id'])
            ->orderByDateCreate(criteria::DESC);

        if (! empty($aParams['find_date_comp']) && ! empty($aParams['find_date'])) {
            $oZendDate = new Zend_Date($aParams['find_date'], null, 'fr');

            if ($aParams['find_date_comp'] == 'eql') {
                $aFiles = $aFiles->filterByDateCreate($oZendDate->toString('Y-MM-dd'), Criteria::GREATER_THAN);
                $oZendDate->addDay(1);
                $aFiles = $aFiles->filterByDateCreate($oZendDate->toString('Y-MM-dd'), Criteria::LESS_THAN);
            } else {
                if ($aParams['find_date_comp'] == 'inf') {
                    $sComparison = Criteria::LESS_THAN;
                }
                if ($aParams['find_date_comp'] == 'sup') {
                    $sComparison = Criteria::GREATER_THAN;
                }
                $aFiles = $aFiles->filterByDateCreate($oZendDate->toString('Y-MM-dd'), $sComparison);
            }
        }


        $aFiles = $aFiles->filterByFileEntityName('operations')->paginate($aParams['page'], 7);
        $this->view->opId = $aParams['op_id'];
        $this->view->fileType = $aParams['file_type'];
        $this->view->stats = $aFiles;
    }

    /**
     * Retrieve statistics in pdf format
     *
     * @return string
     */
    public function getstatfileAction()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);

        $aParams = $this->_request->getParams();
        $oFile = FilesQuery::create()->findPk($aParams['file_id']);

        switch ($oFile->getFileCategoryId()) {
            case RFileCategories::STAT_PDF:
                $oPdf = new Phoenix_PDFGen_Statistics();
                $oPdf->initializeFromXml(file_get_contents($oFile->getFilePath()), array('lang' => 'fr', 'title' => $this->view->translate('Statistiques')));
                $oPdf->generate();
                return $oPdf->Output('stats.pdf', 'D');
            case RFileCategories::STAT_EXCEL:
                My_File_Transfer::getInstance()->send($oFile->getFilePath());
                break;
        }
    }

    public function histosenddevisAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();

        $aMails = MailsQuery::create()->filterByMailEntityId($aParams['op_id'])
            ->filterByMailEntityName('operations')
            ->filterByRMailTypeId(RMailTypes::DEVIS)
            ->orderByDateCreate(Criteria::DESC)
            ->find();

        $this->view->mails = $aMails;
    }

    /**
     * Displays the mail of a quotation
     */
    public function displaymailAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();

        $oMail = MailsQuery::create()->findPk($aParams['mail_id']);

        $this->view->mail = $oMail;
    }

    /**
     * Display of countries managed by the operation
     */
    public function blockpaysinterAction()
    {

        $this->_helper->layout->disableLayout();
        $sOperationId = $this->_request->getParam('op_id');

        $this->view->countries = RCountriesQuery::create()->orderByRCountryName()->useLnkOperationCountryQuery()->filterByOpId($sOperationId)->endUse()->find();
    }

    /**
     * Popup of operation countries management
     */
    public function popupmodifpaysinterAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $iOperationId = (int) $this->_request->getParam('op_id');
        $aRelatedCountries = RCountriesQuery::create()->findWithSelectionForOperation($iOperationId);
        if (! isset($aParams['submit_pays_inter'])) {
            $this->view->op_id = $iOperationId;
            $this->view->countries = $aRelatedCountries;
            $aSelectedCountries = array();
            $sFranceKey = 0;
            foreach ($this->view->countries as $sKey => $aCountry) {
                if ($aCountry['is_selected'] == '1') {
                    $aSelectedCountries[] = $aCountry['is_selected'];
                }
                if (RCountriesQuery::create()->isFranceCountry((int) $aCountry['r_country_id'])) {
                    $sFranceKey = $sKey;
                }
            }
            // Setting France by default of no countries has been selected
            if (count($aSelectedCountries) == 0 && $sFranceKey != 0) {
                $this->view->countries[$sFranceKey]['is_selected'] = '1';
            }
        } else {
            // Checking if international pack option is linked to the operation
            $bIsLinked = false;
            $aInternationalOpPackData = LnkOperationOptionQuery::create()->findLinkWithOperationIdAndOptionId($iOperationId, ROperationOptions::OPT_PACK_OP_INTERNATIONAL);
            // Checking if the removed countries are attahced to some rewards
            $aRequestedCountries = isset($aParams['lnk_op_country_id']) ? $aParams['lnk_op_country_id'] : array();
            $aDeletedCountries = array_reduce($aRelatedCountries, function ($aCountries, $aCountryData) use ($aRequestedCountries) {
                if ($aCountryData['is_selected'] === '1' && ! in_array($aCountryData['r_country_id'], $aRequestedCountries)) {
                    $aCountries[] = $aCountryData['r_country_id'];
                }
                return $aCountries;
            }, array());

            if ($aDeletedCountries && OperationPrimesQuery::create()->checkIfCountriesAreRelatedToTheOperationRewards((int) $iOperationId, $aDeletedCountries)) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('message_unable_to_delete_countries_that_are_related_to_operation_rewards')));
                return;
            }

            if (! empty($aInternationalOpPackData)) {
                $bIsLinked = (bool) $aInternationalOpPackData[0]['is_linked'];
            }
            if ($bIsLinked && ! isset($aParams['lnk_op_country_id'])) {
                $sOpInternationalPackErrorMessage = 'Vous ne pouvez pas avoir l\'option Pack "opé internationale" alors qu\'aucun pays n\'est associé dans pays concernés. Merci de décocher cette option avant de valider à nouveau';
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate($sOpInternationalPackErrorMessage)));
                return;
            } elseif ($bIsLinked && (count($aParams['lnk_op_country_id']) === 1) && in_array(RCountriesQuery::create()->getFranceCountryId(), $aParams['lnk_op_country_id'])) {
                $sOpInternationalPackErrorMessage = 'Vous ne pouvez pas avoir l\'option Pack "opé internationale" alors seulement la France est paramétré dans pays concernés. Merci de décocher cette option avant de valider à nouveau';
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate($sOpInternationalPackErrorMessage)));
                return;
            }

            LnkOperationCountryQuery::create()->filterByOpId($iOperationId)->delete();
            if (isset($aParams['lnk_op_country_id'])) {
                foreach ($aParams['lnk_op_country_id'] as $iLinkOpCountryId) {
                    $oLnkOperationCountry = new LnkOperationCountry();
                    $oLnkOperationCountry->setOpId($iOperationId)->setLnkOpCountryId($iLinkOpCountryId)->save();
                }
            }
            $this->_helper->Redirector('blockpaysinter', 'description', 'operation', array('op_id' => $iOperationId));
        }
    }

    /**
     * Recompilation of all data
     */
    public function recompildataAction()
    {
        $sOperationId = $this->getParam('op_id');
        $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $sOperationId));
    }

    /**
     * Display of the processing block
     */
    public function blocktraitementsAction()
    {
        $this->_helper->layout->disableLayout();
        $sOperationId = $this->_request->getParam('op_id');

        $this->view->operation = OperationsQuery::create()->findPk($sOperationId);
    }

    /**
     * Lazy loads operationDescriptionService instance
     *
     * @return \Phoenix_Operation_Description_Service_DescriptionService
     * @throws \LogicException
     */
    public function getAdminstrationUsersService()
    {
        // Lazy load if undefined
        if ($this->operationDescriptionService === null) {
            $this->operationDescriptionService = new \Phoenix_Operation_Description_Service_DescriptionService();
        }
        if ($this->operationDescriptionService instanceof \Phoenix_Operation_Description_Service_DescriptionService) {
            return $this->operationDescriptionService;
        }
        throw new \LogicException('Property "operationDescriptionService" expects an instance of \Phoenix_Operation_Description_Service_DescriptionService, "' . (is_object($this->operationDescriptionService) ? get_class($this->operationDescriptionService) : gettype($this->operationDescriptionService)) . '" defined');
    }
}
