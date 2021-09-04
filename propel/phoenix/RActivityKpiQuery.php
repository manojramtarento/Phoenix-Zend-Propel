<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_activity_kpi' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RActivityKpiQuery extends BaseRActivityKpiQuery
{

    /**
     * Returns an indexed array of options related to the given kpi activity with their path to root option
     *
     * @param  integer $iRActivityKpiId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getActivityKpiRelatedOperationOptionsAncestors($iRActivityKpiId)
    {

        if (!is_integer($iRActivityKpiId)) {
            throw new \InvalidArgumentException('Argument "$iRActivityKpiId" expects an integer , "' . (is_object($iRActivityKpiId) ? get_class($iRActivityKpiId) : gettype($iRActivityKpiId)) . '" given');
        }
        $oRootOperationOptions = ROperationOptionsQuery::create()->filterByROperationOptionRActivityKpiId($iRActivityKpiId)
                ->filterByROpOptionParent(null)
                ->orderByROpOptionOrder()
                ->find();

        return ROperationOptions::getOperationOptionsAncestorsByOptionsCollection($oRootOperationOptions);
    }
}

// RActivityKpiQuery
