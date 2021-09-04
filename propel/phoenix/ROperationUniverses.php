<?php

/**
 * Skeleton subclass for representing a row from the 'r_operation_universes' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationUniverses extends BaseROperationUniverses
{

    const DEFAULT_R_OPERATION_UNIVERSE = 1;

    /**
     * Auto apply an order to the current object, according to the existing universes
     */
    public function autoSetUniverseOrder()
    {
        // Retrieving the most recent operation universe
        $oROperationRecentUniverse = ROperationUniversesQuery::create()
                        ->orderByROperationUniverseOrder(Criteria::DESC)->findOne();

        if ($oROperationRecentUniverse instanceof ROperationUniverses) {
            $this->setROperationUniverseOrder($oROperationRecentUniverse->getROperationUniverseOrder() + 1);
        } else {
            $this->setROperationUniverseOrder(0);
        }
    }
}

// ROperationUniverses
