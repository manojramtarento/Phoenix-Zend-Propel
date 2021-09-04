<?php



/**
 * This class defines the structure of the 'r_operation_options_tpl' table.
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
class ROperationOptionsTplTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationOptionsTplTableMap';

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
        $this->setName('r_operation_options_tpl');
        $this->setPhpName('ROperationOptionsTpl');
        $this->setClassname('ROperationOptionsTpl');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_op_option_tpl_id', 'ROpOptionTplId', 'INTEGER', true, 4, null);
        $this->addColumn('r_opt_id', 'ROptId', 'INTEGER', true, 4, null);
        $this->addColumn('r_rub_id', 'RRubId', 'INTEGER', true, 4, null);
        $this->addColumn('r_prest_id', 'RPrestId', 'INTEGER', true, 4, null);
        $this->addColumn('r_op_option_tpl_is_mandatory', 'ROpOptionTplIsMandatory', 'BOOLEAN', false, 1, false);
        // validators
        $this->addValidator('r_rub_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_rub_id doit être renseigné.');
        $this->addValidator('r_rub_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_rub_id doit être un int.');
        $this->addValidator('r_prest_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_prest_id doit être renseigné.');
        $this->addValidator('r_prest_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_prest_id doit être un int.');
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

} // ROperationOptionsTplTableMap
