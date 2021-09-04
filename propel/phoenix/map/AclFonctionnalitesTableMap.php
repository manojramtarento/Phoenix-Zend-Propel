<?php



/**
 * This class defines the structure of the 'acl_fonctionnalites' table.
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
class AclFonctionnalitesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.AclFonctionnalitesTableMap';

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
        $this->setName('acl_fonctionnalites');
        $this->setPhpName('AclFonctionnalites');
        $this->setClassname('AclFonctionnalites');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('fonc_id', 'FoncId', 'INTEGER', true, 4, null);
        $this->addForeignKey('int_cont_id', 'IntContId', 'INTEGER', 'acl_interfaces_controllers', 'int_cont_id', false, 4, null);
        $this->addColumn('fonc_name', 'FoncName', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('fonc_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ fonc_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('fonc_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fonc_name doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AclInterfacesControllers', 'AclInterfacesControllers', RelationMap::MANY_TO_ONE, array('int_cont_id' => 'int_cont_id', ), null, null);
        $this->addRelation('AclActions', 'AclActions', RelationMap::ONE_TO_MANY, array('fonc_id' => 'fonc_id', ), null, null, 'AclActionss');
        $this->addRelation('LnkAclGroupsFonctionnalites', 'LnkAclGroupsFonctionnalites', RelationMap::ONE_TO_MANY, array('fonc_id' => 'lnk_acl_groups_fonctionnalite_fonc_id', ), null, null, 'LnkAclGroupsFonctionnalitess');
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

} // AclFonctionnalitesTableMap
