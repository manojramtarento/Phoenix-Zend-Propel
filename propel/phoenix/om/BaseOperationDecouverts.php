<?php


/**
 * Base class that represents a row from the 'operation_decouverts' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationDecouverts extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationDecouvertsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationDecouvertsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the op_dec_id field.
     * @var        int
     */
    protected $op_dec_id;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the op_dec_mont_demande field.
     * @var        float
     */
    protected $op_dec_mont_demande;

    /**
     * The value for the op_dec_mont_accord field.
     * @var        float
     */
    protected $op_dec_mont_accord;

    /**
     * The value for the op_dec_motif_demande field.
     * @var        string
     */
    protected $op_dec_motif_demande;

    /**
     * The value for the op_dec_motif_accord field.
     * @var        int
     */
    protected $op_dec_motif_accord;

    /**
     * The value for the op_dec_statut_id field.
     * @var        int
     */
    protected $op_dec_statut_id;

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
     * The value for the user_modify field.
     * @var        int
     */
    protected $user_modify;

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
     * Get the [op_dec_id] column value.
     *
     * @return int
     */
    public function getOpDecId()
    {

        return $this->op_dec_id;
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
     * Get the [op_dec_mont_demande] column value.
     *
     * @return float
     */
    public function getOpDecMontDemande()
    {

        return $this->op_dec_mont_demande;
    }

    /**
     * Get the [op_dec_mont_accord] column value.
     *
     * @return float
     */
    public function getOpDecMontAccord()
    {

        return $this->op_dec_mont_accord;
    }

    /**
     * Get the [op_dec_motif_demande] column value.
     *
     * @return string
     */
    public function getOpDecMotifDemande()
    {

        return $this->op_dec_motif_demande;
    }

    /**
     * Get the [op_dec_motif_accord] column value.
     *
     * @return int
     */
    public function getOpDecMotifAccord()
    {

        return $this->op_dec_motif_accord;
    }

    /**
     * Get the [op_dec_statut_id] column value.
     *
     * @return int
     */
    public function getOpDecStatutId()
    {

        return $this->op_dec_statut_id;
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
     * Get the [user_modify] column value.
     *
     * @return int
     */
    public function getUserModify()
    {

        return $this->user_modify;
    }

    /**
     * Set the value of [op_dec_id] column.
     *
     * @param  int $v new value
     * @return OperationDecouverts The current object (for fluent API support)
     */
    public function setOpDecId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_dec_id !== $v) {
                    $this->op_dec_id = $v;
                    $this->modifiedColumns[] = OperationDecouvertsPeer::OP_DEC_ID;
                }


        return $this;
    } // setOpDecId()

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return OperationDecouverts The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationDecouvertsPeer::OP_ID;
                }

        if ($this->aOperations !== null && $this->aOperations->getOpId() !== $v) {
            $this->aOperations = null;
        }


        return $this;
    } // setOpId()

    /**
     * Set the value of [op_dec_mont_demande] column.
     *
     * @param  float $v new value
     * @return OperationDecouverts The current object (for fluent API support)
     */
    public function setOpDecMontDemande($v)
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
                if ($this->op_dec_mont_demande !== $v) {
                    $this->op_dec_mont_demande = $v;
                    $this->modifiedColumns[] = OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE;
                }


        return $this;
    } // setOpDecMontDemande()

    /**
     * Set the value of [op_dec_mont_accord] column.
     *
     * @param  float $v new value
     * @return OperationDecouverts The current object (for fluent API support)
     */
    public function setOpDecMontAccord($v)
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
                if ($this->op_dec_mont_accord !== $v) {
                    $this->op_dec_mont_accord = $v;
                    $this->modifiedColumns[] = OperationDecouvertsPeer::OP_DEC_MONT_ACCORD;
                }


        return $this;
    } // setOpDecMontAccord()

    /**
     * Set the value of [op_dec_motif_demande] column.
     *
     * @param  string $v new value
     * @return OperationDecouverts The current object (for fluent API support)
     */
    public function setOpDecMotifDemande($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_dec_motif_demande !== $v) {
            $this->op_dec_motif_demande = $v;
            $this->modifiedColumns[] = OperationDecouvertsPeer::OP_DEC_MOTIF_DEMANDE;
        }


        return $this;
    } // setOpDecMotifDemande()

    /**
     * Set the value of [op_dec_motif_accord] column.
     *
     * @param  int $v new value
     * @return OperationDecouverts The current object (for fluent API support)
     */
    public function setOpDecMotifAccord($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_dec_motif_accord !== $v) {
                    $this->op_dec_motif_accord = $v;
                    $this->modifiedColumns[] = OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD;
                }


        return $this;
    } // setOpDecMotifAccord()

    /**
     * Set the value of [op_dec_statut_id] column.
     *
     * @param  int $v new value
     * @return OperationDecouverts The current object (for fluent API support)
     */
    public function setOpDecStatutId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_dec_statut_id !== $v) {
                    $this->op_dec_statut_id = $v;
                    $this->modifiedColumns[] = OperationDecouvertsPeer::OP_DEC_STATUT_ID;
                }


        return $this;
    } // setOpDecStatutId()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationDecouverts The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = OperationDecouvertsPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationDecouverts The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = OperationDecouvertsPeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return OperationDecouverts The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationDecouvertsPeer::USER_ID;
                }


        return $this;
    } // setUserId()

    /**
     * Set the value of [user_modify] column.
     *
     * @param  int $v new value
     * @return OperationDecouverts The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationDecouvertsPeer::USER_MODIFY;
                }


        return $this;
    } // setUserModify()

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

            $this->op_dec_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->op_dec_mont_demande = ($row[$startcol + 2] !== null) ? (float) $row[$startcol + 2] : null;
            $this->op_dec_mont_accord = ($row[$startcol + 3] !== null) ? (float) $row[$startcol + 3] : null;
            $this->op_dec_motif_demande = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->op_dec_motif_accord = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->op_dec_statut_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->date_create = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->date_modify = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->user_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->user_modify = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = OperationDecouvertsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OperationDecouverts object", $e);
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
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationDecouvertsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationDecouvertsQuery::create()
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
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OperationDecouvertsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = OperationDecouvertsPeer::OP_DEC_ID;
        if (null !== $this->op_dec_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OperationDecouvertsPeer::OP_DEC_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_dec_id`';
        }
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`op_dec_mont_demande`';
        }
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_MONT_ACCORD)) {
            $modifiedColumns[':p' . $index++]  = '`op_dec_mont_accord`';
        }
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_MOTIF_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`op_dec_motif_demande`';
        }
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD)) {
            $modifiedColumns[':p' . $index++]  = '`op_dec_motif_accord`';
        }
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_STATUT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_dec_statut_id`';
        }
        if ($this->isColumnModified(OperationDecouvertsPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(OperationDecouvertsPeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }
        if ($this->isColumnModified(OperationDecouvertsPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(OperationDecouvertsPeer::USER_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`user_modify`';
        }

        $sql = sprintf(
            'INSERT INTO `operation_decouverts` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`op_dec_id`':
                        $stmt->bindValue($identifier, $this->op_dec_id, PDO::PARAM_INT);
                        break;
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`op_dec_mont_demande`':
                        $stmt->bindValue($identifier, $this->op_dec_mont_demande, PDO::PARAM_STR);
                        break;
                    case '`op_dec_mont_accord`':
                        $stmt->bindValue($identifier, $this->op_dec_mont_accord, PDO::PARAM_STR);
                        break;
                    case '`op_dec_motif_demande`':
                        $stmt->bindValue($identifier, $this->op_dec_motif_demande, PDO::PARAM_STR);
                        break;
                    case '`op_dec_motif_accord`':
                        $stmt->bindValue($identifier, $this->op_dec_motif_accord, PDO::PARAM_INT);
                        break;
                    case '`op_dec_statut_id`':
                        $stmt->bindValue($identifier, $this->op_dec_statut_id, PDO::PARAM_INT);
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
                    case '`user_modify`':
                        $stmt->bindValue($identifier, $this->user_modify, PDO::PARAM_INT);
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
        $this->setOpDecId($pk);

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


            if (($retval = OperationDecouvertsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = OperationDecouvertsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOpDecId();
                break;
            case 1:
                return $this->getOpId();
                break;
            case 2:
                return $this->getOpDecMontDemande();
                break;
            case 3:
                return $this->getOpDecMontAccord();
                break;
            case 4:
                return $this->getOpDecMotifDemande();
                break;
            case 5:
                return $this->getOpDecMotifAccord();
                break;
            case 6:
                return $this->getOpDecStatutId();
                break;
            case 7:
                return $this->getDateCreate();
                break;
            case 8:
                return $this->getDateModify();
                break;
            case 9:
                return $this->getUserId();
                break;
            case 10:
                return $this->getUserModify();
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
        if (isset($alreadyDumpedObjects['OperationDecouverts'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OperationDecouverts'][$this->getPrimaryKey()] = true;
        $keys = OperationDecouvertsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOpDecId(),
            $keys[1] => $this->getOpId(),
            $keys[2] => $this->getOpDecMontDemande(),
            $keys[3] => $this->getOpDecMontAccord(),
            $keys[4] => $this->getOpDecMotifDemande(),
            $keys[5] => $this->getOpDecMotifAccord(),
            $keys[6] => $this->getOpDecStatutId(),
            $keys[7] => $this->getDateCreate(),
            $keys[8] => $this->getDateModify(),
            $keys[9] => $this->getUserId(),
            $keys[10] => $this->getUserModify(),
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
        $pos = OperationDecouvertsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOpDecId($value);
                break;
            case 1:
                $this->setOpId($value);
                break;
            case 2:
                $this->setOpDecMontDemande($value);
                break;
            case 3:
                $this->setOpDecMontAccord($value);
                break;
            case 4:
                $this->setOpDecMotifDemande($value);
                break;
            case 5:
                $this->setOpDecMotifAccord($value);
                break;
            case 6:
                $this->setOpDecStatutId($value);
                break;
            case 7:
                $this->setDateCreate($value);
                break;
            case 8:
                $this->setDateModify($value);
                break;
            case 9:
                $this->setUserId($value);
                break;
            case 10:
                $this->setUserModify($value);
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
        $keys = OperationDecouvertsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOpDecId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOpDecMontDemande($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOpDecMontAccord($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOpDecMotifDemande($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOpDecMotifAccord($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOpDecStatutId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateCreate($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDateModify($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUserId($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setUserModify($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationDecouvertsPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_ID)) $criteria->add(OperationDecouvertsPeer::OP_DEC_ID, $this->op_dec_id);
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_ID)) $criteria->add(OperationDecouvertsPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE)) $criteria->add(OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE, $this->op_dec_mont_demande);
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_MONT_ACCORD)) $criteria->add(OperationDecouvertsPeer::OP_DEC_MONT_ACCORD, $this->op_dec_mont_accord);
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_MOTIF_DEMANDE)) $criteria->add(OperationDecouvertsPeer::OP_DEC_MOTIF_DEMANDE, $this->op_dec_motif_demande);
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD)) $criteria->add(OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD, $this->op_dec_motif_accord);
        if ($this->isColumnModified(OperationDecouvertsPeer::OP_DEC_STATUT_ID)) $criteria->add(OperationDecouvertsPeer::OP_DEC_STATUT_ID, $this->op_dec_statut_id);
        if ($this->isColumnModified(OperationDecouvertsPeer::DATE_CREATE)) $criteria->add(OperationDecouvertsPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(OperationDecouvertsPeer::DATE_MODIFY)) $criteria->add(OperationDecouvertsPeer::DATE_MODIFY, $this->date_modify);
        if ($this->isColumnModified(OperationDecouvertsPeer::USER_ID)) $criteria->add(OperationDecouvertsPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(OperationDecouvertsPeer::USER_MODIFY)) $criteria->add(OperationDecouvertsPeer::USER_MODIFY, $this->user_modify);

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
        $criteria = new Criteria(OperationDecouvertsPeer::DATABASE_NAME);
        $criteria->add(OperationDecouvertsPeer::OP_DEC_ID, $this->op_dec_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOpDecId();
    }

    /**
     * Generic method to set the primary key (op_dec_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOpDecId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOpDecId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of OperationDecouverts (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpId($this->getOpId());
        $copyObj->setOpDecMontDemande($this->getOpDecMontDemande());
        $copyObj->setOpDecMontAccord($this->getOpDecMontAccord());
        $copyObj->setOpDecMotifDemande($this->getOpDecMotifDemande());
        $copyObj->setOpDecMotifAccord($this->getOpDecMotifAccord());
        $copyObj->setOpDecStatutId($this->getOpDecStatutId());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setDateModify($this->getDateModify());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setUserModify($this->getUserModify());

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
            $copyObj->setOpDecId(NULL); // this is a auto-increment column, so set to default value
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
     * @return OperationDecouverts Clone of current object.
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
     * @return OperationDecouvertsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationDecouvertsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return OperationDecouverts The current object (for fluent API support)
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
            $v->addOperationDecouverts($this);
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
                $this->aOperations->addOperationDecouvertss($this);
             */
        }

        return $this->aOperations;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->op_dec_id = null;
        $this->op_id = null;
        $this->op_dec_mont_demande = null;
        $this->op_dec_mont_accord = null;
        $this->op_dec_motif_demande = null;
        $this->op_dec_motif_accord = null;
        $this->op_dec_statut_id = null;
        $this->date_create = null;
        $this->date_modify = null;
        $this->user_id = null;
        $this->user_modify = null;
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
        return (string) $this->exportTo(OperationDecouvertsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseOperationDecouvertsPeer::getConnection();
            }
}
