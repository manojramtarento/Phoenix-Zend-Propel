<?php



/**
 * Skeleton subclass for representing a row from the 'r_facture_types' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class RFactureTypes extends BaseRFactureTypes {

	
	const ADF=1;
	const REMB_ADF=2;
	const ESTIM=3;
	const REAL=4;
	const REMB_ESTIM=5;
	const REMB_REAL=6;
	const FF_FV_AFF_ESTIM=7;
	const FF_FV_AFF_REAL=8;
	const SOLDE_REAL=9;
	const SOLDE_FF=10;
	const SOLDE_REMB=11;
	const SOLDE_FF_FV_AFF_REAL=12;
	const ANNULATION=13;
	
	
	public static function getSoldeTypes(){
		return array(self::SOLDE_FF,self::SOLDE_FF_FV_AFF_REAL,self::SOLDE_REAL,self::SOLDE_REMB);
	}
	
	public static function getEstimTypes(){
		return array(self::ESTIM,self::REMB_ESTIM,self::FF_FV_AFF_ESTIM);
	}
	
	public static function getRealTypes(){
		return array(self::FF_FV_AFF_REAL, self::REAL,self::REMB_REAL,self::SOLDE_FF_FV_AFF_REAL,self::SOLDE_REAL);
	}
	
	
	/**
	 * 
	 * @param type $lang_id
	 * @return type
	 */
	public function getRFactTypeLibelleDetailTranslated($lang_id=RLanguages::LANG_FRA) {

		switch($lang_id) {
			case RLanguages::LANG_ENG:			
				$text=$this->getRFactTypeLibelleDetailEn();
				if(empty($text)){
					$text=$this->getRFactTypeLibelleDetail();
				}
			break;
			default:
				$text=$this->getRFactTypeLibelleDetail();
		}

		return $text;
	}
	
	
} // RFactureTypes
