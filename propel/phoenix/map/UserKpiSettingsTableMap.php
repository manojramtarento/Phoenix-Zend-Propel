<?php



/**
 * This class defines the structure of the 'user_kpi_settings' table.
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
class UserKpiSettingsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.UserKpiSettingsTableMap';

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
        $this->setName('user_kpi_settings');
        $this->setPhpName('UserKpiSettings');
        $this->setClassname('UserKpiSettings');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('user_kpi_settings_id', 'UserKpiSettingsId', 'INTEGER', true, 4, null);
        $this->addForeignKey('user_kpi_settings_user_id', 'UserKpiSettingsUserId', 'INTEGER', 'users', 'user_id', true, 4, null);
        $this->addColumn('user_kpi_settings_name', 'UserKpiSettingsName', 'VARCHAR', true, 255, null);
        $this->addColumn('user_kpi_settings_value', 'UserKpiSettingsValue', 'LONGVARCHAR', true, 2147483647, null);
        // validators
        $this->addValidator('user_kpi_settings_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_kpi_settings_id doit être un int.');
        $this->addValidator('user_kpi_settings_user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_kpi_settings_user_id doit être un int.');
        $this->addValidator('user_kpi_settings_name', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'Le champ user_kpi_settings_name ne doit pas dépasser 255 caractères.');
        $this->addValidator('user_kpi_settings_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ user_kpi_settings_name doit être un string.');
        $this->addValidator('user_kpi_settings_value', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ user_kpi_settings_value ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('user_kpi_settings_value', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ user_kpi_settings_value doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Users', 'Users', RelationMap::MANY_TO_ONE, array('user_kpi_settings_user_id' => 'user_id', ), null, null);
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

} // UserKpiSettingsTableMap
