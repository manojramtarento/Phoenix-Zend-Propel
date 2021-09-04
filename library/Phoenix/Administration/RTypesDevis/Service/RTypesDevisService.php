<?php

/**
 * This class has been made as a service to be used by the controller rtypesdevis
 * located in the administration module
 *
 * @author dev7
 */
class Phoenix_Administration_RTypesDevis_Service_RTypesDevisService
{

    /**
     * Indentifies a single template by a mecanic, a universe and a media
     *
     * @param  integer $iROperationMecanic
     * @param  integer $iROperationUniverse
     * @param  integer $iROperationMedia
     * @return array
     * @throws \InvalidArgumentException
     */
    public function identifyTemplateWithOneUniverseAndOneMedia($iROperationMecanic, $iROperationUniverse, $iROperationMedia)
    {
        if (!is_integer($iROperationMecanic)) {
            throw new \InvalidArgumentException('Argument "$iROperationMecanic" expects an integer, "' . (is_object($iROperationMecanic) ? get_class($iROperationMecanic) : gettype($iROperationMecanic)) . '" given');
        }

        if (!is_integer($iROperationUniverse)) {
            throw new \InvalidArgumentException('Argument "$iROperationUniverse" expects an integer"' . (is_object($iROperationUniverse) ? get_class($iROperationUniverse) : gettype($iROperationUniverse)) . '" given');
        }

        if (!is_integer($iROperationMedia)) {
            throw new \InvalidArgumentException('Argument "$iROperationMedia" expects an integer"' . (is_object($iROperationMedia) ? get_class($iROperationMedia) : gettype($iROperationMedia)) . '" given');
        }


        // We try to find a template by the given mecanic, universe and media
        if (($oRecord = LnkROperationTypeSubTemplateMediasUniversesQuery::create()->findOneRecordByMecanicUniverseAndMedia($iROperationMecanic, $iROperationUniverse, $iROperationMedia)) instanceof \LnkROperationTypeSubTemplateMediasUniverses) {
            return array('template' => $oRecord->getOerationTypeSubTemplate(), 'is_shared_template' => LnkROperationTypeSubTemplateMediasUniversesQuery::create()->countNumberOfRecordsLinkedByTplId($oRecord->getLnkROperationTypeSubTemplateMediaUniverseTplId()) > 1);
        }

        // If not found, we try to find a template by the given mecanic and universe
        if (($oRecord = LnkROperationTypeSubTemplateMediasUniversesQuery::create()->findOneRecordByMecanicUniverseAndMedia($iROperationMecanic, $iROperationUniverse)) instanceof \LnkROperationTypeSubTemplateMediasUniverses) {
            return array('template' => $oRecord->getOerationTypeSubTemplate(), 'is_shared_template' => true);
        }

        // If not found, we try to find a template by the given mecanic and media
        if (($oRecord = LnkROperationTypeSubTemplateMediasUniversesQuery::create()->findOneRecordByMecanicUniverseAndMedia($iROperationMecanic, null, $iROperationMedia)) instanceof \LnkROperationTypeSubTemplateMediasUniverses) {
            return array('template' => $oRecord->getOerationTypeSubTemplate(), 'is_shared_template' => true);
        }

        // If not found, we try to find a template which is valid for the given mecanic, the default universe and the default media
        if (($oRecord = LnkROperationTypeSubTemplateMediasUniversesQuery::create()->findOneRecordByMecanicUniverseAndMedia($iROperationMecanic, ROperationUniverses::DEFAULT_R_OPERATION_UNIVERSE, ROperationMedias::DEFAULT_R_OPERATION_MEDIA)) instanceof \LnkROperationTypeSubTemplateMediasUniverses) {
            return array('template' => $oRecord->getOerationTypeSubTemplate(), 'is_shared_template' => true);
        }

        // Otherwise, we suggest to create a new template
        return array('template' => null, 'is_shared_template' => false);
    }

