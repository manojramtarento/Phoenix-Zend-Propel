<?php



/**
 * This class defines the structure of the 'client_contrat_options' table.
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
class ClientContratOptionsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ClientContratOptionsTableMap';

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
        $this->setName('client_contrat_options');
        $this->setPhpName('ClientContratOptions');
        $this->setClassname('ClientContratOptions');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('cl_ct_opt_id', 'ClCtOptId', 'INTEGER', true, 4, null);
        $this->addForeignKey('cl_id', 'ClId', 'INTEGER', 'clients', 'cl_id', false, 4, null);
        $this->addColumn('cl_ct_archivage_duree', 'ClCtArchivageDuree', 'SMALLINT', false, 2, null);
        $this->addColumn('cl_ct_archivage_unit', 'ClCtArchivageUnit', 'VARCHAR', false, 20, null);
        $this->addColumn('cl_ct_revision_birthday', 'ClCtRevisionBirthday', 'BOOLEAN', false, 1, null);
        $this->addColumn('cl_ct_reconduction', 'ClCtReconduction', 'BOOLEAN', false, 1, null);
        $this->addColumn('cl_ct_start', 'ClCtStart', 'TIMESTAMP', false, 16, null);
        $this->addColumn('cl_ct_echeance', 'ClCtEcheance', 'TIMESTAMP', false, 16, null);
        // validators
        $this->addValidator('cl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_id doit être un int.');
        $this->addValidator('cl_ct_archivage_duree', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_ct_archivage_duree doit être un int.');
        $this->addValidator('cl_ct_revision_birthday', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ cl_ct_revision_birthday doit être un boolean.');
        $this->addValidator('cl_ct_reconduction', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ cl_ct_reconduction doit être un boolean.');
        $this->addValidator('cl_ct_echeance', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_ct_echeance doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clients', 'Clients', RelationMap::MANY_TO_ONE, array('cl_id' => 'cl_id', ), null, null);
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('cl_id' => 'op_cl_id', ), null, null, 'Operationss');
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

} // ClientContratOptionsTableMap
