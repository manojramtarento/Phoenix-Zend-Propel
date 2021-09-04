<?php



/**
 * This class defines the structure of the 'r_scenarios' table.
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
class RScenariosTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RScenariosTableMap';

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
        $this->setName('r_scenarios');
        $this->setPhpName('RScenarios');
        $this->setClassname('RScenarios');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_scenario_id', 'RScenarioId', 'INTEGER', true, 4, null);
        $this->addColumn('r_scenario_libelle', 'RScenarioLibelle', 'VARCHAR', false, 510, null);
        $this->addColumn('r_scenario_libelle_en', 'RScenarioLibelleEn', 'VARCHAR', false, 510, null);
        $this->addColumn('r_scenario_actif', 'RScenarioActif', 'BOOLEAN', false, 1, null);
        // validators
        $this->addValidator('r_scenario_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ r_scenario_libelle ne doit pas dépasser 510 caractères.');
        $this->addValidator('r_scenario_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_scenario_libelle doit être un string.');
        $this->addValidator('r_scenario_libelle_en', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ r_scenario_libelle_en ne doit pas dépasser 510 caractères.');
        $this->addValidator('r_scenario_libelle_en', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_scenario_libelle_en doit être un string.');
        $this->addValidator('r_scenario_actif', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ r_scenario_actif doit être un boolean.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OperationScenarii', 'OperationScenarii', RelationMap::ONE_TO_MANY, array('r_scenario_id' => 'op_r_scenario_id', ), null, null, 'OperationScenariis');
        $this->addRelation('ROperationTypeSubTplScenario', 'ROperationTypeSubTplScenario', RelationMap::ONE_TO_MANY, array('r_scenario_id' => 'r_scenario_id', ), null, null, 'ROperationTypeSubTplScenarios');
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
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // RScenariosTableMap
