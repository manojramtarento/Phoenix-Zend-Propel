<?php

class OperationScenarii extends BaseOperationScenarii
{

    private $op_scenario_numero_back = null;
    private $_aRefences = null;
    private $_aParents = null;

    /**
     * @return bool
     */
    public function checkMajQteForGedelog()
    {
        return self::recursCheckMajQteForGedelog($this);
    }

    /**
     * @param OperationScenarii $oOperationScenarii
     * @return bool
     */
    public static function recursCheckMajQteForGedelog(OperationScenarii $oOperationScenarii)
    {
        $sSelectQuery = "SELECT count(*)
					FROM operation_scenarii
                    INNER JOIN operation_primes ON operation_scenarii.op_r_prime_id=operation_primes.op_prime_id
					WHERE op_scenario_id='" . $oOperationScenarii->getOpScenarioId() . "' and operation_prime_r_reward_type_id != " . RRewardTypes::REWARD_TYPE_PHYSIC;

        if ($oOperationScenarii->getConnection()->query($sSelectQuery)->fetchColumn() > 0) {
            return false;
        }

        $aChildren = $oOperationScenarii->getChildren();

        $aResult = array();
        foreach ($aChildren as $oOperationScenarii) {
            $aResult[] = self::recursCheckMajQteForGedelog($oOperationScenarii);
        }

        $bAssert = true;
        foreach ($aResult as $bResult) {
            $bAssert = $bAssert && $bResult;
        }
        return $bAssert;
    }

    protected function _validateIsModifiable()
    {
        if (in_array($this->getOperations()->getOpStatusId(), array(Operations::STATUS_EN_COURS, Operations::STATUS_ACCEPTE, Operations::STATUS_SOLDE))) {
            return true;
        } else {
            $this->addValidationFailed('L\'opération doit avoir le statut en cours, acceptée ou soldée');
            return false;
        }
    }

    /**
     * Checks whether the scenario gives rise to a circular reference
     *
     * @return boolean
     */
    protected function _checkIsNotCyclique()
    {
        function recurs(OperationScenarii $oOperationScenarii, &$aListChildrenIds)
        {

            $aParents = $oOperationScenarii->getParents();

            // If the object has already been referenced, there is a cycle.
            foreach ($aParents as $oParent) {
                if (in_array($oParent->getOpScenarioId(), $aListChildrenIds)) {
                    return false;
                }
            }

            // We go through the child scenarios
            $aResult = array();
            foreach ($aParents as $oParent) {
                $aListChildrenIdsTmp = $aListChildrenIds;
                $aListChildrenIdsTmp[] = $oParent->getOpScenarioId();
                $aResult[] = recurs($oParent, $aListChildrenIdsTmp);
            }
            // Recursive construction of the assertion "not cyclical"
            $bAssert = true;
            foreach ($aResult as $result) {
                $bAssert = $bAssert && $result;
            }
            return $bAssert;
        }
        $aListIds = array();

        // Error escalation for the validation validation validation step
        if (recurs($this, $aListIds) == false) {
            $this->addValidationFailed('Référence circulaire');
        }
    }

    /**
     * Returns the child scenarios
     *
     * @return array
     */
    public function getChildren()
    {
        $this->getConnection()->useDebug();
        $aChildren = OperationScenariiQuery::create()->filterByOpId($this->getOpId())
                ->useOperationScenariiParentsRelatedByOpsNumeroQuery()->filterByOpId($this->getOpId())->filterByOpsParentNumero($this->getOpScenarioNumero())->endUse()
                ->find();
        return $aChildren;
    }

    /**
     * Returns the parent scenarios
     *
     * @return array
     */
    public function getParents()
    {
        $this->getConnection()->useDebug();

        if (!isset($this->_aParents)) {
            if (is_array($this->_aRefences)) {
                foreach ($this->getParentReferences() as $sReference) {
                    $this->_aParents[] = OperationScenariiQuery::create()->filterByOpScenarioNumero($sReference)
                            ->filterByOpId($this->getOpId())
                            ->findOne();
                }
            } else {
                $this->_aParents = OperationScenariiQuery::create()->filterByOpId($this->getOpId())
                        ->useOperationScenariiParentsRelatedByOpsParentNumeroQuery()->filterByOpId($this->getOpId())->filterByOpsNumero($this->getOpScenarioNumero())->endUse()
                        ->find();

                $this->_aRefences = array();
                foreach ($this->_aParents as $oParent) {
                    $this->_aRefences[] = $oParent->getOpScenarioNumero();
                }
            }
        }

        return $this->_aParents;
    }

