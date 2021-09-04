<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetParams
 *
 * @author info20
 */
class My_View_Helper_GetParams {
    
    function GetParams(){
        return Zend_Controller_Front::getInstance()->getrequest()->getParams();
    }
    
}

?>