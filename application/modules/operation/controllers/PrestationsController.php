<?php

/**
 * Controller grouping all CRUD operations relating to the scenarios, rewards and services of an operation through the form for managing the services of an operation
 */
class Operation_PrestationsController extends My_Controller_Action
{

    /**
     * @var \Phoenix_Operation_Prestations_Service_PrestationsService
     */
    protected $operationPrestationsService;


    /**
     * The default controller method
     */
    public function indexAction()
    {

        $sOperationId = $this->getParam('op_id');
        if (empty($sOperationId) || ! (($oOperation = OperationsQuery::create()->findPk($sOperationId)) instanceof \Operations)) {
            $oFlashMessenger = $this->_helper->getHelper('FlashMessenger');
            $sErrorMessage = sprintf($this->view->translate('L\'opération passée en paramètre "%s" est invalide'), $sOperationId);
            $oFlashMessenger->addMessage(array('error' => $sErrorMessage));
            $this->_helper->Redirector('index', 'listing', 'operation');
        }

        $this->view->bDisabledRubricsAddition = ($oOperation->getOpStatusId() == Operations::STATUS_SOLDE) ? true : false;

        $aOperationData = OperationsQuery::create()->filterByPrimaryKey($sOperationId)
            ->useOperationRubriquesQuery()->orderByOpRubriqueOrder()->useOperationPrestationsQuery()->orderByOpPrestOrder()
            ->endUse()->endUse()
            ->with('OperationRubriques')
            ->with('OperationPrestations')
            ->find();

        $aAmounts['estim'] = $aOperationData[0]->getMontants('', 'estim');
        $aAmounts['reel'] = $aOperationData[0]->getMontants('', 'reel');
        $aAmounts['estim']['marge'] = $aOperationData[0]->getMargeEstim();
        $aAmounts['reel']['marge'] = $aOperationData[0]->getMargeReel();

        $this->view->montants = $aAmounts;
        $this->view->operation = $aOperationData[0];
        $this->view->scenarii = OperationScenariiQuery::create()->filterByOpId($sOperationId)->orderByOpScenarioNumero()->find();
        $this->view->rewards = OperationPrimesQuery::create()->filterByOpId($sOperationId)->orderByOpPrimeNumero()
            ->useLnkOperationPrimeRCountriesQuery()->endUse()
            ->with('LnkOperationPrimeRCountries')
            ->find();
    }

