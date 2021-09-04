<?php


/**
 * Base class that represents a row from the 'r_operation_type_sub_tpl_prime' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplPrime extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ROperationTypeSubTplPrimePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ROperationTypeSubTplPrimePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the ost_tpl_prime_id field.
     * @var        int
     */
    protected $ost_tpl_prime_id;

    /**
     * The value for the ost_tpl_id field.
     * @var        int
     */
    protected $ost_tpl_id;

    /**
     * The value for the ost_tpl_prime_libelle field.
     * @var        string
     */
    protected $ost_tpl_prime_libelle;

    /**
     * The value for the ost_tpl_prime_numero field.
     * @var        int
     */
    protected $ost_tpl_prime_numero;

    /**
     * The value for the ost_tpl_reward_type field.
     * @var        int
     */
    protected $ost_tpl_reward_type;

    /**
     * @var        ROperationTypeSubTpl
     */
    protected $aROperationTypeSubTpl;

    /**
     * @var        RRewardTypes
     */
    protected $aRRewardTypes;

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
     * Get the [ost_tpl_prime_id] column value.
     *
     * @return int
     */
    public function getOstTplPrimeId()
    {

        return $this->ost_tpl_prime_id;
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
     * Get the [ost_tpl_prime_libelle] column value.
     *
     * @return string
     */
    public function getOstTplPrimeLibelle()
    {

        return $this->ost_tpl_prime_libelle;
    }

    /**
     * Get the [ost_tpl_prime_numero] column value.
     *
     * @return int
     */
    public function getOstTplPrimeNumero()
    {

        return $this->ost_tpl_prime_numero;
    }

    /**
     * Get the [ost_tpl_reward_type] column value.
     *
     * @return int
     */
    public function getOstTplRewardType()
    {

        return $this->ost_tpl_reward_type;
    }

    /**
     * Set the value of [ost_tpl_prime_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplPrime The current object (for fluent API support)
     */
    public function setOstTplPrimeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ost_tpl_prime_id !== $v) {
                    $this->ost_tpl_prime_id = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID;
                }


        return $this;
    } // setOstTplPrimeId()

    /**
     * Set the value of [ost_tpl_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplPrime The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ROperationTypeSubTplPrimePeer::OST_TPL_ID;
                }

        if ($this->aROperationTypeSubTpl !== null && $this->aROperationTypeSubTpl->getOstTplId() !== $v) {
            $this->aROperationTypeSubTpl = null;
        }


        return $this;
    } // setOstTplId()

    /**
     * Set the value of [ost_tpl_prime_libelle] column.
     *
     * @param  string $v new value
     * @return ROperationTypeSubTplPrime The current object (for fluent API support)
     */
    public function setOstTplPrimeLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ost_tpl_prime_libelle !== $v) {
            $this->ost_tpl_prime_libelle = $v;
            $this->modifiedColumns[] = ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_LIBELLE;
        }


        return $this;
    } // setOstTplPrimeLibelle()

    /**
     * Set the value of [ost_tpl_prime_numero] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplPrime The current object (for fluent API support)
     */
    public function setOstTplPrimeNumero($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ost_tpl_prime_numero !== $v) {
                    $this->ost_tpl_prime_numero = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO;
                }


        return $this;
    } // setOstTplPrimeNumero()

    /**
     * Set the value of [ost_tpl_reward_type] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplPrime The current object (for fluent API support)
     */
    public function setOstTplRewardType($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ost_tpl_reward_type !== $v) {
                    $this->ost_tpl_reward_type = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE;
                }

        if ($this->aRRewardTypes !== null && $this->aRRewardTypes->getRRewardTypeId() !== $v) {
            $this->aRRewardTypes = null;
        }


        return $this;
    } // setOstTplRewardType()

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

            $this->ost_tpl_prime_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->ost_tpl_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->ost_tpl_prime_libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->ost_tpl_prime_numero = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->ost_tpl_reward_type = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = ROperationTypeSubTplPrimePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ROperationTypeSubTplPrime object", $e);
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
        if ($this->aRRewardTypes !== null && $this->ost_tpl_reward_type !== $this->aRRewardTypes->getRRewardTypeId()) {
            $this->aRRewardTypes = null;
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
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ROperationTypeSubTplPrimePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aROperationTypeSubTpl = null;
            $this->aRRewardTypes = null;
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
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ROperationTypeSubTplPrimeQuery::create()
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
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ROperationTypeSubTplPrimePeer::addInstanceToPool($this);
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

            if ($this->aRRewardTypes !== null) {
                if ($this->aRRewardTypes->isModified() || $this->aRRewardTypes->isNew()) {
                    $affectedRows += $this->aRRewardTypes->save($con);
                }
                $this->setRRewardTypes($this->aRRewardTypes);
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

        $this->modifiedColumns[] = ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID;
        if (null !== $this->ost_tpl_prime_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_prime_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_prime_libelle`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_prime_numero`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_reward_type`';
        }

        $sql = sprintf(
            'INSERT INTO `r_operation_type_sub_tpl_prime` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ost_tpl_prime_id`':
                        $stmt->bindValue($identifier, $this->ost_tpl_prime_id, PDO::PARAM_INT);
                        break;
                    case '`ost_tpl_id`':
                        $stmt->bindValue($identifier, $this->ost_tpl_id, PDO::PARAM_INT);
                        break;
                    case '`ost_tpl_prime_libelle`':
                        $stmt->bindValue($identifier, $this->ost_tpl_prime_libelle, PDO::PARAM_STR);
                        break;
                    case '`ost_tpl_prime_numero`':
                        $stmt->bindValue($identifier, $this->ost_tpl_prime_numero, PDO::PARAM_INT);
                        break;
                    case '`ost_tpl_reward_type`':
                        $stmt->bindValue($identifier, $this->ost_tpl_reward_type, PDO::PARAM_INT);
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
        $this->setOstTplPrimeId($pk);

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

            if ($this->aRRewardTypes !== null) {
                if (!$this->aRRewardTypes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRRewardTypes->getValidationFailures());
                }
            }


            if (($retval = ROperationTypeSubTplPrimePeer::doValidate($this, $columns)) !== true) {
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
        $pos = ROperationTypeSubTplPrimePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOstTplPrimeId();
                break;
            case 1:
                return $this->getOstTplId();
                break;
            case 2:
                return $this->getOstTplPrimeLibelle();
                break;
            case 3:
                return $this->getOstTplPrimeNumero();
                break;
            case 4:
                return $this->getOstTplRewardType();
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
        if (isset($alreadyDumpedObjects['ROperationTypeSubTplPrime'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ROperationTypeSubTplPrime'][$this->getPrimaryKey()] = true;
        $keys = ROperationTypeSubTplPrimePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOstTplPrimeId(),
            $keys[1] => $this->getOstTplId(),
            $keys[2] => $this->getOstTplPrimeLibelle(),
            $keys[3] => $this->getOstTplPrimeNumero(),
            $keys[4] => $this->getOstTplRewardType(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aROperationTypeSubTpl) {
                $result['ROperationTypeSubTpl'] = $this->aROperationTypeSubTpl->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRRewardTypes) {
                $result['RRewardTypes'] = $this->aRRewardTypes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = ROperationTypeSubTplPrimePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOstTplPrimeId($value);
                break;
            case 1:
                $this->setOstTplId($value);
                break;
            case 2:
                $this->setOstTplPrimeLibelle($value);
                break;
            case 3:
                $this->setOstTplPrimeNumero($value);
                break;
            case 4:
                $this->setOstTplRewardType($value);
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
        $keys = ROperationTypeSubTplPrimePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOstTplPrimeId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOstTplId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOstTplPrimeLibelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOstTplPrimeNumero($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOstTplRewardType($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

        if ($this->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID)) $criteria->add(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $this->ost_tpl_prime_id);
        if ($this->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_ID)) $criteria->add(ROperationTypeSubTplPrimePeer::OST_TPL_ID, $this->ost_tpl_id);
        if ($this->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_LIBELLE)) $criteria->add(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_LIBELLE, $this->ost_tpl_prime_libelle);
        if ($this->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO)) $criteria->add(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO, $this->ost_tpl_prime_numero);
        if ($this->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE)) $criteria->add(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, $this->ost_tpl_reward_type);

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
        $criteria = new Criteria(ROperationTypeSubTplPrimePeer::DATABASE_NAME);
        $criteria->add(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $this->ost_tpl_prime_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOstTplPrimeId();
    }

    /**
     * Generic method to set the primary key (ost_tpl_prime_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOstTplPrimeId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOstTplPrimeId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ROperationTypeSubTplPrime (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOstTplId($this->getOstTplId());
        $copyObj->setOstTplPrimeLibelle($this->getOstTplPrimeLibelle());
        $copyObj->setOstTplPrimeNumero($this->getOstTplPrimeNumero());
        $copyObj->setOstTplRewardType($this->getOstTplRewardType());

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
            $copyObj->setOstTplPrimeId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ROperationTypeSubTplPrime Clone of current object.
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
     * @return ROperationTypeSubTplPrimePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ROperationTypeSubTplPrimePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ROperationTypeSubTpl object.
     *
     * @param                  ROperationTypeSubTpl $v
     * @return ROperationTypeSubTplPrime The current object (for fluent API support)
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
            $v->addROperationTypeSubTplPrime($this);
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
                $this->aROperationTypeSubTpl->addROperationTypeSubTplPrimes($this);
             */
        }

        return $this->aROperationTypeSubTpl;
    }

    /**
     * Declares an association between this object and a RRewardTypes object.
     *
     * @param                  RRewardTypes $v
     * @return ROperationTypeSubTplPrime The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRRewardTypes(RRewardTypes $v = null)
    {
        if ($v === null) {
            $this->setOstTplRewardType(NULL);
        } else {
            $this->setOstTplRewardType($v->getRRewardTypeId());
        }

        $this->aRRewardTypes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RRewardTypes object, it will not be re-added.
        if ($v !== null) {
            $v->addROperationTypeSubTplPrime($this);
        }


        return $this;
    }


    /**
     * Get the associated RRewardTypes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RRewardTypes The associated RRewardTypes object.
     * @throws PropelException
     */
    public function getRRewardTypes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRRewardTypes === null && ($this->ost_tpl_reward_type !== null) && $doQuery) {
            $this->aRRewardTypes = RRewardTypesQuery::create()->findPk($this->ost_tpl_reward_type, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRRewardTypes->addROperationTypeSubTplPrimes($this);
             */
        }

        return $this->aRRewardTypes;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->ost_tpl_prime_id = null;
        $this->ost_tpl_id = null;
        $this->ost_tpl_prime_libelle = null;
        $this->ost_tpl_prime_numero = null;
        $this->ost_tpl_reward_type = null;
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
            if ($this->aROperationTypeSubTpl instanceof Persistent) {
              $this->aROperationTypeSubTpl->clearAllReferences($deep);
            }
            if ($this->aRRewardTypes instanceof Persistent) {
              $this->aRRewardTypes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aROperationTypeSubTpl = null;
        $this->aRRewardTypes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ROperationTypeSubTplPrimePeer::DEFAULT_STRING_FORMAT);
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
                return BaseROperationTypeSubTplPrimePeer::getConnection();
            }
}
