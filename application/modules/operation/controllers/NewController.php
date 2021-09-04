<?php

class Operation_NewController extends My_Controller_Action
{

    /**
     * Default method when calling the controller
     */
    public function indexAction()
    {
        $this->view->activitiesKpis = RActivityKpiQuery::create()->find();
        $this->view->countDetachedOperationOptions = \ROperationOptionsQuery::create()->countDetachedOperationOptions();
        if ($this->_request->getParam('submit_ajout_operation', null) != null) {
            // Retrieval of the client's label if selected before submission of the form
            if ($this->_request->getParam('op_cl_id', null) != null) {
                $oClient = ClientsQuery::create()->findOneByClId($this->_request->getParam('op_cl_id', null));
                $this->_request->setParam('autocomplete_client', $oClient->getClLibelle());
            }
        }
    }

    /**
     * Adding a client to the repository
     */
    public function ajoutclientAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        if (isset($aParams['submit_ajout_client'])) {
            $oContact = new Contacts();
            $oContact->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
            $oClient = ClientsQuery::create()->filterByPrimaryKey($aParams['cl_id'])->findOneOrCreate();
            $oClient->fromArray($aParams, BasePeer::TYPE_FIELDNAME);

            $oClientFactureOptions = ClientFactureOptionsQuery::create()->filterByClId($oClient->getClId())->findOneOrCreate();
            $oClientFactureOptions->fromArray($aParams, BasePeer::TYPE_FIELDNAME);

            if ($oClient->validate() && $oClientFactureOptions->validate()) {
                $bClientIsNew = false;
                if ($oClient->isNew()) {
                    $oClient->addClientFactureOptions($oClientFactureOptions);
                    $this->msg = $this->view->translate('Client ajouté');
                    $bClientIsNew = true;
                } else {
                    $oClientFactureOptions->save();
                }
                $oClient->save();
                // Sending the email for end of creating client
                if ($bClientIsNew) {
                    Phoenix_MailSender::clientCompleteCreation($oClient);
                }

                $oContact->setClId($oClient->getClId());
                if ($oContact->validate()) {
                    $oContact->save();
                    $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP, array('divId' => 'id_dialog_ajout_client', 'cl_id' => $oClient->getClId(), 'cl_libelle' => $oClient->getClLibelle(), 'ct_id' => $oContact->getCtId())));
                }
            }

            $aErrorsClient = array();
            $aErrorsContact = array();
            $aErrorsClient = $oClient->getValidationFailures();
            $aErrorsContact = $oContact->getValidationFailures();
            $aErrorsClientFactureOptions = $oClientFactureOptions->getValidationFailures();

            $aErrors = array_merge($aErrorsClient, $aErrorsContact, $aErrorsClientFactureOptions);

            $this->_helper->PropelFailures()->registerErrors($aErrors);

            if (! $oClient->isNew()) {
                $this->view->cl_id = $oClient->getClId();
            }
        }
    }

    /**
     * Adding a customer contact to the repository
     */
    public function ajoutcontactAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $this->view->cl_id = $aParams['cl_id'];
        // Processing the form for adding contact
        if (isset($aParams['submit_ajout_contact'])) {
            $oContact = new Contacts();
            $oContact->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
            if ($oContact->validate()) {
                $oContact->save();
                $this->_response->clearBody();
                $this->_response->setBody($this->view->translate('Contact ajouté'));
                $this->_helper->ViewRenderer->setNoRender(true);
            } else {
                $aErrorsContact = $oContact->getValidationFailures();
                $this->_helper->PropelFailures()->registerErrors($aErrorsContact);
            }
        }
    }

    /**
     * Contact listing for select update
     */
    public function selectcontactAction()
    {
        $aParams = $this->_request->getParams();
        $aContacts = ContactsQuery::create()->filterByClId($aParams['cl_id'])->filterByActif(1)->orderBy('CtLastname')->find()->toArray();
        $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $aContacts));
    }

    /**
     * Handeling saving operation request
     */
    public function saveoperationAction()
    {
        if (! $this->_request->isPost()) {
            return $this->_helper->Redirector('index');
        }

        $aParams = $this->_request->getParams();

        $oOperation = new Operations();
        $aOperationDates = array(
            'op_stamp_start' => $aParams['op_stamp_start'],
            'op_stamp_end' => $aParams['op_stamp_end'],
            'op_dateConso_start' => isset($aParams['op_dateConso_start']) ? $aParams['op_dateConso_start'] : null,
            'op_dateConso_end' => isset($aParams['op_dateConso_end']) ? $aParams['op_dateConso_end'] : null,
            'op_datePoste_end' => isset($aParams['op_datePoste_end']) ? $aParams['op_datePoste_end'] : null,
            'op_date_archivage_end' => isset($aParams['op_date_archivage_end']) ? $aParams['op_date_archivage_end'] : null,
        );

        $aParams['op_stamp_start'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['op_stamp_start']);
        $aParams['op_stamp_end'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['op_stamp_end']);
        $aParams['op_dateConso_start'] = isset($aParams['op_dateConso_start']) ? Phoenix_Data_Convert::FormatDateForMysql($aParams['op_dateConso_start']) : null;
        $aParams['op_dateConso_end'] = isset($aParams['op_dateConso_end']) ? Phoenix_Data_Convert::FormatDateForMysql($aParams['op_dateConso_end']) : null;
        $aParams['op_datePoste_end'] = isset($aParams['op_datePoste_end']) ? Phoenix_Data_Convert::FormatDateForMysql($aParams['op_datePoste_end']) : null;
        $aParams['op_date_archivage_end'] = isset($aParams['op_date_archivage_end']) ? Phoenix_Data_Convert::FormatDateForMysql($aParams['op_date_archivage_end']) : null;


        if (isset($aParams['op_cl_id'])) {
            // Default value for the KAM contact must be the contact defined in the client card on the "Sales Manager required" dropdown list
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aDcId = $oZendDbSelect->from('clients', array('cl_dc_id'))
                ->joinLeft('users', 'clients.cl_dc_id = users.user_id', array('user_id'))
                ->where('users.r_user_type_id  = ?', 2)
                ->where('clients.cl_id = ?', $aParams['op_cl_id'])
                ->query()->fetch();
            if (isset($aDcId['cl_dc_id'])) {
                $aParams['op_dc_id'] = $aDcId['cl_dc_id'];
            }


            // Default value for the Billing contact must be the contact defined in the client card on the Default responsible for billing   dropdown list
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());

            $aCtFacturation = $oZendDbSelect->from('clients', array('cl_ct_facturation'))
                ->joinLeft('contacts', 'clients.cl_ct_facturation = contacts.ct_id', array('ct_id'))
                ->where('contacts.actif  = ?', 1)
                ->where('clients.cl_id = ?', $aParams['op_cl_id'])
                ->query()->fetch();

            if (isset($aCtFacturation['cl_ct_facturation'])) {
                $aParams['op_ct_fact_id'] = $aCtFacturation['cl_ct_facturation'];
            }
        }

        $oOperation->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
        $aOperationOptions = $aParams['operation_option'] ?? array();

        if (! $oOperation->validateOperationDatesFormat($aOperationDates)
            || ! $oOperation->checkOperationTypeRequiredOperationOptions($aOperationOptions, Operations::STATUS_EN_COURS)
            || ! $oOperation->validate()
        ) {
            $aErrors = $oOperation->getValidationFailures();
            $this->_helper->PropelFailures()->registerErrors($aErrors);
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->FlashMessenger($aErrors, 'error');
            return $this->_forward('index');
        }

        $oOperation->save();
        if ($aOperationOptions) {
            foreach ($aOperationOptions as $iOperationOptionId) {
                $oLnkOperationOption = new LnkOperationOption();
                $oLnkOperationOption->setOpId($oOperation->getOpId())
                    ->setOpOptId($iOperationOptionId)
                    ->setIsLinked(true);
                $oOperation->addLnkOperationOption($oLnkOperationOption);
            }
        }

        $oRTypesDevisService = new Phoenix_Administration_RTypesDevis_Service_RTypesDevisService();
        $aIdentifiedTemplateData = $oRTypesDevisService->identifyTemplateWithOneUniverseAndOneMedia($oOperation->getOpSubtypeId(), $oOperation->getOperationUniverseId(), $oOperation->getOperationMediaId());

        if (isset($aIdentifiedTemplateData['template']) && $aIdentifiedTemplateData['template'] instanceof \ROperationTypeSubTpl) {
            $oOperation->processOperationSubTypeTemplating($aIdentifiedTemplateData['template']);
        }

        $oOperation->processOperationOptionsTemplating();
        $oOperation->addPrestationArhivage();
        $this->_helper->Redirector('index', 'description', 'operation', array('op_id' => $oOperation->getOpId()));
    }

    /**
     * Copy an operation
     */
    public function copyAction()
    {
        $aParams = $this->_request->getParams();
        $this->view->activitiesKpis = RActivityKpiQuery::create()->find();
        $this->view->countDetachedOperationOptions = \ROperationOptionsQuery::create()->countDetachedOperationOptions();
        if (isset($aParams['op_id']) && ($oCopiedOperation = OperationsQuery::create()->findPk($aParams['op_id'])) instanceof Operations) {
            if ($this->getRequest()->getParam('submit_copy_operation', null) == '1') {
                $aOperationDates = array(
                    'op_stamp_start' => $aParams['op_stamp_start'],
                    'op_stamp_end' => $aParams['op_stamp_end'],
                    'op_dateConso_start' => isset($aParams['op_dateConso_start']) ? $aParams['op_dateConso_start'] : null,
                    'op_dateConso_end' => isset($aParams['op_dateConso_end']) ? $aParams['op_dateConso_end'] : null,
                    'op_datePoste_end' => isset($aParams['op_datePoste_end']) ? $aParams['op_datePoste_end'] : null,
                    'op_date_archivage_end' => isset($aParams['op_date_archivage_end']) ? $aParams['op_date_archivage_end'] : null,
                );

                $aParams['op_stamp_start'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['op_stamp_start']);
                $aParams['op_stamp_end'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['op_stamp_end']);
                $aParams['op_dateConso_start'] = isset($aParams['op_dateConso_start']) ? Phoenix_Data_Convert::FormatDateForMysql($aParams['op_dateConso_start']) : null;
                $aParams['op_dateConso_end'] = isset($aParams['op_dateConso_end']) ? Phoenix_Data_Convert::FormatDateForMysql($aParams['op_dateConso_end']) : null;
                $aParams['op_datePoste_end'] = isset($aParams['op_datePoste_end']) ? Phoenix_Data_Convert::FormatDateForMysql($aParams['op_datePoste_end']) : null;
                $aParams['op_date_archivage_end'] = isset($aParams['op_date_archivage_end']) ? Phoenix_Data_Convert::FormatDateForMysql($aParams['op_date_archivage_end']) : null;
                $aParams['op_parent_id'] = $aParams['op_id'];
                if (! Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::PROJECT_MANAGER)) {
                    $aParams['op_cdp_id'] = null;
                }
                if (empty($aParams['op_ct_id'])) {
                    unset($aParams['op_ct_id']);
                }

                // Initiliaze operation and set data to validate it
                $oNewOperation = new Operations();
                $oNewOperation->fromArray($aParams, BasePeer::TYPE_FIELDNAME);

                // Checking that operation dates are valid, then we validate the new operation data
                if ($oNewOperation->validateOperationDatesFormat($aOperationDates) && $oNewOperation->validate()) {
                    // Retrieving the negociated services labels and prices settings
                    $bApplyNociatedPrices = ($aParams['apply_presta_negoce'] == 1) ? true : false;
                    // Copying original operation
                    $oNewOperation->copyFromOperationAndSave($aParams['op_id'], $bApplyNociatedPrices, (int) $aParams['op_cl_id']);
                    $aParamsOp = $aParams;
                    unset($aParamsOp['op_id']);

                    // Overidding operation datas with the set data
                    $oNewOperation->fromArray($aParamsOp, BasePeer::TYPE_FIELDNAME);
                    
                     // Adding options
                    if (isset($aParams['operation_option'])) {
                        foreach ($aParams['operation_option'] as $iOperationOptionId) {
                            $oLnkOperationOption = new LnkOperationOption();
                            $oLnkOperationOption->setOpId($oNewOperation->getOpId())
                                ->setOpOptId($iOperationOptionId)
                                ->setIsLinked(true);
                            $oNewOperation->addLnkOperationOption($oLnkOperationOption);
                        }
                    }


                    $oNewOperation->save(null, true);

                    $this->_helper->Redirector('index', 'description', 'operation', array('op_id' => $oNewOperation->getOpId()));
                } else {
                    $aErrors = $oNewOperation->getValidationFailures();
                    $this->_helper->PropelFailures()->registerErrors($aErrors);
                    $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
                    $this->_helper->FlashMessenger($aErrors, 'error');
                    $this->view->operation = $oCopiedOperation;
                }
            } else {
                $this->view->operation = $oCopiedOperation;
            }
        } else {
            $this->_helper->Redirector('index', 'listing', 'operation');
        }
    }

    /**
     * This function returns a warning message for disabled services.
     */
    public function checkdisabledprestationsAction()
    {
        if (! $this->_request->isXmlHttpRequest()) {
            return;
        }
        $aParams = $this->_request->getParams();
        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);


        if (! $oOperation instanceof Operations) {
            return;
        }
        
        // Retrieve the list of disabled services
        $aDisabledPrestations = $oOperation->getDisabledPrestations();
        if (! $aDisabledPrestations) {
            return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA));
        }

        $sMessage = $this->view->translate('Les prestations suivantes ont été désactivées du catalogue et ne seront pas comprises dans le nouveau devis') . ' : <br/><ul>';
        foreach ($aDisabledPrestations as $sPrestationId => $aPrestation) {
            $sMessage .= '<li> Id : ' . $sPrestationId . ', ' . $this->view->translate('libellé prestation') . ' : ' . $aPrestation['r_p_libelle'] . ' </li>';
        }
        $sMessage .= '<ul/>';
        $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_WARNINGS, $sMessage));
    }

    /**
     * Verification whether the chosen client has negotiated or not a negotiated service
     * Send a JSON message if TRUE, FALSE otherwise.
     */
    public function doescustomerhasnegociatedservicesAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $aParams = $this->_request->getParams();

            $iNegociatedServicesNumber = ClientPrestationsQuery::create()->filterByClId($aParams['customer_id'])->count();
            if ($iNegociatedServicesNumber) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, '', true));
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, '', false));
            }
        }
    }

    /**
     * Import action
     */
    public function importAction()
    {
        if (! $this->_request->isPost()) {
            return;
        }
        $oFileTransfer = new Zend_File_Transfer();

        $aErrors = array();
        $aCreatedOperations = array();
        foreach ($oFileTransfer->getFileInfo() as $sFile => $aFileInfos) {
            // File uploaded?
            if (! $oFileTransfer->isUploaded($sFile)) {
                $aErrors[] = 'error_file_is_not_uploaded';
                continue;
            }

            // Are the validators OK?
            if (! $oFileTransfer->isValid($sFile)) {
                $aErrors[] = 'error_file_is_not_valid';
                continue;
            }

            // Check mime type
            $sMime = $oFileTransfer->getMimeType($sFile);
            if (in_array($sMime, array(), true)) {
                $aErrors[] = 'error_file_mime_type_is_not_valid';
                continue;
            }

            // Open file
            $rFileHandle = fopen($aFileInfos['tmp_name'], 'r');
            if (! $rFileHandle) {
                throw new \RuntimeException('An error occured while opening uploaded file "' . $aFileInfos['tmp_name'] . '"');
            }

            // Get header
            $aHeader = fgetcsv($rFileHandle, 0, ';');
            if ($aHeader === false) {
                $aErrors[] = 'error_file_is_not_valid_csv';
                continue;
            }
            $iNbColumns = count($aHeader);

            $oConnection = Propel::getConnection();

            // No time limit for generation
            set_time_limit(0);

            $iLine = 0;
            while ($aRow = fgetcsv($rFileHandle, 0, ';')) {
                $iLine++;
                if (count($aRow) !== $iNbColumns) {
                    $aErrors[] = sprintf($this->view->translate('error_csv_line_has_not_same_columns_header'), $iLine, count($aRow), $iNbColumns);
                    continue;
                }
                $aData = array_combine($aHeader, array_map(function ($sValue) {
                    return Phoenix_Data_Convert::encodeData($sValue, 'UTF-8');
                }, $aRow));

                 // Starting transaction
                $oConnection->beginTransaction();

                $oOperationOrErrors = Operations::createOperationFromData($aData);
                if ($oOperationOrErrors instanceof Operations) {
                    // Save billing plan settings
                    $iOperationId = $oOperationOrErrors->getOpId();
                    $oOperationOrErrors->saveBillingPlanSettings(array(
                        'plan_fact_date_prem_fact' => PlanFacturationParams::getDefaultPlanFactDatePremFact($iOperationId),
                        'plan_fact_date_der_fact' => PlanFacturationParams::getDefaultPlanFactDateDerFact($iOperationId),
                        'plan_fact_periode_id' => $oOperationOrErrors->getClientFactureOptions()->getPlanFactPeriodeId(),
                        'plan_fact_periode_type_id' => $oOperationOrErrors->getClientFactureOptions()->getPlanFactPeriodeTypeId(),
                        'plan_fact_lib_facture' => $this->view->translate('facture'),
                        'plan_fact_lib_avoir' => $this->view->translate('avoir'),
                        'plan_facturation_params_auto_display_vat' => false,
                    ));

                    // Set operation status to accpeted
                    $oOperationOrErrors->setOpStatusId(Operations::STATUS_ACCEPTE);

                    if ($oOperationOrErrors->validate()) {
                        // Operation and status are saved
                        $oOperationOrErrors->save();
                        $oConnection->commit();
                        $aCreatedOperations[] = $oOperationOrErrors;
                    } else {
                        $aErrors[] = sprintf(
                            $this->view->translate('error_csv_line_has_save_errors'),
                            $iLine,
                            '<br/>' . join('<br/>', $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oOperationOrErrors->getValidationFailures()))
                        );
                        $oConnection->rollBack();
                    }
                } else {
                    $aErrors[] = sprintf(
                        $this->view->translate('error_csv_line_has_save_errors'),
                        $iLine,
                        '<br/>' . join('<br/>', $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oOperationOrErrors))
                    );
                    $oConnection->rollBack();
                    continue;
                }
            }
        }

        $this->view->errors = $aErrors;
        $this->view->createdOperations = $aCreatedOperations;
    }
}
