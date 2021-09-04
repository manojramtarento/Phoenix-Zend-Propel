<?php



/**
 * This class defines the structure of the 'lnk_operation_option' table.
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
class LnkOperationOptionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkOperationOptionTableMap';

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
        $this->setName('lnk_operation_option');
        $this->setPhpName('LnkOperationOption');
        $this->setClassname('LnkOperationOption');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('lnk_op_opt_id', 'LnkOpOptId', 'INTEGER', true, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', true, 4, null);
        $this->addForeignKey('op_opt_id', 'OpOptId', 'INTEGER', 'r_operation_options', 'r_op_option_id', true, 4, null);
        $this->addColumn('is_linked', 'IsLinked', 'BOOLEAN', true, 1, null);
        // validators
        $this->addValidator('op_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_id doit être renseigné.');
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('op_opt_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_opt_id doit être renseigné.');
        $this->addValidator('op_opt_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_opt_id doit être un int.');
        $this->addValidator('is_linked', 'required', 'propel.validator.RequiredValidator', '', 'Le champ is_linked doit être renseigné.');
        $this->addValidator('is_linked', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ is_linked doit être un boolean.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('ROperationOptions', 'ROperationOptions', RelationMap::MANY_TO_ONE, array('op_opt_id' => 'r_op_option_id', ), null, null);
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

} // LnkOperationOptionTableMap
