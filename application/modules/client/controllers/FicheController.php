<?php

class Client_FicheController extends My_Controller_Action
{

    public function indexAction()
    {
        $sClientId = $this->_getParam('cl_id');
        // Save the logo file if specified
        if (! empty($_FILES) && is_array($_FILES['cl_logo'])) {
            move_uploaded_file($_FILES['cl_logo']['tmp_name'], Zend_Registry::get('config')->path->img->logo->client . '/' . $sClientId . '.gif');
        }

        $oClient = ClientsQuery::create()->findOneByClId($sClientId);
        if ($oClient instanceof Clients) {
            $aData = $oClient->toArray(BasePeer::TYPE_FIELDNAME);
            $this->view->assign($aData);

            // Retrieving client statistics
            $bGetRequiredCash  = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::REQUEST_FOR_FUNDS);

            // Prevents configuration mistakes
            if ($bGetRequiredCash && ! Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)) {
                $this->_helper->FlashMessenger($this->view->translate('Accès aux Fonds requis à date impossible. Connexion Arthur inactive'), 'error');
                $bGetRequiredCash = false;
            }

            $this->view->stats = array('byyear' => $oClient->getYearStats(),'global' => $oClient->getGlobalStats($bGetRequiredCash));
        } else {
            $oZendControllerActionHelperRedirector = new Zend_Controller_Action_Helper_Redirector();
            $oZendControllerActionHelperRedirector->gotoUrlAndExit('/client/listing/index');
        }
    }

    public function sitesAction()
    {
        $this->_helper->layout->disableLayout();

        if ($this->_request->isXmlHttpRequest()) {
            $aData = $this->_request->getParams();

            $oClient = ClientsQuery::create()->findOneByClId($aData['cl_id']);
            if ($oClient instanceof Clients) {
                $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
                // Added a join with the r_countries table to retrieve the country of the client site
                $this->view->sites = $oZendDbSelect->from('client_sites')
                                ->joinLeft('r_countries', 'r_countries.r_country_id = client_sites.cl_site_country_id', array('r_country_name as cl_site_country_name'))
                                ->where('cl_id = ?', $oClient->getClId())
                                ->order('cl_site_id asc')
                                ->query()->fetchAll();
            }
        }
    }

    /**
     * Insert/update a client site
     */
    public function updatesiteAction()
    {
        $this->_helper->layout->disableLayout();

        if (! $this->_request->isPost()) {
            return;
        }

        $aData = $this->getRequest()->getPost();
        $oClientSites = null;

        // We retrieve the data from the site to be updated or create a new one.
        if (isset($aData["cl_site_id"]) && is_numeric($aData["cl_site_id"])) {
            $oClientSites = ClientSitesQuery::create()->findOneByClSiteId($aData["cl_site_id"]);
            if (! $oClientSites instanceof ClientSites) {
                $this->_response->clearBody();
                $this->_response->setBody('Erreur: Cet site est invalide');
                $this->_helper->ViewRenderer->setNoRender(true);
                return;
            }
        } else {
            $oClientSites = new ClientSites();
            if (isset($aData["cl_id"]) && is_numeric($aData["cl_id"])) {
                $oClientSites->setClId($aData["cl_id"]);
            } else {
                $this->_response->clearBody();
                $this->_response->setBody('Erreur: l\'identifiant du client est invalide');
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }

        // Remove cl_site_id fied for security
        unset($aData['cl_site_id']);

        $this->view->assign($oClientSites->toArray(BasePeer::TYPE_FIELDNAME));

        if (empty($aData["submit_update_site"])) {
            // Retrieval of the client site country from the r_countries table
            $this->view->cl_site_country_name = '';
            if ((($oCountry = RCountriesQuery::create()->findPk($oClientSites->getClSiteCountryId())) instanceof RCountries)) {
                $this->view->cl_site_country_name = $oCountry->getRCountryName();
            }
            return;
        }

        // The information is updated (insert/update)
        if (! isset($aData['cl_site_is_for_log'])) {
            $aData['cl_site_is_for_log'] = 0;
        }
        $oClientSites->fromArray($aData, BasePeer::TYPE_FIELDNAME);

        if ($oClientSites->validate()) {
            $oClientSites->save();

            $this->_response->clearBody();
            $this->_response->setBody('Le site client a bien été enregistré');
            $this->_helper->ViewRenderer->setNoRender(true);
        } else {
            $this->_helper->PropelFailures()->registerErrors($oClientSites->getValidationFailures());
        }
    }

    /**
     * Toggle client sites active status
     */
    public function switchsiteAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $aData = $this->_request->getParams();
            $oClientSites = null;

            // // We recover the id of the site to process
            if (isset($aData['cl_site_id']) && is_numeric($aData['cl_site_id'])) {
                $oClientSites = ClientSitesQuery::create()->findOneByClSiteId($aData['cl_site_id']);
                if ($oClientSites instanceof ClientSites) {
                    $oClientSites->setActif(! $oClientSites->getActif());
                    $oClientSites->save();
                    $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, array()));
                    return;
                } else {
                    $this->_response->clearBody();
                    $this->_response->setBody('Erreur: Ce site invalide');
                    $this->_helper->ViewRenderer->setNoRender(true);
                }
            }
        }
    }
    

    /**
     * Ajax function : Editing Client Fields
     */
    public function modificationAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->updateField(array('Clients'));
            $this->_helper->json($oResponse);
        }
    }

    public function getgraph1Action()
    {
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout->disableLayout();

        $aData = $this->_request->getParams();
        $aGraphData = $this->getGraphData1($aData['cl_id']);

        if ($aGraphData) {
            $oPhoenixPDFGenGraphDrawer = new Phoenix_GraphDrawer(Phoenix_GraphDrawer::OUT_DISPLAY);
            $oPhoenixPDFGenGraphDrawer->pie($aGraphData, 600, 200);
        }
    }

    public function getgraph2Action()
    {
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout->disableLayout();

        $aData = $this->_request->getParams();
        $aGraphData = $this->getGraphData2($aData['cl_id']);

        if ($aGraphData) {
            $oPhoenixPDFGenGraphDrawer = new Phoenix_GraphDrawer(Phoenix_GraphDrawer::OUT_DISPLAY);
            $oPhoenixPDFGenGraphDrawer->pie($aGraphData, 600, 200);
        }
    }

    public function getgraphdata1Action()
    {
        $aData = $this->_request->getParams();
        $aGraphData = $this->getGraphData1($aData['cl_id']);

        $sJsonData = $this->convertArrayToJson($aGraphData);
        $this->_helper->Json($sJsonData);
    }

    public function getgraphdata2Action()
    {
        $aData = $this->_request->getParams();
        $aGraphData = $this->getGraphData2($aData['cl_id']);

        $sJsonData = $this->convertArrayToJson($aGraphData);
        $this->_helper->Json($sJsonData);
    }

    /**
     * Retrieve data to create the graph #1
     * @param type $iClientId
     */
    private function getGraphData1($iClientId)
    {
        // Ordering results by libelle ascending
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aResults = $oZendDbSelect->from('View_Client_Stats_Graph1')
                        ->where('op_cl_id = ?', $iClientId)
                        ->order('libelle', 'ASC')
                        ->query()->fetchAll();

        // Save data
        $aGraphData = array();
        foreach ($aResults as $aRow) {
            $aGraphData[$aRow['libelle']] = $aRow['nb_operations'];
        }

        return $aGraphData;
    }

    /**
     * Retrieve data to create the graph #2
     * @param type $iClientId
     */
    private function getGraphData2($iClientId)
    {
        // 36377 Ordering results by libelle ascending
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aResults = $oZendDbSelect->from('View_Client_Stats_Graph2')
                        ->where('op_cl_id = ?', $iClientId)
                        ->order('libelle', 'ASC')
                        ->query()->fetchAll();

        // Save the data
        $aGraphData = array();
        foreach ($aResults as $aRow) {
            $aGraphData[$aRow['libelle']] = $aRow['nb_operations'];
        }

        return $aGraphData;
    }

    /**
     * Private function to convert an array ('libelle' => X, 'value' => Y) to JSON graph struct
     * @param array $aGraphData (look Graphs.js to specific json format)
     */
    private function convertArrayToJson($aGraphData)
    {
        // Create two columns
        $sColumns = "[	{'label': 'Type', 'type': 'string'},
						{'label': 'Percent', 'type': 'number'}]";

        // Data
        $sData = '';
        foreach ($aGraphData as $sLibelle => $iValue) {
            // keep the same order as defined colums
            $sData .= '[\''.$sLibelle.'\', '.$iValue.'],';
        }
        // On retire la dernière virgule
        $sJsonData = "[" . substr($sData, 0, strlen($sData) - 1) . "]";

        return "{'columns' : " . $sColumns . ",
				 'data': " . $sJsonData . "}";
    }
}
