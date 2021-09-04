<?php

/**
 * Skeleton subclass for performing query and update operations on the 'plan_facturation_details' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class PlanFacturationDetailsQuery extends BasePlanFacturationDetailsQuery {

	/**
	 * récupération des échéances de facturation
	 * ->date de plannifaction antérieure au jour J + n'ayant donné lieu à aucune facture
	 * @param int|null $OpId identifiant de l'opération sur laquelle récupérer les échéances du plan de facturation
	 * @return array
	 */
	public function findEcheanceToFacture($OpId = null) {
		if (isset($OpId)) {
			$aPlanFacturationDetails = $this->filterByOpId($OpId);
		} else {
			$aPlanFacturationDetails = $this;
		}
		$aPlanFacturationDetails = $aPlanFacturationDetails->filterByPfdDatePlanif(array('max' => 'now'))
				->filterByPfdFactId(null, Criteria::EQUAL)->orderByPfdDatePlanif()
				->useOperationsQuery()->filterByOpStatusId(Operations::STATUS_ACCEPTE)->endUse()
				->find();
		$aEcheances=array();
		foreach($aPlanFacturationDetails as $oPlanFacturationDetails){
			$bEchanceAdded=false;
			if(in_array($oPlanFacturationDetails->getPfdTypeFactId(), RFactureTypes::getRealTypes())){
				foreach($aEcheances as $key=>$echeance){
					if(in_array($echeance->getPfdTypeFactId(), RFactureTypes::getRealTypes())){
						$aEcheances[$key]=$oPlanFacturationDetails;
						$bEchanceAdded=true;
					}
				}
			}

			if(!$bEchanceAdded){
				$aEcheances[]=$oPlanFacturationDetails;
			}
			
		}
		return $aEcheances;
	}

}

// PlanFacturationDetailsQuery