    /**
     *
     * @param integer $iROperationMecanicId
     * @param array $aROperationUniverses
     * @param array $aROperationMedias
     * @return array
     * @throws \InvalidArgumentException
     */
    public function identifyTemplateWithMultipleUniverseAndMultipleMedia($iROperationMecanicId, array $aROperationUniverses, array $aROperationMedias)
    {
        if (!is_integer($iROperationMecanicId)) {
            throw new \InvalidArgumentException('Argument "$iROperationMecanicId" expects an integer, "' . (is_object($iROperationMecanicId) ? get_class($iROperationMecanicId) : gettype($iROperationMecanicId)) . '" given');
        }

        $oQuery = LnkROperationTypeSubTemplateMediasUniversesQuery::create();
        $oRecord = null;
        $iTemplateId = 0;
        foreach ($aROperationUniverses as $iROperationUniverseId) {
            foreach ($aROperationMedias as $iROperationMediaId) {
                if (($oRecord = $oQuery->findOneRecordByMecanicUniverseAndMedia($iROperationMecanicId, (int) $iROperationUniverseId, (int) $iROperationMediaId)) instanceof \LnkROperationTypeSubTemplateMediasUniverses) {
                    if (0 === $iTemplateId) {
                        $iTemplateId = $oRecord->getLnkROperationTypeSubTemplateMediaUniverseTplId();
                    } elseif ($iTemplateId !== $oRecord->getLnkROperationTypeSubTemplateMediaUniverseTplId()) {
                        // The template is not unique, the user must create a new template
                        return array('template' => null, 'is_shared_template' => false);
                    }
                } else {
                    // No template found, user must create a new template
                    return array('template' => null, 'is_shared_template' => false);
                }
            }
        }

        // The template has been found, checking now, if it's unique for the selection
        $bIsSharedTemplate = $oQuery->countNumberOfRecordsLinkedByTplId($oRecord->getLnkROperationTypeSubTemplateMediaUniverseTplId()) !== (count($aROperationUniverses) * count($aROperationMedias));

        // The template is unique, we load it
        return array('template' => $oRecord->getOerationTypeSubTemplate(), 'is_shared_template' => $bIsSharedTemplate);
    }

    /**
     * Validates and saves a template settings
     *
     * @param  integer $iROperationMecanic
     * @param  string $sTemplateName
     * @param  array $aROperationUniverses
     * @param  array $aROperationMedias
     * @return array
     * @throws \InvalidArgumentException
     */
    public function saveNewTemplateSettings($iROperationMecanic, $sTemplateName, array $aROperationUniverses, array $aROperationMedias)
    {
        if (!is_integer($iROperationMecanic)) {
            throw new \InvalidArgumentException('Argument "$iROperationMecanic" expects an integer, "' . (is_object($iROperationMecanic) ? get_class($iROperationMecanic) : gettype($iROperationMecanic)) . '" given');
        }

        if (!is_string($sTemplateName)) {
            throw new \InvalidArgumentException('Argument "$sTemplateName" expects a string, "' . (is_object($sTemplateName) ? get_class($sTemplateName) : gettype($sTemplateName)) . '" given');
        }

        $oQuery = LnkROperationTypeSubTemplateMediasUniversesQuery::create();

        // Saving template
        $oTemplate = new ROperationTypeSubTpl();
        $oTemplate->setOstTplLibelle($sTemplateName);
        if ($oTemplate->validate()) {
            $oTemplate->save();
        } else {
            return array('is_successful' => false, 'errors' => $oTemplate->getValidationFailures());
        }

        // Set French country by default
        $this->updateTemplateRelatedCountries($oTemplate->getOstTplId(), \RCountriesQuery::create()->select('RCountryId')->filterByRCountryCode(\RCountries::FRANCE_CODE)->find()->toArray());

        // Saving mecanic, medias, universes, template associations
        if (count($aROperationUniverses) === 1 && count($aROperationMedias) === 1) {
            $iROperationUniverseId = (int) current($aROperationUniverses);
            $iROperationMediaId = (int) current($aROperationMedias);
            $oQuery->deleteOneLnkROperationTypeSubTemplateMediasUniversesRecord($iROperationMecanic, $iROperationUniverseId, $iROperationMediaId);
            return $oQuery->saveOneLnkROperationTypeSubTemplateMediasUniversesRecord($iROperationMecanic, $oTemplate, $iROperationUniverseId, $iROperationMediaId);
        } else {
            foreach ($aROperationUniverses as $iROperationUniverseId) {
                foreach ($aROperationMedias as $iROperationMediaId) {
                    // Deleting records having the same mecanic, universe and media
                    $oQuery->deleteOneLnkROperationTypeSubTemplateMediasUniversesRecord($iROperationMecanic, (int) $iROperationUniverseId, (int) $iROperationMediaId);
                    $aResponse = $oQuery->saveOneLnkROperationTypeSubTemplateMediasUniversesRecord($iROperationMecanic, $oTemplate, (int) $iROperationUniverseId, (int) $iROperationMediaId);
                    if ($aResponse['is_successful'] === false) {
                        return $aResponse;
                    }
                }
            }


            return array('is_successful' => true);
        }
    }

