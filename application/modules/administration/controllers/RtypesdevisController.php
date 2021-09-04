<?php

class Administration_RtypesdevisController extends My_Controller_Action
{

    /**
     *
     * @var \Phoenix_Administration_RTypesDevis_Service_RTypesDevisService
     */
    protected $administrationRTypesDevisService;

    /**
     * Generating a paginated list
     */
    public function listingAction()
    {
    }

    /**
     * Ajax function : retrieve template data
     * @throws \LogicException
     */
    public function templateAction()
    {
        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getAllParams();

        // Check if tpl_id exists and not empty in request parameters
        if (empty($aParams['tpl_id'])) {
            throw new \LogicException('The request parameter "tpl_id" is expected but is missing');
        }

        $oAdministrationRTypesDevisService = $this->getAdministrationReferentialTypesDevisService();

        $this->_helper->layout->disableLayout();

        $iTemplateId = (int) $aParams['tpl_id'];
        if (($oTemplate = ROperationTypeSubTplQuery::create()->findOneByOstTplId($iTemplateId)) instanceof ROperationTypeSubTpl) {
            $this->view->ost_tpl_id = $iTemplateId;
            $this->view->primes = $oAdministrationRTypesDevisService->getOprerationTemplateRewardsByTemplateId($iTemplateId);
            $this->view->scenarii = $oAdministrationRTypesDevisService->retrieveScenariosByTemplateId($iTemplateId);
            $this->view->rubriques = $oAdministrationRTypesDevisService->getOperationTemplateRubricsByTemplateId($iTemplateId);
            $this->view->universesAndMedias = $oAdministrationRTypesDevisService->getOperationTemplateMediasAndUniversesByTemplateId($iTemplateId);
        } else {
            $this->_response->clearBody();
            $this->_helper->ViewRenderer->setNoRender(true);
        }
    }

