<?php

class Comptabilite_FacturesController extends My_Controller_Action
{

    const NUMBER_OF_ROWS_PER_PAGE = 50;

    public function init()
    {
        $this->_helper->ContextSwitch()->initContext();
    }

    /**
     * Index action
     */
    public function indexAction()
    {
        $aParams = $this->_request->getParams();
        $oInvoiceSearchService = new \Phoenix_Invoice_Service_InvoiceSearchService();

        $oSelect = $oInvoiceSearchService->makeSelectBySearchParams($aParams);
        $oSelect = $oSelect->from('View_Facture_Listing_Simplifie');

        // Pagination management
        $oPaginator = new My_Paginator(new Zend_Paginator_Adapter_DbSelect($oSelect));
        $oPaginator->setCurrentPageNumber($this->_getParam('page'));
        $oPaginator->setItemCountPerPage(self::NUMBER_OF_ROWS_PER_PAGE);

        // Sum of the amounts of invoices by status
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        // Performance optimization (Ticket:37886)
        $aGroupByStatus = $oZendDbSelect->from('View_Facture_Listing_Simplifie', array('fact_status_id', 'sum' => '(sum(fact_montant_ttc))'))->group('fact_status_id')->query()->fetchAll(PDO::FETCH_KEY_PAIR);

        $this->view->montant_cree = isset($aGroupByStatus[RFactureStatuts::CREATED]) ? $aGroupByStatus[RFactureStatuts::CREATED] : 0;
        $this->view->montant_valide = isset($aGroupByStatus[RFactureStatuts::VALIDATED]) ? $aGroupByStatus[RFactureStatuts::VALIDATED] : 0;
        $this->view->montant_edite = isset($aGroupByStatus[RFactureStatuts::EDITED]) ? $aGroupByStatus[RFactureStatuts::EDITED] : 0;
        $this->view->montant_encaisse = isset($aGroupByStatus[RFactureStatuts::ENCAISSE]) ? $aGroupByStatus[RFactureStatuts::ENCAISSE] : 0;


        if (isset($aParams['submit_comptage'])) {
            // Sum of the amounts of invoices by status
            if (isset($aParams['check_facture'])) {
                $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
                $aGroupByStatus = $oZendDbSelect->from('View_Facture_Listing', array('fact_status_id', 'sum' => '(sum(fact_montant_ttc))'))->where('fact_id in (?)', $aParams['check_facture'])->group('fact_status_id')->query()->fetchAll(PDO::FETCH_KEY_PAIR);
                $aGroupByStatus[RFactureStatuts::CREATED] = isset($aGroupByStatus[RFactureStatuts::CREATED]) ? $aGroupByStatus[RFactureStatuts::CREATED] : 0;
                $aGroupByStatus[RFactureStatuts::VALIDATED] = isset($aGroupByStatus[RFactureStatuts::VALIDATED]) ? $aGroupByStatus[RFactureStatuts::VALIDATED] : 0;
                $aGroupByStatus[RFactureStatuts::EDITED] = isset($aGroupByStatus[RFactureStatuts::EDITED]) ? $aGroupByStatus[RFactureStatuts::EDITED] : 0;
                $aGroupByStatus[RFactureStatuts::ENCAISSE_PARTIEL] = isset($aGroupByStatus[RFactureStatuts::ENCAISSE_PARTIEL]) ? $aGroupByStatus[RFactureStatuts::ENCAISSE_PARTIEL] : 0;
                $aGroupByStatus[RFactureStatuts::ENCAISSE] = isset($aGroupByStatus[RFactureStatuts::ENCAISSE]) ? $aGroupByStatus[RFactureStatuts::ENCAISSE] : 0;

                $this->view->montant_cree_checked = $aGroupByStatus[RFactureStatuts::CREATED];
                $this->view->montant_valide_checked = $aGroupByStatus[RFactureStatuts::VALIDATED];
                $this->view->montant_edite_checked = $aGroupByStatus[RFactureStatuts::EDITED] + $aGroupByStatus[RFactureStatuts::ENCAISSE_PARTIEL];
                $this->view->montant_encaisse_checked = $aGroupByStatus[RFactureStatuts::ENCAISSE];
            } else {
                $this->_helper->FlashMessenger($this->view->translate('Aucune facture sélectionnée'), 'error');
            }
        }

        $aMotifs = array();
        foreach ($oPaginator as $aInvoice) {
            $aMotifs[$aInvoice['fact_id']] = FacturesQuery::create()->findPk($aInvoice['fact_id'])->getFactMotifsLibelle();
        }

        $this->view->findWord = isset($aParams['findword']) ? $aParams['findword'] : '';
        $this->view->paginator = $oPaginator;
        $this->view->aMotifs = $aMotifs;
        $this->view->oldCpUsers = OperationsQuery::create()->getOldCpUsers();
    }

