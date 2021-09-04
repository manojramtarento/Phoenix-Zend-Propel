<?php
class Administration_RscenarioController extends My_Controller_Action
{

    public function init()
    {
        $this->_helper->ContextSwitch()->addActionContext('listing', 'csv')->initContext();
    }
    
    /**
     * Generating a paginated list
     */
    public function listingAction()
    {
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oSelect = $oZendDbSelect->from('r_scenarios')->order('r_scenario_id desc');
        
        // Search engine on the query
        $oMySearchEngine = new My_Search_Engine($oSelect);
        
        $oMySearchEngine->findWordOn(array('r_scenario_libelle' => array('operator' => 'like')));
        $oMySearchEngine->findByFields(array(
            'r_scenario_id' => array('operator' => 'eql'),
            'r_scenario_actif' => array('operator' => 'eql'),
            'r_scenario_libelle' => array('operator' => 'like')
        ));

        $oMySearchEngine->makeOrderBy();
    
        // Downloading the filtered list in CSV
        if ($this->_helper->ContextSwitch()->getCurrentContext() == 'csv') {
            $oAdapterExport = new My_Data_Export_Source_Adapter_Select($oMySearchEngine->getSelect());
            $oExport = new My_Data_Export_CSV($oAdapterExport);
            $this->view->csv = $oExport->make();
            $this->view->filename = Phoenix_Data_Export_Csv::buildFileName();
        } // Viewing the filtered list in HTML
        else {
            // Handle pagination
            $oAdapter = new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect());
            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);
            $this->view->paginator = $oPaginator;
        }
    }

    /**
     * Update a scenario (or create if' r_scenario_id' is empty)
     */
    public function updateAction()
    {
        $this->_helper->layout->disableLayout();

        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();
            $oRScenario = null;
            
            // On récupère les données de la tâche à mettre à jour ou on en crée une nouvelle
            if (isset($aData['r_scenario_id']) && is_numeric($aData['r_scenario_id'])) {
                $oRScenario = RScenariosQuery::create()->findOneByRScenarioId($aData['r_scenario_id']);
            } else {
                $oRScenario = new RScenarios();
            }
            
            if ($oRScenario instanceof RScenarios) {
                $this->view->assign($oRScenario->toArray(BasePeer::TYPE_FIELDNAME));
                
                if (! empty($aData['submit_update_rscenario'])) {
                    // On met à jour les informations (insert/update)
                    
                    // On met par défaut à '0' les valeurs correspondantes à des checkboxs
                    // > Car si la checkbox est décochée, on n'aura pas l'information
                    $oRScenario->setRScenarioActif(0);
                    
                    // Load new data
                    $oRScenario->fromArray($aData, BasePeer::TYPE_FIELDNAME);

                    if ($oRScenario->validate()) {
                        $oRScenario->save();

                        $this->_response->clearBody();
                        $this->_response->setBody($this->view->translate('Le scénario N°'). $oRScenario->getPrimaryKey() .' '.$this->view->translate('a bien été mise à jour'));
                        $this->_helper->ViewRenderer->setNoRender(true);
                    } else {
                        $aErrors = $oRScenario->getValidationFailures();
                        $this->_helper->PropelFailures()->registerErrors($aErrors);
                    }
                }
            } else {
                $this->_response->clearBody();
                $this->_response->setBody($this->view->translate('Erreur: Ce scénario est invalide'));
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }
    }
}
