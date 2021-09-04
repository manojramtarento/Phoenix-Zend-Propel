<?php

class Phoenix_Operation_Prestations_Service_PrestationsService
{

    /**
     *
     * @param integer $iOperationRewardId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getOperationRewardCountriesList($iOperationRewardId)
    {
        if (! is_integer($iOperationRewardId)) {
            throw new \InvalidArgumentException('Argument "$iOperationRewardId" expects an integer, "' . (is_object($iOperationRewardId) ? get_class($iOperationRewardId) : gettype($iOperationRewardId)) . '" given');
        }

        return OperationPrimesQuery::create()->getRewardsCountriesNamesByOperationRewardId($iOperationRewardId);
    }

    /**
     *
     * @param integer $iOperationRewardId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getOperationRewardCountriesSelectListData($iOperationRewardId)
    {
        if (! is_integer($iOperationRewardId)) {
            throw new \InvalidArgumentException('Argument "$iOperationRewardId" expects an integer,"' . (is_object($iOperationRewardId) ? get_class($iOperationRewardId) : gettype($iOperationRewardId)) . '" given');
        }

        $oOperationReward = $this->getRewardInstanceByRewardId($iOperationRewardId);
        return OperationPrimesQuery::create()->getCountriesListHydratedWithOperationRewardsCountries($iOperationRewardId, (int) $oOperationReward->getOpId());
    }

    /**
     * @param \OperationPrimes $oOperationReward
     * @param array $aCountries
     * @throws \InvalidArgumentException
     */
    public function updateOperationRewardsCountries(\OperationPrimes $oOperationReward, array $aCountries)
    {
        // Check if reward has not been created in Gedelog and / or Arthur
        if ($oOperationReward->isExternalSynchronized()) {
            $oOperationReward->addValidationFailed($this->getZendTranslate()->translate('operation_reward_validation_failure_already_synchronized_to_change_field'));
            return $oOperationReward;
        }

        $iOperationRewardId = $oOperationReward->getOpPrimeId();
        LnkOperationPrimeRCountriesQuery::create()->filterByLnkOperationPrimeRCountryOperationPrimeId($iOperationRewardId)->delete();

        foreach ($aCountries as $iCountryId) {
            $oLnkOperationPrimeRCountry = new LnkOperationPrimeRCountries();
            $oLnkOperationPrimeRCountry
                ->setLnkOperationPrimeRCountryOperationPrimeId($iOperationRewardId)
                ->setLnkOperationPrimeRCountryRcountryId($iCountryId)
                ->setLnkOperationPrimeRCountryIsCountryLinked(1)
                ->save();
        }

        // Checking if reward currency needs to be reseted
        if (! $this->checkIfCurrencyHasValidCountrySelected($oOperationReward, $aCountries)) {
            $oOperationReward->setOperationPrimeCurrencyId(null)
                ->save();
        }
        return $oOperationReward;
    }

    /**
     *
     * @param integer $iOperationRewardId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getOperationRewardCurrenciesSelectListData($iOperationRewardId)
    {
        if (! is_integer($iOperationRewardId)) {
            throw new \InvalidArgumentException('Argument "$iOperationRewardId" expects an integer,"' . (is_object($iOperationRewardId) ? get_class($iOperationRewardId) : gettype($iOperationRewardId)) . '" given');
        }
        return OperationPrimesQuery::create()->getCurrenciesListHydratedWithOperationRewardsCurrencies($iOperationRewardId);
    }

    /**
     *
     * @param integer $iOperationId
     * @throws \InvalidArgumentException
     */
    public function getCurrenciesListHydratedWithOperationCountriesCurrencies($iOperationId)
    {
        if (! is_integer($iOperationId)) {
            throw new \InvalidArgumentException('Argument "$iOperationId" expects an integer, "' . (is_object($iOperationId) ? get_class($iOperationId) : gettype($iOperationId)) . '" given');
        }
        return OperationPrimesQuery::create()->getCurrenciesListHydratedWithOperationCountriesCurrencies($iOperationId);
    }

    /**
     *
     * @param integer $iOperationRewardId
     * @return \OperationPrimes
     * @throws \InvalidArgumentException
     */
    public function getRewardInstanceByRewardId($iOperationRewardId)
    {
        if (! is_integer($iOperationRewardId)) {
            throw new \InvalidArgumentException('Argument "$iOperationRewardId" expects an integer, "' . (is_object($iOperationRewardId) ? get_class($iOperationRewardId) : gettype($iOperationRewardId)) . '" given');
        }

        return OperationPrimesQuery::create()->findPk($iOperationRewardId);
    }

