<?php



/**
 * This class defines the structure of the 'operation_scenarii' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.phoenix.map
 */
class OperationScenariiTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationScenariiTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('operation_scenarii');
        $this->setPhpName('OperationScenarii');
        $this->setClassname('OperationScenarii');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('op_scenario_id', 'OpScenarioId', 'INTEGER', true, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', false, 4, null);
        $this->addColumn('op_scenario_numero', 'OpScenarioNumero', 'SMALLINT', false, 2, null);
        $this->addForeignKey('op_r_scenario_id', 'OpRScenarioId', 'INTEGER', 'r_scenarios', 'r_scenario_id', true, 4, null);
        $this->addColumn('op_scenario_libelle', 'OpScenarioLibelle', 'VARCHAR', false, 255, null);
        $this->addColumn('op_scenario_volume', 'OpScenarioVolume', 'INTEGER', false, 4, null);
        $this->addColumn('op_scenario_pcent', 'OpScenarioPcent', 'FLOAT', false, 8, 100);
        $this->addForeignKey('op_r_prime_id', 'OpRPrimeId', 'INTEGER', 'operation_primes', 'op_prime_id', false, 4, null);
        $this->addColumn('op_scenario_reference', 'OpScenarioReference', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('op_r_scenario_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_r_scenario_id doit être un int.');
        $this->addValidator('op_r_scenario_id', 'required', 'propel.validator.RequiredValidator', '', 'Une référence à un scénario doit être spécifiée');
        $this->addValidator('op_r_prime_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_r_scenario_id doit être un int.');
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('op_scenario_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Un nom doit être donné au scénario');
        $this->addValidator('op_scenario_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'Le champ op_scenario_libelle ne doit pas dépasser 255 caractères.');
        $this->addValidator('op_scenario_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_scenario_libelle doit être un string.');
        $this->addValidator('op_scenario_numero', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_scenario_numero doit être un int.');
        $this->addValidator('op_scenario_volume', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_scenario_volume doit être un int.');
        $this->addValidator('op_scenario_pcent', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_scenario_pcent doit être un float.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('RScenarios', 'RScenarios', RelationMap::MANY_TO_ONE, array('op_r_scenario_id' => 'r_scenario_id', ), null, null);
        $this->addRelation('OperationPrimes', 'OperationPrimes', RelationMap::MANY_TO_ONE, array('op_r_prime_id' => 'op_prime_id', ), null, null);
        $this->addRelation('OperationPrestations', 'OperationPrestations', RelationMap::ONE_TO_MANY, array('op_scenario_id' => 'op_prest_scena_id', ), null, null, 'OperationPrestationss');
        $this->addRelation('OperationScenariiParentsRelatedByOpsNumero', 'OperationScenariiParents', RelationMap::ONE_TO_MANY, array('op_scenario_numero' => 'ops_numero', ), null, null, 'OperationScenariiParentssRelatedByOpsNumero');
        $this->addRelation('OperationScenariiParentsRelatedByOpsParentNumero', 'OperationScenariiParents', RelationMap::ONE_TO_MANY, array('op_scenario_numero' => 'ops_parent_numero', ), null, null, 'OperationScenariiParentssRelatedByOpsParentNumero');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'validateisunique' =>  array (
  'columns' => 'op_scenario_libelle,op_id',
  'message' => 'Ce nom est déjà utilisé par un autre scénario de la même opération.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // OperationScenariiTableMap
