<?php



/**
 * This class defines the structure of the 'lnk_acl_groups_fonctionnalites' table.
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
class LnkAclGroupsFonctionnalitesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkAclGroupsFonctionnalitesTableMap';

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
        $this->setName('lnk_acl_groups_fonctionnalites');
        $this->setPhpName('LnkAclGroupsFonctionnalites');
        $this->setClassname('LnkAclGroupsFonctionnalites');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('lnk_acl_groups_fonctionnalite_id', 'LnkAclGroupsFonctionnaliteId', 'INTEGER', true, 4, null);
        $this->addForeignKey('lnk_acl_groups_fonctionnalite_group_id', 'LnkAclGroupsFonctionnaliteGroupId', 'SMALLINT', 'acl_groups', 'group_id', true, 2, null);
        $this->addForeignKey('lnk_acl_groups_fonctionnalite_fonc_id', 'LnkAclGroupsFonctionnaliteFoncId', 'INTEGER', 'acl_fonctionnalites', 'fonc_id', true, 4, null);
        // validators
        $this->addValidator('lnk_acl_groups_fonctionnalite_group_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_acl_groups_fonctionnalite_group_id doit être un int.');
        $this->addValidator('lnk_acl_groups_fonctionnalite_fonc_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_acl_groups_fonctionnalite_fonc_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AclFonctionnalites', 'AclFonctionnalites', RelationMap::MANY_TO_ONE, array('lnk_acl_groups_fonctionnalite_fonc_id' => 'fonc_id', ), null, null);
        $this->addRelation('AclGroups', 'AclGroups', RelationMap::MANY_TO_ONE, array('lnk_acl_groups_fonctionnalite_group_id' => 'group_id', ), null, null);
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

} // LnkAclGroupsFonctionnalitesTableMap
