<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jeux
 *
 * @author info20
 */
class Data_Stat_Client_Jeux extends Data_Stat_Client_Abstract {

	public function __construct($refOp, $date) {
		parent::__construct($refOp, $date);
	}

	protected $_aClassIndicateurs = array(
		'Data_Stat_Client_Indicateur_ParticipationsNombre',
		'Data_Stat_Client_Indicateur_ParticipationsSupport',
		'Data_Stat_Client_Indicateur_RemboursementsParticipation',
		'Data_Stat_Client_Indicateur_RemboursementsCommunication',
        'Data_Stat_Client_Indicateur_Synthese',
		'Data_Stat_Client_Indicateur_BilanFinancier',
		'Data_Stat_Client_Indicateur_Reclamations',
		'Data_Stat_Client_Indicateur_Stocks',
	);

}

?>
