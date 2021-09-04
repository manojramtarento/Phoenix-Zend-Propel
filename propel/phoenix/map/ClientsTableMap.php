<?php



/**
 * This class defines the structure of the 'clients' table.
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
class ClientsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ClientsTableMap';

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
        $this->setName('clients');
        $this->setPhpName('Clients');
        $this->setClassname('Clients');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('cl_id', 'ClId', 'INTEGER', true, 4, null);
        $this->addColumn('cl_libelle', 'ClLibelle', 'VARCHAR', true, 200, null);
        $this->addColumn('cl_activity_id', 'ClActivityId', 'INTEGER', false, 4, null);
        $this->addColumn('cl_type_id', 'ClTypeId', 'SMALLINT', false, 2, null);
        $this->addForeignKey('cl_ct_gestion', 'ClCtGestion', 'INTEGER', 'contacts', 'ct_id', false, 4, null);
        $this->addForeignKey('cl_ct_facturation', 'ClCtFacturation', 'INTEGER', 'contacts', 'ct_id', false, 4, null);
        $this->addForeignKey('cl_dc_id', 'ClDcId', 'INTEGER', 'users', 'user_id', false, 4, null);
        $this->addColumn('cl_exclude_of_q3_campaign', 'ClExcludeOfQ3Campaign', 'BOOLEAN', true, 1, false);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('actif', 'Actif', 'TINYINT', false, 1, null);
        // validators
        $this->addValidator('cl_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Le nom du client doit être renseigné.');
        $this->addValidator('cl_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '200', 'Le champ cl_libelle ne doit pas dépasser 200 caractères.');
        $this->addValidator('cl_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_libelle doit être un string.');
        $this->addValidator('cl_activity_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_activity_id doit être un int.');
        $this->addValidator('cl_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_type_id doit être un int.');
        $this->addValidator('cl_ct_gestion', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_ct_gestion doit être un int.');
        $this->addValidator('cl_ct_facturation', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_ct_facturation doit être un int.');
        $this->addValidator('cl_dc_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_dc_id doit être un int.');
        $this->addValidator('cl_exclude_of_q3_campaign', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ cl_exclude_of_q3_campaign doit être un boolean.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ actif doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('UserDc', 'Users', RelationMap::MANY_TO_ONE, array('cl_dc_id' => 'user_id', ), null, null);
        $this->addRelation('ContactFacturation', 'Contacts', RelationMap::MANY_TO_ONE, array('cl_ct_facturation' => 'ct_id', ), null, null);
        $this->addRelation('ContactGestion', 'Contacts', RelationMap::MANY_TO_ONE, array('cl_ct_gestion' => 'ct_id', ), null, null);
        $this->addRelation('ClientContratOptions', 'ClientContratOptions', RelationMap::ONE_TO_MANY, array('cl_id' => 'cl_id', ), null, null, 'ClientContratOptionss');
        $this->addRelation('ClientFactureOptions', 'ClientFactureOptions', RelationMap::ONE_TO_MANY, array('cl_id' => 'cl_id', ), null, null, 'ClientFactureOptionss');
        $this->addRelation('ClientPrestations', 'ClientPrestations', RelationMap::ONE_TO_MANY, array('cl_id' => 'cl_id', ), null, null, 'ClientPrestationss');
        $this->addRelation('ContactsRelatedByClId', 'Contacts', RelationMap::ONE_TO_MANY, array('cl_id' => 'cl_id', ), null, null, 'ContactssRelatedByClId');
        $this->addRelation('Factures', 'Factures', RelationMap::ONE_TO_MANY, array('cl_id' => 'cl_id', ), null, null, 'Facturess');
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('cl_id' => 'op_cl_id', ), null, null, 'Operationss');
        $this->addRelation('Relances', 'Relances', RelationMap::ONE_TO_MANY, array('cl_id' => 'cl_id', ), null, null, 'Relancess');
        $this->addRelation('FactureEditionHistory', 'FactureEditionHistory', RelationMap::ONE_TO_MANY, array('cl_id' => 'cl_id', ), null, null, 'FactureEditionHistorys');
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
  'columns' => 'cl_libelle',
  'message' => 'Ce nom de client existe déjà.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // ClientsTableMap
