<?php


/**
 * Base class that represents a row from the 'organisations' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOrganisations extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OrganisationsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OrganisationsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the organisation_id field.
     * @var        int
     */
    protected $organisation_id;

    /**
     * The value for the organisation_name field.
     * @var        string
     */
    protected $organisation_name;

    /**
     * @var        PropelObjectCollection|AclGroups[] Collection to store aggregation of AclGroups objects.
     */
    protected $collAclGroupss;
    protected $collAclGroupssPartial;

    /**
     * @var        PropelObjectCollection|Settings[] Collection to store aggregation of Settings objects.
     */
    protected $collSettingss;
    protected $collSettingssPartial;

    /**
     * @var        PropelObjectCollection|LnkUsersOrganisations[] Collection to store aggregation of LnkUsersOrganisations objects.
     */
    protected $collLnkUsersOrganisationss;
    protected $collLnkUsersOrganisationssPartial;

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
    protected $aclGroupssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $settingssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkUsersOrganisationssScheduledForDeletion = null;

    /**
     * Get the [organisation_id] column value.
     *
     * @return int
     */
    public function getOrganisationId()
    {

        return $this->organisation_id;
    }

    /**
     * Get the [organisation_name] column value.
     *
     * @return string
     */
    public function getOrganisationName()
    {

        return $this->organisation_name;
    }

    /**
     * Set the value of [organisation_id] column.
     *
     * @param  int $v new value
     * @return Organisations The current object (for fluent API support)
     */
    public function setOrganisationId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->organisation_id !== $v) {
                    $this->organisation_id = $v;
                    $this->modifiedColumns[] = OrganisationsPeer::ORGANISATION_ID;
                }


        return $this;
    } // setOrganisationId()

    /**
     * Set the value of [organisation_name] column.
     *
     * @param  string $v new value
     * @return Organisations The current object (for fluent API support)
     */
    public function setOrganisationName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->organisation_name !== $v) {
            $this->organisation_name = $v;
            $this->modifiedColumns[] = OrganisationsPeer::ORGANISATION_NAME;
        }


        return $this;
    } // setOrganisationName()

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

            $this->organisation_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisation_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 2; // 2 = OrganisationsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Organisations object", $e);
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
            $con = Propel::getConnection(OrganisationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OrganisationsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collAclGroupss = null;

            $this->collSettingss = null;

            $this->collLnkUsersOrganisationss = null;

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
            $con = Propel::getConnection(OrganisationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OrganisationsQuery::create()
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
            $con = Propel::getConnection(OrganisationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OrganisationsPeer::addInstanceToPool($this);
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

            if ($this->aclGroupssScheduledForDeletion !== null) {
                if (!$this->aclGroupssScheduledForDeletion->isEmpty()) {
                    AclGroupsQuery::create()
                        ->filterByPrimaryKeys($this->aclGroupssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->aclGroupssScheduledForDeletion = null;
                }
            }

            if ($this->collAclGroupss !== null) {
                foreach ($this->collAclGroupss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->settingssScheduledForDeletion !== null) {
                if (!$this->settingssScheduledForDeletion->isEmpty()) {
                    SettingsQuery::create()
                        ->filterByPrimaryKeys($this->settingssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->settingssScheduledForDeletion = null;
                }
            }

            if ($this->collSettingss !== null) {
                foreach ($this->collSettingss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkUsersOrganisationssScheduledForDeletion !== null) {
                if (!$this->lnkUsersOrganisationssScheduledForDeletion->isEmpty()) {
                    LnkUsersOrganisationsQuery::create()
                        ->filterByPrimaryKeys($this->lnkUsersOrganisationssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkUsersOrganisationssScheduledForDeletion = null;
                }
            }

            if ($this->collLnkUsersOrganisationss !== null) {
                foreach ($this->collLnkUsersOrganisationss as $referrerFK) {
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
        if ($this->isColumnModified(OrganisationsPeer::ORGANISATION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`organisation_id`';
        }
        if ($this->isColumnModified(OrganisationsPeer::ORGANISATION_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`organisation_name`';
        }

        $sql = sprintf(
            'INSERT INTO `organisations` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`organisation_id`':
                        $stmt->bindValue($identifier, $this->organisation_id, PDO::PARAM_INT);
                        break;
                    case '`organisation_name`':
                        $stmt->bindValue($identifier, $this->organisation_name, PDO::PARAM_STR);
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


            if (($retval = OrganisationsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAclGroupss !== null) {
                    foreach ($this->collAclGroupss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSettingss !== null) {
                    foreach ($this->collSettingss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkUsersOrganisationss !== null) {
                    foreach ($this->collLnkUsersOrganisationss as $referrerFK) {
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
        $pos = OrganisationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrganisationId();
                break;
            case 1:
                return $this->getOrganisationName();
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
        if (isset($alreadyDumpedObjects['Organisations'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Organisations'][$this->getPrimaryKey()] = true;
        $keys = OrganisationsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOrganisationId(),
            $keys[1] => $this->getOrganisationName(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collAclGroupss) {
                $result['AclGroupss'] = $this->collAclGroupss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSettingss) {
                $result['Settingss'] = $this->collSettingss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkUsersOrganisationss) {
                $result['LnkUsersOrganisationss'] = $this->collLnkUsersOrganisationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = OrganisationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrganisationId($value);
                break;
            case 1:
                $this->setOrganisationName($value);
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
        $keys = OrganisationsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOrganisationId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisationName($arr[$keys[1]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OrganisationsPeer::DATABASE_NAME);

        if ($this->isColumnModified(OrganisationsPeer::ORGANISATION_ID)) $criteria->add(OrganisationsPeer::ORGANISATION_ID, $this->organisation_id);
        if ($this->isColumnModified(OrganisationsPeer::ORGANISATION_NAME)) $criteria->add(OrganisationsPeer::ORGANISATION_NAME, $this->organisation_name);

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
        $criteria = new Criteria(OrganisationsPeer::DATABASE_NAME);
        $criteria->add(OrganisationsPeer::ORGANISATION_ID, $this->organisation_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOrganisationId();
    }

    /**
     * Generic method to set the primary key (organisation_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOrganisationId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOrganisationId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Organisations (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisationName($this->getOrganisationName());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAclGroupss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAclGroups($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSettingss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSettings($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkUsersOrganisationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkUsersOrganisations($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOrganisationId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Organisations Clone of current object.
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
     * @return OrganisationsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OrganisationsPeer();
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
        if ('AclGroups' == $relationName) {
            $this->initAclGroupss();
        }
        if ('Settings' == $relationName) {
            $this->initSettingss();
        }
        if ('LnkUsersOrganisations' == $relationName) {
            $this->initLnkUsersOrganisationss();
        }
    }

    /**
     * Clears out the collAclGroupss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Organisations The current object (for fluent API support)
     * @see        addAclGroupss()
     */
    public function clearAclGroupss()
    {
        $this->collAclGroupss = null; // important to set this to null since that means it is uninitialized
        $this->collAclGroupssPartial = null;

        return $this;
    }

    /**
     * reset is the collAclGroupss collection loaded partially
     *
     * @return void
     */
    public function resetPartialAclGroupss($v = true)
    {
        $this->collAclGroupssPartial = $v;
    }

    /**
     * Initializes the collAclGroupss collection.
     *
     * By default this just sets the collAclGroupss collection to an empty array (like clearcollAclGroupss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAclGroupss($overrideExisting = true)
    {
        if (null !== $this->collAclGroupss && !$overrideExisting) {
            return;
        }
        $this->collAclGroupss = new PropelObjectCollection();
        $this->collAclGroupss->setModel('AclGroups');
    }

    /**
     * Gets an array of AclGroups objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Organisations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|AclGroups[] List of AclGroups objects
     * @throws PropelException
     */
    public function getAclGroupss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAclGroupssPartial && !$this->isNew();
        if (null === $this->collAclGroupss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAclGroupss) {
                // return empty collection
                $this->initAclGroupss();
            } else {
                $collAclGroupss = AclGroupsQuery::create(null, $criteria)
                    ->filterByOrganisations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAclGroupssPartial && count($collAclGroupss)) {
                      $this->initAclGroupss(false);

                      foreach ($collAclGroupss as $obj) {
                        if (false == $this->collAclGroupss->contains($obj)) {
                          $this->collAclGroupss->append($obj);
                        }
                      }

                      $this->collAclGroupssPartial = true;
                    }

                    $collAclGroupss->getInternalIterator()->rewind();

                    return $collAclGroupss;
                }

                if ($partial && $this->collAclGroupss) {
                    foreach ($this->collAclGroupss as $obj) {
                        if ($obj->isNew()) {
                            $collAclGroupss[] = $obj;
                        }
                    }
                }

                $this->collAclGroupss = $collAclGroupss;
                $this->collAclGroupssPartial = false;
            }
        }

        return $this->collAclGroupss;
    }

    /**
     * Sets a collection of AclGroups objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $aclGroupss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Organisations The current object (for fluent API support)
     */
    public function setAclGroupss(PropelCollection $aclGroupss, PropelPDO $con = null)
    {
        $aclGroupssToDelete = $this->getAclGroupss(new Criteria(), $con)->diff($aclGroupss);


        $this->aclGroupssScheduledForDeletion = $aclGroupssToDelete;

        foreach ($aclGroupssToDelete as $aclGroupsRemoved) {
            $aclGroupsRemoved->setOrganisations(null);
        }

        $this->collAclGroupss = null;
        foreach ($aclGroupss as $aclGroups) {
            $this->addAclGroups($aclGroups);
        }

        $this->collAclGroupss = $aclGroupss;
        $this->collAclGroupssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related AclGroups objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related AclGroups objects.
     * @throws PropelException
     */
    public function countAclGroupss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAclGroupssPartial && !$this->isNew();
        if (null === $this->collAclGroupss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAclGroupss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAclGroupss());
            }
            $query = AclGroupsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOrganisations($this)
                ->count($con);
        }

        return count($this->collAclGroupss);
    }

    /**
     * Method called to associate a AclGroups object to this object
     * through the AclGroups foreign key attribute.
     *
     * @param    AclGroups $l AclGroups
     * @return Organisations The current object (for fluent API support)
     */
    public function addAclGroups(AclGroups $l)
    {
        if ($this->collAclGroupss === null) {
            $this->initAclGroupss();
            $this->collAclGroupssPartial = true;
        }

        if (!in_array($l, $this->collAclGroupss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAclGroups($l);

            if ($this->aclGroupssScheduledForDeletion and $this->aclGroupssScheduledForDeletion->contains($l)) {
                $this->aclGroupssScheduledForDeletion->remove($this->aclGroupssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	AclGroups $aclGroups The aclGroups object to add.
     */
    protected function doAddAclGroups($aclGroups)
    {
        $this->collAclGroupss[]= $aclGroups;
        $aclGroups->setOrganisations($this);
    }

    /**
     * @param	AclGroups $aclGroups The aclGroups object to remove.
     * @return Organisations The current object (for fluent API support)
     */
    public function removeAclGroups($aclGroups)
    {
        if ($this->getAclGroupss()->contains($aclGroups)) {
            $this->collAclGroupss->remove($this->collAclGroupss->search($aclGroups));
            if (null === $this->aclGroupssScheduledForDeletion) {
                $this->aclGroupssScheduledForDeletion = clone $this->collAclGroupss;
                $this->aclGroupssScheduledForDeletion->clear();
            }
            $this->aclGroupssScheduledForDeletion[]= clone $aclGroups;
            $aclGroups->setOrganisations(null);
        }

        return $this;
    }

    /**
     * Clears out the collSettingss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Organisations The current object (for fluent API support)
     * @see        addSettingss()
     */
    public function clearSettingss()
    {
        $this->collSettingss = null; // important to set this to null since that means it is uninitialized
        $this->collSettingssPartial = null;

        return $this;
    }

    /**
     * reset is the collSettingss collection loaded partially
     *
     * @return void
     */
    public function resetPartialSettingss($v = true)
    {
        $this->collSettingssPartial = $v;
    }

    /**
     * Initializes the collSettingss collection.
     *
     * By default this just sets the collSettingss collection to an empty array (like clearcollSettingss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSettingss($overrideExisting = true)
    {
        if (null !== $this->collSettingss && !$overrideExisting) {
            return;
        }
        $this->collSettingss = new PropelObjectCollection();
        $this->collSettingss->setModel('Settings');
    }

    /**
     * Gets an array of Settings objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Organisations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Settings[] List of Settings objects
     * @throws PropelException
     */
    public function getSettingss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSettingssPartial && !$this->isNew();
        if (null === $this->collSettingss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSettingss) {
                // return empty collection
                $this->initSettingss();
            } else {
                $collSettingss = SettingsQuery::create(null, $criteria)
                    ->filterByOrganisations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSettingssPartial && count($collSettingss)) {
                      $this->initSettingss(false);

                      foreach ($collSettingss as $obj) {
                        if (false == $this->collSettingss->contains($obj)) {
                          $this->collSettingss->append($obj);
                        }
                      }

                      $this->collSettingssPartial = true;
                    }

                    $collSettingss->getInternalIterator()->rewind();

                    return $collSettingss;
                }

                if ($partial && $this->collSettingss) {
                    foreach ($this->collSettingss as $obj) {
                        if ($obj->isNew()) {
                            $collSettingss[] = $obj;
                        }
                    }
                }

                $this->collSettingss = $collSettingss;
                $this->collSettingssPartial = false;
            }
        }

        return $this->collSettingss;
    }

    /**
     * Sets a collection of Settings objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $settingss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Organisations The current object (for fluent API support)
     */
    public function setSettingss(PropelCollection $settingss, PropelPDO $con = null)
    {
        $settingssToDelete = $this->getSettingss(new Criteria(), $con)->diff($settingss);


        $this->settingssScheduledForDeletion = $settingssToDelete;

        foreach ($settingssToDelete as $settingsRemoved) {
            $settingsRemoved->setOrganisations(null);
        }

        $this->collSettingss = null;
        foreach ($settingss as $settings) {
            $this->addSettings($settings);
        }

        $this->collSettingss = $settingss;
        $this->collSettingssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Settings objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Settings objects.
     * @throws PropelException
     */
    public function countSettingss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSettingssPartial && !$this->isNew();
        if (null === $this->collSettingss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSettingss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSettingss());
            }
            $query = SettingsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOrganisations($this)
                ->count($con);
        }

        return count($this->collSettingss);
    }

    /**
     * Method called to associate a Settings object to this object
     * through the Settings foreign key attribute.
     *
     * @param    Settings $l Settings
     * @return Organisations The current object (for fluent API support)
     */
    public function addSettings(Settings $l)
    {
        if ($this->collSettingss === null) {
            $this->initSettingss();
            $this->collSettingssPartial = true;
        }

        if (!in_array($l, $this->collSettingss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSettings($l);

            if ($this->settingssScheduledForDeletion and $this->settingssScheduledForDeletion->contains($l)) {
                $this->settingssScheduledForDeletion->remove($this->settingssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Settings $settings The settings object to add.
     */
    protected function doAddSettings($settings)
    {
        $this->collSettingss[]= $settings;
        $settings->setOrganisations($this);
    }

    /**
     * @param	Settings $settings The settings object to remove.
     * @return Organisations The current object (for fluent API support)
     */
    public function removeSettings($settings)
    {
        if ($this->getSettingss()->contains($settings)) {
            $this->collSettingss->remove($this->collSettingss->search($settings));
            if (null === $this->settingssScheduledForDeletion) {
                $this->settingssScheduledForDeletion = clone $this->collSettingss;
                $this->settingssScheduledForDeletion->clear();
            }
            $this->settingssScheduledForDeletion[]= clone $settings;
            $settings->setOrganisations(null);
        }

        return $this;
    }

    /**
     * Clears out the collLnkUsersOrganisationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Organisations The current object (for fluent API support)
     * @see        addLnkUsersOrganisationss()
     */
    public function clearLnkUsersOrganisationss()
    {
        $this->collLnkUsersOrganisationss = null; // important to set this to null since that means it is uninitialized
        $this->collLnkUsersOrganisationssPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkUsersOrganisationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkUsersOrganisationss($v = true)
    {
        $this->collLnkUsersOrganisationssPartial = $v;
    }

    /**
     * Initializes the collLnkUsersOrganisationss collection.
     *
     * By default this just sets the collLnkUsersOrganisationss collection to an empty array (like clearcollLnkUsersOrganisationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkUsersOrganisationss($overrideExisting = true)
    {
        if (null !== $this->collLnkUsersOrganisationss && !$overrideExisting) {
            return;
        }
        $this->collLnkUsersOrganisationss = new PropelObjectCollection();
        $this->collLnkUsersOrganisationss->setModel('LnkUsersOrganisations');
    }

    /**
     * Gets an array of LnkUsersOrganisations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Organisations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkUsersOrganisations[] List of LnkUsersOrganisations objects
     * @throws PropelException
     */
    public function getLnkUsersOrganisationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkUsersOrganisationssPartial && !$this->isNew();
        if (null === $this->collLnkUsersOrganisationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkUsersOrganisationss) {
                // return empty collection
                $this->initLnkUsersOrganisationss();
            } else {
                $collLnkUsersOrganisationss = LnkUsersOrganisationsQuery::create(null, $criteria)
                    ->filterByOrganisations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkUsersOrganisationssPartial && count($collLnkUsersOrganisationss)) {
                      $this->initLnkUsersOrganisationss(false);

                      foreach ($collLnkUsersOrganisationss as $obj) {
                        if (false == $this->collLnkUsersOrganisationss->contains($obj)) {
                          $this->collLnkUsersOrganisationss->append($obj);
                        }
                      }

                      $this->collLnkUsersOrganisationssPartial = true;
                    }

                    $collLnkUsersOrganisationss->getInternalIterator()->rewind();

                    return $collLnkUsersOrganisationss;
                }

                if ($partial && $this->collLnkUsersOrganisationss) {
                    foreach ($this->collLnkUsersOrganisationss as $obj) {
                        if ($obj->isNew()) {
                            $collLnkUsersOrganisationss[] = $obj;
                        }
                    }
                }

                $this->collLnkUsersOrganisationss = $collLnkUsersOrganisationss;
                $this->collLnkUsersOrganisationssPartial = false;
            }
        }

        return $this->collLnkUsersOrganisationss;
    }

    /**
     * Sets a collection of LnkUsersOrganisations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkUsersOrganisationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Organisations The current object (for fluent API support)
     */
    public function setLnkUsersOrganisationss(PropelCollection $lnkUsersOrganisationss, PropelPDO $con = null)
    {
        $lnkUsersOrganisationssToDelete = $this->getLnkUsersOrganisationss(new Criteria(), $con)->diff($lnkUsersOrganisationss);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->lnkUsersOrganisationssScheduledForDeletion = clone $lnkUsersOrganisationssToDelete;

        foreach ($lnkUsersOrganisationssToDelete as $lnkUsersOrganisationsRemoved) {
            $lnkUsersOrganisationsRemoved->setOrganisations(null);
        }

        $this->collLnkUsersOrganisationss = null;
        foreach ($lnkUsersOrganisationss as $lnkUsersOrganisations) {
            $this->addLnkUsersOrganisations($lnkUsersOrganisations);
        }

        $this->collLnkUsersOrganisationss = $lnkUsersOrganisationss;
        $this->collLnkUsersOrganisationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkUsersOrganisations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkUsersOrganisations objects.
     * @throws PropelException
     */
    public function countLnkUsersOrganisationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkUsersOrganisationssPartial && !$this->isNew();
        if (null === $this->collLnkUsersOrganisationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkUsersOrganisationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkUsersOrganisationss());
            }
            $query = LnkUsersOrganisationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOrganisations($this)
                ->count($con);
        }

        return count($this->collLnkUsersOrganisationss);
    }

    /**
     * Method called to associate a LnkUsersOrganisations object to this object
     * through the LnkUsersOrganisations foreign key attribute.
     *
     * @param    LnkUsersOrganisations $l LnkUsersOrganisations
     * @return Organisations The current object (for fluent API support)
     */
    public function addLnkUsersOrganisations(LnkUsersOrganisations $l)
    {
        if ($this->collLnkUsersOrganisationss === null) {
            $this->initLnkUsersOrganisationss();
            $this->collLnkUsersOrganisationssPartial = true;
        }

        if (!in_array($l, $this->collLnkUsersOrganisationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkUsersOrganisations($l);

            if ($this->lnkUsersOrganisationssScheduledForDeletion and $this->lnkUsersOrganisationssScheduledForDeletion->contains($l)) {
                $this->lnkUsersOrganisationssScheduledForDeletion->remove($this->lnkUsersOrganisationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkUsersOrganisations $lnkUsersOrganisations The lnkUsersOrganisations object to add.
     */
    protected function doAddLnkUsersOrganisations($lnkUsersOrganisations)
    {
        $this->collLnkUsersOrganisationss[]= $lnkUsersOrganisations;
        $lnkUsersOrganisations->setOrganisations($this);
    }

    /**
     * @param	LnkUsersOrganisations $lnkUsersOrganisations The lnkUsersOrganisations object to remove.
     * @return Organisations The current object (for fluent API support)
     */
    public function removeLnkUsersOrganisations($lnkUsersOrganisations)
    {
        if ($this->getLnkUsersOrganisationss()->contains($lnkUsersOrganisations)) {
            $this->collLnkUsersOrganisationss->remove($this->collLnkUsersOrganisationss->search($lnkUsersOrganisations));
            if (null === $this->lnkUsersOrganisationssScheduledForDeletion) {
                $this->lnkUsersOrganisationssScheduledForDeletion = clone $this->collLnkUsersOrganisationss;
                $this->lnkUsersOrganisationssScheduledForDeletion->clear();
            }
            $this->lnkUsersOrganisationssScheduledForDeletion[]= clone $lnkUsersOrganisations;
            $lnkUsersOrganisations->setOrganisations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Organisations is new, it will return
     * an empty collection; or if this Organisations has previously
     * been saved, it will retrieve related LnkUsersOrganisationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Organisations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkUsersOrganisations[] List of LnkUsersOrganisations objects
     */
    public function getLnkUsersOrganisationssJoinUsers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkUsersOrganisationsQuery::create(null, $criteria);
        $query->joinWith('Users', $join_behavior);

        return $this->getLnkUsersOrganisationss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->organisation_id = null;
        $this->organisation_name = null;
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
            if ($this->collAclGroupss) {
                foreach ($this->collAclGroupss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSettingss) {
                foreach ($this->collSettingss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkUsersOrganisationss) {
                foreach ($this->collLnkUsersOrganisationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAclGroupss instanceof PropelCollection) {
            $this->collAclGroupss->clearIterator();
        }
        $this->collAclGroupss = null;
        if ($this->collSettingss instanceof PropelCollection) {
            $this->collSettingss->clearIterator();
        }
        $this->collSettingss = null;
        if ($this->collLnkUsersOrganisationss instanceof PropelCollection) {
            $this->collLnkUsersOrganisationss->clearIterator();
        }
        $this->collLnkUsersOrganisationss = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OrganisationsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseOrganisationsPeer::getConnection();
            }
}
