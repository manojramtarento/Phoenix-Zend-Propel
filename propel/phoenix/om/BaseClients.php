<?php


/**
 * Base class that represents a row from the 'clients' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseClients extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ClientsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ClientsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the cl_id field.
     * @var        int
     */
    protected $cl_id;

    /**
     * The value for the cl_libelle field.
     * @var        string
     */
    protected $cl_libelle;

    /**
     * The value for the cl_activity_id field.
     * @var        int
     */
    protected $cl_activity_id;

    /**
     * The value for the cl_type_id field.
     * @var        int
     */
    protected $cl_type_id;

    /**
     * The value for the cl_ct_gestion field.
     * @var        int
     */
    protected $cl_ct_gestion;

    /**
     * The value for the cl_ct_facturation field.
     * @var        int
     */
    protected $cl_ct_facturation;

    /**
     * The value for the cl_dc_id field.
     * @var        int
     */
    protected $cl_dc_id;

    /**
     * The value for the cl_exclude_of_q3_campaign field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $cl_exclude_of_q3_campaign;

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
     * @var        Users
     */
    protected $aUserDc;

    /**
     * @var        Contacts
     */
    protected $aContactFacturation;

    /**
     * @var        Contacts
     */
    protected $aContactGestion;

    /**
     * @var        PropelObjectCollection|ClientContratOptions[] Collection to store aggregation of ClientContratOptions objects.
     */
    protected $collClientContratOptionss;
    protected $collClientContratOptionssPartial;

    /**
     * @var        PropelObjectCollection|ClientFactureOptions[] Collection to store aggregation of ClientFactureOptions objects.
     */
    protected $collClientFactureOptionss;
    protected $collClientFactureOptionssPartial;

    /**
     * @var        PropelObjectCollection|ClientPrestations[] Collection to store aggregation of ClientPrestations objects.
     */
    protected $collClientPrestationss;
    protected $collClientPrestationssPartial;

    /**
     * @var        PropelObjectCollection|Contacts[] Collection to store aggregation of Contacts objects.
     */
    protected $collContactssRelatedByClId;
    protected $collContactssRelatedByClIdPartial;

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
    protected $clientContratOptionssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $clientFactureOptionssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $clientPrestationssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $contactssRelatedByClIdScheduledForDeletion = null;

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
        $this->cl_exclude_of_q3_campaign = false;
    }

    /**
     * Initializes internal state of BaseClients object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [cl_libelle] column value.
     *
     * @return string
     */
    public function getClLibelle()
    {

        return $this->cl_libelle;
    }

    /**
     * Get the [cl_activity_id] column value.
     *
     * @return int
     */
    public function getClActivityId()
    {

        return $this->cl_activity_id;
    }

    /**
     * Get the [cl_type_id] column value.
     *
     * @return int
     */
    public function getClTypeId()
    {

        return $this->cl_type_id;
    }

    /**
     * Get the [cl_ct_gestion] column value.
     *
     * @return int
     */
    public function getClCtGestion()
    {

        return $this->cl_ct_gestion;
    }

    /**
     * Get the [cl_ct_facturation] column value.
     *
     * @return int
     */
    public function getClCtFacturation()
    {

        return $this->cl_ct_facturation;
    }

    /**
     * Get the [cl_dc_id] column value.
     *
     * @return int
     */
    public function getClDcId()
    {

        return $this->cl_dc_id;
    }

    /**
     * Get the [cl_exclude_of_q3_campaign] column value.
     *
     * @return boolean
     */
    public function getClExcludeOfQ3Campaign()
    {

        return $this->cl_exclude_of_q3_campaign;
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
     * Set the value of [cl_id] column.
     *
     * @param  int $v new value
     * @return Clients The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ClientsPeer::CL_ID;
                }


        return $this;
    } // setClId()

    /**
     * Set the value of [cl_libelle] column.
     *
     * @param  string $v new value
     * @return Clients The current object (for fluent API support)
     */
    public function setClLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_libelle !== $v) {
            $this->cl_libelle = $v;
            $this->modifiedColumns[] = ClientsPeer::CL_LIBELLE;
        }


        return $this;
    } // setClLibelle()

    /**
     * Set the value of [cl_activity_id] column.
     *
     * @param  int $v new value
     * @return Clients The current object (for fluent API support)
     */
    public function setClActivityId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_activity_id !== $v) {
                    $this->cl_activity_id = $v;
                    $this->modifiedColumns[] = ClientsPeer::CL_ACTIVITY_ID;
                }


        return $this;
    } // setClActivityId()

    /**
     * Set the value of [cl_type_id] column.
     *
     * @param  int $v new value
     * @return Clients The current object (for fluent API support)
     */
    public function setClTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_type_id !== $v) {
                    $this->cl_type_id = $v;
                    $this->modifiedColumns[] = ClientsPeer::CL_TYPE_ID;
                }


        return $this;
    } // setClTypeId()

    /**
     * Set the value of [cl_ct_gestion] column.
     *
     * @param  int $v new value
     * @return Clients The current object (for fluent API support)
     */
    public function setClCtGestion($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_ct_gestion !== $v) {
                    $this->cl_ct_gestion = $v;
                    $this->modifiedColumns[] = ClientsPeer::CL_CT_GESTION;
                }

        if ($this->aContactGestion !== null && $this->aContactGestion->getCtId() !== $v) {
            $this->aContactGestion = null;
        }


        return $this;
    } // setClCtGestion()

    /**
     * Set the value of [cl_ct_facturation] column.
     *
     * @param  int $v new value
     * @return Clients The current object (for fluent API support)
     */
    public function setClCtFacturation($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_ct_facturation !== $v) {
                    $this->cl_ct_facturation = $v;
                    $this->modifiedColumns[] = ClientsPeer::CL_CT_FACTURATION;
                }

        if ($this->aContactFacturation !== null && $this->aContactFacturation->getCtId() !== $v) {
            $this->aContactFacturation = null;
        }


        return $this;
    } // setClCtFacturation()

    /**
     * Set the value of [cl_dc_id] column.
     *
     * @param  int $v new value
     * @return Clients The current object (for fluent API support)
     */
    public function setClDcId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_dc_id !== $v) {
                    $this->cl_dc_id = $v;
                    $this->modifiedColumns[] = ClientsPeer::CL_DC_ID;
                }

        if ($this->aUserDc !== null && $this->aUserDc->getUserId() !== $v) {
            $this->aUserDc = null;
        }


        return $this;
    } // setClDcId()

    /**
     * Sets the value of the [cl_exclude_of_q3_campaign] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Clients The current object (for fluent API support)
     */
    public function setClExcludeOfQ3Campaign($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->cl_exclude_of_q3_campaign !== $v) {
            $this->cl_exclude_of_q3_campaign = $v;
            $this->modifiedColumns[] = ClientsPeer::CL_EXCLUDE_OF_Q3_CAMPAIGN;
        }


        return $this;
    } // setClExcludeOfQ3Campaign()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return Clients The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ClientsPeer::USER_ID;
                }


        return $this;
    } // setUserId()

    /**
     * Set the value of [user_modify] column.
     *
     * @param  int $v new value
     * @return Clients The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ClientsPeer::USER_MODIFY;
                }


        return $this;
    } // setUserModify()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Clients The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = ClientsPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Clients The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = ClientsPeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

    /**
     * Set the value of [actif] column.
     *
     * @param  int $v new value
     * @return Clients The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ClientsPeer::ACTIF;
                }


        return $this;
    } // setActif()

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
            if ($this->cl_exclude_of_q3_campaign !== false) {
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

            $this->cl_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->cl_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->cl_activity_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->cl_type_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->cl_ct_gestion = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->cl_ct_facturation = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->cl_dc_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->cl_exclude_of_q3_campaign = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->user_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->user_modify = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->date_create = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_modify = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->actif = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = ClientsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Clients object", $e);
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

        if ($this->aContactGestion !== null && $this->cl_ct_gestion !== $this->aContactGestion->getCtId()) {
            $this->aContactGestion = null;
        }
        if ($this->aContactFacturation !== null && $this->cl_ct_facturation !== $this->aContactFacturation->getCtId()) {
            $this->aContactFacturation = null;
        }
        if ($this->aUserDc !== null && $this->cl_dc_id !== $this->aUserDc->getUserId()) {
            $this->aUserDc = null;
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
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ClientsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUserDc = null;
            $this->aContactFacturation = null;
            $this->aContactGestion = null;
            $this->collClientContratOptionss = null;

            $this->collClientFactureOptionss = null;

            $this->collClientPrestationss = null;

            $this->collContactssRelatedByClId = null;

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
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ClientsQuery::create()
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
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ClientsPeer::addInstanceToPool($this);
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

            if ($this->aUserDc !== null) {
                if ($this->aUserDc->isModified() || $this->aUserDc->isNew()) {
                    $affectedRows += $this->aUserDc->save($con);
                }
                $this->setUserDc($this->aUserDc);
            }

            if ($this->aContactFacturation !== null) {
                if ($this->aContactFacturation->isModified() || $this->aContactFacturation->isNew()) {
                    $affectedRows += $this->aContactFacturation->save($con);
                }
                $this->setContactFacturation($this->aContactFacturation);
            }

            if ($this->aContactGestion !== null) {
                if ($this->aContactGestion->isModified() || $this->aContactGestion->isNew()) {
                    $affectedRows += $this->aContactGestion->save($con);
                }
                $this->setContactGestion($this->aContactGestion);
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

            if ($this->clientContratOptionssScheduledForDeletion !== null) {
                if (!$this->clientContratOptionssScheduledForDeletion->isEmpty()) {
                    foreach ($this->clientContratOptionssScheduledForDeletion as $clientContratOptions) {
                        // need to save related object because we set the relation to null
                        $clientContratOptions->save($con);
                    }
                    $this->clientContratOptionssScheduledForDeletion = null;
                }
            }

            if ($this->collClientContratOptionss !== null) {
                foreach ($this->collClientContratOptionss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->clientFactureOptionssScheduledForDeletion !== null) {
                if (!$this->clientFactureOptionssScheduledForDeletion->isEmpty()) {
                    foreach ($this->clientFactureOptionssScheduledForDeletion as $clientFactureOptions) {
                        // need to save related object because we set the relation to null
                        $clientFactureOptions->save($con);
                    }
                    $this->clientFactureOptionssScheduledForDeletion = null;
                }
            }

            if ($this->collClientFactureOptionss !== null) {
                foreach ($this->collClientFactureOptionss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->clientPrestationssScheduledForDeletion !== null) {
                if (!$this->clientPrestationssScheduledForDeletion->isEmpty()) {
                    foreach ($this->clientPrestationssScheduledForDeletion as $clientPrestations) {
                        // need to save related object because we set the relation to null
                        $clientPrestations->save($con);
                    }
                    $this->clientPrestationssScheduledForDeletion = null;
                }
            }

            if ($this->collClientPrestationss !== null) {
                foreach ($this->collClientPrestationss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->contactssRelatedByClIdScheduledForDeletion !== null) {
                if (!$this->contactssRelatedByClIdScheduledForDeletion->isEmpty()) {
                    ContactsQuery::create()
                        ->filterByPrimaryKeys($this->contactssRelatedByClIdScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->contactssRelatedByClIdScheduledForDeletion = null;
                }
            }

            if ($this->collContactssRelatedByClId !== null) {
                foreach ($this->collContactssRelatedByClId as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = ClientsPeer::CL_ID;
        if (null !== $this->cl_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ClientsPeer::CL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ClientsPeer::CL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_id`';
        }
        if ($this->isColumnModified(ClientsPeer::CL_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`cl_libelle`';
        }
        if ($this->isColumnModified(ClientsPeer::CL_ACTIVITY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_activity_id`';
        }
        if ($this->isColumnModified(ClientsPeer::CL_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_type_id`';
        }
        if ($this->isColumnModified(ClientsPeer::CL_CT_GESTION)) {
            $modifiedColumns[':p' . $index++]  = '`cl_ct_gestion`';
        }
        if ($this->isColumnModified(ClientsPeer::CL_CT_FACTURATION)) {
            $modifiedColumns[':p' . $index++]  = '`cl_ct_facturation`';
        }
        if ($this->isColumnModified(ClientsPeer::CL_DC_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_dc_id`';
        }
        if ($this->isColumnModified(ClientsPeer::CL_EXCLUDE_OF_Q3_CAMPAIGN)) {
            $modifiedColumns[':p' . $index++]  = '`cl_exclude_of_q3_campaign`';
        }
        if ($this->isColumnModified(ClientsPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(ClientsPeer::USER_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`user_modify`';
        }
        if ($this->isColumnModified(ClientsPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(ClientsPeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }
        if ($this->isColumnModified(ClientsPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }

        $sql = sprintf(
            'INSERT INTO `clients` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`cl_id`':
                        $stmt->bindValue($identifier, $this->cl_id, PDO::PARAM_INT);
                        break;
                    case '`cl_libelle`':
                        $stmt->bindValue($identifier, $this->cl_libelle, PDO::PARAM_STR);
                        break;
                    case '`cl_activity_id`':
                        $stmt->bindValue($identifier, $this->cl_activity_id, PDO::PARAM_INT);
                        break;
                    case '`cl_type_id`':
                        $stmt->bindValue($identifier, $this->cl_type_id, PDO::PARAM_INT);
                        break;
                    case '`cl_ct_gestion`':
                        $stmt->bindValue($identifier, $this->cl_ct_gestion, PDO::PARAM_INT);
                        break;
                    case '`cl_ct_facturation`':
                        $stmt->bindValue($identifier, $this->cl_ct_facturation, PDO::PARAM_INT);
                        break;
                    case '`cl_dc_id`':
                        $stmt->bindValue($identifier, $this->cl_dc_id, PDO::PARAM_INT);
                        break;
                    case '`cl_exclude_of_q3_campaign`':
                        $stmt->bindValue($identifier, (int) $this->cl_exclude_of_q3_campaign, PDO::PARAM_INT);
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
        $this->setClId($pk);

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

            if ($this->aUserDc !== null) {
                if (!$this->aUserDc->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUserDc->getValidationFailures());
                }
            }

            if ($this->aContactFacturation !== null) {
                if (!$this->aContactFacturation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContactFacturation->getValidationFailures());
                }
            }

            if ($this->aContactGestion !== null) {
                if (!$this->aContactGestion->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContactGestion->getValidationFailures());
                }
            }


            if (($retval = ClientsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collClientContratOptionss !== null) {
                    foreach ($this->collClientContratOptionss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collClientFactureOptionss !== null) {
                    foreach ($this->collClientFactureOptionss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collClientPrestationss !== null) {
                    foreach ($this->collClientPrestationss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collContactssRelatedByClId !== null) {
                    foreach ($this->collContactssRelatedByClId as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = ClientsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getClId();
                break;
            case 1:
                return $this->getClLibelle();
                break;
            case 2:
                return $this->getClActivityId();
                break;
            case 3:
                return $this->getClTypeId();
                break;
            case 4:
                return $this->getClCtGestion();
                break;
            case 5:
                return $this->getClCtFacturation();
                break;
            case 6:
                return $this->getClDcId();
                break;
            case 7:
                return $this->getClExcludeOfQ3Campaign();
                break;
            case 8:
                return $this->getUserId();
                break;
            case 9:
                return $this->getUserModify();
                break;
            case 10:
                return $this->getDateCreate();
                break;
            case 11:
                return $this->getDateModify();
                break;
            case 12:
                return $this->getActif();
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
        if (isset($alreadyDumpedObjects['Clients'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Clients'][$this->getPrimaryKey()] = true;
        $keys = ClientsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getClId(),
            $keys[1] => $this->getClLibelle(),
            $keys[2] => $this->getClActivityId(),
            $keys[3] => $this->getClTypeId(),
            $keys[4] => $this->getClCtGestion(),
            $keys[5] => $this->getClCtFacturation(),
            $keys[6] => $this->getClDcId(),
            $keys[7] => $this->getClExcludeOfQ3Campaign(),
            $keys[8] => $this->getUserId(),
            $keys[9] => $this->getUserModify(),
            $keys[10] => $this->getDateCreate(),
            $keys[11] => $this->getDateModify(),
            $keys[12] => $this->getActif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUserDc) {
                $result['UserDc'] = $this->aUserDc->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aContactFacturation) {
                $result['ContactFacturation'] = $this->aContactFacturation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aContactGestion) {
                $result['ContactGestion'] = $this->aContactGestion->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collClientContratOptionss) {
                $result['ClientContratOptionss'] = $this->collClientContratOptionss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collClientFactureOptionss) {
                $result['ClientFactureOptionss'] = $this->collClientFactureOptionss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collClientPrestationss) {
                $result['ClientPrestationss'] = $this->collClientPrestationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collContactssRelatedByClId) {
                $result['ContactssRelatedByClId'] = $this->collContactssRelatedByClId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ClientsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setClId($value);
                break;
            case 1:
                $this->setClLibelle($value);
                break;
            case 2:
                $this->setClActivityId($value);
                break;
            case 3:
                $this->setClTypeId($value);
                break;
            case 4:
                $this->setClCtGestion($value);
                break;
            case 5:
                $this->setClCtFacturation($value);
                break;
            case 6:
                $this->setClDcId($value);
                break;
            case 7:
                $this->setClExcludeOfQ3Campaign($value);
                break;
            case 8:
                $this->setUserId($value);
                break;
            case 9:
                $this->setUserModify($value);
                break;
            case 10:
                $this->setDateCreate($value);
                break;
            case 11:
                $this->setDateModify($value);
                break;
            case 12:
                $this->setActif($value);
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
        $keys = ClientsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setClId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setClLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setClActivityId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setClTypeId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setClCtGestion($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setClCtFacturation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setClDcId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setClExcludeOfQ3Campaign($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUserId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUserModify($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateCreate($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateModify($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setActif($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ClientsPeer::DATABASE_NAME);

        if ($this->isColumnModified(ClientsPeer::CL_ID)) $criteria->add(ClientsPeer::CL_ID, $this->cl_id);
        if ($this->isColumnModified(ClientsPeer::CL_LIBELLE)) $criteria->add(ClientsPeer::CL_LIBELLE, $this->cl_libelle);
        if ($this->isColumnModified(ClientsPeer::CL_ACTIVITY_ID)) $criteria->add(ClientsPeer::CL_ACTIVITY_ID, $this->cl_activity_id);
        if ($this->isColumnModified(ClientsPeer::CL_TYPE_ID)) $criteria->add(ClientsPeer::CL_TYPE_ID, $this->cl_type_id);
        if ($this->isColumnModified(ClientsPeer::CL_CT_GESTION)) $criteria->add(ClientsPeer::CL_CT_GESTION, $this->cl_ct_gestion);
        if ($this->isColumnModified(ClientsPeer::CL_CT_FACTURATION)) $criteria->add(ClientsPeer::CL_CT_FACTURATION, $this->cl_ct_facturation);
        if ($this->isColumnModified(ClientsPeer::CL_DC_ID)) $criteria->add(ClientsPeer::CL_DC_ID, $this->cl_dc_id);
        if ($this->isColumnModified(ClientsPeer::CL_EXCLUDE_OF_Q3_CAMPAIGN)) $criteria->add(ClientsPeer::CL_EXCLUDE_OF_Q3_CAMPAIGN, $this->cl_exclude_of_q3_campaign);
        if ($this->isColumnModified(ClientsPeer::USER_ID)) $criteria->add(ClientsPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(ClientsPeer::USER_MODIFY)) $criteria->add(ClientsPeer::USER_MODIFY, $this->user_modify);
        if ($this->isColumnModified(ClientsPeer::DATE_CREATE)) $criteria->add(ClientsPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(ClientsPeer::DATE_MODIFY)) $criteria->add(ClientsPeer::DATE_MODIFY, $this->date_modify);
        if ($this->isColumnModified(ClientsPeer::ACTIF)) $criteria->add(ClientsPeer::ACTIF, $this->actif);

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
        $criteria = new Criteria(ClientsPeer::DATABASE_NAME);
        $criteria->add(ClientsPeer::CL_ID, $this->cl_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getClId();
    }

    /**
     * Generic method to set the primary key (cl_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setClId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getClId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Clients (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setClLibelle($this->getClLibelle());
        $copyObj->setClActivityId($this->getClActivityId());
        $copyObj->setClTypeId($this->getClTypeId());
        $copyObj->setClCtGestion($this->getClCtGestion());
        $copyObj->setClCtFacturation($this->getClCtFacturation());
        $copyObj->setClDcId($this->getClDcId());
        $copyObj->setClExcludeOfQ3Campaign($this->getClExcludeOfQ3Campaign());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setUserModify($this->getUserModify());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setDateModify($this->getDateModify());
        $copyObj->setActif($this->getActif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getClientContratOptionss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClientContratOptions($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getClientFactureOptionss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClientFactureOptions($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getClientPrestationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClientPrestations($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getContactssRelatedByClId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addContactsRelatedByClId($relObj->copy($deepCopy));
                }
            }

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
            $copyObj->setClId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Clients Clone of current object.
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
     * @return ClientsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ClientsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Users object.
     *
     * @param                  Users $v
     * @return Clients The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUserDc(Users $v = null)
    {
        if ($v === null) {
            $this->setClDcId(NULL);
        } else {
            $this->setClDcId($v->getUserId());
        }

        $this->aUserDc = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Users object, it will not be re-added.
        if ($v !== null) {
            $v->addClients($this);
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
    public function getUserDc(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUserDc === null && ($this->cl_dc_id !== null) && $doQuery) {
            $this->aUserDc = UsersQuery::create()->findPk($this->cl_dc_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUserDc->addClientss($this);
             */
        }

        return $this->aUserDc;
    }

    /**
     * Declares an association between this object and a Contacts object.
     *
     * @param                  Contacts $v
     * @return Clients The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContactFacturation(Contacts $v = null)
    {
        if ($v === null) {
            $this->setClCtFacturation(NULL);
        } else {
            $this->setClCtFacturation($v->getCtId());
        }

        $this->aContactFacturation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Contacts object, it will not be re-added.
        if ($v !== null) {
            $v->addClientsRelatedByClCtFacturation($this);
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
        if ($this->aContactFacturation === null && ($this->cl_ct_facturation !== null) && $doQuery) {
            $this->aContactFacturation = ContactsQuery::create()->findPk($this->cl_ct_facturation, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContactFacturation->addClientssRelatedByClCtFacturation($this);
             */
        }

        return $this->aContactFacturation;
    }

    /**
     * Declares an association between this object and a Contacts object.
     *
     * @param                  Contacts $v
     * @return Clients The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContactGestion(Contacts $v = null)
    {
        if ($v === null) {
            $this->setClCtGestion(NULL);
        } else {
            $this->setClCtGestion($v->getCtId());
        }

        $this->aContactGestion = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Contacts object, it will not be re-added.
        if ($v !== null) {
            $v->addClientsRelatedByClCtGestion($this);
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
    public function getContactGestion(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aContactGestion === null && ($this->cl_ct_gestion !== null) && $doQuery) {
            $this->aContactGestion = ContactsQuery::create()->findPk($this->cl_ct_gestion, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContactGestion->addClientssRelatedByClCtGestion($this);
             */
        }

        return $this->aContactGestion;
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
        if ('ClientContratOptions' == $relationName) {
            $this->initClientContratOptionss();
        }
        if ('ClientFactureOptions' == $relationName) {
            $this->initClientFactureOptionss();
        }
        if ('ClientPrestations' == $relationName) {
            $this->initClientPrestationss();
        }
        if ('ContactsRelatedByClId' == $relationName) {
            $this->initContactssRelatedByClId();
        }
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
     * Clears out the collClientContratOptionss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clients The current object (for fluent API support)
     * @see        addClientContratOptionss()
     */
    public function clearClientContratOptionss()
    {
        $this->collClientContratOptionss = null; // important to set this to null since that means it is uninitialized
        $this->collClientContratOptionssPartial = null;

        return $this;
    }

    /**
     * reset is the collClientContratOptionss collection loaded partially
     *
     * @return void
     */
    public function resetPartialClientContratOptionss($v = true)
    {
        $this->collClientContratOptionssPartial = $v;
    }

    /**
     * Initializes the collClientContratOptionss collection.
     *
     * By default this just sets the collClientContratOptionss collection to an empty array (like clearcollClientContratOptionss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClientContratOptionss($overrideExisting = true)
    {
        if (null !== $this->collClientContratOptionss && !$overrideExisting) {
            return;
        }
        $this->collClientContratOptionss = new PropelObjectCollection();
        $this->collClientContratOptionss->setModel('ClientContratOptions');
    }

    /**
     * Gets an array of ClientContratOptions objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clients is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ClientContratOptions[] List of ClientContratOptions objects
     * @throws PropelException
     */
    public function getClientContratOptionss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClientContratOptionssPartial && !$this->isNew();
        if (null === $this->collClientContratOptionss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClientContratOptionss) {
                // return empty collection
                $this->initClientContratOptionss();
            } else {
                $collClientContratOptionss = ClientContratOptionsQuery::create(null, $criteria)
                    ->filterByClients($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClientContratOptionssPartial && count($collClientContratOptionss)) {
                      $this->initClientContratOptionss(false);

                      foreach ($collClientContratOptionss as $obj) {
                        if (false == $this->collClientContratOptionss->contains($obj)) {
                          $this->collClientContratOptionss->append($obj);
                        }
                      }

                      $this->collClientContratOptionssPartial = true;
                    }

                    $collClientContratOptionss->getInternalIterator()->rewind();

                    return $collClientContratOptionss;
                }

                if ($partial && $this->collClientContratOptionss) {
                    foreach ($this->collClientContratOptionss as $obj) {
                        if ($obj->isNew()) {
                            $collClientContratOptionss[] = $obj;
                        }
                    }
                }

                $this->collClientContratOptionss = $collClientContratOptionss;
                $this->collClientContratOptionssPartial = false;
            }
        }

        return $this->collClientContratOptionss;
    }

    /**
     * Sets a collection of ClientContratOptions objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clientContratOptionss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clients The current object (for fluent API support)
     */
    public function setClientContratOptionss(PropelCollection $clientContratOptionss, PropelPDO $con = null)
    {
        $clientContratOptionssToDelete = $this->getClientContratOptionss(new Criteria(), $con)->diff($clientContratOptionss);


        $this->clientContratOptionssScheduledForDeletion = $clientContratOptionssToDelete;

        foreach ($clientContratOptionssToDelete as $clientContratOptionsRemoved) {
            $clientContratOptionsRemoved->setClients(null);
        }

        $this->collClientContratOptionss = null;
        foreach ($clientContratOptionss as $clientContratOptions) {
            $this->addClientContratOptions($clientContratOptions);
        }

        $this->collClientContratOptionss = $clientContratOptionss;
        $this->collClientContratOptionssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ClientContratOptions objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ClientContratOptions objects.
     * @throws PropelException
     */
    public function countClientContratOptionss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClientContratOptionssPartial && !$this->isNew();
        if (null === $this->collClientContratOptionss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClientContratOptionss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClientContratOptionss());
            }
            $query = ClientContratOptionsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClients($this)
                ->count($con);
        }

        return count($this->collClientContratOptionss);
    }

    /**
     * Method called to associate a ClientContratOptions object to this object
     * through the ClientContratOptions foreign key attribute.
     *
     * @param    ClientContratOptions $l ClientContratOptions
     * @return Clients The current object (for fluent API support)
     */
    public function addClientContratOptions(ClientContratOptions $l)
    {
        if ($this->collClientContratOptionss === null) {
            $this->initClientContratOptionss();
            $this->collClientContratOptionssPartial = true;
        }

        if (!in_array($l, $this->collClientContratOptionss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClientContratOptions($l);

            if ($this->clientContratOptionssScheduledForDeletion and $this->clientContratOptionssScheduledForDeletion->contains($l)) {
                $this->clientContratOptionssScheduledForDeletion->remove($this->clientContratOptionssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ClientContratOptions $clientContratOptions The clientContratOptions object to add.
     */
    protected function doAddClientContratOptions($clientContratOptions)
    {
        $this->collClientContratOptionss[]= $clientContratOptions;
        $clientContratOptions->setClients($this);
    }

    /**
     * @param	ClientContratOptions $clientContratOptions The clientContratOptions object to remove.
     * @return Clients The current object (for fluent API support)
     */
    public function removeClientContratOptions($clientContratOptions)
    {
        if ($this->getClientContratOptionss()->contains($clientContratOptions)) {
            $this->collClientContratOptionss->remove($this->collClientContratOptionss->search($clientContratOptions));
            if (null === $this->clientContratOptionssScheduledForDeletion) {
                $this->clientContratOptionssScheduledForDeletion = clone $this->collClientContratOptionss;
                $this->clientContratOptionssScheduledForDeletion->clear();
            }
            $this->clientContratOptionssScheduledForDeletion[]= $clientContratOptions;
            $clientContratOptions->setClients(null);
        }

        return $this;
    }

    /**
     * Clears out the collClientFactureOptionss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clients The current object (for fluent API support)
     * @see        addClientFactureOptionss()
     */
    public function clearClientFactureOptionss()
    {
        $this->collClientFactureOptionss = null; // important to set this to null since that means it is uninitialized
        $this->collClientFactureOptionssPartial = null;

        return $this;
    }

    /**
     * reset is the collClientFactureOptionss collection loaded partially
     *
     * @return void
     */
    public function resetPartialClientFactureOptionss($v = true)
    {
        $this->collClientFactureOptionssPartial = $v;
    }

    /**
     * Initializes the collClientFactureOptionss collection.
     *
     * By default this just sets the collClientFactureOptionss collection to an empty array (like clearcollClientFactureOptionss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClientFactureOptionss($overrideExisting = true)
    {
        if (null !== $this->collClientFactureOptionss && !$overrideExisting) {
            return;
        }
        $this->collClientFactureOptionss = new PropelObjectCollection();
        $this->collClientFactureOptionss->setModel('ClientFactureOptions');
    }

    /**
     * Gets an array of ClientFactureOptions objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clients is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ClientFactureOptions[] List of ClientFactureOptions objects
     * @throws PropelException
     */
    public function getClientFactureOptionss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClientFactureOptionssPartial && !$this->isNew();
        if (null === $this->collClientFactureOptionss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClientFactureOptionss) {
                // return empty collection
                $this->initClientFactureOptionss();
            } else {
                $collClientFactureOptionss = ClientFactureOptionsQuery::create(null, $criteria)
                    ->filterByClients($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClientFactureOptionssPartial && count($collClientFactureOptionss)) {
                      $this->initClientFactureOptionss(false);

                      foreach ($collClientFactureOptionss as $obj) {
                        if (false == $this->collClientFactureOptionss->contains($obj)) {
                          $this->collClientFactureOptionss->append($obj);
                        }
                      }

                      $this->collClientFactureOptionssPartial = true;
                    }

                    $collClientFactureOptionss->getInternalIterator()->rewind();

                    return $collClientFactureOptionss;
                }

                if ($partial && $this->collClientFactureOptionss) {
                    foreach ($this->collClientFactureOptionss as $obj) {
                        if ($obj->isNew()) {
                            $collClientFactureOptionss[] = $obj;
                        }
                    }
                }

                $this->collClientFactureOptionss = $collClientFactureOptionss;
                $this->collClientFactureOptionssPartial = false;
            }
        }

        return $this->collClientFactureOptionss;
    }

    /**
     * Sets a collection of ClientFactureOptions objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clientFactureOptionss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clients The current object (for fluent API support)
     */
    public function setClientFactureOptionss(PropelCollection $clientFactureOptionss, PropelPDO $con = null)
    {
        $clientFactureOptionssToDelete = $this->getClientFactureOptionss(new Criteria(), $con)->diff($clientFactureOptionss);


        $this->clientFactureOptionssScheduledForDeletion = $clientFactureOptionssToDelete;

        foreach ($clientFactureOptionssToDelete as $clientFactureOptionsRemoved) {
            $clientFactureOptionsRemoved->setClients(null);
        }

        $this->collClientFactureOptionss = null;
        foreach ($clientFactureOptionss as $clientFactureOptions) {
            $this->addClientFactureOptions($clientFactureOptions);
        }

        $this->collClientFactureOptionss = $clientFactureOptionss;
        $this->collClientFactureOptionssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ClientFactureOptions objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ClientFactureOptions objects.
     * @throws PropelException
     */
    public function countClientFactureOptionss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClientFactureOptionssPartial && !$this->isNew();
        if (null === $this->collClientFactureOptionss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClientFactureOptionss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClientFactureOptionss());
            }
            $query = ClientFactureOptionsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClients($this)
                ->count($con);
        }

        return count($this->collClientFactureOptionss);
    }

    /**
     * Method called to associate a ClientFactureOptions object to this object
     * through the ClientFactureOptions foreign key attribute.
     *
     * @param    ClientFactureOptions $l ClientFactureOptions
     * @return Clients The current object (for fluent API support)
     */
    public function addClientFactureOptions(ClientFactureOptions $l)
    {
        if ($this->collClientFactureOptionss === null) {
            $this->initClientFactureOptionss();
            $this->collClientFactureOptionssPartial = true;
        }

        if (!in_array($l, $this->collClientFactureOptionss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClientFactureOptions($l);

            if ($this->clientFactureOptionssScheduledForDeletion and $this->clientFactureOptionssScheduledForDeletion->contains($l)) {
                $this->clientFactureOptionssScheduledForDeletion->remove($this->clientFactureOptionssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ClientFactureOptions $clientFactureOptions The clientFactureOptions object to add.
     */
    protected function doAddClientFactureOptions($clientFactureOptions)
    {
        $this->collClientFactureOptionss[]= $clientFactureOptions;
        $clientFactureOptions->setClients($this);
    }

    /**
     * @param	ClientFactureOptions $clientFactureOptions The clientFactureOptions object to remove.
     * @return Clients The current object (for fluent API support)
     */
    public function removeClientFactureOptions($clientFactureOptions)
    {
        if ($this->getClientFactureOptionss()->contains($clientFactureOptions)) {
            $this->collClientFactureOptionss->remove($this->collClientFactureOptionss->search($clientFactureOptions));
            if (null === $this->clientFactureOptionssScheduledForDeletion) {
                $this->clientFactureOptionssScheduledForDeletion = clone $this->collClientFactureOptionss;
                $this->clientFactureOptionssScheduledForDeletion->clear();
            }
            $this->clientFactureOptionssScheduledForDeletion[]= $clientFactureOptions;
            $clientFactureOptions->setClients(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related ClientFactureOptionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ClientFactureOptions[] List of ClientFactureOptions objects
     */
    public function getClientFactureOptionssJoinRFactureOptionsEcheances($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClientFactureOptionsQuery::create(null, $criteria);
        $query->joinWith('RFactureOptionsEcheances', $join_behavior);

        return $this->getClientFactureOptionss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related ClientFactureOptionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ClientFactureOptions[] List of ClientFactureOptions objects
     */
    public function getClientFactureOptionssJoinRLanguages($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClientFactureOptionsQuery::create(null, $criteria);
        $query->joinWith('RLanguages', $join_behavior);

        return $this->getClientFactureOptionss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related ClientFactureOptionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ClientFactureOptions[] List of ClientFactureOptions objects
     */
    public function getClientFactureOptionssJoinCountryInvoiced($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClientFactureOptionsQuery::create(null, $criteria);
        $query->joinWith('CountryInvoiced', $join_behavior);

        return $this->getClientFactureOptionss($query, $con);
    }

    /**
     * Clears out the collClientPrestationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clients The current object (for fluent API support)
     * @see        addClientPrestationss()
     */
    public function clearClientPrestationss()
    {
        $this->collClientPrestationss = null; // important to set this to null since that means it is uninitialized
        $this->collClientPrestationssPartial = null;

        return $this;
    }

    /**
     * reset is the collClientPrestationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialClientPrestationss($v = true)
    {
        $this->collClientPrestationssPartial = $v;
    }

    /**
     * Initializes the collClientPrestationss collection.
     *
     * By default this just sets the collClientPrestationss collection to an empty array (like clearcollClientPrestationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClientPrestationss($overrideExisting = true)
    {
        if (null !== $this->collClientPrestationss && !$overrideExisting) {
            return;
        }
        $this->collClientPrestationss = new PropelObjectCollection();
        $this->collClientPrestationss->setModel('ClientPrestations');
    }

    /**
     * Gets an array of ClientPrestations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clients is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ClientPrestations[] List of ClientPrestations objects
     * @throws PropelException
     */
    public function getClientPrestationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClientPrestationssPartial && !$this->isNew();
        if (null === $this->collClientPrestationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClientPrestationss) {
                // return empty collection
                $this->initClientPrestationss();
            } else {
                $collClientPrestationss = ClientPrestationsQuery::create(null, $criteria)
                    ->filterByClients($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClientPrestationssPartial && count($collClientPrestationss)) {
                      $this->initClientPrestationss(false);

                      foreach ($collClientPrestationss as $obj) {
                        if (false == $this->collClientPrestationss->contains($obj)) {
                          $this->collClientPrestationss->append($obj);
                        }
                      }

                      $this->collClientPrestationssPartial = true;
                    }

                    $collClientPrestationss->getInternalIterator()->rewind();

                    return $collClientPrestationss;
                }

                if ($partial && $this->collClientPrestationss) {
                    foreach ($this->collClientPrestationss as $obj) {
                        if ($obj->isNew()) {
                            $collClientPrestationss[] = $obj;
                        }
                    }
                }

                $this->collClientPrestationss = $collClientPrestationss;
                $this->collClientPrestationssPartial = false;
            }
        }

        return $this->collClientPrestationss;
    }

    /**
     * Sets a collection of ClientPrestations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clientPrestationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clients The current object (for fluent API support)
     */
    public function setClientPrestationss(PropelCollection $clientPrestationss, PropelPDO $con = null)
    {
        $clientPrestationssToDelete = $this->getClientPrestationss(new Criteria(), $con)->diff($clientPrestationss);


        $this->clientPrestationssScheduledForDeletion = $clientPrestationssToDelete;

        foreach ($clientPrestationssToDelete as $clientPrestationsRemoved) {
            $clientPrestationsRemoved->setClients(null);
        }

        $this->collClientPrestationss = null;
        foreach ($clientPrestationss as $clientPrestations) {
            $this->addClientPrestations($clientPrestations);
        }

        $this->collClientPrestationss = $clientPrestationss;
        $this->collClientPrestationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ClientPrestations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ClientPrestations objects.
     * @throws PropelException
     */
    public function countClientPrestationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClientPrestationssPartial && !$this->isNew();
        if (null === $this->collClientPrestationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClientPrestationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClientPrestationss());
            }
            $query = ClientPrestationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClients($this)
                ->count($con);
        }

        return count($this->collClientPrestationss);
    }

    /**
     * Method called to associate a ClientPrestations object to this object
     * through the ClientPrestations foreign key attribute.
     *
     * @param    ClientPrestations $l ClientPrestations
     * @return Clients The current object (for fluent API support)
     */
    public function addClientPrestations(ClientPrestations $l)
    {
        if ($this->collClientPrestationss === null) {
            $this->initClientPrestationss();
            $this->collClientPrestationssPartial = true;
        }

        if (!in_array($l, $this->collClientPrestationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClientPrestations($l);

            if ($this->clientPrestationssScheduledForDeletion and $this->clientPrestationssScheduledForDeletion->contains($l)) {
                $this->clientPrestationssScheduledForDeletion->remove($this->clientPrestationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ClientPrestations $clientPrestations The clientPrestations object to add.
     */
    protected function doAddClientPrestations($clientPrestations)
    {
        $this->collClientPrestationss[]= $clientPrestations;
        $clientPrestations->setClients($this);
    }

    /**
     * @param	ClientPrestations $clientPrestations The clientPrestations object to remove.
     * @return Clients The current object (for fluent API support)
     */
    public function removeClientPrestations($clientPrestations)
    {
        if ($this->getClientPrestationss()->contains($clientPrestations)) {
            $this->collClientPrestationss->remove($this->collClientPrestationss->search($clientPrestations));
            if (null === $this->clientPrestationssScheduledForDeletion) {
                $this->clientPrestationssScheduledForDeletion = clone $this->collClientPrestationss;
                $this->clientPrestationssScheduledForDeletion->clear();
            }
            $this->clientPrestationssScheduledForDeletion[]= $clientPrestations;
            $clientPrestations->setClients(null);
        }

        return $this;
    }

    /**
     * Clears out the collContactssRelatedByClId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clients The current object (for fluent API support)
     * @see        addContactssRelatedByClId()
     */
    public function clearContactssRelatedByClId()
    {
        $this->collContactssRelatedByClId = null; // important to set this to null since that means it is uninitialized
        $this->collContactssRelatedByClIdPartial = null;

        return $this;
    }

    /**
     * reset is the collContactssRelatedByClId collection loaded partially
     *
     * @return void
     */
    public function resetPartialContactssRelatedByClId($v = true)
    {
        $this->collContactssRelatedByClIdPartial = $v;
    }

    /**
     * Initializes the collContactssRelatedByClId collection.
     *
     * By default this just sets the collContactssRelatedByClId collection to an empty array (like clearcollContactssRelatedByClId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initContactssRelatedByClId($overrideExisting = true)
    {
        if (null !== $this->collContactssRelatedByClId && !$overrideExisting) {
            return;
        }
        $this->collContactssRelatedByClId = new PropelObjectCollection();
        $this->collContactssRelatedByClId->setModel('Contacts');
    }

    /**
     * Gets an array of Contacts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Clients is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Contacts[] List of Contacts objects
     * @throws PropelException
     */
    public function getContactssRelatedByClId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collContactssRelatedByClIdPartial && !$this->isNew();
        if (null === $this->collContactssRelatedByClId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collContactssRelatedByClId) {
                // return empty collection
                $this->initContactssRelatedByClId();
            } else {
                $collContactssRelatedByClId = ContactsQuery::create(null, $criteria)
                    ->filterByClientsRelatedByClId($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collContactssRelatedByClIdPartial && count($collContactssRelatedByClId)) {
                      $this->initContactssRelatedByClId(false);

                      foreach ($collContactssRelatedByClId as $obj) {
                        if (false == $this->collContactssRelatedByClId->contains($obj)) {
                          $this->collContactssRelatedByClId->append($obj);
                        }
                      }

                      $this->collContactssRelatedByClIdPartial = true;
                    }

                    $collContactssRelatedByClId->getInternalIterator()->rewind();

                    return $collContactssRelatedByClId;
                }

                if ($partial && $this->collContactssRelatedByClId) {
                    foreach ($this->collContactssRelatedByClId as $obj) {
                        if ($obj->isNew()) {
                            $collContactssRelatedByClId[] = $obj;
                        }
                    }
                }

                $this->collContactssRelatedByClId = $collContactssRelatedByClId;
                $this->collContactssRelatedByClIdPartial = false;
            }
        }

        return $this->collContactssRelatedByClId;
    }

    /**
     * Sets a collection of ContactsRelatedByClId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $contactssRelatedByClId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Clients The current object (for fluent API support)
     */
    public function setContactssRelatedByClId(PropelCollection $contactssRelatedByClId, PropelPDO $con = null)
    {
        $contactssRelatedByClIdToDelete = $this->getContactssRelatedByClId(new Criteria(), $con)->diff($contactssRelatedByClId);


        $this->contactssRelatedByClIdScheduledForDeletion = $contactssRelatedByClIdToDelete;

        foreach ($contactssRelatedByClIdToDelete as $contactsRelatedByClIdRemoved) {
            $contactsRelatedByClIdRemoved->setClientsRelatedByClId(null);
        }

        $this->collContactssRelatedByClId = null;
        foreach ($contactssRelatedByClId as $contactsRelatedByClId) {
            $this->addContactsRelatedByClId($contactsRelatedByClId);
        }

        $this->collContactssRelatedByClId = $contactssRelatedByClId;
        $this->collContactssRelatedByClIdPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Contacts objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Contacts objects.
     * @throws PropelException
     */
    public function countContactssRelatedByClId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collContactssRelatedByClIdPartial && !$this->isNew();
        if (null === $this->collContactssRelatedByClId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collContactssRelatedByClId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getContactssRelatedByClId());
            }
            $query = ContactsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClientsRelatedByClId($this)
                ->count($con);
        }

        return count($this->collContactssRelatedByClId);
    }

    /**
     * Method called to associate a Contacts object to this object
     * through the Contacts foreign key attribute.
     *
     * @param    Contacts $l Contacts
     * @return Clients The current object (for fluent API support)
     */
    public function addContactsRelatedByClId(Contacts $l)
    {
        if ($this->collContactssRelatedByClId === null) {
            $this->initContactssRelatedByClId();
            $this->collContactssRelatedByClIdPartial = true;
        }

        if (!in_array($l, $this->collContactssRelatedByClId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddContactsRelatedByClId($l);

            if ($this->contactssRelatedByClIdScheduledForDeletion and $this->contactssRelatedByClIdScheduledForDeletion->contains($l)) {
                $this->contactssRelatedByClIdScheduledForDeletion->remove($this->contactssRelatedByClIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ContactsRelatedByClId $contactsRelatedByClId The contactsRelatedByClId object to add.
     */
    protected function doAddContactsRelatedByClId($contactsRelatedByClId)
    {
        $this->collContactssRelatedByClId[]= $contactsRelatedByClId;
        $contactsRelatedByClId->setClientsRelatedByClId($this);
    }

    /**
     * @param	ContactsRelatedByClId $contactsRelatedByClId The contactsRelatedByClId object to remove.
     * @return Clients The current object (for fluent API support)
     */
    public function removeContactsRelatedByClId($contactsRelatedByClId)
    {
        if ($this->getContactssRelatedByClId()->contains($contactsRelatedByClId)) {
            $this->collContactssRelatedByClId->remove($this->collContactssRelatedByClId->search($contactsRelatedByClId));
            if (null === $this->contactssRelatedByClIdScheduledForDeletion) {
                $this->contactssRelatedByClIdScheduledForDeletion = clone $this->collContactssRelatedByClId;
                $this->contactssRelatedByClIdScheduledForDeletion->clear();
            }
            $this->contactssRelatedByClIdScheduledForDeletion[]= clone $contactsRelatedByClId;
            $contactsRelatedByClId->setClientsRelatedByClId(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related ContactssRelatedByClId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Contacts[] List of Contacts objects
     */
    public function getContactssRelatedByClIdJoinClientSites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ContactsQuery::create(null, $criteria);
        $query->joinWith('ClientSites', $join_behavior);

        return $this->getContactssRelatedByClId($query, $con);
    }

    /**
     * Clears out the collFacturess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Clients The current object (for fluent API support)
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
     * If this Clients is new, it will return
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
                    ->filterByClients($this)
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
     * @return Clients The current object (for fluent API support)
     */
    public function setFacturess(PropelCollection $facturess, PropelPDO $con = null)
    {
        $facturessToDelete = $this->getFacturess(new Criteria(), $con)->diff($facturess);


        $this->facturessScheduledForDeletion = $facturessToDelete;

        foreach ($facturessToDelete as $facturesRemoved) {
            $facturesRemoved->setClients(null);
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
                ->filterByClients($this)
                ->count($con);
        }

        return count($this->collFacturess);
    }

    /**
     * Method called to associate a Factures object to this object
     * through the Factures foreign key attribute.
     *
     * @param    Factures $l Factures
     * @return Clients The current object (for fluent API support)
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
        $factures->setClients($this);
    }

    /**
     * @param	Factures $factures The factures object to remove.
     * @return Clients The current object (for fluent API support)
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
            $factures->setClients(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * @return Clients The current object (for fluent API support)
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
     * If this Clients is new, it will return
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
                    ->filterByClients($this)
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
     * @return Clients The current object (for fluent API support)
     */
    public function setOperationss(PropelCollection $operationss, PropelPDO $con = null)
    {
        $operationssToDelete = $this->getOperationss(new Criteria(), $con)->diff($operationss);


        $this->operationssScheduledForDeletion = $operationssToDelete;

        foreach ($operationssToDelete as $operationsRemoved) {
            $operationsRemoved->setClients(null);
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
                ->filterByClients($this)
                ->count($con);
        }

        return count($this->collOperationss);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return Clients The current object (for fluent API support)
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
        $operations->setClients($this);
    }

    /**
     * @param	Operations $operations The operations object to remove.
     * @return Clients The current object (for fluent API support)
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
            $operations->setClients(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * @return Clients The current object (for fluent API support)
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
     * If this Clients is new, it will return
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
                    ->filterByClients($this)
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
     * @return Clients The current object (for fluent API support)
     */
    public function setRelancess(PropelCollection $relancess, PropelPDO $con = null)
    {
        $relancessToDelete = $this->getRelancess(new Criteria(), $con)->diff($relancess);


        $this->relancessScheduledForDeletion = $relancessToDelete;

        foreach ($relancessToDelete as $relancesRemoved) {
            $relancesRemoved->setClients(null);
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
                ->filterByClients($this)
                ->count($con);
        }

        return count($this->collRelancess);
    }

    /**
     * Method called to associate a Relances object to this object
     * through the Relances foreign key attribute.
     *
     * @param    Relances $l Relances
     * @return Clients The current object (for fluent API support)
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
        $relances->setClients($this);
    }

    /**
     * @param	Relances $relances The relances object to remove.
     * @return Clients The current object (for fluent API support)
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
            $relances->setClients(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getRelancess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * @return Clients The current object (for fluent API support)
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
     * If this Clients is new, it will return
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
                    ->filterByClients($this)
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
     * @return Clients The current object (for fluent API support)
     */
    public function setFactureEditionHistorys(PropelCollection $factureEditionHistorys, PropelPDO $con = null)
    {
        $factureEditionHistorysToDelete = $this->getFactureEditionHistorys(new Criteria(), $con)->diff($factureEditionHistorys);


        $this->factureEditionHistorysScheduledForDeletion = $factureEditionHistorysToDelete;

        foreach ($factureEditionHistorysToDelete as $factureEditionHistoryRemoved) {
            $factureEditionHistoryRemoved->setClients(null);
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
                ->filterByClients($this)
                ->count($con);
        }

        return count($this->collFactureEditionHistorys);
    }

    /**
     * Method called to associate a FactureEditionHistory object to this object
     * through the FactureEditionHistory foreign key attribute.
     *
     * @param    FactureEditionHistory $l FactureEditionHistory
     * @return Clients The current object (for fluent API support)
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
        $factureEditionHistory->setClients($this);
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to remove.
     * @return Clients The current object (for fluent API support)
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
            $factureEditionHistory->setClients(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
     * Otherwise if this Clients is new, it will return
     * an empty collection; or if this Clients has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Clients.
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
        $this->cl_id = null;
        $this->cl_libelle = null;
        $this->cl_activity_id = null;
        $this->cl_type_id = null;
        $this->cl_ct_gestion = null;
        $this->cl_ct_facturation = null;
        $this->cl_dc_id = null;
        $this->cl_exclude_of_q3_campaign = null;
        $this->user_id = null;
        $this->user_modify = null;
        $this->date_create = null;
        $this->date_modify = null;
        $this->actif = null;
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
            if ($this->collClientContratOptionss) {
                foreach ($this->collClientContratOptionss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collClientFactureOptionss) {
                foreach ($this->collClientFactureOptionss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collClientPrestationss) {
                foreach ($this->collClientPrestationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collContactssRelatedByClId) {
                foreach ($this->collContactssRelatedByClId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
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
            if ($this->aUserDc instanceof Persistent) {
              $this->aUserDc->clearAllReferences($deep);
            }
            if ($this->aContactFacturation instanceof Persistent) {
              $this->aContactFacturation->clearAllReferences($deep);
            }
            if ($this->aContactGestion instanceof Persistent) {
              $this->aContactGestion->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collClientContratOptionss instanceof PropelCollection) {
            $this->collClientContratOptionss->clearIterator();
        }
        $this->collClientContratOptionss = null;
        if ($this->collClientFactureOptionss instanceof PropelCollection) {
            $this->collClientFactureOptionss->clearIterator();
        }
        $this->collClientFactureOptionss = null;
        if ($this->collClientPrestationss instanceof PropelCollection) {
            $this->collClientPrestationss->clearIterator();
        }
        $this->collClientPrestationss = null;
        if ($this->collContactssRelatedByClId instanceof PropelCollection) {
            $this->collContactssRelatedByClId->clearIterator();
        }
        $this->collContactssRelatedByClId = null;
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
        $this->aUserDc = null;
        $this->aContactFacturation = null;
        $this->aContactGestion = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ClientsPeer::DEFAULT_STRING_FORMAT);
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
      0 => 'cl_libelle',
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
                            $this->addValidationFailed('Ce nom de client existe déjà.', $aColumns[0]);
                        } else {
                            $this->addValidationFailed('Ce nom de client existe déjà.', 'error');
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
                return BaseClientsPeer::getConnection();
            }
}
