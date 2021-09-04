<?php



/**
 * Skeleton subclass for representing a row from the 'journal_de_vente_ligne' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class JournalDeVenteLigne extends BaseJournalDeVenteLigne {

    public function setJdvlMontant($v) {
        $v = str_replace('.', ',', abs($v));
        return parent::setJdvlMontant($v);
    }
    
    
} // JournalDeVenteLigne