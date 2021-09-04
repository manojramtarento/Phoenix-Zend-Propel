<?php

class I18nQuery extends BaseI18nQuery
{

    /**
     * This generic function allows you to add or modify a foreign language translation of a given field.
     * @param string $sModelName
     * @param string $sFieldName
     * @param integer $iForeignKey
     * @param string $sFieldValue
     * @param string $sLocale
     * @return I18n
     */
    public function saveDataTranslations(string $sModelName, string $sFieldName, int $iForeignKey, string $sFieldValue, string $sLocale) : I18n
    {
        $oI18n = $this::create()->filterByForeignKey($iForeignKey)->filterByModelName($sModelName)->filterByFieldName($sFieldName)->filterByLocale($sLocale)->findOne();
        if ($oI18n) {
            $oI18n->setFieldValue($sFieldValue);
        } else {
            $oI18n = new I18n();
            $oI18n->setModelName($sModelName);
            $oI18n->setFieldName($sFieldName);
            $oI18n->setForeignKey($iForeignKey);
            $oI18n->setLocale($sLocale);
            $oI18n->setFieldValue($sFieldValue);
        }
        if ($oI18n->validate()) {
            $oI18n->save();
        }
        return $oI18n;
    }

    /**
     * This generic function allows you to retrieve the foreign language translation of a given field.
     * @param string $sModelName
     * @param string $sFieldName
     * @param integer $iForeignKey
     * @param string $sLocale
     * @return string|null
     */
    public function findDataTranslations(string $sModelName, string $sFieldName, int $iForeignKey, string $sLocale)
    {
        return $this::create()->select('FieldValue')->filterByForeignKey($iForeignKey)->filterByModelName($sModelName)->filterByFieldName($sFieldName)->filterByLocale($sLocale)->findOne();
    }
}
