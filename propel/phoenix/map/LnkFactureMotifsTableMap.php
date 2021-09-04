<?php



/**
 * This class defines the structure of the 'lnk_facture_motifs' table.
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
class LnkFactureMotifsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkFactureMotifsTableMap';

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
        $this->setName('lnk_facture_motifs');
        $this->setPhpName('LnkFactureMotifs');
        $this->setClassname('LnkFactureMotifs');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('lnk_fact_motif_id', 'LnkFactMotifId', 'INTEGER', true, 4, null);
        $this->addForeignKey('fact_id', 'FactId', 'INTEGER', 'factures', 'fact_id', true, 4, null);
        $this->addForeignKey('motif_id', 'MotifId', 'INTEGER', 'r_facture_motifs', 'r_fact_motif_id', true, 4, null);
        // validators
        $this->addValidator('fact_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ fact_id doit être renseigné.');
        $this->addValidator('fact_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_id doit être un int.');
        $this->addValidator('motif_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ motif_id doit être renseigné.');
        $this->addValidator('motif_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ motif_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Factures', 'Factures', RelationMap::MANY_TO_ONE, array('fact_id' => 'fact_id', ), null, null);
        $this->addRelation('RFactureMotifs', 'RFactureMotifs', RelationMap::MANY_TO_ONE, array('motif_id' => 'r_fact_motif_id', ), null, null);
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

} // LnkFactureMotifsTableMap
