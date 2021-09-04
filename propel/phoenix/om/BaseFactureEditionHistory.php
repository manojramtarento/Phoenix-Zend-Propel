<?php


/**
 * Base class that represents a row from the 'facture_edition_history' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseFactureEditionHistory extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FactureEditionHistoryPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FactureEditionHistoryPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the fact_eh_id field.
     * @var        int
     */
    protected $fact_eh_id;

    /**
     * The value for the fact_eh_user_id field.
     * @var        int
     */
    protected $fact_eh_user_id;

    /**
     * The value for the reedition_date field.
     * @var        string
     */
    protected $reedition_date;

    /**
     * The value for the fact_id field.
     * @var        int
     */
    protected $fact_id;

    /**
     * The value for the r_fact_type_id field.
     * @var        int
     */
    protected $r_fact_type_id;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the cl_id field.
     * @var        int
     */
    protected $cl_id;

    /**
     * The value for the ct_id field.
     * @var        int
     */
    protected $ct_id;

    /**
     * The value for the dc_id field.
     * @var        int
     */
    protected $dc_id;

    /**
     * The value for the fact_numero field.
     * @var        int
     */
    protected $fact_numero;

    /**
     * The value for the fact_reference field.
     * @var        string
     */
    protected $fact_reference;

    /**
     * The value for the fact_lang field.
     * @var        string
     */
    protected $fact_lang;

    /**
     * The value for the fact_num_cmd field.
     * @var        string
     */
    protected $fact_num_cmd;

    /**
     * The value for the fact_montant_ht field.
     * @var        float
     */
    protected $fact_montant_ht;

    /**
     * The value for the fact_montant_ttc field.
     * @var        float
     */
    protected $fact_montant_ttc;

    /**
     * The value for the fact_montant_encaisse field.
     * @var        float
     */
    protected $fact_montant_encaisse;

    /**
     * The value for the fact_destinataire field.
     * @var        string
     */
    protected $fact_destinataire;

    /**
     * The value for the fact_attention field.
     * @var        string
     */
    protected $fact_attention;

    /**
     * The value for the fact_adresse1 field.
     * @var        string
     */
    protected $fact_adresse1;

    /**
     * The value for the fact_adresse2 field.
     * @var        string
     */
    protected $fact_adresse2;

    /**
     * The value for the fact_adresse3 field.
     * @var        string
     */
    protected $fact_adresse3;

    /**
     * The value for the fact_code_postal field.
     * @var        string
     */
    protected $fact_code_postal;

    /**
     * The value for the fact_ville field.
     * @var        string
     */
    protected $fact_ville;

    /**
     * The value for the fact_pays field.
     * @var        string
     */
    protected $fact_pays;

    /**
     * The value for the fact_mention_spec field.
     * @var        string
     */
    protected $fact_mention_spec;

    /**
     * The value for the fact_user_edition field.
     * @var        int
     */
    protected $fact_user_edition;

    /**
     * The value for the fact_status_id field.
     * @var        int
     */
    protected $fact_status_id;

    /**
     * The value for the fact_verrou field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $fact_verrou;

    /**
     * The value for the fact_has_relance field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $fact_has_relance;

    /**
     * The value for the fact_annul_id field.
     * @var        int
     */
    protected $fact_annul_id;

    /**
     * The value for the fact_date_echeance field.
     * @var        string
     */
    protected $fact_date_echeance;

    /**
     * The value for the fact_taux_adf field.
     * @var        float
     */
    protected $fact_taux_adf;

    /**
     * The value for the fact_date_create field.
     * @var        string
     */
    protected $fact_date_create;

    /**
     * The value for the fact_date_modify field.
     * @var        string
     */
    protected $fact_date_modify;

    /**
     * The value for the fact_user_id field.
     * @var        int
     */
    protected $fact_user_id;

    /**
     * The value for the fact_user_modify field.
     * @var        int
     */
    protected $fact_user_modify;

    /**
     * The value for the fact_echeance_id field.
     * @var        int
     */
    protected $fact_echeance_id;

    /**
     * The value for the jdv_id field.
     * @var        int
     */
    protected $jdv_id;

    /**
     * The value for the fact_date field.
     * @var        string
     */
    protected $fact_date;

    /**
     * The value for the fact_email field.
     * @var        string
     */
    protected $fact_email;

    /**
     * @var        Operations
     */
    protected $aOperations;

    /**
     * @var        RFactureTypes
     */
    protected $aRFactureTypes;

    /**
     * @var        Clients
     */
    protected $aClients;

    /**
     * @var        ClientFactureOptions
     */
    protected $aClientFactureOptions;

    /**
     * @var        RFactureStatuts
     */
    protected $aRFactureStatuts;

    /**
     * @var        PlanFacturationParams
     */
    protected $aPlanFacturationParams;

    /**
     * @var        RFactureOptionsEcheances
     */
    protected $aRFactureOptionsEcheances;

    /**
     * @var        JournalDeVente
     */
    protected $aJournalDeVente;

    /**
     * @var        Contacts
     */
    protected $aContactFacturation;

    /**
     * @var        Users
     */
    protected $aFactReeditionUser;

    /**
     * @var        Factures
     */
    protected $aReeditedFacture;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->fact_verrou = false;
        $this->fact_has_relance = false;
    }

    /**
     * Initializes internal state of BaseFactureEditionHistory object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [fact_eh_id] column value.
     *
     * @return int
     */
    public function getFactEhId()
    {

        return $this->fact_eh_id;
    }

    /**
     * Get the [fact_eh_user_id] column value.
     *
     * @return int
     */
    public function getFactEhUserId()
    {

        return $this->fact_eh_user_id;
    }

    /**
     * Get the [optionally formatted] temporal [reedition_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getReeditionDate($format = 'Y-m-d H:i:s')
    {
        if ($this->reedition_date === null) {
            return null;
        }

        if ($this->reedition_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->reedition_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->reedition_date, true), $x);
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
     * Get the [fact_id] column value.
     *
     * @return int
     */
    public function getFactId()
    {

        return $this->fact_id;
    }

    /**
     * Get the [r_fact_type_id] column value.
     *
     * @return int
     */
    public function getRFactTypeId()
    {

        return $this->r_fact_type_id;
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
     * Get the [cl_id] column value.
     *
     * @return int
     */
    public function getClId()
    {

        return $this->cl_id;
    }

    /**
     * Get the [ct_id] column value.
     *
     * @return int
     */
    public function getCtId()
    {

        return $this->ct_id;
    }

    /**
     * Get the [dc_id] column value.
     *
     * @return int
     */
    public function getDcId()
    {

        return $this->dc_id;
    }

    /**
     * Get the [fact_numero] column value.
     *
     * @return int
     */
    public function getFactNumero()
    {

        return $this->fact_numero;
    }

    /**
     * Get the [fact_reference] column value.
     *
     * @return string
     */
    public function getFactReference()
    {

        return $this->fact_reference;
    }

    /**
     * Get the [fact_lang] column value.
     *
     * @return string
     */
    public function getFactLang()
    {

        return $this->fact_lang;
    }

    /**
     * Get the [fact_num_cmd] column value.
     *
     * @return string
     */
    public function getFactNumCmd()
    {

        return $this->fact_num_cmd;
    }

    /**
     * Get the [fact_montant_ht] column value.
     *
     * @return float
     */
    public function getFactMontantHt()
    {

        return $this->fact_montant_ht;
    }

    /**
     * Get the [fact_montant_ttc] column value.
     *
     * @return float
     */
    public function getFactMontantTtc()
    {

        return $this->fact_montant_ttc;
    }

    /**
     * Get the [fact_montant_encaisse] column value.
     *
     * @return float
     */
    public function getFactMontantEncaisse()
    {

        return $this->fact_montant_encaisse;
    }

    /**
     * Get the [fact_destinataire] column value.
     *
     * @return string
     */
    public function getFactDestinataire()
    {

        return $this->fact_destinataire;
    }

    /**
     * Get the [fact_attention] column value.
     *
     * @return string
     */
    public function getFactAttention()
    {

        return $this->fact_attention;
    }

    /**
     * Get the [fact_adresse1] column value.
     *
     * @return string
     */
    public function getFactAdresse1()
    {

        return $this->fact_adresse1;
    }

    /**
     * Get the [fact_adresse2] column value.
     *
     * @return string
     */
    public function getFactAdresse2()
    {

        return $this->fact_adresse2;
    }

    /**
     * Get the [fact_adresse3] column value.
     *
     * @return string
     */
    public function getFactAdresse3()
    {

        return $this->fact_adresse3;
    }

    /**
     * Get the [fact_code_postal] column value.
     *
     * @return string
     */
    public function getFactCodePostal()
    {

        return $this->fact_code_postal;
    }

    /**
     * Get the [fact_ville] column value.
     *
     * @return string
     */
    public function getFactVille()
    {

        return $this->fact_ville;
    }

    /**
     * Get the [fact_pays] column value.
     *
     * @return string
     */
    public function getFactPays()
    {

        return $this->fact_pays;
    }

    /**
     * Get the [fact_mention_spec] column value.
     *
     * @return string
     */
    public function getFactMentionSpec()
    {

        return $this->fact_mention_spec;
    }

    /**
     * Get the [fact_user_edition] column value.
     *
     * @return int
     */
    public function getFactUserEdition()
    {

        return $this->fact_user_edition;
    }

    /**
     * Get the [fact_status_id] column value.
     *
     * @return int
     */
    public function getFactStatusId()
    {

        return $this->fact_status_id;
    }

    /**
     * Get the [fact_verrou] column value.
     *
     * @return boolean
     */
    public function getFactVerrou()
    {

        return $this->fact_verrou;
    }

    /**
     * Get the [fact_has_relance] column value.
     *
     * @return boolean
     */
    public function getFactHasRelance()
    {

        return $this->fact_has_relance;
    }

    /**
     * Get the [fact_annul_id] column value.
     *
     * @return int
     */
    public function getFactAnnulId()
    {

        return $this->fact_annul_id;
    }

    /**
     * Get the [optionally formatted] temporal [fact_date_echeance] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFactDateEcheance($format = 'Y-m-d H:i:s')
    {
        if ($this->fact_date_echeance === null) {
            return null;
        }

        if ($this->fact_date_echeance === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->fact_date_echeance);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fact_date_echeance, true), $x);
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
     * Get the [fact_taux_adf] column value.
     *
     * @return float
     */
    public function getFactTauxAdf()
    {

        return $this->fact_taux_adf;
    }

    /**
     * Get the [optionally formatted] temporal [fact_date_create] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFactDateCreate($format = 'Y-m-d H:i:s')
    {
        if ($this->fact_date_create === null) {
            return null;
        }

        if ($this->fact_date_create === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->fact_date_create);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fact_date_create, true), $x);
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
     * Get the [optionally formatted] temporal [fact_date_modify] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFactDateModify($format = 'Y-m-d H:i:s')
    {
        if ($this->fact_date_modify === null) {
            return null;
        }

        if ($this->fact_date_modify === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->fact_date_modify);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fact_date_modify, true), $x);
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
     * Get the [fact_user_id] column value.
     *
     * @return int
     */
    public function getFactUserId()
    {

        return $this->fact_user_id;
    }

    /**
     * Get the [fact_user_modify] column value.
     *
     * @return int
     */
    public function getFactUserModify()
    {

        return $this->fact_user_modify;
    }

    /**
     * Get the [fact_echeance_id] column value.
     *
     * @return int
     */
    public function getFactEcheanceId()
    {

        return $this->fact_echeance_id;
    }

    /**
     * Get the [jdv_id] column value.
     *
     * @return int
     */
    public function getJdvId()
    {

        return $this->jdv_id;
    }

    /**
     * Get the [optionally formatted] temporal [fact_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFactDate($format = 'Y-m-d H:i:s')
    {
        if ($this->fact_date === null) {
            return null;
        }

        if ($this->fact_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->fact_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fact_date, true), $x);
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
     * Get the [fact_email] column value.
     *
     * @return string
     */
    public function getFactEmail()
    {

        return $this->fact_email;
    }

    /**
     * Set the value of [fact_eh_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactEhId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_eh_id !== $v) {
                    $this->fact_eh_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_EH_ID;
                }


        return $this;
    } // setFactEhId()

    /**
     * Set the value of [fact_eh_user_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactEhUserId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_eh_user_id !== $v) {
                    $this->fact_eh_user_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_EH_USER_ID;
                }

        if ($this->aFactReeditionUser !== null && $this->aFactReeditionUser->getUserId() !== $v) {
            $this->aFactReeditionUser = null;
        }


        return $this;
    } // setFactEhUserId()

    /**
     * Sets the value of [reedition_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setReeditionDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->reedition_date !== null || $dt !== null) {
            $currentDateAsString = ($this->reedition_date !== null && $tmpDt = new DateTime($this->reedition_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->reedition_date = $newDateAsString;
                $this->modifiedColumns[] = FactureEditionHistoryPeer::REEDITION_DATE;
            }
        } // if either are not null


        return $this;
    } // setReeditionDate()

    /**
     * Set the value of [fact_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_id !== $v) {
                    $this->fact_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_ID;
                }

        if ($this->aReeditedFacture !== null && $this->aReeditedFacture->getFactId() !== $v) {
            $this->aReeditedFacture = null;
        }


        return $this;
    } // setFactId()

    /**
     * Set the value of [r_fact_type_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setRFactTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_fact_type_id !== $v) {
                    $this->r_fact_type_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::R_FACT_TYPE_ID;
                }

        if ($this->aRFactureTypes !== null && $this->aRFactureTypes->getRFactTypeId() !== $v) {
            $this->aRFactureTypes = null;
        }


        return $this;
    } // setRFactTypeId()

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
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
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::OP_ID;
                }

        if ($this->aOperations !== null && $this->aOperations->getOpId() !== $v) {
            $this->aOperations = null;
        }

        if ($this->aPlanFacturationParams !== null && $this->aPlanFacturationParams->getOpId() !== $v) {
            $this->aPlanFacturationParams = null;
        }


        return $this;
    } // setOpId()

    /**
     * Set the value of [cl_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setClId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_id !== $v) {
                    $this->cl_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::CL_ID;
                }

        if ($this->aClients !== null && $this->aClients->getClId() !== $v) {
            $this->aClients = null;
        }

        if ($this->aClientFactureOptions !== null && $this->aClientFactureOptions->getClId() !== $v) {
            $this->aClientFactureOptions = null;
        }


        return $this;
    } // setClId()

    /**
     * Set the value of [ct_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setCtId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ct_id !== $v) {
                    $this->ct_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::CT_ID;
                }

        if ($this->aContactFacturation !== null && $this->aContactFacturation->getCtId() !== $v) {
            $this->aContactFacturation = null;
        }


        return $this;
    } // setCtId()

    /**
     * Set the value of [dc_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setDcId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->dc_id !== $v) {
                    $this->dc_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::DC_ID;
                }


        return $this;
    } // setDcId()

    /**
     * Set the value of [fact_numero] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactNumero($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_numero !== $v) {
                    $this->fact_numero = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_NUMERO;
                }


        return $this;
    } // setFactNumero()

    /**
     * Set the value of [fact_reference] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactReference($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_reference !== $v) {
            $this->fact_reference = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_REFERENCE;
        }


        return $this;
    } // setFactReference()

    /**
     * Set the value of [fact_lang] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactLang($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_lang !== $v) {
            $this->fact_lang = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_LANG;
        }


        return $this;
    } // setFactLang()

    /**
     * Set the value of [fact_num_cmd] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactNumCmd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_num_cmd !== $v) {
            $this->fact_num_cmd = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_NUM_CMD;
        }


        return $this;
    } // setFactNumCmd()

    /**
     * Set the value of [fact_montant_ht] column.
     *
     * @param  float $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactMontantHt($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_montant_ht !== $v) {
                    $this->fact_montant_ht = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_MONTANT_HT;
                }


        return $this;
    } // setFactMontantHt()

    /**
     * Set the value of [fact_montant_ttc] column.
     *
     * @param  float $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactMontantTtc($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_montant_ttc !== $v) {
                    $this->fact_montant_ttc = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_MONTANT_TTC;
                }


        return $this;
    } // setFactMontantTtc()

    /**
     * Set the value of [fact_montant_encaisse] column.
     *
     * @param  float $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactMontantEncaisse($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_montant_encaisse !== $v) {
                    $this->fact_montant_encaisse = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_MONTANT_ENCAISSE;
                }


        return $this;
    } // setFactMontantEncaisse()

    /**
     * Set the value of [fact_destinataire] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactDestinataire($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_destinataire !== $v) {
            $this->fact_destinataire = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_DESTINATAIRE;
        }


        return $this;
    } // setFactDestinataire()

    /**
     * Set the value of [fact_attention] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactAttention($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_attention !== $v) {
            $this->fact_attention = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_ATTENTION;
        }


        return $this;
    } // setFactAttention()

    /**
     * Set the value of [fact_adresse1] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactAdresse1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_adresse1 !== $v) {
            $this->fact_adresse1 = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_ADRESSE1;
        }


        return $this;
    } // setFactAdresse1()

    /**
     * Set the value of [fact_adresse2] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactAdresse2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_adresse2 !== $v) {
            $this->fact_adresse2 = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_ADRESSE2;
        }


        return $this;
    } // setFactAdresse2()

    /**
     * Set the value of [fact_adresse3] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactAdresse3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_adresse3 !== $v) {
            $this->fact_adresse3 = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_ADRESSE3;
        }


        return $this;
    } // setFactAdresse3()

    /**
     * Set the value of [fact_code_postal] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactCodePostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_code_postal !== $v) {
            $this->fact_code_postal = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_CODE_POSTAL;
        }


        return $this;
    } // setFactCodePostal()

    /**
     * Set the value of [fact_ville] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactVille($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_ville !== $v) {
            $this->fact_ville = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_VILLE;
        }


        return $this;
    } // setFactVille()

    /**
     * Set the value of [fact_pays] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactPays($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_pays !== $v) {
            $this->fact_pays = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_PAYS;
        }


        return $this;
    } // setFactPays()

    /**
     * Set the value of [fact_mention_spec] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactMentionSpec($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_mention_spec !== $v) {
            $this->fact_mention_spec = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_MENTION_SPEC;
        }


        return $this;
    } // setFactMentionSpec()

    /**
     * Set the value of [fact_user_edition] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactUserEdition($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_user_edition !== $v) {
                    $this->fact_user_edition = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_USER_EDITION;
                }


        return $this;
    } // setFactUserEdition()

    /**
     * Set the value of [fact_status_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactStatusId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_status_id !== $v) {
                    $this->fact_status_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_STATUS_ID;
                }

        if ($this->aRFactureStatuts !== null && $this->aRFactureStatuts->getRFactStatId() !== $v) {
            $this->aRFactureStatuts = null;
        }


        return $this;
    } // setFactStatusId()

    /**
     * Sets the value of the [fact_verrou] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactVerrou($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->fact_verrou !== $v) {
            $this->fact_verrou = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_VERROU;
        }


        return $this;
    } // setFactVerrou()

    /**
     * Sets the value of the [fact_has_relance] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactHasRelance($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->fact_has_relance !== $v) {
            $this->fact_has_relance = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_HAS_RELANCE;
        }


        return $this;
    } // setFactHasRelance()

    /**
     * Set the value of [fact_annul_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactAnnulId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_annul_id !== $v) {
                    $this->fact_annul_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_ANNUL_ID;
                }


        return $this;
    } // setFactAnnulId()

    /**
     * Sets the value of [fact_date_echeance] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactDateEcheance($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fact_date_echeance !== null || $dt !== null) {
            $currentDateAsString = ($this->fact_date_echeance !== null && $tmpDt = new DateTime($this->fact_date_echeance)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fact_date_echeance = $newDateAsString;
                $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_DATE_ECHEANCE;
            }
        } // if either are not null


        return $this;
    } // setFactDateEcheance()

    /**
     * Set the value of [fact_taux_adf] column.
     *
     * @param  float $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactTauxAdf($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_taux_adf !== $v) {
                    $this->fact_taux_adf = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_TAUX_ADF;
                }


        return $this;
    } // setFactTauxAdf()

    /**
     * Sets the value of [fact_date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fact_date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->fact_date_create !== null && $tmpDt = new DateTime($this->fact_date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fact_date_create = $newDateAsString;
                $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setFactDateCreate()

    /**
     * Sets the value of [fact_date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fact_date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->fact_date_modify !== null && $tmpDt = new DateTime($this->fact_date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fact_date_modify = $newDateAsString;
                $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setFactDateModify()

    /**
     * Set the value of [fact_user_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactUserId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_user_id !== $v) {
                    $this->fact_user_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_USER_ID;
                }


        return $this;
    } // setFactUserId()

    /**
     * Set the value of [fact_user_modify] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactUserModify($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_user_modify !== $v) {
                    $this->fact_user_modify = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_USER_MODIFY;
                }


        return $this;
    } // setFactUserModify()

    /**
     * Set the value of [fact_echeance_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactEcheanceId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_echeance_id !== $v) {
                    $this->fact_echeance_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_ECHEANCE_ID;
                }

        if ($this->aRFactureOptionsEcheances !== null && $this->aRFactureOptionsEcheances->getFactOptEcheanceId() !== $v) {
            $this->aRFactureOptionsEcheances = null;
        }


        return $this;
    } // setFactEcheanceId()

    /**
     * Set the value of [jdv_id] column.
     *
     * @param  int $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setJdvId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->jdv_id !== $v) {
                    $this->jdv_id = $v;
                    $this->modifiedColumns[] = FactureEditionHistoryPeer::JDV_ID;
                }

        if ($this->aJournalDeVente !== null && $this->aJournalDeVente->getJdvId() !== $v) {
            $this->aJournalDeVente = null;
        }


        return $this;
    } // setJdvId()

    /**
     * Sets the value of [fact_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fact_date !== null || $dt !== null) {
            $currentDateAsString = ($this->fact_date !== null && $tmpDt = new DateTime($this->fact_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fact_date = $newDateAsString;
                $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_DATE;
            }
        } // if either are not null


        return $this;
    } // setFactDate()

    /**
     * Set the value of [fact_email] column.
     *
     * @param  string $v new value
     * @return FactureEditionHistory The current object (for fluent API support)
     */
    public function setFactEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_email !== $v) {
            $this->fact_email = $v;
            $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_EMAIL;
        }


        return $this;
    } // setFactEmail()

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
            if ($this->fact_verrou !== false) {
                return false;
            }

            if ($this->fact_has_relance !== false) {
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

            $this->fact_eh_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fact_eh_user_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->reedition_date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->fact_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->r_fact_type_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->op_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->cl_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->ct_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->dc_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->fact_numero = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->fact_reference = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->fact_lang = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->fact_num_cmd = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->fact_montant_ht = ($row[$startcol + 13] !== null) ? (float) $row[$startcol + 13] : null;
            $this->fact_montant_ttc = ($row[$startcol + 14] !== null) ? (float) $row[$startcol + 14] : null;
            $this->fact_montant_encaisse = ($row[$startcol + 15] !== null) ? (float) $row[$startcol + 15] : null;
            $this->fact_destinataire = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->fact_attention = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->fact_adresse1 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->fact_adresse2 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->fact_adresse3 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->fact_code_postal = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->fact_ville = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->fact_pays = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->fact_mention_spec = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->fact_user_edition = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->fact_status_id = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->fact_verrou = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
            $this->fact_has_relance = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
            $this->fact_annul_id = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->fact_date_echeance = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->fact_taux_adf = ($row[$startcol + 31] !== null) ? (float) $row[$startcol + 31] : null;
            $this->fact_date_create = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->fact_date_modify = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->fact_user_id = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->fact_user_modify = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->fact_echeance_id = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->jdv_id = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->fact_date = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->fact_email = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 40; // 40 = FactureEditionHistoryPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating FactureEditionHistory object", $e);
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

        if ($this->aFactReeditionUser !== null && $this->fact_eh_user_id !== $this->aFactReeditionUser->getUserId()) {
            $this->aFactReeditionUser = null;
        }
        if ($this->aReeditedFacture !== null && $this->fact_id !== $this->aReeditedFacture->getFactId()) {
            $this->aReeditedFacture = null;
        }
        if ($this->aRFactureTypes !== null && $this->r_fact_type_id !== $this->aRFactureTypes->getRFactTypeId()) {
            $this->aRFactureTypes = null;
        }
        if ($this->aOperations !== null && $this->op_id !== $this->aOperations->getOpId()) {
            $this->aOperations = null;
        }
        if ($this->aPlanFacturationParams !== null && $this->op_id !== $this->aPlanFacturationParams->getOpId()) {
            $this->aPlanFacturationParams = null;
        }
        if ($this->aClients !== null && $this->cl_id !== $this->aClients->getClId()) {
            $this->aClients = null;
        }
        if ($this->aClientFactureOptions !== null && $this->cl_id !== $this->aClientFactureOptions->getClId()) {
            $this->aClientFactureOptions = null;
        }
        if ($this->aContactFacturation !== null && $this->ct_id !== $this->aContactFacturation->getCtId()) {
            $this->aContactFacturation = null;
        }
        if ($this->aRFactureStatuts !== null && $this->fact_status_id !== $this->aRFactureStatuts->getRFactStatId()) {
            $this->aRFactureStatuts = null;
        }
        if ($this->aRFactureOptionsEcheances !== null && $this->fact_echeance_id !== $this->aRFactureOptionsEcheances->getFactOptEcheanceId()) {
            $this->aRFactureOptionsEcheances = null;
        }
        if ($this->aJournalDeVente !== null && $this->jdv_id !== $this->aJournalDeVente->getJdvId()) {
            $this->aJournalDeVente = null;
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
            $con = Propel::getConnection(FactureEditionHistoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FactureEditionHistoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperations = null;
            $this->aRFactureTypes = null;
            $this->aClients = null;
            $this->aClientFactureOptions = null;
            $this->aRFactureStatuts = null;
            $this->aPlanFacturationParams = null;
            $this->aRFactureOptionsEcheances = null;
            $this->aJournalDeVente = null;
            $this->aContactFacturation = null;
            $this->aFactReeditionUser = null;
            $this->aReeditedFacture = null;
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
            $con = Propel::getConnection(FactureEditionHistoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FactureEditionHistoryQuery::create()
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
            $con = Propel::getConnection(FactureEditionHistoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                FactureEditionHistoryPeer::addInstanceToPool($this);
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

            if ($this->aOperations !== null) {
                if ($this->aOperations->isModified() || $this->aOperations->isNew()) {
                    $affectedRows += $this->aOperations->save($con);
                }
                $this->setOperations($this->aOperations);
            }

            if ($this->aRFactureTypes !== null) {
                if ($this->aRFactureTypes->isModified() || $this->aRFactureTypes->isNew()) {
                    $affectedRows += $this->aRFactureTypes->save($con);
                }
                $this->setRFactureTypes($this->aRFactureTypes);
            }

            if ($this->aClients !== null) {
                if ($this->aClients->isModified() || $this->aClients->isNew()) {
                    $affectedRows += $this->aClients->save($con);
                }
                $this->setClients($this->aClients);
            }

            if ($this->aClientFactureOptions !== null) {
                if ($this->aClientFactureOptions->isModified() || $this->aClientFactureOptions->isNew()) {
                    $affectedRows += $this->aClientFactureOptions->save($con);
                }
                $this->setClientFactureOptions($this->aClientFactureOptions);
            }

            if ($this->aRFactureStatuts !== null) {
                if ($this->aRFactureStatuts->isModified() || $this->aRFactureStatuts->isNew()) {
                    $affectedRows += $this->aRFactureStatuts->save($con);
                }
                $this->setRFactureStatuts($this->aRFactureStatuts);
            }

            if ($this->aPlanFacturationParams !== null) {
                if ($this->aPlanFacturationParams->isModified() || $this->aPlanFacturationParams->isNew()) {
                    $affectedRows += $this->aPlanFacturationParams->save($con);
                }
                $this->setPlanFacturationParams($this->aPlanFacturationParams);
            }

            if ($this->aRFactureOptionsEcheances !== null) {
                if ($this->aRFactureOptionsEcheances->isModified() || $this->aRFactureOptionsEcheances->isNew()) {
                    $affectedRows += $this->aRFactureOptionsEcheances->save($con);
                }
                $this->setRFactureOptionsEcheances($this->aRFactureOptionsEcheances);
            }

            if ($this->aJournalDeVente !== null) {
                if ($this->aJournalDeVente->isModified() || $this->aJournalDeVente->isNew()) {
                    $affectedRows += $this->aJournalDeVente->save($con);
                }
                $this->setJournalDeVente($this->aJournalDeVente);
            }

            if ($this->aContactFacturation !== null) {
                if ($this->aContactFacturation->isModified() || $this->aContactFacturation->isNew()) {
                    $affectedRows += $this->aContactFacturation->save($con);
                }
                $this->setContactFacturation($this->aContactFacturation);
            }

            if ($this->aFactReeditionUser !== null) {
                if ($this->aFactReeditionUser->isModified() || $this->aFactReeditionUser->isNew()) {
                    $affectedRows += $this->aFactReeditionUser->save($con);
                }
                $this->setFactReeditionUser($this->aFactReeditionUser);
            }

            if ($this->aReeditedFacture !== null) {
                if ($this->aReeditedFacture->isModified() || $this->aReeditedFacture->isNew()) {
                    $affectedRows += $this->aReeditedFacture->save($con);
                }
                $this->setReeditedFacture($this->aReeditedFacture);
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

        $this->modifiedColumns[] = FactureEditionHistoryPeer::FACT_EH_ID;
        if (null !== $this->fact_eh_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FactureEditionHistoryPeer::FACT_EH_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_EH_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fact_eh_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_EH_USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fact_eh_user_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::REEDITION_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`reedition_date`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fact_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::R_FACT_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_fact_type_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::CL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::CT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ct_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::DC_ID)) {
            $modifiedColumns[':p' . $index++]  = '`dc_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`fact_numero`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_reference`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_LANG)) {
            $modifiedColumns[':p' . $index++]  = '`fact_lang`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_NUM_CMD)) {
            $modifiedColumns[':p' . $index++]  = '`fact_num_cmd`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_MONTANT_HT)) {
            $modifiedColumns[':p' . $index++]  = '`fact_montant_ht`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_MONTANT_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`fact_montant_ttc`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_MONTANT_ENCAISSE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_montant_encaisse`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_destinataire`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ATTENTION)) {
            $modifiedColumns[':p' . $index++]  = '`fact_attention`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ADRESSE1)) {
            $modifiedColumns[':p' . $index++]  = '`fact_adresse1`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`fact_adresse2`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ADRESSE3)) {
            $modifiedColumns[':p' . $index++]  = '`fact_adresse3`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`fact_code_postal`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_ville`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`fact_pays`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_MENTION_SPEC)) {
            $modifiedColumns[':p' . $index++]  = '`fact_mention_spec`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_USER_EDITION)) {
            $modifiedColumns[':p' . $index++]  = '`fact_user_edition`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fact_status_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_VERROU)) {
            $modifiedColumns[':p' . $index++]  = '`fact_verrou`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_HAS_RELANCE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_has_relance`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ANNUL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fact_annul_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_DATE_ECHEANCE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_date_echeance`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_TAUX_ADF)) {
            $modifiedColumns[':p' . $index++]  = '`fact_taux_adf`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_date_create`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`fact_date_modify`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fact_user_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_USER_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`fact_user_modify`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ECHEANCE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fact_echeance_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::JDV_ID)) {
            $modifiedColumns[':p' . $index++]  = '`jdv_id`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_date`';
        }
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`fact_email`';
        }

        $sql = sprintf(
            'INSERT INTO `facture_edition_history` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`fact_eh_id`':
                        $stmt->bindValue($identifier, $this->fact_eh_id, PDO::PARAM_INT);
                        break;
                    case '`fact_eh_user_id`':
                        $stmt->bindValue($identifier, $this->fact_eh_user_id, PDO::PARAM_INT);
                        break;
                    case '`reedition_date`':
                        $stmt->bindValue($identifier, $this->reedition_date, PDO::PARAM_STR);
                        break;
                    case '`fact_id`':
                        $stmt->bindValue($identifier, $this->fact_id, PDO::PARAM_INT);
                        break;
                    case '`r_fact_type_id`':
                        $stmt->bindValue($identifier, $this->r_fact_type_id, PDO::PARAM_INT);
                        break;
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`cl_id`':
                        $stmt->bindValue($identifier, $this->cl_id, PDO::PARAM_INT);
                        break;
                    case '`ct_id`':
                        $stmt->bindValue($identifier, $this->ct_id, PDO::PARAM_INT);
                        break;
                    case '`dc_id`':
                        $stmt->bindValue($identifier, $this->dc_id, PDO::PARAM_INT);
                        break;
                    case '`fact_numero`':
                        $stmt->bindValue($identifier, $this->fact_numero, PDO::PARAM_INT);
                        break;
                    case '`fact_reference`':
                        $stmt->bindValue($identifier, $this->fact_reference, PDO::PARAM_STR);
                        break;
                    case '`fact_lang`':
                        $stmt->bindValue($identifier, $this->fact_lang, PDO::PARAM_STR);
                        break;
                    case '`fact_num_cmd`':
                        $stmt->bindValue($identifier, $this->fact_num_cmd, PDO::PARAM_STR);
                        break;
                    case '`fact_montant_ht`':
                        $stmt->bindValue($identifier, $this->fact_montant_ht, PDO::PARAM_INT);
                        break;
                    case '`fact_montant_ttc`':
                        $stmt->bindValue($identifier, $this->fact_montant_ttc, PDO::PARAM_INT);
                        break;
                    case '`fact_montant_encaisse`':
                        $stmt->bindValue($identifier, $this->fact_montant_encaisse, PDO::PARAM_INT);
                        break;
                    case '`fact_destinataire`':
                        $stmt->bindValue($identifier, $this->fact_destinataire, PDO::PARAM_STR);
                        break;
                    case '`fact_attention`':
                        $stmt->bindValue($identifier, $this->fact_attention, PDO::PARAM_STR);
                        break;
                    case '`fact_adresse1`':
                        $stmt->bindValue($identifier, $this->fact_adresse1, PDO::PARAM_STR);
                        break;
                    case '`fact_adresse2`':
                        $stmt->bindValue($identifier, $this->fact_adresse2, PDO::PARAM_STR);
                        break;
                    case '`fact_adresse3`':
                        $stmt->bindValue($identifier, $this->fact_adresse3, PDO::PARAM_STR);
                        break;
                    case '`fact_code_postal`':
                        $stmt->bindValue($identifier, $this->fact_code_postal, PDO::PARAM_STR);
                        break;
                    case '`fact_ville`':
                        $stmt->bindValue($identifier, $this->fact_ville, PDO::PARAM_STR);
                        break;
                    case '`fact_pays`':
                        $stmt->bindValue($identifier, $this->fact_pays, PDO::PARAM_STR);
                        break;
                    case '`fact_mention_spec`':
                        $stmt->bindValue($identifier, $this->fact_mention_spec, PDO::PARAM_STR);
                        break;
                    case '`fact_user_edition`':
                        $stmt->bindValue($identifier, $this->fact_user_edition, PDO::PARAM_INT);
                        break;
                    case '`fact_status_id`':
                        $stmt->bindValue($identifier, $this->fact_status_id, PDO::PARAM_INT);
                        break;
                    case '`fact_verrou`':
                        $stmt->bindValue($identifier, (int) $this->fact_verrou, PDO::PARAM_INT);
                        break;
                    case '`fact_has_relance`':
                        $stmt->bindValue($identifier, (int) $this->fact_has_relance, PDO::PARAM_INT);
                        break;
                    case '`fact_annul_id`':
                        $stmt->bindValue($identifier, $this->fact_annul_id, PDO::PARAM_INT);
                        break;
                    case '`fact_date_echeance`':
                        $stmt->bindValue($identifier, $this->fact_date_echeance, PDO::PARAM_STR);
                        break;
                    case '`fact_taux_adf`':
                        $stmt->bindValue($identifier, $this->fact_taux_adf, PDO::PARAM_INT);
                        break;
                    case '`fact_date_create`':
                        $stmt->bindValue($identifier, $this->fact_date_create, PDO::PARAM_STR);
                        break;
                    case '`fact_date_modify`':
                        $stmt->bindValue($identifier, $this->fact_date_modify, PDO::PARAM_STR);
                        break;
                    case '`fact_user_id`':
                        $stmt->bindValue($identifier, $this->fact_user_id, PDO::PARAM_INT);
                        break;
                    case '`fact_user_modify`':
                        $stmt->bindValue($identifier, $this->fact_user_modify, PDO::PARAM_INT);
                        break;
                    case '`fact_echeance_id`':
                        $stmt->bindValue($identifier, $this->fact_echeance_id, PDO::PARAM_INT);
                        break;
                    case '`jdv_id`':
                        $stmt->bindValue($identifier, $this->jdv_id, PDO::PARAM_INT);
                        break;
                    case '`fact_date`':
                        $stmt->bindValue($identifier, $this->fact_date, PDO::PARAM_STR);
                        break;
                    case '`fact_email`':
                        $stmt->bindValue($identifier, $this->fact_email, PDO::PARAM_STR);
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
        $this->setFactEhId($pk);

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

            if ($this->aOperations !== null) {
                if (!$this->aOperations->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperations->getValidationFailures());
                }
            }

            if ($this->aRFactureTypes !== null) {
                if (!$this->aRFactureTypes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRFactureTypes->getValidationFailures());
                }
            }

            if ($this->aClients !== null) {
                if (!$this->aClients->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClients->getValidationFailures());
                }
            }

            if ($this->aClientFactureOptions !== null) {
                if (!$this->aClientFactureOptions->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClientFactureOptions->getValidationFailures());
                }
            }

            if ($this->aRFactureStatuts !== null) {
                if (!$this->aRFactureStatuts->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRFactureStatuts->getValidationFailures());
                }
            }

            if ($this->aPlanFacturationParams !== null) {
                if (!$this->aPlanFacturationParams->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPlanFacturationParams->getValidationFailures());
                }
            }

            if ($this->aRFactureOptionsEcheances !== null) {
                if (!$this->aRFactureOptionsEcheances->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRFactureOptionsEcheances->getValidationFailures());
                }
            }

            if ($this->aJournalDeVente !== null) {
                if (!$this->aJournalDeVente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aJournalDeVente->getValidationFailures());
                }
            }

            if ($this->aContactFacturation !== null) {
                if (!$this->aContactFacturation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContactFacturation->getValidationFailures());
                }
            }

            if ($this->aFactReeditionUser !== null) {
                if (!$this->aFactReeditionUser->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aFactReeditionUser->getValidationFailures());
                }
            }

            if ($this->aReeditedFacture !== null) {
                if (!$this->aReeditedFacture->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aReeditedFacture->getValidationFailures());
                }
            }


            if (($retval = FactureEditionHistoryPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = FactureEditionHistoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFactEhId();
                break;
            case 1:
                return $this->getFactEhUserId();
                break;
            case 2:
                return $this->getReeditionDate();
                break;
            case 3:
                return $this->getFactId();
                break;
            case 4:
                return $this->getRFactTypeId();
                break;
            case 5:
                return $this->getOpId();
                break;
            case 6:
                return $this->getClId();
                break;
            case 7:
                return $this->getCtId();
                break;
            case 8:
                return $this->getDcId();
                break;
            case 9:
                return $this->getFactNumero();
                break;
            case 10:
                return $this->getFactReference();
                break;
            case 11:
                return $this->getFactLang();
                break;
            case 12:
                return $this->getFactNumCmd();
                break;
            case 13:
                return $this->getFactMontantHt();
                break;
            case 14:
                return $this->getFactMontantTtc();
                break;
            case 15:
                return $this->getFactMontantEncaisse();
                break;
            case 16:
                return $this->getFactDestinataire();
                break;
            case 17:
                return $this->getFactAttention();
                break;
            case 18:
                return $this->getFactAdresse1();
                break;
            case 19:
                return $this->getFactAdresse2();
                break;
            case 20:
                return $this->getFactAdresse3();
                break;
            case 21:
                return $this->getFactCodePostal();
                break;
            case 22:
                return $this->getFactVille();
                break;
            case 23:
                return $this->getFactPays();
                break;
            case 24:
                return $this->getFactMentionSpec();
                break;
            case 25:
                return $this->getFactUserEdition();
                break;
            case 26:
                return $this->getFactStatusId();
                break;
            case 27:
                return $this->getFactVerrou();
                break;
            case 28:
                return $this->getFactHasRelance();
                break;
            case 29:
                return $this->getFactAnnulId();
                break;
            case 30:
                return $this->getFactDateEcheance();
                break;
            case 31:
                return $this->getFactTauxAdf();
                break;
            case 32:
                return $this->getFactDateCreate();
                break;
            case 33:
                return $this->getFactDateModify();
                break;
            case 34:
                return $this->getFactUserId();
                break;
            case 35:
                return $this->getFactUserModify();
                break;
            case 36:
                return $this->getFactEcheanceId();
                break;
            case 37:
                return $this->getJdvId();
                break;
            case 38:
                return $this->getFactDate();
                break;
            case 39:
                return $this->getFactEmail();
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
        if (isset($alreadyDumpedObjects['FactureEditionHistory'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['FactureEditionHistory'][$this->getPrimaryKey()] = true;
        $keys = FactureEditionHistoryPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFactEhId(),
            $keys[1] => $this->getFactEhUserId(),
            $keys[2] => $this->getReeditionDate(),
            $keys[3] => $this->getFactId(),
            $keys[4] => $this->getRFactTypeId(),
            $keys[5] => $this->getOpId(),
            $keys[6] => $this->getClId(),
            $keys[7] => $this->getCtId(),
            $keys[8] => $this->getDcId(),
            $keys[9] => $this->getFactNumero(),
            $keys[10] => $this->getFactReference(),
            $keys[11] => $this->getFactLang(),
            $keys[12] => $this->getFactNumCmd(),
            $keys[13] => $this->getFactMontantHt(),
            $keys[14] => $this->getFactMontantTtc(),
            $keys[15] => $this->getFactMontantEncaisse(),
            $keys[16] => $this->getFactDestinataire(),
            $keys[17] => $this->getFactAttention(),
            $keys[18] => $this->getFactAdresse1(),
            $keys[19] => $this->getFactAdresse2(),
            $keys[20] => $this->getFactAdresse3(),
            $keys[21] => $this->getFactCodePostal(),
            $keys[22] => $this->getFactVille(),
            $keys[23] => $this->getFactPays(),
            $keys[24] => $this->getFactMentionSpec(),
            $keys[25] => $this->getFactUserEdition(),
            $keys[26] => $this->getFactStatusId(),
            $keys[27] => $this->getFactVerrou(),
            $keys[28] => $this->getFactHasRelance(),
            $keys[29] => $this->getFactAnnulId(),
            $keys[30] => $this->getFactDateEcheance(),
            $keys[31] => $this->getFactTauxAdf(),
            $keys[32] => $this->getFactDateCreate(),
            $keys[33] => $this->getFactDateModify(),
            $keys[34] => $this->getFactUserId(),
            $keys[35] => $this->getFactUserModify(),
            $keys[36] => $this->getFactEcheanceId(),
            $keys[37] => $this->getJdvId(),
            $keys[38] => $this->getFactDate(),
            $keys[39] => $this->getFactEmail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperations) {
                $result['Operations'] = $this->aOperations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRFactureTypes) {
                $result['RFactureTypes'] = $this->aRFactureTypes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aClients) {
                $result['Clients'] = $this->aClients->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aClientFactureOptions) {
                $result['ClientFactureOptions'] = $this->aClientFactureOptions->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRFactureStatuts) {
                $result['RFactureStatuts'] = $this->aRFactureStatuts->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPlanFacturationParams) {
                $result['PlanFacturationParams'] = $this->aPlanFacturationParams->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRFactureOptionsEcheances) {
                $result['RFactureOptionsEcheances'] = $this->aRFactureOptionsEcheances->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aJournalDeVente) {
                $result['JournalDeVente'] = $this->aJournalDeVente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aContactFacturation) {
                $result['ContactFacturation'] = $this->aContactFacturation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aFactReeditionUser) {
                $result['FactReeditionUser'] = $this->aFactReeditionUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aReeditedFacture) {
                $result['ReeditedFacture'] = $this->aReeditedFacture->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = FactureEditionHistoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFactEhId($value);
                break;
            case 1:
                $this->setFactEhUserId($value);
                break;
            case 2:
                $this->setReeditionDate($value);
                break;
            case 3:
                $this->setFactId($value);
                break;
            case 4:
                $this->setRFactTypeId($value);
                break;
            case 5:
                $this->setOpId($value);
                break;
            case 6:
                $this->setClId($value);
                break;
            case 7:
                $this->setCtId($value);
                break;
            case 8:
                $this->setDcId($value);
                break;
            case 9:
                $this->setFactNumero($value);
                break;
            case 10:
                $this->setFactReference($value);
                break;
            case 11:
                $this->setFactLang($value);
                break;
            case 12:
                $this->setFactNumCmd($value);
                break;
            case 13:
                $this->setFactMontantHt($value);
                break;
            case 14:
                $this->setFactMontantTtc($value);
                break;
            case 15:
                $this->setFactMontantEncaisse($value);
                break;
            case 16:
                $this->setFactDestinataire($value);
                break;
            case 17:
                $this->setFactAttention($value);
                break;
            case 18:
                $this->setFactAdresse1($value);
                break;
            case 19:
                $this->setFactAdresse2($value);
                break;
            case 20:
                $this->setFactAdresse3($value);
                break;
            case 21:
                $this->setFactCodePostal($value);
                break;
            case 22:
                $this->setFactVille($value);
                break;
            case 23:
                $this->setFactPays($value);
                break;
            case 24:
                $this->setFactMentionSpec($value);
                break;
            case 25:
                $this->setFactUserEdition($value);
                break;
            case 26:
                $this->setFactStatusId($value);
                break;
            case 27:
                $this->setFactVerrou($value);
                break;
            case 28:
                $this->setFactHasRelance($value);
                break;
            case 29:
                $this->setFactAnnulId($value);
                break;
            case 30:
                $this->setFactDateEcheance($value);
                break;
            case 31:
                $this->setFactTauxAdf($value);
                break;
            case 32:
                $this->setFactDateCreate($value);
                break;
            case 33:
                $this->setFactDateModify($value);
                break;
            case 34:
                $this->setFactUserId($value);
                break;
            case 35:
                $this->setFactUserModify($value);
                break;
            case 36:
                $this->setFactEcheanceId($value);
                break;
            case 37:
                $this->setJdvId($value);
                break;
            case 38:
                $this->setFactDate($value);
                break;
            case 39:
                $this->setFactEmail($value);
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
        $keys = FactureEditionHistoryPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setFactEhId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFactEhUserId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setReeditionDate($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFactId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRFactTypeId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOpId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setClId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCtId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDcId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFactNumero($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFactReference($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFactLang($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFactNumCmd($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFactMontantHt($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFactMontantTtc($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setFactMontantEncaisse($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setFactDestinataire($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setFactAttention($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFactAdresse1($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setFactAdresse2($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setFactAdresse3($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setFactCodePostal($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setFactVille($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setFactPays($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setFactMentionSpec($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setFactUserEdition($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setFactStatusId($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setFactVerrou($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setFactHasRelance($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setFactAnnulId($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setFactDateEcheance($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFactTauxAdf($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setFactDateCreate($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setFactDateModify($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setFactUserId($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setFactUserModify($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setFactEcheanceId($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setJdvId($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setFactDate($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setFactEmail($arr[$keys[39]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FactureEditionHistoryPeer::DATABASE_NAME);

        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_EH_ID)) $criteria->add(FactureEditionHistoryPeer::FACT_EH_ID, $this->fact_eh_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_EH_USER_ID)) $criteria->add(FactureEditionHistoryPeer::FACT_EH_USER_ID, $this->fact_eh_user_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::REEDITION_DATE)) $criteria->add(FactureEditionHistoryPeer::REEDITION_DATE, $this->reedition_date);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ID)) $criteria->add(FactureEditionHistoryPeer::FACT_ID, $this->fact_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::R_FACT_TYPE_ID)) $criteria->add(FactureEditionHistoryPeer::R_FACT_TYPE_ID, $this->r_fact_type_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::OP_ID)) $criteria->add(FactureEditionHistoryPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::CL_ID)) $criteria->add(FactureEditionHistoryPeer::CL_ID, $this->cl_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::CT_ID)) $criteria->add(FactureEditionHistoryPeer::CT_ID, $this->ct_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::DC_ID)) $criteria->add(FactureEditionHistoryPeer::DC_ID, $this->dc_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_NUMERO)) $criteria->add(FactureEditionHistoryPeer::FACT_NUMERO, $this->fact_numero);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_REFERENCE)) $criteria->add(FactureEditionHistoryPeer::FACT_REFERENCE, $this->fact_reference);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_LANG)) $criteria->add(FactureEditionHistoryPeer::FACT_LANG, $this->fact_lang);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_NUM_CMD)) $criteria->add(FactureEditionHistoryPeer::FACT_NUM_CMD, $this->fact_num_cmd);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_MONTANT_HT)) $criteria->add(FactureEditionHistoryPeer::FACT_MONTANT_HT, $this->fact_montant_ht);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_MONTANT_TTC)) $criteria->add(FactureEditionHistoryPeer::FACT_MONTANT_TTC, $this->fact_montant_ttc);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_MONTANT_ENCAISSE)) $criteria->add(FactureEditionHistoryPeer::FACT_MONTANT_ENCAISSE, $this->fact_montant_encaisse);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_DESTINATAIRE)) $criteria->add(FactureEditionHistoryPeer::FACT_DESTINATAIRE, $this->fact_destinataire);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ATTENTION)) $criteria->add(FactureEditionHistoryPeer::FACT_ATTENTION, $this->fact_attention);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ADRESSE1)) $criteria->add(FactureEditionHistoryPeer::FACT_ADRESSE1, $this->fact_adresse1);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ADRESSE2)) $criteria->add(FactureEditionHistoryPeer::FACT_ADRESSE2, $this->fact_adresse2);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ADRESSE3)) $criteria->add(FactureEditionHistoryPeer::FACT_ADRESSE3, $this->fact_adresse3);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_CODE_POSTAL)) $criteria->add(FactureEditionHistoryPeer::FACT_CODE_POSTAL, $this->fact_code_postal);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_VILLE)) $criteria->add(FactureEditionHistoryPeer::FACT_VILLE, $this->fact_ville);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_PAYS)) $criteria->add(FactureEditionHistoryPeer::FACT_PAYS, $this->fact_pays);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_MENTION_SPEC)) $criteria->add(FactureEditionHistoryPeer::FACT_MENTION_SPEC, $this->fact_mention_spec);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_USER_EDITION)) $criteria->add(FactureEditionHistoryPeer::FACT_USER_EDITION, $this->fact_user_edition);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_STATUS_ID)) $criteria->add(FactureEditionHistoryPeer::FACT_STATUS_ID, $this->fact_status_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_VERROU)) $criteria->add(FactureEditionHistoryPeer::FACT_VERROU, $this->fact_verrou);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_HAS_RELANCE)) $criteria->add(FactureEditionHistoryPeer::FACT_HAS_RELANCE, $this->fact_has_relance);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ANNUL_ID)) $criteria->add(FactureEditionHistoryPeer::FACT_ANNUL_ID, $this->fact_annul_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_DATE_ECHEANCE)) $criteria->add(FactureEditionHistoryPeer::FACT_DATE_ECHEANCE, $this->fact_date_echeance);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_TAUX_ADF)) $criteria->add(FactureEditionHistoryPeer::FACT_TAUX_ADF, $this->fact_taux_adf);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_DATE_CREATE)) $criteria->add(FactureEditionHistoryPeer::FACT_DATE_CREATE, $this->fact_date_create);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_DATE_MODIFY)) $criteria->add(FactureEditionHistoryPeer::FACT_DATE_MODIFY, $this->fact_date_modify);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_USER_ID)) $criteria->add(FactureEditionHistoryPeer::FACT_USER_ID, $this->fact_user_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_USER_MODIFY)) $criteria->add(FactureEditionHistoryPeer::FACT_USER_MODIFY, $this->fact_user_modify);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_ECHEANCE_ID)) $criteria->add(FactureEditionHistoryPeer::FACT_ECHEANCE_ID, $this->fact_echeance_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::JDV_ID)) $criteria->add(FactureEditionHistoryPeer::JDV_ID, $this->jdv_id);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_DATE)) $criteria->add(FactureEditionHistoryPeer::FACT_DATE, $this->fact_date);
        if ($this->isColumnModified(FactureEditionHistoryPeer::FACT_EMAIL)) $criteria->add(FactureEditionHistoryPeer::FACT_EMAIL, $this->fact_email);

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
        $criteria = new Criteria(FactureEditionHistoryPeer::DATABASE_NAME);
        $criteria->add(FactureEditionHistoryPeer::FACT_EH_ID, $this->fact_eh_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getFactEhId();
    }

    /**
     * Generic method to set the primary key (fact_eh_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setFactEhId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getFactEhId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of FactureEditionHistory (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFactEhUserId($this->getFactEhUserId());
        $copyObj->setReeditionDate($this->getReeditionDate());
        $copyObj->setFactId($this->getFactId());
        $copyObj->setRFactTypeId($this->getRFactTypeId());
        $copyObj->setOpId($this->getOpId());
        $copyObj->setClId($this->getClId());
        $copyObj->setCtId($this->getCtId());
        $copyObj->setDcId($this->getDcId());
        $copyObj->setFactNumero($this->getFactNumero());
        $copyObj->setFactReference($this->getFactReference());
        $copyObj->setFactLang($this->getFactLang());
        $copyObj->setFactNumCmd($this->getFactNumCmd());
        $copyObj->setFactMontantHt($this->getFactMontantHt());
        $copyObj->setFactMontantTtc($this->getFactMontantTtc());
        $copyObj->setFactMontantEncaisse($this->getFactMontantEncaisse());
        $copyObj->setFactDestinataire($this->getFactDestinataire());
        $copyObj->setFactAttention($this->getFactAttention());
        $copyObj->setFactAdresse1($this->getFactAdresse1());
        $copyObj->setFactAdresse2($this->getFactAdresse2());
        $copyObj->setFactAdresse3($this->getFactAdresse3());
        $copyObj->setFactCodePostal($this->getFactCodePostal());
        $copyObj->setFactVille($this->getFactVille());
        $copyObj->setFactPays($this->getFactPays());
        $copyObj->setFactMentionSpec($this->getFactMentionSpec());
        $copyObj->setFactUserEdition($this->getFactUserEdition());
        $copyObj->setFactStatusId($this->getFactStatusId());
        $copyObj->setFactVerrou($this->getFactVerrou());
        $copyObj->setFactHasRelance($this->getFactHasRelance());
        $copyObj->setFactAnnulId($this->getFactAnnulId());
        $copyObj->setFactDateEcheance($this->getFactDateEcheance());
        $copyObj->setFactTauxAdf($this->getFactTauxAdf());
        $copyObj->setFactDateCreate($this->getFactDateCreate());
        $copyObj->setFactDateModify($this->getFactDateModify());
        $copyObj->setFactUserId($this->getFactUserId());
        $copyObj->setFactUserModify($this->getFactUserModify());
        $copyObj->setFactEcheanceId($this->getFactEcheanceId());
        $copyObj->setJdvId($this->getJdvId());
        $copyObj->setFactDate($this->getFactDate());
        $copyObj->setFactEmail($this->getFactEmail());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setFactEhId(NULL); // this is a auto-increment column, so set to default value
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
     * @return FactureEditionHistory Clone of current object.
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
     * @return FactureEditionHistoryPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FactureEditionHistoryPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperations(Operations $v = null)
    {
        if ($v === null) {
            $this->setOpId(NULL);
        } else {
            $this->setOpId($v->getOpId());
        }

        $this->aOperations = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Operations object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
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
    public function getOperations(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperations === null && ($this->op_id !== null) && $doQuery) {
            $this->aOperations = OperationsQuery::create()->findPk($this->op_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperations->addFactureEditionHistorys($this);
             */
        }

        return $this->aOperations;
    }

    /**
     * Declares an association between this object and a RFactureTypes object.
     *
     * @param                  RFactureTypes $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRFactureTypes(RFactureTypes $v = null)
    {
        if ($v === null) {
            $this->setRFactTypeId(NULL);
        } else {
            $this->setRFactTypeId($v->getRFactTypeId());
        }

        $this->aRFactureTypes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RFactureTypes object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
        }


        return $this;
    }


    /**
     * Get the associated RFactureTypes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RFactureTypes The associated RFactureTypes object.
     * @throws PropelException
     */
    public function getRFactureTypes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRFactureTypes === null && ($this->r_fact_type_id !== null) && $doQuery) {
            $this->aRFactureTypes = RFactureTypesQuery::create()->findPk($this->r_fact_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRFactureTypes->addFactureEditionHistorys($this);
             */
        }

        return $this->aRFactureTypes;
    }

    /**
     * Declares an association between this object and a Clients object.
     *
     * @param                  Clients $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClients(Clients $v = null)
    {
        if ($v === null) {
            $this->setClId(NULL);
        } else {
            $this->setClId($v->getClId());
        }

        $this->aClients = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Clients object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
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
        if ($this->aClients === null && ($this->cl_id !== null) && $doQuery) {
            $this->aClients = ClientsQuery::create()->findPk($this->cl_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClients->addFactureEditionHistorys($this);
             */
        }

        return $this->aClients;
    }

    /**
     * Declares an association between this object and a ClientFactureOptions object.
     *
     * @param                  ClientFactureOptions $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClientFactureOptions(ClientFactureOptions $v = null)
    {
        if ($v === null) {
            $this->setClId(NULL);
        } else {
            $this->setClId($v->getClId());
        }

        $this->aClientFactureOptions = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ClientFactureOptions object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
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
        if ($this->aClientFactureOptions === null && ($this->cl_id !== null) && $doQuery) {
            $this->aClientFactureOptions = ClientFactureOptionsQuery::create()
                ->filterByFactureEditionHistory($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClientFactureOptions->addFactureEditionHistorys($this);
             */
        }

        return $this->aClientFactureOptions;
    }

    /**
     * Declares an association between this object and a RFactureStatuts object.
     *
     * @param                  RFactureStatuts $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRFactureStatuts(RFactureStatuts $v = null)
    {
        if ($v === null) {
            $this->setFactStatusId(NULL);
        } else {
            $this->setFactStatusId($v->getRFactStatId());
        }

        $this->aRFactureStatuts = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RFactureStatuts object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
        }


        return $this;
    }


    /**
     * Get the associated RFactureStatuts object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RFactureStatuts The associated RFactureStatuts object.
     * @throws PropelException
     */
    public function getRFactureStatuts(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRFactureStatuts === null && ($this->fact_status_id !== null) && $doQuery) {
            $this->aRFactureStatuts = RFactureStatutsQuery::create()->findPk($this->fact_status_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRFactureStatuts->addFactureEditionHistorys($this);
             */
        }

        return $this->aRFactureStatuts;
    }

    /**
     * Declares an association between this object and a PlanFacturationParams object.
     *
     * @param                  PlanFacturationParams $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPlanFacturationParams(PlanFacturationParams $v = null)
    {
        if ($v === null) {
            $this->setOpId(NULL);
        } else {
            $this->setOpId($v->getOpId());
        }

        $this->aPlanFacturationParams = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the PlanFacturationParams object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
        }


        return $this;
    }


    /**
     * Get the associated PlanFacturationParams object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return PlanFacturationParams The associated PlanFacturationParams object.
     * @throws PropelException
     */
    public function getPlanFacturationParams(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPlanFacturationParams === null && ($this->op_id !== null) && $doQuery) {
            $this->aPlanFacturationParams = PlanFacturationParamsQuery::create()
                ->filterByFactureEditionHistory($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPlanFacturationParams->addFactureEditionHistorys($this);
             */
        }

        return $this->aPlanFacturationParams;
    }

    /**
     * Declares an association between this object and a RFactureOptionsEcheances object.
     *
     * @param                  RFactureOptionsEcheances $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRFactureOptionsEcheances(RFactureOptionsEcheances $v = null)
    {
        if ($v === null) {
            $this->setFactEcheanceId(NULL);
        } else {
            $this->setFactEcheanceId($v->getFactOptEcheanceId());
        }

        $this->aRFactureOptionsEcheances = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RFactureOptionsEcheances object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
        }


        return $this;
    }


    /**
     * Get the associated RFactureOptionsEcheances object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RFactureOptionsEcheances The associated RFactureOptionsEcheances object.
     * @throws PropelException
     */
    public function getRFactureOptionsEcheances(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRFactureOptionsEcheances === null && ($this->fact_echeance_id !== null) && $doQuery) {
            $this->aRFactureOptionsEcheances = RFactureOptionsEcheancesQuery::create()->findPk($this->fact_echeance_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRFactureOptionsEcheances->addFactureEditionHistorys($this);
             */
        }

        return $this->aRFactureOptionsEcheances;
    }

    /**
     * Declares an association between this object and a JournalDeVente object.
     *
     * @param                  JournalDeVente $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setJournalDeVente(JournalDeVente $v = null)
    {
        if ($v === null) {
            $this->setJdvId(NULL);
        } else {
            $this->setJdvId($v->getJdvId());
        }

        $this->aJournalDeVente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the JournalDeVente object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
        }


        return $this;
    }


    /**
     * Get the associated JournalDeVente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return JournalDeVente The associated JournalDeVente object.
     * @throws PropelException
     */
    public function getJournalDeVente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aJournalDeVente === null && ($this->jdv_id !== null) && $doQuery) {
            $this->aJournalDeVente = JournalDeVenteQuery::create()->findPk($this->jdv_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aJournalDeVente->addFactureEditionHistorys($this);
             */
        }

        return $this->aJournalDeVente;
    }

    /**
     * Declares an association between this object and a Contacts object.
     *
     * @param                  Contacts $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContactFacturation(Contacts $v = null)
    {
        if ($v === null) {
            $this->setCtId(NULL);
        } else {
            $this->setCtId($v->getCtId());
        }

        $this->aContactFacturation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Contacts object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
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
        if ($this->aContactFacturation === null && ($this->ct_id !== null) && $doQuery) {
            $this->aContactFacturation = ContactsQuery::create()->findPk($this->ct_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContactFacturation->addFactureEditionHistorys($this);
             */
        }

        return $this->aContactFacturation;
    }

    /**
     * Declares an association between this object and a Users object.
     *
     * @param                  Users $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setFactReeditionUser(Users $v = null)
    {
        if ($v === null) {
            $this->setFactEhUserId(NULL);
        } else {
            $this->setFactEhUserId($v->getUserId());
        }

        $this->aFactReeditionUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Users object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
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
    public function getFactReeditionUser(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aFactReeditionUser === null && ($this->fact_eh_user_id !== null) && $doQuery) {
            $this->aFactReeditionUser = UsersQuery::create()->findPk($this->fact_eh_user_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aFactReeditionUser->addFactureEditionHistorys($this);
             */
        }

        return $this->aFactReeditionUser;
    }

    /**
     * Declares an association between this object and a Factures object.
     *
     * @param                  Factures $v
     * @return FactureEditionHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setReeditedFacture(Factures $v = null)
    {
        if ($v === null) {
            $this->setFactId(NULL);
        } else {
            $this->setFactId($v->getFactId());
        }

        $this->aReeditedFacture = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Factures object, it will not be re-added.
        if ($v !== null) {
            $v->addFactureEditionHistory($this);
        }


        return $this;
    }


    /**
     * Get the associated Factures object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Factures The associated Factures object.
     * @throws PropelException
     */
    public function getReeditedFacture(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aReeditedFacture === null && ($this->fact_id !== null) && $doQuery) {
            $this->aReeditedFacture = FacturesQuery::create()->findPk($this->fact_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aReeditedFacture->addFactureEditionHistorys($this);
             */
        }

        return $this->aReeditedFacture;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->fact_eh_id = null;
        $this->fact_eh_user_id = null;
        $this->reedition_date = null;
        $this->fact_id = null;
        $this->r_fact_type_id = null;
        $this->op_id = null;
        $this->cl_id = null;
        $this->ct_id = null;
        $this->dc_id = null;
        $this->fact_numero = null;
        $this->fact_reference = null;
        $this->fact_lang = null;
        $this->fact_num_cmd = null;
        $this->fact_montant_ht = null;
        $this->fact_montant_ttc = null;
        $this->fact_montant_encaisse = null;
        $this->fact_destinataire = null;
        $this->fact_attention = null;
        $this->fact_adresse1 = null;
        $this->fact_adresse2 = null;
        $this->fact_adresse3 = null;
        $this->fact_code_postal = null;
        $this->fact_ville = null;
        $this->fact_pays = null;
        $this->fact_mention_spec = null;
        $this->fact_user_edition = null;
        $this->fact_status_id = null;
        $this->fact_verrou = null;
        $this->fact_has_relance = null;
        $this->fact_annul_id = null;
        $this->fact_date_echeance = null;
        $this->fact_taux_adf = null;
        $this->fact_date_create = null;
        $this->fact_date_modify = null;
        $this->fact_user_id = null;
        $this->fact_user_modify = null;
        $this->fact_echeance_id = null;
        $this->jdv_id = null;
        $this->fact_date = null;
        $this->fact_email = null;
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
            if ($this->aOperations instanceof Persistent) {
              $this->aOperations->clearAllReferences($deep);
            }
            if ($this->aRFactureTypes instanceof Persistent) {
              $this->aRFactureTypes->clearAllReferences($deep);
            }
            if ($this->aClients instanceof Persistent) {
              $this->aClients->clearAllReferences($deep);
            }
            if ($this->aClientFactureOptions instanceof Persistent) {
              $this->aClientFactureOptions->clearAllReferences($deep);
            }
            if ($this->aRFactureStatuts instanceof Persistent) {
              $this->aRFactureStatuts->clearAllReferences($deep);
            }
            if ($this->aPlanFacturationParams instanceof Persistent) {
              $this->aPlanFacturationParams->clearAllReferences($deep);
            }
            if ($this->aRFactureOptionsEcheances instanceof Persistent) {
              $this->aRFactureOptionsEcheances->clearAllReferences($deep);
            }
            if ($this->aJournalDeVente instanceof Persistent) {
              $this->aJournalDeVente->clearAllReferences($deep);
            }
            if ($this->aContactFacturation instanceof Persistent) {
              $this->aContactFacturation->clearAllReferences($deep);
            }
            if ($this->aFactReeditionUser instanceof Persistent) {
              $this->aFactReeditionUser->clearAllReferences($deep);
            }
            if ($this->aReeditedFacture instanceof Persistent) {
              $this->aReeditedFacture->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aOperations = null;
        $this->aRFactureTypes = null;
        $this->aClients = null;
        $this->aClientFactureOptions = null;
        $this->aRFactureStatuts = null;
        $this->aPlanFacturationParams = null;
        $this->aRFactureOptionsEcheances = null;
        $this->aJournalDeVente = null;
        $this->aContactFacturation = null;
        $this->aFactReeditionUser = null;
        $this->aReeditedFacture = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(FactureEditionHistoryPeer::DEFAULT_STRING_FORMAT);
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
                return BaseFactureEditionHistoryPeer::getConnection();
            }
}
