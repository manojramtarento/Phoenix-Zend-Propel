<?php

class My_Paginator extends Zend_Paginator {
    public function UrlOrderBy($sOrder) {
        $sWay = Zend_Controller_Front::getInstance()->getRequest()->getParam('sense');
        if (!in_array($sWay, array('asc', 'desc'))) {
            $sWay = 'asc';
        } else {
            $sWay = ($sWay == 'asc' ? 'desc' : 'asc');
        }

        $oZendViewHelperUrl = new Zend_View_Helper_Url();
        return $oZendViewHelperUrl->url(array('order' => $sOrder, 'sense' => $sWay)).'?'.$_SERVER['QUERY_STRING'];
    }
}
