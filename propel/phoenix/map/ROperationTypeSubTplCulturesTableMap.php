<?php



/**
 * This class defines the structure of the 'r_operation_type_sub_tpl_cultures' table.
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
class ROperationTypeSubTplCulturesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationTypeSubTplCulturesTableMap';

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
        $this->setName('r_operation_type_sub_tpl_cultures');
        $this->setPhpName('ROperationTypeSubTplCultures');
        $this->setClassname('ROperationTypeSubTplCultures');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_operation_type_sub_tpl_culture_id', 'ROperationTypeSubTplCultureId', 'INTEGER', true, 4, null);
        $this->addForeignKey('r_operation_type_sub_tpl_culture_tpl_id', 'ROperationTypeSubTplCultureTplId', 'INTEGER', 'r_operation_type_sub_tpl', 'ost_tpl_id', false, 4, null);
        $this->addForeignKey('r_operation_type_sub_tpl_culture_r_culture_id', 'ROperationTypeSubTplCultureRCultureId', 'INTEGER', 'r_cultures', 'r_culture_id', false, 4, null);
        $this->addColumn('r_operation_type_sub_tpl_culture_is_culture_linked', 'ROperationTypeSubTplCultureIsCultureLinked', 'TINYINT', true, 1, 0);
        // validators
        $this->addValidator('r_operation_type_sub_tpl_culture_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_type_sub_tpl_culture_id doit être un int.');
        $this->addValidator('r_operation_type_sub_tpl_culture_tpl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_type_sub_tpl_culture_tpl_id doit être un int.');
        $this->addValidator('r_operation_type_sub_tpl_culture_r_culture_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_type_sub_tpl_culture_r_culture_id doit être un int.');
        $this->addValidator('r_operation_type_sub_tpl_culture_is_culture_linked', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_type_sub_tpl_culture_is_culture_linked doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ROperationTypeSubTpl', 'ROperationTypeSubTpl', RelationMap::MANY_TO_ONE, array('r_operation_type_sub_tpl_culture_tpl_id' => 'ost_tpl_id', ), null, null);
        $this->addRelation('RCultures', 'RCultures', RelationMap::MANY_TO_ONE, array('r_operation_type_sub_tpl_culture_r_culture_id' => 'r_culture_id', ), null, null);
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

} // ROperationTypeSubTplCulturesTableMap
