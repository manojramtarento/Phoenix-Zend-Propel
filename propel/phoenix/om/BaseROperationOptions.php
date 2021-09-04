<?php


/**
 * Base class that represents a row from the 'r_operation_options' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationOptions extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ROperationOptionsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ROperationOptionsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_op_option_id field.
     * @var        int
     */
    protected $r_op_option_id;

    /**
     * The value for the r_op_option_libelle field.
     * @var        string
     */
    protected $r_op_option_libelle;

    /**
     * The value for the r_op_option_type field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $r_op_option_type;

    /**
     * The value for the r_op_option_parent field.
     * @var        int
     */
    protected $r_op_option_parent;

    /**
     * The value for the r_op_option_order field.
     * @var        int
     */
    protected $r_op_option_order;

    /**
     * The value for the r_operation_option_r_activity_kpi_id field.
     * @var        int
     */
    protected $r_operation_option_r_activity_kpi_id;

    /**
     * The value for the actif field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $actif;

    /**
     * @var        PropelObjectCollection|LnkOperationOption[] Collection to store aggregation of LnkOperationOption objects.
     */
    protected $collLnkOperationOptions;
    protected $collLnkOperationOptionsPartial;

    /**
     * @var        PropelObjectCollection|ROperationTypeRequiredOptions[] Collection to store aggregation of ROperationTypeRequiredOptions objects.
     */
    protected $collROperationTypeRequiredOptionss;
    protected $collROperationTypeRequiredOptionssPartial;

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
    protected $lnkOperationOptionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationTypeRequiredOptionssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationStatusRequiredOptionssScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->r_op_option_type = 1;
        $this->actif = true;
    }

    /**
     * Initializes internal state of BaseROperationOptions object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [r_op_option_id] column value.
     *
     * @return int
     */
    public function getROpOptionId()
    {

        return $this->r_op_option_id;
    }

    /**
     * Get the [r_op_option_libelle] column value.
     *
     * @return string
     */
    public function getROpOptionLibelle()
    {

        return $this->r_op_option_libelle;
    }

    /**
     * Get the [r_op_option_type] column value.
     *
     * @return int
     */
    public function getROpOptionType()
    {

        return $this->r_op_option_type;
    }

    /**
     * Get the [r_op_option_parent] column value.
     *
     * @return int
     */
    public function getROpOptionParent()
    {

        return $this->r_op_option_parent;
    }

    /**
     * Get the [r_op_option_order] column value.
     *
     * @return int
     */
    public function getROpOptionOrder()
    {

        return $this->r_op_option_order;
    }

    /**
     * Get the [r_operation_option_r_activity_kpi_id] column value.
     *
     * @return int
     */
    public function getROperationOptionRActivityKpiId()
    {

        return $this->r_operation_option_r_activity_kpi_id;
    }

    /**
     * Get the [actif] column value.
     *
     * @return boolean
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Set the value of [r_op_option_id] column.
     *
     * @param  int $v new value
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function setROpOptionId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_option_id !== $v) {
                    $this->r_op_option_id = $v;
                    $this->modifiedColumns[] = ROperationOptionsPeer::R_OP_OPTION_ID;
                }


        return $this;
    } // setROpOptionId()

    /**
     * Set the value of [r_op_option_libelle] column.
     *
     * @param  string $v new value
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function setROpOptionLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_op_option_libelle !== $v) {
            $this->r_op_option_libelle = $v;
            $this->modifiedColumns[] = ROperationOptionsPeer::R_OP_OPTION_LIBELLE;
        }


        return $this;
    } // setROpOptionLibelle()

    /**
     * Set the value of [r_op_option_type] column.
     *
     * @param  int $v new value
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function setROpOptionType($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_option_type !== $v) {
                    $this->r_op_option_type = $v;
                    $this->modifiedColumns[] = ROperationOptionsPeer::R_OP_OPTION_TYPE;
                }


        return $this;
    } // setROpOptionType()

    /**
     * Set the value of [r_op_option_parent] column.
     *
     * @param  int $v new value
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function setROpOptionParent($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_option_parent !== $v) {
                    $this->r_op_option_parent = $v;
                    $this->modifiedColumns[] = ROperationOptionsPeer::R_OP_OPTION_PARENT;
                }


        return $this;
    } // setROpOptionParent()

    /**
     * Set the value of [r_op_option_order] column.
     *
     * @param  int $v new value
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function setROpOptionOrder($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_option_order !== $v) {
                    $this->r_op_option_order = $v;
                    $this->modifiedColumns[] = ROperationOptionsPeer::R_OP_OPTION_ORDER;
                }


        return $this;
    } // setROpOptionOrder()

    /**
     * Set the value of [r_operation_option_r_activity_kpi_id] column.
     *
     * @param  int $v new value
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function setROperationOptionRActivityKpiId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_operation_option_r_activity_kpi_id !== $v) {
                    $this->r_operation_option_r_activity_kpi_id = $v;
                    $this->modifiedColumns[] = ROperationOptionsPeer::R_OPERATION_OPTION_R_ACTIVITY_KPI_ID;
                }


        return $this;
    } // setROperationOptionRActivityKpiId()

    /**
     * Sets the value of the [actif] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function setActif($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actif !== $v) {
            $this->actif = $v;
            $this->modifiedColumns[] = ROperationOptionsPeer::ACTIF;
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
            if ($this->r_op_option_type !== 1) {
                return false;
            }

            if ($this->actif !== true) {
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

            $this->r_op_option_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_op_option_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_op_option_type = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->r_op_option_parent = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->r_op_option_order = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->r_operation_option_r_activity_kpi_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->actif = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = ROperationOptionsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ROperationOptions object", $e);
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
            $con = Propel::getConnection(ROperationOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ROperationOptionsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collLnkOperationOptions = null;

            $this->collROperationTypeRequiredOptionss = null;

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
            $con = Propel::getConnection(ROperationOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ROperationOptionsQuery::create()
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
            $con = Propel::getConnection(ROperationOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setActif(1);

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
                ROperationOptionsPeer::addInstanceToPool($this);
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

            if ($this->lnkOperationOptionsScheduledForDeletion !== null) {
                if (!$this->lnkOperationOptionsScheduledForDeletion->isEmpty()) {
                    LnkOperationOptionQuery::create()
                        ->filterByPrimaryKeys($this->lnkOperationOptionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkOperationOptionsScheduledForDeletion = null;
                }
            }

            if ($this->collLnkOperationOptions !== null) {
                foreach ($this->collLnkOperationOptions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rOperationTypeRequiredOptionssScheduledForDeletion !== null) {
                if (!$this->rOperationTypeRequiredOptionssScheduledForDeletion->isEmpty()) {
                    ROperationTypeRequiredOptionsQuery::create()
                        ->filterByPrimaryKeys($this->rOperationTypeRequiredOptionssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->rOperationTypeRequiredOptionssScheduledForDeletion = null;
                }
            }

            if ($this->collROperationTypeRequiredOptionss !== null) {
                foreach ($this->collROperationTypeRequiredOptionss as $referrerFK) {
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

        $this->modifiedColumns[] = ROperationOptionsPeer::R_OP_OPTION_ID;
        if (null !== $this->r_op_option_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ROperationOptionsPeer::R_OP_OPTION_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ROperationOptionsPeer::R_OP_OPTION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_option_id`';
        }
        if ($this->isColumnModified(ROperationOptionsPeer::R_OP_OPTION_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_option_libelle`';
        }
        if ($this->isColumnModified(ROperationOptionsPeer::R_OP_OPTION_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_option_type`';
        }
        if ($this->isColumnModified(ROperationOptionsPeer::R_OP_OPTION_PARENT)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_option_parent`';
        }
        if ($this->isColumnModified(ROperationOptionsPeer::R_OP_OPTION_ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_option_order`';
        }
        if ($this->isColumnModified(ROperationOptionsPeer::R_OPERATION_OPTION_R_ACTIVITY_KPI_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_operation_option_r_activity_kpi_id`';
        }
        if ($this->isColumnModified(ROperationOptionsPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }

        $sql = sprintf(
            'INSERT INTO `r_operation_options` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_op_option_id`':
                        $stmt->bindValue($identifier, $this->r_op_option_id, PDO::PARAM_INT);
                        break;
                    case '`r_op_option_libelle`':
                        $stmt->bindValue($identifier, $this->r_op_option_libelle, PDO::PARAM_STR);
                        break;
                    case '`r_op_option_type`':
                        $stmt->bindValue($identifier, $this->r_op_option_type, PDO::PARAM_INT);
                        break;
                    case '`r_op_option_parent`':
                        $stmt->bindValue($identifier, $this->r_op_option_parent, PDO::PARAM_INT);
                        break;
                    case '`r_op_option_order`':
                        $stmt->bindValue($identifier, $this->r_op_option_order, PDO::PARAM_INT);
                        break;
                    case '`r_operation_option_r_activity_kpi_id`':
                        $stmt->bindValue($identifier, $this->r_operation_option_r_activity_kpi_id, PDO::PARAM_INT);
                        break;
                    case '`actif`':
                        $stmt->bindValue($identifier, (int) $this->actif, PDO::PARAM_INT);
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
        $this->setROpOptionId($pk);

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


            if (($retval = ROperationOptionsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collLnkOperationOptions !== null) {
                    foreach ($this->collLnkOperationOptions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collROperationTypeRequiredOptionss !== null) {
                    foreach ($this->collROperationTypeRequiredOptionss as $referrerFK) {
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
        $pos = ROperationOptionsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getROpOptionId();
                break;
            case 1:
                return $this->getROpOptionLibelle();
                break;
            case 2:
                return $this->getROpOptionType();
                break;
            case 3:
                return $this->getROpOptionParent();
                break;
            case 4:
                return $this->getROpOptionOrder();
                break;
            case 5:
                return $this->getROperationOptionRActivityKpiId();
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
        if (isset($alreadyDumpedObjects['ROperationOptions'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ROperationOptions'][$this->getPrimaryKey()] = true;
        $keys = ROperationOptionsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getROpOptionId(),
            $keys[1] => $this->getROpOptionLibelle(),
            $keys[2] => $this->getROpOptionType(),
            $keys[3] => $this->getROpOptionParent(),
            $keys[4] => $this->getROpOptionOrder(),
            $keys[5] => $this->getROperationOptionRActivityKpiId(),
            $keys[6] => $this->getActif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collLnkOperationOptions) {
                $result['LnkOperationOptions'] = $this->collLnkOperationOptions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationTypeRequiredOptionss) {
                $result['ROperationTypeRequiredOptionss'] = $this->collROperationTypeRequiredOptionss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ROperationOptionsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setROpOptionId($value);
                break;
            case 1:
                $this->setROpOptionLibelle($value);
                break;
            case 2:
                $this->setROpOptionType($value);
                break;
            case 3:
                $this->setROpOptionParent($value);
                break;
            case 4:
                $this->setROpOptionOrder($value);
                break;
            case 5:
                $this->setROperationOptionRActivityKpiId($value);
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
        $keys = ROperationOptionsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setROpOptionId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setROpOptionLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setROpOptionType($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setROpOptionParent($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setROpOptionOrder($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setROperationOptionRActivityKpiId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setActif($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ROperationOptionsPeer::DATABASE_NAME);

        if ($this->isColumnModified(ROperationOptionsPeer::R_OP_OPTION_ID)) $criteria->add(ROperationOptionsPeer::R_OP_OPTION_ID, $this->r_op_option_id);
        if ($this->isColumnModified(ROperationOptionsPeer::R_OP_OPTION_LIBELLE)) $criteria->add(ROperationOptionsPeer::R_OP_OPTION_LIBELLE, $this->r_op_option_libelle);
        if ($this->isColumnModified(ROperationOptionsPeer::R_OP_OPTION_TYPE)) $criteria->add(ROperationOptionsPeer::R_OP_OPTION_TYPE, $this->r_op_option_type);
        if ($this->isColumnModified(ROperationOptionsPeer::R_OP_OPTION_PARENT)) $criteria->add(ROperationOptionsPeer::R_OP_OPTION_PARENT, $this->r_op_option_parent);
        if ($this->isColumnModified(ROperationOptionsPeer::R_OP_OPTION_ORDER)) $criteria->add(ROperationOptionsPeer::R_OP_OPTION_ORDER, $this->r_op_option_order);
        if ($this->isColumnModified(ROperationOptionsPeer::R_OPERATION_OPTION_R_ACTIVITY_KPI_ID)) $criteria->add(ROperationOptionsPeer::R_OPERATION_OPTION_R_ACTIVITY_KPI_ID, $this->r_operation_option_r_activity_kpi_id);
        if ($this->isColumnModified(ROperationOptionsPeer::ACTIF)) $criteria->add(ROperationOptionsPeer::ACTIF, $this->actif);

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
        $criteria = new Criteria(ROperationOptionsPeer::DATABASE_NAME);
        $criteria->add(ROperationOptionsPeer::R_OP_OPTION_ID, $this->r_op_option_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getROpOptionId();
    }

    /**
     * Generic method to set the primary key (r_op_option_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setROpOptionId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getROpOptionId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ROperationOptions (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setROpOptionLibelle($this->getROpOptionLibelle());
        $copyObj->setROpOptionType($this->getROpOptionType());
        $copyObj->setROpOptionParent($this->getROpOptionParent());
        $copyObj->setROpOptionOrder($this->getROpOptionOrder());
        $copyObj->setROperationOptionRActivityKpiId($this->getROperationOptionRActivityKpiId());
        $copyObj->setActif($this->getActif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getLnkOperationOptions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkOperationOption($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationTypeRequiredOptionss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeRequiredOptions($relObj->copy($deepCopy));
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
            $copyObj->setROpOptionId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ROperationOptions Clone of current object.
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
     * @return ROperationOptionsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ROperationOptionsPeer();
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
        if ('LnkOperationOption' == $relationName) {
            $this->initLnkOperationOptions();
        }
        if ('ROperationTypeRequiredOptions' == $relationName) {
            $this->initROperationTypeRequiredOptionss();
        }
        if ('ROperationStatusRequiredOptions' == $relationName) {
            $this->initROperationStatusRequiredOptionss();
        }
    }

    /**
     * Clears out the collLnkOperationOptions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationOptions The current object (for fluent API support)
     * @see        addLnkOperationOptions()
     */
    public function clearLnkOperationOptions()
    {
        $this->collLnkOperationOptions = null; // important to set this to null since that means it is uninitialized
        $this->collLnkOperationOptionsPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkOperationOptions collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkOperationOptions($v = true)
    {
        $this->collLnkOperationOptionsPartial = $v;
    }

    /**
     * Initializes the collLnkOperationOptions collection.
     *
     * By default this just sets the collLnkOperationOptions collection to an empty array (like clearcollLnkOperationOptions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkOperationOptions($overrideExisting = true)
    {
        if (null !== $this->collLnkOperationOptions && !$overrideExisting) {
            return;
        }
        $this->collLnkOperationOptions = new PropelObjectCollection();
        $this->collLnkOperationOptions->setModel('LnkOperationOption');
    }

    /**
     * Gets an array of LnkOperationOption objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationOptions is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkOperationOption[] List of LnkOperationOption objects
     * @throws PropelException
     */
    public function getLnkOperationOptions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationOptionsPartial && !$this->isNew();
        if (null === $this->collLnkOperationOptions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationOptions) {
                // return empty collection
                $this->initLnkOperationOptions();
            } else {
                $collLnkOperationOptions = LnkOperationOptionQuery::create(null, $criteria)
                    ->filterByROperationOptions($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkOperationOptionsPartial && count($collLnkOperationOptions)) {
                      $this->initLnkOperationOptions(false);

                      foreach ($collLnkOperationOptions as $obj) {
                        if (false == $this->collLnkOperationOptions->contains($obj)) {
                          $this->collLnkOperationOptions->append($obj);
                        }
                      }

                      $this->collLnkOperationOptionsPartial = true;
                    }

                    $collLnkOperationOptions->getInternalIterator()->rewind();

                    return $collLnkOperationOptions;
                }

                if ($partial && $this->collLnkOperationOptions) {
                    foreach ($this->collLnkOperationOptions as $obj) {
                        if ($obj->isNew()) {
                            $collLnkOperationOptions[] = $obj;
                        }
                    }
                }

                $this->collLnkOperationOptions = $collLnkOperationOptions;
                $this->collLnkOperationOptionsPartial = false;
            }
        }

        return $this->collLnkOperationOptions;
    }

    /**
     * Sets a collection of LnkOperationOption objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkOperationOptions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function setLnkOperationOptions(PropelCollection $lnkOperationOptions, PropelPDO $con = null)
    {
        $lnkOperationOptionsToDelete = $this->getLnkOperationOptions(new Criteria(), $con)->diff($lnkOperationOptions);


        $this->lnkOperationOptionsScheduledForDeletion = $lnkOperationOptionsToDelete;

        foreach ($lnkOperationOptionsToDelete as $lnkOperationOptionRemoved) {
            $lnkOperationOptionRemoved->setROperationOptions(null);
        }

        $this->collLnkOperationOptions = null;
        foreach ($lnkOperationOptions as $lnkOperationOption) {
            $this->addLnkOperationOption($lnkOperationOption);
        }

        $this->collLnkOperationOptions = $lnkOperationOptions;
        $this->collLnkOperationOptionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkOperationOption objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkOperationOption objects.
     * @throws PropelException
     */
    public function countLnkOperationOptions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationOptionsPartial && !$this->isNew();
        if (null === $this->collLnkOperationOptions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationOptions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkOperationOptions());
            }
            $query = LnkOperationOptionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByROperationOptions($this)
                ->count($con);
        }

        return count($this->collLnkOperationOptions);
    }

    /**
     * Method called to associate a LnkOperationOption object to this object
     * through the LnkOperationOption foreign key attribute.
     *
     * @param    LnkOperationOption $l LnkOperationOption
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function addLnkOperationOption(LnkOperationOption $l)
    {
        if ($this->collLnkOperationOptions === null) {
            $this->initLnkOperationOptions();
            $this->collLnkOperationOptionsPartial = true;
        }

        if (!in_array($l, $this->collLnkOperationOptions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkOperationOption($l);

            if ($this->lnkOperationOptionsScheduledForDeletion and $this->lnkOperationOptionsScheduledForDeletion->contains($l)) {
                $this->lnkOperationOptionsScheduledForDeletion->remove($this->lnkOperationOptionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkOperationOption $lnkOperationOption The lnkOperationOption object to add.
     */
    protected function doAddLnkOperationOption($lnkOperationOption)
    {
        $this->collLnkOperationOptions[]= $lnkOperationOption;
        $lnkOperationOption->setROperationOptions($this);
    }

    /**
     * @param	LnkOperationOption $lnkOperationOption The lnkOperationOption object to remove.
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function removeLnkOperationOption($lnkOperationOption)
    {
        if ($this->getLnkOperationOptions()->contains($lnkOperationOption)) {
            $this->collLnkOperationOptions->remove($this->collLnkOperationOptions->search($lnkOperationOption));
            if (null === $this->lnkOperationOptionsScheduledForDeletion) {
                $this->lnkOperationOptionsScheduledForDeletion = clone $this->collLnkOperationOptions;
                $this->lnkOperationOptionsScheduledForDeletion->clear();
            }
            $this->lnkOperationOptionsScheduledForDeletion[]= clone $lnkOperationOption;
            $lnkOperationOption->setROperationOptions(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationOptions is new, it will return
     * an empty collection; or if this ROperationOptions has previously
     * been saved, it will retrieve related LnkOperationOptions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkOperationOption[] List of LnkOperationOption objects
     */
    public function getLnkOperationOptionsJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkOperationOptionQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getLnkOperationOptions($query, $con);
    }

    /**
     * Clears out the collROperationTypeRequiredOptionss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationOptions The current object (for fluent API support)
     * @see        addROperationTypeRequiredOptionss()
     */
    public function clearROperationTypeRequiredOptionss()
    {
        $this->collROperationTypeRequiredOptionss = null; // important to set this to null since that means it is uninitialized
        $this->collROperationTypeRequiredOptionssPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationTypeRequiredOptionss collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationTypeRequiredOptionss($v = true)
    {
        $this->collROperationTypeRequiredOptionssPartial = $v;
    }

    /**
     * Initializes the collROperationTypeRequiredOptionss collection.
     *
     * By default this just sets the collROperationTypeRequiredOptionss collection to an empty array (like clearcollROperationTypeRequiredOptionss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationTypeRequiredOptionss($overrideExisting = true)
    {
        if (null !== $this->collROperationTypeRequiredOptionss && !$overrideExisting) {
            return;
        }
        $this->collROperationTypeRequiredOptionss = new PropelObjectCollection();
        $this->collROperationTypeRequiredOptionss->setModel('ROperationTypeRequiredOptions');
    }

    /**
     * Gets an array of ROperationTypeRequiredOptions objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationOptions is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationTypeRequiredOptions[] List of ROperationTypeRequiredOptions objects
     * @throws PropelException
     */
    public function getROperationTypeRequiredOptionss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeRequiredOptionssPartial && !$this->isNew();
        if (null === $this->collROperationTypeRequiredOptionss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeRequiredOptionss) {
                // return empty collection
                $this->initROperationTypeRequiredOptionss();
            } else {
                $collROperationTypeRequiredOptionss = ROperationTypeRequiredOptionsQuery::create(null, $criteria)
                    ->filterByROperationOptions($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationTypeRequiredOptionssPartial && count($collROperationTypeRequiredOptionss)) {
                      $this->initROperationTypeRequiredOptionss(false);

                      foreach ($collROperationTypeRequiredOptionss as $obj) {
                        if (false == $this->collROperationTypeRequiredOptionss->contains($obj)) {
                          $this->collROperationTypeRequiredOptionss->append($obj);
                        }
                      }

                      $this->collROperationTypeRequiredOptionssPartial = true;
                    }

                    $collROperationTypeRequiredOptionss->getInternalIterator()->rewind();

                    return $collROperationTypeRequiredOptionss;
                }

                if ($partial && $this->collROperationTypeRequiredOptionss) {
                    foreach ($this->collROperationTypeRequiredOptionss as $obj) {
                        if ($obj->isNew()) {
                            $collROperationTypeRequiredOptionss[] = $obj;
                        }
                    }
                }

                $this->collROperationTypeRequiredOptionss = $collROperationTypeRequiredOptionss;
                $this->collROperationTypeRequiredOptionssPartial = false;
            }
        }

        return $this->collROperationTypeRequiredOptionss;
    }

    /**
     * Sets a collection of ROperationTypeRequiredOptions objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationTypeRequiredOptionss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function setROperationTypeRequiredOptionss(PropelCollection $rOperationTypeRequiredOptionss, PropelPDO $con = null)
    {
        $rOperationTypeRequiredOptionssToDelete = $this->getROperationTypeRequiredOptionss(new Criteria(), $con)->diff($rOperationTypeRequiredOptionss);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->rOperationTypeRequiredOptionssScheduledForDeletion = clone $rOperationTypeRequiredOptionssToDelete;

        foreach ($rOperationTypeRequiredOptionssToDelete as $rOperationTypeRequiredOptionsRemoved) {
            $rOperationTypeRequiredOptionsRemoved->setROperationOptions(null);
        }

        $this->collROperationTypeRequiredOptionss = null;
        foreach ($rOperationTypeRequiredOptionss as $rOperationTypeRequiredOptions) {
            $this->addROperationTypeRequiredOptions($rOperationTypeRequiredOptions);
        }

        $this->collROperationTypeRequiredOptionss = $rOperationTypeRequiredOptionss;
        $this->collROperationTypeRequiredOptionssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationTypeRequiredOptions objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationTypeRequiredOptions objects.
     * @throws PropelException
     */
    public function countROperationTypeRequiredOptionss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeRequiredOptionssPartial && !$this->isNew();
        if (null === $this->collROperationTypeRequiredOptionss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeRequiredOptionss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationTypeRequiredOptionss());
            }
            $query = ROperationTypeRequiredOptionsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByROperationOptions($this)
                ->count($con);
        }

        return count($this->collROperationTypeRequiredOptionss);
    }

    /**
     * Method called to associate a ROperationTypeRequiredOptions object to this object
     * through the ROperationTypeRequiredOptions foreign key attribute.
     *
     * @param    ROperationTypeRequiredOptions $l ROperationTypeRequiredOptions
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function addROperationTypeRequiredOptions(ROperationTypeRequiredOptions $l)
    {
        if ($this->collROperationTypeRequiredOptionss === null) {
            $this->initROperationTypeRequiredOptionss();
            $this->collROperationTypeRequiredOptionssPartial = true;
        }

        if (!in_array($l, $this->collROperationTypeRequiredOptionss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationTypeRequiredOptions($l);

            if ($this->rOperationTypeRequiredOptionssScheduledForDeletion and $this->rOperationTypeRequiredOptionssScheduledForDeletion->contains($l)) {
                $this->rOperationTypeRequiredOptionssScheduledForDeletion->remove($this->rOperationTypeRequiredOptionssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationTypeRequiredOptions $rOperationTypeRequiredOptions The rOperationTypeRequiredOptions object to add.
     */
    protected function doAddROperationTypeRequiredOptions($rOperationTypeRequiredOptions)
    {
        $this->collROperationTypeRequiredOptionss[]= $rOperationTypeRequiredOptions;
        $rOperationTypeRequiredOptions->setROperationOptions($this);
    }

    /**
     * @param	ROperationTypeRequiredOptions $rOperationTypeRequiredOptions The rOperationTypeRequiredOptions object to remove.
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function removeROperationTypeRequiredOptions($rOperationTypeRequiredOptions)
    {
        if ($this->getROperationTypeRequiredOptionss()->contains($rOperationTypeRequiredOptions)) {
            $this->collROperationTypeRequiredOptionss->remove($this->collROperationTypeRequiredOptionss->search($rOperationTypeRequiredOptions));
            if (null === $this->rOperationTypeRequiredOptionssScheduledForDeletion) {
                $this->rOperationTypeRequiredOptionssScheduledForDeletion = clone $this->collROperationTypeRequiredOptionss;
                $this->rOperationTypeRequiredOptionssScheduledForDeletion->clear();
            }
            $this->rOperationTypeRequiredOptionssScheduledForDeletion[]= clone $rOperationTypeRequiredOptions;
            $rOperationTypeRequiredOptions->setROperationOptions(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationOptions is new, it will return
     * an empty collection; or if this ROperationOptions has previously
     * been saved, it will retrieve related ROperationTypeRequiredOptionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeRequiredOptions[] List of ROperationTypeRequiredOptions objects
     */
    public function getROperationTypeRequiredOptionssJoinROperationType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeRequiredOptionsQuery::create(null, $criteria);
        $query->joinWith('ROperationType', $join_behavior);

        return $this->getROperationTypeRequiredOptionss($query, $con);
    }

    /**
     * Clears out the collROperationStatusRequiredOptionss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationOptions The current object (for fluent API support)
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
     * If this ROperationOptions is new, it will return
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
                    ->filterByROperationOptions($this)
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
     * @return ROperationOptions The current object (for fluent API support)
     */
    public function setROperationStatusRequiredOptionss(PropelCollection $rOperationStatusRequiredOptionss, PropelPDO $con = null)
    {
        $rOperationStatusRequiredOptionssToDelete = $this->getROperationStatusRequiredOptionss(new Criteria(), $con)->diff($rOperationStatusRequiredOptionss);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->rOperationStatusRequiredOptionssScheduledForDeletion = clone $rOperationStatusRequiredOptionssToDelete;

        foreach ($rOperationStatusRequiredOptionssToDelete as $rOperationStatusRequiredOptionsRemoved) {
            $rOperationStatusRequiredOptionsRemoved->setROperationOptions(null);
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
                ->filterByROperationOptions($this)
                ->count($con);
        }

        return count($this->collROperationStatusRequiredOptionss);
    }

    /**
     * Method called to associate a ROperationStatusRequiredOptions object to this object
     * through the ROperationStatusRequiredOptions foreign key attribute.
     *
     * @param    ROperationStatusRequiredOptions $l ROperationStatusRequiredOptions
     * @return ROperationOptions The current object (for fluent API support)
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
        $rOperationStatusRequiredOptions->setROperationOptions($this);
    }

    /**
     * @param	ROperationStatusRequiredOptions $rOperationStatusRequiredOptions The rOperationStatusRequiredOptions object to remove.
     * @return ROperationOptions The current object (for fluent API support)
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
            $rOperationStatusRequiredOptions->setROperationOptions(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationOptions is new, it will return
     * an empty collection; or if this ROperationOptions has previously
     * been saved, it will retrieve related ROperationStatusRequiredOptionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationOptions.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationStatusRequiredOptions[] List of ROperationStatusRequiredOptions objects
     */
    public function getROperationStatusRequiredOptionssJoinROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationStatusRequiredOptionsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatus', $join_behavior);

        return $this->getROperationStatusRequiredOptionss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_op_option_id = null;
        $this->r_op_option_libelle = null;
        $this->r_op_option_type = null;
        $this->r_op_option_parent = null;
        $this->r_op_option_order = null;
        $this->r_operation_option_r_activity_kpi_id = null;
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
            if ($this->collLnkOperationOptions) {
                foreach ($this->collLnkOperationOptions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeRequiredOptionss) {
                foreach ($this->collROperationTypeRequiredOptionss as $o) {
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

        if ($this->collLnkOperationOptions instanceof PropelCollection) {
            $this->collLnkOperationOptions->clearIterator();
        }
        $this->collLnkOperationOptions = null;
        if ($this->collROperationTypeRequiredOptionss instanceof PropelCollection) {
            $this->collROperationTypeRequiredOptionss->clearIterator();
        }
        $this->collROperationTypeRequiredOptionss = null;
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
        return (string) $this->exportTo(ROperationOptionsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseROperationOptionsPeer::getConnection();
            }
}
