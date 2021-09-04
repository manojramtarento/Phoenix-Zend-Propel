<?php


/**
 * Base class that represents a row from the 'client_facture_options' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseClientFactureOptions extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ClientFactureOptionsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ClientFactureOptionsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the cl_fact_opt_id field.
     * @var        int
     */
    protected $cl_fact_opt_id;

    /**
     * The value for the cl_id field.
     * @var        int
     */
    protected $cl_id;

    /**
     * The value for the cl_fact_bdc_required field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $cl_fact_bdc_required;

    /**
     * The value for the cl_fact_bdc field.
     * @var        string
     */
    protected $cl_fact_bdc;

    /**
     * The value for the cl_fact_tvaintra field.
     * @var        string
     */
    protected $cl_fact_tvaintra;

    /**
     * The value for the cl_fact_country_id field.
     * @var        int
     */
    protected $cl_fact_country_id;

    /**
     * The value for the cl_fact_adf field.
     * @var        string
     */
    protected $cl_fact_adf;

    /**
     * The value for the cl_fact_compte field.
     * @var        string
     */
    protected $cl_fact_compte;

    /**
     * The value for the cl_fact_rfa field.
     * @var        boolean
     */
    protected $cl_fact_rfa;

    /**
     * The value for the cl_fact_rfa_descr field.
     * @var        string
     */
    protected $cl_fact_rfa_descr;

    /**
     * The value for the cl_fact_echeance field.
     * Note: this column has a database default value of: 2
     * @var        int
     */
    protected $cl_fact_echeance;

    /**
     * The value for the cl_fact_lang field.
     * Note: this column has a database default value of: 'FRA'
     * @var        string
     */
    protected $cl_fact_lang;

    /**
     * The value for the plan_fact_periode_id field.
     * @var        int
     */
    protected $plan_fact_periode_id;

    /**
     * The value for the plan_fact_periode_type_id field.
     * @var        int
     */
    protected $plan_fact_periode_type_id;

    /**
     * The value for the cl_fact_siret field.
     * @var        string
     */
    protected $cl_fact_siret;

    /**
     * @var        RFactureOptionsEcheances
     */
    protected $aRFactureOptionsEcheances;

    /**
     * @var        Clients
     */
    protected $aClients;

    /**
     * @var        RLanguages
     */
    protected $aRLanguages;

    /**
     * @var        RCountries
     */
    protected $aCountryInvoiced;

    /**
     * @var        PropelObjectCollection|Factures[] Collection to store aggregation of Factures objects.
     */
    protected $collFacturess;
    protected $collFacturessPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationss;
    protected $collOperationssPartial;

    /**
     * @var        PropelObjectCollection|Relances[] Collection to store aggregation of Relances objects.
     */
    protected $collRelancess;
    protected $collRelancessPartial;

    /**
     * @var        PropelObjectCollection|FactureEditionHistory[] Collection to store aggregation of FactureEditionHistory objects.
     */
    protected $collFactureEditionHistorys;
    protected $collFactureEditionHistorysPartial;

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
    protected $facturessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $relancessScheduledForDeletion = null;

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
        $this->cl_fact_bdc_required = false;
        $this->cl_fact_echeance = 2;
        $this->cl_fact_lang = 'FRA';
    }

    /**
     * Initializes internal state of BaseClientFactureOptions object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [cl_fact_opt_id] column value.
     *
     * @return int
     */
    public function getClFactOptId()
    {

        return $this->cl_fact_opt_id;
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
     * Get the [cl_fact_bdc_required] column value.
     *
     * @return boolean
     */
    public function getClFactBdcRequired()
    {

        return $this->cl_fact_bdc_required;
    }

    /**
     * Get the [cl_fact_bdc] column value.
     *
     * @return string
     */
    public function getClFactBdc()
    {

        return $this->cl_fact_bdc;
    }

    /**
     * Get the [cl_fact_tvaintra] column value.
     *
     * @return string
     */
    public function getClFactTvaintra()
    {

        return $this->cl_fact_tvaintra;
    }

    /**
     * Get the [cl_fact_country_id] column value.
     *
     * @return int
     */
    public function getClFactCountryId()
    {

        return $this->cl_fact_country_id;
    }

    /**
     * Get the [cl_fact_adf] column value.
     *
     * @return string
     */
    public function getClFactAdf()
    {

        return $this->cl_fact_adf;
    }

    /**
     * Get the [cl_fact_compte] column value.
     *
     * @return string
     */
    public function getClFactCompte()
    {

        return $this->cl_fact_compte;
    }

    /**
     * Get the [cl_fact_rfa] column value.
     *
     * @return boolean
     */
    public function getClFactRfa()
    {

        return $this->cl_fact_rfa;
    }

    /**
     * Get the [cl_fact_rfa_descr] column value.
     *
     * @return string
     */
    public function getClFactRfaDescr()
    {

        return $this->cl_fact_rfa_descr;
    }

    /**
     * Get the [cl_fact_echeance] column value.
     *
     * @return int
     */
    public function getClFactEcheance()
    {

        return $this->cl_fact_echeance;
    }

    /**
     * Get the [cl_fact_lang] column value.
     *
     * @return string
     */
    public function getClFactLang()
    {

        return $this->cl_fact_lang;
    }

    /**
     * Get the [plan_fact_periode_id] column value.
     *
     * @return int
     */
    public function getPlanFactPeriodeId()
    {

        return $this->plan_fact_periode_id;
    }

    /**
     * Get the [plan_fact_periode_type_id] column value.
     *
     * @return int
     */
    public function getPlanFactPeriodeTypeId()
    {

        return $this->plan_fact_periode_type_id;
    }

    /**
     * Get the [cl_fact_siret] column value.
     *
     * @return string
     */
    public function getClFactSiret()
    {

        return $this->cl_fact_siret;
    }

    /**
     * Set the value of [cl_fact_opt_id] column.
     *
     * @param  int $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactOptId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_fact_opt_id !== $v) {
                    $this->cl_fact_opt_id = $v;
                    $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_OPT_ID;
                }


        return $this;
    } // setClFactOptId()

    /**
     * Set the value of [cl_id] column.
     *
     * @param  int $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_ID;
                }

        if ($this->aClients !== null && $this->aClients->getClId() !== $v) {
            $this->aClients = null;
        }


        return $this;
    } // setClId()

    /**
     * Sets the value of the [cl_fact_bdc_required] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactBdcRequired($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->cl_fact_bdc_required !== $v) {
            $this->cl_fact_bdc_required = $v;
            $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_BDC_REQUIRED;
        }


        return $this;
    } // setClFactBdcRequired()

    /**
     * Set the value of [cl_fact_bdc] column.
     *
     * @param  string $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactBdc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_fact_bdc !== $v) {
            $this->cl_fact_bdc = $v;
            $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_BDC;
        }


        return $this;
    } // setClFactBdc()

    /**
     * Set the value of [cl_fact_tvaintra] column.
     *
     * @param  string $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactTvaintra($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_fact_tvaintra !== $v) {
            $this->cl_fact_tvaintra = $v;
            $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_TVAINTRA;
        }


        return $this;
    } // setClFactTvaintra()

    /**
     * Set the value of [cl_fact_country_id] column.
     *
     * @param  int $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactCountryId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_fact_country_id !== $v) {
                    $this->cl_fact_country_id = $v;
                    $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID;
                }

        if ($this->aCountryInvoiced !== null && $this->aCountryInvoiced->getRCountryId() !== $v) {
            $this->aCountryInvoiced = null;
        }


        return $this;
    } // setClFactCountryId()

    /**
     * Set the value of [cl_fact_adf] column.
     *
     * @param  string $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactAdf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_fact_adf !== $v) {
            $this->cl_fact_adf = $v;
            $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_ADF;
        }


        return $this;
    } // setClFactAdf()

    /**
     * Set the value of [cl_fact_compte] column.
     *
     * @param  string $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactCompte($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_fact_compte !== $v) {
            $this->cl_fact_compte = $v;
            $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_COMPTE;
        }


        return $this;
    } // setClFactCompte()

    /**
     * Sets the value of the [cl_fact_rfa] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactRfa($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->cl_fact_rfa !== $v) {
            $this->cl_fact_rfa = $v;
            $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_RFA;
        }


        return $this;
    } // setClFactRfa()

    /**
     * Set the value of [cl_fact_rfa_descr] column.
     *
     * @param  string $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactRfaDescr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_fact_rfa_descr !== $v) {
            $this->cl_fact_rfa_descr = $v;
            $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_RFA_DESCR;
        }


        return $this;
    } // setClFactRfaDescr()

    /**
     * Set the value of [cl_fact_echeance] column.
     *
     * @param  int $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactEcheance($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_fact_echeance !== $v) {
                    $this->cl_fact_echeance = $v;
                    $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_ECHEANCE;
                }

        if ($this->aRFactureOptionsEcheances !== null && $this->aRFactureOptionsEcheances->getFactOptEcheanceId() !== $v) {
            $this->aRFactureOptionsEcheances = null;
        }


        return $this;
    } // setClFactEcheance()

    /**
     * Set the value of [cl_fact_lang] column.
     *
     * @param  string $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactLang($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_fact_lang !== $v) {
            $this->cl_fact_lang = $v;
            $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_LANG;
        }

        if ($this->aRLanguages !== null && $this->aRLanguages->getRLangCode() !== $v) {
            $this->aRLanguages = null;
        }


        return $this;
    } // setClFactLang()

    /**
     * Set the value of [plan_fact_periode_id] column.
     *
     * @param  int $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setPlanFactPeriodeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->plan_fact_periode_id !== $v) {
                    $this->plan_fact_periode_id = $v;
                    $this->modifiedColumns[] = ClientFactureOptionsPeer::PLAN_FACT_PERIODE_ID;
                }


        return $this;
    } // setPlanFactPeriodeId()

    /**
     * Set the value of [plan_fact_periode_type_id] column.
     *
     * @param  int $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setPlanFactPeriodeTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->plan_fact_periode_type_id !== $v) {
                    $this->plan_fact_periode_type_id = $v;
                    $this->modifiedColumns[] = ClientFactureOptionsPeer::PLAN_FACT_PERIODE_TYPE_ID;
                }


        return $this;
    } // setPlanFactPeriodeTypeId()

    /**
     * Set the value of [cl_fact_siret] column.
     *
     * @param  string $v new value
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setClFactSiret($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_fact_siret !== $v) {
            $this->cl_fact_siret = $v;
            $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_SIRET;
        }


        return $this;
    } // setClFactSiret()

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
            if ($this->cl_fact_bdc_required !== false) {
                return false;
            }

            if ($this->cl_fact_echeance !== 2) {
                return false;
            }

            if ($this->cl_fact_lang !== 'FRA') {
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

            $this->cl_fact_opt_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->cl_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->cl_fact_bdc_required = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
            $this->cl_fact_bdc = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cl_fact_tvaintra = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cl_fact_country_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->cl_fact_adf = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->cl_fact_compte = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cl_fact_rfa = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->cl_fact_rfa_descr = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->cl_fact_echeance = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->cl_fact_lang = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->plan_fact_periode_id = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->plan_fact_periode_type_id = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->cl_fact_siret = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ClientFactureOptions object", $e);
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

        if ($this->aClients !== null && $this->cl_id !== $this->aClients->getClId()) {
            $this->aClients = null;
        }
        if ($this->aCountryInvoiced !== null && $this->cl_fact_country_id !== $this->aCountryInvoiced->getRCountryId()) {
            $this->aCountryInvoiced = null;
        }
        if ($this->aRFactureOptionsEcheances !== null && $this->cl_fact_echeance !== $this->aRFactureOptionsEcheances->getFactOptEcheanceId()) {
            $this->aRFactureOptionsEcheances = null;
        }
        if ($this->aRLanguages !== null && $this->cl_fact_lang !== $this->aRLanguages->getRLangCode()) {
            $this->aRLanguages = null;
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
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ClientFactureOptionsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRFactureOptionsEcheances = null;
            $this->aClients = null;
            $this->aRLanguages = null;
            $this->aCountryInvoiced = null;
            $this->collFacturess = null;

            $this->collOperationss = null;

            $this->collRelancess = null;

            $this->collFactureEditionHistorys = null;

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
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ClientFactureOptionsQuery::create()
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
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ClientFactureOptionsPeer::addInstanceToPool($this);
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

            if ($this->aRFactureOptionsEcheances !== null) {
                if ($this->aRFactureOptionsEcheances->isModified() || $this->aRFactureOptionsEcheances->isNew()) {
                    $affectedRows += $this->aRFactureOptionsEcheances->save($con);
                }
                $this->setRFactureOptionsEcheances($this->aRFactureOptionsEcheances);
            }

            if ($this->aClients !== null) {
                if ($this->aClients->isModified() || $this->aClients->isNew()) {
                    $affectedRows += $this->aClients->save($con);
                }
                $this->setClients($this->aClients);
            }

            if ($this->aRLanguages !== null) {
                if ($this->aRLanguages->isModified() || $this->aRLanguages->isNew()) {
                    $affectedRows += $this->aRLanguages->save($con);
                }
                $this->setRLanguages($this->aRLanguages);
            }

            if ($this->aCountryInvoiced !== null) {
                if ($this->aCountryInvoiced->isModified() || $this->aCountryInvoiced->isNew()) {
                    $affectedRows += $this->aCountryInvoiced->save($con);
                }
                $this->setCountryInvoiced($this->aCountryInvoiced);
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

            if ($this->facturessScheduledForDeletion !== null) {
                if (!$this->facturessScheduledForDeletion->isEmpty()) {
                    foreach ($this->facturessScheduledForDeletion as $factures) {
                        // need to save related object because we set the relation to null
                        $factures->save($con);
                    }
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

            if ($this->operationssScheduledForDeletion !== null) {
                if (!$this->operationssScheduledForDeletion->isEmpty()) {
                    OperationsQuery::create()
                        ->filterByPrimaryKeys($this->operationssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->operationssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationss !== null) {
                foreach ($this->collOperationss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->relancessScheduledForDeletion !== null) {
                if (!$this->relancessScheduledForDeletion->isEmpty()) {
                    foreach ($this->relancessScheduledForDeletion as $relances) {
                        // need to save related object because we set the relation to null
                        $relances->save($con);
                    }
                    $this->relancessScheduledForDeletion = null;
                }
            }

            if ($this->collRelancess !== null) {
                foreach ($this->collRelancess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->factureEditionHistorysScheduledForDeletion !== null) {
                if (!$this->factureEditionHistorysScheduledForDeletion->isEmpty()) {
                    foreach ($this->factureEditionHistorysScheduledForDeletion as $factureEditionHistory) {
                        // need to save related object because we set the relation to null
                        $factureEditionHistory->save($con);
                    }
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

        $this->modifiedColumns[] = ClientFactureOptionsPeer::CL_FACT_OPT_ID;
        if (null !== $this->cl_fact_opt_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ClientFactureOptionsPeer::CL_FACT_OPT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_OPT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_opt_id`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_id`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_BDC_REQUIRED)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_bdc_required`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_BDC)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_bdc`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_TVAINTRA)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_tvaintra`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_country_id`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_ADF)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_adf`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_COMPTE)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_compte`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_RFA)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_rfa`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_RFA_DESCR)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_rfa_descr`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_ECHEANCE)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_echeance`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_LANG)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_lang`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_periode_id`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_periode_type_id`';
        }
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_SIRET)) {
            $modifiedColumns[':p' . $index++]  = '`cl_fact_siret`';
        }

        $sql = sprintf(
            'INSERT INTO `client_facture_options` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`cl_fact_opt_id`':
                        $stmt->bindValue($identifier, $this->cl_fact_opt_id, PDO::PARAM_INT);
                        break;
                    case '`cl_id`':
                        $stmt->bindValue($identifier, $this->cl_id, PDO::PARAM_INT);
                        break;
                    case '`cl_fact_bdc_required`':
                        $stmt->bindValue($identifier, (int) $this->cl_fact_bdc_required, PDO::PARAM_INT);
                        break;
                    case '`cl_fact_bdc`':
                        $stmt->bindValue($identifier, $this->cl_fact_bdc, PDO::PARAM_STR);
                        break;
                    case '`cl_fact_tvaintra`':
                        $stmt->bindValue($identifier, $this->cl_fact_tvaintra, PDO::PARAM_STR);
                        break;
                    case '`cl_fact_country_id`':
                        $stmt->bindValue($identifier, $this->cl_fact_country_id, PDO::PARAM_INT);
                        break;
                    case '`cl_fact_adf`':
                        $stmt->bindValue($identifier, $this->cl_fact_adf, PDO::PARAM_STR);
                        break;
                    case '`cl_fact_compte`':
                        $stmt->bindValue($identifier, $this->cl_fact_compte, PDO::PARAM_STR);
                        break;
                    case '`cl_fact_rfa`':
                        $stmt->bindValue($identifier, (int) $this->cl_fact_rfa, PDO::PARAM_INT);
                        break;
                    case '`cl_fact_rfa_descr`':
                        $stmt->bindValue($identifier, $this->cl_fact_rfa_descr, PDO::PARAM_STR);
                        break;
                    case '`cl_fact_echeance`':
                        $stmt->bindValue($identifier, $this->cl_fact_echeance, PDO::PARAM_INT);
                        break;
                    case '`cl_fact_lang`':
                        $stmt->bindValue($identifier, $this->cl_fact_lang, PDO::PARAM_STR);
                        break;
                    case '`plan_fact_periode_id`':
                        $stmt->bindValue($identifier, $this->plan_fact_periode_id, PDO::PARAM_INT);
                        break;
                    case '`plan_fact_periode_type_id`':
                        $stmt->bindValue($identifier, $this->plan_fact_periode_type_id, PDO::PARAM_INT);
                        break;
                    case '`cl_fact_siret`':
                        $stmt->bindValue($identifier, $this->cl_fact_siret, PDO::PARAM_STR);
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
        $this->setClFactOptId($pk);

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

            if ($this->aRFactureOptionsEcheances !== null) {
                if (!$this->aRFactureOptionsEcheances->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRFactureOptionsEcheances->getValidationFailures());
                }
            }

            if ($this->aClients !== null) {
                if (!$this->aClients->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClients->getValidationFailures());
                }
            }

            if ($this->aRLanguages !== null) {
                if (!$this->aRLanguages->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRLanguages->getValidationFailures());
                }
            }

            if ($this->aCountryInvoiced !== null) {
                if (!$this->aCountryInvoiced->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCountryInvoiced->getValidationFailures());
                }
            }


            if (($retval = ClientFactureOptionsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFacturess !== null) {
                    foreach ($this->collFacturess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationss !== null) {
                    foreach ($this->collOperationss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRelancess !== null) {
                    foreach ($this->collRelancess as $referrerFK) {
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
        $pos = ClientFactureOptionsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getClFactOptId();
                break;
            case 1:
                return $this->getClId();
                break;
            case 2:
                return $this->getClFactBdcRequired();
                break;
            case 3:
                return $this->getClFactBdc();
                break;
            case 4:
                return $this->getClFactTvaintra();
                break;
            case 5:
                return $this->getClFactCountryId();
                break;
            case 6:
                return $this->getClFactAdf();
                break;
            case 7:
                return $this->getClFactCompte();
                break;
            case 8:
                return $this->getClFactRfa();
                break;
            case 9:
                return $this->getClFactRfaDescr();
                break;
            case 10:
                return $this->getClFactEcheance();
                break;
            case 11:
                return $this->getClFactLang();
                break;
            case 12:
                return $this->getPlanFactPeriodeId();
                break;
            case 13:
                return $this->getPlanFactPeriodeTypeId();
                break;
            case 14:
                return $this->getClFactSiret();
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
        if (isset($alreadyDumpedObjects['ClientFactureOptions'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ClientFactureOptions'][$this->getPrimaryKey()] = true;
        $keys = ClientFactureOptionsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getClFactOptId(),
            $keys[1] => $this->getClId(),
            $keys[2] => $this->getClFactBdcRequired(),
            $keys[3] => $this->getClFactBdc(),
            $keys[4] => $this->getClFactTvaintra(),
            $keys[5] => $this->getClFactCountryId(),
            $keys[6] => $this->getClFactAdf(),
            $keys[7] => $this->getClFactCompte(),
            $keys[8] => $this->getClFactRfa(),
            $keys[9] => $this->getClFactRfaDescr(),
            $keys[10] => $this->getClFactEcheance(),
            $keys[11] => $this->getClFactLang(),
            $keys[12] => $this->getPlanFactPeriodeId(),
            $keys[13] => $this->getPlanFactPeriodeTypeId(),
            $keys[14] => $this->getClFactSiret(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRFactureOptionsEcheances) {
                $result['RFactureOptionsEcheances'] = $this->aRFactureOptionsEcheances->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aClients) {
                $result['Clients'] = $this->aClients->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRLanguages) {
                $result['RLanguages'] = $this->aRLanguages->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCountryInvoiced) {
                $result['CountryInvoiced'] = $this->aCountryInvoiced->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collFacturess) {
                $result['Facturess'] = $this->collFacturess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationss) {
                $result['Operationss'] = $this->collOperationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRelancess) {
                $result['Relancess'] = $this->collRelancess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ClientFactureOptionsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setClFactOptId($value);
                break;
            case 1:
                $this->setClId($value);
                break;
            case 2:
                $this->setClFactBdcRequired($value);
                break;
            case 3:
                $this->setClFactBdc($value);
                break;
            case 4:
                $this->setClFactTvaintra($value);
                break;
            case 5:
                $this->setClFactCountryId($value);
                break;
            case 6:
                $this->setClFactAdf($value);
                break;
            case 7:
                $this->setClFactCompte($value);
                break;
            case 8:
                $this->setClFactRfa($value);
                break;
            case 9:
                $this->setClFactRfaDescr($value);
                break;
            case 10:
                $this->setClFactEcheance($value);
                break;
            case 11:
                $this->setClFactLang($value);
                break;
            case 12:
                $this->setPlanFactPeriodeId($value);
                break;
            case 13:
                $this->setPlanFactPeriodeTypeId($value);
                break;
            case 14:
                $this->setClFactSiret($value);
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
        $keys = ClientFactureOptionsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setClFactOptId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setClId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setClFactBdcRequired($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setClFactBdc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setClFactTvaintra($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setClFactCountryId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setClFactAdf($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setClFactCompte($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setClFactRfa($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setClFactRfaDescr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setClFactEcheance($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setClFactLang($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPlanFactPeriodeId($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPlanFactPeriodeTypeId($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setClFactSiret($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_OPT_ID)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $this->cl_fact_opt_id);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_ID)) $criteria->add(ClientFactureOptionsPeer::CL_ID, $this->cl_id);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_BDC_REQUIRED)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_BDC_REQUIRED, $this->cl_fact_bdc_required);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_BDC)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_BDC, $this->cl_fact_bdc);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_TVAINTRA)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_TVAINTRA, $this->cl_fact_tvaintra);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, $this->cl_fact_country_id);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_ADF)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_ADF, $this->cl_fact_adf);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_COMPTE)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_COMPTE, $this->cl_fact_compte);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_RFA)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_RFA, $this->cl_fact_rfa);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_RFA_DESCR)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_RFA_DESCR, $this->cl_fact_rfa_descr);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_ECHEANCE)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, $this->cl_fact_echeance);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_LANG)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_LANG, $this->cl_fact_lang);
        if ($this->isColumnModified(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_ID)) $criteria->add(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_ID, $this->plan_fact_periode_id);
        if ($this->isColumnModified(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_TYPE_ID)) $criteria->add(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_TYPE_ID, $this->plan_fact_periode_type_id);
        if ($this->isColumnModified(ClientFactureOptionsPeer::CL_FACT_SIRET)) $criteria->add(ClientFactureOptionsPeer::CL_FACT_SIRET, $this->cl_fact_siret);

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
        $criteria = new Criteria(ClientFactureOptionsPeer::DATABASE_NAME);
        $criteria->add(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $this->cl_fact_opt_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getClFactOptId();
    }

    /**
     * Generic method to set the primary key (cl_fact_opt_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setClFactOptId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getClFactOptId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ClientFactureOptions (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setClId($this->getClId());
        $copyObj->setClFactBdcRequired($this->getClFactBdcRequired());
        $copyObj->setClFactBdc($this->getClFactBdc());
        $copyObj->setClFactTvaintra($this->getClFactTvaintra());
        $copyObj->setClFactCountryId($this->getClFactCountryId());
        $copyObj->setClFactAdf($this->getClFactAdf());
        $copyObj->setClFactCompte($this->getClFactCompte());
        $copyObj->setClFactRfa($this->getClFactRfa());
        $copyObj->setClFactRfaDescr($this->getClFactRfaDescr());
        $copyObj->setClFactEcheance($this->getClFactEcheance());
        $copyObj->setClFactLang($this->getClFactLang());
        $copyObj->setPlanFactPeriodeId($this->getPlanFactPeriodeId());
        $copyObj->setPlanFactPeriodeTypeId($this->getPlanFactPeriodeTypeId());
        $copyObj->setClFactSiret($this->getClFactSiret());

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

            foreach ($this->getOperationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperations($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRelancess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRelances($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getFactureEditionHistorys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactureEditionHistory($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setClFactOptId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ClientFactureOptions Clone of current object.
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
     * @return ClientFactureOptionsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ClientFactureOptionsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a RFactureOptionsEcheances object.
     *
     * @param                  RFactureOptionsEcheances $v
     * @return ClientFactureOptions The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRFactureOptionsEcheances(RFactureOptionsEcheances $v = null)
    {
        if ($v === null) {
            $this->setClFactEcheance(2);
        } else {
            $this->setClFactEcheance($v->getFactOptEcheanceId());
        }

        $this->aRFactureOptionsEcheances = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RFactureOptionsEcheances object, it will not be re-added.
        if ($v !== null) {
            $v->addClientFactureOptions($this);
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
        if ($this->aRFactureOptionsEcheances === null && ($this->cl_fact_echeance !== null) && $doQuery) {
            $this->aRFactureOptionsEcheances = RFactureOptionsEcheancesQuery::create()->findPk($this->cl_fact_echeance, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRFactureOptionsEcheances->addClientFactureOptionss($this);
             */
        }

        return $this->aRFactureOptionsEcheances;
    }

    /**
     * Declares an association between this object and a Clients object.
     *
     * @param                  Clients $v
     * @return ClientFactureOptions The current object (for fluent API support)
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
            $v->addClientFactureOptions($this);
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
                $this->aClients->addClientFactureOptionss($this);
             */
        }

        return $this->aClients;
    }

    /**
     * Declares an association between this object and a RLanguages object.
     *
     * @param                  RLanguages $v
     * @return ClientFactureOptions The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRLanguages(RLanguages $v = null)
    {
        if ($v === null) {
            $this->setClFactLang('FRA');
        } else {
            $this->setClFactLang($v->getRLangCode());
        }

        $this->aRLanguages = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RLanguages object, it will not be re-added.
        if ($v !== null) {
            $v->addClientFactureOptions($this);
        }


        return $this;
    }


    /**
     * Get the associated RLanguages object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RLanguages The associated RLanguages object.
     * @throws PropelException
     */
    public function getRLanguages(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRLanguages === null && (($this->cl_fact_lang !== "" && $this->cl_fact_lang !== null)) && $doQuery) {
            $this->aRLanguages = RLanguagesQuery::create()->findPk($this->cl_fact_lang, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRLanguages->addClientFactureOptionss($this);
             */
        }

        return $this->aRLanguages;
    }

    /**
     * Declares an association between this object and a RCountries object.
     *
     * @param                  RCountries $v
     * @return ClientFactureOptions The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCountryInvoiced(RCountries $v = null)
    {
        if ($v === null) {
            $this->setClFactCountryId(NULL);
        } else {
            $this->setClFactCountryId($v->getRCountryId());
        }

        $this->aCountryInvoiced = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RCountries object, it will not be re-added.
        if ($v !== null) {
            $v->addClientFactureOptions($this);
        }


        return $this;
    }


    /**
     * Get the associated RCountries object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RCountries The associated RCountries object.
     * @throws PropelException
     */
    public function getCountryInvoiced(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCountryInvoiced === null && ($this->cl_fact_country_id !== null) && $doQuery) {
            $this->aCountryInvoiced = RCountriesQuery::create()->findPk($this->cl_fact_country_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCountryInvoiced->addClientFactureOptionss($this);
             */
        }

        return $this->aCountryInvoiced;
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
        if ('Operations' == $relationName) {
            $this->initOperationss();
        }
        if ('Relances' == $relationName) {
            $this->initRelancess();
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
     * @return ClientFactureOptions The current object (for fluent API support)
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
     * If this ClientFactureOptions is new, it will return
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
                    ->filterByClientFactureOptions($this)
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
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setFacturess(PropelCollection $facturess, PropelPDO $con = null)
    {
        $facturessToDelete = $this->getFacturess(new Criteria(), $con)->diff($facturess);


        $this->facturessScheduledForDeletion = $facturessToDelete;

        foreach ($facturessToDelete as $facturesRemoved) {
            $facturesRemoved->setClientFactureOptions(null);
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
                ->filterByClientFactureOptions($this)
                ->count($con);
        }

        return count($this->collFacturess);
    }

    /**
     * Method called to associate a Factures object to this object
     * through the Factures foreign key attribute.
     *
     * @param    Factures $l Factures
     * @return ClientFactureOptions The current object (for fluent API support)
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
        $factures->setClientFactureOptions($this);
    }

    /**
     * @param	Factures $factures The factures object to remove.
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function removeFactures($factures)
    {
        if ($this->getFacturess()->contains($factures)) {
            $this->collFacturess->remove($this->collFacturess->search($factures));
            if (null === $this->facturessScheduledForDeletion) {
                $this->facturessScheduledForDeletion = clone $this->collFacturess;
                $this->facturessScheduledForDeletion->clear();
            }
            $this->facturessScheduledForDeletion[]= $factures;
            $factures->setClientFactureOptions(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Clears out the collOperationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ClientFactureOptions The current object (for fluent API support)
     * @see        addOperationss()
     */
    public function clearOperationss()
    {
        $this->collOperationss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationss($v = true)
    {
        $this->collOperationssPartial = $v;
    }

    /**
     * Initializes the collOperationss collection.
     *
     * By default this just sets the collOperationss collection to an empty array (like clearcollOperationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationss($overrideExisting = true)
    {
        if (null !== $this->collOperationss && !$overrideExisting) {
            return;
        }
        $this->collOperationss = new PropelObjectCollection();
        $this->collOperationss->setModel('Operations');
    }

    /**
     * Gets an array of Operations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ClientFactureOptions is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Operations[] List of Operations objects
     * @throws PropelException
     */
    public function getOperationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationssPartial && !$this->isNew();
        if (null === $this->collOperationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationss) {
                // return empty collection
                $this->initOperationss();
            } else {
                $collOperationss = OperationsQuery::create(null, $criteria)
                    ->filterByClientFactureOptions($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationssPartial && count($collOperationss)) {
                      $this->initOperationss(false);

                      foreach ($collOperationss as $obj) {
                        if (false == $this->collOperationss->contains($obj)) {
                          $this->collOperationss->append($obj);
                        }
                      }

                      $this->collOperationssPartial = true;
                    }

                    $collOperationss->getInternalIterator()->rewind();

                    return $collOperationss;
                }

                if ($partial && $this->collOperationss) {
                    foreach ($this->collOperationss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationss[] = $obj;
                        }
                    }
                }

                $this->collOperationss = $collOperationss;
                $this->collOperationssPartial = false;
            }
        }

        return $this->collOperationss;
    }

    /**
     * Sets a collection of Operations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setOperationss(PropelCollection $operationss, PropelPDO $con = null)
    {
        $operationssToDelete = $this->getOperationss(new Criteria(), $con)->diff($operationss);


        $this->operationssScheduledForDeletion = $operationssToDelete;

        foreach ($operationssToDelete as $operationsRemoved) {
            $operationsRemoved->setClientFactureOptions(null);
        }

        $this->collOperationss = null;
        foreach ($operationss as $operations) {
            $this->addOperations($operations);
        }

        $this->collOperationss = $operationss;
        $this->collOperationssPartial = false;

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
    public function countOperationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationssPartial && !$this->isNew();
        if (null === $this->collOperationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationss());
            }
            $query = OperationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClientFactureOptions($this)
                ->count($con);
        }

        return count($this->collOperationss);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function addOperations(Operations $l)
    {
        if ($this->collOperationss === null) {
            $this->initOperationss();
            $this->collOperationssPartial = true;
        }

        if (!in_array($l, $this->collOperationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperations($l);

            if ($this->operationssScheduledForDeletion and $this->operationssScheduledForDeletion->contains($l)) {
                $this->operationssScheduledForDeletion->remove($this->operationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Operations $operations The operations object to add.
     */
    protected function doAddOperations($operations)
    {
        $this->collOperationss[]= $operations;
        $operations->setClientFactureOptions($this);
    }

    /**
     * @param	Operations $operations The operations object to remove.
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function removeOperations($operations)
    {
        if ($this->getOperationss()->contains($operations)) {
            $this->collOperationss->remove($this->collOperationss->search($operations));
            if (null === $this->operationssScheduledForDeletion) {
                $this->operationssScheduledForDeletion = clone $this->collOperationss;
                $this->operationssScheduledForDeletion->clear();
            }
            $this->operationssScheduledForDeletion[]= clone $operations;
            $operations->setClientFactureOptions(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinContactClient($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactClient', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinUserDC($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserDC', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinUserCP($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCP', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinUserCdp($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCdp', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinClientContratOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientContratOptions', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinClientSiteForLog($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientSiteForLog', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinGedelogOperationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('GedelogOperationParams', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatus', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinRCustomActivites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RCustomActivites', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinROperationType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationType', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinROperationTypeSub($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSub', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinOperationsExt($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsExt', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinRDelaiDevis($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RDelaiDevis', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinInvoicingAddressContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('InvoicingAddressContact', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinOperationsRelatedByOpParentId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsRelatedByOpParentId', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinOperationUniverse($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationUniverse', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinOperationMedia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationMedia', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinOperationTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationTemplate', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinROperationClassifications($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationClassifications', $join_behavior);

        return $this->getOperationss($query, $con);
    }

    /**
     * Clears out the collRelancess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ClientFactureOptions The current object (for fluent API support)
     * @see        addRelancess()
     */
    public function clearRelancess()
    {
        $this->collRelancess = null; // important to set this to null since that means it is uninitialized
        $this->collRelancessPartial = null;

        return $this;
    }

    /**
     * reset is the collRelancess collection loaded partially
     *
     * @return void
     */
    public function resetPartialRelancess($v = true)
    {
        $this->collRelancessPartial = $v;
    }

    /**
     * Initializes the collRelancess collection.
     *
     * By default this just sets the collRelancess collection to an empty array (like clearcollRelancess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRelancess($overrideExisting = true)
    {
        if (null !== $this->collRelancess && !$overrideExisting) {
            return;
        }
        $this->collRelancess = new PropelObjectCollection();
        $this->collRelancess->setModel('Relances');
    }

    /**
     * Gets an array of Relances objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ClientFactureOptions is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Relances[] List of Relances objects
     * @throws PropelException
     */
    public function getRelancess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRelancessPartial && !$this->isNew();
        if (null === $this->collRelancess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRelancess) {
                // return empty collection
                $this->initRelancess();
            } else {
                $collRelancess = RelancesQuery::create(null, $criteria)
                    ->filterByClientFactureOptions($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRelancessPartial && count($collRelancess)) {
                      $this->initRelancess(false);

                      foreach ($collRelancess as $obj) {
                        if (false == $this->collRelancess->contains($obj)) {
                          $this->collRelancess->append($obj);
                        }
                      }

                      $this->collRelancessPartial = true;
                    }

                    $collRelancess->getInternalIterator()->rewind();

                    return $collRelancess;
                }

                if ($partial && $this->collRelancess) {
                    foreach ($this->collRelancess as $obj) {
                        if ($obj->isNew()) {
                            $collRelancess[] = $obj;
                        }
                    }
                }

                $this->collRelancess = $collRelancess;
                $this->collRelancessPartial = false;
            }
        }

        return $this->collRelancess;
    }

    /**
     * Sets a collection of Relances objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $relancess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setRelancess(PropelCollection $relancess, PropelPDO $con = null)
    {
        $relancessToDelete = $this->getRelancess(new Criteria(), $con)->diff($relancess);


        $this->relancessScheduledForDeletion = $relancessToDelete;

        foreach ($relancessToDelete as $relancesRemoved) {
            $relancesRemoved->setClientFactureOptions(null);
        }

        $this->collRelancess = null;
        foreach ($relancess as $relances) {
            $this->addRelances($relances);
        }

        $this->collRelancess = $relancess;
        $this->collRelancessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Relances objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Relances objects.
     * @throws PropelException
     */
    public function countRelancess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRelancessPartial && !$this->isNew();
        if (null === $this->collRelancess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRelancess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRelancess());
            }
            $query = RelancesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClientFactureOptions($this)
                ->count($con);
        }

        return count($this->collRelancess);
    }

    /**
     * Method called to associate a Relances object to this object
     * through the Relances foreign key attribute.
     *
     * @param    Relances $l Relances
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function addRelances(Relances $l)
    {
        if ($this->collRelancess === null) {
            $this->initRelancess();
            $this->collRelancessPartial = true;
        }

        if (!in_array($l, $this->collRelancess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRelances($l);

            if ($this->relancessScheduledForDeletion and $this->relancessScheduledForDeletion->contains($l)) {
                $this->relancessScheduledForDeletion->remove($this->relancessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Relances $relances The relances object to add.
     */
    protected function doAddRelances($relances)
    {
        $this->collRelancess[]= $relances;
        $relances->setClientFactureOptions($this);
    }

    /**
     * @param	Relances $relances The relances object to remove.
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function removeRelances($relances)
    {
        if ($this->getRelancess()->contains($relances)) {
            $this->collRelancess->remove($this->collRelancess->search($relances));
            if (null === $this->relancessScheduledForDeletion) {
                $this->relancessScheduledForDeletion = clone $this->collRelancess;
                $this->relancessScheduledForDeletion->clear();
            }
            $this->relancessScheduledForDeletion[]= $relances;
            $relances->setClientFactureOptions(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getRelancess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinRRelanceTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('RRelanceTypes', $join_behavior);

        return $this->getRelancess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinRRelanceStatuts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('RRelanceStatuts', $join_behavior);

        return $this->getRelancess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getRelancess($query, $con);
    }

    /**
     * Clears out the collFactureEditionHistorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ClientFactureOptions The current object (for fluent API support)
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
     * If this ClientFactureOptions is new, it will return
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
                    ->filterByClientFactureOptions($this)
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
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function setFactureEditionHistorys(PropelCollection $factureEditionHistorys, PropelPDO $con = null)
    {
        $factureEditionHistorysToDelete = $this->getFactureEditionHistorys(new Criteria(), $con)->diff($factureEditionHistorys);


        $this->factureEditionHistorysScheduledForDeletion = $factureEditionHistorysToDelete;

        foreach ($factureEditionHistorysToDelete as $factureEditionHistoryRemoved) {
            $factureEditionHistoryRemoved->setClientFactureOptions(null);
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
                ->filterByClientFactureOptions($this)
                ->count($con);
        }

        return count($this->collFactureEditionHistorys);
    }

    /**
     * Method called to associate a FactureEditionHistory object to this object
     * through the FactureEditionHistory foreign key attribute.
     *
     * @param    FactureEditionHistory $l FactureEditionHistory
     * @return ClientFactureOptions The current object (for fluent API support)
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
        $factureEditionHistory->setClientFactureOptions($this);
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to remove.
     * @return ClientFactureOptions The current object (for fluent API support)
     */
    public function removeFactureEditionHistory($factureEditionHistory)
    {
        if ($this->getFactureEditionHistorys()->contains($factureEditionHistory)) {
            $this->collFactureEditionHistorys->remove($this->collFactureEditionHistorys->search($factureEditionHistory));
            if (null === $this->factureEditionHistorysScheduledForDeletion) {
                $this->factureEditionHistorysScheduledForDeletion = clone $this->collFactureEditionHistorys;
                $this->factureEditionHistorysScheduledForDeletion->clear();
            }
            $this->factureEditionHistorysScheduledForDeletion[]= $factureEditionHistory;
            $factureEditionHistory->setClientFactureOptions(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Otherwise if this ClientFactureOptions is new, it will return
     * an empty collection; or if this ClientFactureOptions has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientFactureOptions.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->cl_fact_opt_id = null;
        $this->cl_id = null;
        $this->cl_fact_bdc_required = null;
        $this->cl_fact_bdc = null;
        $this->cl_fact_tvaintra = null;
        $this->cl_fact_country_id = null;
        $this->cl_fact_adf = null;
        $this->cl_fact_compte = null;
        $this->cl_fact_rfa = null;
        $this->cl_fact_rfa_descr = null;
        $this->cl_fact_echeance = null;
        $this->cl_fact_lang = null;
        $this->plan_fact_periode_id = null;
        $this->plan_fact_periode_type_id = null;
        $this->cl_fact_siret = null;
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
            if ($this->collOperationss) {
                foreach ($this->collOperationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRelancess) {
                foreach ($this->collRelancess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFactureEditionHistorys) {
                foreach ($this->collFactureEditionHistorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aRFactureOptionsEcheances instanceof Persistent) {
              $this->aRFactureOptionsEcheances->clearAllReferences($deep);
            }
            if ($this->aClients instanceof Persistent) {
              $this->aClients->clearAllReferences($deep);
            }
            if ($this->aRLanguages instanceof Persistent) {
              $this->aRLanguages->clearAllReferences($deep);
            }
            if ($this->aCountryInvoiced instanceof Persistent) {
              $this->aCountryInvoiced->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFacturess instanceof PropelCollection) {
            $this->collFacturess->clearIterator();
        }
        $this->collFacturess = null;
        if ($this->collOperationss instanceof PropelCollection) {
            $this->collOperationss->clearIterator();
        }
        $this->collOperationss = null;
        if ($this->collRelancess instanceof PropelCollection) {
            $this->collRelancess->clearIterator();
        }
        $this->collRelancess = null;
        if ($this->collFactureEditionHistorys instanceof PropelCollection) {
            $this->collFactureEditionHistorys->clearIterator();
        }
        $this->collFactureEditionHistorys = null;
        $this->aRFactureOptionsEcheances = null;
        $this->aClients = null;
        $this->aRLanguages = null;
        $this->aCountryInvoiced = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ClientFactureOptionsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseClientFactureOptionsPeer::getConnection();
            }
}
