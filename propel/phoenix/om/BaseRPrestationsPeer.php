<?php


/**
 * Base static class for performing query and update operations on the 'r_prestations' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseRPrestationsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'r_prestations';

    /** the related Propel class for this table */
    const OM_CLASS = 'RPrestations';

    /** the related TableMap class for this table */
    const TM_CLASS = 'RPrestationsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 35;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 35;

    /** the column name for the r_prestation_id field */
    const R_PRESTATION_ID = 'r_prestations.r_prestation_id';

    /** the column name for the r_p_libelle field */
    const R_P_LIBELLE = 'r_prestations.r_p_libelle';

    /** the column name for the r_p_libelle_en field */
    const R_P_LIBELLE_EN = 'r_prestations.r_p_libelle_en';

    /** the column name for the r_p_controle field */
    const R_P_CONTROLE = 'r_prestations.r_p_controle';

    /** the column name for the r_p_axe1 field */
    const R_P_AXE1 = 'r_prestations.r_p_axe1';

    /** the column name for the r_p_axe2 field */
    const R_P_AXE2 = 'r_prestations.r_p_axe2';

    /** the column name for the r_p_axe3 field */
    const R_P_AXE3 = 'r_prestations.r_p_axe3';

    /** the column name for the r_p_axe4 field */
    const R_P_AXE4 = 'r_prestations.r_p_axe4';

    /** the column name for the r_p_axe5 field */
    const R_P_AXE5 = 'r_prestations.r_p_axe5';

    /** the column name for the r_p_code_comptable field */
    const R_P_CODE_COMPTABLE = 'r_prestations.r_p_code_comptable';

    /** the column name for the r_p_adf field */
    const R_P_ADF = 'r_prestations.r_p_adf';

    /** the column name for the r_p_commentaires field */
    const R_P_COMMENTAIRES = 'r_prestations.r_p_commentaires';

    /** the column name for the r_p_description_fr field */
    const R_P_DESCRIPTION_FR = 'r_prestations.r_p_description_fr';

    /** the column name for the r_p_description_en field */
    const R_P_DESCRIPTION_EN = 'r_prestations.r_p_description_en';

    /** the column name for the r_p_qui_valide field */
    const R_P_QUI_VALIDE = 'r_prestations.r_p_qui_valide';

    /** the column name for the r_p_groupe_validation_id field */
    const R_P_GROUPE_VALIDATION_ID = 'r_prestations.r_p_groupe_validation_id';

    /** the column name for the r_p_couts_estimes_modifiables field */
    const R_P_COUTS_ESTIMES_MODIFIABLES = 'r_prestations.r_p_couts_estimes_modifiables';

    /** the column name for the r_p_cout_interne field */
    const R_P_COUT_INTERNE = 'r_prestations.r_p_cout_interne';

    /** the column name for the r_p_cout_externe field */
    const R_P_COUT_EXTERNE = 'r_prestations.r_p_cout_externe';

    /** the column name for the r_p_cout_total field */
    const R_P_COUT_TOTAL = 'r_prestations.r_p_cout_total';

    /** the column name for the r_p_validation_id field */
    const R_P_VALIDATION_ID = 'r_prestations.r_p_validation_id';

    /** the column name for the r_p_taux_marge_min field */
    const R_P_TAUX_MARGE_MIN = 'r_prestations.r_p_taux_marge_min';

    /** the column name for the r_p_prix_vente field */
    const R_P_PRIX_VENTE = 'r_prestations.r_p_prix_vente';

    /** the column name for the r_p_type_frais_id field */
    const R_P_TYPE_FRAIS_ID = 'r_prestations.r_p_type_frais_id';

    /** the column name for the actif field */
    const ACTIF = 'r_prestations.actif';

    /** the column name for the r_p_tva_id field */
    const R_P_TVA_ID = 'r_prestations.r_p_tva_id';

    /** the column name for the r_p_rfa field */
    const R_P_RFA = 'r_prestations.r_p_rfa';

    /** the column name for the valide_daf field */
    const VALIDE_DAF = 'r_prestations.valide_daf';

    /** the column name for the r_p_is_maj_from_compiluo field */
    const R_P_IS_MAJ_FROM_COMPILUO = 'r_prestations.r_p_is_maj_from_compiluo';

    /** the column name for the date_create field */
    const DATE_CREATE = 'r_prestations.date_create';

    /** the column name for the user_create field */
    const USER_CREATE = 'r_prestations.user_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'r_prestations.date_modify';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'r_prestations.user_modify';

    /** the column name for the r_p_is_mandatory field */
    const R_P_IS_MANDATORY = 'r_prestations.r_p_is_mandatory';

    /** the column name for the r_p_is_eligible_for_prime field */
    const R_P_IS_ELIGIBLE_FOR_PRIME = 'r_prestations.r_p_is_eligible_for_prime';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of RPrestations objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array RPrestations[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. RPrestationsPeer::$fieldNames[RPrestationsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('RPrestationId', 'RPLibelle', 'RPLibelleEn', 'RPControle', 'RPAxe1', 'RPAxe2', 'RPAxe3', 'RPAxe4', 'RPAxe5', 'RPCodeComptable', 'RPAdf', 'RPCommentaires', 'RPDescriptionFr', 'RPDescriptionEn', 'RPQuiValide', 'RPGroupeValidationId', 'RPCoutsEstimesModifiables', 'RPCoutInterne', 'RPCoutExterne', 'RPCoutTotal', 'RPValidationId', 'RPTauxMargeMin', 'RPPrixVente', 'RPTypeFraisId', 'Actif', 'RPTvaId', 'RPRfa', 'ValideDaf', 'RPIsMajFromCompiluo', 'DateCreate', 'UserCreate', 'DateModify', 'UserModify', 'RPIsMandatory', 'RPIsEligibleForPrime', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('rPrestationId', 'rPLibelle', 'rPLibelleEn', 'rPControle', 'rPAxe1', 'rPAxe2', 'rPAxe3', 'rPAxe4', 'rPAxe5', 'rPCodeComptable', 'rPAdf', 'rPCommentaires', 'rPDescriptionFr', 'rPDescriptionEn', 'rPQuiValide', 'rPGroupeValidationId', 'rPCoutsEstimesModifiables', 'rPCoutInterne', 'rPCoutExterne', 'rPCoutTotal', 'rPValidationId', 'rPTauxMargeMin', 'rPPrixVente', 'rPTypeFraisId', 'actif', 'rPTvaId', 'rPRfa', 'valideDaf', 'rPIsMajFromCompiluo', 'dateCreate', 'userCreate', 'dateModify', 'userModify', 'rPIsMandatory', 'rPIsEligibleForPrime', ),
        BasePeer::TYPE_COLNAME => array (RPrestationsPeer::R_PRESTATION_ID, RPrestationsPeer::R_P_LIBELLE, RPrestationsPeer::R_P_LIBELLE_EN, RPrestationsPeer::R_P_CONTROLE, RPrestationsPeer::R_P_AXE1, RPrestationsPeer::R_P_AXE2, RPrestationsPeer::R_P_AXE3, RPrestationsPeer::R_P_AXE4, RPrestationsPeer::R_P_AXE5, RPrestationsPeer::R_P_CODE_COMPTABLE, RPrestationsPeer::R_P_ADF, RPrestationsPeer::R_P_COMMENTAIRES, RPrestationsPeer::R_P_DESCRIPTION_FR, RPrestationsPeer::R_P_DESCRIPTION_EN, RPrestationsPeer::R_P_QUI_VALIDE, RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, RPrestationsPeer::R_P_COUTS_ESTIMES_MODIFIABLES, RPrestationsPeer::R_P_COUT_INTERNE, RPrestationsPeer::R_P_COUT_EXTERNE, RPrestationsPeer::R_P_COUT_TOTAL, RPrestationsPeer::R_P_VALIDATION_ID, RPrestationsPeer::R_P_TAUX_MARGE_MIN, RPrestationsPeer::R_P_PRIX_VENTE, RPrestationsPeer::R_P_TYPE_FRAIS_ID, RPrestationsPeer::ACTIF, RPrestationsPeer::R_P_TVA_ID, RPrestationsPeer::R_P_RFA, RPrestationsPeer::VALIDE_DAF, RPrestationsPeer::R_P_IS_MAJ_FROM_COMPILUO, RPrestationsPeer::DATE_CREATE, RPrestationsPeer::USER_CREATE, RPrestationsPeer::DATE_MODIFY, RPrestationsPeer::USER_MODIFY, RPrestationsPeer::R_P_IS_MANDATORY, RPrestationsPeer::R_P_IS_ELIGIBLE_FOR_PRIME, ),
        BasePeer::TYPE_RAW_COLNAME => array ('R_PRESTATION_ID', 'R_P_LIBELLE', 'R_P_LIBELLE_EN', 'R_P_CONTROLE', 'R_P_AXE1', 'R_P_AXE2', 'R_P_AXE3', 'R_P_AXE4', 'R_P_AXE5', 'R_P_CODE_COMPTABLE', 'R_P_ADF', 'R_P_COMMENTAIRES', 'R_P_DESCRIPTION_FR', 'R_P_DESCRIPTION_EN', 'R_P_QUI_VALIDE', 'R_P_GROUPE_VALIDATION_ID', 'R_P_COUTS_ESTIMES_MODIFIABLES', 'R_P_COUT_INTERNE', 'R_P_COUT_EXTERNE', 'R_P_COUT_TOTAL', 'R_P_VALIDATION_ID', 'R_P_TAUX_MARGE_MIN', 'R_P_PRIX_VENTE', 'R_P_TYPE_FRAIS_ID', 'ACTIF', 'R_P_TVA_ID', 'R_P_RFA', 'VALIDE_DAF', 'R_P_IS_MAJ_FROM_COMPILUO', 'DATE_CREATE', 'USER_CREATE', 'DATE_MODIFY', 'USER_MODIFY', 'R_P_IS_MANDATORY', 'R_P_IS_ELIGIBLE_FOR_PRIME', ),
        BasePeer::TYPE_FIELDNAME => array ('r_prestation_id', 'r_p_libelle', 'r_p_libelle_en', 'r_p_controle', 'r_p_axe1', 'r_p_axe2', 'r_p_axe3', 'r_p_axe4', 'r_p_axe5', 'r_p_code_comptable', 'r_p_adf', 'r_p_commentaires', 'r_p_description_fr', 'r_p_description_en', 'r_p_qui_valide', 'r_p_groupe_validation_id', 'r_p_couts_estimes_modifiables', 'r_p_cout_interne', 'r_p_cout_externe', 'r_p_cout_total', 'r_p_validation_id', 'r_p_taux_marge_min', 'r_p_prix_vente', 'r_p_type_frais_id', 'actif', 'r_p_tva_id', 'r_p_rfa', 'valide_daf', 'r_p_is_maj_from_compiluo', 'date_create', 'user_create', 'date_modify', 'user_modify', 'r_p_is_mandatory', 'r_p_is_eligible_for_prime', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. RPrestationsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('RPrestationId' => 0, 'RPLibelle' => 1, 'RPLibelleEn' => 2, 'RPControle' => 3, 'RPAxe1' => 4, 'RPAxe2' => 5, 'RPAxe3' => 6, 'RPAxe4' => 7, 'RPAxe5' => 8, 'RPCodeComptable' => 9, 'RPAdf' => 10, 'RPCommentaires' => 11, 'RPDescriptionFr' => 12, 'RPDescriptionEn' => 13, 'RPQuiValide' => 14, 'RPGroupeValidationId' => 15, 'RPCoutsEstimesModifiables' => 16, 'RPCoutInterne' => 17, 'RPCoutExterne' => 18, 'RPCoutTotal' => 19, 'RPValidationId' => 20, 'RPTauxMargeMin' => 21, 'RPPrixVente' => 22, 'RPTypeFraisId' => 23, 'Actif' => 24, 'RPTvaId' => 25, 'RPRfa' => 26, 'ValideDaf' => 27, 'RPIsMajFromCompiluo' => 28, 'DateCreate' => 29, 'UserCreate' => 30, 'DateModify' => 31, 'UserModify' => 32, 'RPIsMandatory' => 33, 'RPIsEligibleForPrime' => 34, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('rPrestationId' => 0, 'rPLibelle' => 1, 'rPLibelleEn' => 2, 'rPControle' => 3, 'rPAxe1' => 4, 'rPAxe2' => 5, 'rPAxe3' => 6, 'rPAxe4' => 7, 'rPAxe5' => 8, 'rPCodeComptable' => 9, 'rPAdf' => 10, 'rPCommentaires' => 11, 'rPDescriptionFr' => 12, 'rPDescriptionEn' => 13, 'rPQuiValide' => 14, 'rPGroupeValidationId' => 15, 'rPCoutsEstimesModifiables' => 16, 'rPCoutInterne' => 17, 'rPCoutExterne' => 18, 'rPCoutTotal' => 19, 'rPValidationId' => 20, 'rPTauxMargeMin' => 21, 'rPPrixVente' => 22, 'rPTypeFraisId' => 23, 'actif' => 24, 'rPTvaId' => 25, 'rPRfa' => 26, 'valideDaf' => 27, 'rPIsMajFromCompiluo' => 28, 'dateCreate' => 29, 'userCreate' => 30, 'dateModify' => 31, 'userModify' => 32, 'rPIsMandatory' => 33, 'rPIsEligibleForPrime' => 34, ),
        BasePeer::TYPE_COLNAME => array (RPrestationsPeer::R_PRESTATION_ID => 0, RPrestationsPeer::R_P_LIBELLE => 1, RPrestationsPeer::R_P_LIBELLE_EN => 2, RPrestationsPeer::R_P_CONTROLE => 3, RPrestationsPeer::R_P_AXE1 => 4, RPrestationsPeer::R_P_AXE2 => 5, RPrestationsPeer::R_P_AXE3 => 6, RPrestationsPeer::R_P_AXE4 => 7, RPrestationsPeer::R_P_AXE5 => 8, RPrestationsPeer::R_P_CODE_COMPTABLE => 9, RPrestationsPeer::R_P_ADF => 10, RPrestationsPeer::R_P_COMMENTAIRES => 11, RPrestationsPeer::R_P_DESCRIPTION_FR => 12, RPrestationsPeer::R_P_DESCRIPTION_EN => 13, RPrestationsPeer::R_P_QUI_VALIDE => 14, RPrestationsPeer::R_P_GROUPE_VALIDATION_ID => 15, RPrestationsPeer::R_P_COUTS_ESTIMES_MODIFIABLES => 16, RPrestationsPeer::R_P_COUT_INTERNE => 17, RPrestationsPeer::R_P_COUT_EXTERNE => 18, RPrestationsPeer::R_P_COUT_TOTAL => 19, RPrestationsPeer::R_P_VALIDATION_ID => 20, RPrestationsPeer::R_P_TAUX_MARGE_MIN => 21, RPrestationsPeer::R_P_PRIX_VENTE => 22, RPrestationsPeer::R_P_TYPE_FRAIS_ID => 23, RPrestationsPeer::ACTIF => 24, RPrestationsPeer::R_P_TVA_ID => 25, RPrestationsPeer::R_P_RFA => 26, RPrestationsPeer::VALIDE_DAF => 27, RPrestationsPeer::R_P_IS_MAJ_FROM_COMPILUO => 28, RPrestationsPeer::DATE_CREATE => 29, RPrestationsPeer::USER_CREATE => 30, RPrestationsPeer::DATE_MODIFY => 31, RPrestationsPeer::USER_MODIFY => 32, RPrestationsPeer::R_P_IS_MANDATORY => 33, RPrestationsPeer::R_P_IS_ELIGIBLE_FOR_PRIME => 34, ),
        BasePeer::TYPE_RAW_COLNAME => array ('R_PRESTATION_ID' => 0, 'R_P_LIBELLE' => 1, 'R_P_LIBELLE_EN' => 2, 'R_P_CONTROLE' => 3, 'R_P_AXE1' => 4, 'R_P_AXE2' => 5, 'R_P_AXE3' => 6, 'R_P_AXE4' => 7, 'R_P_AXE5' => 8, 'R_P_CODE_COMPTABLE' => 9, 'R_P_ADF' => 10, 'R_P_COMMENTAIRES' => 11, 'R_P_DESCRIPTION_FR' => 12, 'R_P_DESCRIPTION_EN' => 13, 'R_P_QUI_VALIDE' => 14, 'R_P_GROUPE_VALIDATION_ID' => 15, 'R_P_COUTS_ESTIMES_MODIFIABLES' => 16, 'R_P_COUT_INTERNE' => 17, 'R_P_COUT_EXTERNE' => 18, 'R_P_COUT_TOTAL' => 19, 'R_P_VALIDATION_ID' => 20, 'R_P_TAUX_MARGE_MIN' => 21, 'R_P_PRIX_VENTE' => 22, 'R_P_TYPE_FRAIS_ID' => 23, 'ACTIF' => 24, 'R_P_TVA_ID' => 25, 'R_P_RFA' => 26, 'VALIDE_DAF' => 27, 'R_P_IS_MAJ_FROM_COMPILUO' => 28, 'DATE_CREATE' => 29, 'USER_CREATE' => 30, 'DATE_MODIFY' => 31, 'USER_MODIFY' => 32, 'R_P_IS_MANDATORY' => 33, 'R_P_IS_ELIGIBLE_FOR_PRIME' => 34, ),
        BasePeer::TYPE_FIELDNAME => array ('r_prestation_id' => 0, 'r_p_libelle' => 1, 'r_p_libelle_en' => 2, 'r_p_controle' => 3, 'r_p_axe1' => 4, 'r_p_axe2' => 5, 'r_p_axe3' => 6, 'r_p_axe4' => 7, 'r_p_axe5' => 8, 'r_p_code_comptable' => 9, 'r_p_adf' => 10, 'r_p_commentaires' => 11, 'r_p_description_fr' => 12, 'r_p_description_en' => 13, 'r_p_qui_valide' => 14, 'r_p_groupe_validation_id' => 15, 'r_p_couts_estimes_modifiables' => 16, 'r_p_cout_interne' => 17, 'r_p_cout_externe' => 18, 'r_p_cout_total' => 19, 'r_p_validation_id' => 20, 'r_p_taux_marge_min' => 21, 'r_p_prix_vente' => 22, 'r_p_type_frais_id' => 23, 'actif' => 24, 'r_p_tva_id' => 25, 'r_p_rfa' => 26, 'valide_daf' => 27, 'r_p_is_maj_from_compiluo' => 28, 'date_create' => 29, 'user_create' => 30, 'date_modify' => 31, 'user_modify' => 32, 'r_p_is_mandatory' => 33, 'r_p_is_eligible_for_prime' => 34, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = RPrestationsPeer::getFieldNames($toType);
        $key = isset(RPrestationsPeer::$fieldKeys[$fromType][$name]) ? RPrestationsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(RPrestationsPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, RPrestationsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return RPrestationsPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. RPrestationsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RPrestationsPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(RPrestationsPeer::R_PRESTATION_ID);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_LIBELLE);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_LIBELLE_EN);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_CONTROLE);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_AXE1);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_AXE2);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_AXE3);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_AXE4);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_AXE5);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_CODE_COMPTABLE);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_ADF);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_COMMENTAIRES);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_DESCRIPTION_FR);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_DESCRIPTION_EN);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_QUI_VALIDE);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_COUTS_ESTIMES_MODIFIABLES);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_COUT_INTERNE);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_COUT_EXTERNE);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_COUT_TOTAL);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_VALIDATION_ID);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_TAUX_MARGE_MIN);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_PRIX_VENTE);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_TYPE_FRAIS_ID);
            $criteria->addSelectColumn(RPrestationsPeer::ACTIF);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_TVA_ID);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_RFA);
            $criteria->addSelectColumn(RPrestationsPeer::VALIDE_DAF);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_IS_MAJ_FROM_COMPILUO);
            $criteria->addSelectColumn(RPrestationsPeer::DATE_CREATE);
            $criteria->addSelectColumn(RPrestationsPeer::USER_CREATE);
            $criteria->addSelectColumn(RPrestationsPeer::DATE_MODIFY);
            $criteria->addSelectColumn(RPrestationsPeer::USER_MODIFY);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_IS_MANDATORY);
            $criteria->addSelectColumn(RPrestationsPeer::R_P_IS_ELIGIBLE_FOR_PRIME);
        } else {
            $criteria->addSelectColumn($alias . '.r_prestation_id');
            $criteria->addSelectColumn($alias . '.r_p_libelle');
            $criteria->addSelectColumn($alias . '.r_p_libelle_en');
            $criteria->addSelectColumn($alias . '.r_p_controle');
            $criteria->addSelectColumn($alias . '.r_p_axe1');
            $criteria->addSelectColumn($alias . '.r_p_axe2');
            $criteria->addSelectColumn($alias . '.r_p_axe3');
            $criteria->addSelectColumn($alias . '.r_p_axe4');
            $criteria->addSelectColumn($alias . '.r_p_axe5');
            $criteria->addSelectColumn($alias . '.r_p_code_comptable');
            $criteria->addSelectColumn($alias . '.r_p_adf');
            $criteria->addSelectColumn($alias . '.r_p_commentaires');
            $criteria->addSelectColumn($alias . '.r_p_description_fr');
            $criteria->addSelectColumn($alias . '.r_p_description_en');
            $criteria->addSelectColumn($alias . '.r_p_qui_valide');
            $criteria->addSelectColumn($alias . '.r_p_groupe_validation_id');
            $criteria->addSelectColumn($alias . '.r_p_couts_estimes_modifiables');
            $criteria->addSelectColumn($alias . '.r_p_cout_interne');
            $criteria->addSelectColumn($alias . '.r_p_cout_externe');
            $criteria->addSelectColumn($alias . '.r_p_cout_total');
            $criteria->addSelectColumn($alias . '.r_p_validation_id');
            $criteria->addSelectColumn($alias . '.r_p_taux_marge_min');
            $criteria->addSelectColumn($alias . '.r_p_prix_vente');
            $criteria->addSelectColumn($alias . '.r_p_type_frais_id');
            $criteria->addSelectColumn($alias . '.actif');
            $criteria->addSelectColumn($alias . '.r_p_tva_id');
            $criteria->addSelectColumn($alias . '.r_p_rfa');
            $criteria->addSelectColumn($alias . '.valide_daf');
            $criteria->addSelectColumn($alias . '.r_p_is_maj_from_compiluo');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.user_create');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.user_modify');
            $criteria->addSelectColumn($alias . '.r_p_is_mandatory');
            $criteria->addSelectColumn($alias . '.r_p_is_eligible_for_prime');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return RPrestations
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RPrestationsPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return RPrestationsPeer::populateObjects(RPrestationsPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RPrestationsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param RPrestations $obj A RPrestations object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRPrestationId();
            } // if key === null
            RPrestationsPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A RPrestations object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof RPrestations) {
                $key = (string) $value->getRPrestationId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or RPrestations object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(RPrestationsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return RPrestations Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(RPrestationsPeer::$instances[$key])) {
                return RPrestationsPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (RPrestationsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        RPrestationsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to r_prestations
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = RPrestationsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RPrestationsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RPrestationsPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (RPrestations object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RPrestationsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RPrestationsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RPrestationsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RPrestationsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GroupValidation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGroupValidation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Axe1 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAxe1(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Axe2 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAxe2(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Axe3 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAxe3(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Axe4 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAxe4(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Axe5 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAxe5(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with their AclGroups objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGroupValidation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol = RPrestationsPeer::NUM_HYDRATE_COLUMNS;
        AclGroupsPeer::addSelectColumns($criteria);

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = AclGroupsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = AclGroupsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AclGroupsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    AclGroupsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (RPrestations) to $obj2 (AclGroups)
                $obj2->addRPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with their RPAxe1 objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAxe1(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol = RPrestationsPeer::NUM_HYDRATE_COLUMNS;
        RPAxe1Peer::addSelectColumns($criteria);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RPAxe1Peer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RPAxe1Peer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RPAxe1Peer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RPAxe1Peer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (RPrestations) to $obj2 (RPAxe1)
                $obj2->addRPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with their RPAxe2 objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAxe2(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol = RPrestationsPeer::NUM_HYDRATE_COLUMNS;
        RPAxe2Peer::addSelectColumns($criteria);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RPAxe2Peer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RPAxe2Peer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RPAxe2Peer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RPAxe2Peer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (RPrestations) to $obj2 (RPAxe2)
                $obj2->addRPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with their RPAxe3 objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAxe3(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol = RPrestationsPeer::NUM_HYDRATE_COLUMNS;
        RPAxe3Peer::addSelectColumns($criteria);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RPAxe3Peer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RPAxe3Peer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RPAxe3Peer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RPAxe3Peer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (RPrestations) to $obj2 (RPAxe3)
                $obj2->addRPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with their RPAxe4 objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAxe4(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol = RPrestationsPeer::NUM_HYDRATE_COLUMNS;
        RPAxe4Peer::addSelectColumns($criteria);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RPAxe4Peer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RPAxe4Peer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RPAxe4Peer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RPAxe4Peer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (RPrestations) to $obj2 (RPAxe4)
                $obj2->addRPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with their RPAxe5 objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAxe5(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol = RPrestationsPeer::NUM_HYDRATE_COLUMNS;
        RPAxe5Peer::addSelectColumns($criteria);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RPAxe5Peer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RPAxe5Peer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RPAxe5Peer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RPAxe5Peer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (RPrestations) to $obj2 (RPAxe5)
                $obj2->addRPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of RPrestations objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        AclGroupsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AclGroupsPeer::NUM_HYDRATE_COLUMNS;

        RPAxe1Peer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RPAxe1Peer::NUM_HYDRATE_COLUMNS;

        RPAxe2Peer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RPAxe2Peer::NUM_HYDRATE_COLUMNS;

        RPAxe3Peer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPAxe3Peer::NUM_HYDRATE_COLUMNS;

        RPAxe4Peer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RPAxe4Peer::NUM_HYDRATE_COLUMNS;

        RPAxe5Peer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + RPAxe5Peer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined AclGroups rows

            $key2 = AclGroupsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = AclGroupsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AclGroupsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AclGroupsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (RPrestations) to the collection in $obj2 (AclGroups)
                $obj2->addRPrestations($obj1);
            } // if joined row not null

            // Add objects for joined RPAxe1 rows

            $key3 = RPAxe1Peer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = RPAxe1Peer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = RPAxe1Peer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RPAxe1Peer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (RPrestations) to the collection in $obj3 (RPAxe1)
                $obj3->addRPrestations($obj1);
            } // if joined row not null

            // Add objects for joined RPAxe2 rows

            $key4 = RPAxe2Peer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = RPAxe2Peer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = RPAxe2Peer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RPAxe2Peer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (RPrestations) to the collection in $obj4 (RPAxe2)
                $obj4->addRPrestations($obj1);
            } // if joined row not null

            // Add objects for joined RPAxe3 rows

            $key5 = RPAxe3Peer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = RPAxe3Peer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = RPAxe3Peer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPAxe3Peer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (RPrestations) to the collection in $obj5 (RPAxe3)
                $obj5->addRPrestations($obj1);
            } // if joined row not null

            // Add objects for joined RPAxe4 rows

            $key6 = RPAxe4Peer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = RPAxe4Peer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = RPAxe4Peer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RPAxe4Peer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (RPrestations) to the collection in $obj6 (RPAxe4)
                $obj6->addRPrestations($obj1);
            } // if joined row not null

            // Add objects for joined RPAxe5 rows

            $key7 = RPAxe5Peer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = RPAxe5Peer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = RPAxe5Peer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    RPAxe5Peer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (RPrestations) to the collection in $obj7 (RPAxe5)
                $obj7->addRPrestations($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GroupValidation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGroupValidation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Axe1 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAxe1(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Axe2 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAxe2(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Axe3 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAxe3(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Axe4 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAxe4(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Axe5 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAxe5(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with all related objects except GroupValidation.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGroupValidation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        RPAxe1Peer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RPAxe1Peer::NUM_HYDRATE_COLUMNS;

        RPAxe2Peer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RPAxe2Peer::NUM_HYDRATE_COLUMNS;

        RPAxe3Peer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RPAxe3Peer::NUM_HYDRATE_COLUMNS;

        RPAxe4Peer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPAxe4Peer::NUM_HYDRATE_COLUMNS;

        RPAxe5Peer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RPAxe5Peer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RPAxe1 rows

                $key2 = RPAxe1Peer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RPAxe1Peer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RPAxe1Peer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RPAxe1Peer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj2 (RPAxe1)
                $obj2->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe2 rows

                $key3 = RPAxe2Peer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RPAxe2Peer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RPAxe2Peer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RPAxe2Peer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj3 (RPAxe2)
                $obj3->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe3 rows

                $key4 = RPAxe3Peer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RPAxe3Peer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RPAxe3Peer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RPAxe3Peer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj4 (RPAxe3)
                $obj4->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe4 rows

                $key5 = RPAxe4Peer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RPAxe4Peer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RPAxe4Peer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPAxe4Peer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj5 (RPAxe4)
                $obj5->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe5 rows

                $key6 = RPAxe5Peer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RPAxe5Peer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RPAxe5Peer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RPAxe5Peer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj6 (RPAxe5)
                $obj6->addRPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with all related objects except Axe1.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAxe1(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        AclGroupsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AclGroupsPeer::NUM_HYDRATE_COLUMNS;

        RPAxe2Peer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RPAxe2Peer::NUM_HYDRATE_COLUMNS;

        RPAxe3Peer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RPAxe3Peer::NUM_HYDRATE_COLUMNS;

        RPAxe4Peer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPAxe4Peer::NUM_HYDRATE_COLUMNS;

        RPAxe5Peer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RPAxe5Peer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined AclGroups rows

                $key2 = AclGroupsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AclGroupsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AclGroupsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AclGroupsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj2 (AclGroups)
                $obj2->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe2 rows

                $key3 = RPAxe2Peer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RPAxe2Peer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RPAxe2Peer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RPAxe2Peer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj3 (RPAxe2)
                $obj3->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe3 rows

                $key4 = RPAxe3Peer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RPAxe3Peer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RPAxe3Peer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RPAxe3Peer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj4 (RPAxe3)
                $obj4->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe4 rows

                $key5 = RPAxe4Peer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RPAxe4Peer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RPAxe4Peer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPAxe4Peer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj5 (RPAxe4)
                $obj5->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe5 rows

                $key6 = RPAxe5Peer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RPAxe5Peer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RPAxe5Peer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RPAxe5Peer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj6 (RPAxe5)
                $obj6->addRPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with all related objects except Axe2.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAxe2(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        AclGroupsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AclGroupsPeer::NUM_HYDRATE_COLUMNS;

        RPAxe1Peer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RPAxe1Peer::NUM_HYDRATE_COLUMNS;

        RPAxe3Peer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RPAxe3Peer::NUM_HYDRATE_COLUMNS;

        RPAxe4Peer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPAxe4Peer::NUM_HYDRATE_COLUMNS;

        RPAxe5Peer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RPAxe5Peer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined AclGroups rows

                $key2 = AclGroupsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AclGroupsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AclGroupsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AclGroupsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj2 (AclGroups)
                $obj2->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe1 rows

                $key3 = RPAxe1Peer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RPAxe1Peer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RPAxe1Peer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RPAxe1Peer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj3 (RPAxe1)
                $obj3->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe3 rows

                $key4 = RPAxe3Peer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RPAxe3Peer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RPAxe3Peer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RPAxe3Peer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj4 (RPAxe3)
                $obj4->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe4 rows

                $key5 = RPAxe4Peer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RPAxe4Peer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RPAxe4Peer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPAxe4Peer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj5 (RPAxe4)
                $obj5->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe5 rows

                $key6 = RPAxe5Peer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RPAxe5Peer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RPAxe5Peer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RPAxe5Peer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj6 (RPAxe5)
                $obj6->addRPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with all related objects except Axe3.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAxe3(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        AclGroupsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AclGroupsPeer::NUM_HYDRATE_COLUMNS;

        RPAxe1Peer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RPAxe1Peer::NUM_HYDRATE_COLUMNS;

        RPAxe2Peer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RPAxe2Peer::NUM_HYDRATE_COLUMNS;

        RPAxe4Peer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPAxe4Peer::NUM_HYDRATE_COLUMNS;

        RPAxe5Peer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RPAxe5Peer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined AclGroups rows

                $key2 = AclGroupsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AclGroupsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AclGroupsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AclGroupsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj2 (AclGroups)
                $obj2->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe1 rows

                $key3 = RPAxe1Peer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RPAxe1Peer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RPAxe1Peer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RPAxe1Peer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj3 (RPAxe1)
                $obj3->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe2 rows

                $key4 = RPAxe2Peer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RPAxe2Peer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RPAxe2Peer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RPAxe2Peer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj4 (RPAxe2)
                $obj4->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe4 rows

                $key5 = RPAxe4Peer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RPAxe4Peer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RPAxe4Peer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPAxe4Peer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj5 (RPAxe4)
                $obj5->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe5 rows

                $key6 = RPAxe5Peer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RPAxe5Peer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RPAxe5Peer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RPAxe5Peer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj6 (RPAxe5)
                $obj6->addRPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with all related objects except Axe4.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAxe4(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        AclGroupsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AclGroupsPeer::NUM_HYDRATE_COLUMNS;

        RPAxe1Peer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RPAxe1Peer::NUM_HYDRATE_COLUMNS;

        RPAxe2Peer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RPAxe2Peer::NUM_HYDRATE_COLUMNS;

        RPAxe3Peer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPAxe3Peer::NUM_HYDRATE_COLUMNS;

        RPAxe5Peer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RPAxe5Peer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE5, RPAxe5Peer::R_P_AXE5_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined AclGroups rows

                $key2 = AclGroupsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AclGroupsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AclGroupsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AclGroupsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj2 (AclGroups)
                $obj2->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe1 rows

                $key3 = RPAxe1Peer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RPAxe1Peer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RPAxe1Peer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RPAxe1Peer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj3 (RPAxe1)
                $obj3->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe2 rows

                $key4 = RPAxe2Peer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RPAxe2Peer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RPAxe2Peer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RPAxe2Peer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj4 (RPAxe2)
                $obj4->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe3 rows

                $key5 = RPAxe3Peer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RPAxe3Peer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RPAxe3Peer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPAxe3Peer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj5 (RPAxe3)
                $obj5->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe5 rows

                $key6 = RPAxe5Peer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RPAxe5Peer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RPAxe5Peer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RPAxe5Peer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj6 (RPAxe5)
                $obj6->addRPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RPrestations objects pre-filled with all related objects except Axe5.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAxe5(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);
        }

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        AclGroupsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AclGroupsPeer::NUM_HYDRATE_COLUMNS;

        RPAxe1Peer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RPAxe1Peer::NUM_HYDRATE_COLUMNS;

        RPAxe2Peer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RPAxe2Peer::NUM_HYDRATE_COLUMNS;

        RPAxe3Peer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPAxe3Peer::NUM_HYDRATE_COLUMNS;

        RPAxe4Peer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RPAxe4Peer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, AclGroupsPeer::GROUP_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE1, RPAxe1Peer::R_P_AXE1_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE2, RPAxe2Peer::R_P_AXE2_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE3, RPAxe3Peer::R_P_AXE3_ID, $join_behavior);

        $criteria->addJoin(RPrestationsPeer::R_P_AXE4, RPAxe4Peer::R_P_AXE4_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined AclGroups rows

                $key2 = AclGroupsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AclGroupsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AclGroupsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AclGroupsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj2 (AclGroups)
                $obj2->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe1 rows

                $key3 = RPAxe1Peer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RPAxe1Peer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RPAxe1Peer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RPAxe1Peer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj3 (RPAxe1)
                $obj3->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe2 rows

                $key4 = RPAxe2Peer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RPAxe2Peer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RPAxe2Peer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RPAxe2Peer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj4 (RPAxe2)
                $obj4->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe3 rows

                $key5 = RPAxe3Peer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RPAxe3Peer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RPAxe3Peer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPAxe3Peer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj5 (RPAxe3)
                $obj5->addRPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPAxe4 rows

                $key6 = RPAxe4Peer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RPAxe4Peer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RPAxe4Peer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RPAxe4Peer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (RPrestations) to the collection in $obj6 (RPAxe4)
                $obj6->addRPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(RPrestationsPeer::DATABASE_NAME)->getTable(RPrestationsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseRPrestationsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseRPrestationsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \RPrestationsTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return RPrestationsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a RPrestations or Criteria object.
     *
     * @param      mixed $values Criteria or RPrestations object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from RPrestations object
        }

        if ($criteria->containsKey(RPrestationsPeer::R_PRESTATION_ID) && $criteria->keyContainsValue(RPrestationsPeer::R_PRESTATION_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RPrestationsPeer::R_PRESTATION_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a RPrestations or Criteria object.
     *
     * @param      mixed $values Criteria or RPrestations object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(RPrestationsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RPrestationsPeer::R_PRESTATION_ID);
            $value = $criteria->remove(RPrestationsPeer::R_PRESTATION_ID);
            if ($value) {
                $selectCriteria->add(RPrestationsPeer::R_PRESTATION_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RPrestationsPeer::TABLE_NAME);
            }

        } else { // $values is RPrestations object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the r_prestations table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(RPrestationsPeer::TABLE_NAME, $con, RPrestationsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RPrestationsPeer::clearInstancePool();
            RPrestationsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a RPrestations or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or RPrestations object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            RPrestationsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof RPrestations) { // it's a model object
            // invalidate the cache for this single object
            RPrestationsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RPrestationsPeer::DATABASE_NAME);
            $criteria->add(RPrestationsPeer::R_PRESTATION_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                RPrestationsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(RPrestationsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            RPrestationsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given RPrestations object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param RPrestations $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RPrestationsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RPrestationsPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_LIBELLE))
            $columns[RPrestationsPeer::R_P_LIBELLE] = $obj->getRPLibelle();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_LIBELLE_EN))
            $columns[RPrestationsPeer::R_P_LIBELLE_EN] = $obj->getRPLibelleEn();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_CONTROLE))
            $columns[RPrestationsPeer::R_P_CONTROLE] = $obj->getRPControle();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_AXE1))
            $columns[RPrestationsPeer::R_P_AXE1] = $obj->getRPAxe1();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_AXE2))
            $columns[RPrestationsPeer::R_P_AXE2] = $obj->getRPAxe2();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_AXE3))
            $columns[RPrestationsPeer::R_P_AXE3] = $obj->getRPAxe3();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_AXE4))
            $columns[RPrestationsPeer::R_P_AXE4] = $obj->getRPAxe4();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_AXE5))
            $columns[RPrestationsPeer::R_P_AXE5] = $obj->getRPAxe5();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_CODE_COMPTABLE))
            $columns[RPrestationsPeer::R_P_CODE_COMPTABLE] = $obj->getRPCodeComptable();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_ADF))
            $columns[RPrestationsPeer::R_P_ADF] = $obj->getRPAdf();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_COMMENTAIRES))
            $columns[RPrestationsPeer::R_P_COMMENTAIRES] = $obj->getRPCommentaires();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_DESCRIPTION_FR))
            $columns[RPrestationsPeer::R_P_DESCRIPTION_FR] = $obj->getRPDescriptionFr();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_DESCRIPTION_EN))
            $columns[RPrestationsPeer::R_P_DESCRIPTION_EN] = $obj->getRPDescriptionEn();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_QUI_VALIDE))
            $columns[RPrestationsPeer::R_P_QUI_VALIDE] = $obj->getRPQuiValide();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID))
            $columns[RPrestationsPeer::R_P_GROUPE_VALIDATION_ID] = $obj->getRPGroupeValidationId();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_COUT_INTERNE))
            $columns[RPrestationsPeer::R_P_COUT_INTERNE] = $obj->getRPCoutInterne();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_COUT_EXTERNE))
            $columns[RPrestationsPeer::R_P_COUT_EXTERNE] = $obj->getRPCoutExterne();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_COUT_TOTAL))
            $columns[RPrestationsPeer::R_P_COUT_TOTAL] = $obj->getRPCoutTotal();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_VALIDATION_ID))
            $columns[RPrestationsPeer::R_P_VALIDATION_ID] = $obj->getRPValidationId();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_TAUX_MARGE_MIN))
            $columns[RPrestationsPeer::R_P_TAUX_MARGE_MIN] = $obj->getRPTauxMargeMin();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_PRIX_VENTE))
            $columns[RPrestationsPeer::R_P_PRIX_VENTE] = $obj->getRPPrixVente();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_TYPE_FRAIS_ID))
            $columns[RPrestationsPeer::R_P_TYPE_FRAIS_ID] = $obj->getRPTypeFraisId();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::ACTIF))
            $columns[RPrestationsPeer::ACTIF] = $obj->getActif();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_TVA_ID))
            $columns[RPrestationsPeer::R_P_TVA_ID] = $obj->getRPTvaId();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_RFA))
            $columns[RPrestationsPeer::R_P_RFA] = $obj->getRPRfa();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::VALIDE_DAF))
            $columns[RPrestationsPeer::VALIDE_DAF] = $obj->getValideDaf();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::R_P_IS_MAJ_FROM_COMPILUO))
            $columns[RPrestationsPeer::R_P_IS_MAJ_FROM_COMPILUO] = $obj->getRPIsMajFromCompiluo();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::DATE_CREATE))
            $columns[RPrestationsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::USER_CREATE))
            $columns[RPrestationsPeer::USER_CREATE] = $obj->getUserCreate();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::DATE_MODIFY))
            $columns[RPrestationsPeer::DATE_MODIFY] = $obj->getDateModify();

        if ($obj->isNew() || $obj->isColumnModified(RPrestationsPeer::USER_MODIFY))
            $columns[RPrestationsPeer::USER_MODIFY] = $obj->getUserModify();

        }

        return BasePeer::doValidate(RPrestationsPeer::DATABASE_NAME, RPrestationsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return RPrestations
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RPrestationsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RPrestationsPeer::DATABASE_NAME);
        $criteria->add(RPrestationsPeer::R_PRESTATION_ID, $pk);

        $v = RPrestationsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return RPrestations[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RPrestationsPeer::DATABASE_NAME);
            $criteria->add(RPrestationsPeer::R_PRESTATION_ID, $pks, Criteria::IN);
            $objs = RPrestationsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

    // utils behavior

            /**
            * Return connection object
            * @return PropelPDO
            */
            public static function getConnection(){
                return Propel::getConnection(self::DATABASE_NAME);
            }
} // BaseRPrestationsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRPrestationsPeer::buildTableMap();

