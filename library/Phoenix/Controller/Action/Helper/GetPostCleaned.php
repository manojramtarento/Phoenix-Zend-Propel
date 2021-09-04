<?php

class Phoenix_Controller_Action_Helper_GetPostCleaned extends Zend_Controller_Action_Helper_Abstract
{

    public function direct()
    {
        return $this->getRequest()->getPost();
    }
}
