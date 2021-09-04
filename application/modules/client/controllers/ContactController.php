<?php

class Client_ContactController extends My_Controller_Action
{

    /**
     * Listing of contacts associated with a client
     */
    public function clientAction()
    {
        $sClientId = $this->_getParam('cl_id');
        $oClients = ClientsQuery::create()->findOneByClId($sClientId);
        $aData = $oClients->toArray(BasePeer::TYPE_FIELDNAME);
        $this->view->assign($aData);

        // Contacts are ordered by the concatenation of surname, given name, without spaces
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oZendDbSelect->from('View_Contact_Listing', array('*', 'TRIM(concat(ct_lastname, ct_firstname)) as contact_name'))
                ->where('cl_id = ' . $sClientId)
                ->order('contact_name asc');

        // Query search engine
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);
        $oMySearchEngine->findWordOn(array(
            'ct_lastname' => array('operator' => 'like'),
            'ct_firstname' => array('operator' => 'like')
        ));

        if ($this->_getParam('find_actif', null) == null) {
            $this->setParam('find_actif', 1);
        }

        $oMySearchEngine->findByFields(array(
            'ct_firstname' => array('operator' => 'like'),
            'ct_lastname' => array('operator' => 'like'),
            'ct_email' => array('operator' => 'like'),
            'ct_newsletter' => array('operator' => 'eql'),
            'actif' => array('operator' => 'eql'),
        ));

        $oMySearchEngine->makeOrderBy();

        // Generate csv
        if ($this->getParam('format') == 'csv') {
            $oAdapterExport = new My_Data_Export_Source_Adapter_Select($oMySearchEngine->getSelect());
            $oExport = new My_Data_Export_CSV($oAdapterExport);
            $sFilename = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilename, $oExport->make());
            My_File_Transfer::getInstance()->send($sFilename);
        } // Generate HTML
        else {
            $oAdapter = new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect());
            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(10);
            $this->view->paginator = $oPaginator;
        }
    }

    public function listingAction()
    {

        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());

        // Sorting result by concatenated last_name and firstname
        $oZendDbSelect->from('View_Contact_Listing', array('*', 'TRIM(concat(ct_lastname, ct_firstname)) as contact_name'))->order('contact_name asc');

        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);

        // Search based on the full contact name
        $oMySearchEngine->findWordOn(array('trim(concat(ct_lastname, \' \', ct_firstname))' => array('operator' => 'like')));

        if ($this->_getParam('find_actif', null) == null) {
            $this->setParam('find_actif', 1);
        }

        $oMySearchEngine->findByFields(array(
            'ct_firstname' => array('operator' => 'like'),
            'ct_lastname' => array('operator' => 'like'),
            'ct_email' => array('operator' => 'like'),
            'ct_newsletter' => array('operator' => 'eql'),
            'actif' => array('operator' => 'eql'),
        ));

        $oMySearchEngine->makeOrderBy();

        if ($this->getParam('format') == 'csv') {
            $oExportAdapter = new My_Data_Export_Source_Adapter_Select($oMySearchEngine->getSelect());
            $oMyDataExportCSV = new My_Data_Export_CSV($oExportAdapter);
            $sFilename = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($sFilename, $oMyDataExportCSV->make());
            My_File_Transfer::getInstance()->send($sFilename);
        } else {
            $oAdapter = new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect());
            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(30);
            $this->view->paginator = $oPaginator;
        }
    }

    /**
     * AJAX function : returns the html code of a select containing the list of customer sites
     */
    public function getselectforclientsitesAction()
    {
        $aData = $this->getRequest()->getPost();

        $sHtmlMarkup = "Aucun site sélectionné";
        if (is_numeric($aData['cl_id']) && $aData['cl_id'] > 0) {
            if (! array_key_exists('cl_site_id', $aData)) {
                $aData["cl_site_id"] = '';
            }
            $sHtmlMarkup = Phoenix_View_Helper_Html::selectFromTable('client_sites', array('name' => 'cl_site_id', 'value' => $aData["cl_site_id"], 'class' => 'unit size2of3 form-select lastUnit'), array('name' => "CONCAT(COALESCE(cl_site_id,''), ' - ', COALESCE(cl_site_libelle,''))", 'value' => 'cl_site_id'), array('clause_where' => "cl_id='" . $aData['cl_id'] . "' and actif = 1", 'default_label' => 'Choisir...'));
        }
        $this->_helper->Json("{'html' : " . json_encode($sHtmlMarkup) . "}");
    }

    /**
     * How to update a contact (or create if' ct_id' is empty)
     */
    public function updateAction()
    {
        $this->_helper->layout->disableLayout();
        if (! $this->_request->isPost()) {
            return;
        }

        $aData = $this->getRequest()->getPost();
        $oContact = null;

        // Retrieves the contact data to be updated or create a new one
        if (empty($aData['ct_id'])) {
            $oContact = new Contacts();
            if (isset($aData['cl_id']) && is_numeric($aData['cl_id'])) {
                $oContact->setClId($aData['cl_id']);
            }
        } else {
            if (! is_numeric($aData['ct_id'])) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, array('L\'identifiant du contact est invalide')));
                return;
            }
            $oContact = ContactsQuery::create()->findOneByCtId($aData['ct_id']);
            if (! $oContact instanceof Contacts) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, array('Ce contact est invalide')));
                return;
            }
        }
        // Remove ct_id fied for security
        unset($aData['ct_id']);

        // Retrieves the client's name and address
        $sClientId = $oContact->getClId();
        if ($sClientId && is_numeric($sClientId)) {
            $oClient = ClientsQuery::create()->findOneByClId($oContact->getClId());
            $this->view->cl_libelle = $oClient->getClLibelle();
        }

        if (empty($aData['submit_update_contact'])) {
            $this->_request->setParams($oContact->toArray(BasePeer::TYPE_FIELDNAME));
            return;
        }
        // Set value to '0' by default, because if the checkbox isn't checked, we won't see the value '0'
        if (! isset($aData['ct_newsletter'])) {
            $oContact->setCtNewsletter(0);
        }

        // Setting the choice of the contact for receiving the invoice by email to 0 if the box is not ticked.
        if (! isset($aData['ct_receive_fact_by_email'])) {
            $oContact->setCtReceiveFactByEmail(0);
        }
        // Load new data
        $oContact->fromArray($aData, BasePeer::TYPE_FIELDNAME);

        if ($oContact->validate()) {
            $oContact->save();
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD));
        } else {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToArray($oContact->getValidationFailures());
            $this->_helper->json(new Phoenix_Ajax_Components_Response_UpdateField(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors, null, null, null, null));
        }
    }

    /**
     * Toggle contact active status
     */
    public function switchstatusAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $aData = $this->_request->getParams();
            $oContact = null;

            // Retrieves the id of the contact to process
            if (isset($aData['ct_id']) && is_numeric($aData['ct_id'])) {
                $oContact = ContactsQuery::create()->findOneByCtId($aData['ct_id']);
                if ($oContact instanceof Contacts) {
                    $oContact->setActif(! $oContact->getActif());
                    $oContact->save();
                    $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, array()));
                    return;
                } else {
                    $this->_response->clearBody();
                    $this->_response->setBody('Erreur: Ce contact est invalide');
                    $this->_helper->ViewRenderer->setNoRender(true);
                }
            }
        }
    }
}
