<?php
class Administration_RrubriqueController extends My_Controller_Action
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
        $oSelect = $oZendDbSelect->from('View_Rrubrique_Listing')->order('r_rub_id asc');

        // Search engine on the query
        $oMySearchEngine = new My_Search_Engine($oSelect);
        $oMySearchEngine->findWordOn(array('r_rub_libelle' => array('operator' => 'like')));
        $oMySearchEngine->findByFields(array(
            'r_rub_id' => array('operator' => 'eql'),
            'actif' => array('operator' => 'eql'),
            'r_rub_libelle' => array('operator' => 'like'),
            'r_tva_type_id' => array('operator' => 'eql'),
            'r_rub_type_id' => array('operator' => 'eql')
        ));
        $oMySearchEngine->makeOrderBy();

        // Downloading the filtered list in CSV
        if ($this->_helper->ContextSwitch()->getCurrentContext() == 'csv') {//context csv
            $oAdapterExport = new My_Data_Export_Source_Adapter_Select($oMySearchEngine->getSelect());
            $oExport = new My_Data_Export_CSV($oAdapterExport);
            $this->view->csv = $oExport->make();
            $this->view->filename = Phoenix_Data_Export_Csv::buildFileName();
        } // Viewing the filtered list in HTML
        else {
            // Declaration of the Paginator Adapter
            $oAdapter = new Zend_Paginator_Adapter_DbSelect($oMySearchEngine->getSelect());
            // Pagination management
            $oPaginator = new My_Paginator($oAdapter);
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);
            $this->view->paginator = $oPaginator;
        }
    }

    /**
     * How to update a section (or create if' r_rub_id' is empty)
     */
    public function updateAction()
    {
        $this->_helper->layout->disableLayout();

        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();
            $oSection = null;

            // Retrieve the data of the task to be updated or create a new one.
            if (isset($aData['r_rub_id']) && is_numeric($aData['r_rub_id'])) {
                $oSection = RRubriquesQuery::create()->findOneByRRubId($aData['r_rub_id']);
            } else {
                $oSection = new RRubriques();
            }

            if ($oSection instanceof RRubriques) {
                $this->view->assign($oSection->toArray(BasePeer::TYPE_FIELDNAME));

                if (! empty($aData["submit_update_rrubrique"])) {
                    // Update the information (insert/update), the values corresponding to checkboxes are by default' 0' because if the checkbox is unchecked, we will not have the information.
                    $oSection->setActif(0);

                    // Loads the new information
                    $oSection->fromArray($aData, BasePeer::TYPE_FIELDNAME);

                    if ($oSection->validate()) {
                        $oSection->save();
                        $this->_response->clearBody();
                        $this->_response->setBody($this->view->translate('La rubrique N°'). $oSection->getPrimaryKey() .' '.$this->view->translate('a bien été mise à jour'));
                        $this->_helper->ViewRenderer->setNoRender(true);
                    } else {
                        $this->_helper->PropelFailures()->registerErrors($oSection->getValidationFailures());
                    }
                }
            } else {
                $this->_response->clearBody();
                $this->_response->setBody($this->view->translate('Erreur: Cette rubrique est invalide'));
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }
    }
}
