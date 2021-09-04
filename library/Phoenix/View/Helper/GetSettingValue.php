<?php

class Phoenix_View_Helper_GetSettingValue extends Zend_View_Helper_Abstract
{
    /**
     * @param string $sSettingKey
     * @param string $sLocale
     * @return string
     */
    public static function getSettingValue($sSettingKey,$sLocale = RLanguages::LOCALE_FR)
    {    
        return Settings::getSettingValueBySettingKey($sSettingKey,$sLocale);
    }

}
