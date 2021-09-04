<?php



/**
 * This class defines the structure of the 'settings' table.
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
class SettingsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.SettingsTableMap';

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
        $this->setName('settings');
        $this->setPhpName('Settings');
        $this->setClassname('Settings');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('setting_id', 'SettingId', 'INTEGER', true, 4, null);
        $this->addForeignKey('setting_organisation_id', 'SettingOrganisationId', 'INTEGER', 'organisations', 'organisation_id', true, 4, null);
        $this->addColumn('setting_key', 'SettingKey', 'VARCHAR', true, 255, null);
        $this->addColumn('setting_value', 'SettingValue', 'CLOB', false, null, null);
        // validators
        $this->addValidator('setting_key', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ setting_key ne doit pas dépasser 100 caractères.');
        $this->addValidator('setting_key', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ setting_key doit être un string.');
        $this->addValidator('setting_value', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ setting_value doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Organisations', 'Organisations', RelationMap::MANY_TO_ONE, array('setting_organisation_id' => 'organisation_id', ), null, null);
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
  'columns' => 'setting_organisation_id,setting_key',
  'message' => 'Cette clé de réglage existe déjà pour cette organisation.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // SettingsTableMap
