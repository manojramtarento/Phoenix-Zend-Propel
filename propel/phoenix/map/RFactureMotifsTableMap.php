<?php



/**
 * This class defines the structure of the 'r_facture_motifs' table.
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
class RFactureMotifsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RFactureMotifsTableMap';

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
        $this->setName('r_facture_motifs');
        $this->setPhpName('RFactureMotifs');
        $this->setClassname('RFactureMotifs');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_fact_motif_id', 'RFactMotifId', 'INTEGER', true, 4, null);
        $this->addColumn('r_fact_motif_libelle', 'RFactMotifLibelle', 'VARCHAR', true, 100, null);
        $this->addColumn('actif', 'Actif', 'TINYINT', true, 1, null);
        // validators
        $this->addValidator('r_fact_motif_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_fact_motif_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_fact_motif_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_fact_motif_libelle doit être renseigné.');
        $this->addValidator('r_fact_motif_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_fact_motif_libelle doit être un string.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ actif doit être un int.');
        $this->addValidator('actif', 'required', 'propel.validator.RequiredValidator', '', 'Le champ actif doit être renseigné.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('LnkFactureMotifs', 'LnkFactureMotifs', RelationMap::ONE_TO_MANY, array('r_fact_motif_id' => 'motif_id', ), null, null, 'LnkFactureMotifss');
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

} // RFactureMotifsTableMap
