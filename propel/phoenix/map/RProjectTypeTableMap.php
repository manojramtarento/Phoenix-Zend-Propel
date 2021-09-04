<?php



/**
 * This class defines the structure of the 'r_project_type' table.
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
class RProjectTypeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RProjectTypeTableMap';

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
        $this->setName('r_project_type');
        $this->setPhpName('RProjectType');
        $this->setClassname('RProjectType');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('r_project_type_id', 'RProjectTypeId', 'TINYINT', true, 1, null);
        $this->addColumn('r_project_type_libelle', 'RProjectTypeLibelle', 'VARCHAR', false, 100, null);
        $this->addColumn('r_project_type_actif', 'RProjectTypeActif', 'TINYINT', true, 1, 1);
        $this->addColumn('r_project_type_order', 'r_project_type_order', 'SMALLINT', false, 2, null);
        // validators
        $this->addValidator('r_project_type_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_project_type_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_project_type_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_project_type_libelle doit être un string.');
        $this->addValidator('r_project_type_actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_project_type_actif doit être un int.');
        $this->addValidator('r_project_type_order', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_project_type_order doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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

} // RProjectTypeTableMap
