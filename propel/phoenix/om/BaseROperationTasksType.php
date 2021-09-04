<?php


/**
 * Base class that represents a row from the 'r_operation_tasks_type' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTasksType extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ROperationTasksTypePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ROperationTasksTypePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_op_task_type_id field.
     * @var        int
     */
    protected $r_op_task_type_id;

    /**
     * The value for the r_op_task_type_libelle field.
     * @var        string
     */
    protected $r_op_task_type_libelle;

    /**
     * The value for the r_op_task_type_date_ref field.
     * @var        int
     */
    protected $r_op_task_type_date_ref;

    /**
     * The value for the r_op_task_type_delta field.
     * @var        int
     */
    protected $r_op_task_type_delta;

    /**
     * The value for the r_op_task_type_rappel field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $r_op_task_type_rappel;

    /**
     * The value for the r_op_task_type_assign_to_user field.
     * @var        int
     */
    protected $r_op_task_type_assign_to_user;

    /**
     * The value for the r_op_task_type_notify_to_user field.
     * @var        int
     */
    protected $r_op_task_type_notify_to_user;

    /**
     * The value for the r_op_task_type_assign_to_group field.
     * @var        int
     */
    protected $r_op_task_type_assign_to_group;

    /**
     * The value for the r_op_task_type_notify_to_group field.
     * @var        int
     */
    protected $r_op_task_type_notify_to_group;

    /**
     * The value for the r_op_task_type_assign_to_cp field.
     * @var        boolean
     */
    protected $r_op_task_type_assign_to_cp;

    /**
     * The value for the r_op_task_type_assign_to_dc field.
     * @var        boolean
     */
    protected $r_op_task_type_assign_to_dc;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

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
        $this->r_op_task_type_rappel = 0;
    }

    /**
     * Initializes internal state of BaseROperationTasksType object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [r_op_task_type_id] column value.
     *
     * @return int
     */
    public function getROpTaskTypeId()
    {

        return $this->r_op_task_type_id;
    }

    /**
     * Get the [r_op_task_type_libelle] column value.
     *
     * @return string
     */
    public function getROpTaskTypeLibelle()
    {

        return $this->r_op_task_type_libelle;
    }

    /**
     * Get the [r_op_task_type_date_ref] column value.
     *
     * @return int
     */
    public function getROpTaskTypeDateRef()
    {

        return $this->r_op_task_type_date_ref;
    }

    /**
     * Get the [r_op_task_type_delta] column value.
     *
     * @return int
     */
    public function getROpTaskTypeDelta()
    {

        return $this->r_op_task_type_delta;
    }

    /**
     * Get the [r_op_task_type_rappel] column value.
     *
     * @return int
     */
    public function getROpTaskTypeRappel()
    {

        return $this->r_op_task_type_rappel;
    }

    /**
     * Get the [r_op_task_type_assign_to_user] column value.
     *
     * @return int
     */
    public function getROpTaskTypeAssignToUser()
    {

        return $this->r_op_task_type_assign_to_user;
    }

    /**
     * Get the [r_op_task_type_notify_to_user] column value.
     *
     * @return int
     */
    public function getROpTaskTypeNotifyToUser()
    {

        return $this->r_op_task_type_notify_to_user;
    }

    /**
     * Get the [r_op_task_type_assign_to_group] column value.
     *
     * @return int
     */
    public function getROpTaskTypeAssignToGroup()
    {

        return $this->r_op_task_type_assign_to_group;
    }

    /**
     * Get the [r_op_task_type_notify_to_group] column value.
     *
     * @return int
     */
    public function getROpTaskTypeNotifyToGroup()
    {

        return $this->r_op_task_type_notify_to_group;
    }

    /**
     * Get the [r_op_task_type_assign_to_cp] column value.
     *
     * @return boolean
     */
    public function getROpTaskTypeAssignToCp()
    {

        return $this->r_op_task_type_assign_to_cp;
    }

    /**
     * Get the [r_op_task_type_assign_to_dc] column value.
     *
     * @return boolean
     */
    public function getROpTaskTypeAssignToDc()
    {

        return $this->r_op_task_type_assign_to_dc;
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
     * Set the value of [r_op_task_type_id] column.
     *
     * @param  int $v new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_task_type_id !== $v) {
                    $this->r_op_task_type_id = $v;
                    $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_ID;
                }


        return $this;
    } // setROpTaskTypeId()

    /**
     * Set the value of [r_op_task_type_libelle] column.
     *
     * @param  string $v new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_op_task_type_libelle !== $v) {
            $this->r_op_task_type_libelle = $v;
            $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_LIBELLE;
        }


        return $this;
    } // setROpTaskTypeLibelle()

    /**
     * Set the value of [r_op_task_type_date_ref] column.
     *
     * @param  int $v new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeDateRef($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_task_type_date_ref !== $v) {
                    $this->r_op_task_type_date_ref = $v;
                    $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF;
                }


        return $this;
    } // setROpTaskTypeDateRef()

    /**
     * Set the value of [r_op_task_type_delta] column.
     *
     * @param  int $v new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeDelta($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_task_type_delta !== $v) {
                    $this->r_op_task_type_delta = $v;
                    $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA;
                }


        return $this;
    } // setROpTaskTypeDelta()

    /**
     * Set the value of [r_op_task_type_rappel] column.
     *
     * @param  int $v new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeRappel($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_task_type_rappel !== $v) {
                    $this->r_op_task_type_rappel = $v;
                    $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL;
                }


        return $this;
    } // setROpTaskTypeRappel()

    /**
     * Set the value of [r_op_task_type_assign_to_user] column.
     *
     * @param  int $v new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeAssignToUser($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_task_type_assign_to_user !== $v) {
                    $this->r_op_task_type_assign_to_user = $v;
                    $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER;
                }


        return $this;
    } // setROpTaskTypeAssignToUser()

    /**
     * Set the value of [r_op_task_type_notify_to_user] column.
     *
     * @param  int $v new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeNotifyToUser($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_task_type_notify_to_user !== $v) {
                    $this->r_op_task_type_notify_to_user = $v;
                    $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER;
                }


        return $this;
    } // setROpTaskTypeNotifyToUser()

    /**
     * Set the value of [r_op_task_type_assign_to_group] column.
     *
     * @param  int $v new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeAssignToGroup($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_task_type_assign_to_group !== $v) {
                    $this->r_op_task_type_assign_to_group = $v;
                    $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP;
                }


        return $this;
    } // setROpTaskTypeAssignToGroup()

    /**
     * Set the value of [r_op_task_type_notify_to_group] column.
     *
     * @param  int $v new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeNotifyToGroup($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_task_type_notify_to_group !== $v) {
                    $this->r_op_task_type_notify_to_group = $v;
                    $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP;
                }


        return $this;
    } // setROpTaskTypeNotifyToGroup()

    /**
     * Sets the value of the [r_op_task_type_assign_to_cp] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeAssignToCp($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_op_task_type_assign_to_cp !== $v) {
            $this->r_op_task_type_assign_to_cp = $v;
            $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_CP;
        }


        return $this;
    } // setROpTaskTypeAssignToCp()

    /**
     * Sets the value of the [r_op_task_type_assign_to_dc] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setROpTaskTypeAssignToDc($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_op_task_type_assign_to_dc !== $v) {
            $this->r_op_task_type_assign_to_dc = $v;
            $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_DC;
        }


        return $this;
    } // setROpTaskTypeAssignToDc()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return ROperationTasksType The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ROperationTasksTypePeer::USER_ID;
                }


        return $this;
    } // setUserId()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = ROperationTasksTypePeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ROperationTasksType The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = ROperationTasksTypePeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

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
            if ($this->r_op_task_type_rappel !== 0) {
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

            $this->r_op_task_type_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_op_task_type_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_op_task_type_date_ref = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->r_op_task_type_delta = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->r_op_task_type_rappel = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->r_op_task_type_assign_to_user = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->r_op_task_type_notify_to_user = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->r_op_task_type_assign_to_group = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->r_op_task_type_notify_to_group = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->r_op_task_type_assign_to_cp = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
            $this->r_op_task_type_assign_to_dc = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->user_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->date_create = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->date_modify = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = ROperationTasksTypePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ROperationTasksType object", $e);
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
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ROperationTasksTypePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ROperationTasksTypeQuery::create()
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
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setDateCreate(time());
                
                                $this->setUserId(Zend_Auth::getInstance()->getStorage()->read()->getUserId());

            } else {
                $ret = $ret && $this->preUpdate($con);
                // log behavior
                
                                $this->setDateModify(time());

            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ROperationTasksTypePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ROperationTasksTypePeer::R_OP_TASK_TYPE_ID;
        if (null !== $this->r_op_task_type_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ROperationTasksTypePeer::R_OP_TASK_TYPE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_id`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_libelle`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_date_ref`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_delta`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_rappel`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_assign_to_user`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_notify_to_user`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_assign_to_group`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_notify_to_group`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_CP)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_assign_to_cp`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_DC)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_task_type_assign_to_dc`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(ROperationTasksTypePeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }

        $sql = sprintf(
            'INSERT INTO `r_operation_tasks_type` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_op_task_type_id`':
                        $stmt->bindValue($identifier, $this->r_op_task_type_id, PDO::PARAM_INT);
                        break;
                    case '`r_op_task_type_libelle`':
                        $stmt->bindValue($identifier, $this->r_op_task_type_libelle, PDO::PARAM_STR);
                        break;
                    case '`r_op_task_type_date_ref`':
                        $stmt->bindValue($identifier, $this->r_op_task_type_date_ref, PDO::PARAM_INT);
                        break;
                    case '`r_op_task_type_delta`':
                        $stmt->bindValue($identifier, $this->r_op_task_type_delta, PDO::PARAM_INT);
                        break;
                    case '`r_op_task_type_rappel`':
                        $stmt->bindValue($identifier, $this->r_op_task_type_rappel, PDO::PARAM_INT);
                        break;
                    case '`r_op_task_type_assign_to_user`':
                        $stmt->bindValue($identifier, $this->r_op_task_type_assign_to_user, PDO::PARAM_INT);
                        break;
                    case '`r_op_task_type_notify_to_user`':
                        $stmt->bindValue($identifier, $this->r_op_task_type_notify_to_user, PDO::PARAM_INT);
                        break;
                    case '`r_op_task_type_assign_to_group`':
                        $stmt->bindValue($identifier, $this->r_op_task_type_assign_to_group, PDO::PARAM_INT);
                        break;
                    case '`r_op_task_type_notify_to_group`':
                        $stmt->bindValue($identifier, $this->r_op_task_type_notify_to_group, PDO::PARAM_INT);
                        break;
                    case '`r_op_task_type_assign_to_cp`':
                        $stmt->bindValue($identifier, (int) $this->r_op_task_type_assign_to_cp, PDO::PARAM_INT);
                        break;
                    case '`r_op_task_type_assign_to_dc`':
                        $stmt->bindValue($identifier, (int) $this->r_op_task_type_assign_to_dc, PDO::PARAM_INT);
                        break;
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`date_modify`':
                        $stmt->bindValue($identifier, $this->date_modify, PDO::PARAM_STR);
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
        $this->setROpTaskTypeId($pk);

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


            if (($retval = ROperationTasksTypePeer::doValidate($this, $columns)) !== true) {
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
        $pos = ROperationTasksTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getROpTaskTypeId();
                break;
            case 1:
                return $this->getROpTaskTypeLibelle();
                break;
            case 2:
                return $this->getROpTaskTypeDateRef();
                break;
            case 3:
                return $this->getROpTaskTypeDelta();
                break;
            case 4:
                return $this->getROpTaskTypeRappel();
                break;
            case 5:
                return $this->getROpTaskTypeAssignToUser();
                break;
            case 6:
                return $this->getROpTaskTypeNotifyToUser();
                break;
            case 7:
                return $this->getROpTaskTypeAssignToGroup();
                break;
            case 8:
                return $this->getROpTaskTypeNotifyToGroup();
                break;
            case 9:
                return $this->getROpTaskTypeAssignToCp();
                break;
            case 10:
                return $this->getROpTaskTypeAssignToDc();
                break;
            case 11:
                return $this->getUserId();
                break;
            case 12:
                return $this->getDateCreate();
                break;
            case 13:
                return $this->getDateModify();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['ROperationTasksType'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ROperationTasksType'][$this->getPrimaryKey()] = true;
        $keys = ROperationTasksTypePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getROpTaskTypeId(),
            $keys[1] => $this->getROpTaskTypeLibelle(),
            $keys[2] => $this->getROpTaskTypeDateRef(),
            $keys[3] => $this->getROpTaskTypeDelta(),
            $keys[4] => $this->getROpTaskTypeRappel(),
            $keys[5] => $this->getROpTaskTypeAssignToUser(),
            $keys[6] => $this->getROpTaskTypeNotifyToUser(),
            $keys[7] => $this->getROpTaskTypeAssignToGroup(),
            $keys[8] => $this->getROpTaskTypeNotifyToGroup(),
            $keys[9] => $this->getROpTaskTypeAssignToCp(),
            $keys[10] => $this->getROpTaskTypeAssignToDc(),
            $keys[11] => $this->getUserId(),
            $keys[12] => $this->getDateCreate(),
            $keys[13] => $this->getDateModify(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
        $pos = ROperationTasksTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setROpTaskTypeId($value);
                break;
            case 1:
                $this->setROpTaskTypeLibelle($value);
                break;
            case 2:
                $this->setROpTaskTypeDateRef($value);
                break;
            case 3:
                $this->setROpTaskTypeDelta($value);
                break;
            case 4:
                $this->setROpTaskTypeRappel($value);
                break;
            case 5:
                $this->setROpTaskTypeAssignToUser($value);
                break;
            case 6:
                $this->setROpTaskTypeNotifyToUser($value);
                break;
            case 7:
                $this->setROpTaskTypeAssignToGroup($value);
                break;
            case 8:
                $this->setROpTaskTypeNotifyToGroup($value);
                break;
            case 9:
                $this->setROpTaskTypeAssignToCp($value);
                break;
            case 10:
                $this->setROpTaskTypeAssignToDc($value);
                break;
            case 11:
                $this->setUserId($value);
                break;
            case 12:
                $this->setDateCreate($value);
                break;
            case 13:
                $this->setDateModify($value);
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
        $keys = ROperationTasksTypePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setROpTaskTypeId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setROpTaskTypeLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setROpTaskTypeDateRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setROpTaskTypeDelta($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setROpTaskTypeRappel($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setROpTaskTypeAssignToUser($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setROpTaskTypeNotifyToUser($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setROpTaskTypeAssignToGroup($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setROpTaskTypeNotifyToGroup($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setROpTaskTypeAssignToCp($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setROpTaskTypeAssignToDc($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setUserId($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateCreate($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDateModify($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ROperationTasksTypePeer::DATABASE_NAME);

        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $this->r_op_task_type_id);
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_LIBELLE)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_LIBELLE, $this->r_op_task_type_libelle);
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF, $this->r_op_task_type_date_ref);
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA, $this->r_op_task_type_delta);
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL, $this->r_op_task_type_rappel);
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER, $this->r_op_task_type_assign_to_user);
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER, $this->r_op_task_type_notify_to_user);
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP, $this->r_op_task_type_assign_to_group);
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP, $this->r_op_task_type_notify_to_group);
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_CP)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_CP, $this->r_op_task_type_assign_to_cp);
        if ($this->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_DC)) $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_DC, $this->r_op_task_type_assign_to_dc);
        if ($this->isColumnModified(ROperationTasksTypePeer::USER_ID)) $criteria->add(ROperationTasksTypePeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(ROperationTasksTypePeer::DATE_CREATE)) $criteria->add(ROperationTasksTypePeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(ROperationTasksTypePeer::DATE_MODIFY)) $criteria->add(ROperationTasksTypePeer::DATE_MODIFY, $this->date_modify);

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
        $criteria = new Criteria(ROperationTasksTypePeer::DATABASE_NAME);
        $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $this->r_op_task_type_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getROpTaskTypeId();
    }

    /**
     * Generic method to set the primary key (r_op_task_type_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setROpTaskTypeId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getROpTaskTypeId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ROperationTasksType (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setROpTaskTypeLibelle($this->getROpTaskTypeLibelle());
        $copyObj->setROpTaskTypeDateRef($this->getROpTaskTypeDateRef());
        $copyObj->setROpTaskTypeDelta($this->getROpTaskTypeDelta());
        $copyObj->setROpTaskTypeRappel($this->getROpTaskTypeRappel());
        $copyObj->setROpTaskTypeAssignToUser($this->getROpTaskTypeAssignToUser());
        $copyObj->setROpTaskTypeNotifyToUser($this->getROpTaskTypeNotifyToUser());
        $copyObj->setROpTaskTypeAssignToGroup($this->getROpTaskTypeAssignToGroup());
        $copyObj->setROpTaskTypeNotifyToGroup($this->getROpTaskTypeNotifyToGroup());
        $copyObj->setROpTaskTypeAssignToCp($this->getROpTaskTypeAssignToCp());
        $copyObj->setROpTaskTypeAssignToDc($this->getROpTaskTypeAssignToDc());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setDateModify($this->getDateModify());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setROpTaskTypeId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ROperationTasksType Clone of current object.
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
     * @return ROperationTasksTypePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ROperationTasksTypePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_op_task_type_id = null;
        $this->r_op_task_type_libelle = null;
        $this->r_op_task_type_date_ref = null;
        $this->r_op_task_type_delta = null;
        $this->r_op_task_type_rappel = null;
        $this->r_op_task_type_assign_to_user = null;
        $this->r_op_task_type_notify_to_user = null;
        $this->r_op_task_type_assign_to_group = null;
        $this->r_op_task_type_notify_to_group = null;
        $this->r_op_task_type_assign_to_cp = null;
        $this->r_op_task_type_assign_to_dc = null;
        $this->user_id = null;
        $this->date_create = null;
        $this->date_modify = null;
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ROperationTasksTypePeer::DEFAULT_STRING_FORMAT);
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
                return BaseROperationTasksTypePeer::getConnection();
            }
}
