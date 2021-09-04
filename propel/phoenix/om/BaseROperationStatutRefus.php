<?php


/**
 * Base class that represents a row from the 'r_operation_statut_refus' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationStatutRefus extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ROperationStatutRefusPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ROperationStatutRefusPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_op_statut_refus_id field.
     * @var        int
     */
    protected $r_op_statut_refus_id;

    /**
     * The value for the r_op_statut_refus_motif field.
     * @var        string
     */
    protected $r_op_statut_refus_motif;

    /**
     * @var        PropelObjectCollection|OperationStatuts[] Collection to store aggregation of OperationStatuts objects.
     */
    protected $collOperationStatutss;
    protected $collOperationStatutssPartial;

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
    protected $operationStatutssScheduledForDeletion = null;

    /**
     * Get the [r_op_statut_refus_id] column value.
     *
     * @return int
     */
    public function getROpStatutRefusId()
    {

        return $this->r_op_statut_refus_id;
    }

    /**
     * Get the [r_op_statut_refus_motif] column value.
     *
     * @return string
     */
    public function getROpStatutRefusMotif()
    {

        return $this->r_op_statut_refus_motif;
    }

    /**
     * Set the value of [r_op_statut_refus_id] column.
     *
     * @param  int $v new value
     * @return ROperationStatutRefus The current object (for fluent API support)
     */
    public function setROpStatutRefusId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_op_statut_refus_id !== $v) {
                    $this->r_op_statut_refus_id = $v;
                    $this->modifiedColumns[] = ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID;
                }


        return $this;
    } // setROpStatutRefusId()

    /**
     * Set the value of [r_op_statut_refus_motif] column.
     *
     * @param  string $v new value
     * @return ROperationStatutRefus The current object (for fluent API support)
     */
    public function setROpStatutRefusMotif($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_op_statut_refus_motif !== $v) {
            $this->r_op_statut_refus_motif = $v;
            $this->modifiedColumns[] = ROperationStatutRefusPeer::R_OP_STATUT_REFUS_MOTIF;
        }


        return $this;
    } // setROpStatutRefusMotif()

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

            $this->r_op_statut_refus_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_op_statut_refus_motif = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 2; // 2 = ROperationStatutRefusPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ROperationStatutRefus object", $e);
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
            $con = Propel::getConnection(ROperationStatutRefusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ROperationStatutRefusPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collOperationStatutss = null;

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
            $con = Propel::getConnection(ROperationStatutRefusPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ROperationStatutRefusQuery::create()
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
            $con = Propel::getConnection(ROperationStatutRefusPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ROperationStatutRefusPeer::addInstanceToPool($this);
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

            if ($this->operationStatutssScheduledForDeletion !== null) {
                if (!$this->operationStatutssScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationStatutssScheduledForDeletion as $operationStatuts) {
                        // need to save related object because we set the relation to null
                        $operationStatuts->save($con);
                    }
                    $this->operationStatutssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationStatutss !== null) {
                foreach ($this->collOperationStatutss as $referrerFK) {
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
        if ($this->isColumnModified(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_statut_refus_id`';
        }
        if ($this->isColumnModified(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_MOTIF)) {
            $modifiedColumns[':p' . $index++]  = '`r_op_statut_refus_motif`';
        }

        $sql = sprintf(
            'INSERT INTO `r_operation_statut_refus` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_op_statut_refus_id`':
                        $stmt->bindValue($identifier, $this->r_op_statut_refus_id, PDO::PARAM_INT);
                        break;
                    case '`r_op_statut_refus_motif`':
                        $stmt->bindValue($identifier, $this->r_op_statut_refus_motif, PDO::PARAM_STR);
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


            if (($retval = ROperationStatutRefusPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOperationStatutss !== null) {
                    foreach ($this->collOperationStatutss as $referrerFK) {
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
        $pos = ROperationStatutRefusPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getROpStatutRefusId();
                break;
            case 1:
                return $this->getROpStatutRefusMotif();
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
        if (isset($alreadyDumpedObjects['ROperationStatutRefus'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ROperationStatutRefus'][$this->getPrimaryKey()] = true;
        $keys = ROperationStatutRefusPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getROpStatutRefusId(),
            $keys[1] => $this->getROpStatutRefusMotif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collOperationStatutss) {
                $result['OperationStatutss'] = $this->collOperationStatutss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ROperationStatutRefusPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setROpStatutRefusId($value);
                break;
            case 1:
                $this->setROpStatutRefusMotif($value);
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
        $keys = ROperationStatutRefusPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setROpStatutRefusId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setROpStatutRefusMotif($arr[$keys[1]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ROperationStatutRefusPeer::DATABASE_NAME);

        if ($this->isColumnModified(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID)) $criteria->add(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $this->r_op_statut_refus_id);
        if ($this->isColumnModified(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_MOTIF)) $criteria->add(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_MOTIF, $this->r_op_statut_refus_motif);

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
        $criteria = new Criteria(ROperationStatutRefusPeer::DATABASE_NAME);
        $criteria->add(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $this->r_op_statut_refus_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getROpStatutRefusId();
    }

    /**
     * Generic method to set the primary key (r_op_statut_refus_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setROpStatutRefusId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getROpStatutRefusId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ROperationStatutRefus (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setROpStatutRefusMotif($this->getROpStatutRefusMotif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOperationStatutss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationStatuts($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setROpStatutRefusId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ROperationStatutRefus Clone of current object.
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
     * @return ROperationStatutRefusPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ROperationStatutRefusPeer();
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
        if ('OperationStatuts' == $relationName) {
            $this->initOperationStatutss();
        }
    }

    /**
     * Clears out the collOperationStatutss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationStatutRefus The current object (for fluent API support)
     * @see        addOperationStatutss()
     */
    public function clearOperationStatutss()
    {
        $this->collOperationStatutss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationStatutssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationStatutss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationStatutss($v = true)
    {
        $this->collOperationStatutssPartial = $v;
    }

    /**
     * Initializes the collOperationStatutss collection.
     *
     * By default this just sets the collOperationStatutss collection to an empty array (like clearcollOperationStatutss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationStatutss($overrideExisting = true)
    {
        if (null !== $this->collOperationStatutss && !$overrideExisting) {
            return;
        }
        $this->collOperationStatutss = new PropelObjectCollection();
        $this->collOperationStatutss->setModel('OperationStatuts');
    }

    /**
     * Gets an array of OperationStatuts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationStatutRefus is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     * @throws PropelException
     */
    public function getOperationStatutss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationStatutssPartial && !$this->isNew();
        if (null === $this->collOperationStatutss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationStatutss) {
                // return empty collection
                $this->initOperationStatutss();
            } else {
                $collOperationStatutss = OperationStatutsQuery::create(null, $criteria)
                    ->filterByROperationStatutRefus($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationStatutssPartial && count($collOperationStatutss)) {
                      $this->initOperationStatutss(false);

                      foreach ($collOperationStatutss as $obj) {
                        if (false == $this->collOperationStatutss->contains($obj)) {
                          $this->collOperationStatutss->append($obj);
                        }
                      }

                      $this->collOperationStatutssPartial = true;
                    }

                    $collOperationStatutss->getInternalIterator()->rewind();

                    return $collOperationStatutss;
                }

                if ($partial && $this->collOperationStatutss) {
                    foreach ($this->collOperationStatutss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationStatutss[] = $obj;
                        }
                    }
                }

                $this->collOperationStatutss = $collOperationStatutss;
                $this->collOperationStatutssPartial = false;
            }
        }

        return $this->collOperationStatutss;
    }

    /**
     * Sets a collection of OperationStatuts objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationStatutss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationStatutRefus The current object (for fluent API support)
     */
    public function setOperationStatutss(PropelCollection $operationStatutss, PropelPDO $con = null)
    {
        $operationStatutssToDelete = $this->getOperationStatutss(new Criteria(), $con)->diff($operationStatutss);


        $this->operationStatutssScheduledForDeletion = $operationStatutssToDelete;

        foreach ($operationStatutssToDelete as $operationStatutsRemoved) {
            $operationStatutsRemoved->setROperationStatutRefus(null);
        }

        $this->collOperationStatutss = null;
        foreach ($operationStatutss as $operationStatuts) {
            $this->addOperationStatuts($operationStatuts);
        }

        $this->collOperationStatutss = $operationStatutss;
        $this->collOperationStatutssPartial = false;

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
    public function countOperationStatutss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationStatutssPartial && !$this->isNew();
        if (null === $this->collOperationStatutss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationStatutss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationStatutss());
            }
            $query = OperationStatutsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByROperationStatutRefus($this)
                ->count($con);
        }

        return count($this->collOperationStatutss);
    }

    /**
     * Method called to associate a OperationStatuts object to this object
     * through the OperationStatuts foreign key attribute.
     *
     * @param    OperationStatuts $l OperationStatuts
     * @return ROperationStatutRefus The current object (for fluent API support)
     */
    public function addOperationStatuts(OperationStatuts $l)
    {
        if ($this->collOperationStatutss === null) {
            $this->initOperationStatutss();
            $this->collOperationStatutssPartial = true;
        }

        if (!in_array($l, $this->collOperationStatutss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationStatuts($l);

            if ($this->operationStatutssScheduledForDeletion and $this->operationStatutssScheduledForDeletion->contains($l)) {
                $this->operationStatutssScheduledForDeletion->remove($this->operationStatutssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationStatuts $operationStatuts The operationStatuts object to add.
     */
    protected function doAddOperationStatuts($operationStatuts)
    {
        $this->collOperationStatutss[]= $operationStatuts;
        $operationStatuts->setROperationStatutRefus($this);
    }

    /**
     * @param	OperationStatuts $operationStatuts The operationStatuts object to remove.
     * @return ROperationStatutRefus The current object (for fluent API support)
     */
    public function removeOperationStatuts($operationStatuts)
    {
        if ($this->getOperationStatutss()->contains($operationStatuts)) {
            $this->collOperationStatutss->remove($this->collOperationStatutss->search($operationStatuts));
            if (null === $this->operationStatutssScheduledForDeletion) {
                $this->operationStatutssScheduledForDeletion = clone $this->collOperationStatutss;
                $this->operationStatutssScheduledForDeletion->clear();
            }
            $this->operationStatutssScheduledForDeletion[]= $operationStatuts;
            $operationStatuts->setROperationStatutRefus(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatutRefus is new, it will return
     * an empty collection; or if this ROperationStatutRefus has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatutRefus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatutRefus is new, it will return
     * an empty collection; or if this ROperationStatutRefus has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatutRefus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinOldROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('OldROperationStatus', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatutRefus is new, it will return
     * an empty collection; or if this ROperationStatutRefus has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatutRefus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinNewROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('NewROperationStatus', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationStatutRefus is new, it will return
     * an empty collection; or if this ROperationStatutRefus has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationStatutRefus.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinUsers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('Users', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_op_statut_refus_id = null;
        $this->r_op_statut_refus_motif = null;
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
            if ($this->collOperationStatutss) {
                foreach ($this->collOperationStatutss as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOperationStatutss instanceof PropelCollection) {
            $this->collOperationStatutss->clearIterator();
        }
        $this->collOperationStatutss = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ROperationStatutRefusPeer::DEFAULT_STRING_FORMAT);
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
                return BaseROperationStatutRefusPeer::getConnection();
            }
}
