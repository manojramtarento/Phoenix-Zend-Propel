<?php

/**
 * Skeleton subclass for representing a row from the 'r_delai_devis' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class RDelaiDevis extends BaseRDelaiDevis
{

    const DELAI_15_JOURS = 1;
    const DELAI_1_MOIS = 2;
    const DELAI_3_MOIS = 3;

    /**
     * Retrieves the label in the language defined for the operation
     * @param string $sLang
     * @return string
     */
    public function getQuotationDelayTranslatedLabel($sLang = RLanguages::LANG_FRA)
    {
        switch ($sLang) {
            case RLanguages::LANG_ENG:
                return $this->getRDelaiDevisLibelleEn()?:$this->getRDelaiDevisLibelle();
            case RLanguages::LANG_FRA:
            default:
                return $this->getRDelaiDevisLibelle();
        }
    }

}