    /**
     * Action of creation of new template
     */
    public function newtemplateAction()
    {
        $this->_helper->layout->disableLayout();


        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getRequest()->getPost();

        $aMissingParametersErrors = array();

        if (empty($aParams['op_subtype_id'])) {
            $aMissingParametersErrors[] = sprintf($this->view->translate('template_identification_missing_parameter_error'), $this->view->translate('Mécanique'));
        }

        if (empty($aParams['template_universes'])) {
            $aMissingParametersErrors[] = $this->view->translate('template_identification_missing_universe_error');
        }

        if (empty($aParams['template_medias'])) {
            $aMissingParametersErrors[] = $this->view->translate('template_identification_missing_media_error');
        }

        if ($aMissingParametersErrors) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, '<ul><li>' . implode('</li><li>', $aMissingParametersErrors) . '</li></ul>'));
        }

        if (empty($aParams['submit_new_template'])) {
            $this->view->op_subtype_id = $aParams['op_subtype_id'];
            $this->view->template_universes = $aParams['template_universes'];
            $this->view->template_medias = $aParams['template_medias'];
        } else {
            $aResponse = $this->getAdministrationReferentialTypesDevisService()->saveNewTemplateSettings((int) $aParams['op_subtype_id'], $aParams['template_name'], explode(',', $aParams['template_universes']), explode(',', $aParams['template_medias']));

            if ($aResponse['is_successful']) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP, 'id_dialog_new_template'));
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($aResponse['errors'])));
            }
        }
    }

    /**
     * Activities Management action
     */
    public function manageactivitesAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if (isset($aParams['submit_new_activite'])) {
            $oRCustomActivites = new RCustomActivites();
            $oRCustomActivites->setActif(true);
            $oRCustomActivites->setAutoOrd();
            $oRCustomActivites->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
            if ($oRCustomActivites->validate()) {
                $oRCustomActivites->save();
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                    My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oRCustomActivites->getValidationFailures())
                ));
            }
        }

        $this->view->metiers = RCustomActivitesQuery::create()->find();
    }

    /**
     * Types management action
     */
    public function managetypesAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if (isset($aParams['submit_new_type'])) {
            $oROpType = new ROperationType();
            $oROpType->setActId($aParams['act_id']);
            $oROpType->setActif(1);
            $oROpType->setAutoOrd();
            $oROpType->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
            if ($oROpType->validate()) {
                $oROpType->save();
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                    My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oROpType->getValidationFailures())
                ));
            }
        }

        $this->view->act_id = $aParams['act_id'];
        $this->view->types = ROperationTypeQuery::create()->findByActId($aParams['act_id']);
    }

    /**
     * SubTypes management action
     */
    public function managesubtypesAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if (isset($aParams['submit_new_subtype'])) {
            $oROpSubType = new ROperationTypeSub();
            $oROpSubType->setOstOtId($aParams['ot_id']);
            $oROpSubType->setActif(true);
            $oROpSubType->setAutoOrd();
            $oROpSubType->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
            if ($oROpSubType->validate()) {
                $oROpSubType->save();
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                    My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oROpSubType->getValidationFailures())
                ));
            }
        }

        $this->view->ot_id = $aParams['ot_id'];
        $this->view->subtypes = ROperationTypeSubQuery::create()->findByOstOtId($aParams['ot_id']);
    }

    /**
     * Universe manager action
     */
    public function manageuniversesAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if (isset($aParams['submit_new_universe'])) {
            $oROperationUniverse = new ROperationUniverses();
            $oROperationUniverse->autoSetUniverseOrder();
            $oROperationUniverse->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
            if ($oROperationUniverse->validate()) {
                $oROperationUniverse->save();
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                    My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oROperationUniverse->getValidationFailures())
                ));
            }
        }

        $this->view->oROperationUniverses = ROperationUniversesQuery::create()->find();
    }

    /**
     * Medias manager action
     */
    public function managemediasAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if (isset($aParams['submit_new_media'])) {
            $oROperationMedia = new ROperationMedias();
            $oROperationMedia->autoSetMediaOrder();
            $oROperationMedia->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
            if ($oROperationMedia->validate()) {
                $oROperationMedia->save();
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                    My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oROperationMedia->getValidationFailures())
                ));
            }
        }

        $this->view->oROperationMedias = ROperationMediasQuery::create()->find();
    }

    /**
     * Display rewards
     */
    public function primesAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if (isset($aParams['ost_tpl_id'])) {
            $oRewards = ROperationTypeSubTplPrimeQuery::create()->filterByOstTplId($aParams['ost_tpl_id'])->orderByOstTplPrimeNumero()->find();
            $this->view->primes = $oRewards;
            $this->view->ost_tpl_id = $aParams['ost_tpl_id'];
        }
    }

    /**
     * Show scenarios
     */
    public function scenariiAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if (isset($aParams['ost_tpl_id'])) {
            $this->view->scenarii = $this->getAdministrationReferentialTypesDevisService()->retrieveScenariosByTemplateId((int) $aParams['ost_tpl_id']);
            $this->view->ost_tpl_id = $aParams['ost_tpl_id'];
        }
    }

    /**
     * Show rubrics
     */
    public function rubriquesAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if (isset($aParams['ost_tpl_id'])) {
            $this->view->rubriques = ROperationTypeSubTplRubriqueQuery::create()->filterByOstTplId($aParams['ost_tpl_id'])->orderByOstTplRubriqueOrder()
                ->useROperationTypeSubTplPrestationQuery(null, Criteria::LEFT_JOIN)
                ->orderByOstTplPrestationOrder()->endUse()->with('ROperationTypeSubTplPrestation')->find();



            $this->view->ost_tpl_id = $aParams['ost_tpl_id'];
            $this->view->scenarii = $this->getAdministrationReferentialTypesDevisService()->retrieveScenariosByTemplateId((int) $aParams['ost_tpl_id']);
        }
    }

    /**
     * Show rubric
     */
    public function rubriqueAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        if (isset($aParams['ost_tpl_rubrique_id'])) {
            $oRubric = ROperationTypeSubTplRubriqueQuery::create()->filterByPrimaryKey($aParams['ost_tpl_rubrique_id'])
                ->useROperationTypeSubTplPrestationQuery(null, Criteria::LEFT_JOIN)->orderByOstTplPrestationOrder()->endUse()
                ->with('ROperationTypeSubTplPrestation')
                ->find();
            $oRubric = current($oRubric);

            if (! $oRubric instanceof \ROperationTypeSubTplRubrique) {
                throw new \LogicException('The rubric id "' . $aParams['ost_tpl_rubrique_id'] . '" was not found.');
            }
            $this->view->rubrique = $oRubric;
            $this->view->ost_tpl_id = $oRubric->getOstTplId();
            $this->view->scenarii = $this->getAdministrationReferentialTypesDevisService()->retrieveScenariosByTemplateId($oRubric->getOstTplId());
        }
    }

    /**
     * Add a reward
     */
    public function addprimeAction()
    {
        $aParams = $this->getRequest()->getParams();

        $oTplPrimes = new ROperationTypeSubTplPrime();
        $oTplPrimes->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
        if ($oTplPrimes->validate()) {
            $oTplPrimes->save();

            $aPrime = $oTplPrimes->toArray(BasePeer::TYPE_FIELDNAME);
            $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $aPrime);
        } else {
            $aErrors = My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oTplPrimes->getValidationFailures());
            $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors);
        }

        $this->_helper->Json($oResponse);
    }

    /**
     * Add a scenario
     */
    public function addscenarioAction()
    {
        $aParams = $this->getRequest()->getParams();

        $oTplScenario = new ROperationTypeSubTplScenario();
        $oTplScenario->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
        if ($oTplScenario->validate()) {
            $oTplScenario->save();

            $aScenario = $oTplScenario->toArray(BasePeer::TYPE_FIELDNAME);
            $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $aScenario);
        } else {
            $aErrors = My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oTplScenario->getValidationFailures());
            $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors);
        }

        $this->_helper->Json($oResponse);
    }

    public function updateprimeAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->updateField(array('ROperationTypeSubTplPrime'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Adding a section to a template
     */
    public function addrubriqueAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        $this->view->ost_tpl_id = $aParams['ost_tpl_id'];

        if (isset($aParams['findbyfields'])) {
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $oZendDbSelect->from('View_Rrubrique_Listing')->order('r_rub_id asc');

            // Search engine on the query
            $oMySearchEngine = new My_Search_Engine($oZendDbSelect);

            // Declaration of search fields
            $oMySearchEngine->findByFields(array(
                'r_rub_libelle' => array('operator' => 'like'),
                'r_rub_type_id' => array('operator' => 'eql'),
                'r_tva_type_id' => array('operator' => 'eql')
            ));

            $this->view->rubriques = $oMySearchEngine->getSelect()->query()->fetchAll();
        } elseif (isset($aParams['tpl_rubrique_id'])) {
            // Processing for adding a section
            foreach ($aParams['tpl_rubrique_id'] as $iSectionId) {
                // Adding the field to the operation
                $oTplRubrique = new ROperationTypeSubTplRubrique();
                $oTplRubrique->setOstTplId($aParams['ost_tpl_id']);
                $oTplRubrique->setRRubriqueId($iSectionId);

                if ($oTplRubrique->validate()) {
                    $oTplRubrique->save();
                }
            }

            $aErrors = $oTplRubrique->getValidationFailures();
            if ($aErrors) {
                $aErrors = My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($aErrors);
                $this->_helper->FlashMessenger($aErrors, 'error');
            }

            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP, 'add_rubrique'));
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->render('rtypesdevis/addrubrique.phtml')));
        }
    }

    /**
     * Adds a service to the rubric of the template
     */
    public function addprestationAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->getRequest()->getParams();

        $this->view->ost_tpl_id = $aParams['ost_tpl_id'];
        $this->view->ost_tpl_rubrique_id = $aParams['ost_tpl_rubrique_id'];

        if (isset($aParams['findbyfields'])) {
            // Display services
            $aRPrestationsQuery = RPrestationsQuery::create();

            if (! empty($aParams['find_r_prestation_id'])) {
                $aRPrestationsQuery->filterByRPrestationId($aParams['find_r_prestation_id']);
            }
            if (! empty($aParams['find_r_p_libelle'])) {
                $aRPrestationsQuery->filterByRPLibelle('%' . $aParams['find_r_p_libelle'] . '%', Criteria::LIKE);
            }
            $this->view->prestations = $aRPrestationsQuery->find()->toArray('RPrestationId', false, Basepeer::TYPE_FIELDNAME);
        } elseif (isset($aParams['r_prestation_id']) || isset($aParams['prestation_ids'])) {
            $aServices = isset($aParams['r_prestation_id']) ? $aParams['r_prestation_id'] : explode(' ', $aParams['prestation_ids']);
            $aServices = array_map('trim', $aServices);
            $aErrors = $this->getAdministrationReferentialTypesDevisService()->getDisabledServices($aServices);
            if (empty($aErrors)) {
                foreach ($aServices as $iServiceId) {
                    // Adding service to the rubric
                    $oRPrestation = RPrestationsQuery::create()->findOneByRPrestationId($iServiceId);
                    if ($oRPrestation instanceof RPrestations) {
                        $oTplPrestation = new ROperationTypeSubTplPrestation();
                        $oTplPrestation->setOstTplRubriqueId($aParams['ost_tpl_rubrique_id']);
                        $oTplPrestation->setOstTplId($aParams['ost_tpl_id']);
                        $oTplPrestation->setRPrestationId($iServiceId);

                        $sRPCodeComptable = $oRPrestation->getRPCodeComptable();
                        if (empty($sRPCodeComptable)) {
                            $oTplPrestation->addValidationFailed($this->view->translate('Il manque le compte comptab le pour la prestation') . ' ' . $oRPrestation->getRPrestationId() . ' - ' . $oRPrestation->getRPLibelle(), $this->view->translate('RPCodeComptable') . '-' . $oRPrestation->getRPrestationId());
                        }

                        if ($oTplPrestation->validate()) {
                            $oTplPrestation->save();
                        }

                        $aErrors = array_merge($aErrors, $oTplPrestation->getValidationFailures());
                        $aErrors = My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($aErrors);
                    }
                }
            }


            if (count($aErrors) > 0) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
            } else {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP, 'add_prestation'));
            }
        } else {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->render('rtypesdevis/addprestation.phtml')));
        }
    }

    /**
     * Delete a section
     */
    public function deleterubriqueAction()
    {
        $aParams = $this->getRequest()->getParams();

        // Delete the section
        $oRubrique = ROperationTypeSubTplRubriqueQuery::create()->findOneByOstTplRubriqueId($aParams['ost_tpl_rubrique_id']);
        $oRubrique->delete();

        // Delete the services of the section
        $oRubPrestations = ROperationTypeSubTplPrestationQuery::create()->findByOstTplRubriqueId($aParams['ost_tpl_rubrique_id']);
        foreach ($oRubPrestations as $oService) {
            $oService->delete();
        }
        $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, 'Rubrique supprimée');
        $this->_helper->Json($oResponse);
    }

    /**
     * Delete a scenario
     */
    public function deletescenariiAction()
    {
        $aParams = $this->getRequest()->getParams();
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oScenario = ROperationTypeSubTplScenarioQuery::create()->findPK($aParams['ost_tpl_scenario_id']);
            $iOstTemplateId = $oScenario->getOstTplId();

            if ($oScenario->delete()) {
                $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, array('ostTplId' => $iOstTemplateId));
                $this->_helper->Json($oResponse);
            } else {
                $aValidationFailures = $oScenario->getValidationFailures();
                $aErrors = $this->_helper->PropelFailures()->validationFailuresToArray($aValidationFailures);
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
            }
        }
    }

    /**
     * Delete a reward
     */
    public function deleteprimeAction()
    {
        $aParams = $this->getRequest()->getParams();
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oReward = ROperationTypeSubTplPrimeQuery::create()->findPK($aParams['ost_tpl_prime_id']);
            $iOstTemplateId = $oReward->getOstTplId();

            if ($oReward->delete()) {
                $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, array('ostTplId' => $iOstTemplateId));
                $this->_helper->Json($oResponse);
            } else {
                $aValidationFailures = $oReward->getValidationFailures();
                $aErrors = $this->_helper->PropelFailures()->validationFailuresToArray($aValidationFailures);
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
            }
        }
    }

    /**
     *  Delete a service
     */
    public function deleteprestationAction()
    {
        $aParams = $this->getRequest()->getParams();
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oService = ROperationTypeSubTplPrestationQuery::create()->findPK($aParams['ost_tpl_prestation_id']);

            $oService->delete();
            $this->_forward('rubrique', 'rtypesdevis', 'administration', array('ost_tpl_rubrique_id' => $oService->getOstTplRubriqueId()));
        }
    }

    /**
     * Updating a service field value
     */
    public function updateprestationAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->updateField(array('ROperationTypeSubTplPrestation'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Updating a scenario field value
     */
    public function updatescenariiAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->updateField(array('ROperationTypeSubTplScenario'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Updating a template field value
     */
    public function updatetemplateAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oResponse = $this->_helper->AjaxComponents()->updateField(array('ROperationTypeSubTpl'));
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Updating an activity field value
     */
    public function updateactiviteAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $aParams = array();

            // Overwrite the checkbox value if the value is empty
            if ($this->getRequest()->getParam('fieldName') === 'actif' && $this->getRequest()->getParam('fieldValue') === '') {
                $aParams['fieldValue'] = 0;
            }

            $oResponse = $this->_helper->AjaxComponents()->updateField(array('RCustomActivites'), $aParams);
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Updating a value of a field of a type
     */
    public function updatetypeAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $aParams = array();

            // Overwrite the checkbox value if the value is empty
            if ($this->getRequest()->getParam('fieldName') === 'actif' && $this->getRequest()->getParam('fieldValue') === '') {
                $aParams['fieldValue'] = 0;
            }

            $oResponse = $this->_helper->AjaxComponents()->updateField(array('ROperationType'), $aParams);
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Updating a field value of a subtype field
     */
    public function updatesubtypeAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $aParams = array();

            // Overwrite the checkbox value if the value is empty
            if ($this->getRequest()->getParam('fieldName') === 'actif' && $this->getRequest()->getParam('fieldValue') === '') {
                $aParams['fieldValue'] = 0;
            }

            $oResponse = $this->_helper->AjaxComponents()->updateField(array('ROperationTypeSub'), $aParams);
            $this->_helper->Json($oResponse);
        }
    }

    /**
     * Update a universe data action
     */
    public function updateuniverseAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $aParams = array();

            if ($this->getRequest()->getParam('fieldName') === 'r_operation_universe_actif' && $this->getRequest()->getParam('fieldValue') === '') {
                $aParams['fieldValue'] = 0;
            }

            $this->_helper->Json($this->_helper->AjaxComponents()->updateField(array('ROperationUniverses'), $aParams));
        }
    }

    /**
     * Update a media data action
     */
    public function updatemediaAction()
    {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $aParams = array();

            if ($this->getRequest()->getParam('fieldName') === 'r_operation_media_actif' && $this->getRequest()->getParam('fieldValue') === '') {
                $aParams['fieldValue'] = 0;
            }

            $this->_helper->Json($this->_helper->AjaxComponents()->updateField(array('ROperationMedias'), $aParams));
        }
    }

    /**
     * Updating the position of a scenario
     */
    public function updatescenariipositionAction()
    {

        $aParams = $this->getRequest()->getParams();
        if ($this->getRequest()->isXmlHttpRequest()) {
            $oScenario = ROperationTypeSubTplScenarioQuery::create()->filterByOstTplId($aParams['ost_tpl_id'])
                ->filterByRScenarioNumero($aParams['op_scenario_numero'])
                ->findOne();
            if ($oScenario->updatePosition($aParams['op_scenario_new_numero'])) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, 'maj ok'));
            } else {
                $sMsg = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oScenario->getValidationFailures());
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $sMsg));
            }
        }
    }

    /**
     * Update position of rubric service
     *
     * @throws \LogicException
     */
    public function updateprestationpositionAction()
    {
        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }
        $aParams = $this->getRequest()->getParams();
        if (empty($aParams['prestation_order'])) {
            throw new \LogicException(__METHODE__ . ' expects parameter "prestation_order" to be given. But these parameters received', print_r($aParams, true));
        }

        $oPrestation = ROperationTypeSubTplPrestationQuery::create()->filterByOstTplPrestationOrder($aParams['prestation_order'])
            ->filterByOstTplRubriqueId($aParams['rubrique_id'])
            ->findOne();

        if ($oPrestation->updatePosition((int) $aParams['prestation_new_order'])) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, 'maj ok'));
        } else {
            $sMsg = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oPrestation->getValidationFailures());
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $sMsg));
        }
    }

    /**
     * Updating a section position
     */
    public function updaterubriquepositionAction()
    {

        $this->_helper->ViewRenderer->setNoRender(true);
        $aParams = $this->getRequest()->getParams();
        $oMovedSection = ROperationTypeSubTplRubriqueQuery::create()->findPk($aParams['rubrique_id_moved']);
        $oReplacedSection = ROperationTypeSubTplRubriqueQuery::create()->findPk($aParams['rubrique_id_replaced']);

        if ($oMovedSection->updatePosition($oReplacedSection->getOstTplRubriqueOrder())) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->translate('maj ok')));
        } else {
            $sMsg = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oMovedSection->getValidationFailures());
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $sMsg));
        }
    }

    public function identifytemplateAction()
    {

        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }
        $this->_helper->layout->disableLayout();


        $aParams = $this->getAllParams();
        $aMissingParametersErrors = array();

        if (empty($aParams['op_act_id'])) {
            $aMissingParametersErrors[] = sprintf($this->view->translate('template_identification_missing_parameter_error'), $this->view->translate('Métier'));
        }

        if (empty($aParams['op_type_id'])) {
            $aMissingParametersErrors[] = sprintf($this->view->translate('template_identification_missing_parameter_error'), $this->view->translate('Catégorie'));
        }

        if (empty($aParams['op_subtype_id'])) {
            $aMissingParametersErrors[] = sprintf($this->view->translate('template_identification_missing_parameter_error'), $this->view->translate('Mécanique'));
        }

        if (empty($aParams['template_universes'])) {
            $aMissingParametersErrors[] = $this->view->translate('template_identification_missing_universe_error');
        }

        if (empty($aParams['template_medias'])) {
            $aMissingParametersErrors[] = $this->view->translate('template_identification_missing_media_error');
        }

        if ($aMissingParametersErrors) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, '<ul><li>' . implode('</li><li>', $aMissingParametersErrors) . '</li></ul>'));
        }

        $oAdministrationRTypesDevisService = $this->getAdministrationReferentialTypesDevisService();
        $iOperationMecanic = (int) $aParams['op_subtype_id'];
        if (count($aParams['template_universes']) === 1 && count($aParams['template_medias']) === 1) {
            $aTemplateDetail = $oAdministrationRTypesDevisService->identifyTemplateWithOneUniverseAndOneMedia($iOperationMecanic, (int) current($aParams['template_universes']), (int) current($aParams['template_medias']));
        } else {
            $aTemplateDetail = $oAdministrationRTypesDevisService->identifyTemplateWithMultipleUniverseAndMultipleMedia($iOperationMecanic, $aParams['template_universes'], $aParams['template_medias']);
        }

        $this->view->template = $aTemplateDetail['template'];
        $this->view->isSharedTemplate = $aTemplateDetail['is_shared_template'];
    }

    /**
     * @throws \LogicException
     */
    public function listtemplatecountriesAction()
    {

        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getRequest()->getPost();

        if (empty($aParams['template_id'])) {
            throw new \LogicException('listtemplatecountries action expects parameter "template_id" to be given. But these parameters received', print_r($aParams, true));
        }

        $this->_helper->layout->disableLayout();
        $this->view->templateCountries = $this->getAdministrationReferentialTypesDevisService()->getTemplateCountries((int) $aParams['template_id']);
    }

    /**
     * @throws \LogicException
     */
    public function edittemplatecountriesAction()
    {
        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getRequest()->getPost();

        if (empty($aParams['template_id'])) {
            throw new \LogicException('edittemplatecountries action expects parameter "template_id" to be given. But these parameters received : ' . print_r($aParams['template_id'], true));
        }

        $this->_helper->layout->disableLayout();
        $oAdministrationRTypesDevisService = $this->getAdministrationReferentialTypesDevisService();
        $this->view->templateId = $iTemplateId = (int) $aParams['template_id'];

        if (empty($aParams['submit_template_countries'])) {
            $this->view->countries = $oAdministrationRTypesDevisService->getAllCountriesList($iTemplateId);
        } else {
            $this->_helper->ViewRenderer->setNoRender(true);
            $oAdministrationRTypesDevisService->updateTemplateRelatedCountries($iTemplateId, isset($aParams['templatecountries']) ? $aParams['templatecountries'] : array());
        }
    }

    /**
     * @throws \LogicException
     */
    public function listtemplateculturesAction()
    {

        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getRequest()->getPost();

        if (empty($aParams['template_id'])) {
            throw new \LogicException('listtemplatecultures action expects parameter "template_id" to be given. But these parameters received', print_r($aParams['template_id'], true));
        }

        $this->_helper->layout->disableLayout();
        $this->view->templateCultures = $this->getAdministrationReferentialTypesDevisService()->getTemplateCultures((int) $aParams['template_id']);
    }

    /**
     * @throws \LogicException
     */
    public function edittemplateculturesAction()
    {
        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getRequest()->getPost();

        if (empty($aParams['template_id'])) {
            throw new \LogicException('edittemplatecultures action expects parameter "template_id" to be given. But these parameters received : ' . print_r($aParams['template_id'], true));
        }

        $this->_helper->layout->disableLayout();
        $oAdministrationRTypesDevisService = $this->getAdministrationReferentialTypesDevisService();
        $this->view->templateId = $iTemplateId = (int) $aParams['template_id'];

        if (empty($aParams['submit_template_cultures'])) {
            $this->view->cultures = $oAdministrationRTypesDevisService->getAllCulturesList($iTemplateId);
        } else {
            $this->_helper->ViewRenderer->setNoRender(true);
            if (($aErrors = $oAdministrationRTypesDevisService->updateTemplateRelatedCultures($iTemplateId, isset($aParams['templatecultures']) ? $aParams['templatecultures'] : array()))) {
                $sValidationErrors = $this->view->translate('cultures_update_validation_errors') . ' : <br/><ul><li>' . implode('</li><li>', $aErrors) . '</li></ul>';
                $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $sValidationErrors));
            }
        }
    }

    /**
     * @throws \LogicException
     */
    public function listtemplatelanguagesAction()
    {

        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getRequest()->getPost();

        if (empty($aParams['template_id'])) {
            throw new \LogicException('listtemplatelanguages action expects parameter "template_id" to be given. But these parameters received', print_r($aParams['template_id'], true));
        }

        $this->_helper->layout->disableLayout();
        $this->view->templateLanguages = $this->getAdministrationReferentialTypesDevisService()->getTemplateLanguages((int) $aParams['template_id']);
    }

    /**
     * @throws \LogicException
     */
    public function listtemplatecurrenciesAction()
    {

        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getRequest()->getPost();

        if (empty($aParams['template_id'])) {
            throw new \LogicException('listtemplatecurrencies action expects parameter "template_id" to be given. But these parameters received', print_r($aParams['template_id'], true));
        }

        $this->_helper->layout->disableLayout();
        $this->view->templateCurrencies = $this->getAdministrationReferentialTypesDevisService()->getTemplateCurrencies((int) $aParams['template_id']);
    }

    /**
     * @throws \LogicException
     */
    public function edittemplatecurrenciesAction()
    {
        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getRequest()->getPost();

        if (empty($aParams['template_id'])) {
            throw new \LogicException('edittemplatecurrencies action expects parameter "template_id" to be given. But these parameters received : ' . print_r($aParams['template_id'], true));
        }

        $this->_helper->layout->disableLayout();
        $oAdministrationRTypesDevisService = $this->getAdministrationReferentialTypesDevisService();
        $this->view->templateId = $iTemplateId = (int) $aParams['template_id'];

        if (empty($aParams['submit_template_currencies'])) {
            $this->view->currencies = $oAdministrationRTypesDevisService->getAllCurrenciesList($iTemplateId);
        } else {
            $this->_helper->ViewRenderer->setNoRender(true);
            $oAdministrationRTypesDevisService->updateTemplateRelatedCurrencies($iTemplateId, isset($aParams['templatecurrencies']) ? $aParams['templatecurrencies'] : array());
        }
    }

    /**
     * @throws \LogicException
     */
    public function listtemplatemediasanduniversesAction()
    {
        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getRequest()->getPost();
        if (empty($aParams['template_id'])) {
            throw new \LogicException('listtemplatemediasanduniverses action expects parameter "template_id" to be given. But these parameters received', print_r($aParams, true));
        }
        $this->_helper->layout->disableLayout();
        $this->view->universesAndMedias = $this->getAdministrationReferentialTypesDevisService()->getOperationTemplateMediasAndUniversesByTemplateId((int) $aParams['template_id']);
    }

    /**
     * @throws \LogicException
     */
    public function edittemplatemediasanduniversesAction()
    {
        if (! $this->getRequest()->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->getRequest()->isXmlHttpRequest()) {
            throw new \LogicException('Action "' . __METHOD__ . '" is only accessible through AJAX');
        }

        $aParams = $this->getRequest()->getPost();
        if (empty($aParams['template_id'])) {
            throw new \LogicException('edittemplatecurrencies action expects parameter "template_id" to be given. But these parameters received : ' . print_r($aParams, true));
        }

        $this->_helper->layout->disableLayout();
        $oAdministrationRTypesDevisService = $this->getAdministrationReferentialTypesDevisService();

        $this->view->templateId = $iTemplateId = (int) $aParams['template_id'];

        if (! isset($aParams['submit_template_medias_and_universes'])) {
            $this->view->universesAndMedias = $oAdministrationRTypesDevisService->getAllCombinationMediasAndUniversesList($iTemplateId);
        } else {
            $this->_helper->ViewRenderer->setNoRender(true);
            // Check if templateUnivereseAndMedia exists and not empty
            if (empty($aParams['templateUnivereseAndMedia'])) {
                $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('message_error_universes_medias_combinitation_missing')));
            } else {
                $oAdministrationRTypesDevisService->updateTemplateRelatedMediasAndUniverses($iTemplateId, $aParams['templateUnivereseAndMedia']);
            }
        }
    }

    /**
     * Lazy loads an administrationRTypesDevisService
     *
     * @return \Phoenix_Administration_RTypesDevis_Service_RTypesDevisService
     * @throws \LogicException
     */
    public function getAdministrationReferentialTypesDevisService()
    {
        // Lazy load if undefined
        if ($this->administrationRTypesDevisService === null) {
            $this->administrationRTypesDevisService = new \Phoenix_Administration_RTypesDevis_Service_RTypesDevisService();
        }
        if ($this->administrationRTypesDevisService instanceof \Phoenix_Administration_RTypesDevis_Service_RTypesDevisService) {
            return $this->administrationRTypesDevisService;
        }
        throw new \LogicException('Property "administrationRTypesDevisService" expects an instance of \Phoenix_Administration_RTypesDevis_Service_RTypesDevisService, "' . (is_object($this->administrationRTypesDevisService) ? get_class($this->administrationRTypesDevisService) : gettype($this->administrationRTypesDevisService)) . '" defined');
    }
}
