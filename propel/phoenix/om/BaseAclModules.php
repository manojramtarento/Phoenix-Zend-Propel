<?php


/**
 * Base class that represents a row from the 'acl_modules' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseAclModules extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AclModulesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AclModulesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the module_id field.
     * @var        int
     */
    protected $module_id;

    /**
     * The value for the module_name field.
     * @var        string
     */
    protected $module_name;

    /**
     * @var        PropelObjectCollection|AclInterfacesControllers[] Collection to store aggregation of AclInterfacesControllers objects.
     */
    protected $collAclInterfacesControllerss;
    protected $collAclInterfacesControllerssPartial;

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
    protected $aclInterfacesControllerssScheduledForDeletion = null;

    /**
     * Get the [module_id] column value.
     *
     * @return int
     */
    public function getModuleId()
    {

        return $this->module_id;
    }

    /**
     * Get the [module_name] column value.
     *
     * @return string
     */
    public function getModuleName()
    {

        return $this->module_name;
    }

    /**
     * Set the value of [module_id] column.
     *
     * @param  int $v new value
     * @return AclModules The current object (for fluent API support)
     */
    public function setModuleId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->module_id !== $v) {
                    $this->module_id = $v;
                    $this->modifiedColumns[] = AclModulesPeer::MODULE_ID;
                }


        return $this;
    } // setModuleId()

    /**
     * Set the value of [module_name] column.
     *
     * @param  string $v new value
     * @return AclModules The current object (for fluent API support)
     */
    public function setModuleName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->module_name !== $v) {
            $this->module_name = $v;
            $this->modifiedColumns[] = AclModulesPeer::MODULE_NAME;
        }


        return $this;
    } // setModuleName()

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

            $this->module_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->module_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 2; // 2 = AclModulesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating AclModules object", $e);
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
            $con = Propel::getConnection(AclModulesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AclModulesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collAclInterfacesControllerss = null;

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
            $con = Propel::getConnection(AclModulesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AclModulesQuery::create()
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
            $con = Propel::getConnection(AclModulesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AclModulesPeer::addInstanceToPool($this);
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

            if ($this->aclInterfacesControllerssScheduledForDeletion !== null) {
                if (!$this->aclInterfacesControllerssScheduledForDeletion->isEmpty()) {
                    foreach ($this->aclInterfacesControllerssScheduledForDeletion as $aclInterfacesControllers) {
                        // need to save related object because we set the relation to null
                        $aclInterfacesControllers->save($con);
                    }
                    $this->aclInterfacesControllerssScheduledForDeletion = null;
                }
            }

            if ($this->collAclInterfacesControllerss !== null) {
                foreach ($this->collAclInterfacesControllerss as $referrerFK) {
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

        $this->modifiedColumns[] = AclModulesPeer::MODULE_ID;
        if (null !== $this->module_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AclModulesPeer::MODULE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AclModulesPeer::MODULE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`module_id`';
        }
        if ($this->isColumnModified(AclModulesPeer::MODULE_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`module_name`';
        }

        $sql = sprintf(
            'INSERT INTO `acl_modules` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`module_id`':
                        $stmt->bindValue($identifier, $this->module_id, PDO::PARAM_INT);
                        break;
                    case '`module_name`':
                        $stmt->bindValue($identifier, $this->module_name, PDO::PARAM_STR);
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
        $this->setModuleId($pk);

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


            if (($retval = AclModulesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAclInterfacesControllerss !== null) {
                    foreach ($this->collAclInterfacesControllerss as $referrerFK) {
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
        $pos = AclModulesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getModuleId();
                break;
            case 1:
                return $this->getModuleName();
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
        if (isset($alreadyDumpedObjects['AclModules'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['AclModules'][$this->getPrimaryKey()] = true;
        $keys = AclModulesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getModuleId(),
            $keys[1] => $this->getModuleName(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collAclInterfacesControllerss) {
                $result['AclInterfacesControllerss'] = $this->collAclInterfacesControllerss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = AclModulesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setModuleId($value);
                break;
            case 1:
                $this->setModuleName($value);
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
        $keys = AclModulesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setModuleId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setModuleName($arr[$keys[1]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AclModulesPeer::DATABASE_NAME);

        if ($this->isColumnModified(AclModulesPeer::MODULE_ID)) $criteria->add(AclModulesPeer::MODULE_ID, $this->module_id);
        if ($this->isColumnModified(AclModulesPeer::MODULE_NAME)) $criteria->add(AclModulesPeer::MODULE_NAME, $this->module_name);

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
        $criteria = new Criteria(AclModulesPeer::DATABASE_NAME);
        $criteria->add(AclModulesPeer::MODULE_ID, $this->module_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getModuleId();
    }

    /**
     * Generic method to set the primary key (module_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setModuleId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getModuleId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of AclModules (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setModuleName($this->getModuleName());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAclInterfacesControllerss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAclInterfacesControllers($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setModuleId(NULL); // this is a auto-increment column, so set to default value
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
     * @return AclModules Clone of current object.
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
     * @return AclModulesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AclModulesPeer();
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
        if ('AclInterfacesControllers' == $relationName) {
            $this->initAclInterfacesControllerss();
        }
    }

    /**
     * Clears out the collAclInterfacesControllerss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return AclModules The current object (for fluent API support)
     * @see        addAclInterfacesControllerss()
     */
    public function clearAclInterfacesControllerss()
    {
        $this->collAclInterfacesControllerss = null; // important to set this to null since that means it is uninitialized
        $this->collAclInterfacesControllerssPartial = null;

        return $this;
    }

    /**
     * reset is the collAclInterfacesControllerss collection loaded partially
     *
     * @return void
     */
    public function resetPartialAclInterfacesControllerss($v = true)
    {
        $this->collAclInterfacesControllerssPartial = $v;
    }

    /**
     * Initializes the collAclInterfacesControllerss collection.
     *
     * By default this just sets the collAclInterfacesControllerss collection to an empty array (like clearcollAclInterfacesControllerss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAclInterfacesControllerss($overrideExisting = true)
    {
        if (null !== $this->collAclInterfacesControllerss && !$overrideExisting) {
            return;
        }
        $this->collAclInterfacesControllerss = new PropelObjectCollection();
        $this->collAclInterfacesControllerss->setModel('AclInterfacesControllers');
    }

    /**
     * Gets an array of AclInterfacesControllers objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this AclModules is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|AclInterfacesControllers[] List of AclInterfacesControllers objects
     * @throws PropelException
     */
    public function getAclInterfacesControllerss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAclInterfacesControllerssPartial && !$this->isNew();
        if (null === $this->collAclInterfacesControllerss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAclInterfacesControllerss) {
                // return empty collection
                $this->initAclInterfacesControllerss();
            } else {
                $collAclInterfacesControllerss = AclInterfacesControllersQuery::create(null, $criteria)
                    ->filterByAclModules($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAclInterfacesControllerssPartial && count($collAclInterfacesControllerss)) {
                      $this->initAclInterfacesControllerss(false);

                      foreach ($collAclInterfacesControllerss as $obj) {
                        if (false == $this->collAclInterfacesControllerss->contains($obj)) {
                          $this->collAclInterfacesControllerss->append($obj);
                        }
                      }

                      $this->collAclInterfacesControllerssPartial = true;
                    }

                    $collAclInterfacesControllerss->getInternalIterator()->rewind();

                    return $collAclInterfacesControllerss;
                }

                if ($partial && $this->collAclInterfacesControllerss) {
                    foreach ($this->collAclInterfacesControllerss as $obj) {
                        if ($obj->isNew()) {
                            $collAclInterfacesControllerss[] = $obj;
                        }
                    }
                }

                $this->collAclInterfacesControllerss = $collAclInterfacesControllerss;
                $this->collAclInterfacesControllerssPartial = false;
            }
        }

        return $this->collAclInterfacesControllerss;
    }

    /**
     * Sets a collection of AclInterfacesControllers objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $aclInterfacesControllerss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return AclModules The current object (for fluent API support)
     */
    public function setAclInterfacesControllerss(PropelCollection $aclInterfacesControllerss, PropelPDO $con = null)
    {
        $aclInterfacesControllerssToDelete = $this->getAclInterfacesControllerss(new Criteria(), $con)->diff($aclInterfacesControllerss);


        $this->aclInterfacesControllerssScheduledForDeletion = $aclInterfacesControllerssToDelete;

        foreach ($aclInterfacesControllerssToDelete as $aclInterfacesControllersRemoved) {
            $aclInterfacesControllersRemoved->setAclModules(null);
        }

        $this->collAclInterfacesControllerss = null;
        foreach ($aclInterfacesControllerss as $aclInterfacesControllers) {
            $this->addAclInterfacesControllers($aclInterfacesControllers);
        }

        $this->collAclInterfacesControllerss = $aclInterfacesControllerss;
        $this->collAclInterfacesControllerssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related AclInterfacesControllers objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related AclInterfacesControllers objects.
     * @throws PropelException
     */
    public function countAclInterfacesControllerss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAclInterfacesControllerssPartial && !$this->isNew();
        if (null === $this->collAclInterfacesControllerss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAclInterfacesControllerss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAclInterfacesControllerss());
            }
            $query = AclInterfacesControllersQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAclModules($this)
                ->count($con);
        }

        return count($this->collAclInterfacesControllerss);
    }

    /**
     * Method called to associate a AclInterfacesControllers object to this object
     * through the AclInterfacesControllers foreign key attribute.
     *
     * @param    AclInterfacesControllers $l AclInterfacesControllers
     * @return AclModules The current object (for fluent API support)
     */
    public function addAclInterfacesControllers(AclInterfacesControllers $l)
    {
        if ($this->collAclInterfacesControllerss === null) {
            $this->initAclInterfacesControllerss();
            $this->collAclInterfacesControllerssPartial = true;
        }

        if (!in_array($l, $this->collAclInterfacesControllerss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAclInterfacesControllers($l);

            if ($this->aclInterfacesControllerssScheduledForDeletion and $this->aclInterfacesControllerssScheduledForDeletion->contains($l)) {
                $this->aclInterfacesControllerssScheduledForDeletion->remove($this->aclInterfacesControllerssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	AclInterfacesControllers $aclInterfacesControllers The aclInterfacesControllers object to add.
     */
    protected function doAddAclInterfacesControllers($aclInterfacesControllers)
    {
        $this->collAclInterfacesControllerss[]= $aclInterfacesControllers;
        $aclInterfacesControllers->setAclModules($this);
    }

    /**
     * @param	AclInterfacesControllers $aclInterfacesControllers The aclInterfacesControllers object to remove.
     * @return AclModules The current object (for fluent API support)
     */
    public function removeAclInterfacesControllers($aclInterfacesControllers)
    {
        if ($this->getAclInterfacesControllerss()->contains($aclInterfacesControllers)) {
            $this->collAclInterfacesControllerss->remove($this->collAclInterfacesControllerss->search($aclInterfacesControllers));
            if (null === $this->aclInterfacesControllerssScheduledForDeletion) {
                $this->aclInterfacesControllerssScheduledForDeletion = clone $this->collAclInterfacesControllerss;
                $this->aclInterfacesControllerssScheduledForDeletion->clear();
            }
            $this->aclInterfacesControllerssScheduledForDeletion[]= $aclInterfacesControllers;
            $aclInterfacesControllers->setAclModules(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->module_id = null;
        $this->module_name = null;
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
            if ($this->collAclInterfacesControllerss) {
                foreach ($this->collAclInterfacesControllerss as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAclInterfacesControllerss instanceof PropelCollection) {
            $this->collAclInterfacesControllerss->clearIterator();
        }
        $this->collAclInterfacesControllerss = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AclModulesPeer::DEFAULT_STRING_FORMAT);
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
                return BaseAclModulesPeer::getConnection();
            }
}
