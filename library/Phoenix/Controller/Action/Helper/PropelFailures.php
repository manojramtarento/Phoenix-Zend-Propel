<?php

class Phoenix_Controller_Action_Helper_PropelFailures extends Zend_Controller_Action_Helper_Abstract
{

    /**
     * @return My_Propel_Failures
     */
    public function direct()
    {
        return My_Propel_Failures::getInstance();
    }
}