    /**
     *
     * @param \OperationPrimes $oReward
     * @param array $aCountries
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function checkIfCurrencyHasValidCountrySelected($oReward, array $aCountries)
    {
        // Getting countries by currency id
        $iOperationRewardCurrencyId = $oReward->getOperationPrimeCurrencyId();
        if (! empty($iOperationRewardCurrencyId)) {
            $aCountriesHavingCurrency = RCountriesQuery::create()
                ->select('RCountryId')
                ->filterByRCountryRCurrencyId($iOperationRewardCurrencyId)
                ->find()
                ->toArray();
            return count(array_intersect($aCountriesHavingCurrency, $aCountries)) > 0;
        }
        return false;
    }

    /**
     *
     * @param integer $iOperationId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getOperationCountriesSelectListData($iOperationId)
    {
        if (! is_integer($iOperationId)) {
            throw new \InvalidArgumentException('Argument "$iOperationId" expects an integer, "' . (is_object($iOperationId) ? get_class($iOperationId) : gettype($iOperationId)) . '" given');
        }
        return OperationsQuery::create()->getOperationCountriesSelectListData($iOperationId);
    }

    /**
     *
     * @param integer $iOperationId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getOperationCurrenciesSelectListData($iOperationId)
    {
        if (! is_integer($iOperationId)) {
            throw new \InvalidArgumentException('Argument "$iOperationId" expects an integer, "' . (is_object($iOperationId) ? get_class($iOperationId) : gettype($iOperationId)) . '" given');
        }
        return OperationsQuery::create()->getOperationCurrenciesSelectListData($iOperationId);
    }

    /**
     *
     * @param array $aParameters
     * @return array
     */
    public function addOperationReward(array $aParameters)
    {
        $oOperationReward = new \OperationPrimes();

        $oOperationReward->fromArray($aParameters, BasePeer::TYPE_FIELDNAME);
        $aCountries = (! empty($aParameters['operation_reward_countries'])) ? $aParameters['operation_reward_countries'] : array();
        if (! empty($aParameters['operation_reward_countries'])) {
            $oOperationReward->checkThatCurrencyIsValidForTheGivenCountries($aParameters['operation_reward_countries']);
        }

        if ($oOperationReward->validate()) {
            $oOperationReward->save();
            foreach ($aCountries as $iCountryId) {
                $oLnkOperationPrimeRCountries = new LnkOperationPrimeRCountries();
                $oLnkOperationPrimeRCountries
                    ->setLnkOperationPrimeRCountryOperationPrimeId($oOperationReward->getOpPrimeId())
                    ->setLnkOperationPrimeRCountryRcountryId($iCountryId)
                    ->setLnkOperationPrimeRCountryIsCountryLinked(1)
                    ->save();
            }
            return $oOperationReward;
        } else {
            return $oOperationReward->getValidationFailures();
        }
    }

    /**
     * @param \OperationPrimes $oOperationReward
     * @return string|null
     */
    public function pushOperationRewardToGedelog(\OperationPrimes $oOperationReward) : ? string
    {
        // Reward is not a physical reward
        if ($oOperationReward->getOpPrimeIsVirtual()) {
            return null;
        }
        // Reward send mode is not a transporter
        if ($oOperationReward->getOperationPrimeRRewardExpeditionModeId() !== \RRewardExpeditionModes::R_REWARD_EXPEDITON_MODE_TRANSPORTER_ID) {
            return null;
        }

        // Reward has no defined transporter
        if (! $oOperationReward->getOperationPrimeRRewardTransporterId()) {
            return null;
        }
        
        // Operation reward does not have been push to Gedelog
        if (! $oOperationReward->getOperations()->isPushedToGedelog()) {
            return null;
        }

        // Reward already have a Gedelog id
        if ($oOperationReward->getGdlArtId()) {
            return null;
        }

        $oExternalConnectionGedelog = Phoenix_ExternalConnection_Gedelog::getInstance();

        // Reward has been pushed to gedelog
        if ($oExternalConnectionGedelog->addArticle($oOperationReward->getOperations(), $oOperationReward)) {
            return 'message_real_reward_pushed_to_gedelog_contact_logistic_service';
        }
        return 'message_real_reward_not_pushed_to_gedelog_contact_logistic_service';
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
