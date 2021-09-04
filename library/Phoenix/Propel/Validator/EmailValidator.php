<?php

/**
 * Propel validator for email fields
 */
class Phoenix_Propel_Validator_EmailValidator implements BasicValidator
{

    public function isValid(ValidatorMap $oMap, $sValue)
    {
        if (! $sValue) {
            return true;
        }
        $oZendValidateEmailAddress = new Zend_Validate_EmailAddress();
        return $oZendValidateEmailAddress->isValid($sValue);
    }

}
