<?php


/**
 * Base class that represents a row from the 'r_facture_presentations' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRFacturePresentations extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RFacturePresentationsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RFacturePresentationsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_fact_pres_id field.
     * @var        int
     */
    protected $r_fact_pres_id;

    /**
     * The value for the r_fact_pres_libelle field.
     * @var        string
     */
    protected $r_fact_pres_libelle;

    /**
     * @var        PropelObjectCollection|RFactureTypes[] Collection to store aggregation of RFactureTypes objects.
     */
    protected $collRFactureTypess;
    protected $collRFactureTypessPartial;

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
    protected $rFactureTypessScheduledForDeletion = null;

    /**
     * Get the [r_fact_pres_id] column value.
     *
     * @return int
     */
    public function getRFactPresId()
    {

        return $this->r_fact_pres_id;
    }

    /**
     * Get the [r_fact_pres_libelle] column value.
     *
     * @return string
     */
    public function getRFactPresLibelle()
    {

        return $this->r_fact_pres_libelle;
    }

    /**
     * Set the value of [r_fact_pres_id] column.
     *
     * @param  int $v new value
     * @return RFacturePresentations The current object (for fluent API support)
     */
    public function setRFactPresId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_fact_pres_id !== $v) {
                    $this->r_fact_pres_id = $v;
                    $this->modifiedColumns[] = RFacturePresentationsPeer::R_FACT_PRES_ID;
                }


        return $this;
    } // setRFactPresId()

    /**
     * Set the value of [r_fact_pres_libelle] column.
     *
     * @param  string $v new value
     * @return RFacturePresentations The current object (for fluent API support)
     */
    public function setRFactPresLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_fact_pres_libelle !== $v) {
            $this->r_fact_pres_libelle = $v;
            $this->modifiedColumns[] = RFacturePresentationsPeer::R_FACT_PRES_LIBELLE;
        }


        return $this;
    } // setRFactPresLibelle()

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

            $this->r_fact_pres_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_fact_pres_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 2; // 2 = RFacturePresentationsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RFacturePresentations object", $e);
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
            $con = Propel::getConnection(RFacturePresentationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RFacturePresentationsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collRFactureTypess = null;

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
            $con = Propel::getConnection(RFacturePresentationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RFacturePresentationsQuery::create()
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
            $con = Propel::getConnection(RFacturePresentationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RFacturePresentationsPeer::addInstanceToPool($this);
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

            if ($this->rFactureTypessScheduledForDeletion !== null) {
                if (!$this->rFactureTypessScheduledForDeletion->isEmpty()) {
                    foreach ($this->rFactureTypessScheduledForDeletion as $rFactureTypes) {
                        // need to save related object because we set the relation to null
                        $rFactureTypes->save($con);
                    }
                    $this->rFactureTypessScheduledForDeletion = null;
                }
            }

            if ($this->collRFactureTypess !== null) {
                foreach ($this->collRFactureTypess as $referrerFK) {
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
        if ($this->isColumnModified(RFacturePresentationsPeer::R_FACT_PRES_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_fact_pres_id`';
        }
        if ($this->isColumnModified(RFacturePresentationsPeer::R_FACT_PRES_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_fact_pres_libelle`';
        }

        $sql = sprintf(
            'INSERT INTO `r_facture_presentations` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_fact_pres_id`':
                        $stmt->bindValue($identifier, $this->r_fact_pres_id, PDO::PARAM_INT);
                        break;
                    case '`r_fact_pres_libelle`':
                        $stmt->bindValue($identifier, $this->r_fact_pres_libelle, PDO::PARAM_STR);
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


            if (($retval = RFacturePresentationsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collRFactureTypess !== null) {
                    foreach ($this->collRFactureTypess as $referrerFK) {
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
        $pos = RFacturePresentationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRFactPresId();
                break;
            case 1:
                return $this->getRFactPresLibelle();
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
        if (isset($alreadyDumpedObjects['RFacturePresentations'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RFacturePresentations'][$this->getPrimaryKey()] = true;
        $keys = RFacturePresentationsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRFactPresId(),
            $keys[1] => $this->getRFactPresLibelle(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collRFactureTypess) {
                $result['RFactureTypess'] = $this->collRFactureTypess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RFacturePresentationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRFactPresId($value);
                break;
            case 1:
                $this->setRFactPresLibelle($value);
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
        $keys = RFacturePresentationsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRFactPresId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRFactPresLibelle($arr[$keys[1]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RFacturePresentationsPeer::DATABASE_NAME);

        if ($this->isColumnModified(RFacturePresentationsPeer::R_FACT_PRES_ID)) $criteria->add(RFacturePresentationsPeer::R_FACT_PRES_ID, $this->r_fact_pres_id);
        if ($this->isColumnModified(RFacturePresentationsPeer::R_FACT_PRES_LIBELLE)) $criteria->add(RFacturePresentationsPeer::R_FACT_PRES_LIBELLE, $this->r_fact_pres_libelle);

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
        $criteria = new Criteria(RFacturePresentationsPeer::DATABASE_NAME);
        $criteria->add(RFacturePresentationsPeer::R_FACT_PRES_ID, $this->r_fact_pres_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRFactPresId();
    }

    /**
     * Generic method to set the primary key (r_fact_pres_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRFactPresId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRFactPresId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RFacturePresentations (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRFactPresLibelle($this->getRFactPresLibelle());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getRFactureTypess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRFactureTypes($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRFactPresId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RFacturePresentations Clone of current object.
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
     * @return RFacturePresentationsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RFacturePresentationsPeer();
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
        if ('RFactureTypes' == $relationName) {
            $this->initRFactureTypess();
        }
    }

    /**
     * Clears out the collRFactureTypess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RFacturePresentations The current object (for fluent API support)
     * @see        addRFactureTypess()
     */
    public function clearRFactureTypess()
    {
        $this->collRFactureTypess = null; // important to set this to null since that means it is uninitialized
        $this->collRFactureTypessPartial = null;

        return $this;
    }

    /**
     * reset is the collRFactureTypess collection loaded partially
     *
     * @return void
     */
    public function resetPartialRFactureTypess($v = true)
    {
        $this->collRFactureTypessPartial = $v;
    }

    /**
     * Initializes the collRFactureTypess collection.
     *
     * By default this just sets the collRFactureTypess collection to an empty array (like clearcollRFactureTypess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRFactureTypess($overrideExisting = true)
    {
        if (null !== $this->collRFactureTypess && !$overrideExisting) {
            return;
        }
        $this->collRFactureTypess = new PropelObjectCollection();
        $this->collRFactureTypess->setModel('RFactureTypes');
    }

    /**
     * Gets an array of RFactureTypes objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RFacturePresentations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|RFactureTypes[] List of RFactureTypes objects
     * @throws PropelException
     */
    public function getRFactureTypess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRFactureTypessPartial && !$this->isNew();
        if (null === $this->collRFactureTypess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRFactureTypess) {
                // return empty collection
                $this->initRFactureTypess();
            } else {
                $collRFactureTypess = RFactureTypesQuery::create(null, $criteria)
                    ->filterByRFacturePresentations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRFactureTypessPartial && count($collRFactureTypess)) {
                      $this->initRFactureTypess(false);

                      foreach ($collRFactureTypess as $obj) {
                        if (false == $this->collRFactureTypess->contains($obj)) {
                          $this->collRFactureTypess->append($obj);
                        }
                      }

                      $this->collRFactureTypessPartial = true;
                    }

                    $collRFactureTypess->getInternalIterator()->rewind();

                    return $collRFactureTypess;
                }

                if ($partial && $this->collRFactureTypess) {
                    foreach ($this->collRFactureTypess as $obj) {
                        if ($obj->isNew()) {
                            $collRFactureTypess[] = $obj;
                        }
                    }
                }

                $this->collRFactureTypess = $collRFactureTypess;
                $this->collRFactureTypessPartial = false;
            }
        }

        return $this->collRFactureTypess;
    }

    /**
     * Sets a collection of RFactureTypes objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rFactureTypess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RFacturePresentations The current object (for fluent API support)
     */
    public function setRFactureTypess(PropelCollection $rFactureTypess, PropelPDO $con = null)
    {
        $rFactureTypessToDelete = $this->getRFactureTypess(new Criteria(), $con)->diff($rFactureTypess);


        $this->rFactureTypessScheduledForDeletion = $rFactureTypessToDelete;

        foreach ($rFactureTypessToDelete as $rFactureTypesRemoved) {
            $rFactureTypesRemoved->setRFacturePresentations(null);
        }

        $this->collRFactureTypess = null;
        foreach ($rFactureTypess as $rFactureTypes) {
            $this->addRFactureTypes($rFactureTypes);
        }

        $this->collRFactureTypess = $rFactureTypess;
        $this->collRFactureTypessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related RFactureTypes objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related RFactureTypes objects.
     * @throws PropelException
     */
    public function countRFactureTypess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRFactureTypessPartial && !$this->isNew();
        if (null === $this->collRFactureTypess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRFactureTypess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRFactureTypess());
            }
            $query = RFactureTypesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRFacturePresentations($this)
                ->count($con);
        }

        return count($this->collRFactureTypess);
    }

    /**
     * Method called to associate a RFactureTypes object to this object
     * through the RFactureTypes foreign key attribute.
     *
     * @param    RFactureTypes $l RFactureTypes
     * @return RFacturePresentations The current object (for fluent API support)
     */
    public function addRFactureTypes(RFactureTypes $l)
    {
        if ($this->collRFactureTypess === null) {
            $this->initRFactureTypess();
            $this->collRFactureTypessPartial = true;
        }

        if (!in_array($l, $this->collRFactureTypess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRFactureTypes($l);

            if ($this->rFactureTypessScheduledForDeletion and $this->rFactureTypessScheduledForDeletion->contains($l)) {
                $this->rFactureTypessScheduledForDeletion->remove($this->rFactureTypessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RFactureTypes $rFactureTypes The rFactureTypes object to add.
     */
    protected function doAddRFactureTypes($rFactureTypes)
    {
        $this->collRFactureTypess[]= $rFactureTypes;
        $rFactureTypes->setRFacturePresentations($this);
    }

    /**
     * @param	RFactureTypes $rFactureTypes The rFactureTypes object to remove.
     * @return RFacturePresentations The current object (for fluent API support)
     */
    public function removeRFactureTypes($rFactureTypes)
    {
        if ($this->getRFactureTypess()->contains($rFactureTypes)) {
            $this->collRFactureTypess->remove($this->collRFactureTypess->search($rFactureTypes));
            if (null === $this->rFactureTypessScheduledForDeletion) {
                $this->rFactureTypessScheduledForDeletion = clone $this->collRFactureTypess;
                $this->rFactureTypessScheduledForDeletion->clear();
            }
            $this->rFactureTypessScheduledForDeletion[]= $rFactureTypes;
            $rFactureTypes->setRFacturePresentations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RFacturePresentations is new, it will return
     * an empty collection; or if this RFacturePresentations has previously
     * been saved, it will retrieve related RFactureTypess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFacturePresentations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RFactureTypes[] List of RFactureTypes objects
     */
    public function getRFactureTypessJoinRFactureCalculs($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RFactureTypesQuery::create(null, $criteria);
        $query->joinWith('RFactureCalculs', $join_behavior);

        return $this->getRFactureTypess($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_fact_pres_id = null;
        $this->r_fact_pres_libelle = null;
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
            if ($this->collRFactureTypess) {
                foreach ($this->collRFactureTypess as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collRFactureTypess instanceof PropelCollection) {
            $this->collRFactureTypess->clearIterator();
        }
        $this->collRFactureTypess = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RFacturePresentationsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseRFacturePresentationsPeer::getConnection();
            }
}
