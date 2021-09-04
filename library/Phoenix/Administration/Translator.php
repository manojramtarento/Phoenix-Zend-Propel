<?php

/**
 * This class has been made to provide a translator service to be used by the controllers
 * of the the administration module
 *
 * @author Amine JAAOUANI
 */
class Phoenix_Administration_Translator
{

    /**
     * Registers the Zend_Translate with a \Zend_Translate object
     * which contains the available translations
     *
     * @param  string $sUserLanguage
     * @throws \LogicException
     */
    public static function initTranslator($sUserLanguage)
    {
        if (!is_string($sUserLanguage)) {
            throw new \LogicException('Argument "$sUserLanguage" expects a string, "' . gettype($sUserLanguage) . '" defined');
        }

        $sAdministrationLanguagesPath = APPLICATION_PATH . DIRECTORY_SEPARATOR . 'modules/statistics/languages';
        if (!file_exists($sAdministrationLanguagesPath . DIRECTORY_SEPARATOR . $sUserLanguage . DIRECTORY_SEPARATOR . 'common.php')) {
            throw new \LogicException('There is no Translation file available for the "' . $sUserLanguage . '" language');
        }

        $oZendTranslator = new Zend_Translate('array', $sAdministrationLanguagesPath . $sUserLanguage . DIRECTORY_SEPARATOR . 'common.php', $sUserLanguage);

        // 37038 Adding the translation files
        if ($aLangueFile = glob($sAdministrationLanguagesPath . $sUserLanguage . DIRECTORY_SEPARATOR . '/*.php')) {
            foreach ($aLangueFile as $sFile) {
                $oZendTranslator->addTranslation($sFile, $sUserLanguage);
            }
        }
        Zend_Registry::set('Zend_Translate', $oZendTranslator);
    }
}
