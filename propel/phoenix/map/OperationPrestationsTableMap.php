<?php



/**
 * This class defines the structure of the 'operation_prestations' table.
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
class OperationPrestationsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationPrestationsTableMap';

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
        $this->setName('operation_prestations');
        $this->setPhpName('OperationPrestations');
        $this->setClassname('OperationPrestations');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addForeignPrimaryKey('op_prest_id', 'OpPrestId', 'INTEGER' , 'histo_couts', 'op_prest_id', true, 4, null);
        $this->addForeignKey('op_r_prest_id', 'OpRPrestId', 'INTEGER', 'r_prestations', 'r_prestation_id', false, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', false, 4, null);
        $this->addForeignKey('op_prest_rubri_id', 'OpPrestRubriId', 'INTEGER', 'operation_rubriques', 'op_rubrique_id', false, 4, null);
        $this->addColumn('op_prest_libelle', 'OpPrestLibelle', 'VARCHAR', false, 510, null);
        $this->addColumn('op_prest_libelle_devis', 'OpPrestLibelleDevis', 'VARCHAR', false, 510, null);
        $this->addColumn('op_prest_description', 'OpPrestDescription', 'VARCHAR', false, 8000, null);
        $this->addColumn('op_prest_comment_interne', 'OpPrestCommentInterne', 'VARCHAR', false, 8000, null);
        $this->addColumn('op_prest_order', 'OpPrestOrder', 'SMALLINT', false, 2, null);
        $this->addForeignKey('op_prest_scena_id', 'OpPrestScenaId', 'INTEGER', 'operation_scenarii', 'op_scenario_id', false, 4, null);
        $this->addForeignKey('op_prest_prime_id', 'OpPrestPrimeId', 'INTEGER', 'operation_primes', 'op_prime_id', false, 4, null);
        $this->addColumn('op_prest_pv', 'OpPrestPv', 'NUMERIC', false, 20, 0);
        $this->addColumn('op_prest_coef', 'OpPrestCoef', 'NUMERIC', false, 20, 1);
        $this->addColumn('op_prest_ciestim', 'OpPrestCiestim', 'NUMERIC', false, 20, null);
        $this->addColumn('op_prest_ceestim', 'OpPrestCeestim', 'NUMERIC', false, 20, null);
        $this->addColumn('op_prest_qestim', 'OpPrestQestim', 'INTEGER', false, 4, 1);
        $this->addColumn('op_prest_mestim', 'OpPrestMestim', 'NUMERIC', false, 20, 0);
        $this->addColumn('op_prest_cireel', 'OpPrestCireel', 'NUMERIC', false, 20, null);
        $this->addColumn('op_prest_cereel', 'OpPrestCereel', 'NUMERIC', false, 20, null);
        $this->addColumn('op_prest_qreel', 'OpPrestQreel', 'INTEGER', false, 4, 0);
        $this->addColumn('op_prest_mreel', 'OpPrestMreel', 'NUMERIC', false, 20, 0);
        $this->addColumn('op_prest_couts_valides', 'OpPrestCoutsValides', 'BOOLEAN', true, 1, false);
        $this->addColumn('op_prest_off', 'OpPrestOff', 'BOOLEAN', true, 1, false);
        $this->addColumn('op_prest_npr', 'OpPrestNpr', 'BOOLEAN', true, 1, false);
        $this->addColumn('op_prest_npa', 'OpPrestNpa', 'BOOLEAN', true, 1, false);
        $this->addColumn('op_prest_code_comptable', 'OpPrestCodeComptable', 'VARCHAR', false, 100, '');
        $this->addColumn('op_adf', 'OpAdf', 'BOOLEAN', false, 1, false);
        $this->addColumn('op_user_couts_estim', 'OpUserCoutsEstim', 'INTEGER', false, 4, null);
        $this->addColumn('op_user_couts_reel', 'OpUserCoutsReel', 'INTEGER', false, 4, null);
        $this->addColumn('op_prest_is_maj_from_compiluo', 'OpPrestIsMajFromCompiluo', 'BOOLEAN', true, 1, false);
        $this->addColumn('date_debut_prestation', 'DateDebutPrestation', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_fin_prestation', 'DateFinPrestation', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_prest_is_mandatory', 'OpPrestIsMandatory', 'BOOLEAN', true, 1, false);
        $this->addColumn('user_modify', 'UserModify', 'SMALLINT', false, 2, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addForeignKey('cost_updater_user', 'CostUpdaterUser', 'SMALLINT', 'users', 'user_id', false, 2, null);
        $this->addColumn('cost_validation_date', 'CostValidationDate', 'TIMESTAMP', false, 16, null);
        // validators
        $this->addValidator('op_r_prest_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_r_prest_id doit être un int.');
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('op_prest_rubri_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_rubri_id doit être un int.');
        $this->addValidator('op_prest_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ op_prest_libelle ne doit pas dépasser 510 caractères.');
        $this->addValidator('op_prest_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_prest_libelle doit être un string.');
        $this->addValidator('op_prest_description', 'maxLength', 'propel.validator.MaxLengthValidator', '8000', 'Le champ op_prest_description ne doit pas dépasser 8000 caractères.');
        $this->addValidator('op_prest_description', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_prest_description doit être un string.');
        $this->addValidator('op_prest_order', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_order doit être un int.');
        $this->addValidator('op_prest_scena_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_scena_id doit être un int.');
        $this->addValidator('op_prest_prime_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_prime_id doit être un int.');
        $this->addValidator('op_prest_pv', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_pv doit être un float.');
        $this->addValidator('op_prest_coef', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_coef doit être un float.');
        $this->addValidator('op_prest_ciestim', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_ciestim doit être un float.');
        $this->addValidator('op_prest_ceestim', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_ceestim doit être un float.');
        $this->addValidator('op_prest_cireel', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_cireel doit être un float.');
        $this->addValidator('op_prest_cereel', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_cereel doit être un float.');
        $this->addValidator('op_prest_qestim', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_qestim doit être un int.');
        $this->addValidator('op_prest_mestim', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_mestim doit être un float.');
        $this->addValidator('op_prest_qreel', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_qreel doit être un int.');
        $this->addValidator('op_prest_mreel', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_mreel doit être un float.');
        $this->addValidator('op_prest_off', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ op_prest_off doit être un boolean.');
        $this->addValidator('op_prest_npr', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ op_prest_npr doit être un boolean.');
        $this->addValidator('op_prest_npa', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ op_prest_npa doit être un boolean.');
        $this->addValidator('op_prest_code_comptable', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_prest_code_comptable doit être renseigné.');
        $this->addValidator('op_prest_code_comptable', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ op_prest_code_comptable ne doit pas dépasser 100 caractères.');
        $this->addValidator('op_prest_code_comptable', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_prest_code_comptable doit être un string.');
        $this->addValidator('op_adf', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ op_adf doit être un boolean.');
        $this->addValidator('op_user_couts_estim', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_user_couts_estim doit être un int.');
        $this->addValidator('op_user_couts_reel', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_user_couts_reel doit être un int.');
        $this->addValidator('op_prest_is_maj_from_compiluo', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_prest_is_maj_from_compiluo doit être renseigné.');
        $this->addValidator('op_prest_is_maj_from_compiluo', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ op_prest_is_maj_from_compiluo doit être un boolean.');
        $this->addValidator('date_debut_prestation', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_debut_prestation doit être un string.');
        $this->addValidator('date_fin_prestation', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_fin_prestation doit être un string.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('cost_updater_user', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cost_updater_user doit être un int.');
        $this->addValidator('cost_validation_date', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cost_validation_date doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OperationScenarii', 'OperationScenarii', RelationMap::MANY_TO_ONE, array('op_prest_scena_id' => 'op_scenario_id', ), null, null);
        $this->addRelation('OperationRubriques', 'OperationRubriques', RelationMap::MANY_TO_ONE, array('op_prest_rubri_id' => 'op_rubrique_id', ), null, null);
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('RPrestations', 'RPrestations', RelationMap::MANY_TO_ONE, array('op_r_prest_id' => 'r_prestation_id', ), null, null);
        $this->addRelation('OperationPrimes', 'OperationPrimes', RelationMap::MANY_TO_ONE, array('op_prest_prime_id' => 'op_prime_id', ), null, null);
        $this->addRelation('HistoCouts', 'HistoCouts', RelationMap::MANY_TO_ONE, array('op_prest_id' => 'op_prest_id', ), null, null);
        $this->addRelation('Users', 'Users', RelationMap::MANY_TO_ONE, array('cost_updater_user' => 'user_id', ), null, null);
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

} // OperationPrestationsTableMap
