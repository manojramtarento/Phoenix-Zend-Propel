<?php


/**
 * Base static class for performing query and update operations on the 'factures' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseFacturesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'factures';

    /** the related Propel class for this table */
    const OM_CLASS = 'Factures';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FacturesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 37;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 37;

    /** the column name for the fact_id field */
    const FACT_ID = 'factures.fact_id';

    /** the column name for the r_fact_type_id field */
    const R_FACT_TYPE_ID = 'factures.r_fact_type_id';

    /** the column name for the op_id field */
    const OP_ID = 'factures.op_id';

    /** the column name for the cl_id field */
    const CL_ID = 'factures.cl_id';

    /** the column name for the ct_id field */
    const CT_ID = 'factures.ct_id';

    /** the column name for the dc_id field */
    const DC_ID = 'factures.dc_id';

    /** the column name for the fact_numero field */
    const FACT_NUMERO = 'factures.fact_numero';

    /** the column name for the fact_reference field */
    const FACT_REFERENCE = 'factures.fact_reference';

    /** the column name for the fact_lang field */
    const FACT_LANG = 'factures.fact_lang';

    /** the column name for the fact_num_cmd field */
    const FACT_NUM_CMD = 'factures.fact_num_cmd';

    /** the column name for the fact_montant_ht field */
    const FACT_MONTANT_HT = 'factures.fact_montant_ht';

    /** the column name for the fact_montant_ttc field */
    const FACT_MONTANT_TTC = 'factures.fact_montant_ttc';

    /** the column name for the fact_montant_encaisse field */
    const FACT_MONTANT_ENCAISSE = 'factures.fact_montant_encaisse';

    /** the column name for the fact_destinataire field */
    const FACT_DESTINATAIRE = 'factures.fact_destinataire';

    /** the column name for the fact_attention field */
    const FACT_ATTENTION = 'factures.fact_attention';

    /** the column name for the fact_adresse1 field */
    const FACT_ADRESSE1 = 'factures.fact_adresse1';

    /** the column name for the fact_adresse2 field */
    const FACT_ADRESSE2 = 'factures.fact_adresse2';

    /** the column name for the fact_adresse3 field */
    const FACT_ADRESSE3 = 'factures.fact_adresse3';

    /** the column name for the fact_code_postal field */
    const FACT_CODE_POSTAL = 'factures.fact_code_postal';

    /** the column name for the fact_ville field */
    const FACT_VILLE = 'factures.fact_ville';

    /** the column name for the fact_pays field */
    const FACT_PAYS = 'factures.fact_pays';

    /** the column name for the fact_mention_spec field */
    const FACT_MENTION_SPEC = 'factures.fact_mention_spec';

    /** the column name for the fact_user_edition field */
    const FACT_USER_EDITION = 'factures.fact_user_edition';

    /** the column name for the fact_status_id field */
    const FACT_STATUS_ID = 'factures.fact_status_id';

    /** the column name for the fact_verrou field */
    const FACT_VERROU = 'factures.fact_verrou';

    /** the column name for the fact_has_relance field */
    const FACT_HAS_RELANCE = 'factures.fact_has_relance';

    /** the column name for the fact_annul_id field */
    const FACT_ANNUL_ID = 'factures.fact_annul_id';

    /** the column name for the fact_date_echeance field */
    const FACT_DATE_ECHEANCE = 'factures.fact_date_echeance';

    /** the column name for the fact_taux_adf field */
    const FACT_TAUX_ADF = 'factures.fact_taux_adf';

    /** the column name for the date_create field */
    const DATE_CREATE = 'factures.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'factures.date_modify';

    /** the column name for the user_id field */
    const USER_ID = 'factures.user_id';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'factures.user_modify';

    /** the column name for the fact_echeance_id field */
    const FACT_ECHEANCE_ID = 'factures.fact_echeance_id';

    /** the column name for the jdv_id field */
    const JDV_ID = 'factures.jdv_id';

    /** the column name for the fact_date field */
    const FACT_DATE = 'factures.fact_date';

    /** the column name for the fact_email field */
    const FACT_EMAIL = 'factures.fact_email';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Factures objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Factures[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FacturesPeer::$fieldNames[FacturesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('FactId', 'RFactTypeId', 'OpId', 'ClId', 'CtId', 'DcId', 'FactNumero', 'FactReference', 'FactLang', 'FactNumCmd', 'FactMontantHt', 'FactMontantTtc', 'FactMontantEncaisse', 'FactDestinataire', 'FactAttention', 'FactAdresse1', 'FactAdresse2', 'FactAdresse3', 'FactCodePostal', 'FactVille', 'FactPays', 'FactMentionSpec', 'FactUserEdition', 'FactStatusId', 'FactVerrou', 'FactHasRelance', 'FactAnnulId', 'FactDateEcheance', 'FactTauxAdf', 'DateCreate', 'DateModify', 'UserId', 'UserModify', 'FactEcheanceId', 'JdvId', 'FactDate', 'FactEmail', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('factId', 'rFactTypeId', 'opId', 'clId', 'ctId', 'dcId', 'factNumero', 'factReference', 'factLang', 'factNumCmd', 'factMontantHt', 'factMontantTtc', 'factMontantEncaisse', 'factDestinataire', 'factAttention', 'factAdresse1', 'factAdresse2', 'factAdresse3', 'factCodePostal', 'factVille', 'factPays', 'factMentionSpec', 'factUserEdition', 'factStatusId', 'factVerrou', 'factHasRelance', 'factAnnulId', 'factDateEcheance', 'factTauxAdf', 'dateCreate', 'dateModify', 'userId', 'userModify', 'factEcheanceId', 'jdvId', 'factDate', 'factEmail', ),
        BasePeer::TYPE_COLNAME => array (FacturesPeer::FACT_ID, FacturesPeer::R_FACT_TYPE_ID, FacturesPeer::OP_ID, FacturesPeer::CL_ID, FacturesPeer::CT_ID, FacturesPeer::DC_ID, FacturesPeer::FACT_NUMERO, FacturesPeer::FACT_REFERENCE, FacturesPeer::FACT_LANG, FacturesPeer::FACT_NUM_CMD, FacturesPeer::FACT_MONTANT_HT, FacturesPeer::FACT_MONTANT_TTC, FacturesPeer::FACT_MONTANT_ENCAISSE, FacturesPeer::FACT_DESTINATAIRE, FacturesPeer::FACT_ATTENTION, FacturesPeer::FACT_ADRESSE1, FacturesPeer::FACT_ADRESSE2, FacturesPeer::FACT_ADRESSE3, FacturesPeer::FACT_CODE_POSTAL, FacturesPeer::FACT_VILLE, FacturesPeer::FACT_PAYS, FacturesPeer::FACT_MENTION_SPEC, FacturesPeer::FACT_USER_EDITION, FacturesPeer::FACT_STATUS_ID, FacturesPeer::FACT_VERROU, FacturesPeer::FACT_HAS_RELANCE, FacturesPeer::FACT_ANNUL_ID, FacturesPeer::FACT_DATE_ECHEANCE, FacturesPeer::FACT_TAUX_ADF, FacturesPeer::DATE_CREATE, FacturesPeer::DATE_MODIFY, FacturesPeer::USER_ID, FacturesPeer::USER_MODIFY, FacturesPeer::FACT_ECHEANCE_ID, FacturesPeer::JDV_ID, FacturesPeer::FACT_DATE, FacturesPeer::FACT_EMAIL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FACT_ID', 'R_FACT_TYPE_ID', 'OP_ID', 'CL_ID', 'CT_ID', 'DC_ID', 'FACT_NUMERO', 'FACT_REFERENCE', 'FACT_LANG', 'FACT_NUM_CMD', 'FACT_MONTANT_HT', 'FACT_MONTANT_TTC', 'FACT_MONTANT_ENCAISSE', 'FACT_DESTINATAIRE', 'FACT_ATTENTION', 'FACT_ADRESSE1', 'FACT_ADRESSE2', 'FACT_ADRESSE3', 'FACT_CODE_POSTAL', 'FACT_VILLE', 'FACT_PAYS', 'FACT_MENTION_SPEC', 'FACT_USER_EDITION', 'FACT_STATUS_ID', 'FACT_VERROU', 'FACT_HAS_RELANCE', 'FACT_ANNUL_ID', 'FACT_DATE_ECHEANCE', 'FACT_TAUX_ADF', 'DATE_CREATE', 'DATE_MODIFY', 'USER_ID', 'USER_MODIFY', 'FACT_ECHEANCE_ID', 'JDV_ID', 'FACT_DATE', 'FACT_EMAIL', ),
        BasePeer::TYPE_FIELDNAME => array ('fact_id', 'r_fact_type_id', 'op_id', 'cl_id', 'ct_id', 'dc_id', 'fact_numero', 'fact_reference', 'fact_lang', 'fact_num_cmd', 'fact_montant_ht', 'fact_montant_ttc', 'fact_montant_encaisse', 'fact_destinataire', 'fact_attention', 'fact_adresse1', 'fact_adresse2', 'fact_adresse3', 'fact_code_postal', 'fact_ville', 'fact_pays', 'fact_mention_spec', 'fact_user_edition', 'fact_status_id', 'fact_verrou', 'fact_has_relance', 'fact_annul_id', 'fact_date_echeance', 'fact_taux_adf', 'date_create', 'date_modify', 'user_id', 'user_modify', 'fact_echeance_id', 'jdv_id', 'fact_date', 'fact_email', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FacturesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('FactId' => 0, 'RFactTypeId' => 1, 'OpId' => 2, 'ClId' => 3, 'CtId' => 4, 'DcId' => 5, 'FactNumero' => 6, 'FactReference' => 7, 'FactLang' => 8, 'FactNumCmd' => 9, 'FactMontantHt' => 10, 'FactMontantTtc' => 11, 'FactMontantEncaisse' => 12, 'FactDestinataire' => 13, 'FactAttention' => 14, 'FactAdresse1' => 15, 'FactAdresse2' => 16, 'FactAdresse3' => 17, 'FactCodePostal' => 18, 'FactVille' => 19, 'FactPays' => 20, 'FactMentionSpec' => 21, 'FactUserEdition' => 22, 'FactStatusId' => 23, 'FactVerrou' => 24, 'FactHasRelance' => 25, 'FactAnnulId' => 26, 'FactDateEcheance' => 27, 'FactTauxAdf' => 28, 'DateCreate' => 29, 'DateModify' => 30, 'UserId' => 31, 'UserModify' => 32, 'FactEcheanceId' => 33, 'JdvId' => 34, 'FactDate' => 35, 'FactEmail' => 36, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('factId' => 0, 'rFactTypeId' => 1, 'opId' => 2, 'clId' => 3, 'ctId' => 4, 'dcId' => 5, 'factNumero' => 6, 'factReference' => 7, 'factLang' => 8, 'factNumCmd' => 9, 'factMontantHt' => 10, 'factMontantTtc' => 11, 'factMontantEncaisse' => 12, 'factDestinataire' => 13, 'factAttention' => 14, 'factAdresse1' => 15, 'factAdresse2' => 16, 'factAdresse3' => 17, 'factCodePostal' => 18, 'factVille' => 19, 'factPays' => 20, 'factMentionSpec' => 21, 'factUserEdition' => 22, 'factStatusId' => 23, 'factVerrou' => 24, 'factHasRelance' => 25, 'factAnnulId' => 26, 'factDateEcheance' => 27, 'factTauxAdf' => 28, 'dateCreate' => 29, 'dateModify' => 30, 'userId' => 31, 'userModify' => 32, 'factEcheanceId' => 33, 'jdvId' => 34, 'factDate' => 35, 'factEmail' => 36, ),
        BasePeer::TYPE_COLNAME => array (FacturesPeer::FACT_ID => 0, FacturesPeer::R_FACT_TYPE_ID => 1, FacturesPeer::OP_ID => 2, FacturesPeer::CL_ID => 3, FacturesPeer::CT_ID => 4, FacturesPeer::DC_ID => 5, FacturesPeer::FACT_NUMERO => 6, FacturesPeer::FACT_REFERENCE => 7, FacturesPeer::FACT_LANG => 8, FacturesPeer::FACT_NUM_CMD => 9, FacturesPeer::FACT_MONTANT_HT => 10, FacturesPeer::FACT_MONTANT_TTC => 11, FacturesPeer::FACT_MONTANT_ENCAISSE => 12, FacturesPeer::FACT_DESTINATAIRE => 13, FacturesPeer::FACT_ATTENTION => 14, FacturesPeer::FACT_ADRESSE1 => 15, FacturesPeer::FACT_ADRESSE2 => 16, FacturesPeer::FACT_ADRESSE3 => 17, FacturesPeer::FACT_CODE_POSTAL => 18, FacturesPeer::FACT_VILLE => 19, FacturesPeer::FACT_PAYS => 20, FacturesPeer::FACT_MENTION_SPEC => 21, FacturesPeer::FACT_USER_EDITION => 22, FacturesPeer::FACT_STATUS_ID => 23, FacturesPeer::FACT_VERROU => 24, FacturesPeer::FACT_HAS_RELANCE => 25, FacturesPeer::FACT_ANNUL_ID => 26, FacturesPeer::FACT_DATE_ECHEANCE => 27, FacturesPeer::FACT_TAUX_ADF => 28, FacturesPeer::DATE_CREATE => 29, FacturesPeer::DATE_MODIFY => 30, FacturesPeer::USER_ID => 31, FacturesPeer::USER_MODIFY => 32, FacturesPeer::FACT_ECHEANCE_ID => 33, FacturesPeer::JDV_ID => 34, FacturesPeer::FACT_DATE => 35, FacturesPeer::FACT_EMAIL => 36, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FACT_ID' => 0, 'R_FACT_TYPE_ID' => 1, 'OP_ID' => 2, 'CL_ID' => 3, 'CT_ID' => 4, 'DC_ID' => 5, 'FACT_NUMERO' => 6, 'FACT_REFERENCE' => 7, 'FACT_LANG' => 8, 'FACT_NUM_CMD' => 9, 'FACT_MONTANT_HT' => 10, 'FACT_MONTANT_TTC' => 11, 'FACT_MONTANT_ENCAISSE' => 12, 'FACT_DESTINATAIRE' => 13, 'FACT_ATTENTION' => 14, 'FACT_ADRESSE1' => 15, 'FACT_ADRESSE2' => 16, 'FACT_ADRESSE3' => 17, 'FACT_CODE_POSTAL' => 18, 'FACT_VILLE' => 19, 'FACT_PAYS' => 20, 'FACT_MENTION_SPEC' => 21, 'FACT_USER_EDITION' => 22, 'FACT_STATUS_ID' => 23, 'FACT_VERROU' => 24, 'FACT_HAS_RELANCE' => 25, 'FACT_ANNUL_ID' => 26, 'FACT_DATE_ECHEANCE' => 27, 'FACT_TAUX_ADF' => 28, 'DATE_CREATE' => 29, 'DATE_MODIFY' => 30, 'USER_ID' => 31, 'USER_MODIFY' => 32, 'FACT_ECHEANCE_ID' => 33, 'JDV_ID' => 34, 'FACT_DATE' => 35, 'FACT_EMAIL' => 36, ),
        BasePeer::TYPE_FIELDNAME => array ('fact_id' => 0, 'r_fact_type_id' => 1, 'op_id' => 2, 'cl_id' => 3, 'ct_id' => 4, 'dc_id' => 5, 'fact_numero' => 6, 'fact_reference' => 7, 'fact_lang' => 8, 'fact_num_cmd' => 9, 'fact_montant_ht' => 10, 'fact_montant_ttc' => 11, 'fact_montant_encaisse' => 12, 'fact_destinataire' => 13, 'fact_attention' => 14, 'fact_adresse1' => 15, 'fact_adresse2' => 16, 'fact_adresse3' => 17, 'fact_code_postal' => 18, 'fact_ville' => 19, 'fact_pays' => 20, 'fact_mention_spec' => 21, 'fact_user_edition' => 22, 'fact_status_id' => 23, 'fact_verrou' => 24, 'fact_has_relance' => 25, 'fact_annul_id' => 26, 'fact_date_echeance' => 27, 'fact_taux_adf' => 28, 'date_create' => 29, 'date_modify' => 30, 'user_id' => 31, 'user_modify' => 32, 'fact_echeance_id' => 33, 'jdv_id' => 34, 'fact_date' => 35, 'fact_email' => 36, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, )
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
        $toNames = FacturesPeer::getFieldNames($toType);
        $key = isset(FacturesPeer::$fieldKeys[$fromType][$name]) ? FacturesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FacturesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FacturesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FacturesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FacturesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FacturesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FacturesPeer::FACT_ID);
            $criteria->addSelectColumn(FacturesPeer::R_FACT_TYPE_ID);
            $criteria->addSelectColumn(FacturesPeer::OP_ID);
            $criteria->addSelectColumn(FacturesPeer::CL_ID);
            $criteria->addSelectColumn(FacturesPeer::CT_ID);
            $criteria->addSelectColumn(FacturesPeer::DC_ID);
            $criteria->addSelectColumn(FacturesPeer::FACT_NUMERO);
            $criteria->addSelectColumn(FacturesPeer::FACT_REFERENCE);
            $criteria->addSelectColumn(FacturesPeer::FACT_LANG);
            $criteria->addSelectColumn(FacturesPeer::FACT_NUM_CMD);
            $criteria->addSelectColumn(FacturesPeer::FACT_MONTANT_HT);
            $criteria->addSelectColumn(FacturesPeer::FACT_MONTANT_TTC);
            $criteria->addSelectColumn(FacturesPeer::FACT_MONTANT_ENCAISSE);
            $criteria->addSelectColumn(FacturesPeer::FACT_DESTINATAIRE);
            $criteria->addSelectColumn(FacturesPeer::FACT_ATTENTION);
            $criteria->addSelectColumn(FacturesPeer::FACT_ADRESSE1);
            $criteria->addSelectColumn(FacturesPeer::FACT_ADRESSE2);
            $criteria->addSelectColumn(FacturesPeer::FACT_ADRESSE3);
            $criteria->addSelectColumn(FacturesPeer::FACT_CODE_POSTAL);
            $criteria->addSelectColumn(FacturesPeer::FACT_VILLE);
            $criteria->addSelectColumn(FacturesPeer::FACT_PAYS);
            $criteria->addSelectColumn(FacturesPeer::FACT_MENTION_SPEC);
            $criteria->addSelectColumn(FacturesPeer::FACT_USER_EDITION);
            $criteria->addSelectColumn(FacturesPeer::FACT_STATUS_ID);
            $criteria->addSelectColumn(FacturesPeer::FACT_VERROU);
            $criteria->addSelectColumn(FacturesPeer::FACT_HAS_RELANCE);
            $criteria->addSelectColumn(FacturesPeer::FACT_ANNUL_ID);
            $criteria->addSelectColumn(FacturesPeer::FACT_DATE_ECHEANCE);
            $criteria->addSelectColumn(FacturesPeer::FACT_TAUX_ADF);
            $criteria->addSelectColumn(FacturesPeer::DATE_CREATE);
            $criteria->addSelectColumn(FacturesPeer::DATE_MODIFY);
            $criteria->addSelectColumn(FacturesPeer::USER_ID);
            $criteria->addSelectColumn(FacturesPeer::USER_MODIFY);
            $criteria->addSelectColumn(FacturesPeer::FACT_ECHEANCE_ID);
            $criteria->addSelectColumn(FacturesPeer::JDV_ID);
            $criteria->addSelectColumn(FacturesPeer::FACT_DATE);
            $criteria->addSelectColumn(FacturesPeer::FACT_EMAIL);
        } else {
            $criteria->addSelectColumn($alias . '.fact_id');
            $criteria->addSelectColumn($alias . '.r_fact_type_id');
            $criteria->addSelectColumn($alias . '.op_id');
            $criteria->addSelectColumn($alias . '.cl_id');
            $criteria->addSelectColumn($alias . '.ct_id');
            $criteria->addSelectColumn($alias . '.dc_id');
            $criteria->addSelectColumn($alias . '.fact_numero');
            $criteria->addSelectColumn($alias . '.fact_reference');
            $criteria->addSelectColumn($alias . '.fact_lang');
            $criteria->addSelectColumn($alias . '.fact_num_cmd');
            $criteria->addSelectColumn($alias . '.fact_montant_ht');
            $criteria->addSelectColumn($alias . '.fact_montant_ttc');
            $criteria->addSelectColumn($alias . '.fact_montant_encaisse');
            $criteria->addSelectColumn($alias . '.fact_destinataire');
            $criteria->addSelectColumn($alias . '.fact_attention');
            $criteria->addSelectColumn($alias . '.fact_adresse1');
            $criteria->addSelectColumn($alias . '.fact_adresse2');
            $criteria->addSelectColumn($alias . '.fact_adresse3');
            $criteria->addSelectColumn($alias . '.fact_code_postal');
            $criteria->addSelectColumn($alias . '.fact_ville');
            $criteria->addSelectColumn($alias . '.fact_pays');
            $criteria->addSelectColumn($alias . '.fact_mention_spec');
            $criteria->addSelectColumn($alias . '.fact_user_edition');
            $criteria->addSelectColumn($alias . '.fact_status_id');
            $criteria->addSelectColumn($alias . '.fact_verrou');
            $criteria->addSelectColumn($alias . '.fact_has_relance');
            $criteria->addSelectColumn($alias . '.fact_annul_id');
            $criteria->addSelectColumn($alias . '.fact_date_echeance');
            $criteria->addSelectColumn($alias . '.fact_taux_adf');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.user_modify');
            $criteria->addSelectColumn($alias . '.fact_echeance_id');
            $criteria->addSelectColumn($alias . '.jdv_id');
            $criteria->addSelectColumn($alias . '.fact_date');
            $criteria->addSelectColumn($alias . '.fact_email');
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
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FacturesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Factures
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FacturesPeer::doSelect($critcopy, $con);
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
        return FacturesPeer::populateObjects(FacturesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FacturesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

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
     * @param Factures $obj A Factures object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getFactId();
            } // if key === null
            FacturesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Factures object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Factures) {
                $key = (string) $value->getFactId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Factures object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FacturesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Factures Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FacturesPeer::$instances[$key])) {
                return FacturesPeer::$instances[$key];
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
        foreach (FacturesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FacturesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to factures
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
        $cls = FacturesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FacturesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FacturesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Factures object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FacturesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FacturesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FacturesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FacturesPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RFactureTypes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRFactureTypes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Clients table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClients(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClientFactureOptions table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClientFactureOptions(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RFactureStatuts table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRFactureStatuts(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related PlanFacturationParams table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPlanFacturationParams(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RFactureOptionsEcheances table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRFactureOptionsEcheances(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related JournalDeVente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinJournalDeVente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ContactFacturation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinContactFacturation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Selects a collection of Factures objects pre-filled with their Operations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol = FacturesPeer::NUM_HYDRATE_COLUMNS;
        OperationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Factures) to $obj2 (Operations)
                $obj2->addFactures($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with their RFactureTypes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRFactureTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol = FacturesPeer::NUM_HYDRATE_COLUMNS;
        RFactureTypesPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RFactureTypesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RFactureTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RFactureTypesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Factures) to $obj2 (RFactureTypes)
                $obj2->addFactures($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with their Clients objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClients(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol = FacturesPeer::NUM_HYDRATE_COLUMNS;
        ClientsPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClientsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Factures) to $obj2 (Clients)
                $obj2->addFactures($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with their ClientFactureOptions objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClientFactureOptions(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol = FacturesPeer::NUM_HYDRATE_COLUMNS;
        ClientFactureOptionsPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClientFactureOptionsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClientFactureOptionsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Factures) to $obj2 (ClientFactureOptions)
                $obj2->addFactures($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with their RFactureStatuts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRFactureStatuts(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol = FacturesPeer::NUM_HYDRATE_COLUMNS;
        RFactureStatutsPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RFactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RFactureStatutsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RFactureStatutsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RFactureStatutsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Factures) to $obj2 (RFactureStatuts)
                $obj2->addFactures($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with their PlanFacturationParams objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPlanFacturationParams(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol = FacturesPeer::NUM_HYDRATE_COLUMNS;
        PlanFacturationParamsPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PlanFacturationParamsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PlanFacturationParamsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PlanFacturationParamsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Factures) to $obj2 (PlanFacturationParams)
                $obj2->addFactures($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with their RFactureOptionsEcheances objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRFactureOptionsEcheances(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol = FacturesPeer::NUM_HYDRATE_COLUMNS;
        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Factures) to $obj2 (RFactureOptionsEcheances)
                $obj2->addFactures($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with their JournalDeVente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinJournalDeVente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol = FacturesPeer::NUM_HYDRATE_COLUMNS;
        JournalDeVentePeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = JournalDeVentePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = JournalDeVentePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    JournalDeVentePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Factures) to $obj2 (JournalDeVente)
                $obj2->addFactures($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with their Contacts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinContactFacturation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol = FacturesPeer::NUM_HYDRATE_COLUMNS;
        ContactsPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ContactsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ContactsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ContactsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Factures) to $obj2 (Contacts)
                $obj2->addFactures($obj1);

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
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Selects a collection of Factures objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureStatutsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RFactureStatutsPeer::NUM_HYDRATE_COLUMNS;

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        JournalDeVentePeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + JournalDeVentePeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Operations rows

            $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = OperationsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Factures) to the collection in $obj2 (Operations)
                $obj2->addFactures($obj1);
            } // if joined row not null

            // Add objects for joined RFactureTypes rows

            $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Factures) to the collection in $obj3 (RFactureTypes)
                $obj3->addFactures($obj1);
            } // if joined row not null

            // Add objects for joined Clients rows

            $key4 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ClientsPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ClientsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientsPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Factures) to the collection in $obj4 (Clients)
                $obj4->addFactures($obj1);
            } // if joined row not null

            // Add objects for joined ClientFactureOptions rows

            $key5 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = ClientFactureOptionsPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ClientFactureOptionsPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Factures) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addFactures($obj1);
            } // if joined row not null

            // Add objects for joined RFactureStatuts rows

            $key6 = RFactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = RFactureStatutsPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = RFactureStatutsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RFactureStatutsPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Factures) to the collection in $obj6 (RFactureStatuts)
                $obj6->addFactures($obj1);
            } // if joined row not null

            // Add objects for joined PlanFacturationParams rows

            $key7 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = PlanFacturationParamsPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = PlanFacturationParamsPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    PlanFacturationParamsPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (Factures) to the collection in $obj7 (PlanFacturationParams)
                $obj7->addFactures($obj1);
            } // if joined row not null

            // Add objects for joined RFactureOptionsEcheances rows

            $key8 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol8);
            if ($key8 !== null) {
                $obj8 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key8);
                if (!$obj8) {

                    $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj8, $key8);
                } // if obj8 loaded

                // Add the $obj1 (Factures) to the collection in $obj8 (RFactureOptionsEcheances)
                $obj8->addFactures($obj1);
            } // if joined row not null

            // Add objects for joined JournalDeVente rows

            $key9 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol9);
            if ($key9 !== null) {
                $obj9 = JournalDeVentePeer::getInstanceFromPool($key9);
                if (!$obj9) {

                    $cls = JournalDeVentePeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    JournalDeVentePeer::addInstanceToPool($obj9, $key9);
                } // if obj9 loaded

                // Add the $obj1 (Factures) to the collection in $obj9 (JournalDeVente)
                $obj9->addFactures($obj1);
            } // if joined row not null

            // Add objects for joined Contacts rows

            $key10 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol10);
            if ($key10 !== null) {
                $obj10 = ContactsPeer::getInstanceFromPool($key10);
                if (!$obj10) {

                    $cls = ContactsPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ContactsPeer::addInstanceToPool($obj10, $key10);
                } // if obj10 loaded

                // Add the $obj1 (Factures) to the collection in $obj10 (Contacts)
                $obj10->addFactures($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RFactureTypes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRFactureTypes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Clients table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClients(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClientFactureOptions table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClientFactureOptions(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RFactureStatuts table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRFactureStatuts(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related PlanFacturationParams table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPlanFacturationParams(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RFactureOptionsEcheances table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRFactureOptionsEcheances(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related JournalDeVente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptJournalDeVente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ContactFacturation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptContactFacturation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

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
     * Selects a collection of Factures objects pre-filled with all related objects except Operations.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
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
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureStatutsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RFactureStatutsPeer::NUM_HYDRATE_COLUMNS;

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        JournalDeVentePeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + JournalDeVentePeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RFactureTypes rows

                $key2 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RFactureTypesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RFactureTypesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Factures) to the collection in $obj2 (RFactureTypes)
                $obj2->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Clients rows

                $key3 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ClientsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ClientsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ClientsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factures) to the collection in $obj3 (Clients)
                $obj3->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key4 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientFactureOptionsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientFactureOptionsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factures) to the collection in $obj4 (ClientFactureOptions)
                $obj4->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureStatuts rows

                $key5 = RFactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RFactureStatutsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RFactureStatutsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RFactureStatutsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Factures) to the collection in $obj5 (RFactureStatuts)
                $obj5->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined PlanFacturationParams rows

                $key6 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = PlanFacturationParamsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = PlanFacturationParamsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    PlanFacturationParamsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Factures) to the collection in $obj6 (PlanFacturationParams)
                $obj6->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureOptionsEcheances rows

                $key7 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Factures) to the collection in $obj7 (RFactureOptionsEcheances)
                $obj7->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined JournalDeVente rows

                $key8 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = JournalDeVentePeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = JournalDeVentePeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    JournalDeVentePeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Factures) to the collection in $obj8 (JournalDeVente)
                $obj8->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key9 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ContactsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ContactsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ContactsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Factures) to the collection in $obj9 (Contacts)
                $obj9->addFactures($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with all related objects except RFactureTypes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRFactureTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureStatutsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RFactureStatutsPeer::NUM_HYDRATE_COLUMNS;

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        JournalDeVentePeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + JournalDeVentePeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Operations rows

                $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Factures) to the collection in $obj2 (Operations)
                $obj2->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Clients rows

                $key3 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ClientsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ClientsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ClientsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factures) to the collection in $obj3 (Clients)
                $obj3->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key4 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientFactureOptionsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientFactureOptionsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factures) to the collection in $obj4 (ClientFactureOptions)
                $obj4->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureStatuts rows

                $key5 = RFactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RFactureStatutsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RFactureStatutsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RFactureStatutsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Factures) to the collection in $obj5 (RFactureStatuts)
                $obj5->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined PlanFacturationParams rows

                $key6 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = PlanFacturationParamsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = PlanFacturationParamsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    PlanFacturationParamsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Factures) to the collection in $obj6 (PlanFacturationParams)
                $obj6->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureOptionsEcheances rows

                $key7 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Factures) to the collection in $obj7 (RFactureOptionsEcheances)
                $obj7->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined JournalDeVente rows

                $key8 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = JournalDeVentePeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = JournalDeVentePeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    JournalDeVentePeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Factures) to the collection in $obj8 (JournalDeVente)
                $obj8->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key9 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ContactsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ContactsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ContactsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Factures) to the collection in $obj9 (Contacts)
                $obj9->addFactures($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with all related objects except Clients.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClients(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureStatutsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RFactureStatutsPeer::NUM_HYDRATE_COLUMNS;

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        JournalDeVentePeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + JournalDeVentePeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Operations rows

                $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Factures) to the collection in $obj2 (Operations)
                $obj2->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factures) to the collection in $obj3 (RFactureTypes)
                $obj3->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key4 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientFactureOptionsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientFactureOptionsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factures) to the collection in $obj4 (ClientFactureOptions)
                $obj4->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureStatuts rows

                $key5 = RFactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RFactureStatutsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RFactureStatutsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RFactureStatutsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Factures) to the collection in $obj5 (RFactureStatuts)
                $obj5->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined PlanFacturationParams rows

                $key6 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = PlanFacturationParamsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = PlanFacturationParamsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    PlanFacturationParamsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Factures) to the collection in $obj6 (PlanFacturationParams)
                $obj6->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureOptionsEcheances rows

                $key7 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Factures) to the collection in $obj7 (RFactureOptionsEcheances)
                $obj7->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined JournalDeVente rows

                $key8 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = JournalDeVentePeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = JournalDeVentePeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    JournalDeVentePeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Factures) to the collection in $obj8 (JournalDeVente)
                $obj8->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key9 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ContactsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ContactsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ContactsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Factures) to the collection in $obj9 (Contacts)
                $obj9->addFactures($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with all related objects except ClientFactureOptions.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClientFactureOptions(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        RFactureStatutsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RFactureStatutsPeer::NUM_HYDRATE_COLUMNS;

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        JournalDeVentePeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + JournalDeVentePeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Operations rows

                $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Factures) to the collection in $obj2 (Operations)
                $obj2->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factures) to the collection in $obj3 (RFactureTypes)
                $obj3->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Clients rows

                $key4 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factures) to the collection in $obj4 (Clients)
                $obj4->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureStatuts rows

                $key5 = RFactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RFactureStatutsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RFactureStatutsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RFactureStatutsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Factures) to the collection in $obj5 (RFactureStatuts)
                $obj5->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined PlanFacturationParams rows

                $key6 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = PlanFacturationParamsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = PlanFacturationParamsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    PlanFacturationParamsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Factures) to the collection in $obj6 (PlanFacturationParams)
                $obj6->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureOptionsEcheances rows

                $key7 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Factures) to the collection in $obj7 (RFactureOptionsEcheances)
                $obj7->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined JournalDeVente rows

                $key8 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = JournalDeVentePeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = JournalDeVentePeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    JournalDeVentePeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Factures) to the collection in $obj8 (JournalDeVente)
                $obj8->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key9 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ContactsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ContactsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ContactsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Factures) to the collection in $obj9 (Contacts)
                $obj9->addFactures($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with all related objects except RFactureStatuts.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRFactureStatuts(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        JournalDeVentePeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + JournalDeVentePeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Operations rows

                $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Factures) to the collection in $obj2 (Operations)
                $obj2->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factures) to the collection in $obj3 (RFactureTypes)
                $obj3->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Clients rows

                $key4 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factures) to the collection in $obj4 (Clients)
                $obj4->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key5 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ClientFactureOptionsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ClientFactureOptionsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Factures) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined PlanFacturationParams rows

                $key6 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = PlanFacturationParamsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = PlanFacturationParamsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    PlanFacturationParamsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Factures) to the collection in $obj6 (PlanFacturationParams)
                $obj6->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureOptionsEcheances rows

                $key7 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Factures) to the collection in $obj7 (RFactureOptionsEcheances)
                $obj7->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined JournalDeVente rows

                $key8 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = JournalDeVentePeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = JournalDeVentePeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    JournalDeVentePeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Factures) to the collection in $obj8 (JournalDeVente)
                $obj8->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key9 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ContactsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ContactsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ContactsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Factures) to the collection in $obj9 (Contacts)
                $obj9->addFactures($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with all related objects except PlanFacturationParams.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPlanFacturationParams(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureStatutsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RFactureStatutsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        JournalDeVentePeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + JournalDeVentePeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Operations rows

                $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Factures) to the collection in $obj2 (Operations)
                $obj2->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factures) to the collection in $obj3 (RFactureTypes)
                $obj3->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Clients rows

                $key4 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factures) to the collection in $obj4 (Clients)
                $obj4->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key5 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ClientFactureOptionsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ClientFactureOptionsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Factures) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureStatuts rows

                $key6 = RFactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RFactureStatutsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RFactureStatutsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RFactureStatutsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Factures) to the collection in $obj6 (RFactureStatuts)
                $obj6->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureOptionsEcheances rows

                $key7 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Factures) to the collection in $obj7 (RFactureOptionsEcheances)
                $obj7->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined JournalDeVente rows

                $key8 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = JournalDeVentePeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = JournalDeVentePeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    JournalDeVentePeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Factures) to the collection in $obj8 (JournalDeVente)
                $obj8->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key9 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ContactsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ContactsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ContactsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Factures) to the collection in $obj9 (Contacts)
                $obj9->addFactures($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with all related objects except RFactureOptionsEcheances.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRFactureOptionsEcheances(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureStatutsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RFactureStatutsPeer::NUM_HYDRATE_COLUMNS;

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;

        JournalDeVentePeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + JournalDeVentePeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Operations rows

                $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Factures) to the collection in $obj2 (Operations)
                $obj2->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factures) to the collection in $obj3 (RFactureTypes)
                $obj3->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Clients rows

                $key4 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factures) to the collection in $obj4 (Clients)
                $obj4->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key5 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ClientFactureOptionsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ClientFactureOptionsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Factures) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureStatuts rows

                $key6 = RFactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RFactureStatutsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RFactureStatutsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RFactureStatutsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Factures) to the collection in $obj6 (RFactureStatuts)
                $obj6->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined PlanFacturationParams rows

                $key7 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = PlanFacturationParamsPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = PlanFacturationParamsPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    PlanFacturationParamsPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Factures) to the collection in $obj7 (PlanFacturationParams)
                $obj7->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined JournalDeVente rows

                $key8 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = JournalDeVentePeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = JournalDeVentePeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    JournalDeVentePeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Factures) to the collection in $obj8 (JournalDeVente)
                $obj8->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key9 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ContactsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ContactsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ContactsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Factures) to the collection in $obj9 (Contacts)
                $obj9->addFactures($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with all related objects except JournalDeVente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptJournalDeVente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureStatutsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RFactureStatutsPeer::NUM_HYDRATE_COLUMNS;

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CT_ID, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Operations rows

                $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Factures) to the collection in $obj2 (Operations)
                $obj2->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factures) to the collection in $obj3 (RFactureTypes)
                $obj3->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Clients rows

                $key4 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factures) to the collection in $obj4 (Clients)
                $obj4->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key5 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ClientFactureOptionsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ClientFactureOptionsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Factures) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureStatuts rows

                $key6 = RFactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RFactureStatutsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RFactureStatutsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RFactureStatutsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Factures) to the collection in $obj6 (RFactureStatuts)
                $obj6->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined PlanFacturationParams rows

                $key7 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = PlanFacturationParamsPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = PlanFacturationParamsPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    PlanFacturationParamsPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Factures) to the collection in $obj7 (PlanFacturationParams)
                $obj7->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureOptionsEcheances rows

                $key8 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Factures) to the collection in $obj8 (RFactureOptionsEcheances)
                $obj8->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key9 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ContactsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ContactsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ContactsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Factures) to the collection in $obj9 (Contacts)
                $obj9->addFactures($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factures objects pre-filled with all related objects except ContactFacturation.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factures objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptContactFacturation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPeer::DATABASE_NAME);
        }

        FacturesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureStatutsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RFactureStatutsPeer::NUM_HYDRATE_COLUMNS;

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        JournalDeVentePeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + JournalDeVentePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::R_FACT_TYPE_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_STATUS_ID, RFactureStatutsPeer::R_FACT_STAT_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::OP_ID, PlanFacturationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::FACT_ECHEANCE_ID, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(FacturesPeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Operations rows

                $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OperationsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Factures) to the collection in $obj2 (Operations)
                $obj2->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factures) to the collection in $obj3 (RFactureTypes)
                $obj3->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined Clients rows

                $key4 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factures) to the collection in $obj4 (Clients)
                $obj4->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key5 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ClientFactureOptionsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ClientFactureOptionsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Factures) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureStatuts rows

                $key6 = RFactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RFactureStatutsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RFactureStatutsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RFactureStatutsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Factures) to the collection in $obj6 (RFactureStatuts)
                $obj6->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined PlanFacturationParams rows

                $key7 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = PlanFacturationParamsPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = PlanFacturationParamsPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    PlanFacturationParamsPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Factures) to the collection in $obj7 (PlanFacturationParams)
                $obj7->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureOptionsEcheances rows

                $key8 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Factures) to the collection in $obj8 (RFactureOptionsEcheances)
                $obj8->addFactures($obj1);

            } // if joined row is not null

                // Add objects for joined JournalDeVente rows

                $key9 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = JournalDeVentePeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = JournalDeVentePeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    JournalDeVentePeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Factures) to the collection in $obj9 (JournalDeVente)
                $obj9->addFactures($obj1);

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
        return Propel::getDatabaseMap(FacturesPeer::DATABASE_NAME)->getTable(FacturesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFacturesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFacturesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FacturesTableMap());
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
        return FacturesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Factures or Criteria object.
     *
     * @param      mixed $values Criteria or Factures object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Factures object
        }

        if ($criteria->containsKey(FacturesPeer::FACT_ID) && $criteria->keyContainsValue(FacturesPeer::FACT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FacturesPeer::FACT_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Factures or Criteria object.
     *
     * @param      mixed $values Criteria or Factures object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FacturesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FacturesPeer::FACT_ID);
            $value = $criteria->remove(FacturesPeer::FACT_ID);
            if ($value) {
                $selectCriteria->add(FacturesPeer::FACT_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FacturesPeer::TABLE_NAME);
            }

        } else { // $values is Factures object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the factures table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FacturesPeer::TABLE_NAME, $con, FacturesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FacturesPeer::clearInstancePool();
            FacturesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Factures or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Factures object or primary key or array of primary keys
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
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FacturesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Factures) { // it's a model object
            // invalidate the cache for this single object
            FacturesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FacturesPeer::DATABASE_NAME);
            $criteria->add(FacturesPeer::FACT_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FacturesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FacturesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FacturesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Factures object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Factures $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FacturesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FacturesPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::R_FACT_TYPE_ID))
            $columns[FacturesPeer::R_FACT_TYPE_ID] = $obj->getRFactTypeId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::OP_ID))
            $columns[FacturesPeer::OP_ID] = $obj->getOpId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::CL_ID))
            $columns[FacturesPeer::CL_ID] = $obj->getClId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::CT_ID))
            $columns[FacturesPeer::CT_ID] = $obj->getCtId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::DC_ID))
            $columns[FacturesPeer::DC_ID] = $obj->getDcId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_NUMERO))
            $columns[FacturesPeer::FACT_NUMERO] = $obj->getFactNumero();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_REFERENCE))
            $columns[FacturesPeer::FACT_REFERENCE] = $obj->getFactReference();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_LANG))
            $columns[FacturesPeer::FACT_LANG] = $obj->getFactLang();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_NUM_CMD))
            $columns[FacturesPeer::FACT_NUM_CMD] = $obj->getFactNumCmd();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_MONTANT_HT))
            $columns[FacturesPeer::FACT_MONTANT_HT] = $obj->getFactMontantHt();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_MONTANT_TTC))
            $columns[FacturesPeer::FACT_MONTANT_TTC] = $obj->getFactMontantTtc();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_MONTANT_ENCAISSE))
            $columns[FacturesPeer::FACT_MONTANT_ENCAISSE] = $obj->getFactMontantEncaisse();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_DESTINATAIRE))
            $columns[FacturesPeer::FACT_DESTINATAIRE] = $obj->getFactDestinataire();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_ATTENTION))
            $columns[FacturesPeer::FACT_ATTENTION] = $obj->getFactAttention();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_ADRESSE1))
            $columns[FacturesPeer::FACT_ADRESSE1] = $obj->getFactAdresse1();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_ADRESSE2))
            $columns[FacturesPeer::FACT_ADRESSE2] = $obj->getFactAdresse2();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_ADRESSE3))
            $columns[FacturesPeer::FACT_ADRESSE3] = $obj->getFactAdresse3();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_CODE_POSTAL))
            $columns[FacturesPeer::FACT_CODE_POSTAL] = $obj->getFactCodePostal();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_VILLE))
            $columns[FacturesPeer::FACT_VILLE] = $obj->getFactVille();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_PAYS))
            $columns[FacturesPeer::FACT_PAYS] = $obj->getFactPays();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_MENTION_SPEC))
            $columns[FacturesPeer::FACT_MENTION_SPEC] = $obj->getFactMentionSpec();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_USER_EDITION))
            $columns[FacturesPeer::FACT_USER_EDITION] = $obj->getFactUserEdition();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_STATUS_ID))
            $columns[FacturesPeer::FACT_STATUS_ID] = $obj->getFactStatusId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_VERROU))
            $columns[FacturesPeer::FACT_VERROU] = $obj->getFactVerrou();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_ANNUL_ID))
            $columns[FacturesPeer::FACT_ANNUL_ID] = $obj->getFactAnnulId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_DATE_ECHEANCE))
            $columns[FacturesPeer::FACT_DATE_ECHEANCE] = $obj->getFactDateEcheance();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_TAUX_ADF))
            $columns[FacturesPeer::FACT_TAUX_ADF] = $obj->getFactTauxAdf();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::DATE_CREATE))
            $columns[FacturesPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::DATE_MODIFY))
            $columns[FacturesPeer::DATE_MODIFY] = $obj->getDateModify();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::USER_ID))
            $columns[FacturesPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::USER_MODIFY))
            $columns[FacturesPeer::USER_MODIFY] = $obj->getUserModify();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_ECHEANCE_ID))
            $columns[FacturesPeer::FACT_ECHEANCE_ID] = $obj->getFactEcheanceId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::JDV_ID))
            $columns[FacturesPeer::JDV_ID] = $obj->getJdvId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPeer::FACT_DATE))
            $columns[FacturesPeer::FACT_DATE] = $obj->getFactDate();

        }

        return BasePeer::doValidate(FacturesPeer::DATABASE_NAME, FacturesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Factures
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FacturesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FacturesPeer::DATABASE_NAME);
        $criteria->add(FacturesPeer::FACT_ID, $pk);

        $v = FacturesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Factures[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FacturesPeer::DATABASE_NAME);
            $criteria->add(FacturesPeer::FACT_ID, $pks, Criteria::IN);
            $objs = FacturesPeer::doSelect($criteria, $con);
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
} // BaseFacturesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFacturesPeer::buildTableMap();

