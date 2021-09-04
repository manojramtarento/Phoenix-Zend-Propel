<?php


/**
 * Base class that represents a row from the 'operation_rubriques' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationRubriques extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationRubriquesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationRubriquesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the op_rubrique_id field.
     * @var        int
     */
    protected $op_rubrique_id;

    /**
     * The value for the op_r_rubrique_id field.
     * @var        int
     */
    protected $op_r_rubrique_id;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the op_rubrique_libelle field.
     * @var        string
     */
    protected $op_rubrique_libelle;

    /**
     * The value for the op_rubrique_order field.
     * @var        int
     */
    protected $op_rubrique_order;

    /**
     * The value for the r_tva_type_id field.
     * @var        int
     */
    protected $r_tva_type_id;

    /**
     * The value for the r_rub_type_id field.
     * @var        int
     */
    protected $r_rub_type_id;

    /**
     * @var        Operations
     */
    protected $aOperations;

    /**
     * @var        RRubriquesType
     */
    protected $aRRubriquesType;

    /**
     * @var        RTvaType
     */
    protected $aRTvaType;

    /**
     * @var        PropelObjectCollection|OperationPrestations[] Collection to store aggregation of OperationPrestations objects.
     */
    protected $collOperationPrestationss;
    protected $collOperationPrestationssPartial;

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
    protected $operationPrestationssScheduledForDeletion = null;

    /**
     * Get the [op_rubrique_id] column value.
     *
     * @return int
     */
    public function getOpRubriqueId()
    {

        return $this->op_rubrique_id;
    }

    /**
     * Get the [op_r_rubrique_id] column value.
     *
     * @return int
     */
    public function getOpRRubriqueId()
    {

        return $this->op_r_rubrique_id;
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
     * Get the [op_rubrique_libelle] column value.
     *
     * @return string
     */
    public function getOpRubriqueLibelle()
    {

        return $this->op_rubrique_libelle;
    }

    /**
     * Get the [op_rubrique_order] column value.
     *
     * @return int
     */
    public function getOpRubriqueOrder()
    {

        return $this->op_rubrique_order;
    }

    /**
     * Get the [r_tva_type_id] column value.
     *
     * @return int
     */
    public function getRTvaTypeId()
    {

        return $this->r_tva_type_id;
    }

    /**
     * Get the [r_rub_type_id] column value.
     *
     * @return int
     */
    public function getRRubTypeId()
    {

        return $this->r_rub_type_id;
    }

    /**
     * Set the value of [op_rubrique_id] column.
     *
     * @param  int $v new value
     * @return OperationRubriques The current object (for fluent API support)
     */
    public function setOpRubriqueId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_rubrique_id !== $v) {
                    $this->op_rubrique_id = $v;
                    $this->modifiedColumns[] = OperationRubriquesPeer::OP_RUBRIQUE_ID;
                }


        return $this;
    } // setOpRubriqueId()

    /**
     * Set the value of [op_r_rubrique_id] column.
     *
     * @param  int $v new value
     * @return OperationRubriques The current object (for fluent API support)
     */
    public function setOpRRubriqueId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_r_rubrique_id !== $v) {
                    $this->op_r_rubrique_id = $v;
                    $this->modifiedColumns[] = OperationRubriquesPeer::OP_R_RUBRIQUE_ID;
                }


        return $this;
    } // setOpRRubriqueId()

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return OperationRubriques The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationRubriquesPeer::OP_ID;
                }

        if ($this->aOperations !== null && $this->aOperations->getOpId() !== $v) {
            $this->aOperations = null;
        }


        return $this;
    } // setOpId()

    /**
     * Set the value of [op_rubrique_libelle] column.
     *
     * @param  string $v new value
     * @return OperationRubriques The current object (for fluent API support)
     */
    public function setOpRubriqueLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_rubrique_libelle !== $v) {
            $this->op_rubrique_libelle = $v;
            $this->modifiedColumns[] = OperationRubriquesPeer::OP_RUBRIQUE_LIBELLE;
        }


        return $this;
    } // setOpRubriqueLibelle()

    /**
     * Set the value of [op_rubrique_order] column.
     *
     * @param  int $v new value
     * @return OperationRubriques The current object (for fluent API support)
     */
    public function setOpRubriqueOrder($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_rubrique_order !== $v) {
                    $this->op_rubrique_order = $v;
                    $this->modifiedColumns[] = OperationRubriquesPeer::OP_RUBRIQUE_ORDER;
                }


        return $this;
    } // setOpRubriqueOrder()

    /**
     * Set the value of [r_tva_type_id] column.
     *
     * @param  int $v new value
     * @return OperationRubriques The current object (for fluent API support)
     */
    public function setRTvaTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_tva_type_id !== $v) {
                    $this->r_tva_type_id = $v;
                    $this->modifiedColumns[] = OperationRubriquesPeer::R_TVA_TYPE_ID;
                }

        if ($this->aRTvaType !== null && $this->aRTvaType->getRTvaId() !== $v) {
            $this->aRTvaType = null;
        }


        return $this;
    } // setRTvaTypeId()

    /**
     * Set the value of [r_rub_type_id] column.
     *
     * @param  int $v new value
     * @return OperationRubriques The current object (for fluent API support)
     */
    public function setRRubTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_rub_type_id !== $v) {
                    $this->r_rub_type_id = $v;
                    $this->modifiedColumns[] = OperationRubriquesPeer::R_RUB_TYPE_ID;
                }

        if ($this->aRRubriquesType !== null && $this->aRRubriquesType->getRubriqueTypeId() !== $v) {
            $this->aRRubriquesType = null;
        }


        return $this;
    } // setRRubTypeId()

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

            $this->op_rubrique_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_r_rubrique_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->op_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->op_rubrique_libelle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->op_rubrique_order = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->r_tva_type_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->r_rub_type_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = OperationRubriquesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OperationRubriques object", $e);
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
        if ($this->aRTvaType !== null && $this->r_tva_type_id !== $this->aRTvaType->getRTvaId()) {
            $this->aRTvaType = null;
        }
        if ($this->aRRubriquesType !== null && $this->r_rub_type_id !== $this->aRRubriquesType->getRubriqueTypeId()) {
            $this->aRRubriquesType = null;
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
            $con = Propel::getConnection(OperationRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationRubriquesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperations = null;
            $this->aRRubriquesType = null;
            $this->aRTvaType = null;
            $this->collOperationPrestationss = null;

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
            $con = Propel::getConnection(OperationRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationRubriquesQuery::create()
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
            $con = Propel::getConnection(OperationRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OperationRubriquesPeer::addInstanceToPool($this);
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

            if ($this->aRRubriquesType !== null) {
                if ($this->aRRubriquesType->isModified() || $this->aRRubriquesType->isNew()) {
                    $affectedRows += $this->aRRubriquesType->save($con);
                }
                $this->setRRubriquesType($this->aRRubriquesType);
            }

            if ($this->aRTvaType !== null) {
                if ($this->aRTvaType->isModified() || $this->aRTvaType->isNew()) {
                    $affectedRows += $this->aRTvaType->save($con);
                }
                $this->setRTvaType($this->aRTvaType);
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

            if ($this->operationPrestationssScheduledForDeletion !== null) {
                if (!$this->operationPrestationssScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationPrestationssScheduledForDeletion as $operationPrestations) {
                        // need to save related object because we set the relation to null
                        $operationPrestations->save($con);
                    }
                    $this->operationPrestationssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationPrestationss !== null) {
                foreach ($this->collOperationPrestationss as $referrerFK) {
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

        $this->modifiedColumns[] = OperationRubriquesPeer::OP_RUBRIQUE_ID;
        if (null !== $this->op_rubrique_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OperationRubriquesPeer::OP_RUBRIQUE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationRubriquesPeer::OP_RUBRIQUE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_rubrique_id`';
        }
        if ($this->isColumnModified(OperationRubriquesPeer::OP_R_RUBRIQUE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_r_rubrique_id`';
        }
        if ($this->isColumnModified(OperationRubriquesPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(OperationRubriquesPeer::OP_RUBRIQUE_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`op_rubrique_libelle`';
        }
        if ($this->isColumnModified(OperationRubriquesPeer::OP_RUBRIQUE_ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`op_rubrique_order`';
        }
        if ($this->isColumnModified(OperationRubriquesPeer::R_TVA_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_tva_type_id`';
        }
        if ($this->isColumnModified(OperationRubriquesPeer::R_RUB_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_rub_type_id`';
        }

        $sql = sprintf(
            'INSERT INTO `operation_rubriques` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`op_rubrique_id`':
                        $stmt->bindValue($identifier, $this->op_rubrique_id, PDO::PARAM_INT);
                        break;
                    case '`op_r_rubrique_id`':
                        $stmt->bindValue($identifier, $this->op_r_rubrique_id, PDO::PARAM_INT);
                        break;
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`op_rubrique_libelle`':
                        $stmt->bindValue($identifier, $this->op_rubrique_libelle, PDO::PARAM_STR);
                        break;
                    case '`op_rubrique_order`':
                        $stmt->bindValue($identifier, $this->op_rubrique_order, PDO::PARAM_INT);
                        break;
                    case '`r_tva_type_id`':
                        $stmt->bindValue($identifier, $this->r_tva_type_id, PDO::PARAM_INT);
                        break;
                    case '`r_rub_type_id`':
                        $stmt->bindValue($identifier, $this->r_rub_type_id, PDO::PARAM_INT);
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
        $this->setOpRubriqueId($pk);

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

            if ($this->aRRubriquesType !== null) {
                if (!$this->aRRubriquesType->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRRubriquesType->getValidationFailures());
                }
            }

            if ($this->aRTvaType !== null) {
                if (!$this->aRTvaType->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRTvaType->getValidationFailures());
                }
            }


            if (($retval = OperationRubriquesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOperationPrestationss !== null) {
                    foreach ($this->collOperationPrestationss as $referrerFK) {
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
        $pos = OperationRubriquesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOpRubriqueId();
                break;
            case 1:
                return $this->getOpRRubriqueId();
                break;
            case 2:
                return $this->getOpId();
                break;
            case 3:
                return $this->getOpRubriqueLibelle();
                break;
            case 4:
                return $this->getOpRubriqueOrder();
                break;
            case 5:
                return $this->getRTvaTypeId();
                break;
            case 6:
                return $this->getRRubTypeId();
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
        if (isset($alreadyDumpedObjects['OperationRubriques'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OperationRubriques'][$this->getPrimaryKey()] = true;
        $keys = OperationRubriquesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOpRubriqueId(),
            $keys[1] => $this->getOpRRubriqueId(),
            $keys[2] => $this->getOpId(),
            $keys[3] => $this->getOpRubriqueLibelle(),
            $keys[4] => $this->getOpRubriqueOrder(),
            $keys[5] => $this->getRTvaTypeId(),
            $keys[6] => $this->getRRubTypeId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperations) {
                $result['Operations'] = $this->aOperations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRRubriquesType) {
                $result['RRubriquesType'] = $this->aRRubriquesType->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRTvaType) {
                $result['RTvaType'] = $this->aRTvaType->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collOperationPrestationss) {
                $result['OperationPrestationss'] = $this->collOperationPrestationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = OperationRubriquesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOpRubriqueId($value);
                break;
            case 1:
                $this->setOpRRubriqueId($value);
                break;
            case 2:
                $this->setOpId($value);
                break;
            case 3:
                $this->setOpRubriqueLibelle($value);
                break;
            case 4:
                $this->setOpRubriqueOrder($value);
                break;
            case 5:
                $this->setRTvaTypeId($value);
                break;
            case 6:
                $this->setRRubTypeId($value);
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
        $keys = OperationRubriquesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOpRubriqueId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpRRubriqueId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOpId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOpRubriqueLibelle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOpRubriqueOrder($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRTvaTypeId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRRubTypeId($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationRubriquesPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationRubriquesPeer::OP_RUBRIQUE_ID)) $criteria->add(OperationRubriquesPeer::OP_RUBRIQUE_ID, $this->op_rubrique_id);
        if ($this->isColumnModified(OperationRubriquesPeer::OP_R_RUBRIQUE_ID)) $criteria->add(OperationRubriquesPeer::OP_R_RUBRIQUE_ID, $this->op_r_rubrique_id);
        if ($this->isColumnModified(OperationRubriquesPeer::OP_ID)) $criteria->add(OperationRubriquesPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(OperationRubriquesPeer::OP_RUBRIQUE_LIBELLE)) $criteria->add(OperationRubriquesPeer::OP_RUBRIQUE_LIBELLE, $this->op_rubrique_libelle);
        if ($this->isColumnModified(OperationRubriquesPeer::OP_RUBRIQUE_ORDER)) $criteria->add(OperationRubriquesPeer::OP_RUBRIQUE_ORDER, $this->op_rubrique_order);
        if ($this->isColumnModified(OperationRubriquesPeer::R_TVA_TYPE_ID)) $criteria->add(OperationRubriquesPeer::R_TVA_TYPE_ID, $this->r_tva_type_id);
        if ($this->isColumnModified(OperationRubriquesPeer::R_RUB_TYPE_ID)) $criteria->add(OperationRubriquesPeer::R_RUB_TYPE_ID, $this->r_rub_type_id);

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
        $criteria = new Criteria(OperationRubriquesPeer::DATABASE_NAME);
        $criteria->add(OperationRubriquesPeer::OP_RUBRIQUE_ID, $this->op_rubrique_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOpRubriqueId();
    }

    /**
     * Generic method to set the primary key (op_rubrique_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOpRubriqueId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOpRubriqueId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of OperationRubriques (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpRRubriqueId($this->getOpRRubriqueId());
        $copyObj->setOpId($this->getOpId());
        $copyObj->setOpRubriqueLibelle($this->getOpRubriqueLibelle());
        $copyObj->setOpRubriqueOrder($this->getOpRubriqueOrder());
        $copyObj->setRTvaTypeId($this->getRTvaTypeId());
        $copyObj->setRRubTypeId($this->getRRubTypeId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOperationPrestationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationPrestations($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOpRubriqueId(NULL); // this is a auto-increment column, so set to default value
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
     * @return OperationRubriques Clone of current object.
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
     * @return OperationRubriquesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationRubriquesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return OperationRubriques The current object (for fluent API support)
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
            $v->addOperationRubriques($this);
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
                $this->aOperations->addOperationRubriquess($this);
             */
        }

        return $this->aOperations;
    }

    /**
     * Declares an association between this object and a RRubriquesType object.
     *
     * @param                  RRubriquesType $v
     * @return OperationRubriques The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRRubriquesType(RRubriquesType $v = null)
    {
        if ($v === null) {
            $this->setRRubTypeId(NULL);
        } else {
            $this->setRRubTypeId($v->getRubriqueTypeId());
        }

        $this->aRRubriquesType = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RRubriquesType object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationRubriques($this);
        }


        return $this;
    }


    /**
     * Get the associated RRubriquesType object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RRubriquesType The associated RRubriquesType object.
     * @throws PropelException
     */
    public function getRRubriquesType(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRRubriquesType === null && ($this->r_rub_type_id !== null) && $doQuery) {
            $this->aRRubriquesType = RRubriquesTypeQuery::create()->findPk($this->r_rub_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRRubriquesType->addOperationRubriquess($this);
             */
        }

        return $this->aRRubriquesType;
    }

    /**
     * Declares an association between this object and a RTvaType object.
     *
     * @param                  RTvaType $v
     * @return OperationRubriques The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRTvaType(RTvaType $v = null)
    {
        if ($v === null) {
            $this->setRTvaTypeId(NULL);
        } else {
            $this->setRTvaTypeId($v->getRTvaId());
        }

        $this->aRTvaType = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RTvaType object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationRubriques($this);
        }


        return $this;
    }


    /**
     * Get the associated RTvaType object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RTvaType The associated RTvaType object.
     * @throws PropelException
     */
    public function getRTvaType(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRTvaType === null && ($this->r_tva_type_id !== null) && $doQuery) {
            $this->aRTvaType = RTvaTypeQuery::create()->findPk($this->r_tva_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRTvaType->addOperationRubriquess($this);
             */
        }

        return $this->aRTvaType;
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
        if ('OperationPrestations' == $relationName) {
            $this->initOperationPrestationss();
        }
    }

    /**
     * Clears out the collOperationPrestationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return OperationRubriques The current object (for fluent API support)
     * @see        addOperationPrestationss()
     */
    public function clearOperationPrestationss()
    {
        $this->collOperationPrestationss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationPrestationssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationPrestationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationPrestationss($v = true)
    {
        $this->collOperationPrestationssPartial = $v;
    }

    /**
     * Initializes the collOperationPrestationss collection.
     *
     * By default this just sets the collOperationPrestationss collection to an empty array (like clearcollOperationPrestationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationPrestationss($overrideExisting = true)
    {
        if (null !== $this->collOperationPrestationss && !$overrideExisting) {
            return;
        }
        $this->collOperationPrestationss = new PropelObjectCollection();
        $this->collOperationPrestationss->setModel('OperationPrestations');
    }

    /**
     * Gets an array of OperationPrestations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this OperationRubriques is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     * @throws PropelException
     */
    public function getOperationPrestationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationPrestationssPartial && !$this->isNew();
        if (null === $this->collOperationPrestationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationPrestationss) {
                // return empty collection
                $this->initOperationPrestationss();
            } else {
                $collOperationPrestationss = OperationPrestationsQuery::create(null, $criteria)
                    ->filterByOperationRubriques($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationPrestationssPartial && count($collOperationPrestationss)) {
                      $this->initOperationPrestationss(false);

                      foreach ($collOperationPrestationss as $obj) {
                        if (false == $this->collOperationPrestationss->contains($obj)) {
                          $this->collOperationPrestationss->append($obj);
                        }
                      }

                      $this->collOperationPrestationssPartial = true;
                    }

                    $collOperationPrestationss->getInternalIterator()->rewind();

                    return $collOperationPrestationss;
                }

                if ($partial && $this->collOperationPrestationss) {
                    foreach ($this->collOperationPrestationss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationPrestationss[] = $obj;
                        }
                    }
                }

                $this->collOperationPrestationss = $collOperationPrestationss;
                $this->collOperationPrestationssPartial = false;
            }
        }

        return $this->collOperationPrestationss;
    }

    /**
     * Sets a collection of OperationPrestations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationPrestationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return OperationRubriques The current object (for fluent API support)
     */
    public function setOperationPrestationss(PropelCollection $operationPrestationss, PropelPDO $con = null)
    {
        $operationPrestationssToDelete = $this->getOperationPrestationss(new Criteria(), $con)->diff($operationPrestationss);


        $this->operationPrestationssScheduledForDeletion = $operationPrestationssToDelete;

        foreach ($operationPrestationssToDelete as $operationPrestationsRemoved) {
            $operationPrestationsRemoved->setOperationRubriques(null);
        }

        $this->collOperationPrestationss = null;
        foreach ($operationPrestationss as $operationPrestations) {
            $this->addOperationPrestations($operationPrestations);
        }

        $this->collOperationPrestationss = $operationPrestationss;
        $this->collOperationPrestationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationPrestations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationPrestations objects.
     * @throws PropelException
     */
    public function countOperationPrestationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationPrestationssPartial && !$this->isNew();
        if (null === $this->collOperationPrestationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationPrestationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationPrestationss());
            }
            $query = OperationPrestationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperationRubriques($this)
                ->count($con);
        }

        return count($this->collOperationPrestationss);
    }

    /**
     * Method called to associate a OperationPrestations object to this object
     * through the OperationPrestations foreign key attribute.
     *
     * @param    OperationPrestations $l OperationPrestations
     * @return OperationRubriques The current object (for fluent API support)
     */
    public function addOperationPrestations(OperationPrestations $l)
    {
        if ($this->collOperationPrestationss === null) {
            $this->initOperationPrestationss();
            $this->collOperationPrestationssPartial = true;
        }

        if (!in_array($l, $this->collOperationPrestationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationPrestations($l);

            if ($this->operationPrestationssScheduledForDeletion and $this->operationPrestationssScheduledForDeletion->contains($l)) {
                $this->operationPrestationssScheduledForDeletion->remove($this->operationPrestationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationPrestations $operationPrestations The operationPrestations object to add.
     */
    protected function doAddOperationPrestations($operationPrestations)
    {
        $this->collOperationPrestationss[]= $operationPrestations;
        $operationPrestations->setOperationRubriques($this);
    }

    /**
     * @param	OperationPrestations $operationPrestations The operationPrestations object to remove.
     * @return OperationRubriques The current object (for fluent API support)
     */
    public function removeOperationPrestations($operationPrestations)
    {
        if ($this->getOperationPrestationss()->contains($operationPrestations)) {
            $this->collOperationPrestationss->remove($this->collOperationPrestationss->search($operationPrestations));
            if (null === $this->operationPrestationssScheduledForDeletion) {
                $this->operationPrestationssScheduledForDeletion = clone $this->collOperationPrestationss;
                $this->operationPrestationssScheduledForDeletion->clear();
            }
            $this->operationPrestationssScheduledForDeletion[]= $operationPrestations;
            $operationPrestations->setOperationRubriques(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationRubriques is new, it will return
     * an empty collection; or if this OperationRubriques has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationRubriques.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationScenarii($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationScenarii', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationRubriques is new, it will return
     * an empty collection; or if this OperationRubriques has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationRubriques.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationRubriques is new, it will return
     * an empty collection; or if this OperationRubriques has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationRubriques.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinRPrestations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('RPrestations', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationRubriques is new, it will return
     * an empty collection; or if this OperationRubriques has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationRubriques.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationPrimes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationPrimes', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationRubriques is new, it will return
     * an empty collection; or if this OperationRubriques has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationRubriques.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinHistoCouts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('HistoCouts', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationRubriques is new, it will return
     * an empty collection; or if this OperationRubriques has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationRubriques.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinUsers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('Users', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->op_rubrique_id = null;
        $this->op_r_rubrique_id = null;
        $this->op_id = null;
        $this->op_rubrique_libelle = null;
        $this->op_rubrique_order = null;
        $this->r_tva_type_id = null;
        $this->r_rub_type_id = null;
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
            if ($this->collOperationPrestationss) {
                foreach ($this->collOperationPrestationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aOperations instanceof Persistent) {
              $this->aOperations->clearAllReferences($deep);
            }
            if ($this->aRRubriquesType instanceof Persistent) {
              $this->aRRubriquesType->clearAllReferences($deep);
            }
            if ($this->aRTvaType instanceof Persistent) {
              $this->aRTvaType->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOperationPrestationss instanceof PropelCollection) {
            $this->collOperationPrestationss->clearIterator();
        }
        $this->collOperationPrestationss = null;
        $this->aOperations = null;
        $this->aRRubriquesType = null;
        $this->aRTvaType = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OperationRubriquesPeer::DEFAULT_STRING_FORMAT);
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
                return BaseOperationRubriquesPeer::getConnection();
            }
}
