<?php

class Operation_StockController extends My_Controller_Action
{

    public function init()
    {
        parent::init();
        $this->view->page = $this->getRequest()->getActionName();
        $this->view->total_qte = Phoenix_ExternalConnection_Uo::getInstance()->getTotalQuantitiesOfStockStatesByOperationId($this->getParam('op_id'));
    }

    public function etatAction()
    {
        $aParams = $this->_request->getParams();
        if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_COMPIL)) {
            $this->_helper->FlashMessenger($this->view->translate('La connexion externe "Compil UO/Data" est désactivée'), 'error');
            return $this->_helper->Redirector('index', 'description', 'operation', array('op_id' => $aParams['op_id']));
        }
        $oOperation = OperationsQuery::create()->filterByPrimaryKey($aParams['op_id'])->findOne();
        $this->view->operation = $oOperation;
        // Using the connection adapter to compilUO
        $oZendDbSelect = new Zend_Db_Select(Phoenix_Db_Adapters::getInstance()->getCompilUoAdapter());

        $oZendDbSelect->where('data_compil_op_id=?', $aParams['op_id']);

        // Search engine on the query
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);
        $oMySearchEngine->makeOrderBy();

        $oAdapter = new Zend_Paginator_Adapter_DbSelect($oZendDbSelect->from('View_Stock_Etat', array(
            'ref_prod',
            'libelle_prod',
            'qte_entree',
            'qte_sortie',
            'qte_stock',
            'palette_entree',
            'colis_entree',
            'palette_sortie',
            'colis_sortie',
            'palette_stock_secu',
            'palette_stock',
            'casier_stock_secu',
            'casier_stock',
        )));

        // Pagination management
        $oPaginator = new My_Paginator($oAdapter);
        $oPaginator->setCurrentPageNumber($this->_getParam('page'));
        $oPaginator->setItemCountPerPage(-1);
        $this->view->paginator = $oPaginator;
    }

    public function entreeAction()
    {
        $aParams = $this->_request->getParams();
        $oOperation = OperationsQuery::create()->filterByPrimaryKey($aParams['op_id'])->findOne();
        $this->view->operation = $oOperation;

        // Using the connection adapter to compilUO
        $oZendDbSelect = new Zend_Db_Select(Phoenix_Db_Adapters::getInstance()->getCompilUoAdapter());
        $oZendDbSelect->order('date_reception desc');
        $oZendDbSelect->where('data_compil_op_id=?', $aParams['op_id']);

        // Query search engine
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);
        $oMySearchEngine->makeOrderBy();

        // Downloading the filtered list in CSV
        if ($this->getParam('format') == 'csv') {
            $oSelect = $oMySearchEngine->getSelect()->from('View_Stock_Entree', array(
                'date_reception_fr' => 'date_reception_fr',
                'ref_prod' => 'ref_prod',
                'libelle_prod' => 'libelle_prod',
                'qte' => 'qte',
                'qte_palette' => 'qte_palette',
                'qte_colis' => 'qte_colis',
            ));

            if (isset($aParams['complete_csv'])) {
                $oExport = OperationsQuery::getCompleteListing($oSelect);
            } else {
                $oAdapterExport = new My_Data_Export_Source_Adapter_Select($oSelect);
                $oExport = new My_Data_Export_CSV($oAdapterExport);
            }

            $sFilePath = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilePath, $oExport->make());
            My_File_Transfer::getInstance()->send($sFilePath);
        } // Viewing the filtered list in HTML
        else {
            $oAdapter = new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect()->from('View_Stock_Entree', array(
                'date_reception',
                'date_reception_fr',
                'ref_prod',
                'libelle_prod',
                'qte',
                'qte_palette',
                'qte_colis',
            )));

            // Pagination management
            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);

            $this->view->paginator = $oPaginator;
        }
    }

    public function sortieAction()
    {
        $aParams = $this->_request->getParams();
        $oOperation = OperationsQuery::create()->filterByPrimaryKey($aParams['op_id'])->findOne();
        $this->view->operation = $oOperation;

        // Using the connection adapter to compilUO
        $oZendDbSelect = new Zend_Db_Select(Phoenix_Db_Adapters::getInstance()->getCompilUoAdapter());
        $oZendDbSelect->order('date_sortie desc');
        $oZendDbSelect->where('data_compil_op_id=?', $aParams['op_id']);

        // Search engine on the query
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);
        $oMySearchEngine->makeOrderBy();

        // Downloading the filtered list in CSV
        if ($this->getParam('format') == 'csv') {
            $oSelect = $oMySearchEngine->getSelect()->from('View_Stock_Sortie', array(
                'date_sortie_fr' => 'date_sortie_fr',
                'ref_prod' => 'ref_prod',
                'libelle_prod' => 'libelle_prod',
                'qte' => 'qte',
            ));

            if (isset($aParams['complete_csv'])) {
                $oExport = OperationsQuery::getCompleteListing($oSelect);
            } else {
                $oAdapterExport = new My_Data_Export_Source_Adapter_Select($oSelect);
                $oExport = new My_Data_Export_CSV($oAdapterExport);
            }

            $sFilename = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilename, $oExport->make());
            My_File_Transfer::getInstance()->send($sFilename);
        } // Viewing the filtered list in HTML
        else {
            $oAdapter = new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect()->from('View_Stock_Sortie', array(
                'date_sortie',
                'date_sortie_fr',
                'ref_prod',
                'libelle_prod',
                'qte',
            )));

            // Pagination management
            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);

            $this->view->paginator = $oPaginator;
        }
    }
}
