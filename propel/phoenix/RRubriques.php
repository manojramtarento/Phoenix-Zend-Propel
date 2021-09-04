<?php



/**
 * Skeleton subclass for representing a row from the 'r_rubriques' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class RRubriques extends BaseRRubriques
{

    const RUB_FF_MISE_EN_PLACE = 1;
    const RUB_FRAIS_VARIABLES = 29;
    const RUB_POSTAL_CHARGES_NO_VAT = 31;
    
   /**
    * Identifiers of the sections for refunds
    * @var array
    */
    const REFUND_SECTION_IDS = array(5,22,24);
    
    /**
     * Executed automatically during validation
     * Validate label
     */
    protected function _validateIsLibelleCorrect()
    {
        if ($this->getRRubLibelle() == '') {
            $this->addValidationFailed('Le libellé doit être renseigné', 'r_rubriques.r_rub_libelle');
        }
    }

} // RRubriques
