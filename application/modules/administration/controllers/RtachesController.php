<?php

class Administration_RtachesController extends My_Controller_Action
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
        // Query search engine
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oZendDbSelect->from('View_Rtaches_Listing')->order('r_op_task_type_libelle asc');
        $oMySearchEngine = new My_Search_Engine($oZendDbSelect);
        $oMySearchEngine->findWordOn(array(
            'r_op_task_type_id' => array('operator' => 'like'),
            'r_op_task_type_libelle' => array('operator' => 'like')
        ));

        $oMySearchEngine->findByFields(array(
            'r_op_task_type_id' => array('operator' => 'eql'),
            'r_op_task_type_libelle' => array('operator' => 'like'),
            'r_op_task_type_date_ref' => array('operator' => 'eql'),
        ));

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
     * Method for updating a task repository (or creating if' r_op_task_type_id' is empty)
     */
    public function updateAction()
    {
        $this->_helper->layout->disableLayout();
        $aData = $this->getAllParams();
        if (! empty($aData["submit_update_rtache"])) {
            // Retrieve the data of the task to be updated or create a new one
            if (isset($aData["r_op_task_type_id"]) && is_numeric($aData["r_op_task_type_id"])) {
                $oRTaches = ROperationTasksTypeQuery::create()->findPk($aData["r_op_task_type_id"]);
            } else {
                $oRTaches = new ROperationTasksType();
            }
            switch ($aData['assign_to']) {
                case 'dc':
                    $aData['r_op_task_type_assign_to_dc'] = 1;
                    $aData['r_op_task_type_assign_to_cp']=0;
                    $aData['r_op_task_type_assign_to_user']=null;
                    break;
                case 'cp':
                    $aData['r_op_task_type_assign_to_cp'] = 1;
                    $aData['r_op_task_type_assign_to_dc'] =0;
                    $aData['r_op_task_type_assign_to_user']=null;
                    break;
                case 'user':
                    $aData['r_op_task_type_assign_to_dc'] =0;
                    $aData['r_op_task_type_assign_to_cp']=0;
                    break;
            }

            $oRTaches->fromArray($aData, BasePeer::TYPE_FIELDNAME);

            if ($oRTaches->validate()) {
                $oRTaches->save();
                $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, $this->view->translate('maj ok')));
            } else {
                $this->_helper->PropelFailures()->registerErrors($oRTaches->getValidationFailures());
            }
        } else {
            if (isset($aData["r_op_task_type_id"])) {
                $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
                $aTaskData = $oZendDbSelect->from('View_Rtaches_Listing')->where('r_op_task_type_id=?', $aData["r_op_task_type_id"])->query()->fetch(PDO::FETCH_ASSOC);
                $this->_request->setParams($aTaskData);

                if (! (count($aTaskData) > 0)) {
                    $this->_response->clearBody();
                    $this->_response->setBody($this->view->translate('Erreur: Cette tâche est invalide'));
                    $this->_helper->ViewRenderer->setNoRender(true);
                }
            }
        }
    }

}
