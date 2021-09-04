<?php



/**
 * This class defines the structure of the 'operation_scenarii_parents' table.
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
class OperationScenariiParentsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationScenariiParentsTableMap';

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
        $this->setName('operation_scenarii_parents');
        $this->setPhpName('OperationScenariiParents');
        $this->setClassname('OperationScenariiParents');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('op_id', 'OpId', 'INTEGER', true, 4, null);
        $this->addForeignPrimaryKey('ops_numero', 'OpsNumero', 'SMALLINT' , 'operation_scenarii', 'op_scenario_numero', true, 2, null);
        $this->addForeignPrimaryKey('ops_parent_numero', 'OpsParentNumero', 'SMALLINT' , 'operation_scenarii', 'op_scenario_numero', true, 2, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OperationScenariiRelatedByOpsNumero', 'OperationScenarii', RelationMap::MANY_TO_ONE, array('ops_numero' => 'op_scenario_numero', ), null, null);
        $this->addRelation('OperationScenariiRelatedByOpsParentNumero', 'OperationScenarii', RelationMap::MANY_TO_ONE, array('ops_parent_numero' => 'op_scenario_numero', ), null, null);
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

} // OperationScenariiParentsTableMap