    /**
     *
     * @param integer $iTemplateId
     * @return /PropelCollection
     * @throws \InvalidArgumentException
     */
    public function getTemplateCountries($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return RCountriesQuery::create()->getRelatedCountriesByTemplateId($iTemplateId);
    }

    /**
     *
     * @param integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getAllCountriesList($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }
        return RCountriesQuery::create()->getCountriesListHydratedWithTemplateCountries($iTemplateId);
    }

    /**
     *
     * @param integer $iTemplateId
     * @param array $aCountries
     * @return \Phoenix_Administration_RTypesDevis_Service_RTypesDevisService
     * @throws \InvalidArgumentException
     */
    public function updateTemplateRelatedCountries($iTemplateId, array $aCountries)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        $aOldCurrencies = ROperationTypeSubTplCurrenciesQuery::create()->getRelatedCurrenciesByTemplateIdAndByCountriesId($iTemplateId)->toArray();
        ROperationTypeSubTplCountriesQuery::create()->filterByROperationTypeSubTplCountryTplId($iTemplateId)->delete();

        foreach ($aCountries as $iCountryId) {
            $oROperationTypeSubTplCountry = new ROperationTypeSubTplCountries();
            $oROperationTypeSubTplCountry
                    ->setROperationTypeSubTplCountryTplId($iTemplateId)
                    ->setROperationTypeSubTplCountryRCountryId($iCountryId)
                    ->setROperationTypeSubTplCountryIsCountryLinked(1)
                    ->save();
        }


