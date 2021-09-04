<?php

class Operation_ListingController extends My_Controller_Action
{

    public function init()
    {
        $this->_helper->ContextSwitch()->initContext();
    }

    /**
     * Main controller action, responsible for paginating results, simple and complete quotes export
     * Generation list pagination
     */
    public function indexAction()
    {

        $aHelperMessages = $this->_helper->getHelper('FlashMessenger')->getMessages();
        if (isset($aHelperMessages[0]['error'])) {
            $this->_helper->FlashMessenger(addslashes($aHelperMessages[0]['error']), 'error');
        }

        // Initialize search params
        $aParams = $this->_request->getParams();
        $aSearch = array(
            'VOL.op_id' => array('operator' => 'eql', 'value' => $this->_request->getParam('find_op_id')),
            'cl_libelle' => array('operator' => 'like'),
            'cl_type_id' => array('operator' => 'eql'),
            'cl_activity_id' => array('operator' => 'eql'),
            'op_number' => array('operator' => 'eql'),
            'actif' => array('operator' => 'eql'),
            'op_dc_id' => array('operator' => 'eql'),
            'op_cp_id' => array('operator' => 'eql'),
            'op_cdp_id' => array('operator' => 'eql'),
            'op_cl_id' => array('operator' => 'eql'),
            'op_ct_id' => array('operator' => 'eql'),
            'op_stamp_start' => array('operator' => $aParams['find_op_stamp_start_comp'] ?? null, 'date_format' => true),
            'op_stamp_end' => array('operator' =>$aParams['find_op_stamp_end_comp'] ?? null, 'date_format' => true),
            'op_dateConso_start' => array('operator' => $aParams['find_op_dateConso_start_comp'] ?? null, 'date_format' => true),
            'op_dateConso_end' => array('operator' => $aParams['find_op_dateConso_end_comp'] ?? null, 'date_format' => true),
            'op_datePoste_end' => array('operator' => $aParams['find_op_datePoste_end_comp'] ?? null, 'date_format' => true),
            'op_act_id' => array('operator' => 'eql'),
            'op_type_id' => array('operator' => 'eql'),
            'op_project_type_id' => array('operator' => 'eql'),
            'op_classification_id' => array('operator' => 'eql'),
            'op_subtype_id' => array('operator' => 'eql'),
            'op_cl_id' => array('operator' => 'eql'),
            'nb_contrats' => array('operator' => 'supeql'),
            'op_devis_lang' => array('operator' => 'eql'),
            'date_create' => array(
                array('operator' => 'supeql', 'value' => $this->_request->getParam('find_date_create_min'), 'date_format' => true),
                array('operator' => 'infeql', 'value' => $this->_request->getParam('find_date_create_max'), 'date_format' => true),
            ),
            // Synchronized operation in gedelog
            'opt_sync_gedelog_user_id' => array('operator' => 'eql', 'value' => $this->_request->getParam('find_has_opt_sync_gedelog_user_id')),
            // Created tasks
            'opt_sync_task_user_id' => array('operator' => 'eql', 'value' => $this->_request->getParam('find_has_opt_sync_task_user_id')),
        );

        if (isset($aParams['find_op_freq_stat_mail_id'])) {
            $aSearch['op_freq_stat_mail_id'] = array('operator' => 'in', 'value' => array(RFreqStatMail::QUOTIDIEN, RFreqStatMail::MENSUEL, RFreqStatMail::HEBDOMADAIRE));
        }

        // Search of status between dates with sub queries
        if (! empty($aParams['find_op_status_id']) && (! empty($aParams['find_op_date_status_min']) || ! empty($aParams['find_op_date_status_max']))) {
            $oZendDbSelectStatut = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());

            $oZendDbSelectStatut->from('View_Operation_Status', 'op_id')->where('hs_new_statut_id = ?', $aParams['find_op_status_id']);

            if (! empty($aParams['find_op_date_status_min'])) {
                // Date formatting for MySQL
                $aParams['find_op_date_status_min'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['find_op_date_status_min']);
                $oZendDbSelectStatut->where('date_create >= ?', $aParams['find_op_date_status_min']);
            }
            if (! empty($aParams['find_op_date_status_max'])) {
                // Date formatting for MySQL, add date in max
                $oZendDate = new Zend_Date($aParams['find_op_date_status_max'], null, 'fr');
                $oZendDate->addDay(1);
                $aParams['find_op_date_status_max'] = Phoenix_Data_Convert::FormatDateForMysql($oZendDate->toString('dd/MM/Y'));
                $oZendDbSelectStatut->where('date_create <= ?', $aParams['find_op_date_status_max']);
            }

            $aSearch['VOL.op_id'] = array('operator' => 'in', 'value' => $oZendDbSelectStatut);
        } else {
            $aSearch['op_status_id'] = array('operator' => 'eql');
        }

