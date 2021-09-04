<?php

class Administration_RclienttypesController extends My_Controller_Action
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
        $oZendDbSelect->from('View_Rclient_Types_Listing')->order('cl_type_id asc');

        // Query search engine
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);
        $oMySearchEngine->findWordOn(array('cl_type_libelle' => array('operator' => 'like')));

        $oMySearchEngine->findByFields(
            array(
                    'cl_type_id' => array('operator' => 'eql'),
                    'cl_type_libelle' => array('operator' => 'like')
                )
        );

        $oMySearchEngine->makeOrderBy();

        // Downloading the filtered list in CSV
        if ($this->_helper->ContextSwitch()->getCurrentContext() == 'csv') {
            $oExport = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Select($oMySearchEngine->getSelect()));
            $this->view->csv = $oExport->make();
            $this->view->filename = Phoenix_Data_Export_Csv::buildFileName();
        } // Viewing the filtered list in HTML
        else {
            // Initialize paginator adapter
            $oAdapter = new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect());

            // Pagination management
            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);
            $this->view->paginator = $oPaginator;
        }
    }

    /**
     * Action for updating a client type (or creating if' cl_type_id' is empty)
     */
    public function updateAction()
    {
        $this->_helper->layout->disableLayout();

        // Handle post request
        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();
            $oRClientType = null;

            // Retrieve the client type's data to be updated or create a new one.
            if (isset($aData["cl_type_id"]) && is_numeric($aData["cl_type_id"])) {
                $oRClientType = RClientTypesQuery::create()->findOneByClTypeId($aData["cl_type_id"]);
            } else {
                $oRClientType = new RClientTypes();
            }

            if ($oRClientType instanceof RClientTypes) {
                $this->view->assign($oRClientType->toArray(BasePeer::TYPE_FIELDNAME));

                // The information is updated (insert/update)
                if (! empty($aData["submit_update_rclienttype"])) {
                    $oRClientType->setActif(0);
                    $oRClientType->fromArray($aData, BasePeer::TYPE_FIELDNAME);

                    if ($oRClientType->validate()) {
                        $oRClientType->save();

                        $this->_response->clearBody();
                        $this->_response->setBody($this->view->translate('Le type client N°') . $oRClientType->getPrimaryKey() .' '.$this->view->translate('a bien été mise à jour'));
                        $this->_helper->ViewRenderer->setNoRender(true);
                    } else {
                        $this->_helper->PropelFailures()->registerErrors($oRClientType->getValidationFailures());
                    }
                }
            } else {
                $this->_response->clearBody();
                $this->_response->setBody($this->view->translate('Erreur: Ce type client est invalide'));
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }
    }
}
