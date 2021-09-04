<?php

class Phoenix_Controller_Action_Helper_FileTransfer extends Zend_Controller_Action_Helper_Abstract
{

    /**
     * @return My_File_Transfer
     */
    public function direct()
    {
        return My_File_Transfer::getInstance();
    }
}
