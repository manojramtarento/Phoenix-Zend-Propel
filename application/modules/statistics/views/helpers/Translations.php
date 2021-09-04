<?php

class Zend_View_Helper_Translations extends Zend_View_Helper_Abstract
{

    protected $translations;

    public function Translations()
    {
        return $this;
    }

    public function getTranslations()
    {
        if (is_array($this->translations)) {
            return $this->translations;
        }

        $this->translations = $this->loadStatisticsSpecificTranslations();
        return $this->translations;
    }

    /**
     * Cette fonction retourne un tableau contenant les traductions spécifiques
     * @return array
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function loadStatisticsSpecificTranslations()
    {
        $sSpecificTranslationsFilePath = __DIR__ . '/../../configs/SpecificTranslations.php';
        if (file_exists($sSpecificTranslationsFilePath)) {
            if (false === include $sSpecificTranslationsFilePath) {
                throw new \RuntimeException('An error occured while including Specific Translations file "' . $sSpecificTranslationsFilePath . '"');
            }
        } else {
            throw new \InvalidArgumentException('Specific Translations file "' . $sSpecificTranslationsFilePath . '" does not exist');
        }
        return include $sSpecificTranslationsFilePath;
    }

    /**
     *
     * @param string $sDate
     * @param string $sLanguage
     * @param boolean $bIsShort
     * @return string
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getTranslatedMonthName($sDate, $sLanguage = RLanguages::LOCALE_FR, $bIsShort = true)
    {
        if (!is_string($sDate)) {
            throw new \InvalidArgumentException('Parameter "$sDate" expects a string, "' . gettype($sDate) . '" given');
        }

        if (!is_string($sLanguage)) {
            throw new \InvalidArgumentException('Parameter "$sLanguage" expects a string, "' . gettype($sLanguage) . '" given');
        }

        $aTranslations = $this->getTranslations();
        $sTranslatedDate = '';

        if ($bIsShort) {
            if (!$oDate = DateTime::createFromFormat('Y - m - d', $sDate . ' - 01')) {
                if (!$oDate = DateTime::createFromFormat('m - Y - d', $sDate . ' - 01')) {
                    throw new \LogicException('Valid DateTime expected (Y - m or m - Y) as date, "' . $sDate . '" given.');
                }
            }
            $iMonthIndex = (int) $oDate->format('m');
            $sYear = $oDate->format('Y');
            $sTranslatedDate = $aTranslations['aMonthsNames'][$sLanguage]['short'][$iMonthIndex] . ' ' . $sYear;
        } else {
            $sDay = substr($sDate, 0, 2);
            $iMonthIndex = (int) substr($sDate, 3, 2);
            $sYear = substr($sDate, -4);
            $sTranslatedDate = $sDay . ' ' . $aTranslations['aMonthsNames'][$sLanguage]['full'][$iMonthIndex] . ' ' . $sYear;
        }

        return $sTranslatedDate;
    }

    /**
     * Returns the translation of the week Initial
     * E.g 'W' for english
     * @param string $sLanguage
     * @return string
     * @throws \InvalidArgumentException
     */
    public function getTranslatedWeekInitial($sLanguage = RLanguages::LOCALE_FR)
    {

        if (!is_string($sLanguage)) {
            throw new \InvalidArgumentException('Parameter "$sLanguage" expects a string, "' . gettype($sLanguage) . '" given');
        }

        $aTranslations = $this->getTranslations();

        return (isset($aTranslations['aWeekInitials'][$sLanguage])) ? $aTranslations['aWeekInitials'][$sLanguage] : '';
    }
}
