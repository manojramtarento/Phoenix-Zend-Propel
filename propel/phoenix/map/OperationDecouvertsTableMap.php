<?php



/**
 * This class defines the structure of the 'operation_decouverts' table.
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
class OperationDecouvertsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationDecouvertsTableMap';

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
        $this->setName('operation_decouverts');
        $this->setPhpName('OperationDecouverts');
        $this->setClassname('OperationDecouverts');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('op_dec_id', 'OpDecId', 'INTEGER', true, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', true, 4, null);
        $this->addColumn('op_dec_mont_demande', 'OpDecMontDemande', 'FLOAT', true, 8, null);
        $this->addColumn('op_dec_mont_accord', 'OpDecMontAccord', 'FLOAT', false, 8, null);
        $this->addColumn('op_dec_motif_demande', 'OpDecMotifDemande', 'LONGVARCHAR', false, 2147483647, null);
        $this->addColumn('op_dec_motif_accord', 'OpDecMotifAccord', 'TINYINT', false, 1, null);
        $this->addColumn('op_dec_statut_id', 'OpDecStatutId', 'TINYINT', true, 1, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        // validators
        $this->addValidator('op_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_id doit être renseigné.');
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('op_dec_mont_demande', 'required', 'propel.validator.RequiredValidator', '', 'La demande de montant doit être renseignée.');
        $this->addValidator('op_dec_mont_demande', 'type', 'propel.validator.TypeValidator', 'float', 'La demande de montant doit être un réel.');
        $this->addValidator('op_dec_motif_demande', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ op_dec_motif_demande ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('op_dec_motif_demande', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_dec_motif_demande doit être un string.');
        $this->addValidator('op_dec_motif_accord', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_dec_motif_accord doit être un int.');
        $this->addValidator('op_dec_statut_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_dec_statut_id doit être renseigné.');
        $this->addValidator('op_dec_statut_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_dec_statut_id doit être un int.');
        $this->addValidator('date_create', 'required', 'propel.validator.RequiredValidator', '', 'Le champ date_create doit être renseigné.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
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

} // OperationDecouvertsTableMap
