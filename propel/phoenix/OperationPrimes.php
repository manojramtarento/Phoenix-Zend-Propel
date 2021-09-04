<?php

class OperationPrimes extends BaseOperationPrimes
{

    /**
     * Validates if the reward is modifiable
     *
     * @return boolean
     */
    protected function _validateIsModifiable()
    {
        $aModifiedColumns = $this->getModifiedColumns();
        $oTranslate = $this->getZendTranslate();

        $iOpStatusId = $this->getOperations()->getOpStatusId();
        $bOperationOngoingOrAccepted = in_array($iOpStatusId, array(Operations::STATUS_EN_COURS, Operations::STATUS_ACCEPTE));

        // Updates on operation which are not ongoing or accepted are forbidden
        if (! $bOperationOngoingOrAccepted) {
            $this->addValidationFailed($oTranslate->translate('message_operation_reward_validation_failure_operation_must_in_accepted_status'));
            return false;
        }

        $bIsNewOrOngoing = $this->isNew() || $iOpStatusId === Operations::STATUS_EN_COURS;
        
        if (! $bIsNewOrOngoing) {
             // Check if reward has been created in Gedelog and / or Arthur
            if ($this->isExternalSynchronized()) {
                // Only label for virtual rewards can be modified
                if (! (
                    count($aModifiedColumns) === 1
                    && current($aModifiedColumns) === 'operation_primes.op_prime_libelle'
                    && $this->getOpPrimeIsVirtual()
                )) {
                    $this->addValidationFailed($oTranslate->translate('operation_reward_validation_failure_already_synchronized_to_change_field'), 'operation_primes.op_prime_libelle');
                    return false;
                }
            }
        }

        foreach ($aModifiedColumns as $sColumnName) {
            switch ($sColumnName) {
                case 'operation_primes.operation_prime_fixed_amount':
                    if ($this->getOperationPrimeRRewardTypeId() !== RRewardTypes::REWARD_TYPE_FIXED_AMOUNT) {
                        $this->addValidationFailed($oTranslate->translate('operation_reward_validation_failure_invalid_reward_type_to_change_reward_fixed_amount_field'), $sColumnName);
                    }
                    break;
                case 'operation_primes.operation_prime_maximum_amount':
                    if ($this->getOperationPrimeRRewardTypeId() !== RRewardTypes::REWARD_TYPE_VARIABLE_AMOUNT) {
                        $this->addValidationFailed($oTranslate->translate('operation_reward_validation_failure_invalid_reward_type_to_change_reward_max_amount_field'), $sColumnName);
                    }
                    break;
                case 'operation_primes.operation_prime_product_price_pourcentage':
                    if ($this->getOperationPrimeRRewardTypeId() !== RRewardTypes::REWARD_TYPE_VARIABLE_AMOUNT) {
                        $this->addValidationFailed($oTranslate->translate('operation_reward_validation_failure_invalid_reward_type_to_change_product_price_pourcentage_field'), $sColumnName);
                    }
                    break;
                case 'operation_primes.operation_prime_r_reward_expedition_mode_id':
                    $iRewardExpreditionModeId = $this->getOperationPrimeRRewardExpeditionModeId();
                    if (! empty($iRewardExpreditionModeId) && $this->getOperationPrimeRRewardTypeId() !== RRewardTypes::REWARD_TYPE_PHYSIC) {
                        $this->addValidationFailed($oTranslate->translate('operation_reward_validation_failure_invalid_reward_type_to_change_reward_expedition_mode_field'), $sColumnName);
                    }
                    break;
                case 'operation_primes.operation_prime_r_reward_transporter_id':
                    $iRewardTransporterId = $this->getOperationPrimeRRewardTransporterId();
                    if (! empty($iRewardTransporterId) && $this->getOperationPrimeRRewardTypeId() !== RRewardTypes::REWARD_TYPE_PHYSIC) {
                        $this->addValidationFailed($oTranslate->translate('operation_reward_validation_failure_invalid_reward_type_to_change_reward_transporter_field'), $sColumnName);
                    }
                    break;
                case 'operation_primes.operation_prime_currency_id':
                    $iRewardCurrencyId = $this->getOperationPrimeCurrencyId();
                    if (! empty($iRewardCurrencyId) && $this->getOperationPrimeRRewardTypeId() === RRewardTypes::REWARD_TYPE_PHYSIC) {
                        $this->addValidationFailed($oTranslate->translate('operation_reward_validation_failure_invalid_reward_type_to_change_reward_currency_field'), $sColumnName);
                    }
                    break;
            }
        }
    }

