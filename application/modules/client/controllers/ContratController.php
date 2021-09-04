<?php

class Client_ContratController extends My_Controller_Action
{

    public function indexAction()
    {
        $sClientId = $this->_getParam('cl_id');
        $oClient = ClientsQuery::create()->findOneByClId($sClientId);
        $aData = $oClient->toArray(BasePeer::TYPE_FIELDNAME);
        $this->view->client = $oClient;
        $this->view->assign($aData);

        $oClientContratOptions = ClientContratOptionsQuery::create()->findOneByClId($sClientId);
        if (! $oClientContratOptions instanceof ClientContratOptions) {
            $oClientContratOptions = new ClientContratOptions;
            $oClientContratOptions->setClId($sClientId);
            $oClientContratOptions->save();
        }

        $aData = $oClientContratOptions->toArray(BasePeer::TYPE_FIELDNAME);
        $aData['cl_ct_start'] = $oClientContratOptions->getClCtStart('d/m/Y');
        $aData['cl_ct_echeance'] = $oClientContratOptions->getClCtEcheance('d/m/Y');
        $this->view->assign($aData);
    }

    /**
     * AJAX function : editing Fields
     */
    public function updateAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oZendControllerRequestHttp = new Zend_Controller_Request_Http();
            $aParams = $oZendControllerRequestHttp->getParams();

            if (in_array($aParams["fieldName"], array('cl_ct_echeance','cl_ct_start'))) {
                $aParams["fieldValue"] = Phoenix_Data_Convert::formatDateForSqlServer($aParams["fieldValue"]);
            }

            $oResponse = $this->_helper->AjaxComponents()->updateField(array('ClientContratOptions'), $aParams);
            $this->_helper->json($oResponse);
        }
    }

    /**
     * Contract upload
     */
    public function uploadcontratAction()
    {
        $this->_helper->ViewRenderer->setNoRender(true);
        $aParams = $this->_request->getParams();
        $aErrors=array();
        $oFileTransfer = $this->_helper->FileTransfer();
        if ($oFileTransfer->isUploaded()) {
            $oClients = ClientsQuery::create()->findPk($aParams['cl_id']);
            try {
                if ($oClients->addFileContrat($oFileTransfer->receive()) === false) {
                    $aErrors = $oClients->getValidationFailures();
                    $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
                }
            } catch (Exception $oException) {
                $aErrors[] = $oException->getMessage();
            }
        } else {
            $aErrors[] = 'Aucun fichier uploadé';
            if ($aFileTransFerMessages = $oFileTransfer->getMessages()) {
                array_merge($aErrors, $aFileTransFerMessages);
            }
        }

        if ($aErrors) {
            $this->_helper->FlashMessenger($aErrors, 'error');
        }

        $this->_helper->Redirector('index', null, null, array('cl_id' => $aParams['cl_id']));
    }

    public function contratversionsAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();

        $oClients = ClientsQuery::create()->findPk($aParams['cl_id']);
        $this->view->contrats = $oClients->getFilesContrat();
    }

    public function downloadcontratAction()
    {
        $oFile = FilesQuery::create()->findPk($this->_request->getParam('file_id'));
        $this->_helper->FileTransfer()->send($oFile->getFilePath());
    }

    public function deletecontratAction()
    {
        $oFile = FilesQuery::create()->findPk($this->_request->getParam('file_id'));
        $oFile->delete();
        $this->_forward('contratversions', null, null, array('cl_id' => $oFile->getFileEntityId()));
    }

}