    /**
     * Export invoices Action
     */
    public function exportcsvAction()
    {
        $aParams = $this->_request->getParams();

        $oInvoiceSearchService = new \Phoenix_Invoice_Service_InvoiceSearchService();

        $oSelect = $oInvoiceSearchService->makeSelectBySearchParams($aParams);
        $oSelect = $oInvoiceSearchService->makeQueryForExport($oSelect);

        $oExportAdapter = new My_Data_Export_Source_Adapter_Select($oSelect);
        $oExport = new My_Data_Export_CSV($oExportAdapter);

        // Format amount number with comma instead of dot
        $oFormatter = new My_Data_Formatter();
        $oFormatter->add('fact_montant_ht', 'amount');
        $oFormatter->add('fact_montant_ttc', 'amount');

        // Format the internal notes, by replacing the lines returns with spaces
        $oFormatter->add('plan_fact_note_interne', 'linebreaks');
        $oExport->setFormatter($oFormatter);

        $sFilename = 'factures-' . date('Ymd_His') . '_' . rand(100, 999) . '.csv';
        file_put_contents(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sFilename, $oExport->make());
        My_File_Transfer::getInstance()->send(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sFilename);
    }

    public function facturepdfAction()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);

        $aParams = $this->_request->getParams();

        $oInvoice = FacturesQuery::create()->findPk($aParams['fact_id']);
        $aErrors = array();
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
            $this->_redirect($this->_request->getHeader('Referer'), array('prependBase' => false));
        }
    }

    /**
     * Edition of the invoice
     */
    public function editionAction()
    {

        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();

        $oInvoice = FacturesQuery::create()->findPk($aParams['fact_id']);

        if (! $oInvoice instanceof Factures) {
            $sErrorMessage = sprintf('%s %s %s', $this->view->translate('L\'identifiant de la facture demandé'), $aParams['fact_id'], $this->view->translate('n\'existe pas'));
            return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate($sErrorMessage)));
        }

        $this->view->fact_reference = $oInvoice->getFactReference();

        if (isset($aParams['view_site'])) {
                // Retrieving the contact information received as parameter, following the customer change via selector
            $oContact = ContactsQuery::create()->findPk($aParams['ct_id']);
            $this->view->ct_id = $aParams['ct_id'];
            $this->assignContactInformationsOnContactChangeToTheView($oContact);
        } elseif ($oInvoice->hasNonEditedPredecessorInvoices()) {
            return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('Les factures Phoenix doivent être éditées dans l\'ordre de génération')));
        } else {
                // Entry point in the first form display, retrieving contact information associated with the invoice
            $this->assignContactInformationsToTheView($oInvoice);
            $oContact = $oInvoice->getContactFacturation();
            $this->view->bAutoCheckSendEmail = ($oContact->getCtReceiveFactByEmail() === true) ? true : false;
            $this->view->fact_mention_spec = $oInvoice->getPlanFacturationParams()->getPlanFactInfo();
            $this->view->ct_id = $oInvoice->getCtId();
        }

        $this->view->fact_attention = $oContact->getCtNomPrenom();

        if (Zend_Validate::is($oContact->getCtEmail(), 'EmailAddress')) {
            $this->view->mail_dest_to = $oContact->getCtEmail();
        }

        // Render template subject
        $oTemplateManager = new Phoenix_TemplateManager_Invoice();
        $oTemplateManager->setOperation($oInvoice->getOperations())->setInvoice($oInvoice);

        $this->view->mail_subject = $oTemplateManager->renderTemplateFromSetting(Settings::SETTING_KEY_TPL_INVOICE_MAIL_SUBJECT);
        $this->view->mail_content = $oTemplateManager->renderTemplateFromSetting(Settings::SETTING_KEY_TPL_INVOICE_MAIL_BODY);

        // Post process
        if (isset($aParams['submit'])) {
            // Form validation
            $this->_helper->layout->disableLayout();
            $this->_response->clearBody();
            $this->_helper->ViewRenderer->setNoRender(true);

            $oInvoice->fromArray($aParams, BasePeer::TYPE_FIELDNAME);

            if (in_array($oInvoice->getFactStatusId(), array(RFactureStatuts::EDITED, RFactureStatuts::ENCAISSE))) {
                $this->_helper->FlashMessenger($this->view->translate('La facture est éditée, la modification n\'est plus possible'), 'error');
                return $this->_helper->Redirector('index');
            }

            if (! $oInvoice->validate()) {
                $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oInvoice->getValidationFailures());

                $oZendViewHelperHtmlList = $this->view->getHelper('HtmlList');
                return $this->_response->setBody($oZendViewHelperHtmlList->htmlList($aErrors));
            }

            $oInvoice->save();

            if ($oInvoice->edit() == false) {
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                    $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oInvoice->getValidationFailures())
                ));
            }
            // Generate pdf after edition
            Phoenix_File_Invoice_PdfGenerator::getInstance()->generateInvoicePdf($oInvoice);
            $this->_response->setBody('<a href="/comptabilite/factures/getfactureedition/fact_id/' . $oInvoice->getFactId() . '">' . $this->view->translate('Télécharger la facture') . '</a>');

            if (empty($aParams['send_mail'])) {
                return;
            }
            
            // Retrieves mail information
            $this->view->mail_dest_to = $aParams['mail_dest']['to'];
            $this->view->mail_dest_cc = $aParams['mail_dest']['cc'];
            $this->view->mail_dest_bcc = $aParams['mail_dest']['bcc'];
            $this->view->mail_subject = $aParams['mail_subject'];
            $this->view->mail_content = $aParams['mail_content'];

            $aMails = explode(',', $aParams['mail_dest']['to']) + explode(',', $aParams['mail_dest']['cc']) + explode(',', $aParams['mail_dest']['bcc']);

            // Validate emails
            $aErrors = array();
            if (empty($aParams['mail_dest']['to'])) {
                $aErrors['mail.mail_dest_to'] = array(new ValidationFailed('mail_dest_to', $this->view->translate('Le destinataire du mail doit être indiqué')));
            } else {
                foreach ($aMails as $sMail) {
                    if (! Zend_Validate::is($sMail, 'Zend_Validate_EmailAddress')) {
                        $aErrors['mail.mail_dest_to'] = array(new ValidationFailed('mail_dest_to', $this->view->translate('Une ou des adresses sont mal renseignées')));
                        break;
                    }
                }
            }

            if (empty($aParams['mail_subject'])) {
                $aErrors['mail.mail_subject'] = array(new ValidationFailed('mail_subject', $this->view->translate('Le sujet du mail doit être indiqué')));
            }

            if ($aErrors) {
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                    $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors)
                ));
            }

            $bSent = Phoenix_MailSender::sendInvoiceToClient(
                $aParams['mail_subject'],
                $aParams['mail_content'],
                $aParams['mail_dest'],
                $oInvoice
            );

            if ($bSent) {
                $oInvoice->setFactEmail($aParams['mail_dest']['to'])->save();
                return $this->_response->appendBody('<br><br>' . $this->view->translate('Facture envoyée par mail'));
            }
            return $this->_response->appendBody(
                '<br>' . $this->view->translate('La facture a été éditée, en revanche l’email contenant la facture ne peut pas être envoyé.')
                    . '<br>' . implode(
                        '<br>',
                        array_map(
                            array($this->view, 'translate'),
                            $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oInvoice->getValidationFailures())
                        )
                    )
            );
        }
    }


    /**
     * Editing a batch of invoices
     */
    public function editiongroupAction()
    {

        $this->_helper->layout->disableLayout();
        $this->_response->clearBody();
        $this->_helper->ViewRenderer->setNoRender(true);

        $aParams = $this->_request->getParams();

        if (! isset($aParams['check_facture'])) {
            $this->_helper->FlashMessenger($this->view->translate('Aucune facture sélectionnée'), 'error');
        } else {
            $aInvoices = FacturesQuery::create()->filterByPrimaryKeys($aParams['check_facture'])->orderByFactId()->find();

            $aMessages = array();
            $aErrors = array();
            $aInvoicesIds = array();
            foreach ($aInvoices as $oInvoice) {
                if ($oInvoice->hasNonEditedPredecessorInvoices()) {
                    $aErrors[] = $oInvoice->getFactReference() . ' : ' . $this->view->translate('Les factures Phoenix doivent être éditées dans l\'ordre de génération');
                } elseif ($oInvoice->edit()) {
                    // Generate invoice pdf
                    Phoenix_File_Invoice_PdfGenerator::getInstance()->generateInvoicePdf($oInvoice);
                    $aMessages[] = $this->view->translate('La facture') . " '" . $oInvoice->getFactReference() . "' " . $this->view->translate('est éditée');
                    $aInvoicesIds[] = $oInvoice->getFactId();

                    if (isset($aParams['send_mail'])) {
                        if (Phoenix_MailSender::sendInvoiceToClient($oInvoice)) {
                            $aMessages[] = $this->view->translate('Facture envoyée par mail');
                        } else {
                            $aErrors[] = $this->view->translate('La facture a été éditée, en revanche l’email contenant la facture ne peut pas être envoyé.')
                                . implode(', ', array_map(
                                    array($this->view, 'translate'),
                                    $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oInvoice->getValidationFailures())
                                ));
                        }
                    }
                } else {
                    $aErrors[] = $this->view->translate('La facture') . " '" . $oInvoice->getFactReference() . "' " . $this->view->translate('n\'a pu être éditée') . ", " . implode(', ', $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oInvoice->getValidationFailures()));
                }
            }
            if ($aInvoicesIds) {
                $aMessages[] = '<a href="/comptabilite/factures/getfactureedition/fact_id/' . implode(',', $aInvoicesIds) . '">' . $this->view->translate('Télécharger la facture') . '</a>';
            }
            if ($aMessages) {
                if ($aErrors) {
                    $aMessages = array_merge($aMessages, array('<br/><br/>' . $this->view->translate('Erreurs') . ' : <br/><br/>'), $aErrors);
                }

                $this->_helper->FlashMessenger($aMessages, 'default');
            } elseif ($aErrors) {
                $this->_helper->FlashMessenger($aErrors, 'error');
            }
        }
        $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD));
    }

    /**
     * Reissue the invoice
     */
    public function reeditionAction()
    {
        $aParams = $this->_request->getParams();
        $iFactId = (isset($aParams['check_facture'])) ? $aParams['check_facture'] : $aParams['fact_id'];
        $oInvoice = FacturesQuery::create()->filterByFactId($iFactId)->findOne();
        $this->_helper->layout->disableLayout();

        if (isset($aParams['submit'])) {
            // Form validation
            $this->_response->clearBody();
            $this->_helper->ViewRenderer->setNoRender(true);

            // Logging of invoice
            $oInvoice->historiseBill();

            $oInvoice->fromArray($aParams, BasePeer::TYPE_FIELDNAME);

            if ($oInvoice->validate()) {
                // After archiving, we save the new informations
                $oInvoice->save();

                // Generate pdf after re-edition
                Phoenix_File_Invoice_PdfGenerator::getInstance()->generateInvoicePdf($oInvoice);

                $this->_response->setBody('<a href="/comptabilite/factures/getfactureedition/fact_id/' . $oInvoice->getFactId() . '">' . $this->view->translate('Télécharger la facture') . '</a>');
                if (isset($aParams['send_mail'])) {
                    // Save invoice email to be sent
                    $oInvoice->setFactEmail($oInvoice->getOperations()->getContactFacturation()->getCtEmail())->save();
                    Phoenix_MailSender::sendInvoiceToClient($oInvoice) ? $this->_response->appendBody('<br><br>' . $this->view->translate('Facture envoyée par mail')) : $this->_response->setBody('<br>' . $this->view->translate('La facture a été éditée, en revanche l’email contenant la facture ne peut pas être envoyé.') . '<br>' . implode(array_map(array($this->view, 'translate'), $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oInvoice->getValidationFailures()))));
                }
            } else {
                $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oInvoice->getValidationFailures());
                $oZendViewHelperHtmlList = $this->view->getHelper('HtmlList');
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $oZendViewHelperHtmlList->htmlList($aErrors)));
            }
        } else {
            $this->view->fact_reference = $oInvoice->getFactReference();

            if (! isset($aParams['view_site'])) {
                if ($oInvoice->isInvoiceValidForReedition()) {
                    // Retrieving contact information associated with the invoice
                    $this->assignContactInformationsToTheView($oInvoice);
                    $oContact = $oInvoice->getContactFacturation();
                    $this->view->bAutoCheckSendEmail = ($oContact->getCtReceiveFactByEmail() === true) ? true : false;
                    $this->view->fact_mention_spec = $oInvoice->getFactMentionSpec();
                    $iCtId = $oInvoice->getCtId();
                } else {
                    $sStatusError = $this->view->translate('La facture est en statut créé ou validée, elle ne peut pas être réédité');
                    $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $sStatusError));
                }
            } else {
                $iCtId = $aParams['ct_id'];
                // Retrieving the contact information received as parameter
                $oContact = ContactsQuery::create()->findPk($iCtId);
                $this->assignContactInformationsOnContactChangeToTheView($oContact);
            }


            $this->view->fact_attention = $oContact->getCtNomPrenom();

            if (Zend_Validate::is($oContact->getCtEmail(), 'EmailAddress')) {
                $this->view->has_contact_fact = true;
                $this->view->ct_mail = $oContact->getCtEmail();
            } else {
                $this->view->has_contact_fact = false;
            }

            $this->_request->setParam('fact_id', $oInvoice->getFactId());
            $this->_request->setParam('cl_id', $oInvoice->getClId());
            $this->_request->setParam('op_id', $oInvoice->getOpId());
            $this->view->ct_id = $iCtId;
        }
    }

    /**
     * Receipt of a batch of invoices
     */
    public function encaissementgroupAction()
    {

        $this->_helper->layout->disableLayout();
        $this->_response->clearBody();
        $this->_helper->ViewRenderer->setNoRender(true);

        $aParams = $this->_request->getParams();

        if (! isset($aParams['check_facture'])) {
            $this->_helper->FlashMessenger($this->view->translate('Aucune facture sélectionnée'), 'error');
        } else {
            $aInvoices = FacturesQuery::create()->filterByPrimaryKeys($aParams['check_facture'])->find();

            $aMessages = array();
            foreach ($aInvoices as $oInvoice) {
                $oInvoice->creditMontantEncaisse(null, true);
                if ($oInvoice->validate()) {
                    $oInvoice->save();
                    // Generate invoice pdf
                    Phoenix_File_Invoice_PdfGenerator::getInstance()->generateInvoicePdf($oInvoice);
                    $aMessages[] = $this->view->translate('La facture') . " '" . $oInvoice->getFactReference() . "' " . $this->view->translate('est encaissée');
                } else {
                    $aMessages[] = $this->view->translate('La facture') . " '" . $oInvoice->getFactReference() . "' " . $this->view->translate('n\'a pu être encaissée') . ", " . implode(', ', $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oInvoice->getValidationFailures()));
                }
            }

            $this->_helper->FlashMessenger($aMessages, 'default');
        }
        $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD));
    }


    /**
     * Reissue invoice
     */
    public function getfactureeditionAction()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);
        $aParams = $this->_request->getParams();

        $aInvoicesIds = explode(',', $aParams['fact_id']);
        $aInvoices = FacturesQuery::create()->findPks($aInvoicesIds);
        if (! Phoenix_File_Invoice_PdfGenerator::getInstance()->downloadInvoicesPdfForEdition($aInvoices)) {
            $aErrors = array();
            foreach ($aInvoices as $oInvoice) {
                $this->_helper->flashMessenger($this->view->translate('Facture : ' . $oInvoice->getFactReference()), 'error');
                $this->_helper->flashMessenger($this->view->translate(My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oInvoice->getValidationFailures())), 'error');
            }
            $this->_helper->Redirector('index', 'factures', 'comptabilite');
        }
    }

    /**
     * Processing for entering the incoming payment of an invoice
     */
    public function encaissementAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $oInvoice = FacturesQuery::create()->findPk($aParams['fact_id']);
        $this->view->facture = $oInvoice;
        if (isset($aParams['form_submit'])) {
            // Flag for total manual receipt
            if (isset($aParams['fact_encaissement_total']) && $aParams['fact_encaissement_total'] == '1') {
                $bForceStatusEncaisse = true;
            } else {
                $bForceStatusEncaisse = false;
            }

            // Amount credit
            $oInvoice->creditMontantEncaisse($aParams['fact_montant_encaisse'], $bForceStatusEncaisse);
            if ($oInvoice->validate()) {
                $oInvoice->save();
                // Generate invoice pdf
                Phoenix_File_Invoice_PdfGenerator::getInstance()->generateInvoicePdf($oInvoice);
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, $this->_request->getBaseUrl() . '/comptabilite/factures'));
            } else {
                $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oInvoice->getValidationFailures());
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
            }
        }
    }

    /**
     * Disbursement of an invoice
     */
    public function decaissementAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $oInvoice = FacturesQuery::create()->findPk($aParams['fact_id']);
        if (isset($oInvoice)) {
            if ($oInvoice->decaisse()) {
                // Generate invoice pdf
                Phoenix_File_Invoice_PdfGenerator::getInstance()->generateInvoicePdf($oInvoice);
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, $this->_request->getBaseUrl() . '/comptabilite/factures'));
            } else {
                $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oInvoice->getValidationFailures());
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
            }
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('Facture inconnue')));
        }
    }

    public function genjdvAction()
    {

        $this->_helper->layout->disableLayout();

        if ($this->getParam('export') == 1) {
            $this->_helper->ViewRenderer->setNoRender(true);

            // Date formatting for MySQL
            $sFindFactDateMin = Phoenix_Data_Convert::FormatDateForMysql($this->getParam('find_fact_date_min'));
            $sFindFactDateMax = Phoenix_Data_Convert::FormatDateForMysql($this->getParam('find_fact_date_max'));

            try {
                $oDataComptaVentesBuilder = new Data_Compta_Ventes_Builder($sFindFactDateMin, $sFindFactDateMax);

                // Construction of the sales journal
                $oDataComptaVentesBuilder->process();

                // Save the sales journal
                if ($oDataComptaVentesBuilder->commit() == true) {
                    $this->_response->clearBody();
                    $iJdvId = $oDataComptaVentesBuilder->getJournalDeVente()->getJdvId();
                    $this->_response->setBody('<a href="/comptabilite/factures/getjdv/jdv_id/' . $iJdvId . '">' . $this->view->translate('Télècharger le journal des ventes') . '</a>');
                } else {
                    $this->_response->setBody($this->view->translate('Il n\'y a pas de factures à exporter'));
                }

                if ($aErrors = $oDataComptaVentesBuilder->getErrors()) {
                    $oZendViewHelperHtmlList = $this->view->getHelper('HtmlList');
                    $this->_response->appendBody("<br /><br /><p>" . $this->view->translate('Toutes les factures n\'ont pu être exportées') . "</p>");
                    $this->_response->appendBody($oZendViewHelperHtmlList->htmlList($aErrors));
                }
            } catch (Exception $oException) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $oException->getMessage()));
            }
        }
    }

    /**
     * Downloading a sales journal
     */
    public function getjdvAction()
    {

        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);

        $oJournalDeVente = JournalDeVenteQuery::create()->findPk($this->getParam('jdv_id'));

        $sFilename = 'JDV-' . date('Ymd_His') . '_' . rand(100, 999) . '.csv';
        file_put_contents(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sFilename, $oJournalDeVente->getCsv());
        My_File_Transfer::getInstance()->send(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sFilename);
    }

    /**
     * Retrieving the information of the invoice recipient from the given Contact
     * @param Contacts $oContact
     */
    public function assignContactInformationsOnContactChangeToTheView(Contacts $oContact)
    {
        $oClientSite = $oContact->getClientSites();
        $this->view->fact_adresse1 = ($oClientSite && $oClientSite->getClSiteAddr1()) ? $oClientSite->getClSiteAddr1() : '';
        $this->view->fact_adresse2 = ($oClientSite && $oClientSite->getClSiteAddr2()) ? $oClientSite->getClSiteAddr2() : '';
        $this->view->fact_adresse3 = ($oClientSite && $oClientSite->getClSiteAddr3()) ? $oClientSite->getClSiteAddr3() : '';
        $this->view->fact_code_postal = ($oClientSite && $oClientSite->getClSiteZipcode()) ? $oClientSite->getClSiteZipcode() : '';
        $this->view->fact_ville = ($oClientSite && $oClientSite->getClSiteTown()) ? $oClientSite->getClSiteTown() : '';
        $this->view->fact_pays = ($oClientSite && $oClientSite->getClSiteCountry()) ? $oClientSite->getClSiteCountry() : '';
        $this->view->bAutoCheckSendEmail = ($oContact->getCtReceiveFactByEmail() === true) ? true : false;
    }

    /**
     * Retrieval of the invoice recipient's information the invoice associated with the given invoice
     *
     * @param Factures $oInvoice
     */
    public function assignContactInformationsToTheView(Factures $oInvoice)
    {
        $this->view->fact_adresse1 = $oInvoice->getFactAdresse1();
        $this->view->fact_adresse2 = $oInvoice->getFactAdresse2();
        $this->view->fact_adresse3 = $oInvoice->getFactAdresse3();
        $this->view->fact_code_postal = $oInvoice->getFactCodePostal();
        $this->view->fact_ville = $oInvoice->getFactVille();
        $this->view->fact_pays = $oInvoice->getFactPays();
        $this->view->ct_id = $oInvoice->getCtId();
    }
}
