<?php



/**
 * This class defines the structure of the 'lnk_users_organisations' table.
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
class LnkUsersOrganisationsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkUsersOrganisationsTableMap';

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
        $this->setName('lnk_users_organisations');
        $this->setPhpName('LnkUsersOrganisations');
        $this->setClassname('LnkUsersOrganisations');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('lnk_users_organisations_user_id', 'LnkUsersOrganisationsUserId', 'INTEGER' , 'users', 'user_id', true, 4, null);
        $this->addForeignPrimaryKey('lnk_users_organisations_organisation_id', 'LnkUsersOrganisationsOrganisationId', 'INTEGER' , 'organisations', 'organisation_id', true, 4, null);
        // validators
        $this->addValidator('lnk_users_organisations_user_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ lnk_users_organisations_user_id doit être renseigné.');
        $this->addValidator('lnk_users_organisations_user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_users_organisations_user_id doit être un int.');
        $this->addValidator('lnk_users_organisations_organisation_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ lnk_users_organisations_organisation_id doit être renseigné.');
        $this->addValidator('lnk_users_organisations_organisation_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_users_organisations_organisation_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Users', 'Users', RelationMap::MANY_TO_ONE, array('lnk_users_organisations_user_id' => 'user_id', ), null, null);
        $this->addRelation('Organisations', 'Organisations', RelationMap::MANY_TO_ONE, array('lnk_users_organisations_organisation_id' => 'organisation_id', ), null, null);
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

} // LnkUsersOrganisationsTableMap
