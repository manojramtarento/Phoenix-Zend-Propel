<?php

class Couts_IndexController extends My_Controller_Action
{

    const NUMBER_OF_ROWS_PER_PAGE = 15;

    public function init()
    {
        $this->_helper->ContextSwitch()->initContext();
    }

    /**
     * Index Action
     */
    public function indexAction()
    {
        $oUser = Phoenix_Auth_User::getInstance();

        $aParams = $this->_request->getParams();

        // Retrieve Query object
        $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $oSelect = $oZendDbSelect
            ->order('nb_factures_en_attente desc')
            ->order('deadline_facture_fr asc')
            ->order('r_p_libelle asc');

        $oOperationsQuery = OperationsQuery::create();

        if (! Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::COUTS_SANS_RESTRICTIONS)) {
            $oSelect->where('r_p_groupe_validation_id IN (?)', $oUser->getGroupIds());
        }

        // Query search engine
        $oMySearchEngine = new My_Search_Engine($oSelect);
        $oMySearchEngine->findWordOn(array(
            'op_number' => array('operator' => 'like'),
            'r_prestation_id' => array('operator' => 'like'),
            'r_p_libelle' => array('operator' => 'like')
        ));

        $aSearch = array(
            'r_prestation_id' => array('operator' => 'eql'),
            'r_p_libelle' => array('operator' => 'like'),
            'op_prest_libelle_devis' => array('operator' => 'like'),
            'ecart' => array('operator' => 'supeql'),
            'op_id' => array('operator' => 'like'),
            'r_p_libelle' => array('operator' => 'like'),
            'op_cl_id' => array('operator' => 'eql'),
            'op_dc_id' => array('operator' => 'eql'),
            'op_cp_id' => array('operator' => 'eql'),
            'op_cdp_id' => array('operator' => 'eql'),
            'r_p_groupe_validation_id' => array('operator' => 'eql'),
            'op_user_couts_reel' => array('operator' => 'eql'),
            'r_p_validation_id' => array('operator' => 'in'),
            'op_prest_couts_valides' => array('operator' => 'in'),
            'op_stamp_start' => array('operator' => $this->_request->getParam('find_op_stamp_start_comp'), 'date_format' => true),
            'op_stamp_end' => array('operator' => $this->_request->getParam('find_op_stamp_end_comp'), 'date_format' => true),
            'op_dateConso_start' => array('operator' => $this->_request->getParam('find_op_dateConso_start_comp'), 'date_format' => true),
            'op_dateConso_end' => array('operator' => $this->_request->getParam('find_op_dateConso_end_comp'), 'date_format' => true),
            'op_datePoste_end' => array('operator' => $this->_request->getParam('find_op_datePoste_end_comp'), 'date_format' => true),
        );

        // Search by Wharehouse type
        $aOperationsHavingWharehouse = array();
        if (isset($aParams['find_entrepot_type']) && $aParams['find_entrepot_type']) {
            $aOperations = LnkOperationOptionQuery::create()->filterByOpOptId($aParams['find_entrepot_type'])->filterByIsLinked(1)->find();
            foreach ($aOperations as $oOperation) {
                $aOperationsHavingWharehouse[] = $oOperation->getOpId();
            }
        }
        $sCondition = ($aOperationsHavingWharehouse) ? 'op_id IN ( ' . implode(',', $aOperationsHavingWharehouse) . ')' : '';

        // Research on status date range with sub-query:
        if (! empty($aParams['find_op_status_id']) && (! empty($aParams['find_op_date_status_min']) || ! empty($aParams['find_op_date_status_max']))) {
            $oZendDbSelectStatus = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());

            $oZendDbSelectStatus->from('View_Operation_Status', 'op_id')->where('hs_new_statut_id = ?', $aParams['find_op_status_id']);

