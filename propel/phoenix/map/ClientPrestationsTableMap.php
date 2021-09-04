<?php



/**
 * This class defines the structure of the 'client_prestations' table.
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
class ClientPrestationsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ClientPrestationsTableMap';

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
        $this->setName('client_prestations');
        $this->setPhpName('ClientPrestations');
        $this->setClassname('ClientPrestations');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('cl_prest_id', 'ClPrestId', 'INTEGER', true, 4, null);
        $this->addForeignKey('cl_id', 'ClId', 'INTEGER', 'clients', 'cl_id', false, 4, null);
        $this->addColumn('r_prest_id', 'RPrestId', 'INTEGER', false, 4, null);
        $this->addColumn('cl_prest_pv', 'ClPrestPv', 'FLOAT', false, 8, null);
        $this->addColumn('r_p_client_libelle', 'RPClientLibelle', 'VARCHAR', false, 510, null);
        // validators
        $this->addValidator('cl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_id doit être un int.');
        $this->addValidator('r_prest_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_prest_id doit être un int.');
        $this->addValidator('cl_prest_pv', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ cl_prest_pv doit être un float.');
        $this->addValidator('r_p_client_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ r_p_client_libelle ne doit pas dépasser 510 caractères.');
        $this->addValidator('r_p_client_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_client_libelle doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clients', 'Clients', RelationMap::MANY_TO_ONE, array('cl_id' => 'cl_id', ), null, null);
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
  'columns' => 'cl_id,r_prest_id',
  'message' => 'Cette prestation existe déjà pour ce client.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // ClientPrestationsTableMap
