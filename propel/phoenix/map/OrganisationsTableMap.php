<?php



/**
 * This class defines the structure of the 'organisations' table.
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
class OrganisationsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OrganisationsTableMap';

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
        $this->setName('organisations');
        $this->setPhpName('Organisations');
        $this->setClassname('Organisations');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('organisation_id', 'OrganisationId', 'INTEGER', true, 11, null);
        $this->addColumn('organisation_name', 'OrganisationName', 'VARCHAR', true, 150, null);
        // validators
        $this->addValidator('organisation_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ organisation_id doit être renseigné.');
        $this->addValidator('organisation_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ organisation_id doit être un int.');
        $this->addValidator('organisation_name', 'required', 'propel.validator.RequiredValidator', '', 'L\'intitulé de organisation doit être renseigné.');
        $this->addValidator('organisation_name', 'maxLength', 'propel.validator.MaxLengthValidator', '150', 'Vous êtes limité à 150 caractères pour écrire le nom de votre organisation');
        $this->addValidator('organisation_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ organisation_name doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AclGroups', 'AclGroups', RelationMap::ONE_TO_MANY, array('organisation_id' => 'group_organisation_id', ), null, null, 'AclGroupss');
        $this->addRelation('Settings', 'Settings', RelationMap::ONE_TO_MANY, array('organisation_id' => 'setting_organisation_id', ), null, null, 'Settingss');
        $this->addRelation('LnkUsersOrganisations', 'LnkUsersOrganisations', RelationMap::ONE_TO_MANY, array('organisation_id' => 'lnk_users_organisations_organisation_id', ), null, null, 'LnkUsersOrganisationss');
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

} // OrganisationsTableMap
