<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RemontesPrime
 *
 * @author info20
 */
class RemontesPrime extends Data_Stat_Client_Indicateur_Abstract_CompilData{
	
	public function addNodeXmlToDoc(\Phoenix_Stats_Xml_Builder $oPhoenix_Stats_Xml_Builder) {
		
		$aData=$this->getData();
		
		$oPhoenix_Stats_Xml_Builder->addGraph(array( 
			'title'=>'Remontés Primes - Top 5',
			'type'=>'barv',
			'size'=>'mini',
			'plots'=>$aData));
	}

	protected function getData() {
		
	}
}

?>
