<?php


/**
 * Base class that represents a row from the 'operation_scenarii_parents' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationScenariiParents extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationScenariiParentsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationScenariiParentsPeer
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
     * The value for the ops_numero field.
     * @var        int
     */
    protected $ops_numero;

    /**
     * The value for the ops_parent_numero field.
     * @var        int
     */
    protected $ops_parent_numero;

    /**
     * @var        OperationScenarii
     */
    protected $aOperationScenariiRelatedByOpsNumero;

    /**
     * @var        OperationScenarii
     */
    protected $aOperationScenariiRelatedByOpsParentNumero;

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
     * Get the [ops_numero] column value.
     *
     * @return int
     */
    public function getOpsNumero()
    {

        return $this->ops_numero;
    }

    /**
     * Get the [ops_parent_numero] column value.
     *
     * @return int
     */
    public function getOpsParentNumero()
    {

        return $this->ops_parent_numero;
    }

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return OperationScenariiParents The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationScenariiParentsPeer::OP_ID;
                }


        return $this;
    } // setOpId()

    /**
     * Set the value of [ops_numero] column.
     *
     * @param  int $v new value
     * @return OperationScenariiParents The current object (for fluent API support)
     */
    public function setOpsNumero($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ops_numero !== $v) {
                    $this->ops_numero = $v;
                    $this->modifiedColumns[] = OperationScenariiParentsPeer::OPS_NUMERO;
                }

        if ($this->aOperationScenariiRelatedByOpsNumero !== null && $this->aOperationScenariiRelatedByOpsNumero->getOpScenarioNumero() !== $v) {
            $this->aOperationScenariiRelatedByOpsNumero = null;
        }


        return $this;
    } // setOpsNumero()

    /**
     * Set the value of [ops_parent_numero] column.
     *
     * @param  int $v new value
     * @return OperationScenariiParents The current object (for fluent API support)
     */
    public function setOpsParentNumero($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ops_parent_numero !== $v) {
                    $this->ops_parent_numero = $v;
                    $this->modifiedColumns[] = OperationScenariiParentsPeer::OPS_PARENT_NUMERO;
                }

        if ($this->aOperationScenariiRelatedByOpsParentNumero !== null && $this->aOperationScenariiRelatedByOpsParentNumero->getOpScenarioNumero() !== $v) {
            $this->aOperationScenariiRelatedByOpsParentNumero = null;
        }


        return $this;
    } // setOpsParentNumero()

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
            $this->ops_numero = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->ops_parent_numero = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = OperationScenariiParentsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OperationScenariiParents object", $e);
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

        if ($this->aOperationScenariiRelatedByOpsNumero !== null && $this->ops_numero !== $this->aOperationScenariiRelatedByOpsNumero->getOpScenarioNumero()) {
            $this->aOperationScenariiRelatedByOpsNumero = null;
        }
        if ($this->aOperationScenariiRelatedByOpsParentNumero !== null && $this->ops_parent_numero !== $this->aOperationScenariiRelatedByOpsParentNumero->getOpScenarioNumero()) {
            $this->aOperationScenariiRelatedByOpsParentNumero = null;
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
            $con = Propel::getConnection(OperationScenariiParentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationScenariiParentsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperationScenariiRelatedByOpsNumero = null;
            $this->aOperationScenariiRelatedByOpsParentNumero = null;
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
            $con = Propel::getConnection(OperationScenariiParentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationScenariiParentsQuery::create()
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
            $con = Propel::getConnection(OperationScenariiParentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OperationScenariiParentsPeer::addInstanceToPool($this);
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

            if ($this->aOperationScenariiRelatedByOpsNumero !== null) {
                if ($this->aOperationScenariiRelatedByOpsNumero->isModified() || $this->aOperationScenariiRelatedByOpsNumero->isNew()) {
                    $affectedRows += $this->aOperationScenariiRelatedByOpsNumero->save($con);
                }
                $this->setOperationScenariiRelatedByOpsNumero($this->aOperationScenariiRelatedByOpsNumero);
            }

            if ($this->aOperationScenariiRelatedByOpsParentNumero !== null) {
                if ($this->aOperationScenariiRelatedByOpsParentNumero->isModified() || $this->aOperationScenariiRelatedByOpsParentNumero->isNew()) {
                    $affectedRows += $this->aOperationScenariiRelatedByOpsParentNumero->save($con);
                }
                $this->setOperationScenariiRelatedByOpsParentNumero($this->aOperationScenariiRelatedByOpsParentNumero);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationScenariiParentsPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(OperationScenariiParentsPeer::OPS_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`ops_numero`';
        }
        if ($this->isColumnModified(OperationScenariiParentsPeer::OPS_PARENT_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`ops_parent_numero`';
        }

        $sql = sprintf(
            'INSERT INTO `operation_scenarii_parents` (%s) VALUES (%s)',
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
                    case '`ops_numero`':
                        $stmt->bindValue($identifier, $this->ops_numero, PDO::PARAM_INT);
                        break;
                    case '`ops_parent_numero`':
                        $stmt->bindValue($identifier, $this->ops_parent_numero, PDO::PARAM_INT);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aOperationScenariiRelatedByOpsNumero !== null) {
                if (!$this->aOperationScenariiRelatedByOpsNumero->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationScenariiRelatedByOpsNumero->getValidationFailures());
                }
            }

            if ($this->aOperationScenariiRelatedByOpsParentNumero !== null) {
                if (!$this->aOperationScenariiRelatedByOpsParentNumero->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationScenariiRelatedByOpsParentNumero->getValidationFailures());
                }
            }


            if (($retval = OperationScenariiParentsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = OperationScenariiParentsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOpsNumero();
                break;
            case 2:
                return $this->getOpsParentNumero();
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
        if (isset($alreadyDumpedObjects['OperationScenariiParents'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OperationScenariiParents'][serialize($this->getPrimaryKey())] = true;
        $keys = OperationScenariiParentsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOpId(),
            $keys[1] => $this->getOpsNumero(),
            $keys[2] => $this->getOpsParentNumero(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperationScenariiRelatedByOpsNumero) {
                $result['OperationScenariiRelatedByOpsNumero'] = $this->aOperationScenariiRelatedByOpsNumero->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationScenariiRelatedByOpsParentNumero) {
                $result['OperationScenariiRelatedByOpsParentNumero'] = $this->aOperationScenariiRelatedByOpsParentNumero->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = OperationScenariiParentsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOpsNumero($value);
                break;
            case 2:
                $this->setOpsParentNumero($value);
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
        $keys = OperationScenariiParentsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOpId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpsNumero($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOpsParentNumero($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationScenariiParentsPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationScenariiParentsPeer::OP_ID)) $criteria->add(OperationScenariiParentsPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(OperationScenariiParentsPeer::OPS_NUMERO)) $criteria->add(OperationScenariiParentsPeer::OPS_NUMERO, $this->ops_numero);
        if ($this->isColumnModified(OperationScenariiParentsPeer::OPS_PARENT_NUMERO)) $criteria->add(OperationScenariiParentsPeer::OPS_PARENT_NUMERO, $this->ops_parent_numero);

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
        $criteria = new Criteria(OperationScenariiParentsPeer::DATABASE_NAME);
        $criteria->add(OperationScenariiParentsPeer::OP_ID, $this->op_id);
        $criteria->add(OperationScenariiParentsPeer::OPS_NUMERO, $this->ops_numero);
        $criteria->add(OperationScenariiParentsPeer::OPS_PARENT_NUMERO, $this->ops_parent_numero);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getOpId();
        $pks[1] = $this->getOpsNumero();
        $pks[2] = $this->getOpsParentNumero();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setOpId($keys[0]);
        $this->setOpsNumero($keys[1]);
        $this->setOpsParentNumero($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getOpId()) && (null === $this->getOpsNumero()) && (null === $this->getOpsParentNumero());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of OperationScenariiParents (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpId($this->getOpId());
        $copyObj->setOpsNumero($this->getOpsNumero());
        $copyObj->setOpsParentNumero($this->getOpsParentNumero());

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
     * @return OperationScenariiParents Clone of current object.
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
     * @return OperationScenariiParentsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationScenariiParentsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a OperationScenarii object.
     *
     * @param                  OperationScenarii $v
     * @return OperationScenariiParents The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationScenariiRelatedByOpsNumero(OperationScenarii $v = null)
    {
        if ($v === null) {
            $this->setOpsNumero(NULL);
        } else {
            $this->setOpsNumero($v->getOpScenarioNumero());
        }

        $this->aOperationScenariiRelatedByOpsNumero = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the OperationScenarii object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationScenariiParentsRelatedByOpsNumero($this);
        }


        return $this;
    }


    /**
     * Get the associated OperationScenarii object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return OperationScenarii The associated OperationScenarii object.
     * @throws PropelException
     */
    public function getOperationScenariiRelatedByOpsNumero(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationScenariiRelatedByOpsNumero === null && ($this->ops_numero !== null) && $doQuery) {
            $this->aOperationScenariiRelatedByOpsNumero = OperationScenariiQuery::create()
                ->filterByOperationScenariiParentsRelatedByOpsNumero($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationScenariiRelatedByOpsNumero->addOperationScenariiParentssRelatedByOpsNumero($this);
             */
        }

        return $this->aOperationScenariiRelatedByOpsNumero;
    }

    /**
     * Declares an association between this object and a OperationScenarii object.
     *
     * @param                  OperationScenarii $v
     * @return OperationScenariiParents The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationScenariiRelatedByOpsParentNumero(OperationScenarii $v = null)
    {
        if ($v === null) {
            $this->setOpsParentNumero(NULL);
        } else {
            $this->setOpsParentNumero($v->getOpScenarioNumero());
        }

        $this->aOperationScenariiRelatedByOpsParentNumero = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the OperationScenarii object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationScenariiParentsRelatedByOpsParentNumero($this);
        }


        return $this;
    }


    /**
     * Get the associated OperationScenarii object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return OperationScenarii The associated OperationScenarii object.
     * @throws PropelException
     */
    public function getOperationScenariiRelatedByOpsParentNumero(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationScenariiRelatedByOpsParentNumero === null && ($this->ops_parent_numero !== null) && $doQuery) {
            $this->aOperationScenariiRelatedByOpsParentNumero = OperationScenariiQuery::create()
                ->filterByOperationScenariiParentsRelatedByOpsParentNumero($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationScenariiRelatedByOpsParentNumero->addOperationScenariiParentssRelatedByOpsParentNumero($this);
             */
        }

        return $this->aOperationScenariiRelatedByOpsParentNumero;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->op_id = null;
        $this->ops_numero = null;
        $this->ops_parent_numero = null;
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
            if ($this->aOperationScenariiRelatedByOpsNumero instanceof Persistent) {
              $this->aOperationScenariiRelatedByOpsNumero->clearAllReferences($deep);
            }
            if ($this->aOperationScenariiRelatedByOpsParentNumero instanceof Persistent) {
              $this->aOperationScenariiRelatedByOpsParentNumero->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aOperationScenariiRelatedByOpsNumero = null;
        $this->aOperationScenariiRelatedByOpsParentNumero = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OperationScenariiParentsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseOperationScenariiParentsPeer::getConnection();
            }
}
