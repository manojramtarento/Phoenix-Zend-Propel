<?php


/**
 * Base class that represents a row from the 'operations' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperations extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the op_number field.
     * @var        string
     */
    protected $op_number;

    /**
     * The value for the op_cl_id field.
     * @var        int
     */
    protected $op_cl_id;

    /**
     * The value for the op_ct_id field.
     * @var        int
     */
    protected $op_ct_id;

    /**
     * The value for the op_ct_fact_id field.
     * @var        int
     */
    protected $op_ct_fact_id;

    /**
     * The value for the op_libelle field.
     * @var        string
     */
    protected $op_libelle;

    /**
     * The value for the op_type_id field.
     * @var        int
     */
    protected $op_type_id;

    /**
     * The value for the op_subtype_id field.
     * @var        int
     */
    protected $op_subtype_id;

    /**
     * The value for the op_act_id field.
     * @var        int
     */
    protected $op_act_id;

    /**
     * The value for the operation_universe_id field.
     * @var        int
     */
    protected $operation_universe_id;

    /**
     * The value for the operation_media_id field.
     * @var        int
     */
    protected $operation_media_id;

    /**
     * The value for the operation_ost_tpl_id field.
     * @var        int
     */
    protected $operation_ost_tpl_id;

    /**
     * The value for the op_project_type_id field.
     * @var        int
     */
    protected $op_project_type_id;

    /**
     * The value for the op_dc_id field.
     * @var        int
     */
    protected $op_dc_id;

    /**
     * The value for the op_cp_id field.
     * @var        int
     */
    protected $op_cp_id;

    /**
     * The value for the op_cdp_id field.
     * @var        int
     */
    protected $op_cdp_id;

    /**
     * The value for the op_description field.
     * @var        string
     */
    protected $op_description;

    /**
     * The value for the op_commentaire field.
     * @var        string
     */
    protected $op_commentaire;

    /**
     * The value for the op_modalite field.
     * @var        string
     */
    protected $op_modalite;

    /**
     * The value for the op_stamp_start field.
     * @var        string
     */
    protected $op_stamp_start;

    /**
     * The value for the op_stamp_end field.
     * @var        string
     */
    protected $op_stamp_end;

    /**
     * The value for the op_stamp_close field.
     * @var        string
     */
    protected $op_stamp_close;

    /**
     * The value for the op_dateconso_start field.
     * @var        string
     */
    protected $op_dateconso_start;

    /**
     * The value for the op_dateconso_end field.
     * @var        string
     */
    protected $op_dateconso_end;

    /**
     * The value for the op_dateposte_end field.
     * @var        string
     */
    protected $op_dateposte_end;

    /**
     * The value for the op_status_id field.
     * @var        int
     */
    protected $op_status_id;

    /**
     * The value for the op_use_presta_negoce field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $op_use_presta_negoce;

    /**
     * The value for the op_taux_conversion field.
     * @var        int
     */
    protected $op_taux_conversion;

    /**
     * The value for the op_delai_trait_courrier_id field.
     * @var        int
     */
    protected $op_delai_trait_courrier_id;

    /**
     * The value for the op_delai_devis_id field.
     * @var        int
     */
    protected $op_delai_devis_id;

    /**
     * The value for the op_mails_dest field.
     * @var        string
     */
    protected $op_mails_dest;

    /**
     * The value for the op_date_relance_couts field.
     * @var        string
     */
    protected $op_date_relance_couts;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the user_modify field.
     * @var        int
     */
    protected $user_modify;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * The value for the date_modify field.
     * @var        string
     */
    protected $date_modify;

    /**
     * The value for the actif field.
     * @var        int
     */
    protected $actif;

    /**
     * The value for the op_cgv_id field.
     * @var        int
     */
    protected $op_cgv_id;

    /**
     * The value for the op_freq_stat_mail_id field.
     * @var        int
     */
    protected $op_freq_stat_mail_id;

    /**
     * The value for the op_date_last_send_stat field.
     * @var        string
     */
    protected $op_date_last_send_stat;

    /**
     * The value for the op_attach_file_stats_excel field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $op_attach_file_stats_excel;

    /**
     * The value for the op_devis_lang field.
     * @var        string
     */
    protected $op_devis_lang;

    /**
     * The value for the op_brief_log field.
     * @var        string
     */
    protected $op_brief_log;

    /**
     * The value for the op_has_mail_archiv_sent field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $op_has_mail_archiv_sent;

    /**
     * The value for the cl_site_id_for_log field.
     * @var        int
     */
    protected $cl_site_id_for_log;

    /**
     * The value for the op_date_last_compil_data field.
     * @var        string
     */
    protected $op_date_last_compil_data;

    /**
     * The value for the op_ct_fact_addr_id field.
     * @var        int
     */
    protected $op_ct_fact_addr_id;

    /**
     * The value for the op_parent_id field.
     * @var        int
     */
    protected $op_parent_id;

    /**
     * The value for the op_date_archivage_end field.
     * @var        string
     */
    protected $op_date_archivage_end;

    /**
     * The value for the op_classification_id field.
     * @var        int
     */
    protected $op_classification_id;

    /**
     * @var        Clients
     */
    protected $aClients;

    /**
     * @var        Contacts
     */
    protected $aContactClient;

    /**
     * @var        Contacts
     */
    protected $aContactFacturation;

    /**
     * @var        Users
     */
    protected $aUserDC;

    /**
     * @var        Users
     */
    protected $aUserCP;

    /**
     * @var        Users
     */
    protected $aUserCdp;

    /**
     * @var        ClientFactureOptions
     */
    protected $aClientFactureOptions;

    /**
     * @var        ClientContratOptions
     */
    protected $aClientContratOptions;

    /**
     * @var        ClientSites
     */
    protected $aClientSiteForLog;

    /**
     * @var        GedelogOperationParams
     */
    protected $aGedelogOperationParams;

    /**
     * @var        ROperationStatus
     */
    protected $aROperationStatus;

    /**
     * @var        RCustomActivites
     */
    protected $aRCustomActivites;

    /**
     * @var        ROperationType
     */
    protected $aROperationType;

    /**
     * @var        ROperationTypeSub
     */
    protected $aROperationTypeSub;

    /**
     * @var        OperationsExt
     */
    protected $aOperationsExt;

    /**
     * @var        RDelaiDevis
     */
    protected $aRDelaiDevis;

    /**
     * @var        Contacts
     */
    protected $aInvoicingAddressContact;

    /**
     * @var        Operations
     */
    protected $aOperationsRelatedByOpParentId;

    /**
     * @var        ROperationUniverses
     */
    protected $aOperationUniverse;

    /**
     * @var        ROperationMedias
     */
    protected $aOperationMedia;

    /**
     * @var        ROperationTypeSubTpl
     */
    protected $aOperationTemplate;

    /**
     * @var        ROperationClassifications
     */
    protected $aROperationClassifications;

    /**
     * @var        PropelObjectCollection|Factures[] Collection to store aggregation of Factures objects.
     */
    protected $collFacturess;
    protected $collFacturessPartial;

    /**
     * @var        PropelObjectCollection|LnkOperationOption[] Collection to store aggregation of LnkOperationOption objects.
     */
    protected $collLnkOperationOptions;
    protected $collLnkOperationOptionsPartial;

    /**
     * @var        PropelObjectCollection|LnkOperationsContactsMail[] Collection to store aggregation of LnkOperationsContactsMail objects.
     */
    protected $collLnkOperationsContactsMails;
    protected $collLnkOperationsContactsMailsPartial;

    /**
     * @var        PropelObjectCollection|LnkOperationCountry[] Collection to store aggregation of LnkOperationCountry objects.
     */
    protected $collLnkOperationCountrys;
    protected $collLnkOperationCountrysPartial;

    /**
     * @var        PropelObjectCollection|OperationDecouverts[] Collection to store aggregation of OperationDecouverts objects.
     */
    protected $collOperationDecouvertss;
    protected $collOperationDecouvertssPartial;

    /**
     * @var        PropelObjectCollection|OperationPrestations[] Collection to store aggregation of OperationPrestations objects.
     */
    protected $collOperationPrestationss;
    protected $collOperationPrestationssPartial;

    /**
     * @var        PropelObjectCollection|OperationPrimes[] Collection to store aggregation of OperationPrimes objects.
     */
    protected $collOperationPrimess;
    protected $collOperationPrimessPartial;

    /**
     * @var        PropelObjectCollection|OperationRubriques[] Collection to store aggregation of OperationRubriques objects.
     */
    protected $collOperationRubriquess;
    protected $collOperationRubriquessPartial;

    /**
     * @var        PropelObjectCollection|OperationScenarii[] Collection to store aggregation of OperationScenarii objects.
     */
    protected $collOperationScenariis;
    protected $collOperationScenariisPartial;

    /**
     * @var        PropelObjectCollection|OperationStatuts[] Collection to store aggregation of OperationStatuts objects.
     */
    protected $collOperationStatutss;
    protected $collOperationStatutssPartial;

    /**
     * @var        PropelObjectCollection|OperationTasks[] Collection to store aggregation of OperationTasks objects.
     */
    protected $collOperationTaskss;
    protected $collOperationTaskssPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationssRelatedByOpId;
    protected $collOperationssRelatedByOpIdPartial;

    /**
     * @var        PropelObjectCollection|PlanFacturationDetails[] Collection to store aggregation of PlanFacturationDetails objects.
     */
    protected $collPlanFacturationDetailss;
    protected $collPlanFacturationDetailssPartial;

    /**
     * @var        PropelObjectCollection|PlanFacturationParams[] Collection to store aggregation of PlanFacturationParams objects.
     */
    protected $collPlanFacturationParamss;
    protected $collPlanFacturationParamssPartial;

    /**
     * @var        PropelObjectCollection|FactureEditionHistory[] Collection to store aggregation of FactureEditionHistory objects.
     */
    protected $collFactureEditionHistorys;
    protected $collFactureEditionHistorysPartial;

    /**
     * @var        PropelObjectCollection|RRubriquesType[] Collection to store aggregation of RRubriquesType objects.
     */
    protected $collRRubriquesTypes;

    /**
     * @var        PropelObjectCollection|RTvaType[] Collection to store aggregation of RTvaType objects.
     */
    protected $collRTvaTypes;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    // adderror behavior
    private $aCheckFunctions=array();
    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rRubriquesTypesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rTvaTypesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $facturessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkOperationOptionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkOperationsContactsMailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkOperationCountrysScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationDecouvertssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationPrestationssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationPrimessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationRubriquessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationScenariisScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationStatutssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationTaskssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationssRelatedByOpIdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $planFacturationDetailssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $planFacturationParamssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $factureEditionHistorysScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->op_use_presta_negoce = false;
        $this->op_attach_file_stats_excel = false;
        $this->op_has_mail_archiv_sent = false;
    }

    /**
     * Initializes internal state of BaseOperations object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [op_id] column value.
     *
     * @return int
     */
    public function getOpId()
    {

        return $this->op_id;
    }

    /**
     * Get the [op_number] column value.
     *
     * @return string
     */
    public function getOpNumber()
    {

        return $this->op_number;
    }

    /**
     * Get the [op_cl_id] column value.
     *
     * @return int
     */
    public function getOpClId()
    {

        return $this->op_cl_id;
    }

    /**
     * Get the [op_ct_id] column value.
     *
     * @return int
     */
    public function getOpCtId()
    {

        return $this->op_ct_id;
    }

    /**
     * Get the [op_ct_fact_id] column value.
     *
     * @return int
     */
    public function getOpCtFactId()
    {

        return $this->op_ct_fact_id;
    }

    /**
     * Get the [op_libelle] column value.
     *
     * @return string
     */
    public function getOpLibelle()
    {

        return $this->op_libelle;
    }

    /**
     * Get the [op_type_id] column value.
     *
     * @return int
     */
    public function getOpTypeId()
    {

        return $this->op_type_id;
    }

    /**
     * Get the [op_subtype_id] column value.
     *
     * @return int
     */
    public function getOpSubtypeId()
    {

        return $this->op_subtype_id;
    }

    /**
     * Get the [op_act_id] column value.
     *
     * @return int
     */
    public function getOpActId()
    {

        return $this->op_act_id;
    }

    /**
     * Get the [operation_universe_id] column value.
     *
     * @return int
     */
    public function getOperationUniverseId()
    {

        return $this->operation_universe_id;
    }

    /**
     * Get the [operation_media_id] column value.
     *
     * @return int
     */
    public function getOperationMediaId()
    {

        return $this->operation_media_id;
    }

    /**
     * Get the [operation_ost_tpl_id] column value.
     *
     * @return int
     */
    public function getOperationOstTplId()
    {

        return $this->operation_ost_tpl_id;
    }

    /**
     * Get the [op_project_type_id] column value.
     *
     * @return int
     */
    public function getOpProjectTypeId()
    {

        return $this->op_project_type_id;
    }

    /**
     * Get the [op_dc_id] column value.
     *
     * @return int
     */
    public function getOpDcId()
    {

        return $this->op_dc_id;
    }

    /**
     * Get the [op_cp_id] column value.
     *
     * @return int
     */
    public function getOpCpId()
    {

        return $this->op_cp_id;
    }

    /**
     * Get the [op_cdp_id] column value.
     *
     * @return int
     */
    public function getOpCdpId()
    {

        return $this->op_cdp_id;
    }

    /**
     * Get the [op_description] column value.
     *
     * @return string
     */
    public function getOpDescription()
    {

        return $this->op_description;
    }

    /**
     * Get the [op_commentaire] column value.
     *
     * @return string
     */
    public function getOpCommentaire()
    {

        return $this->op_commentaire;
    }

    /**
     * Get the [op_modalite] column value.
     *
     * @return string
     */
    public function getOpModalite()
    {

        return $this->op_modalite;
    }

    /**
     * Get the [optionally formatted] temporal [op_stamp_start] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpStampStart($format = 'Y-m-d H:i:s')
    {
        if ($this->op_stamp_start === null) {
            return null;
        }

        if ($this->op_stamp_start === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_stamp_start);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_stamp_start, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [op_stamp_end] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpStampEnd($format = 'Y-m-d H:i:s')
    {
        if ($this->op_stamp_end === null) {
            return null;
        }

        if ($this->op_stamp_end === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_stamp_end);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_stamp_end, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [op_stamp_close] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpStampClose($format = 'Y-m-d H:i:s')
    {
        if ($this->op_stamp_close === null) {
            return null;
        }

        if ($this->op_stamp_close === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_stamp_close);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_stamp_close, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [op_dateconso_start] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpDateconsoStart($format = 'Y-m-d H:i:s')
    {
        if ($this->op_dateconso_start === null) {
            return null;
        }

        if ($this->op_dateconso_start === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_dateconso_start);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_dateconso_start, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [op_dateconso_end] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpDateconsoEnd($format = 'Y-m-d H:i:s')
    {
        if ($this->op_dateconso_end === null) {
            return null;
        }

        if ($this->op_dateconso_end === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_dateconso_end);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_dateconso_end, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [op_dateposte_end] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpDateposteEnd($format = 'Y-m-d H:i:s')
    {
        if ($this->op_dateposte_end === null) {
            return null;
        }

        if ($this->op_dateposte_end === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_dateposte_end);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_dateposte_end, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [op_status_id] column value.
     *
     * @return int
     */
    public function getOpStatusId()
    {

        return $this->op_status_id;
    }

    /**
     * Get the [op_use_presta_negoce] column value.
     *
     * @return boolean
     */
    public function getOpUsePrestaNegoce()
    {

        return $this->op_use_presta_negoce;
    }

    /**
     * Get the [op_taux_conversion] column value.
     *
     * @return int
     */
    public function getOpTauxConversion()
    {

        return $this->op_taux_conversion;
    }

    /**
     * Get the [op_delai_trait_courrier_id] column value.
     *
     * @return int
     */
    public function getOpDelaiTraitCourrierId()
    {

        return $this->op_delai_trait_courrier_id;
    }

    /**
     * Get the [op_delai_devis_id] column value.
     *
     * @return int
     */
    public function getOpDelaiDevisId()
    {

        return $this->op_delai_devis_id;
    }

    /**
     * Get the [op_mails_dest] column value.
     *
     * @return string
     */
    public function getOpMailsDest()
    {

        return $this->op_mails_dest;
    }

    /**
     * Get the [optionally formatted] temporal [op_date_relance_couts] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpDateRelanceCouts($format = 'Y-m-d H:i:s')
    {
        if ($this->op_date_relance_couts === null) {
            return null;
        }

        if ($this->op_date_relance_couts === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_date_relance_couts);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_date_relance_couts, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
    }

    /**
     * Get the [user_modify] column value.
     *
     * @return int
     */
    public function getUserModify()
    {

        return $this->user_modify;
    }

    /**
     * Get the [optionally formatted] temporal [date_create] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCreate($format = 'Y-m-d H:i:s')
    {
        if ($this->date_create === null) {
            return null;
        }

        if ($this->date_create === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_create);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_create, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [date_modify] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateModify($format = 'Y-m-d H:i:s')
    {
        if ($this->date_modify === null) {
            return null;
        }

        if ($this->date_modify === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_modify);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modify, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [actif] column value.
     *
     * @return int
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Get the [op_cgv_id] column value.
     *
     * @return int
     */
    public function getOpCgvId()
    {

        return $this->op_cgv_id;
    }

    /**
     * Get the [op_freq_stat_mail_id] column value.
     *
     * @return int
     */
    public function getOpFreqStatMailId()
    {

        return $this->op_freq_stat_mail_id;
    }

    /**
     * Get the [optionally formatted] temporal [op_date_last_send_stat] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpDateLastSendStat($format = 'Y-m-d H:i:s')
    {
        if ($this->op_date_last_send_stat === null) {
            return null;
        }

        if ($this->op_date_last_send_stat === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_date_last_send_stat);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_date_last_send_stat, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [op_attach_file_stats_excel] column value.
     *
     * @return boolean
     */
    public function getOpAttachFileStatsExcel()
    {

        return $this->op_attach_file_stats_excel;
    }

    /**
     * Get the [op_devis_lang] column value.
     *
     * @return string
     */
    public function getOpDevisLang()
    {

        return $this->op_devis_lang;
    }

    /**
     * Get the [op_brief_log] column value.
     *
     * @return string
     */
    public function getOpBriefLog()
    {

        return $this->op_brief_log;
    }

    /**
     * Get the [op_has_mail_archiv_sent] column value.
     *
     * @return boolean
     */
    public function getOpHasMailArchivSent()
    {

        return $this->op_has_mail_archiv_sent;
    }

    /**
     * Get the [cl_site_id_for_log] column value.
     *
     * @return int
     */
    public function getClSiteIdForLog()
    {

        return $this->cl_site_id_for_log;
    }

    /**
     * Get the [optionally formatted] temporal [op_date_last_compil_data] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpDateLastCompilData($format = 'Y-m-d H:i:s')
    {
        if ($this->op_date_last_compil_data === null) {
            return null;
        }

        if ($this->op_date_last_compil_data === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_date_last_compil_data);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_date_last_compil_data, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [op_ct_fact_addr_id] column value.
     *
     * @return int
     */
    public function getOpCtFactAddrId()
    {

        return $this->op_ct_fact_addr_id;
    }

    /**
     * Get the [op_parent_id] column value.
     *
     * @return int
     */
    public function getOpParentId()
    {

        return $this->op_parent_id;
    }

    /**
     * Get the [optionally formatted] temporal [op_date_archivage_end] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpDateArchivageEnd($format = 'Y-m-d H:i:s')
    {
        if ($this->op_date_archivage_end === null) {
            return null;
        }

        if ($this->op_date_archivage_end === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_date_archivage_end);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_date_archivage_end, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [op_classification_id] column value.
     *
     * @return int
     */
    public function getOpClassificationId()
    {

        return $this->op_classification_id;
    }

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_id !== $v) {
                    $this->op_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_ID;
                }

        if ($this->aGedelogOperationParams !== null && $this->aGedelogOperationParams->getOpId() !== $v) {
            $this->aGedelogOperationParams = null;
        }

        if ($this->aOperationsExt !== null && $this->aOperationsExt->getOpId() !== $v) {
            $this->aOperationsExt = null;
        }


        return $this;
    } // setOpId()

    /**
     * Set the value of [op_number] column.
     *
     * @param  string $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpNumber($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_number !== $v) {
            $this->op_number = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_NUMBER;
        }


        return $this;
    } // setOpNumber()

    /**
     * Set the value of [op_cl_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpClId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_cl_id !== $v) {
                    $this->op_cl_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_CL_ID;
                }

        if ($this->aClients !== null && $this->aClients->getClId() !== $v) {
            $this->aClients = null;
        }

        if ($this->aClientFactureOptions !== null && $this->aClientFactureOptions->getClId() !== $v) {
            $this->aClientFactureOptions = null;
        }

        if ($this->aClientContratOptions !== null && $this->aClientContratOptions->getClId() !== $v) {
            $this->aClientContratOptions = null;
        }


        return $this;
    } // setOpClId()

    /**
     * Set the value of [op_ct_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpCtId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_ct_id !== $v) {
                    $this->op_ct_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_CT_ID;
                }

        if ($this->aContactClient !== null && $this->aContactClient->getCtId() !== $v) {
            $this->aContactClient = null;
        }


        return $this;
    } // setOpCtId()

    /**
     * Set the value of [op_ct_fact_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpCtFactId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_ct_fact_id !== $v) {
                    $this->op_ct_fact_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_CT_FACT_ID;
                }

        if ($this->aContactFacturation !== null && $this->aContactFacturation->getCtId() !== $v) {
            $this->aContactFacturation = null;
        }


        return $this;
    } // setOpCtFactId()

    /**
     * Set the value of [op_libelle] column.
     *
     * @param  string $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_libelle !== $v) {
            $this->op_libelle = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_LIBELLE;
        }


        return $this;
    } // setOpLibelle()

    /**
     * Set the value of [op_type_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_type_id !== $v) {
                    $this->op_type_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_TYPE_ID;
                }

        if ($this->aROperationType !== null && $this->aROperationType->getOtId() !== $v) {
            $this->aROperationType = null;
        }


        return $this;
    } // setOpTypeId()

    /**
     * Set the value of [op_subtype_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpSubtypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_subtype_id !== $v) {
                    $this->op_subtype_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_SUBTYPE_ID;
                }

        if ($this->aROperationTypeSub !== null && $this->aROperationTypeSub->getOstId() !== $v) {
            $this->aROperationTypeSub = null;
        }


        return $this;
    } // setOpSubtypeId()

    /**
     * Set the value of [op_act_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpActId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_act_id !== $v) {
                    $this->op_act_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_ACT_ID;
                }

        if ($this->aRCustomActivites !== null && $this->aRCustomActivites->getActId() !== $v) {
            $this->aRCustomActivites = null;
        }


        return $this;
    } // setOpActId()

    /**
     * Set the value of [operation_universe_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationUniverseId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->operation_universe_id !== $v) {
                    $this->operation_universe_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OPERATION_UNIVERSE_ID;
                }

        if ($this->aOperationUniverse !== null && $this->aOperationUniverse->getROperationUniverseId() !== $v) {
            $this->aOperationUniverse = null;
        }


        return $this;
    } // setOperationUniverseId()

    /**
     * Set the value of [operation_media_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationMediaId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->operation_media_id !== $v) {
                    $this->operation_media_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OPERATION_MEDIA_ID;
                }

        if ($this->aOperationMedia !== null && $this->aOperationMedia->getROperationMediaId() !== $v) {
            $this->aOperationMedia = null;
        }


        return $this;
    } // setOperationMediaId()

    /**
     * Set the value of [operation_ost_tpl_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationOstTplId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->operation_ost_tpl_id !== $v) {
                    $this->operation_ost_tpl_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OPERATION_OST_TPL_ID;
                }

        if ($this->aOperationTemplate !== null && $this->aOperationTemplate->getOstTplId() !== $v) {
            $this->aOperationTemplate = null;
        }


        return $this;
    } // setOperationOstTplId()

    /**
     * Set the value of [op_project_type_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpProjectTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_project_type_id !== $v) {
                    $this->op_project_type_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_PROJECT_TYPE_ID;
                }


        return $this;
    } // setOpProjectTypeId()

    /**
     * Set the value of [op_dc_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDcId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_dc_id !== $v) {
                    $this->op_dc_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_DC_ID;
                }

        if ($this->aUserDC !== null && $this->aUserDC->getUserId() !== $v) {
            $this->aUserDC = null;
        }


        return $this;
    } // setOpDcId()

    /**
     * Set the value of [op_cp_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpCpId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_cp_id !== $v) {
                    $this->op_cp_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_CP_ID;
                }

        if ($this->aUserCP !== null && $this->aUserCP->getUserId() !== $v) {
            $this->aUserCP = null;
        }


        return $this;
    } // setOpCpId()

    /**
     * Set the value of [op_cdp_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpCdpId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_cdp_id !== $v) {
                    $this->op_cdp_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_CDP_ID;
                }

        if ($this->aUserCdp !== null && $this->aUserCdp->getUserId() !== $v) {
            $this->aUserCdp = null;
        }


        return $this;
    } // setOpCdpId()

    /**
     * Set the value of [op_description] column.
     *
     * @param  string $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_description !== $v) {
            $this->op_description = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_DESCRIPTION;
        }


        return $this;
    } // setOpDescription()

    /**
     * Set the value of [op_commentaire] column.
     *
     * @param  string $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpCommentaire($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_commentaire !== $v) {
            $this->op_commentaire = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_COMMENTAIRE;
        }


        return $this;
    } // setOpCommentaire()

    /**
     * Set the value of [op_modalite] column.
     *
     * @param  string $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpModalite($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_modalite !== $v) {
            $this->op_modalite = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_MODALITE;
        }


        return $this;
    } // setOpModalite()

    /**
     * Sets the value of [op_stamp_start] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setOpStampStart($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_stamp_start !== null || $dt !== null) {
            $currentDateAsString = ($this->op_stamp_start !== null && $tmpDt = new DateTime($this->op_stamp_start)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_stamp_start = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::OP_STAMP_START;
            }
        } // if either are not null


        return $this;
    } // setOpStampStart()

    /**
     * Sets the value of [op_stamp_end] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setOpStampEnd($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_stamp_end !== null || $dt !== null) {
            $currentDateAsString = ($this->op_stamp_end !== null && $tmpDt = new DateTime($this->op_stamp_end)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_stamp_end = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::OP_STAMP_END;
            }
        } // if either are not null


        return $this;
    } // setOpStampEnd()

    /**
     * Sets the value of [op_stamp_close] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setOpStampClose($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_stamp_close !== null || $dt !== null) {
            $currentDateAsString = ($this->op_stamp_close !== null && $tmpDt = new DateTime($this->op_stamp_close)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_stamp_close = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::OP_STAMP_CLOSE;
            }
        } // if either are not null


        return $this;
    } // setOpStampClose()

    /**
     * Sets the value of [op_dateconso_start] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDateconsoStart($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_dateconso_start !== null || $dt !== null) {
            $currentDateAsString = ($this->op_dateconso_start !== null && $tmpDt = new DateTime($this->op_dateconso_start)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_dateconso_start = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::OP_DATECONSO_START;
            }
        } // if either are not null


        return $this;
    } // setOpDateconsoStart()

    /**
     * Sets the value of [op_dateconso_end] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDateconsoEnd($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_dateconso_end !== null || $dt !== null) {
            $currentDateAsString = ($this->op_dateconso_end !== null && $tmpDt = new DateTime($this->op_dateconso_end)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_dateconso_end = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::OP_DATECONSO_END;
            }
        } // if either are not null


        return $this;
    } // setOpDateconsoEnd()

    /**
     * Sets the value of [op_dateposte_end] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDateposteEnd($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_dateposte_end !== null || $dt !== null) {
            $currentDateAsString = ($this->op_dateposte_end !== null && $tmpDt = new DateTime($this->op_dateposte_end)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_dateposte_end = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::OP_DATEPOSTE_END;
            }
        } // if either are not null


        return $this;
    } // setOpDateposteEnd()

    /**
     * Set the value of [op_status_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpStatusId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_status_id !== $v) {
                    $this->op_status_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_STATUS_ID;
                }

        if ($this->aROperationStatus !== null && $this->aROperationStatus->getOsId() !== $v) {
            $this->aROperationStatus = null;
        }


        return $this;
    } // setOpStatusId()

    /**
     * Sets the value of the [op_use_presta_negoce] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpUsePrestaNegoce($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->op_use_presta_negoce !== $v) {
            $this->op_use_presta_negoce = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_USE_PRESTA_NEGOCE;
        }


        return $this;
    } // setOpUsePrestaNegoce()

    /**
     * Set the value of [op_taux_conversion] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpTauxConversion($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_taux_conversion !== $v) {
                    $this->op_taux_conversion = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_TAUX_CONVERSION;
                }


        return $this;
    } // setOpTauxConversion()

    /**
     * Set the value of [op_delai_trait_courrier_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDelaiTraitCourrierId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_delai_trait_courrier_id !== $v) {
                    $this->op_delai_trait_courrier_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_DELAI_TRAIT_COURRIER_ID;
                }


        return $this;
    } // setOpDelaiTraitCourrierId()

    /**
     * Set the value of [op_delai_devis_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDelaiDevisId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_delai_devis_id !== $v) {
                    $this->op_delai_devis_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_DELAI_DEVIS_ID;
                }

        if ($this->aRDelaiDevis !== null && $this->aRDelaiDevis->getRDelaiDevisId() !== $v) {
            $this->aRDelaiDevis = null;
        }


        return $this;
    } // setOpDelaiDevisId()

    /**
     * Set the value of [op_mails_dest] column.
     *
     * @param  string $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpMailsDest($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_mails_dest !== $v) {
            $this->op_mails_dest = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_MAILS_DEST;
        }


        return $this;
    } // setOpMailsDest()

    /**
     * Sets the value of [op_date_relance_couts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDateRelanceCouts($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_date_relance_couts !== null || $dt !== null) {
            $currentDateAsString = ($this->op_date_relance_couts !== null && $tmpDt = new DateTime($this->op_date_relance_couts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_date_relance_couts = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::OP_DATE_RELANCE_COUTS;
            }
        } // if either are not null


        return $this;
    } // setOpDateRelanceCouts()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setUserId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->user_id !== $v) {
                    $this->user_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::USER_ID;
                }


        return $this;
    } // setUserId()

    /**
     * Set the value of [user_modify] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setUserModify($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->user_modify !== $v) {
                    $this->user_modify = $v;
                    $this->modifiedColumns[] = OperationsPeer::USER_MODIFY;
                }


        return $this;
    } // setUserModify()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

    /**
     * Set the value of [actif] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setActif($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->actif !== $v) {
                    $this->actif = $v;
                    $this->modifiedColumns[] = OperationsPeer::ACTIF;
                }


        return $this;
    } // setActif()

    /**
     * Set the value of [op_cgv_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpCgvId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_cgv_id !== $v) {
                    $this->op_cgv_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_CGV_ID;
                }


        return $this;
    } // setOpCgvId()

    /**
     * Set the value of [op_freq_stat_mail_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpFreqStatMailId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_freq_stat_mail_id !== $v) {
                    $this->op_freq_stat_mail_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_FREQ_STAT_MAIL_ID;
                }


        return $this;
    } // setOpFreqStatMailId()

    /**
     * Sets the value of [op_date_last_send_stat] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDateLastSendStat($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_date_last_send_stat !== null || $dt !== null) {
            $currentDateAsString = ($this->op_date_last_send_stat !== null && $tmpDt = new DateTime($this->op_date_last_send_stat)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_date_last_send_stat = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::OP_DATE_LAST_SEND_STAT;
            }
        } // if either are not null


        return $this;
    } // setOpDateLastSendStat()

    /**
     * Sets the value of the [op_attach_file_stats_excel] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpAttachFileStatsExcel($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->op_attach_file_stats_excel !== $v) {
            $this->op_attach_file_stats_excel = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_ATTACH_FILE_STATS_EXCEL;
        }


        return $this;
    } // setOpAttachFileStatsExcel()

    /**
     * Set the value of [op_devis_lang] column.
     *
     * @param  string $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDevisLang($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_devis_lang !== $v) {
            $this->op_devis_lang = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_DEVIS_LANG;
        }


        return $this;
    } // setOpDevisLang()

    /**
     * Set the value of [op_brief_log] column.
     *
     * @param  string $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpBriefLog($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_brief_log !== $v) {
            $this->op_brief_log = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_BRIEF_LOG;
        }


        return $this;
    } // setOpBriefLog()

    /**
     * Sets the value of the [op_has_mail_archiv_sent] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpHasMailArchivSent($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->op_has_mail_archiv_sent !== $v) {
            $this->op_has_mail_archiv_sent = $v;
            $this->modifiedColumns[] = OperationsPeer::OP_HAS_MAIL_ARCHIV_SENT;
        }


        return $this;
    } // setOpHasMailArchivSent()

    /**
     * Set the value of [cl_site_id_for_log] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setClSiteIdForLog($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_site_id_for_log !== $v) {
                    $this->cl_site_id_for_log = $v;
                    $this->modifiedColumns[] = OperationsPeer::CL_SITE_ID_FOR_LOG;
                }

        if ($this->aClientSiteForLog !== null && $this->aClientSiteForLog->getClSiteId() !== $v) {
            $this->aClientSiteForLog = null;
        }


        return $this;
    } // setClSiteIdForLog()

    /**
     * Sets the value of [op_date_last_compil_data] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDateLastCompilData($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_date_last_compil_data !== null || $dt !== null) {
            $currentDateAsString = ($this->op_date_last_compil_data !== null && $tmpDt = new DateTime($this->op_date_last_compil_data)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_date_last_compil_data = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::OP_DATE_LAST_COMPIL_DATA;
            }
        } // if either are not null


        return $this;
    } // setOpDateLastCompilData()

    /**
     * Set the value of [op_ct_fact_addr_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpCtFactAddrId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_ct_fact_addr_id !== $v) {
                    $this->op_ct_fact_addr_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_CT_FACT_ADDR_ID;
                }

        if ($this->aInvoicingAddressContact !== null && $this->aInvoicingAddressContact->getCtId() !== $v) {
            $this->aInvoicingAddressContact = null;
        }


        return $this;
    } // setOpCtFactAddrId()

    /**
     * Set the value of [op_parent_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpParentId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_parent_id !== $v) {
                    $this->op_parent_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_PARENT_ID;
                }

        if ($this->aOperationsRelatedByOpParentId !== null && $this->aOperationsRelatedByOpParentId->getOpId() !== $v) {
            $this->aOperationsRelatedByOpParentId = null;
        }


        return $this;
    } // setOpParentId()

    /**
     * Sets the value of [op_date_archivage_end] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Operations The current object (for fluent API support)
     */
    public function setOpDateArchivageEnd($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_date_archivage_end !== null || $dt !== null) {
            $currentDateAsString = ($this->op_date_archivage_end !== null && $tmpDt = new DateTime($this->op_date_archivage_end)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_date_archivage_end = $newDateAsString;
                $this->modifiedColumns[] = OperationsPeer::OP_DATE_ARCHIVAGE_END;
            }
        } // if either are not null


        return $this;
    } // setOpDateArchivageEnd()

    /**
     * Set the value of [op_classification_id] column.
     *
     * @param  int $v new value
     * @return Operations The current object (for fluent API support)
     */
    public function setOpClassificationId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_classification_id !== $v) {
                    $this->op_classification_id = $v;
                    $this->modifiedColumns[] = OperationsPeer::OP_CLASSIFICATION_ID;
                }

        if ($this->aROperationClassifications !== null && $this->aROperationClassifications->getROperationClassificationId() !== $v) {
            $this->aROperationClassifications = null;
        }


        return $this;
    } // setOpClassificationId()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->op_use_presta_negoce !== false) {
                return false;
            }

            if ($this->op_attach_file_stats_excel !== false) {
                return false;
            }

            if ($this->op_has_mail_archiv_sent !== false) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->op_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_number = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->op_cl_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->op_ct_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->op_ct_fact_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->op_libelle = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->op_type_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->op_subtype_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->op_act_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->operation_universe_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->operation_media_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->operation_ost_tpl_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->op_project_type_id = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->op_dc_id = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->op_cp_id = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->op_cdp_id = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->op_description = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->op_commentaire = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->op_modalite = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->op_stamp_start = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->op_stamp_end = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->op_stamp_close = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->op_dateconso_start = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->op_dateconso_end = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->op_dateposte_end = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->op_status_id = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->op_use_presta_negoce = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
            $this->op_taux_conversion = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->op_delai_trait_courrier_id = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->op_delai_devis_id = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->op_mails_dest = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->op_date_relance_couts = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->user_id = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->user_modify = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->date_create = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->date_modify = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->actif = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->op_cgv_id = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->op_freq_stat_mail_id = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->op_date_last_send_stat = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->op_attach_file_stats_excel = ($row[$startcol + 40] !== null) ? (boolean) $row[$startcol + 40] : null;
            $this->op_devis_lang = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->op_brief_log = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->op_has_mail_archiv_sent = ($row[$startcol + 43] !== null) ? (boolean) $row[$startcol + 43] : null;
            $this->cl_site_id_for_log = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->op_date_last_compil_data = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->op_ct_fact_addr_id = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->op_parent_id = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->op_date_archivage_end = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->op_classification_id = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 50; // 50 = OperationsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Operations object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aGedelogOperationParams !== null && $this->op_id !== $this->aGedelogOperationParams->getOpId()) {
            $this->aGedelogOperationParams = null;
        }
        if ($this->aOperationsExt !== null && $this->op_id !== $this->aOperationsExt->getOpId()) {
            $this->aOperationsExt = null;
        }
        if ($this->aClients !== null && $this->op_cl_id !== $this->aClients->getClId()) {
            $this->aClients = null;
        }
        if ($this->aClientFactureOptions !== null && $this->op_cl_id !== $this->aClientFactureOptions->getClId()) {
            $this->aClientFactureOptions = null;
        }
        if ($this->aClientContratOptions !== null && $this->op_cl_id !== $this->aClientContratOptions->getClId()) {
            $this->aClientContratOptions = null;
        }
        if ($this->aContactClient !== null && $this->op_ct_id !== $this->aContactClient->getCtId()) {
            $this->aContactClient = null;
        }
        if ($this->aContactFacturation !== null && $this->op_ct_fact_id !== $this->aContactFacturation->getCtId()) {
            $this->aContactFacturation = null;
        }
        if ($this->aROperationType !== null && $this->op_type_id !== $this->aROperationType->getOtId()) {
            $this->aROperationType = null;
        }
        if ($this->aROperationTypeSub !== null && $this->op_subtype_id !== $this->aROperationTypeSub->getOstId()) {
            $this->aROperationTypeSub = null;
        }
        if ($this->aRCustomActivites !== null && $this->op_act_id !== $this->aRCustomActivites->getActId()) {
            $this->aRCustomActivites = null;
        }
        if ($this->aOperationUniverse !== null && $this->operation_universe_id !== $this->aOperationUniverse->getROperationUniverseId()) {
            $this->aOperationUniverse = null;
        }
        if ($this->aOperationMedia !== null && $this->operation_media_id !== $this->aOperationMedia->getROperationMediaId()) {
            $this->aOperationMedia = null;
        }
        if ($this->aOperationTemplate !== null && $this->operation_ost_tpl_id !== $this->aOperationTemplate->getOstTplId()) {
            $this->aOperationTemplate = null;
        }
        if ($this->aUserDC !== null && $this->op_dc_id !== $this->aUserDC->getUserId()) {
            $this->aUserDC = null;
        }
        if ($this->aUserCP !== null && $this->op_cp_id !== $this->aUserCP->getUserId()) {
            $this->aUserCP = null;
        }
        if ($this->aUserCdp !== null && $this->op_cdp_id !== $this->aUserCdp->getUserId()) {
            $this->aUserCdp = null;
        }
        if ($this->aROperationStatus !== null && $this->op_status_id !== $this->aROperationStatus->getOsId()) {
            $this->aROperationStatus = null;
        }
        if ($this->aRDelaiDevis !== null && $this->op_delai_devis_id !== $this->aRDelaiDevis->getRDelaiDevisId()) {
            $this->aRDelaiDevis = null;
        }
        if ($this->aClientSiteForLog !== null && $this->cl_site_id_for_log !== $this->aClientSiteForLog->getClSiteId()) {
            $this->aClientSiteForLog = null;
        }
        if ($this->aInvoicingAddressContact !== null && $this->op_ct_fact_addr_id !== $this->aInvoicingAddressContact->getCtId()) {
            $this->aInvoicingAddressContact = null;
        }
        if ($this->aOperationsRelatedByOpParentId !== null && $this->op_parent_id !== $this->aOperationsRelatedByOpParentId->getOpId()) {
            $this->aOperationsRelatedByOpParentId = null;
        }
        if ($this->aROperationClassifications !== null && $this->op_classification_id !== $this->aROperationClassifications->getROperationClassificationId()) {
            $this->aROperationClassifications = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aClients = null;
            $this->aContactClient = null;
            $this->aContactFacturation = null;
            $this->aUserDC = null;
            $this->aUserCP = null;
            $this->aUserCdp = null;
            $this->aClientFactureOptions = null;
            $this->aClientContratOptions = null;
            $this->aClientSiteForLog = null;
            $this->aGedelogOperationParams = null;
            $this->aROperationStatus = null;
            $this->aRCustomActivites = null;
            $this->aROperationType = null;
            $this->aROperationTypeSub = null;
            $this->aOperationsExt = null;
            $this->aRDelaiDevis = null;
            $this->aInvoicingAddressContact = null;
            $this->aOperationsRelatedByOpParentId = null;
            $this->aOperationUniverse = null;
            $this->aOperationMedia = null;
            $this->aOperationTemplate = null;
            $this->aROperationClassifications = null;
            $this->collFacturess = null;

            $this->collLnkOperationOptions = null;

            $this->collLnkOperationsContactsMails = null;

            $this->collLnkOperationCountrys = null;

            $this->collOperationDecouvertss = null;

            $this->collOperationPrestationss = null;

            $this->collOperationPrimess = null;

            $this->collOperationRubriquess = null;

            $this->collOperationScenariis = null;

            $this->collOperationStatutss = null;

            $this->collOperationTaskss = null;

            $this->collOperationssRelatedByOpId = null;

            $this->collPlanFacturationDetailss = null;

            $this->collPlanFacturationParamss = null;

            $this->collFactureEditionHistorys = null;

            $this->collRRubriquesTypes = null;
            $this->collRTvaTypes = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationsQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setDateCreate(time());
                
                                $this->setActif(1);
                
                                $this->setUserId(Zend_Auth::getInstance()->getStorage()->read()->getUserId());

            } else {
                $ret = $ret && $this->preUpdate($con);
                // log behavior
                
                                $this->setDateModify(time());
                
                                $this->setUserModify(Zend_Auth::getInstance()->getStorage()->read()->getUserId());

            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                OperationsPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aClients !== null) {
                if ($this->aClients->isModified() || $this->aClients->isNew()) {
                    $affectedRows += $this->aClients->save($con);
                }
                $this->setClients($this->aClients);
            }

            if ($this->aContactClient !== null) {
                if ($this->aContactClient->isModified() || $this->aContactClient->isNew()) {
                    $affectedRows += $this->aContactClient->save($con);
                }
                $this->setContactClient($this->aContactClient);
            }

            if ($this->aContactFacturation !== null) {
                if ($this->aContactFacturation->isModified() || $this->aContactFacturation->isNew()) {
                    $affectedRows += $this->aContactFacturation->save($con);
                }
                $this->setContactFacturation($this->aContactFacturation);
            }

            if ($this->aUserDC !== null) {
                if ($this->aUserDC->isModified() || $this->aUserDC->isNew()) {
                    $affectedRows += $this->aUserDC->save($con);
                }
                $this->setUserDC($this->aUserDC);
            }

            if ($this->aUserCP !== null) {
                if ($this->aUserCP->isModified() || $this->aUserCP->isNew()) {
                    $affectedRows += $this->aUserCP->save($con);
                }
                $this->setUserCP($this->aUserCP);
            }

            if ($this->aUserCdp !== null) {
                if ($this->aUserCdp->isModified() || $this->aUserCdp->isNew()) {
                    $affectedRows += $this->aUserCdp->save($con);
                }
                $this->setUserCdp($this->aUserCdp);
            }

            if ($this->aClientFactureOptions !== null) {
                if ($this->aClientFactureOptions->isModified() || $this->aClientFactureOptions->isNew()) {
                    $affectedRows += $this->aClientFactureOptions->save($con);
                }
                $this->setClientFactureOptions($this->aClientFactureOptions);
            }

            if ($this->aClientContratOptions !== null) {
                if ($this->aClientContratOptions->isModified() || $this->aClientContratOptions->isNew()) {
                    $affectedRows += $this->aClientContratOptions->save($con);
                }
                $this->setClientContratOptions($this->aClientContratOptions);
            }

            if ($this->aClientSiteForLog !== null) {
                if ($this->aClientSiteForLog->isModified() || $this->aClientSiteForLog->isNew()) {
                    $affectedRows += $this->aClientSiteForLog->save($con);
                }
                $this->setClientSiteForLog($this->aClientSiteForLog);
            }

            if ($this->aGedelogOperationParams !== null) {
                if ($this->aGedelogOperationParams->isModified() || $this->aGedelogOperationParams->isNew()) {
                    $affectedRows += $this->aGedelogOperationParams->save($con);
                }
                $this->setGedelogOperationParams($this->aGedelogOperationParams);
            }

            if ($this->aROperationStatus !== null) {
                if ($this->aROperationStatus->isModified() || $this->aROperationStatus->isNew()) {
                    $affectedRows += $this->aROperationStatus->save($con);
                }
                $this->setROperationStatus($this->aROperationStatus);
            }

            if ($this->aRCustomActivites !== null) {
                if ($this->aRCustomActivites->isModified() || $this->aRCustomActivites->isNew()) {
                    $affectedRows += $this->aRCustomActivites->save($con);
                }
                $this->setRCustomActivites($this->aRCustomActivites);
            }

            if ($this->aROperationType !== null) {
                if ($this->aROperationType->isModified() || $this->aROperationType->isNew()) {
                    $affectedRows += $this->aROperationType->save($con);
                }
                $this->setROperationType($this->aROperationType);
            }

            if ($this->aROperationTypeSub !== null) {
                if ($this->aROperationTypeSub->isModified() || $this->aROperationTypeSub->isNew()) {
                    $affectedRows += $this->aROperationTypeSub->save($con);
                }
                $this->setROperationTypeSub($this->aROperationTypeSub);
            }

            if ($this->aOperationsExt !== null) {
                if ($this->aOperationsExt->isModified() || $this->aOperationsExt->isNew()) {
                    $affectedRows += $this->aOperationsExt->save($con);
                }
                $this->setOperationsExt($this->aOperationsExt);
            }

            if ($this->aRDelaiDevis !== null) {
                if ($this->aRDelaiDevis->isModified() || $this->aRDelaiDevis->isNew()) {
                    $affectedRows += $this->aRDelaiDevis->save($con);
                }
                $this->setRDelaiDevis($this->aRDelaiDevis);
            }

            if ($this->aInvoicingAddressContact !== null) {
                if ($this->aInvoicingAddressContact->isModified() || $this->aInvoicingAddressContact->isNew()) {
                    $affectedRows += $this->aInvoicingAddressContact->save($con);
                }
                $this->setInvoicingAddressContact($this->aInvoicingAddressContact);
            }

            if ($this->aOperationsRelatedByOpParentId !== null) {
                if ($this->aOperationsRelatedByOpParentId->isModified() || $this->aOperationsRelatedByOpParentId->isNew()) {
                    $affectedRows += $this->aOperationsRelatedByOpParentId->save($con);
                }
                $this->setOperationsRelatedByOpParentId($this->aOperationsRelatedByOpParentId);
            }

            if ($this->aOperationUniverse !== null) {
                if ($this->aOperationUniverse->isModified() || $this->aOperationUniverse->isNew()) {
                    $affectedRows += $this->aOperationUniverse->save($con);
                }
                $this->setOperationUniverse($this->aOperationUniverse);
            }

            if ($this->aOperationMedia !== null) {
                if ($this->aOperationMedia->isModified() || $this->aOperationMedia->isNew()) {
                    $affectedRows += $this->aOperationMedia->save($con);
                }
                $this->setOperationMedia($this->aOperationMedia);
            }

            if ($this->aOperationTemplate !== null) {
                if ($this->aOperationTemplate->isModified() || $this->aOperationTemplate->isNew()) {
                    $affectedRows += $this->aOperationTemplate->save($con);
                }
                $this->setOperationTemplate($this->aOperationTemplate);
            }

            if ($this->aROperationClassifications !== null) {
                if ($this->aROperationClassifications->isModified() || $this->aROperationClassifications->isNew()) {
                    $affectedRows += $this->aROperationClassifications->save($con);
                }
                $this->setROperationClassifications($this->aROperationClassifications);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->rRubriquesTypesScheduledForDeletion !== null) {
                if (!$this->rRubriquesTypesScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    $pk = $this->getPrimaryKey();
                    foreach ($this->rRubriquesTypesScheduledForDeletion->getPrimaryKeys(false) as $remotePk) {
                        $pks[] = array($pk, $remotePk);
                    }
                    OperationRubriquesQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);
                    $this->rRubriquesTypesScheduledForDeletion = null;
                }

                foreach ($this->getRRubriquesTypes() as $rRubriquesType) {
                    if ($rRubriquesType->isModified()) {
                        $rRubriquesType->save($con);
                    }
                }
            } elseif ($this->collRRubriquesTypes) {
                foreach ($this->collRRubriquesTypes as $rRubriquesType) {
                    if ($rRubriquesType->isModified()) {
                        $rRubriquesType->save($con);
                    }
                }
            }

            if ($this->rTvaTypesScheduledForDeletion !== null) {
                if (!$this->rTvaTypesScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    $pk = $this->getPrimaryKey();
                    foreach ($this->rTvaTypesScheduledForDeletion->getPrimaryKeys(false) as $remotePk) {
                        $pks[] = array($pk, $remotePk);
                    }
                    OperationRubriquesQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);
                    $this->rTvaTypesScheduledForDeletion = null;
                }

                foreach ($this->getRTvaTypes() as $rTvaType) {
                    if ($rTvaType->isModified()) {
                        $rTvaType->save($con);
                    }
                }
            } elseif ($this->collRTvaTypes) {
                foreach ($this->collRTvaTypes as $rTvaType) {
                    if ($rTvaType->isModified()) {
                        $rTvaType->save($con);
                    }
                }
            }

            if ($this->facturessScheduledForDeletion !== null) {
                if (!$this->facturessScheduledForDeletion->isEmpty()) {
                    FacturesQuery::create()
                        ->filterByPrimaryKeys($this->facturessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->facturessScheduledForDeletion = null;
                }
            }

            if ($this->collFacturess !== null) {
                foreach ($this->collFacturess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkOperationOptionsScheduledForDeletion !== null) {
                if (!$this->lnkOperationOptionsScheduledForDeletion->isEmpty()) {
                    LnkOperationOptionQuery::create()
                        ->filterByPrimaryKeys($this->lnkOperationOptionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkOperationOptionsScheduledForDeletion = null;
                }
            }

            if ($this->collLnkOperationOptions !== null) {
                foreach ($this->collLnkOperationOptions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkOperationsContactsMailsScheduledForDeletion !== null) {
                if (!$this->lnkOperationsContactsMailsScheduledForDeletion->isEmpty()) {
                    LnkOperationsContactsMailQuery::create()
                        ->filterByPrimaryKeys($this->lnkOperationsContactsMailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkOperationsContactsMailsScheduledForDeletion = null;
                }
            }

            if ($this->collLnkOperationsContactsMails !== null) {
                foreach ($this->collLnkOperationsContactsMails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkOperationCountrysScheduledForDeletion !== null) {
                if (!$this->lnkOperationCountrysScheduledForDeletion->isEmpty()) {
                    LnkOperationCountryQuery::create()
                        ->filterByPrimaryKeys($this->lnkOperationCountrysScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkOperationCountrysScheduledForDeletion = null;
                }
            }

            if ($this->collLnkOperationCountrys !== null) {
                foreach ($this->collLnkOperationCountrys as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationDecouvertssScheduledForDeletion !== null) {
                if (!$this->operationDecouvertssScheduledForDeletion->isEmpty()) {
                    OperationDecouvertsQuery::create()
                        ->filterByPrimaryKeys($this->operationDecouvertssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->operationDecouvertssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationDecouvertss !== null) {
                foreach ($this->collOperationDecouvertss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationPrestationssScheduledForDeletion !== null) {
                if (!$this->operationPrestationssScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationPrestationssScheduledForDeletion as $operationPrestations) {
                        // need to save related object because we set the relation to null
                        $operationPrestations->save($con);
                    }
                    $this->operationPrestationssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationPrestationss !== null) {
                foreach ($this->collOperationPrestationss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationPrimessScheduledForDeletion !== null) {
                if (!$this->operationPrimessScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationPrimessScheduledForDeletion as $operationPrimes) {
                        // need to save related object because we set the relation to null
                        $operationPrimes->save($con);
                    }
                    $this->operationPrimessScheduledForDeletion = null;
                }
            }

            if ($this->collOperationPrimess !== null) {
                foreach ($this->collOperationPrimess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationRubriquessScheduledForDeletion !== null) {
                if (!$this->operationRubriquessScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationRubriquessScheduledForDeletion as $operationRubriques) {
                        // need to save related object because we set the relation to null
                        $operationRubriques->save($con);
                    }
                    $this->operationRubriquessScheduledForDeletion = null;
                }
            }

            if ($this->collOperationRubriquess !== null) {
                foreach ($this->collOperationRubriquess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationScenariisScheduledForDeletion !== null) {
                if (!$this->operationScenariisScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationScenariisScheduledForDeletion as $operationScenarii) {
                        // need to save related object because we set the relation to null
                        $operationScenarii->save($con);
                    }
                    $this->operationScenariisScheduledForDeletion = null;
                }
            }

            if ($this->collOperationScenariis !== null) {
                foreach ($this->collOperationScenariis as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationStatutssScheduledForDeletion !== null) {
                if (!$this->operationStatutssScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationStatutssScheduledForDeletion as $operationStatuts) {
                        // need to save related object because we set the relation to null
                        $operationStatuts->save($con);
                    }
                    $this->operationStatutssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationStatutss !== null) {
                foreach ($this->collOperationStatutss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationTaskssScheduledForDeletion !== null) {
                if (!$this->operationTaskssScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationTaskssScheduledForDeletion as $operationTasks) {
                        // need to save related object because we set the relation to null
                        $operationTasks->save($con);
                    }
                    $this->operationTaskssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationTaskss !== null) {
                foreach ($this->collOperationTaskss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationssRelatedByOpIdScheduledForDeletion !== null) {
                if (!$this->operationssRelatedByOpIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationssRelatedByOpIdScheduledForDeletion as $operationsRelatedByOpId) {
                        // need to save related object because we set the relation to null
                        $operationsRelatedByOpId->save($con);
                    }
                    $this->operationssRelatedByOpIdScheduledForDeletion = null;
                }
            }

            if ($this->collOperationssRelatedByOpId !== null) {
                foreach ($this->collOperationssRelatedByOpId as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->planFacturationDetailssScheduledForDeletion !== null) {
                if (!$this->planFacturationDetailssScheduledForDeletion->isEmpty()) {
                    PlanFacturationDetailsQuery::create()
                        ->filterByPrimaryKeys($this->planFacturationDetailssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->planFacturationDetailssScheduledForDeletion = null;
                }
            }

            if ($this->collPlanFacturationDetailss !== null) {
                foreach ($this->collPlanFacturationDetailss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->planFacturationParamssScheduledForDeletion !== null) {
                if (!$this->planFacturationParamssScheduledForDeletion->isEmpty()) {
                    PlanFacturationParamsQuery::create()
                        ->filterByPrimaryKeys($this->planFacturationParamssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->planFacturationParamssScheduledForDeletion = null;
                }
            }

            if ($this->collPlanFacturationParamss !== null) {
                foreach ($this->collPlanFacturationParamss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->factureEditionHistorysScheduledForDeletion !== null) {
                if (!$this->factureEditionHistorysScheduledForDeletion->isEmpty()) {
                    FactureEditionHistoryQuery::create()
                        ->filterByPrimaryKeys($this->factureEditionHistorysScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->factureEditionHistorysScheduledForDeletion = null;
                }
            }

            if ($this->collFactureEditionHistorys !== null) {
                foreach ($this->collFactureEditionHistorys as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = OperationsPeer::OP_ID;
        if (null !== $this->op_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OperationsPeer::OP_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationsPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`op_number`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_CL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_cl_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_CT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_ct_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_CT_FACT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_ct_fact_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`op_libelle`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_type_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_SUBTYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_subtype_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_ACT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_act_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OPERATION_UNIVERSE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`operation_universe_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OPERATION_MEDIA_ID)) {
            $modifiedColumns[':p' . $index++]  = '`operation_media_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OPERATION_OST_TPL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`operation_ost_tpl_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_PROJECT_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_project_type_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DC_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_dc_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_CP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_cp_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_CDP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_cdp_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`op_description`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`op_commentaire`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_MODALITE)) {
            $modifiedColumns[':p' . $index++]  = '`op_modalite`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_STAMP_START)) {
            $modifiedColumns[':p' . $index++]  = '`op_stamp_start`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_STAMP_END)) {
            $modifiedColumns[':p' . $index++]  = '`op_stamp_end`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_STAMP_CLOSE)) {
            $modifiedColumns[':p' . $index++]  = '`op_stamp_close`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DATECONSO_START)) {
            $modifiedColumns[':p' . $index++]  = '`op_dateConso_start`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DATECONSO_END)) {
            $modifiedColumns[':p' . $index++]  = '`op_dateConso_end`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DATEPOSTE_END)) {
            $modifiedColumns[':p' . $index++]  = '`op_datePoste_end`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_status_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_USE_PRESTA_NEGOCE)) {
            $modifiedColumns[':p' . $index++]  = '`op_use_presta_negoce`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_TAUX_CONVERSION)) {
            $modifiedColumns[':p' . $index++]  = '`op_taux_conversion`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DELAI_TRAIT_COURRIER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_delai_trait_courrier_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DELAI_DEVIS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_delai_devis_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_MAILS_DEST)) {
            $modifiedColumns[':p' . $index++]  = '`op_mails_dest`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DATE_RELANCE_COUTS)) {
            $modifiedColumns[':p' . $index++]  = '`op_date_relance_couts`';
        }
        if ($this->isColumnModified(OperationsPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(OperationsPeer::USER_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`user_modify`';
        }
        if ($this->isColumnModified(OperationsPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(OperationsPeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }
        if ($this->isColumnModified(OperationsPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_CGV_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_cgv_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_FREQ_STAT_MAIL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_freq_stat_mail_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DATE_LAST_SEND_STAT)) {
            $modifiedColumns[':p' . $index++]  = '`op_date_last_send_stat`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_ATTACH_FILE_STATS_EXCEL)) {
            $modifiedColumns[':p' . $index++]  = '`op_attach_file_stats_excel`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DEVIS_LANG)) {
            $modifiedColumns[':p' . $index++]  = '`op_devis_lang`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_BRIEF_LOG)) {
            $modifiedColumns[':p' . $index++]  = '`op_brief_log`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_HAS_MAIL_ARCHIV_SENT)) {
            $modifiedColumns[':p' . $index++]  = '`op_has_mail_archiv_sent`';
        }
        if ($this->isColumnModified(OperationsPeer::CL_SITE_ID_FOR_LOG)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_id_for_log`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DATE_LAST_COMPIL_DATA)) {
            $modifiedColumns[':p' . $index++]  = '`op_date_last_compil_data`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_CT_FACT_ADDR_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_ct_fact_addr_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_PARENT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_parent_id`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_DATE_ARCHIVAGE_END)) {
            $modifiedColumns[':p' . $index++]  = '`op_date_archivage_end`';
        }
        if ($this->isColumnModified(OperationsPeer::OP_CLASSIFICATION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_classification_id`';
        }

        $sql = sprintf(
            'INSERT INTO `operations` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`op_number`':
                        $stmt->bindValue($identifier, $this->op_number, PDO::PARAM_STR);
                        break;
                    case '`op_cl_id`':
                        $stmt->bindValue($identifier, $this->op_cl_id, PDO::PARAM_INT);
                        break;
                    case '`op_ct_id`':
                        $stmt->bindValue($identifier, $this->op_ct_id, PDO::PARAM_INT);
                        break;
                    case '`op_ct_fact_id`':
                        $stmt->bindValue($identifier, $this->op_ct_fact_id, PDO::PARAM_INT);
                        break;
                    case '`op_libelle`':
                        $stmt->bindValue($identifier, $this->op_libelle, PDO::PARAM_STR);
                        break;
                    case '`op_type_id`':
                        $stmt->bindValue($identifier, $this->op_type_id, PDO::PARAM_INT);
                        break;
                    case '`op_subtype_id`':
                        $stmt->bindValue($identifier, $this->op_subtype_id, PDO::PARAM_INT);
                        break;
                    case '`op_act_id`':
                        $stmt->bindValue($identifier, $this->op_act_id, PDO::PARAM_INT);
                        break;
                    case '`operation_universe_id`':
                        $stmt->bindValue($identifier, $this->operation_universe_id, PDO::PARAM_INT);
                        break;
                    case '`operation_media_id`':
                        $stmt->bindValue($identifier, $this->operation_media_id, PDO::PARAM_INT);
                        break;
                    case '`operation_ost_tpl_id`':
                        $stmt->bindValue($identifier, $this->operation_ost_tpl_id, PDO::PARAM_INT);
                        break;
                    case '`op_project_type_id`':
                        $stmt->bindValue($identifier, $this->op_project_type_id, PDO::PARAM_INT);
                        break;
                    case '`op_dc_id`':
                        $stmt->bindValue($identifier, $this->op_dc_id, PDO::PARAM_INT);
                        break;
                    case '`op_cp_id`':
                        $stmt->bindValue($identifier, $this->op_cp_id, PDO::PARAM_INT);
                        break;
                    case '`op_cdp_id`':
                        $stmt->bindValue($identifier, $this->op_cdp_id, PDO::PARAM_INT);
                        break;
                    case '`op_description`':
                        $stmt->bindValue($identifier, $this->op_description, PDO::PARAM_STR);
                        break;
                    case '`op_commentaire`':
                        $stmt->bindValue($identifier, $this->op_commentaire, PDO::PARAM_STR);
                        break;
                    case '`op_modalite`':
                        $stmt->bindValue($identifier, $this->op_modalite, PDO::PARAM_STR);
                        break;
                    case '`op_stamp_start`':
                        $stmt->bindValue($identifier, $this->op_stamp_start, PDO::PARAM_STR);
                        break;
                    case '`op_stamp_end`':
                        $stmt->bindValue($identifier, $this->op_stamp_end, PDO::PARAM_STR);
                        break;
                    case '`op_stamp_close`':
                        $stmt->bindValue($identifier, $this->op_stamp_close, PDO::PARAM_STR);
                        break;
                    case '`op_dateConso_start`':
                        $stmt->bindValue($identifier, $this->op_dateconso_start, PDO::PARAM_STR);
                        break;
                    case '`op_dateConso_end`':
                        $stmt->bindValue($identifier, $this->op_dateconso_end, PDO::PARAM_STR);
                        break;
                    case '`op_datePoste_end`':
                        $stmt->bindValue($identifier, $this->op_dateposte_end, PDO::PARAM_STR);
                        break;
                    case '`op_status_id`':
                        $stmt->bindValue($identifier, $this->op_status_id, PDO::PARAM_INT);
                        break;
                    case '`op_use_presta_negoce`':
                        $stmt->bindValue($identifier, (int) $this->op_use_presta_negoce, PDO::PARAM_INT);
                        break;
                    case '`op_taux_conversion`':
                        $stmt->bindValue($identifier, $this->op_taux_conversion, PDO::PARAM_INT);
                        break;
                    case '`op_delai_trait_courrier_id`':
                        $stmt->bindValue($identifier, $this->op_delai_trait_courrier_id, PDO::PARAM_INT);
                        break;
                    case '`op_delai_devis_id`':
                        $stmt->bindValue($identifier, $this->op_delai_devis_id, PDO::PARAM_INT);
                        break;
                    case '`op_mails_dest`':
                        $stmt->bindValue($identifier, $this->op_mails_dest, PDO::PARAM_STR);
                        break;
                    case '`op_date_relance_couts`':
                        $stmt->bindValue($identifier, $this->op_date_relance_couts, PDO::PARAM_STR);
                        break;
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`user_modify`':
                        $stmt->bindValue($identifier, $this->user_modify, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`date_modify`':
                        $stmt->bindValue($identifier, $this->date_modify, PDO::PARAM_STR);
                        break;
                    case '`actif`':
                        $stmt->bindValue($identifier, $this->actif, PDO::PARAM_INT);
                        break;
                    case '`op_cgv_id`':
                        $stmt->bindValue($identifier, $this->op_cgv_id, PDO::PARAM_INT);
                        break;
                    case '`op_freq_stat_mail_id`':
                        $stmt->bindValue($identifier, $this->op_freq_stat_mail_id, PDO::PARAM_INT);
                        break;
                    case '`op_date_last_send_stat`':
                        $stmt->bindValue($identifier, $this->op_date_last_send_stat, PDO::PARAM_STR);
                        break;
                    case '`op_attach_file_stats_excel`':
                        $stmt->bindValue($identifier, (int) $this->op_attach_file_stats_excel, PDO::PARAM_INT);
                        break;
                    case '`op_devis_lang`':
                        $stmt->bindValue($identifier, $this->op_devis_lang, PDO::PARAM_STR);
                        break;
                    case '`op_brief_log`':
                        $stmt->bindValue($identifier, $this->op_brief_log, PDO::PARAM_STR);
                        break;
                    case '`op_has_mail_archiv_sent`':
                        $stmt->bindValue($identifier, (int) $this->op_has_mail_archiv_sent, PDO::PARAM_INT);
                        break;
                    case '`cl_site_id_for_log`':
                        $stmt->bindValue($identifier, $this->cl_site_id_for_log, PDO::PARAM_INT);
                        break;
                    case '`op_date_last_compil_data`':
                        $stmt->bindValue($identifier, $this->op_date_last_compil_data, PDO::PARAM_STR);
                        break;
                    case '`op_ct_fact_addr_id`':
                        $stmt->bindValue($identifier, $this->op_ct_fact_addr_id, PDO::PARAM_INT);
                        break;
                    case '`op_parent_id`':
                        $stmt->bindValue($identifier, $this->op_parent_id, PDO::PARAM_INT);
                        break;
                    case '`op_date_archivage_end`':
                        $stmt->bindValue($identifier, $this->op_date_archivage_end, PDO::PARAM_STR);
                        break;
                    case '`op_classification_id`':
                        $stmt->bindValue($identifier, $this->op_classification_id, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setOpId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
    *
    * @param array $columns
    * @return boolean
    */
    public function validate($columns = null)
    {
        $this->preValidate();

        $res = $this->doValidate($columns);

        if(is_array($res)){
            $this->validationFailures = array_merge($res,$this->validationFailures);
        }

        if(count($this->validationFailures)>0){
            return false;
        }else{
            return true;
        }
    }


    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aClients !== null) {
                if (!$this->aClients->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClients->getValidationFailures());
                }
            }

            if ($this->aContactClient !== null) {
                if (!$this->aContactClient->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContactClient->getValidationFailures());
                }
            }

            if ($this->aContactFacturation !== null) {
                if (!$this->aContactFacturation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContactFacturation->getValidationFailures());
                }
            }

            if ($this->aUserDC !== null) {
                if (!$this->aUserDC->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUserDC->getValidationFailures());
                }
            }

            if ($this->aUserCP !== null) {
                if (!$this->aUserCP->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUserCP->getValidationFailures());
                }
            }

            if ($this->aUserCdp !== null) {
                if (!$this->aUserCdp->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUserCdp->getValidationFailures());
                }
            }

            if ($this->aClientFactureOptions !== null) {
                if (!$this->aClientFactureOptions->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClientFactureOptions->getValidationFailures());
                }
            }

            if ($this->aClientContratOptions !== null) {
                if (!$this->aClientContratOptions->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClientContratOptions->getValidationFailures());
                }
            }

            if ($this->aClientSiteForLog !== null) {
                if (!$this->aClientSiteForLog->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClientSiteForLog->getValidationFailures());
                }
            }

            if ($this->aGedelogOperationParams !== null) {
                if (!$this->aGedelogOperationParams->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGedelogOperationParams->getValidationFailures());
                }
            }

            if ($this->aROperationStatus !== null) {
                if (!$this->aROperationStatus->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aROperationStatus->getValidationFailures());
                }
            }

            if ($this->aRCustomActivites !== null) {
                if (!$this->aRCustomActivites->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRCustomActivites->getValidationFailures());
                }
            }

            if ($this->aROperationType !== null) {
                if (!$this->aROperationType->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aROperationType->getValidationFailures());
                }
            }

            if ($this->aROperationTypeSub !== null) {
                if (!$this->aROperationTypeSub->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aROperationTypeSub->getValidationFailures());
                }
            }

            if ($this->aOperationsExt !== null) {
                if (!$this->aOperationsExt->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationsExt->getValidationFailures());
                }
            }

            if ($this->aRDelaiDevis !== null) {
                if (!$this->aRDelaiDevis->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRDelaiDevis->getValidationFailures());
                }
            }

            if ($this->aInvoicingAddressContact !== null) {
                if (!$this->aInvoicingAddressContact->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aInvoicingAddressContact->getValidationFailures());
                }
            }

            if ($this->aOperationsRelatedByOpParentId !== null) {
                if (!$this->aOperationsRelatedByOpParentId->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationsRelatedByOpParentId->getValidationFailures());
                }
            }

            if ($this->aOperationUniverse !== null) {
                if (!$this->aOperationUniverse->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationUniverse->getValidationFailures());
                }
            }

            if ($this->aOperationMedia !== null) {
                if (!$this->aOperationMedia->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationMedia->getValidationFailures());
                }
            }

            if ($this->aOperationTemplate !== null) {
                if (!$this->aOperationTemplate->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationTemplate->getValidationFailures());
                }
            }

            if ($this->aROperationClassifications !== null) {
                if (!$this->aROperationClassifications->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aROperationClassifications->getValidationFailures());
                }
            }


            if (($retval = OperationsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFacturess !== null) {
                    foreach ($this->collFacturess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkOperationOptions !== null) {
                    foreach ($this->collLnkOperationOptions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkOperationsContactsMails !== null) {
                    foreach ($this->collLnkOperationsContactsMails as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkOperationCountrys !== null) {
                    foreach ($this->collLnkOperationCountrys as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationDecouvertss !== null) {
                    foreach ($this->collOperationDecouvertss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationPrestationss !== null) {
                    foreach ($this->collOperationPrestationss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationPrimess !== null) {
                    foreach ($this->collOperationPrimess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationRubriquess !== null) {
                    foreach ($this->collOperationRubriquess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationScenariis !== null) {
                    foreach ($this->collOperationScenariis as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationStatutss !== null) {
                    foreach ($this->collOperationStatutss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationTaskss !== null) {
                    foreach ($this->collOperationTaskss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationssRelatedByOpId !== null) {
                    foreach ($this->collOperationssRelatedByOpId as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPlanFacturationDetailss !== null) {
                    foreach ($this->collPlanFacturationDetailss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPlanFacturationParamss !== null) {
                    foreach ($this->collPlanFacturationParamss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collFactureEditionHistorys !== null) {
                    foreach ($this->collFactureEditionHistorys as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = OperationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getOpId();
                break;
            case 1:
                return $this->getOpNumber();
                break;
            case 2:
                return $this->getOpClId();
                break;
            case 3:
                return $this->getOpCtId();
                break;
            case 4:
                return $this->getOpCtFactId();
                break;
            case 5:
                return $this->getOpLibelle();
                break;
            case 6:
                return $this->getOpTypeId();
                break;
            case 7:
                return $this->getOpSubtypeId();
                break;
            case 8:
                return $this->getOpActId();
                break;
            case 9:
                return $this->getOperationUniverseId();
                break;
            case 10:
                return $this->getOperationMediaId();
                break;
            case 11:
                return $this->getOperationOstTplId();
                break;
            case 12:
                return $this->getOpProjectTypeId();
                break;
            case 13:
                return $this->getOpDcId();
                break;
            case 14:
                return $this->getOpCpId();
                break;
            case 15:
                return $this->getOpCdpId();
                break;
            case 16:
                return $this->getOpDescription();
                break;
            case 17:
                return $this->getOpCommentaire();
                break;
            case 18:
                return $this->getOpModalite();
                break;
            case 19:
                return $this->getOpStampStart();
                break;
            case 20:
                return $this->getOpStampEnd();
                break;
            case 21:
                return $this->getOpStampClose();
                break;
            case 22:
                return $this->getOpDateconsoStart();
                break;
            case 23:
                return $this->getOpDateconsoEnd();
                break;
            case 24:
                return $this->getOpDateposteEnd();
                break;
            case 25:
                return $this->getOpStatusId();
                break;
            case 26:
                return $this->getOpUsePrestaNegoce();
                break;
            case 27:
                return $this->getOpTauxConversion();
                break;
            case 28:
                return $this->getOpDelaiTraitCourrierId();
                break;
            case 29:
                return $this->getOpDelaiDevisId();
                break;
            case 30:
                return $this->getOpMailsDest();
                break;
            case 31:
                return $this->getOpDateRelanceCouts();
                break;
            case 32:
                return $this->getUserId();
                break;
            case 33:
                return $this->getUserModify();
                break;
            case 34:
                return $this->getDateCreate();
                break;
            case 35:
                return $this->getDateModify();
                break;
            case 36:
                return $this->getActif();
                break;
            case 37:
                return $this->getOpCgvId();
                break;
            case 38:
                return $this->getOpFreqStatMailId();
                break;
            case 39:
                return $this->getOpDateLastSendStat();
                break;
            case 40:
                return $this->getOpAttachFileStatsExcel();
                break;
            case 41:
                return $this->getOpDevisLang();
                break;
            case 42:
                return $this->getOpBriefLog();
                break;
            case 43:
                return $this->getOpHasMailArchivSent();
                break;
            case 44:
                return $this->getClSiteIdForLog();
                break;
            case 45:
                return $this->getOpDateLastCompilData();
                break;
            case 46:
                return $this->getOpCtFactAddrId();
                break;
            case 47:
                return $this->getOpParentId();
                break;
            case 48:
                return $this->getOpDateArchivageEnd();
                break;
            case 49:
                return $this->getOpClassificationId();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Operations'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Operations'][$this->getPrimaryKey()] = true;
        $keys = OperationsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOpId(),
            $keys[1] => $this->getOpNumber(),
            $keys[2] => $this->getOpClId(),
            $keys[3] => $this->getOpCtId(),
            $keys[4] => $this->getOpCtFactId(),
            $keys[5] => $this->getOpLibelle(),
            $keys[6] => $this->getOpTypeId(),
            $keys[7] => $this->getOpSubtypeId(),
            $keys[8] => $this->getOpActId(),
            $keys[9] => $this->getOperationUniverseId(),
            $keys[10] => $this->getOperationMediaId(),
            $keys[11] => $this->getOperationOstTplId(),
            $keys[12] => $this->getOpProjectTypeId(),
            $keys[13] => $this->getOpDcId(),
            $keys[14] => $this->getOpCpId(),
            $keys[15] => $this->getOpCdpId(),
            $keys[16] => $this->getOpDescription(),
            $keys[17] => $this->getOpCommentaire(),
            $keys[18] => $this->getOpModalite(),
            $keys[19] => $this->getOpStampStart(),
            $keys[20] => $this->getOpStampEnd(),
            $keys[21] => $this->getOpStampClose(),
            $keys[22] => $this->getOpDateconsoStart(),
            $keys[23] => $this->getOpDateconsoEnd(),
            $keys[24] => $this->getOpDateposteEnd(),
            $keys[25] => $this->getOpStatusId(),
            $keys[26] => $this->getOpUsePrestaNegoce(),
            $keys[27] => $this->getOpTauxConversion(),
            $keys[28] => $this->getOpDelaiTraitCourrierId(),
            $keys[29] => $this->getOpDelaiDevisId(),
            $keys[30] => $this->getOpMailsDest(),
            $keys[31] => $this->getOpDateRelanceCouts(),
            $keys[32] => $this->getUserId(),
            $keys[33] => $this->getUserModify(),
            $keys[34] => $this->getDateCreate(),
            $keys[35] => $this->getDateModify(),
            $keys[36] => $this->getActif(),
            $keys[37] => $this->getOpCgvId(),
            $keys[38] => $this->getOpFreqStatMailId(),
            $keys[39] => $this->getOpDateLastSendStat(),
            $keys[40] => $this->getOpAttachFileStatsExcel(),
            $keys[41] => $this->getOpDevisLang(),
            $keys[42] => $this->getOpBriefLog(),
            $keys[43] => $this->getOpHasMailArchivSent(),
            $keys[44] => $this->getClSiteIdForLog(),
            $keys[45] => $this->getOpDateLastCompilData(),
            $keys[46] => $this->getOpCtFactAddrId(),
            $keys[47] => $this->getOpParentId(),
            $keys[48] => $this->getOpDateArchivageEnd(),
            $keys[49] => $this->getOpClassificationId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aClients) {
                $result['Clients'] = $this->aClients->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aContactClient) {
                $result['ContactClient'] = $this->aContactClient->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aContactFacturation) {
                $result['ContactFacturation'] = $this->aContactFacturation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUserDC) {
                $result['UserDC'] = $this->aUserDC->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUserCP) {
                $result['UserCP'] = $this->aUserCP->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUserCdp) {
                $result['UserCdp'] = $this->aUserCdp->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aClientFactureOptions) {
                $result['ClientFactureOptions'] = $this->aClientFactureOptions->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aClientContratOptions) {
                $result['ClientContratOptions'] = $this->aClientContratOptions->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aClientSiteForLog) {
                $result['ClientSiteForLog'] = $this->aClientSiteForLog->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGedelogOperationParams) {
                $result['GedelogOperationParams'] = $this->aGedelogOperationParams->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aROperationStatus) {
                $result['ROperationStatus'] = $this->aROperationStatus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRCustomActivites) {
                $result['RCustomActivites'] = $this->aRCustomActivites->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aROperationType) {
                $result['ROperationType'] = $this->aROperationType->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aROperationTypeSub) {
                $result['ROperationTypeSub'] = $this->aROperationTypeSub->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationsExt) {
                $result['OperationsExt'] = $this->aOperationsExt->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRDelaiDevis) {
                $result['RDelaiDevis'] = $this->aRDelaiDevis->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvoicingAddressContact) {
                $result['InvoicingAddressContact'] = $this->aInvoicingAddressContact->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationsRelatedByOpParentId) {
                $result['OperationsRelatedByOpParentId'] = $this->aOperationsRelatedByOpParentId->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationUniverse) {
                $result['OperationUniverse'] = $this->aOperationUniverse->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationMedia) {
                $result['OperationMedia'] = $this->aOperationMedia->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationTemplate) {
                $result['OperationTemplate'] = $this->aOperationTemplate->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aROperationClassifications) {
                $result['ROperationClassifications'] = $this->aROperationClassifications->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collFacturess) {
                $result['Facturess'] = $this->collFacturess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkOperationOptions) {
                $result['LnkOperationOptions'] = $this->collLnkOperationOptions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkOperationsContactsMails) {
                $result['LnkOperationsContactsMails'] = $this->collLnkOperationsContactsMails->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkOperationCountrys) {
                $result['LnkOperationCountrys'] = $this->collLnkOperationCountrys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationDecouvertss) {
                $result['OperationDecouvertss'] = $this->collOperationDecouvertss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationPrestationss) {
                $result['OperationPrestationss'] = $this->collOperationPrestationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationPrimess) {
                $result['OperationPrimess'] = $this->collOperationPrimess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationRubriquess) {
                $result['OperationRubriquess'] = $this->collOperationRubriquess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationScenariis) {
                $result['OperationScenariis'] = $this->collOperationScenariis->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationStatutss) {
                $result['OperationStatutss'] = $this->collOperationStatutss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationTaskss) {
                $result['OperationTaskss'] = $this->collOperationTaskss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationssRelatedByOpId) {
                $result['OperationssRelatedByOpId'] = $this->collOperationssRelatedByOpId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPlanFacturationDetailss) {
                $result['PlanFacturationDetailss'] = $this->collPlanFacturationDetailss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPlanFacturationParamss) {
                $result['PlanFacturationParamss'] = $this->collPlanFacturationParamss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collFactureEditionHistorys) {
                $result['FactureEditionHistorys'] = $this->collFactureEditionHistorys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = OperationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOpId($value);
                break;
            case 1:
                $this->setOpNumber($value);
                break;
            case 2:
                $this->setOpClId($value);
                break;
            case 3:
                $this->setOpCtId($value);
                break;
            case 4:
                $this->setOpCtFactId($value);
                break;
            case 5:
                $this->setOpLibelle($value);
                break;
            case 6:
                $this->setOpTypeId($value);
                break;
            case 7:
                $this->setOpSubtypeId($value);
                break;
            case 8:
                $this->setOpActId($value);
                break;
            case 9:
                $this->setOperationUniverseId($value);
                break;
            case 10:
                $this->setOperationMediaId($value);
                break;
            case 11:
                $this->setOperationOstTplId($value);
                break;
            case 12:
                $this->setOpProjectTypeId($value);
                break;
            case 13:
                $this->setOpDcId($value);
                break;
            case 14:
                $this->setOpCpId($value);
                break;
            case 15:
                $this->setOpCdpId($value);
                break;
            case 16:
                $this->setOpDescription($value);
                break;
            case 17:
                $this->setOpCommentaire($value);
                break;
            case 18:
                $this->setOpModalite($value);
                break;
            case 19:
                $this->setOpStampStart($value);
                break;
            case 20:
                $this->setOpStampEnd($value);
                break;
            case 21:
                $this->setOpStampClose($value);
                break;
            case 22:
                $this->setOpDateconsoStart($value);
                break;
            case 23:
                $this->setOpDateconsoEnd($value);
                break;
            case 24:
                $this->setOpDateposteEnd($value);
                break;
            case 25:
                $this->setOpStatusId($value);
                break;
            case 26:
                $this->setOpUsePrestaNegoce($value);
                break;
            case 27:
                $this->setOpTauxConversion($value);
                break;
            case 28:
                $this->setOpDelaiTraitCourrierId($value);
                break;
            case 29:
                $this->setOpDelaiDevisId($value);
                break;
            case 30:
                $this->setOpMailsDest($value);
                break;
            case 31:
                $this->setOpDateRelanceCouts($value);
                break;
            case 32:
                $this->setUserId($value);
                break;
            case 33:
                $this->setUserModify($value);
                break;
            case 34:
                $this->setDateCreate($value);
                break;
            case 35:
                $this->setDateModify($value);
                break;
            case 36:
                $this->setActif($value);
                break;
            case 37:
                $this->setOpCgvId($value);
                break;
            case 38:
                $this->setOpFreqStatMailId($value);
                break;
            case 39:
                $this->setOpDateLastSendStat($value);
                break;
            case 40:
                $this->setOpAttachFileStatsExcel($value);
                break;
            case 41:
                $this->setOpDevisLang($value);
                break;
            case 42:
                $this->setOpBriefLog($value);
                break;
            case 43:
                $this->setOpHasMailArchivSent($value);
                break;
            case 44:
                $this->setClSiteIdForLog($value);
                break;
            case 45:
                $this->setOpDateLastCompilData($value);
                break;
            case 46:
                $this->setOpCtFactAddrId($value);
                break;
            case 47:
                $this->setOpParentId($value);
                break;
            case 48:
                $this->setOpDateArchivageEnd($value);
                break;
            case 49:
                $this->setOpClassificationId($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = OperationsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOpId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpNumber($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOpClId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOpCtId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOpCtFactId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOpLibelle($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOpTypeId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOpSubtypeId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOpActId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setOperationUniverseId($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setOperationMediaId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setOperationOstTplId($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setOpProjectTypeId($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOpDcId($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOpCpId($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setOpCdpId($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setOpDescription($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setOpCommentaire($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOpModalite($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setOpStampStart($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setOpStampEnd($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setOpStampClose($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setOpDateconsoStart($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setOpDateconsoEnd($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setOpDateposteEnd($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setOpStatusId($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setOpUsePrestaNegoce($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setOpTauxConversion($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setOpDelaiTraitCourrierId($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setOpDelaiDevisId($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setOpMailsDest($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setOpDateRelanceCouts($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setUserId($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setUserModify($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDateCreate($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDateModify($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setActif($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setOpCgvId($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setOpFreqStatMailId($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setOpDateLastSendStat($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setOpAttachFileStatsExcel($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setOpDevisLang($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setOpBriefLog($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setOpHasMailArchivSent($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setClSiteIdForLog($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setOpDateLastCompilData($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setOpCtFactAddrId($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setOpParentId($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setOpDateArchivageEnd($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setOpClassificationId($arr[$keys[49]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationsPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationsPeer::OP_ID)) $criteria->add(OperationsPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(OperationsPeer::OP_NUMBER)) $criteria->add(OperationsPeer::OP_NUMBER, $this->op_number);
        if ($this->isColumnModified(OperationsPeer::OP_CL_ID)) $criteria->add(OperationsPeer::OP_CL_ID, $this->op_cl_id);
        if ($this->isColumnModified(OperationsPeer::OP_CT_ID)) $criteria->add(OperationsPeer::OP_CT_ID, $this->op_ct_id);
        if ($this->isColumnModified(OperationsPeer::OP_CT_FACT_ID)) $criteria->add(OperationsPeer::OP_CT_FACT_ID, $this->op_ct_fact_id);
        if ($this->isColumnModified(OperationsPeer::OP_LIBELLE)) $criteria->add(OperationsPeer::OP_LIBELLE, $this->op_libelle);
        if ($this->isColumnModified(OperationsPeer::OP_TYPE_ID)) $criteria->add(OperationsPeer::OP_TYPE_ID, $this->op_type_id);
        if ($this->isColumnModified(OperationsPeer::OP_SUBTYPE_ID)) $criteria->add(OperationsPeer::OP_SUBTYPE_ID, $this->op_subtype_id);
        if ($this->isColumnModified(OperationsPeer::OP_ACT_ID)) $criteria->add(OperationsPeer::OP_ACT_ID, $this->op_act_id);
        if ($this->isColumnModified(OperationsPeer::OPERATION_UNIVERSE_ID)) $criteria->add(OperationsPeer::OPERATION_UNIVERSE_ID, $this->operation_universe_id);
        if ($this->isColumnModified(OperationsPeer::OPERATION_MEDIA_ID)) $criteria->add(OperationsPeer::OPERATION_MEDIA_ID, $this->operation_media_id);
        if ($this->isColumnModified(OperationsPeer::OPERATION_OST_TPL_ID)) $criteria->add(OperationsPeer::OPERATION_OST_TPL_ID, $this->operation_ost_tpl_id);
        if ($this->isColumnModified(OperationsPeer::OP_PROJECT_TYPE_ID)) $criteria->add(OperationsPeer::OP_PROJECT_TYPE_ID, $this->op_project_type_id);
        if ($this->isColumnModified(OperationsPeer::OP_DC_ID)) $criteria->add(OperationsPeer::OP_DC_ID, $this->op_dc_id);
        if ($this->isColumnModified(OperationsPeer::OP_CP_ID)) $criteria->add(OperationsPeer::OP_CP_ID, $this->op_cp_id);
        if ($this->isColumnModified(OperationsPeer::OP_CDP_ID)) $criteria->add(OperationsPeer::OP_CDP_ID, $this->op_cdp_id);
        if ($this->isColumnModified(OperationsPeer::OP_DESCRIPTION)) $criteria->add(OperationsPeer::OP_DESCRIPTION, $this->op_description);
        if ($this->isColumnModified(OperationsPeer::OP_COMMENTAIRE)) $criteria->add(OperationsPeer::OP_COMMENTAIRE, $this->op_commentaire);
        if ($this->isColumnModified(OperationsPeer::OP_MODALITE)) $criteria->add(OperationsPeer::OP_MODALITE, $this->op_modalite);
        if ($this->isColumnModified(OperationsPeer::OP_STAMP_START)) $criteria->add(OperationsPeer::OP_STAMP_START, $this->op_stamp_start);
        if ($this->isColumnModified(OperationsPeer::OP_STAMP_END)) $criteria->add(OperationsPeer::OP_STAMP_END, $this->op_stamp_end);
        if ($this->isColumnModified(OperationsPeer::OP_STAMP_CLOSE)) $criteria->add(OperationsPeer::OP_STAMP_CLOSE, $this->op_stamp_close);
        if ($this->isColumnModified(OperationsPeer::OP_DATECONSO_START)) $criteria->add(OperationsPeer::OP_DATECONSO_START, $this->op_dateconso_start);
        if ($this->isColumnModified(OperationsPeer::OP_DATECONSO_END)) $criteria->add(OperationsPeer::OP_DATECONSO_END, $this->op_dateconso_end);
        if ($this->isColumnModified(OperationsPeer::OP_DATEPOSTE_END)) $criteria->add(OperationsPeer::OP_DATEPOSTE_END, $this->op_dateposte_end);
        if ($this->isColumnModified(OperationsPeer::OP_STATUS_ID)) $criteria->add(OperationsPeer::OP_STATUS_ID, $this->op_status_id);
        if ($this->isColumnModified(OperationsPeer::OP_USE_PRESTA_NEGOCE)) $criteria->add(OperationsPeer::OP_USE_PRESTA_NEGOCE, $this->op_use_presta_negoce);
        if ($this->isColumnModified(OperationsPeer::OP_TAUX_CONVERSION)) $criteria->add(OperationsPeer::OP_TAUX_CONVERSION, $this->op_taux_conversion);
        if ($this->isColumnModified(OperationsPeer::OP_DELAI_TRAIT_COURRIER_ID)) $criteria->add(OperationsPeer::OP_DELAI_TRAIT_COURRIER_ID, $this->op_delai_trait_courrier_id);
        if ($this->isColumnModified(OperationsPeer::OP_DELAI_DEVIS_ID)) $criteria->add(OperationsPeer::OP_DELAI_DEVIS_ID, $this->op_delai_devis_id);
        if ($this->isColumnModified(OperationsPeer::OP_MAILS_DEST)) $criteria->add(OperationsPeer::OP_MAILS_DEST, $this->op_mails_dest);
        if ($this->isColumnModified(OperationsPeer::OP_DATE_RELANCE_COUTS)) $criteria->add(OperationsPeer::OP_DATE_RELANCE_COUTS, $this->op_date_relance_couts);
        if ($this->isColumnModified(OperationsPeer::USER_ID)) $criteria->add(OperationsPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(OperationsPeer::USER_MODIFY)) $criteria->add(OperationsPeer::USER_MODIFY, $this->user_modify);
        if ($this->isColumnModified(OperationsPeer::DATE_CREATE)) $criteria->add(OperationsPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(OperationsPeer::DATE_MODIFY)) $criteria->add(OperationsPeer::DATE_MODIFY, $this->date_modify);
        if ($this->isColumnModified(OperationsPeer::ACTIF)) $criteria->add(OperationsPeer::ACTIF, $this->actif);
        if ($this->isColumnModified(OperationsPeer::OP_CGV_ID)) $criteria->add(OperationsPeer::OP_CGV_ID, $this->op_cgv_id);
        if ($this->isColumnModified(OperationsPeer::OP_FREQ_STAT_MAIL_ID)) $criteria->add(OperationsPeer::OP_FREQ_STAT_MAIL_ID, $this->op_freq_stat_mail_id);
        if ($this->isColumnModified(OperationsPeer::OP_DATE_LAST_SEND_STAT)) $criteria->add(OperationsPeer::OP_DATE_LAST_SEND_STAT, $this->op_date_last_send_stat);
        if ($this->isColumnModified(OperationsPeer::OP_ATTACH_FILE_STATS_EXCEL)) $criteria->add(OperationsPeer::OP_ATTACH_FILE_STATS_EXCEL, $this->op_attach_file_stats_excel);
        if ($this->isColumnModified(OperationsPeer::OP_DEVIS_LANG)) $criteria->add(OperationsPeer::OP_DEVIS_LANG, $this->op_devis_lang);
        if ($this->isColumnModified(OperationsPeer::OP_BRIEF_LOG)) $criteria->add(OperationsPeer::OP_BRIEF_LOG, $this->op_brief_log);
        if ($this->isColumnModified(OperationsPeer::OP_HAS_MAIL_ARCHIV_SENT)) $criteria->add(OperationsPeer::OP_HAS_MAIL_ARCHIV_SENT, $this->op_has_mail_archiv_sent);
        if ($this->isColumnModified(OperationsPeer::CL_SITE_ID_FOR_LOG)) $criteria->add(OperationsPeer::CL_SITE_ID_FOR_LOG, $this->cl_site_id_for_log);
        if ($this->isColumnModified(OperationsPeer::OP_DATE_LAST_COMPIL_DATA)) $criteria->add(OperationsPeer::OP_DATE_LAST_COMPIL_DATA, $this->op_date_last_compil_data);
        if ($this->isColumnModified(OperationsPeer::OP_CT_FACT_ADDR_ID)) $criteria->add(OperationsPeer::OP_CT_FACT_ADDR_ID, $this->op_ct_fact_addr_id);
        if ($this->isColumnModified(OperationsPeer::OP_PARENT_ID)) $criteria->add(OperationsPeer::OP_PARENT_ID, $this->op_parent_id);
        if ($this->isColumnModified(OperationsPeer::OP_DATE_ARCHIVAGE_END)) $criteria->add(OperationsPeer::OP_DATE_ARCHIVAGE_END, $this->op_date_archivage_end);
        if ($this->isColumnModified(OperationsPeer::OP_CLASSIFICATION_ID)) $criteria->add(OperationsPeer::OP_CLASSIFICATION_ID, $this->op_classification_id);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(OperationsPeer::DATABASE_NAME);
        $criteria->add(OperationsPeer::OP_ID, $this->op_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOpId();
    }

    /**
     * Generic method to set the primary key (op_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOpId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOpId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Operations (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpNumber($this->getOpNumber());
        $copyObj->setOpClId($this->getOpClId());
        $copyObj->setOpCtId($this->getOpCtId());
        $copyObj->setOpCtFactId($this->getOpCtFactId());
        $copyObj->setOpLibelle($this->getOpLibelle());
        $copyObj->setOpTypeId($this->getOpTypeId());
        $copyObj->setOpSubtypeId($this->getOpSubtypeId());
        $copyObj->setOpActId($this->getOpActId());
        $copyObj->setOperationUniverseId($this->getOperationUniverseId());
        $copyObj->setOperationMediaId($this->getOperationMediaId());
        $copyObj->setOperationOstTplId($this->getOperationOstTplId());
        $copyObj->setOpProjectTypeId($this->getOpProjectTypeId());
        $copyObj->setOpDcId($this->getOpDcId());
        $copyObj->setOpCpId($this->getOpCpId());
        $copyObj->setOpCdpId($this->getOpCdpId());
        $copyObj->setOpDescription($this->getOpDescription());
        $copyObj->setOpCommentaire($this->getOpCommentaire());
        $copyObj->setOpModalite($this->getOpModalite());
        $copyObj->setOpStampStart($this->getOpStampStart());
        $copyObj->setOpStampEnd($this->getOpStampEnd());
        $copyObj->setOpStampClose($this->getOpStampClose());
        $copyObj->setOpDateconsoStart($this->getOpDateconsoStart());
        $copyObj->setOpDateconsoEnd($this->getOpDateconsoEnd());
        $copyObj->setOpDateposteEnd($this->getOpDateposteEnd());
        $copyObj->setOpStatusId($this->getOpStatusId());
        $copyObj->setOpUsePrestaNegoce($this->getOpUsePrestaNegoce());
        $copyObj->setOpTauxConversion($this->getOpTauxConversion());
        $copyObj->setOpDelaiTraitCourrierId($this->getOpDelaiTraitCourrierId());
        $copyObj->setOpDelaiDevisId($this->getOpDelaiDevisId());
        $copyObj->setOpMailsDest($this->getOpMailsDest());
        $copyObj->setOpDateRelanceCouts($this->getOpDateRelanceCouts());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setUserModify($this->getUserModify());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setDateModify($this->getDateModify());
        $copyObj->setActif($this->getActif());
        $copyObj->setOpCgvId($this->getOpCgvId());
        $copyObj->setOpFreqStatMailId($this->getOpFreqStatMailId());
        $copyObj->setOpDateLastSendStat($this->getOpDateLastSendStat());
        $copyObj->setOpAttachFileStatsExcel($this->getOpAttachFileStatsExcel());
        $copyObj->setOpDevisLang($this->getOpDevisLang());
        $copyObj->setOpBriefLog($this->getOpBriefLog());
        $copyObj->setOpHasMailArchivSent($this->getOpHasMailArchivSent());
        $copyObj->setClSiteIdForLog($this->getClSiteIdForLog());
        $copyObj->setOpDateLastCompilData($this->getOpDateLastCompilData());
        $copyObj->setOpCtFactAddrId($this->getOpCtFactAddrId());
        $copyObj->setOpParentId($this->getOpParentId());
        $copyObj->setOpDateArchivageEnd($this->getOpDateArchivageEnd());
        $copyObj->setOpClassificationId($this->getOpClassificationId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getFacturess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactures($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkOperationOptions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkOperationOption($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkOperationsContactsMails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkOperationsContactsMail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkOperationCountrys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkOperationCountry($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationDecouvertss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationDecouverts($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationPrestationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationPrestations($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationPrimess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationPrimes($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationRubriquess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationRubriques($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationScenariis() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationScenarii($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationStatutss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationStatuts($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationTaskss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationTasks($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationssRelatedByOpId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationsRelatedByOpId($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPlanFacturationDetailss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPlanFacturationDetails($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPlanFacturationParamss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPlanFacturationParams($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getFactureEditionHistorys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactureEditionHistory($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getGedelogOperationParams();
            if ($relObj) {
                $copyObj->setGedelogOperationParams($relObj->copy($deepCopy));
            }

            $relObj = $this->getOperationsExt();
            if ($relObj) {
                $copyObj->setOperationsExt($relObj->copy($deepCopy));
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOpId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Operations Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return OperationsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Clients object.
     *
     * @param                  Clients $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClients(Clients $v = null)
    {
        if ($v === null) {
            $this->setOpClId(NULL);
        } else {
            $this->setOpClId($v->getClId());
        }

        $this->aClients = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Clients object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated Clients object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Clients The associated Clients object.
     * @throws PropelException
     */
    public function getClients(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClients === null && ($this->op_cl_id !== null) && $doQuery) {
            $this->aClients = ClientsQuery::create()->findPk($this->op_cl_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClients->addOperationss($this);
             */
        }

        return $this->aClients;
    }

    /**
     * Declares an association between this object and a Contacts object.
     *
     * @param                  Contacts $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContactClient(Contacts $v = null)
    {
        if ($v === null) {
            $this->setOpCtId(NULL);
        } else {
            $this->setOpCtId($v->getCtId());
        }

        $this->aContactClient = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Contacts object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationsRelatedByOpCtId($this);
        }


        return $this;
    }


    /**
     * Get the associated Contacts object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Contacts The associated Contacts object.
     * @throws PropelException
     */
    public function getContactClient(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aContactClient === null && ($this->op_ct_id !== null) && $doQuery) {
            $this->aContactClient = ContactsQuery::create()->findPk($this->op_ct_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContactClient->addOperationssRelatedByOpCtId($this);
             */
        }

        return $this->aContactClient;
    }

    /**
     * Declares an association between this object and a Contacts object.
     *
     * @param                  Contacts $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContactFacturation(Contacts $v = null)
    {
        if ($v === null) {
            $this->setOpCtFactId(NULL);
        } else {
            $this->setOpCtFactId($v->getCtId());
        }

        $this->aContactFacturation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Contacts object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationsRelatedByOpCtFactId($this);
        }


        return $this;
    }


    /**
     * Get the associated Contacts object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Contacts The associated Contacts object.
     * @throws PropelException
     */
    public function getContactFacturation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aContactFacturation === null && ($this->op_ct_fact_id !== null) && $doQuery) {
            $this->aContactFacturation = ContactsQuery::create()->findPk($this->op_ct_fact_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContactFacturation->addOperationssRelatedByOpCtFactId($this);
             */
        }

        return $this->aContactFacturation;
    }

    /**
     * Declares an association between this object and a Users object.
     *
     * @param                  Users $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUserDC(Users $v = null)
    {
        if ($v === null) {
            $this->setOpDcId(NULL);
        } else {
            $this->setOpDcId($v->getUserId());
        }

        $this->aUserDC = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Users object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationsRelatedByOpDcId($this);
        }


        return $this;
    }


    /**
     * Get the associated Users object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Users The associated Users object.
     * @throws PropelException
     */
    public function getUserDC(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUserDC === null && ($this->op_dc_id !== null) && $doQuery) {
            $this->aUserDC = UsersQuery::create()->findPk($this->op_dc_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUserDC->addOperationssRelatedByOpDcId($this);
             */
        }

        return $this->aUserDC;
    }

    /**
     * Declares an association between this object and a Users object.
     *
     * @param                  Users $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUserCP(Users $v = null)
    {
        if ($v === null) {
            $this->setOpCpId(NULL);
        } else {
            $this->setOpCpId($v->getUserId());
        }

        $this->aUserCP = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Users object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationsRelatedByOpCpId($this);
        }


        return $this;
    }


    /**
     * Get the associated Users object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Users The associated Users object.
     * @throws PropelException
     */
    public function getUserCP(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUserCP === null && ($this->op_cp_id !== null) && $doQuery) {
            $this->aUserCP = UsersQuery::create()->findPk($this->op_cp_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUserCP->addOperationssRelatedByOpCpId($this);
             */
        }

        return $this->aUserCP;
    }

    /**
     * Declares an association between this object and a Users object.
     *
     * @param                  Users $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUserCdp(Users $v = null)
    {
        if ($v === null) {
            $this->setOpCdpId(NULL);
        } else {
            $this->setOpCdpId($v->getUserId());
        }

        $this->aUserCdp = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Users object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationsRelatedByOpCdpId($this);
        }


        return $this;
    }


    /**
     * Get the associated Users object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Users The associated Users object.
     * @throws PropelException
     */
    public function getUserCdp(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUserCdp === null && ($this->op_cdp_id !== null) && $doQuery) {
            $this->aUserCdp = UsersQuery::create()->findPk($this->op_cdp_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUserCdp->addOperationssRelatedByOpCdpId($this);
             */
        }

        return $this->aUserCdp;
    }

    /**
     * Declares an association between this object and a ClientFactureOptions object.
     *
     * @param                  ClientFactureOptions $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClientFactureOptions(ClientFactureOptions $v = null)
    {
        if ($v === null) {
            $this->setOpClId(NULL);
        } else {
            $this->setOpClId($v->getClId());
        }

        $this->aClientFactureOptions = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ClientFactureOptions object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated ClientFactureOptions object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ClientFactureOptions The associated ClientFactureOptions object.
     * @throws PropelException
     */
    public function getClientFactureOptions(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClientFactureOptions === null && ($this->op_cl_id !== null) && $doQuery) {
            $this->aClientFactureOptions = ClientFactureOptionsQuery::create()
                ->filterByOperations($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClientFactureOptions->addOperationss($this);
             */
        }

        return $this->aClientFactureOptions;
    }

    /**
     * Declares an association between this object and a ClientContratOptions object.
     *
     * @param                  ClientContratOptions $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClientContratOptions(ClientContratOptions $v = null)
    {
        if ($v === null) {
            $this->setOpClId(NULL);
        } else {
            $this->setOpClId($v->getClId());
        }

        $this->aClientContratOptions = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ClientContratOptions object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated ClientContratOptions object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ClientContratOptions The associated ClientContratOptions object.
     * @throws PropelException
     */
    public function getClientContratOptions(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClientContratOptions === null && ($this->op_cl_id !== null) && $doQuery) {
            $this->aClientContratOptions = ClientContratOptionsQuery::create()
                ->filterByOperations($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClientContratOptions->addOperationss($this);
             */
        }

        return $this->aClientContratOptions;
    }

    /**
     * Declares an association between this object and a ClientSites object.
     *
     * @param                  ClientSites $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClientSiteForLog(ClientSites $v = null)
    {
        if ($v === null) {
            $this->setClSiteIdForLog(NULL);
        } else {
            $this->setClSiteIdForLog($v->getClSiteId());
        }

        $this->aClientSiteForLog = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ClientSites object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated ClientSites object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ClientSites The associated ClientSites object.
     * @throws PropelException
     */
    public function getClientSiteForLog(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClientSiteForLog === null && ($this->cl_site_id_for_log !== null) && $doQuery) {
            $this->aClientSiteForLog = ClientSitesQuery::create()->findPk($this->cl_site_id_for_log, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClientSiteForLog->addOperationss($this);
             */
        }

        return $this->aClientSiteForLog;
    }

    /**
     * Declares an association between this object and a GedelogOperationParams object.
     *
     * @param                  GedelogOperationParams $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGedelogOperationParams(GedelogOperationParams $v = null)
    {
        if ($v === null) {
            $this->setOpId(NULL);
        } else {
            $this->setOpId($v->getOpId());
        }

        $this->aGedelogOperationParams = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated GedelogOperationParams object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GedelogOperationParams The associated GedelogOperationParams object.
     * @throws PropelException
     */
    public function getGedelogOperationParams(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGedelogOperationParams === null && ($this->op_id !== null) && $doQuery) {
            $this->aGedelogOperationParams = GedelogOperationParamsQuery::create()->findPk($this->op_id, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aGedelogOperationParams->setOperations($this);
        }

        return $this->aGedelogOperationParams;
    }

    /**
     * Declares an association between this object and a ROperationStatus object.
     *
     * @param                  ROperationStatus $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setROperationStatus(ROperationStatus $v = null)
    {
        if ($v === null) {
            $this->setOpStatusId(NULL);
        } else {
            $this->setOpStatusId($v->getOsId());
        }

        $this->aROperationStatus = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationStatus object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationStatus object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationStatus The associated ROperationStatus object.
     * @throws PropelException
     */
    public function getROperationStatus(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aROperationStatus === null && ($this->op_status_id !== null) && $doQuery) {
            $this->aROperationStatus = ROperationStatusQuery::create()->findPk($this->op_status_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aROperationStatus->addOperationss($this);
             */
        }

        return $this->aROperationStatus;
    }

    /**
     * Declares an association between this object and a RCustomActivites object.
     *
     * @param                  RCustomActivites $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRCustomActivites(RCustomActivites $v = null)
    {
        if ($v === null) {
            $this->setOpActId(NULL);
        } else {
            $this->setOpActId($v->getActId());
        }

        $this->aRCustomActivites = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RCustomActivites object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated RCustomActivites object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RCustomActivites The associated RCustomActivites object.
     * @throws PropelException
     */
    public function getRCustomActivites(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRCustomActivites === null && ($this->op_act_id !== null) && $doQuery) {
            $this->aRCustomActivites = RCustomActivitesQuery::create()->findPk($this->op_act_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRCustomActivites->addOperationss($this);
             */
        }

        return $this->aRCustomActivites;
    }

    /**
     * Declares an association between this object and a ROperationType object.
     *
     * @param                  ROperationType $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setROperationType(ROperationType $v = null)
    {
        if ($v === null) {
            $this->setOpTypeId(NULL);
        } else {
            $this->setOpTypeId($v->getOtId());
        }

        $this->aROperationType = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationType object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationType object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationType The associated ROperationType object.
     * @throws PropelException
     */
    public function getROperationType(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aROperationType === null && ($this->op_type_id !== null) && $doQuery) {
            $this->aROperationType = ROperationTypeQuery::create()->findPk($this->op_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aROperationType->addOperationss($this);
             */
        }

        return $this->aROperationType;
    }

    /**
     * Declares an association between this object and a ROperationTypeSub object.
     *
     * @param                  ROperationTypeSub $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setROperationTypeSub(ROperationTypeSub $v = null)
    {
        if ($v === null) {
            $this->setOpSubtypeId(NULL);
        } else {
            $this->setOpSubtypeId($v->getOstId());
        }

        $this->aROperationTypeSub = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationTypeSub object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationTypeSub object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationTypeSub The associated ROperationTypeSub object.
     * @throws PropelException
     */
    public function getROperationTypeSub(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aROperationTypeSub === null && ($this->op_subtype_id !== null) && $doQuery) {
            $this->aROperationTypeSub = ROperationTypeSubQuery::create()->findPk($this->op_subtype_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aROperationTypeSub->addOperationss($this);
             */
        }

        return $this->aROperationTypeSub;
    }

    /**
     * Declares an association between this object and a OperationsExt object.
     *
     * @param                  OperationsExt $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationsExt(OperationsExt $v = null)
    {
        if ($v === null) {
            $this->setOpId(NULL);
        } else {
            $this->setOpId($v->getOpId());
        }

        $this->aOperationsExt = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated OperationsExt object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return OperationsExt The associated OperationsExt object.
     * @throws PropelException
     */
    public function getOperationsExt(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationsExt === null && ($this->op_id !== null) && $doQuery) {
            $this->aOperationsExt = OperationsExtQuery::create()->findPk($this->op_id, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aOperationsExt->setOperations($this);
        }

        return $this->aOperationsExt;
    }

    /**
     * Declares an association between this object and a RDelaiDevis object.
     *
     * @param                  RDelaiDevis $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRDelaiDevis(RDelaiDevis $v = null)
    {
        if ($v === null) {
            $this->setOpDelaiDevisId(NULL);
        } else {
            $this->setOpDelaiDevisId($v->getRDelaiDevisId());
        }

        $this->aRDelaiDevis = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RDelaiDevis object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated RDelaiDevis object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RDelaiDevis The associated RDelaiDevis object.
     * @throws PropelException
     */
    public function getRDelaiDevis(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRDelaiDevis === null && ($this->op_delai_devis_id !== null) && $doQuery) {
            $this->aRDelaiDevis = RDelaiDevisQuery::create()->findPk($this->op_delai_devis_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRDelaiDevis->addOperationss($this);
             */
        }

        return $this->aRDelaiDevis;
    }

    /**
     * Declares an association between this object and a Contacts object.
     *
     * @param                  Contacts $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvoicingAddressContact(Contacts $v = null)
    {
        if ($v === null) {
            $this->setOpCtFactAddrId(NULL);
        } else {
            $this->setOpCtFactAddrId($v->getCtId());
        }

        $this->aInvoicingAddressContact = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Contacts object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationsRelatedByOpCtFactAddrId($this);
        }


        return $this;
    }


    /**
     * Get the associated Contacts object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Contacts The associated Contacts object.
     * @throws PropelException
     */
    public function getInvoicingAddressContact(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aInvoicingAddressContact === null && ($this->op_ct_fact_addr_id !== null) && $doQuery) {
            $this->aInvoicingAddressContact = ContactsQuery::create()->findPk($this->op_ct_fact_addr_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvoicingAddressContact->addOperationssRelatedByOpCtFactAddrId($this);
             */
        }

        return $this->aInvoicingAddressContact;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationsRelatedByOpParentId(Operations $v = null)
    {
        if ($v === null) {
            $this->setOpParentId(NULL);
        } else {
            $this->setOpParentId($v->getOpId());
        }

        $this->aOperationsRelatedByOpParentId = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Operations object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationsRelatedByOpId($this);
        }


        return $this;
    }


    /**
     * Get the associated Operations object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Operations The associated Operations object.
     * @throws PropelException
     */
    public function getOperationsRelatedByOpParentId(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationsRelatedByOpParentId === null && ($this->op_parent_id !== null) && $doQuery) {
            $this->aOperationsRelatedByOpParentId = OperationsQuery::create()->findPk($this->op_parent_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationsRelatedByOpParentId->addOperationssRelatedByOpId($this);
             */
        }

        return $this->aOperationsRelatedByOpParentId;
    }

    /**
     * Declares an association between this object and a ROperationUniverses object.
     *
     * @param                  ROperationUniverses $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationUniverse(ROperationUniverses $v = null)
    {
        if ($v === null) {
            $this->setOperationUniverseId(NULL);
        } else {
            $this->setOperationUniverseId($v->getROperationUniverseId());
        }

        $this->aOperationUniverse = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationUniverses object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationUniverses object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationUniverses The associated ROperationUniverses object.
     * @throws PropelException
     */
    public function getOperationUniverse(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationUniverse === null && ($this->operation_universe_id !== null) && $doQuery) {
            $this->aOperationUniverse = ROperationUniversesQuery::create()->findPk($this->operation_universe_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationUniverse->addOperationss($this);
             */
        }

        return $this->aOperationUniverse;
    }

    /**
     * Declares an association between this object and a ROperationMedias object.
     *
     * @param                  ROperationMedias $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationMedia(ROperationMedias $v = null)
    {
        if ($v === null) {
            $this->setOperationMediaId(NULL);
        } else {
            $this->setOperationMediaId($v->getROperationMediaId());
        }

        $this->aOperationMedia = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationMedias object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationMedias object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationMedias The associated ROperationMedias object.
     * @throws PropelException
     */
    public function getOperationMedia(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationMedia === null && ($this->operation_media_id !== null) && $doQuery) {
            $this->aOperationMedia = ROperationMediasQuery::create()->findPk($this->operation_media_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationMedia->addOperationss($this);
             */
        }

        return $this->aOperationMedia;
    }

    /**
     * Declares an association between this object and a ROperationTypeSubTpl object.
     *
     * @param                  ROperationTypeSubTpl $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationTemplate(ROperationTypeSubTpl $v = null)
    {
        if ($v === null) {
            $this->setOperationOstTplId(NULL);
        } else {
            $this->setOperationOstTplId($v->getOstTplId());
        }

        $this->aOperationTemplate = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationTypeSubTpl object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationTypeSubTpl object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationTypeSubTpl The associated ROperationTypeSubTpl object.
     * @throws PropelException
     */
    public function getOperationTemplate(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationTemplate === null && ($this->operation_ost_tpl_id !== null) && $doQuery) {
            $this->aOperationTemplate = ROperationTypeSubTplQuery::create()->findPk($this->operation_ost_tpl_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationTemplate->addOperationss($this);
             */
        }

        return $this->aOperationTemplate;
    }

    /**
     * Declares an association between this object and a ROperationClassifications object.
     *
     * @param                  ROperationClassifications $v
     * @return Operations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setROperationClassifications(ROperationClassifications $v = null)
    {
        if ($v === null) {
            $this->setOpClassificationId(NULL);
        } else {
            $this->setOpClassificationId($v->getROperationClassificationId());
        }

        $this->aROperationClassifications = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationClassifications object, it will not be re-added.
        if ($v !== null) {
            $v->addOperations($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationClassifications object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationClassifications The associated ROperationClassifications object.
     * @throws PropelException
     */
    public function getROperationClassifications(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aROperationClassifications === null && ($this->op_classification_id !== null) && $doQuery) {
            $this->aROperationClassifications = ROperationClassificationsQuery::create()->findPk($this->op_classification_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aROperationClassifications->addOperationss($this);
             */
        }

        return $this->aROperationClassifications;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Factures' == $relationName) {
            $this->initFacturess();
        }
        if ('LnkOperationOption' == $relationName) {
            $this->initLnkOperationOptions();
        }
        if ('LnkOperationsContactsMail' == $relationName) {
            $this->initLnkOperationsContactsMails();
        }
        if ('LnkOperationCountry' == $relationName) {
            $this->initLnkOperationCountrys();
        }
        if ('OperationDecouverts' == $relationName) {
            $this->initOperationDecouvertss();
        }
        if ('OperationPrestations' == $relationName) {
            $this->initOperationPrestationss();
        }
        if ('OperationPrimes' == $relationName) {
            $this->initOperationPrimess();
        }
        if ('OperationRubriques' == $relationName) {
            $this->initOperationRubriquess();
        }
        if ('OperationScenarii' == $relationName) {
            $this->initOperationScenariis();
        }
        if ('OperationStatuts' == $relationName) {
            $this->initOperationStatutss();
        }
        if ('OperationTasks' == $relationName) {
            $this->initOperationTaskss();
        }
        if ('OperationsRelatedByOpId' == $relationName) {
            $this->initOperationssRelatedByOpId();
        }
        if ('PlanFacturationDetails' == $relationName) {
            $this->initPlanFacturationDetailss();
        }
        if ('PlanFacturationParams' == $relationName) {
            $this->initPlanFacturationParamss();
        }
        if ('FactureEditionHistory' == $relationName) {
            $this->initFactureEditionHistorys();
        }
    }

    /**
     * Clears out the collFacturess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addFacturess()
     */
    public function clearFacturess()
    {
        $this->collFacturess = null; // important to set this to null since that means it is uninitialized
        $this->collFacturessPartial = null;

        return $this;
    }

    /**
     * reset is the collFacturess collection loaded partially
     *
     * @return void
     */
    public function resetPartialFacturess($v = true)
    {
        $this->collFacturessPartial = $v;
    }

    /**
     * Initializes the collFacturess collection.
     *
     * By default this just sets the collFacturess collection to an empty array (like clearcollFacturess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFacturess($overrideExisting = true)
    {
        if (null !== $this->collFacturess && !$overrideExisting) {
            return;
        }
        $this->collFacturess = new PropelObjectCollection();
        $this->collFacturess->setModel('Factures');
    }

    /**
     * Gets an array of Factures objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Factures[] List of Factures objects
     * @throws PropelException
     */
    public function getFacturess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFacturessPartial && !$this->isNew();
        if (null === $this->collFacturess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFacturess) {
                // return empty collection
                $this->initFacturess();
            } else {
                $collFacturess = FacturesQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFacturessPartial && count($collFacturess)) {
                      $this->initFacturess(false);

                      foreach ($collFacturess as $obj) {
                        if (false == $this->collFacturess->contains($obj)) {
                          $this->collFacturess->append($obj);
                        }
                      }

                      $this->collFacturessPartial = true;
                    }

                    $collFacturess->getInternalIterator()->rewind();

                    return $collFacturess;
                }

                if ($partial && $this->collFacturess) {
                    foreach ($this->collFacturess as $obj) {
                        if ($obj->isNew()) {
                            $collFacturess[] = $obj;
                        }
                    }
                }

                $this->collFacturess = $collFacturess;
                $this->collFacturessPartial = false;
            }
        }

        return $this->collFacturess;
    }

    /**
     * Sets a collection of Factures objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $facturess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setFacturess(PropelCollection $facturess, PropelPDO $con = null)
    {
        $facturessToDelete = $this->getFacturess(new Criteria(), $con)->diff($facturess);


        $this->facturessScheduledForDeletion = $facturessToDelete;

        foreach ($facturessToDelete as $facturesRemoved) {
            $facturesRemoved->setOperations(null);
        }

        $this->collFacturess = null;
        foreach ($facturess as $factures) {
            $this->addFactures($factures);
        }

        $this->collFacturess = $facturess;
        $this->collFacturessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Factures objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Factures objects.
     * @throws PropelException
     */
    public function countFacturess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFacturessPartial && !$this->isNew();
        if (null === $this->collFacturess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFacturess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFacturess());
            }
            $query = FacturesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collFacturess);
    }

    /**
     * Method called to associate a Factures object to this object
     * through the Factures foreign key attribute.
     *
     * @param    Factures $l Factures
     * @return Operations The current object (for fluent API support)
     */
    public function addFactures(Factures $l)
    {
        if ($this->collFacturess === null) {
            $this->initFacturess();
            $this->collFacturessPartial = true;
        }

        if (!in_array($l, $this->collFacturess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFactures($l);

            if ($this->facturessScheduledForDeletion and $this->facturessScheduledForDeletion->contains($l)) {
                $this->facturessScheduledForDeletion->remove($this->facturessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Factures $factures The factures object to add.
     */
    protected function doAddFactures($factures)
    {
        $this->collFacturess[]= $factures;
        $factures->setOperations($this);
    }

    /**
     * @param	Factures $factures The factures object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeFactures($factures)
    {
        if ($this->getFacturess()->contains($factures)) {
            $this->collFacturess->remove($this->collFacturess->search($factures));
            if (null === $this->facturessScheduledForDeletion) {
                $this->facturessScheduledForDeletion = clone $this->collFacturess;
                $this->facturessScheduledForDeletion->clear();
            }
            $this->facturessScheduledForDeletion[]= clone $factures;
            $factures->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinRFactureTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('RFactureTypes', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinRFactureStatuts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('RFactureStatuts', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinPlanFacturationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('PlanFacturationParams', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinRFactureOptionsEcheances($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('RFactureOptionsEcheances', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinJournalDeVente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('JournalDeVente', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getFacturess($query, $con);
    }

    /**
     * Clears out the collLnkOperationOptions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addLnkOperationOptions()
     */
    public function clearLnkOperationOptions()
    {
        $this->collLnkOperationOptions = null; // important to set this to null since that means it is uninitialized
        $this->collLnkOperationOptionsPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkOperationOptions collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkOperationOptions($v = true)
    {
        $this->collLnkOperationOptionsPartial = $v;
    }

    /**
     * Initializes the collLnkOperationOptions collection.
     *
     * By default this just sets the collLnkOperationOptions collection to an empty array (like clearcollLnkOperationOptions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkOperationOptions($overrideExisting = true)
    {
        if (null !== $this->collLnkOperationOptions && !$overrideExisting) {
            return;
        }
        $this->collLnkOperationOptions = new PropelObjectCollection();
        $this->collLnkOperationOptions->setModel('LnkOperationOption');
    }

    /**
     * Gets an array of LnkOperationOption objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkOperationOption[] List of LnkOperationOption objects
     * @throws PropelException
     */
    public function getLnkOperationOptions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationOptionsPartial && !$this->isNew();
        if (null === $this->collLnkOperationOptions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationOptions) {
                // return empty collection
                $this->initLnkOperationOptions();
            } else {
                $collLnkOperationOptions = LnkOperationOptionQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkOperationOptionsPartial && count($collLnkOperationOptions)) {
                      $this->initLnkOperationOptions(false);

                      foreach ($collLnkOperationOptions as $obj) {
                        if (false == $this->collLnkOperationOptions->contains($obj)) {
                          $this->collLnkOperationOptions->append($obj);
                        }
                      }

                      $this->collLnkOperationOptionsPartial = true;
                    }

                    $collLnkOperationOptions->getInternalIterator()->rewind();

                    return $collLnkOperationOptions;
                }

                if ($partial && $this->collLnkOperationOptions) {
                    foreach ($this->collLnkOperationOptions as $obj) {
                        if ($obj->isNew()) {
                            $collLnkOperationOptions[] = $obj;
                        }
                    }
                }

                $this->collLnkOperationOptions = $collLnkOperationOptions;
                $this->collLnkOperationOptionsPartial = false;
            }
        }

        return $this->collLnkOperationOptions;
    }

    /**
     * Sets a collection of LnkOperationOption objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkOperationOptions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setLnkOperationOptions(PropelCollection $lnkOperationOptions, PropelPDO $con = null)
    {
        $lnkOperationOptionsToDelete = $this->getLnkOperationOptions(new Criteria(), $con)->diff($lnkOperationOptions);


        $this->lnkOperationOptionsScheduledForDeletion = $lnkOperationOptionsToDelete;

        foreach ($lnkOperationOptionsToDelete as $lnkOperationOptionRemoved) {
            $lnkOperationOptionRemoved->setOperations(null);
        }

        $this->collLnkOperationOptions = null;
        foreach ($lnkOperationOptions as $lnkOperationOption) {
            $this->addLnkOperationOption($lnkOperationOption);
        }

        $this->collLnkOperationOptions = $lnkOperationOptions;
        $this->collLnkOperationOptionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkOperationOption objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkOperationOption objects.
     * @throws PropelException
     */
    public function countLnkOperationOptions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationOptionsPartial && !$this->isNew();
        if (null === $this->collLnkOperationOptions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationOptions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkOperationOptions());
            }
            $query = LnkOperationOptionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collLnkOperationOptions);
    }

    /**
     * Method called to associate a LnkOperationOption object to this object
     * through the LnkOperationOption foreign key attribute.
     *
     * @param    LnkOperationOption $l LnkOperationOption
     * @return Operations The current object (for fluent API support)
     */
    public function addLnkOperationOption(LnkOperationOption $l)
    {
        if ($this->collLnkOperationOptions === null) {
            $this->initLnkOperationOptions();
            $this->collLnkOperationOptionsPartial = true;
        }

        if (!in_array($l, $this->collLnkOperationOptions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkOperationOption($l);

            if ($this->lnkOperationOptionsScheduledForDeletion and $this->lnkOperationOptionsScheduledForDeletion->contains($l)) {
                $this->lnkOperationOptionsScheduledForDeletion->remove($this->lnkOperationOptionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkOperationOption $lnkOperationOption The lnkOperationOption object to add.
     */
    protected function doAddLnkOperationOption($lnkOperationOption)
    {
        $this->collLnkOperationOptions[]= $lnkOperationOption;
        $lnkOperationOption->setOperations($this);
    }

    /**
     * @param	LnkOperationOption $lnkOperationOption The lnkOperationOption object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeLnkOperationOption($lnkOperationOption)
    {
        if ($this->getLnkOperationOptions()->contains($lnkOperationOption)) {
            $this->collLnkOperationOptions->remove($this->collLnkOperationOptions->search($lnkOperationOption));
            if (null === $this->lnkOperationOptionsScheduledForDeletion) {
                $this->lnkOperationOptionsScheduledForDeletion = clone $this->collLnkOperationOptions;
                $this->lnkOperationOptionsScheduledForDeletion->clear();
            }
            $this->lnkOperationOptionsScheduledForDeletion[]= clone $lnkOperationOption;
            $lnkOperationOption->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related LnkOperationOptions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkOperationOption[] List of LnkOperationOption objects
     */
    public function getLnkOperationOptionsJoinROperationOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkOperationOptionQuery::create(null, $criteria);
        $query->joinWith('ROperationOptions', $join_behavior);

        return $this->getLnkOperationOptions($query, $con);
    }

    /**
     * Clears out the collLnkOperationsContactsMails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addLnkOperationsContactsMails()
     */
    public function clearLnkOperationsContactsMails()
    {
        $this->collLnkOperationsContactsMails = null; // important to set this to null since that means it is uninitialized
        $this->collLnkOperationsContactsMailsPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkOperationsContactsMails collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkOperationsContactsMails($v = true)
    {
        $this->collLnkOperationsContactsMailsPartial = $v;
    }

    /**
     * Initializes the collLnkOperationsContactsMails collection.
     *
     * By default this just sets the collLnkOperationsContactsMails collection to an empty array (like clearcollLnkOperationsContactsMails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkOperationsContactsMails($overrideExisting = true)
    {
        if (null !== $this->collLnkOperationsContactsMails && !$overrideExisting) {
            return;
        }
        $this->collLnkOperationsContactsMails = new PropelObjectCollection();
        $this->collLnkOperationsContactsMails->setModel('LnkOperationsContactsMail');
    }

    /**
     * Gets an array of LnkOperationsContactsMail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkOperationsContactsMail[] List of LnkOperationsContactsMail objects
     * @throws PropelException
     */
    public function getLnkOperationsContactsMails($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationsContactsMailsPartial && !$this->isNew();
        if (null === $this->collLnkOperationsContactsMails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationsContactsMails) {
                // return empty collection
                $this->initLnkOperationsContactsMails();
            } else {
                $collLnkOperationsContactsMails = LnkOperationsContactsMailQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkOperationsContactsMailsPartial && count($collLnkOperationsContactsMails)) {
                      $this->initLnkOperationsContactsMails(false);

                      foreach ($collLnkOperationsContactsMails as $obj) {
                        if (false == $this->collLnkOperationsContactsMails->contains($obj)) {
                          $this->collLnkOperationsContactsMails->append($obj);
                        }
                      }

                      $this->collLnkOperationsContactsMailsPartial = true;
                    }

                    $collLnkOperationsContactsMails->getInternalIterator()->rewind();

                    return $collLnkOperationsContactsMails;
                }

                if ($partial && $this->collLnkOperationsContactsMails) {
                    foreach ($this->collLnkOperationsContactsMails as $obj) {
                        if ($obj->isNew()) {
                            $collLnkOperationsContactsMails[] = $obj;
                        }
                    }
                }

                $this->collLnkOperationsContactsMails = $collLnkOperationsContactsMails;
                $this->collLnkOperationsContactsMailsPartial = false;
            }
        }

        return $this->collLnkOperationsContactsMails;
    }

    /**
     * Sets a collection of LnkOperationsContactsMail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkOperationsContactsMails A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setLnkOperationsContactsMails(PropelCollection $lnkOperationsContactsMails, PropelPDO $con = null)
    {
        $lnkOperationsContactsMailsToDelete = $this->getLnkOperationsContactsMails(new Criteria(), $con)->diff($lnkOperationsContactsMails);


        $this->lnkOperationsContactsMailsScheduledForDeletion = $lnkOperationsContactsMailsToDelete;

        foreach ($lnkOperationsContactsMailsToDelete as $lnkOperationsContactsMailRemoved) {
            $lnkOperationsContactsMailRemoved->setOperations(null);
        }

        $this->collLnkOperationsContactsMails = null;
        foreach ($lnkOperationsContactsMails as $lnkOperationsContactsMail) {
            $this->addLnkOperationsContactsMail($lnkOperationsContactsMail);
        }

        $this->collLnkOperationsContactsMails = $lnkOperationsContactsMails;
        $this->collLnkOperationsContactsMailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkOperationsContactsMail objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkOperationsContactsMail objects.
     * @throws PropelException
     */
    public function countLnkOperationsContactsMails(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationsContactsMailsPartial && !$this->isNew();
        if (null === $this->collLnkOperationsContactsMails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationsContactsMails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkOperationsContactsMails());
            }
            $query = LnkOperationsContactsMailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collLnkOperationsContactsMails);
    }

    /**
     * Method called to associate a LnkOperationsContactsMail object to this object
     * through the LnkOperationsContactsMail foreign key attribute.
     *
     * @param    LnkOperationsContactsMail $l LnkOperationsContactsMail
     * @return Operations The current object (for fluent API support)
     */
    public function addLnkOperationsContactsMail(LnkOperationsContactsMail $l)
    {
        if ($this->collLnkOperationsContactsMails === null) {
            $this->initLnkOperationsContactsMails();
            $this->collLnkOperationsContactsMailsPartial = true;
        }

        if (!in_array($l, $this->collLnkOperationsContactsMails->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkOperationsContactsMail($l);

            if ($this->lnkOperationsContactsMailsScheduledForDeletion and $this->lnkOperationsContactsMailsScheduledForDeletion->contains($l)) {
                $this->lnkOperationsContactsMailsScheduledForDeletion->remove($this->lnkOperationsContactsMailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkOperationsContactsMail $lnkOperationsContactsMail The lnkOperationsContactsMail object to add.
     */
    protected function doAddLnkOperationsContactsMail($lnkOperationsContactsMail)
    {
        $this->collLnkOperationsContactsMails[]= $lnkOperationsContactsMail;
        $lnkOperationsContactsMail->setOperations($this);
    }

    /**
     * @param	LnkOperationsContactsMail $lnkOperationsContactsMail The lnkOperationsContactsMail object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeLnkOperationsContactsMail($lnkOperationsContactsMail)
    {
        if ($this->getLnkOperationsContactsMails()->contains($lnkOperationsContactsMail)) {
            $this->collLnkOperationsContactsMails->remove($this->collLnkOperationsContactsMails->search($lnkOperationsContactsMail));
            if (null === $this->lnkOperationsContactsMailsScheduledForDeletion) {
                $this->lnkOperationsContactsMailsScheduledForDeletion = clone $this->collLnkOperationsContactsMails;
                $this->lnkOperationsContactsMailsScheduledForDeletion->clear();
            }
            $this->lnkOperationsContactsMailsScheduledForDeletion[]= clone $lnkOperationsContactsMail;
            $lnkOperationsContactsMail->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related LnkOperationsContactsMails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkOperationsContactsMail[] List of LnkOperationsContactsMail objects
     */
    public function getLnkOperationsContactsMailsJoinContacts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkOperationsContactsMailQuery::create(null, $criteria);
        $query->joinWith('Contacts', $join_behavior);

        return $this->getLnkOperationsContactsMails($query, $con);
    }

    /**
     * Clears out the collLnkOperationCountrys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addLnkOperationCountrys()
     */
    public function clearLnkOperationCountrys()
    {
        $this->collLnkOperationCountrys = null; // important to set this to null since that means it is uninitialized
        $this->collLnkOperationCountrysPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkOperationCountrys collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkOperationCountrys($v = true)
    {
        $this->collLnkOperationCountrysPartial = $v;
    }

    /**
     * Initializes the collLnkOperationCountrys collection.
     *
     * By default this just sets the collLnkOperationCountrys collection to an empty array (like clearcollLnkOperationCountrys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkOperationCountrys($overrideExisting = true)
    {
        if (null !== $this->collLnkOperationCountrys && !$overrideExisting) {
            return;
        }
        $this->collLnkOperationCountrys = new PropelObjectCollection();
        $this->collLnkOperationCountrys->setModel('LnkOperationCountry');
    }

    /**
     * Gets an array of LnkOperationCountry objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkOperationCountry[] List of LnkOperationCountry objects
     * @throws PropelException
     */
    public function getLnkOperationCountrys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationCountrysPartial && !$this->isNew();
        if (null === $this->collLnkOperationCountrys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationCountrys) {
                // return empty collection
                $this->initLnkOperationCountrys();
            } else {
                $collLnkOperationCountrys = LnkOperationCountryQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkOperationCountrysPartial && count($collLnkOperationCountrys)) {
                      $this->initLnkOperationCountrys(false);

                      foreach ($collLnkOperationCountrys as $obj) {
                        if (false == $this->collLnkOperationCountrys->contains($obj)) {
                          $this->collLnkOperationCountrys->append($obj);
                        }
                      }

                      $this->collLnkOperationCountrysPartial = true;
                    }

                    $collLnkOperationCountrys->getInternalIterator()->rewind();

                    return $collLnkOperationCountrys;
                }

                if ($partial && $this->collLnkOperationCountrys) {
                    foreach ($this->collLnkOperationCountrys as $obj) {
                        if ($obj->isNew()) {
                            $collLnkOperationCountrys[] = $obj;
                        }
                    }
                }

                $this->collLnkOperationCountrys = $collLnkOperationCountrys;
                $this->collLnkOperationCountrysPartial = false;
            }
        }

        return $this->collLnkOperationCountrys;
    }

    /**
     * Sets a collection of LnkOperationCountry objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkOperationCountrys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setLnkOperationCountrys(PropelCollection $lnkOperationCountrys, PropelPDO $con = null)
    {
        $lnkOperationCountrysToDelete = $this->getLnkOperationCountrys(new Criteria(), $con)->diff($lnkOperationCountrys);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->lnkOperationCountrysScheduledForDeletion = clone $lnkOperationCountrysToDelete;

        foreach ($lnkOperationCountrysToDelete as $lnkOperationCountryRemoved) {
            $lnkOperationCountryRemoved->setOperations(null);
        }

        $this->collLnkOperationCountrys = null;
        foreach ($lnkOperationCountrys as $lnkOperationCountry) {
            $this->addLnkOperationCountry($lnkOperationCountry);
        }

        $this->collLnkOperationCountrys = $lnkOperationCountrys;
        $this->collLnkOperationCountrysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkOperationCountry objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkOperationCountry objects.
     * @throws PropelException
     */
    public function countLnkOperationCountrys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationCountrysPartial && !$this->isNew();
        if (null === $this->collLnkOperationCountrys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationCountrys) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkOperationCountrys());
            }
            $query = LnkOperationCountryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collLnkOperationCountrys);
    }

    /**
     * Method called to associate a LnkOperationCountry object to this object
     * through the LnkOperationCountry foreign key attribute.
     *
     * @param    LnkOperationCountry $l LnkOperationCountry
     * @return Operations The current object (for fluent API support)
     */
    public function addLnkOperationCountry(LnkOperationCountry $l)
    {
        if ($this->collLnkOperationCountrys === null) {
            $this->initLnkOperationCountrys();
            $this->collLnkOperationCountrysPartial = true;
        }

        if (!in_array($l, $this->collLnkOperationCountrys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkOperationCountry($l);

            if ($this->lnkOperationCountrysScheduledForDeletion and $this->lnkOperationCountrysScheduledForDeletion->contains($l)) {
                $this->lnkOperationCountrysScheduledForDeletion->remove($this->lnkOperationCountrysScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkOperationCountry $lnkOperationCountry The lnkOperationCountry object to add.
     */
    protected function doAddLnkOperationCountry($lnkOperationCountry)
    {
        $this->collLnkOperationCountrys[]= $lnkOperationCountry;
        $lnkOperationCountry->setOperations($this);
    }

    /**
     * @param	LnkOperationCountry $lnkOperationCountry The lnkOperationCountry object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeLnkOperationCountry($lnkOperationCountry)
    {
        if ($this->getLnkOperationCountrys()->contains($lnkOperationCountry)) {
            $this->collLnkOperationCountrys->remove($this->collLnkOperationCountrys->search($lnkOperationCountry));
            if (null === $this->lnkOperationCountrysScheduledForDeletion) {
                $this->lnkOperationCountrysScheduledForDeletion = clone $this->collLnkOperationCountrys;
                $this->lnkOperationCountrysScheduledForDeletion->clear();
            }
            $this->lnkOperationCountrysScheduledForDeletion[]= clone $lnkOperationCountry;
            $lnkOperationCountry->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related LnkOperationCountrys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkOperationCountry[] List of LnkOperationCountry objects
     */
    public function getLnkOperationCountrysJoinRCountries($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkOperationCountryQuery::create(null, $criteria);
        $query->joinWith('RCountries', $join_behavior);

        return $this->getLnkOperationCountrys($query, $con);
    }

    /**
     * Clears out the collOperationDecouvertss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addOperationDecouvertss()
     */
    public function clearOperationDecouvertss()
    {
        $this->collOperationDecouvertss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationDecouvertssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationDecouvertss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationDecouvertss($v = true)
    {
        $this->collOperationDecouvertssPartial = $v;
    }

    /**
     * Initializes the collOperationDecouvertss collection.
     *
     * By default this just sets the collOperationDecouvertss collection to an empty array (like clearcollOperationDecouvertss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationDecouvertss($overrideExisting = true)
    {
        if (null !== $this->collOperationDecouvertss && !$overrideExisting) {
            return;
        }
        $this->collOperationDecouvertss = new PropelObjectCollection();
        $this->collOperationDecouvertss->setModel('OperationDecouverts');
    }

    /**
     * Gets an array of OperationDecouverts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationDecouverts[] List of OperationDecouverts objects
     * @throws PropelException
     */
    public function getOperationDecouvertss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationDecouvertssPartial && !$this->isNew();
        if (null === $this->collOperationDecouvertss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationDecouvertss) {
                // return empty collection
                $this->initOperationDecouvertss();
            } else {
                $collOperationDecouvertss = OperationDecouvertsQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationDecouvertssPartial && count($collOperationDecouvertss)) {
                      $this->initOperationDecouvertss(false);

                      foreach ($collOperationDecouvertss as $obj) {
                        if (false == $this->collOperationDecouvertss->contains($obj)) {
                          $this->collOperationDecouvertss->append($obj);
                        }
                      }

                      $this->collOperationDecouvertssPartial = true;
                    }

                    $collOperationDecouvertss->getInternalIterator()->rewind();

                    return $collOperationDecouvertss;
                }

                if ($partial && $this->collOperationDecouvertss) {
                    foreach ($this->collOperationDecouvertss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationDecouvertss[] = $obj;
                        }
                    }
                }

                $this->collOperationDecouvertss = $collOperationDecouvertss;
                $this->collOperationDecouvertssPartial = false;
            }
        }

        return $this->collOperationDecouvertss;
    }

    /**
     * Sets a collection of OperationDecouverts objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationDecouvertss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationDecouvertss(PropelCollection $operationDecouvertss, PropelPDO $con = null)
    {
        $operationDecouvertssToDelete = $this->getOperationDecouvertss(new Criteria(), $con)->diff($operationDecouvertss);


        $this->operationDecouvertssScheduledForDeletion = $operationDecouvertssToDelete;

        foreach ($operationDecouvertssToDelete as $operationDecouvertsRemoved) {
            $operationDecouvertsRemoved->setOperations(null);
        }

        $this->collOperationDecouvertss = null;
        foreach ($operationDecouvertss as $operationDecouverts) {
            $this->addOperationDecouverts($operationDecouverts);
        }

        $this->collOperationDecouvertss = $operationDecouvertss;
        $this->collOperationDecouvertssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationDecouverts objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationDecouverts objects.
     * @throws PropelException
     */
    public function countOperationDecouvertss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationDecouvertssPartial && !$this->isNew();
        if (null === $this->collOperationDecouvertss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationDecouvertss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationDecouvertss());
            }
            $query = OperationDecouvertsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collOperationDecouvertss);
    }

    /**
     * Method called to associate a OperationDecouverts object to this object
     * through the OperationDecouverts foreign key attribute.
     *
     * @param    OperationDecouverts $l OperationDecouverts
     * @return Operations The current object (for fluent API support)
     */
    public function addOperationDecouverts(OperationDecouverts $l)
    {
        if ($this->collOperationDecouvertss === null) {
            $this->initOperationDecouvertss();
            $this->collOperationDecouvertssPartial = true;
        }

        if (!in_array($l, $this->collOperationDecouvertss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationDecouverts($l);

            if ($this->operationDecouvertssScheduledForDeletion and $this->operationDecouvertssScheduledForDeletion->contains($l)) {
                $this->operationDecouvertssScheduledForDeletion->remove($this->operationDecouvertssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationDecouverts $operationDecouverts The operationDecouverts object to add.
     */
    protected function doAddOperationDecouverts($operationDecouverts)
    {
        $this->collOperationDecouvertss[]= $operationDecouverts;
        $operationDecouverts->setOperations($this);
    }

    /**
     * @param	OperationDecouverts $operationDecouverts The operationDecouverts object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeOperationDecouverts($operationDecouverts)
    {
        if ($this->getOperationDecouvertss()->contains($operationDecouverts)) {
            $this->collOperationDecouvertss->remove($this->collOperationDecouvertss->search($operationDecouverts));
            if (null === $this->operationDecouvertssScheduledForDeletion) {
                $this->operationDecouvertssScheduledForDeletion = clone $this->collOperationDecouvertss;
                $this->operationDecouvertssScheduledForDeletion->clear();
            }
            $this->operationDecouvertssScheduledForDeletion[]= clone $operationDecouverts;
            $operationDecouverts->setOperations(null);
        }

        return $this;
    }

    /**
     * Clears out the collOperationPrestationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addOperationPrestationss()
     */
    public function clearOperationPrestationss()
    {
        $this->collOperationPrestationss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationPrestationssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationPrestationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationPrestationss($v = true)
    {
        $this->collOperationPrestationssPartial = $v;
    }

    /**
     * Initializes the collOperationPrestationss collection.
     *
     * By default this just sets the collOperationPrestationss collection to an empty array (like clearcollOperationPrestationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationPrestationss($overrideExisting = true)
    {
        if (null !== $this->collOperationPrestationss && !$overrideExisting) {
            return;
        }
        $this->collOperationPrestationss = new PropelObjectCollection();
        $this->collOperationPrestationss->setModel('OperationPrestations');
    }

    /**
     * Gets an array of OperationPrestations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     * @throws PropelException
     */
    public function getOperationPrestationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationPrestationssPartial && !$this->isNew();
        if (null === $this->collOperationPrestationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationPrestationss) {
                // return empty collection
                $this->initOperationPrestationss();
            } else {
                $collOperationPrestationss = OperationPrestationsQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationPrestationssPartial && count($collOperationPrestationss)) {
                      $this->initOperationPrestationss(false);

                      foreach ($collOperationPrestationss as $obj) {
                        if (false == $this->collOperationPrestationss->contains($obj)) {
                          $this->collOperationPrestationss->append($obj);
                        }
                      }

                      $this->collOperationPrestationssPartial = true;
                    }

                    $collOperationPrestationss->getInternalIterator()->rewind();

                    return $collOperationPrestationss;
                }

                if ($partial && $this->collOperationPrestationss) {
                    foreach ($this->collOperationPrestationss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationPrestationss[] = $obj;
                        }
                    }
                }

                $this->collOperationPrestationss = $collOperationPrestationss;
                $this->collOperationPrestationssPartial = false;
            }
        }

        return $this->collOperationPrestationss;
    }

    /**
     * Sets a collection of OperationPrestations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationPrestationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationPrestationss(PropelCollection $operationPrestationss, PropelPDO $con = null)
    {
        $operationPrestationssToDelete = $this->getOperationPrestationss(new Criteria(), $con)->diff($operationPrestationss);


        $this->operationPrestationssScheduledForDeletion = $operationPrestationssToDelete;

        foreach ($operationPrestationssToDelete as $operationPrestationsRemoved) {
            $operationPrestationsRemoved->setOperations(null);
        }

        $this->collOperationPrestationss = null;
        foreach ($operationPrestationss as $operationPrestations) {
            $this->addOperationPrestations($operationPrestations);
        }

        $this->collOperationPrestationss = $operationPrestationss;
        $this->collOperationPrestationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationPrestations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationPrestations objects.
     * @throws PropelException
     */
    public function countOperationPrestationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationPrestationssPartial && !$this->isNew();
        if (null === $this->collOperationPrestationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationPrestationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationPrestationss());
            }
            $query = OperationPrestationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collOperationPrestationss);
    }

    /**
     * Method called to associate a OperationPrestations object to this object
     * through the OperationPrestations foreign key attribute.
     *
     * @param    OperationPrestations $l OperationPrestations
     * @return Operations The current object (for fluent API support)
     */
    public function addOperationPrestations(OperationPrestations $l)
    {
        if ($this->collOperationPrestationss === null) {
            $this->initOperationPrestationss();
            $this->collOperationPrestationssPartial = true;
        }

        if (!in_array($l, $this->collOperationPrestationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationPrestations($l);

            if ($this->operationPrestationssScheduledForDeletion and $this->operationPrestationssScheduledForDeletion->contains($l)) {
                $this->operationPrestationssScheduledForDeletion->remove($this->operationPrestationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationPrestations $operationPrestations The operationPrestations object to add.
     */
    protected function doAddOperationPrestations($operationPrestations)
    {
        $this->collOperationPrestationss[]= $operationPrestations;
        $operationPrestations->setOperations($this);
    }

    /**
     * @param	OperationPrestations $operationPrestations The operationPrestations object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeOperationPrestations($operationPrestations)
    {
        if ($this->getOperationPrestationss()->contains($operationPrestations)) {
            $this->collOperationPrestationss->remove($this->collOperationPrestationss->search($operationPrestations));
            if (null === $this->operationPrestationssScheduledForDeletion) {
                $this->operationPrestationssScheduledForDeletion = clone $this->collOperationPrestationss;
                $this->operationPrestationssScheduledForDeletion->clear();
            }
            $this->operationPrestationssScheduledForDeletion[]= $operationPrestations;
            $operationPrestations->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationScenarii($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationScenarii', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationRubriques($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationRubriques', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinRPrestations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('RPrestations', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationPrimes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationPrimes', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinHistoCouts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('HistoCouts', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinUsers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('Users', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }

    /**
     * Clears out the collOperationPrimess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addOperationPrimess()
     */
    public function clearOperationPrimess()
    {
        $this->collOperationPrimess = null; // important to set this to null since that means it is uninitialized
        $this->collOperationPrimessPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationPrimess collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationPrimess($v = true)
    {
        $this->collOperationPrimessPartial = $v;
    }

    /**
     * Initializes the collOperationPrimess collection.
     *
     * By default this just sets the collOperationPrimess collection to an empty array (like clearcollOperationPrimess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationPrimess($overrideExisting = true)
    {
        if (null !== $this->collOperationPrimess && !$overrideExisting) {
            return;
        }
        $this->collOperationPrimess = new PropelObjectCollection();
        $this->collOperationPrimess->setModel('OperationPrimes');
    }

    /**
     * Gets an array of OperationPrimes objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationPrimes[] List of OperationPrimes objects
     * @throws PropelException
     */
    public function getOperationPrimess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationPrimessPartial && !$this->isNew();
        if (null === $this->collOperationPrimess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationPrimess) {
                // return empty collection
                $this->initOperationPrimess();
            } else {
                $collOperationPrimess = OperationPrimesQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationPrimessPartial && count($collOperationPrimess)) {
                      $this->initOperationPrimess(false);

                      foreach ($collOperationPrimess as $obj) {
                        if (false == $this->collOperationPrimess->contains($obj)) {
                          $this->collOperationPrimess->append($obj);
                        }
                      }

                      $this->collOperationPrimessPartial = true;
                    }

                    $collOperationPrimess->getInternalIterator()->rewind();

                    return $collOperationPrimess;
                }

                if ($partial && $this->collOperationPrimess) {
                    foreach ($this->collOperationPrimess as $obj) {
                        if ($obj->isNew()) {
                            $collOperationPrimess[] = $obj;
                        }
                    }
                }

                $this->collOperationPrimess = $collOperationPrimess;
                $this->collOperationPrimessPartial = false;
            }
        }

        return $this->collOperationPrimess;
    }

    /**
     * Sets a collection of OperationPrimes objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationPrimess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationPrimess(PropelCollection $operationPrimess, PropelPDO $con = null)
    {
        $operationPrimessToDelete = $this->getOperationPrimess(new Criteria(), $con)->diff($operationPrimess);


        $this->operationPrimessScheduledForDeletion = $operationPrimessToDelete;

        foreach ($operationPrimessToDelete as $operationPrimesRemoved) {
            $operationPrimesRemoved->setOperations(null);
        }

        $this->collOperationPrimess = null;
        foreach ($operationPrimess as $operationPrimes) {
            $this->addOperationPrimes($operationPrimes);
        }

        $this->collOperationPrimess = $operationPrimess;
        $this->collOperationPrimessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationPrimes objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationPrimes objects.
     * @throws PropelException
     */
    public function countOperationPrimess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationPrimessPartial && !$this->isNew();
        if (null === $this->collOperationPrimess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationPrimess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationPrimess());
            }
            $query = OperationPrimesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collOperationPrimess);
    }

    /**
     * Method called to associate a OperationPrimes object to this object
     * through the OperationPrimes foreign key attribute.
     *
     * @param    OperationPrimes $l OperationPrimes
     * @return Operations The current object (for fluent API support)
     */
    public function addOperationPrimes(OperationPrimes $l)
    {
        if ($this->collOperationPrimess === null) {
            $this->initOperationPrimess();
            $this->collOperationPrimessPartial = true;
        }

        if (!in_array($l, $this->collOperationPrimess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationPrimes($l);

            if ($this->operationPrimessScheduledForDeletion and $this->operationPrimessScheduledForDeletion->contains($l)) {
                $this->operationPrimessScheduledForDeletion->remove($this->operationPrimessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationPrimes $operationPrimes The operationPrimes object to add.
     */
    protected function doAddOperationPrimes($operationPrimes)
    {
        $this->collOperationPrimess[]= $operationPrimes;
        $operationPrimes->setOperations($this);
    }

    /**
     * @param	OperationPrimes $operationPrimes The operationPrimes object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeOperationPrimes($operationPrimes)
    {
        if ($this->getOperationPrimess()->contains($operationPrimes)) {
            $this->collOperationPrimess->remove($this->collOperationPrimess->search($operationPrimes));
            if (null === $this->operationPrimessScheduledForDeletion) {
                $this->operationPrimessScheduledForDeletion = clone $this->collOperationPrimess;
                $this->operationPrimessScheduledForDeletion->clear();
            }
            $this->operationPrimessScheduledForDeletion[]= $operationPrimes;
            $operationPrimes->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationPrimess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrimes[] List of OperationPrimes objects
     */
    public function getOperationPrimessJoinRCurrencies($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrimesQuery::create(null, $criteria);
        $query->joinWith('RCurrencies', $join_behavior);

        return $this->getOperationPrimess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationPrimess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrimes[] List of OperationPrimes objects
     */
    public function getOperationPrimessJoinRRewardTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrimesQuery::create(null, $criteria);
        $query->joinWith('RRewardTypes', $join_behavior);

        return $this->getOperationPrimess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationPrimess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrimes[] List of OperationPrimes objects
     */
    public function getOperationPrimessJoinRRewardExpeditionModes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrimesQuery::create(null, $criteria);
        $query->joinWith('RRewardExpeditionModes', $join_behavior);

        return $this->getOperationPrimess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationPrimess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrimes[] List of OperationPrimes objects
     */
    public function getOperationPrimessJoinRRewardTransporters($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrimesQuery::create(null, $criteria);
        $query->joinWith('RRewardTransporters', $join_behavior);

        return $this->getOperationPrimess($query, $con);
    }

    /**
     * Clears out the collOperationRubriquess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addOperationRubriquess()
     */
    public function clearOperationRubriquess()
    {
        $this->collOperationRubriquess = null; // important to set this to null since that means it is uninitialized
        $this->collOperationRubriquessPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationRubriquess collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationRubriquess($v = true)
    {
        $this->collOperationRubriquessPartial = $v;
    }

    /**
     * Initializes the collOperationRubriquess collection.
     *
     * By default this just sets the collOperationRubriquess collection to an empty array (like clearcollOperationRubriquess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationRubriquess($overrideExisting = true)
    {
        if (null !== $this->collOperationRubriquess && !$overrideExisting) {
            return;
        }
        $this->collOperationRubriquess = new PropelObjectCollection();
        $this->collOperationRubriquess->setModel('OperationRubriques');
    }

    /**
     * Gets an array of OperationRubriques objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationRubriques[] List of OperationRubriques objects
     * @throws PropelException
     */
    public function getOperationRubriquess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationRubriquessPartial && !$this->isNew();
        if (null === $this->collOperationRubriquess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationRubriquess) {
                // return empty collection
                $this->initOperationRubriquess();
            } else {
                $collOperationRubriquess = OperationRubriquesQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationRubriquessPartial && count($collOperationRubriquess)) {
                      $this->initOperationRubriquess(false);

                      foreach ($collOperationRubriquess as $obj) {
                        if (false == $this->collOperationRubriquess->contains($obj)) {
                          $this->collOperationRubriquess->append($obj);
                        }
                      }

                      $this->collOperationRubriquessPartial = true;
                    }

                    $collOperationRubriquess->getInternalIterator()->rewind();

                    return $collOperationRubriquess;
                }

                if ($partial && $this->collOperationRubriquess) {
                    foreach ($this->collOperationRubriquess as $obj) {
                        if ($obj->isNew()) {
                            $collOperationRubriquess[] = $obj;
                        }
                    }
                }

                $this->collOperationRubriquess = $collOperationRubriquess;
                $this->collOperationRubriquessPartial = false;
            }
        }

        return $this->collOperationRubriquess;
    }

    /**
     * Sets a collection of OperationRubriques objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationRubriquess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationRubriquess(PropelCollection $operationRubriquess, PropelPDO $con = null)
    {
        $operationRubriquessToDelete = $this->getOperationRubriquess(new Criteria(), $con)->diff($operationRubriquess);


        $this->operationRubriquessScheduledForDeletion = $operationRubriquessToDelete;

        foreach ($operationRubriquessToDelete as $operationRubriquesRemoved) {
            $operationRubriquesRemoved->setOperations(null);
        }

        $this->collOperationRubriquess = null;
        foreach ($operationRubriquess as $operationRubriques) {
            $this->addOperationRubriques($operationRubriques);
        }

        $this->collOperationRubriquess = $operationRubriquess;
        $this->collOperationRubriquessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationRubriques objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationRubriques objects.
     * @throws PropelException
     */
    public function countOperationRubriquess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationRubriquessPartial && !$this->isNew();
        if (null === $this->collOperationRubriquess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationRubriquess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationRubriquess());
            }
            $query = OperationRubriquesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collOperationRubriquess);
    }

    /**
     * Method called to associate a OperationRubriques object to this object
     * through the OperationRubriques foreign key attribute.
     *
     * @param    OperationRubriques $l OperationRubriques
     * @return Operations The current object (for fluent API support)
     */
    public function addOperationRubriques(OperationRubriques $l)
    {
        if ($this->collOperationRubriquess === null) {
            $this->initOperationRubriquess();
            $this->collOperationRubriquessPartial = true;
        }

        if (!in_array($l, $this->collOperationRubriquess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationRubriques($l);

            if ($this->operationRubriquessScheduledForDeletion and $this->operationRubriquessScheduledForDeletion->contains($l)) {
                $this->operationRubriquessScheduledForDeletion->remove($this->operationRubriquessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationRubriques $operationRubriques The operationRubriques object to add.
     */
    protected function doAddOperationRubriques($operationRubriques)
    {
        $this->collOperationRubriquess[]= $operationRubriques;
        $operationRubriques->setOperations($this);
    }

    /**
     * @param	OperationRubriques $operationRubriques The operationRubriques object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeOperationRubriques($operationRubriques)
    {
        if ($this->getOperationRubriquess()->contains($operationRubriques)) {
            $this->collOperationRubriquess->remove($this->collOperationRubriquess->search($operationRubriques));
            if (null === $this->operationRubriquessScheduledForDeletion) {
                $this->operationRubriquessScheduledForDeletion = clone $this->collOperationRubriquess;
                $this->operationRubriquessScheduledForDeletion->clear();
            }
            $this->operationRubriquessScheduledForDeletion[]= $operationRubriques;
            $operationRubriques->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationRubriquess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationRubriques[] List of OperationRubriques objects
     */
    public function getOperationRubriquessJoinRRubriquesType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationRubriquesQuery::create(null, $criteria);
        $query->joinWith('RRubriquesType', $join_behavior);

        return $this->getOperationRubriquess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationRubriquess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationRubriques[] List of OperationRubriques objects
     */
    public function getOperationRubriquessJoinRTvaType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationRubriquesQuery::create(null, $criteria);
        $query->joinWith('RTvaType', $join_behavior);

        return $this->getOperationRubriquess($query, $con);
    }

    /**
     * Clears out the collOperationScenariis collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addOperationScenariis()
     */
    public function clearOperationScenariis()
    {
        $this->collOperationScenariis = null; // important to set this to null since that means it is uninitialized
        $this->collOperationScenariisPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationScenariis collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationScenariis($v = true)
    {
        $this->collOperationScenariisPartial = $v;
    }

    /**
     * Initializes the collOperationScenariis collection.
     *
     * By default this just sets the collOperationScenariis collection to an empty array (like clearcollOperationScenariis());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationScenariis($overrideExisting = true)
    {
        if (null !== $this->collOperationScenariis && !$overrideExisting) {
            return;
        }
        $this->collOperationScenariis = new PropelObjectCollection();
        $this->collOperationScenariis->setModel('OperationScenarii');
    }

    /**
     * Gets an array of OperationScenarii objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationScenarii[] List of OperationScenarii objects
     * @throws PropelException
     */
    public function getOperationScenariis($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationScenariisPartial && !$this->isNew();
        if (null === $this->collOperationScenariis || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationScenariis) {
                // return empty collection
                $this->initOperationScenariis();
            } else {
                $collOperationScenariis = OperationScenariiQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationScenariisPartial && count($collOperationScenariis)) {
                      $this->initOperationScenariis(false);

                      foreach ($collOperationScenariis as $obj) {
                        if (false == $this->collOperationScenariis->contains($obj)) {
                          $this->collOperationScenariis->append($obj);
                        }
                      }

                      $this->collOperationScenariisPartial = true;
                    }

                    $collOperationScenariis->getInternalIterator()->rewind();

                    return $collOperationScenariis;
                }

                if ($partial && $this->collOperationScenariis) {
                    foreach ($this->collOperationScenariis as $obj) {
                        if ($obj->isNew()) {
                            $collOperationScenariis[] = $obj;
                        }
                    }
                }

                $this->collOperationScenariis = $collOperationScenariis;
                $this->collOperationScenariisPartial = false;
            }
        }

        return $this->collOperationScenariis;
    }

    /**
     * Sets a collection of OperationScenarii objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationScenariis A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationScenariis(PropelCollection $operationScenariis, PropelPDO $con = null)
    {
        $operationScenariisToDelete = $this->getOperationScenariis(new Criteria(), $con)->diff($operationScenariis);


        $this->operationScenariisScheduledForDeletion = $operationScenariisToDelete;

        foreach ($operationScenariisToDelete as $operationScenariiRemoved) {
            $operationScenariiRemoved->setOperations(null);
        }

        $this->collOperationScenariis = null;
        foreach ($operationScenariis as $operationScenarii) {
            $this->addOperationScenarii($operationScenarii);
        }

        $this->collOperationScenariis = $operationScenariis;
        $this->collOperationScenariisPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationScenarii objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationScenarii objects.
     * @throws PropelException
     */
    public function countOperationScenariis(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationScenariisPartial && !$this->isNew();
        if (null === $this->collOperationScenariis || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationScenariis) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationScenariis());
            }
            $query = OperationScenariiQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collOperationScenariis);
    }

    /**
     * Method called to associate a OperationScenarii object to this object
     * through the OperationScenarii foreign key attribute.
     *
     * @param    OperationScenarii $l OperationScenarii
     * @return Operations The current object (for fluent API support)
     */
    public function addOperationScenarii(OperationScenarii $l)
    {
        if ($this->collOperationScenariis === null) {
            $this->initOperationScenariis();
            $this->collOperationScenariisPartial = true;
        }

        if (!in_array($l, $this->collOperationScenariis->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationScenarii($l);

            if ($this->operationScenariisScheduledForDeletion and $this->operationScenariisScheduledForDeletion->contains($l)) {
                $this->operationScenariisScheduledForDeletion->remove($this->operationScenariisScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationScenarii $operationScenarii The operationScenarii object to add.
     */
    protected function doAddOperationScenarii($operationScenarii)
    {
        $this->collOperationScenariis[]= $operationScenarii;
        $operationScenarii->setOperations($this);
    }

    /**
     * @param	OperationScenarii $operationScenarii The operationScenarii object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeOperationScenarii($operationScenarii)
    {
        if ($this->getOperationScenariis()->contains($operationScenarii)) {
            $this->collOperationScenariis->remove($this->collOperationScenariis->search($operationScenarii));
            if (null === $this->operationScenariisScheduledForDeletion) {
                $this->operationScenariisScheduledForDeletion = clone $this->collOperationScenariis;
                $this->operationScenariisScheduledForDeletion->clear();
            }
            $this->operationScenariisScheduledForDeletion[]= $operationScenarii;
            $operationScenarii->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationScenariis from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationScenarii[] List of OperationScenarii objects
     */
    public function getOperationScenariisJoinRScenarios($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationScenariiQuery::create(null, $criteria);
        $query->joinWith('RScenarios', $join_behavior);

        return $this->getOperationScenariis($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationScenariis from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationScenarii[] List of OperationScenarii objects
     */
    public function getOperationScenariisJoinOperationPrimes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationScenariiQuery::create(null, $criteria);
        $query->joinWith('OperationPrimes', $join_behavior);

        return $this->getOperationScenariis($query, $con);
    }

    /**
     * Clears out the collOperationStatutss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addOperationStatutss()
     */
    public function clearOperationStatutss()
    {
        $this->collOperationStatutss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationStatutssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationStatutss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationStatutss($v = true)
    {
        $this->collOperationStatutssPartial = $v;
    }

    /**
     * Initializes the collOperationStatutss collection.
     *
     * By default this just sets the collOperationStatutss collection to an empty array (like clearcollOperationStatutss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationStatutss($overrideExisting = true)
    {
        if (null !== $this->collOperationStatutss && !$overrideExisting) {
            return;
        }
        $this->collOperationStatutss = new PropelObjectCollection();
        $this->collOperationStatutss->setModel('OperationStatuts');
    }

    /**
     * Gets an array of OperationStatuts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     * @throws PropelException
     */
    public function getOperationStatutss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationStatutssPartial && !$this->isNew();
        if (null === $this->collOperationStatutss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationStatutss) {
                // return empty collection
                $this->initOperationStatutss();
            } else {
                $collOperationStatutss = OperationStatutsQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationStatutssPartial && count($collOperationStatutss)) {
                      $this->initOperationStatutss(false);

                      foreach ($collOperationStatutss as $obj) {
                        if (false == $this->collOperationStatutss->contains($obj)) {
                          $this->collOperationStatutss->append($obj);
                        }
                      }

                      $this->collOperationStatutssPartial = true;
                    }

                    $collOperationStatutss->getInternalIterator()->rewind();

                    return $collOperationStatutss;
                }

                if ($partial && $this->collOperationStatutss) {
                    foreach ($this->collOperationStatutss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationStatutss[] = $obj;
                        }
                    }
                }

                $this->collOperationStatutss = $collOperationStatutss;
                $this->collOperationStatutssPartial = false;
            }
        }

        return $this->collOperationStatutss;
    }

    /**
     * Sets a collection of OperationStatuts objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationStatutss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationStatutss(PropelCollection $operationStatutss, PropelPDO $con = null)
    {
        $operationStatutssToDelete = $this->getOperationStatutss(new Criteria(), $con)->diff($operationStatutss);


        $this->operationStatutssScheduledForDeletion = $operationStatutssToDelete;

        foreach ($operationStatutssToDelete as $operationStatutsRemoved) {
            $operationStatutsRemoved->setOperations(null);
        }

        $this->collOperationStatutss = null;
        foreach ($operationStatutss as $operationStatuts) {
            $this->addOperationStatuts($operationStatuts);
        }

        $this->collOperationStatutss = $operationStatutss;
        $this->collOperationStatutssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationStatuts objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationStatuts objects.
     * @throws PropelException
     */
    public function countOperationStatutss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationStatutssPartial && !$this->isNew();
        if (null === $this->collOperationStatutss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationStatutss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationStatutss());
            }
            $query = OperationStatutsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collOperationStatutss);
    }

    /**
     * Method called to associate a OperationStatuts object to this object
     * through the OperationStatuts foreign key attribute.
     *
     * @param    OperationStatuts $l OperationStatuts
     * @return Operations The current object (for fluent API support)
     */
    public function addOperationStatuts(OperationStatuts $l)
    {
        if ($this->collOperationStatutss === null) {
            $this->initOperationStatutss();
            $this->collOperationStatutssPartial = true;
        }

        if (!in_array($l, $this->collOperationStatutss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationStatuts($l);

            if ($this->operationStatutssScheduledForDeletion and $this->operationStatutssScheduledForDeletion->contains($l)) {
                $this->operationStatutssScheduledForDeletion->remove($this->operationStatutssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationStatuts $operationStatuts The operationStatuts object to add.
     */
    protected function doAddOperationStatuts($operationStatuts)
    {
        $this->collOperationStatutss[]= $operationStatuts;
        $operationStatuts->setOperations($this);
    }

    /**
     * @param	OperationStatuts $operationStatuts The operationStatuts object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeOperationStatuts($operationStatuts)
    {
        if ($this->getOperationStatutss()->contains($operationStatuts)) {
            $this->collOperationStatutss->remove($this->collOperationStatutss->search($operationStatuts));
            if (null === $this->operationStatutssScheduledForDeletion) {
                $this->operationStatutssScheduledForDeletion = clone $this->collOperationStatutss;
                $this->operationStatutssScheduledForDeletion->clear();
            }
            $this->operationStatutssScheduledForDeletion[]= $operationStatuts;
            $operationStatuts->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinOldROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('OldROperationStatus', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinNewROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('NewROperationStatus', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinROperationStatutRefus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatutRefus', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinUsers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('Users', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }

    /**
     * Clears out the collOperationTaskss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addOperationTaskss()
     */
    public function clearOperationTaskss()
    {
        $this->collOperationTaskss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationTaskssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationTaskss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationTaskss($v = true)
    {
        $this->collOperationTaskssPartial = $v;
    }

    /**
     * Initializes the collOperationTaskss collection.
     *
     * By default this just sets the collOperationTaskss collection to an empty array (like clearcollOperationTaskss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationTaskss($overrideExisting = true)
    {
        if (null !== $this->collOperationTaskss && !$overrideExisting) {
            return;
        }
        $this->collOperationTaskss = new PropelObjectCollection();
        $this->collOperationTaskss->setModel('OperationTasks');
    }

    /**
     * Gets an array of OperationTasks objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationTasks[] List of OperationTasks objects
     * @throws PropelException
     */
    public function getOperationTaskss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationTaskssPartial && !$this->isNew();
        if (null === $this->collOperationTaskss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationTaskss) {
                // return empty collection
                $this->initOperationTaskss();
            } else {
                $collOperationTaskss = OperationTasksQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationTaskssPartial && count($collOperationTaskss)) {
                      $this->initOperationTaskss(false);

                      foreach ($collOperationTaskss as $obj) {
                        if (false == $this->collOperationTaskss->contains($obj)) {
                          $this->collOperationTaskss->append($obj);
                        }
                      }

                      $this->collOperationTaskssPartial = true;
                    }

                    $collOperationTaskss->getInternalIterator()->rewind();

                    return $collOperationTaskss;
                }

                if ($partial && $this->collOperationTaskss) {
                    foreach ($this->collOperationTaskss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationTaskss[] = $obj;
                        }
                    }
                }

                $this->collOperationTaskss = $collOperationTaskss;
                $this->collOperationTaskssPartial = false;
            }
        }

        return $this->collOperationTaskss;
    }

    /**
     * Sets a collection of OperationTasks objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationTaskss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationTaskss(PropelCollection $operationTaskss, PropelPDO $con = null)
    {
        $operationTaskssToDelete = $this->getOperationTaskss(new Criteria(), $con)->diff($operationTaskss);


        $this->operationTaskssScheduledForDeletion = $operationTaskssToDelete;

        foreach ($operationTaskssToDelete as $operationTasksRemoved) {
            $operationTasksRemoved->setOperations(null);
        }

        $this->collOperationTaskss = null;
        foreach ($operationTaskss as $operationTasks) {
            $this->addOperationTasks($operationTasks);
        }

        $this->collOperationTaskss = $operationTaskss;
        $this->collOperationTaskssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationTasks objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationTasks objects.
     * @throws PropelException
     */
    public function countOperationTaskss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationTaskssPartial && !$this->isNew();
        if (null === $this->collOperationTaskss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationTaskss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationTaskss());
            }
            $query = OperationTasksQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collOperationTaskss);
    }

    /**
     * Method called to associate a OperationTasks object to this object
     * through the OperationTasks foreign key attribute.
     *
     * @param    OperationTasks $l OperationTasks
     * @return Operations The current object (for fluent API support)
     */
    public function addOperationTasks(OperationTasks $l)
    {
        if ($this->collOperationTaskss === null) {
            $this->initOperationTaskss();
            $this->collOperationTaskssPartial = true;
        }

        if (!in_array($l, $this->collOperationTaskss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationTasks($l);

            if ($this->operationTaskssScheduledForDeletion and $this->operationTaskssScheduledForDeletion->contains($l)) {
                $this->operationTaskssScheduledForDeletion->remove($this->operationTaskssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationTasks $operationTasks The operationTasks object to add.
     */
    protected function doAddOperationTasks($operationTasks)
    {
        $this->collOperationTaskss[]= $operationTasks;
        $operationTasks->setOperations($this);
    }

    /**
     * @param	OperationTasks $operationTasks The operationTasks object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeOperationTasks($operationTasks)
    {
        if ($this->getOperationTaskss()->contains($operationTasks)) {
            $this->collOperationTaskss->remove($this->collOperationTaskss->search($operationTasks));
            if (null === $this->operationTaskssScheduledForDeletion) {
                $this->operationTaskssScheduledForDeletion = clone $this->collOperationTaskss;
                $this->operationTaskssScheduledForDeletion->clear();
            }
            $this->operationTaskssScheduledForDeletion[]= $operationTasks;
            $operationTasks->setOperations(null);
        }

        return $this;
    }

    /**
     * Clears out the collOperationssRelatedByOpId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addOperationssRelatedByOpId()
     */
    public function clearOperationssRelatedByOpId()
    {
        $this->collOperationssRelatedByOpId = null; // important to set this to null since that means it is uninitialized
        $this->collOperationssRelatedByOpIdPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationssRelatedByOpId collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationssRelatedByOpId($v = true)
    {
        $this->collOperationssRelatedByOpIdPartial = $v;
    }

    /**
     * Initializes the collOperationssRelatedByOpId collection.
     *
     * By default this just sets the collOperationssRelatedByOpId collection to an empty array (like clearcollOperationssRelatedByOpId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationssRelatedByOpId($overrideExisting = true)
    {
        if (null !== $this->collOperationssRelatedByOpId && !$overrideExisting) {
            return;
        }
        $this->collOperationssRelatedByOpId = new PropelObjectCollection();
        $this->collOperationssRelatedByOpId->setModel('Operations');
    }

    /**
     * Gets an array of Operations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Operations[] List of Operations objects
     * @throws PropelException
     */
    public function getOperationssRelatedByOpId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpId) {
                // return empty collection
                $this->initOperationssRelatedByOpId();
            } else {
                $collOperationssRelatedByOpId = OperationsQuery::create(null, $criteria)
                    ->filterByOperationsRelatedByOpParentId($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationssRelatedByOpIdPartial && count($collOperationssRelatedByOpId)) {
                      $this->initOperationssRelatedByOpId(false);

                      foreach ($collOperationssRelatedByOpId as $obj) {
                        if (false == $this->collOperationssRelatedByOpId->contains($obj)) {
                          $this->collOperationssRelatedByOpId->append($obj);
                        }
                      }

                      $this->collOperationssRelatedByOpIdPartial = true;
                    }

                    $collOperationssRelatedByOpId->getInternalIterator()->rewind();

                    return $collOperationssRelatedByOpId;
                }

                if ($partial && $this->collOperationssRelatedByOpId) {
                    foreach ($this->collOperationssRelatedByOpId as $obj) {
                        if ($obj->isNew()) {
                            $collOperationssRelatedByOpId[] = $obj;
                        }
                    }
                }

                $this->collOperationssRelatedByOpId = $collOperationssRelatedByOpId;
                $this->collOperationssRelatedByOpIdPartial = false;
            }
        }

        return $this->collOperationssRelatedByOpId;
    }

    /**
     * Sets a collection of OperationsRelatedByOpId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationssRelatedByOpId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setOperationssRelatedByOpId(PropelCollection $operationssRelatedByOpId, PropelPDO $con = null)
    {
        $operationssRelatedByOpIdToDelete = $this->getOperationssRelatedByOpId(new Criteria(), $con)->diff($operationssRelatedByOpId);


        $this->operationssRelatedByOpIdScheduledForDeletion = $operationssRelatedByOpIdToDelete;

        foreach ($operationssRelatedByOpIdToDelete as $operationsRelatedByOpIdRemoved) {
            $operationsRelatedByOpIdRemoved->setOperationsRelatedByOpParentId(null);
        }

        $this->collOperationssRelatedByOpId = null;
        foreach ($operationssRelatedByOpId as $operationsRelatedByOpId) {
            $this->addOperationsRelatedByOpId($operationsRelatedByOpId);
        }

        $this->collOperationssRelatedByOpId = $operationssRelatedByOpId;
        $this->collOperationssRelatedByOpIdPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Operations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Operations objects.
     * @throws PropelException
     */
    public function countOperationssRelatedByOpId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationssRelatedByOpId());
            }
            $query = OperationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperationsRelatedByOpParentId($this)
                ->count($con);
        }

        return count($this->collOperationssRelatedByOpId);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return Operations The current object (for fluent API support)
     */
    public function addOperationsRelatedByOpId(Operations $l)
    {
        if ($this->collOperationssRelatedByOpId === null) {
            $this->initOperationssRelatedByOpId();
            $this->collOperationssRelatedByOpIdPartial = true;
        }

        if (!in_array($l, $this->collOperationssRelatedByOpId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationsRelatedByOpId($l);

            if ($this->operationssRelatedByOpIdScheduledForDeletion and $this->operationssRelatedByOpIdScheduledForDeletion->contains($l)) {
                $this->operationssRelatedByOpIdScheduledForDeletion->remove($this->operationssRelatedByOpIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationsRelatedByOpId $operationsRelatedByOpId The operationsRelatedByOpId object to add.
     */
    protected function doAddOperationsRelatedByOpId($operationsRelatedByOpId)
    {
        $this->collOperationssRelatedByOpId[]= $operationsRelatedByOpId;
        $operationsRelatedByOpId->setOperationsRelatedByOpParentId($this);
    }

    /**
     * @param	OperationsRelatedByOpId $operationsRelatedByOpId The operationsRelatedByOpId object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeOperationsRelatedByOpId($operationsRelatedByOpId)
    {
        if ($this->getOperationssRelatedByOpId()->contains($operationsRelatedByOpId)) {
            $this->collOperationssRelatedByOpId->remove($this->collOperationssRelatedByOpId->search($operationsRelatedByOpId));
            if (null === $this->operationssRelatedByOpIdScheduledForDeletion) {
                $this->operationssRelatedByOpIdScheduledForDeletion = clone $this->collOperationssRelatedByOpId;
                $this->operationssRelatedByOpIdScheduledForDeletion->clear();
            }
            $this->operationssRelatedByOpIdScheduledForDeletion[]= $operationsRelatedByOpId;
            $operationsRelatedByOpId->setOperationsRelatedByOpParentId(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinContactClient($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactClient', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinUserDC($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserDC', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinUserCP($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCP', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinUserCdp($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCdp', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinClientContratOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientContratOptions', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinClientSiteForLog($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientSiteForLog', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinGedelogOperationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('GedelogOperationParams', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatus', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinRCustomActivites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RCustomActivites', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinROperationType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationType', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinROperationTypeSub($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSub', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinOperationsExt($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsExt', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinRDelaiDevis($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RDelaiDevis', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinInvoicingAddressContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('InvoicingAddressContact', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinOperationUniverse($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationUniverse', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinOperationMedia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationMedia', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinOperationTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationTemplate', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related OperationssRelatedByOpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpIdJoinROperationClassifications($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationClassifications', $join_behavior);

        return $this->getOperationssRelatedByOpId($query, $con);
    }

    /**
     * Clears out the collPlanFacturationDetailss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addPlanFacturationDetailss()
     */
    public function clearPlanFacturationDetailss()
    {
        $this->collPlanFacturationDetailss = null; // important to set this to null since that means it is uninitialized
        $this->collPlanFacturationDetailssPartial = null;

        return $this;
    }

    /**
     * reset is the collPlanFacturationDetailss collection loaded partially
     *
     * @return void
     */
    public function resetPartialPlanFacturationDetailss($v = true)
    {
        $this->collPlanFacturationDetailssPartial = $v;
    }

    /**
     * Initializes the collPlanFacturationDetailss collection.
     *
     * By default this just sets the collPlanFacturationDetailss collection to an empty array (like clearcollPlanFacturationDetailss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPlanFacturationDetailss($overrideExisting = true)
    {
        if (null !== $this->collPlanFacturationDetailss && !$overrideExisting) {
            return;
        }
        $this->collPlanFacturationDetailss = new PropelObjectCollection();
        $this->collPlanFacturationDetailss->setModel('PlanFacturationDetails');
    }

    /**
     * Gets an array of PlanFacturationDetails objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     * @throws PropelException
     */
    public function getPlanFacturationDetailss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPlanFacturationDetailssPartial && !$this->isNew();
        if (null === $this->collPlanFacturationDetailss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPlanFacturationDetailss) {
                // return empty collection
                $this->initPlanFacturationDetailss();
            } else {
                $collPlanFacturationDetailss = PlanFacturationDetailsQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPlanFacturationDetailssPartial && count($collPlanFacturationDetailss)) {
                      $this->initPlanFacturationDetailss(false);

                      foreach ($collPlanFacturationDetailss as $obj) {
                        if (false == $this->collPlanFacturationDetailss->contains($obj)) {
                          $this->collPlanFacturationDetailss->append($obj);
                        }
                      }

                      $this->collPlanFacturationDetailssPartial = true;
                    }

                    $collPlanFacturationDetailss->getInternalIterator()->rewind();

                    return $collPlanFacturationDetailss;
                }

                if ($partial && $this->collPlanFacturationDetailss) {
                    foreach ($this->collPlanFacturationDetailss as $obj) {
                        if ($obj->isNew()) {
                            $collPlanFacturationDetailss[] = $obj;
                        }
                    }
                }

                $this->collPlanFacturationDetailss = $collPlanFacturationDetailss;
                $this->collPlanFacturationDetailssPartial = false;
            }
        }

        return $this->collPlanFacturationDetailss;
    }

    /**
     * Sets a collection of PlanFacturationDetails objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $planFacturationDetailss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setPlanFacturationDetailss(PropelCollection $planFacturationDetailss, PropelPDO $con = null)
    {
        $planFacturationDetailssToDelete = $this->getPlanFacturationDetailss(new Criteria(), $con)->diff($planFacturationDetailss);


        $this->planFacturationDetailssScheduledForDeletion = $planFacturationDetailssToDelete;

        foreach ($planFacturationDetailssToDelete as $planFacturationDetailsRemoved) {
            $planFacturationDetailsRemoved->setOperations(null);
        }

        $this->collPlanFacturationDetailss = null;
        foreach ($planFacturationDetailss as $planFacturationDetails) {
            $this->addPlanFacturationDetails($planFacturationDetails);
        }

        $this->collPlanFacturationDetailss = $planFacturationDetailss;
        $this->collPlanFacturationDetailssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PlanFacturationDetails objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related PlanFacturationDetails objects.
     * @throws PropelException
     */
    public function countPlanFacturationDetailss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPlanFacturationDetailssPartial && !$this->isNew();
        if (null === $this->collPlanFacturationDetailss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPlanFacturationDetailss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPlanFacturationDetailss());
            }
            $query = PlanFacturationDetailsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collPlanFacturationDetailss);
    }

    /**
     * Method called to associate a PlanFacturationDetails object to this object
     * through the PlanFacturationDetails foreign key attribute.
     *
     * @param    PlanFacturationDetails $l PlanFacturationDetails
     * @return Operations The current object (for fluent API support)
     */
    public function addPlanFacturationDetails(PlanFacturationDetails $l)
    {
        if ($this->collPlanFacturationDetailss === null) {
            $this->initPlanFacturationDetailss();
            $this->collPlanFacturationDetailssPartial = true;
        }

        if (!in_array($l, $this->collPlanFacturationDetailss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPlanFacturationDetails($l);

            if ($this->planFacturationDetailssScheduledForDeletion and $this->planFacturationDetailssScheduledForDeletion->contains($l)) {
                $this->planFacturationDetailssScheduledForDeletion->remove($this->planFacturationDetailssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	PlanFacturationDetails $planFacturationDetails The planFacturationDetails object to add.
     */
    protected function doAddPlanFacturationDetails($planFacturationDetails)
    {
        $this->collPlanFacturationDetailss[]= $planFacturationDetails;
        $planFacturationDetails->setOperations($this);
    }

    /**
     * @param	PlanFacturationDetails $planFacturationDetails The planFacturationDetails object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removePlanFacturationDetails($planFacturationDetails)
    {
        if ($this->getPlanFacturationDetailss()->contains($planFacturationDetails)) {
            $this->collPlanFacturationDetailss->remove($this->collPlanFacturationDetailss->search($planFacturationDetails));
            if (null === $this->planFacturationDetailssScheduledForDeletion) {
                $this->planFacturationDetailssScheduledForDeletion = clone $this->collPlanFacturationDetailss;
                $this->planFacturationDetailssScheduledForDeletion->clear();
            }
            $this->planFacturationDetailssScheduledForDeletion[]= clone $planFacturationDetails;
            $planFacturationDetails->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related PlanFacturationDetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssJoinRFactureTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('RFactureTypes', $join_behavior);

        return $this->getPlanFacturationDetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related PlanFacturationDetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssJoinFactureToCancel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('FactureToCancel', $join_behavior);

        return $this->getPlanFacturationDetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related PlanFacturationDetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssJoinPlanFacturationDetailToCancel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('PlanFacturationDetailToCancel', $join_behavior);

        return $this->getPlanFacturationDetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related PlanFacturationDetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssJoinFactureGenerated($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('FactureGenerated', $join_behavior);

        return $this->getPlanFacturationDetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related PlanFacturationDetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssJoinInvoiceCancellationMotive($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('InvoiceCancellationMotive', $join_behavior);

        return $this->getPlanFacturationDetailss($query, $con);
    }

    /**
     * Clears out the collPlanFacturationParamss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addPlanFacturationParamss()
     */
    public function clearPlanFacturationParamss()
    {
        $this->collPlanFacturationParamss = null; // important to set this to null since that means it is uninitialized
        $this->collPlanFacturationParamssPartial = null;

        return $this;
    }

    /**
     * reset is the collPlanFacturationParamss collection loaded partially
     *
     * @return void
     */
    public function resetPartialPlanFacturationParamss($v = true)
    {
        $this->collPlanFacturationParamssPartial = $v;
    }

    /**
     * Initializes the collPlanFacturationParamss collection.
     *
     * By default this just sets the collPlanFacturationParamss collection to an empty array (like clearcollPlanFacturationParamss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPlanFacturationParamss($overrideExisting = true)
    {
        if (null !== $this->collPlanFacturationParamss && !$overrideExisting) {
            return;
        }
        $this->collPlanFacturationParamss = new PropelObjectCollection();
        $this->collPlanFacturationParamss->setModel('PlanFacturationParams');
    }

    /**
     * Gets an array of PlanFacturationParams objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|PlanFacturationParams[] List of PlanFacturationParams objects
     * @throws PropelException
     */
    public function getPlanFacturationParamss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPlanFacturationParamssPartial && !$this->isNew();
        if (null === $this->collPlanFacturationParamss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPlanFacturationParamss) {
                // return empty collection
                $this->initPlanFacturationParamss();
            } else {
                $collPlanFacturationParamss = PlanFacturationParamsQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPlanFacturationParamssPartial && count($collPlanFacturationParamss)) {
                      $this->initPlanFacturationParamss(false);

                      foreach ($collPlanFacturationParamss as $obj) {
                        if (false == $this->collPlanFacturationParamss->contains($obj)) {
                          $this->collPlanFacturationParamss->append($obj);
                        }
                      }

                      $this->collPlanFacturationParamssPartial = true;
                    }

                    $collPlanFacturationParamss->getInternalIterator()->rewind();

                    return $collPlanFacturationParamss;
                }

                if ($partial && $this->collPlanFacturationParamss) {
                    foreach ($this->collPlanFacturationParamss as $obj) {
                        if ($obj->isNew()) {
                            $collPlanFacturationParamss[] = $obj;
                        }
                    }
                }

                $this->collPlanFacturationParamss = $collPlanFacturationParamss;
                $this->collPlanFacturationParamssPartial = false;
            }
        }

        return $this->collPlanFacturationParamss;
    }

    /**
     * Sets a collection of PlanFacturationParams objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $planFacturationParamss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setPlanFacturationParamss(PropelCollection $planFacturationParamss, PropelPDO $con = null)
    {
        $planFacturationParamssToDelete = $this->getPlanFacturationParamss(new Criteria(), $con)->diff($planFacturationParamss);


        $this->planFacturationParamssScheduledForDeletion = $planFacturationParamssToDelete;

        foreach ($planFacturationParamssToDelete as $planFacturationParamsRemoved) {
            $planFacturationParamsRemoved->setOperations(null);
        }

        $this->collPlanFacturationParamss = null;
        foreach ($planFacturationParamss as $planFacturationParams) {
            $this->addPlanFacturationParams($planFacturationParams);
        }

        $this->collPlanFacturationParamss = $planFacturationParamss;
        $this->collPlanFacturationParamssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PlanFacturationParams objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related PlanFacturationParams objects.
     * @throws PropelException
     */
    public function countPlanFacturationParamss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPlanFacturationParamssPartial && !$this->isNew();
        if (null === $this->collPlanFacturationParamss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPlanFacturationParamss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPlanFacturationParamss());
            }
            $query = PlanFacturationParamsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collPlanFacturationParamss);
    }

    /**
     * Method called to associate a PlanFacturationParams object to this object
     * through the PlanFacturationParams foreign key attribute.
     *
     * @param    PlanFacturationParams $l PlanFacturationParams
     * @return Operations The current object (for fluent API support)
     */
    public function addPlanFacturationParams(PlanFacturationParams $l)
    {
        if ($this->collPlanFacturationParamss === null) {
            $this->initPlanFacturationParamss();
            $this->collPlanFacturationParamssPartial = true;
        }

        if (!in_array($l, $this->collPlanFacturationParamss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPlanFacturationParams($l);

            if ($this->planFacturationParamssScheduledForDeletion and $this->planFacturationParamssScheduledForDeletion->contains($l)) {
                $this->planFacturationParamssScheduledForDeletion->remove($this->planFacturationParamssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	PlanFacturationParams $planFacturationParams The planFacturationParams object to add.
     */
    protected function doAddPlanFacturationParams($planFacturationParams)
    {
        $this->collPlanFacturationParamss[]= $planFacturationParams;
        $planFacturationParams->setOperations($this);
    }

    /**
     * @param	PlanFacturationParams $planFacturationParams The planFacturationParams object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removePlanFacturationParams($planFacturationParams)
    {
        if ($this->getPlanFacturationParamss()->contains($planFacturationParams)) {
            $this->collPlanFacturationParamss->remove($this->collPlanFacturationParamss->search($planFacturationParams));
            if (null === $this->planFacturationParamssScheduledForDeletion) {
                $this->planFacturationParamssScheduledForDeletion = clone $this->collPlanFacturationParamss;
                $this->planFacturationParamssScheduledForDeletion->clear();
            }
            $this->planFacturationParamssScheduledForDeletion[]= clone $planFacturationParams;
            $planFacturationParams->setOperations(null);
        }

        return $this;
    }

    /**
     * Clears out the collFactureEditionHistorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addFactureEditionHistorys()
     */
    public function clearFactureEditionHistorys()
    {
        $this->collFactureEditionHistorys = null; // important to set this to null since that means it is uninitialized
        $this->collFactureEditionHistorysPartial = null;

        return $this;
    }

    /**
     * reset is the collFactureEditionHistorys collection loaded partially
     *
     * @return void
     */
    public function resetPartialFactureEditionHistorys($v = true)
    {
        $this->collFactureEditionHistorysPartial = $v;
    }

    /**
     * Initializes the collFactureEditionHistorys collection.
     *
     * By default this just sets the collFactureEditionHistorys collection to an empty array (like clearcollFactureEditionHistorys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFactureEditionHistorys($overrideExisting = true)
    {
        if (null !== $this->collFactureEditionHistorys && !$overrideExisting) {
            return;
        }
        $this->collFactureEditionHistorys = new PropelObjectCollection();
        $this->collFactureEditionHistorys->setModel('FactureEditionHistory');
    }

    /**
     * Gets an array of FactureEditionHistory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     * @throws PropelException
     */
    public function getFactureEditionHistorys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFactureEditionHistorysPartial && !$this->isNew();
        if (null === $this->collFactureEditionHistorys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFactureEditionHistorys) {
                // return empty collection
                $this->initFactureEditionHistorys();
            } else {
                $collFactureEditionHistorys = FactureEditionHistoryQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFactureEditionHistorysPartial && count($collFactureEditionHistorys)) {
                      $this->initFactureEditionHistorys(false);

                      foreach ($collFactureEditionHistorys as $obj) {
                        if (false == $this->collFactureEditionHistorys->contains($obj)) {
                          $this->collFactureEditionHistorys->append($obj);
                        }
                      }

                      $this->collFactureEditionHistorysPartial = true;
                    }

                    $collFactureEditionHistorys->getInternalIterator()->rewind();

                    return $collFactureEditionHistorys;
                }

                if ($partial && $this->collFactureEditionHistorys) {
                    foreach ($this->collFactureEditionHistorys as $obj) {
                        if ($obj->isNew()) {
                            $collFactureEditionHistorys[] = $obj;
                        }
                    }
                }

                $this->collFactureEditionHistorys = $collFactureEditionHistorys;
                $this->collFactureEditionHistorysPartial = false;
            }
        }

        return $this->collFactureEditionHistorys;
    }

    /**
     * Sets a collection of FactureEditionHistory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $factureEditionHistorys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setFactureEditionHistorys(PropelCollection $factureEditionHistorys, PropelPDO $con = null)
    {
        $factureEditionHistorysToDelete = $this->getFactureEditionHistorys(new Criteria(), $con)->diff($factureEditionHistorys);


        $this->factureEditionHistorysScheduledForDeletion = $factureEditionHistorysToDelete;

        foreach ($factureEditionHistorysToDelete as $factureEditionHistoryRemoved) {
            $factureEditionHistoryRemoved->setOperations(null);
        }

        $this->collFactureEditionHistorys = null;
        foreach ($factureEditionHistorys as $factureEditionHistory) {
            $this->addFactureEditionHistory($factureEditionHistory);
        }

        $this->collFactureEditionHistorys = $factureEditionHistorys;
        $this->collFactureEditionHistorysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related FactureEditionHistory objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related FactureEditionHistory objects.
     * @throws PropelException
     */
    public function countFactureEditionHistorys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFactureEditionHistorysPartial && !$this->isNew();
        if (null === $this->collFactureEditionHistorys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFactureEditionHistorys) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFactureEditionHistorys());
            }
            $query = FactureEditionHistoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperations($this)
                ->count($con);
        }

        return count($this->collFactureEditionHistorys);
    }

    /**
     * Method called to associate a FactureEditionHistory object to this object
     * through the FactureEditionHistory foreign key attribute.
     *
     * @param    FactureEditionHistory $l FactureEditionHistory
     * @return Operations The current object (for fluent API support)
     */
    public function addFactureEditionHistory(FactureEditionHistory $l)
    {
        if ($this->collFactureEditionHistorys === null) {
            $this->initFactureEditionHistorys();
            $this->collFactureEditionHistorysPartial = true;
        }

        if (!in_array($l, $this->collFactureEditionHistorys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFactureEditionHistory($l);

            if ($this->factureEditionHistorysScheduledForDeletion and $this->factureEditionHistorysScheduledForDeletion->contains($l)) {
                $this->factureEditionHistorysScheduledForDeletion->remove($this->factureEditionHistorysScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to add.
     */
    protected function doAddFactureEditionHistory($factureEditionHistory)
    {
        $this->collFactureEditionHistorys[]= $factureEditionHistory;
        $factureEditionHistory->setOperations($this);
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to remove.
     * @return Operations The current object (for fluent API support)
     */
    public function removeFactureEditionHistory($factureEditionHistory)
    {
        if ($this->getFactureEditionHistorys()->contains($factureEditionHistory)) {
            $this->collFactureEditionHistorys->remove($this->collFactureEditionHistorys->search($factureEditionHistory));
            if (null === $this->factureEditionHistorysScheduledForDeletion) {
                $this->factureEditionHistorysScheduledForDeletion = clone $this->collFactureEditionHistorys;
                $this->factureEditionHistorysScheduledForDeletion->clear();
            }
            $this->factureEditionHistorysScheduledForDeletion[]= clone $factureEditionHistory;
            $factureEditionHistory->setOperations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinRFactureTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('RFactureTypes', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinRFactureStatuts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('RFactureStatuts', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinPlanFacturationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('PlanFacturationParams', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinRFactureOptionsEcheances($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('RFactureOptionsEcheances', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinJournalDeVente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('JournalDeVente', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinFactReeditionUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('FactReeditionUser', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Operations is new, it will return
     * an empty collection; or if this Operations has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Operations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinReeditedFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('ReeditedFacture', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }

    /**
     * Clears out the collRRubriquesTypes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addRRubriquesTypes()
     */
    public function clearRRubriquesTypes()
    {
        $this->collRRubriquesTypes = null; // important to set this to null since that means it is uninitialized
        $this->collRRubriquesTypesPartial = null;

        return $this;
    }

    /**
     * Initializes the collRRubriquesTypes collection.
     *
     * By default this just sets the collRRubriquesTypes collection to an empty collection (like clearRRubriquesTypes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initRRubriquesTypes()
    {
        $this->collRRubriquesTypes = new PropelObjectCollection();
        $this->collRRubriquesTypes->setModel('RRubriquesType');
    }

    /**
     * Gets a collection of RRubriquesType objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param PropelPDO $con Optional connection object
     *
     * @return PropelObjectCollection|RRubriquesType[] List of RRubriquesType objects
     */
    public function getRRubriquesTypes($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collRRubriquesTypes || null !== $criteria) {
            if ($this->isNew() && null === $this->collRRubriquesTypes) {
                // return empty collection
                $this->initRRubriquesTypes();
            } else {
                $collRRubriquesTypes = RRubriquesTypeQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collRRubriquesTypes;
                }
                $this->collRRubriquesTypes = $collRRubriquesTypes;
            }
        }

        return $this->collRRubriquesTypes;
    }

    /**
     * Sets a collection of RRubriquesType objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rRubriquesTypes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setRRubriquesTypes(PropelCollection $rRubriquesTypes, PropelPDO $con = null)
    {
        $this->clearRRubriquesTypes();
        $currentRRubriquesTypes = $this->getRRubriquesTypes(null, $con);

        $this->rRubriquesTypesScheduledForDeletion = $currentRRubriquesTypes->diff($rRubriquesTypes);

        foreach ($rRubriquesTypes as $rRubriquesType) {
            if (!$currentRRubriquesTypes->contains($rRubriquesType)) {
                $this->doAddRRubriquesType($rRubriquesType);
            }
        }

        $this->collRRubriquesTypes = $rRubriquesTypes;

        return $this;
    }

    /**
     * Gets the number of RRubriquesType objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param boolean $distinct Set to true to force count distinct
     * @param PropelPDO $con Optional connection object
     *
     * @return int the number of related RRubriquesType objects
     */
    public function countRRubriquesTypes($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collRRubriquesTypes || null !== $criteria) {
            if ($this->isNew() && null === $this->collRRubriquesTypes) {
                return 0;
            } else {
                $query = RRubriquesTypeQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByOperations($this)
                    ->count($con);
            }
        } else {
            return count($this->collRRubriquesTypes);
        }
    }

    /**
     * Associate a RRubriquesType object to this object
     * through the operation_rubriques cross reference table.
     *
     * @param  RRubriquesType $rRubriquesType The OperationRubriques object to relate
     * @return Operations The current object (for fluent API support)
     */
    public function addRRubriquesType(RRubriquesType $rRubriquesType)
    {
        if ($this->collRRubriquesTypes === null) {
            $this->initRRubriquesTypes();
        }

        if (!$this->collRRubriquesTypes->contains($rRubriquesType)) { // only add it if the **same** object is not already associated
            $this->doAddRRubriquesType($rRubriquesType);
            $this->collRRubriquesTypes[] = $rRubriquesType;

            if ($this->rRubriquesTypesScheduledForDeletion and $this->rRubriquesTypesScheduledForDeletion->contains($rRubriquesType)) {
                $this->rRubriquesTypesScheduledForDeletion->remove($this->rRubriquesTypesScheduledForDeletion->search($rRubriquesType));
            }
        }

        return $this;
    }

    /**
     * @param	RRubriquesType $rRubriquesType The rRubriquesType object to add.
     */
    protected function doAddRRubriquesType(RRubriquesType $rRubriquesType)
    {
        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$rRubriquesType->getOperationss()->contains($this)) { $operationRubriques = new OperationRubriques();
            $operationRubriques->setRRubriquesType($rRubriquesType);
            $this->addOperationRubriques($operationRubriques);

            $foreignCollection = $rRubriquesType->getOperationss();
            $foreignCollection[] = $this;
        }
    }

    /**
     * Remove a RRubriquesType object to this object
     * through the operation_rubriques cross reference table.
     *
     * @param RRubriquesType $rRubriquesType The OperationRubriques object to relate
     * @return Operations The current object (for fluent API support)
     */
    public function removeRRubriquesType(RRubriquesType $rRubriquesType)
    {
        if ($this->getRRubriquesTypes()->contains($rRubriquesType)) {
            $this->collRRubriquesTypes->remove($this->collRRubriquesTypes->search($rRubriquesType));
            if (null === $this->rRubriquesTypesScheduledForDeletion) {
                $this->rRubriquesTypesScheduledForDeletion = clone $this->collRRubriquesTypes;
                $this->rRubriquesTypesScheduledForDeletion->clear();
            }
            $this->rRubriquesTypesScheduledForDeletion[]= $rRubriquesType;
        }

        return $this;
    }

    /**
     * Clears out the collRTvaTypes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Operations The current object (for fluent API support)
     * @see        addRTvaTypes()
     */
    public function clearRTvaTypes()
    {
        $this->collRTvaTypes = null; // important to set this to null since that means it is uninitialized
        $this->collRTvaTypesPartial = null;

        return $this;
    }

    /**
     * Initializes the collRTvaTypes collection.
     *
     * By default this just sets the collRTvaTypes collection to an empty collection (like clearRTvaTypes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initRTvaTypes()
    {
        $this->collRTvaTypes = new PropelObjectCollection();
        $this->collRTvaTypes->setModel('RTvaType');
    }

    /**
     * Gets a collection of RTvaType objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Operations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param PropelPDO $con Optional connection object
     *
     * @return PropelObjectCollection|RTvaType[] List of RTvaType objects
     */
    public function getRTvaTypes($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collRTvaTypes || null !== $criteria) {
            if ($this->isNew() && null === $this->collRTvaTypes) {
                // return empty collection
                $this->initRTvaTypes();
            } else {
                $collRTvaTypes = RTvaTypeQuery::create(null, $criteria)
                    ->filterByOperations($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collRTvaTypes;
                }
                $this->collRTvaTypes = $collRTvaTypes;
            }
        }

        return $this->collRTvaTypes;
    }

    /**
     * Sets a collection of RTvaType objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rTvaTypes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Operations The current object (for fluent API support)
     */
    public function setRTvaTypes(PropelCollection $rTvaTypes, PropelPDO $con = null)
    {
        $this->clearRTvaTypes();
        $currentRTvaTypes = $this->getRTvaTypes(null, $con);

        $this->rTvaTypesScheduledForDeletion = $currentRTvaTypes->diff($rTvaTypes);

        foreach ($rTvaTypes as $rTvaType) {
            if (!$currentRTvaTypes->contains($rTvaType)) {
                $this->doAddRTvaType($rTvaType);
            }
        }

        $this->collRTvaTypes = $rTvaTypes;

        return $this;
    }

    /**
     * Gets the number of RTvaType objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param boolean $distinct Set to true to force count distinct
     * @param PropelPDO $con Optional connection object
     *
     * @return int the number of related RTvaType objects
     */
    public function countRTvaTypes($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collRTvaTypes || null !== $criteria) {
            if ($this->isNew() && null === $this->collRTvaTypes) {
                return 0;
            } else {
                $query = RTvaTypeQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByOperations($this)
                    ->count($con);
            }
        } else {
            return count($this->collRTvaTypes);
        }
    }

    /**
     * Associate a RTvaType object to this object
     * through the operation_rubriques cross reference table.
     *
     * @param  RTvaType $rTvaType The OperationRubriques object to relate
     * @return Operations The current object (for fluent API support)
     */
    public function addRTvaType(RTvaType $rTvaType)
    {
        if ($this->collRTvaTypes === null) {
            $this->initRTvaTypes();
        }

        if (!$this->collRTvaTypes->contains($rTvaType)) { // only add it if the **same** object is not already associated
            $this->doAddRTvaType($rTvaType);
            $this->collRTvaTypes[] = $rTvaType;

            if ($this->rTvaTypesScheduledForDeletion and $this->rTvaTypesScheduledForDeletion->contains($rTvaType)) {
                $this->rTvaTypesScheduledForDeletion->remove($this->rTvaTypesScheduledForDeletion->search($rTvaType));
            }
        }

        return $this;
    }

    /**
     * @param	RTvaType $rTvaType The rTvaType object to add.
     */
    protected function doAddRTvaType(RTvaType $rTvaType)
    {
        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$rTvaType->getOperationss()->contains($this)) { $operationRubriques = new OperationRubriques();
            $operationRubriques->setRTvaType($rTvaType);
            $this->addOperationRubriques($operationRubriques);

            $foreignCollection = $rTvaType->getOperationss();
            $foreignCollection[] = $this;
        }
    }

    /**
     * Remove a RTvaType object to this object
     * through the operation_rubriques cross reference table.
     *
     * @param RTvaType $rTvaType The OperationRubriques object to relate
     * @return Operations The current object (for fluent API support)
     */
    public function removeRTvaType(RTvaType $rTvaType)
    {
        if ($this->getRTvaTypes()->contains($rTvaType)) {
            $this->collRTvaTypes->remove($this->collRTvaTypes->search($rTvaType));
            if (null === $this->rTvaTypesScheduledForDeletion) {
                $this->rTvaTypesScheduledForDeletion = clone $this->collRTvaTypes;
                $this->rTvaTypesScheduledForDeletion->clear();
            }
            $this->rTvaTypesScheduledForDeletion[]= $rTvaType;
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->op_id = null;
        $this->op_number = null;
        $this->op_cl_id = null;
        $this->op_ct_id = null;
        $this->op_ct_fact_id = null;
        $this->op_libelle = null;
        $this->op_type_id = null;
        $this->op_subtype_id = null;
        $this->op_act_id = null;
        $this->operation_universe_id = null;
        $this->operation_media_id = null;
        $this->operation_ost_tpl_id = null;
        $this->op_project_type_id = null;
        $this->op_dc_id = null;
        $this->op_cp_id = null;
        $this->op_cdp_id = null;
        $this->op_description = null;
        $this->op_commentaire = null;
        $this->op_modalite = null;
        $this->op_stamp_start = null;
        $this->op_stamp_end = null;
        $this->op_stamp_close = null;
        $this->op_dateconso_start = null;
        $this->op_dateconso_end = null;
        $this->op_dateposte_end = null;
        $this->op_status_id = null;
        $this->op_use_presta_negoce = null;
        $this->op_taux_conversion = null;
        $this->op_delai_trait_courrier_id = null;
        $this->op_delai_devis_id = null;
        $this->op_mails_dest = null;
        $this->op_date_relance_couts = null;
        $this->user_id = null;
        $this->user_modify = null;
        $this->date_create = null;
        $this->date_modify = null;
        $this->actif = null;
        $this->op_cgv_id = null;
        $this->op_freq_stat_mail_id = null;
        $this->op_date_last_send_stat = null;
        $this->op_attach_file_stats_excel = null;
        $this->op_devis_lang = null;
        $this->op_brief_log = null;
        $this->op_has_mail_archiv_sent = null;
        $this->cl_site_id_for_log = null;
        $this->op_date_last_compil_data = null;
        $this->op_ct_fact_addr_id = null;
        $this->op_parent_id = null;
        $this->op_date_archivage_end = null;
        $this->op_classification_id = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collFacturess) {
                foreach ($this->collFacturess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkOperationOptions) {
                foreach ($this->collLnkOperationOptions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkOperationsContactsMails) {
                foreach ($this->collLnkOperationsContactsMails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkOperationCountrys) {
                foreach ($this->collLnkOperationCountrys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationDecouvertss) {
                foreach ($this->collOperationDecouvertss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationPrestationss) {
                foreach ($this->collOperationPrestationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationPrimess) {
                foreach ($this->collOperationPrimess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationRubriquess) {
                foreach ($this->collOperationRubriquess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationScenariis) {
                foreach ($this->collOperationScenariis as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationStatutss) {
                foreach ($this->collOperationStatutss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationTaskss) {
                foreach ($this->collOperationTaskss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationssRelatedByOpId) {
                foreach ($this->collOperationssRelatedByOpId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPlanFacturationDetailss) {
                foreach ($this->collPlanFacturationDetailss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPlanFacturationParamss) {
                foreach ($this->collPlanFacturationParamss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFactureEditionHistorys) {
                foreach ($this->collFactureEditionHistorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRRubriquesTypes) {
                foreach ($this->collRRubriquesTypes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRTvaTypes) {
                foreach ($this->collRTvaTypes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aClients instanceof Persistent) {
              $this->aClients->clearAllReferences($deep);
            }
            if ($this->aContactClient instanceof Persistent) {
              $this->aContactClient->clearAllReferences($deep);
            }
            if ($this->aContactFacturation instanceof Persistent) {
              $this->aContactFacturation->clearAllReferences($deep);
            }
            if ($this->aUserDC instanceof Persistent) {
              $this->aUserDC->clearAllReferences($deep);
            }
            if ($this->aUserCP instanceof Persistent) {
              $this->aUserCP->clearAllReferences($deep);
            }
            if ($this->aUserCdp instanceof Persistent) {
              $this->aUserCdp->clearAllReferences($deep);
            }
            if ($this->aClientFactureOptions instanceof Persistent) {
              $this->aClientFactureOptions->clearAllReferences($deep);
            }
            if ($this->aClientContratOptions instanceof Persistent) {
              $this->aClientContratOptions->clearAllReferences($deep);
            }
            if ($this->aClientSiteForLog instanceof Persistent) {
              $this->aClientSiteForLog->clearAllReferences($deep);
            }
            if ($this->aGedelogOperationParams instanceof Persistent) {
              $this->aGedelogOperationParams->clearAllReferences($deep);
            }
            if ($this->aROperationStatus instanceof Persistent) {
              $this->aROperationStatus->clearAllReferences($deep);
            }
            if ($this->aRCustomActivites instanceof Persistent) {
              $this->aRCustomActivites->clearAllReferences($deep);
            }
            if ($this->aROperationType instanceof Persistent) {
              $this->aROperationType->clearAllReferences($deep);
            }
            if ($this->aROperationTypeSub instanceof Persistent) {
              $this->aROperationTypeSub->clearAllReferences($deep);
            }
            if ($this->aOperationsExt instanceof Persistent) {
              $this->aOperationsExt->clearAllReferences($deep);
            }
            if ($this->aRDelaiDevis instanceof Persistent) {
              $this->aRDelaiDevis->clearAllReferences($deep);
            }
            if ($this->aInvoicingAddressContact instanceof Persistent) {
              $this->aInvoicingAddressContact->clearAllReferences($deep);
            }
            if ($this->aOperationsRelatedByOpParentId instanceof Persistent) {
              $this->aOperationsRelatedByOpParentId->clearAllReferences($deep);
            }
            if ($this->aOperationUniverse instanceof Persistent) {
              $this->aOperationUniverse->clearAllReferences($deep);
            }
            if ($this->aOperationMedia instanceof Persistent) {
              $this->aOperationMedia->clearAllReferences($deep);
            }
            if ($this->aOperationTemplate instanceof Persistent) {
              $this->aOperationTemplate->clearAllReferences($deep);
            }
            if ($this->aROperationClassifications instanceof Persistent) {
              $this->aROperationClassifications->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFacturess instanceof PropelCollection) {
            $this->collFacturess->clearIterator();
        }
        $this->collFacturess = null;
        if ($this->collLnkOperationOptions instanceof PropelCollection) {
            $this->collLnkOperationOptions->clearIterator();
        }
        $this->collLnkOperationOptions = null;
        if ($this->collLnkOperationsContactsMails instanceof PropelCollection) {
            $this->collLnkOperationsContactsMails->clearIterator();
        }
        $this->collLnkOperationsContactsMails = null;
        if ($this->collLnkOperationCountrys instanceof PropelCollection) {
            $this->collLnkOperationCountrys->clearIterator();
        }
        $this->collLnkOperationCountrys = null;
        if ($this->collOperationDecouvertss instanceof PropelCollection) {
            $this->collOperationDecouvertss->clearIterator();
        }
        $this->collOperationDecouvertss = null;
        if ($this->collOperationPrestationss instanceof PropelCollection) {
            $this->collOperationPrestationss->clearIterator();
        }
        $this->collOperationPrestationss = null;
        if ($this->collOperationPrimess instanceof PropelCollection) {
            $this->collOperationPrimess->clearIterator();
        }
        $this->collOperationPrimess = null;
        if ($this->collOperationRubriquess instanceof PropelCollection) {
            $this->collOperationRubriquess->clearIterator();
        }
        $this->collOperationRubriquess = null;
        if ($this->collOperationScenariis instanceof PropelCollection) {
            $this->collOperationScenariis->clearIterator();
        }
        $this->collOperationScenariis = null;
        if ($this->collOperationStatutss instanceof PropelCollection) {
            $this->collOperationStatutss->clearIterator();
        }
        $this->collOperationStatutss = null;
        if ($this->collOperationTaskss instanceof PropelCollection) {
            $this->collOperationTaskss->clearIterator();
        }
        $this->collOperationTaskss = null;
        if ($this->collOperationssRelatedByOpId instanceof PropelCollection) {
            $this->collOperationssRelatedByOpId->clearIterator();
        }
        $this->collOperationssRelatedByOpId = null;
        if ($this->collPlanFacturationDetailss instanceof PropelCollection) {
            $this->collPlanFacturationDetailss->clearIterator();
        }
        $this->collPlanFacturationDetailss = null;
        if ($this->collPlanFacturationParamss instanceof PropelCollection) {
            $this->collPlanFacturationParamss->clearIterator();
        }
        $this->collPlanFacturationParamss = null;
        if ($this->collFactureEditionHistorys instanceof PropelCollection) {
            $this->collFactureEditionHistorys->clearIterator();
        }
        $this->collFactureEditionHistorys = null;
        if ($this->collRRubriquesTypes instanceof PropelCollection) {
            $this->collRRubriquesTypes->clearIterator();
        }
        $this->collRRubriquesTypes = null;
        if ($this->collRTvaTypes instanceof PropelCollection) {
            $this->collRTvaTypes->clearIterator();
        }
        $this->collRTvaTypes = null;
        $this->aClients = null;
        $this->aContactClient = null;
        $this->aContactFacturation = null;
        $this->aUserDC = null;
        $this->aUserCP = null;
        $this->aUserCdp = null;
        $this->aClientFactureOptions = null;
        $this->aClientContratOptions = null;
        $this->aClientSiteForLog = null;
        $this->aGedelogOperationParams = null;
        $this->aROperationStatus = null;
        $this->aRCustomActivites = null;
        $this->aROperationType = null;
        $this->aROperationTypeSub = null;
        $this->aOperationsExt = null;
        $this->aRDelaiDevis = null;
        $this->aInvoicingAddressContact = null;
        $this->aOperationsRelatedByOpParentId = null;
        $this->aOperationUniverse = null;
        $this->aOperationMedia = null;
        $this->aOperationTemplate = null;
        $this->aROperationClassifications = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OperationsPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

    // validateisunique behavior
    
                protected function _validateIsUnique(){
                    $oTableMap = $this->getPeer()->getTableMap();
                    $sTableName = $oTableMap->getName();
                    $aColumns = array (
      0 => 'op_number',
    );
                    $aPrimaryKeys = $oTableMap->getPrimaryKeyColumns();
    
                    $bModified = false;
                    $aModifiedColumns = $this->getModifiedColumns();
                    foreach($aColumns as $sColumn){
                        if(in_array($sTableName.'.'.$sColumn,$aModifiedColumns)){
                            $bModified = true;
                            continue;
                        }
                    }
    
                    if(!$bModified){
                        return;
                    }
    
                    $oCriteria = new Criteria();
    
                    foreach($aPrimaryKeys as $oColumn){
                        $sGetter = 'get' . $oColumn->getPhpName();
                        $oCriteria->add($oColumn->getFullyQualifiedName(), $this->$sGetter(), Criteria::NOT_EQUAL);
                    }
    
                    // Add "actif" criteria if column exists
                    if ($oTableMap->hasColumn('actif')) {
                        $oCriteria->add('actif', 1, Criteria::EQUAL);
                    }
    
                    foreach ($aColumns as $sColumn) {
                        $oColumn = $oTableMap->getColumn($sColumn);
                        $sGetter = 'get' . $oColumn->getPhpName();
                        $oCriteria->add($oColumn->getFullyQualifiedName(), $this->$sGetter(), Criteria::EQUAL);
                    }
    
                    if(call_user_func(array($oTableMap->getClassName() . 'Peer', 'doCount'), $oCriteria)){
                        if(count($aColumns) === 1){
                            $this->addValidationFailed('Ce numéro d\'opération est déjà utilisé.', $aColumns[0]);
                        } else {
                            $this->addValidationFailed('Ce numéro d\'opération est déjà utilisé.', 'error');
                        }
                    }
                }

    // adderror behavior
    
    /**
    *
    * @param string $message
    * @param string $colName
    * @param string $validator
    */
    public function addValidationFailed( $message, $colName='error', $validator=null){
        $this->validationFailures[$colName][]=new ValidationFailed($colName, $message, $validator);
    }
    
    /**
    *
    * @param string $colName
    * @param string $message
    * @param string $validator
    */
    protected function preValidate(){

        $oReflectionClass=new ReflectionClass($this);
        $aMethods=$oReflectionClass->getMethods();
        foreach($aMethods as $method){
            if(strpos( $method->name,'_validateIs')!==false){
                $this->{$method->name}();
            }
        }
    }

    // utils behavior

            /**
            * Return connection object
            * @return PropelPDO
            */
            public function getConnection(){
                return BaseOperationsPeer::getConnection();
            }
}
