<?php

class My_View_Helper_FlashMessenger extends Zend_View_Helper_Abstract
{

    public function setView(Zend_View_Interface $oView)
    {
        $this->view = $oView;
    }

    public function FlashMessenger($sNamespace = 'default', $sType = 'popup')
    {
        $oFlashMessenger = Zend_Controller_Action_HelperBroker::getStaticHelper('FlashMessenger');
        $oFlashMessenger->setNamespace($sNamespace);
        if ($oFlashMessenger->hasMessages() && ($aMessages = $oFlashMessenger->getMessages())) {
            // Reset messages
            $oFlashMessenger->clearMessages($sNamespace);
            $oFlashMessenger->clearCurrentMessages($sNamespace);

            $sMessage = '';
            if (is_array($aMessages[0])) {
                foreach ($aMessages as $sTmpMessage) {
                    $sMessage .= $this->view->htmlList($sTmpMessage, false, false, false);
                }
            } else {
                $sMessage .= $this->view->htmlList($aMessages, false, false, false);
            }

            $sMessage = str_replace(array('\r', '\n', chr(13), chr(10), PHP_EOL), '', $sMessage);

            switch ($sType) {
                case 'inline':
                    switch ($sNamespace) {
                        case 'error':
                            return '<div class="errors-msg">' . $sMessage . '</div>';
                            break;

                        case 'success':
                            return '<div class="success-msg">' . $sMessage . '</div>';
                            break;
                    }
                    break;
                case 'popup':
                    $sPopupType = $sNamespace === 'error'?$sNamespace:'success';
                    return '<script language="javascript">
                        $(document).ready(function(){
                            Component.modalDialog(' . json_encode($sMessage) . ',{type:"'.$sPopupType .'"});
                        });
                    </script>';
                    break;
                default:
                    throw new \DomainException('Argument "$type" "'.$sType.'" is not supported');
            }
        }
    }
}
