<?php



/**
 * This class defines the structure of the 'files' table.
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
class FilesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.FilesTableMap';

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
        $this->setName('files');
        $this->setPhpName('Files');
        $this->setClassname('Files');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('file_id', 'FileId', 'INTEGER', true, 4, null);
        $this->addForeignKey('file_category_id', 'FileCategoryId', 'TINYINT', 'r_file_categories', 'r_fca_id', false, 1, null);
        $this->addColumn('file_version', 'FileVersion', 'INTEGER', false, 1, null);
        $this->addColumn('file_entity_name', 'FileEntityName', 'VARCHAR', false, 100, null);
        $this->addColumn('file_entity_id', 'FileEntityId', 'INTEGER', false, 4, null);
        $this->addColumn('file_name', 'FileName', 'VARCHAR', false, 100, null);
        $this->addColumn('file_is_accepted_version', 'FileIsAcceptedVersion', 'BOOLEAN', false, 1, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        // validators
        $this->addValidator('file_category_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ file_category_id doit être un int.');
        $this->addValidator('file_version', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ file_version doit être un int.');
        $this->addValidator('file_entity_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ file_entity_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('file_entity_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ file_entity_name doit être un string.');
        $this->addValidator('file_entity_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ file_entity_id doit être un int.');
        $this->addValidator('file_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ file_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('file_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ file_name doit être un string.');
        $this->addValidator('file_is_accepted_version', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ file_is_accepted_version doit être un boolean.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RFileCategories', 'RFileCategories', RelationMap::MANY_TO_ONE, array('file_category_id' => 'r_fca_id', ), null, null);
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

} // FilesTableMap
