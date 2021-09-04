<?php

/**
 * Skeleton subclass for representing a row from the 'r_operation_medias' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationMedias extends BaseROperationMedias
{

    const DEFAULT_R_OPERATION_MEDIA = 6;
    const R_OPERATION_MEDIA_WEB = 2;
    const R_OPERATION_MEDIA_WEB_AND_PAPER = 3;
    const R_OPERATION_MEDIA_SMS = 4;

    /**
     * Auto apply an order to the current object, according to the existing medias
     */
    public function autoSetMediaOrder()
    {
        // Retrieving the most recent operation media
        $oROperationRecentMedia = ROperationMediasQuery::create()
                        ->orderByROperationMediaOrder(Criteria::DESC)->findOne();

        if ($oROperationRecentMedia instanceof ROperationMedias) {
            $this->setROperationMediaOrder($oROperationRecentMedia->getROperationMediaOrder() + 1);
        } else {
            $this->setROperationMediaOrder(0);
        }
    }
}

// ROperationMedias