    /**
     * Add a scenario
     */
    public function addscenarioAction()
    {

        $aParams = $this->_request->getParams();
        $oOperationScenarii = new OperationScenarii();
        $oOperationScenarii->fromArray($aParams, BasePeer::TYPE_FIELDNAME);
        if ($oOperationScenarii->validate()) {
            $oOperationScenarii->save();
            $aScenario = $oOperationScenarii->toArray(BasePeer::TYPE_FIELDNAME);
            $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $aScenario);
        } else {
            $aErrors = My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($oOperationScenarii->getValidationFailures());
            $oResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors);
        }

        $this->_helper->Json($oResponse);
    }

    /**
     * Update scenario values field
     */
    public function updatescenariiAction()
    {
        $aParams = $this->_request->getParams();
        if ($this->_request->isXmlHttpRequest()) {
            $aOption = array();
            if (in_array($aParams['fieldName'], array('op_scenario_volume', 'op_scenario_total', 'op_scenario_pcent'))) {
                $oOperationScenarii = OperationScenariiQuery::create()->findPk($aParams['primaryValue']);
                if ($oOperationScenarii->getOperations()->getOpStatusId() != Operations::STATUS_EN_COURS && ! $oOperationScenarii->checkMajQteForGedelog()) {
                    $aOption['msg'] = $this->view->translate('Vous venez de modifier des quantités estimées. Contactez le service Logistique pour gestion des approvisionnements dans GEDELOG en fonction des nouvelles quantités estimées') . '.';
                    $aOption['action'] = Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS;
                }
            }
            $this->_helper->Json($this->_helper->AjaxComponents()->updateField(array('OperationScenarii'), array(), $aOption));
        }
    }

    /**
     * Remove a scenario
     */
    public function deletescenariiAction()
    {
        $aParams = $this->_request->getParams();
        if ($this->_request->isXmlHttpRequest()) {
            $oScenario = OperationScenariiQuery::create()->findPK($aParams['op_scenario_id']);
            $iOperationId = $oScenario->getOpId();
            if ($oScenario->delete()) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, array('opId' => $iOperationId)));
            } else {
                $aErrors = $this->_helper->PropelFailures()->validationFailuresToArray($oScenario->getValidationFailures());
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors));
            }
        }
    }

    /**
     * Display the scenarios of a service
     */
    public function scenariiAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $this->view->scenarii = OperationScenariiQuery::create()->filterByOpId($aParams['op_id'])->orderByOpScenarioNumero()->find();
    }

    /**
     * Update the position of the scenario
     */
    public function updatescenariipositionAction()
    {

        $aParams = $this->_request->getParams();
        if ($this->_request->isXmlHttpRequest()) {
            $oScenario = OperationScenariiQuery::create()->findByOpIdAndOpScenarioNumero($aParams['op_id'], $aParams['op_scenario_numero']);
            if ($oScenario->updatePosition($aParams['op_scenario_new_numero'])) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->translate('maj ok')));
            } else {
                $sMsg = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oScenario->getValidationFailures());
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $sMsg));
            }
        }
    }

    /**
     * Update reward action
     */
    public function updateprimeAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $aParams = $this->_request->getParams();
            if (isset($aParams['fieldName']) && $aParams['fieldName'] === 'operation_prime_product_price_pourcentage' && ! empty($aParams['fieldValue']) && false === filter_var($aParams['fieldValue'], FILTER_VALIDATE_INT)) {
                $sErrorMessage = $this->view->translate('message_operation_prime_product_price_pourcentage_must_be_an_integer');
                $this->_helper->Json(new Phoenix_Ajax_Components_Response_UpdateField(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $sErrorMessage, $aParams['fieldName'], $aParams['fieldValue'], $aParams['fieldId'], $aParams['primaryValue']));
            } else {
                $oResponse = $this->_helper->AjaxComponents()->updateField(array('OperationPrimes'));
                
                // Push Operation reward to Gedelog if needed
                $oReward = OperationPrimesQuery::create()->findPK($aParams['primaryValue']);
                if (! $oReward) {
                    throw new \LogicException('No valid reward could be found with id ' . print_r($aParams['primaryValue'], true));
                }
                $sGedelogResponse = $this->getOperationPrestationsService()->pushOperationRewardToGedelog($oReward);
                if (is_string($sGedelogResponse)) {
                    $oResponse->addMessage($this->view->translate($sGedelogResponse));
                }

                $this->_helper->Json($oResponse);
            }
        }
    }

    /**
     * Displaying rewards
     */
    public function primesAction()
    {
        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();
        $this->view->rewards = OperationPrimesQuery::create()->filterByOpId($aParams['op_id'])->orderByOpPrimeNumero()->find();
    }

    /**
     * Remove a reward
     */
    public function deleteprimeAction()
    {
        $aParams = $this->_request->getParams();
        if ($this->_request->isXmlHttpRequest()) {
            $oReward = OperationPrimesQuery::create()->findPK($aParams['op_prime_id']);
            $iOperationId = $oReward->getOpId();

            if ($oReward->delete()) {
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, array('opId' => $iOperationId, 'primeNumero' => $oReward->getOpPrimeNumero())));
            }
            $aValidationFailures = $oReward->getValidationFailures();
            $aValidationFailures = $this->_helper->PropelFailures()->validationFailuresToArray($aValidationFailures);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aValidationFailures));
        }
    }


    /**
     * Update service field
     */
    public function updateprestationAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $aOption = array();
            $this->_helper->Json($this->_helper->AjaxComponents()->updateField(array(), array(), $aOption));
        }
    }

    /**
     *  Remove a service
     */
    public function deleteprestationAction()
    {
        $aParams = $this->_request->getParams();
        if ($this->_request->isXmlHttpRequest()) {
            $oPrestation = OperationPrestationsQuery::create()->findPK($aParams['op_prest_id']);

            if (OperationPrestationsQuery::create()->checkPrestaExistsInFactureByStatus($aParams['op_prest_id'], RFactureStatuts::CREATED)) {
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, array($this->view->translate('La prestation ne peut pas être supprimée car elle est présente dans une facture en statut créée ou plus') . '.')));
            }
            if ($oPrestation->delete()) {
                return $this->_forward('rubrique', 'prestations', 'operation', array('op_rubrique_id' => $oPrestation->getOpPrestRubriId()));
            }
            $aValidationFailures = $oPrestation->getValidationFailures();
            $aValidationFailures = $this->_helper->PropelFailures()->validationFailuresToArray($aValidationFailures);
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aValidationFailures));
        }
    }

    /**
     * Update the position of the service
     */
    public function updateprestationpositionAction()
    {

        $aParams = $this->_request->getParams();

        if ($this->_request->isXmlHttpRequest()) {
            $oPrestation = OperationPrestationsQuery::create()->findByOpPrestRubriIdAndOpPrestOrder($aParams['op_rubrique_id'], $aParams['op_prestation_order']);

            if ($oPrestation->updatePosition($aParams['op_prestation_new_order'])) {
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->translate('maj ok')));
            }
            $sMsg = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oPrestation->getValidationFailures());
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $sMsg));
        }
    }

    /**
     * Display rubrics
     */
    public function rubriqueAction()
    {
        $this->_helper->layout->disableLayout();

        $aParams = $this->_request->getParams();

        $this->view->op_rubrique_id = $aParams['op_rubrique_id'];

        OperationRubriquesPeer::clearInstancePool();
        $aRubriques = OperationRubriquesQuery::create()->filterByPrimaryKey($aParams['op_rubrique_id'])
            ->useOperationPrestationsQuery()->orderByOpPrestOrder()->endUse()
            ->with('OperationPrestations')
            ->find();

        $this->view->rubrique = $aRubriques[0];
    }

    /**
     * Update rubric label
     */
    public function updaterubriqueAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $this->_helper->Json($this->_helper->AjaxComponents()->updateField());
        }
    }

    /**
     * Update the position of the section
     */
    public function updaterubriquepositionAction()
    {

        $this->_helper->ViewRenderer->setNoRender(true);
        $aParams = $this->_request->getParams();
        $oRubriqueMoved = OperationRubriquesQuery::create()->findPk($aParams['rubrique_id_moved']);
        $oRubriqueReplaced = OperationRubriquesQuery::create()->findPk($aParams['rubrique_id_replaced']);

        if ($oRubriqueMoved->updatePosition($oRubriqueReplaced->getOpRubriqueOrder())) {
            return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->translate('maj ok')));
        }
        $sMsg = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oRubriqueMoved->getValidationFailures());
        $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $sMsg));
    }

    /**
     * Adds a rubric to the operation
     *
     * @throws \LogicException
     */
    public function ajoutrubriqueAction()
    {
        $this->_helper->layout->disableLayout();

        $aParams = $this->_request->getParams();

        if (empty($aParams['op_id']) || ! (($oOperation = OperationsQuery::create()->findPk($aParams['op_id'])) instanceof \Operations)) {
            throw new \LogicException('No valid operation could be found via the given arguments ' . print_r($aParams, true));
        }

        if ($oOperation->getOpStatusId() == Operations::STATUS_SOLDE) {
            $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('L\'opération est en statut "soldé", l\'ajout des rubriques n\'est plus disponible') . '.'));
        }

        $this->view->op_id = $aParams['op_id'];

        if (isset($aParams['findbyfields'])) {
            // Finding rubrics
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());

            // Creating a search engine based on the query
            $oMySearchEngine = new My_Search_Engine($oZendDbSelect->from('View_Rrubrique_Listing')->order('r_rub_id desc'));

            // Declaring seekable fields
            $oMySearchEngine->findByFields(
                array(
                    'r_rub_libelle' => array('operator' => 'like'),
                    'r_rub_type_id' => array('operator' => 'eql'),
                    'r_tva_type_id' => array('operator' => 'eql')
                )
            );
            $this->view->rubriques = $oMySearchEngine->getSelect()->query()->fetchAll();
        } elseif (isset($aParams['submit_ajouter_rubrique'])) {
            // Adding rubrics process
            foreach ($aParams['op_r_rubrique_id'] as $sOpRRubricId) {
                // Adding rubric to the operation
                $oOperation->addRubriqueFromReferentiel($sOpRRubricId);
            }
            $this->_helper->Redirector('index', 'prestations', 'operation', array('op_id' => $aParams['op_id']));
        } else {
            $oPhoenixAjaxComponentsResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->render('prestations/ajoutrubrique.phtml'));
            $this->_helper->Json($oPhoenixAjaxComponentsResponse);
        }
    }

    /**
     * Remove a section
     */
    public function deleterubriqueAction()
    {

        $aParams = $this->_request->getParams();

        $oSection = OperationRubriquesQuery::create()->findPk($aParams['op_rubrique_id']);

        // vérifier si aucune prestation n'existent dans une autre facture au moins statut créée
        if (OperationPrestationsQuery::create()->checkIfOnePrestaExistsInFactureByStatus((int) $aParams['op_rubrique_id'])) {
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(true, array($this->view->translate('La rubrique ne peut pas être supprimée car au moins une des prestations référencées est présente dans une facture en statut créée ou plus') . '.')));
        } else {
            if ($oSection->delete()) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(0, $this->view->translate('rubrique supprimée')));
            } else {
                $aErrors = $this->_helper->PropelFailures()->validationFailuresToArray($oSection->getValidationFailures());
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(true, $aErrors));
            }
        }
    }


    /**
     * Add service to the rubric
     * 1- Displays the form
     * 2- Saves the service into the rubric
     *
     * @throws \LogicException
     */
    public function ajoutprestationAction()
    {
        $this->_helper->layout->disableLayout();

        $aParams = $this->_request->getParams();

        $bFindByfields = $this->_request->getParam('findbyfields', null);

        if (empty($aParams['op_id']) || ! (($oOperation = OperationsQuery::create()->findPk($aParams['op_id'])) instanceof \Operations)) {
            throw new \LogicException('No valid operation could be found via the given arguments ' . print_r($aParams, true));
        }

        if ($oOperation->getOpStatusId() == Operations::STATUS_SOLDE) {
            return $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('L\'opération est en statut "soldé", l\'ajout des prestations n\'est plus disponible') . '.'));
        }

        $this->view->op_id = $aParams['op_id'];
        $this->view->op_rubrique_id = $aParams['op_rubrique_id'];

        if (isset($bFindByfields)) {
            // Display services
            $oOperations = OperationsQuery::create()->filterByOpId($aParams['op_id'])
                ->useClientsQuery()->endUse()
                ->with('Clients')->findOne();

            $bNegoceOnly = isset($aParams['find_negoce_only']);

            if (empty($aParams['autocomplete_op_id'])) {
                $aParams['find_op_id'] = '';
            }

            $aPrestations = $oOperations->getClients()->getReferenceServicesWithNegoce(
                $oOperations->getOpUsePrestaNegoce(),
                array(
                    'r_prestation_id' => $aParams['find_r_prestation_id'],
                    'r_p_libelle' => $aParams['find_r_p_libelle'],
                    'r_p_libelle_lang' => $aParams['find_r_p_libelle_lang'],
                    'r_p_axe1_id' => $aParams['find_r_p_axe1_id'],
                    'r_p_axe3_id' => $aParams['find_r_p_axe3_id'],
                    'r_p_axe4_id' => $aParams['find_r_p_axe4_id'],
                    'r_p_groupe_validation_id' => $aParams['find_r_p_groupe_validation_id'],
                    'r_p_prix_vente' => $aParams['find_r_p_prix_vente'],
                    'r_p_prix_vente_comp' => $aParams['find_r_p_prix_vente_comp'],
                    'r_p_cout_total' => $aParams['find_r_p_cout_total'],
                    'r_p_cout_total_comp' => $aParams['find_r_p_cout_total_comp'],
                    'op_id' => $aParams['find_op_id']
                ),
                $bNegoceOnly
            );

            $this->view->prestations = $aPrestations;
            return;
        }

        if (empty($aParams['submit_ajouter_prestation'])) {
            $oPhoenixAjaxComponentsResponse = new Phoenix_Ajax_Components_Response(0, $this->view->render('prestations/ajoutprestation.phtml'));
            return $this->_helper->Json($oPhoenixAjaxComponentsResponse);
        }

        // Saves services
        $aRPrestationId = $this->_request->getParam('r_prestation_id');
        $aQuantity = $this->_request->getParam('r_prestation_quanity'); // Temprory array variable

        $aErrors = array();

        if (! is_array($aRPrestationId)) {
            $oPhoenixAjaxComponentsResponse = new Phoenix_Ajax_Components_Response(0, $this->view->render('prestations/ajoutprestation.phtml'));
            return $this->_helper->Json($oPhoenixAjaxComponentsResponse);
        }
        foreach ($aRPrestationId as $iRprestationId) {
            if (is_numeric($aQuantity[$iRprestationId])) {
                if ($aQuantity[$iRprestationId] > 19) {
                    $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('quantity_must_be_interger_of_less_than_20') . '.'));
                }
            } else {
                $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $this->view->translate('quantity_must_be_interger_of_less_than_20') . '.'));
            }
        }
        
        // Creating operation_prestations records
        foreach ($aRPrestationId as $iRprestationId) {
            if ($aQuantity[$iRprestationId]) {
                for ($iIndex = 0; $iIndex < $aQuantity[$iRprestationId]; $iIndex++) {
                    $oOperation->replacePrestationFromReferentiel($iRprestationId, $aParams['op_rubrique_id']);
                }
            }
        }

        $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oOperation->getValidationFailures());
        if ($aErrors) {
            $oPhoenixAjaxComponentsResponse = new Phoenix_Ajax_Components_Response(1, $aErrors);
            return $this->_helper->Json($oPhoenixAjaxComponentsResponse);
        }
        return $this->_forward('rubrique', 'prestations', 'operation', array('op_rubrique_id' => $aParams['op_rubrique_id']));
    }

    /**
     * Display the form of editing a service
     *
     * @return type
     * @throws \LogicException
     */
    public function prestationdescriptionAction()
    {

        $this->_helper->layout->disableLayout();
        $aParams = $this->_request->getParams();

        if ($this->_request->isXmlHttpRequest()) {
            if (empty($aParams['op_prest_id'])) {
                throw new \LogicException('Parameters index "op_prest_id" is missing');
            }

            $this->view->bDisableFields = FacturesPrestations::checkIfServiceIsCharged((int) $aParams['op_prest_id']);

            $oPrestation = OperationPrestationsQuery::create()->findPk($aParams['op_prest_id']);
            if (! $oPrestation) {
                return $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, 'La prestation n\'existe plus'));
            }

            if (! isset($aParams['submit_form'])) {
                $oRPresta = RPrestationsQuery::create()->findOneByRPrestationId($oPrestation->getOpRPrestId());
                $bUpdatableEstimatedCosts = false;

                if ($oRPresta->getRPCoutsEstimesModifiables() == 0) {
                    // The estimated costs can be modified for the services, if this is configured in the service repository.
                    $bUpdatableEstimatedCosts = true;
                }

                $this->view->unupdatable_costs = $bUpdatableEstimatedCosts;
                $this->view->prestation = $oPrestation;
                $this->view->op_rubrique_id = $oPrestation->getOpPrestRubriId();
                $oPhoenixAjaxComponentsResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $this->view->render('prestations/prestationdescription.phtml'));
                return $this->_helper->Json($oPhoenixAjaxComponentsResponse);
            }

            $this->_helper->ViewRenderer->setNoRender(true);

            $oPrestation->fromArray($aParams, basepeer::TYPE_FIELDNAME);
            $oPrestation->setOpPrestCommentInterne(trim($oPrestation->getOpPrestCommentInterne()));
            if ($oPrestation->validate()) {
                $oPrestation->save();
            } else {
                $aErrors = $this->_helper->PropelFailures()->validationFailuresToSimpleArray($oPrestation->getValidationFailures());
                $oPhoenixAjaxComponentsResponse = new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, $aErrors);
                $this->_helper->Json($oPhoenixAjaxComponentsResponse);
            }
        }
    }

    /**
     * Replaces a service with another output from the repository
     */
    public function replaceprestationAction()
    {
        $aParams = $this->_request->getParams();
        // Check that the op_prest_id parameter is received in parameter and that an Operation Services object is attached to this identifier
        if (isset($aParams['op_prest_id']) && ($oOperationPrestation = OperationPrestationsQuery::create()->findPk($aParams['op_prest_id'])) instanceof OperationPrestations) {
            $oOperationPrestation->replaceByServiceReferential($aParams['r_prestation_id']);
            return $this->_forward('rubrique', null, null, array('op_rubrique_id' => $oOperationPrestation->getOpPrestRubriId()));
        }

        $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, 'La prestation n\'existe plus'));
    }

    public function totalAction()
    {
        $this->_helper->layout->disableLayout();

        $aParams = $this->_request->getParams();

        $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
        $aAmountsData['estim'] = $oOperation->getMontants('', 'estim');
        $aAmountsData['reel'] = $oOperation->getMontants('', 'reel');
        $aAmountsData['estim']['marge'] = $oOperation->getMargeEstim();
        $aAmountsData['reel']['marge'] = $oOperation->getMargeReel();

        $this->view->montants = $aAmountsData;
    }


    /**
     * @throws \LogicException
     */
    public function editoperationrewardcountriesAction()
    {

        if (! $this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->_request->isXmlHttpRequest()) {
            throw new \LogicException('editoperationrewardcountries Action is only accessible through AJAX');
        }

        $aParams = $this->_request->getParams();

        if (! isset($aParams['operation_reward_id'])) {
            throw new \LogicException('operation_reward_id was not found in POST parameters');
        }

        $this->_helper->layout->disableLayout();
        $oOperationService = $this->getOperationPrestationsService();
        $iOperationRewardId = (int) $aParams['operation_reward_id'];

        $oOperationReward = $oOperationService->getRewardInstanceByRewardId($iOperationRewardId);
        if (! $oOperationReward instanceof \OperationPrimes) {
            throw new \LogicException('The operation reward "' . $oOperationReward . '" was not found in database');
        }

        if (isset($aParams['submit_operation_reward_countries'])) {
            $this->_helper->ViewRenderer->setNoRender(true);
            $aCountries = isset($aParams['operation_reward_countries']) ? $aParams['operation_reward_countries'] : array();
            $oOperationService->updateOperationRewardsCountries($oOperationReward, $aCountries);

            if ($aErrors = $oOperationReward->getValidationFailures()) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS,
                    $this->_helper->PropelFailures()->validationFailuresToSimpleArray($aErrors)
                ));
            }
        } else {
            $this->view->operationRewardId = $iOperationRewardId;
            $this->view->rewardCountriesList = $oOperationService->getOperationRewardCountriesSelectListData($iOperationRewardId);
        }
    }

    /**
     * @throws \LogicException
     */
    public function operationrewardcurrencieslistAction()
    {
        if (! $this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->_request->isXmlHttpRequest()) {
            throw new \LogicException('operationrewardcurrencieslist Action is only accessible through AJAX');
        }

        $aParams = $this->_request->getParams();

        if (! isset($aParams['operation_reward_id'])) {
            throw new \LogicException('operation_reward_id was not found in POST parameters');
        }

        $this->_helper->layout->disableLayout();
        $iRewardId = (int) $aParams['operation_reward_id'];
        $this->view->rewardCurrenciesList = $this->getOperationPrestationsService()->getOperationRewardCurrenciesSelectListData($iRewardId);
        $this->view->reward = $this->getOperationPrestationsService()->getRewardInstanceByRewardId($iRewardId);
    }

    /**
     *
     * @throws \LogicException
     */
    public function addoperationrewardAction()
    {

        if (! $this->_request->isPost()) {
            throw new \LogicException('The HTTP request does not use the expected "POST" method');
        }

        if (! $this->_request->isXmlHttpRequest()) {
            throw new \LogicException('addoperationreward Action is only accessible through AJAX');
        }

        $aParams = $this->_request->getParams();

        if (! isset($aParams['op_id'])) {
            throw new \LogicException('op_id was not found in POST parameters');
        }

        $aParams = $this->_request->getParams();
        $iOperationId = (int) $aParams['op_id'];

        $this->_helper->layout->disableLayout();
        $oOperationService = $this->getOperationPrestationsService();

        if (isset($aParams['submit_new_operation_reward'])) {
            $this->_helper->ViewRenderer->setNoRender(true);
            $aResponse = $oOperationService->addOperationReward($aParams);
            if (is_array($aResponse)) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_ERRORS, My_Propel_Failures::getInstance()->validationFailuresToSimpleArray($aResponse)));
            } else {
                $sGedelogResponse = $oOperationService->pushOperationRewardToGedelog($aResponse);
                $sGedelogPushResponse = is_string($sGedelogResponse) ? $this->view->translate($sGedelogResponse) : null;
                $aRewardData = $aResponse->toArray(BasePeer::TYPE_FIELDNAME);
                if (isset($sGedelogPushResponse)) {
                    $aRewardData['msg'] = $sGedelogPushResponse;
                }
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_DATA, $aRewardData));
            }
        } else {
            $this->view->rewardCountriesList = $oOperationService->getOperationCountriesSelectListData($iOperationId);
            $this->view->rewardCurrenciesList = $oOperationService->getCurrenciesListHydratedWithOperationCountriesCurrencies($iOperationId);
            $this->view->op_id = $iOperationId;
        }
    }

    /**
     * Lazy loads an operationPrestationsService
     *
     * @return \Phoenix_Operation_Prestations_Service_PrestationsService
     * @throws \LogicException
     */
    public function getOperationPrestationsService()
    {
        // Lazy load if undefined
        if ($this->operationPrestationsService === null) {
            $this->operationPrestationsService = new \Phoenix_Operation_Prestations_Service_PrestationsService();
        }
        if ($this->operationPrestationsService instanceof \Phoenix_Operation_Prestations_Service_PrestationsService) {
            return $this->operationPrestationsService;
        }
        throw new \LogicException('Property "operationPrestationsService" expects an instance of \Phoenix_Administration_Users_Service_UsersService, "' . (is_object($this->operationPrestationsService) ? get_class($this->operationPrestationsService) : gettype($this->operationPrestationsService)) . '" defined');
    }
}
