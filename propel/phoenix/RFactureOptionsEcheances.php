<?php



/**
 * Skeleton subclass for representing a row from the 'r_facture_options_echeances' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class RFactureOptionsEcheances extends BaseRFactureOptionsEcheances
{

    const A_RECEPTION=1;
    const TRENTE_JOURS=2;
    const FIN_DE_MOIS=3;
    const LE_VINGT=4;
    const QUINZE_JOURS=5;
    const QUARANTE_CINQ_JOURS_FIN_DE_MOIS=7;
    const SOIXANTE_JOURS_NETS_A_COMPTER_RECEPTION=8;
        
    /**
     * Sets the due date from the output date
     * @param string|\DateTime $sDateEdit
     * @return string
     */
    public function makeDateEcheance($sDateEdit)
    {
        $oDateEdit=new \DateTime($sDateEdit);
        switch ($this->getFactOptEcheanceId()) {
            case self::A_RECEPTION:
                $oDateEdit->add(date_interval_create_from_date_string('5 days'));
                return $oDateEdit->format('Y-m-d H:i:s');
            case self::TRENTE_JOURS:
                $oDateEdit->add(date_interval_create_from_date_string('30 days'));
                return $oDateEdit->format('Y-m-d H:i:s');
            case self::FIN_DE_MOIS:
                return date('Y-m-t', $oDateEdit->getTimestamp());
            case self::LE_VINGT:
                return date('Y-m-20', $oDateEdit->getTimestamp());
            case self::QUINZE_JOURS:
                $oDateEdit->add(date_interval_create_from_date_string('15 days'));
                return $oDateEdit->format('Y-m-d H:i:s');
            case self::QUARANTE_CINQ_JOURS_FIN_DE_MOIS:
                return date('Y-m-t', $oDateEdit->add(date_interval_create_from_date_string('45 days'))->getTimestamp());
            case self::SOIXANTE_JOURS_NETS_A_COMPTER_RECEPTION:
                $oDateEdit->add(date_interval_create_from_date_string('60 days'));
                return $oDateEdit->format('Y-m-d H:i:s');
            default:
                throw new \DomainException('Property "FactOptEcheanceId" "'.$this->getFactOptEcheanceId().'" is not supported');
        }
    }
    
    /**
     * @param string|null $sLangId
     * @return string
     */
    public function getFactOptEcheanceLibelleTranslated($sLangId = null)
    {
        if (! $sLangId) {
            $sLangId = RLanguages::LANG_FRA;
        }
        switch ($sLangId) {
            case RLanguages::LANG_ENG:
                return $this->getFactOptEcheanceLibelleEn();
            case RLanguages::LANG_FRA:
                return $this->getFactOptEcheanceLibelle();
            default:
                return '';
        }
    }
    
    
} // RFactureOptionsEcheances
