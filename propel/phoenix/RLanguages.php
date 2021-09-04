<?php

/**
 * Skeleton subclass for representing a row from the 'r_languages' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RLanguages extends BaseRLanguages
{

    const LANG_FRA = 'FRA';
    const LANG_ENG = 'ENG';
    const LOCALE_EN = 'en_GB';
    const LOCALE_FR = 'fr_FR';

    /**
     * Checks weither the current language can be safely deleted
     *
     * @return boolean
     */
    public function checkIfRLanguageCanBeSafelyDeleted() : bool
    {
        $sRLangCode = $this->getRLangCode();
        return !(RCulturesQuery::create()->filterByRCultureLanguageCode($sRLangCode)->count() || ClientFactureOptionsQuery::create()->filterByClFactLang($sRLangCode)->count());
    }
    
    /**
     * Set language with the help of parameter
     * @param string $sLanguage
     * @param string $sCommonLanguageFilePath
     * @return instance Zend_Translate 
     */
    public function setLanguage(string $sLanguage, string $sCommonLanguageFilePath) : Zend_Translate
    {
        $oTranslate = new Zend_Translate('array', $sCommonLanguageFilePath, $sLanguage);
        $oTranslate = Zend_Registry::set('Zend_Translate', $oTranslate);
        return Zend_Registry::get('Zend_Translate');
    }
}

// RLanguages
