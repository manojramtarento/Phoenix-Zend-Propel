<?php

class Phoenix_Controller_Action_Helper_DbAdapters extends Zend_Controller_Action_Helper_Abstract
{
    /**
     *
     * @return \Phoenix_Controller_Action_Helper_Arthur
     */
    public function direct()
    {
        return Phoenix_Db_Adapters::getInstance();
    }
}
