<?php



/**
 * This class defines the structure of the 'r_client_types' table.
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
class RClientTypesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RClientTypesTableMap';

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
        $this->setName('r_client_types');
        $this->setPhpName('RClientTypes');
        $this->setClassname('RClientTypes');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('cl_type_id', 'ClTypeId', 'SMALLINT', true, 2, null);
        $this->addColumn('cl_type_libelle', 'ClTypeLibelle', 'VARCHAR', true, 200, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('actif', 'Actif', 'TINYINT', false, 1, null);
        $this->addColumn('ordre', 'Ordre', 'TINYINT', false, 1, null);
        // validators
        $this->addValidator('cl_type_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Le champ cl_type_libelle doit être renseigné.');
        $this->addValidator('cl_type_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '200', 'Le champ cl_type_libelle ne doit pas dépasser 200 caractères.');
        $this->addValidator('cl_type_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_type_libelle doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ actif doit être un int.');
        $this->addValidator('ordre', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ordre doit être un int.');
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

} // RClientTypesTableMap
