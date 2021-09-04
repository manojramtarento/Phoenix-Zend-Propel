<?php



/**
 * This class defines the structure of the 'r_operation_options_tasks' table.
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
class ROperationOptionsTasksTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationOptionsTasksTableMap';

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
        $this->setName('r_operation_options_tasks');
        $this->setPhpName('ROperationOptionsTasks');
        $this->setClassname('ROperationOptionsTasks');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('option_task_id', 'OptionTaskId', 'INTEGER', true, 4, null);
        $this->addColumn('option_id', 'OptionId', 'INTEGER', false, 4, null);
        $this->addColumn('r_op_task_type_id', 'ROpTaskTypeId', 'INTEGER', false, 4, null);
        // validators
        $this->addValidator('option_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ option_id doit être un int.');
        $this->addValidator('r_op_task_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_task_type_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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

} // ROperationOptionsTasksTableMap
