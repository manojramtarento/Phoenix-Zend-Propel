<?php



/**
 * This class defines the structure of the 'lnk_relance_facture' table.
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
class LnkRelanceFactureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkRelanceFactureTableMap';

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
        $this->setName('lnk_relance_facture');
        $this->setPhpName('LnkRelanceFacture');
        $this->setClassname('LnkRelanceFacture');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('lnk_rel_fact_id', 'LnkRelFactId', 'INTEGER', true, 4, null);
        $this->addForeignKey('rel_id', 'RelId', 'INTEGER', 'relances', 'rel_id', false, 4, null);
        $this->addForeignKey('fact_id', 'FactId', 'INTEGER', 'factures', 'fact_id', false, 4, null);
        $this->addColumn('montant_a_regler', 'MontantARegler', 'FLOAT', false, 8, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', false, 1, true);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        // validators
        $this->addValidator('rel_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ rel_id doit être un int.');
        $this->addValidator('fact_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_id doit être un int.');
        $this->addValidator('montant_a_regler', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ montant_a_regler doit être un float.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ actif doit être un boolean.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Relances', 'Relances', RelationMap::MANY_TO_ONE, array('rel_id' => 'rel_id', ), null, null);
        $this->addRelation('Factures', 'Factures', RelationMap::MANY_TO_ONE, array('fact_id' => 'fact_id', ), null, null);
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

} // LnkRelanceFactureTableMap
