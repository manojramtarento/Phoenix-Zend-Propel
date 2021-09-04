<?php


/**
 * Base class that represents a row from the 'r_operation_type_sub_tpl_rubrique' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplRubrique extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ROperationTypeSubTplRubriquePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ROperationTypeSubTplRubriquePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the ost_tpl_rubrique_id field.
     * @var        int
     */
    protected $ost_tpl_rubrique_id;

    /**
     * The value for the ost_tpl_id field.
     * @var        int
     */
    protected $ost_tpl_id;

    /**
     * The value for the r_rubrique_id field.
     * @var        int
     */
    protected $r_rubrique_id;

    /**
     * The value for the ost_tpl_rubrique_order field.
     * @var        int
     */
    protected $ost_tpl_rubrique_order;

    /**
     * @var        ROperationTypeSubTpl
     */
    protected $aROperationTypeSubTpl;

    /**
     * @var        PropelObjectCollection|ROperationTypeSubTplPrestation[] Collection to store aggregation of ROperationTypeSubTplPrestation objects.
     */
    protected $collROperationTypeSubTplPrestations;
    protected $collROperationTypeSubTplPrestationsPartial;

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
    protected $rOperationTypeSubTplPrestationsScheduledForDeletion = null;

    /**
     * Get the [ost_tpl_rubrique_id] column value.
     *
     * @return int
     */
    public function getOstTplRubriqueId()
    {

        return $this->ost_tpl_rubrique_id;
    }

    /**
     * Get the [ost_tpl_id] column value.
     *
     * @return int
     */
    public function getOstTplId()
    {

        return $this->ost_tpl_id;
    }

    /**
     * Get the [r_rubrique_id] column value.
     *
     * @return int
     */
    public function getRRubriqueId()
    {

        return $this->r_rubrique_id;
    }

    /**
     * Get the [ost_tpl_rubrique_order] column value.
     *
     * @return int
     */
    public function getOstTplRubriqueOrder()
    {

        return $this->ost_tpl_rubrique_order;
    }

    /**
     * Set the value of [ost_tpl_rubrique_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplRubrique The current object (for fluent API support)
     */
    public function setOstTplRubriqueId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ost_tpl_rubrique_id !== $v) {
                    $this->ost_tpl_rubrique_id = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID;
                }


        return $this;
    } // setOstTplRubriqueId()

    /**
     * Set the value of [ost_tpl_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplRubrique The current object (for fluent API support)
     */
    public function setOstTplId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ost_tpl_id !== $v) {
                    $this->ost_tpl_id = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplRubriquePeer::OST_TPL_ID;
                }

        if ($this->aROperationTypeSubTpl !== null && $this->aROperationTypeSubTpl->getOstTplId() !== $v) {
            $this->aROperationTypeSubTpl = null;
        }


        return $this;
    } // setOstTplId()

    /**
     * Set the value of [r_rubrique_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplRubrique The current object (for fluent API support)
     */
    public function setRRubriqueId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_rubrique_id !== $v) {
                    $this->r_rubrique_id = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplRubriquePeer::R_RUBRIQUE_ID;
                }


        return $this;
    } // setRRubriqueId()

    /**
     * Set the value of [ost_tpl_rubrique_order] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplRubrique The current object (for fluent API support)
     */
    public function setOstTplRubriqueOrder($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ost_tpl_rubrique_order !== $v) {
                    $this->ost_tpl_rubrique_order = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ORDER;
                }


        return $this;
    } // setOstTplRubriqueOrder()

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

            $this->ost_tpl_rubrique_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->ost_tpl_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->r_rubrique_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->ost_tpl_rubrique_order = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = ROperationTypeSubTplRubriquePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ROperationTypeSubTplRubrique object", $e);
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

        if ($this->aROperationTypeSubTpl !== null && $this->ost_tpl_id !== $this->aROperationTypeSubTpl->getOstTplId()) {
            $this->aROperationTypeSubTpl = null;
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
            $con = Propel::getConnection(ROperationTypeSubTplRubriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ROperationTypeSubTplRubriquePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aROperationTypeSubTpl = null;
            $this->collROperationTypeSubTplPrestations = null;

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
            $con = Propel::getConnection(ROperationTypeSubTplRubriquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ROperationTypeSubTplRubriqueQuery::create()
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
            $con = Propel::getConnection(ROperationTypeSubTplRubriquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ROperationTypeSubTplRubriquePeer::addInstanceToPool($this);
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

            if ($this->aROperationTypeSubTpl !== null) {
                if ($this->aROperationTypeSubTpl->isModified() || $this->aROperationTypeSubTpl->isNew()) {
                    $affectedRows += $this->aROperationTypeSubTpl->save($con);
                }
                $this->setROperationTypeSubTpl($this->aROperationTypeSubTpl);
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

            if ($this->rOperationTypeSubTplPrestationsScheduledForDeletion !== null) {
                if (!$this->rOperationTypeSubTplPrestationsScheduledForDeletion->isEmpty()) {
                    ROperationTypeSubTplPrestationQuery::create()
                        ->filterByPrimaryKeys($this->rOperationTypeSubTplPrestationsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->rOperationTypeSubTplPrestationsScheduledForDeletion = null;
                }
            }

            if ($this->collROperationTypeSubTplPrestations !== null) {
                foreach ($this->collROperationTypeSubTplPrestations as $referrerFK) {
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

        $this->modifiedColumns[] = ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID;
        if (null !== $this->ost_tpl_rubrique_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_rubrique_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplRubriquePeer::OST_TPL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplRubriquePeer::R_RUBRIQUE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_rubrique_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_rubrique_order`';
        }

        $sql = sprintf(
            'INSERT INTO `r_operation_type_sub_tpl_rubrique` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ost_tpl_rubrique_id`':
                        $stmt->bindValue($identifier, $this->ost_tpl_rubrique_id, PDO::PARAM_INT);
                        break;
                    case '`ost_tpl_id`':
                        $stmt->bindValue($identifier, $this->ost_tpl_id, PDO::PARAM_INT);
                        break;
                    case '`r_rubrique_id`':
                        $stmt->bindValue($identifier, $this->r_rubrique_id, PDO::PARAM_INT);
                        break;
                    case '`ost_tpl_rubrique_order`':
                        $stmt->bindValue($identifier, $this->ost_tpl_rubrique_order, PDO::PARAM_INT);
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
        $this->setOstTplRubriqueId($pk);

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

            if ($this->aROperationTypeSubTpl !== null) {
                if (!$this->aROperationTypeSubTpl->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aROperationTypeSubTpl->getValidationFailures());
                }
            }


            if (($retval = ROperationTypeSubTplRubriquePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collROperationTypeSubTplPrestations !== null) {
                    foreach ($this->collROperationTypeSubTplPrestations as $referrerFK) {
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
        $pos = ROperationTypeSubTplRubriquePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOstTplRubriqueId();
                break;
            case 1:
                return $this->getOstTplId();
                break;
            case 2:
                return $this->getRRubriqueId();
                break;
            case 3:
                return $this->getOstTplRubriqueOrder();
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
        if (isset($alreadyDumpedObjects['ROperationTypeSubTplRubrique'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ROperationTypeSubTplRubrique'][$this->getPrimaryKey()] = true;
        $keys = ROperationTypeSubTplRubriquePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOstTplRubriqueId(),
            $keys[1] => $this->getOstTplId(),
            $keys[2] => $this->getRRubriqueId(),
            $keys[3] => $this->getOstTplRubriqueOrder(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aROperationTypeSubTpl) {
                $result['ROperationTypeSubTpl'] = $this->aROperationTypeSubTpl->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collROperationTypeSubTplPrestations) {
                $result['ROperationTypeSubTplPrestations'] = $this->collROperationTypeSubTplPrestations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ROperationTypeSubTplRubriquePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOstTplRubriqueId($value);
                break;
            case 1:
                $this->setOstTplId($value);
                break;
            case 2:
                $this->setRRubriqueId($value);
                break;
            case 3:
                $this->setOstTplRubriqueOrder($value);
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
        $keys = ROperationTypeSubTplRubriquePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOstTplRubriqueId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOstTplId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRRubriqueId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOstTplRubriqueOrder($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ROperationTypeSubTplRubriquePeer::DATABASE_NAME);

        if ($this->isColumnModified(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID)) $criteria->add(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID, $this->ost_tpl_rubrique_id);
        if ($this->isColumnModified(ROperationTypeSubTplRubriquePeer::OST_TPL_ID)) $criteria->add(ROperationTypeSubTplRubriquePeer::OST_TPL_ID, $this->ost_tpl_id);
        if ($this->isColumnModified(ROperationTypeSubTplRubriquePeer::R_RUBRIQUE_ID)) $criteria->add(ROperationTypeSubTplRubriquePeer::R_RUBRIQUE_ID, $this->r_rubrique_id);
        if ($this->isColumnModified(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ORDER)) $criteria->add(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ORDER, $this->ost_tpl_rubrique_order);

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
        $criteria = new Criteria(ROperationTypeSubTplRubriquePeer::DATABASE_NAME);
        $criteria->add(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID, $this->ost_tpl_rubrique_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOstTplRubriqueId();
    }

    /**
     * Generic method to set the primary key (ost_tpl_rubrique_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOstTplRubriqueId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOstTplRubriqueId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ROperationTypeSubTplRubrique (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOstTplId($this->getOstTplId());
        $copyObj->setRRubriqueId($this->getRRubriqueId());
        $copyObj->setOstTplRubriqueOrder($this->getOstTplRubriqueOrder());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getROperationTypeSubTplPrestations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeSubTplPrestation($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOstTplRubriqueId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ROperationTypeSubTplRubrique Clone of current object.
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
     * @return ROperationTypeSubTplRubriquePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ROperationTypeSubTplRubriquePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ROperationTypeSubTpl object.
     *
     * @param                  ROperationTypeSubTpl $v
     * @return ROperationTypeSubTplRubrique The current object (for fluent API support)
     * @throws PropelException
     */
    public function setROperationTypeSubTpl(ROperationTypeSubTpl $v = null)
    {
        if ($v === null) {
            $this->setOstTplId(NULL);
        } else {
            $this->setOstTplId($v->getOstTplId());
        }

        $this->aROperationTypeSubTpl = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationTypeSubTpl object, it will not be re-added.
        if ($v !== null) {
            $v->addROperationTypeSubTplRubrique($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationTypeSubTpl object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationTypeSubTpl The associated ROperationTypeSubTpl object.
     * @throws PropelException
     */
    public function getROperationTypeSubTpl(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aROperationTypeSubTpl === null && ($this->ost_tpl_id !== null) && $doQuery) {
            $this->aROperationTypeSubTpl = ROperationTypeSubTplQuery::create()->findPk($this->ost_tpl_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aROperationTypeSubTpl->addROperationTypeSubTplRubriques($this);
             */
        }

        return $this->aROperationTypeSubTpl;
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
        if ('ROperationTypeSubTplPrestation' == $relationName) {
            $this->initROperationTypeSubTplPrestations();
        }
    }

    /**
     * Clears out the collROperationTypeSubTplPrestations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationTypeSubTplRubrique The current object (for fluent API support)
     * @see        addROperationTypeSubTplPrestations()
     */
    public function clearROperationTypeSubTplPrestations()
    {
        $this->collROperationTypeSubTplPrestations = null; // important to set this to null since that means it is uninitialized
        $this->collROperationTypeSubTplPrestationsPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationTypeSubTplPrestations collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationTypeSubTplPrestations($v = true)
    {
        $this->collROperationTypeSubTplPrestationsPartial = $v;
    }

    /**
     * Initializes the collROperationTypeSubTplPrestations collection.
     *
     * By default this just sets the collROperationTypeSubTplPrestations collection to an empty array (like clearcollROperationTypeSubTplPrestations());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationTypeSubTplPrestations($overrideExisting = true)
    {
        if (null !== $this->collROperationTypeSubTplPrestations && !$overrideExisting) {
            return;
        }
        $this->collROperationTypeSubTplPrestations = new PropelObjectCollection();
        $this->collROperationTypeSubTplPrestations->setModel('ROperationTypeSubTplPrestation');
    }

    /**
     * Gets an array of ROperationTypeSubTplPrestation objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationTypeSubTplRubrique is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationTypeSubTplPrestation[] List of ROperationTypeSubTplPrestation objects
     * @throws PropelException
     */
    public function getROperationTypeSubTplPrestations($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplPrestationsPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplPrestations || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplPrestations) {
                // return empty collection
                $this->initROperationTypeSubTplPrestations();
            } else {
                $collROperationTypeSubTplPrestations = ROperationTypeSubTplPrestationQuery::create(null, $criteria)
                    ->filterByROperationTypeSubTplRubrique($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationTypeSubTplPrestationsPartial && count($collROperationTypeSubTplPrestations)) {
                      $this->initROperationTypeSubTplPrestations(false);

                      foreach ($collROperationTypeSubTplPrestations as $obj) {
                        if (false == $this->collROperationTypeSubTplPrestations->contains($obj)) {
                          $this->collROperationTypeSubTplPrestations->append($obj);
                        }
                      }

                      $this->collROperationTypeSubTplPrestationsPartial = true;
                    }

                    $collROperationTypeSubTplPrestations->getInternalIterator()->rewind();

                    return $collROperationTypeSubTplPrestations;
                }

                if ($partial && $this->collROperationTypeSubTplPrestations) {
                    foreach ($this->collROperationTypeSubTplPrestations as $obj) {
                        if ($obj->isNew()) {
                            $collROperationTypeSubTplPrestations[] = $obj;
                        }
                    }
                }

                $this->collROperationTypeSubTplPrestations = $collROperationTypeSubTplPrestations;
                $this->collROperationTypeSubTplPrestationsPartial = false;
            }
        }

        return $this->collROperationTypeSubTplPrestations;
    }

    /**
     * Sets a collection of ROperationTypeSubTplPrestation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationTypeSubTplPrestations A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationTypeSubTplRubrique The current object (for fluent API support)
     */
    public function setROperationTypeSubTplPrestations(PropelCollection $rOperationTypeSubTplPrestations, PropelPDO $con = null)
    {
        $rOperationTypeSubTplPrestationsToDelete = $this->getROperationTypeSubTplPrestations(new Criteria(), $con)->diff($rOperationTypeSubTplPrestations);


        $this->rOperationTypeSubTplPrestationsScheduledForDeletion = $rOperationTypeSubTplPrestationsToDelete;

        foreach ($rOperationTypeSubTplPrestationsToDelete as $rOperationTypeSubTplPrestationRemoved) {
            $rOperationTypeSubTplPrestationRemoved->setROperationTypeSubTplRubrique(null);
        }

        $this->collROperationTypeSubTplPrestations = null;
        foreach ($rOperationTypeSubTplPrestations as $rOperationTypeSubTplPrestation) {
            $this->addROperationTypeSubTplPrestation($rOperationTypeSubTplPrestation);
        }

        $this->collROperationTypeSubTplPrestations = $rOperationTypeSubTplPrestations;
        $this->collROperationTypeSubTplPrestationsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationTypeSubTplPrestation objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationTypeSubTplPrestation objects.
     * @throws PropelException
     */
    public function countROperationTypeSubTplPrestations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplPrestationsPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplPrestations || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplPrestations) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationTypeSubTplPrestations());
            }
            $query = ROperationTypeSubTplPrestationQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByROperationTypeSubTplRubrique($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplPrestations);
    }

    /**
     * Method called to associate a ROperationTypeSubTplPrestation object to this object
     * through the ROperationTypeSubTplPrestation foreign key attribute.
     *
     * @param    ROperationTypeSubTplPrestation $l ROperationTypeSubTplPrestation
     * @return ROperationTypeSubTplRubrique The current object (for fluent API support)
     */
    public function addROperationTypeSubTplPrestation(ROperationTypeSubTplPrestation $l)
    {
        if ($this->collROperationTypeSubTplPrestations === null) {
            $this->initROperationTypeSubTplPrestations();
            $this->collROperationTypeSubTplPrestationsPartial = true;
        }

        if (!in_array($l, $this->collROperationTypeSubTplPrestations->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationTypeSubTplPrestation($l);

            if ($this->rOperationTypeSubTplPrestationsScheduledForDeletion and $this->rOperationTypeSubTplPrestationsScheduledForDeletion->contains($l)) {
                $this->rOperationTypeSubTplPrestationsScheduledForDeletion->remove($this->rOperationTypeSubTplPrestationsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationTypeSubTplPrestation $rOperationTypeSubTplPrestation The rOperationTypeSubTplPrestation object to add.
     */
    protected function doAddROperationTypeSubTplPrestation($rOperationTypeSubTplPrestation)
    {
        $this->collROperationTypeSubTplPrestations[]= $rOperationTypeSubTplPrestation;
        $rOperationTypeSubTplPrestation->setROperationTypeSubTplRubrique($this);
    }

    /**
     * @param	ROperationTypeSubTplPrestation $rOperationTypeSubTplPrestation The rOperationTypeSubTplPrestation object to remove.
     * @return ROperationTypeSubTplRubrique The current object (for fluent API support)
     */
    public function removeROperationTypeSubTplPrestation($rOperationTypeSubTplPrestation)
    {
        if ($this->getROperationTypeSubTplPrestations()->contains($rOperationTypeSubTplPrestation)) {
            $this->collROperationTypeSubTplPrestations->remove($this->collROperationTypeSubTplPrestations->search($rOperationTypeSubTplPrestation));
            if (null === $this->rOperationTypeSubTplPrestationsScheduledForDeletion) {
                $this->rOperationTypeSubTplPrestationsScheduledForDeletion = clone $this->collROperationTypeSubTplPrestations;
                $this->rOperationTypeSubTplPrestationsScheduledForDeletion->clear();
            }
            $this->rOperationTypeSubTplPrestationsScheduledForDeletion[]= clone $rOperationTypeSubTplPrestation;
            $rOperationTypeSubTplPrestation->setROperationTypeSubTplRubrique(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTplRubrique is new, it will return
     * an empty collection; or if this ROperationTypeSubTplRubrique has previously
     * been saved, it will retrieve related ROperationTypeSubTplPrestations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTplRubrique.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeSubTplPrestation[] List of ROperationTypeSubTplPrestation objects
     */
    public function getROperationTypeSubTplPrestationsJoinROperationTypeSubTpl($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeSubTplPrestationQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSubTpl', $join_behavior);

        return $this->getROperationTypeSubTplPrestations($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->ost_tpl_rubrique_id = null;
        $this->ost_tpl_id = null;
        $this->r_rubrique_id = null;
        $this->ost_tpl_rubrique_order = null;
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
            if ($this->collROperationTypeSubTplPrestations) {
                foreach ($this->collROperationTypeSubTplPrestations as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aROperationTypeSubTpl instanceof Persistent) {
              $this->aROperationTypeSubTpl->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collROperationTypeSubTplPrestations instanceof PropelCollection) {
            $this->collROperationTypeSubTplPrestations->clearIterator();
        }
        $this->collROperationTypeSubTplPrestations = null;
        $this->aROperationTypeSubTpl = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ROperationTypeSubTplRubriquePeer::DEFAULT_STRING_FORMAT);
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
                return BaseROperationTypeSubTplRubriquePeer::getConnection();
            }
}
