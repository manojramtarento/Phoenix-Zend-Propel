<?php



/**
 * This class defines the structure of the 'acl_actions' table.
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
class AclActionsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.AclActionsTableMap';

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
        $this->setName('acl_actions');
        $this->setPhpName('AclActions');
        $this->setClassname('AclActions');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('action_id', 'ActionId', 'INTEGER', true, 4, null);
        $this->addForeignKey('int_cont_id', 'IntContId', 'INTEGER', 'acl_interfaces_controllers', 'int_cont_id', false, 4, null);
        $this->addColumn('action_name', 'ActionName', 'VARCHAR', false, 100, null);
        $this->addForeignKey('fonc_id', 'FoncId', 'INTEGER', 'acl_fonctionnalites', 'fonc_id', false, 4, null);
        $this->addColumn('comment', 'Comment', 'VARCHAR', false, 200, null);
        // validators
        $this->addValidator('int_cont_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ int_cont_id doit être un int.');
        $this->addValidator('action_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ action_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('action_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ action_name doit être un string.');
        $this->addValidator('fonc_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fonc_id doit être un int.');
        $this->addValidator('comment', 'maxLength', 'propel.validator.MaxLengthValidator', '200', 'Le champ comment ne doit pas dépasser 200 caractères.');
        $this->addValidator('comment', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ comment doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AclInterfacesControllers', 'AclInterfacesControllers', RelationMap::MANY_TO_ONE, array('int_cont_id' => 'int_cont_id', ), null, null);
        $this->addRelation('AclFonctionnalites', 'AclFonctionnalites', RelationMap::MANY_TO_ONE, array('fonc_id' => 'fonc_id', ), null, null);
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

} // AclActionsTableMap
