<?php

class Administration_AxesController extends My_Controller_Action
{

    /**
     * Main controller action
     *
     * @throws \LogicException
     */
    public function indexAction()
    {

        $aParams = $this->_request->getParams();
        $oAxesDataFetcher = new Phoenix_Administration_Axes_Service_DataHandler();

        // Retrieving translated axes names to display in the select list
        $this->view->aAxesNames = $oAxesDataFetcher->getAxesConfigWithTranslatedNames();

        if (!empty($aParams['find_axe_id'])) {
            $aRetrievedAxesData = $oAxesDataFetcher->retrieveAxesData($aParams['find_axe_id']);

            if (!isset($aRetrievedAxesData['axe_data'])) {
                throw new \LogicException('$aRetrievedAxesData expects key "axe_data" but was not found');
            }
            if (!isset($aRetrievedAxesData['axe_data_header'])) {
                throw new \LogicException('$aRetrievedAxesData expects key "axe_data_header" but was not found');
            }
            if (!isset($aRetrievedAxesData['axe_data_table_name'])) {
                throw new \LogicException('$aRetrievedAxesData expects key "axe_data_table_name" but was not found');
            }

            // Paginating the result
            $oPaginator = new My_Paginator(new Zend_Paginator_Adapter_Array($aRetrievedAxesData['axe_data']));
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(15);
            $this->view->oPaginator = $oPaginator;
            $this->view->aHeader = $aRetrievedAxesData['axe_data_header'];
            $this->view->sAxeTableName = $aRetrievedAxesData['axe_data_table_name'];
        }
    }

    /**
     *  Axe Update/Creation
     *
     * @throws \LogicException
     */
    public function updateaxeAction()
    {

        $this->_helper->layout->disableLayout();

        if ($this->_request->isXmlHttpRequest() && $this->_request->isPost()) {
            $oAxesDataHandler = new Phoenix_Administration_Axes_Service_DataHandler();
            $aRequestParams = $this->getRequest()->getPost();

            if (!isset($aRequestParams['axe_table_name'])) {
                throw new \LogicException('$aRequestParams[\'axe_table_name\'] was not posted in the request');
            }

            $bExistingObject = isset($aRequestParams['axe_id']) && is_numeric($aRequestParams['axe_id']);
            $sClassName = $oAxesDataHandler->getTableAssociatedClassName($aRequestParams['axe_table_name']);
            $aAxeConfig = $oAxesDataHandler->getAxeConfigByTableName($aRequestParams['axe_table_name']);
            $this->view->assign('sTableName', $aRequestParams['axe_table_name']);
            if ($bExistingObject) {
                if (!isset($aRequestParams['axe_id'])) {
                    throw new \LogicException('$aRequestParams[\'axe_id\'] was not posted in the request');
                }
                $oAxe = $oAxesDataHandler->getRelatedAxeObject($aRequestParams['axe_table_name'], $aRequestParams['axe_id']);
                if ($oAxe instanceof $sClassName) {
                    $aAxeFormFields = $oAxesDataHandler->getAxeFormFields($aAxeConfig, $oAxe->toArray(BasePeer::TYPE_FIELDNAME));
                    $this->view->assign('aAxesFormWidgets', $aAxeFormFields);
                    $this->view->assign('iAxeId', $aRequestParams['axe_id']);
                }
            } else {
                $this->view->assign('aAxesFormWidgets', $oAxesDataHandler->getAxeFormFields($aAxeConfig));
                $oAxe = new $sClassName();
            }

            if (!empty($aRequestParams['submit_update_axe'])) {
                if (!isset($aAxeConfig['activity_field_name'])) {
                    throw new \LogicException('The "activity_field_name" key is undefined for the requested axes config "' . print_r($aAxeConfig, true));
                }

                $aRequestParams[$aAxeConfig['activity_field_name']] = (isset($aRequestParams[$aAxeConfig['activity_field_name']])) ? : 0;
                $oAxe->fromArray($aRequestParams, BasePeer::TYPE_FIELDNAME);
                if ($oAxe->validate()) {
                    $oAxe->save();
                    $this->_response->clearBody();
                    $sSuccessMessage = $bExistingObject ? 'La section a bien été mise à jour' : 'La section a bien été créée';
                    $this->_response->setBody($this->view->translate($sSuccessMessage));
                    $this->_helper->ViewRenderer->setNoRender(true);
                } else {
                    $aErrors = $oAxe->getValidationFailures();
                    $this->_helper->PropelFailures()->registerErrors($aErrors);
                }
            }
        } else {
            throw new \LogicException('"updateaxe" Action can only be accessed through HTTP POST Method and in AJAX');
        }
    }

    /**
     * Axe deletion
     *
     * @throws \LogicException
     */
    public function deleteaxeAction()
    {
        $oAxesDataHandler = new Phoenix_Administration_Axes_Service_DataHandler();

        if ($this->_request->isXmlHttpRequest() && $this->_request->isPost()) {
            $oAxesDataHandler = new Phoenix_Administration_Axes_Service_DataHandler();
            $this->_helper->layout->disableLayout();
            $aParams = $this->_request->getParams();
            $this->_helper->ViewRenderer->setNoRender(true);

            if (!isset($aParams['axe_table_name'])) {
                throw new \LogicException('$aParams[\'axe_table_name\'] was not posted in the request');
            }

            if (!isset($aParams['axe_id'])) {
                throw new \LogicException('$aParams[\'axe_id\'] was not posted in the request');
            }

            $aResponse = $oAxesDataHandler->deleteAxeData($aParams['axe_table_name'], $aParams['axe_id']);

            if (!isset($aResponse['is_processed'])) {
                throw new \LogicException('$aResponse expects key "is_processed" but was not found');
            }

            if (!isset($aResponse['message'])) {
                throw new \LogicException('$aResponse expects key "message" but was not found');
            }

            if ($aResponse['is_processed']) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $this->view->translate($aResponse['message']) . '.'));
            } else {
                $oThat = $this;
                $sMessage = '<ul>';
                $sMessage .= array_reduce($aResponse['message'], function ($sMessage, $sCurrentMessage) use ($oThat) {
                    return $sMessage.= '<li>' . $oThat->view->translate($sCurrentMessage) . '.</li>';
                });
                $sMessage .= '</ul>';
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_WARNINGS, $sMessage . '.'));
            }
        } else {
            throw new \LogicException('"deleteaxe" Action can only be accessed through HTTP POST Method and in AJAX');
        }
    }
}
