<?php



/**
 * This class defines the structure of the 'r_operation_medias' table.
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
class ROperationMediasTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationMediasTableMap';

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
        $this->setName('r_operation_medias');
        $this->setPhpName('ROperationMedias');
        $this->setClassname('ROperationMedias');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_operation_media_id', 'ROperationMediaId', 'INTEGER', true, 4, null);
        $this->addColumn('r_operation_media_label', 'ROperationMediaLabel', 'VARCHAR', true, 100, null);
        $this->addColumn('r_operation_media_actif', 'ROperationMediaActif', 'TINYINT', true, 1, 1);
        $this->addColumn('r_operation_media_order', 'ROperationMediaOrder', 'SMALLINT', false, 2, null);
        // validators
        $this->addValidator('r_operation_media_label', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_operation_media_label ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_operation_media_label', 'required', 'propel.validator.RequiredValidator', '', 'Un libellé doit être renseigné.');
        $this->addValidator('r_operation_media_label', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_operation_media_label doit être un string.');
        $this->addValidator('r_operation_media_actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_media_actif doit être un int.');
        $this->addValidator('r_operation_media_actif', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_operation_media_actif doit être renseigné.');
        $this->addValidator('r_operation_media_order', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_media_order doit être un int.');
        $this->addValidator('r_operation_media_order', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_operation_media_order doit être renseigné.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('r_operation_media_id' => 'operation_media_id', ), null, null, 'Operationss');
        $this->addRelation('LnkROperationTypeSubTemplateMediasUniverses', 'LnkROperationTypeSubTemplateMediasUniverses', RelationMap::ONE_TO_MANY, array('r_operation_media_id' => 'lnk_r_operation_type_sub_template_media_universe_media_id', ), null, null, 'LnkROperationTypeSubTemplateMediasUniversess');
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

} // ROperationMediasTableMap
