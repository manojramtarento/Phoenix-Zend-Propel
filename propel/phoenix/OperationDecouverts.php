<?php



/**
 * Skeleton subclass for representing a row from the 'operation_decouverts' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class OperationDecouverts extends BaseOperationDecouverts {
	
	public function preValidate() {
		if($this->isNew()){
			$this->setOpDecStatutId(ROperationDecouvertStatuts::EN_ATTENTE);
		}else{
			if($this->getOpDecMotifAccord() <= 0) {
				$this->addValidationFailed('Raison invalide', 'operation_decouverts.op_dec_motif_accord');
			}
		}
		
		// Si le découvert est refusé, on met à zéro le montant accordé
		switch($this->getOpDecStatutId()) {
			case ROperationDecouvertStatuts::REFUSE :
				$this->setOpDecMontAccord(0);
			break;
			
			case ROperationDecouvertStatuts::ACCEPTE :
				if($this->getOpDecMontAccord() <= 0) {
					$this->addValidationFailed('Montant accordé invalide', 'operation_decouverts.op_dec_mont_accord');
				}
			break;
		}
		
		parent::preValidate();
	}
	
	public function save(\PropelPDO $con = null) {
		if($this->isNew()){
			$this->setOpDecMontAccord(0);
		}

		
		parent::save($con);
	}
	
	
	
} // OperationDecouverts
