<?php

/**
 * Skeleton subclass for representing a row from the 'r_activity_kpi' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RActivityKpi extends BaseRActivityKpi
{

    const KPI_ACTIVITY_DIGITAL = 1;

    /**
     * Retrieve Attached OperationOptions Packages
     *
     * @return \PropelObjectCollection
     */
    public function getRelatedOperationOptionsPackages()
    {
        return ROperationOptionsQuery::create()->filterByROperationOptionRActivityKpiId($this->getRActivityKpiId())->filterByROpOptionParent(null)->orderByROpOptionOrder()->find();
    }

    /**
     * Counts Attached OperationOptions Packages
     *
     * @return integer
     */
    public function countRelatedOperationOptionsPackages()
    {
        return ROperationOptionsQuery::create()->filterByROperationOptionRActivityKpiId($this->getRActivityKpiId())->filterByROpOptionParent(null)->filterByActif(1)->orderByROpOptionOrder()->count();
    }

    /**
     * Detach all options from the current activity kpi
     *
     * @return array validation Failures
     */
    public function detachFromAllAttachedOperationsOptions()
    {
        // Detach all options from the current activity kpi
        $aActivityRelatedOperationOptionsPackages = $this->getRelatedOperationOptionsPackages();
        foreach ($aActivityRelatedOperationOptionsPackages as $oOptionPackage) {
            $oOptionPackage->setROperationOptionRActivityKpiId(null);
            if (!$oOptionPackage->validate()) {
                return $oOptionPackage->getValidationFailures();
            }
            $oOptionPackage->save();
        }
        return array();
    }

    /**
     * Retrieve all options of indexed by their order the current activity kpi
     *
     * @return array
     */
    public function getAllAttachedOperationsOptionsAndTheirOrder()
    {
        $aActivityRelatedOperationOptionsPackages = $this->getRelatedOperationOptionsPackages();
        $aAllAttachedOperationsOptionsAndTheirOrder = array();
        foreach ($aActivityRelatedOperationOptionsPackages as $oOptionPackage) {
            $aAllAttachedOperationsOptionsAndTheirOrder[$oOptionPackage->getROpOptionId()] = $oOptionPackage->getROpOptionOrder();
        }
        return $aAllAttachedOperationsOptionsAndTheirOrder;
    }

    /**
     * Returns an indexed array of options related to the current kpi activity with their path to root option
     *
     * @return array
     */
    public function getActivityKpiRelatedOperationOptionsAncestors()
    {
        return RActivityKpiQuery::create()->getActivityKpiRelatedOperationOptionsAncestors($this->getRActivityKpiId());
    }

    /**
     * Returns an indexed array of detached options with their path to root options
     *
     * @return array
     */
    public static function getDetachedOperationOptionsAncestors()
    {
        return ROperationOptions::getOperationOptionsAncestorsByOptionsCollection(ROperationOptionsQuery::create()->retrieveDetachedOperationOptions());
    }
}

// RActivityKpi
