<?php


/**
 * Base static class for performing query and update operations on the 'operations' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseOperationsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'operations';

    /** the related Propel class for this table */
    const OM_CLASS = 'Operations';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OperationsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 50;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 50;

    /** the column name for the op_id field */
    const OP_ID = 'operations.op_id';

    /** the column name for the op_number field */
    const OP_NUMBER = 'operations.op_number';

    /** the column name for the op_cl_id field */
    const OP_CL_ID = 'operations.op_cl_id';

    /** the column name for the op_ct_id field */
    const OP_CT_ID = 'operations.op_ct_id';

    /** the column name for the op_ct_fact_id field */
    const OP_CT_FACT_ID = 'operations.op_ct_fact_id';

    /** the column name for the op_libelle field */
    const OP_LIBELLE = 'operations.op_libelle';

    /** the column name for the op_type_id field */
    const OP_TYPE_ID = 'operations.op_type_id';

    /** the column name for the op_subtype_id field */
    const OP_SUBTYPE_ID = 'operations.op_subtype_id';

    /** the column name for the op_act_id field */
    const OP_ACT_ID = 'operations.op_act_id';

    /** the column name for the operation_universe_id field */
    const OPERATION_UNIVERSE_ID = 'operations.operation_universe_id';

    /** the column name for the operation_media_id field */
    const OPERATION_MEDIA_ID = 'operations.operation_media_id';

    /** the column name for the operation_ost_tpl_id field */
    const OPERATION_OST_TPL_ID = 'operations.operation_ost_tpl_id';

    /** the column name for the op_project_type_id field */
    const OP_PROJECT_TYPE_ID = 'operations.op_project_type_id';

    /** the column name for the op_dc_id field */
    const OP_DC_ID = 'operations.op_dc_id';

    /** the column name for the op_cp_id field */
    const OP_CP_ID = 'operations.op_cp_id';

    /** the column name for the op_cdp_id field */
    const OP_CDP_ID = 'operations.op_cdp_id';

    /** the column name for the op_description field */
    const OP_DESCRIPTION = 'operations.op_description';

    /** the column name for the op_commentaire field */
    const OP_COMMENTAIRE = 'operations.op_commentaire';

    /** the column name for the op_modalite field */
    const OP_MODALITE = 'operations.op_modalite';

    /** the column name for the op_stamp_start field */
    const OP_STAMP_START = 'operations.op_stamp_start';

    /** the column name for the op_stamp_end field */
    const OP_STAMP_END = 'operations.op_stamp_end';

    /** the column name for the op_stamp_close field */
    const OP_STAMP_CLOSE = 'operations.op_stamp_close';

    /** the column name for the op_dateConso_start field */
    const OP_DATECONSO_START = 'operations.op_dateConso_start';

    /** the column name for the op_dateConso_end field */
    const OP_DATECONSO_END = 'operations.op_dateConso_end';

    /** the column name for the op_datePoste_end field */
    const OP_DATEPOSTE_END = 'operations.op_datePoste_end';

    /** the column name for the op_status_id field */
    const OP_STATUS_ID = 'operations.op_status_id';

    /** the column name for the op_use_presta_negoce field */
    const OP_USE_PRESTA_NEGOCE = 'operations.op_use_presta_negoce';

    /** the column name for the op_taux_conversion field */
    const OP_TAUX_CONVERSION = 'operations.op_taux_conversion';

    /** the column name for the op_delai_trait_courrier_id field */
    const OP_DELAI_TRAIT_COURRIER_ID = 'operations.op_delai_trait_courrier_id';

    /** the column name for the op_delai_devis_id field */
    const OP_DELAI_DEVIS_ID = 'operations.op_delai_devis_id';

    /** the column name for the op_mails_dest field */
    const OP_MAILS_DEST = 'operations.op_mails_dest';

    /** the column name for the op_date_relance_couts field */
    const OP_DATE_RELANCE_COUTS = 'operations.op_date_relance_couts';

    /** the column name for the user_id field */
    const USER_ID = 'operations.user_id';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'operations.user_modify';

    /** the column name for the date_create field */
    const DATE_CREATE = 'operations.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'operations.date_modify';

    /** the column name for the actif field */
    const ACTIF = 'operations.actif';

    /** the column name for the op_cgv_id field */
    const OP_CGV_ID = 'operations.op_cgv_id';

    /** the column name for the op_freq_stat_mail_id field */
    const OP_FREQ_STAT_MAIL_ID = 'operations.op_freq_stat_mail_id';

    /** the column name for the op_date_last_send_stat field */
    const OP_DATE_LAST_SEND_STAT = 'operations.op_date_last_send_stat';

    /** the column name for the op_attach_file_stats_excel field */
    const OP_ATTACH_FILE_STATS_EXCEL = 'operations.op_attach_file_stats_excel';

    /** the column name for the op_devis_lang field */
    const OP_DEVIS_LANG = 'operations.op_devis_lang';

    /** the column name for the op_brief_log field */
    const OP_BRIEF_LOG = 'operations.op_brief_log';

    /** the column name for the op_has_mail_archiv_sent field */
    const OP_HAS_MAIL_ARCHIV_SENT = 'operations.op_has_mail_archiv_sent';

    /** the column name for the cl_site_id_for_log field */
    const CL_SITE_ID_FOR_LOG = 'operations.cl_site_id_for_log';

    /** the column name for the op_date_last_compil_data field */
    const OP_DATE_LAST_COMPIL_DATA = 'operations.op_date_last_compil_data';

    /** the column name for the op_ct_fact_addr_id field */
    const OP_CT_FACT_ADDR_ID = 'operations.op_ct_fact_addr_id';

    /** the column name for the op_parent_id field */
    const OP_PARENT_ID = 'operations.op_parent_id';

    /** the column name for the op_date_archivage_end field */
    const OP_DATE_ARCHIVAGE_END = 'operations.op_date_archivage_end';

    /** the column name for the op_classification_id field */
    const OP_CLASSIFICATION_ID = 'operations.op_classification_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Operations objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Operations[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OperationsPeer::$fieldNames[OperationsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('OpId', 'OpNumber', 'OpClId', 'OpCtId', 'OpCtFactId', 'OpLibelle', 'OpTypeId', 'OpSubtypeId', 'OpActId', 'OperationUniverseId', 'OperationMediaId', 'OperationOstTplId', 'OpProjectTypeId', 'OpDcId', 'OpCpId', 'OpCdpId', 'OpDescription', 'OpCommentaire', 'OpModalite', 'OpStampStart', 'OpStampEnd', 'OpStampClose', 'OpDateconsoStart', 'OpDateconsoEnd', 'OpDateposteEnd', 'OpStatusId', 'OpUsePrestaNegoce', 'OpTauxConversion', 'OpDelaiTraitCourrierId', 'OpDelaiDevisId', 'OpMailsDest', 'OpDateRelanceCouts', 'UserId', 'UserModify', 'DateCreate', 'DateModify', 'Actif', 'OpCgvId', 'OpFreqStatMailId', 'OpDateLastSendStat', 'OpAttachFileStatsExcel', 'OpDevisLang', 'OpBriefLog', 'OpHasMailArchivSent', 'ClSiteIdForLog', 'OpDateLastCompilData', 'OpCtFactAddrId', 'OpParentId', 'OpDateArchivageEnd', 'OpClassificationId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('opId', 'opNumber', 'opClId', 'opCtId', 'opCtFactId', 'opLibelle', 'opTypeId', 'opSubtypeId', 'opActId', 'operationUniverseId', 'operationMediaId', 'operationOstTplId', 'opProjectTypeId', 'opDcId', 'opCpId', 'opCdpId', 'opDescription', 'opCommentaire', 'opModalite', 'opStampStart', 'opStampEnd', 'opStampClose', 'opDateconsoStart', 'opDateconsoEnd', 'opDateposteEnd', 'opStatusId', 'opUsePrestaNegoce', 'opTauxConversion', 'opDelaiTraitCourrierId', 'opDelaiDevisId', 'opMailsDest', 'opDateRelanceCouts', 'userId', 'userModify', 'dateCreate', 'dateModify', 'actif', 'opCgvId', 'opFreqStatMailId', 'opDateLastSendStat', 'opAttachFileStatsExcel', 'opDevisLang', 'opBriefLog', 'opHasMailArchivSent', 'clSiteIdForLog', 'opDateLastCompilData', 'opCtFactAddrId', 'opParentId', 'opDateArchivageEnd', 'opClassificationId', ),
        BasePeer::TYPE_COLNAME => array (OperationsPeer::OP_ID, OperationsPeer::OP_NUMBER, OperationsPeer::OP_CL_ID, OperationsPeer::OP_CT_ID, OperationsPeer::OP_CT_FACT_ID, OperationsPeer::OP_LIBELLE, OperationsPeer::OP_TYPE_ID, OperationsPeer::OP_SUBTYPE_ID, OperationsPeer::OP_ACT_ID, OperationsPeer::OPERATION_UNIVERSE_ID, OperationsPeer::OPERATION_MEDIA_ID, OperationsPeer::OPERATION_OST_TPL_ID, OperationsPeer::OP_PROJECT_TYPE_ID, OperationsPeer::OP_DC_ID, OperationsPeer::OP_CP_ID, OperationsPeer::OP_CDP_ID, OperationsPeer::OP_DESCRIPTION, OperationsPeer::OP_COMMENTAIRE, OperationsPeer::OP_MODALITE, OperationsPeer::OP_STAMP_START, OperationsPeer::OP_STAMP_END, OperationsPeer::OP_STAMP_CLOSE, OperationsPeer::OP_DATECONSO_START, OperationsPeer::OP_DATECONSO_END, OperationsPeer::OP_DATEPOSTE_END, OperationsPeer::OP_STATUS_ID, OperationsPeer::OP_USE_PRESTA_NEGOCE, OperationsPeer::OP_TAUX_CONVERSION, OperationsPeer::OP_DELAI_TRAIT_COURRIER_ID, OperationsPeer::OP_DELAI_DEVIS_ID, OperationsPeer::OP_MAILS_DEST, OperationsPeer::OP_DATE_RELANCE_COUTS, OperationsPeer::USER_ID, OperationsPeer::USER_MODIFY, OperationsPeer::DATE_CREATE, OperationsPeer::DATE_MODIFY, OperationsPeer::ACTIF, OperationsPeer::OP_CGV_ID, OperationsPeer::OP_FREQ_STAT_MAIL_ID, OperationsPeer::OP_DATE_LAST_SEND_STAT, OperationsPeer::OP_ATTACH_FILE_STATS_EXCEL, OperationsPeer::OP_DEVIS_LANG, OperationsPeer::OP_BRIEF_LOG, OperationsPeer::OP_HAS_MAIL_ARCHIV_SENT, OperationsPeer::CL_SITE_ID_FOR_LOG, OperationsPeer::OP_DATE_LAST_COMPIL_DATA, OperationsPeer::OP_CT_FACT_ADDR_ID, OperationsPeer::OP_PARENT_ID, OperationsPeer::OP_DATE_ARCHIVAGE_END, OperationsPeer::OP_CLASSIFICATION_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OP_ID', 'OP_NUMBER', 'OP_CL_ID', 'OP_CT_ID', 'OP_CT_FACT_ID', 'OP_LIBELLE', 'OP_TYPE_ID', 'OP_SUBTYPE_ID', 'OP_ACT_ID', 'OPERATION_UNIVERSE_ID', 'OPERATION_MEDIA_ID', 'OPERATION_OST_TPL_ID', 'OP_PROJECT_TYPE_ID', 'OP_DC_ID', 'OP_CP_ID', 'OP_CDP_ID', 'OP_DESCRIPTION', 'OP_COMMENTAIRE', 'OP_MODALITE', 'OP_STAMP_START', 'OP_STAMP_END', 'OP_STAMP_CLOSE', 'OP_DATECONSO_START', 'OP_DATECONSO_END', 'OP_DATEPOSTE_END', 'OP_STATUS_ID', 'OP_USE_PRESTA_NEGOCE', 'OP_TAUX_CONVERSION', 'OP_DELAI_TRAIT_COURRIER_ID', 'OP_DELAI_DEVIS_ID', 'OP_MAILS_DEST', 'OP_DATE_RELANCE_COUTS', 'USER_ID', 'USER_MODIFY', 'DATE_CREATE', 'DATE_MODIFY', 'ACTIF', 'OP_CGV_ID', 'OP_FREQ_STAT_MAIL_ID', 'OP_DATE_LAST_SEND_STAT', 'OP_ATTACH_FILE_STATS_EXCEL', 'OP_DEVIS_LANG', 'OP_BRIEF_LOG', 'OP_HAS_MAIL_ARCHIV_SENT', 'CL_SITE_ID_FOR_LOG', 'OP_DATE_LAST_COMPIL_DATA', 'OP_CT_FACT_ADDR_ID', 'OP_PARENT_ID', 'OP_DATE_ARCHIVAGE_END', 'OP_CLASSIFICATION_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('op_id', 'op_number', 'op_cl_id', 'op_ct_id', 'op_ct_fact_id', 'op_libelle', 'op_type_id', 'op_subtype_id', 'op_act_id', 'operation_universe_id', 'operation_media_id', 'operation_ost_tpl_id', 'op_project_type_id', 'op_dc_id', 'op_cp_id', 'op_cdp_id', 'op_description', 'op_commentaire', 'op_modalite', 'op_stamp_start', 'op_stamp_end', 'op_stamp_close', 'op_dateConso_start', 'op_dateConso_end', 'op_datePoste_end', 'op_status_id', 'op_use_presta_negoce', 'op_taux_conversion', 'op_delai_trait_courrier_id', 'op_delai_devis_id', 'op_mails_dest', 'op_date_relance_couts', 'user_id', 'user_modify', 'date_create', 'date_modify', 'actif', 'op_cgv_id', 'op_freq_stat_mail_id', 'op_date_last_send_stat', 'op_attach_file_stats_excel', 'op_devis_lang', 'op_brief_log', 'op_has_mail_archiv_sent', 'cl_site_id_for_log', 'op_date_last_compil_data', 'op_ct_fact_addr_id', 'op_parent_id', 'op_date_archivage_end', 'op_classification_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OperationsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('OpId' => 0, 'OpNumber' => 1, 'OpClId' => 2, 'OpCtId' => 3, 'OpCtFactId' => 4, 'OpLibelle' => 5, 'OpTypeId' => 6, 'OpSubtypeId' => 7, 'OpActId' => 8, 'OperationUniverseId' => 9, 'OperationMediaId' => 10, 'OperationOstTplId' => 11, 'OpProjectTypeId' => 12, 'OpDcId' => 13, 'OpCpId' => 14, 'OpCdpId' => 15, 'OpDescription' => 16, 'OpCommentaire' => 17, 'OpModalite' => 18, 'OpStampStart' => 19, 'OpStampEnd' => 20, 'OpStampClose' => 21, 'OpDateconsoStart' => 22, 'OpDateconsoEnd' => 23, 'OpDateposteEnd' => 24, 'OpStatusId' => 25, 'OpUsePrestaNegoce' => 26, 'OpTauxConversion' => 27, 'OpDelaiTraitCourrierId' => 28, 'OpDelaiDevisId' => 29, 'OpMailsDest' => 30, 'OpDateRelanceCouts' => 31, 'UserId' => 32, 'UserModify' => 33, 'DateCreate' => 34, 'DateModify' => 35, 'Actif' => 36, 'OpCgvId' => 37, 'OpFreqStatMailId' => 38, 'OpDateLastSendStat' => 39, 'OpAttachFileStatsExcel' => 40, 'OpDevisLang' => 41, 'OpBriefLog' => 42, 'OpHasMailArchivSent' => 43, 'ClSiteIdForLog' => 44, 'OpDateLastCompilData' => 45, 'OpCtFactAddrId' => 46, 'OpParentId' => 47, 'OpDateArchivageEnd' => 48, 'OpClassificationId' => 49, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('opId' => 0, 'opNumber' => 1, 'opClId' => 2, 'opCtId' => 3, 'opCtFactId' => 4, 'opLibelle' => 5, 'opTypeId' => 6, 'opSubtypeId' => 7, 'opActId' => 8, 'operationUniverseId' => 9, 'operationMediaId' => 10, 'operationOstTplId' => 11, 'opProjectTypeId' => 12, 'opDcId' => 13, 'opCpId' => 14, 'opCdpId' => 15, 'opDescription' => 16, 'opCommentaire' => 17, 'opModalite' => 18, 'opStampStart' => 19, 'opStampEnd' => 20, 'opStampClose' => 21, 'opDateconsoStart' => 22, 'opDateconsoEnd' => 23, 'opDateposteEnd' => 24, 'opStatusId' => 25, 'opUsePrestaNegoce' => 26, 'opTauxConversion' => 27, 'opDelaiTraitCourrierId' => 28, 'opDelaiDevisId' => 29, 'opMailsDest' => 30, 'opDateRelanceCouts' => 31, 'userId' => 32, 'userModify' => 33, 'dateCreate' => 34, 'dateModify' => 35, 'actif' => 36, 'opCgvId' => 37, 'opFreqStatMailId' => 38, 'opDateLastSendStat' => 39, 'opAttachFileStatsExcel' => 40, 'opDevisLang' => 41, 'opBriefLog' => 42, 'opHasMailArchivSent' => 43, 'clSiteIdForLog' => 44, 'opDateLastCompilData' => 45, 'opCtFactAddrId' => 46, 'opParentId' => 47, 'opDateArchivageEnd' => 48, 'opClassificationId' => 49, ),
        BasePeer::TYPE_COLNAME => array (OperationsPeer::OP_ID => 0, OperationsPeer::OP_NUMBER => 1, OperationsPeer::OP_CL_ID => 2, OperationsPeer::OP_CT_ID => 3, OperationsPeer::OP_CT_FACT_ID => 4, OperationsPeer::OP_LIBELLE => 5, OperationsPeer::OP_TYPE_ID => 6, OperationsPeer::OP_SUBTYPE_ID => 7, OperationsPeer::OP_ACT_ID => 8, OperationsPeer::OPERATION_UNIVERSE_ID => 9, OperationsPeer::OPERATION_MEDIA_ID => 10, OperationsPeer::OPERATION_OST_TPL_ID => 11, OperationsPeer::OP_PROJECT_TYPE_ID => 12, OperationsPeer::OP_DC_ID => 13, OperationsPeer::OP_CP_ID => 14, OperationsPeer::OP_CDP_ID => 15, OperationsPeer::OP_DESCRIPTION => 16, OperationsPeer::OP_COMMENTAIRE => 17, OperationsPeer::OP_MODALITE => 18, OperationsPeer::OP_STAMP_START => 19, OperationsPeer::OP_STAMP_END => 20, OperationsPeer::OP_STAMP_CLOSE => 21, OperationsPeer::OP_DATECONSO_START => 22, OperationsPeer::OP_DATECONSO_END => 23, OperationsPeer::OP_DATEPOSTE_END => 24, OperationsPeer::OP_STATUS_ID => 25, OperationsPeer::OP_USE_PRESTA_NEGOCE => 26, OperationsPeer::OP_TAUX_CONVERSION => 27, OperationsPeer::OP_DELAI_TRAIT_COURRIER_ID => 28, OperationsPeer::OP_DELAI_DEVIS_ID => 29, OperationsPeer::OP_MAILS_DEST => 30, OperationsPeer::OP_DATE_RELANCE_COUTS => 31, OperationsPeer::USER_ID => 32, OperationsPeer::USER_MODIFY => 33, OperationsPeer::DATE_CREATE => 34, OperationsPeer::DATE_MODIFY => 35, OperationsPeer::ACTIF => 36, OperationsPeer::OP_CGV_ID => 37, OperationsPeer::OP_FREQ_STAT_MAIL_ID => 38, OperationsPeer::OP_DATE_LAST_SEND_STAT => 39, OperationsPeer::OP_ATTACH_FILE_STATS_EXCEL => 40, OperationsPeer::OP_DEVIS_LANG => 41, OperationsPeer::OP_BRIEF_LOG => 42, OperationsPeer::OP_HAS_MAIL_ARCHIV_SENT => 43, OperationsPeer::CL_SITE_ID_FOR_LOG => 44, OperationsPeer::OP_DATE_LAST_COMPIL_DATA => 45, OperationsPeer::OP_CT_FACT_ADDR_ID => 46, OperationsPeer::OP_PARENT_ID => 47, OperationsPeer::OP_DATE_ARCHIVAGE_END => 48, OperationsPeer::OP_CLASSIFICATION_ID => 49, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OP_ID' => 0, 'OP_NUMBER' => 1, 'OP_CL_ID' => 2, 'OP_CT_ID' => 3, 'OP_CT_FACT_ID' => 4, 'OP_LIBELLE' => 5, 'OP_TYPE_ID' => 6, 'OP_SUBTYPE_ID' => 7, 'OP_ACT_ID' => 8, 'OPERATION_UNIVERSE_ID' => 9, 'OPERATION_MEDIA_ID' => 10, 'OPERATION_OST_TPL_ID' => 11, 'OP_PROJECT_TYPE_ID' => 12, 'OP_DC_ID' => 13, 'OP_CP_ID' => 14, 'OP_CDP_ID' => 15, 'OP_DESCRIPTION' => 16, 'OP_COMMENTAIRE' => 17, 'OP_MODALITE' => 18, 'OP_STAMP_START' => 19, 'OP_STAMP_END' => 20, 'OP_STAMP_CLOSE' => 21, 'OP_DATECONSO_START' => 22, 'OP_DATECONSO_END' => 23, 'OP_DATEPOSTE_END' => 24, 'OP_STATUS_ID' => 25, 'OP_USE_PRESTA_NEGOCE' => 26, 'OP_TAUX_CONVERSION' => 27, 'OP_DELAI_TRAIT_COURRIER_ID' => 28, 'OP_DELAI_DEVIS_ID' => 29, 'OP_MAILS_DEST' => 30, 'OP_DATE_RELANCE_COUTS' => 31, 'USER_ID' => 32, 'USER_MODIFY' => 33, 'DATE_CREATE' => 34, 'DATE_MODIFY' => 35, 'ACTIF' => 36, 'OP_CGV_ID' => 37, 'OP_FREQ_STAT_MAIL_ID' => 38, 'OP_DATE_LAST_SEND_STAT' => 39, 'OP_ATTACH_FILE_STATS_EXCEL' => 40, 'OP_DEVIS_LANG' => 41, 'OP_BRIEF_LOG' => 42, 'OP_HAS_MAIL_ARCHIV_SENT' => 43, 'CL_SITE_ID_FOR_LOG' => 44, 'OP_DATE_LAST_COMPIL_DATA' => 45, 'OP_CT_FACT_ADDR_ID' => 46, 'OP_PARENT_ID' => 47, 'OP_DATE_ARCHIVAGE_END' => 48, 'OP_CLASSIFICATION_ID' => 49, ),
        BasePeer::TYPE_FIELDNAME => array ('op_id' => 0, 'op_number' => 1, 'op_cl_id' => 2, 'op_ct_id' => 3, 'op_ct_fact_id' => 4, 'op_libelle' => 5, 'op_type_id' => 6, 'op_subtype_id' => 7, 'op_act_id' => 8, 'operation_universe_id' => 9, 'operation_media_id' => 10, 'operation_ost_tpl_id' => 11, 'op_project_type_id' => 12, 'op_dc_id' => 13, 'op_cp_id' => 14, 'op_cdp_id' => 15, 'op_description' => 16, 'op_commentaire' => 17, 'op_modalite' => 18, 'op_stamp_start' => 19, 'op_stamp_end' => 20, 'op_stamp_close' => 21, 'op_dateConso_start' => 22, 'op_dateConso_end' => 23, 'op_datePoste_end' => 24, 'op_status_id' => 25, 'op_use_presta_negoce' => 26, 'op_taux_conversion' => 27, 'op_delai_trait_courrier_id' => 28, 'op_delai_devis_id' => 29, 'op_mails_dest' => 30, 'op_date_relance_couts' => 31, 'user_id' => 32, 'user_modify' => 33, 'date_create' => 34, 'date_modify' => 35, 'actif' => 36, 'op_cgv_id' => 37, 'op_freq_stat_mail_id' => 38, 'op_date_last_send_stat' => 39, 'op_attach_file_stats_excel' => 40, 'op_devis_lang' => 41, 'op_brief_log' => 42, 'op_has_mail_archiv_sent' => 43, 'cl_site_id_for_log' => 44, 'op_date_last_compil_data' => 45, 'op_ct_fact_addr_id' => 46, 'op_parent_id' => 47, 'op_date_archivage_end' => 48, 'op_classification_id' => 49, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, )
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
        $toNames = OperationsPeer::getFieldNames($toType);
        $key = isset(OperationsPeer::$fieldKeys[$fromType][$name]) ? OperationsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OperationsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OperationsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OperationsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OperationsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OperationsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OperationsPeer::OP_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_NUMBER);
            $criteria->addSelectColumn(OperationsPeer::OP_CL_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_CT_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_CT_FACT_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_LIBELLE);
            $criteria->addSelectColumn(OperationsPeer::OP_TYPE_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_SUBTYPE_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_ACT_ID);
            $criteria->addSelectColumn(OperationsPeer::OPERATION_UNIVERSE_ID);
            $criteria->addSelectColumn(OperationsPeer::OPERATION_MEDIA_ID);
            $criteria->addSelectColumn(OperationsPeer::OPERATION_OST_TPL_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_PROJECT_TYPE_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_DC_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_CP_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_CDP_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_DESCRIPTION);
            $criteria->addSelectColumn(OperationsPeer::OP_COMMENTAIRE);
            $criteria->addSelectColumn(OperationsPeer::OP_MODALITE);
            $criteria->addSelectColumn(OperationsPeer::OP_STAMP_START);
            $criteria->addSelectColumn(OperationsPeer::OP_STAMP_END);
            $criteria->addSelectColumn(OperationsPeer::OP_STAMP_CLOSE);
            $criteria->addSelectColumn(OperationsPeer::OP_DATECONSO_START);
            $criteria->addSelectColumn(OperationsPeer::OP_DATECONSO_END);
            $criteria->addSelectColumn(OperationsPeer::OP_DATEPOSTE_END);
            $criteria->addSelectColumn(OperationsPeer::OP_STATUS_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_USE_PRESTA_NEGOCE);
            $criteria->addSelectColumn(OperationsPeer::OP_TAUX_CONVERSION);
            $criteria->addSelectColumn(OperationsPeer::OP_DELAI_TRAIT_COURRIER_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_DELAI_DEVIS_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_MAILS_DEST);
            $criteria->addSelectColumn(OperationsPeer::OP_DATE_RELANCE_COUTS);
            $criteria->addSelectColumn(OperationsPeer::USER_ID);
            $criteria->addSelectColumn(OperationsPeer::USER_MODIFY);
            $criteria->addSelectColumn(OperationsPeer::DATE_CREATE);
            $criteria->addSelectColumn(OperationsPeer::DATE_MODIFY);
            $criteria->addSelectColumn(OperationsPeer::ACTIF);
            $criteria->addSelectColumn(OperationsPeer::OP_CGV_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_FREQ_STAT_MAIL_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_DATE_LAST_SEND_STAT);
            $criteria->addSelectColumn(OperationsPeer::OP_ATTACH_FILE_STATS_EXCEL);
            $criteria->addSelectColumn(OperationsPeer::OP_DEVIS_LANG);
            $criteria->addSelectColumn(OperationsPeer::OP_BRIEF_LOG);
            $criteria->addSelectColumn(OperationsPeer::OP_HAS_MAIL_ARCHIV_SENT);
            $criteria->addSelectColumn(OperationsPeer::CL_SITE_ID_FOR_LOG);
            $criteria->addSelectColumn(OperationsPeer::OP_DATE_LAST_COMPIL_DATA);
            $criteria->addSelectColumn(OperationsPeer::OP_CT_FACT_ADDR_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_PARENT_ID);
            $criteria->addSelectColumn(OperationsPeer::OP_DATE_ARCHIVAGE_END);
            $criteria->addSelectColumn(OperationsPeer::OP_CLASSIFICATION_ID);
        } else {
            $criteria->addSelectColumn($alias . '.op_id');
            $criteria->addSelectColumn($alias . '.op_number');
            $criteria->addSelectColumn($alias . '.op_cl_id');
            $criteria->addSelectColumn($alias . '.op_ct_id');
            $criteria->addSelectColumn($alias . '.op_ct_fact_id');
            $criteria->addSelectColumn($alias . '.op_libelle');
            $criteria->addSelectColumn($alias . '.op_type_id');
            $criteria->addSelectColumn($alias . '.op_subtype_id');
            $criteria->addSelectColumn($alias . '.op_act_id');
            $criteria->addSelectColumn($alias . '.operation_universe_id');
            $criteria->addSelectColumn($alias . '.operation_media_id');
            $criteria->addSelectColumn($alias . '.operation_ost_tpl_id');
            $criteria->addSelectColumn($alias . '.op_project_type_id');
            $criteria->addSelectColumn($alias . '.op_dc_id');
            $criteria->addSelectColumn($alias . '.op_cp_id');
            $criteria->addSelectColumn($alias . '.op_cdp_id');
            $criteria->addSelectColumn($alias . '.op_description');
            $criteria->addSelectColumn($alias . '.op_commentaire');
            $criteria->addSelectColumn($alias . '.op_modalite');
            $criteria->addSelectColumn($alias . '.op_stamp_start');
            $criteria->addSelectColumn($alias . '.op_stamp_end');
            $criteria->addSelectColumn($alias . '.op_stamp_close');
            $criteria->addSelectColumn($alias . '.op_dateConso_start');
            $criteria->addSelectColumn($alias . '.op_dateConso_end');
            $criteria->addSelectColumn($alias . '.op_datePoste_end');
            $criteria->addSelectColumn($alias . '.op_status_id');
            $criteria->addSelectColumn($alias . '.op_use_presta_negoce');
            $criteria->addSelectColumn($alias . '.op_taux_conversion');
            $criteria->addSelectColumn($alias . '.op_delai_trait_courrier_id');
            $criteria->addSelectColumn($alias . '.op_delai_devis_id');
            $criteria->addSelectColumn($alias . '.op_mails_dest');
            $criteria->addSelectColumn($alias . '.op_date_relance_couts');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.user_modify');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.actif');
            $criteria->addSelectColumn($alias . '.op_cgv_id');
            $criteria->addSelectColumn($alias . '.op_freq_stat_mail_id');
            $criteria->addSelectColumn($alias . '.op_date_last_send_stat');
            $criteria->addSelectColumn($alias . '.op_attach_file_stats_excel');
            $criteria->addSelectColumn($alias . '.op_devis_lang');
            $criteria->addSelectColumn($alias . '.op_brief_log');
            $criteria->addSelectColumn($alias . '.op_has_mail_archiv_sent');
            $criteria->addSelectColumn($alias . '.cl_site_id_for_log');
            $criteria->addSelectColumn($alias . '.op_date_last_compil_data');
            $criteria->addSelectColumn($alias . '.op_ct_fact_addr_id');
            $criteria->addSelectColumn($alias . '.op_parent_id');
            $criteria->addSelectColumn($alias . '.op_date_archivage_end');
            $criteria->addSelectColumn($alias . '.op_classification_id');
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
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OperationsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Operations
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OperationsPeer::doSelect($critcopy, $con);
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
        return OperationsPeer::populateObjects(OperationsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OperationsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

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
     * @param Operations $obj A Operations object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOpId();
            } // if key === null
            OperationsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Operations object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Operations) {
                $key = (string) $value->getOpId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Operations object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OperationsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Operations Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OperationsPeer::$instances[$key])) {
                return OperationsPeer::$instances[$key];
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
        foreach (OperationsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OperationsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to operations
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
        $cls = OperationsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OperationsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OperationsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Operations object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OperationsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OperationsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OperationsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OperationsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ContactClient table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinContactClient(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related UserDC table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUserDC(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related UserCP table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUserCP(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related UserCdp table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUserCdp(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClientContratOptions table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClientContratOptions(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClientSiteForLog table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClientSiteForLog(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GedelogOperationParams table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGedelogOperationParams(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ROperationStatus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinROperationStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RCustomActivites table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRCustomActivites(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ROperationType table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinROperationType(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ROperationTypeSub table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinROperationTypeSub(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationsExt table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperationsExt(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RDelaiDevis table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRDelaiDevis(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related InvoicingAddressContact table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinInvoicingAddressContact(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationUniverse table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperationUniverse(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationMedia table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperationMedia(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationTemplate table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperationTemplate(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ROperationClassifications table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinROperationClassifications(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Selects a collection of Operations objects pre-filled with their Clients objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClients(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ClientsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Operations) to $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their Contacts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinContactClient(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ContactsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Operations) to $obj2 (Contacts)
                $obj2->addOperationsRelatedByOpCtId($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their Contacts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinContactFacturation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ContactsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Operations) to $obj2 (Contacts)
                $obj2->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their Users objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUserDC(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        UsersPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Operations) to $obj2 (Users)
                $obj2->addOperationsRelatedByOpDcId($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their Users objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUserCP(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        UsersPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Operations) to $obj2 (Users)
                $obj2->addOperationsRelatedByOpCpId($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their Users objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUserCdp(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        UsersPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Operations) to $obj2 (Users)
                $obj2->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their ClientFactureOptions objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClientFactureOptions(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ClientFactureOptionsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Operations) to $obj2 (ClientFactureOptions)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their ClientContratOptions objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClientContratOptions(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ClientContratOptionsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClientContratOptionsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientContratOptionsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClientContratOptionsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (ClientContratOptions)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their ClientSites objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClientSiteForLog(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ClientSitesPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClientSitesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientSitesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClientSitesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (ClientSites)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their GedelogOperationParams objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGedelogOperationParams(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        GedelogOperationParamsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GedelogOperationParamsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GedelogOperationParamsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (GedelogOperationParams)
                // one to one relationship
                $obj1->setGedelogOperationParams($obj2);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their ROperationStatus objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinROperationStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ROperationStatusPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationStatusPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationStatusPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationStatusPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (ROperationStatus)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their RCustomActivites objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRCustomActivites(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        RCustomActivitesPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RCustomActivitesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RCustomActivitesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RCustomActivitesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (RCustomActivites)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their ROperationType objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinROperationType(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ROperationTypePeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationTypePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationTypePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationTypePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (ROperationType)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their ROperationTypeSub objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinROperationTypeSub(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ROperationTypeSubPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationTypeSubPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationTypeSubPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationTypeSubPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (ROperationTypeSub)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their OperationsExt objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperationsExt(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        OperationsExtPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = OperationsExtPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OperationsExtPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    OperationsExtPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (OperationsExt)
                // one to one relationship
                $obj1->setOperationsExt($obj2);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their RDelaiDevis objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRDelaiDevis(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        RDelaiDevisPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RDelaiDevisPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RDelaiDevisPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RDelaiDevisPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (RDelaiDevis)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their Contacts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinInvoicingAddressContact(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ContactsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Operations) to $obj2 (Contacts)
                $obj2->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their ROperationUniverses objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperationUniverse(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ROperationUniversesPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationUniversesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationUniversesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationUniversesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (ROperationUniverses)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their ROperationMedias objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperationMedia(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ROperationMediasPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationMediasPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationMediasPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationMediasPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (ROperationMedias)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their ROperationTypeSubTpl objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperationTemplate(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ROperationTypeSubTplPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationTypeSubTplPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (ROperationTypeSubTpl)
                $obj2->addOperations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with their ROperationClassifications objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinROperationClassifications(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol = OperationsPeer::NUM_HYDRATE_COLUMNS;
        ROperationClassificationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationClassificationsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationClassificationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationClassificationsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Operations) to $obj2 (ROperationClassifications)
                $obj2->addOperations($obj1);

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
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Selects a collection of Operations objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol23 = $startcol22 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Clients rows

            $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ClientsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined Contacts rows

            $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ContactsPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);
            } // if joined row not null

            // Add objects for joined Contacts rows

            $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ContactsPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);
            } // if joined row not null

            // Add objects for joined Users rows

            $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = UsersPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);
            } // if joined row not null

            // Add objects for joined Users rows

            $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = UsersPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);
            } // if joined row not null

            // Add objects for joined Users rows

            $key7 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = UsersPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = UsersPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsersPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);
            } // if joined row not null

            // Add objects for joined ClientFactureOptions rows

            $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
            if ($key8 !== null) {
                $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                if (!$obj8) {

                    $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if obj8 loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined ClientContratOptions rows

            $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
            if ($key9 !== null) {
                $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                if (!$obj9) {

                    $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if obj9 loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined ClientSites rows

            $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
            if ($key10 !== null) {
                $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                if (!$obj10) {

                    $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if obj10 loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined GedelogOperationParams rows

            $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
            if ($key11 !== null) {
                $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                if (!$obj11) {

                    $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if obj11 loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);
            } // if joined row not null

            // Add objects for joined ROperationStatus rows

            $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
            if ($key12 !== null) {
                $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                if (!$obj12) {

                    $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if obj12 loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined RCustomActivites rows

            $key13 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol13);
            if ($key13 !== null) {
                $obj13 = RCustomActivitesPeer::getInstanceFromPool($key13);
                if (!$obj13) {

                    $cls = RCustomActivitesPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    RCustomActivitesPeer::addInstanceToPool($obj13, $key13);
                } // if obj13 loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (RCustomActivites)
                $obj13->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined ROperationType rows

            $key14 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol14);
            if ($key14 !== null) {
                $obj14 = ROperationTypePeer::getInstanceFromPool($key14);
                if (!$obj14) {

                    $cls = ROperationTypePeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypePeer::addInstanceToPool($obj14, $key14);
                } // if obj14 loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationType)
                $obj14->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined ROperationTypeSub rows

            $key15 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol15);
            if ($key15 !== null) {
                $obj15 = ROperationTypeSubPeer::getInstanceFromPool($key15);
                if (!$obj15) {

                    $cls = ROperationTypeSubPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ROperationTypeSubPeer::addInstanceToPool($obj15, $key15);
                } // if obj15 loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (ROperationTypeSub)
                $obj15->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined OperationsExt rows

            $key16 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol16);
            if ($key16 !== null) {
                $obj16 = OperationsExtPeer::getInstanceFromPool($key16);
                if (!$obj16) {

                    $cls = OperationsExtPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    OperationsExtPeer::addInstanceToPool($obj16, $key16);
                } // if obj16 loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (OperationsExt)
                $obj1->setOperationsExt($obj16);
            } // if joined row not null

            // Add objects for joined RDelaiDevis rows

            $key17 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol17);
            if ($key17 !== null) {
                $obj17 = RDelaiDevisPeer::getInstanceFromPool($key17);
                if (!$obj17) {

                    $cls = RDelaiDevisPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    RDelaiDevisPeer::addInstanceToPool($obj17, $key17);
                } // if obj17 loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (RDelaiDevis)
                $obj17->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined Contacts rows

            $key18 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol18);
            if ($key18 !== null) {
                $obj18 = ContactsPeer::getInstanceFromPool($key18);
                if (!$obj18) {

                    $cls = ContactsPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ContactsPeer::addInstanceToPool($obj18, $key18);
                } // if obj18 loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (Contacts)
                $obj18->addOperationsRelatedByOpCtFactAddrId($obj1);
            } // if joined row not null

            // Add objects for joined ROperationUniverses rows

            $key19 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol19);
            if ($key19 !== null) {
                $obj19 = ROperationUniversesPeer::getInstanceFromPool($key19);
                if (!$obj19) {

                    $cls = ROperationUniversesPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationUniversesPeer::addInstanceToPool($obj19, $key19);
                } // if obj19 loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationUniverses)
                $obj19->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined ROperationMedias rows

            $key20 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol20);
            if ($key20 !== null) {
                $obj20 = ROperationMediasPeer::getInstanceFromPool($key20);
                if (!$obj20) {

                    $cls = ROperationMediasPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationMediasPeer::addInstanceToPool($obj20, $key20);
                } // if obj20 loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationMedias)
                $obj20->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined ROperationTypeSubTpl rows

            $key21 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol21);
            if ($key21 !== null) {
                $obj21 = ROperationTypeSubTplPeer::getInstanceFromPool($key21);
                if (!$obj21) {

                    $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj21, $key21);
                } // if obj21 loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationTypeSubTpl)
                $obj21->addOperations($obj1);
            } // if joined row not null

            // Add objects for joined ROperationClassifications rows

            $key22 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol22);
            if ($key22 !== null) {
                $obj22 = ROperationClassificationsPeer::getInstanceFromPool($key22);
                if (!$obj22) {

                    $cls = ROperationClassificationsPeer::getOMClass();

                    $obj22 = new $cls();
                    $obj22->hydrate($row, $startcol22);
                    ROperationClassificationsPeer::addInstanceToPool($obj22, $key22);
                } // if obj22 loaded

                // Add the $obj1 (Operations) to the collection in $obj22 (ROperationClassifications)
                $obj22->addOperations($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ContactClient table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptContactClient(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related UserDC table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUserDC(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related UserCP table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUserCP(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related UserCdp table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUserCdp(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClientContratOptions table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClientContratOptions(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClientSiteForLog table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClientSiteForLog(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GedelogOperationParams table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGedelogOperationParams(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ROperationStatus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptROperationStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RCustomActivites table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRCustomActivites(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ROperationType table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptROperationType(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ROperationTypeSub table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptROperationTypeSub(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationsExt table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationsExt(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RDelaiDevis table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRDelaiDevis(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related InvoicingAddressContact table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptInvoicingAddressContact(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationsRelatedByOpParentId table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationsRelatedByOpParentId(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationUniverse table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationUniverse(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationMedia table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationMedia(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationTemplate table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationTemplate(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ROperationClassifications table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptROperationClassifications(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

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
     * Selects a collection of Operations objects pre-filled with all related objects except Clients.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
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
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Contacts rows

                $key2 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ContactsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ContactsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ContactsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Contacts)
                $obj2->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key4 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UsersPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UsersPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsersPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Users)
                $obj4->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpCpId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key7 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = ClientFactureOptionsPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    ClientFactureOptionsPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Operations) to the collection in $obj7 (ClientFactureOptions)
                $obj7->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key8 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientContratOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientContratOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientContratOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key9 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientSitesPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientSitesPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientSites)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key10 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = GedelogOperationParamsPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    GedelogOperationParamsPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj10);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key11 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = ROperationStatusPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    ROperationStatusPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (ROperationStatus)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key12 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = RCustomActivitesPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    RCustomActivitesPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (RCustomActivites)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key13 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = ROperationTypePeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    ROperationTypePeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (ROperationType)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key14 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypeSubPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypeSubPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationTypeSub)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key15 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = OperationsExtPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    OperationsExtPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (OperationsExt)
                $obj1->setOperationsExt($obj15);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key16 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = RDelaiDevisPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    RDelaiDevisPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (RDelaiDevis)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except ContactClient.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptContactClient(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key3 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UsersPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UsersPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UsersPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Users)
                $obj3->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key4 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UsersPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UsersPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsersPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Users)
                $obj4->addOperationsRelatedByOpCpId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key6 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ClientFactureOptionsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ClientFactureOptionsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (ClientFactureOptions)
                $obj6->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key7 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = ClientContratOptionsPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    ClientContratOptionsPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Operations) to the collection in $obj7 (ClientContratOptions)
                $obj7->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key8 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientSitesPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientSitesPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientSites)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key9 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = GedelogOperationParamsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    GedelogOperationParamsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj9);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key10 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ROperationStatusPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ROperationStatusPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ROperationStatus)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key11 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = RCustomActivitesPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    RCustomActivitesPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (RCustomActivites)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key12 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationTypePeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationTypePeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationType)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key13 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = ROperationTypeSubPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    ROperationTypeSubPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (ROperationTypeSub)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key14 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = OperationsExtPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    OperationsExtPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (OperationsExt)
                $obj1->setOperationsExt($obj14);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key15 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = RDelaiDevisPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    RDelaiDevisPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (RDelaiDevis)
                $obj15->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key16 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = ROperationUniversesPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    ROperationUniversesPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (ROperationUniverses)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key17 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ROperationMediasPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ROperationMediasPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (ROperationMedias)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key18 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationTypeSubTplPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationTypeSubTpl)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key19 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationClassificationsPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationClassificationsPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationClassifications)
                $obj19->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except ContactFacturation.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
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
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key3 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UsersPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UsersPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UsersPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Users)
                $obj3->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key4 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UsersPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UsersPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsersPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Users)
                $obj4->addOperationsRelatedByOpCpId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key6 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ClientFactureOptionsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ClientFactureOptionsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (ClientFactureOptions)
                $obj6->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key7 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = ClientContratOptionsPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    ClientContratOptionsPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Operations) to the collection in $obj7 (ClientContratOptions)
                $obj7->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key8 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientSitesPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientSitesPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientSites)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key9 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = GedelogOperationParamsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    GedelogOperationParamsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj9);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key10 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ROperationStatusPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ROperationStatusPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ROperationStatus)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key11 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = RCustomActivitesPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    RCustomActivitesPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (RCustomActivites)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key12 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationTypePeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationTypePeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationType)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key13 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = ROperationTypeSubPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    ROperationTypeSubPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (ROperationTypeSub)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key14 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = OperationsExtPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    OperationsExtPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (OperationsExt)
                $obj1->setOperationsExt($obj14);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key15 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = RDelaiDevisPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    RDelaiDevisPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (RDelaiDevis)
                $obj15->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key16 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = ROperationUniversesPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    ROperationUniversesPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (ROperationUniverses)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key17 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ROperationMediasPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ROperationMediasPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (ROperationMedias)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key18 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationTypeSubTplPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationTypeSubTpl)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key19 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationClassificationsPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationClassificationsPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationClassifications)
                $obj19->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except UserDC.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUserDC(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key6 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ClientContratOptionsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ClientContratOptionsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (ClientContratOptions)
                $obj6->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key7 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = ClientSitesPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    ClientSitesPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Operations) to the collection in $obj7 (ClientSites)
                $obj7->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key8 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = GedelogOperationParamsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    GedelogOperationParamsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj8);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key9 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ROperationStatusPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ROperationStatusPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ROperationStatus)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key10 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = RCustomActivitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    RCustomActivitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (RCustomActivites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key11 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = ROperationTypePeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    ROperationTypePeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (ROperationType)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key12 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationTypeSubPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationTypeSubPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationTypeSub)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key13 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = OperationsExtPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    OperationsExtPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (OperationsExt)
                $obj1->setOperationsExt($obj13);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key14 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = RDelaiDevisPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    RDelaiDevisPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (RDelaiDevis)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key15 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = ContactsPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = ContactsPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ContactsPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (Contacts)
                $obj15->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key16 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = ROperationUniversesPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    ROperationUniversesPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (ROperationUniverses)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key17 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ROperationMediasPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ROperationMediasPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (ROperationMedias)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key18 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationTypeSubTplPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationTypeSubTpl)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key19 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationClassificationsPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationClassificationsPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationClassifications)
                $obj19->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except UserCP.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUserCP(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key6 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ClientContratOptionsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ClientContratOptionsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (ClientContratOptions)
                $obj6->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key7 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = ClientSitesPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    ClientSitesPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Operations) to the collection in $obj7 (ClientSites)
                $obj7->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key8 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = GedelogOperationParamsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    GedelogOperationParamsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj8);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key9 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ROperationStatusPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ROperationStatusPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ROperationStatus)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key10 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = RCustomActivitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    RCustomActivitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (RCustomActivites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key11 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = ROperationTypePeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    ROperationTypePeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (ROperationType)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key12 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationTypeSubPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationTypeSubPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationTypeSub)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key13 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = OperationsExtPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    OperationsExtPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (OperationsExt)
                $obj1->setOperationsExt($obj13);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key14 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = RDelaiDevisPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    RDelaiDevisPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (RDelaiDevis)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key15 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = ContactsPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = ContactsPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ContactsPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (Contacts)
                $obj15->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key16 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = ROperationUniversesPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    ROperationUniversesPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (ROperationUniverses)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key17 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ROperationMediasPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ROperationMediasPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (ROperationMedias)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key18 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationTypeSubTplPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationTypeSubTpl)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key19 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationClassificationsPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationClassificationsPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationClassifications)
                $obj19->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except UserCdp.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUserCdp(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key6 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ClientContratOptionsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ClientContratOptionsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (ClientContratOptions)
                $obj6->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key7 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = ClientSitesPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    ClientSitesPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Operations) to the collection in $obj7 (ClientSites)
                $obj7->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key8 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = GedelogOperationParamsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    GedelogOperationParamsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj8);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key9 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ROperationStatusPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ROperationStatusPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ROperationStatus)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key10 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = RCustomActivitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    RCustomActivitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (RCustomActivites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key11 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = ROperationTypePeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    ROperationTypePeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (ROperationType)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key12 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationTypeSubPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationTypeSubPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationTypeSub)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key13 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = OperationsExtPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    OperationsExtPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (OperationsExt)
                $obj1->setOperationsExt($obj13);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key14 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = RDelaiDevisPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    RDelaiDevisPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (RDelaiDevis)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key15 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = ContactsPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = ContactsPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ContactsPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (Contacts)
                $obj15->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key16 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = ROperationUniversesPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    ROperationUniversesPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (ROperationUniverses)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key17 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ROperationMediasPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ROperationMediasPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (ROperationMedias)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key18 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationTypeSubTplPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationTypeSubTpl)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key19 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationClassificationsPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationClassificationsPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationClassifications)
                $obj19->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except ClientFactureOptions.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
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
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key8 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientContratOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientContratOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientContratOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key9 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientSitesPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientSitesPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientSites)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key10 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = GedelogOperationParamsPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    GedelogOperationParamsPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj10);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key11 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = ROperationStatusPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    ROperationStatusPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (ROperationStatus)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key12 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = RCustomActivitesPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    RCustomActivitesPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (RCustomActivites)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key13 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = ROperationTypePeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    ROperationTypePeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (ROperationType)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key14 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypeSubPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypeSubPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationTypeSub)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key15 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = OperationsExtPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    OperationsExtPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (OperationsExt)
                $obj1->setOperationsExt($obj15);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key16 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = RDelaiDevisPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    RDelaiDevisPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (RDelaiDevis)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except ClientContratOptions.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClientContratOptions(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key9 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientSitesPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientSitesPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientSites)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key10 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = GedelogOperationParamsPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    GedelogOperationParamsPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj10);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key11 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = ROperationStatusPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    ROperationStatusPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (ROperationStatus)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key12 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = RCustomActivitesPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    RCustomActivitesPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (RCustomActivites)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key13 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = ROperationTypePeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    ROperationTypePeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (ROperationType)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key14 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypeSubPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypeSubPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationTypeSub)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key15 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = OperationsExtPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    OperationsExtPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (OperationsExt)
                $obj1->setOperationsExt($obj15);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key16 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = RDelaiDevisPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    RDelaiDevisPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (RDelaiDevis)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except ClientSiteForLog.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClientSiteForLog(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key10 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = GedelogOperationParamsPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    GedelogOperationParamsPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj10);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key11 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = ROperationStatusPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    ROperationStatusPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (ROperationStatus)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key12 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = RCustomActivitesPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    RCustomActivitesPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (RCustomActivites)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key13 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = ROperationTypePeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    ROperationTypePeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (ROperationType)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key14 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypeSubPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypeSubPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationTypeSub)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key15 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = OperationsExtPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    OperationsExtPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (OperationsExt)
                $obj1->setOperationsExt($obj15);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key16 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = RDelaiDevisPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    RDelaiDevisPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (RDelaiDevis)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except GedelogOperationParams.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGedelogOperationParams(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key11 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = ROperationStatusPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    ROperationStatusPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (ROperationStatus)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key12 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = RCustomActivitesPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    RCustomActivitesPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (RCustomActivites)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key13 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = ROperationTypePeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    ROperationTypePeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (ROperationType)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key14 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypeSubPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypeSubPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationTypeSub)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key15 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = OperationsExtPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    OperationsExtPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (OperationsExt)
                $obj1->setOperationsExt($obj15);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key16 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = RDelaiDevisPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    RDelaiDevisPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (RDelaiDevis)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except ROperationStatus.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptROperationStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key12 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = RCustomActivitesPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    RCustomActivitesPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (RCustomActivites)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key13 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = ROperationTypePeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    ROperationTypePeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (ROperationType)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key14 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypeSubPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypeSubPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationTypeSub)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key15 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = OperationsExtPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    OperationsExtPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (OperationsExt)
                $obj1->setOperationsExt($obj15);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key16 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = RDelaiDevisPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    RDelaiDevisPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (RDelaiDevis)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except RCustomActivites.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRCustomActivites(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key13 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = ROperationTypePeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    ROperationTypePeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (ROperationType)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key14 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypeSubPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypeSubPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationTypeSub)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key15 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = OperationsExtPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    OperationsExtPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (OperationsExt)
                $obj1->setOperationsExt($obj15);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key16 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = RDelaiDevisPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    RDelaiDevisPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (RDelaiDevis)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except ROperationType.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptROperationType(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key13 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = RCustomActivitesPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    RCustomActivitesPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (RCustomActivites)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key14 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypeSubPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypeSubPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationTypeSub)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key15 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = OperationsExtPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    OperationsExtPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (OperationsExt)
                $obj1->setOperationsExt($obj15);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key16 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = RDelaiDevisPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    RDelaiDevisPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (RDelaiDevis)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except ROperationTypeSub.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptROperationTypeSub(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key13 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = RCustomActivitesPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    RCustomActivitesPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (RCustomActivites)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key14 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypePeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypePeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationType)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key15 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = OperationsExtPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    OperationsExtPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (OperationsExt)
                $obj1->setOperationsExt($obj15);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key16 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = RDelaiDevisPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    RDelaiDevisPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (RDelaiDevis)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except OperationsExt.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationsExt(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key13 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = RCustomActivitesPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    RCustomActivitesPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (RCustomActivites)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key14 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypePeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypePeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationType)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key15 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = ROperationTypeSubPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ROperationTypeSubPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (ROperationTypeSub)
                $obj15->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key16 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = RDelaiDevisPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    RDelaiDevisPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (RDelaiDevis)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except RDelaiDevis.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRDelaiDevis(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key13 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = RCustomActivitesPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    RCustomActivitesPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (RCustomActivites)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key14 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypePeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypePeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationType)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key15 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = ROperationTypeSubPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ROperationTypeSubPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (ROperationTypeSub)
                $obj15->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key16 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = OperationsExtPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    OperationsExtPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (OperationsExt)
                $obj1->setOperationsExt($obj16);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key17 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ContactsPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ContactsPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ContactsPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (Contacts)
                $obj17->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key18 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationUniversesPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationUniversesPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationUniverses)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except InvoicingAddressContact.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptInvoicingAddressContact(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key3 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UsersPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UsersPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UsersPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Users)
                $obj3->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key4 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UsersPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UsersPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsersPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Users)
                $obj4->addOperationsRelatedByOpCpId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key6 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ClientFactureOptionsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ClientFactureOptionsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (ClientFactureOptions)
                $obj6->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key7 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = ClientContratOptionsPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    ClientContratOptionsPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Operations) to the collection in $obj7 (ClientContratOptions)
                $obj7->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key8 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientSitesPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientSitesPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientSites)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key9 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = GedelogOperationParamsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    GedelogOperationParamsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj9);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key10 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ROperationStatusPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ROperationStatusPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ROperationStatus)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key11 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = RCustomActivitesPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    RCustomActivitesPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (RCustomActivites)
                $obj11->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key12 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationTypePeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationTypePeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationType)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key13 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = ROperationTypeSubPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    ROperationTypeSubPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (ROperationTypeSub)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key14 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = OperationsExtPeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    OperationsExtPeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (OperationsExt)
                $obj1->setOperationsExt($obj14);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key15 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = RDelaiDevisPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    RDelaiDevisPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (RDelaiDevis)
                $obj15->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key16 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = ROperationUniversesPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    ROperationUniversesPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (ROperationUniverses)
                $obj16->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key17 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = ROperationMediasPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    ROperationMediasPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (ROperationMedias)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key18 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ROperationTypeSubTplPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (ROperationTypeSubTpl)
                $obj18->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key19 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationClassificationsPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationClassificationsPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationClassifications)
                $obj19->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except OperationsRelatedByOpParentId.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationsRelatedByOpParentId(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol23 = $startcol22 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key13 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = RCustomActivitesPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    RCustomActivitesPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (RCustomActivites)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key14 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypePeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypePeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationType)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key15 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = ROperationTypeSubPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ROperationTypeSubPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (ROperationTypeSub)
                $obj15->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key16 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = OperationsExtPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    OperationsExtPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (OperationsExt)
                $obj1->setOperationsExt($obj16);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key17 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = RDelaiDevisPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    RDelaiDevisPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (RDelaiDevis)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key18 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ContactsPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ContactsPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ContactsPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (Contacts)
                $obj18->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key19 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationUniversesPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationUniversesPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationUniverses)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key20 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationMediasPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationMediasPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationMedias)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key21 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationTypeSubTplPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationTypeSubTpl)
                $obj21->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key22 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol22);
                if ($key22 !== null) {
                    $obj22 = ROperationClassificationsPeer::getInstanceFromPool($key22);
                    if (!$obj22) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj22 = new $cls();
                    $obj22->hydrate($row, $startcol22);
                    ROperationClassificationsPeer::addInstanceToPool($obj22, $key22);
                } // if $obj22 already loaded

                // Add the $obj1 (Operations) to the collection in $obj22 (ROperationClassifications)
                $obj22->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except OperationUniverse.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationUniverse(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key13 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = RCustomActivitesPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    RCustomActivitesPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (RCustomActivites)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key14 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypePeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypePeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationType)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key15 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = ROperationTypeSubPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ROperationTypeSubPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (ROperationTypeSub)
                $obj15->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key16 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = OperationsExtPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    OperationsExtPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (OperationsExt)
                $obj1->setOperationsExt($obj16);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key17 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = RDelaiDevisPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    RDelaiDevisPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (RDelaiDevis)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key18 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ContactsPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ContactsPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ContactsPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (Contacts)
                $obj18->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key19 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationMediasPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationMediasPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationMedias)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except OperationMedia.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationMedia(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key13 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = RCustomActivitesPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    RCustomActivitesPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (RCustomActivites)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key14 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypePeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypePeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationType)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key15 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = ROperationTypeSubPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ROperationTypeSubPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (ROperationTypeSub)
                $obj15->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key16 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = OperationsExtPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    OperationsExtPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (OperationsExt)
                $obj1->setOperationsExt($obj16);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key17 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = RDelaiDevisPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    RDelaiDevisPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (RDelaiDevis)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key18 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ContactsPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ContactsPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ContactsPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (Contacts)
                $obj18->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key19 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationUniversesPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationUniversesPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationUniverses)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key20 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationTypeSubTplPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationTypeSubTpl)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except OperationTemplate.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationTemplate(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationClassificationsPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationClassificationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CLASSIFICATION_ID, ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key13 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = RCustomActivitesPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    RCustomActivitesPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (RCustomActivites)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key14 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypePeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypePeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationType)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key15 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = ROperationTypeSubPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ROperationTypeSubPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (ROperationTypeSub)
                $obj15->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key16 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = OperationsExtPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    OperationsExtPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (OperationsExt)
                $obj1->setOperationsExt($obj16);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key17 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = RDelaiDevisPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    RDelaiDevisPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (RDelaiDevis)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key18 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ContactsPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ContactsPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ContactsPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (Contacts)
                $obj18->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key19 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationUniversesPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationUniversesPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationUniverses)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key20 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationMediasPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationMediasPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationMedias)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationClassifications rows

                $key21 = ROperationClassificationsPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationClassificationsPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationClassificationsPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationClassificationsPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationClassifications)
                $obj21->addOperations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Operations objects pre-filled with all related objects except ROperationClassifications.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Operations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptROperationClassifications(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationsPeer::DATABASE_NAME);
        }

        OperationsPeer::addSelectColumns($criteria);
        $startcol2 = OperationsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        GedelogOperationParamsPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GedelogOperationParamsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        RCustomActivitesPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + RCustomActivitesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypePeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + ROperationTypePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol16 = $startcol15 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        OperationsExtPeer::addSelectColumns($criteria);
        $startcol17 = $startcol16 + OperationsExtPeer::NUM_HYDRATE_COLUMNS;

        RDelaiDevisPeer::addSelectColumns($criteria);
        $startcol18 = $startcol17 + RDelaiDevisPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol19 = $startcol18 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol20 = $startcol19 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol21 = $startcol20 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol22 = $startcol21 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CDP_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CL_ID, ClientContratOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::CL_SITE_ID_FOR_LOG, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, GedelogOperationParamsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_STATUS_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ACT_ID, RCustomActivitesPeer::ACT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_TYPE_ID, ROperationTypePeer::OT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_SUBTYPE_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_ID, OperationsExtPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_DELAI_DEVIS_ID, RDelaiDevisPeer::R_DELAI_DEVIS_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OP_CT_FACT_ADDR_ID, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $criteria->addJoin(OperationsPeer::OPERATION_OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Clients rows

                $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Operations) to the collection in $obj2 (Clients)
                $obj2->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Operations) to the collection in $obj3 (Contacts)
                $obj3->addOperationsRelatedByOpCtId($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ContactsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Operations) to the collection in $obj4 (Contacts)
                $obj4->addOperationsRelatedByOpCtFactId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Operations) to the collection in $obj5 (Users)
                $obj5->addOperationsRelatedByOpDcId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsersPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Operations) to the collection in $obj6 (Users)
                $obj6->addOperationsRelatedByOpCpId($obj1);

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

                // Add the $obj1 (Operations) to the collection in $obj7 (Users)
                $obj7->addOperationsRelatedByOpCdpId($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key8 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = ClientFactureOptionsPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    ClientFactureOptionsPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Operations) to the collection in $obj8 (ClientFactureOptions)
                $obj8->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientContratOptions rows

                $key9 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = ClientContratOptionsPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = ClientContratOptionsPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    ClientContratOptionsPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (Operations) to the collection in $obj9 (ClientContratOptions)
                $obj9->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ClientSites rows

                $key10 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = ClientSitesPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    ClientSitesPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (Operations) to the collection in $obj10 (ClientSites)
                $obj10->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined GedelogOperationParams rows

                $key11 = GedelogOperationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GedelogOperationParamsPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GedelogOperationParamsPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GedelogOperationParamsPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (Operations) to the collection in $obj11 (GedelogOperationParams)
                $obj1->setGedelogOperationParams($obj11);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key12 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = ROperationStatusPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    ROperationStatusPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (Operations) to the collection in $obj12 (ROperationStatus)
                $obj12->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined RCustomActivites rows

                $key13 = RCustomActivitesPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = RCustomActivitesPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = RCustomActivitesPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    RCustomActivitesPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (Operations) to the collection in $obj13 (RCustomActivites)
                $obj13->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationType rows

                $key14 = ROperationTypePeer::getPrimaryKeyHashFromRow($row, $startcol14);
                if ($key14 !== null) {
                    $obj14 = ROperationTypePeer::getInstanceFromPool($key14);
                    if (!$obj14) {

                        $cls = ROperationTypePeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    ROperationTypePeer::addInstanceToPool($obj14, $key14);
                } // if $obj14 already loaded

                // Add the $obj1 (Operations) to the collection in $obj14 (ROperationType)
                $obj14->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSub rows

                $key15 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol15);
                if ($key15 !== null) {
                    $obj15 = ROperationTypeSubPeer::getInstanceFromPool($key15);
                    if (!$obj15) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj15 = new $cls();
                    $obj15->hydrate($row, $startcol15);
                    ROperationTypeSubPeer::addInstanceToPool($obj15, $key15);
                } // if $obj15 already loaded

                // Add the $obj1 (Operations) to the collection in $obj15 (ROperationTypeSub)
                $obj15->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined OperationsExt rows

                $key16 = OperationsExtPeer::getPrimaryKeyHashFromRow($row, $startcol16);
                if ($key16 !== null) {
                    $obj16 = OperationsExtPeer::getInstanceFromPool($key16);
                    if (!$obj16) {

                        $cls = OperationsExtPeer::getOMClass();

                    $obj16 = new $cls();
                    $obj16->hydrate($row, $startcol16);
                    OperationsExtPeer::addInstanceToPool($obj16, $key16);
                } // if $obj16 already loaded

                // Add the $obj1 (Operations) to the collection in $obj16 (OperationsExt)
                $obj1->setOperationsExt($obj16);

            } // if joined row is not null

                // Add objects for joined RDelaiDevis rows

                $key17 = RDelaiDevisPeer::getPrimaryKeyHashFromRow($row, $startcol17);
                if ($key17 !== null) {
                    $obj17 = RDelaiDevisPeer::getInstanceFromPool($key17);
                    if (!$obj17) {

                        $cls = RDelaiDevisPeer::getOMClass();

                    $obj17 = new $cls();
                    $obj17->hydrate($row, $startcol17);
                    RDelaiDevisPeer::addInstanceToPool($obj17, $key17);
                } // if $obj17 already loaded

                // Add the $obj1 (Operations) to the collection in $obj17 (RDelaiDevis)
                $obj17->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key18 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol18);
                if ($key18 !== null) {
                    $obj18 = ContactsPeer::getInstanceFromPool($key18);
                    if (!$obj18) {

                        $cls = ContactsPeer::getOMClass();

                    $obj18 = new $cls();
                    $obj18->hydrate($row, $startcol18);
                    ContactsPeer::addInstanceToPool($obj18, $key18);
                } // if $obj18 already loaded

                // Add the $obj1 (Operations) to the collection in $obj18 (Contacts)
                $obj18->addOperationsRelatedByOpCtFactAddrId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key19 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol19);
                if ($key19 !== null) {
                    $obj19 = ROperationUniversesPeer::getInstanceFromPool($key19);
                    if (!$obj19) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj19 = new $cls();
                    $obj19->hydrate($row, $startcol19);
                    ROperationUniversesPeer::addInstanceToPool($obj19, $key19);
                } // if $obj19 already loaded

                // Add the $obj1 (Operations) to the collection in $obj19 (ROperationUniverses)
                $obj19->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key20 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol20);
                if ($key20 !== null) {
                    $obj20 = ROperationMediasPeer::getInstanceFromPool($key20);
                    if (!$obj20) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj20 = new $cls();
                    $obj20->hydrate($row, $startcol20);
                    ROperationMediasPeer::addInstanceToPool($obj20, $key20);
                } // if $obj20 already loaded

                // Add the $obj1 (Operations) to the collection in $obj20 (ROperationMedias)
                $obj20->addOperations($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key21 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol21);
                if ($key21 !== null) {
                    $obj21 = ROperationTypeSubTplPeer::getInstanceFromPool($key21);
                    if (!$obj21) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj21 = new $cls();
                    $obj21->hydrate($row, $startcol21);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj21, $key21);
                } // if $obj21 already loaded

                // Add the $obj1 (Operations) to the collection in $obj21 (ROperationTypeSubTpl)
                $obj21->addOperations($obj1);

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
        return Propel::getDatabaseMap(OperationsPeer::DATABASE_NAME)->getTable(OperationsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOperationsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOperationsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OperationsTableMap());
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
        return OperationsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Operations or Criteria object.
     *
     * @param      mixed $values Criteria or Operations object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Operations object
        }

        if ($criteria->containsKey(OperationsPeer::OP_ID) && $criteria->keyContainsValue(OperationsPeer::OP_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OperationsPeer::OP_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Operations or Criteria object.
     *
     * @param      mixed $values Criteria or Operations object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OperationsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OperationsPeer::OP_ID);
            $value = $criteria->remove(OperationsPeer::OP_ID);
            if ($value) {
                $selectCriteria->add(OperationsPeer::OP_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OperationsPeer::TABLE_NAME);
            }

        } else { // $values is Operations object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the operations table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OperationsPeer::TABLE_NAME, $con, OperationsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OperationsPeer::clearInstancePool();
            OperationsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Operations or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Operations object or primary key or array of primary keys
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
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OperationsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Operations) { // it's a model object
            // invalidate the cache for this single object
            OperationsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OperationsPeer::DATABASE_NAME);
            $criteria->add(OperationsPeer::OP_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OperationsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OperationsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OperationsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Operations object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Operations $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OperationsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OperationsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_NUMBER))
            $columns[OperationsPeer::OP_NUMBER] = $obj->getOpNumber();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_CL_ID))
            $columns[OperationsPeer::OP_CL_ID] = $obj->getOpClId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_CT_ID))
            $columns[OperationsPeer::OP_CT_ID] = $obj->getOpCtId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_LIBELLE))
            $columns[OperationsPeer::OP_LIBELLE] = $obj->getOpLibelle();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_TYPE_ID))
            $columns[OperationsPeer::OP_TYPE_ID] = $obj->getOpTypeId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_SUBTYPE_ID))
            $columns[OperationsPeer::OP_SUBTYPE_ID] = $obj->getOpSubtypeId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_ACT_ID))
            $columns[OperationsPeer::OP_ACT_ID] = $obj->getOpActId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OPERATION_UNIVERSE_ID))
            $columns[OperationsPeer::OPERATION_UNIVERSE_ID] = $obj->getOperationUniverseId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OPERATION_MEDIA_ID))
            $columns[OperationsPeer::OPERATION_MEDIA_ID] = $obj->getOperationMediaId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OPERATION_OST_TPL_ID))
            $columns[OperationsPeer::OPERATION_OST_TPL_ID] = $obj->getOperationOstTplId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_DC_ID))
            $columns[OperationsPeer::OP_DC_ID] = $obj->getOpDcId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_CP_ID))
            $columns[OperationsPeer::OP_CP_ID] = $obj->getOpCpId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_CDP_ID))
            $columns[OperationsPeer::OP_CDP_ID] = $obj->getOpCdpId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_DESCRIPTION))
            $columns[OperationsPeer::OP_DESCRIPTION] = $obj->getOpDescription();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_COMMENTAIRE))
            $columns[OperationsPeer::OP_COMMENTAIRE] = $obj->getOpCommentaire();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_MODALITE))
            $columns[OperationsPeer::OP_MODALITE] = $obj->getOpModalite();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_STAMP_START))
            $columns[OperationsPeer::OP_STAMP_START] = $obj->getOpStampStart();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_STAMP_END))
            $columns[OperationsPeer::OP_STAMP_END] = $obj->getOpStampEnd();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_STAMP_CLOSE))
            $columns[OperationsPeer::OP_STAMP_CLOSE] = $obj->getOpStampClose();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_DATECONSO_START))
            $columns[OperationsPeer::OP_DATECONSO_START] = $obj->getOpDateconsoStart();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_DATECONSO_END))
            $columns[OperationsPeer::OP_DATECONSO_END] = $obj->getOpDateconsoEnd();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_DATEPOSTE_END))
            $columns[OperationsPeer::OP_DATEPOSTE_END] = $obj->getOpDateposteEnd();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_DATE_ARCHIVAGE_END))
            $columns[OperationsPeer::OP_DATE_ARCHIVAGE_END] = $obj->getOpDateArchivageEnd();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_STATUS_ID))
            $columns[OperationsPeer::OP_STATUS_ID] = $obj->getOpStatusId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_TAUX_CONVERSION))
            $columns[OperationsPeer::OP_TAUX_CONVERSION] = $obj->getOpTauxConversion();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::USER_ID))
            $columns[OperationsPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::USER_MODIFY))
            $columns[OperationsPeer::USER_MODIFY] = $obj->getUserModify();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::DATE_CREATE))
            $columns[OperationsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::DATE_MODIFY))
            $columns[OperationsPeer::DATE_MODIFY] = $obj->getDateModify();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::ACTIF))
            $columns[OperationsPeer::ACTIF] = $obj->getActif();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_CGV_ID))
            $columns[OperationsPeer::OP_CGV_ID] = $obj->getOpCgvId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_FREQ_STAT_MAIL_ID))
            $columns[OperationsPeer::OP_FREQ_STAT_MAIL_ID] = $obj->getOpFreqStatMailId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_DATE_LAST_SEND_STAT))
            $columns[OperationsPeer::OP_DATE_LAST_SEND_STAT] = $obj->getOpDateLastSendStat();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_ATTACH_FILE_STATS_EXCEL))
            $columns[OperationsPeer::OP_ATTACH_FILE_STATS_EXCEL] = $obj->getOpAttachFileStatsExcel();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_DEVIS_LANG))
            $columns[OperationsPeer::OP_DEVIS_LANG] = $obj->getOpDevisLang();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_BRIEF_LOG))
            $columns[OperationsPeer::OP_BRIEF_LOG] = $obj->getOpBriefLog();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_HAS_MAIL_ARCHIV_SENT))
            $columns[OperationsPeer::OP_HAS_MAIL_ARCHIV_SENT] = $obj->getOpHasMailArchivSent();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::CL_SITE_ID_FOR_LOG))
            $columns[OperationsPeer::CL_SITE_ID_FOR_LOG] = $obj->getClSiteIdForLog();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_DATE_LAST_COMPIL_DATA))
            $columns[OperationsPeer::OP_DATE_LAST_COMPIL_DATA] = $obj->getOpDateLastCompilData();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_CT_FACT_ADDR_ID))
            $columns[OperationsPeer::OP_CT_FACT_ADDR_ID] = $obj->getOpCtFactAddrId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_PARENT_ID))
            $columns[OperationsPeer::OP_PARENT_ID] = $obj->getOpParentId();

        if ($obj->isNew() || $obj->isColumnModified(OperationsPeer::OP_CLASSIFICATION_ID))
            $columns[OperationsPeer::OP_CLASSIFICATION_ID] = $obj->getOpClassificationId();

        }

        return BasePeer::doValidate(OperationsPeer::DATABASE_NAME, OperationsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Operations
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OperationsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OperationsPeer::DATABASE_NAME);
        $criteria->add(OperationsPeer::OP_ID, $pk);

        $v = OperationsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Operations[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OperationsPeer::DATABASE_NAME);
            $criteria->add(OperationsPeer::OP_ID, $pks, Criteria::IN);
            $objs = OperationsPeer::doSelect($criteria, $con);
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
} // BaseOperationsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOperationsPeer::buildTableMap();

