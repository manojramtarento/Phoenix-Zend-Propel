<?php



/**
 * Skeleton subclass for representing a row from the 'r_scenarios' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class RScenarios extends BaseRScenarios {
	
    /**
     * Exécutée automatiquement lors de la validation
     * Validation du libellé
     */
    protected function _validateIsLibelleCorrect() {
        if($this->getRScenarioLibelle() == '') {
            $this->addValidationFailed('Le libellé doit être renseigné', 'r_scenarios.r_scenario_libelle');
        }
    }

} // RScenarios
