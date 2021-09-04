<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Builder
 *
 * @author info20
 */
class Data_Stat_Client_Factory {
	

    /**
	 * instanciation du modèle de stat attentu pour l'opération
	 * @param Operations | integer $refOp objet propel ou numéro d'opération
	 * @param string $date format de date pour fonction 'date' de php
     * @throws Phoenix_Exception_UserWarning
     */
	public static function make(Operations $oOperation, $date='Y-m-d H:i:s'){
        $oData_Stat_Client = null;
		switch ($oOperation->getOpTypeId()) {
			case ROperationType::TYPE_JEUX:
				$oData_Stat_Client = new Data_Stat_Client_Jeux($oOperation, date($date));
				break;
			case ROperationType::TYPE_ODR:
				$oData_Stat_Client= new Data_Stat_Client_Odr($oOperation, date($date));
				break;
			case ROperationType::TYPE_PRIME:
                        case ROperationType::TYPE_SOR:
				$oData_Stat_Client = new Data_Stat_Client_Primes($oOperation, date($date));
				break;
            default:
                throw new Phoenix_Exception_UserWarning('op_number:'.$oOperation->getOpNumber().', stat for thid kind of operation is not defined');
		}
		
		return $oData_Stat_Client;
	}
	
	
}

?>