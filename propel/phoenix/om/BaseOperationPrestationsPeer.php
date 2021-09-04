<?php


/**
 * Base static class for performing query and update operations on the 'operation_prestations' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseOperationPrestationsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'operation_prestations';

    /** the related Propel class for this table */
    const OM_CLASS = 'OperationPrestations';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OperationPrestationsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 38;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 38;

    /** the column name for the op_prest_id field */
    const OP_PREST_ID = 'operation_prestations.op_prest_id';

    /** the column name for the op_r_prest_id field */
    const OP_R_PREST_ID = 'operation_prestations.op_r_prest_id';

    /** the column name for the op_id field */
    const OP_ID = 'operation_prestations.op_id';

    /** the column name for the op_prest_rubri_id field */
    const OP_PREST_RUBRI_ID = 'operation_prestations.op_prest_rubri_id';

    /** the column name for the op_prest_libelle field */
    const OP_PREST_LIBELLE = 'operation_prestations.op_prest_libelle';

    /** the column name for the op_prest_libelle_devis field */
    const OP_PREST_LIBELLE_DEVIS = 'operation_prestations.op_prest_libelle_devis';

    /** the column name for the op_prest_description field */
    const OP_PREST_DESCRIPTION = 'operation_prestations.op_prest_description';

    /** the column name for the op_prest_comment_interne field */
    const OP_PREST_COMMENT_INTERNE = 'operation_prestations.op_prest_comment_interne';

    /** the column name for the op_prest_order field */
    const OP_PREST_ORDER = 'operation_prestations.op_prest_order';

    /** the column name for the op_prest_scena_id field */
    const OP_PREST_SCENA_ID = 'operation_prestations.op_prest_scena_id';

    /** the column name for the op_prest_prime_id field */
    const OP_PREST_PRIME_ID = 'operation_prestations.op_prest_prime_id';

    /** the column name for the op_prest_pv field */
    const OP_PREST_PV = 'operation_prestations.op_prest_pv';

    /** the column name for the op_prest_coef field */
    const OP_PREST_COEF = 'operation_prestations.op_prest_coef';

    /** the column name for the op_prest_ciestim field */
    const OP_PREST_CIESTIM = 'operation_prestations.op_prest_ciestim';

    /** the column name for the op_prest_ceestim field */
    const OP_PREST_CEESTIM = 'operation_prestations.op_prest_ceestim';

    /** the column name for the op_prest_qestim field */
    const OP_PREST_QESTIM = 'operation_prestations.op_prest_qestim';

    /** the column name for the op_prest_mestim field */
    const OP_PREST_MESTIM = 'operation_prestations.op_prest_mestim';

    /** the column name for the op_prest_cireel field */
    const OP_PREST_CIREEL = 'operation_prestations.op_prest_cireel';

    /** the column name for the op_prest_cereel field */
    const OP_PREST_CEREEL = 'operation_prestations.op_prest_cereel';

    /** the column name for the op_prest_qreel field */
    const OP_PREST_QREEL = 'operation_prestations.op_prest_qreel';

    /** the column name for the op_prest_mreel field */
    const OP_PREST_MREEL = 'operation_prestations.op_prest_mreel';

    /** the column name for the op_prest_couts_valides field */
    const OP_PREST_COUTS_VALIDES = 'operation_prestations.op_prest_couts_valides';

    /** the column name for the op_prest_off field */
    const OP_PREST_OFF = 'operation_prestations.op_prest_off';

    /** the column name for the op_prest_npr field */
    const OP_PREST_NPR = 'operation_prestations.op_prest_npr';

    /** the column name for the op_prest_npa field */
    const OP_PREST_NPA = 'operation_prestations.op_prest_npa';

    /** the column name for the op_prest_code_comptable field */
    const OP_PREST_CODE_COMPTABLE = 'operation_prestations.op_prest_code_comptable';

    /** the column name for the op_adf field */
    const OP_ADF = 'operation_prestations.op_adf';

    /** the column name for the op_user_couts_estim field */
    const OP_USER_COUTS_ESTIM = 'operation_prestations.op_user_couts_estim';

    /** the column name for the op_user_couts_reel field */
    const OP_USER_COUTS_REEL = 'operation_prestations.op_user_couts_reel';

    /** the column name for the op_prest_is_maj_from_compiluo field */
    const OP_PREST_IS_MAJ_FROM_COMPILUO = 'operation_prestations.op_prest_is_maj_from_compiluo';

    /** the column name for the date_debut_prestation field */
    const DATE_DEBUT_PRESTATION = 'operation_prestations.date_debut_prestation';

    /** the column name for the date_fin_prestation field */
    const DATE_FIN_PRESTATION = 'operation_prestations.date_fin_prestation';

    /** the column name for the date_create field */
    const DATE_CREATE = 'operation_prestations.date_create';

    /** the column name for the op_prest_is_mandatory field */
    const OP_PREST_IS_MANDATORY = 'operation_prestations.op_prest_is_mandatory';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'operation_prestations.user_modify';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'operation_prestations.date_modify';

    /** the column name for the cost_updater_user field */
    const COST_UPDATER_USER = 'operation_prestations.cost_updater_user';

    /** the column name for the cost_validation_date field */
    const COST_VALIDATION_DATE = 'operation_prestations.cost_validation_date';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of OperationPrestations objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array OperationPrestations[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OperationPrestationsPeer::$fieldNames[OperationPrestationsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('OpPrestId', 'OpRPrestId', 'OpId', 'OpPrestRubriId', 'OpPrestLibelle', 'OpPrestLibelleDevis', 'OpPrestDescription', 'OpPrestCommentInterne', 'OpPrestOrder', 'OpPrestScenaId', 'OpPrestPrimeId', 'OpPrestPv', 'OpPrestCoef', 'OpPrestCiestim', 'OpPrestCeestim', 'OpPrestQestim', 'OpPrestMestim', 'OpPrestCireel', 'OpPrestCereel', 'OpPrestQreel', 'OpPrestMreel', 'OpPrestCoutsValides', 'OpPrestOff', 'OpPrestNpr', 'OpPrestNpa', 'OpPrestCodeComptable', 'OpAdf', 'OpUserCoutsEstim', 'OpUserCoutsReel', 'OpPrestIsMajFromCompiluo', 'DateDebutPrestation', 'DateFinPrestation', 'DateCreate', 'OpPrestIsMandatory', 'UserModify', 'DateModify', 'CostUpdaterUser', 'CostValidationDate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('opPrestId', 'opRPrestId', 'opId', 'opPrestRubriId', 'opPrestLibelle', 'opPrestLibelleDevis', 'opPrestDescription', 'opPrestCommentInterne', 'opPrestOrder', 'opPrestScenaId', 'opPrestPrimeId', 'opPrestPv', 'opPrestCoef', 'opPrestCiestim', 'opPrestCeestim', 'opPrestQestim', 'opPrestMestim', 'opPrestCireel', 'opPrestCereel', 'opPrestQreel', 'opPrestMreel', 'opPrestCoutsValides', 'opPrestOff', 'opPrestNpr', 'opPrestNpa', 'opPrestCodeComptable', 'opAdf', 'opUserCoutsEstim', 'opUserCoutsReel', 'opPrestIsMajFromCompiluo', 'dateDebutPrestation', 'dateFinPrestation', 'dateCreate', 'opPrestIsMandatory', 'userModify', 'dateModify', 'costUpdaterUser', 'costValidationDate', ),
        BasePeer::TYPE_COLNAME => array (OperationPrestationsPeer::OP_PREST_ID, OperationPrestationsPeer::OP_R_PREST_ID, OperationPrestationsPeer::OP_ID, OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationPrestationsPeer::OP_PREST_LIBELLE, OperationPrestationsPeer::OP_PREST_LIBELLE_DEVIS, OperationPrestationsPeer::OP_PREST_DESCRIPTION, OperationPrestationsPeer::OP_PREST_COMMENT_INTERNE, OperationPrestationsPeer::OP_PREST_ORDER, OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrestationsPeer::OP_PREST_PV, OperationPrestationsPeer::OP_PREST_COEF, OperationPrestationsPeer::OP_PREST_CIESTIM, OperationPrestationsPeer::OP_PREST_CEESTIM, OperationPrestationsPeer::OP_PREST_QESTIM, OperationPrestationsPeer::OP_PREST_MESTIM, OperationPrestationsPeer::OP_PREST_CIREEL, OperationPrestationsPeer::OP_PREST_CEREEL, OperationPrestationsPeer::OP_PREST_QREEL, OperationPrestationsPeer::OP_PREST_MREEL, OperationPrestationsPeer::OP_PREST_COUTS_VALIDES, OperationPrestationsPeer::OP_PREST_OFF, OperationPrestationsPeer::OP_PREST_NPR, OperationPrestationsPeer::OP_PREST_NPA, OperationPrestationsPeer::OP_PREST_CODE_COMPTABLE, OperationPrestationsPeer::OP_ADF, OperationPrestationsPeer::OP_USER_COUTS_ESTIM, OperationPrestationsPeer::OP_USER_COUTS_REEL, OperationPrestationsPeer::OP_PREST_IS_MAJ_FROM_COMPILUO, OperationPrestationsPeer::DATE_DEBUT_PRESTATION, OperationPrestationsPeer::DATE_FIN_PRESTATION, OperationPrestationsPeer::DATE_CREATE, OperationPrestationsPeer::OP_PREST_IS_MANDATORY, OperationPrestationsPeer::USER_MODIFY, OperationPrestationsPeer::DATE_MODIFY, OperationPrestationsPeer::COST_UPDATER_USER, OperationPrestationsPeer::COST_VALIDATION_DATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OP_PREST_ID', 'OP_R_PREST_ID', 'OP_ID', 'OP_PREST_RUBRI_ID', 'OP_PREST_LIBELLE', 'OP_PREST_LIBELLE_DEVIS', 'OP_PREST_DESCRIPTION', 'OP_PREST_COMMENT_INTERNE', 'OP_PREST_ORDER', 'OP_PREST_SCENA_ID', 'OP_PREST_PRIME_ID', 'OP_PREST_PV', 'OP_PREST_COEF', 'OP_PREST_CIESTIM', 'OP_PREST_CEESTIM', 'OP_PREST_QESTIM', 'OP_PREST_MESTIM', 'OP_PREST_CIREEL', 'OP_PREST_CEREEL', 'OP_PREST_QREEL', 'OP_PREST_MREEL', 'OP_PREST_COUTS_VALIDES', 'OP_PREST_OFF', 'OP_PREST_NPR', 'OP_PREST_NPA', 'OP_PREST_CODE_COMPTABLE', 'OP_ADF', 'OP_USER_COUTS_ESTIM', 'OP_USER_COUTS_REEL', 'OP_PREST_IS_MAJ_FROM_COMPILUO', 'DATE_DEBUT_PRESTATION', 'DATE_FIN_PRESTATION', 'DATE_CREATE', 'OP_PREST_IS_MANDATORY', 'USER_MODIFY', 'DATE_MODIFY', 'COST_UPDATER_USER', 'COST_VALIDATION_DATE', ),
        BasePeer::TYPE_FIELDNAME => array ('op_prest_id', 'op_r_prest_id', 'op_id', 'op_prest_rubri_id', 'op_prest_libelle', 'op_prest_libelle_devis', 'op_prest_description', 'op_prest_comment_interne', 'op_prest_order', 'op_prest_scena_id', 'op_prest_prime_id', 'op_prest_pv', 'op_prest_coef', 'op_prest_ciestim', 'op_prest_ceestim', 'op_prest_qestim', 'op_prest_mestim', 'op_prest_cireel', 'op_prest_cereel', 'op_prest_qreel', 'op_prest_mreel', 'op_prest_couts_valides', 'op_prest_off', 'op_prest_npr', 'op_prest_npa', 'op_prest_code_comptable', 'op_adf', 'op_user_couts_estim', 'op_user_couts_reel', 'op_prest_is_maj_from_compiluo', 'date_debut_prestation', 'date_fin_prestation', 'date_create', 'op_prest_is_mandatory', 'user_modify', 'date_modify', 'cost_updater_user', 'cost_validation_date', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OperationPrestationsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('OpPrestId' => 0, 'OpRPrestId' => 1, 'OpId' => 2, 'OpPrestRubriId' => 3, 'OpPrestLibelle' => 4, 'OpPrestLibelleDevis' => 5, 'OpPrestDescription' => 6, 'OpPrestCommentInterne' => 7, 'OpPrestOrder' => 8, 'OpPrestScenaId' => 9, 'OpPrestPrimeId' => 10, 'OpPrestPv' => 11, 'OpPrestCoef' => 12, 'OpPrestCiestim' => 13, 'OpPrestCeestim' => 14, 'OpPrestQestim' => 15, 'OpPrestMestim' => 16, 'OpPrestCireel' => 17, 'OpPrestCereel' => 18, 'OpPrestQreel' => 19, 'OpPrestMreel' => 20, 'OpPrestCoutsValides' => 21, 'OpPrestOff' => 22, 'OpPrestNpr' => 23, 'OpPrestNpa' => 24, 'OpPrestCodeComptable' => 25, 'OpAdf' => 26, 'OpUserCoutsEstim' => 27, 'OpUserCoutsReel' => 28, 'OpPrestIsMajFromCompiluo' => 29, 'DateDebutPrestation' => 30, 'DateFinPrestation' => 31, 'DateCreate' => 32, 'OpPrestIsMandatory' => 33, 'UserModify' => 34, 'DateModify' => 35, 'CostUpdaterUser' => 36, 'CostValidationDate' => 37, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('opPrestId' => 0, 'opRPrestId' => 1, 'opId' => 2, 'opPrestRubriId' => 3, 'opPrestLibelle' => 4, 'opPrestLibelleDevis' => 5, 'opPrestDescription' => 6, 'opPrestCommentInterne' => 7, 'opPrestOrder' => 8, 'opPrestScenaId' => 9, 'opPrestPrimeId' => 10, 'opPrestPv' => 11, 'opPrestCoef' => 12, 'opPrestCiestim' => 13, 'opPrestCeestim' => 14, 'opPrestQestim' => 15, 'opPrestMestim' => 16, 'opPrestCireel' => 17, 'opPrestCereel' => 18, 'opPrestQreel' => 19, 'opPrestMreel' => 20, 'opPrestCoutsValides' => 21, 'opPrestOff' => 22, 'opPrestNpr' => 23, 'opPrestNpa' => 24, 'opPrestCodeComptable' => 25, 'opAdf' => 26, 'opUserCoutsEstim' => 27, 'opUserCoutsReel' => 28, 'opPrestIsMajFromCompiluo' => 29, 'dateDebutPrestation' => 30, 'dateFinPrestation' => 31, 'dateCreate' => 32, 'opPrestIsMandatory' => 33, 'userModify' => 34, 'dateModify' => 35, 'costUpdaterUser' => 36, 'costValidationDate' => 37, ),
        BasePeer::TYPE_COLNAME => array (OperationPrestationsPeer::OP_PREST_ID => 0, OperationPrestationsPeer::OP_R_PREST_ID => 1, OperationPrestationsPeer::OP_ID => 2, OperationPrestationsPeer::OP_PREST_RUBRI_ID => 3, OperationPrestationsPeer::OP_PREST_LIBELLE => 4, OperationPrestationsPeer::OP_PREST_LIBELLE_DEVIS => 5, OperationPrestationsPeer::OP_PREST_DESCRIPTION => 6, OperationPrestationsPeer::OP_PREST_COMMENT_INTERNE => 7, OperationPrestationsPeer::OP_PREST_ORDER => 8, OperationPrestationsPeer::OP_PREST_SCENA_ID => 9, OperationPrestationsPeer::OP_PREST_PRIME_ID => 10, OperationPrestationsPeer::OP_PREST_PV => 11, OperationPrestationsPeer::OP_PREST_COEF => 12, OperationPrestationsPeer::OP_PREST_CIESTIM => 13, OperationPrestationsPeer::OP_PREST_CEESTIM => 14, OperationPrestationsPeer::OP_PREST_QESTIM => 15, OperationPrestationsPeer::OP_PREST_MESTIM => 16, OperationPrestationsPeer::OP_PREST_CIREEL => 17, OperationPrestationsPeer::OP_PREST_CEREEL => 18, OperationPrestationsPeer::OP_PREST_QREEL => 19, OperationPrestationsPeer::OP_PREST_MREEL => 20, OperationPrestationsPeer::OP_PREST_COUTS_VALIDES => 21, OperationPrestationsPeer::OP_PREST_OFF => 22, OperationPrestationsPeer::OP_PREST_NPR => 23, OperationPrestationsPeer::OP_PREST_NPA => 24, OperationPrestationsPeer::OP_PREST_CODE_COMPTABLE => 25, OperationPrestationsPeer::OP_ADF => 26, OperationPrestationsPeer::OP_USER_COUTS_ESTIM => 27, OperationPrestationsPeer::OP_USER_COUTS_REEL => 28, OperationPrestationsPeer::OP_PREST_IS_MAJ_FROM_COMPILUO => 29, OperationPrestationsPeer::DATE_DEBUT_PRESTATION => 30, OperationPrestationsPeer::DATE_FIN_PRESTATION => 31, OperationPrestationsPeer::DATE_CREATE => 32, OperationPrestationsPeer::OP_PREST_IS_MANDATORY => 33, OperationPrestationsPeer::USER_MODIFY => 34, OperationPrestationsPeer::DATE_MODIFY => 35, OperationPrestationsPeer::COST_UPDATER_USER => 36, OperationPrestationsPeer::COST_VALIDATION_DATE => 37, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OP_PREST_ID' => 0, 'OP_R_PREST_ID' => 1, 'OP_ID' => 2, 'OP_PREST_RUBRI_ID' => 3, 'OP_PREST_LIBELLE' => 4, 'OP_PREST_LIBELLE_DEVIS' => 5, 'OP_PREST_DESCRIPTION' => 6, 'OP_PREST_COMMENT_INTERNE' => 7, 'OP_PREST_ORDER' => 8, 'OP_PREST_SCENA_ID' => 9, 'OP_PREST_PRIME_ID' => 10, 'OP_PREST_PV' => 11, 'OP_PREST_COEF' => 12, 'OP_PREST_CIESTIM' => 13, 'OP_PREST_CEESTIM' => 14, 'OP_PREST_QESTIM' => 15, 'OP_PREST_MESTIM' => 16, 'OP_PREST_CIREEL' => 17, 'OP_PREST_CEREEL' => 18, 'OP_PREST_QREEL' => 19, 'OP_PREST_MREEL' => 20, 'OP_PREST_COUTS_VALIDES' => 21, 'OP_PREST_OFF' => 22, 'OP_PREST_NPR' => 23, 'OP_PREST_NPA' => 24, 'OP_PREST_CODE_COMPTABLE' => 25, 'OP_ADF' => 26, 'OP_USER_COUTS_ESTIM' => 27, 'OP_USER_COUTS_REEL' => 28, 'OP_PREST_IS_MAJ_FROM_COMPILUO' => 29, 'DATE_DEBUT_PRESTATION' => 30, 'DATE_FIN_PRESTATION' => 31, 'DATE_CREATE' => 32, 'OP_PREST_IS_MANDATORY' => 33, 'USER_MODIFY' => 34, 'DATE_MODIFY' => 35, 'COST_UPDATER_USER' => 36, 'COST_VALIDATION_DATE' => 37, ),
        BasePeer::TYPE_FIELDNAME => array ('op_prest_id' => 0, 'op_r_prest_id' => 1, 'op_id' => 2, 'op_prest_rubri_id' => 3, 'op_prest_libelle' => 4, 'op_prest_libelle_devis' => 5, 'op_prest_description' => 6, 'op_prest_comment_interne' => 7, 'op_prest_order' => 8, 'op_prest_scena_id' => 9, 'op_prest_prime_id' => 10, 'op_prest_pv' => 11, 'op_prest_coef' => 12, 'op_prest_ciestim' => 13, 'op_prest_ceestim' => 14, 'op_prest_qestim' => 15, 'op_prest_mestim' => 16, 'op_prest_cireel' => 17, 'op_prest_cereel' => 18, 'op_prest_qreel' => 19, 'op_prest_mreel' => 20, 'op_prest_couts_valides' => 21, 'op_prest_off' => 22, 'op_prest_npr' => 23, 'op_prest_npa' => 24, 'op_prest_code_comptable' => 25, 'op_adf' => 26, 'op_user_couts_estim' => 27, 'op_user_couts_reel' => 28, 'op_prest_is_maj_from_compiluo' => 29, 'date_debut_prestation' => 30, 'date_fin_prestation' => 31, 'date_create' => 32, 'op_prest_is_mandatory' => 33, 'user_modify' => 34, 'date_modify' => 35, 'cost_updater_user' => 36, 'cost_validation_date' => 37, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, )
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
        $toNames = OperationPrestationsPeer::getFieldNames($toType);
        $key = isset(OperationPrestationsPeer::$fieldKeys[$fromType][$name]) ? OperationPrestationsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OperationPrestationsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OperationPrestationsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OperationPrestationsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OperationPrestationsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OperationPrestationsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_ID);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_R_PREST_ID);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_ID);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_RUBRI_ID);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_LIBELLE);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_LIBELLE_DEVIS);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_DESCRIPTION);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_COMMENT_INTERNE);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_ORDER);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_SCENA_ID);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_PRIME_ID);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_PV);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_COEF);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_CIESTIM);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_CEESTIM);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_QESTIM);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_MESTIM);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_CIREEL);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_CEREEL);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_QREEL);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_MREEL);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_COUTS_VALIDES);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_OFF);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_NPR);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_NPA);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_CODE_COMPTABLE);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_ADF);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_USER_COUTS_ESTIM);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_USER_COUTS_REEL);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_IS_MAJ_FROM_COMPILUO);
            $criteria->addSelectColumn(OperationPrestationsPeer::DATE_DEBUT_PRESTATION);
            $criteria->addSelectColumn(OperationPrestationsPeer::DATE_FIN_PRESTATION);
            $criteria->addSelectColumn(OperationPrestationsPeer::DATE_CREATE);
            $criteria->addSelectColumn(OperationPrestationsPeer::OP_PREST_IS_MANDATORY);
            $criteria->addSelectColumn(OperationPrestationsPeer::USER_MODIFY);
            $criteria->addSelectColumn(OperationPrestationsPeer::DATE_MODIFY);
            $criteria->addSelectColumn(OperationPrestationsPeer::COST_UPDATER_USER);
            $criteria->addSelectColumn(OperationPrestationsPeer::COST_VALIDATION_DATE);
        } else {
            $criteria->addSelectColumn($alias . '.op_prest_id');
            $criteria->addSelectColumn($alias . '.op_r_prest_id');
            $criteria->addSelectColumn($alias . '.op_id');
            $criteria->addSelectColumn($alias . '.op_prest_rubri_id');
            $criteria->addSelectColumn($alias . '.op_prest_libelle');
            $criteria->addSelectColumn($alias . '.op_prest_libelle_devis');
            $criteria->addSelectColumn($alias . '.op_prest_description');
            $criteria->addSelectColumn($alias . '.op_prest_comment_interne');
            $criteria->addSelectColumn($alias . '.op_prest_order');
            $criteria->addSelectColumn($alias . '.op_prest_scena_id');
            $criteria->addSelectColumn($alias . '.op_prest_prime_id');
            $criteria->addSelectColumn($alias . '.op_prest_pv');
            $criteria->addSelectColumn($alias . '.op_prest_coef');
            $criteria->addSelectColumn($alias . '.op_prest_ciestim');
            $criteria->addSelectColumn($alias . '.op_prest_ceestim');
            $criteria->addSelectColumn($alias . '.op_prest_qestim');
            $criteria->addSelectColumn($alias . '.op_prest_mestim');
            $criteria->addSelectColumn($alias . '.op_prest_cireel');
            $criteria->addSelectColumn($alias . '.op_prest_cereel');
            $criteria->addSelectColumn($alias . '.op_prest_qreel');
            $criteria->addSelectColumn($alias . '.op_prest_mreel');
            $criteria->addSelectColumn($alias . '.op_prest_couts_valides');
            $criteria->addSelectColumn($alias . '.op_prest_off');
            $criteria->addSelectColumn($alias . '.op_prest_npr');
            $criteria->addSelectColumn($alias . '.op_prest_npa');
            $criteria->addSelectColumn($alias . '.op_prest_code_comptable');
            $criteria->addSelectColumn($alias . '.op_adf');
            $criteria->addSelectColumn($alias . '.op_user_couts_estim');
            $criteria->addSelectColumn($alias . '.op_user_couts_reel');
            $criteria->addSelectColumn($alias . '.op_prest_is_maj_from_compiluo');
            $criteria->addSelectColumn($alias . '.date_debut_prestation');
            $criteria->addSelectColumn($alias . '.date_fin_prestation');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.op_prest_is_mandatory');
            $criteria->addSelectColumn($alias . '.user_modify');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.cost_updater_user');
            $criteria->addSelectColumn($alias . '.cost_validation_date');
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
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return OperationPrestations
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OperationPrestationsPeer::doSelect($critcopy, $con);
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
        return OperationPrestationsPeer::populateObjects(OperationPrestationsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

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
     * @param OperationPrestations $obj A OperationPrestations object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOpPrestId();
            } // if key === null
            OperationPrestationsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A OperationPrestations object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof OperationPrestations) {
                $key = (string) $value->getOpPrestId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or OperationPrestations object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OperationPrestationsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return OperationPrestations Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OperationPrestationsPeer::$instances[$key])) {
                return OperationPrestationsPeer::$instances[$key];
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
        foreach (OperationPrestationsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OperationPrestationsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to operation_prestations
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
        $cls = OperationPrestationsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OperationPrestationsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OperationPrestationsPeer::addInstanceToPool($obj, $key);
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
     * @return array (OperationPrestations object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OperationPrestationsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OperationPrestationsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OperationPrestationsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related OperationScenarii table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperationScenarii(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationRubriques table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperationRubriques(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Operations table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperations(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RPrestations table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRPrestations(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationPrimes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperationPrimes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related HistoCouts table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinHistoCouts(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Users table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUsers(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);

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
     * Selects a collection of OperationPrestations objects pre-filled with their OperationScenarii objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperationScenarii(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;
        OperationScenariiPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = OperationScenariiPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = OperationScenariiPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OperationScenariiPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    OperationScenariiPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationPrestations) to $obj2 (OperationScenarii)
                $obj2->addOperationPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with their OperationRubriques objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperationRubriques(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;
        OperationRubriquesPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = OperationRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = OperationRubriquesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OperationRubriquesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    OperationRubriquesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationPrestations) to $obj2 (OperationRubriques)
                $obj2->addOperationPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with their Operations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;
        OperationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = OperationsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationPrestations) to $obj2 (Operations)
                $obj2->addOperationPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with their RPrestations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRPrestations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;
        RPrestationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RPrestationsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RPrestationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RPrestationsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationPrestations) to $obj2 (RPrestations)
                $obj2->addOperationPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with their OperationPrimes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperationPrimes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;
        OperationPrimesPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = OperationPrimesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OperationPrimesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    OperationPrimesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationPrestations) to $obj2 (OperationPrimes)
                $obj2->addOperationPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with their HistoCouts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinHistoCouts(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;
        HistoCoutsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = HistoCoutsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = HistoCoutsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    HistoCoutsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationPrestations) to $obj2 (HistoCouts)
                // one to one relationship
                $obj1->setHistoCouts($obj2);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with their Users objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsers(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;
        UsersPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UsersPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UsersPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UsersPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationPrestations) to $obj2 (Users)
                $obj2->addOperationPrestations($obj1);

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
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);

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
     * Selects a collection of OperationPrestations objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationScenariiPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationScenariiPeer::NUM_HYDRATE_COLUMNS;

        OperationRubriquesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + OperationRubriquesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        HistoCoutsPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + HistoCoutsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined OperationScenarii rows

            $key2 = OperationScenariiPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = OperationScenariiPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OperationScenariiPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationScenariiPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj2 (OperationScenarii)
                $obj2->addOperationPrestations($obj1);
            } // if joined row not null

            // Add objects for joined OperationRubriques rows

            $key3 = OperationRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = OperationRubriquesPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = OperationRubriquesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    OperationRubriquesPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj3 (OperationRubriques)
                $obj3->addOperationPrestations($obj1);
            } // if joined row not null

            // Add objects for joined Operations rows

            $key4 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = OperationsPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = OperationsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    OperationsPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj4 (Operations)
                $obj4->addOperationPrestations($obj1);
            } // if joined row not null

            // Add objects for joined RPrestations rows

            $key5 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = RPrestationsPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = RPrestationsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPrestationsPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj5 (RPrestations)
                $obj5->addOperationPrestations($obj1);
            } // if joined row not null

            // Add objects for joined OperationPrimes rows

            $key6 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = OperationPrimesPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = OperationPrimesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    OperationPrimesPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj6 (OperationPrimes)
                $obj6->addOperationPrestations($obj1);
            } // if joined row not null

            // Add objects for joined HistoCouts rows

            $key7 = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = HistoCoutsPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = HistoCoutsPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    HistoCoutsPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj7 (HistoCouts)
                $obj1->setHistoCouts($obj7);
            } // if joined row not null

            // Add objects for joined Users rows

            $key8 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol8);
            if ($key8 !== null) {
                $obj8 = UsersPeer::getInstanceFromPool($key8);
                if (!$obj8) {

                    $cls = UsersPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    UsersPeer::addInstanceToPool($obj8, $key8);
                } // if obj8 loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj8 (Users)
                $obj8->addOperationPrestations($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related OperationScenarii table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationScenarii(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationRubriques table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationRubriques(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Operations table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperations(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RPrestations table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRPrestations(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationPrimes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationPrimes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related HistoCouts table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptHistoCouts(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Users table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUsers(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

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
     * Selects a collection of OperationPrestations objects pre-filled with all related objects except OperationScenarii.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationScenarii(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationRubriquesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationRubriquesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        HistoCoutsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + HistoCoutsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined OperationRubriques rows

                $key2 = OperationRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationRubriquesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationRubriquesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationRubriquesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj2 (OperationRubriques)
                $obj2->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined Operations rows

                $key3 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = OperationsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = OperationsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    OperationsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj3 (Operations)
                $obj3->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPrestations rows

                $key4 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RPrestationsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RPrestationsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RPrestationsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj4 (RPrestations)
                $obj4->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationPrimes rows

                $key5 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = OperationPrimesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = OperationPrimesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    OperationPrimesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj5 (OperationPrimes)
                $obj5->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined HistoCouts rows

                $key6 = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = HistoCoutsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = HistoCoutsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    HistoCoutsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj6 (HistoCouts)
                $obj1->setHistoCouts($obj6);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key7 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = UsersPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = UsersPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsersPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj7 (Users)
                $obj7->addOperationPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with all related objects except OperationRubriques.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationRubriques(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationScenariiPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationScenariiPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        HistoCoutsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + HistoCoutsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined OperationScenarii rows

                $key2 = OperationScenariiPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationScenariiPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationScenariiPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationScenariiPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj2 (OperationScenarii)
                $obj2->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined Operations rows

                $key3 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = OperationsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = OperationsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    OperationsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj3 (Operations)
                $obj3->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPrestations rows

                $key4 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RPrestationsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RPrestationsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RPrestationsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj4 (RPrestations)
                $obj4->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationPrimes rows

                $key5 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = OperationPrimesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = OperationPrimesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    OperationPrimesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj5 (OperationPrimes)
                $obj5->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined HistoCouts rows

                $key6 = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = HistoCoutsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = HistoCoutsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    HistoCoutsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj6 (HistoCouts)
                $obj1->setHistoCouts($obj6);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key7 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = UsersPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = UsersPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsersPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj7 (Users)
                $obj7->addOperationPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with all related objects except Operations.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationScenariiPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationScenariiPeer::NUM_HYDRATE_COLUMNS;

        OperationRubriquesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + OperationRubriquesPeer::NUM_HYDRATE_COLUMNS;

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        HistoCoutsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + HistoCoutsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined OperationScenarii rows

                $key2 = OperationScenariiPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationScenariiPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationScenariiPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationScenariiPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj2 (OperationScenarii)
                $obj2->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationRubriques rows

                $key3 = OperationRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = OperationRubriquesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = OperationRubriquesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    OperationRubriquesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj3 (OperationRubriques)
                $obj3->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPrestations rows

                $key4 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RPrestationsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RPrestationsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RPrestationsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj4 (RPrestations)
                $obj4->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationPrimes rows

                $key5 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = OperationPrimesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = OperationPrimesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    OperationPrimesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj5 (OperationPrimes)
                $obj5->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined HistoCouts rows

                $key6 = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = HistoCoutsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = HistoCoutsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    HistoCoutsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj6 (HistoCouts)
                $obj1->setHistoCouts($obj6);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key7 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = UsersPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = UsersPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsersPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj7 (Users)
                $obj7->addOperationPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with all related objects except RPrestations.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRPrestations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationScenariiPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationScenariiPeer::NUM_HYDRATE_COLUMNS;

        OperationRubriquesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + OperationRubriquesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        HistoCoutsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + HistoCoutsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined OperationScenarii rows

                $key2 = OperationScenariiPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationScenariiPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationScenariiPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationScenariiPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj2 (OperationScenarii)
                $obj2->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationRubriques rows

                $key3 = OperationRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = OperationRubriquesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = OperationRubriquesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    OperationRubriquesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj3 (OperationRubriques)
                $obj3->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined Operations rows

                $key4 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = OperationsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = OperationsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    OperationsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj4 (Operations)
                $obj4->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationPrimes rows

                $key5 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = OperationPrimesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = OperationPrimesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    OperationPrimesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj5 (OperationPrimes)
                $obj5->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined HistoCouts rows

                $key6 = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = HistoCoutsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = HistoCoutsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    HistoCoutsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj6 (HistoCouts)
                $obj1->setHistoCouts($obj6);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key7 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = UsersPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = UsersPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsersPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj7 (Users)
                $obj7->addOperationPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with all related objects except OperationPrimes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationPrimes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationScenariiPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationScenariiPeer::NUM_HYDRATE_COLUMNS;

        OperationRubriquesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + OperationRubriquesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        HistoCoutsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + HistoCoutsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined OperationScenarii rows

                $key2 = OperationScenariiPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationScenariiPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationScenariiPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationScenariiPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj2 (OperationScenarii)
                $obj2->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationRubriques rows

                $key3 = OperationRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = OperationRubriquesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = OperationRubriquesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    OperationRubriquesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj3 (OperationRubriques)
                $obj3->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined Operations rows

                $key4 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = OperationsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = OperationsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    OperationsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj4 (Operations)
                $obj4->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPrestations rows

                $key5 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RPrestationsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RPrestationsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPrestationsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj5 (RPrestations)
                $obj5->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined HistoCouts rows

                $key6 = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = HistoCoutsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = HistoCoutsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    HistoCoutsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj6 (HistoCouts)
                $obj1->setHistoCouts($obj6);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key7 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = UsersPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = UsersPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsersPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj7 (Users)
                $obj7->addOperationPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with all related objects except HistoCouts.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptHistoCouts(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationScenariiPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationScenariiPeer::NUM_HYDRATE_COLUMNS;

        OperationRubriquesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + OperationRubriquesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::COST_UPDATER_USER, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined OperationScenarii rows

                $key2 = OperationScenariiPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationScenariiPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationScenariiPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationScenariiPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj2 (OperationScenarii)
                $obj2->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationRubriques rows

                $key3 = OperationRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = OperationRubriquesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = OperationRubriquesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    OperationRubriquesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj3 (OperationRubriques)
                $obj3->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined Operations rows

                $key4 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = OperationsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = OperationsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    OperationsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj4 (Operations)
                $obj4->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPrestations rows

                $key5 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RPrestationsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RPrestationsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPrestationsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj5 (RPrestations)
                $obj5->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationPrimes rows

                $key6 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = OperationPrimesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = OperationPrimesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    OperationPrimesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj6 (OperationPrimes)
                $obj6->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key7 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = UsersPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = UsersPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsersPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj7 (Users)
                $obj7->addOperationPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrestations objects pre-filled with all related objects except Users.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUsers(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);
        }

        OperationPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationScenariiPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationScenariiPeer::NUM_HYDRATE_COLUMNS;

        OperationRubriquesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + OperationRubriquesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        HistoCoutsPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + HistoCoutsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_SCENA_ID, OperationScenariiPeer::OP_SCENARIO_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_RUBRI_ID, OperationRubriquesPeer::OP_RUBRIQUE_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_R_PREST_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_PRIME_ID, OperationPrimesPeer::OP_PRIME_ID, $join_behavior);

        $criteria->addJoin(OperationPrestationsPeer::OP_PREST_ID, HistoCoutsPeer::OP_PREST_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined OperationScenarii rows

                $key2 = OperationScenariiPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationScenariiPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationScenariiPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationScenariiPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj2 (OperationScenarii)
                $obj2->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationRubriques rows

                $key3 = OperationRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = OperationRubriquesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = OperationRubriquesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    OperationRubriquesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj3 (OperationRubriques)
                $obj3->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined Operations rows

                $key4 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = OperationsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = OperationsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    OperationsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj4 (Operations)
                $obj4->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined RPrestations rows

                $key5 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RPrestationsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RPrestationsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RPrestationsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj5 (RPrestations)
                $obj5->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationPrimes rows

                $key6 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = OperationPrimesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = OperationPrimesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    OperationPrimesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj6 (OperationPrimes)
                $obj6->addOperationPrestations($obj1);

            } // if joined row is not null

                // Add objects for joined HistoCouts rows

                $key7 = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = HistoCoutsPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = HistoCoutsPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    HistoCoutsPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (OperationPrestations) to the collection in $obj7 (HistoCouts)
                $obj1->setHistoCouts($obj7);

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
        return Propel::getDatabaseMap(OperationPrestationsPeer::DATABASE_NAME)->getTable(OperationPrestationsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOperationPrestationsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOperationPrestationsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OperationPrestationsTableMap());
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
        return OperationPrestationsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a OperationPrestations or Criteria object.
     *
     * @param      mixed $values Criteria or OperationPrestations object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from OperationPrestations object
        }

        if ($criteria->containsKey(OperationPrestationsPeer::OP_PREST_ID) && $criteria->keyContainsValue(OperationPrestationsPeer::OP_PREST_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OperationPrestationsPeer::OP_PREST_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a OperationPrestations or Criteria object.
     *
     * @param      mixed $values Criteria or OperationPrestations object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OperationPrestationsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OperationPrestationsPeer::OP_PREST_ID);
            $value = $criteria->remove(OperationPrestationsPeer::OP_PREST_ID);
            if ($value) {
                $selectCriteria->add(OperationPrestationsPeer::OP_PREST_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OperationPrestationsPeer::TABLE_NAME);
            }

        } else { // $values is OperationPrestations object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the operation_prestations table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OperationPrestationsPeer::TABLE_NAME, $con, OperationPrestationsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OperationPrestationsPeer::clearInstancePool();
            OperationPrestationsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a OperationPrestations or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or OperationPrestations object or primary key or array of primary keys
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
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OperationPrestationsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof OperationPrestations) { // it's a model object
            // invalidate the cache for this single object
            OperationPrestationsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OperationPrestationsPeer::DATABASE_NAME);
            $criteria->add(OperationPrestationsPeer::OP_PREST_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OperationPrestationsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OperationPrestationsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OperationPrestationsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given OperationPrestations object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param OperationPrestations $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OperationPrestationsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OperationPrestationsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_R_PREST_ID))
            $columns[OperationPrestationsPeer::OP_R_PREST_ID] = $obj->getOpRPrestId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_ID))
            $columns[OperationPrestationsPeer::OP_ID] = $obj->getOpId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_RUBRI_ID))
            $columns[OperationPrestationsPeer::OP_PREST_RUBRI_ID] = $obj->getOpPrestRubriId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_LIBELLE))
            $columns[OperationPrestationsPeer::OP_PREST_LIBELLE] = $obj->getOpPrestLibelle();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_DESCRIPTION))
            $columns[OperationPrestationsPeer::OP_PREST_DESCRIPTION] = $obj->getOpPrestDescription();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_ORDER))
            $columns[OperationPrestationsPeer::OP_PREST_ORDER] = $obj->getOpPrestOrder();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_SCENA_ID))
            $columns[OperationPrestationsPeer::OP_PREST_SCENA_ID] = $obj->getOpPrestScenaId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_PRIME_ID))
            $columns[OperationPrestationsPeer::OP_PREST_PRIME_ID] = $obj->getOpPrestPrimeId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_PV))
            $columns[OperationPrestationsPeer::OP_PREST_PV] = $obj->getOpPrestPv();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_COEF))
            $columns[OperationPrestationsPeer::OP_PREST_COEF] = $obj->getOpPrestCoef();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_CIESTIM))
            $columns[OperationPrestationsPeer::OP_PREST_CIESTIM] = $obj->getOpPrestCiestim();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_CEESTIM))
            $columns[OperationPrestationsPeer::OP_PREST_CEESTIM] = $obj->getOpPrestCeestim();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_CIREEL))
            $columns[OperationPrestationsPeer::OP_PREST_CIREEL] = $obj->getOpPrestCireel();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_CEREEL))
            $columns[OperationPrestationsPeer::OP_PREST_CEREEL] = $obj->getOpPrestCereel();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_QESTIM))
            $columns[OperationPrestationsPeer::OP_PREST_QESTIM] = $obj->getOpPrestQestim();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_MESTIM))
            $columns[OperationPrestationsPeer::OP_PREST_MESTIM] = $obj->getOpPrestMestim();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_QREEL))
            $columns[OperationPrestationsPeer::OP_PREST_QREEL] = $obj->getOpPrestQreel();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_MREEL))
            $columns[OperationPrestationsPeer::OP_PREST_MREEL] = $obj->getOpPrestMreel();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_OFF))
            $columns[OperationPrestationsPeer::OP_PREST_OFF] = $obj->getOpPrestOff();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_NPR))
            $columns[OperationPrestationsPeer::OP_PREST_NPR] = $obj->getOpPrestNpr();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_NPA))
            $columns[OperationPrestationsPeer::OP_PREST_NPA] = $obj->getOpPrestNpa();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_CODE_COMPTABLE))
            $columns[OperationPrestationsPeer::OP_PREST_CODE_COMPTABLE] = $obj->getOpPrestCodeComptable();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_ADF))
            $columns[OperationPrestationsPeer::OP_ADF] = $obj->getOpAdf();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_USER_COUTS_ESTIM))
            $columns[OperationPrestationsPeer::OP_USER_COUTS_ESTIM] = $obj->getOpUserCoutsEstim();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_USER_COUTS_REEL))
            $columns[OperationPrestationsPeer::OP_USER_COUTS_REEL] = $obj->getOpUserCoutsReel();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::OP_PREST_IS_MAJ_FROM_COMPILUO))
            $columns[OperationPrestationsPeer::OP_PREST_IS_MAJ_FROM_COMPILUO] = $obj->getOpPrestIsMajFromCompiluo();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::DATE_DEBUT_PRESTATION))
            $columns[OperationPrestationsPeer::DATE_DEBUT_PRESTATION] = $obj->getDateDebutPrestation();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::DATE_FIN_PRESTATION))
            $columns[OperationPrestationsPeer::DATE_FIN_PRESTATION] = $obj->getDateFinPrestation();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::DATE_CREATE))
            $columns[OperationPrestationsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::USER_MODIFY))
            $columns[OperationPrestationsPeer::USER_MODIFY] = $obj->getUserModify();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::DATE_MODIFY))
            $columns[OperationPrestationsPeer::DATE_MODIFY] = $obj->getDateModify();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::COST_UPDATER_USER))
            $columns[OperationPrestationsPeer::COST_UPDATER_USER] = $obj->getCostUpdaterUser();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrestationsPeer::COST_VALIDATION_DATE))
            $columns[OperationPrestationsPeer::COST_VALIDATION_DATE] = $obj->getCostValidationDate();

        }

        return BasePeer::doValidate(OperationPrestationsPeer::DATABASE_NAME, OperationPrestationsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return OperationPrestations
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OperationPrestationsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OperationPrestationsPeer::DATABASE_NAME);
        $criteria->add(OperationPrestationsPeer::OP_PREST_ID, $pk);

        $v = OperationPrestationsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return OperationPrestations[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OperationPrestationsPeer::DATABASE_NAME);
            $criteria->add(OperationPrestationsPeer::OP_PREST_ID, $pks, Criteria::IN);
            $objs = OperationPrestationsPeer::doSelect($criteria, $con);
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
} // BaseOperationPrestationsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOperationPrestationsPeer::buildTableMap();

