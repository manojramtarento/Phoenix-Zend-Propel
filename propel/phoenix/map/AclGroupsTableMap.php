<?php



/**
 * This class defines the structure of the 'acl_groups' table.
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
class AclGroupsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.AclGroupsTableMap';

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
        $this->setName('acl_groups');
        $this->setPhpName('AclGroups');
        $this->setClassname('AclGroups');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('group_id', 'GroupId', 'SMALLINT', true, 2, null);
        $this->addColumn('group_name', 'GroupName', 'VARCHAR', true, 100, null);
        $this->addForeignKey('group_organisation_id', 'GroupOrganisationId', 'INTEGER', 'organisations', 'organisation_id', true, 11, null);
        // validators
        $this->addValidator('group_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ group_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('group_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ group_name doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Organisations', 'Organisations', RelationMap::MANY_TO_ONE, array('group_organisation_id' => 'organisation_id', ), null, null);
        $this->addRelation('LnkAclGroupsFonctionnalites', 'LnkAclGroupsFonctionnalites', RelationMap::ONE_TO_MANY, array('group_id' => 'lnk_acl_groups_fonctionnalite_group_id', ), null, null, 'LnkAclGroupsFonctionnalitess');
        $this->addRelation('LnkUsersAclGroups', 'LnkUsersAclGroups', RelationMap::ONE_TO_MANY, array('group_id' => 'group_id', ), null, null, 'LnkUsersAclGroupss');
        $this->addRelation('RPrestations', 'RPrestations', RelationMap::ONE_TO_MANY, array('group_id' => 'r_p_groupe_validation_id', ), null, null, 'RPrestationss');
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
  'columns' => 'group_name,group_organisation_id',
  'message' => 'Ce nom de rôle existe déjà pour cette organisation',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // AclGroupsTableMap
