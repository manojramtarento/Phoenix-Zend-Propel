<?php

class Client_ListingController extends My_Controller_Action
{

    const NUMBER_OF_ROWS_PER_PAGE = 10;

    public function init()
    {
        $this->_helper->ContextSwitch()->initContext();
    }

    /**
     * Displaying Customers list
     */
    public function indexAction()
    {
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect->order('cl_libelle asc'));
        $oMySearchEngine->findWordOn(array(
            'cl_libelle' => array('operator' => 'like'),
            'cl_dc_name' => array('operator' => 'like')
        ));

        $oMySearchEngine->findByFields(array(
            'cl_libelle' => array('operator' => 'like'),
            'cl_type_id' => array('operator' => 'eql'),
            'cl_activity_id' => array('operator' => 'eql'),
            'cl_dc_id' => array('operator' => 'eql'),
            'inactif' => array('operator' => 'eql'),
            'nb_contrats' => array('operator' => 'supeql')
        ));

        $oMySearchEngine->makeOrderBy();

        if ($this->getParam('format') == 'csv') {
            $oSelect = $oMySearchEngine->getSelect()->from('View_Client_Listing', array(
                'cl_id', 'cl_libelle', 'nb_devis_en_cours', 'nb_accepte', 'nb_refus', 'nb_cloture', 'cl_dc_name', 'cl_type_id', 'cl_type_libelle'
            ));
            $oExporter = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Select($oSelect));
            $sExportFileName = Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sExportFileName, $oExporter->make());
            My_File_Transfer::getInstance()->send(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sExportFileName);
        } else {
            // Builing paginator
            $this->view->paginator = new My_Paginator(new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect()->from('View_Client_Listing')));
            $this->view->paginator->setCurrentPageNumber($this->_getParam('page'));
            $this->view->paginator->setItemCountPerPage(self::NUMBER_OF_ROWS_PER_PAGE);
            $this->view->oldCustomerDcs = ClientsQuery::create()->getOldCustomerDcs();
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
        $aCreatedClients = array();
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

                $oClientOrErrors = Clients::createClientFromData($aData, array());
                if ($oClientOrErrors instanceof Clients) {
                    $aCreatedClients[] = $oClientOrErrors;
                } else {
                    $aErrors[] = sprintf(
                        $this->view->translate('error_csv_line_has_save_errors'),
                        $iLine,
                        '<br/>' . join('<br/>', $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oClientOrErrors))
                    );
                    continue;
                }
            }
        }

        $this->view->errors = $aErrors;
        $this->view->createdClients = $aCreatedClients;
    }
}
