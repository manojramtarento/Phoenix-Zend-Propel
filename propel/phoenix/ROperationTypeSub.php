<?php

/**
 * Skeleton subclass for representing a row from the 'r_operation_type_sub' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationTypeSub extends BaseROperationTypeSub
{
    const TYPE_WEB = 9;
    /**
     * Attribue l'ordre suivant de manière logique
     */
    public function setAutoOrd()
    {
        // récupère l'ordre le plus grand
        $oROperationSubType = ROperationTypeSubQuery::create()
                        ->filterByOstOtId($this->getOstOtId())
                        ->orderByOrd(Criteria::DESC)->findOne();

        if ($oROperationSubType instanceof ROperationTypeSub) {
            // prend la valeur suivante
            $ord = ($oROperationSubType->getOrd() + 1);
        } else {
            $ord = 0;
        }

        $this->setOrd($ord);
    }
}

// ROperationTypeSub
