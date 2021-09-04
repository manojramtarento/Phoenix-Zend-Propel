<?php

/**
 * The purpose of this is class is to initiate a translator objects by reading
 * The available translation files. This object will be used to translate the
 * texts to display in the PDF Statistics file
 * @author Amine JAAOUANI
 */
class Phoenix_Stats_Service_Translator
{

    /**
     * Registers the Zend_Translate with a \Zend_Translate object
     * which contains the available translations of the statistics
     * @param string $sOperationDocumentsLanguage
     * @throws \LogicException
     */
    public static function initTranslator($sOperationDocumentsLanguage)
    {
        if (!is_string($sOperationDocumentsLanguage)) {
            throw new \LogicException('Argument "$sOperationDocumentsLanguage" expects a string, "' . gettype($sOperationDocumentsLanguage) . '" defined');
        }

        $sStatisticsLanguagesPath = APPLICATION_PATH . '/modules/statistics/languages/';
        if (!file_exists($sStatisticsLanguagesPath . $sOperationDocumentsLanguage . '/common.php')) {
            throw new \LogicException('There is no Translation file available for the "' . $sOperationDocumentsLanguage . '" language');
        }
        $oZendTranslator = new Zend_Translate('array', $sStatisticsLanguagesPath . $sOperationDocumentsLanguage . '/common.php', $sOperationDocumentsLanguage);

        // 37038 Adding the translation files
        if ($aLangueFile = glob($sStatisticsLanguagesPath . $sOperationDocumentsLanguage . '/*.php')) {
            foreach ($aLangueFile as $sFile) {
                $oZendTranslator->addTranslation($sFile, $sOperationDocumentsLanguage);
            }
        }
        Zend_Registry::set('Zend_Translate', $oZendTranslator);
    }
}
