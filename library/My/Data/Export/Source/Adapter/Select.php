<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbTable
 *
 * @author info20
 */
class My_Data_Export_Source_Adapter_Select implements My_Data_Export_Source_Adapter_Interface {

    /**
     *
     * @var Zend_Db_Table_Select 
     */
    protected $_select = null;
    protected $_aData = array();
	protected $_aFieldHeaders=null;

    /**
     *
     * @var Zend_Db_Statement 
     */
    protected $_oQuery = null;

    public function __construct(Zend_Db_Select $select) {
        // print_r($select);

        $this->_select = $select;
        
    }

    /**
     * initialise l'objet query
     */
    protected function _initQuery(){
        $this->_oQuery = $this->_select->query();
    }
			

    /**
     * récupère les en-têtes
     * @return array
     */
    public function getFieldHeaders() {
        $this->_initQuery();
        
        if ($row = $this->_oQuery->fetch(PDO::FETCH_ASSOC)) {
            $aHeaders = array_keys($row);
			foreach($aHeaders as $val){
				$this->_aFieldHeaders[$val]=$val;
            }
        }
        unset($this->_oQuery);
        return $this->_aFieldHeaders;
    }

    /**
     * récupère la prochaine ligne
     * @return array
     */
    public function fetchRow() {
        if(!isset($this->_oQuery)){
            $this->_initQuery();
        }
        return $this->_oQuery->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * récupère toutes les lignes
     * @return array
     */
    public function getData() {
        $this->_initQuery();
        $this->_aData = $this->_oQuery->fetchAll(PDO::FETCH_ASSOC);
        unset($this->_oQuery);
        return $this->_aData;
    }

}

?>