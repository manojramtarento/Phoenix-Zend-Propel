<?php

class OperationPrestations extends BaseOperationPrestations
{

    const FILE_ENTITY_NAME = 'operations_prestations';

    /**
     * @param int $itypeCoutId
     * @param int $iValue
     */
    private function _triggerHistoCouts($iCostTypeId, $iValue)
    {
        $oHistoCouts = new HistoCouts();
        $oHistoCouts->setOpPrestId($this->getOpPrestId())
            ->setUserId(Phoenix_Auth_User::getInstance()->getUserId())
            ->setHistoCoutsValue($iValue)
            ->setRCoutsNatureId($iCostTypeId)
            ->save();
    }

    protected function _validateIsModifiable()
    {
        // Making the following process also availble for "soldé" status
        if (in_array($this->getOperationRubriques()->getOperations()->getOpStatusId(), array(Operations::STATUS_EN_COURS, Operations::STATUS_ACCEPTE, Operations::STATUS_SOLDE)) || Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::VALIDATION_COUTS_OP_CLOTURE)) {
            return true;
        } else {
            $this->addValidationFailed('L\'opération doit avoir le statut en cours ou acceptée/soldée');
            return false;
        }
    }

    protected function _validateIsSellingPriceModifiable()
    {

        // Bloc change price for factured services
        if (in_array('operation_prestations.op_prest_pv', $this->getModifiedColumns()) && FacturesPrestations::checkIfServiceIsCharged((int) $this->getOpPrestId())) {
            $this->addValidationFailed('La prestation a déjà été facturée, créez une nouvelle ligne de prestation');
            return false;
        }
        return true;
    }

    protected function _majOpPrestQestim()
    {
        if ($this->getOpPrestScenaId()) {
            $this->setOpPrestQestim($this->getOpPrestCoef() * $this->getOperationScenarii()->getOpScenarioTotal(), false);
        }
    }

    protected function _majOpPrestMestim()
    {
        $this->setOpPrestMestim($this->getOpPrestQestim() * $this->getOpPrestPv());
    }

    protected function _majOpPrestMreel()
    {
        $this->setOpPrestMreel($this->getOpPrestQreel() * $this->getOpPrestPv());
    }

    /**
     * This function allows you to change the value of the op_prest_is_mandatory field: if it is zero, it will be reset to 0
     */
    protected function _triggerUpdateOpPrestIsMandatoryValue()
    {
        if (! $this->getOpPrestIsMandatory()) {
            $this->setOpPrestIsMandatory(0);
        }
    }

    /**
     * Set the value of [op_prest_prime_id] column.
     * Check if the prestation is available for reward
     *
     * @param int $iOpPrestPrimeId new value
     */
    public function setOpPrestPrimeId($iOpPrestPrimeId)
    {

        if (! $iOpPrestPrimeId || $this->getRPrestations()->getRPIsEligibleForPrime()) {
            parent::setOpPrestPrimeId($iOpPrestPrimeId);
        } else {
            $this->addValidationFailed('La prestation n\'est pas éligible à l\'attribution d\'une prime', 'op_prest_prime_id');
        }
    }

    public function isModifiable()
    {
        return $this->_validateIsModifiable();
    }

    /**
     * Indicates whether the service is incomplete, i. e. whether the sales price is empty or the estimated costs are empty.
     *
     * @return bool
     */
    public function isComplete() : bool
    {
        return is_numeric($this->getOpPrestPv()) && (is_numeric($this->getOpPrestCiestim()) || is_numeric($this->getOpPrestCeestim()));
    }


    /**
     * Check service is an ADF service
     * @param int $iOpRPrestId
     * @return bool
     */
    public function isAdf(int $iOpRPrestId) : bool
    {
        $oData = $this->getRPrestations();
        return $oData->getRPrestationId() === $iOpRPrestId && $oData->getRPAdf();
    }


    /**
     * Checks that the estimated costs are well informed and flag op_prest_couts_valid
     * @return bool
     */
    public function processCoutsReelsValidation()
    {
        // Check if the service can be validated automatically: If it is a MANUAL and NOT VALIDATED service and actual costs (internal AND external) are indicated
        $oRPresta = RPrestationsQuery::create()->findPk($this->getOpRPrestId());
        if ($oRPresta instanceof RPrestations) {
            if ($oRPresta->getRPValidationId() == RPTypeValidation::MANUELLE && ! $this->getOpPrestCoutsValides()) {
                $fInternalCostRealized = $this->getOpPrestCireel();
                $fExternalCostRealized = $this->getOpPrestCereel();

                if (is_numeric($fInternalCostRealized) || is_numeric($fExternalCostRealized)) {
                    $this->setOpPrestCoutsValides(1);
                    // Records the person who last filled in the actual costs
                    $this->setOpUserCoutsReel(Zend_Auth::getInstance()->getIdentity()->getUserId());
                    // User and current date history before registration
                    $this->historiseCostUpdaterUserAndCostValidationDate()->save();
                    return true;
                } else {
                    if (! is_numeric($fInternalCostRealized)) {
                        $this->addValidationFailed("Le coût interne réel n'est pas renseigné", "op_prest_cireel");
                    }
                    if (! is_numeric($fExternalCostRealized)) {
                        $this->addValidationFailed("Le coût externe réel n'est pas renseigné", "op_prest_cereel");
                    }
                    return false;
                }
            } else {
                // User and current date history before registration
                $this->historiseCostUpdaterUserAndCostValidationDate()->save();
                return true;
            }
        }
    }

    /**
     * Applies negotiated rate for the given customer
     *
     * @param int $iNewCustomerId
     * @return bool negotiated price applied or not applied
     * @throws \InvalidArgumentException
     */
    public function applyPrestaNegoce($iNewCustomerId)
    {
        if (! is_integer($iNewCustomerId)) {
            throw new \InvalidArgumentException('The new customer id expects integer, "' . gettype($iNewCustomerId) . '" given');
        }
        $oClientPrestation = ClientPrestationsQuery::create()->filterByClId($iNewCustomerId)
            ->filterByRPrestId($this->getOpRPrestId())
            ->findOne();
        if ($oClientPrestation instanceof ClientPrestations) {
            $this->setOpPrestPv($oClientPrestation->getClPrestPv());
            return true;
        } else {
            return false;
        }
    }

    /**
     * Historically log an invoice file version
     *
     * @param string $sFilename
     * @return int|false
     */
    public function addFileFacture($sFilename)
    {

        $oFile = new Files();
        $oFile->setFileCategoryId(RFileCategories::FACTURE);
        $oFile->setFileEntityName(self::FILE_ENTITY_NAME);
        $oFile->setFileEntityId($this->getOpPrestId());
        $oFile->setFileName($sFilename);

        if ($oFile->validate()) {
            $oFile->save();
            return $oFile->getFileId();
        } else {
            $aErrors = $oFile->getValidationFailures();
            foreach ($aErrors as $sFieldname => $aErrorsField) {
                foreach ($aErrorsField as $oError) {
                    $this->addValidationFailed($oError->getMessage(), 'facture');
                }
            }
        }

        return false;
    }

    /**
     * @return Files
     */
    public function getFilesFactures()
    {
        return FilesQuery::create()->findByCategoryAndEntity(RFileCategories::FACTURE, self::FILE_ENTITY_NAME, $this->getOpPrestId());
    }

    /**
     * @param int $iOpPrestQestim
     * @param bool $bCheck
     * @return OperationPrestations
     */
    public function setOpPrestQestim($iOpPrestQestim, $bCheck = true)
    {
        parent::setOpPrestQestim($iOpPrestQestim);
        if ($bCheck && $this->getOpPrestScenaId()) {
            $this->addValidationFailed('La quantité estimée ne peut être modifiée si la préstation fait référence à un scénario');
        } else {
            $this->_majOpPrestMestim();
        }
        return $this;
    }

    /**
     * @param int $iOpPrestQreel
     * @return OperationPrestations
     */
    public function setOpPrestQreel($iOpPrestQreel)
    {
        parent::setOpPrestQreel($iOpPrestQreel);
        $this->_majOpPrestMreel();
        return $this;
    }

    /**
     * @param int $iOpPrestPv
     * @return OperationPrestations
     */
    public function setOpPrestPv($iOpPrestPv)
    {
        parent::setOpPrestPv($iOpPrestPv);
        $this->_majOpPrestMestim();
        $this->_majOpPrestMreel();
        return $this;
    }

    /**
     * @param int $iOpPrestCoef
     * @param bool $bCheck
     * @return OperationPrestations
     */
    public function setOpPrestCoef($iOpPrestCoef, $bCheck = true)
    {
        parent::setOpPrestCoef($iOpPrestCoef);
        if ($bCheck && ! $this->getOpPrestScenaId()) {
            $this->addValidationFailed('Il n\'est pas possible de modifier le coefficient sur une prestation ne faisant pas référence à un scénario');
        } else {
            $this->_majOpPrestQestim();
        }
        return $this;
    }

    /**
     * @param int $iOpPrestScenaId
     * @return OperationPrestations
     */
    public function setOpPrestScenaId($iOpPrestScenaId)
    {
        parent::setOpPrestScenaId($iOpPrestScenaId);

        $oScenario = OperationScenariiQuery::create()->findPk($iOpPrestScenaId);

        if ($oScenario) {
            $this->_majOpPrestQestim();
            $this->setOpPrestPrimeId($oScenario->getOpRPrimeId());
        } else {
            $this->setOpPrestCoef(1, false);
        }
        return $this;
    }

    /**
     * Returns the estimated margin
     *
     * @return float
     */
    public function getOpPrestMargeEstim()
    {
        return $this->getOpPrestMestim() - ($this->getOpPrestQestim() * ($this->getOpPrestCiestim() + $this->getOpPrestCeestim()));
    }

    /**
     * Returns the margin actually achieved
     *
     * @return float|bool : False if lack of information
     */
    public function getOpPrestMargeReelle()
    {
        if ($this->getOpPrestCoutsValides()) {
            $iTotalCost = $this->getOpPrestCireel() + $this->getOpPrestCereel();
            return $this->getOpPrestMreel() - ($this->getOpPrestQreel() * $iTotalCost);
        } else {
            // Actual costs have not yet been validated
            return false;
        }
    }

    /**
     * Retrieves the label in the language defined for the operation
     *
     * @param int $iLanguageId
     * @return string
     */
    public function getOpPrestLibelleDevisTranslated($iLanguageId = null)
    {
        $sText = '';

        if (! isset($iLanguageId)) {
            $iLanguageId = $this->getOperations()->getOpDevisLang();
        }

        switch ($iLanguageId) {
            case RLanguages::LANG_ENG:
                // If the wording has been modified with respect to the referential, it must be taken into account
                if ($this->getOpPrestLibelleDevis() != $this->getOpPrestLibelle()) {
                    $sText = $this->getOpPrestLibelleDevis();
                } else {
                    // We'll look for the translation in the repository
                    $sText = $this->getRPrestations()->getRPLibelleEn();
                }
                break;
        }
        return trim($sText) ? $sText : $this->getOpPrestLibelleDevis();
    }

    /**
     * Retrieves the description in the language defined for the operation
     * If a custom description is assigned to the service, then it will be displayed, otherwise the default description is retrieved.
     *
     * @param string $sLangName
     * @return string
     */
    public function getOpPrestDescriptionTranslated($sLangName = null)
    {

        $sLangName = trim($sLangName);

        // Recovery of the personalized description of the service
        $sServiceDescription = trim($this->getOpPrestDescription());
        if (empty($sServiceDescription)) {
            switch ($sLangName) {
                case RLanguages::LANG_ENG:
                    // Recovery of the default description of the service in English
                    $sServiceDescription = trim($this->getRPrestations()->getRPDescriptionEn());
                    break;
                default:
                    // By default the retrieved description of the service is in French language
                    $sServiceDescription = trim($this->getRPrestations()->getRPDescriptionFr());
                    break;
            }
        }

        return $sServiceDescription;
    }

    /**
     * @param PropelPDO $oConnection
     */
    public function delete(PropelPDO $oConnection = null)
    {

        if ($this->_validateIsModifiable()) {
            if (1 === OperationPrestationsQuery::create()->filterByOpId($this->getOpId())->filterByOpRPrestId($this->getOpRPrestId())->count()) {
                // Applying these rules only when it concerns the last service of the same kind
                if ($this->getRPrestations()->getRPIsMandatory()) {
                    $this->addValidationFailed('Cette prestation ne peut être supprimée, elle est necéssaire au déroulement de l\'opération');
                    return false;
                }

                // Checking if the service is not mandatory in the template associated to the current mecanics of the operation
                if ($this->checkIfServiceIsMandatoryInTheCurrentTemplate()) {
                    $this->addValidationFailed('Cette prestation est indispensable pour ce type d\'opération');
                    return false;
                }
            }

            // Deleting the cost history of the service first in order to be able to delete the service
            HistoCoutsQuery::create()->filterByOpPrestId($this->getOpPrestId())->delete();

            parent::delete($oConnection);

            // Reordering services
            $oConnection = $this->getConnection();
            $oConnection->exec("
                UPDATE operation_prestations
				SET op_prest_order=op_prest_order-1
				WHERE op_prest_order > '" . $this->getOpPrestOrder() . "'
				AND op_prest_rubri_id = '" . $this->getOpPrestRubriId() . "'
            ");
            return true;
        } else {
            return false;
        }
    }

    /**
     * Updating the position of the service within a wage type
     * @param int $iNewNumero
     */
    public function updatePosition($iNewNumero)
    {

        if ($this->_validateIsModifiable()) {
            $iOldNumero = $this->getOpPrestOrder();
            $this->setOpPrestOrder(0);
            $this->save();

            $oConnection = $this->getConnection();
            if ($iOldNumero > $iNewNumero) {
                $sSqlQuery = "update operation_prestations
					set op_prest_order=op_prest_order+1
					where op_prest_order between '" . $iNewNumero . "' and '" . $iOldNumero . "'
						and op_prest_rubri_id='" . $this->getOpPrestRubriId() . "' ORDER BY op_prest_order DESC";
                $oConnection->exec($sSqlQuery);
            }
            if ($iOldNumero < $iNewNumero) {
                $sSqlQuery = "update operation_prestations
					set op_prest_order=op_prest_order-1
					where op_prest_order between '" . $iOldNumero . "' and '" . $iNewNumero . "'
					and op_prest_rubri_id='" . $this->getOpPrestRubriId() . "'";
                $oConnection->exec($sSqlQuery);
            }

            $this->setOpPrestOrder($iNewNumero);
            $this->save();
            return true;
        } else {
            return false;
        }
    }

    /**
     * Reimbursement or non-refundable service
     *
     * @return boolean
     */
    public function isRemboursement()
    {
        return (preg_match('/^467/', $this->getOpPrestCodeComptable()) == 1);
    }

    /**
     * Manually modifiable realized quantity?
     */
    public function isOpPrestQreelManualyUpdatable()
    {
        return $this->getRPrestations()->getRPValidationId() != RPTypeValidation::ACHAT;
    }

    /**
     * Change in Reference Service
     *
     * @param int $iReferencePrestationId
     */
    public function replaceByServiceReferential($iReferencePrestationId)
    {
        $this->getOperations()->replacePrestationFromReferentiel($iReferencePrestationId, $this->getOpPrestRubriId(), true, $this);
    }

    /**
     * @param string|NULL $sLanguage
     * @return \OperationPrestations
     * @throws \InvalidArgumentException
     */
    public function translate($sLanguage = null)
    {

        if (isset($sLanguage) && ! is_string($sLanguage)) {
            throw new \InvalidArgumentException('Argument "$sLanguage" expects a string, "' . (is_object($sLanguage) ? get_class($sLanguage) : gettype($sLanguage)) . '" given');
        }

        switch ($sLanguage) {
            case RLanguages::LANG_ENG:
                $this->setOpPrestDescription(trim($this->getRPrestations()->getRPDescriptionEn()));
                break;
            case RLanguages::LANG_FRA:
            default:
                $this->setOpPrestDescription(trim($this->getRPrestations()->getRPDescriptionFr()));
                break;
        }

        return $this;
    }

    /**
     * Back-up without any automatic processing
     */
    public function saveSimple()
    {
        parent::save();
    }

    /**
     * @param PropelPDO $oConnection
     */
    public function save(PropelPDO $oConnection = null)
    {

        $aModifiedColumns = $this->getModifiedColumns();


        if ($this->isNew()) {
            // Incrementing the order number in the section
            $this->setOpPrestOrder(OperationPrestationsQuery::create()->filterByOpPrestRubriId($this->getOpPrestRubriId())->count() + 1);
            $this->_majOpPrestMestim();
            $this->_majOpPrestMreel();
        } else {
            // Specific processes
            foreach ($this->modifiedColumns as $sModifiedColumn) {
                switch ($sModifiedColumn) {
                    case 'operation_prestations.op_prest_ciestim':
                    case 'operation_prestations.op_prest_ceestim':
                        // The person who filled in the last estimated costs is recorded
                        $this->setOpUserCoutsEstim(Zend_Auth::getInstance()->getIdentity()->getUserId());
                        break;
                }
            }
        }

        // Check if the service can be validated automatically
        if ($this->getOperations()->getOpStatusId() === \Operations::STATUS_ACCEPTE) {
            $oRPrestations = RPrestationsQuery::create()->findPk($this->getOpRPrestId());
            if ($oRPrestations instanceof RPrestations) {
                if ($oRPrestations->getRPValidationId() == RPTypeValidation::AUTOMATIQUE) {
                    $this->setOpPrestCoutsValides(1);
                    $this->setOpPrestCireel($oRPrestations->getRPCoutInterne());
                    $this->setOpPrestCereel($oRPrestations->getRPCoutExterne());
                }
            }
        }

        if (in_array('operation_prestations.op_prest_is_mandatory', $this->modifiedColumns)) {
            $this->_triggerUpdateOpPrestIsMandatoryValue();
        }

        parent::save($oConnection);

        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                case 'operation_prestations.op_prest_ciestim':
                    $this->_triggerHistoCouts(RCoutsNature::ESTIM_INT, $this->getOpPrestCiestim());
                    break;
                case 'operation_prestations.op_prest_ceestim':
                    $this->_triggerHistoCouts(RCoutsNature::ESTIM_EXT, $this->getOpPrestCeestim());
                    break;
                case 'operation_prestations.op_prest_cireel':
                    $this->_triggerHistoCouts(RCoutsNature::REEL_INT, $this->getOpPrestCireel());
                    break;
                case 'operation_prestations.op_prest_cereel':
                    $this->_triggerHistoCouts(RCoutsNature::REEL_EXT, $this->getOpPrestCereel());
                    break;
            }
        }
    }

    /**
     * Checking if the current service is indicated as mandatory
     *
     * @return boolean
     */
    public function checkIfServiceIsMandatoryInTheCurrentTemplate()
    {
        // Retrieving the template used on operation creation
        $iTemplateId = $this->getOperations()->getOperationOstTplId();
        return (boolean) ROperationTypeSubTplPrestationQuery::create()->select('OstTplPrestationIsMandatory')->filterByOstTplId($iTemplateId)->filterByRPrestationId($this->getOpRPrestId())->findOne();
    }

    /**
     *  This function makes it possible to historize the user who performed the validation of costs through the cost validation interface, the current date will also be historized.
     *
     * @return OperationPrestations
     */
    public function historiseCostUpdaterUserAndCostValidationDate()
    {

        $this->setCostUpdaterUser(Phoenix_Auth_User::getInstance()->getUserId());
        $this->setCostValidationDate('now');
        return $this;
    }

    /**
     * Returns true if the accounting code starts with 70, which indicates that the service is of CA Type
     *
     * @return boolean
     */
    public function isCaTypeService()
    {
        return strpos(trim($this->getOpPrestCodeComptable()), '70') === 0;
    }

    /**
     * Prevalidates a manual/automatic validation type service
     *
     * @param array $aServicesList
     * @return boolean
     */
    public function prevalidateManualServiceCostValidation(array $aServicesList)
    {
        $oTranslator = $this->getZendTranslate();
        $bServicesAreValid = true;
        $sOperationServiceReference = '';


        foreach ($aServicesList as $sServiceId) {
            if (! (($oOperationService = OperationPrestationsQuery::create()->findPk($sServiceId)) instanceof \OperationPrestations)) {
                $this->addValidationFailed(sprintf($oTranslator->translate('La prestation "%s" n\'existe pas dans la table operation_prestations') . '.', $sServiceId));
                $bServicesAreValid = false;
                continue;
            }

            if (! (($oOperation = OperationsQuery::create()->findPk($oOperationService->getOpId())) instanceof \Operations)) {
                $this->addValidationFailed(sprintf($oTranslator->translate('L\'indentifiant de l\'opération "%s" associé à la prestation "%s" n\'existe pas dans la table operations') . '.', $oOperationService->getOpId(), $sServiceId));
                $bServicesAreValid = false;
                continue;
            }

            if (false === $oOperationService->isModifiable()) {
                $this->addValidationFailed(sprintf($oTranslator->translate('La préstation "%s" n\'est pas modifiable, l\'opération doit être en status en cours, acceptée ou soldée') . '.', $sServiceId));
                $bServicesAreValid = false;
                continue;
            }

            if ($oOperation->getOpStatusId() == Operations::STATUS_SOLDE && ! Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::VALIDATION_COUTS_OP_SOLDE)) {
                $this->addValidationFailed(sprintf($oTranslator->translate('L\'identifiant de l\'opération "%s" associé à la prestation "%s" est en statut soldé, vous n\'êtes plus autorisé à valider ses coûts, Veuillez contacter la DAF') . '.', $oOperationService->getOpId(), $sServiceId));
                $bServicesAreValid = false;
                continue;
            }

            // Retrieving service reference number
            $sOperationServiceReference = ! empty($sOperationServiceReference) ? $sOperationServiceReference : $oOperationService->getOpRPrestId();

            if ($oOperationService->getOpRPrestId() != $sOperationServiceReference) {
                $this->addValidationFailed(sprintf($oTranslator->translate('Le numéro de référence de la préstation "%s" n\'est pas identique à celui de la pemière prestation "%s"') . '.', $oOperationService->getOpRPrestId(), $sOperationServiceReference));
                $bServicesAreValid = false;
                continue;
            }
        }

        return $bServicesAreValid;
    }

    /**
     * Prevalidates a purchase validation type service
     *
     * @param  string $sServiceId
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function prevalidatePurchaseServiceCostValidation($sServiceId)
    {

        if (! is_string($sServiceId)) {
            throw new \InvalidArgumentException('Argument $sServiceId expects a string "' . gettype($sServiceId) . '" given');
        }

        $oTranslator = $this->getZendTranslate();

        if (! (($oOperationService = OperationPrestationsQuery::create()->findPk($sServiceId)) instanceof \OperationPrestations)) {
            $this->addValidationFailed(sprintf($oTranslator->translate('La prestation "%s" n\'existe pas dans la table operation_prestations') . '.', $sServiceId));
            return false;
        }

        if (! (($oOperation = OperationsQuery::create()->findPk($oOperationService->getOpId())) instanceof \Operations)) {
            $this->addValidationFailed(sprintf($oTranslator->translate('L\'indentifiant de l\'opération "%s" associé à la prestation "%s" n\'existe pas dans la table operations') . '.', $oOperationService->getOpId(), $sServiceId));
            return false;
        }

        if (false === $oOperationService->isModifiable()) {
            $this->addValidationFailed(sprintf($oTranslator->translate('La préstation "%s" n\'est pas modifiable, l\'opération doit être en status en cours, acceptée ou soldée') . '.', $sServiceId));
            return false;
        }

        if ($oOperation->getOpStatusId() == Operations::STATUS_SOLDE && ! Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::VALIDATION_COUTS_OP_SOLDE)) {
            $this->addValidationFailed(sprintf($oTranslator->translate('L\'identifiant de l\'opération "%s" associé à la prestation "%s" est en statut soldé, vous n\'êtes plus autorisé à valider ses coûts, Veuillez contacter la DAF') . '.', $oOperationService->getOpId(), $sServiceId));
            return false;
        }

        return true;
    }

    public function getAlreadyChargedData()
    {
        return FacturesPrestationsQuery::create()->getAlreadyChargedDataForOperationService($this);
    }

    /**
     * Retrieve an instance of Zend Translate
     *
     * @return \Zend_Translate
     * @throws \LogicExcpetion
     */
    public function getZendTranslate()
    {
        if (Zend_Registry::isRegistered('Zend_Translate')) {
            return Zend_Registry::get('Zend_Translate');
        }

        throw new \LogicExcpetion('undefined Zend Translate object');
    }
}
