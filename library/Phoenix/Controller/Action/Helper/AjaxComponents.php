<?php

class Phoenix_Controller_Action_Helper_AjaxComponents extends Zend_Controller_Action_Helper_Abstract
{

    /**
     * @return Phoenix_Ajax_Components_Process
     */
    public function direct()
    {
        return Phoenix_Ajax_Components_Process::getInstance();
    }
}
