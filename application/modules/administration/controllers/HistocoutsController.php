<?php

class Administration_HistocoutsController extends My_Controller_Action
{


    public function indexAction()
    {
        $aParams = $this->_request->getParams();

        // Initialize the query object
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oZendDbSelect->order('histo_couts_id desc');

        // Query search engine
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);

        $aSearchFields = array(
            'user_id' => array('operator' => 'eql'),
            'op_id' => array('operator' => 'eql'),
            'date_create' => array(array('operator' => 'supeql', 'value' => $this->_request->getParam('find_date_create_min'), 'date_format' => true), array('operator' => 'infeql', 'value' => $this->_request->getParam('find_date_create_max'), 'date_format' => true)),
            'r_couts_nature_id' => array('operator' => 'in'),
        );
        if ($this->getParam('find_groups') != null) {
            $aSearchFields['groups'] = array('operator' => 'like', 'value' => ',' . $this->getParam('find_groups') . ',');
        }

        $oMySearchEngine->findByFields($aSearchFields);
        $oMySearchEngine->makeOrderBy();

        // Downloading the filtered list in CSV
        if ($this->getParam('format') == 'csv') {
            $oMySearchEngine->getSelect()->from('View_Validation_Couts_histo', array(
                'date enregistrement' => 'date_create_fr',
                'num op' => 'op_number',
                'r_prest_id' => 'op_r_prest_id',
                'prestation' => 'op_prest_libelle',
                'r_couts_nature_name',
                'montant' => 'histo_couts_value',
                'utilisateur' => 'user_name',
            ));

            if (isset($aParams['complete_csv'])) {
                $oExport = OperationsQuery::getCompleteListing($oZendDbSelect);
            } else {
                $oExport = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Select($oZendDbSelect));
            }

            $sFilePath = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilePath, $oExport->make());
            My_File_Transfer::getInstance()->send($sFilePath);
        } // Viewing the filtered list in HTML
        else {
            // Initialize paginator adapter
            $oAdapter = new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect()->from('View_Validation_Couts_histo', array(
                'date_create',
                'date_create_fr',
                'op_number',
                'op_r_prest_id',
                'op_prest_libelle',
                'r_couts_nature_name',
                'histo_couts_value',
                'user_name',
                'histo_couts_id'
            )));

            // Pagination management
            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);
            $this->view->paginator = $oPaginator;
        }
    }
}