            if ($aParams['find_op_date_status_min'] == $aParams['find_op_date_status_max']) {
                $oZendDate = new Zend_Date($aParams['find_op_date_status_max'], null, 'fr');
                $oZendDate->addDay(1);
                $aParams['find_op_date_status_max'] = $oZendDate->toString('dd/MM/Y');
            }

            if (! empty($aParams['find_op_date_status_min'])) {
                $aParams['find_op_date_status_min'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['find_op_date_status_min']);
                $oZendDbSelectStatus->where('date_create >= ?', $aParams['find_op_date_status_min']);
            }
            if (! empty($aParams['find_op_date_status_max'])) {
                $aParams['find_op_date_status_max'] = Phoenix_Data_Convert::FormatDateForMysql($aParams['find_op_date_status_max']);
                $oZendDbSelectStatus->where('date_create <= ?', $aParams['find_op_date_status_max']);
            }

            $aSearch['op_id'] = array('operator' => 'in', 'value' => $oZendDbSelectStatus);
        } else {
            $aSearch['op_status_id'] = array('operator' => 'eql');
        }

        $oMySearchEngine->findByFields($aSearch);

        // Add sales team criteria
        if ($this->_request->getParam('find_sales_team')) {
            $aUserConditions = array();

            // Retrieve user IDs of the sales team
            $aSalesTeams = OperationSalesTeamsQuery::create()->findBySalesTeamId($this->_request->getParam('find_sales_team'));
            foreach ($aSalesTeams as $oSalesTeamUser) {
                if ($oSalesTeamUser instanceof OperationSalesTeams) {
                    $aUserConditions[] = 'op_dc_id = ' . $oSalesTeamUser->getUserId();
                }
            }

            // Add conditions
            if (count($aUserConditions) > 0) {
                $sWhere = '(' . implode(' OR ', $aUserConditions) . ')';
                $oMySearchEngine->where($sWhere);
            }
        }

        $oMySearchEngine->makeOrderBy();

        if ($sCondition) {
            $oSelect->where($sCondition);
        }

        // Download Csv
        if ($this->getParam('format') == 'csv') {
            // Retrieve where condition
            $sWhereCondition = join(' ', $oSelect->getPart('where'));
            return Phoenix_File_Cost_CsvGenerator::getInstance()->downloadCsvExport($sWhereCondition);
        }
        // Display the filtered list in HTML
        $oSelect = $oMySearchEngine->getSelect()->from('View_Validation_Couts_Simplifie', array(
            'nb_factures_en_attente',
            'op_prest_ciestim',
            'op_prest_ceestim',
            'op_prest_cireel',
            'op_prest_cereel',
            'ecart',
            'op_status_id',
            'r_p_validation_id',
            'op_prest_id',
            'op_libelle',
            'op_prest_libelle_devis',
            'r_p_libelle',
            'r_prestation_id',
            'op_number',
            'op_id',
            'r_p_type_validation_libelle',
            'op_prest_pv',
            'cl_libelle',
            'op_cl_id',
            'op_prest_npr',
            'op_prest_npa',
            'op_prest_couts_valides',
        ));

            // Use paginator for pagination management
        $oPaginator = new My_Paginator(new Zend_Paginator_Adapter_DbSelect($oSelect));
        $oPaginator->setCurrentPageNumber($this->_getParam('page'));
        $oPaginator->setItemCountPerPage(self::NUMBER_OF_ROWS_PER_PAGE);
        $this->view->paginator = $oPaginator;
        $this->view->oldDcUsers = $oOperationsQuery->getOldDcUsers();
        $this->view->oldCpUsers = $oOperationsQuery->getOldCpUsers();
        $this->view->oldCdpUsers = $oOperationsQuery->getOldCdpUsers();
    }

    /**
     * Validates a classical service (manual) or a automatic.
     * It's also possible to validate a set of identical services in one shot
     *
     * @throws \BadMethodCallException
     */
    public function updateprestamanuelleAction()
    {
        $this->_helper->layout->disableLayout();

        // Processing form data
        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();
            $aServices = array();
            $oOpePresta = null;

            $oPrevalidatorObject = new OperationPrestations();

            // Checking if we have a set of services to validate
            if (false !== strpos($aData['op_prest_id'], ',')) {
                // Retrieving services identifiants
                $aServices = explode(',', $aData['op_prest_id']);
            } else {
                // Retreiving the unique service to update
                $aServices[] = $aData['op_prest_id'];
            }

            if ($oPrevalidatorObject->prevalidateManualServiceCostValidation($aServices)) {
                // Displaying form data
                // Considering the data of the first service as reference
                $oOpePresta = OperationPrestationsQuery::create()->findOneByOpPrestId($aServices[0]);
                if ($oOpePresta instanceof OperationPrestations) {
                    $this->view->assign($oOpePresta->toArray(BasePeer::TYPE_FIELDNAME));
                    $oOpe = OperationsQuery::create()->findOneByOpId($oOpePresta->getOpId());
                    $this->view->op_prest_number = $oOpe->getOpNumber();
                }

                if (count($aServices)) {
                    // Dans le cas de prestations multiples, on corrige un peu la vue
                    // Case of muliple services, we flag op_prest_number as multiple
                    $this->view->op_prest_id = implode(',', $aServices);
                    $this->view->op_prest_number = 'Multiples';
                }

                // Data validation
                if (! empty($aData["submit_update_presta"])) {
                    $bIsSuccessful = true;
                    foreach ($aServices as $sServiceId) {
                        // Retrieving the object to update
                        $oOpePresta = OperationPrestationsQuery::create()->findOneByOpPrestId($sServiceId);
                        if ($oOpePresta instanceof OperationPrestations) {
                            // Loading new data
                            unset($aData['op_prest_id']);
                            $oOpePresta->fromArray($aData, BasePeer::TYPE_FIELDNAME);

                            if ($oOpePresta->processCoutsReelsValidation()) {
                                // Validating costs automatically
                                $bIsSuccessful = $bIsSuccessful && true;
                            } else {
                                $this->_helper->PropelFailures()->registerErrors($oOpePresta->getValidationFailures());
                                $bIsSuccessful = false;
                                break;
                            }
                        }
                    }

                    if ($bIsSuccessful) {
                        $this->_response->clearBody();

                        if (count($aServices) == 1) {
                            $this->_response->setBody($this->view->translate('La prestation a bien été validée'));
                        } else {
                            $this->_response->setBody($this->view->translate('Les') . ' ' . count($aServices) . ' ' . $this->view->translate('prestations ont bien été validées'));
                        }
                        $this->_helper->ViewRenderer->setNoRender(true);
                    }
                }
            } else {
                $this->_response->clearBody();

                $sErrorMessages = '<ul><li>';
                $sErrorMessages .= implode('</li><li>', $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oPrevalidatorObject->getValidationFailures()));
                $this->_response->setBody($sErrorMessages . '</ul>');
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        } else {
            throw new \BadMethodCallException('The HTTP method of the received request is not a POST, "' . $this->getRequest()->getMethod() . '" received');
        }
    }

    /**
     * Cost validation method for the purchase type service
     *
     * @throws \LogicException
     */
    public function updateprestaachatAction()
    {
        $this->_helper->layout->disableLayout();

        parse_str($_SERVER['QUERY_STRING'], $aQueryArray);
        unset($aQueryArray['prest_achat']);
        unset($aQueryArray['error']);

        // Handeling the form
        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();

            $oOpePresta = null;
            $oPrevalidatorObject = new OperationPrestations();

            $sServiceId = $aData['op_prest_id'];

            if ($oPrevalidatorObject->prevalidatePurchaseServiceCostValidation($sServiceId)) {
                $oOpePresta = OperationPrestationsQuery::create()->findOneByOpPrestId($sServiceId);
                $this->view->assign($oOpePresta->toArray(BasePeer::TYPE_FIELDNAME));

                $this->view->factures = $this->getInvoicesData($aData['op_prest_id']);

                if (! empty($aData["submit_update_presta"])) {
                    // Updating the service data
                    $oOpePrestaFacture = new OperationPrestationsFacturesAchats();

                    // Loading new informations
                    $aData['op_prest_achat_date_facture'] = Phoenix_Data_Convert::FormatDateForMysql($aData['op_prest_achat_date_facture']);
                    $oOpePrestaFacture->fromArray($aData, BasePeer::TYPE_FIELDNAME);

                    $bError = true;
                    $aErrors = array();

                    if ($oOpePrestaFacture->validate()) {
                        // Checking that the invoice is valid and uploaded
                        try {
                            if ($this->_helper->FileTransfer()->isUploaded()) {
                                $iFileId = $oOpePresta->addFileFacture($this->_helper->FileTransfer()->receive());
                            }
                            $aErrors = $oOpePresta->getValidationFailures();
                            if (count($aErrors) == 0) {
                                // The file is successfully uploaded, we save the data
                                if (isset($iFileId)) {
                                    $oOpePrestaFacture->setOpPrestAchatFileId($iFileId);
                                }
                                $oOpePrestaFacture->save();
                                // Incremanting the internal realized cost
                                $oOpePresta->setOpPrestCireel($oOpePresta->getOpPrestCireel() + $oOpePrestaFacture->getOpPrestAchatCoutInterne());
                                // Computing the external realized cost
                                $oOpePresta->setOpPrestCereel($oOpePrestaFacture->computeServiceExternalRealizedCost());

                                // Verfifying if the box "valider les coûts" is checked
                                $bValid = $oOpePresta->getOpPrestCoutsValides();
                                if ($bValid && ! isset($aData['op_prest_couts_valides'])) {
                                    $oOpePresta->setOpPrestCoutsValides(0);
                                } elseif (! $bValid && isset($aData['op_prest_couts_valides'])) {
                                    $oOpePresta->setOpPrestCoutsValides(1);
                                }
                                // Journalizing the user and the current date before save
                                $oOpePresta->historiseCostUpdaterUserAndCostValidationDate()->save();

                                $bError = false;
                            }
                        } catch (Exception $oException) {
                            $aErrors['facture.upload'] = array(new ValidationFailed('upload', $oException->getMessage()));
                        }
                    } else {
                        // Specific case : checking weither the checkbox "valider les coûts" has been modified
                        $bValid = $oOpePresta->getOpPrestCoutsValides();

                        if ($bValid && ! isset($aData['op_prest_couts_valides'])) {
                            $oOpePresta->setOpPrestCoutsValides(0);
                            // Journalizing the user and the current date before save
                            $oOpePresta->historiseCostUpdaterUserAndCostValidationDate()->save();

                            $bError = false;
                            // Redirecting to the main page
                            $this->redirect('/couts/index/index');
                        } elseif (! $bValid && isset($aData['op_prest_couts_valides'])) {
                            $oOpePresta->setOpPrestCoutsValides(1);
                            // Journalizing the user and the current date before save
                            $oOpePresta->historiseCostUpdaterUserAndCostValidationDate()->save();

                            $bError = false;
                            $this->redirect('/couts/index/index');
                        } else {
                            // Displaying the errors
                            $aErrors = $oOpePrestaFacture->getValidationFailures();
                        }
                    }

                    if (count($aErrors)) {
                        $sErrorMessages = '<ul><li>';
                        $oView = $this->view;
                        $sErrorMessages .= implode('</li><li>', array_map(function ($sMessage) use ($oView) {
                            return $oView->translate($sMessage);
                        }, $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors)));
                        $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $sErrorMessages));
                    }
                }
            } else {
                $sErrorMessages = '<ul><li>';
                $sErrorMessages .= implode('</li><li>', $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oPrevalidatorObject->getValidationFailures()));
                $this->_response->setBody($sErrorMessages . '</ul>');
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        } else {
            throw new \LogicException('The HTTP method of the received request is not a POST, "' . $this->getRequest()->getMethod() . '" received');
        }
    }

    public function facturesversionsAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();

        $this->view->factures = $this->getInvoicesData($aParams['op_prest_id']);
    }

    public function downloadfactureAction()
    {
        $this->_helper->FileTransfer()->send(FilesQuery::create()->findPk($this->_request->getParam('file_id'))->getFilePath());
    }

    /**
     *
     * @throws \LogicException
     */
    public function deletefactureAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            // Retrieves related objects
            $sPurchaseServiceId = $this->_request->getParam('op_prest_achat_id');
            $oOpePrestaFacture = OperationPrestationsFacturesAchatsQuery::create()->findPk($sPurchaseServiceId);
            if ($oOpePrestaFacture instanceof OperationPrestationsFacturesAchats) {
                $oFile = FilesQuery::create()->findPk($oOpePrestaFacture->getOpPrestAchatFileId());
                $oOpePresta = OperationPrestationsQuery::create()->findOneByOpPrestId($oOpePrestaFacture->getOpPrestId());

                // Incremanting the internal realized cost
                $oOpePresta->setOpPrestCireel($oOpePresta->getOpPrestCireel() - $oOpePrestaFacture->getOpPrestAchatCoutInterne());

                // Deleting the linked invoice file and the associated data
                if ($oFile instanceof Files) {
                    $oOpePrestaFacture->setOpPrestAchatFileId(null);
                    $oOpePrestaFacture->save();
                    $oFile->delete();
                }
                $oOpePrestaFacture->delete();

                // Computing the external realized cost
                $oOpePresta->setOpPrestCereel($oOpePrestaFacture->computeServiceExternalRealizedCost());
                // Journalizing the user and the current date before save
                $oOpePresta->historiseCostUpdaterUserAndCostValidationDate()->save();
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, sprintf($this->view->translate('L\'enregistrement de prestation d\'achat "%s" a été supprimé'), $sPurchaseServiceId)));
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_WARNINGS, sprintf($this->view->translate('L\'enregistrement de prestation d\'achat "%s" n\'existe pas'), $sPurchaseServiceId)));
            }
        } else {
            throw new \LogicException('The request is not a HTTP XML REQUEST');
        }
    }

    protected function getInvoicesData($iOperationServiceId) : array
    {
        $aInvoices = array();

        // Retrieves information related to invoices
        $oOpePrestaFactures = OperationPrestationsFacturesAchatsQuery::create()->findByOpPrestId($iOperationServiceId);
        foreach ($oOpePrestaFactures as $oOperationPrestationsFacturesAchats) {
            if ($oOperationPrestationsFacturesAchats instanceof OperationPrestationsFacturesAchats) {
                $aInvoices[] = array(
                    'date' => $oOperationPrestationsFacturesAchats->getOpPrestAchatDateFacture('d/m/Y'),
                    'numero' => $oOperationPrestationsFacturesAchats->getOpPrestAchatNumFacture(),
                    'quantite' => $oOperationPrestationsFacturesAchats->getOpPrestAchatQuantite(),
                    'cout_interne' => $oOperationPrestationsFacturesAchats->getOpPrestAchatCoutInterne(),
                    'cout_externe' => $oOperationPrestationsFacturesAchats->getOpPrestAchatCoutExterne(),
                    'file_id' => $oOperationPrestationsFacturesAchats->getOpPrestAchatFileId(),
                    'op_prest_achat_id' => $oOperationPrestationsFacturesAchats->getOpPrestAchatId(),
                );
            }
        }

        return $aInvoices;
    }

    public function updatecoutAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $this->_helper->Json($this->_helper->AjaxComponents()->updateField(array('OperationPrestations')));
        }
    }
}
