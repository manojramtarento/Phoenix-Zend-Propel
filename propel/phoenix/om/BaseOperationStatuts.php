<?php


/**
 * Base class that represents a row from the 'operation_statuts' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationStatuts extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationStatutsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationStatutsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the hs_id field.
     * @var        int
     */
    protected $hs_id;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the hs_old_statut_id field.
     * @var        int
     */
    protected $hs_old_statut_id;

    /**
     * The value for the hs_new_statut_id field.
     * @var        int
     */
    protected $hs_new_statut_id;

    /**
     * The value for the hs_refus_id field.
     * @var        int
     */
    protected $hs_refus_id;

    /**
     * The value for the actif field.
     * @var        int
     */
    protected $actif;

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
     * @var        Operations
     */
    protected $aOperations;

    /**
     * @var        ROperationStatus
     */
    protected $aOldROperationStatus;

    /**
     * @var        ROperationStatus
     */
    protected $aNewROperationStatus;

    /**
     * @var        ROperationStatutRefus
     */
    protected $aROperationStatutRefus;

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
     * Get the [hs_id] column value.
     *
     * @return int
     */
    public function getHsId()
    {

        return $this->hs_id;
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
     * Get the [hs_old_statut_id] column value.
     *
     * @return int
     */
    public function getHsOldStatutId()
    {

        return $this->hs_old_statut_id;
    }

    /**
     * Get the [hs_new_statut_id] column value.
     *
     * @return int
     */
    public function getHsNewStatutId()
    {

        return $this->hs_new_statut_id;
    }

    /**
     * Get the [hs_refus_id] column value.
     *
     * @return int
     */
    public function getHsRefusId()
    {

        return $this->hs_refus_id;
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
     * Set the value of [hs_id] column.
     *
     * @param  int $v new value
     * @return OperationStatuts The current object (for fluent API support)
     */
    public function setHsId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->hs_id !== $v) {
                    $this->hs_id = $v;
                    $this->modifiedColumns[] = OperationStatutsPeer::HS_ID;
                }


        return $this;
    } // setHsId()

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return OperationStatuts The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationStatutsPeer::OP_ID;
                }

        if ($this->aOperations !== null && $this->aOperations->getOpId() !== $v) {
            $this->aOperations = null;
        }


        return $this;
    } // setOpId()

    /**
     * Set the value of [hs_old_statut_id] column.
     *
     * @param  int $v new value
     * @return OperationStatuts The current object (for fluent API support)
     */
    public function setHsOldStatutId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->hs_old_statut_id !== $v) {
                    $this->hs_old_statut_id = $v;
                    $this->modifiedColumns[] = OperationStatutsPeer::HS_OLD_STATUT_ID;
                }

        if ($this->aOldROperationStatus !== null && $this->aOldROperationStatus->getOsId() !== $v) {
            $this->aOldROperationStatus = null;
        }


        return $this;
    } // setHsOldStatutId()

    /**
     * Set the value of [hs_new_statut_id] column.
     *
     * @param  int $v new value
     * @return OperationStatuts The current object (for fluent API support)
     */
    public function setHsNewStatutId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->hs_new_statut_id !== $v) {
                    $this->hs_new_statut_id = $v;
                    $this->modifiedColumns[] = OperationStatutsPeer::HS_NEW_STATUT_ID;
                }

        if ($this->aNewROperationStatus !== null && $this->aNewROperationStatus->getOsId() !== $v) {
            $this->aNewROperationStatus = null;
        }


        return $this;
    } // setHsNewStatutId()

    /**
     * Set the value of [hs_refus_id] column.
     *
     * @param  int $v new value
     * @return OperationStatuts The current object (for fluent API support)
     */
    public function setHsRefusId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->hs_refus_id !== $v) {
                    $this->hs_refus_id = $v;
                    $this->modifiedColumns[] = OperationStatutsPeer::HS_REFUS_ID;
                }

        if ($this->aROperationStatutRefus !== null && $this->aROperationStatutRefus->getROpStatutRefusId() !== $v) {
            $this->aROperationStatutRefus = null;
        }


        return $this;
    } // setHsRefusId()

    /**
     * Set the value of [actif] column.
     *
     * @param  int $v new value
     * @return OperationStatuts The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationStatutsPeer::ACTIF;
                }


        return $this;
    } // setActif()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return OperationStatuts The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationStatutsPeer::USER_ID;
                }

        if ($this->aUsers !== null && $this->aUsers->getUserId() !== $v) {
            $this->aUsers = null;
        }


        return $this;
    } // setUserId()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationStatuts The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = OperationStatutsPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Set the value of [user_modify] column.
     *
     * @param  int $v new value
     * @return OperationStatuts The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationStatutsPeer::USER_MODIFY;
                }


        return $this;
    } // setUserModify()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationStatuts The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = OperationStatutsPeer::DATE_MODIFY;
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

            $this->hs_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->hs_old_statut_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->hs_new_statut_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->hs_refus_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->actif = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->user_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->date_create = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->user_modify = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->date_modify = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = OperationStatutsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OperationStatuts object", $e);
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
        if ($this->aOldROperationStatus !== null && $this->hs_old_statut_id !== $this->aOldROperationStatus->getOsId()) {
            $this->aOldROperationStatus = null;
        }
        if ($this->aNewROperationStatus !== null && $this->hs_new_statut_id !== $this->aNewROperationStatus->getOsId()) {
            $this->aNewROperationStatus = null;
        }
        if ($this->aROperationStatutRefus !== null && $this->hs_refus_id !== $this->aROperationStatutRefus->getROpStatutRefusId()) {
            $this->aROperationStatutRefus = null;
        }
        if ($this->aUsers !== null && $this->user_id !== $this->aUsers->getUserId()) {
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
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationStatutsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperations = null;
            $this->aOldROperationStatus = null;
            $this->aNewROperationStatus = null;
            $this->aROperationStatutRefus = null;
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
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationStatutsQuery::create()
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
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OperationStatutsPeer::addInstanceToPool($this);
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

            if ($this->aOldROperationStatus !== null) {
                if ($this->aOldROperationStatus->isModified() || $this->aOldROperationStatus->isNew()) {
                    $affectedRows += $this->aOldROperationStatus->save($con);
                }
                $this->setOldROperationStatus($this->aOldROperationStatus);
            }

            if ($this->aNewROperationStatus !== null) {
                if ($this->aNewROperationStatus->isModified() || $this->aNewROperationStatus->isNew()) {
                    $affectedRows += $this->aNewROperationStatus->save($con);
                }
                $this->setNewROperationStatus($this->aNewROperationStatus);
            }

            if ($this->aROperationStatutRefus !== null) {
                if ($this->aROperationStatutRefus->isModified() || $this->aROperationStatutRefus->isNew()) {
                    $affectedRows += $this->aROperationStatutRefus->save($con);
                }
                $this->setROperationStatutRefus($this->aROperationStatutRefus);
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

        $this->modifiedColumns[] = OperationStatutsPeer::HS_ID;
        if (null !== $this->hs_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OperationStatutsPeer::HS_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationStatutsPeer::HS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`hs_id`';
        }
        if ($this->isColumnModified(OperationStatutsPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(OperationStatutsPeer::HS_OLD_STATUT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`hs_old_statut_id`';
        }
        if ($this->isColumnModified(OperationStatutsPeer::HS_NEW_STATUT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`hs_new_statut_id`';
        }
        if ($this->isColumnModified(OperationStatutsPeer::HS_REFUS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`hs_refus_id`';
        }
        if ($this->isColumnModified(OperationStatutsPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }
        if ($this->isColumnModified(OperationStatutsPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(OperationStatutsPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(OperationStatutsPeer::USER_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`user_modify`';
        }
        if ($this->isColumnModified(OperationStatutsPeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }

        $sql = sprintf(
            'INSERT INTO `operation_statuts` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`hs_id`':
                        $stmt->bindValue($identifier, $this->hs_id, PDO::PARAM_INT);
                        break;
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`hs_old_statut_id`':
                        $stmt->bindValue($identifier, $this->hs_old_statut_id, PDO::PARAM_INT);
                        break;
                    case '`hs_new_statut_id`':
                        $stmt->bindValue($identifier, $this->hs_new_statut_id, PDO::PARAM_INT);
                        break;
                    case '`hs_refus_id`':
                        $stmt->bindValue($identifier, $this->hs_refus_id, PDO::PARAM_INT);
                        break;
                    case '`actif`':
                        $stmt->bindValue($identifier, $this->actif, PDO::PARAM_INT);
                        break;
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`user_modify`':
                        $stmt->bindValue($identifier, $this->user_modify, PDO::PARAM_INT);
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
        $this->setHsId($pk);

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

            if ($this->aOldROperationStatus !== null) {
                if (!$this->aOldROperationStatus->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOldROperationStatus->getValidationFailures());
                }
            }

            if ($this->aNewROperationStatus !== null) {
                if (!$this->aNewROperationStatus->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aNewROperationStatus->getValidationFailures());
                }
            }

            if ($this->aROperationStatutRefus !== null) {
                if (!$this->aROperationStatutRefus->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aROperationStatutRefus->getValidationFailures());
                }
            }

            if ($this->aUsers !== null) {
                if (!$this->aUsers->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsers->getValidationFailures());
                }
            }


            if (($retval = OperationStatutsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = OperationStatutsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getHsId();
                break;
            case 1:
                return $this->getOpId();
                break;
            case 2:
                return $this->getHsOldStatutId();
                break;
            case 3:
                return $this->getHsNewStatutId();
                break;
            case 4:
                return $this->getHsRefusId();
                break;
            case 5:
                return $this->getActif();
                break;
            case 6:
                return $this->getUserId();
                break;
            case 7:
                return $this->getDateCreate();
                break;
            case 8:
                return $this->getUserModify();
                break;
            case 9:
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['OperationStatuts'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OperationStatuts'][$this->getPrimaryKey()] = true;
        $keys = OperationStatutsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getHsId(),
            $keys[1] => $this->getOpId(),
            $keys[2] => $this->getHsOldStatutId(),
            $keys[3] => $this->getHsNewStatutId(),
            $keys[4] => $this->getHsRefusId(),
            $keys[5] => $this->getActif(),
            $keys[6] => $this->getUserId(),
            $keys[7] => $this->getDateCreate(),
            $keys[8] => $this->getUserModify(),
            $keys[9] => $this->getDateModify(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperations) {
                $result['Operations'] = $this->aOperations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOldROperationStatus) {
                $result['OldROperationStatus'] = $this->aOldROperationStatus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aNewROperationStatus) {
                $result['NewROperationStatus'] = $this->aNewROperationStatus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aROperationStatutRefus) {
                $result['ROperationStatutRefus'] = $this->aROperationStatutRefus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = OperationStatutsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setHsId($value);
                break;
            case 1:
                $this->setOpId($value);
                break;
            case 2:
                $this->setHsOldStatutId($value);
                break;
            case 3:
                $this->setHsNewStatutId($value);
                break;
            case 4:
                $this->setHsRefusId($value);
                break;
            case 5:
                $this->setActif($value);
                break;
            case 6:
                $this->setUserId($value);
                break;
            case 7:
                $this->setDateCreate($value);
                break;
            case 8:
                $this->setUserModify($value);
                break;
            case 9:
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
        $keys = OperationStatutsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setHsId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setHsOldStatutId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setHsNewStatutId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setHsRefusId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setActif($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUserId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateCreate($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUserModify($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateModify($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationStatutsPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationStatutsPeer::HS_ID)) $criteria->add(OperationStatutsPeer::HS_ID, $this->hs_id);
        if ($this->isColumnModified(OperationStatutsPeer::OP_ID)) $criteria->add(OperationStatutsPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(OperationStatutsPeer::HS_OLD_STATUT_ID)) $criteria->add(OperationStatutsPeer::HS_OLD_STATUT_ID, $this->hs_old_statut_id);
        if ($this->isColumnModified(OperationStatutsPeer::HS_NEW_STATUT_ID)) $criteria->add(OperationStatutsPeer::HS_NEW_STATUT_ID, $this->hs_new_statut_id);
        if ($this->isColumnModified(OperationStatutsPeer::HS_REFUS_ID)) $criteria->add(OperationStatutsPeer::HS_REFUS_ID, $this->hs_refus_id);
        if ($this->isColumnModified(OperationStatutsPeer::ACTIF)) $criteria->add(OperationStatutsPeer::ACTIF, $this->actif);
        if ($this->isColumnModified(OperationStatutsPeer::USER_ID)) $criteria->add(OperationStatutsPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(OperationStatutsPeer::DATE_CREATE)) $criteria->add(OperationStatutsPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(OperationStatutsPeer::USER_MODIFY)) $criteria->add(OperationStatutsPeer::USER_MODIFY, $this->user_modify);
        if ($this->isColumnModified(OperationStatutsPeer::DATE_MODIFY)) $criteria->add(OperationStatutsPeer::DATE_MODIFY, $this->date_modify);

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
        $criteria = new Criteria(OperationStatutsPeer::DATABASE_NAME);
        $criteria->add(OperationStatutsPeer::HS_ID, $this->hs_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getHsId();
    }

    /**
     * Generic method to set the primary key (hs_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setHsId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getHsId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of OperationStatuts (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpId($this->getOpId());
        $copyObj->setHsOldStatutId($this->getHsOldStatutId());
        $copyObj->setHsNewStatutId($this->getHsNewStatutId());
        $copyObj->setHsRefusId($this->getHsRefusId());
        $copyObj->setActif($this->getActif());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setUserModify($this->getUserModify());
        $copyObj->setDateModify($this->getDateModify());

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
            $copyObj->setHsId(NULL); // this is a auto-increment column, so set to default value
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
     * @return OperationStatuts Clone of current object.
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
     * @return OperationStatutsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationStatutsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return OperationStatuts The current object (for fluent API support)
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
            $v->addOperationStatuts($this);
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
                $this->aOperations->addOperationStatutss($this);
             */
        }

        return $this->aOperations;
    }

    /**
     * Declares an association between this object and a ROperationStatus object.
     *
     * @param                  ROperationStatus $v
     * @return OperationStatuts The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOldROperationStatus(ROperationStatus $v = null)
    {
        if ($v === null) {
            $this->setHsOldStatutId(NULL);
        } else {
            $this->setHsOldStatutId($v->getOsId());
        }

        $this->aOldROperationStatus = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationStatus object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationStatutsRelatedByHsOldStatutId($this);
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
    public function getOldROperationStatus(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOldROperationStatus === null && ($this->hs_old_statut_id !== null) && $doQuery) {
            $this->aOldROperationStatus = ROperationStatusQuery::create()->findPk($this->hs_old_statut_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOldROperationStatus->addOperationStatutssRelatedByHsOldStatutId($this);
             */
        }

        return $this->aOldROperationStatus;
    }

    /**
     * Declares an association between this object and a ROperationStatus object.
     *
     * @param                  ROperationStatus $v
     * @return OperationStatuts The current object (for fluent API support)
     * @throws PropelException
     */
    public function setNewROperationStatus(ROperationStatus $v = null)
    {
        if ($v === null) {
            $this->setHsNewStatutId(NULL);
        } else {
            $this->setHsNewStatutId($v->getOsId());
        }

        $this->aNewROperationStatus = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationStatus object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationStatutsRelatedByHsNewStatutId($this);
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
    public function getNewROperationStatus(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aNewROperationStatus === null && ($this->hs_new_statut_id !== null) && $doQuery) {
            $this->aNewROperationStatus = ROperationStatusQuery::create()->findPk($this->hs_new_statut_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aNewROperationStatus->addOperationStatutssRelatedByHsNewStatutId($this);
             */
        }

        return $this->aNewROperationStatus;
    }

    /**
     * Declares an association between this object and a ROperationStatutRefus object.
     *
     * @param                  ROperationStatutRefus $v
     * @return OperationStatuts The current object (for fluent API support)
     * @throws PropelException
     */
    public function setROperationStatutRefus(ROperationStatutRefus $v = null)
    {
        if ($v === null) {
            $this->setHsRefusId(NULL);
        } else {
            $this->setHsRefusId($v->getROpStatutRefusId());
        }

        $this->aROperationStatutRefus = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationStatutRefus object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationStatuts($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationStatutRefus object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationStatutRefus The associated ROperationStatutRefus object.
     * @throws PropelException
     */
    public function getROperationStatutRefus(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aROperationStatutRefus === null && ($this->hs_refus_id !== null) && $doQuery) {
            $this->aROperationStatutRefus = ROperationStatutRefusQuery::create()->findPk($this->hs_refus_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aROperationStatutRefus->addOperationStatutss($this);
             */
        }

        return $this->aROperationStatutRefus;
    }

    /**
     * Declares an association between this object and a Users object.
     *
     * @param                  Users $v
     * @return OperationStatuts The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsers(Users $v = null)
    {
        if ($v === null) {
            $this->setUserId(NULL);
        } else {
            $this->setUserId($v->getUserId());
        }

        $this->aUsers = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Users object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationStatuts($this);
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
        if ($this->aUsers === null && ($this->user_id !== null) && $doQuery) {
            $this->aUsers = UsersQuery::create()->findPk($this->user_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsers->addOperationStatutss($this);
             */
        }

        return $this->aUsers;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->hs_id = null;
        $this->op_id = null;
        $this->hs_old_statut_id = null;
        $this->hs_new_statut_id = null;
        $this->hs_refus_id = null;
        $this->actif = null;
        $this->user_id = null;
        $this->date_create = null;
        $this->user_modify = null;
        $this->date_modify = null;
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
            if ($this->aOldROperationStatus instanceof Persistent) {
              $this->aOldROperationStatus->clearAllReferences($deep);
            }
            if ($this->aNewROperationStatus instanceof Persistent) {
              $this->aNewROperationStatus->clearAllReferences($deep);
            }
            if ($this->aROperationStatutRefus instanceof Persistent) {
              $this->aROperationStatutRefus->clearAllReferences($deep);
            }
            if ($this->aUsers instanceof Persistent) {
              $this->aUsers->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aOperations = null;
        $this->aOldROperationStatus = null;
        $this->aNewROperationStatus = null;
        $this->aROperationStatutRefus = null;
        $this->aUsers = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OperationStatutsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseOperationStatutsPeer::getConnection();
            }
}
