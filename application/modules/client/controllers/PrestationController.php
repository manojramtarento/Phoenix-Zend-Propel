<?php

class Client_PrestationController extends My_Controller_Action
{

    /**
     * Client service option
     */
    public function indexAction()
    {
        $iClientId = $this->_getParam('cl_id');
        $oClient = ClientsQuery::create()->findOneByClId($iClientId);
        $aData = $oClient->toArray(BasePeer::TYPE_FIELDNAME);
        $this->view->assign($aData);

        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oZendDbSelect->from('View_Client_Prestations_Listing')->where('cl_id = ' . $iClientId)->order('r_prestation_id asc');

        // Query search engine
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);
        $oMySearchEngine->findWordOn(array(
            'r_prestation_id' => array('operator' => 'like'),
            'r_p_libelle' => array('operator' => 'like'),
            'r_p_client_libelle' => array('operator' => 'like')
        ));
        $oMySearchEngine->makeOrderBy();

        // Context csv
        if ($this->getParam('format') == 'csv') {
            $oExport = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Select($oZendDbSelect));
            $sFilePath = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilePath, $oExport->make());
            My_File_Transfer::getInstance()->send($sFilePath);
        } // Context html
        else {
            // Initialization of the paginator
            $oPaginator = new My_Paginator(new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect()));
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);
            $this->view->paginator = $oPaginator;
        }
    }

    /**
     * Addition of negotiated services
     * 1-display of the form
     * 2-Registration of negotiated benefits
     */
    public function ajoutprestationAction()
    {
        $this->_helper->layout->disableLayout();

        $aParams = $this->_request->getParams();
        $aFindByfields = $this->_request->getParam('findbyfields', null);

        // Retrieve client ID
        $iClientId = $this->_request->getParam('cl_id');

        if (isset($aFindByfields)) {
            // Display of active services
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $oZendDbSelect->from('View_Rprestation_Listing')
                    ->where('actif = 1')
                    ->order('r_prestation_id desc');

            // Query search engine
            $oMySearchEngine = new My_Search_Engine($oZendDbSelect);

            // Declaration of search fields
            $oMySearchEngine->findByFields(array(
                'r_prestation_id' => array('operator' => 'eql'),
                'r_p_libelle' => array('operator' => 'like')
            ));

            $this->view->prestations = $oMySearchEngine->getSelect()->query()->fetchAll();
        } elseif (isset($aParams['submit_ajouter_prestation'])) {
            // Service registration
            $aErrors = array();
            $aPrestationId = $this->_request->getParam('r_prestation_id');
            $aPrixVente = $this->_request->getParam('r_p_prix_vente');
            $aRPClientLibelle = $this->_request->getParam('r_p_libelle');

            if (is_array($aPrestationId)) {
                foreach ($aPrestationId as $iPrestationId) {
                    // Creation of the client service object
                    $oClientPrestations = new ClientPrestations();
                    $oClientPrestations->setClId($iClientId);
                    $oClientPrestations->setClPrestPv($aPrixVente[$iPrestationId]);
                    $oClientPrestations->setRPClientLibelle($aRPClientLibelle[$iPrestationId]);
                    $oClientPrestations->setRPrestId($iPrestationId);

                    if ($oClientPrestations->validate()) {
                        $oClientPrestations->save();
                    } else {
                        $aErrors[] = 'Prestation ' . $iPrestationId . ' :';
                        $aErrors[] = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oClientPrestations->getValidationFailures());
                    }
                }

                if ($aErrors) {
                    $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
                } else {
                    $this->_forward('index', 'prestation', 'client', array('cl_id' => $iClientId));
                }
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->render('prestation/ajoutprestation.phtml')));
            }
        }
    }

    /**
     * Method to update a service
     */
    public function updateAction()
    {
        $this->_helper->layout->disableLayout();

        // Handle post request
        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();
            $oClientPrestation = null;

            // Retrieve service data to update
            if (isset($aData["cl_prest_id"]) && is_numeric($aData["cl_prest_id"])) {
                $oClientPrestation = ClientPrestationsQuery::create()->findOneByClPrestId($aData["cl_prest_id"]);
            }

            if ($oClientPrestation instanceof ClientPrestations) {
                $this->view->assign($oClientPrestation->toArray(BasePeer::TYPE_FIELDNAME));

                // Retrieve the original selling price
                $oPrestation = RPrestationsQuery::create()->findOneByRPrestationId($oClientPrestation->getRPrestId());
                $this->view->r_p_cout_total = $oPrestation->getRPCoutTotal();
                $this->view->r_p_prix_vente = $oPrestation->getRPPrixVente();

                // Display the name of the personalized service for the client, otherwise get the default name of the service.
                $oPrestationClientLibelle = $oClientPrestation->getRPClientLibelle();
                $this->view->r_p_libelle = ($oPrestationClientLibelle)? $oPrestationClientLibelle : $oPrestation->getRPLibelle();

                if (! empty($aData["submit_update_prestation"])) {
                    // Update the information
                    $oClientPrestation->fromArray($aData, BasePeer::TYPE_FIELDNAME);

                    if ($oClientPrestation->validate()) {
                        $oClientPrestation->save();
                        $this->_response->clearBody();
                        $this->_response->setBody('La prestation a bien été mis à jour');
                        $this->_helper->ViewRenderer->setNoRender(true);
                    } else {
                        $this->_helper->PropelFailures()->registerErrors($oClientPrestation->getValidationFailures());
                    }
                }
            } else {
                $this->_response->clearBody();
                $this->_response->setBody('Erreur: Cette prestation est invalide');
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }
    }

    /**
     * Action to remove a service
     */
    public function deleteAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $aData = $this->_request->getParams();
            $oClientPrestation = null;

            // Retrieve the id of the benefit to be deleted
            if (isset($aData["cl_prest_id"]) && is_numeric($aData["cl_prest_id"])) {
                $oClientPrestation = ClientPrestationsQuery::create()->findOneByClPrestId($aData["cl_prest_id"]);
            }

            if ($oClientPrestation instanceof ClientPrestations) {
                $oClientPrestation->delete();
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, array()));
            } else {
                $this->_response->clearBody();
                $this->_response->setBody('Erreur: Cette prestation est invalide');
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }
    }

}
