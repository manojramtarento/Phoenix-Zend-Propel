<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KpiListe
 *
 * @author info20
 */
class Reporting_View_Helper_Kpi extends Zend_View_Helper_Abstract{
	
	public function Kpi(){
		return $this;
	}
	
	public function getSelect(){
		$aKpi= array(
			"Nombre d'opérations en dépassement de fond"=>array('value'=>"opfonddepasse")
		);
	
		return Phoenix_View_Helper_Html::select(array('name'=>'select_kpi'), $aKpi,array('default_label'=>'choisir...'));
	}
	
	public function getLinkExportSimple(){
		
	}
	
	
	public function getLinkExportDetail(){
		
	}
}

?>
