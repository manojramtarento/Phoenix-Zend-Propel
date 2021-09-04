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
class My_Data_Export_Source_Adapter_Array implements My_Data_Export_Source_Adapter_Interface {

    /**
     *
     * @var Zend_Db_Table_Select 
     */
    protected $_aData = array();
	protected $_aFieldHeaders=null;

    protected $_iCursor = 0;
    
    /**
     * 
     * @param type $aData
     * @param type $aFieldHeaders (dépécié) index des champs du tableau=>valeur à afficher dans le header
     */
    public function __construct($aData,$aFieldHeaders=null) {
        // print_r($select);
        $this->_aData = $aData;
		$this->_aFieldHeaders=$aFieldHeaders;
        $this->_init();
    }

    private function _init() {
        //$adapter = $this->_select->getAdapter();
        //$this->_aData = $adapter->fetchAll($this->_select);
        if (isset($this->_aData[0]) && !isset($this->_aFieldHeaders)) {
            $aFieldHeaders = array_keys($this->_aData[0]);
            foreach($aFieldHeaders as $value){
                $this->_aFieldHeaders[$value]=$value;
            }
        }
		
    }

    public function getFieldHeaders() {
        return $this->_aFieldHeaders;
    }
	
    public function getData() {
        return $this->_aData;
    }

    
    public function fetchRow() {
        if(isset($this->_aData[$this->_iCursor])){
            return $this->_aData[$this->_iCursor++];
        }else{
            return false;
        }
        
    }

}

?>