    /**
     * Check if the reward is synchronized with external connections
     *
     * @return bool
     */
    public function isExternalSynchronized() : bool
    {
        // Synchronized in gedelog
        if ($this->getGdlArtId()) {
            return true;
        }

        // Synchronized in Arthur
        if (Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EXTERNAL_CONNECTION_ARTHUR)
            && Phoenix_ExternalConnection_Arthur::getInstance()->rewardDataExists($this->getOperations()->getOpId(), $this->getOpPrimeNumero())
        ) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    protected function _validateIsOperationPrimeProductPricePourcentageTypeAndValueAreValid()
    {

        $iProductPricePourcentage = $this->getOperationPrimeProductPricePourcentage();
        $bIsModified = in_array('operation_primes.operation_prime_product_price_pourcentage', $this->getModifiedColumns()) && $iProductPricePourcentage;

        if ($bIsModified && is_integer($iProductPricePourcentage) && $iProductPricePourcentage > 100) {
            $this->addValidationFailed($this->getZendTranslate()->translate('message_operation_prime_product_price_pourcentage_value_overflow'));
            return false;
        }
        return true;
    }

    /**
     * Checks if the set currency is valid for the selected countries
     *
     * @return bool
     */
    public function checkThatCurrencyIsValidForTheGivenCountries(array $aCountries)
    {
        if (in_array('operation_primes.operation_prime_currency_id', $this->getModifiedColumns())
            && count(array_intersect(RCountriesQuery::create()->getCountriesByRCurrencyId($this->getOperationPrimeCurrencyId()), $aCountries)) === 0) {
            $this->addValidationFailed('Il n\'est pas possible de choisir une devise dont le pays dont il est valide n\'est pas renseigné dans la liste des pays de la prime', 'operation_primes.operation_prime_currency_id');
        }

        return true;
    }

    /**
     * Check if reward is deletable
     *
     * @return bool
     */
    protected function _checkIfDelatable()
    {

        $iAttachedScenarii = OperationScenariiQuery::create()->filterByOpRPrimeId($this->getOpPrimeId())->count();
        $iAttachedServices = OperationPrestationsQuery::create()->filterByOpPrestPrimeId($this->getOpPrimeId())->count();
        $iAttachedCountries = LnkOperationPrimeRCountriesQuery::create()->filterByLnkOperationPrimeRCountryOperationPrimeId($this->getOpPrimeId())->count();

        if ($iAttachedScenarii) {
            $this->addValidationFailed('La prime ne peut pas être supprimée, car elle est associée à ' . $iAttachedScenarii . ' scénario(s).');
            return false;
        }

        if ($iAttachedServices) {
            $this->addValidationFailed('La prime ne peut pas être supprimée, car elle est associée à ' . $iAttachedServices . ' prestation(s).');
            return false;
        }

        if ($iAttachedCountries) {
            $this->addValidationFailed('La prime ne peut pas être supprimée, car elle est associée à ' . $iAttachedCountries . ' pays.');
            return false;
        }

        if ($this->isNew() || in_array($this->getOperations()->getOpStatusId(), array(Operations::STATUS_EN_COURS))) {
            return true;
        }
        $this->addValidationFailed('L\'opération doit avoir le statut en cours pour supprimer la prime');
        return false;
    }

    /**
     * @return \OperationPrimes
     */
    protected function triggerResetRewardUnreleventFields() : OperationPrimes
    {
        switch ($this->getOperationPrimeRRewardTypeId()) {
            case RRewardTypes::REWARD_TYPE_PHYSIC:
                $this->setOperationPrimeFixedAmount(null);
                $this->setOperationPrimeMaximumAmount(null);
                $this->setOperationPrimeProductPricePourcentage(null);
                $this->setOperationPrimeCurrencyId(null);
                break;
            case RRewardTypes::REWARD_TYPE_FIXED_AMOUNT:
                $this->setOperationPrimeMaximumAmount(null);
                $this->setOperationPrimeProductPricePourcentage(null);
                $this->setOperationPrimeRRewardExpeditionModeId(null);
                $this->setOperationPrimeRRewardTransporterId(null);
                break;
            case RRewardTypes::REWARD_TYPE_VARIABLE_AMOUNT:
                $this->setOperationPrimeFixedAmount(null);
                $this->setOperationPrimeRRewardExpeditionModeId(null);
                $this->setOperationPrimeRRewardTransporterId(null);
                break;
            default:
                $this->setOperationPrimeFixedAmount(null);
                $this->setOperationPrimeMaximumAmount(null);
                $this->setOperationPrimeProductPricePourcentage(null);
                $this->setOperationPrimeRRewardExpeditionModeId(null);
                $this->setOperationPrimeRRewardTransporterId(null);
                $this->setOperationPrimeCurrencyId(null);
                break;
        }
        return $this;
    }

