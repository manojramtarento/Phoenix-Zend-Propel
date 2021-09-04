<?php

class Administration_RoptionsdevisController extends My_Controller_Action
{

    /**
     * @var \Phoenix_Administration_QuotationOptions_Service_QuotationOptionsService
     */
    protected $quotationOptionsService;

    /**
     * Display list options
     */
    public function listingAction()
    {
        $oQuotationOptionsService = $this->getQuotationOptionsService();

        $this->view->activitiesKpisData = $oQuotationOptionsService->retrieveActivitiesKpisData();
        $this->view->detachedOperationsOptions = $oQuotationOptionsService->retrieveDetachedOperationOptions();
        $this->view->numberOfLinkedServices = $oQuotationOptionsService->retrieveTheNumberOfActiveLinkedServicesByOperationOption();
    }

    public function prestationsAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();

        if (isset($aParams["tpl_id"])) {
            $oRTpl = ROperationOptionsTplQuery::create()->findOneByROpOptionTplId($aParams["tpl_id"]);
            if ($oRTpl instanceof ROperationOptionsTpl) {
                $oRTpl->delete();
            }
        }

        if (isset($aParams["r_op_option_id"])) {
            $oROption = ROperationOptionsQuery::create()->findOneByROpOptionId($aParams["r_op_option_id"]);
            $this->view->rubriques = $oROption->getLinkedRubriques();

            $this->view->r_op_option_id = $aParams["r_op_option_id"];
        }
    }

    /**
     * Updates a set of options ranking belonging to the same group of options
     *
     * @throws \LogicException
     */
    public function updateoptionsorderAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();
        $oQuotationOptionsService = $this->getQuotationOptionsService();
        if (! isset($aParams['options_order'])) {
            throw new \LogicException('Key "options_order" does not exists for given array "$aParams" ' . print_r($aParams, true));
        }
        if ($aErrors = $oQuotationOptionsService->updateOperationsOptionsOrder($aParams['options_order'])) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->getHelper('HtmlList')->htmlList($aErrors)));
        }
        $this->_helper->ViewRenderer->setNoRender(true);
    }

    /**
     * Update activity
     */
    public function updateactivitykpiAction()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->ViewRenderer->setNoRender(true);

        $aParams = $this->getRequest()->getParams();
        $oQuotationOptionsService = $this->getQuotationOptionsService();
        if ($aErrors = $oQuotationOptionsService->updateAttachedOptionsToActivity($aParams)) {
            $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors);
            $this->_helper->FlashMessenger($aErrors, 'error');
        } else {
            $this->_helper->FlashMessenger($this->view->translate('msg_update_activitykpi_success'), 'success');
        }
        $this->_helper->Redirector('listing');
    }

    /**
     * Updates or creates an operation option
     *
     * @return boolean
     */
    public function updateAction()
    {
        $this->_helper->layout->disableLayout();


        $aData = $this->_request->getParams();
        $bDoesObjectExist = (isset($aData['r_op_option_id']) && is_numeric($aData['r_op_option_id']));
        $oROption = null;
        $iROperationOptionRActivityKpiId = empty($aData['r_operation_option_r_activity_kpi_id']) ? null : (int) $aData['r_operation_option_r_activity_kpi_id'];

        if ($bDoesObjectExist) {
            $oROption = ROperationOptionsQuery::create()->findOneByROpOptionId($aData['r_op_option_id']);
        } else {
            $oROption = new ROperationOptions();
            $oROption->setROperationOptionRActivityKpiId($iROperationOptionRActivityKpiId);
        }

        if ($oROption instanceof ROperationOptions) {
            $aROptionData = $oROption->toArray(BasePeer::TYPE_FIELDNAME);
            // 29225 Retrieving the option label translation from i18n table
            $aROptionData['id_r_op_option_libelle_en'] = I18nQuery::create()->findDataTranslations('r_operation_options', 'r_op_option_libelle', $aROptionData['r_op_option_id'], RLanguages::LOCALE_EN);
 
            $aROptionData['r_operation_type_required_options'] = \ROperationTypeRequiredOptionsQuery::create()->retrieveROperationTypesIdByROpOptionId((int) $aROptionData['r_op_option_id']);
            
            $aROptionData['r_operation_status_required_options'] = \ROperationStatusRequiredOptionsQuery::create()->retrieveROperationStatusIdByROpOptionId((int) $aROptionData['r_op_option_id']);
             
            
            $this->view->assign($aROptionData);
            $this->view->childrens = $oROption->getChildrenOptions();

            // Retrieve operation types ids
            $this->view->availableROperationTypesForSelect = \ROperationTypeQuery::create()->retrieveAvailableROperationTypesForSelectList();
            
            // Retrieve operation status ids
            $this->view->availableROperationStatusForSelect = \ROperationStatusQuery::create()->retrieveAvailableROperationStatusForSelectList();
            
                    
            if (! empty($aData['submit_update_roption'])) {
                // Updating object data
                if ($bDoesObjectExist) {
                    // Checking if option activity has been altered
                    $bIsActif = $oROption->getActif();
                    if ($bIsActif && ! isset($aData['actif'])) {
                        $oROption->updateActifRecursively(false);
                    } elseif (! $bIsActif && isset($aData['actif'])) {
                        $oROption->updateActifRecursively(true);
                    }

                    // Changing type category > option
                    if (($oROption->getROpOptionType() != ROperationOptionsType::TYPE_CHILDREN) && $aData['r_op_option_type'] == ROperationOptionsType::TYPE_CHILDREN) {
                        // Checking wheither it's a parent category
                        $iParentId = $oROption->getROpOptionParent();
                        if (! empty($iParentId)) {
                            $oROption->transformToChildren();
                        } else {
                            // Impossible for a parent category
                            unset($aData['r_op_option_type']);
                            $aErrors = array(
                                'option.r_op_option_type' => array(
                                    new ValidationFailed('option.r_op_option_type', $this->view->translate('Impossible de transformer une catégorie mère en enfant'))
                                )
                            );
                            $this->_helper->PropelFailures()->registerErrors($aErrors);
                        }
                    }
                    // Adding child option
                    // 29225 verification that the label of the option is given, if translation is also past
                    if (empty($aData['new_child_name']) && ! empty($aData['new_child_name_en'])) {
                        $this->_helper->FlashMessenger($this->view->translate('Le libelle du nouvel enfant doit être précisé, si le libelle enfant (Anglais) est donnée'), 'error');
                        return false;
                    }
                    if (isset($aData['new_child_name']) && ! empty($aData['new_child_name'])) {
                        $oROption->addChild($aData['new_child_name'], $iROperationOptionRActivityKpiId, $aData['new_child_name_en']);
                        $this->view->childrens = $oROption->getChildrenOptions();
                    }

                    // Adding services
                    if (isset($aData['rub_id']) && ! empty($aData['rub_id']) && ! empty($aData['prestation_ids'])) {
                        $oROption->linkPrestations($aData['rub_id'], explode(' ', $aData['prestation_ids']));
                    }
                }


                // Loading new data
                $sEnglishOptionName = $aData['r_op_option_libelle_en'];

                // 29225 Excluding r_op_option_libelle_en to avoid its persistance it in the r_operation_options
                unset($aData['r_op_option_libelle_en']);
                $oROption->fromArray($aData, BasePeer::TYPE_FIELDNAME);

                if ($oROption->validate()) {
                    $oROption->save();
                    $sROperationOptionId = ! empty($aData['r_op_option_id']) ? $aData['r_op_option_id'] : $oROption->getROpOptionId();

                    // 29225 Call of the translations of the recording method
                    \I18nQuery::create()->saveDataTranslations('r_operation_options', 'r_op_option_libelle', (int) $sROperationOptionId, $sEnglishOptionName, RLanguages::LOCALE_EN);
                    $aROptionData = $oROption->toArray(BasePeer::TYPE_FIELDNAME);

                    \ROperationTypeRequiredOptionsQuery::create()->filterByROperationTypeRequiredOptionROperationOptionId((int) $sROperationOptionId)->delete();
                    if (isset($aData['r_operation_type_required_options'])) {
                        if ($aValidationErros = \ROperationTypeRequiredOptionsQuery::create()->saveROperationOptionsRequiredTypes((int) $sROperationOptionId, $aData['r_operation_type_required_options'])) {
                            $this->_helper->PropelFailures()->registerErrors($aValidationErros);
                        }
                        $aROptionData['r_operation_type_required_options'] = $aData['r_operation_type_required_options'];
                    }
                    
                    \ROperationStatusRequiredOptionsQuery::create()->filterByROperationStatusRequiredOptionsROperationOptionId((int) $sROperationOptionId)->delete();
                    if (isset($aData['r_operation_status_required_options'])) {
                        if ($aValidationErros = \ROperationStatusRequiredOptionsQuery::create()->saveROperationOptionsRequiredStatus((int) $sROperationOptionId, $aData['r_operation_status_required_options'])) {
                            $this->_helper->PropelFailures()->registerErrors($aValidationErros);
                        }
                        $aROptionData['r_operation_status_required_options'] = $aData['r_operation_status_required_options'];
                    }

                    // 29225 Retrieve Label translation of the operation from the translation table i18n
                    $aROptionData['id_r_op_option_libelle_en'] = \I18nQuery::create()->findDataTranslations('r_operation_options', 'r_op_option_libelle', $aROptionData['r_op_option_id'], RLanguages::LOCALE_EN);

                    $this->view->assign($aROptionData);
                    $this->view->updated = 1;

                    if (! $bDoesObjectExist) {
                        // Closing the popup
                        $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                            Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP,
                            'id_dialog_update_roption'
                        ));
                    }
                } else {
                    $this->_helper->PropelFailures()->registerErrors($oROption->getValidationFailures());
                }
            }
        } else {
            $this->_response->clearBody();
            $this->_response->setBody($this->view->translate('Erreur: Cette option est invalide'));
            $this->_helper->ViewRenderer->setNoRender(true);
        }
    }

    public function updatefieldAction()
    {

        if ($this->_request->isXmlHttpRequest()) {
            $this->_helper->Json($this->_helper->AjaxComponents()->updateField());
        }
    }

    public function deleteallAction()
    {
        $aParams = $this->_request->getParams();

        if (isset($aParams['r_op_option_id'])) {
            $oROptionTpl = ROperationOptionsTplQuery::create()->findByROptId($aParams['r_op_option_id']);
            foreach ($oROptionTpl as $oTemplate) {
                if ($oTemplate instanceof ROperationOptionsTpl) {
                    $oTemplate->delete();
                }
            }
        }

        $this->_forward('update');
    }

    /**
     * Lazy loads an QuotationOptionsService
     *
     * @return \Phoenix_Administration_QuotationOptions_Service_QuotationOptionsService
     * @throws \LogicException
     */
    public function getQuotationOptionsService()
    {
        // Lazy load if undefined
        if ($this->quotationOptionsService === null) {
            $this->quotationOptionsService = new \Phoenix_Administration_QuotationOptions_Service_QuotationOptionsService();
        }
        if (! $this->quotationOptionsService instanceof \Phoenix_Administration_QuotationOptions_Service_QuotationOptionsService) {
            throw new \LogicException('Property "quotationOptionsService" expects an instance of \Phoenix_Administration_QuotationOptions_Service_QuotationOptionsService, "' . (is_object($this->quotationOptionsService) ? get_class($this->quotationOptionsService) : gettype($this->quotationOptionsService)) . '" defined');
        }

        return $this->quotationOptionsService;
    }
}
