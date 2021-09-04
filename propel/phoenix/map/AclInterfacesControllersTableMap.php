<?php



/**
 * This class defines the structure of the 'acl_interfaces_controllers' table.
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
class AclInterfacesControllersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.AclInterfacesControllersTableMap';

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
        $this->setName('acl_interfaces_controllers');
        $this->setPhpName('AclInterfacesControllers');
        $this->setClassname('AclInterfacesControllers');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('int_cont_id', 'IntContId', 'INTEGER', true, 4, null);
        $this->addForeignKey('module_id', 'ModuleId', 'INTEGER', 'acl_modules', 'module_id', false, 4, null);
        $this->addColumn('interface_name', 'InterfaceName', 'VARCHAR', false, 100, null);
        $this->addColumn('controller_name', 'ControllerName', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('module_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ module_id doit être un int.');
        $this->addValidator('interface_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ interface_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('interface_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ interface_name doit être un string.');
        $this->addValidator('controller_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ controller_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('controller_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ controller_name doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AclModules', 'AclModules', RelationMap::MANY_TO_ONE, array('module_id' => 'module_id', ), null, null);
        $this->addRelation('AclActions', 'AclActions', RelationMap::ONE_TO_MANY, array('int_cont_id' => 'int_cont_id', ), null, null, 'AclActionss');
        $this->addRelation('AclFonctionnalites', 'AclFonctionnalites', RelationMap::ONE_TO_MANY, array('int_cont_id' => 'int_cont_id', ), null, null, 'AclFonctionnalitess');
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

} // AclInterfacesControllersTableMap
