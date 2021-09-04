<?php

/**
 * Skeleton subclass for representing a row from the 'r_relance_types' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RRelanceTypes extends BaseRRelanceTypes
{

    const PREM_RELANCE = 1;
    const SEC_RELANCE = 2;
    const MISE_EN_DEMEURE = 3;

    /**
     * Generates a reminder reference
     * @param int $iRelNumero
     * @return string
     * @throws \InvalidArgumentException
     */
    public function makeRelReference($iRelNumero)
    {
        if (!is_int($iRelNumero)) {
            throw new \InvalidArgumentException('Argument "$iRelNumero" expects an int "' . gettype($iRelNumero) . '" given');
        }
        return 'R' . $this->getRRelTypeId() . date('ym') . str_pad($iRelNumero, 4, '0', STR_PAD_LEFT);
    }

    /**
     * Computes the current reminder date of payment
     * @return string
     */
    public function makeDateEcheance()
    {
        switch ($this->getRRelTypeId()) {
            case self::PREM_RELANCE:
                $oDateEcheance = new DateTime(date('Y-m-d'));
                // 15 days after the edition date of the first reminder
                $oDateEcheance->add(date_interval_create_from_date_string('15 days'));
                return $oDateEcheance->format('Y-m-d');
            case self::SEC_RELANCE:
                $oDateEcheance = new DateTime(date('Y-m-d'));
                // 15 days after the edition date of the second reminder
                $oDateEcheance->add(date_interval_create_from_date_string('15 days'));
                return $oDateEcheance->format('Y-m-d');
            case self::MISE_EN_DEMEURE:
                $oDateEcheance = new DateTime(date('Y-m-d'));
                // 8 days after the edition date of the paymant of the formal notice
                $oDateEcheance->add(date_interval_create_from_date_string('8 days'));
                return $oDateEcheance->format('Y-m-d');
        }
    }

    /**
     * récupère la description dans le langage défini pour l'opération
     * @param type $lang_id
     * @return type
     */
    public function getRRelTypeLibelleTranslated($lang_id)
    {
        $text = '';

        switch ($lang_id) {
            case RLanguages::LANG_ENG:
                // On va chercher la traduction dans le référentiel
                $text = $this->getRRelTypeLibelleEn();
                break;
        }

        if (!empty($text)) {
            return $text;
        } else {
            return $this->getRRelTypeLibelle();
        }
    }
}

// RRelanceTypes
