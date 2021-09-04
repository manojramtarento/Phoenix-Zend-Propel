<?php

class Phoenix_Controller_Action_Helper_FlashMessenger extends Zend_Controller_Action_Helper_FlashMessenger
{
    /**
     * @param string $sMessage
     * @param string $sNamespace
     */
    public function direct($sMessage, $sNamespace = 'default')
    {
        $this->_namespace = $sNamespace;
        return parent::direct($sMessage);
    }

    public function addMessage($sMessage, $sNamespace = null){
        if (!is_string($sNamespace) || $sNamespace == '') {
            $sNamespace = $this->getNamespace();
        }
        self::$_messages[$sNamespace] = $sMessage;
        return parent::addMessage($sMessage, $sNamespace);
    }
}
