<?php



/**
 * This class defines the structure of the 'r_prestations' table.
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
class RPrestationsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RPrestationsTableMap';

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
        $this->setName('r_prestations');
        $this->setPhpName('RPrestations');
        $this->setClassname('RPrestations');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_prestation_id', 'RPrestationId', 'INTEGER', true, 4, null);
        $this->addColumn('r_p_libelle', 'RPLibelle', 'VARCHAR', false, 510, null);
        $this->addColumn('r_p_libelle_en', 'RPLibelleEn', 'VARCHAR', false, 510, null);
        $this->addColumn('r_p_controle', 'RPControle', 'VARCHAR', false, 20, null);
        $this->addForeignKey('r_p_axe1', 'RPAxe1', 'INTEGER', 'r_p_axe1', 'r_p_axe1_id', false, 4, null);
        $this->addForeignKey('r_p_axe2', 'RPAxe2', 'INTEGER', 'r_p_axe2', 'r_p_axe2_id', false, 4, null);
        $this->addForeignKey('r_p_axe3', 'RPAxe3', 'INTEGER', 'r_p_axe3', 'r_p_axe3_id', false, 4, null);
        $this->addForeignKey('r_p_axe4', 'RPAxe4', 'INTEGER', 'r_p_axe4', 'r_p_axe4_id', false, 4, null);
        $this->addForeignKey('r_p_axe5', 'RPAxe5', 'INTEGER', 'r_p_axe5', 'r_p_axe5_id', false, 4, null);
        $this->addColumn('r_p_code_comptable', 'RPCodeComptable', 'VARCHAR', false, 100, null);
        $this->addColumn('r_p_adf', 'RPAdf', 'BOOLEAN', false, 1, null);
        $this->addColumn('r_p_commentaires', 'RPCommentaires', 'VARCHAR', false, 8000, null);
        $this->addColumn('r_p_description_fr', 'RPDescriptionFr', 'VARCHAR', false, 8000, null);
        $this->addColumn('r_p_description_en', 'RPDescriptionEn', 'VARCHAR', false, 8000, null);
        $this->addColumn('r_p_qui_valide', 'RPQuiValide', 'VARCHAR', false, 510, null);
        $this->addForeignKey('r_p_groupe_validation_id', 'RPGroupeValidationId', 'SMALLINT', 'acl_groups', 'group_id', false, 2, null);
        $this->addColumn('r_p_couts_estimes_modifiables', 'RPCoutsEstimesModifiables', 'BOOLEAN', false, 1, null);
        $this->addColumn('r_p_cout_interne', 'RPCoutInterne', 'NUMERIC', false, 20, null);
        $this->addColumn('r_p_cout_externe', 'RPCoutExterne', 'NUMERIC', false, 20, null);
        $this->addColumn('r_p_cout_total', 'RPCoutTotal', 'NUMERIC', false, 20, null);
        $this->addColumn('r_p_validation_id', 'RPValidationId', 'TINYINT', false, 1, null);
        $this->addColumn('r_p_taux_marge_min', 'RPTauxMargeMin', 'NUMERIC', false, 20, null);
        $this->addColumn('r_p_prix_vente', 'RPPrixVente', 'NUMERIC', false, 20, null);
        $this->addColumn('r_p_type_frais_id', 'RPTypeFraisId', 'TINYINT', false, 1, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', false, 1, null);
        $this->addColumn('r_p_tva_id', 'RPTvaId', 'INTEGER', false, 4, null);
        $this->addColumn('r_p_rfa', 'RPRfa', 'BOOLEAN', false, 1, null);
        $this->addColumn('valide_daf', 'ValideDaf', 'BOOLEAN', false, 1, null);
        $this->addColumn('r_p_is_maj_from_compiluo', 'RPIsMajFromCompiluo', 'BOOLEAN', true, 1, false);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_create', 'UserCreate', 'INTEGER', false, 4, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        $this->addColumn('r_p_is_mandatory', 'RPIsMandatory', 'BOOLEAN', false, 1, false);
        $this->addColumn('r_p_is_eligible_for_prime', 'RPIsEligibleForPrime', 'BOOLEAN', true, 1, true);
        // validators
        $this->addValidator('r_p_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ r_p_libelle ne doit pas dépasser 510 caractères.');
        $this->addValidator('r_p_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_libelle doit être un string.');
        $this->addValidator('r_p_libelle_en', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ r_p_libelle_en ne doit pas dépasser 510 caractères.');
        $this->addValidator('r_p_libelle_en', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_libelle_en doit être un string.');
        $this->addValidator('r_p_controle', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Le champ r_p_controle ne doit pas dépasser 20 caractères.');
        $this->addValidator('r_p_controle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_controle doit être un string.');
        $this->addValidator('r_p_axe1', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_p_axe1 doit être un int.');
        $this->addValidator('r_p_axe2', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_p_axe2 doit être un int.');
        $this->addValidator('r_p_axe3', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_p_axe3 doit être un int.');
        $this->addValidator('r_p_axe4', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_p_axe4 doit être un int.');
        $this->addValidator('r_p_axe5', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_p_axe5 doit être un int.');
        $this->addValidator('r_p_code_comptable', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_p_code_comptable ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_p_code_comptable', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_code_comptable doit être un string.');
        $this->addValidator('r_p_adf', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ r_p_adf doit être un boolean.');
        $this->addValidator('r_p_commentaires', 'maxLength', 'propel.validator.MaxLengthValidator', '8000', 'Le champ r_p_commentaires ne doit pas dépasser 8000 caractères.');
        $this->addValidator('r_p_commentaires', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_commentaires doit être un string.');
        $this->addValidator('r_p_description_fr', 'maxLength', 'propel.validator.MaxLengthValidator', '8000', 'Le champ r_p_description_fr ne doit pas dépasser 8000 caractères.');
        $this->addValidator('r_p_description_fr', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_description_fr doit être un string.');
        $this->addValidator('r_p_description_en', 'maxLength', 'propel.validator.MaxLengthValidator', '8000', 'Le champ r_p_description_en ne doit pas dépasser 8000 caractères.');
        $this->addValidator('r_p_description_en', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_description_en doit être un string.');
        $this->addValidator('r_p_qui_valide', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ r_p_qui_valide ne doit pas dépasser 510 caractères.');
        $this->addValidator('r_p_qui_valide', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_qui_valide doit être un string.');
        $this->addValidator('r_p_groupe_validation_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_p_groupe_validation_id doit être un int.');
        $this->addValidator('r_p_cout_interne', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ r_p_cout_interne doit être un float.');
        $this->addValidator('r_p_cout_externe', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ r_p_cout_externe doit être un float.');
        $this->addValidator('r_p_cout_total', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ r_p_cout_total doit être un float.');
        $this->addValidator('r_p_validation_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_p_validation_id doit être un int.');
        $this->addValidator('r_p_taux_marge_min', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ r_p_taux_marge_min doit être un float.');
        $this->addValidator('r_p_prix_vente', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ r_p_prix_vente doit être un float.');
        $this->addValidator('r_p_type_frais_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_p_type_frais_id doit être un int.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ actif doit être un boolean.');
        $this->addValidator('r_p_tva_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_p_tva_id doit être un int.');
        $this->addValidator('r_p_rfa', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ r_p_rfa doit être un boolean.');
        $this->addValidator('valide_daf', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ valide_daf doit être un boolean.');
        $this->addValidator('r_p_is_maj_from_compiluo', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_p_is_maj_from_compiluo doit être renseigné.');
        $this->addValidator('r_p_is_maj_from_compiluo', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ r_p_is_maj_from_compiluo doit être un boolean.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('user_create', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_create doit être un int.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GroupValidation', 'AclGroups', RelationMap::MANY_TO_ONE, array('r_p_groupe_validation_id' => 'group_id', ), null, null);
        $this->addRelation('Axe1', 'RPAxe1', RelationMap::MANY_TO_ONE, array('r_p_axe1' => 'r_p_axe1_id', ), null, null);
        $this->addRelation('Axe2', 'RPAxe2', RelationMap::MANY_TO_ONE, array('r_p_axe2' => 'r_p_axe2_id', ), null, null);
        $this->addRelation('Axe3', 'RPAxe3', RelationMap::MANY_TO_ONE, array('r_p_axe3' => 'r_p_axe3_id', ), null, null);
        $this->addRelation('Axe4', 'RPAxe4', RelationMap::MANY_TO_ONE, array('r_p_axe4' => 'r_p_axe4_id', ), null, null);
        $this->addRelation('Axe5', 'RPAxe5', RelationMap::MANY_TO_ONE, array('r_p_axe5' => 'r_p_axe5_id', ), null, null);
        $this->addRelation('FacturesPrestations', 'FacturesPrestations', RelationMap::ONE_TO_MANY, array('r_prestation_id' => 'r_prestation_id', ), null, null, 'FacturesPrestationss');
        $this->addRelation('OperationPrestations', 'OperationPrestations', RelationMap::ONE_TO_MANY, array('r_prestation_id' => 'op_r_prest_id', ), null, null, 'OperationPrestationss');
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

} // RPrestationsTableMap
