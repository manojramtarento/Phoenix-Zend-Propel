<?php

class Administration_RprestationController extends My_Controller_Action
{


    /**
     * Generating a paginated list
     */
    public function listingAction()
    {
        $aParams = $this->_request->getParams();
        if (isset($_POST['updateCoutsModif']) && isset($_POST['prestations']) && is_array($_POST['prestations'])) {
            foreach (array_keys($_POST['prestations']) as $sServiceId) {
                $oService = RPrestationsQuery::create()->findOneByRPrestationId($sServiceId);
                if ($oService instanceof RPrestations) {
                    $oService->setRPCoutsEstimesModifiables(1);
                    $oService->save();
                }
            }
        }

        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oZendDbSelect->order('r_prestation_id asc');

        // Query search engine
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);
        $oMySearchEngine->findWordOn(array(
            'r_prestation_id' => array('operator' => 'like'),
            'r_p_libelle' => array('operator' => 'like'),
            'r_p_description_fr' => array('operator' => 'like')
        ));

        $oMySearchEngine->findByFields(array(
            'r_prestation_id' => array('operator' => 'eql'),
            'r_p_adf' => array('operator' => 'eql'),
            'actif' => array('operator' => 'eql'),
            'r_p_axe1_id' => array('operator' => 'eql'),
            'r_p_axe2_id' => array('operator' => 'eql'),
            'r_p_axe3_id' => array('operator' => 'eql'),
            'r_p_axe4_id' => array('operator' => 'eql'),
            'r_p_axe5_id' => array('operator' => 'eql'),
            'r_p_libelle' => array('operator' => 'like'),
            'r_p_groupe_validation_id' => array('operator' => 'eql'),
            'r_p_validation_id' => array('operator' => 'eql'),
            'r_p_controle' => array('operator' => 'like'),
            'r_p_code_comptable' => array('operator' => 'like'),
        ));

        if ($this->getParam('english_blank', null) == 1) {
            $oMySearchEngine->getSelect()->where("r_p_libelle_en =''");
        }

        $oMySearchEngine->makeOrderBy();

        // Downloading the filtered list in CSV
        if ($this->getParam('format') == 'csv') {
            $oZendDbSelect = $oMySearchEngine->getSelect()->from('View_Rprestation_Listing', array(
                'r_prestation_id', 'r_p_libelle', 'r_p_libelle_en', 'r_p_type_frais_libelle', 'r_tva_libelle',
                'r_p_groupe_validation_libelle', 'r_p_description_fr', 'r_p_description_en', 'r_p_axe1', 'r_p_axe2',
                'r_p_axe3', 'r_p_axe4', 'r_p_axe5', 'r_p_code_comptable', 'r_p_adf', 'r_p_commentaires',
                'r_p_type_validation_libelle', 'r_p_cout_interne', 'r_p_cout_externe', 'r_p_cout_total',
                'r_p_prix_vente', 'r_p_taux_marge_min', 'date_create', 'date_modify', 'user_modify', 'actif',
                'MajCopilUo' => 'r_p_is_maj_from_compiluo', 'EligiblePourPrime' => 'r_p_is_eligible_for_prime'
            ));
            $oExport = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Select($oZendDbSelect));
            $sFilepath = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilepath, $oExport->make());
            My_File_Transfer::getInstance()->send($sFilepath);
        } // Viewing the filtered list in HTML
        else {
            // Declaration of the Pager Adapter
            $oZendDbSelect = $oMySearchEngine->getSelect()->from('View_Rprestation_Listing');
            $oAdapter = new Zend_Paginator_Adapter_DbSelect($oZendDbSelect);

            // Pagination management
            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(100);
            $this->view->paginator = $oPaginator;
        }
    }

    /**
     * How to update a service (or create if 'r_prestation_id' is empty)
     */
    public function updateAction()
    {
        $this->_helper->layout->disableLayout();

        // Handle POST request
        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();
            $bExistingObject = isset($aData['r_prestation_id']) && is_numeric($aData['r_prestation_id']);
            $oService = null;

            // Retrieve the data of the task to be updated or create a new one.
            if ($bExistingObject) {
                $oService = RPrestationsQuery::create()->findOneByRPrestationId($aData['r_prestation_id']);
            } else {
                $oService = new RPrestations();
                $oService->setUserCreate(Zend_Auth::getInstance()->getIdentity()->getUserId());
            }

            if ($oService instanceof RPrestations) {
                $this->view->assign($oService->toArray(BasePeer::TYPE_FIELDNAME));

                if (! empty($aData["submit_update_rprestation"])) {
                    // Update the information (insert/update), the values corresponding to checkboxes are by default' 0' because if the checkbox is unchecked, we will not have the information.
                    $oService->setActif(0);
                    $oService->setRPAdf(0);
                    $oService->setValideDaf(0);
                    $oService->setRPCoutsEstimesModifiables(0);
                    $oService->setRPIsMajFromCompiluo(0);
                    $oService->setRPIsEligibleForPrime(0);

                    // Service - change mandatory field
                    $oService->setRPIsMandatory(0);

                    // Loads the new information
                    $oService->fromArray($aData, BasePeer::TYPE_FIELDNAME);
                    $oService->setRPCommentaires(trim($oService->getRPCommentaires()));
                    if ($oService->validate()) {
                        $oService->save();
                        // Removal of the performance of all models of estimate from catalogues
                        if (! isset($aData['actif']) && isset($aData['r_prestation_id'])) {
                            ROperationTypeSubTplPrestationQuery::create()->filterByRPrestationId($aData['r_prestation_id'])->delete();
                        }

                        // Generate body text
                        $sBodyMarkup = $this->view->translate('La prestation N°') . $oService->getPrimaryKey() . ' ' . $this->view->translate('a bien été mise à jour');
                        if (! $bExistingObject) {
                            $sBodyMarkup .= '<br /><br /><strong>' . $this->view->translate('N\'oubliez pas d\'avertir le SI pour paramétrer le moteur de comptage') . ' !</strong>';
                        }

                        $this->_response->clearBody();
                        $this->_response->setBody($sBodyMarkup);
                        $this->_helper->ViewRenderer->setNoRender(true);
                    } else {
                        $this->_helper->PropelFailures()->registerErrors($oService->getValidationFailures());
                    }
                }
            } else {
                $this->_response->clearBody();
                $this->_response->setBody($this->view->translate('Erreur: Cette prestation est invalide'));
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }
    }
}