        // Updating related Cultures
        $this->updateTemplateRelatedCultures($iTemplateId, LnkRCountryRCulturesQuery::create()->getRelatedCulturesByCountriesId($aCountries)->toArray(), true);
        // Updating related Currencies
        $aActifCurrencies = RCountriesQuery::create()
                ->select('RCountryRCurrencyId')
                ->distinct()
                ->useRCurrenciesQuery('curr', 'INNER JOIN')
                ->filterByRcurrencyActif(1)
                ->enduse()
                ->filterByRCountryId($aCountries)
                ->find()
                ->toArray();
        $this->updateTemplateRelatedCurrencies($iTemplateId, $aActifCurrencies, $aOldCurrencies);
        return $this;
    }

    /**
     *
     * @param integer $iTemplateId
     * @return /PropelCollection
     * @throws \InvalidArgumentException
     */
    public function getTemplateCultures($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return RCulturesQuery::create()->getRelatedCulturesByTemplateId($iTemplateId);
    }

    /**
     *
     * @param integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getAllCulturesList($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }
        return RCulturesQuery::create()->getCulturesListHydratedWithTemplateCultures($iTemplateId);
    }

    /**
     *
     * @param type $iTemplateId
     * @param array $aCultures
     * @param boolean $bIsForwardedProcess
     * @return array
     * @throws \InvalidArgumentException
     */
    public function updateTemplateRelatedCultures($iTemplateId, array $aCultures, $bIsForwardedProcess = false)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        if (!is_bool($bIsForwardedProcess)) {
            throw new \InvalidArgumentException('Argument "$bIsForwardedProcess" expects a boolean, "' . (is_object($bIsForwardedProcess) ? get_class($bIsForwardedProcess) : gettype($bIsForwardedProcess)) . '" given');
        }

        $aErrors = $this->checkIfTemplateCulturesAreValid($iTemplateId, $aCultures);
        if (!$bIsForwardedProcess && ($aErrors)) {
            return $aErrors;
        } else {
            ROperationTypeSubTplCulturesQuery::create()->filterByROperationTypeSubTplCultureTplId($iTemplateId)->delete();
            foreach ($aCultures as $iCultureId) {
                $oROperationTypeSubTplCulture = new ROperationTypeSubTplCultures();
                $oROperationTypeSubTplCulture->setROperationTypeSubTplCultureTplId($iTemplateId)
                        ->setROperationTypeSubTplCultureRCultureId($iCultureId)
                        ->setROperationTypeSubTplCultureIsCultureLinked(1)
                        ->save();
            }
            return array();
        }
    }

    /**
     *
     * @param integer $iTemplateId
     * @param array $aCultures
     * @return array
     * @throws \InvalidArgumentException
     */
    protected function checkIfTemplateCulturesAreValid($iTemplateId, array $aCultures)
    {

        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        $oZendTranslate = $this->getZendTranslate();
        $aErrors = array();

        $aCulturesRelatedCountries = array_unique(LnkRCountryRCulturesQuery::create()->select('LnkRCountryRCultureRCountryId')->filterByLnkRCountryRCultureRCultureId($aCultures)->find()->toArray());
        $aCurrentCountries = ROperationTypeSubTplCountriesQuery::create()->select('ROperationTypeSubTplCountryRCountryId')->filterByROperationTypeSubTplCountryTplId($iTemplateId)->find()->toArray();

        // Checking if there are some missing cultures : for each country of the template, checking if at least one culture is selected

        $aMissingCultureCountries = array_diff($aCurrentCountries, $aCulturesRelatedCountries);
        if ($aMissingCultureCountries) {
            // Retrieving countries names
            $aMissingCountriesLabels = RCountriesQuery::create()->select('RCountryName')->filterByRCountryId($aMissingCultureCountries)->find()->toArray();
            $aErrors[] = $oZendTranslate->translate('cultures_update_validation_error_at_least_one_culture_must_be_select') . ' : <ul><li>' . implode('</li><li>', $aMissingCountriesLabels) . '</li></ul>';
        }

        $aMissingCountries = array_diff($aCulturesRelatedCountries, $aCurrentCountries);
        if ($aMissingCountries) {
            $aMissingCountriesLabels = RCountriesQuery::create()->select('RCountryName')->filterByRCountryId($aMissingCountries)->find()->toArray();
            $aErrors[] = $oZendTranslate->translate('cultures_update_validation_error_countries_are_missing') . ' : <ul><li>' . implode('</li><li>', $aMissingCountriesLabels) . '</li></ul>';
        }
        return $aErrors;
    }

    /**
     *
     * @param integer $iTemplateId
     * @return /PropelCollection
     * @throws \InvalidArgumentException
     */
    public function getTemplateLanguages($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return RLanguagesQuery::create()->getRelatedLanguagesByTemplateId($iTemplateId);
    }

    /**
     *
     * @param integer $iTemplateId
     * @return /PropelCollection
     * @throws \InvalidArgumentException
     */
    public function getTemplateCurrencies($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return ROperationTypeSubTplCurrenciesQuery::create()->getRelatedCurrenciesByTemplateId($iTemplateId);
    }

    /**
     *
     * @param integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getAllCurrenciesList($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }
        return RCurrenciesQuery::create()->getCurrenciesListHydratedWithTemplateCurrencies($iTemplateId);
    }

    /**
     *
     * @param integer $iTemplateId
     * @param array $aCurrencies
     * @param array $aOldCountryLinkedCurrencies
     * @return \Phoenix_Administration_RTypesDevis_Service_RTypesDevisService
     * @throws \InvalidArgumentException
     */
    public function updateTemplateRelatedCurrencies($iTemplateId, array $aCurrencies, array $aOldCountryLinkedCurrencies = array())
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        // this part is executed when the method is called following a previsous update of the template countries
        if ($aOldCountryLinkedCurrencies) {
            // We only delete the currencies associated to the current countries
            ROperationTypeSubTplCurrenciesQuery::create()->filterByROperationTypeSubTplCurrencyTplId($iTemplateId)->filterByROperationTypeSubTplCurrencyRCurrencyId($aOldCountryLinkedCurrencies)->delete();
        } else {
            ROperationTypeSubTplCurrenciesQuery::create()->filterByROperationTypeSubTplCurrencyTplId($iTemplateId)->delete();
        }

        foreach ($aCurrencies as $iCurrencyId) {
            if (ROperationTypeSubTplCurrenciesQuery::create()->filterByROperationTypeSubTplCurrencyTplId($iTemplateId)->filterByROperationTypeSubTplCurrencyRCurrencyId($iCurrencyId)->count() === 0) {
                $oROperationTypeSubTplCurrency = new ROperationTypeSubTplCurrencies();
                $oROperationTypeSubTplCurrency
                        ->setROperationTypeSubTplCurrencyTplId($iTemplateId)
                        ->setROperationTypeSubTplCurrencyRCurrencyId($iCurrencyId)
                        ->setROperationTypeSubTplCurrencyIsCurrencyLinked(1)
                        ->save();
            }
        }
        return $this;
    }

    /**
     * @param integer $iTemplateId
     * @return PropelObjectCollection
     * @throws \InvalidArgumentException
     */
    public function retrieveScenariosByTemplateId($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        return ROperationTypeSubTplScenarioQuery::create()->filterByOstTplId($iTemplateId)->orderByRScenarioNumero()->find();
    }

    /**
     * Validates a set of services by returning an array of validation errors relative to the activity of the services
     *
     * @param  array $aServices
     * @return array
     */
    public function getDisabledServices(array $aServices)
    {
        $aErrors = array();
        $oTranslate = $this->getZendTranslate();

        foreach ($aServices as $iServiceId) {
            if (($oService = RPrestationsQuery::create()->findPk($iServiceId)) instanceof \RPrestations) {
                if (!$oService->getActif()) {
                    $aErrors[] = sprintf($oTranslate->translate('inactif_supplied_service'), $iServiceId);
                }
            } else {
                $aErrors[] = sprintf($oTranslate->translate('invalid_supplied_service'), $iServiceId);
            }
        }

        return $aErrors;
    }

    /**
     * @param integer $iTemplateId
     * @return \PropelObjectCollection
     * @throws \InvalidArgumentException
     */
    public function getOprerationTemplateRewardsByTemplateId($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }
        return ROperationTypeSubTplPrimeQuery::create()->filterByOstTplId($iTemplateId)->orderByOstTplPrimeNumero()->find();
    }

    /**
     * @param integer $iTemplateId
     * @return \PropelObjectCollection
     * @throws \InvalidArgumentException
     */
    public function getOperationTemplateRubricsByTemplateId($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }
        return ROperationTypeSubTplRubriqueQuery::create()->filterByOstTplId($iTemplateId)->orderByOstTplRubriqueOrder()
                        ->useROperationTypeSubTplPrestationQuery(null, Criteria::LEFT_JOIN)->orderByOstTplPrestationOrder()->endUse()
                        ->with('ROperationTypeSubTplPrestation')->find();
    }

    /**
     * @param integer $iTemplateId
     * @return \PropelObjectCollection
     * @throws \InvalidArgumentException
     */
    public function getOperationTemplateMediasAndUniversesByTemplateId($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }
        return \LnkROperationTypeSubTemplateMediasUniversesQuery::create()->filterByLnkROperationTypeSubTemplateMediaUniverseTplId($iTemplateId)->find();
    }

    /**
     * @param integer $iTemplateId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getAllCombinationMediasAndUniversesList($iTemplateId)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        $aCombinationMediasAndUniversesList = $aSelectedMediasAndUniversesList = array();

        // Retrieve all medias
        $oROperationsMedias = \ROperationMediasQuery::create()->filterByROperationMediaActif(1)->orderByROperationMediaOrder(\Criteria::ASC)->find();
        // Retrieve all universes
        $oROperationUniverses = \ROperationUniversesQuery::create()->filterByROperationUniverseActif(1)->orderByROperationUniverseOrder(\Criteria::ASC)->find();

        // Consutruct the medias ans universes combinition
        foreach ($oROperationsMedias as $oROperationsMedia) {
            $sMediaLabel = $oROperationsMedia->getROperationMediaLabel();
            $iMediaId = $oROperationsMedia->getROperationMediaId();
            foreach ($oROperationUniverses as $oROperationUniverse) {
                $iUniverseId = $oROperationUniverse->getROperationUniverseId();
                $sUniverseLabel = $oROperationUniverse->getROperationUniverseLabel();

                $aCombinationMediasAndUniverse = array(
                    'ROperationMedia' => array(
                        'label' => $sMediaLabel,
                        'id' => $iMediaId,
                    ),
                    'ROperationUniverses' => array(
                        'label' => $sUniverseLabel,
                        'id' => $iUniverseId,
                    ),
                );

                // Check if media and universe combinition is selecteted in template
                $iCountTemplateMediaAndUniverse = \LnkROperationTypeSubTemplateMediasUniversesQuery::create()
                        ->filterByLnkROperationTypeSubTemplateMediaUniverseTplId($iTemplateId)
                        ->filterByLnkROperationTypeSubTemplateMediaUniverseUniverseId($iUniverseId)
                        ->filterByLnkROperationTypeSubTemplateMediaUniverseMediaId($iMediaId)
                        ->count();
                if ($iCountTemplateMediaAndUniverse) {
                    $aCombinationMediasAndUniverse['isSelected'] = true;
                    $aSelectedMediasAndUniversesList[] = $aCombinationMediasAndUniverse;
                } else {
                    $aCombinationMediasAndUniverse['isSelected'] = false;
                    $aCombinationMediasAndUniversesList[] = $aCombinationMediasAndUniverse;
                }
            }
        }

        return array_merge($aSelectedMediasAndUniversesList, $aCombinationMediasAndUniversesList);
    }

    /**
     * @param integer $iTemplateId
     * @param array $aTemplateUniversesAndMedias
     * @return \Phoenix_Administration_RTypesDevis_Service_RTypesDevisService
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function updateTemplateRelatedMediasAndUniverses($iTemplateId, array $aTemplateUniversesAndMedias)
    {
        if (!is_integer($iTemplateId)) {
            throw new \InvalidArgumentException('Argument "$iTemplateId" expects an integer, "' . (is_object($iTemplateId) ? get_class($iTemplateId) : gettype($iTemplateId)) . '" given');
        }

        $iTemplateOperationMecanicId = (int) \LnkROperationTypeSubTemplateMediasUniversesQuery::create()->select(array('lnkROperationTypeSubTemplateMediaUniverseOstId'))->findOneByLnkROperationTypeSubTemplateMediaUniverseTplId($iTemplateId);
        if (!$iTemplateOperationMecanicId) {
            throw new \LogicException('The operation mecanic of template "' . $iTemplateId . '" was not found');
        }

        $oTemplate = \ROperationTypeSubTplQuery::create()->findOneByOstTplId($iTemplateId);
        if (!$oTemplate instanceof \ROperationTypeSubTpl) {
            throw new \LogicException('The template "' . $iTemplateId . '" was not found');
        }

        // Delete existing combinitaion
        \LnkROperationTypeSubTemplateMediasUniversesQuery::create()->filterByLnkROperationTypeSubTemplateMediaUniverseTplId($iTemplateId)->delete();
        // Save new combinitation
        foreach ($aTemplateUniversesAndMedias as $aUniversesAndMedias) {
            $iMediaId = key($aUniversesAndMedias);
            if (!isset($aUniversesAndMedias[$iMediaId])) {
                throw new \LogicException('$aUniversesAndMedias[$iMediaId] undefined');
            }
            \LnkROperationTypeSubTemplateMediasUniversesQuery::create()->saveOneLnkROperationTypeSubTemplateMediasUniversesRecord($iTemplateOperationMecanicId, $oTemplate, (int) $aUniversesAndMedias[$iMediaId], (int) $iMediaId);
        }

        return $this;
    }

    /**
     * get Zend Translate
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
