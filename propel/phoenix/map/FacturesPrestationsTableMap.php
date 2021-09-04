<?php



/**
 * This class defines the structure of the 'factures_prestations' table.
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
class FacturesPrestationsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.FacturesPrestationsTableMap';

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
        $this->setName('factures_prestations');
        $this->setPhpName('FacturesPrestations');
        $this->setClassname('FacturesPrestations');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('fact_prest_id', 'FactPrestId', 'INTEGER', true, 4, null);
        $this->addForeignKey('fact_rub_id', 'FactRubId', 'INTEGER', 'factures_rubriques', 'fact_rub_id', true, 4, null);
        $this->addColumn('op_prest_id', 'OpPrestId', 'INTEGER', true, 4, null);
        $this->addForeignKey('r_prestation_id', 'RPrestationId', 'INTEGER', 'r_prestations', 'r_prestation_id', true, 4, null);
        $this->addColumn('fact_prest_libelle', 'FactPrestLibelle', 'VARCHAR', false, 510, null);
        $this->addColumn('fact_prest_description', 'FactPrestDescription', 'VARCHAR', false, 8000, null);
        $this->addColumn('fact_prest_order', 'FactPrestOrder', 'INTEGER', false, 4, null);
        $this->addColumn('fact_prest_off', 'FactPrestOff', 'BOOLEAN', false, 1, false);
        $this->addColumn('fact_prest_adf', 'FactPrestAdf', 'BOOLEAN', false, 1, false);
        $this->addColumn('r_p_code_comptable', 'RPCodeComptable', 'VARCHAR', false, 100, null);
        $this->addColumn('r_p_axe1', 'RPAxe1', 'CHAR', false, 20, null);
        $this->addColumn('r_p_axe3', 'RPAxe3', 'CHAR', false, 20, null);
        $this->addColumn('r_p_axe4', 'RPAxe4', 'CHAR', false, 20, null);
        $this->addColumn('op_prest_pv', 'OpPrestPv', 'NUMERIC', false, 20, null);
        $this->addColumn('op_prest_qestim', 'OpPrestQestim', 'INTEGER', false, 4, null);
        $this->addColumn('op_prest_mestim', 'OpPrestMestim', 'NUMERIC', false, 20, null);
        $this->addColumn('op_prest_qreel', 'OpPrestQreel', 'INTEGER', false, 4, null);
        $this->addColumn('op_prest_mreel', 'OpPrestMreel', 'NUMERIC', false, 20, null);
        $this->addColumn('fact_prest_qestim_deja_facture', 'FactPrestQestimDejaFacture', 'NUMERIC', false, 28, null);
        $this->addColumn('fact_prest_quantite_deja_facture', 'FactPrestQuantiteDejaFacture', 'NUMERIC', false, 28, null);
        $this->addColumn('fact_prest_montant_deja_facture', 'FactPrestMontantDejaFacture', 'NUMERIC', false, 20, null);
        $this->addColumn('r_tva_type_id', 'RTvaTypeId', 'INTEGER', false, 4, null);
        $this->addColumn('r_rub_type_id', 'RRubTypeId', 'INTEGER', false, 4, null);
        $this->addColumn('fact_prest_qestim_facture', 'FactPrestQestimFacture', 'INTEGER', false, 4, null);
        $this->addColumn('fact_prest_quantite_facture', 'FactPrestQuantiteFacture', 'INTEGER', false, 4, null);
        $this->addColumn('fact_prest_montant_facture', 'FactPrestMontantFacture', 'NUMERIC', false, 20, null);
        $this->addColumn('fact_prest_taux_adf', 'FactPrestTauxAdf', 'TINYINT', false, 1, null);
        $this->addColumn('fact_prest_taux_partiel', 'FactPrestTauxPartiel', 'TINYINT', false, 1, null);
        $this->addColumn('fact_prest_qestim_facture_final', 'FactPrestQestimFactureFinal', 'NUMERIC', false, 28, null);
        $this->addColumn('fact_prest_quantite_facture_final', 'FactPrestQuantiteFactureFinal', 'NUMERIC', false, 28, null);
        $this->addColumn('fact_prest_montant_facture_final', 'FactPrestMontantFactureFinal', 'NUMERIC', false, 20, null);
        // validators
        $this->addValidator('fact_rub_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ fact_rub_id doit être renseigné.');
        $this->addValidator('fact_rub_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_rub_id doit être un int.');
        $this->addValidator('op_prest_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_prest_id doit être renseigné.');
        $this->addValidator('op_prest_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_id doit être un int.');
        $this->addValidator('r_prestation_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_prestation_id doit être renseigné.');
        $this->addValidator('r_prestation_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_prestation_id doit être un int.');
        $this->addValidator('fact_prest_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ fact_prest_libelle ne doit pas dépasser 510 caractères.');
        $this->addValidator('fact_prest_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_prest_libelle doit être un string.');
        $this->addValidator('fact_prest_description', 'maxLength', 'propel.validator.MaxLengthValidator', '8000', 'Le champ fact_prest_description ne doit pas dépasser 8000 caractères.');
        $this->addValidator('fact_prest_description', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_prest_description doit être un string.');
        $this->addValidator('fact_prest_order', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_prest_order doit être un int.');
        $this->addValidator('fact_prest_off', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ fact_prest_off doit être un boolean.');
        $this->addValidator('fact_prest_adf', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ fact_prest_adf doit être un boolean.');
        $this->addValidator('r_p_code_comptable', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_p_code_comptable ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_p_code_comptable', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_code_comptable doit être un string.');
        $this->addValidator('r_p_axe1', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Le champ r_p_axe1 ne doit pas dépasser 20 caractères.');
        $this->addValidator('r_p_axe1', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_axe1 doit être un string.');
        $this->addValidator('r_p_axe3', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Le champ r_p_axe3 ne doit pas dépasser 20 caractères.');
        $this->addValidator('r_p_axe3', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_axe3 doit être un string.');
        $this->addValidator('r_p_axe4', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Le champ r_p_axe4 ne doit pas dépasser 20 caractères.');
        $this->addValidator('r_p_axe4', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_axe4 doit être un string.');
        $this->addValidator('op_prest_pv', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_pv doit être un float.');
        $this->addValidator('op_prest_qestim', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_qestim doit être un int.');
        $this->addValidator('op_prest_mestim', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_mestim doit être un float.');
        $this->addValidator('op_prest_qreel', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_qreel doit être un int.');
        $this->addValidator('op_prest_mreel', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_mreel doit être un float.');
        $this->addValidator('fact_prest_qestim_deja_facture', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_prest_qestim_deja_facture doit être un float.');
        $this->addValidator('fact_prest_quantite_deja_facture', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_prest_quantite_deja_facture doit être un float.');
        $this->addValidator('fact_prest_montant_deja_facture', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_prest_montant_deja_facture doit être un float.');
        $this->addValidator('r_tva_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_tva_type_id doit être un int.');
        $this->addValidator('r_rub_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_rub_type_id doit être un int.');
        $this->addValidator('fact_prest_qestim_facture', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_prest_qestim_facture doit être un int.');
        $this->addValidator('fact_prest_quantite_facture', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_prest_quantite_facture doit être un int.');
        $this->addValidator('fact_prest_montant_facture', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_prest_montant_facture doit être un float.');
        $this->addValidator('fact_prest_taux_adf', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_prest_taux_adf doit être un int.');
        $this->addValidator('fact_prest_taux_partiel', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_prest_taux_partiel doit être un int.');
        $this->addValidator('fact_prest_taux_partiel', 'maxValue', 'propel.validator.MaxValueValidator', '255', 'Le champ fact_prest_taux_partiel ne doit pas être supérieur à 255.');
        $this->addValidator('fact_prest_qestim_facture_final', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_prest_qestim_facture_final doit être un float.');
        $this->addValidator('fact_prest_quantite_facture_final', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_prest_quantite_facture_final doit être un float');
        $this->addValidator('fact_prest_montant_facture_final', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_prest_montant_facture_final doit être un float.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('FacturesRubriques', 'FacturesRubriques', RelationMap::MANY_TO_ONE, array('fact_rub_id' => 'fact_rub_id', ), null, null);
        $this->addRelation('RPrestations', 'RPrestations', RelationMap::MANY_TO_ONE, array('r_prestation_id' => 'r_prestation_id', ), null, null);
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

} // FacturesPrestationsTableMap