    /**
     * Parent references (numbers)
     * @return array
     */
    public function getParentReferences()
    {

        if (!isset($this->_aRefences)) {
            $this->getParents();
        }

        return $this->_aRefences;
    }

    /**
     * Sets the quantity if no reference to a scenario
     *
     * @param int $iOpScenarioVolume
     * @param bool $bCheck whether or not to check on scenario dependency
     */
    public function setOpScenarioVolume($iOpScenarioVolume, $bCheck = true)
    {
        parent::setOpScenarioVolume($iOpScenarioVolume);
        if ($bCheck) {
            if ((count($this->getParentReferences()) > 0)) {
                $this->addValidationFailed("Il n'est pas possible de modifier le volume d'un scénario se référant à un autre scénario");
            }
        }
    }

    /**
     * Updating parent scenario references
     */
    protected function updateParentReferences()
    {
        OperationScenariiParentsQuery::create()->filterByOpId($this->getOpId())
                ->filterByOpsNumero($this->getOpScenarioNumero())
                ->delete();

        // Added parent scenario references
        foreach ($this->getParentReferences() as $sReference) {
            $oOperationScenariiParents = new OperationScenariiParents();
            $oOperationScenariiParents->setOpId($this->getOpId())
                    ->setOpsNumero($this->getOpScenarioNumero())
                    ->setOpsParentNumero($sReference)
                    ->save();
        }
    }

    /**
     * Scenario reference update (s), the scenario volume is updated according to scenario references and mathematical expression.
     *
     * @param string|int $sOpScenarioReference
     */
    public function setOpScenarioReference($sOpScenarioReference, $bCheck = true)
    {

        $sOpScenarioReference = str_replace(' ', '', $sOpScenarioReference);
        parent::setOpScenarioReference($sOpScenarioReference);

        // Allowed character verification
        $sValidationPattern = '/^[0-9-+*()\/]*$/';
        if (preg_match($sValidationPattern, $sOpScenarioReference) == 0) {
            $this->addValidationFailed('Expression mal formatée', 'oepration_scenarii.op_scenario_reference');
            return false;
        } elseif ($sOpScenarioReference) {
            $sNumberPattern = '/[0-9]+/';
            $iNumberMatches = preg_match_all($sNumberPattern, $sOpScenarioReference, $aNumberMatches);

            $sOpeningPattern = '/\(/';
            $iOpeningMatches = preg_match_all($sOpeningPattern, $sOpScenarioReference);

            $sClosingPattern = '/\)/';
            $iClosingMatches = preg_match_all($sClosingPattern, $sOpScenarioReference);

            if ($iOpeningMatches != $iClosingMatches) {
                $this->addValidationFailed('Le nombre d\'accolades ouvrantes et fermantes ne correspond pas', 'operation_scenarii.op_scenario_reference');
                return false;
            } elseif ($iNumberMatches == 0) {
                $this->addValidationFailed('Il manque des nombres', 'operation_scenarii.op_scenario_reference');
                return false;
            } else {
                $this->_aRefences = $aNumberMatches[0];
                $iNbFound = OperationScenariiQuery::create()
                        ->filterByOpId($this->getOpId())
                        ->filterByOpScenarioNumero($this->_aRefences)
                        ->count();
                if ($iNbFound != count($this->_aRefences)) {
                    $this->addValidationFailed('Certaines références n\'existent pas', 'operation_scenarii.op_scenario_reference');
                    return false;
                }
            }

            // Check the presence of a loop in the tree
            if ($bCheck) {
                $this->_checkIsNotCyclique();
            }
        }
    }

    /**
     * Calculation of total (% of volume)
     *
     * @return int
     */
    public function getOpScenarioTotal()
    {
        return round(($this->getOpScenarioVolume() * $this->getOpScenarioPcent()) / 100);
    }

    public function setOpScenarioTotal($total)
    {
        $iOpScenarioVolume = $this->getOpScenarioVolume();
        if (!$iOpScenarioVolume) {
            $this->addValidationFailed("La quantité doit être renseignée pour ajuster le taux");
            return false;
        } else {
            $Pcent = ($total * 100) / $iOpScenarioVolume;
            $this->setOpScenarioPcent($Pcent);
        }
    }

    /**
     * Volume calculation based on references
     */
    protected function updateVolume()
    {
        $sReference = $this->getOpScenarioReference();
        if ($sReference) {
            $pattern = '/[0-9]+/';
            $result = preg_match_all($pattern, $sReference, $matches);
            $sReference = preg_replace($pattern, '#${0}#', $sReference);

            $aParents = $this->getParents();

            $aReplace = array();
            foreach ($aParents as $oParent) {
                $aReplace['#' . $oParent->getOpScenarioNumero() . '#'] = $oParent->getOpScenarioTotal();
            }

            $sReference = strtr($sReference, $aReplace);

            eval('$iVolume=' . $sReference . ';');
            $this->setOpScenarioVolume($iVolume, false);
        }
    }

