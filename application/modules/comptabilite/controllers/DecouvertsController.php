<?php

class Comptabilite_DecouvertsController extends My_Controller_Action
{

    /**
     * Default method when calling the controller
     */
    public function indexAction()
    {
        $this->view->stats = array();

        // Total authorized overdrafts
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aStatsData = $oZendDbSelect
            ->from('View_Compta_Decouverts', array('sum_accord' => '(sum(op_dec_mont_accord))'))
            ->where('op_dec_statut_id = ?', ROperationDecouvertStatuts::ACCEPTE)
            ->query()->fetchAll();
        $this->view->stats['sum_accord'] = $aStatsData[0]['sum_accord'];

        // Total outstanding overdrafts
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aStatsData = $oZendDbSelect
            ->from('View_Compta_Decouverts', array('sum_attente' => '(sum(op_dec_mont_demande))'))
            ->where('op_dec_statut_id = ?', ROperationDecouvertStatuts::EN_ATTENTE)
            ->query()->fetchAll();
        $this->view->stats['sum_attente'] = $aStatsData[0]['sum_attente'];

        // Total Overdrafts Denied
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aStatsData = $oZendDbSelect
            ->from('View_Compta_Decouverts', array('sum_refus' => '(sum(op_dec_mont_demande))'))
            ->where('op_dec_statut_id = ?', ROperationDecouvertStatuts::REFUSE)
            ->query()->fetchAll();
        $this->view->stats['sum_refus'] = $aStatsData[0]['sum_refus'];

        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oZendDbSelect->order('op_dec_statut_id asc');

        // Initialize search engine
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);
        $oMySearchEngine->findWordOn(array(
            'op_number' => array('operator' => 'like'),
            'cl_libelle' => array('operator' => 'like'),
        ));

        $oMySearchEngine->findByFields(array(
            'cl_id' => array('operator' => 'eql'),
            'op_id' => array('operator' => 'eql'),
            'op_status_id' => array('operator' => 'eql'),
            'op_dec_statut_id' => array('operator' => 'eql'),
            'date_create' => array('operator' => $this->_request->getParam('find_date_create_comp'), 'date_format' => true),
            'date_modify' => array('operator' => $this->_request->getParam('find_date_modify_comp'), 'date_format' => true),
            'op_dec_mont_demande' => array('operator' => $this->_request->getParam('find_op_dec_mont_demande_comp'))
        ));

        $oMySearchEngine->makeOrderBy();

        // Downloading the filtered list to CSV
        if ($this->getParam('format') == 'csv') {
            $oAdapterExport = new My_Data_Export_Source_Adapter_Select($oMySearchEngine->getSelect()->from('View_Compta_Decouverts', array(
                'op_number',
                'cl_libelle',
                'op_dec_mont_demande',
                'op_dec_mont_accord',
                'os_libelle',
                'montant_non_encaisse_echu',
                'montant_non_encaisse_total',
                'montant_facture_total',
                'montant_encaisse_total',
                'date_create_fr',
            )));
            $oExport = new My_Data_Export_CSV($oAdapterExport);
            $sFilePath = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilePath, $oExport->make());
            My_File_Transfer::getInstance()->send($sFilePath);
        } else {
            $oSelect = $oMySearchEngine->getSelect()->from('View_Compta_Decouverts');

            $aDecouvertData = $oSelect->getAdapter()->fetchAll($oSelect);

            // Retrieving Distinct operation ids
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aDistinctOpIds = $oZendDbSelect->from('View_Compta_Decouverts', array('distinct(op_id)'))
                            ->query()->fetchAll();
            $aLinearOpIdsArray = array();

            // Building a linear array indexed by op_id
            foreach ($aDistinctOpIds as $aOpId) {
                $aLinearOpIdsArray[] = $aOpId['op_id'];
            }

            // Retrieving the cashed Adfs for the given operations
            $aCashedAndAvailableFundsData = OperationsQuery::create()->getUsedAndAvailableFundsRaisingByOperationIds($aLinearOpIdsArray);

            // Hydrate the $aDecouvertData with the cashed funds
            foreach ($aDecouvertData as $iKey => $aData) {
                $aDecouvertData[$iKey]['iUsedAdf'] = $aCashedAndAvailableFundsData[$aDecouvertData[$iKey]['op_id']]['iUsedAdf'];
                $aDecouvertData[$iKey]['iAvailableAdf'] = $aCashedAndAvailableFundsData[$aDecouvertData[$iKey]['op_id']]['iAvailableAdf'];
            }

            $oAdapter = new Zend_Paginator_Adapter_Array($aDecouvertData);

            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);
            $this->view->paginator = $oPaginator;
        }
    }

    /**
     * Overdraft update method
     */
    public function updateAction()
    {
        $this->_helper->layout->disableLayout();

        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();
            $oDecouvert = null;

            // We recover the data from the overdraft to be updated
            if (isset($aData["op_dec_id"]) && is_numeric($aData["op_dec_id"])) {
                $oDecouvert = OperationDecouvertsQuery::create()->findOneByOpDecId($aData["op_dec_id"]);
            }

            if ($oDecouvert instanceof OperationDecouverts) {
                $this->view->assign($oDecouvert->toArray(BasePeer::TYPE_FIELDNAME));

                $oOperation = OperationsQuery::create()->findOneByOpId($oDecouvert->getOpId());
                $oClient = ClientsQuery::create()->findOneByClId($oOperation->getOpClId());
                $this->view->op_number = $oOperation->getOpNumber();
                $this->view->cl_libelle = $oClient->getClLibelle();

                $oUser = UsersQuery::create()->findPk($oDecouvert->getUserId());
                if ($oUser instanceof Users) {
                    $this->view->username = $oUser->getUserNomPrenom();
                } else {
                    $this->view->username = $this->view->translate('Inconnu');
                }

                // Update the information
                if (! empty($aData["submit_update_decouvert"])) {
                    // Loads the new information
                    $oDecouvert->fromArray($aData, BasePeer::TYPE_FIELDNAME);

                    if ($oDecouvert->validate()) {
                        $oDecouvert->save();

                        // Retrieve the operation concerned and send the appropriate mail
                        $oOpe = $oDecouvert->getOperations();
                        Phoenix_MailSender::comptaDecouvertValidation($oOpe, $oDecouvert);

                        $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                            Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP,
                            'id_dialog_update_decouvert'
                        ));
                    } else {
                        $this->_helper->PropelFailures()->registerErrors($oDecouvert->getValidationFailures());
                    }
                }
            } else {
                $this->_response->clearBody();
                $this->_response->setBody($this->view->translate('Erreur: Ce découvert est invalide'));
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }
    }
}