        // Instanciating the search engine
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect->order('op_number desc'));
        $oMySearchEngine->findWordOn(array(
            'op_libelle' => array('operator' => 'like'),
            'cl_libelle' => array('operator' => 'like'),
            'op_number' => array('operator' => 'like')
        ));
        $oMySearchEngine->findByFields($aSearch);

        // Add sales team criteria
        if (! empty($aParams['find_sales_team'])) {
            $aUserCriterias = array();

            // Retrieving the user ids of the selected sales team
            $oSalesTeams = OperationSalesTeamsQuery::create()->findBySalesTeamId($aParams['find_sales_team']);
            foreach ($oSalesTeams as $oSalesTeamUser) {
                if ($oSalesTeamUser instanceof OperationSalesTeams) {
                    $aUserCriterias[] = 'op_dc_id = ' . $oSalesTeamUser->getUserId();
                }
            }
            // Applying the user criteria
            if ($aUserCriterias) {
                $sUserCriteriaCondition = '(' . implode(' OR ', $aUserCriterias) . ')';
                $oMySearchEngine->where($sUserCriteriaCondition);
            }
        }

        // Filtering operations by selected options
        if (isset($aParams['option_list']) && is_array($aParams['option_list'])) {
            $aOptionsCriterias = array();

            // We retrieve the options ids to filter by
            foreach ($aParams['option_list'] as $sOption) {
                $aOptionsCriterias[] = "list_options LIKE '%," . $sOption . ",%'";
            }

            // Applying the options criteria
            if ($aOptionsCriterias) {
                $sOptionCriteriaCondition = '(' . implode(' OR ', $aOptionsCriterias) . ')';
                $oMySearchEngine->where($sOptionCriteriaCondition);
            }
        }

        // Filtering operations by countries
        if (isset($aParams['find_r_country_id'])) {
            $oZendDbSelectOperations = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $oZendDbSelectOperations->from('lnk_operation_country', 'op_id')->where('lnk_op_country_id in (\'' . implode('\',\'', $aParams['find_r_country_id']) . '\')');
            $aSearch['VOL.op_id'] = array('operator' => 'in', 'value' => $oZendDbSelectOperations);
        }

        if (! empty($aParams['find_r_operation_universe_id'])) {
            $aSearch['operation_universe_id'] = array('operator' => 'in', 'value' => $aParams['find_r_operation_universe_id']);
        }

        if (! empty($aParams['find_r_operation_media_id'])) {
            $aSearch['operation_media_id'] = array('operator' => 'in', 'value' => $aParams['find_r_operation_media_id']);
        }

        $oMySearchEngine->findByFields($aSearch);
        $oMySearchEngine->makeOrderBy();

        // Csv data export
        if ($this->getParam('format') == 'csv') {
            // Retrieve operations ids matching with search params
            $aOperationsIds = array_map(function ($aData) {
                return current($aData);
            }, $oMySearchEngine->getSelect()->from(array('VOL' => 'View_Operation_Listing_Simplifie'), array('op_id'))->query()->fetchAll());
            Phoenix_File_Operation_CsvGenerator::getInstance()->downloadCsvExport(isset($aParams['complete_csv'])?Phoenix_File_Operation_CsvGenerator::EXPORT_TYPE_FULL:Phoenix_File_Operation_CsvGenerator::EXPORT_TYPE_SIMPLE, $aOperationsIds);
        } else {
            $oPaginatorAdapter = new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect()->from(array('VOL' => 'View_Operation_Listing_Simplifie'), array(
                'op_id', 'op_status_id', 'op_number', 'op_libelle', 'nb_contrats', 'op_cl_id', 'cl_libelle', 'op_dateConso_start', 'op_dateConso_end', 'type', 'dc'
            )));

            // Paginating the result
            $oPaginator = new My_Paginator($oPaginatorAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);

            // Counting operations by status
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aGroupByStatus = $oZendDbSelect->from('operations', array('op_status_id', 'nb' => '(count(*))'))->group('op_status_id')->query()->fetchAll(PDO::FETCH_KEY_PAIR);

            // Display members belonging to the selected sales team
            $this->view->nb_accepte = isset($aGroupByStatus[Operations::STATUS_ACCEPTE]) ? $aGroupByStatus[Operations::STATUS_ACCEPTE] : 0;
            $this->view->nb_en_cours = isset($aGroupByStatus[Operations::STATUS_EN_COURS]) ? $aGroupByStatus[Operations::STATUS_EN_COURS] : 0;
            $this->view->nb_refuses = isset($aGroupByStatus[Operations::STATUS_REFUS]) ? $aGroupByStatus[Operations::STATUS_REFUS] : 0;
            $this->view->paginator = $oPaginator;

            $oOperationsQuery = OperationsQuery::create();
            $this->view->oldDcUsers = $oOperationsQuery->getOldDcUsers();
            $this->view->oldCpUsers = $oOperationsQuery->getOldCpUsers();
            $this->view->oldCdpUsers = $oOperationsQuery->getOldCdpUsers();

            $this->view->searchActivitiesOptions = array();
            foreach (RActivityKpiQuery::create()->find() as $oActivity) {
                if (! $oActivity->countRelatedOperationOptionsPackages()) {
                    continue;
                }
                $this->view->searchActivitiesOptions[] = array(
                    'label' => $sActivityLabel = $oActivity->getRActivityKpiLibelle(),
                    'options_list_id' => 'id_option_list_' . str_replace(' ', '_', $sActivityLabel),
                    'options' => $oActivity->getActivityKpiRelatedOperationOptionsAncestors(),
                );
            }

            if ($aDetachedOptionsAncestors = RActivityKpi::getDetachedOperationOptionsAncestors()) {
                $this->view->searchActivitiesOptions[] = array(
                    'label' => $this->view->translate('label_divers'),
                    'options_list_id' =>'id_option_list_detached_options',
                    'options' => $aDetachedOptionsAncestors,
                );
            }
        }
    }

    public function blocksalesteammembersAction()
    {

        $this->_helper->layout->disableLayout();
        $sSalesTeamId = $this->_request->getParam('sales_team_id');
        $oTeams = OperationSalesTeamsQuery::create()->filterBySalesTeamId($sSalesTeamId)->find();
        $aUserIds = array();
        foreach ($oTeams as $oTeam) {
            $aUserIds[] = $oTeam->getUserId();
        }
        $oMembers = UsersQuery::create()->filterByUserId($aUserIds, Criteria::IN)->find();
        $aMembers = array();
        foreach ($oMembers as $oUser) {
            $aMembers[] = $oUser->getUserNomPrenom();
        }

        $this->view->members = implode(', ', $aMembers);
    }
}