    /**
     * Update the children's scenario volume
     */
    protected function updateChildrenVolume()
    {
        $aChildren = $this->getChildren();
        $iVolume = $this->getOpScenarioTotal();

        foreach ($aChildren as $oChild) {
            $oChild->updateVolume();
            $oChild->save();
        }
    }

    /**
     * Update quantities for benefits associated with the scenario
     */
    protected function updatePrestations()
    {
        $iVolume = $this->getOpScenarioTotal();
        $aPrestation = $this->getOperationPrestationss();
        foreach ($aPrestation as $oPrestation) {
            $oPrestation->setOpPrestQestim($iVolume * $oPrestation->getOpPrestCoef(), false);
            $oPrestation->save();
        }
    }

    /**
     * Update the rewards in benefits
     */
    protected function updatePrestationsPrime()
    {
        $iRewardId = $this->getOpRPrimeId();
        $aPrestation = $this->getOperationPrestationss();
        foreach ($aPrestation as $oPrestation) {
            $oPrestation->setOpPrestPrimeId($iRewardId);
            $oPrestation->save();
        }
    }

    /**
     * Updating of scenario sequence number, scenario references and backup
     */
    protected function updateDependantReferences()
    {

        $this->getConnection()->useDebug();

        // Updating parent References
        OperationScenariiParentsQuery::create()->filterByOpId($this->getOpId())->filterByOpsNumero($this->op_scenario_numero_back)
                ->update(array('OpsNumero' => $this->getOpScenarioNumero()));

        // Updating References in the Related Scenario
        $aOperationScenarii = $this->getConnection()->query("select operation_scenarii.*
				from operation_scenarii join operation_scenarii_parents on operation_scenarii.op_scenario_numero=operation_scenarii_parents.ops_numero and operation_scenarii_parents.op_id=" . $this->getOpId() . " and operation_scenarii.op_id=" . $this->getOpId() . "
				where  ops_parent_numero=" . $this->op_scenario_numero_back)->fetchAll(PDO::FETCH_ASSOC);

        foreach ($aOperationScenarii as $oOperationScenarii) {
            $sReference = $oOperationScenarii['op_scenario_reference'];
            $sReference = preg_replace('/[0-9]+/', '#${0}#', $sReference);
            $aReplace['#' . $this->op_scenario_numero_back . '#'] = $this->getOpScenarioNumero();
            $sReference = strtr($sReference, $aReplace);
            $sReference = str_replace('#', '', $sReference);
            OperationScenariiQuery::create()->filterByPrimaryKey($oOperationScenarii['op_scenario_id'])
                    ->update(array('OpScenarioReference' => $sReference));
        }

        OperationScenariiParentsQuery::create()->filterByOpId($this->getOpId())
                ->filterByOpsParentNumero($this->op_scenario_numero_back)
                ->update(array('OpsParentNumero' => $this->getOpScenarioNumero()));
        $this->_aParents = null;
        $this->_aRefences = null;

        $this->op_scenario_numero_back = null;
    }

    /**
     * Retrieves the following scenario in the sort order
     */
    public function getNextOperationScenario()
    {
        return OperationScenariiQuery::create()->findByOpIdAndOpScenarioNumero($this->getOpId(), $this->getOpScenarioNumero() + 1);
    }

    /**
     * Retrieves the previous scenario in the sort order
     */
    public function getPrecOperationScenario()
    {
        return OperationScenariiQuery::create()->findByOpIdAndOpScenarioNumero($this->getOpId(), $this->getOpScenarioNumero() - 1);
    }

    /**
     * Unwind the scenario number and Update references of the dependent scenarios (recursive depilation)
     */
    public function depile()
    {

        function recursDepile(OperationScenarii $oOperationScenarii)
        {
            $oOperationScenariiNext = $oOperationScenarii->getNextOperationScenario();
            $oOperationScenarii->setOpScenarioNumero($oOperationScenarii->getOpScenarioNumero() - 1);
            $oOperationScenarii->save();
            if ($oOperationScenariiNext != null) {
                recursDepile($oOperationScenariiNext);
            }
        }
        recursDepile($this);
    }

    /**
     * Changing the position of a scenario
     *
     * @param int $iNewNumber
     * @return boolean
     */
    public function updatePosition($iNewNumber)
    {
        if ($this->_validateIsModifiable()) {

            function recursEmpile(OperationScenarii $oOperationScenarii, $stopPosition)
            {
                if ($oOperationScenarii->getOpScenarioNumero() != ($stopPosition - 1)) {
                    $oOperationScenariiPrec = $oOperationScenarii->getPrecOperationScenario();
                    $oOperationScenarii->setOpScenarioNumero($oOperationScenarii->getOpScenarioNumero() + 1);
                    $oOperationScenarii->save();
                    if ($oOperationScenariiPrec != null) {
                        recursEmpile($oOperationScenariiPrec, $stopPosition);
                    }
                }
            }

            function recursDepile(OperationScenarii $oOperationScenarii, $stopPosition)
            {
                if ($oOperationScenarii->getOpScenarioNumero() != $stopPosition + 1) {
                    $oOperationScenariiNext = $oOperationScenarii->getNextOperationScenario();
                    $oOperationScenarii->setOpScenarioNumero($oOperationScenarii->getOpScenarioNumero() - 1);
                    $oOperationScenarii->save();
                    if ($oOperationScenariiNext != null) {
                        recursDepile($oOperationScenariiNext, $stopPosition);
                    }
                }
            }
            $iOldNumber = $this->getOpScenarioNumero();

            // Temporary update of the number for unstacking
            $this->setOpScenarioNumero(0);
            $this->save();

            if ($iOldNumber > $iNewNumber) {
                $lastOperationToEmpile = OperationScenariiQuery::create()
                        ->findByOpIdAndOpScenarioNumero($this->getOpId(), $iOldNumber - 1);
                recursEmpile($lastOperationToEmpile, $iNewNumber);
            }
            if ($iOldNumber < $iNewNumber) {
                $oNextOperation = OperationScenariiQuery::create()
                        ->findByOpIdAndOpScenarioNumero($this->getOpId(), $iOldNumber + 1);
                if ($oNextOperation != null) {
                    recursDepile($oNextOperation, $iNewNumber);
                }
            }

            $this->setOpScenarioNumero($iNewNumber);
            $this->save();
            return true;
        } else {
            return false;
        }
    }

    /**
     * Removes a reference to a parent scenario and recalculates volumes
     *
     * @param OperationScenarii $oParent
     */
    public function removeParentReference(OperationScenarii $oParent)
    {
        // Removal of the reference to the parent in the link table
        $this->getConnection()->exec("delete from operation_scenarii_parents where op_id=" . $this->getOpId() . "
			and ops_numero=" . $this->getOpScenarioNumero() . " and ops_parent_numero=" . $oParent->getOpScenarioNumero());

        // Update of the mathematical expression
        $sOldReference = $this->getOpScenarioReference();
        $sNewReference = Phoenix_Utils_Scenario::removeNumeroInMathExpr($oParent->getOpScenarioNumero(), $sOldReference);


        $this->_aParents = null;
        $this->_aRefences = null;

        $this->setOpScenarioReference($sNewReference, false);
        $this->save();
    }

    /**
     * Retrieves the label in the language defined for the operation
     *
     * @param int $iLanguageId
     * @return string
     */
    public function getOpScenarioLibelleTranslated($iLanguageId = null)
    {
        $sText = '';

        if (!isset($iLanguageId)) {
            $iLanguageId = $this->getOperations()->getOpDevisLang();
        }

        $sText = trim($this->getOpScenarioLibelle());

        if (!$sText) {
            switch ($iLanguageId) {
                case RLanguages::LANG_ENG:
                    $sText = $this->getRScenarios()->getRScenarioLibelleEn();
                    break;
                case RLanguages::LANG_FRA:
                    $sText = $this->getRScenarios()->getRScenarioLibelle();
                    break;
            }
        }

        return $sText;
    }

    /**
     * Check if the scenario is mandatory through the template used on operation creation
     *
     * @return boolean
     */
    public function isMandatoryThroughtTpl()
    {
        return ROperationTypeSubTplScenarioQuery::create()->filterByRScenarioId($this->getOpRScenarioId())->filterByOstTplScenarioIsMandatory(1)
                        ->useROperationTypeSubTplQuery()->filterByOstTplId($this->getOperations()->getOperationOstTplId())->enduse()
                        ->count() > 0;
    }

    /**
     * Scenario deletion & setting volume to 0 for the associated services
     *
     * @param PropelPDO $oConnection
     * @return boolean
     */
    public function delete(PropelPDO $oConnection = null)
    {

        if ($this->_validateIsModifiable()) {
            // Disallowing scenario deletion if the scenario is linked to a service, in order to avoid foreign key violation
            $iAttachedServices = OperationPrestationsQuery::create()->filterByOpPrestScenaId($this->getOpScenarioId())->count();

            if ($iAttachedServices > 0) {
                $this->addValidationFailed($this->getZendTranslate()->translate('Le scénario ne peut pas être supprimé, car il est associé à') . ' ' . $iAttachedServices . ' ' . $this->getZendTranslate()->translate('prestation(s)'));
                return false;
            }

            // Disallowing deletion when the scenario is mandatory and if it's the last scenario if the same kind
            if ($this->isMandatoryThroughtTpl() && 1 === OperationScenariiQuery::create()->filterByOpId($this->getOpId())->filterByOpRScenarioId($this->getOpRScenarioId())->count()) {
                $this->addValidationFailed($this->getZendTranslate()->translate('Le scénario est indispensable pour ce type d\'opération'));
                return false;
            }


            $aChildren = $this->getChildren();
            $oCopy = $this;

            foreach ($aChildren as $oChild) {
                $oChild->removeParentReference($oCopy);
            }

            // Deleting the reference in the child-parent link table
            OperationScenariiParentsQuery::create()->filterByOpId($this->getOpId())
                    ->filterByOpsNumero($this->getOpScenarioNumero())
                    ->delete();

            parent::delete($oConnection);

            // Adjusting references order for the following scenarii
            $nextScenatio = $oCopy->getNextOperationScenario();
            if ($nextScenatio != null) {
                $nextScenatio->depile();
            }
            return true;
        } else {
            return false;
        }
    }

    public function setOpScenarioNumero($iOpScenarioNumero)
    {
        $this->op_scenario_numero_back = $this->getOpScenarioNumero();
        parent::setOpScenarioNumero($iOpScenarioNumero);
    }

    /**
     * @param PropelPDO $oConnection
     */
    public function save(PropelPDO $oConnection = null)
    {
        $aModifiedColumns = $this->modifiedColumns;
        $bIsNew = $this->isNew();

        if ($bIsNew) {
            // Number incrementation
            $iNbScenarios = BaseOperationScenariiQuery::create()->filterByOpId($this->getOpId())->count();
            $iNbScenarios++;
            $this->setOpScenarioNumero($iNbScenarios);
        }

        $bUpdateVolume = false;

        foreach ($aModifiedColumns as $modifiedColumn) {
            switch ($modifiedColumn) {
                case 'operation_scenarii.op_scenario_reference':
                    // Volume update according to references provided
                    if (!$bUpdateVolume) {
                        $this->updateVolume();
                        $bUpdateVolume = true;
                    }
                    break;
            }
        }


        parent::save($oConnection);

        $bUpdateChildrenVolume = false;
        $bUpdatePrestations = false;
        $bUpdateChildrenReference = false;
        foreach ($aModifiedColumns as $modifiedColumn) {
            switch ($modifiedColumn) {
                case 'operation_scenarii.op_scenario_pcent':
                case 'operation_scenarii.op_scenario_volume':
                    // Update of scenario-related services
                    if ($bUpdatePrestations == false) {
                        $this->updatePrestations();
                        $bUpdatePrestations = true;
                    }
                    if ($bUpdateChildrenVolume == false) {
                        // Updating the volume of children's scenarios
                        $this->updateChildrenVolume();
                        $bUpdateChildrenVolume = true;
                    }
                    break;
                case 'operation_scenarii.op_scenario_reference':
                    if ($bUpdatePrestations == false) {
                        $this->updatePrestations();
                        $bUpdatePrestations = true;
                    }
                    if ($bUpdateChildrenReference == false) {
                        $this->updateParentReferences();
                        // Updating the volume of children's scenarios
                        $this->updateChildrenVolume();
                        $bUpdateChildrenVolume = true;
                        $bUpdateChildrenReference = true;
                    }
                    break;
                case 'operation_scenarii.op_r_prime_id':
                    $this->updatePrestationsPrime();
                    break;
                case 'operation_scenarii.op_scenario_numero':
                    // Updating references for dependent scenarios
                    if (!$bIsNew) {
                        $this->updateDependantReferences();
                    }
                    break;
            }
        }
    }

    /**
     * Retrieve Zend Translate
     *
     * @return \Zend_Registry
     * @throws \LogicExcpetion
     */
    public function getZendTranslate()
    {
        if (Zend_Registry::isRegistered('Zend_Translate')) {
            return Zend_Registry::get('Zend_Translate');
        }

        throw new \LogicExcpetion('undefinded Zend Translate object');
    }
}
