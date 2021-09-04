<?php



/**
 * This class defines the structure of the 'r_operation_options' table.
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
class ROperationOptionsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationOptionsTableMap';

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
        $this->setName('r_operation_options');
        $this->setPhpName('ROperationOptions');
        $this->setClassname('ROperationOptions');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_op_option_id', 'ROpOptionId', 'INTEGER', true, 4, null);
        $this->addColumn('r_op_option_libelle', 'ROpOptionLibelle', 'VARCHAR', true, 100, null);
        $this->addColumn('r_op_option_type', 'ROpOptionType', 'TINYINT', true, 1, 1);
        $this->addColumn('r_op_option_parent', 'ROpOptionParent', 'INTEGER', false, 4, null);
        $this->addColumn('r_op_option_order', 'ROpOptionOrder', 'SMALLINT', false, 6, null);
        $this->addColumn('r_operation_option_r_activity_kpi_id', 'ROperationOptionRActivityKpiId', 'INTEGER', false, 4, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', false, 1, true);
        // validators
        $this->addValidator('r_op_option_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_op_option_libelle doit être renseigné.');
        $this->addValidator('r_op_option_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_op_option_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_op_option_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_op_option_libelle doit être un string.');
        $this->addValidator('r_op_option_type', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_op_option_type doit être renseigné.');
        $this->addValidator('r_op_option_type', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_option_type doit être un int.');
        $this->addValidator('r_op_option_parent', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_option_parent doit être un int.');
        $this->addValidator('r_operation_option_r_activity_kpi_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_option_r_activity_kpi_id doit être un int.');
        $this->addValidator('r_op_option_order', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_option_order doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('LnkOperationOption', 'LnkOperationOption', RelationMap::ONE_TO_MANY, array('r_op_option_id' => 'op_opt_id', ), null, null, 'LnkOperationOptions');
        $this->addRelation('ROperationTypeRequiredOptions', 'ROperationTypeRequiredOptions', RelationMap::ONE_TO_MANY, array('r_op_option_id' => 'r_operation_type_required_option_r_operation_option_id', ), null, null, 'ROperationTypeRequiredOptionss');
        $this->addRelation('ROperationStatusRequiredOptions', 'ROperationStatusRequiredOptions', RelationMap::ONE_TO_MANY, array('r_op_option_id' => 'r_operation_status_required_options_r_operation_option_id', ), null, null, 'ROperationStatusRequiredOptionss');
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

} // ROperationOptionsTableMap