    public function delete(PropelPDO $oConnection = null)
    {

        if ($this->_checkIfDelatable()) {
            if (! $this->isDeleted()) {
                $oCopy = $this;
                parent::delete($oConnection);

                // Fetch reward number
                $oConnection = $this->getConnection();
                $sSql = "update operation_primes
				set op_prime_numero=op_prime_numero-1
				where op_prime_numero > '" . $this->getOpPrimeNumero() . "'
					AND op_id='" . $this->getOpId() . "'";

                $oConnection->exec($sSql);

                // Dereferencing reward from services
                OperationPrestationsQuery::create()->filterByOpPrestPrimeId($this->getOpPrimeId())
                    ->filterByOpId($this->getOpId())
                    ->update(array('OpPrestPrimeId' => null));

                // Dereferencing reward from from scenario
                OperationScenariiQuery::create()->filterByOpRPrimeId($this->getOpPrimeId())
                    ->filterByOpId($this->getOpId())
                    ->update(array('OpRPrimeId' => null));

                return true;
            }
        } else {
            return false;
        }
    }

    /**
     * Retrieve following reward depends on the order
     */
    public function getNextOperationPrime()
    {
        return OperationPrimesQuery::create()->findByOpIdAndOpPrimeNumero($this->getOpId(), $this->getOpPrimeNumero() + 1);
    }

    /**
     * Retrieve predictive quantity
     * @return int
     */
    public function getQtePrev() : int
    {
        return $this->getConnection()->query('
            SELECT SUM(ROUND((op_scenario_volume * op_scenario_pcent)/100,0))
            FROM operation_scenarii
            WHERE op_r_prime_id = ' . $this->getOpPrimeId())->fetchColumn() ? : 0;
    }

    /**
     * Send reward to gedelog
     *
     * @return bool
     */
    public function checkAndPushToGedelog()
    {
        // Making the following process also availble for "soldé" status
        if ($this->getOpPrimeIsVirtual() == false && (in_array($this->getOperations()->getOpStatusId(), array(Operations::STATUS_ACCEPTE, Operations::STATUS_SOLDE))) && $this->getOperations()->isPushedToGedelog()) {
            if ($this->getGdlArtId()) {
                $this->addValidationFailed("La prime a déjà été créée dans Gedelog");
                return false;
            }

            try {
                $oExternalConnectionGedelog = Phoenix_ExternalConnection_Gedelog::getInstance();
                $oExternalConnectionGedelog->addArticle($this->getOperations(), $this);
            } catch (Exception $oException) {
                $this->addValidationFailed($oException->getMessage());
                return false;
            }
        } else {
            return true;
        }
    }

    /**
     * @param PropelPDO $oConnection
     */
    public function save(PropelPDO $oConnection = null)
    {

        if ($this->isNew()) {
            // Increment operation number
            $iOperationNumber = BaseOperationPrimesQuery::create()->filterByOpId($this->getOpId())->count();
            $iOperationNumber++;
            $this->setOpPrimeNumero($iOperationNumber);
        }

        $aModifiedColumns = $this->getModifiedColumns();

        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                case 'operation_primes.operation_prime_r_reward_type_id':
                    $this->triggerResetRewardUnreleventFields();
                    break;
            }
        }

        parent::save($oConnection);
    }

    /**
     * Checks if the current reward is virtual
     *
     * @return bool
     */
    public function getOpPrimeIsVirtual()
    {
        return in_array($this->getOperationPrimeRRewardTypeId(), array(RRewardTypes::REWARD_TYPE_FIXED_AMOUNT, RRewardTypes::REWARD_TYPE_VARIABLE_AMOUNT));
    }

    /**
     * Get Zend Translate
     *
     * @return \Zend_Registry
     * @throws \LogicExcpetion
     */
    public function getZendTranslate()
    {
        if (Zend_Registry::isRegistered('Zend_Translate')) {
            return Zend_Registry::get('Zend_Translate');
        }

        throw new \LogicException('Zend Translate object is undefined');
    }
}
