<?php



/**
 * This class defines the structure of the 'r_facture_options_echeances' table.
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
class RFactureOptionsEcheancesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RFactureOptionsEcheancesTableMap';

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
        $this->setName('r_facture_options_echeances');
        $this->setPhpName('RFactureOptionsEcheances');
        $this->setClassname('RFactureOptionsEcheances');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('fact_opt_echeance_id', 'FactOptEcheanceId', 'TINYINT', true, 1, null);
        $this->addColumn('fact_opt_echeance_libelle', 'FactOptEcheanceLibelle', 'VARCHAR', false, 40, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', false, 1, true);
        $this->addColumn('fact_opt_echeance_libelle_en', 'FactOptEcheanceLibelleEn', 'VARCHAR', false, 40, null);
        // validators
        $this->addValidator('fact_opt_echeance_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ fact_opt_echeance_libelle ne doit pas dépasser 40 caractères.');
        $this->addValidator('fact_opt_echeance_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_opt_echeance_libelle doit être un string.');
        $this->addValidator('fact_opt_echeance_libelle_en', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ fact_opt_echeance_libelle_en ne doit pas dépasser 40 caractères.');
        $this->addValidator('fact_opt_echeance_libelle_en', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_opt_echeance_libelle_en doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ClientFactureOptions', 'ClientFactureOptions', RelationMap::ONE_TO_MANY, array('fact_opt_echeance_id' => 'cl_fact_echeance', ), null, null, 'ClientFactureOptionss');
        $this->addRelation('Factures', 'Factures', RelationMap::ONE_TO_MANY, array('fact_opt_echeance_id' => 'fact_echeance_id', ), null, null, 'Facturess');
        $this->addRelation('FactureEditionHistory', 'FactureEditionHistory', RelationMap::ONE_TO_MANY, array('fact_opt_echeance_id' => 'fact_echeance_id', ), null, null, 'FactureEditionHistorys');
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

} // RFactureOptionsEcheancesTableMap
