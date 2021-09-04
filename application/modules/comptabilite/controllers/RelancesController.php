<?php

class Comptabilite_RelancesController extends My_Controller_Action
{

    public function init()
    {
        $this->_helper->ContextSwitch()->initContext();
    }

    /**
     * Default method when calling the controller
     */
    public function indexAction()
    {
        // Retrieves statistics
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aGroupByStatus = $oZendDbSelect
            ->from('View_Compta_Relances', array('rel_statut_id', 'sum' => '(sum(montant_a_regler))'))
            ->group('rel_statut_id')
            ->query()->fetchAll(PDO::FETCH_KEY_PAIR);

        $this->view->montant_valide = isset($aGroupByStatus[RRelanceStatuts::CREE]) ? $aGroupByStatus[RRelanceStatuts::CREE] : 0;
        $this->view->montant_edite = isset($aGroupByStatus[RRelanceStatuts::EDITEE]) ? $aGroupByStatus[RRelanceStatuts::EDITEE] : 0;
        $this->view->montant_encaisse = isset($aGroupByStatus[RRelanceStatuts::ENCAISSEE]) ? $aGroupByStatus[RRelanceStatuts::ENCAISSEE] : 0;

        // Initialize search engine
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oSelect = $oZendDbSelect->order('rel_type_id desc');
        $oMySearchEngine = new My_Search_Engine($oSelect);
        $oMySearchEngine->findWordOn(array(
            'rel_reference' => array('operator' => 'like'),
            'cl_libelle' => array('operator' => 'like'),
        ));

        $oMySearchEngine->findByFields(array(
            'rel_statut_id' => array('operator' => 'eql'),
            'rel_type_id' => array('operator' => 'eql'),
            'rel_reference' => array('operator' => 'eql'),
        ));

        // Date formatting for MySQL
        if ($this->_request->getParam('find_date_create_min', null) != null) {
            $oMySearchEngine->where("View_Compta_Relances.date_create > ?", Phoenix_Data_Convert::FormatDateForMysql($this->_request->getParam('find_date_create_min')));
        }
        if ($this->_request->getParam('find_date_create_max', null) != null) {
            $oMySearchEngine->where("View_Compta_Relances.date_create < ?", Phoenix_Data_Convert::FormatDateForMysql($this->_request->getParam('find_date_create_max')));
        }
        if ($this->_request->getParam('find_montant_a_regler_min', null) != null) {
            $oMySearchEngine->where("View_Compta_Relances.montant_a_regler >= ?", $this->_request->getParam('find_montant_a_regler_min'));
        }
        if ($this->_request->getParam('find_montant_a_regler_max', null) != null) {
            $oMySearchEngine->where("View_Compta_Relances.montant_a_regler <= ?", $this->_request->getParam('find_montant_a_regler_max'));
        }
        if ($this->_request->getParam('find_cl_id', null) != null) {
            $oMySearchEngine->where("View_Compta_Relances.cl_id = ?", $this->_request->getParam('find_cl_id'));
        }

        $oMySearchEngine->makeOrderBy();

        // Downloading the filtered list in CSV
        if ($this->getParam('format') == 'csv') {
            $oSelect = $oMySearchEngine->getSelect()->from('View_Compta_Relances', array(
                'Date' => 'last_recalculation_date_fr',
                'N° Relance' => 'rel_reference',
                'Date Edition' => 'date_edition_fr',
                'Montant Relance TTC' => 'montant_a_regler',
                'Client' => 'cl_libelle',
            ))
            ->join('r_relance_types', 'r_relance_types.r_rel_type_id = View_Compta_Relances.rel_type_id', array(
                'Etape' => 'r_rel_type_libelle',
            ))
            ->join('lnk_relance_facture', 'View_Compta_Relances.rel_id = lnk_relance_facture.rel_id')
            ->join('factures', 'factures.fact_id = lnk_relance_facture.fact_id', array(
                'Montant HT' => '(select  sum(f1.fact_montant_ht) from factures f1 join lnk_relance_facture lrf1 on lrf1.fact_id=f1.fact_id where lrf1.rel_id=lnk_relance_facture.rel_id)',
                'Montant TTC Facture' => 'fact_montant_ttc',
                'Montant TTC' => '(select  sum(f1.fact_montant_ttc) from factures f1 join lnk_relance_facture lrf1 on lrf1.fact_id=f1.fact_id where lrf1.rel_id=lnk_relance_facture.rel_id)',
                'NumFacture' => 'fact_reference',
                'Date Facture' => 'DATE_FORMAT(fact_date, \'%d/%m/%Y\')',
                'Date Echéance' => 'DATE_FORMAT(fact_date_echeance, \'%d/%m/%Y\')',
            ))
            ->join('operations', 'operations.op_id = factures.op_id', array(
                'NumOperation' => 'op_number',
                'LibelleOperation' => 'op_libelle',
            ))
            ->joinLeft('View_Client_Stats_Soldes', 'View_Client_Stats_Soldes.cl_id = View_Compta_Relances.cl_id', array(
                'Solde TTC' => 'cl_solde_ttc',
            ))
            ->order(array('View_Compta_Relances.last_recalculation_date_fr desc', 'View_Compta_Relances.cl_libelle asc', 'View_Compta_Relances.rel_reference asc'));

            $oCsvDataExportAdapter = new My_Data_Export_Source_Adapter_Select($oSelect);
            $oMyDataExportCSV = new My_Data_Export_CSV($oCsvDataExportAdapter);

            $oMyDataExportCSV->setHeaders(
                array('Date' => 'Date', 'N° Relance' => 'N° Relance', 'Etape' => 'Etape', 'Client' => 'Client',
                        'Montant HT' => 'Montant HT', 'Montant TTC' => 'Montant TTC', 'NumFacture' => 'NumFacture',
                        'Date Facture' => 'Date Facture', 'Date Echéance' => 'Date Echéance', 'NumOperation' => 'NumOperation',
                        'LibelleOperation' => 'LibelleOperation', 'Montant TTC Facture' => 'Montant TTC Facture',
                        'Date Edition' => 'Date Edition', 'Solde TTC' => 'Solde TTC', 'Montant Relance TTC' => 'Montant Relance TTC',
                    )
            );
            $sFilename = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilename, $oMyDataExportCSV->make());
            My_File_Transfer::getInstance()->send($sFilename);
        } // Viewing the filtered list in HTML
        else {
            $sQuery = $oMySearchEngine->getSelect()
                ->from('View_Compta_Relances')
                ->joinLeft('View_Client_Stats_Soldes', 'View_Client_Stats_Soldes.cl_id = View_Compta_Relances.cl_id', array('cl_solde_ttc'))
                ->assemble();
            $aData = $oMySearchEngine->getSelect()->getAdapter()->query($sQuery)->fetchAll();
            $oPaginator = new My_Paginator(new Zend_Paginator_Adapter_Array($aData));
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(200);
            $this->view->paginator = $oPaginator;
        }
    }

    public function editionAction()
    {
        $aParams = $this->_request->getParams();
        if (! isset($aParams['check_edit'])) {
            $this->_helper->FlashMessenger($this->view->translate('Aucune relance sélectionnée'), 'error');
        } else {
            $aRelances = RelancesQuery::create()->filterByPrimaryKeys(array_keys($aParams['check_edit']))->find();
            $aSuccessfullyEditedRelanceIds = array();
            $aMessages = array();
            $aErrors[] = $this->view->translate('Les relances suivantes n\'ont pas été éditées :');
            foreach ($aRelances as $oRelance) {
                if ($oRelance->edit()) {
                    // Update adresse contact client in relance facture
                    $oRelance->updateAddress();
                    $aSuccessfullyEditedRelanceIds[] = $oRelance->getRelId();

                    $aMessages[] = "La relance '" . $oRelance->getRelReference() . "' est éditée";
                } else {
                    $aErrors[] = $oRelance->getRelReference() . " : " . implode(', ', $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oRelance->getValidationFailures()));
                }
            }
            // The following reminders have not been edited when there is no editing error
            $aMessages = (count($aErrors) > 1) ? array_merge($aMessages, $aErrors) : $aMessages;

            if ($aSuccessfullyEditedRelanceIds && Phoenix_Auth_User::mvcActionIsAllowed('comptabilite', 'relances', 'displayrelancespdf')) {
                $aMessages[] = '<a href=\'/comptabilite/relances/displayrelancespdf/multiple_rel_id/' . implode(',', $aSuccessfullyEditedRelanceIds) . '\' target=\'_blank\'>' . $this->view->translate('Visualiser les relances éditées') . '</a>';
            }
            $this->_helper->FlashMessenger($aMessages, 'default');
        }
        $this->_redirect($this->_request->getHeader('Referer'), array('prependBase' => false));
    }

    public function relancepdfAction()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);

        $aParams = $this->_request->getParams();

        if ($this->_request->isXmlHttpRequest()) {
            $oRelance = RelancesQuery::create()->findPk($aParams['rel_id']);
            if ($oRelance->isCorrectlyFilled()) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA));
            } else {
                $aValdiationFailures = $oRelance->getValidationFailures();
                $aValdiationFailures = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aValdiationFailures);

                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aValdiationFailures));
            }
        } else {
            $oRelance = RelancesQuery::create()->findPk($aParams['rel_id']);
            Phoenix_File_Reminder_PdfGenerator::getInstance()->downloadReminderPdf($oRelance);
        }
    }

    /**
     * This function is used to recalculate invoice reminders
     */
    public function recalculaterelanceAction()
    {

        if ($this->_request->isXmlHttpRequest()) {
            $this->_helper->layout->disableLayout();

            Relances::makeFirstRelances();
            Relances::makeOtherRelances();
            Relances::cleanRelanceFacture();
            Relances::cleanRelances();

            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate('Recalcul des relances de factures effectuée') . '.'));
            $this->_helper->ViewRenderer->setNoRender(true);
        }
    }

    public function editsinglerelanceAction()
    {
        $aParams = $this->_request->getParams();
        $this->_helper->layout->disableLayout();
        // Form validation
        if (isset($aParams['submit'])) {
            $this->_helper->layout->disableLayout();
            $this->_response->clearBody();
            $this->_helper->ViewRenderer->setNoRender(true);

            $oRelance = RelancesQuery::create()->findPk($aParams['rel_id']);
            $oRelance->fromArray($aParams, BasePeer::TYPE_FIELDNAME);

            if ($oRelance->validate()) {
                // Update address contact in reminder table
                $oRelance->save();

                // Edit reminder
                if ($oRelance->edit() == false) {
                    $this->_response->setBody(implode($this->_helper->PropelFailures()->validationFailuresToSimpleArray($oRelance->getValidationFailures())));
                } else {
                    $this->_response->setBody('La relance \'' . $oRelance->getRelReference() . '\' est éditée');
                }
            } else {
                $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oRelance->getValidationFailures());
                $oZendViewHelperHtmlList = $this->view->getHelper('HtmlList');
                $this->_response->setBody($oZendViewHelperHtmlList->htmlList($aErrors));
            }
        } else {
            // Entry point when first displaying the form
            if (! isset($aParams['view_site'])) {
                // Get contact client
                $oClient = ClientsQuery::create()->findPk($aParams['cl_id']);
                $oRelance = RelancesQuery::create()->findPk($aParams['rel_id']);
                // Check if everything is entered correctly in the reminder
                if ($oRelance->isCorrectlyFilled()) {
                    $oContact = ContactsQuery::create()->findPk($oClient->getClCtFacturation());
                    $oClientSite = $oContact->getClientSites();
                    $sContactId = $oContact->getCtId();
                    $this->view->rel_adresse1 = ($oClientSite && $oClientSite->getClSiteAddr1()) ? $oClientSite->getClSiteAddr1() : '';
                    $this->view->rel_adresse2 = ($oClientSite && $oClientSite->getClSiteAddr2()) ? $oClientSite->getClSiteAddr2() : '';
                    $this->view->rel_adresse3 = ($oClientSite && $oClientSite->getClSiteAddr3()) ? $oClientSite->getClSiteAddr3() : '';
                    $this->view->rel_code_postal = ($oClientSite && $oClientSite->getClSiteZipcode()) ? $oClientSite->getClSiteZipcode() : '';
                    $this->view->rel_ville = ($oClientSite && $oClientSite->getClSiteTown()) ? $oClientSite->getClSiteTown() : '';
                    $this->view->rel_pays = ($oClientSite && $oClientSite->getClSiteCountry()) ? $oClientSite->getClSiteCountry() : '';
                } else {
                    $aValdiationFailures = $oRelance->getValidationFailures();
                    $aValdiationFailures = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aValdiationFailures);

                    $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aValdiationFailures));
                }
            } // Changing the customer via select
            else {
                $oContact = ContactsQuery::create()->findPk($aParams['rel_ct_facturation']);
                $oClientSite = $oContact->getClientSites();
                $sContactId = $aParams['rel_ct_facturation'];
                $this->view->rel_adresse1 = ($oClientSite && $oClientSite->getClSiteAddr1()) ? $oClientSite->getClSiteAddr1() : '';
                $this->view->rel_adresse2 = ($oClientSite && $oClientSite->getClSiteAddr2()) ? $oClientSite->getClSiteAddr2() : '';
                $this->view->rel_adresse3 = ($oClientSite && $oClientSite->getClSiteAddr3()) ? $oClientSite->getClSiteAddr3() : '';
                $this->view->rel_code_postal = ($oClientSite && $oClientSite->getClSiteZipcode()) ? $oClientSite->getClSiteZipcode() : '';
                $this->view->rel_ville = ($oClientSite && $oClientSite->getClSiteTown()) ? $oClientSite->getClSiteTown() : '';
                $this->view->rel_pays = ($oClientSite && $oClientSite->getClSiteCountry()) ? $oClientSite->getClSiteCountry() : '';
            }

            $this->view->ct_id = $sContactId;
        }
    }

    public function deseditionAction()
    {

        $aParams = $this->_request->getParams();
        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);

        if (! isset($aParams['check_edit'])) {
            $this->_helper->FlashMessenger($this->view->translate('Aucune relance sélectionnée'), 'error');
        } else {
            $aRelances = RelancesQuery::create()->filterByPrimaryKeys(array_keys($aParams['check_edit']))->find();
            $aInfoMessages = array();
            $aErrorMessages[] = $this->view->translate('Les relances suivantes n\'ont pas été déséditées') . ' : ';
            foreach ($aRelances as $oRelance) {
                if ($oRelance->desedit()) {
                    $aInfoMessages[] = $this->view->translate('La relance') . ' ' . $oRelance->getRelReference() . ' ' . $this->view->translate('a été déséditée');
                } else {
                    $aErrorMessages[] = $oRelance->getRelReference() . " : " . implode(', ', $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oRelance->getValidationFailures()));
                }
            }

            // Preparing the results table, adding errors if they exist
            $aMessages = (count($aErrorMessages) > 1) ? array_merge($aInfoMessages, $aErrorMessages) : $aInfoMessages;
            $this->_helper->FlashMessenger($aMessages, 'default');
        }
        $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD));
    }

    public function displayrelancespdfAction()
    {
        // If a single reminder is sent (following the call of editsinglerelance) then prepare an array containing a single reminder, otherwise you pass a table containing several reminders
        $aParams = $this->_request->getParams();
        $aRelanceIds = isset($aParams['single_relance_id'])?array($aParams['single_relance_id']):explode(',', $aParams['multiple_rel_id']);
        $aReminders = RelancesQuery::create()->filterByPrimaryKeys($aRelanceIds)->find()->getData();
        Phoenix_File_Reminder_PdfGenerator::getInstance()->downloadRemindersPdf($aReminders, $this->view->translate('Relances_Export') . '_' . date('Ymd_His') . '.pdf');
    }
}
