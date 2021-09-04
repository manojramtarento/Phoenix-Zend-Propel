<?php

class Operation_FluxController extends My_Controller_Action
{

    const DISPLAY_ALL = 0;
    const DISPLAY_ATTENTE_EDITION = 1;
    const DISPLAY_ATTENTE_EXPEDITION = 2;
    const DISPLAY_EDITE_ET_EXPEDIE = 3;
    const DISPLAY_RETOURNE_OU_ANNULE = 4;

    /**
     * Default method when calling the controller
     */
    public function indexAction()
    {
        // On récupère l'opération en cours
        $aParams = $this->_request->getParams();
        $sOpId = $aParams['op_id'];

        if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
            $this->_helper->FlashMessenger($this->view->translate('La connexion externe "Arthur" est désactivée'), 'error');
            return $this->_helper->Redirector('index', 'description', 'operation', array('op_id' => $iOpId));
        }

        // Set the operation to the view to display the action bar
        $aOperations = OperationsQuery::create()->findOneByOpId($sOpId);
        $this->view->operation = $aOperations;

        // Performance optimization
        $this->view->stats = $this->view->operation->getFundRaisingAmount();

         // Retrieve the required amount
        $this->view->stats += array('Requis' => Phoenix_ExternalConnection_Arthur::getInstance()->getRequiredFundsByOperationIds(array($sOpId)));

        $oMySearchEngine = Phoenix_ExternalConnection_Arthur::getInstance()->getDocumentsSearchEngineByOperationId($sOpId);
        $oMySearchEngine->makeOrderBy();
        $this->view->aDocuments = $oMySearchEngine->getSelect()->query()->fetchAll();
    }

    /**
     * List operation flows
     */
    public function listingAction()
    {
        // Retrieve the current operation
        $aParams = $this->_request->getParams();
        if (! isset($aParams['op_id'], $aParams['doc_type'])) {
            throw new Exception('Page not found');
        }

        if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
            $this->_helper->FlashMessenger($this->view->translate('La connexion externe "Arthur" est désactivée'), 'error');
            return $this->_helper->Redirector('index', 'flux', 'operation', array('op_id' => $aParams['op_id']));
        }

        $oPhoenixExternalConnectionArthur = Phoenix_ExternalConnection_Arthur::getInstance();

        $iOperationId = (int) $aParams['op_id'];
        $sDocType  = $aParams['doc_type'];

        // Sets the operation to the view to display the action bar
        $aOperations = OperationsQuery::create()->findOneByOpId($iOperationId);
        $this->view->operation = $aOperations;

        // Retrieves information about the document type
        $aData = $oPhoenixExternalConnectionArthur->getDocumentDataByOperationIdAndParamId($iOperationId, $sDocType);
        if ($aData) {
            $sDocumentLibelle = $aData['libelle'];
            $this->view->subtitle = utf8_encode($sDocumentLibelle);
            $this->view->stats = array(
                'RT' => $aData['RT'],
                'Remb' => $aData['Remb'],
                'Frais' => $aData['Frais'],
                'Total' => $aData['Frais'] + $aData['Remb']
            );
        }

        $this->view->doc_type = $sDocType;
        $aSearch = array(
            'op_id' => array('operator' => 'eql'),
            'op_param_id' => array('operator' => 'eql'),
            'numDemande' => array('operator' => 'eql'),
            'recu' => array('operator' => $aParams['find_recu_comp']??null, 'date_format' => true),
            'integre' => array('operator' => $aParams['find_integre_comp']??null, 'date_format' => true),
            'expedie' => array('operator' => $aParams['find_expedie_comp']??null, 'date_format' => true),
            'montant_a_rembourser' => array('operator' => $aParams['find_montant_a_rembourser_comp']??null),
            'primes' => array('operator' => 'like'),
            'is_edited' => array('operator' => 'eql'),
            'is_sent' => array('operator' => 'eql'),
            'is_back' => array('operator' => 'eql'),
        );
        $aParams['find_op_id'] =$iOperationId;
        $aParams['find_op_param_id'] = $sDocType;

        $oMySearchEngine = $oPhoenixExternalConnectionArthur->getDocumentsDetailsSearchEngine($aSearch, $aParams);
        // Downloading the filtered list in CSV
        if ($this->getParam('format') == 'csv') {
            $oOperation = OperationsQuery::create()->findOneByOpId($aParams['op_id']);
            return $oPhoenixExternalConnectionArthur->exportMultipleDocuments($oOperation->getOpNumber().'_'.$this->view->translate('export_flux_sortants').'.csv', $oMySearchEngine);
        }

        // Viewing the filtered list in HTML calculation of the total on the filtered data
        $oSelect = clone $oMySearchEngine->getSelect();
        $oSelect->reset(Zend_Db_Select::ORDER)->reset(Zend_Db_Select::COLUMNS)->columns(array(
            'Remb' => new Zend_Db_Expr('sum(montant_a_rembourser)'),
            'Frais' => new Zend_Db_Expr('sum(montant_frais_envois)'),
            'Requis' => new Zend_Db_Expr('sum(montant_a_rembourser) + sum(montant_frais_envois)'),
        ));

        $oStatement = $oSelect->query();
        $aData = $oStatement->fetchAll();

        $this->view->stats_filtre = array(
            $this->view->translate('Remb') => $aData[0]['Remb'],
            $this->view->translate('Frais') => $aData[0]['Frais'],
            $this->view->translate('Total') => $aData[0]['Frais'] + $aData[0]['Remb']
        );

        // Pagination management
        $oSelect = $oMySearchEngine->getSelect();
        $oSelect = $oSelect->reset(Zend_Db_Select::COLUMNS)->columns('*')->reset(Zend_Db_Select::ORDER)->order('numDemande');

        $oAdapter = new Zend_Paginator_Adapter_DbSelect($oSelect);

        $oPaginator = new My_Paginator($oAdapter);
        $oPaginator->setCurrentPageNumber($this->_getParam('page'));
        $oPaginator->setItemCountPerPage(100);
        $this->view->paginator = $oPaginator;
    }

    /**
     * Action of the export of multiple finality documents
     */
    public function exportmultipledocumentsAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();

        if (! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
            $this->_helper->FlashMessenger($this->view->translate('La connexion externe "Arthur" est désactivée'), 'error');
            return $this->_helper->Redirector('index', 'flux', 'operation', array('op_id' => $aParams['op_id']));
        }

        if (empty($aParams['requested_documents'])) {
            $this->_helper->FlashMessenger($this->view->translate('Aucun document n\'a été séléctionné pour l\'export'), 'error');
            $this->_helper->Redirector('index', 'flux', 'operation', array('op_id' => $aParams['op_id']));
        }

        $oPhoenixExternalConnectionArthur = Phoenix_ExternalConnection_Arthur::getInstance();

        $oMySearchEngine = $oPhoenixExternalConnectionArthur->getDocumentsDetailsSearchEngine(
            array(
                'op_id' => array('operator' => 'eql'),
                'op_param_id' => array('operator' => 'in'),
            ),
            array('find_op_id' => $aParams['op_id'],'find_op_param_id' => $aParams['requested_documents'])
        );

        $oOperation = OperationsQuery::create()->findOneByOpId($aParams['op_id']);
        return $oPhoenixExternalConnectionArthur->exportMultipleDocuments($oOperation->getOpNumber().'_'.$this->view->translate('export_flux_sortants').'.csv', $oMySearchEngine);
    }

}
