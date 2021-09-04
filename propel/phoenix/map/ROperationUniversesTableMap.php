<?php



/**
 * This class defines the structure of the 'r_operation_universes' table.
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
class ROperationUniversesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationUniversesTableMap';

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
        $this->setName('r_operation_universes');
        $this->setPhpName('ROperationUniverses');
        $this->setClassname('ROperationUniverses');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_operation_universe_id', 'ROperationUniverseId', 'INTEGER', true, 4, null);
        $this->addColumn('r_operation_universe_label', 'ROperationUniverseLabel', 'VARCHAR', true, 100, null);
        $this->addColumn('r_operation_universe_actif', 'ROperationUniverseActif', 'TINYINT', true, 1, 1);
        $this->addColumn('r_operation_universe_order', 'ROperationUniverseOrder', 'SMALLINT', false, 2, null);
        // validators
        $this->addValidator('r_operation_universe_label', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_operation_universe_label ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_operation_universe_label', 'required', 'propel.validator.RequiredValidator', '', 'Un libellé doit être renseigné.');
        $this->addValidator('r_operation_universe_label', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_operation_universe_label doit être un string.');
        $this->addValidator('r_operation_universe_actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_universe_actif doit être un int.');
        $this->addValidator('r_operation_universe_actif', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_operation_universe_actif doit être renseigné.');
        $this->addValidator('r_operation_universe_order', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_universe_order doit être un int.');
        $this->addValidator('r_operation_universe_order', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_operation_universe_order doit être renseigné.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('r_operation_universe_id' => 'operation_universe_id', ), null, null, 'Operationss');
        $this->addRelation('LnkROperationTypeSubTemplateMediasUniverses', 'LnkROperationTypeSubTemplateMediasUniverses', RelationMap::ONE_TO_MANY, array('r_operation_universe_id' => 'lnk_r_operation_type_sub_template_media_universe_universe_id', ), null, null, 'LnkROperationTypeSubTemplateMediasUniversess');
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

} // ROperationUniversesTableMap
