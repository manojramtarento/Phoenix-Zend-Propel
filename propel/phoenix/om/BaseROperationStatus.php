<?php


/**
 * Base class that represents a row from the 'r_operation_status' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationStatus extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ROperationStatusPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ROperationStatusPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the os_id field.
     * @var        int
     */
    protected $os_id;

    /**
     * The value for the os_libelle field.
     * @var        string
     */
    protected $os_libelle;

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
     * @var        PropelObjectCollection|OperationStatuts[] Collection to store aggregation of OperationStatuts objects.
     */
    protected $collOperationStatutssRelatedByHsOldStatutId;
    protected $collOperationStatutssRelatedByHsOldStatutIdPartial;

    /**
     * @var        PropelObjectCollection|OperationStatuts[] Collection to store aggregation of OperationStatuts objects.
     */
    protected $collOperationStatutssRelatedByHsNewStatutId;
    protected $collOperationStatutssRelatedByHsNewStatutIdPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationss;
    protected $collOperationssPartial;

    /**
     * @var        PropelObjectCollection|ROperationStatusRequiredOptions[] Collection to store aggregation of ROperationStatusRequiredOptions objects.
     */
    protected $collROperationStatusRequiredOptionss;
    protected $collROperationStatusRequiredOptionssPartial;

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
    protected $operationStatutssRelatedByHsOldStatutIdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationStatutssRelatedByHsNewStatutIdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationStatusRequiredOptionssScheduledForDeletion = null;

    /**
     * Get the [os_id] column value.
     *
     * @return int
     */
    public function getOsId()
    {

        return $this->os_id;
    }

    /**
     * Get the [os_libelle] column value.
     *
     * @return string
     */
    public function getOsLibelle()
    {

        return $this->os_libelle;
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
     * Set the value of [os_id] column.
     *
     * @param  int $v new value
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function setOsId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->os_id !== $v) {
                    $this->os_id = $v;
                    $this->modifiedColumns[] = ROperationStatusPeer::OS_ID;
                }


        return $this;
    } // setOsId()

    /**
     * Set the value of [os_libelle] column.
     *
     * @param  string $v new value
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function setOsLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->os_libelle !== $v) {
            $this->os_libelle = $v;
            $this->modifiedColumns[] = ROperationStatusPeer::OS_LIBELLE;
        }


        return $this;
    } // setOsLibelle()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return ROperationStatus The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ROperationStatusPeer::USER_ID;
                }


        return $this;
    } // setUserId()

    /**
     * Set the value of [user_modify] column.
     *
     * @param  int $v new value
     * @return ROperationStatus The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ROperationStatusPeer::USER_MODIFY;
                }


        return $this;
    } // setUserModify()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = ROperationStatusPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = ROperationStatusPeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

    /**
     * Set the value of [actif] column.
     *
     * @param  int $v new value
     * @return ROperationStatus The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ROperationStatusPeer::ACTIF;
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

            $this->os_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->os_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->user_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->user_modify = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->date_create = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_modify = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->actif = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = ROperationStatusPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ROperationStatus object", $e);
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
            $con = Propel::getConnection(ROperationStatusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ROperationStatusPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collOperationStatutssRelatedByHsOldStatutId = null;

            $this->collOperationStatutssRelatedByHsNewStatutId = null;

            $this->collOperationss = null;

            $this->collROperationStatusRequiredOptionss = null;

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
            $con = Propel::getConnection(ROperationStatusPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ROperationStatusQuery::create()
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
            $con = Propel::getConnection(ROperationStatusPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ROperationStatusPeer::addInstanceToPool($this);
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

            if ($this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion !== null) {
                if (!$this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion as $operationStatutsRelatedByHsOldStatutId) {
                        // need to save related object because we set the relation to null
                        $operationStatutsRelatedByHsOldStatutId->save($con);
                    }
                    $this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion = null;
                }
            }

            if ($this->collOperationStatutssRelatedByHsOldStatutId !== null) {
                foreach ($this->collOperationStatutssRelatedByHsOldStatutId as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion !== null) {
                if (!$this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion as $operationStatutsRelatedByHsNewStatutId) {
                        // need to save related object because we set the relation to null
                        $operationStatutsRelatedByHsNewStatutId->save($con);
                    }
                    $this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion = null;
                }
            }

            if ($this->collOperationStatutssRelatedByHsNewStatutId !== null) {
                foreach ($this->collOperationStatutssRelatedByHsNewStatutId as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationssScheduledForDeletion !== null) {
                if (!$this->operationssScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationssScheduledForDeletion as $operations) {
                        // need to save related object because we set the relation to null
                        $operations->save($con);
                    }
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

            if ($this->rOperationStatusRequiredOptionssScheduledForDeletion !== null) {
                if (!$this->rOperationStatusRequiredOptionssScheduledForDeletion->isEmpty()) {
                    ROperationStatusRequiredOptionsQuery::create()
                        ->filterByPrimaryKeys($this->rOperationStatusRequiredOptionssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->rOperationStatusRequiredOptionssScheduledForDeletion = null;
                }
            }

            if ($this->collROperationStatusRequiredOptionss !== null) {
                foreach ($this->collROperationStatusRequiredOptionss as $referrerFK) {
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ROperationStatusPeer::OS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`os_id`';
        }
        if ($this->isColumnModified(ROperationStatusPeer::OS_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`os_libelle`';
        }
        if ($this->isColumnModified(ROperationStatusPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(ROperationStatusPeer::USER_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`user_modify`';
        }
        if ($this->isColumnModified(ROperationStatusPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(ROperationStatusPeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }
        if ($this->isColumnModified(ROperationStatusPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }

        $sql = sprintf(
            'INSERT INTO `r_operation_status` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`os_id`':
                        $stmt->bindValue($identifier, $this->os_id, PDO::PARAM_INT);
                        break;
                    case '`os_libelle`':
                        $stmt->bindValue($identifier, $this->os_libelle, PDO::PARAM_STR);
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


            if (($retval = ROperationStatusPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOperationStatutssRelatedByHsOldStatutId !== null) {
                    foreach ($this->collOperationStatutssRelatedByHsOldStatutId as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationStatutssRelatedByHsNewStatutId !== null) {
                    foreach ($this->collOperationStatutssRelatedByHsNewStatutId as $referrerFK) {
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

                if ($this->collROperationStatusRequiredOptionss !== null) {
                    foreach ($this->collROperationStatusRequiredOptionss as $referrerFK) {
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
        $pos = ROperationStatusPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOsId();
                break;
            case 1:
                return $this->getOsLibelle();
                break;
            case 2:
                return $this->getUserId();
                break;
            case 3:
                return $this->getUserModify();
                break;
            case 4:
                return $this->getDateCreate();
                break;
            case 5:
                return $this->getDateModify();
                break;
            case 6:
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
        if (isset($alreadyDumpedObjects['ROperationStatus'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ROperationStatus'][$this->getPrimaryKey()] = true;
        $keys = ROperationStatusPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOsId(),
            $keys[1] => $this->getOsLibelle(),
            $keys[2] => $this->getUserId(),
            $keys[3] => $this->getUserModify(),
            $keys[4] => $this->getDateCreate(),
            $keys[5] => $this->getDateModify(),
            $keys[6] => $this->getActif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collOperationStatutssRelatedByHsOldStatutId) {
                $result['OperationStatutssRelatedByHsOldStatutId'] = $this->collOperationStatutssRelatedByHsOldStatutId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationStatutssRelatedByHsNewStatutId) {
                $result['OperationStatutssRelatedByHsNewStatutId'] = $this->collOperationStatutssRelatedByHsNewStatutId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationss) {
                $result['Operationss'] = $this->collOperationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationStatusRequiredOptionss) {
                $result['ROperationStatusRequiredOptionss'] = $this->collROperationStatusRequiredOptionss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ROperationStatusPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOsId($value);
                break;
            case 1:
                $this->setOsLibelle($value);
                break;
            case 2:
                $this->setUserId($value);
                break;
            case 3:
                $this->setUserModify($value);
                break;
            case 4:
                $this->setDateCreate($value);
                break;
            case 5:
                $this->setDateModify($value);
                break;
            case 6:
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
        $keys = ROperationStatusPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOsId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOsLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUserId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUserModify($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDateCreate($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateModify($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setActif($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ROperationStatusPeer::DATABASE_NAME);

        if ($this->isColumnModified(ROperationStatusPeer::OS_ID)) $criteria->add(ROperationStatusPeer::OS_ID, $this->os_id);
        if ($this->isColumnModified(ROperationStatusPeer::OS_LIBELLE)) $criteria->add(ROperationStatusPeer::OS_LIBELLE, $this->os_libelle);
        if ($this->isColumnModified(ROperationStatusPeer::USER_ID)) $criteria->add(ROperationStatusPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(ROperationStatusPeer::USER_MODIFY)) $criteria->add(ROperationStatusPeer::USER_MODIFY, $this->user_modify);
        if ($this->isColumnModified(ROperationStatusPeer::DATE_CREATE)) $criteria->add(ROperationStatusPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(ROperationStatusPeer::DATE_MODIFY)) $criteria->add(ROperationStatusPeer::DATE_MODIFY, $this->date_modify);
        if ($this->isColumnModified(ROperationStatusPeer::ACTIF)) $criteria->add(ROperationStatusPeer::ACTIF, $this->actif);

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
        $criteria = new Criteria(ROperationStatusPeer::DATABASE_NAME);
        $criteria->add(ROperationStatusPeer::OS_ID, $this->os_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOsId();
    }

    /**
     * Generic method to set the primary key (os_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOsId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOsId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ROperationStatus (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOsLibelle($this->getOsLibelle());
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

            foreach ($this->getOperationStatutssRelatedByHsOldStatutId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationStatutsRelatedByHsOldStatutId($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationStatutssRelatedByHsNewStatutId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationStatutsRelatedByHsNewStatutId($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperations($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationStatusRequiredOptionss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationStatusRequiredOptions($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOsId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ROperationStatus Clone of current object.
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
     * @return ROperationStatusPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ROperationStatusPeer();
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
        if ('OperationStatutsRelatedByHsOldStatutId' == $relationName) {
            $this->initOperationStatutssRelatedByHsOldStatutId();
        }
        if ('OperationStatutsRelatedByHsNewStatutId' == $relationName) {
            $this->initOperationStatutssRelatedByHsNewStatutId();
        }
        if ('Operations' == $relationName) {
            $this->initOperationss();
        }
        if ('ROperationStatusRequiredOptions' == $relationName) {
            $this->initROperationStatusRequiredOptionss();
        }
    }

    /**
     * Clears out the collOperationStatutssRelatedByHsOldStatutId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationStatus The current object (for fluent API support)
     * @see        addOperationStatutssRelatedByHsOldStatutId()
     */
    public function clearOperationStatutssRelatedByHsOldStatutId()
    {
        $this->collOperationStatutssRelatedByHsOldStatutId = null; // important to set this to null since that means it is uninitialized
        $this->collOperationStatutssRelatedByHsOldStatutIdPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationStatutssRelatedByHsOldStatutId collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationStatutssRelatedByHsOldStatutId($v = true)
    {
        $this->collOperationStatutssRelatedByHsOldStatutIdPartial = $v;
    }

    /**
     * Initializes the collOperationStatutssRelatedByHsOldStatutId collection.
     *
     * By default this just sets the collOperationStatutssRelatedByHsOldStatutId collection to an empty array (like clearcollOperationStatutssRelatedByHsOldStatutId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationStatutssRelatedByHsOldStatutId($overrideExisting = true)
    {
        if (null !== $this->collOperationStatutssRelatedByHsOldStatutId && !$overrideExisting) {
            return;
        }
        $this->collOperationStatutssRelatedByHsOldStatutId = new PropelObjectCollection();
        $this->collOperationStatutssRelatedByHsOldStatutId->setModel('OperationStatuts');
    }

    /**
     * Gets an array of OperationStatuts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationStatus is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     * @throws PropelException
     */
    public function getOperationStatutssRelatedByHsOldStatutId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationStatutssRelatedByHsOldStatutIdPartial && !$this->isNew();
        if (null === $this->collOperationStatutssRelatedByHsOldStatutId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationStatutssRelatedByHsOldStatutId) {
                // return empty collection
                $this->initOperationStatutssRelatedByHsOldStatutId();
            } else {
                $collOperationStatutssRelatedByHsOldStatutId = OperationStatutsQuery::create(null, $criteria)
                    ->filterByOldROperationStatus($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationStatutssRelatedByHsOldStatutIdPartial && count($collOperationStatutssRelatedByHsOldStatutId)) {
                      $this->initOperationStatutssRelatedByHsOldStatutId(false);

                      foreach ($collOperationStatutssRelatedByHsOldStatutId as $obj) {
                        if (false == $this->collOperationStatutssRelatedByHsOldStatutId->contains($obj)) {
                          $this->collOperationStatutssRelatedByHsOldStatutId->append($obj);
                        }
                      }

                      $this->collOperationStatutssRelatedByHsOldStatutIdPartial = true;
                    }

                    $collOperationStatutssRelatedByHsOldStatutId->getInternalIterator()->rewind();

                    return $collOperationStatutssRelatedByHsOldStatutId;
                }

                if ($partial && $this->collOperationStatutssRelatedByHsOldStatutId) {
                    foreach ($this->collOperationStatutssRelatedByHsOldStatutId as $obj) {
                        if ($obj->isNew()) {
                            $collOperationStatutssRelatedByHsOldStatutId[] = $obj;
                        }
                    }
                }

                $this->collOperationStatutssRelatedByHsOldStatutId = $collOperationStatutssRelatedByHsOldStatutId;
                $this->collOperationStatutssRelatedByHsOldStatutIdPartial = false;
            }
        }

        return $this->collOperationStatutssRelatedByHsOldStatutId;
    }

    /**
     * Sets a collection of OperationStatutsRelatedByHsOldStatutId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationStatutssRelatedByHsOldStatutId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function setOperationStatutssRelatedByHsOldStatutId(PropelCollection $operationStatutssRelatedByHsOldStatutId, PropelPDO $con = null)
    {
        $operationStatutssRelatedByHsOldStatutIdToDelete = $this->getOperationStatutssRelatedByHsOldStatutId(new Criteria(), $con)->diff($operationStatutssRelatedByHsOldStatutId);


        $this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion = $operationStatutssRelatedByHsOldStatutIdToDelete;

        foreach ($operationStatutssRelatedByHsOldStatutIdToDelete as $operationStatutsRelatedByHsOldStatutIdRemoved) {
            $operationStatutsRelatedByHsOldStatutIdRemoved->setOldROperationStatus(null);
        }

        $this->collOperationStatutssRelatedByHsOldStatutId = null;
        foreach ($operationStatutssRelatedByHsOldStatutId as $operationStatutsRelatedByHsOldStatutId) {
            $this->addOperationStatutsRelatedByHsOldStatutId($operationStatutsRelatedByHsOldStatutId);
        }

        $this->collOperationStatutssRelatedByHsOldStatutId = $operationStatutssRelatedByHsOldStatutId;
        $this->collOperationStatutssRelatedByHsOldStatutIdPartial = false;

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
    public function countOperationStatutssRelatedByHsOldStatutId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationStatutssRelatedByHsOldStatutIdPartial && !$this->isNew();
        if (null === $this->collOperationStatutssRelatedByHsOldStatutId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationStatutssRelatedByHsOldStatutId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationStatutssRelatedByHsOldStatutId());
            }
            $query = OperationStatutsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOldROperationStatus($this)
                ->count($con);
        }

        return count($this->collOperationStatutssRelatedByHsOldStatutId);
    }

    /**
     * Method called to associate a OperationStatuts object to this object
     * through the OperationStatuts foreign key attribute.
     *
     * @param    OperationStatuts $l OperationStatuts
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function addOperationStatutsRelatedByHsOldStatutId(OperationStatuts $l)
    {
        if ($this->collOperationStatutssRelatedByHsOldStatutId === null) {
            $this->initOperationStatutssRelatedByHsOldStatutId();
            $this->collOperationStatutssRelatedByHsOldStatutIdPartial = true;
        }

        if (!in_array($l, $this->collOperationStatutssRelatedByHsOldStatutId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationStatutsRelatedByHsOldStatutId($l);

            if ($this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion and $this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion->contains($l)) {
                $this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion->remove($this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationStatutsRelatedByHsOldStatutId $operationStatutsRelatedByHsOldStatutId The operationStatutsRelatedByHsOldStatutId object to add.
     */
    protected function doAddOperationStatutsRelatedByHsOldStatutId($operationStatutsRelatedByHsOldStatutId)
    {
        $this->collOperationStatutssRelatedByHsOldStatutId[]= $operationStatutsRelatedByHsOldStatutId;
        $operationStatutsRelatedByHsOldStatutId->setOldROperationStatus($this);
    }

    /**
     * @param	OperationStatutsRelatedByHsOldStatutId $operationStatutsRelatedByHsOldStatutId The operationStatutsRelatedByHsOldStatutId object to remove.
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function removeOperationStatutsRelatedByHsOldStatutId($operationStatutsRelatedByHsOldStatutId)
    {
        if ($this->getOperationStatutssRelatedByHsOldStatutId()->contains($operationStatutsRelatedByHsOldStatutId)) {
            $this->collOperationStatutssRelatedByHsOldStatutId->remove($this->collOperationStatutssRelatedByHsOldStatutId->search($operationStatutsRelatedByHsOldStatutId));
            if (null === $this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion) {
                $this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion = clone $this->collOperationStatutssRelatedByHsOldStatutId;
                $this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion->clear();
            }
            $this->operationStatutssRelatedByHsOldStatutIdScheduledForDeletion[]= $operationStatutsRelatedByHsOldStatutId;
            $operationStatutsRelatedByHsOldStatutId->setOldROperationStatus(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related OperationStatutssRelatedByHsOldStatutId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssRelatedByHsOldStatutIdJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getOperationStatutssRelatedByHsOldStatutId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related OperationStatutssRelatedByHsOldStatutId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssRelatedByHsOldStatutIdJoinROperationStatutRefus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatutRefus', $join_behavior);

        return $this->getOperationStatutssRelatedByHsOldStatutId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related OperationStatutssRelatedByHsOldStatutId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssRelatedByHsOldStatutIdJoinUsers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('Users', $join_behavior);

        return $this->getOperationStatutssRelatedByHsOldStatutId($query, $con);
    }

    /**
     * Clears out the collOperationStatutssRelatedByHsNewStatutId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationStatus The current object (for fluent API support)
     * @see        addOperationStatutssRelatedByHsNewStatutId()
     */
    public function clearOperationStatutssRelatedByHsNewStatutId()
    {
        $this->collOperationStatutssRelatedByHsNewStatutId = null; // important to set this to null since that means it is uninitialized
        $this->collOperationStatutssRelatedByHsNewStatutIdPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationStatutssRelatedByHsNewStatutId collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationStatutssRelatedByHsNewStatutId($v = true)
    {
        $this->collOperationStatutssRelatedByHsNewStatutIdPartial = $v;
    }

    /**
     * Initializes the collOperationStatutssRelatedByHsNewStatutId collection.
     *
     * By default this just sets the collOperationStatutssRelatedByHsNewStatutId collection to an empty array (like clearcollOperationStatutssRelatedByHsNewStatutId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationStatutssRelatedByHsNewStatutId($overrideExisting = true)
    {
        if (null !== $this->collOperationStatutssRelatedByHsNewStatutId && !$overrideExisting) {
            return;
        }
        $this->collOperationStatutssRelatedByHsNewStatutId = new PropelObjectCollection();
        $this->collOperationStatutssRelatedByHsNewStatutId->setModel('OperationStatuts');
    }

    /**
     * Gets an array of OperationStatuts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationStatus is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     * @throws PropelException
     */
    public function getOperationStatutssRelatedByHsNewStatutId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationStatutssRelatedByHsNewStatutIdPartial && !$this->isNew();
        if (null === $this->collOperationStatutssRelatedByHsNewStatutId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationStatutssRelatedByHsNewStatutId) {
                // return empty collection
                $this->initOperationStatutssRelatedByHsNewStatutId();
            } else {
                $collOperationStatutssRelatedByHsNewStatutId = OperationStatutsQuery::create(null, $criteria)
                    ->filterByNewROperationStatus($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationStatutssRelatedByHsNewStatutIdPartial && count($collOperationStatutssRelatedByHsNewStatutId)) {
                      $this->initOperationStatutssRelatedByHsNewStatutId(false);

                      foreach ($collOperationStatutssRelatedByHsNewStatutId as $obj) {
                        if (false == $this->collOperationStatutssRelatedByHsNewStatutId->contains($obj)) {
                          $this->collOperationStatutssRelatedByHsNewStatutId->append($obj);
                        }
                      }

                      $this->collOperationStatutssRelatedByHsNewStatutIdPartial = true;
                    }

                    $collOperationStatutssRelatedByHsNewStatutId->getInternalIterator()->rewind();

                    return $collOperationStatutssRelatedByHsNewStatutId;
                }

                if ($partial && $this->collOperationStatutssRelatedByHsNewStatutId) {
                    foreach ($this->collOperationStatutssRelatedByHsNewStatutId as $obj) {
                        if ($obj->isNew()) {
                            $collOperationStatutssRelatedByHsNewStatutId[] = $obj;
                        }
                    }
                }

                $this->collOperationStatutssRelatedByHsNewStatutId = $collOperationStatutssRelatedByHsNewStatutId;
                $this->collOperationStatutssRelatedByHsNewStatutIdPartial = false;
            }
        }

        return $this->collOperationStatutssRelatedByHsNewStatutId;
    }

    /**
     * Sets a collection of OperationStatutsRelatedByHsNewStatutId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationStatutssRelatedByHsNewStatutId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function setOperationStatutssRelatedByHsNewStatutId(PropelCollection $operationStatutssRelatedByHsNewStatutId, PropelPDO $con = null)
    {
        $operationStatutssRelatedByHsNewStatutIdToDelete = $this->getOperationStatutssRelatedByHsNewStatutId(new Criteria(), $con)->diff($operationStatutssRelatedByHsNewStatutId);


        $this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion = $operationStatutssRelatedByHsNewStatutIdToDelete;

        foreach ($operationStatutssRelatedByHsNewStatutIdToDelete as $operationStatutsRelatedByHsNewStatutIdRemoved) {
            $operationStatutsRelatedByHsNewStatutIdRemoved->setNewROperationStatus(null);
        }

        $this->collOperationStatutssRelatedByHsNewStatutId = null;
        foreach ($operationStatutssRelatedByHsNewStatutId as $operationStatutsRelatedByHsNewStatutId) {
            $this->addOperationStatutsRelatedByHsNewStatutId($operationStatutsRelatedByHsNewStatutId);
        }

        $this->collOperationStatutssRelatedByHsNewStatutId = $operationStatutssRelatedByHsNewStatutId;
        $this->collOperationStatutssRelatedByHsNewStatutIdPartial = false;

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
    public function countOperationStatutssRelatedByHsNewStatutId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationStatutssRelatedByHsNewStatutIdPartial && !$this->isNew();
        if (null === $this->collOperationStatutssRelatedByHsNewStatutId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationStatutssRelatedByHsNewStatutId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationStatutssRelatedByHsNewStatutId());
            }
            $query = OperationStatutsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByNewROperationStatus($this)
                ->count($con);
        }

        return count($this->collOperationStatutssRelatedByHsNewStatutId);
    }

    /**
     * Method called to associate a OperationStatuts object to this object
     * through the OperationStatuts foreign key attribute.
     *
     * @param    OperationStatuts $l OperationStatuts
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function addOperationStatutsRelatedByHsNewStatutId(OperationStatuts $l)
    {
        if ($this->collOperationStatutssRelatedByHsNewStatutId === null) {
            $this->initOperationStatutssRelatedByHsNewStatutId();
            $this->collOperationStatutssRelatedByHsNewStatutIdPartial = true;
        }

        if (!in_array($l, $this->collOperationStatutssRelatedByHsNewStatutId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationStatutsRelatedByHsNewStatutId($l);

            if ($this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion and $this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion->contains($l)) {
                $this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion->remove($this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationStatutsRelatedByHsNewStatutId $operationStatutsRelatedByHsNewStatutId The operationStatutsRelatedByHsNewStatutId object to add.
     */
    protected function doAddOperationStatutsRelatedByHsNewStatutId($operationStatutsRelatedByHsNewStatutId)
    {
        $this->collOperationStatutssRelatedByHsNewStatutId[]= $operationStatutsRelatedByHsNewStatutId;
        $operationStatutsRelatedByHsNewStatutId->setNewROperationStatus($this);
    }

    /**
     * @param	OperationStatutsRelatedByHsNewStatutId $operationStatutsRelatedByHsNewStatutId The operationStatutsRelatedByHsNewStatutId object to remove.
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function removeOperationStatutsRelatedByHsNewStatutId($operationStatutsRelatedByHsNewStatutId)
    {
        if ($this->getOperationStatutssRelatedByHsNewStatutId()->contains($operationStatutsRelatedByHsNewStatutId)) {
            $this->collOperationStatutssRelatedByHsNewStatutId->remove($this->collOperationStatutssRelatedByHsNewStatutId->search($operationStatutsRelatedByHsNewStatutId));
            if (null === $this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion) {
                $this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion = clone $this->collOperationStatutssRelatedByHsNewStatutId;
                $this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion->clear();
            }
            $this->operationStatutssRelatedByHsNewStatutIdScheduledForDeletion[]= $operationStatutsRelatedByHsNewStatutId;
            $operationStatutsRelatedByHsNewStatutId->setNewROperationStatus(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related OperationStatutssRelatedByHsNewStatutId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssRelatedByHsNewStatutIdJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getOperationStatutssRelatedByHsNewStatutId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related OperationStatutssRelatedByHsNewStatutId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssRelatedByHsNewStatutIdJoinROperationStatutRefus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatutRefus', $join_behavior);

        return $this->getOperationStatutssRelatedByHsNewStatutId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related OperationStatutssRelatedByHsNewStatutId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssRelatedByHsNewStatutIdJoinUsers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('Users', $join_behavior);

        return $this->getOperationStatutssRelatedByHsNewStatutId($query, $con);
    }

    /**
     * Clears out the collOperationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationStatus The current object (for fluent API support)
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
     * If this ROperationStatus is new, it will return
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
                    ->filterByROperationStatus($this)
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
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function setOperationss(PropelCollection $operationss, PropelPDO $con = null)
    {
        $operationssToDelete = $this->getOperationss(new Criteria(), $con)->diff($operationss);


        $this->operationssScheduledForDeletion = $operationssToDelete;

        foreach ($operationssToDelete as $operationsRemoved) {
            $operationsRemoved->setROperationStatus(null);
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
                ->filterByROperationStatus($this)
                ->count($con);
        }

        return count($this->collOperationss);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return ROperationStatus The current object (for fluent API support)
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
        $operations->setROperationStatus($this);
    }

    /**
     * @param	Operations $operations The operations object to remove.
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function removeOperations($operations)
    {
        if ($this->getOperationss()->contains($operations)) {
            $this->collOperationss->remove($this->collOperationss->search($operations));
            if (null === $this->operationssScheduledForDeletion) {
                $this->operationssScheduledForDeletion = clone $this->collOperationss;
                $this->operationssScheduledForDeletion->clear();
            }
            $this->operationssScheduledForDeletion[]= $operations;
            $operations->setROperationStatus(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
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
     * Clears out the collROperationStatusRequiredOptionss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationStatus The current object (for fluent API support)
     * @see        addROperationStatusRequiredOptionss()
     */
    public function clearROperationStatusRequiredOptionss()
    {
        $this->collROperationStatusRequiredOptionss = null; // important to set this to null since that means it is uninitialized
        $this->collROperationStatusRequiredOptionssPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationStatusRequiredOptionss collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationStatusRequiredOptionss($v = true)
    {
        $this->collROperationStatusRequiredOptionssPartial = $v;
    }

    /**
     * Initializes the collROperationStatusRequiredOptionss collection.
     *
     * By default this just sets the collROperationStatusRequiredOptionss collection to an empty array (like clearcollROperationStatusRequiredOptionss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationStatusRequiredOptionss($overrideExisting = true)
    {
        if (null !== $this->collROperationStatusRequiredOptionss && !$overrideExisting) {
            return;
        }
        $this->collROperationStatusRequiredOptionss = new PropelObjectCollection();
        $this->collROperationStatusRequiredOptionss->setModel('ROperationStatusRequiredOptions');
    }

    /**
     * Gets an array of ROperationStatusRequiredOptions objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationStatus is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationStatusRequiredOptions[] List of ROperationStatusRequiredOptions objects
     * @throws PropelException
     */
    public function getROperationStatusRequiredOptionss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationStatusRequiredOptionssPartial && !$this->isNew();
        if (null === $this->collROperationStatusRequiredOptionss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationStatusRequiredOptionss) {
                // return empty collection
                $this->initROperationStatusRequiredOptionss();
            } else {
                $collROperationStatusRequiredOptionss = ROperationStatusRequiredOptionsQuery::create(null, $criteria)
                    ->filterByROperationStatus($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationStatusRequiredOptionssPartial && count($collROperationStatusRequiredOptionss)) {
                      $this->initROperationStatusRequiredOptionss(false);

                      foreach ($collROperationStatusRequiredOptionss as $obj) {
                        if (false == $this->collROperationStatusRequiredOptionss->contains($obj)) {
                          $this->collROperationStatusRequiredOptionss->append($obj);
                        }
                      }

                      $this->collROperationStatusRequiredOptionssPartial = true;
                    }

                    $collROperationStatusRequiredOptionss->getInternalIterator()->rewind();

                    return $collROperationStatusRequiredOptionss;
                }

                if ($partial && $this->collROperationStatusRequiredOptionss) {
                    foreach ($this->collROperationStatusRequiredOptionss as $obj) {
                        if ($obj->isNew()) {
                            $collROperationStatusRequiredOptionss[] = $obj;
                        }
                    }
                }

                $this->collROperationStatusRequiredOptionss = $collROperationStatusRequiredOptionss;
                $this->collROperationStatusRequiredOptionssPartial = false;
            }
        }

        return $this->collROperationStatusRequiredOptionss;
    }

    /**
     * Sets a collection of ROperationStatusRequiredOptions objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationStatusRequiredOptionss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function setROperationStatusRequiredOptionss(PropelCollection $rOperationStatusRequiredOptionss, PropelPDO $con = null)
    {
        $rOperationStatusRequiredOptionssToDelete = $this->getROperationStatusRequiredOptionss(new Criteria(), $con)->diff($rOperationStatusRequiredOptionss);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->rOperationStatusRequiredOptionssScheduledForDeletion = clone $rOperationStatusRequiredOptionssToDelete;

        foreach ($rOperationStatusRequiredOptionssToDelete as $rOperationStatusRequiredOptionsRemoved) {
            $rOperationStatusRequiredOptionsRemoved->setROperationStatus(null);
        }

        $this->collROperationStatusRequiredOptionss = null;
        foreach ($rOperationStatusRequiredOptionss as $rOperationStatusRequiredOptions) {
            $this->addROperationStatusRequiredOptions($rOperationStatusRequiredOptions);
        }

        $this->collROperationStatusRequiredOptionss = $rOperationStatusRequiredOptionss;
        $this->collROperationStatusRequiredOptionssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationStatusRequiredOptions objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationStatusRequiredOptions objects.
     * @throws PropelException
     */
    public function countROperationStatusRequiredOptionss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationStatusRequiredOptionssPartial && !$this->isNew();
        if (null === $this->collROperationStatusRequiredOptionss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationStatusRequiredOptionss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationStatusRequiredOptionss());
            }
            $query = ROperationStatusRequiredOptionsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByROperationStatus($this)
                ->count($con);
        }

        return count($this->collROperationStatusRequiredOptionss);
    }

    /**
     * Method called to associate a ROperationStatusRequiredOptions object to this object
     * through the ROperationStatusRequiredOptions foreign key attribute.
     *
     * @param    ROperationStatusRequiredOptions $l ROperationStatusRequiredOptions
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function addROperationStatusRequiredOptions(ROperationStatusRequiredOptions $l)
    {
        if ($this->collROperationStatusRequiredOptionss === null) {
            $this->initROperationStatusRequiredOptionss();
            $this->collROperationStatusRequiredOptionssPartial = true;
        }

        if (!in_array($l, $this->collROperationStatusRequiredOptionss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationStatusRequiredOptions($l);

            if ($this->rOperationStatusRequiredOptionssScheduledForDeletion and $this->rOperationStatusRequiredOptionssScheduledForDeletion->contains($l)) {
                $this->rOperationStatusRequiredOptionssScheduledForDeletion->remove($this->rOperationStatusRequiredOptionssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationStatusRequiredOptions $rOperationStatusRequiredOptions The rOperationStatusRequiredOptions object to add.
     */
    protected function doAddROperationStatusRequiredOptions($rOperationStatusRequiredOptions)
    {
        $this->collROperationStatusRequiredOptionss[]= $rOperationStatusRequiredOptions;
        $rOperationStatusRequiredOptions->setROperationStatus($this);
    }

    /**
     * @param	ROperationStatusRequiredOptions $rOperationStatusRequiredOptions The rOperationStatusRequiredOptions object to remove.
     * @return ROperationStatus The current object (for fluent API support)
     */
    public function removeROperationStatusRequiredOptions($rOperationStatusRequiredOptions)
    {
        if ($this->getROperationStatusRequiredOptionss()->contains($rOperationStatusRequiredOptions)) {
            $this->collROperationStatusRequiredOptionss->remove($this->collROperationStatusRequiredOptionss->search($rOperationStatusRequiredOptions));
            if (null === $this->rOperationStatusRequiredOptionssScheduledForDeletion) {
                $this->rOperationStatusRequiredOptionssScheduledForDeletion = clone $this->collROperationStatusRequiredOptionss;
                $this->rOperationStatusRequiredOptionssScheduledForDeletion->clear();
            }
            $this->rOperationStatusRequiredOptionssScheduledForDeletion[]= clone $rOperationStatusRequiredOptions;
            $rOperationStatusRequiredOptions->setROperationStatus(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatus is new, it will return
     * an empty collection; or if this ROperationStatus has previously
     * been saved, it will retrieve related ROperationStatusRequiredOptionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationStatusRequiredOptions[] List of ROperationStatusRequiredOptions objects
     */
    public function getROperationStatusRequiredOptionssJoinROperationOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationStatusRequiredOptionsQuery::create(null, $criteria);
        $query->joinWith('ROperationOptions', $join_behavior);

        return $this->getROperationStatusRequiredOptionss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->os_id = null;
        $this->os_libelle = null;
        $this->user_id = null;
        $this->user_modify = null;
        $this->date_create = null;
        $this->date_modify = null;
        $this->actif = null;
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
            if ($this->collOperationStatutssRelatedByHsOldStatutId) {
                foreach ($this->collOperationStatutssRelatedByHsOldStatutId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationStatutssRelatedByHsNewStatutId) {
                foreach ($this->collOperationStatutssRelatedByHsNewStatutId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationss) {
                foreach ($this->collOperationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationStatusRequiredOptionss) {
                foreach ($this->collROperationStatusRequiredOptionss as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOperationStatutssRelatedByHsOldStatutId instanceof PropelCollection) {
            $this->collOperationStatutssRelatedByHsOldStatutId->clearIterator();
        }
        $this->collOperationStatutssRelatedByHsOldStatutId = null;
        if ($this->collOperationStatutssRelatedByHsNewStatutId instanceof PropelCollection) {
            $this->collOperationStatutssRelatedByHsNewStatutId->clearIterator();
        }
        $this->collOperationStatutssRelatedByHsNewStatutId = null;
        if ($this->collOperationss instanceof PropelCollection) {
            $this->collOperationss->clearIterator();
        }
        $this->collOperationss = null;
        if ($this->collROperationStatusRequiredOptionss instanceof PropelCollection) {
            $this->collROperationStatusRequiredOptionss->clearIterator();
        }
        $this->collROperationStatusRequiredOptionss = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ROperationStatusPeer::DEFAULT_STRING_FORMAT);
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
                return BaseROperationStatusPeer::getConnection();
            }
}
