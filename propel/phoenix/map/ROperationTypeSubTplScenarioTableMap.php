<?php



/**
 * This class defines the structure of the 'r_operation_type_sub_tpl_scenario' table.
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
class ROperationTypeSubTplScenarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationTypeSubTplScenarioTableMap';

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
        $this->setName('r_operation_type_sub_tpl_scenario');
        $this->setPhpName('ROperationTypeSubTplScenario');
        $this->setClassname('ROperationTypeSubTplScenario');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ost_tpl_scenario_id', 'OstTplScenarioId', 'INTEGER', true, 4, null);
        $this->addForeignKey('ost_tpl_id', 'OstTplId', 'INTEGER', 'r_operation_type_sub_tpl', 'ost_tpl_id', true, 4, null);
        $this->addForeignKey('r_scenario_id', 'RScenarioId', 'INTEGER', 'r_scenarios', 'r_scenario_id', true, 4, null);
        $this->addColumn('r_scenario_numero', 'RScenarioNumero', 'SMALLINT', false, 2, null);
        $this->addColumn('r_scenario_pcent', 'RScenarioPcent', 'SMALLINT', false, 2, null);
        $this->addColumn('r_prime_numero', 'RPrimeNumero', 'SMALLINT', false, 2, null);
        $this->addColumn('r_scenario_reference', 'RScenarioReference', 'VARCHAR', false, 100, null);
        $this->addColumn('ost_tpl_scenario_is_mandatory', 'OstTplScenarioIsMandatory', 'BOOLEAN', false, 1, false);
        // validators
        $this->addValidator('ost_tpl_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ ost_tpl_id doit être renseigné.');
        $this->addValidator('ost_tpl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ost_tpl_id doit être un int.');
        $this->addValidator('r_scenario_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_scenario_id doit être renseigné.');
        $this->addValidator('r_scenario_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_scenario_id doit être un int.');
        $this->addValidator('r_scenario_pcent', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_scenario_pcent doit être un int.');
        $this->addValidator('r_prime_numero', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_prime_numero doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ROperationTypeSubTpl', 'ROperationTypeSubTpl', RelationMap::MANY_TO_ONE, array('ost_tpl_id' => 'ost_tpl_id', ), null, null);
        $this->addRelation('RScenarios', 'RScenarios', RelationMap::MANY_TO_ONE, array('r_scenario_id' => 'r_scenario_id', ), null, null);
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

} // ROperationTypeSubTplScenarioTableMap
