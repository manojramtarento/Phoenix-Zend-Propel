<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetParam
 *
 * @author info20
 */
class My_View_Helper_GetParam {
    
    function GetParam($key,$default=null){
        return Zend_Controller_Front::getInstance()->getrequest()->getParam($key,$default);
    }
}

?>