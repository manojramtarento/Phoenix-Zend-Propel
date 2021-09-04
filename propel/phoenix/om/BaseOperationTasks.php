<?php


/**
 * Base class that represents a row from the 'operation_tasks' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationTasks extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationTasksPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationTasksPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the op_task_id field.
     * @var        int
     */
    protected $op_task_id;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the op_task_type_id field.
     * @var        int
     */
    protected $op_task_type_id;

    /**
     * The value for the op_task_deadline field.
     * @var        string
     */
    protected $op_task_deadline;

    /**
     * The value for the op_task_alerte field.
     * @var        string
     */
    protected $op_task_alerte;

    /**
     * The value for the op_task_retard field.
     * @var        string
     */
    protected $op_task_retard;

    /**
     * The value for the op_task_duree_estim field.
     * @var        int
     */
    protected $op_task_duree_estim;

    /**
     * The value for the op_task_duree_reelle field.
     * @var        int
     */
    protected $op_task_duree_reelle;

    /**
     * The value for the op_task_detail field.
     * @var        string
     */
    protected $op_task_detail;

    /**
     * The value for the op_task_done field.
     * @var        string
     */
    protected $op_task_done;

    /**
     * The value for the op_task_comments field.
     * @var        string
     */
    protected $op_task_comments;

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
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the op_task_assign_to_user field.
     * @var        int
     */
    protected $op_task_assign_to_user;

    /**
     * The value for the op_task_notify_to_user field.
     * @var        int
     */
    protected $op_task_notify_to_user;

    /**
     * The value for the op_task_assign_to_group field.
     * @var        int
     */
    protected $op_task_assign_to_group;

    /**
     * The value for the op_task_notify_to_group field.
     * @var        int
     */
    protected $op_task_notify_to_group;

    /**
     * @var        Operations
     */
    protected $aOperations;

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
     * Get the [op_task_id] column value.
     *
     * @return int
     */
    public function getOpTaskId()
    {

        return $this->op_task_id;
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
     * Get the [op_task_type_id] column value.
     *
     * @return int
     */
    public function getOpTaskTypeId()
    {

        return $this->op_task_type_id;
    }

    /**
     * Get the [optionally formatted] temporal [op_task_deadline] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpTaskDeadline($format = 'Y-m-d H:i:s')
    {
        if ($this->op_task_deadline === null) {
            return null;
        }

        if ($this->op_task_deadline === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_task_deadline);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_task_deadline, true), $x);
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
     * Get the [optionally formatted] temporal [op_task_alerte] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpTaskAlerte($format = 'Y-m-d H:i:s')
    {
        if ($this->op_task_alerte === null) {
            return null;
        }

        if ($this->op_task_alerte === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_task_alerte);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_task_alerte, true), $x);
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
     * Get the [optionally formatted] temporal [op_task_retard] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpTaskRetard($format = 'Y-m-d H:i:s')
    {
        if ($this->op_task_retard === null) {
            return null;
        }

        if ($this->op_task_retard === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_task_retard);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_task_retard, true), $x);
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
     * Get the [op_task_duree_estim] column value.
     *
     * @return int
     */
    public function getOpTaskDureeEstim()
    {

        return $this->op_task_duree_estim;
    }

    /**
     * Get the [op_task_duree_reelle] column value.
     *
     * @return int
     */
    public function getOpTaskDureeReelle()
    {

        return $this->op_task_duree_reelle;
    }

    /**
     * Get the [op_task_detail] column value.
     *
     * @return string
     */
    public function getOpTaskDetail()
    {

        return $this->op_task_detail;
    }

    /**
     * Get the [optionally formatted] temporal [op_task_done] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpTaskDone($format = 'Y-m-d H:i:s')
    {
        if ($this->op_task_done === null) {
            return null;
        }

        if ($this->op_task_done === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_task_done);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_task_done, true), $x);
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
     * Get the [op_task_comments] column value.
     *
     * @return string
     */
    public function getOpTaskComments()
    {

        return $this->op_task_comments;
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
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
    }

    /**
     * Get the [op_task_assign_to_user] column value.
     *
     * @return int
     */
    public function getOpTaskAssignToUser()
    {

        return $this->op_task_assign_to_user;
    }

    /**
     * Get the [op_task_notify_to_user] column value.
     *
     * @return int
     */
    public function getOpTaskNotifyToUser()
    {

        return $this->op_task_notify_to_user;
    }

    /**
     * Get the [op_task_assign_to_group] column value.
     *
     * @return int
     */
    public function getOpTaskAssignToGroup()
    {

        return $this->op_task_assign_to_group;
    }

    /**
     * Get the [op_task_notify_to_group] column value.
     *
     * @return int
     */
    public function getOpTaskNotifyToGroup()
    {

        return $this->op_task_notify_to_group;
    }

    /**
     * Set the value of [op_task_id] column.
     *
     * @param  int $v new value
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_task_id !== $v) {
                    $this->op_task_id = $v;
                    $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_ID;
                }


        return $this;
    } // setOpTaskId()

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return OperationTasks The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationTasksPeer::OP_ID;
                }

        if ($this->aOperations !== null && $this->aOperations->getOpId() !== $v) {
            $this->aOperations = null;
        }


        return $this;
    } // setOpId()

    /**
     * Set the value of [op_task_type_id] column.
     *
     * @param  int $v new value
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_task_type_id !== $v) {
                    $this->op_task_type_id = $v;
                    $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_TYPE_ID;
                }


        return $this;
    } // setOpTaskTypeId()

    /**
     * Sets the value of [op_task_deadline] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskDeadline($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_task_deadline !== null || $dt !== null) {
            $currentDateAsString = ($this->op_task_deadline !== null && $tmpDt = new DateTime($this->op_task_deadline)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_task_deadline = $newDateAsString;
                $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_DEADLINE;
            }
        } // if either are not null


        return $this;
    } // setOpTaskDeadline()

    /**
     * Sets the value of [op_task_alerte] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskAlerte($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_task_alerte !== null || $dt !== null) {
            $currentDateAsString = ($this->op_task_alerte !== null && $tmpDt = new DateTime($this->op_task_alerte)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_task_alerte = $newDateAsString;
                $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_ALERTE;
            }
        } // if either are not null


        return $this;
    } // setOpTaskAlerte()

    /**
     * Sets the value of [op_task_retard] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskRetard($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_task_retard !== null || $dt !== null) {
            $currentDateAsString = ($this->op_task_retard !== null && $tmpDt = new DateTime($this->op_task_retard)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_task_retard = $newDateAsString;
                $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_RETARD;
            }
        } // if either are not null


        return $this;
    } // setOpTaskRetard()

    /**
     * Set the value of [op_task_duree_estim] column.
     *
     * @param  int $v new value
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskDureeEstim($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_task_duree_estim !== $v) {
                    $this->op_task_duree_estim = $v;
                    $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_DUREE_ESTIM;
                }


        return $this;
    } // setOpTaskDureeEstim()

    /**
     * Set the value of [op_task_duree_reelle] column.
     *
     * @param  int $v new value
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskDureeReelle($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_task_duree_reelle !== $v) {
                    $this->op_task_duree_reelle = $v;
                    $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_DUREE_REELLE;
                }


        return $this;
    } // setOpTaskDureeReelle()

    /**
     * Set the value of [op_task_detail] column.
     *
     * @param  string $v new value
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskDetail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_task_detail !== $v) {
            $this->op_task_detail = $v;
            $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_DETAIL;
        }


        return $this;
    } // setOpTaskDetail()

    /**
     * Sets the value of [op_task_done] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskDone($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_task_done !== null || $dt !== null) {
            $currentDateAsString = ($this->op_task_done !== null && $tmpDt = new DateTime($this->op_task_done)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_task_done = $newDateAsString;
                $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_DONE;
            }
        } // if either are not null


        return $this;
    } // setOpTaskDone()

    /**
     * Set the value of [op_task_comments] column.
     *
     * @param  string $v new value
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskComments($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_task_comments !== $v) {
            $this->op_task_comments = $v;
            $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_COMMENTS;
        }


        return $this;
    } // setOpTaskComments()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = OperationTasksPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = OperationTasksPeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return OperationTasks The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationTasksPeer::USER_ID;
                }


        return $this;
    } // setUserId()

    /**
     * Set the value of [op_task_assign_to_user] column.
     *
     * @param  int $v new value
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskAssignToUser($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_task_assign_to_user !== $v) {
                    $this->op_task_assign_to_user = $v;
                    $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_ASSIGN_TO_USER;
                }


        return $this;
    } // setOpTaskAssignToUser()

    /**
     * Set the value of [op_task_notify_to_user] column.
     *
     * @param  int $v new value
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskNotifyToUser($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_task_notify_to_user !== $v) {
                    $this->op_task_notify_to_user = $v;
                    $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_NOTIFY_TO_USER;
                }


        return $this;
    } // setOpTaskNotifyToUser()

    /**
     * Set the value of [op_task_assign_to_group] column.
     *
     * @param  int $v new value
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskAssignToGroup($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_task_assign_to_group !== $v) {
                    $this->op_task_assign_to_group = $v;
                    $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP;
                }


        return $this;
    } // setOpTaskAssignToGroup()

    /**
     * Set the value of [op_task_notify_to_group] column.
     *
     * @param  int $v new value
     * @return OperationTasks The current object (for fluent API support)
     */
    public function setOpTaskNotifyToGroup($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_task_notify_to_group !== $v) {
                    $this->op_task_notify_to_group = $v;
                    $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP;
                }


        return $this;
    } // setOpTaskNotifyToGroup()

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

            $this->op_task_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->op_task_type_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->op_task_deadline = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->op_task_alerte = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->op_task_retard = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->op_task_duree_estim = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->op_task_duree_reelle = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->op_task_detail = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->op_task_done = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->op_task_comments = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_create = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_modify = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->user_id = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->op_task_assign_to_user = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->op_task_notify_to_user = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->op_task_assign_to_group = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->op_task_notify_to_group = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = OperationTasksPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OperationTasks object", $e);
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

        if ($this->aOperations !== null && $this->op_id !== $this->aOperations->getOpId()) {
            $this->aOperations = null;
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
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationTasksPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperations = null;
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
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationTasksQuery::create()
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
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OperationTasksPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = OperationTasksPeer::OP_TASK_ID;
        if (null !== $this->op_task_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OperationTasksPeer::OP_TASK_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_id`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_type_id`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_DEADLINE)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_deadline`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_ALERTE)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_alerte`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_RETARD)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_retard`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_DUREE_ESTIM)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_duree_estim`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_DUREE_REELLE)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_duree_reelle`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_DETAIL)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_detail`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_DONE)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_done`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_comments`';
        }
        if ($this->isColumnModified(OperationTasksPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(OperationTasksPeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }
        if ($this->isColumnModified(OperationTasksPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_ASSIGN_TO_USER)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_assign_to_user`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_NOTIFY_TO_USER)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_notify_to_user`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_assign_to_group`';
        }
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP)) {
            $modifiedColumns[':p' . $index++]  = '`op_task_notify_to_group`';
        }

        $sql = sprintf(
            'INSERT INTO `operation_tasks` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`op_task_id`':
                        $stmt->bindValue($identifier, $this->op_task_id, PDO::PARAM_INT);
                        break;
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`op_task_type_id`':
                        $stmt->bindValue($identifier, $this->op_task_type_id, PDO::PARAM_INT);
                        break;
                    case '`op_task_deadline`':
                        $stmt->bindValue($identifier, $this->op_task_deadline, PDO::PARAM_STR);
                        break;
                    case '`op_task_alerte`':
                        $stmt->bindValue($identifier, $this->op_task_alerte, PDO::PARAM_STR);
                        break;
                    case '`op_task_retard`':
                        $stmt->bindValue($identifier, $this->op_task_retard, PDO::PARAM_STR);
                        break;
                    case '`op_task_duree_estim`':
                        $stmt->bindValue($identifier, $this->op_task_duree_estim, PDO::PARAM_INT);
                        break;
                    case '`op_task_duree_reelle`':
                        $stmt->bindValue($identifier, $this->op_task_duree_reelle, PDO::PARAM_INT);
                        break;
                    case '`op_task_detail`':
                        $stmt->bindValue($identifier, $this->op_task_detail, PDO::PARAM_STR);
                        break;
                    case '`op_task_done`':
                        $stmt->bindValue($identifier, $this->op_task_done, PDO::PARAM_STR);
                        break;
                    case '`op_task_comments`':
                        $stmt->bindValue($identifier, $this->op_task_comments, PDO::PARAM_STR);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`date_modify`':
                        $stmt->bindValue($identifier, $this->date_modify, PDO::PARAM_STR);
                        break;
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`op_task_assign_to_user`':
                        $stmt->bindValue($identifier, $this->op_task_assign_to_user, PDO::PARAM_INT);
                        break;
                    case '`op_task_notify_to_user`':
                        $stmt->bindValue($identifier, $this->op_task_notify_to_user, PDO::PARAM_INT);
                        break;
                    case '`op_task_assign_to_group`':
                        $stmt->bindValue($identifier, $this->op_task_assign_to_group, PDO::PARAM_INT);
                        break;
                    case '`op_task_notify_to_group`':
                        $stmt->bindValue($identifier, $this->op_task_notify_to_group, PDO::PARAM_INT);
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
        $this->setOpTaskId($pk);

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


            if (($retval = OperationTasksPeer::doValidate($this, $columns)) !== true) {
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
        $pos = OperationTasksPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOpTaskId();
                break;
            case 1:
                return $this->getOpId();
                break;
            case 2:
                return $this->getOpTaskTypeId();
                break;
            case 3:
                return $this->getOpTaskDeadline();
                break;
            case 4:
                return $this->getOpTaskAlerte();
                break;
            case 5:
                return $this->getOpTaskRetard();
                break;
            case 6:
                return $this->getOpTaskDureeEstim();
                break;
            case 7:
                return $this->getOpTaskDureeReelle();
                break;
            case 8:
                return $this->getOpTaskDetail();
                break;
            case 9:
                return $this->getOpTaskDone();
                break;
            case 10:
                return $this->getOpTaskComments();
                break;
            case 11:
                return $this->getDateCreate();
                break;
            case 12:
                return $this->getDateModify();
                break;
            case 13:
                return $this->getUserId();
                break;
            case 14:
                return $this->getOpTaskAssignToUser();
                break;
            case 15:
                return $this->getOpTaskNotifyToUser();
                break;
            case 16:
                return $this->getOpTaskAssignToGroup();
                break;
            case 17:
                return $this->getOpTaskNotifyToGroup();
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
        if (isset($alreadyDumpedObjects['OperationTasks'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OperationTasks'][$this->getPrimaryKey()] = true;
        $keys = OperationTasksPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOpTaskId(),
            $keys[1] => $this->getOpId(),
            $keys[2] => $this->getOpTaskTypeId(),
            $keys[3] => $this->getOpTaskDeadline(),
            $keys[4] => $this->getOpTaskAlerte(),
            $keys[5] => $this->getOpTaskRetard(),
            $keys[6] => $this->getOpTaskDureeEstim(),
            $keys[7] => $this->getOpTaskDureeReelle(),
            $keys[8] => $this->getOpTaskDetail(),
            $keys[9] => $this->getOpTaskDone(),
            $keys[10] => $this->getOpTaskComments(),
            $keys[11] => $this->getDateCreate(),
            $keys[12] => $this->getDateModify(),
            $keys[13] => $this->getUserId(),
            $keys[14] => $this->getOpTaskAssignToUser(),
            $keys[15] => $this->getOpTaskNotifyToUser(),
            $keys[16] => $this->getOpTaskAssignToGroup(),
            $keys[17] => $this->getOpTaskNotifyToGroup(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperations) {
                $result['Operations'] = $this->aOperations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = OperationTasksPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOpTaskId($value);
                break;
            case 1:
                $this->setOpId($value);
                break;
            case 2:
                $this->setOpTaskTypeId($value);
                break;
            case 3:
                $this->setOpTaskDeadline($value);
                break;
            case 4:
                $this->setOpTaskAlerte($value);
                break;
            case 5:
                $this->setOpTaskRetard($value);
                break;
            case 6:
                $this->setOpTaskDureeEstim($value);
                break;
            case 7:
                $this->setOpTaskDureeReelle($value);
                break;
            case 8:
                $this->setOpTaskDetail($value);
                break;
            case 9:
                $this->setOpTaskDone($value);
                break;
            case 10:
                $this->setOpTaskComments($value);
                break;
            case 11:
                $this->setDateCreate($value);
                break;
            case 12:
                $this->setDateModify($value);
                break;
            case 13:
                $this->setUserId($value);
                break;
            case 14:
                $this->setOpTaskAssignToUser($value);
                break;
            case 15:
                $this->setOpTaskNotifyToUser($value);
                break;
            case 16:
                $this->setOpTaskAssignToGroup($value);
                break;
            case 17:
                $this->setOpTaskNotifyToGroup($value);
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
        $keys = OperationTasksPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOpTaskId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOpTaskTypeId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOpTaskDeadline($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOpTaskAlerte($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOpTaskRetard($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOpTaskDureeEstim($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOpTaskDureeReelle($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOpTaskDetail($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setOpTaskDone($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setOpTaskComments($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateCreate($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateModify($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setUserId($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOpTaskAssignToUser($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setOpTaskNotifyToUser($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setOpTaskAssignToGroup($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setOpTaskNotifyToGroup($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationTasksPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_ID)) $criteria->add(OperationTasksPeer::OP_TASK_ID, $this->op_task_id);
        if ($this->isColumnModified(OperationTasksPeer::OP_ID)) $criteria->add(OperationTasksPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_TYPE_ID)) $criteria->add(OperationTasksPeer::OP_TASK_TYPE_ID, $this->op_task_type_id);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_DEADLINE)) $criteria->add(OperationTasksPeer::OP_TASK_DEADLINE, $this->op_task_deadline);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_ALERTE)) $criteria->add(OperationTasksPeer::OP_TASK_ALERTE, $this->op_task_alerte);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_RETARD)) $criteria->add(OperationTasksPeer::OP_TASK_RETARD, $this->op_task_retard);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_DUREE_ESTIM)) $criteria->add(OperationTasksPeer::OP_TASK_DUREE_ESTIM, $this->op_task_duree_estim);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_DUREE_REELLE)) $criteria->add(OperationTasksPeer::OP_TASK_DUREE_REELLE, $this->op_task_duree_reelle);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_DETAIL)) $criteria->add(OperationTasksPeer::OP_TASK_DETAIL, $this->op_task_detail);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_DONE)) $criteria->add(OperationTasksPeer::OP_TASK_DONE, $this->op_task_done);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_COMMENTS)) $criteria->add(OperationTasksPeer::OP_TASK_COMMENTS, $this->op_task_comments);
        if ($this->isColumnModified(OperationTasksPeer::DATE_CREATE)) $criteria->add(OperationTasksPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(OperationTasksPeer::DATE_MODIFY)) $criteria->add(OperationTasksPeer::DATE_MODIFY, $this->date_modify);
        if ($this->isColumnModified(OperationTasksPeer::USER_ID)) $criteria->add(OperationTasksPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_ASSIGN_TO_USER)) $criteria->add(OperationTasksPeer::OP_TASK_ASSIGN_TO_USER, $this->op_task_assign_to_user);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_NOTIFY_TO_USER)) $criteria->add(OperationTasksPeer::OP_TASK_NOTIFY_TO_USER, $this->op_task_notify_to_user);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP)) $criteria->add(OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP, $this->op_task_assign_to_group);
        if ($this->isColumnModified(OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP)) $criteria->add(OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP, $this->op_task_notify_to_group);

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
        $criteria = new Criteria(OperationTasksPeer::DATABASE_NAME);
        $criteria->add(OperationTasksPeer::OP_TASK_ID, $this->op_task_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOpTaskId();
    }

    /**
     * Generic method to set the primary key (op_task_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOpTaskId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOpTaskId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of OperationTasks (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpId($this->getOpId());
        $copyObj->setOpTaskTypeId($this->getOpTaskTypeId());
        $copyObj->setOpTaskDeadline($this->getOpTaskDeadline());
        $copyObj->setOpTaskAlerte($this->getOpTaskAlerte());
        $copyObj->setOpTaskRetard($this->getOpTaskRetard());
        $copyObj->setOpTaskDureeEstim($this->getOpTaskDureeEstim());
        $copyObj->setOpTaskDureeReelle($this->getOpTaskDureeReelle());
        $copyObj->setOpTaskDetail($this->getOpTaskDetail());
        $copyObj->setOpTaskDone($this->getOpTaskDone());
        $copyObj->setOpTaskComments($this->getOpTaskComments());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setDateModify($this->getDateModify());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setOpTaskAssignToUser($this->getOpTaskAssignToUser());
        $copyObj->setOpTaskNotifyToUser($this->getOpTaskNotifyToUser());
        $copyObj->setOpTaskAssignToGroup($this->getOpTaskAssignToGroup());
        $copyObj->setOpTaskNotifyToGroup($this->getOpTaskNotifyToGroup());

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
            $copyObj->setOpTaskId(NULL); // this is a auto-increment column, so set to default value
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
     * @return OperationTasks Clone of current object.
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
     * @return OperationTasksPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationTasksPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return OperationTasks The current object (for fluent API support)
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
            $v->addOperationTasks($this);
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
                $this->aOperations->addOperationTaskss($this);
             */
        }

        return $this->aOperations;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->op_task_id = null;
        $this->op_id = null;
        $this->op_task_type_id = null;
        $this->op_task_deadline = null;
        $this->op_task_alerte = null;
        $this->op_task_retard = null;
        $this->op_task_duree_estim = null;
        $this->op_task_duree_reelle = null;
        $this->op_task_detail = null;
        $this->op_task_done = null;
        $this->op_task_comments = null;
        $this->date_create = null;
        $this->date_modify = null;
        $this->user_id = null;
        $this->op_task_assign_to_user = null;
        $this->op_task_notify_to_user = null;
        $this->op_task_assign_to_group = null;
        $this->op_task_notify_to_group = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aOperations = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OperationTasksPeer::DEFAULT_STRING_FORMAT);
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
                return BaseOperationTasksPeer::getConnection();
            }
}
