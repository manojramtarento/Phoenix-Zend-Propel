<?php

/**
 * This class has been made as a service to be used by the controller Roptionsdevis
 * located in the administration module
 *
 * This class is used to retrieve options data per activies kpis
 */
class Phoenix_Administration_QuotationOptions_Service_QuotationOptionsService
{

    /**
     * @return array
     */
    public function retrieveActivitiesKpisData()
    {
        $aActivitiesKpis = RActivityKpiQuery::create()->find();

        $aActivitiesKpisData = array();
        $aActivityRelatedOperationOptionsPackages = array();
        $aActivityData = array();

        foreach ($aActivitiesKpis as $oActivity) {
            $aActivityRelatedOperationOptionsPackages = $oActivity->getRelatedOperationOptionsPackages();
            $aActivityData['options_packages_ids'] = array();
            foreach ($aActivityRelatedOperationOptionsPackages as $oOptionPackage) {
                $aActivityData['options_packages_ids'][] = $oOptionPackage->getROpOptionId();
            }
            $aActivityData['r_activity_kpi_libelle'] = $oActivity->getRActivityKpiLibelle();
            $aActivityData['r_activity_kpi_id'] = $oActivity->getRActivityKpiId();
            $aActivityData['related_operation_options_packages'] = $aActivityRelatedOperationOptionsPackages;
            $aActivitiesKpisData[] = $aActivityData;
            $aActivityData = array();
        }

        return $aActivitiesKpisData;
    }

    /**
     * @return \PropelObjectCollection
     */
    public function retrieveDetachedOperationOptions()
    {
        return ROperationOptionsQuery::create()->retrieveDetachedOperationOptions();
    }

    /**
     * @return \PropelObjectCollection
     */
    public function retrieveTheNumberOfActiveLinkedServicesByOperationOption()
    {
        return ROperationOptionsTplQuery::create()->getNbLinkedPrestationsPerOption();
    }

    /**
     * Update operations options order
     *
     * @param  array $aData
     * @return array validation error
     * @throws \LogicException
     */
    public function updateOperationsOptionsOrder(array $aData)
    {
        foreach ($aData as $iOptionId => $sOptionOrder) {
            $oROperationOption = ROperationOptionsQuery::create()->findOneByROpOptionId($iOptionId);
            if (!$oROperationOption instanceof \ROperationOptions) {
                throw new \LogicException('Invalid ROpOptionId : "' . $iOptionId . '"');
            }
            $oROperationOption->setROpOptionOrder((int) $sOptionOrder);
            if (!$oROperationOption->validate()) {
                return $oROperationOption->getValidationFailures();
            }
            $oROperationOption->save();
        }
        return array();
    }

    /**
     * Update attached Options to the given activity kpi
     *
     * @param  array $aData
     * @return array validations errors
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function updateAttachedOptionsToActivity(array $aData)
    {
        if (!isset($aData['r_activity_kpi_id'])) {
            throw new \InvalidArgumentException('Key "r_activity_kpi_id" does not exists for given array "$aData" : ' . print_r($aData, true));
        }
        if (!isset($aData['r_activity_kpi_libelle'])) {
            throw new \InvalidArgumentException('Key "r_activity_kpi_libelle" does not exists for given array "$aData" : ' . print_r($aData, true));
        }
        if (isset($aData['attachedOptions']) && !is_array($aData['attachedOptions'])) {
            throw new \InvalidArgumentException('Argument "$aData[\'attachedOptions\']" expects an array, "' . (is_object($aData['attachedOptions']) ? get_class($aData['attachedOptions']) : gettype($aData['attachedOptions'])) . '" given');
        }

        // Retrive Activity Kpi to modify
        $oRActivityKpi = RActivityKpiQuery::create()->findOneByRActivityKpiId($aData['r_activity_kpi_id']);

        if (!$oRActivityKpi instanceof \RActivityKpi) {
            throw new \LogicException('No Valid RActivityKpi could be found for the given r_activity_kpi_id : "' . $aData['r_activity_kpi_id'] . '"');
        }

        $aAllAttachedOperationsOptionsAndTheirOrders = $oRActivityKpi->getAllAttachedOperationsOptionsAndTheirOrder();

        // Detach all options from the current activity kpi
        if ($aValidationErrors = $oRActivityKpi->detachFromAllAttachedOperationsOptions()) {
            return $aValidationErrors;
        }

        $iOptionIndex = 0;

        // Order by Option order
        asort($aAllAttachedOperationsOptionsAndTheirOrders);

        // Retrieve alredy attached options
        $aOldOptions = isset($aData['attachedOptions']) ? array_intersect(array_keys($aAllAttachedOperationsOptionsAndTheirOrders), $aData['attachedOptions']) : array();

        // Retrieve new options to be attached
        $aNewAddedOptions = isset($aData['attachedOptions']) ? array_diff($aData['attachedOptions'], array_keys($aAllAttachedOperationsOptionsAndTheirOrders)) : array();

        // Save the alredy exist options with their new order
        foreach ($aOldOptions as $iOption) {
            $oROperationOption = ROperationOptionsQuery::create()->findOneByROpOptionId($iOption);
            $oROperationOption->setROperationOptionRActivityKpiId((int) $oRActivityKpi->getRActivityKpiId());
            $oROperationOption->setROpOptionOrder(++$iOptionIndex);
            if (!$oROperationOption->validate()) {
                return $oROperationOption->getValidationFailures();
            }
            $oROperationOption->save();
        }

        // Attaching new options to the activity kpi
        if ($aNewAddedOptions) {
            $aROperationOptions = ROperationOptionsQuery::create()->findByROpOptionId($aNewAddedOptions);
            foreach ($aROperationOptions as $oROperationOption) {
                $oROperationOption->setROperationOptionRActivityKpiId((int) $oRActivityKpi->getRActivityKpiId());
                $oROperationOption->setROpOptionOrder(++$iOptionIndex);
                if (!$oROperationOption->validate()) {
                    return $oROperationOption->getValidationFailures();
                }
                $oROperationOption->save();
            }
        }

        // Update activity kpi label
        $oRActivityKpi->setRActivityKpiLibelle($aData['r_activity_kpi_libelle']);

        if (!$oRActivityKpi->validate()) {
            return $oRActivityKpi->getValidationFailures();
        }

        // Save the Activity Kpi
        $oRActivityKpi->save();

        return array();
    }
}
