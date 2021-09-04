<?php



/**
 * This class defines the structure of the 'r_user_types' table.
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
class RUserTypesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RUserTypesTableMap';

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
        $this->setName('r_user_types');
        $this->setPhpName('RUserTypes');
        $this->setClassname('RUserTypes');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_user_type_id', 'RUserTypeId', 'INTEGER', true, 4, null);
        $this->addColumn('r_user_type_short_name', 'RUserTypeShortName', 'VARCHAR', true, 5, null);
        $this->addColumn('r_user_type_full_name', 'RUserTypeFullName', 'VARCHAR', false, 60, null);
        $this->addColumn('r_user_type_actif', 'RUserTypeActif', 'TINYINT', true, 1, 1);
        // validators
        $this->addValidator('r_user_type_short_name', 'maxLength', 'propel.validator.MaxLengthValidator', '5', 'Le champ r_user_type_short_name ne doit pas dépasser 5 caractères.');
        $this->addValidator('r_user_type_short_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_user_type_short_name doit être un string.');
        $this->addValidator('r_user_type_full_name', 'maxLength', 'propel.validator.MaxLengthValidator', '60', 'Le champ r_user_type_full_name ne doit pas dépasser 60 caractères.');
        $this->addValidator('r_user_type_full_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_user_type_full_name doit être un string.');
        $this->addValidator('r_user_type_actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_user_type_actif doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Users', 'Users', RelationMap::ONE_TO_MANY, array('r_user_type_id' => 'r_user_type_id', ), null, null, 'Userss');
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

} // RUserTypesTableMap
