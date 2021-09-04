<?php



/**
 * This class defines the structure of the 'gedelog_operation_params' table.
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
class GedelogOperationParamsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.GedelogOperationParamsTableMap';

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
        $this->setName('gedelog_operation_params');
        $this->setPhpName('GedelogOperationParams');
        $this->setClassname('GedelogOperationParams');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('op_id', 'OpId', 'INTEGER', true, 4, null);
        $this->addColumn('gdl_op_id', 'GdlOpId', 'INTEGER', true, 4, null);
        $this->addColumn('gdl_ent_id', 'GdlEntId', 'INTEGER', true, 4, null);
        $this->addColumn('gdl_comt_id', 'GdlComtId', 'INTEGER', true, 4, null);
        $this->addColumn('gdl_fourn_id', 'GdlFournId', 'INTEGER', true, 4, null);
        // validators
        $this->addValidator('gdl_op_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ gdl_op_id doit être renseigné.');
        $this->addValidator('gdl_op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ gdl_op_id doit être un int.');
        $this->addValidator('gdl_ent_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ gdl_ent_id doit être renseigné.');
        $this->addValidator('gdl_ent_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ gdl_ent_id doit être un int.');
        $this->addValidator('gdl_comt_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ gdl_comt_id doit être renseigné.');
        $this->addValidator('gdl_comt_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ gdl_comt_id doit être un int.');
        $this->addValidator('gdl_fourn_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ gdl_fourn_id doit être renseigné.');
        $this->addValidator('gdl_fourn_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ gdl_fourn_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_ONE, array('op_id' => 'op_id', ), null, null);
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

} // GedelogOperationParamsTableMap
