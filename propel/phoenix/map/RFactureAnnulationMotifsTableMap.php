<?php



/**
 * This class defines the structure of the 'r_facture_annulation_motifs' table.
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
class RFactureAnnulationMotifsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RFactureAnnulationMotifsTableMap';

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
        $this->setName('r_facture_annulation_motifs');
        $this->setPhpName('RFactureAnnulationMotifs');
        $this->setClassname('RFactureAnnulationMotifs');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_facture_annulation_motifs_motif_id', 'RFactureAnnulationMotifsMotifId', 'INTEGER', true, 4, null);
        $this->addColumn('r_facture_annulation_motifs_motif_libelle', 'RFactureAnnulationMotifsMotifLibelle', 'VARCHAR', true, 100, null);
        $this->addColumn('r_facture_annulation_motifs_actif', 'RFactureAnnulationMotifsActif', 'TINYINT', true, 1, null);
        // validators
        $this->addValidator('r_facture_annulation_motifs_motif_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_facture_annulation_motifs_motif_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_facture_annulation_motifs_motif_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_facture_annulation_motifs_motif_libelle doit être renseigné.');
        $this->addValidator('r_facture_annulation_motifs_motif_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_facture_annulation_motifs_motif_libelle doit être un string.');
        $this->addValidator('r_facture_annulation_motifs_actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_facture_annulation_motifs_actif doit être un int.');
        $this->addValidator('r_facture_annulation_motifs_actif', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_facture_annulation_motifs_actif doit être renseigné.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PlanFacturationDetails', 'PlanFacturationDetails', RelationMap::ONE_TO_MANY, array('r_facture_annulation_motifs_motif_id' => 'pfd_fact_annul_motif_id', ), null, null, 'PlanFacturationDetailss');
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

} // RFactureAnnulationMotifsTableMap
