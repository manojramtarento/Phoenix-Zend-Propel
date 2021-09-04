<?php

class Operation_FacturationController extends My_Controller_Action
{

    /**
     * Default method when calling the controller
     */
    public function indexAction()
    {
        $this->view->flashMessenger = $this->_helper->flashMessenger->getMessages('error');

        $aParams = $this->getRequest()->getParams();
        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);

        if (! $oOperation instanceof Operations) {
            throw new \InvalidArgumentException('The given op_id : "' . $aParams['op_id'] . '" does match any existing operation');
        }
        $this->view->operation = $oOperation;

        $oPlanFacturationParams = PlanFacturationParamsQuery::create()->findOneByOpId($aParams['op_id']);
        if (! isset($oPlanFacturationParams)) {
            $oPlanFacturationParams = new PlanFacturationParams($aParams['op_id']);
            $oPlanFacturationParams->setPlanFactDatePremFact(PlanFacturationParams::getDefaultPlanFactDatePremFact($aParams['op_id']));
            $oPlanFacturationParams->setPlanFactDateDerFact(PlanFacturationParams::getDefaultPlanFactDateDerFact($aParams['op_id']));
        }

        $this->view->plan_facturation_params = $oPlanFacturationParams;

        $aPlanFacturationDetails = PlanFacturationDetailsQuery::create()->filterByOpId($aParams['op_id'])->orderByPfdDatePlanif()
            ->leftJoinRFactureTypes()
            ->with('RFactureTypes')
            ->find();

        $this->view->plan_facturation_details = $aPlanFacturationDetails;

