<?php


/**
 * Base class that represents a row from the 'r_user_types' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRUserTypes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RUserTypesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RUserTypesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_user_type_id field.
     * @var        int
     */
    protected $r_user_type_id;

    /**
     * The value for the r_user_type_short_name field.
     * @var        string
     */
    protected $r_user_type_short_name;

    /**
     * The value for the r_user_type_full_name field.
     * @var        string
     */
    protected $r_user_type_full_name;

    /**
     * The value for the r_user_type_actif field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $r_user_type_actif;

    /**
     * @var        PropelObjectCollection|Users[] Collection to store aggregation of Users objects.
     */
    protected $collUserss;
    protected $collUserssPartial;

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
    protected $userssScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->r_user_type_actif = 1;
    }

    /**
     * Initializes internal state of BaseRUserTypes object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [r_user_type_id] column value.
     *
     * @return int
     */
    public function getRUserTypeId()
    {

        return $this->r_user_type_id;
    }

    /**
     * Get the [r_user_type_short_name] column value.
     *
     * @return string
     */
    public function getRUserTypeShortName()
    {

        return $this->r_user_type_short_name;
    }

    /**
     * Get the [r_user_type_full_name] column value.
     *
     * @return string
     */
    public function getRUserTypeFullName()
    {

        return $this->r_user_type_full_name;
    }

    /**
     * Get the [r_user_type_actif] column value.
     *
     * @return int
     */
    public function getRUserTypeActif()
    {

        return $this->r_user_type_actif;
    }

    /**
     * Set the value of [r_user_type_id] column.
     *
     * @param  int $v new value
     * @return RUserTypes The current object (for fluent API support)
     */
    public function setRUserTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_user_type_id !== $v) {
                    $this->r_user_type_id = $v;
                    $this->modifiedColumns[] = RUserTypesPeer::R_USER_TYPE_ID;
                }


        return $this;
    } // setRUserTypeId()

    /**
     * Set the value of [r_user_type_short_name] column.
     *
     * @param  string $v new value
     * @return RUserTypes The current object (for fluent API support)
     */
    public function setRUserTypeShortName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_user_type_short_name !== $v) {
            $this->r_user_type_short_name = $v;
            $this->modifiedColumns[] = RUserTypesPeer::R_USER_TYPE_SHORT_NAME;
        }


        return $this;
    } // setRUserTypeShortName()

    /**
     * Set the value of [r_user_type_full_name] column.
     *
     * @param  string $v new value
     * @return RUserTypes The current object (for fluent API support)
     */
    public function setRUserTypeFullName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_user_type_full_name !== $v) {
            $this->r_user_type_full_name = $v;
            $this->modifiedColumns[] = RUserTypesPeer::R_USER_TYPE_FULL_NAME;
        }


        return $this;
    } // setRUserTypeFullName()

    /**
     * Set the value of [r_user_type_actif] column.
     *
     * @param  int $v new value
     * @return RUserTypes The current object (for fluent API support)
     */
    public function setRUserTypeActif($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_user_type_actif !== $v) {
                    $this->r_user_type_actif = $v;
                    $this->modifiedColumns[] = RUserTypesPeer::R_USER_TYPE_ACTIF;
                }


        return $this;
    } // setRUserTypeActif()

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
            if ($this->r_user_type_actif !== 1) {
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

            $this->r_user_type_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_user_type_short_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_user_type_full_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->r_user_type_actif = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = RUserTypesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RUserTypes object", $e);
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
            $con = Propel::getConnection(RUserTypesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RUserTypesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collUserss = null;

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
            $con = Propel::getConnection(RUserTypesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RUserTypesQuery::create()
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
            $con = Propel::getConnection(RUserTypesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RUserTypesPeer::addInstanceToPool($this);
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

            if ($this->userssScheduledForDeletion !== null) {
                if (!$this->userssScheduledForDeletion->isEmpty()) {
                    foreach ($this->userssScheduledForDeletion as $users) {
                        // need to save related object because we set the relation to null
                        $users->save($con);
                    }
                    $this->userssScheduledForDeletion = null;
                }
            }

            if ($this->collUserss !== null) {
                foreach ($this->collUserss as $referrerFK) {
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

        $this->modifiedColumns[] = RUserTypesPeer::R_USER_TYPE_ID;
        if (null !== $this->r_user_type_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RUserTypesPeer::R_USER_TYPE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RUserTypesPeer::R_USER_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_user_type_id`';
        }
        if ($this->isColumnModified(RUserTypesPeer::R_USER_TYPE_SHORT_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`r_user_type_short_name`';
        }
        if ($this->isColumnModified(RUserTypesPeer::R_USER_TYPE_FULL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`r_user_type_full_name`';
        }
        if ($this->isColumnModified(RUserTypesPeer::R_USER_TYPE_ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`r_user_type_actif`';
        }

        $sql = sprintf(
            'INSERT INTO `r_user_types` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_user_type_id`':
                        $stmt->bindValue($identifier, $this->r_user_type_id, PDO::PARAM_INT);
                        break;
                    case '`r_user_type_short_name`':
                        $stmt->bindValue($identifier, $this->r_user_type_short_name, PDO::PARAM_STR);
                        break;
                    case '`r_user_type_full_name`':
                        $stmt->bindValue($identifier, $this->r_user_type_full_name, PDO::PARAM_STR);
                        break;
                    case '`r_user_type_actif`':
                        $stmt->bindValue($identifier, $this->r_user_type_actif, PDO::PARAM_INT);
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
        $this->setRUserTypeId($pk);

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


            if (($retval = RUserTypesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collUserss !== null) {
                    foreach ($this->collUserss as $referrerFK) {
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
        $pos = RUserTypesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRUserTypeId();
                break;
            case 1:
                return $this->getRUserTypeShortName();
                break;
            case 2:
                return $this->getRUserTypeFullName();
                break;
            case 3:
                return $this->getRUserTypeActif();
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
        if (isset($alreadyDumpedObjects['RUserTypes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RUserTypes'][$this->getPrimaryKey()] = true;
        $keys = RUserTypesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRUserTypeId(),
            $keys[1] => $this->getRUserTypeShortName(),
            $keys[2] => $this->getRUserTypeFullName(),
            $keys[3] => $this->getRUserTypeActif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collUserss) {
                $result['Userss'] = $this->collUserss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RUserTypesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRUserTypeId($value);
                break;
            case 1:
                $this->setRUserTypeShortName($value);
                break;
            case 2:
                $this->setRUserTypeFullName($value);
                break;
            case 3:
                $this->setRUserTypeActif($value);
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
        $keys = RUserTypesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRUserTypeId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRUserTypeShortName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRUserTypeFullName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRUserTypeActif($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RUserTypesPeer::DATABASE_NAME);

        if ($this->isColumnModified(RUserTypesPeer::R_USER_TYPE_ID)) $criteria->add(RUserTypesPeer::R_USER_TYPE_ID, $this->r_user_type_id);
        if ($this->isColumnModified(RUserTypesPeer::R_USER_TYPE_SHORT_NAME)) $criteria->add(RUserTypesPeer::R_USER_TYPE_SHORT_NAME, $this->r_user_type_short_name);
        if ($this->isColumnModified(RUserTypesPeer::R_USER_TYPE_FULL_NAME)) $criteria->add(RUserTypesPeer::R_USER_TYPE_FULL_NAME, $this->r_user_type_full_name);
        if ($this->isColumnModified(RUserTypesPeer::R_USER_TYPE_ACTIF)) $criteria->add(RUserTypesPeer::R_USER_TYPE_ACTIF, $this->r_user_type_actif);

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
        $criteria = new Criteria(RUserTypesPeer::DATABASE_NAME);
        $criteria->add(RUserTypesPeer::R_USER_TYPE_ID, $this->r_user_type_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRUserTypeId();
    }

    /**
     * Generic method to set the primary key (r_user_type_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRUserTypeId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRUserTypeId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RUserTypes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRUserTypeShortName($this->getRUserTypeShortName());
        $copyObj->setRUserTypeFullName($this->getRUserTypeFullName());
        $copyObj->setRUserTypeActif($this->getRUserTypeActif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getUserss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUsers($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRUserTypeId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RUserTypes Clone of current object.
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
     * @return RUserTypesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RUserTypesPeer();
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
        if ('Users' == $relationName) {
            $this->initUserss();
        }
    }

    /**
     * Clears out the collUserss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RUserTypes The current object (for fluent API support)
     * @see        addUserss()
     */
    public function clearUserss()
    {
        $this->collUserss = null; // important to set this to null since that means it is uninitialized
        $this->collUserssPartial = null;

        return $this;
    }

    /**
     * reset is the collUserss collection loaded partially
     *
     * @return void
     */
    public function resetPartialUserss($v = true)
    {
        $this->collUserssPartial = $v;
    }

    /**
     * Initializes the collUserss collection.
     *
     * By default this just sets the collUserss collection to an empty array (like clearcollUserss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUserss($overrideExisting = true)
    {
        if (null !== $this->collUserss && !$overrideExisting) {
            return;
        }
        $this->collUserss = new PropelObjectCollection();
        $this->collUserss->setModel('Users');
    }

    /**
     * Gets an array of Users objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RUserTypes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Users[] List of Users objects
     * @throws PropelException
     */
    public function getUserss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUserssPartial && !$this->isNew();
        if (null === $this->collUserss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUserss) {
                // return empty collection
                $this->initUserss();
            } else {
                $collUserss = UsersQuery::create(null, $criteria)
                    ->filterByRUserTypes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUserssPartial && count($collUserss)) {
                      $this->initUserss(false);

                      foreach ($collUserss as $obj) {
                        if (false == $this->collUserss->contains($obj)) {
                          $this->collUserss->append($obj);
                        }
                      }

                      $this->collUserssPartial = true;
                    }

                    $collUserss->getInternalIterator()->rewind();

                    return $collUserss;
                }

                if ($partial && $this->collUserss) {
                    foreach ($this->collUserss as $obj) {
                        if ($obj->isNew()) {
                            $collUserss[] = $obj;
                        }
                    }
                }

                $this->collUserss = $collUserss;
                $this->collUserssPartial = false;
            }
        }

        return $this->collUserss;
    }

    /**
     * Sets a collection of Users objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $userss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RUserTypes The current object (for fluent API support)
     */
    public function setUserss(PropelCollection $userss, PropelPDO $con = null)
    {
        $userssToDelete = $this->getUserss(new Criteria(), $con)->diff($userss);


        $this->userssScheduledForDeletion = $userssToDelete;

        foreach ($userssToDelete as $usersRemoved) {
            $usersRemoved->setRUserTypes(null);
        }

        $this->collUserss = null;
        foreach ($userss as $users) {
            $this->addUsers($users);
        }

        $this->collUserss = $userss;
        $this->collUserssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Users objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Users objects.
     * @throws PropelException
     */
    public function countUserss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUserssPartial && !$this->isNew();
        if (null === $this->collUserss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUserss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUserss());
            }
            $query = UsersQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRUserTypes($this)
                ->count($con);
        }

        return count($this->collUserss);
    }

    /**
     * Method called to associate a Users object to this object
     * through the Users foreign key attribute.
     *
     * @param    Users $l Users
     * @return RUserTypes The current object (for fluent API support)
     */
    public function addUsers(Users $l)
    {
        if ($this->collUserss === null) {
            $this->initUserss();
            $this->collUserssPartial = true;
        }

        if (!in_array($l, $this->collUserss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUsers($l);

            if ($this->userssScheduledForDeletion and $this->userssScheduledForDeletion->contains($l)) {
                $this->userssScheduledForDeletion->remove($this->userssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Users $users The users object to add.
     */
    protected function doAddUsers($users)
    {
        $this->collUserss[]= $users;
        $users->setRUserTypes($this);
    }

    /**
     * @param	Users $users The users object to remove.
     * @return RUserTypes The current object (for fluent API support)
     */
    public function removeUsers($users)
    {
        if ($this->getUserss()->contains($users)) {
            $this->collUserss->remove($this->collUserss->search($users));
            if (null === $this->userssScheduledForDeletion) {
                $this->userssScheduledForDeletion = clone $this->collUserss;
                $this->userssScheduledForDeletion->clear();
            }
            $this->userssScheduledForDeletion[]= $users;
            $users->setRUserTypes(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_user_type_id = null;
        $this->r_user_type_short_name = null;
        $this->r_user_type_full_name = null;
        $this->r_user_type_actif = null;
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
            if ($this->collUserss) {
                foreach ($this->collUserss as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collUserss instanceof PropelCollection) {
            $this->collUserss->clearIterator();
        }
        $this->collUserss = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RUserTypesPeer::DEFAULT_STRING_FORMAT);
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
                return BaseRUserTypesPeer::getConnection();
            }
}
