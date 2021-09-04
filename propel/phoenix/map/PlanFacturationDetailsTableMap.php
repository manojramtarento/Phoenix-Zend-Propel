<?php



/**
 * This class defines the structure of the 'plan_facturation_details' table.
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
class PlanFacturationDetailsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.PlanFacturationDetailsTableMap';

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
        $this->setName('plan_facturation_details');
        $this->setPhpName('PlanFacturationDetails');
        $this->setClassname('PlanFacturationDetails');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('pfd_id', 'PfdId', 'INTEGER', true, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', true, 4, null);
        $this->addForeignKey('pfd_type_fact_id', 'PfdTypeFactId', 'TINYINT', 'r_facture_types', 'r_fact_type_id', true, 1, null);
        $this->addColumn('pfd_date_planif', 'PfdDatePlanif', 'TIMESTAMP', true, 16, null);
        $this->addColumn('pfd_taux_adf', 'PfdTauxAdf', 'INTEGER', false, 1, null);
        $this->addColumn('pfd_taux_partiel', 'PfdTauxPartiel', 'INTEGER', false, 1, null);
        $this->addForeignKey('pfd_id_to_cancel', 'PfdIdToCancel', 'INTEGER', 'plan_facturation_details', 'pfd_id', false, 4, null);
        $this->addForeignKey('pfd_fact_annul', 'PfdFactAnnul', 'INTEGER', 'factures', 'fact_id', false, 4, null);
        $this->addForeignKey('pfd_fact_annul_motif_id', 'PfdFactAnnulMotifId', 'INTEGER', 'r_facture_annulation_motifs', 'r_facture_annulation_motifs_motif_id', false, 4, null);
        $this->addColumn('pfd_fact_annul_autre_motif', 'PfdFactAnnulAutreMotif', 'VARCHAR', false, 255, null);
        $this->addForeignKey('pfd_fact_id', 'PfdFactId', 'INTEGER', 'factures', 'fact_id', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        $this->addColumn('pfd_num_cmd', 'PfdNumCmd', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('op_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_id doit être renseigné.');
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('pfd_type_fact_id', 'required', 'propel.validator.RequiredValidator', '', 'Un type de facturation doit être renseigné.');
        $this->addValidator('pfd_type_fact_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ pfd_type_fact_id doit être un int.');
        $this->addValidator('pfd_date_planif', 'required', 'propel.validator.RequiredValidator', '', 'Le champ pfd_date_planif doit être renseigné.');
        $this->addValidator('pfd_date_planif', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ pfd_date_planif doit être un string.');
        $this->addValidator('pfd_taux_adf', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ pfd_taux_adf doit être un int.');
        $this->addValidator('pfd_taux_partiel', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ pfd_taux_partiel doit être un int.');
        $this->addValidator('pfd_taux_partiel', 'maxValue', 'propel.validator.MaxValueValidator', '255', 'Le champ pfd_taux_partiel ne doit pas être supérieur à 255.');
        $this->addValidator('pfd_id_to_cancel', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ pfd_id_to_cancel doit être un int.');
        $this->addValidator('pfd_fact_annul', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ pfd_fact_annul doit être un int.');
        $this->addValidator('pfd_fact_annul_motif_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ pfd_fact_annul_motif_id doit être un int.');
        $this->addValidator('pfd_fact_annul_autre_motif', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'Le champ pfd_fact_annul_autre_motif ne doit pas dépasser 255 caractères.');
        $this->addValidator('pfd_fact_annul_autre_motif', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ pfd_fact_annul_autre_motif doit être un string.');
        $this->addValidator('pfd_fact_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ pfd_fact_id doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
        $this->addValidator('pfd_num_cmd', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ pfd_num_cmd ne doit pas dépasser 100 caractères.');
        $this->addValidator('pfd_num_cmd', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ pfd_num_cmd doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('RFactureTypes', 'RFactureTypes', RelationMap::MANY_TO_ONE, array('pfd_type_fact_id' => 'r_fact_type_id', ), null, null);
        $this->addRelation('FactureToCancel', 'Factures', RelationMap::MANY_TO_ONE, array('pfd_fact_annul' => 'fact_id', ), null, null);
        $this->addRelation('PlanFacturationDetailToCancel', 'PlanFacturationDetails', RelationMap::MANY_TO_ONE, array('pfd_id_to_cancel' => 'pfd_id', ), null, null);
        $this->addRelation('FactureGenerated', 'Factures', RelationMap::MANY_TO_ONE, array('pfd_fact_id' => 'fact_id', ), null, null);
        $this->addRelation('InvoiceCancellationMotive', 'RFactureAnnulationMotifs', RelationMap::MANY_TO_ONE, array('pfd_fact_annul_motif_id' => 'r_facture_annulation_motifs_motif_id', ), null, null);
        $this->addRelation('PlanFacturationDetailsRelatedByPfdId', 'PlanFacturationDetails', RelationMap::ONE_TO_MANY, array('pfd_id' => 'pfd_id_to_cancel', ), null, null, 'PlanFacturationDetailssRelatedByPfdId');
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

} // PlanFacturationDetailsTableMap
