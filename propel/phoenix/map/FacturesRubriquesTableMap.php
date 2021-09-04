<?php



/**
 * This class defines the structure of the 'factures_rubriques' table.
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
class FacturesRubriquesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.FacturesRubriquesTableMap';

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
        $this->setName('factures_rubriques');
        $this->setPhpName('FacturesRubriques');
        $this->setClassname('FacturesRubriques');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('fact_rub_id', 'FactRubId', 'INTEGER', true, 4, null);
        $this->addForeignKey('fact_id', 'FactId', 'INTEGER', 'factures', 'fact_id', true, 4, null);
        $this->addColumn('r_rubrique_id', 'RRubriqueId', 'INTEGER', false, 4, null);
        $this->addColumn('op_rubrique_id', 'OpRubriqueId', 'INTEGER', true, 4, null);
        $this->addColumn('fact_rub_order', 'FactRubOrder', 'INTEGER', true, 4, null);
        $this->addColumn('fact_rub_libelle', 'FactRubLibelle', 'VARCHAR', true, 1000, null);
        $this->addColumn('fact_rub_montant_ht', 'FactRubMontantHt', 'NUMERIC', true, 20, null);
        $this->addColumn('fact_rub_montant_ttc', 'FactRubMontantTTC', 'NUMERIC', true, 20, null);
        $this->addForeignKey('r_tva_type_id', 'RTvaTypeId', 'INTEGER', 'r_tva_type', 'r_tva_id', true, 4, null);
        $this->addColumn('r_rub_type_id', 'RRubTypeId', 'INTEGER', true, 4, null);
        // validators
        $this->addValidator('fact_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ fact_id doit être renseigné.');
        $this->addValidator('fact_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_id doit être un int.');
        $this->addValidator('op_rubrique_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_rubrique_id doit être renseigné.');
        $this->addValidator('op_rubrique_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_rubrique_id doit être un int.');
        $this->addValidator('fact_rub_order', 'required', 'propel.validator.RequiredValidator', '', 'Le champ fact_rub_order doit être renseigné.');
        $this->addValidator('fact_rub_order', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_rub_order doit être un int.');
        $this->addValidator('fact_rub_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Le champ fact_rub_libelle doit être renseigné.');
        $this->addValidator('fact_rub_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '1000', 'Le champ fact_rub_libelle ne doit pas dépasser 1000 caractères.');
        $this->addValidator('fact_rub_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_rub_libelle doit être un string.');
        $this->addValidator('fact_rub_montant_ht', 'required', 'propel.validator.RequiredValidator', '', 'Le champ fact_rub_montant_ht doit être renseigné.');
        $this->addValidator('fact_rub_montant_ht', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_rub_montant_ht doit être un float.');
        $this->addValidator('r_tva_type_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_tva_type_id doit être renseigné.');
        $this->addValidator('r_tva_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_tva_type_id doit être un int.');
        $this->addValidator('r_rub_type_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_rub_type_id doit être renseigné.');
        $this->addValidator('r_rub_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_rub_type_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Factures', 'Factures', RelationMap::MANY_TO_ONE, array('fact_id' => 'fact_id', ), null, null);
        $this->addRelation('RTvaType', 'RTvaType', RelationMap::MANY_TO_ONE, array('r_tva_type_id' => 'r_tva_id', ), null, null);
        $this->addRelation('FacturesPrestations', 'FacturesPrestations', RelationMap::ONE_TO_MANY, array('fact_rub_id' => 'fact_rub_id', ), null, null, 'FacturesPrestationss');
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

} // FacturesRubriquesTableMap
