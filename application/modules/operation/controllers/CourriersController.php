<?php

class Operation_CourriersController extends My_Controller_Action
{
    /**
     * Default method when calling the controller
     */
    public function indexAction()
    {
        // Retrieve the current operation
        $aParams = $this->_request->getParams();
        $iOpId = $aParams['op_id'];
        
        if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
            $this->_helper->FlashMessenger($this->view->translate('La connexion externe "Arthur" est désactivée'), 'error');
            return $this->_helper->Redirector('index', 'description', 'operation', array('op_id' => $iOpId));
        }

        $aOperations = OperationsQuery::create()->findPk($iOpId);
        $this->view->operation = $aOperations;

        // Instance of the query object, we will look for information about the "Lots Courriers" on Arthur
        $oAdapter = $this->_helper->DbAdapters()->getArthurParam();
        $oSelect = $oAdapter->select()
                ->where('lc_op_id = ' . $iOpId)
                ->order('lc_date_reception desc');

        // Query search engine
        $oMySearchEngine = new My_Search_Engine($oSelect);
        $oMySearchEngine->findWordOn(array(
            'numlot' => array('operator' => 'eql'),
            'prest_libelle' => array('operator' => 'like'),
        ));

        // Format dates
        if ($this->_request->getParam('find_lc_date_reception', null) != null) {
            $this->_request->setParam('find_lc_date_reception', Phoenix_Data_Convert::formatDateForSqlServer($this->_request->getParam('find_lc_date_reception')));
        }
        
        $oMySearchEngine->findByFields(array(
            'numlot' => array('operator' => 'eql'),
            'lc_prest_id' => array('operator' => 'eql'),
            'lc_date_reception' => array('operator' => $this->_request->getParam('find_lc_date_reception_comp')),
            'lc_date_decharge' => array('operator' => $this->_request->getParam('find_lc_date_decharge_comp')),
        ), false);

        $oMySearchEngine->makeOrderBy();

        // Download CSV filtered list
        if ($this->getParam('format') == 'csv') {
            $oAdapterExport = new My_Data_Export_Source_Adapter_Select($oMySearchEngine->getSelect()->from('vue_phoenix_lot_courrier', array('N° de lot courrier' => 'numlot',
                        'Date de réception' => 'lc_date_reception_fr',
                        'Qte de courriers reçus' => 'recu',
                        'Demandes saisies' => 'saisi',
                        'Reste à saisir' => 'restant',
                        'État de déchargement' => 'lc_date_decharge_fr',
                        'Qui ?' => 'prest_libelle')));
            $oExport = new My_Data_Export_CSV($oAdapterExport);
            $sFilename = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilename, $oExport->make());
            My_File_Transfer::getInstance()->send($sFilename);
        } else {
            // Affichage HTML
            $oAdapter = new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect()->from('vue_phoenix_lot_courrier', array('numlot',
                        'lc_date_reception',
                        'lc_op_id',
                        'recu',
                        'saisi',
                        'restant',
                        'lc_date_decharge',
                        'prest_libelle',
                        'lc_prest_id')));
            // Handle pagination
            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);
            $this->view->paginator = $oPaginator;

            // List of  providers
            $oArthurAdapter = $this->_helper->DbAdapters()->getArthurParam();
            $aResults = $oArthurAdapter->select()->from('r_prestataires')->query()->fetchAll();

            $aListPresta = array();
            foreach ($aResults as $aResult) {
                $aListPresta[$aResult["prest_id"]] = $aResult["prest_libelle"];
            }
            $this->view->liste_prestataires = $aListPresta;
            $oAdapter = $this->_helper->DbAdapters()->getArthurParam();
            $aStatsCourriers = $oAdapter->select()->from('vue_phoenix_lot_courrier', array('courriers_recus' => 'sum(recu)', 'demandes_saisies' => 'sum(saisi)', 'reste_a_saisir' => 'sum(restant)'))
                            ->where('lc_op_id = ?', $iOpId)
                            ->query()->fetchAll();
            $this->view->courriers_recus = (empty($aStatsCourriers[0]['courriers_recus']) ? 0 : $aStatsCourriers[0]['courriers_recus']);
            $this->view->demandes_saisies = (empty($aStatsCourriers[0]['demandes_saisies']) ? 0 : $aStatsCourriers[0]['demandes_saisies']);
            $this->view->reste_a_saisir = (empty($aStatsCourriers[0]['reste_a_saisir']) ? 0 : $aStatsCourriers[0]['reste_a_saisir']);
        }
    }
}
