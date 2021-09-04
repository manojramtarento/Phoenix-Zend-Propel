<?php


/**
 * Base class that represents a row from the 'operations_ext' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationsExt extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationsExtPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationsExtPeer
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
     * The value for the opt_stat_hide_bilan_financier field.
     * @var        boolean
     */
    protected $opt_stat_hide_bilan_financier;

    /**
     * The value for the opt_sync_task_date field.
     * @var        string
     */
    protected $opt_sync_task_date;

    /**
     * The value for the opt_sync_gedelog_date field.
     * @var        string
     */
    protected $opt_sync_gedelog_date;

    /**
     * The value for the opt_sync_task_user_id field.
     * @var        int
     */
    protected $opt_sync_task_user_id;

    /**
     * The value for the opt_sync_gedelog_user_id field.
     * @var        int
     */
    protected $opt_sync_gedelog_user_id;

    /**
     * @var        Operations one-to-one related Operations object
     */
    protected $singleOperations;

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
     * Get the [op_id] column value.
     *
     * @return int
     */
    public function getOpId()
    {

        return $this->op_id;
    }

    /**
     * Get the [opt_stat_hide_bilan_financier] column value.
     *
     * @return boolean
     */
    public function getOptStatHideBilanFinancier()
    {

        return $this->opt_stat_hide_bilan_financier;
    }

    /**
     * Get the [optionally formatted] temporal [opt_sync_task_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOptSyncTaskDate($format = 'Y-m-d H:i:s')
    {
        if ($this->opt_sync_task_date === null) {
            return null;
        }

        if ($this->opt_sync_task_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->opt_sync_task_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->opt_sync_task_date, true), $x);
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
     * Get the [optionally formatted] temporal [opt_sync_gedelog_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOptSyncGedelogDate($format = 'Y-m-d H:i:s')
    {
        if ($this->opt_sync_gedelog_date === null) {
            return null;
        }

        if ($this->opt_sync_gedelog_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->opt_sync_gedelog_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->opt_sync_gedelog_date, true), $x);
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
     * Get the [opt_sync_task_user_id] column value.
     *
     * @return int
     */
    public function getOptSyncTaskUserId()
    {

        return $this->opt_sync_task_user_id;
    }

    /**
     * Get the [opt_sync_gedelog_user_id] column value.
     *
     * @return int
     */
    public function getOptSyncGedelogUserId()
    {

        return $this->opt_sync_gedelog_user_id;
    }

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return OperationsExt The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationsExtPeer::OP_ID;
                }


        return $this;
    } // setOpId()

    /**
     * Sets the value of the [opt_stat_hide_bilan_financier] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return OperationsExt The current object (for fluent API support)
     */
    public function setOptStatHideBilanFinancier($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->opt_stat_hide_bilan_financier !== $v) {
            $this->opt_stat_hide_bilan_financier = $v;
            $this->modifiedColumns[] = OperationsExtPeer::OPT_STAT_HIDE_BILAN_FINANCIER;
        }


        return $this;
    } // setOptStatHideBilanFinancier()

    /**
     * Sets the value of [opt_sync_task_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationsExt The current object (for fluent API support)
     */
    public function setOptSyncTaskDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->opt_sync_task_date !== null || $dt !== null) {
            $currentDateAsString = ($this->opt_sync_task_date !== null && $tmpDt = new DateTime($this->opt_sync_task_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->opt_sync_task_date = $newDateAsString;
                $this->modifiedColumns[] = OperationsExtPeer::OPT_SYNC_TASK_DATE;
            }
        } // if either are not null


        return $this;
    } // setOptSyncTaskDate()

    /**
     * Sets the value of [opt_sync_gedelog_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationsExt The current object (for fluent API support)
     */
    public function setOptSyncGedelogDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->opt_sync_gedelog_date !== null || $dt !== null) {
            $currentDateAsString = ($this->opt_sync_gedelog_date !== null && $tmpDt = new DateTime($this->opt_sync_gedelog_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->opt_sync_gedelog_date = $newDateAsString;
                $this->modifiedColumns[] = OperationsExtPeer::OPT_SYNC_GEDELOG_DATE;
            }
        } // if either are not null


        return $this;
    } // setOptSyncGedelogDate()

    /**
     * Set the value of [opt_sync_task_user_id] column.
     *
     * @param  int $v new value
     * @return OperationsExt The current object (for fluent API support)
     */
    public function setOptSyncTaskUserId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->opt_sync_task_user_id !== $v) {
                    $this->opt_sync_task_user_id = $v;
                    $this->modifiedColumns[] = OperationsExtPeer::OPT_SYNC_TASK_USER_ID;
                }


        return $this;
    } // setOptSyncTaskUserId()

    /**
     * Set the value of [opt_sync_gedelog_user_id] column.
     *
     * @param  int $v new value
     * @return OperationsExt The current object (for fluent API support)
     */
    public function setOptSyncGedelogUserId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->opt_sync_gedelog_user_id !== $v) {
                    $this->opt_sync_gedelog_user_id = $v;
                    $this->modifiedColumns[] = OperationsExtPeer::OPT_SYNC_GEDELOG_USER_ID;
                }


        return $this;
    } // setOptSyncGedelogUserId()

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

            $this->op_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->opt_stat_hide_bilan_financier = ($row[$startcol + 1] !== null) ? (boolean) $row[$startcol + 1] : null;
            $this->opt_sync_task_date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->opt_sync_gedelog_date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->opt_sync_task_user_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->opt_sync_gedelog_user_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = OperationsExtPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OperationsExt object", $e);
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
            $con = Propel::getConnection(OperationsExtPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationsExtPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->singleOperations = null;

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
            $con = Propel::getConnection(OperationsExtPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationsExtQuery::create()
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
            $con = Propel::getConnection(OperationsExtPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OperationsExtPeer::addInstanceToPool($this);
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

            if ($this->singleOperations !== null) {
                if (!$this->singleOperations->isDeleted() && ($this->singleOperations->isNew() || $this->singleOperations->isModified())) {
                        $affectedRows += $this->singleOperations->save($con);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationsExtPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(OperationsExtPeer::OPT_STAT_HIDE_BILAN_FINANCIER)) {
            $modifiedColumns[':p' . $index++]  = '`opt_stat_hide_bilan_financier`';
        }
        if ($this->isColumnModified(OperationsExtPeer::OPT_SYNC_TASK_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`opt_sync_task_date`';
        }
        if ($this->isColumnModified(OperationsExtPeer::OPT_SYNC_GEDELOG_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`opt_sync_gedelog_date`';
        }
        if ($this->isColumnModified(OperationsExtPeer::OPT_SYNC_TASK_USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`opt_sync_task_user_id`';
        }
        if ($this->isColumnModified(OperationsExtPeer::OPT_SYNC_GEDELOG_USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`opt_sync_gedelog_user_id`';
        }

        $sql = sprintf(
            'INSERT INTO `operations_ext` (%s) VALUES (%s)',
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
                    case '`opt_stat_hide_bilan_financier`':
                        $stmt->bindValue($identifier, (int) $this->opt_stat_hide_bilan_financier, PDO::PARAM_INT);
                        break;
                    case '`opt_sync_task_date`':
                        $stmt->bindValue($identifier, $this->opt_sync_task_date, PDO::PARAM_STR);
                        break;
                    case '`opt_sync_gedelog_date`':
                        $stmt->bindValue($identifier, $this->opt_sync_gedelog_date, PDO::PARAM_STR);
                        break;
                    case '`opt_sync_task_user_id`':
                        $stmt->bindValue($identifier, $this->opt_sync_task_user_id, PDO::PARAM_INT);
                        break;
                    case '`opt_sync_gedelog_user_id`':
                        $stmt->bindValue($identifier, $this->opt_sync_gedelog_user_id, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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


            if (($retval = OperationsExtPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->singleOperations !== null) {
                    if (!$this->singleOperations->validate($columns)) {
                        $failureMap = array_merge($failureMap, $this->singleOperations->getValidationFailures());
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
        $pos = OperationsExtPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOptStatHideBilanFinancier();
                break;
            case 2:
                return $this->getOptSyncTaskDate();
                break;
            case 3:
                return $this->getOptSyncGedelogDate();
                break;
            case 4:
                return $this->getOptSyncTaskUserId();
                break;
            case 5:
                return $this->getOptSyncGedelogUserId();
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
        if (isset($alreadyDumpedObjects['OperationsExt'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OperationsExt'][$this->getPrimaryKey()] = true;
        $keys = OperationsExtPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOpId(),
            $keys[1] => $this->getOptStatHideBilanFinancier(),
            $keys[2] => $this->getOptSyncTaskDate(),
            $keys[3] => $this->getOptSyncGedelogDate(),
            $keys[4] => $this->getOptSyncTaskUserId(),
            $keys[5] => $this->getOptSyncGedelogUserId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->singleOperations) {
                $result['Operations'] = $this->singleOperations->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
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
        $pos = OperationsExtPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOptStatHideBilanFinancier($value);
                break;
            case 2:
                $this->setOptSyncTaskDate($value);
                break;
            case 3:
                $this->setOptSyncGedelogDate($value);
                break;
            case 4:
                $this->setOptSyncTaskUserId($value);
                break;
            case 5:
                $this->setOptSyncGedelogUserId($value);
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
        $keys = OperationsExtPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOpId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOptStatHideBilanFinancier($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOptSyncTaskDate($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOptSyncGedelogDate($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOptSyncTaskUserId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOptSyncGedelogUserId($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationsExtPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationsExtPeer::OP_ID)) $criteria->add(OperationsExtPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(OperationsExtPeer::OPT_STAT_HIDE_BILAN_FINANCIER)) $criteria->add(OperationsExtPeer::OPT_STAT_HIDE_BILAN_FINANCIER, $this->opt_stat_hide_bilan_financier);
        if ($this->isColumnModified(OperationsExtPeer::OPT_SYNC_TASK_DATE)) $criteria->add(OperationsExtPeer::OPT_SYNC_TASK_DATE, $this->opt_sync_task_date);
        if ($this->isColumnModified(OperationsExtPeer::OPT_SYNC_GEDELOG_DATE)) $criteria->add(OperationsExtPeer::OPT_SYNC_GEDELOG_DATE, $this->opt_sync_gedelog_date);
        if ($this->isColumnModified(OperationsExtPeer::OPT_SYNC_TASK_USER_ID)) $criteria->add(OperationsExtPeer::OPT_SYNC_TASK_USER_ID, $this->opt_sync_task_user_id);
        if ($this->isColumnModified(OperationsExtPeer::OPT_SYNC_GEDELOG_USER_ID)) $criteria->add(OperationsExtPeer::OPT_SYNC_GEDELOG_USER_ID, $this->opt_sync_gedelog_user_id);

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
        $criteria = new Criteria(OperationsExtPeer::DATABASE_NAME);
        $criteria->add(OperationsExtPeer::OP_ID, $this->op_id);

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
     * @param object $copyObj An object of OperationsExt (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOptStatHideBilanFinancier($this->getOptStatHideBilanFinancier());
        $copyObj->setOptSyncTaskDate($this->getOptSyncTaskDate());
        $copyObj->setOptSyncGedelogDate($this->getOptSyncGedelogDate());
        $copyObj->setOptSyncTaskUserId($this->getOptSyncTaskUserId());
        $copyObj->setOptSyncGedelogUserId($this->getOptSyncGedelogUserId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            $relObj = $this->getOperations();
            if ($relObj) {
                $copyObj->setOperations($relObj->copy($deepCopy));
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
     * @return OperationsExt Clone of current object.
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
     * @return OperationsExtPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationsExtPeer();
        }

        return self::$peer;
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
    }

    /**
     * Gets a single Operations object, which is related to this object by a one-to-one relationship.
     *
     * @param PropelPDO $con optional connection object
     * @return Operations
     * @throws PropelException
     */
    public function getOperations(PropelPDO $con = null)
    {

        if ($this->singleOperations === null && !$this->isNew()) {
            $this->singleOperations = OperationsQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleOperations;
    }

    /**
     * Sets a single Operations object as related to this object by a one-to-one relationship.
     *
     * @param                  Operations $v Operations
     * @return OperationsExt The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperations(Operations $v = null)
    {
        $this->singleOperations = $v;

        // Make sure that that the passed-in Operations isn't already associated with this object
        if ($v !== null && $v->getOperationsExt(null, false) === null) {
            $v->setOperationsExt($this);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->op_id = null;
        $this->opt_stat_hide_bilan_financier = null;
        $this->opt_sync_task_date = null;
        $this->opt_sync_gedelog_date = null;
        $this->opt_sync_task_user_id = null;
        $this->opt_sync_gedelog_user_id = null;
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
            if ($this->singleOperations) {
                $this->singleOperations->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->singleOperations instanceof PropelCollection) {
            $this->singleOperations->clearIterator();
        }
        $this->singleOperations = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OperationsExtPeer::DEFAULT_STRING_FORMAT);
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
                return BaseOperationsExtPeer::getConnection();
            }
}