            // Retrieving funds raising data
        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::REQUEST_FOR_FUNDS)) {
            if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
                $this->_helper->FlashMessenger($this->view->translate('La connexion externe "Arthur" est désactivée, impossible de fournir les informations "Appel de fond"'), 'error');
                return $this->_helper->Redirector('index', 'description', 'operation', array('op_id' => $aParams['op_id']));
            }
            $aFundRaisingData = $oOperation->getFundRaisingAmount();
            $this->view->iEstimatedAdf = $aFundRaisingData['ADF_Estim'];
            $this->view->iInvoicedAdf = $aFundRaisingData['ADF_Facture'];
            $this->view->iChashedAdf = $aFundRaisingData['ADF_Encaisse'];
            $this->view->iUsedAdf = $aFundRaisingData['ADF_Utilise'];
            $this->view->iAvailable = $aFundRaisingData['ADF_Dispo'];

            $this->view->iUsedAdfPourcentage = $this->view->iChashedAdf != 0 ? (100 * ($aFundRaisingData['ADF_Reel'] / $this->view->iChashedAdf)) : 0;
        }

            // Retrieving the invoices list in ascending order
        $oCriteria = new Criteria();
        $oCriteria->addAscendingOrderByColumn('date_create');
        $this->view->factures = $oOperation->getFacturess($oCriteria);

            // Disabling all invoicing fields in case the operation is in "soldé" status
        $this->view->bDisableInvoiceSettingModification = $oOperation->getOpStatusId() == Operations::STATUS_SOLDE;
    }

    /**
     * Saving Invoicing settings
     */
    public function saveparamsAction()
    {

        $aParams = $this->getRequest()->getParams();
        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);

        if (! $oOperation instanceof Operations) {
            throw new \InvalidArgumentException('The given op_id : "' . $aParams['op_id'] . '" does match any existing operation');
        }

        // Formatting dates for MySQL
        $aParams['plan_fact_date_prem_fact'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['plan_fact_date_prem_fact']);
        $aParams['plan_fact_date_der_fact'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['plan_fact_date_der_fact']);

        $oBillingPlanSettingsOrerrors = $oOperation->saveBillingPlanSettings($aParams);

        if (is_array($oBillingPlanSettingsOrerrors)) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oBillingPlanSettingsOrerrors, 'error');
            foreach ($aErrors as $sSingleErrorMessage) {
                $this->_helper->flashMessenger($sSingleErrorMessage, 'error');
            }
        }
        
        $this->_helper->Redirector('index', 'facturation', 'operation', array('op_id' => $aParams['op_id']));
    }

    /**
     * Displaying the popup form to add/edit a invoicing plan
     *
     * @throws \LogicException
     * @throws \BadMethodCallException
     */
    public function popupplanfacturationAction()
    {
        $oRequest = $this->getRequest();
        if ($oRequest->isXmlHttpRequest() && $oRequest->isPost()) {
            $this->_helper->layout->disableLayout();
            $aParams = $oRequest->getParams();

            if (! empty($aParams['op_id']) && PlanFacturationParamsQuery::create()->filterByOpId($aParams['op_id'])->count() == 0) {
                $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('Les paramètres de facturation ne sont pas validés')));
            }

            $oOperation = null;
            $oPlanFacturationDetail = null;

            // We either receive an op_id (case of new invoice plan) or a pfd_id in case of invoice plan update
            if (! empty($aParams['op_id'])) {
                // In case of new invoice plan, we create a new object attached to the given operation
                $oPlanFacturationDetail = new PlanFacturationDetails();
                $oPlanFacturationDetail->setOpId($aParams['op_id']);
            } elseif (! empty($aParams['pfd_id'])) {
                $oPlanFacturationDetail = PlanFacturationDetailsQuery::create()->findPk($aParams['pfd_id']);
            }

            if (! $oPlanFacturationDetail instanceof PlanFacturationDetails) {
                throw new \LogicException('No valid invoice plan could be found via the given arguments ' . print_r($aParams, true));
            }
            $oOperation = OperationsQuery::create()->findPk($oPlanFacturationDetail->getOpId());

            if (! $oOperation instanceof Operations) {
                throw new \LogicException('No valid operation could be found via the given arguments ' . print_r($aParams, true));
            }

            if ($oOperation->getOpStatusId() == Operations::STATUS_SOLDE) {
                $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('L\'opération est en statut "soldé", la création des factures n\'est plus disponible') . '.'));
            }

            $this->view->plan_facturation_detail = $oPlanFacturationDetail;
        } else {
            throw new \BadMethodCallException('The HTTP method of the request must be POST and the request must be sent using AJAX');
        }
    }

    /**
     * Send cost reminder
     */
    public function popuprelancecoutsAction()
    {
        $oRequest = $this->getRequest();
        if (! $oRequest->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $this->_helper->layout->disableLayout();
        $aParams = $oRequest->getParams();

        // Check if op_id exists and not empty in request parameters
        if (empty($aParams['op_id'])) {
            throw new \LogicException('The request parameter "op_id" is expected but is missing');
        }

        $oOperation = OperationsQuery::create()->findOneByOpId($aParams['op_id']);
        if (! $oOperation instanceof \Operations) {
            throw new \LogicException('The operation  "' . $aParams['op_id'] . '" does not exist');
        }

        // Only project manager if exists can be notify, else the manager will be notify.
        $oOperationUserCdp = $oOperation->getUserCdp();
        $oOperationCp = $oOperation->getUserCP();
        $aMailReceivers = $aMailReceivers = array(Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_FINANCIAL_ADMINISTRATIVE_DIVISION));
        if ($oOperationUserCdp instanceof \Users && $oOperationUserCdp->getUserMail()) {
            $aMailReceivers[] = $oOperationUserCdp->getUserMail();
        } elseif ($oOperationCp instanceof Users && $oOperationCp->getUserMail()) {
            $aMailReceivers[] = $oOperationCp->getUserMail();
        }
        $this->view->op_id = $aParams['op_id'];
        $this->view->groupes_validation = $aMailReceivers;

        if (isset($aParams['submit_send_relance'])) {
            if ($oOperation->relanceGroupesValidationCouts($aMailReceivers)) {
                $sMessage = $this->view->translate('message_success_reminder_sent');
            } else {
                $sMessage = $this->view->translate('message_error_reminder_sent');
            }

            $this->_response->clearBody();
            $this->_response->setBody($sMessage);
            $this->_helper->ViewRenderer->setNoRender(true);
        }
    }

    /**
     * Edition of an invoice deadline
     */
    public function addplanfactudetailAction()
    {

        $aParams = $this->getRequest()->getParams();

        // 32655 : Formattage de date pour MySQL
        $aParams['pfd_date_planif'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['pfd_date_planif']);
        if (! empty($aParams['pfd_id'])) {
            $oPlanFacturationDetails = PlanFacturationDetailsQuery::create()->findPk($aParams['pfd_id']);
        } else {
            $oPlanFacturationDetails = new PlanFacturationDetails();
        }

        $oPlanFacturationDetails->fromArray($aParams, BasePeer::TYPE_FIELDNAME);

        if ($oPlanFacturationDetails->validate()) {
            $oPlanFacturationDetails->save();
            $this->_helper->ViewRenderer->setNoRender(true);
            $this->_helper->layout->disableLayout();
            $this->_response->clearBody();
            $this->_response->setBody($this->view->translate('Echéance éditée') . '.');
        } else {
            $aErrors = $oPlanFacturationDetails->getValidationFailures();
            $this->_helper->PropelFailures()->registerErrors($aErrors);
            $this->_forward('popupplanfacturation', 'facturation', 'operation', array('op_id' => $aParams['op_id']));
        }
    }

    /**
     * Display of billing deadlines
     */
    public function planfacturationdetailsAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if ($this->getParam('format') == 'csv') {
            $oSelect = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()
                ->from('plan_facturation_details', array('Demande facture' => 'DATE_FORMAT(pfd_date_planif, \'%d/%m/%Y\')', 'taux ADF' => 'pfd_taux_adf', 'taux partiel' => 'pfd_taux_partiel', 'création échéance' => 'DATE_FORMAT(date_create, \'%d/%m/%Y\')', 'modification échéance' => 'DATE_FORMAT(date_modify, \'%d/%m/%Y\')'))
                ->join('r_facture_types', 'plan_facturation_details.pfd_type_fact_id=r_facture_types.r_fact_type_id', array('type facture' => 'r_fact_type_libelle'))
                ->where('op_id=?', $aParams['op_id']);

            $oMyDataExportCsv = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Select($oSelect));

            $sFilePath = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilePath, $oMyDataExportCsv->make());
            My_File_Transfer::getInstance()->send($sFilePath);
        } else {
            $aPlanFacturationDetails = PlanFacturationDetailsQuery::create()->filterByOpId($aParams['op_id'])->orderByPfdDatePlanif()
                ->leftJoinRFactureTypes()
                ->with('RFactureTypes')
                ->find();
            $this->view->plan_facturation_details = $aPlanFacturationDetails;
        }
    }

    public function rubriquesfacturesAction()
    {
        $aParams = $this->getRequest()->getParams();
        if ($this->getParam('format') == 'csv') {
            $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
            $oMyDataExportSourceAdapterArray = new My_Data_Export_Source_Adapter_Array($oOperation->getMontantFactureByRubrique());
            $oMyDataExportCsv = new My_Data_Export_CSV($oMyDataExportSourceAdapterArray);

            // #28654 : Format amount number with comma instead of dot
            $oFormatter = new My_Data_Formatter();
            $oFormatter->add('fact_rub_montant_ht', 'amount');
            $oFormatter->add('fact_rub_montant_ttc', 'amount');
            $oMyDataExportCsv->setFormatter($oFormatter);

            $sFilePath = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilePath, $oMyDataExportCsv->make());
            My_File_Transfer::getInstance()->send($sFilePath);
        }
    }

    /**
     * Deletion of a billing deadline
     */
    public function deleteplanfactudetailAction()
    {
        $aParams = $this->getRequest()->getParams();

        $oPlanFacturationDetail = PlanFacturationDetailsQuery::create()->findPk($aParams['pfd_id']);
        $aParams['op_id'] = $oPlanFacturationDetail->getOpId();
        if ($oPlanFacturationDetail->delete() == false) {
            $aValidationFailures = $oPlanFacturationDetail->getValidationFailures();
            $aValidationFailures = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aValidationFailures);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aValidationFailures));
        } else {
            $this->_forward('planfacturationdetails', 'facturation', 'operation', $aParams);
        }
    }

    public function adddecouvertAction()
    {
        $aParams = $this->getRequest()->getParams();

        $oOperationDecouverts = new OperationDecouverts();
        $oOperationDecouverts->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
        if ($oOperationDecouverts->validate()) {
            $oOperationDecouverts->save();

            // Retrieve the operation concerned and sent the appropriate mail
            $oOpe = $oOperationDecouverts->getOperations();
            Phoenix_MailSender::comptaNewDecouvert($oOpe, $oOperationDecouverts);

            $this->_helper->ViewRenderer->setNoRender(true);
            $this->_helper->layout->disableLayout();
            $this->_response->clearBody();
            $this->_response->setBody($this->view->translate('Demande ajoutée') . '.');
        } else {
            $aErrors = $oOperationDecouverts->getValidationFailures();
            $this->_helper->PropelFailures()->registerErrors($aErrors);
            $this->_forward('popupdecouvert', 'facturation', 'operation', array('op_id' => $aParams['op_id']));
        }
    }

    public function popupdecouvertAction()
    {
        $oRequest = $this->getRequest();
        $aParams = $oRequest->getParams();
        if ($oRequest->isXmlHttpRequest()) {
            $this->_helper->layout->disableLayout();

            $aOperation = OperationsQuery::create()->filterByPrimaryKey($aParams['op_id'])
                ->leftJoinClients()
                ->with('Clients')
                ->find();

            $this->view->operation = $aOperation[0];
        }
    }

    /**
     * Display of overdraft requests
     */
    public function decouvertsAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        $this->view->decouverts = OperationDecouvertsQuery::create()->findByOpId($aParams['op_id']);
    }

    /**
     * Generation of invoices according to deadlines defined in the billing plan
     */
    public function genfacturesAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
        $oOperation->genFactures();
        $aValidationFailures = $oOperation->getValidationFailures();
        if ($aValidationFailures) {
            $aValidationFailures = $this->_helper->PropelFailures()->validationFailuresToArray($aValidationFailures);
            return $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aValidationFailures));
        }
        $this->_forward('factures');
    }

    /**
     * Validation of an invoice
     */
    public function validatefactureAction()
    {
        $oRequest = $this->getRequest();
        if ($oRequest->isXmlHttpRequest()) {
            $aParams = $oRequest->getParams();

            $oInvoice = FacturesQuery::create()->findPk($aParams['primaryValue']);
            if (! $oInvoice instanceof Factures) {
                $sErrorMessage = sprintf('%s %s %s', $this->view->translate('L\'identifiant de la facture demandé'), $aParams['primaryValue'], $this->view->translate('n\'existe pas'));
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate($sErrorMessage)));
            }
            if ($oInvoice->valide()) {
                // Generate invoice pdf
                Phoenix_File_Invoice_PdfGenerator::getInstance()->generateInvoicePdf($oInvoice);

                if ($oInvoice->hasNonEditedPredecessorInvoices()) {
                    $oResponse = new Phoenix_Ajax_Components_Response(
                        Phoenix_Ajax_Components_Response::ACTION_DISPLAY_WARNINGS,
                        $this->view->translate('Attention : cette facture ne pourra pas être éditée tant que les factures plus anciennes ne sont pas éditées')
                    );
                } else {
                    $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->translate('maj ok'));
                }

                $this->_helper->Json($oResponse);
            } else {
                $aValidationFailures = $oInvoice->getValidationFailures();
                $aValidationFailures = $this->_helper->PropelFailures()->validationFailuresToArray($aValidationFailures);
                $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aValidationFailures);
                $this->_helper->Json($oResponse);
            }
        }
    }

    /**
     * Unvalidation of an invoice
     */
    public function unvalidatefactureAction()
    {
        $oRequest = $this->getRequest();
        if ($oRequest->isXmlHttpRequest()) {
            $aParams = $oRequest->getParams();

            $oInvoice = FacturesQuery::create()->findPk($aParams['primaryValue']);
            if ($oInvoice instanceof Factures) {
                if ($oInvoice->unvalide()) {
                    // Generate invoice pdf
                    Phoenix_File_Invoice_PdfGenerator::getInstance()->generateInvoicePdf($oInvoice);
                    $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->translate('maj ok'));
                    $this->_helper->Json($oResponse);
                } else {
                    $aValidationFailures = $oInvoice->getValidationFailures();
                    $aValidationFailures = $this->_helper->PropelFailures()->validationFailuresToArray($aValidationFailures);
                    $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aValidationFailures);
                    $this->_helper->Json($oResponse);
                }
            }
        }
    }

    public function deletefactureAction()
    {
        $oRequest = $this->getRequest();
        if ($oRequest->isXmlHttpRequest()) {
            $aParams = $oRequest->getParams();
            $oInvoice = FacturesQuery::create()->findPk($aParams['fact_id']);
            if (! $oInvoice->delete()) {
                $aErrors = My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oInvoice->getValidationFailures());
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, ''));
            }
        }
    }

    /**
     * Locking an invoice
     */
    public function verroufactureAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $aParams = $this->_request->getParams();
            $oInvoice = FacturesQuery::create()->findPk($aParams['primaryValue']);
            if (! $oInvoice instanceof Factures) {
                $sErrorMessage = sprintf('%s %s %s', $this->view->translate('L\'identifiant de la facture demandé'), $aParams['primaryValue'], $this->view->translate('n\'existe pas'));
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate($sErrorMessage)));
            }

            if ($oInvoice->hasNonEditedPredecessorInvoices() && $oInvoice->validate() && ! empty($aParams['fieldValue']) && $aParams['fieldValue'] == 1) {
                $oInvoice->setFactVerrou(1)->save();
                $oResponse = new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_WARNINGS,
                    $this->view->translate('Attention : cette facture ne pourra pas être éditée tant que les factures plus anciennes ne sont pas éditées')
                );
            } else {
                $oResponse = $this->_helper->AjaxComponents()->updateField(array('Factures'));
            }
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Displaying invoices for an operation
     */
    public function facturesAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if ($this->getParam('format') == 'csv') {
            $oSelect = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter()->select()
                ->from(
                    'View_Facture_Listing',
                    array(
                        'Date de création' => 'fact_date_create_fr',
                        'N° facture' => 'fact_reference',
                        'N° commande' => 'fact_num_cmd',
                        'Type de facture' => 'r_fact_type_libelle',
                        'Montant HT' => 'fact_montant_ht',
                        'Montant TTC' => 'fact_montant_ttc',
                        'Statut' => 'r_fact_stat_libelle',
                        'Échéance' => 'fact_date_echeance_fr',
                        'Encaissée' => 'fact_date_encaisse_fr'
                    )
                )->where('op_id=?', $aParams['op_id'])
                ->order('fact_date_create ASC');

            $oAdapterExport = new My_Data_Export_Source_Adapter_Select($oSelect);
            $oMyDataExportCsv = new My_Data_Export_CSV($oAdapterExport);

            // #28654 : Format amount number with comma instead of dot
            $oFormatter = new My_Data_Formatter();
            $oFormatter->add('Montant HT', 'amount');
            $oFormatter->add('Montant TTC', 'amount');
            $oMyDataExportCsv->setFormatter($oFormatter);

            $sFilePath = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilePath, $oMyDataExportCsv->make());
            My_File_Transfer::getInstance()->send($sFilePath);
        } else {
            // 42271 Retrieving the invoices list in ascending order
            $oCriteria = new Criteria();
            $oCriteria->addAscendingOrderByColumn('date_create');
            $this->view->factures = OperationsQuery::create()->findPk($aParams['op_id'])->getFacturess($oCriteria);
        }
    }

    /**
     * Retrieve PDF invoice
     */
    public function facturepdfAction()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);

        $aParams = $this->getRequest()->getParams();
        $aErrors = array();
        $oInvoice = FacturesQuery::create()->findPk($aParams['fact_id']);
        // Checking whether the given invoice id much an existing invoice
        if ($oInvoice instanceof Factures) {
            if (! Phoenix_File_Invoice_PdfGenerator::getInstance()->downloadInvoicePdf($oInvoice)) {
                $aErrors = My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oInvoice->getValidationFailures());
            }
        } else {
            // Displaying an error message instead
            $aErrors[] = sprintf('%s %s %s', $this->view->translate('L\'identifiant de la facture demandé'), $aParams['fact_id'], $this->view->translate('n\'existe pas'));
        }
        // If errors
        if ($aErrors) {
            foreach ($aErrors as $sErrorMessage) {
                $this->_helper->flashMessenger($this->view->translate($sErrorMessage), 'error');
            }
            $this->_helper->Redirector('index', 'facturation', 'operation', array('op_id' => $aParams['op_id']));
        }
    }

    /**
     * Invoice Excel
     */
    public function factureexcelAction()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);

        $sFactId = $this->getParam('fact_id');
        $oInvoice = FacturesQuery::create()->findPk($sFactId);
        $aErrors = array();
        if (! Phoenix_File_Invoice_ExcelGenerator::getInstance()->downloadInvoiceExcel($oInvoice)) {
            $aErrors = My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oInvoice->getValidationFailures());
            foreach ($aErrors as $sErrorMessage) {
                $this->_helper->flashMessenger($this->view->translate($sErrorMessage), 'error');
            }
            $this->_helper->Redirector('index', 'facturation', 'operation', array('op_id' => $this->getParam('op_id')));
        }
    }

    public function updatenocmdAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $this->_helper->json($this->_helper->AjaxComponents()->updateField());
        }
    }

    public function updatenoteAction()
    {

        if ($this->getRequest()->isXmlHttpRequest()) {
            $this->_helper->json($this->_helper->AjaxComponents()->updateField());
        }
    }

    /**
     * Cette fonction permet de visualiser et de modifier la liste des motifs
     * spécifiques associés à une facture
     */
    public function popupmodifffacturemotifsAction()
    {
        $oRequest = $this->getRequest();
        if ($oRequest->isXmlHttpRequest()) {
            $this->_helper->layout->disableLayout();
            $aParams = $oRequest->getParams();
            $iFactId = $oRequest->getParam('fact_id');
            // Affichage des motifs spécifiques pour une facture
            if (isset($aParams['submit_facture_motifs'])) {
                $this->_helper->layout->disableLayout();
                $this->_helper->ViewRenderer->setNoRender(true);

                // Mise à jour des motifs spécifique à une facture
                $iOpId = FacturesQuery::create()->findPk($iFactId)->getOpId();

                if (isset($aParams['r_fact_motif_libelle'])) {
                    // Supression de toutes les motifs déjà associés à la facture
                    LnkFactureMotifsQuery::create()->filterByFactId($iFactId)->delete();

                    foreach ($aParams['r_fact_motif_libelle'] as $sMotif) {
                        // Enregistrement des motifs associé
                        $oLnkFactureMotifs = new LnkFactureMotifs();
                        $oLnkFactureMotifs->setFactId($iFactId)->setMotifId($sMotif)->save();
                    }
                } else {
                    $sMotifsErrorMessage = $this->view->translate('Le choix des motifs est obligatoire');
                    $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate($sMotifsErrorMessage), 'bKeepOpened'));
                }
            } else {
                $this->view->aMotifs = RFactureMotifsQuery::create()->getSelectedMotifsForFacture($iFactId);
                $this->view->iFactId = $iFactId;
            }
        }
    }

    /**
     * Cette fonction permet de supprimer les motifs associés à une facture donnée
     */
    public function cancelfacturemotifsAction()
    {
        $oRequest = $this->getRequest();
        if ($oRequest->isXmlHttpRequest()) {
            $this->_helper->layout->disableLayout();
            $this->_helper->ViewRenderer->setNoRender(true);
            $iFactId = $oRequest->getParam('fact_id');

            // Supression de toutes les motifs déjà associés à la facture
            $oInvoiceMotifs = LnkFactureMotifsQuery::create()->filterByFactId($iFactId)->delete();
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, ''));
        }
    }

    public function checkinvoicingaddresscontactactivityAction()
    {
        $oRequest = $this->getRequest();
        if ($oRequest->isXmlHttpRequest()) {
            $this->_helper->layout->disableLayout();
            $this->_helper->ViewRenderer->setNoRender(true);
            $iInvoiceId = $oRequest->getParam('invoice_id');

            $oInvoice = FacturesQuery::create()->findPk($iInvoiceId);
            if ($oInvoice instanceof Factures) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $oInvoice->areInvoicingContactsActive()));
            }
        }
    }
}
