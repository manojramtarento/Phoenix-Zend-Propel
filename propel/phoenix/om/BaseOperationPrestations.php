<?php


/**
 * Base class that represents a row from the 'operation_prestations' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationPrestations extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationPrestationsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationPrestationsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the op_prest_id field.
     * @var        int
     */
    protected $op_prest_id;

    /**
     * The value for the op_r_prest_id field.
     * @var        int
     */
    protected $op_r_prest_id;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the op_prest_rubri_id field.
     * @var        int
     */
    protected $op_prest_rubri_id;

    /**
     * The value for the op_prest_libelle field.
     * @var        string
     */
    protected $op_prest_libelle;

    /**
     * The value for the op_prest_libelle_devis field.
     * @var        string
     */
    protected $op_prest_libelle_devis;

    /**
     * The value for the op_prest_description field.
     * @var        string
     */
    protected $op_prest_description;

    /**
     * The value for the op_prest_comment_interne field.
     * @var        string
     */
    protected $op_prest_comment_interne;

    /**
     * The value for the op_prest_order field.
     * @var        int
     */
    protected $op_prest_order;

    /**
     * The value for the op_prest_scena_id field.
     * @var        int
     */
    protected $op_prest_scena_id;

    /**
     * The value for the op_prest_prime_id field.
     * @var        int
     */
    protected $op_prest_prime_id;

    /**
     * The value for the op_prest_pv field.
     * Note: this column has a database default value of: 0.0
     * @var        float
     */
    protected $op_prest_pv;

    /**
     * The value for the op_prest_coef field.
     * Note: this column has a database default value of: 1.0
     * @var        float
     */
    protected $op_prest_coef;

    /**
     * The value for the op_prest_ciestim field.
     * @var        float
     */
    protected $op_prest_ciestim;

    /**
     * The value for the op_prest_ceestim field.
     * @var        float
     */
    protected $op_prest_ceestim;

    /**
     * The value for the op_prest_qestim field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $op_prest_qestim;

    /**
     * The value for the op_prest_mestim field.
     * Note: this column has a database default value of: 0.0
     * @var        float
     */
    protected $op_prest_mestim;

    /**
     * The value for the op_prest_cireel field.
     * @var        float
     */
    protected $op_prest_cireel;

    /**
     * The value for the op_prest_cereel field.
     * @var        float
     */
    protected $op_prest_cereel;

    /**
     * The value for the op_prest_qreel field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $op_prest_qreel;

    /**
     * The value for the op_prest_mreel field.
     * Note: this column has a database default value of: 0.0
     * @var        float
     */
    protected $op_prest_mreel;

    /**
     * The value for the op_prest_couts_valides field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $op_prest_couts_valides;

    /**
     * The value for the op_prest_off field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $op_prest_off;

    /**
     * The value for the op_prest_npr field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $op_prest_npr;

    /**
     * The value for the op_prest_npa field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $op_prest_npa;

    /**
     * The value for the op_prest_code_comptable field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $op_prest_code_comptable;

    /**
     * The value for the op_adf field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $op_adf;

    /**
     * The value for the op_user_couts_estim field.
     * @var        int
     */
    protected $op_user_couts_estim;

    /**
     * The value for the op_user_couts_reel field.
     * @var        int
     */
    protected $op_user_couts_reel;

    /**
     * The value for the op_prest_is_maj_from_compiluo field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $op_prest_is_maj_from_compiluo;

    /**
     * The value for the date_debut_prestation field.
     * @var        string
     */
    protected $date_debut_prestation;

    /**
     * The value for the date_fin_prestation field.
     * @var        string
     */
    protected $date_fin_prestation;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * The value for the op_prest_is_mandatory field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $op_prest_is_mandatory;

    /**
     * The value for the user_modify field.
     * @var        int
     */
    protected $user_modify;

    /**
     * The value for the date_modify field.
     * @var        string
     */
    protected $date_modify;

    /**
     * The value for the cost_updater_user field.
     * @var        int
     */
    protected $cost_updater_user;

    /**
     * The value for the cost_validation_date field.
     * @var        string
     */
    protected $cost_validation_date;

    /**
     * @var        OperationScenarii
     */
    protected $aOperationScenarii;

    /**
     * @var        OperationRubriques
     */
    protected $aOperationRubriques;

    /**
     * @var        Operations
     */
    protected $aOperations;

    /**
     * @var        RPrestations
     */
    protected $aRPrestations;

    /**
     * @var        OperationPrimes
     */
    protected $aOperationPrimes;

    /**
     * @var        HistoCouts
     */
    protected $aHistoCouts;

    /**
     * @var        Users
     */
    protected $aUsers;

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
        $this->op_prest_pv = 0.0;
        $this->op_prest_coef = 1.0;
        $this->op_prest_qestim = 1;
        $this->op_prest_mestim = 0.0;
        $this->op_prest_qreel = 0;
        $this->op_prest_mreel = 0.0;
        $this->op_prest_couts_valides = false;
        $this->op_prest_off = false;
        $this->op_prest_npr = false;
        $this->op_prest_npa = false;
        $this->op_prest_code_comptable = '';
        $this->op_adf = false;
        $this->op_prest_is_maj_from_compiluo = false;
        $this->op_prest_is_mandatory = false;
    }

    /**
     * Initializes internal state of BaseOperationPrestations object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [op_prest_id] column value.
     *
     * @return int
     */
    public function getOpPrestId()
    {

        return $this->op_prest_id;
    }

    /**
     * Get the [op_r_prest_id] column value.
     *
     * @return int
     */
    public function getOpRPrestId()
    {

        return $this->op_r_prest_id;
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
     * Get the [op_prest_rubri_id] column value.
     *
     * @return int
     */
    public function getOpPrestRubriId()
    {

        return $this->op_prest_rubri_id;
    }

    /**
     * Get the [op_prest_libelle] column value.
     *
     * @return string
     */
    public function getOpPrestLibelle()
    {

        return $this->op_prest_libelle;
    }

    /**
     * Get the [op_prest_libelle_devis] column value.
     *
     * @return string
     */
    public function getOpPrestLibelleDevis()
    {

        return $this->op_prest_libelle_devis;
    }

    /**
     * Get the [op_prest_description] column value.
     *
     * @return string
     */
    public function getOpPrestDescription()
    {

        return $this->op_prest_description;
    }

    /**
     * Get the [op_prest_comment_interne] column value.
     *
     * @return string
     */
    public function getOpPrestCommentInterne()
    {

        return $this->op_prest_comment_interne;
    }

    /**
     * Get the [op_prest_order] column value.
     *
     * @return int
     */
    public function getOpPrestOrder()
    {

        return $this->op_prest_order;
    }

    /**
     * Get the [op_prest_scena_id] column value.
     *
     * @return int
     */
    public function getOpPrestScenaId()
    {

        return $this->op_prest_scena_id;
    }

    /**
     * Get the [op_prest_prime_id] column value.
     *
     * @return int
     */
    public function getOpPrestPrimeId()
    {

        return $this->op_prest_prime_id;
    }

    /**
     * Get the [op_prest_pv] column value.
     *
     * @return float
     */
    public function getOpPrestPv()
    {

        return $this->op_prest_pv;
    }

    /**
     * Get the [op_prest_coef] column value.
     *
     * @return float
     */
    public function getOpPrestCoef()
    {

        return $this->op_prest_coef;
    }

    /**
     * Get the [op_prest_ciestim] column value.
     *
     * @return float
     */
    public function getOpPrestCiestim()
    {

        return $this->op_prest_ciestim;
    }

    /**
     * Get the [op_prest_ceestim] column value.
     *
     * @return float
     */
    public function getOpPrestCeestim()
    {

        return $this->op_prest_ceestim;
    }

    /**
     * Get the [op_prest_qestim] column value.
     *
     * @return int
     */
    public function getOpPrestQestim()
    {

        return $this->op_prest_qestim;
    }

    /**
     * Get the [op_prest_mestim] column value.
     *
     * @return float
     */
    public function getOpPrestMestim()
    {

        return $this->op_prest_mestim;
    }

    /**
     * Get the [op_prest_cireel] column value.
     *
     * @return float
     */
    public function getOpPrestCireel()
    {

        return $this->op_prest_cireel;
    }

    /**
     * Get the [op_prest_cereel] column value.
     *
     * @return float
     */
    public function getOpPrestCereel()
    {

        return $this->op_prest_cereel;
    }

    /**
     * Get the [op_prest_qreel] column value.
     *
     * @return int
     */
    public function getOpPrestQreel()
    {

        return $this->op_prest_qreel;
    }

    /**
     * Get the [op_prest_mreel] column value.
     *
     * @return float
     */
    public function getOpPrestMreel()
    {

        return $this->op_prest_mreel;
    }

    /**
     * Get the [op_prest_couts_valides] column value.
     *
     * @return boolean
     */
    public function getOpPrestCoutsValides()
    {

        return $this->op_prest_couts_valides;
    }

    /**
     * Get the [op_prest_off] column value.
     *
     * @return boolean
     */
    public function getOpPrestOff()
    {

        return $this->op_prest_off;
    }

    /**
     * Get the [op_prest_npr] column value.
     *
     * @return boolean
     */
    public function getOpPrestNpr()
    {

        return $this->op_prest_npr;
    }

    /**
     * Get the [op_prest_npa] column value.
     *
     * @return boolean
     */
    public function getOpPrestNpa()
    {

        return $this->op_prest_npa;
    }

    /**
     * Get the [op_prest_code_comptable] column value.
     *
     * @return string
     */
    public function getOpPrestCodeComptable()
    {

        return $this->op_prest_code_comptable;
    }

    /**
     * Get the [op_adf] column value.
     *
     * @return boolean
     */
    public function getOpAdf()
    {

        return $this->op_adf;
    }

    /**
     * Get the [op_user_couts_estim] column value.
     *
     * @return int
     */
    public function getOpUserCoutsEstim()
    {

        return $this->op_user_couts_estim;
    }

    /**
     * Get the [op_user_couts_reel] column value.
     *
     * @return int
     */
    public function getOpUserCoutsReel()
    {

        return $this->op_user_couts_reel;
    }

    /**
     * Get the [op_prest_is_maj_from_compiluo] column value.
     *
     * @return boolean
     */
    public function getOpPrestIsMajFromCompiluo()
    {

        return $this->op_prest_is_maj_from_compiluo;
    }

    /**
     * Get the [optionally formatted] temporal [date_debut_prestation] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDebutPrestation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_debut_prestation === null) {
            return null;
        }

        if ($this->date_debut_prestation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_debut_prestation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_debut_prestation, true), $x);
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
     * Get the [optionally formatted] temporal [date_fin_prestation] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateFinPrestation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_fin_prestation === null) {
            return null;
        }

        if ($this->date_fin_prestation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_fin_prestation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_fin_prestation, true), $x);
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
     * Get the [op_prest_is_mandatory] column value.
     *
     * @return boolean
     */
    public function getOpPrestIsMandatory()
    {

        return $this->op_prest_is_mandatory;
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
     * Get the [cost_updater_user] column value.
     *
     * @return int
     */
    public function getCostUpdaterUser()
    {

        return $this->cost_updater_user;
    }

    /**
     * Get the [optionally formatted] temporal [cost_validation_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCostValidationDate($format = 'Y-m-d H:i:s')
    {
        if ($this->cost_validation_date === null) {
            return null;
        }

        if ($this->cost_validation_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->cost_validation_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->cost_validation_date, true), $x);
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
     * Set the value of [op_prest_id] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_id !== $v) {
                    $this->op_prest_id = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_ID;
                }

        if ($this->aHistoCouts !== null && $this->aHistoCouts->getOpPrestId() !== $v) {
            $this->aHistoCouts = null;
        }


        return $this;
    } // setOpPrestId()

    /**
     * Set the value of [op_r_prest_id] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpRPrestId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_r_prest_id !== $v) {
                    $this->op_r_prest_id = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_R_PREST_ID;
                }

        if ($this->aRPrestations !== null && $this->aRPrestations->getRPrestationId() !== $v) {
            $this->aRPrestations = null;
        }


        return $this;
    } // setOpRPrestId()

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_ID;
                }

        if ($this->aOperations !== null && $this->aOperations->getOpId() !== $v) {
            $this->aOperations = null;
        }


        return $this;
    } // setOpId()

    /**
     * Set the value of [op_prest_rubri_id] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestRubriId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_rubri_id !== $v) {
                    $this->op_prest_rubri_id = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_RUBRI_ID;
                }

        if ($this->aOperationRubriques !== null && $this->aOperationRubriques->getOpRubriqueId() !== $v) {
            $this->aOperationRubriques = null;
        }


        return $this;
    } // setOpPrestRubriId()

    /**
     * Set the value of [op_prest_libelle] column.
     *
     * @param  string $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_prest_libelle !== $v) {
            $this->op_prest_libelle = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_LIBELLE;
        }


        return $this;
    } // setOpPrestLibelle()

    /**
     * Set the value of [op_prest_libelle_devis] column.
     *
     * @param  string $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestLibelleDevis($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_prest_libelle_devis !== $v) {
            $this->op_prest_libelle_devis = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_LIBELLE_DEVIS;
        }


        return $this;
    } // setOpPrestLibelleDevis()

    /**
     * Set the value of [op_prest_description] column.
     *
     * @param  string $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_prest_description !== $v) {
            $this->op_prest_description = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_DESCRIPTION;
        }


        return $this;
    } // setOpPrestDescription()

    /**
     * Set the value of [op_prest_comment_interne] column.
     *
     * @param  string $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestCommentInterne($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_prest_comment_interne !== $v) {
            $this->op_prest_comment_interne = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_COMMENT_INTERNE;
        }


        return $this;
    } // setOpPrestCommentInterne()

    /**
     * Set the value of [op_prest_order] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestOrder($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_order !== $v) {
                    $this->op_prest_order = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_ORDER;
                }


        return $this;
    } // setOpPrestOrder()

    /**
     * Set the value of [op_prest_scena_id] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestScenaId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_scena_id !== $v) {
                    $this->op_prest_scena_id = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_SCENA_ID;
                }

        if ($this->aOperationScenarii !== null && $this->aOperationScenarii->getOpScenarioId() !== $v) {
            $this->aOperationScenarii = null;
        }


        return $this;
    } // setOpPrestScenaId()

    /**
     * Set the value of [op_prest_prime_id] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestPrimeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_prime_id !== $v) {
                    $this->op_prest_prime_id = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_PRIME_ID;
                }

        if ($this->aOperationPrimes !== null && $this->aOperationPrimes->getOpPrimeId() !== $v) {
            $this->aOperationPrimes = null;
        }


        return $this;
    } // setOpPrestPrimeId()

    /**
     * Set the value of [op_prest_pv] column.
     *
     * @param  float $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestPv($v)
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
                if ($this->op_prest_pv !== $v) {
                    $this->op_prest_pv = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_PV;
                }


        return $this;
    } // setOpPrestPv()

    /**
     * Set the value of [op_prest_coef] column.
     *
     * @param  float $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestCoef($v)
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
                if ($this->op_prest_coef !== $v) {
                    $this->op_prest_coef = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_COEF;
                }


        return $this;
    } // setOpPrestCoef()

    /**
     * Set the value of [op_prest_ciestim] column.
     *
     * @param  float $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestCiestim($v)
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
                if ($this->op_prest_ciestim !== $v) {
                    $this->op_prest_ciestim = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_CIESTIM;
                }


        return $this;
    } // setOpPrestCiestim()

    /**
     * Set the value of [op_prest_ceestim] column.
     *
     * @param  float $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestCeestim($v)
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
                if ($this->op_prest_ceestim !== $v) {
                    $this->op_prest_ceestim = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_CEESTIM;
                }


        return $this;
    } // setOpPrestCeestim()

    /**
     * Set the value of [op_prest_qestim] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestQestim($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_qestim !== $v) {
                    $this->op_prest_qestim = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_QESTIM;
                }


        return $this;
    } // setOpPrestQestim()

    /**
     * Set the value of [op_prest_mestim] column.
     *
     * @param  float $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestMestim($v)
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
                if ($this->op_prest_mestim !== $v) {
                    $this->op_prest_mestim = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_MESTIM;
                }


        return $this;
    } // setOpPrestMestim()

    /**
     * Set the value of [op_prest_cireel] column.
     *
     * @param  float $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestCireel($v)
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
                if ($this->op_prest_cireel !== $v) {
                    $this->op_prest_cireel = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_CIREEL;
                }


        return $this;
    } // setOpPrestCireel()

    /**
     * Set the value of [op_prest_cereel] column.
     *
     * @param  float $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestCereel($v)
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
                if ($this->op_prest_cereel !== $v) {
                    $this->op_prest_cereel = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_CEREEL;
                }


        return $this;
    } // setOpPrestCereel()

    /**
     * Set the value of [op_prest_qreel] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestQreel($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_qreel !== $v) {
                    $this->op_prest_qreel = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_QREEL;
                }


        return $this;
    } // setOpPrestQreel()

    /**
     * Set the value of [op_prest_mreel] column.
     *
     * @param  float $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestMreel($v)
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
                if ($this->op_prest_mreel !== $v) {
                    $this->op_prest_mreel = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_MREEL;
                }


        return $this;
    } // setOpPrestMreel()

    /**
     * Sets the value of the [op_prest_couts_valides] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestCoutsValides($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->op_prest_couts_valides !== $v) {
            $this->op_prest_couts_valides = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_COUTS_VALIDES;
        }


        return $this;
    } // setOpPrestCoutsValides()

    /**
     * Sets the value of the [op_prest_off] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestOff($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->op_prest_off !== $v) {
            $this->op_prest_off = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_OFF;
        }


        return $this;
    } // setOpPrestOff()

    /**
     * Sets the value of the [op_prest_npr] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestNpr($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->op_prest_npr !== $v) {
            $this->op_prest_npr = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_NPR;
        }


        return $this;
    } // setOpPrestNpr()

    /**
     * Sets the value of the [op_prest_npa] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestNpa($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->op_prest_npa !== $v) {
            $this->op_prest_npa = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_NPA;
        }


        return $this;
    } // setOpPrestNpa()

    /**
     * Set the value of [op_prest_code_comptable] column.
     *
     * @param  string $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestCodeComptable($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_prest_code_comptable !== $v) {
            $this->op_prest_code_comptable = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_CODE_COMPTABLE;
        }


        return $this;
    } // setOpPrestCodeComptable()

    /**
     * Sets the value of the [op_adf] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpAdf($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->op_adf !== $v) {
            $this->op_adf = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_ADF;
        }


        return $this;
    } // setOpAdf()

    /**
     * Set the value of [op_user_couts_estim] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpUserCoutsEstim($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_user_couts_estim !== $v) {
                    $this->op_user_couts_estim = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_USER_COUTS_ESTIM;
                }


        return $this;
    } // setOpUserCoutsEstim()

    /**
     * Set the value of [op_user_couts_reel] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpUserCoutsReel($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_user_couts_reel !== $v) {
                    $this->op_user_couts_reel = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::OP_USER_COUTS_REEL;
                }


        return $this;
    } // setOpUserCoutsReel()

    /**
     * Sets the value of the [op_prest_is_maj_from_compiluo] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestIsMajFromCompiluo($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->op_prest_is_maj_from_compiluo !== $v) {
            $this->op_prest_is_maj_from_compiluo = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_IS_MAJ_FROM_COMPILUO;
        }


        return $this;
    } // setOpPrestIsMajFromCompiluo()

    /**
     * Sets the value of [date_debut_prestation] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setDateDebutPrestation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_debut_prestation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_debut_prestation !== null && $tmpDt = new DateTime($this->date_debut_prestation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_debut_prestation = $newDateAsString;
                $this->modifiedColumns[] = OperationPrestationsPeer::DATE_DEBUT_PRESTATION;
            }
        } // if either are not null


        return $this;
    } // setDateDebutPrestation()

    /**
     * Sets the value of [date_fin_prestation] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setDateFinPrestation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_fin_prestation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_fin_prestation !== null && $tmpDt = new DateTime($this->date_fin_prestation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_fin_prestation = $newDateAsString;
                $this->modifiedColumns[] = OperationPrestationsPeer::DATE_FIN_PRESTATION;
            }
        } // if either are not null


        return $this;
    } // setDateFinPrestation()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = OperationPrestationsPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of the [op_prest_is_mandatory] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setOpPrestIsMandatory($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->op_prest_is_mandatory !== $v) {
            $this->op_prest_is_mandatory = $v;
            $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_IS_MANDATORY;
        }


        return $this;
    } // setOpPrestIsMandatory()

    /**
     * Set the value of [user_modify] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationPrestationsPeer::USER_MODIFY;
                }


        return $this;
    } // setUserModify()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = OperationPrestationsPeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

    /**
     * Set the value of [cost_updater_user] column.
     *
     * @param  int $v new value
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setCostUpdaterUser($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cost_updater_user !== $v) {
                    $this->cost_updater_user = $v;
                    $this->modifiedColumns[] = OperationPrestationsPeer::COST_UPDATER_USER;
                }

        if ($this->aUsers !== null && $this->aUsers->getUserId() !== $v) {
            $this->aUsers = null;
        }


        return $this;
    } // setCostUpdaterUser()

    /**
     * Sets the value of [cost_validation_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationPrestations The current object (for fluent API support)
     */
    public function setCostValidationDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->cost_validation_date !== null || $dt !== null) {
            $currentDateAsString = ($this->cost_validation_date !== null && $tmpDt = new DateTime($this->cost_validation_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->cost_validation_date = $newDateAsString;
                $this->modifiedColumns[] = OperationPrestationsPeer::COST_VALIDATION_DATE;
            }
        } // if either are not null


        return $this;
    } // setCostValidationDate()

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
            if ($this->op_prest_pv !== 0.0) {
                return false;
            }

            if ($this->op_prest_coef !== 1.0) {
                return false;
            }

            if ($this->op_prest_qestim !== 1) {
                return false;
            }

            if ($this->op_prest_mestim !== 0.0) {
                return false;
            }

            if ($this->op_prest_qreel !== 0) {
                return false;
            }

            if ($this->op_prest_mreel !== 0.0) {
                return false;
            }

            if ($this->op_prest_couts_valides !== false) {
                return false;
            }

            if ($this->op_prest_off !== false) {
                return false;
            }

            if ($this->op_prest_npr !== false) {
                return false;
            }

            if ($this->op_prest_npa !== false) {
                return false;
            }

            if ($this->op_prest_code_comptable !== '') {
                return false;
            }

            if ($this->op_adf !== false) {
                return false;
            }

            if ($this->op_prest_is_maj_from_compiluo !== false) {
                return false;
            }

            if ($this->op_prest_is_mandatory !== false) {
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

            $this->op_prest_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_r_prest_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->op_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->op_prest_rubri_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->op_prest_libelle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->op_prest_libelle_devis = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->op_prest_description = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->op_prest_comment_interne = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->op_prest_order = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->op_prest_scena_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->op_prest_prime_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->op_prest_pv = ($row[$startcol + 11] !== null) ? (float) $row[$startcol + 11] : null;
            $this->op_prest_coef = ($row[$startcol + 12] !== null) ? (float) $row[$startcol + 12] : null;
            $this->op_prest_ciestim = ($row[$startcol + 13] !== null) ? (float) $row[$startcol + 13] : null;
            $this->op_prest_ceestim = ($row[$startcol + 14] !== null) ? (float) $row[$startcol + 14] : null;
            $this->op_prest_qestim = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->op_prest_mestim = ($row[$startcol + 16] !== null) ? (float) $row[$startcol + 16] : null;
            $this->op_prest_cireel = ($row[$startcol + 17] !== null) ? (float) $row[$startcol + 17] : null;
            $this->op_prest_cereel = ($row[$startcol + 18] !== null) ? (float) $row[$startcol + 18] : null;
            $this->op_prest_qreel = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->op_prest_mreel = ($row[$startcol + 20] !== null) ? (float) $row[$startcol + 20] : null;
            $this->op_prest_couts_valides = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
            $this->op_prest_off = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
            $this->op_prest_npr = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
            $this->op_prest_npa = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
            $this->op_prest_code_comptable = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->op_adf = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
            $this->op_user_couts_estim = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->op_user_couts_reel = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->op_prest_is_maj_from_compiluo = ($row[$startcol + 29] !== null) ? (boolean) $row[$startcol + 29] : null;
            $this->date_debut_prestation = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->date_fin_prestation = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->date_create = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->op_prest_is_mandatory = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
            $this->user_modify = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->date_modify = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->cost_updater_user = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->cost_validation_date = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 38; // 38 = OperationPrestationsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OperationPrestations object", $e);
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

        if ($this->aHistoCouts !== null && $this->op_prest_id !== $this->aHistoCouts->getOpPrestId()) {
            $this->aHistoCouts = null;
        }
        if ($this->aRPrestations !== null && $this->op_r_prest_id !== $this->aRPrestations->getRPrestationId()) {
            $this->aRPrestations = null;
        }
        if ($this->aOperations !== null && $this->op_id !== $this->aOperations->getOpId()) {
            $this->aOperations = null;
        }
        if ($this->aOperationRubriques !== null && $this->op_prest_rubri_id !== $this->aOperationRubriques->getOpRubriqueId()) {
            $this->aOperationRubriques = null;
        }
        if ($this->aOperationScenarii !== null && $this->op_prest_scena_id !== $this->aOperationScenarii->getOpScenarioId()) {
            $this->aOperationScenarii = null;
        }
        if ($this->aOperationPrimes !== null && $this->op_prest_prime_id !== $this->aOperationPrimes->getOpPrimeId()) {
            $this->aOperationPrimes = null;
        }
        if ($this->aUsers !== null && $this->cost_updater_user !== $this->aUsers->getUserId()) {
            $this->aUsers = null;
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
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationPrestationsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperationScenarii = null;
            $this->aOperationRubriques = null;
            $this->aOperations = null;
            $this->aRPrestations = null;
            $this->aOperationPrimes = null;
            $this->aHistoCouts = null;
            $this->aUsers = null;
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
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationPrestationsQuery::create()
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
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setDateCreate(time());

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
                OperationPrestationsPeer::addInstanceToPool($this);
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

            if ($this->aOperationScenarii !== null) {
                if ($this->aOperationScenarii->isModified() || $this->aOperationScenarii->isNew()) {
                    $affectedRows += $this->aOperationScenarii->save($con);
                }
                $this->setOperationScenarii($this->aOperationScenarii);
            }

            if ($this->aOperationRubriques !== null) {
                if ($this->aOperationRubriques->isModified() || $this->aOperationRubriques->isNew()) {
                    $affectedRows += $this->aOperationRubriques->save($con);
                }
                $this->setOperationRubriques($this->aOperationRubriques);
            }

            if ($this->aOperations !== null) {
                if ($this->aOperations->isModified() || $this->aOperations->isNew()) {
                    $affectedRows += $this->aOperations->save($con);
                }
                $this->setOperations($this->aOperations);
            }

            if ($this->aRPrestations !== null) {
                if ($this->aRPrestations->isModified() || $this->aRPrestations->isNew()) {
                    $affectedRows += $this->aRPrestations->save($con);
                }
                $this->setRPrestations($this->aRPrestations);
            }

            if ($this->aOperationPrimes !== null) {
                if ($this->aOperationPrimes->isModified() || $this->aOperationPrimes->isNew()) {
                    $affectedRows += $this->aOperationPrimes->save($con);
                }
                $this->setOperationPrimes($this->aOperationPrimes);
            }

            if ($this->aHistoCouts !== null) {
                if ($this->aHistoCouts->isModified() || $this->aHistoCouts->isNew()) {
                    $affectedRows += $this->aHistoCouts->save($con);
                }
                $this->setHistoCouts($this->aHistoCouts);
            }

            if ($this->aUsers !== null) {
                if ($this->aUsers->isModified() || $this->aUsers->isNew()) {
                    $affectedRows += $this->aUsers->save($con);
                }
                $this->setUsers($this->aUsers);
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

        $this->modifiedColumns[] = OperationPrestationsPeer::OP_PREST_ID;
        if (null !== $this->op_prest_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OperationPrestationsPeer::OP_PREST_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_id`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_R_PREST_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_r_prest_id`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_RUBRI_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_rubri_id`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_libelle`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_LIBELLE_DEVIS)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_libelle_devis`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_description`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_COMMENT_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_comment_interne`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_order`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_SCENA_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_scena_id`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_PRIME_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_prime_id`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_PV)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_pv`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_COEF)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_coef`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_CIESTIM)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_ciestim`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_CEESTIM)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_ceestim`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_QESTIM)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_qestim`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_MESTIM)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_mestim`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_CIREEL)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_cireel`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_CEREEL)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_cereel`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_QREEL)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_qreel`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_MREEL)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_mreel`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_COUTS_VALIDES)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_couts_valides`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_OFF)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_off`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_NPR)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_npr`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_NPA)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_npa`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_CODE_COMPTABLE)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_code_comptable`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_ADF)) {
            $modifiedColumns[':p' . $index++]  = '`op_adf`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_USER_COUTS_ESTIM)) {
            $modifiedColumns[':p' . $index++]  = '`op_user_couts_estim`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_USER_COUTS_REEL)) {
            $modifiedColumns[':p' . $index++]  = '`op_user_couts_reel`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_IS_MAJ_FROM_COMPILUO)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_is_maj_from_compiluo`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::DATE_DEBUT_PRESTATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_debut_prestation`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::DATE_FIN_PRESTATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin_prestation`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_IS_MANDATORY)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_is_mandatory`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::USER_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`user_modify`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::COST_UPDATER_USER)) {
            $modifiedColumns[':p' . $index++]  = '`cost_updater_user`';
        }
        if ($this->isColumnModified(OperationPrestationsPeer::COST_VALIDATION_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`cost_validation_date`';
        }

        $sql = sprintf(
            'INSERT INTO `operation_prestations` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`op_prest_id`':
                        $stmt->bindValue($identifier, $this->op_prest_id, PDO::PARAM_INT);
                        break;
                    case '`op_r_prest_id`':
                        $stmt->bindValue($identifier, $this->op_r_prest_id, PDO::PARAM_INT);
                        break;
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`op_prest_rubri_id`':
                        $stmt->bindValue($identifier, $this->op_prest_rubri_id, PDO::PARAM_INT);
                        break;
                    case '`op_prest_libelle`':
                        $stmt->bindValue($identifier, $this->op_prest_libelle, PDO::PARAM_STR);
                        break;
                    case '`op_prest_libelle_devis`':
                        $stmt->bindValue($identifier, $this->op_prest_libelle_devis, PDO::PARAM_STR);
                        break;
                    case '`op_prest_description`':
                        $stmt->bindValue($identifier, $this->op_prest_description, PDO::PARAM_STR);
                        break;
                    case '`op_prest_comment_interne`':
                        $stmt->bindValue($identifier, $this->op_prest_comment_interne, PDO::PARAM_STR);
                        break;
                    case '`op_prest_order`':
                        $stmt->bindValue($identifier, $this->op_prest_order, PDO::PARAM_INT);
                        break;
                    case '`op_prest_scena_id`':
                        $stmt->bindValue($identifier, $this->op_prest_scena_id, PDO::PARAM_INT);
                        break;
                    case '`op_prest_prime_id`':
                        $stmt->bindValue($identifier, $this->op_prest_prime_id, PDO::PARAM_INT);
                        break;
                    case '`op_prest_pv`':
                        $stmt->bindValue($identifier, $this->op_prest_pv, PDO::PARAM_INT);
                        break;
                    case '`op_prest_coef`':
                        $stmt->bindValue($identifier, $this->op_prest_coef, PDO::PARAM_INT);
                        break;
                    case '`op_prest_ciestim`':
                        $stmt->bindValue($identifier, $this->op_prest_ciestim, PDO::PARAM_INT);
                        break;
                    case '`op_prest_ceestim`':
                        $stmt->bindValue($identifier, $this->op_prest_ceestim, PDO::PARAM_INT);
                        break;
                    case '`op_prest_qestim`':
                        $stmt->bindValue($identifier, $this->op_prest_qestim, PDO::PARAM_INT);
                        break;
                    case '`op_prest_mestim`':
                        $stmt->bindValue($identifier, $this->op_prest_mestim, PDO::PARAM_INT);
                        break;
                    case '`op_prest_cireel`':
                        $stmt->bindValue($identifier, $this->op_prest_cireel, PDO::PARAM_INT);
                        break;
                    case '`op_prest_cereel`':
                        $stmt->bindValue($identifier, $this->op_prest_cereel, PDO::PARAM_INT);
                        break;
                    case '`op_prest_qreel`':
                        $stmt->bindValue($identifier, $this->op_prest_qreel, PDO::PARAM_INT);
                        break;
                    case '`op_prest_mreel`':
                        $stmt->bindValue($identifier, $this->op_prest_mreel, PDO::PARAM_INT);
                        break;
                    case '`op_prest_couts_valides`':
                        $stmt->bindValue($identifier, (int) $this->op_prest_couts_valides, PDO::PARAM_INT);
                        break;
                    case '`op_prest_off`':
                        $stmt->bindValue($identifier, (int) $this->op_prest_off, PDO::PARAM_INT);
                        break;
                    case '`op_prest_npr`':
                        $stmt->bindValue($identifier, (int) $this->op_prest_npr, PDO::PARAM_INT);
                        break;
                    case '`op_prest_npa`':
                        $stmt->bindValue($identifier, (int) $this->op_prest_npa, PDO::PARAM_INT);
                        break;
                    case '`op_prest_code_comptable`':
                        $stmt->bindValue($identifier, $this->op_prest_code_comptable, PDO::PARAM_STR);
                        break;
                    case '`op_adf`':
                        $stmt->bindValue($identifier, (int) $this->op_adf, PDO::PARAM_INT);
                        break;
                    case '`op_user_couts_estim`':
                        $stmt->bindValue($identifier, $this->op_user_couts_estim, PDO::PARAM_INT);
                        break;
                    case '`op_user_couts_reel`':
                        $stmt->bindValue($identifier, $this->op_user_couts_reel, PDO::PARAM_INT);
                        break;
                    case '`op_prest_is_maj_from_compiluo`':
                        $stmt->bindValue($identifier, (int) $this->op_prest_is_maj_from_compiluo, PDO::PARAM_INT);
                        break;
                    case '`date_debut_prestation`':
                        $stmt->bindValue($identifier, $this->date_debut_prestation, PDO::PARAM_STR);
                        break;
                    case '`date_fin_prestation`':
                        $stmt->bindValue($identifier, $this->date_fin_prestation, PDO::PARAM_STR);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`op_prest_is_mandatory`':
                        $stmt->bindValue($identifier, (int) $this->op_prest_is_mandatory, PDO::PARAM_INT);
                        break;
                    case '`user_modify`':
                        $stmt->bindValue($identifier, $this->user_modify, PDO::PARAM_INT);
                        break;
                    case '`date_modify`':
                        $stmt->bindValue($identifier, $this->date_modify, PDO::PARAM_STR);
                        break;
                    case '`cost_updater_user`':
                        $stmt->bindValue($identifier, $this->cost_updater_user, PDO::PARAM_INT);
                        break;
                    case '`cost_validation_date`':
                        $stmt->bindValue($identifier, $this->cost_validation_date, PDO::PARAM_STR);
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
        $this->setOpPrestId($pk);

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

            if ($this->aOperationScenarii !== null) {
                if (!$this->aOperationScenarii->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationScenarii->getValidationFailures());
                }
            }

            if ($this->aOperationRubriques !== null) {
                if (!$this->aOperationRubriques->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationRubriques->getValidationFailures());
                }
            }

            if ($this->aOperations !== null) {
                if (!$this->aOperations->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperations->getValidationFailures());
                }
            }

            if ($this->aRPrestations !== null) {
                if (!$this->aRPrestations->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRPrestations->getValidationFailures());
                }
            }

            if ($this->aOperationPrimes !== null) {
                if (!$this->aOperationPrimes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationPrimes->getValidationFailures());
                }
            }

            if ($this->aHistoCouts !== null) {
                if (!$this->aHistoCouts->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aHistoCouts->getValidationFailures());
                }
            }

            if ($this->aUsers !== null) {
                if (!$this->aUsers->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsers->getValidationFailures());
                }
            }


            if (($retval = OperationPrestationsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = OperationPrestationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOpPrestId();
                break;
            case 1:
                return $this->getOpRPrestId();
                break;
            case 2:
                return $this->getOpId();
                break;
            case 3:
                return $this->getOpPrestRubriId();
                break;
            case 4:
                return $this->getOpPrestLibelle();
                break;
            case 5:
                return $this->getOpPrestLibelleDevis();
                break;
            case 6:
                return $this->getOpPrestDescription();
                break;
            case 7:
                return $this->getOpPrestCommentInterne();
                break;
            case 8:
                return $this->getOpPrestOrder();
                break;
            case 9:
                return $this->getOpPrestScenaId();
                break;
            case 10:
                return $this->getOpPrestPrimeId();
                break;
            case 11:
                return $this->getOpPrestPv();
                break;
            case 12:
                return $this->getOpPrestCoef();
                break;
            case 13:
                return $this->getOpPrestCiestim();
                break;
            case 14:
                return $this->getOpPrestCeestim();
                break;
            case 15:
                return $this->getOpPrestQestim();
                break;
            case 16:
                return $this->getOpPrestMestim();
                break;
            case 17:
                return $this->getOpPrestCireel();
                break;
            case 18:
                return $this->getOpPrestCereel();
                break;
            case 19:
                return $this->getOpPrestQreel();
                break;
            case 20:
                return $this->getOpPrestMreel();
                break;
            case 21:
                return $this->getOpPrestCoutsValides();
                break;
            case 22:
                return $this->getOpPrestOff();
                break;
            case 23:
                return $this->getOpPrestNpr();
                break;
            case 24:
                return $this->getOpPrestNpa();
                break;
            case 25:
                return $this->getOpPrestCodeComptable();
                break;
            case 26:
                return $this->getOpAdf();
                break;
            case 27:
                return $this->getOpUserCoutsEstim();
                break;
            case 28:
                return $this->getOpUserCoutsReel();
                break;
            case 29:
                return $this->getOpPrestIsMajFromCompiluo();
                break;
            case 30:
                return $this->getDateDebutPrestation();
                break;
            case 31:
                return $this->getDateFinPrestation();
                break;
            case 32:
                return $this->getDateCreate();
                break;
            case 33:
                return $this->getOpPrestIsMandatory();
                break;
            case 34:
                return $this->getUserModify();
                break;
            case 35:
                return $this->getDateModify();
                break;
            case 36:
                return $this->getCostUpdaterUser();
                break;
            case 37:
                return $this->getCostValidationDate();
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
        if (isset($alreadyDumpedObjects['OperationPrestations'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OperationPrestations'][$this->getPrimaryKey()] = true;
        $keys = OperationPrestationsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOpPrestId(),
            $keys[1] => $this->getOpRPrestId(),
            $keys[2] => $this->getOpId(),
            $keys[3] => $this->getOpPrestRubriId(),
            $keys[4] => $this->getOpPrestLibelle(),
            $keys[5] => $this->getOpPrestLibelleDevis(),
            $keys[6] => $this->getOpPrestDescription(),
            $keys[7] => $this->getOpPrestCommentInterne(),
            $keys[8] => $this->getOpPrestOrder(),
            $keys[9] => $this->getOpPrestScenaId(),
            $keys[10] => $this->getOpPrestPrimeId(),
            $keys[11] => $this->getOpPrestPv(),
            $keys[12] => $this->getOpPrestCoef(),
            $keys[13] => $this->getOpPrestCiestim(),
            $keys[14] => $this->getOpPrestCeestim(),
            $keys[15] => $this->getOpPrestQestim(),
            $keys[16] => $this->getOpPrestMestim(),
            $keys[17] => $this->getOpPrestCireel(),
            $keys[18] => $this->getOpPrestCereel(),
            $keys[19] => $this->getOpPrestQreel(),
            $keys[20] => $this->getOpPrestMreel(),
            $keys[21] => $this->getOpPrestCoutsValides(),
            $keys[22] => $this->getOpPrestOff(),
            $keys[23] => $this->getOpPrestNpr(),
            $keys[24] => $this->getOpPrestNpa(),
            $keys[25] => $this->getOpPrestCodeComptable(),
            $keys[26] => $this->getOpAdf(),
            $keys[27] => $this->getOpUserCoutsEstim(),
            $keys[28] => $this->getOpUserCoutsReel(),
            $keys[29] => $this->getOpPrestIsMajFromCompiluo(),
            $keys[30] => $this->getDateDebutPrestation(),
            $keys[31] => $this->getDateFinPrestation(),
            $keys[32] => $this->getDateCreate(),
            $keys[33] => $this->getOpPrestIsMandatory(),
            $keys[34] => $this->getUserModify(),
            $keys[35] => $this->getDateModify(),
            $keys[36] => $this->getCostUpdaterUser(),
            $keys[37] => $this->getCostValidationDate(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperationScenarii) {
                $result['OperationScenarii'] = $this->aOperationScenarii->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationRubriques) {
                $result['OperationRubriques'] = $this->aOperationRubriques->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperations) {
                $result['Operations'] = $this->aOperations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRPrestations) {
                $result['RPrestations'] = $this->aRPrestations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationPrimes) {
                $result['OperationPrimes'] = $this->aOperationPrimes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aHistoCouts) {
                $result['HistoCouts'] = $this->aHistoCouts->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsers) {
                $result['Users'] = $this->aUsers->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = OperationPrestationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOpPrestId($value);
                break;
            case 1:
                $this->setOpRPrestId($value);
                break;
            case 2:
                $this->setOpId($value);
                break;
            case 3:
                $this->setOpPrestRubriId($value);
                break;
            case 4:
                $this->setOpPrestLibelle($value);
                break;
            case 5:
                $this->setOpPrestLibelleDevis($value);
                break;
            case 6:
                $this->setOpPrestDescription($value);
                break;
            case 7:
                $this->setOpPrestCommentInterne($value);
                break;
            case 8:
                $this->setOpPrestOrder($value);
                break;
            case 9:
                $this->setOpPrestScenaId($value);
                break;
            case 10:
                $this->setOpPrestPrimeId($value);
                break;
            case 11:
                $this->setOpPrestPv($value);
                break;
            case 12:
                $this->setOpPrestCoef($value);
                break;
            case 13:
                $this->setOpPrestCiestim($value);
                break;
            case 14:
                $this->setOpPrestCeestim($value);
                break;
            case 15:
                $this->setOpPrestQestim($value);
                break;
            case 16:
                $this->setOpPrestMestim($value);
                break;
            case 17:
                $this->setOpPrestCireel($value);
                break;
            case 18:
                $this->setOpPrestCereel($value);
                break;
            case 19:
                $this->setOpPrestQreel($value);
                break;
            case 20:
                $this->setOpPrestMreel($value);
                break;
            case 21:
                $this->setOpPrestCoutsValides($value);
                break;
            case 22:
                $this->setOpPrestOff($value);
                break;
            case 23:
                $this->setOpPrestNpr($value);
                break;
            case 24:
                $this->setOpPrestNpa($value);
                break;
            case 25:
                $this->setOpPrestCodeComptable($value);
                break;
            case 26:
                $this->setOpAdf($value);
                break;
            case 27:
                $this->setOpUserCoutsEstim($value);
                break;
            case 28:
                $this->setOpUserCoutsReel($value);
                break;
            case 29:
                $this->setOpPrestIsMajFromCompiluo($value);
                break;
            case 30:
                $this->setDateDebutPrestation($value);
                break;
            case 31:
                $this->setDateFinPrestation($value);
                break;
            case 32:
                $this->setDateCreate($value);
                break;
            case 33:
                $this->setOpPrestIsMandatory($value);
                break;
            case 34:
                $this->setUserModify($value);
                break;
            case 35:
                $this->setDateModify($value);
                break;
            case 36:
                $this->setCostUpdaterUser($value);
                break;
            case 37:
                $this->setCostValidationDate($value);
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
        $keys = OperationPrestationsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOpPrestId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpRPrestId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOpId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOpPrestRubriId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOpPrestLibelle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOpPrestLibelleDevis($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOpPrestDescription($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOpPrestCommentInterne($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOpPrestOrder($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setOpPrestScenaId($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setOpPrestPrimeId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setOpPrestPv($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setOpPrestCoef($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOpPrestCiestim($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOpPrestCeestim($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setOpPrestQestim($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setOpPrestMestim($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setOpPrestCireel($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOpPrestCereel($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setOpPrestQreel($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setOpPrestMreel($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setOpPrestCoutsValides($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setOpPrestOff($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setOpPrestNpr($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setOpPrestNpa($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setOpPrestCodeComptable($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setOpAdf($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setOpUserCoutsEstim($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setOpUserCoutsReel($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setOpPrestIsMajFromCompiluo($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDateDebutPrestation($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDateFinPrestation($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDateCreate($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setOpPrestIsMandatory($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setUserModify($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDateModify($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setCostUpdaterUser($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setCostValidationDate($arr[$keys[37]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationPrestationsPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_ID)) $criteria->add(OperationPrestationsPeer::OP_PREST_ID, $this->op_prest_id);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_R_PREST_ID)) $criteria->add(OperationPrestationsPeer::OP_R_PREST_ID, $this->op_r_prest_id);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_ID)) $criteria->add(OperationPrestationsPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_RUBRI_ID)) $criteria->add(OperationPrestationsPeer::OP_PREST_RUBRI_ID, $this->op_prest_rubri_id);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_LIBELLE)) $criteria->add(OperationPrestationsPeer::OP_PREST_LIBELLE, $this->op_prest_libelle);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_LIBELLE_DEVIS)) $criteria->add(OperationPrestationsPeer::OP_PREST_LIBELLE_DEVIS, $this->op_prest_libelle_devis);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_DESCRIPTION)) $criteria->add(OperationPrestationsPeer::OP_PREST_DESCRIPTION, $this->op_prest_description);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_COMMENT_INTERNE)) $criteria->add(OperationPrestationsPeer::OP_PREST_COMMENT_INTERNE, $this->op_prest_comment_interne);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_ORDER)) $criteria->add(OperationPrestationsPeer::OP_PREST_ORDER, $this->op_prest_order);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_SCENA_ID)) $criteria->add(OperationPrestationsPeer::OP_PREST_SCENA_ID, $this->op_prest_scena_id);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_PRIME_ID)) $criteria->add(OperationPrestationsPeer::OP_PREST_PRIME_ID, $this->op_prest_prime_id);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_PV)) $criteria->add(OperationPrestationsPeer::OP_PREST_PV, $this->op_prest_pv);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_COEF)) $criteria->add(OperationPrestationsPeer::OP_PREST_COEF, $this->op_prest_coef);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_CIESTIM)) $criteria->add(OperationPrestationsPeer::OP_PREST_CIESTIM, $this->op_prest_ciestim);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_CEESTIM)) $criteria->add(OperationPrestationsPeer::OP_PREST_CEESTIM, $this->op_prest_ceestim);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_QESTIM)) $criteria->add(OperationPrestationsPeer::OP_PREST_QESTIM, $this->op_prest_qestim);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_MESTIM)) $criteria->add(OperationPrestationsPeer::OP_PREST_MESTIM, $this->op_prest_mestim);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_CIREEL)) $criteria->add(OperationPrestationsPeer::OP_PREST_CIREEL, $this->op_prest_cireel);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_CEREEL)) $criteria->add(OperationPrestationsPeer::OP_PREST_CEREEL, $this->op_prest_cereel);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_QREEL)) $criteria->add(OperationPrestationsPeer::OP_PREST_QREEL, $this->op_prest_qreel);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_MREEL)) $criteria->add(OperationPrestationsPeer::OP_PREST_MREEL, $this->op_prest_mreel);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_COUTS_VALIDES)) $criteria->add(OperationPrestationsPeer::OP_PREST_COUTS_VALIDES, $this->op_prest_couts_valides);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_OFF)) $criteria->add(OperationPrestationsPeer::OP_PREST_OFF, $this->op_prest_off);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_NPR)) $criteria->add(OperationPrestationsPeer::OP_PREST_NPR, $this->op_prest_npr);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_NPA)) $criteria->add(OperationPrestationsPeer::OP_PREST_NPA, $this->op_prest_npa);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_CODE_COMPTABLE)) $criteria->add(OperationPrestationsPeer::OP_PREST_CODE_COMPTABLE, $this->op_prest_code_comptable);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_ADF)) $criteria->add(OperationPrestationsPeer::OP_ADF, $this->op_adf);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_USER_COUTS_ESTIM)) $criteria->add(OperationPrestationsPeer::OP_USER_COUTS_ESTIM, $this->op_user_couts_estim);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_USER_COUTS_REEL)) $criteria->add(OperationPrestationsPeer::OP_USER_COUTS_REEL, $this->op_user_couts_reel);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_IS_MAJ_FROM_COMPILUO)) $criteria->add(OperationPrestationsPeer::OP_PREST_IS_MAJ_FROM_COMPILUO, $this->op_prest_is_maj_from_compiluo);
        if ($this->isColumnModified(OperationPrestationsPeer::DATE_DEBUT_PRESTATION)) $criteria->add(OperationPrestationsPeer::DATE_DEBUT_PRESTATION, $this->date_debut_prestation);
        if ($this->isColumnModified(OperationPrestationsPeer::DATE_FIN_PRESTATION)) $criteria->add(OperationPrestationsPeer::DATE_FIN_PRESTATION, $this->date_fin_prestation);
        if ($this->isColumnModified(OperationPrestationsPeer::DATE_CREATE)) $criteria->add(OperationPrestationsPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(OperationPrestationsPeer::OP_PREST_IS_MANDATORY)) $criteria->add(OperationPrestationsPeer::OP_PREST_IS_MANDATORY, $this->op_prest_is_mandatory);
        if ($this->isColumnModified(OperationPrestationsPeer::USER_MODIFY)) $criteria->add(OperationPrestationsPeer::USER_MODIFY, $this->user_modify);
        if ($this->isColumnModified(OperationPrestationsPeer::DATE_MODIFY)) $criteria->add(OperationPrestationsPeer::DATE_MODIFY, $this->date_modify);
        if ($this->isColumnModified(OperationPrestationsPeer::COST_UPDATER_USER)) $criteria->add(OperationPrestationsPeer::COST_UPDATER_USER, $this->cost_updater_user);
        if ($this->isColumnModified(OperationPrestationsPeer::COST_VALIDATION_DATE)) $criteria->add(OperationPrestationsPeer::COST_VALIDATION_DATE, $this->cost_validation_date);

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
        $criteria = new Criteria(OperationPrestationsPeer::DATABASE_NAME);
        $criteria->add(OperationPrestationsPeer::OP_PREST_ID, $this->op_prest_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOpPrestId();
    }

    /**
     * Generic method to set the primary key (op_prest_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOpPrestId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOpPrestId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of OperationPrestations (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpRPrestId($this->getOpRPrestId());
        $copyObj->setOpId($this->getOpId());
        $copyObj->setOpPrestRubriId($this->getOpPrestRubriId());
        $copyObj->setOpPrestLibelle($this->getOpPrestLibelle());
        $copyObj->setOpPrestLibelleDevis($this->getOpPrestLibelleDevis());
        $copyObj->setOpPrestDescription($this->getOpPrestDescription());
        $copyObj->setOpPrestCommentInterne($this->getOpPrestCommentInterne());
        $copyObj->setOpPrestOrder($this->getOpPrestOrder());
        $copyObj->setOpPrestScenaId($this->getOpPrestScenaId());
        $copyObj->setOpPrestPrimeId($this->getOpPrestPrimeId());
        $copyObj->setOpPrestPv($this->getOpPrestPv());
        $copyObj->setOpPrestCoef($this->getOpPrestCoef());
        $copyObj->setOpPrestCiestim($this->getOpPrestCiestim());
        $copyObj->setOpPrestCeestim($this->getOpPrestCeestim());
        $copyObj->setOpPrestQestim($this->getOpPrestQestim());
        $copyObj->setOpPrestMestim($this->getOpPrestMestim());
        $copyObj->setOpPrestCireel($this->getOpPrestCireel());
        $copyObj->setOpPrestCereel($this->getOpPrestCereel());
        $copyObj->setOpPrestQreel($this->getOpPrestQreel());
        $copyObj->setOpPrestMreel($this->getOpPrestMreel());
        $copyObj->setOpPrestCoutsValides($this->getOpPrestCoutsValides());
        $copyObj->setOpPrestOff($this->getOpPrestOff());
        $copyObj->setOpPrestNpr($this->getOpPrestNpr());
        $copyObj->setOpPrestNpa($this->getOpPrestNpa());
        $copyObj->setOpPrestCodeComptable($this->getOpPrestCodeComptable());
        $copyObj->setOpAdf($this->getOpAdf());
        $copyObj->setOpUserCoutsEstim($this->getOpUserCoutsEstim());
        $copyObj->setOpUserCoutsReel($this->getOpUserCoutsReel());
        $copyObj->setOpPrestIsMajFromCompiluo($this->getOpPrestIsMajFromCompiluo());
        $copyObj->setDateDebutPrestation($this->getDateDebutPrestation());
        $copyObj->setDateFinPrestation($this->getDateFinPrestation());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setOpPrestIsMandatory($this->getOpPrestIsMandatory());
        $copyObj->setUserModify($this->getUserModify());
        $copyObj->setDateModify($this->getDateModify());
        $copyObj->setCostUpdaterUser($this->getCostUpdaterUser());
        $copyObj->setCostValidationDate($this->getCostValidationDate());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            $relObj = $this->getHistoCouts();
            if ($relObj) {
                $copyObj->setHistoCouts($relObj->copy($deepCopy));
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOpPrestId(NULL); // this is a auto-increment column, so set to default value
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
     * @return OperationPrestations Clone of current object.
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
     * @return OperationPrestationsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationPrestationsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a OperationScenarii object.
     *
     * @param                  OperationScenarii $v
     * @return OperationPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationScenarii(OperationScenarii $v = null)
    {
        if ($v === null) {
            $this->setOpPrestScenaId(NULL);
        } else {
            $this->setOpPrestScenaId($v->getOpScenarioId());
        }

        $this->aOperationScenarii = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the OperationScenarii object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated OperationScenarii object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return OperationScenarii The associated OperationScenarii object.
     * @throws PropelException
     */
    public function getOperationScenarii(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationScenarii === null && ($this->op_prest_scena_id !== null) && $doQuery) {
            $this->aOperationScenarii = OperationScenariiQuery::create()->findPk($this->op_prest_scena_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationScenarii->addOperationPrestationss($this);
             */
        }

        return $this->aOperationScenarii;
    }

    /**
     * Declares an association between this object and a OperationRubriques object.
     *
     * @param                  OperationRubriques $v
     * @return OperationPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationRubriques(OperationRubriques $v = null)
    {
        if ($v === null) {
            $this->setOpPrestRubriId(NULL);
        } else {
            $this->setOpPrestRubriId($v->getOpRubriqueId());
        }

        $this->aOperationRubriques = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the OperationRubriques object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated OperationRubriques object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return OperationRubriques The associated OperationRubriques object.
     * @throws PropelException
     */
    public function getOperationRubriques(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationRubriques === null && ($this->op_prest_rubri_id !== null) && $doQuery) {
            $this->aOperationRubriques = OperationRubriquesQuery::create()->findPk($this->op_prest_rubri_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationRubriques->addOperationPrestationss($this);
             */
        }

        return $this->aOperationRubriques;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return OperationPrestations The current object (for fluent API support)
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
            $v->addOperationPrestations($this);
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
                $this->aOperations->addOperationPrestationss($this);
             */
        }

        return $this->aOperations;
    }

    /**
     * Declares an association between this object and a RPrestations object.
     *
     * @param                  RPrestations $v
     * @return OperationPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRPrestations(RPrestations $v = null)
    {
        if ($v === null) {
            $this->setOpRPrestId(NULL);
        } else {
            $this->setOpRPrestId($v->getRPrestationId());
        }

        $this->aRPrestations = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RPrestations object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated RPrestations object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RPrestations The associated RPrestations object.
     * @throws PropelException
     */
    public function getRPrestations(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRPrestations === null && ($this->op_r_prest_id !== null) && $doQuery) {
            $this->aRPrestations = RPrestationsQuery::create()->findPk($this->op_r_prest_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRPrestations->addOperationPrestationss($this);
             */
        }

        return $this->aRPrestations;
    }

    /**
     * Declares an association between this object and a OperationPrimes object.
     *
     * @param                  OperationPrimes $v
     * @return OperationPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationPrimes(OperationPrimes $v = null)
    {
        if ($v === null) {
            $this->setOpPrestPrimeId(NULL);
        } else {
            $this->setOpPrestPrimeId($v->getOpPrimeId());
        }

        $this->aOperationPrimes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the OperationPrimes object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated OperationPrimes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return OperationPrimes The associated OperationPrimes object.
     * @throws PropelException
     */
    public function getOperationPrimes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationPrimes === null && ($this->op_prest_prime_id !== null) && $doQuery) {
            $this->aOperationPrimes = OperationPrimesQuery::create()->findPk($this->op_prest_prime_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationPrimes->addOperationPrestationss($this);
             */
        }

        return $this->aOperationPrimes;
    }

    /**
     * Declares an association between this object and a HistoCouts object.
     *
     * @param                  HistoCouts $v
     * @return OperationPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setHistoCouts(HistoCouts $v = null)
    {
        if ($v === null) {
            $this->setOpPrestId(NULL);
        } else {
            $this->setOpPrestId($v->getOpPrestId());
        }

        $this->aHistoCouts = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setOperationPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated HistoCouts object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return HistoCouts The associated HistoCouts object.
     * @throws PropelException
     */
    public function getHistoCouts(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aHistoCouts === null && ($this->op_prest_id !== null) && $doQuery) {
            $this->aHistoCouts = HistoCoutsQuery::create()
                ->filterByOperationPrestations($this) // here
                ->findOne($con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aHistoCouts->setOperationPrestations($this);
        }

        return $this->aHistoCouts;
    }

    /**
     * Declares an association between this object and a Users object.
     *
     * @param                  Users $v
     * @return OperationPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsers(Users $v = null)
    {
        if ($v === null) {
            $this->setCostUpdaterUser(NULL);
        } else {
            $this->setCostUpdaterUser($v->getUserId());
        }

        $this->aUsers = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Users object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationPrestations($this);
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
    public function getUsers(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUsers === null && ($this->cost_updater_user !== null) && $doQuery) {
            $this->aUsers = UsersQuery::create()->findPk($this->cost_updater_user, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsers->addOperationPrestationss($this);
             */
        }

        return $this->aUsers;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->op_prest_id = null;
        $this->op_r_prest_id = null;
        $this->op_id = null;
        $this->op_prest_rubri_id = null;
        $this->op_prest_libelle = null;
        $this->op_prest_libelle_devis = null;
        $this->op_prest_description = null;
        $this->op_prest_comment_interne = null;
        $this->op_prest_order = null;
        $this->op_prest_scena_id = null;
        $this->op_prest_prime_id = null;
        $this->op_prest_pv = null;
        $this->op_prest_coef = null;
        $this->op_prest_ciestim = null;
        $this->op_prest_ceestim = null;
        $this->op_prest_qestim = null;
        $this->op_prest_mestim = null;
        $this->op_prest_cireel = null;
        $this->op_prest_cereel = null;
        $this->op_prest_qreel = null;
        $this->op_prest_mreel = null;
        $this->op_prest_couts_valides = null;
        $this->op_prest_off = null;
        $this->op_prest_npr = null;
        $this->op_prest_npa = null;
        $this->op_prest_code_comptable = null;
        $this->op_adf = null;
        $this->op_user_couts_estim = null;
        $this->op_user_couts_reel = null;
        $this->op_prest_is_maj_from_compiluo = null;
        $this->date_debut_prestation = null;
        $this->date_fin_prestation = null;
        $this->date_create = null;
        $this->op_prest_is_mandatory = null;
        $this->user_modify = null;
        $this->date_modify = null;
        $this->cost_updater_user = null;
        $this->cost_validation_date = null;
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
            if ($this->aOperationScenarii instanceof Persistent) {
              $this->aOperationScenarii->clearAllReferences($deep);
            }
            if ($this->aOperationRubriques instanceof Persistent) {
              $this->aOperationRubriques->clearAllReferences($deep);
            }
            if ($this->aOperations instanceof Persistent) {
              $this->aOperations->clearAllReferences($deep);
            }
            if ($this->aRPrestations instanceof Persistent) {
              $this->aRPrestations->clearAllReferences($deep);
            }
            if ($this->aOperationPrimes instanceof Persistent) {
              $this->aOperationPrimes->clearAllReferences($deep);
            }
            if ($this->aHistoCouts instanceof Persistent) {
              $this->aHistoCouts->clearAllReferences($deep);
            }
            if ($this->aUsers instanceof Persistent) {
              $this->aUsers->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aOperationScenarii = null;
        $this->aOperationRubriques = null;
        $this->aOperations = null;
        $this->aRPrestations = null;
        $this->aOperationPrimes = null;
        $this->aHistoCouts = null;
        $this->aUsers = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OperationPrestationsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseOperationPrestationsPeer::getConnection();
            }
}
