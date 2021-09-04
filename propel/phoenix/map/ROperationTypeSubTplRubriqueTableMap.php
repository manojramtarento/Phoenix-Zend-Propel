<?php



/**
 * This class defines the structure of the 'r_operation_type_sub_tpl_rubrique' table.
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
class ROperationTypeSubTplRubriqueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationTypeSubTplRubriqueTableMap';

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
        $this->setName('r_operation_type_sub_tpl_rubrique');
        $this->setPhpName('ROperationTypeSubTplRubrique');
        $this->setClassname('ROperationTypeSubTplRubrique');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ost_tpl_rubrique_id', 'OstTplRubriqueId', 'INTEGER', true, 4, null);
        $this->addForeignKey('ost_tpl_id', 'OstTplId', 'INTEGER', 'r_operation_type_sub_tpl', 'ost_tpl_id', false, 4, null);
        $this->addColumn('r_rubrique_id', 'RRubriqueId', 'INTEGER', false, 4, null);
        $this->addColumn('ost_tpl_rubrique_order', 'OstTplRubriqueOrder', 'SMALLINT', false, 2, null);
        // validators
        $this->addValidator('ost_tpl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ost_tpl_id doit être un int.');
        $this->addValidator('r_rubrique_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_rubrique_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ROperationTypeSubTpl', 'ROperationTypeSubTpl', RelationMap::MANY_TO_ONE, array('ost_tpl_id' => 'ost_tpl_id', ), null, null);
        $this->addRelation('ROperationTypeSubTplPrestation', 'ROperationTypeSubTplPrestation', RelationMap::ONE_TO_MANY, array('ost_tpl_rubrique_id' => 'ost_tpl_rubrique_id', ), null, null, 'ROperationTypeSubTplPrestations');
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

} // ROperationTypeSubTplRubriqueTableMap
