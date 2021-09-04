<?php



/**
 * Skeleton subclass for representing a row from the 'r_custom_activites' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class RCustomActivites extends BaseRCustomActivites {

	const TYPE_PROMO=1;
	const TYPE_LOG=2;
	
	/**
	 * Attribue l'ordre suivant de manière logique
	 */
	public function setAutoOrd() {
		// récupère l'ordre le plus grand
		$oCustomActivites = RCustomActivitesQuery::create()->orderByOrd(Criteria::DESC)->findOne();
		
		if($oCustomActivites instanceof RCustomActivites) {
			// prend la valeur suivante
			$ord = ($oCustomActivites->getOrd() + 1);
		}else{
			$ord = 0;
		}
		
		$this->setOrd($ord);
	}
	
} // RCustomActivites
