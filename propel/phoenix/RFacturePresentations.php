<?php

/**
 * Skeleton subclass for representing a row from the 'r_facture_presentations' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class RFacturePresentations extends BaseRFacturePresentations {

	const FACTURE_AVOIR = 1;
	const APPEL_DE_FONDS = 2;
	const REMB_DE_FONDS = 3;
	const ANNULATION = 4;
	const NOTE_DE_CREDIT_DEBIT = 5;
	const ANNUL_NOTE_DE_CREDIT_DEBIT = 6;
	const SOLDE = 7;

	public function makeReferenceFacture($numeroFacture, Factures $oFacture) {
        
		switch ($this->getRFactPresId()) {
			case self::FACTURE_AVOIR:
				$reference = 'FA' . $oFacture->getFactDate('ym') . str_pad($numeroFacture, 4, '0',STR_PAD_LEFT);
				break;
			case self::APPEL_DE_FONDS:
				$reference = 'AF' . $oFacture->getFactDate('ym') . str_pad($numeroFacture, 4, '0',STR_PAD_LEFT);
				break;
			case self::REMB_DE_FONDS:
				$reference = 'AF' . $oFacture->getFactDate('ym') . str_pad($numeroFacture, 4, '0',STR_PAD_LEFT);
				break;
			case self::ANNULATION:
				$reference = 'FA' . $oFacture->getFactDate('ym') . str_pad($numeroFacture, 4, '0',STR_PAD_LEFT);
				break;
			case self::NOTE_DE_CREDIT_DEBIT:
				$reference = 'NC' . $oFacture->getFactDate('ym') . str_pad($numeroFacture, 4, '0',STR_PAD_LEFT);
				break;
			case self::ANNUL_NOTE_DE_CREDIT_DEBIT:
				$reference = 'NC' . $oFacture->getFactDate('ym') . str_pad($numeroFacture, 4, '0',STR_PAD_LEFT);
				break;
			case self::SOLDE:
				$reference = 'FA' . $oFacture->getFactDate('ym') . str_pad($numeroFacture, 4, '0',STR_PAD_LEFT);
				break;
		}
		
		return $reference;
	}
	
	public function getTypeFacture($montantTTC, $mention = null,$lang='fra'){
		$aTranslate=Phoenix_Translation_Files::getPdf($lang,'facture_type');
		switch ($this->getRFactPresId()) {
			case self::FACTURE_AVOIR:
				if($montantTTC>=0){
					$mention=$aTranslate['facture'];
				}else{
					$mention=$aTranslate['avoir'];
				}
				break;
			case self::APPEL_DE_FONDS:
				$mention = $aTranslate['appels_de_fonds'];
				break;
			case self::REMB_DE_FONDS:
				$mention = $aTranslate['appels_de_fonds_rembourses'];
				break;
			case self::ANNULATION:
				if($montantTTC>=0){
					$mention=$aTranslate['facture'];
				}else{
					$mention=$aTranslate['avoir'];
				}
				break;
			case self::NOTE_DE_CREDIT_DEBIT:
				if($montantTTC>=0){
					$mention=$aTranslate['note_de_debit'];
				}else{
					$mention=$aTranslate['note_de_crédit'];
				}
				break;
			case self::ANNUL_NOTE_DE_CREDIT_DEBIT:
				if($montantTTC>=0){
					$mention=$aTranslate['note_de_debit'];
				}else{
					$mention=$aTranslate['note_de_crédit'];
				}
				break;
			case self::SOLDE:
				if($montantTTC>=0){
					$mention=$aTranslate['facture'];
				}else{
					$mention=$aTranslate['avoir'];
				}
				break;
		}
		
		return $mention;
	}
	
	
	
	public function getMentionFacture($factAnnulId){
		switch ($this->getRFactPresId()) {
			case self::FACTURE_AVOIR:
					$mention = '';
				break;
			case self::APPEL_DE_FONDS:
				$mention = '';
				break;
			case self::REMB_DE_FONDS:
				$mention = '';
				break;
			case self::ANNULATION:
					$reference=FacturesQuery::create()->findPk($factAnnulId)->getFactReference();
					$mention='Annulation de la facture n°'.$reference;
				break;
			case self::NOTE_DE_CREDIT_DEBIT:
					$mention='';
				break;
			case self::ANNUL_NOTE_DE_CREDIT_DEBIT:
					$mention='';
				break;
			case self::SOLDE:
					$mention='';
				break;
		}
		
		return $mention;
	}

}

// RFacturePresentations
