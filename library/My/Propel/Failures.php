<?php

class My_Propel_Failures
{

    protected static $instance = null;

    /**
     * Transforms the error table returned by getValidationFailures of a propel model
     * @param array $aValidationFailures
     * @return array
     */
    public function validationFailuresToArray(array $aValidationFailures) : array
    {
        $aResult = array();
        $oTranslate = Zend_Registry::get('Zend_Translate');
        foreach ($aValidationFailures as $sFieldname => $aErrorsField) {
            $aFieldNameParts = explode('.', $sFieldname);
            $sKey = strtolower(end($aFieldNameParts));
            if ($aErrorsField instanceof \ValidationFailed) {
                $aResult[$sKey][] = $oTranslate->translate($aErrorsField->getMessage());
            } else {
                foreach ($aErrorsField as $oError) {
                    $aResult[$sKey][] = $oTranslate->translate($oError->getMessage());
                }
            }
        }
        return $aResult;
    }

    /**
     * Transforms the error table returned by getValidationFailures of a propel model into a simple error listing
     * @param array $aValidationFailures
     * @return array
     */
    public function validationFailuresToSimpleArray(array $aValidationFailures) : array
    {
        $aResult = array();
        $oTranslate = Zend_Registry::get('Zend_Translate');
        foreach ($aValidationFailures as $aErrorsField) {
            if ($aErrorsField instanceof \ValidationFailed) {
                $aResult[] = $oTranslate->translate($aErrorsField->getMessage());
            } elseif (is_array($aErrorsField)) {
                $aResult = array_merge($aResult, $this->validationFailuresToSimpleArray($aErrorsField));
            } elseif (is_string($aErrorsField)) {
                $aResult[] = $aErrorsField;
            }
        }
        
        return $aResult;
    }

    /**
     * Saves the error table returned by propel for injection in the form elements managed via Phoenix_View_Html
     * @param array $aValidationFailures
     */
    public function registerErrors(array $aValidationFailures)
    {
        $aErrors = self::validationFailuresToArray($aValidationFailures);
        Zend_Registry::set('My_Propel_registerErrors', $aErrors);
    }

    /**
     * @return array
     */
    public function getRegisterdErrors(): array
    {
        return Zend_Registry::isRegistered('My_Propel_registerErrors')?Zend_Registry::get('My_Propel_registerErrors'):array();
    }

    /**
     * @param string $sFieldname
     * @return type
     */
    public function getRegisteredFieldErrors($sFieldname)
    {
        $aErrors = self::getRegisterdErrors();
        if (isset($aErrors[$sFieldname])) {
            return $aErrors[$sFieldname];
        } else {
            return array();
        }
    }

    /**
     * @return \My_Propel_Failures
     */
    public static function getInstance() : My_Propel_Failures
    {
        if (! isset(self::$instance)) {
            self::$instance = new My_Propel_Failures();
        }
        return self::$instance;
    }

}
