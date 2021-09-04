<?php



/**
 * This class defines the structure of the 'i18n' table.
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
class I18nTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.I18nTableMap';

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
        $this->setName('i18n');
        $this->setPhpName('I18n');
        $this->setClassname('I18n');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('i18n_id', 'I18nId', 'INTEGER', true, 4, null);
        $this->addColumn('model_name', 'ModelName', 'VARCHAR', true, 100, null);
        $this->addColumn('locale', 'Locale', 'CHAR', true, 10, null);
        $this->addColumn('field_name', 'FieldName', 'VARCHAR', true, 100, null);
        $this->addColumn('foreign_key', 'ForeignKey', 'INTEGER', true, 4, null);
        $this->addColumn('field_value', 'FieldValue', 'LONGVARCHAR', false, null, null);
        // validators
        $this->addValidator('i18n_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ i18n_id doit être renseigné.');
        $this->addValidator('i18n_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ i18n_id doit être un int.');
        $this->addValidator('model_name', 'required', 'propel.validator.RequiredValidator', '', 'Le champ i18n_id doit être renseigné.');
        $this->addValidator('model_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ model_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('model_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ model_name doit être un string.');
        $this->addValidator('field_name', 'required', 'propel.validator.RequiredValidator', '', 'Le champ field_name doit être renseigné.');
        $this->addValidator('field_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ field_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('field_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ field_name doit être un string.');
        $this->addValidator('foreign_key', 'required', 'propel.validator.RequiredValidator', '', 'Le champ foreign_key doit être renseigné.');
        $this->addValidator('foreign_key', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ foreign_key doit être un int');
        $this->addValidator('model_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ model_name doit être un string.');
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
            'validateisunique' =>  array (
  'columns' => 'model_name,locale,field_name,field_value',
  'message' => 'Cette traduction existe déjà.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // I18nTableMap
