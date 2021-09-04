<?php



/**
 * This class defines the structure of the 'acl_modules' table.
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
class AclModulesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.AclModulesTableMap';

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
        $this->setName('acl_modules');
        $this->setPhpName('AclModules');
        $this->setClassname('AclModules');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('module_id', 'ModuleId', 'INTEGER', true, 4, null);
        $this->addColumn('module_name', 'ModuleName', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('module_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ module_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('module_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ module_name doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AclInterfacesControllers', 'AclInterfacesControllers', RelationMap::ONE_TO_MANY, array('module_id' => 'module_id', ), null, null, 'AclInterfacesControllerss');
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

} // AclModulesTableMap
