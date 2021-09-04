<?php

class Phoenix_Translate extends Zend_Translate
{
   
   /**
    * Initialize Translator for current language
    * @throw LogicException
    */
    public static function initTranslate()
    {

        $oZendControllerFront = Zend_Controller_Front::getInstance();
        $oRequest = $oZendControllerFront->getRequest();

        if (PHP_SAPI === 'cli' && $oRequest) {
            $sLanguage = $oRequest->getParam('language');
        } else {
            // Retrieve user language if user is authenticated
            $oZendAuth = Zend_Auth::getInstance();
            if ($oZendAuth->getIdentity() instanceof Phoenix_Auth_User_Abstract) {
                $sLanguage = trim($oZendAuth->getStorage()->read()->getLanguage());
            }
        }
        $sLanguage = $sLanguage ?? 'fr_FR';

        // Load common language
        $sCommonLanguageFilePath = APPLICATION_PATH . '/languages/' . $sLanguage . '/common.php';
        if (! file_exists($sCommonLanguageFilePath)) {
            throw new \LogicException('Comme language file "'.$sCommonLanguageFilePath.'" does not exist');
        }
        $oTranslate = new self('array', $sCommonLanguageFilePath, $sLanguage);

        if ($oRequest) {
            $sDir = $oZendControllerFront->getControllerDirectory($oRequest->getModuleName());
            if ($sDir) {
                foreach (glob($sDir . '/../languages/' . $sLanguage . '/*.php') as $sFile) {
                    $oTranslate->addTranslation($sFile, $sLanguage);
                }
            }
        }
        Zend_Registry::set('Zend_Translate', $oTranslate);
    }
}
