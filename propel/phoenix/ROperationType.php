<?php



/**
 * Skeleton subclass for representing a row from the 'r_operation_type' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class ROperationType extends BaseROperationType
{
    
    const TYPE_ODR=1;
    const TYPE_PRIME=2;
    const TYPE_JEUX=3;
    const TYPE_FID_AND_STIM = 4;
    const TYPE_SOR = 11;
    
    
    /**
     * Attribue l'ordre suivant de manière logique
     */
    public function setAutoOrd()
    {
        // récupère l'ordre le plus grand
        $oROperationType = ROperationTypeQuery::create()
                ->filterByActId($this->getActId())
                ->orderByOrd(Criteria::DESC)->findOne();
        
        if ($oROperationType instanceof ROperationType) {
            // prend la valeur suivante
            $iOrd = ($oROperationType->getOrd() + 1);
        } else {
            $iOrd = 0;
        }
        
        $this->setOrd($iOrd);
    }
    
} // ROperationType
