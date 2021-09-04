<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Interface
 *
 * @author info20
 */
interface My_Data_Export_Source_Adapter_Interface {

    
    /**
     * retourne le contenu des données à exporter au format excel sous forme de tableau 
     * premier indice : ligne de donnée
     * second indice : tableau associatif avec nom du champs=> valeur
     * @return array Data
     */
    public function getData();
    
	
	public function getFieldHeaders();
    
    
    public function fetchRow();
}
?>
