<?php



/**
 * This class defines the structure of the 'r_operation_type_required_options' table.
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
class ROperationTypeRequiredOptionsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationTypeRequiredOptionsTableMap';

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
        $this->setName('r_operation_type_required_options');
        $this->setPhpName('ROperationTypeRequiredOptions');
        $this->setClassname('ROperationTypeRequiredOptions');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('r_operation_type_required_option_r_operation_type_id', 'ROperationTypeRequiredOptionROperationTypeId', 'TINYINT' , 'r_operation_type', 'ot_id', true, 1, null);
        $this->addForeignPrimaryKey('r_operation_type_required_option_r_operation_option_id', 'ROperationTypeRequiredOptionROperationOptionId', 'INTEGER' , 'r_operation_options', 'r_op_option_id', true, 4, null);
        // validators
        $this->addValidator('r_operation_type_required_option_r_operation_type_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_operation_type_required_option_r_operation_type_id doit être renseigné.');
        $this->addValidator('r_operation_type_required_option_r_operation_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_type_required_option_r_operation_type_id doit être un int.');
        $this->addValidator('r_operation_type_required_option_r_operation_option_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_operation_type_required_option_r_operation_option_id doit être renseigné.');
        $this->addValidator('r_operation_type_required_option_r_operation_option_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_type_required_option_r_operation_option_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ROperationOptions', 'ROperationOptions', RelationMap::MANY_TO_ONE, array('r_operation_type_required_option_r_operation_option_id' => 'r_op_option_id', ), null, null);
        $this->addRelation('ROperationType', 'ROperationType', RelationMap::MANY_TO_ONE, array('r_operation_type_required_option_r_operation_type_id' => 'ot_id', ), null, null);
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

} // ROperationTypeRequiredOptionsTableMap
