<?php


/**
 * Base class that represents a row from the 'acl_fonctionnalites' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseAclFonctionnalites extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AclFonctionnalitesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AclFonctionnalitesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the fonc_id field.
     * @var        int
     */
    protected $fonc_id;

    /**
     * The value for the int_cont_id field.
     * @var        int
     */
    protected $int_cont_id;

    /**
     * The value for the fonc_name field.
     * @var        string
     */
    protected $fonc_name;

    /**
     * @var        AclInterfacesControllers
     */
    protected $aAclInterfacesControllers;

    /**
     * @var        PropelObjectCollection|AclActions[] Collection to store aggregation of AclActions objects.
     */
    protected $collAclActionss;
    protected $collAclActionssPartial;

    /**
     * @var        PropelObjectCollection|LnkAclGroupsFonctionnalites[] Collection to store aggregation of LnkAclGroupsFonctionnalites objects.
     */
    protected $collLnkAclGroupsFonctionnalitess;
    protected $collLnkAclGroupsFonctionnalitessPartial;

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
    protected $aclActionssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkAclGroupsFonctionnalitessScheduledForDeletion = null;

    /**
     * Get the [fonc_id] column value.
     *
     * @return int
     */
    public function getFoncId()
    {

        return $this->fonc_id;
    }

    /**
     * Get the [int_cont_id] column value.
     *
     * @return int
     */
    public function getIntContId()
    {

        return $this->int_cont_id;
    }

    /**
     * Get the [fonc_name] column value.
     *
     * @return string
     */
    public function getFoncName()
    {

        return $this->fonc_name;
    }

    /**
     * Set the value of [fonc_id] column.
     *
     * @param  int $v new value
     * @return AclFonctionnalites The current object (for fluent API support)
     */
    public function setFoncId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fonc_id !== $v) {
                    $this->fonc_id = $v;
                    $this->modifiedColumns[] = AclFonctionnalitesPeer::FONC_ID;
                }


        return $this;
    } // setFoncId()

    /**
     * Set the value of [int_cont_id] column.
     *
     * @param  int $v new value
     * @return AclFonctionnalites The current object (for fluent API support)
     */
    public function setIntContId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->int_cont_id !== $v) {
                    $this->int_cont_id = $v;
                    $this->modifiedColumns[] = AclFonctionnalitesPeer::INT_CONT_ID;
                }

        if ($this->aAclInterfacesControllers !== null && $this->aAclInterfacesControllers->getIntContId() !== $v) {
            $this->aAclInterfacesControllers = null;
        }


        return $this;
    } // setIntContId()

    /**
     * Set the value of [fonc_name] column.
     *
     * @param  string $v new value
     * @return AclFonctionnalites The current object (for fluent API support)
     */
    public function setFoncName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fonc_name !== $v) {
            $this->fonc_name = $v;
            $this->modifiedColumns[] = AclFonctionnalitesPeer::FONC_NAME;
        }


        return $this;
    } // setFoncName()

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

            $this->fonc_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->int_cont_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fonc_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = AclFonctionnalitesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating AclFonctionnalites object", $e);
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

        if ($this->aAclInterfacesControllers !== null && $this->int_cont_id !== $this->aAclInterfacesControllers->getIntContId()) {
            $this->aAclInterfacesControllers = null;
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
            $con = Propel::getConnection(AclFonctionnalitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AclFonctionnalitesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAclInterfacesControllers = null;
            $this->collAclActionss = null;

            $this->collLnkAclGroupsFonctionnalitess = null;

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
            $con = Propel::getConnection(AclFonctionnalitesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AclFonctionnalitesQuery::create()
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
            $con = Propel::getConnection(AclFonctionnalitesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AclFonctionnalitesPeer::addInstanceToPool($this);
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

            if ($this->aAclInterfacesControllers !== null) {
                if ($this->aAclInterfacesControllers->isModified() || $this->aAclInterfacesControllers->isNew()) {
                    $affectedRows += $this->aAclInterfacesControllers->save($con);
                }
                $this->setAclInterfacesControllers($this->aAclInterfacesControllers);
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

            if ($this->aclActionssScheduledForDeletion !== null) {
                if (!$this->aclActionssScheduledForDeletion->isEmpty()) {
                    foreach ($this->aclActionssScheduledForDeletion as $aclActions) {
                        // need to save related object because we set the relation to null
                        $aclActions->save($con);
                    }
                    $this->aclActionssScheduledForDeletion = null;
                }
            }

            if ($this->collAclActionss !== null) {
                foreach ($this->collAclActionss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkAclGroupsFonctionnalitessScheduledForDeletion !== null) {
                if (!$this->lnkAclGroupsFonctionnalitessScheduledForDeletion->isEmpty()) {
                    LnkAclGroupsFonctionnalitesQuery::create()
                        ->filterByPrimaryKeys($this->lnkAclGroupsFonctionnalitessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkAclGroupsFonctionnalitessScheduledForDeletion = null;
                }
            }

            if ($this->collLnkAclGroupsFonctionnalitess !== null) {
                foreach ($this->collLnkAclGroupsFonctionnalitess as $referrerFK) {
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

        $this->modifiedColumns[] = AclFonctionnalitesPeer::FONC_ID;
        if (null !== $this->fonc_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AclFonctionnalitesPeer::FONC_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AclFonctionnalitesPeer::FONC_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fonc_id`';
        }
        if ($this->isColumnModified(AclFonctionnalitesPeer::INT_CONT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`int_cont_id`';
        }
        if ($this->isColumnModified(AclFonctionnalitesPeer::FONC_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`fonc_name`';
        }

        $sql = sprintf(
            'INSERT INTO `acl_fonctionnalites` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`fonc_id`':
                        $stmt->bindValue($identifier, $this->fonc_id, PDO::PARAM_INT);
                        break;
                    case '`int_cont_id`':
                        $stmt->bindValue($identifier, $this->int_cont_id, PDO::PARAM_INT);
                        break;
                    case '`fonc_name`':
                        $stmt->bindValue($identifier, $this->fonc_name, PDO::PARAM_STR);
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
        $this->setFoncId($pk);

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

            if ($this->aAclInterfacesControllers !== null) {
                if (!$this->aAclInterfacesControllers->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAclInterfacesControllers->getValidationFailures());
                }
            }


            if (($retval = AclFonctionnalitesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAclActionss !== null) {
                    foreach ($this->collAclActionss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkAclGroupsFonctionnalitess !== null) {
                    foreach ($this->collLnkAclGroupsFonctionnalitess as $referrerFK) {
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
        $pos = AclFonctionnalitesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFoncId();
                break;
            case 1:
                return $this->getIntContId();
                break;
            case 2:
                return $this->getFoncName();
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
        if (isset($alreadyDumpedObjects['AclFonctionnalites'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['AclFonctionnalites'][$this->getPrimaryKey()] = true;
        $keys = AclFonctionnalitesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFoncId(),
            $keys[1] => $this->getIntContId(),
            $keys[2] => $this->getFoncName(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAclInterfacesControllers) {
                $result['AclInterfacesControllers'] = $this->aAclInterfacesControllers->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAclActionss) {
                $result['AclActionss'] = $this->collAclActionss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkAclGroupsFonctionnalitess) {
                $result['LnkAclGroupsFonctionnalitess'] = $this->collLnkAclGroupsFonctionnalitess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = AclFonctionnalitesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFoncId($value);
                break;
            case 1:
                $this->setIntContId($value);
                break;
            case 2:
                $this->setFoncName($value);
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
        $keys = AclFonctionnalitesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setFoncId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIntContId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFoncName($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AclFonctionnalitesPeer::DATABASE_NAME);

        if ($this->isColumnModified(AclFonctionnalitesPeer::FONC_ID)) $criteria->add(AclFonctionnalitesPeer::FONC_ID, $this->fonc_id);
        if ($this->isColumnModified(AclFonctionnalitesPeer::INT_CONT_ID)) $criteria->add(AclFonctionnalitesPeer::INT_CONT_ID, $this->int_cont_id);
        if ($this->isColumnModified(AclFonctionnalitesPeer::FONC_NAME)) $criteria->add(AclFonctionnalitesPeer::FONC_NAME, $this->fonc_name);

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
        $criteria = new Criteria(AclFonctionnalitesPeer::DATABASE_NAME);
        $criteria->add(AclFonctionnalitesPeer::FONC_ID, $this->fonc_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getFoncId();
    }

    /**
     * Generic method to set the primary key (fonc_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setFoncId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getFoncId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of AclFonctionnalites (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntContId($this->getIntContId());
        $copyObj->setFoncName($this->getFoncName());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAclActionss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAclActions($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkAclGroupsFonctionnalitess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkAclGroupsFonctionnalites($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setFoncId(NULL); // this is a auto-increment column, so set to default value
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
     * @return AclFonctionnalites Clone of current object.
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
     * @return AclFonctionnalitesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AclFonctionnalitesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a AclInterfacesControllers object.
     *
     * @param                  AclInterfacesControllers $v
     * @return AclFonctionnalites The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAclInterfacesControllers(AclInterfacesControllers $v = null)
    {
        if ($v === null) {
            $this->setIntContId(NULL);
        } else {
            $this->setIntContId($v->getIntContId());
        }

        $this->aAclInterfacesControllers = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the AclInterfacesControllers object, it will not be re-added.
        if ($v !== null) {
            $v->addAclFonctionnalites($this);
        }


        return $this;
    }


    /**
     * Get the associated AclInterfacesControllers object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return AclInterfacesControllers The associated AclInterfacesControllers object.
     * @throws PropelException
     */
    public function getAclInterfacesControllers(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAclInterfacesControllers === null && ($this->int_cont_id !== null) && $doQuery) {
            $this->aAclInterfacesControllers = AclInterfacesControllersQuery::create()->findPk($this->int_cont_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAclInterfacesControllers->addAclFonctionnalitess($this);
             */
        }

        return $this->aAclInterfacesControllers;
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
        if ('AclActions' == $relationName) {
            $this->initAclActionss();
        }
        if ('LnkAclGroupsFonctionnalites' == $relationName) {
            $this->initLnkAclGroupsFonctionnalitess();
        }
    }

    /**
     * Clears out the collAclActionss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return AclFonctionnalites The current object (for fluent API support)
     * @see        addAclActionss()
     */
    public function clearAclActionss()
    {
        $this->collAclActionss = null; // important to set this to null since that means it is uninitialized
        $this->collAclActionssPartial = null;

        return $this;
    }

    /**
     * reset is the collAclActionss collection loaded partially
     *
     * @return void
     */
    public function resetPartialAclActionss($v = true)
    {
        $this->collAclActionssPartial = $v;
    }

    /**
     * Initializes the collAclActionss collection.
     *
     * By default this just sets the collAclActionss collection to an empty array (like clearcollAclActionss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAclActionss($overrideExisting = true)
    {
        if (null !== $this->collAclActionss && !$overrideExisting) {
            return;
        }
        $this->collAclActionss = new PropelObjectCollection();
        $this->collAclActionss->setModel('AclActions');
    }

    /**
     * Gets an array of AclActions objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this AclFonctionnalites is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|AclActions[] List of AclActions objects
     * @throws PropelException
     */
    public function getAclActionss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAclActionssPartial && !$this->isNew();
        if (null === $this->collAclActionss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAclActionss) {
                // return empty collection
                $this->initAclActionss();
            } else {
                $collAclActionss = AclActionsQuery::create(null, $criteria)
                    ->filterByAclFonctionnalites($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAclActionssPartial && count($collAclActionss)) {
                      $this->initAclActionss(false);

                      foreach ($collAclActionss as $obj) {
                        if (false == $this->collAclActionss->contains($obj)) {
                          $this->collAclActionss->append($obj);
                        }
                      }

                      $this->collAclActionssPartial = true;
                    }

                    $collAclActionss->getInternalIterator()->rewind();

                    return $collAclActionss;
                }

                if ($partial && $this->collAclActionss) {
                    foreach ($this->collAclActionss as $obj) {
                        if ($obj->isNew()) {
                            $collAclActionss[] = $obj;
                        }
                    }
                }

                $this->collAclActionss = $collAclActionss;
                $this->collAclActionssPartial = false;
            }
        }

        return $this->collAclActionss;
    }

    /**
     * Sets a collection of AclActions objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $aclActionss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return AclFonctionnalites The current object (for fluent API support)
     */
    public function setAclActionss(PropelCollection $aclActionss, PropelPDO $con = null)
    {
        $aclActionssToDelete = $this->getAclActionss(new Criteria(), $con)->diff($aclActionss);


        $this->aclActionssScheduledForDeletion = $aclActionssToDelete;

        foreach ($aclActionssToDelete as $aclActionsRemoved) {
            $aclActionsRemoved->setAclFonctionnalites(null);
        }

        $this->collAclActionss = null;
        foreach ($aclActionss as $aclActions) {
            $this->addAclActions($aclActions);
        }

        $this->collAclActionss = $aclActionss;
        $this->collAclActionssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related AclActions objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related AclActions objects.
     * @throws PropelException
     */
    public function countAclActionss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAclActionssPartial && !$this->isNew();
        if (null === $this->collAclActionss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAclActionss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAclActionss());
            }
            $query = AclActionsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAclFonctionnalites($this)
                ->count($con);
        }

        return count($this->collAclActionss);
    }

    /**
     * Method called to associate a AclActions object to this object
     * through the AclActions foreign key attribute.
     *
     * @param    AclActions $l AclActions
     * @return AclFonctionnalites The current object (for fluent API support)
     */
    public function addAclActions(AclActions $l)
    {
        if ($this->collAclActionss === null) {
            $this->initAclActionss();
            $this->collAclActionssPartial = true;
        }

        if (!in_array($l, $this->collAclActionss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAclActions($l);

            if ($this->aclActionssScheduledForDeletion and $this->aclActionssScheduledForDeletion->contains($l)) {
                $this->aclActionssScheduledForDeletion->remove($this->aclActionssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	AclActions $aclActions The aclActions object to add.
     */
    protected function doAddAclActions($aclActions)
    {
        $this->collAclActionss[]= $aclActions;
        $aclActions->setAclFonctionnalites($this);
    }

    /**
     * @param	AclActions $aclActions The aclActions object to remove.
     * @return AclFonctionnalites The current object (for fluent API support)
     */
    public function removeAclActions($aclActions)
    {
        if ($this->getAclActionss()->contains($aclActions)) {
            $this->collAclActionss->remove($this->collAclActionss->search($aclActions));
            if (null === $this->aclActionssScheduledForDeletion) {
                $this->aclActionssScheduledForDeletion = clone $this->collAclActionss;
                $this->aclActionssScheduledForDeletion->clear();
            }
            $this->aclActionssScheduledForDeletion[]= $aclActions;
            $aclActions->setAclFonctionnalites(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AclFonctionnalites is new, it will return
     * an empty collection; or if this AclFonctionnalites has previously
     * been saved, it will retrieve related AclActionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AclFonctionnalites.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|AclActions[] List of AclActions objects
     */
    public function getAclActionssJoinAclInterfacesControllers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AclActionsQuery::create(null, $criteria);
        $query->joinWith('AclInterfacesControllers', $join_behavior);

        return $this->getAclActionss($query, $con);
    }

    /**
     * Clears out the collLnkAclGroupsFonctionnalitess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return AclFonctionnalites The current object (for fluent API support)
     * @see        addLnkAclGroupsFonctionnalitess()
     */
    public function clearLnkAclGroupsFonctionnalitess()
    {
        $this->collLnkAclGroupsFonctionnalitess = null; // important to set this to null since that means it is uninitialized
        $this->collLnkAclGroupsFonctionnalitessPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkAclGroupsFonctionnalitess collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkAclGroupsFonctionnalitess($v = true)
    {
        $this->collLnkAclGroupsFonctionnalitessPartial = $v;
    }

    /**
     * Initializes the collLnkAclGroupsFonctionnalitess collection.
     *
     * By default this just sets the collLnkAclGroupsFonctionnalitess collection to an empty array (like clearcollLnkAclGroupsFonctionnalitess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkAclGroupsFonctionnalitess($overrideExisting = true)
    {
        if (null !== $this->collLnkAclGroupsFonctionnalitess && !$overrideExisting) {
            return;
        }
        $this->collLnkAclGroupsFonctionnalitess = new PropelObjectCollection();
        $this->collLnkAclGroupsFonctionnalitess->setModel('LnkAclGroupsFonctionnalites');
    }

    /**
     * Gets an array of LnkAclGroupsFonctionnalites objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this AclFonctionnalites is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkAclGroupsFonctionnalites[] List of LnkAclGroupsFonctionnalites objects
     * @throws PropelException
     */
    public function getLnkAclGroupsFonctionnalitess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkAclGroupsFonctionnalitessPartial && !$this->isNew();
        if (null === $this->collLnkAclGroupsFonctionnalitess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkAclGroupsFonctionnalitess) {
                // return empty collection
                $this->initLnkAclGroupsFonctionnalitess();
            } else {
                $collLnkAclGroupsFonctionnalitess = LnkAclGroupsFonctionnalitesQuery::create(null, $criteria)
                    ->filterByAclFonctionnalites($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkAclGroupsFonctionnalitessPartial && count($collLnkAclGroupsFonctionnalitess)) {
                      $this->initLnkAclGroupsFonctionnalitess(false);

                      foreach ($collLnkAclGroupsFonctionnalitess as $obj) {
                        if (false == $this->collLnkAclGroupsFonctionnalitess->contains($obj)) {
                          $this->collLnkAclGroupsFonctionnalitess->append($obj);
                        }
                      }

                      $this->collLnkAclGroupsFonctionnalitessPartial = true;
                    }

                    $collLnkAclGroupsFonctionnalitess->getInternalIterator()->rewind();

                    return $collLnkAclGroupsFonctionnalitess;
                }

                if ($partial && $this->collLnkAclGroupsFonctionnalitess) {
                    foreach ($this->collLnkAclGroupsFonctionnalitess as $obj) {
                        if ($obj->isNew()) {
                            $collLnkAclGroupsFonctionnalitess[] = $obj;
                        }
                    }
                }

                $this->collLnkAclGroupsFonctionnalitess = $collLnkAclGroupsFonctionnalitess;
                $this->collLnkAclGroupsFonctionnalitessPartial = false;
            }
        }

        return $this->collLnkAclGroupsFonctionnalitess;
    }

    /**
     * Sets a collection of LnkAclGroupsFonctionnalites objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkAclGroupsFonctionnalitess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return AclFonctionnalites The current object (for fluent API support)
     */
    public function setLnkAclGroupsFonctionnalitess(PropelCollection $lnkAclGroupsFonctionnalitess, PropelPDO $con = null)
    {
        $lnkAclGroupsFonctionnalitessToDelete = $this->getLnkAclGroupsFonctionnalitess(new Criteria(), $con)->diff($lnkAclGroupsFonctionnalitess);


        $this->lnkAclGroupsFonctionnalitessScheduledForDeletion = $lnkAclGroupsFonctionnalitessToDelete;

        foreach ($lnkAclGroupsFonctionnalitessToDelete as $lnkAclGroupsFonctionnalitesRemoved) {
            $lnkAclGroupsFonctionnalitesRemoved->setAclFonctionnalites(null);
        }

        $this->collLnkAclGroupsFonctionnalitess = null;
        foreach ($lnkAclGroupsFonctionnalitess as $lnkAclGroupsFonctionnalites) {
            $this->addLnkAclGroupsFonctionnalites($lnkAclGroupsFonctionnalites);
        }

        $this->collLnkAclGroupsFonctionnalitess = $lnkAclGroupsFonctionnalitess;
        $this->collLnkAclGroupsFonctionnalitessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkAclGroupsFonctionnalites objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkAclGroupsFonctionnalites objects.
     * @throws PropelException
     */
    public function countLnkAclGroupsFonctionnalitess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkAclGroupsFonctionnalitessPartial && !$this->isNew();
        if (null === $this->collLnkAclGroupsFonctionnalitess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkAclGroupsFonctionnalitess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkAclGroupsFonctionnalitess());
            }
            $query = LnkAclGroupsFonctionnalitesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAclFonctionnalites($this)
                ->count($con);
        }

        return count($this->collLnkAclGroupsFonctionnalitess);
    }

    /**
     * Method called to associate a LnkAclGroupsFonctionnalites object to this object
     * through the LnkAclGroupsFonctionnalites foreign key attribute.
     *
     * @param    LnkAclGroupsFonctionnalites $l LnkAclGroupsFonctionnalites
     * @return AclFonctionnalites The current object (for fluent API support)
     */
    public function addLnkAclGroupsFonctionnalites(LnkAclGroupsFonctionnalites $l)
    {
        if ($this->collLnkAclGroupsFonctionnalitess === null) {
            $this->initLnkAclGroupsFonctionnalitess();
            $this->collLnkAclGroupsFonctionnalitessPartial = true;
        }

        if (!in_array($l, $this->collLnkAclGroupsFonctionnalitess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkAclGroupsFonctionnalites($l);

            if ($this->lnkAclGroupsFonctionnalitessScheduledForDeletion and $this->lnkAclGroupsFonctionnalitessScheduledForDeletion->contains($l)) {
                $this->lnkAclGroupsFonctionnalitessScheduledForDeletion->remove($this->lnkAclGroupsFonctionnalitessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkAclGroupsFonctionnalites $lnkAclGroupsFonctionnalites The lnkAclGroupsFonctionnalites object to add.
     */
    protected function doAddLnkAclGroupsFonctionnalites($lnkAclGroupsFonctionnalites)
    {
        $this->collLnkAclGroupsFonctionnalitess[]= $lnkAclGroupsFonctionnalites;
        $lnkAclGroupsFonctionnalites->setAclFonctionnalites($this);
    }

    /**
     * @param	LnkAclGroupsFonctionnalites $lnkAclGroupsFonctionnalites The lnkAclGroupsFonctionnalites object to remove.
     * @return AclFonctionnalites The current object (for fluent API support)
     */
    public function removeLnkAclGroupsFonctionnalites($lnkAclGroupsFonctionnalites)
    {
        if ($this->getLnkAclGroupsFonctionnalitess()->contains($lnkAclGroupsFonctionnalites)) {
            $this->collLnkAclGroupsFonctionnalitess->remove($this->collLnkAclGroupsFonctionnalitess->search($lnkAclGroupsFonctionnalites));
            if (null === $this->lnkAclGroupsFonctionnalitessScheduledForDeletion) {
                $this->lnkAclGroupsFonctionnalitessScheduledForDeletion = clone $this->collLnkAclGroupsFonctionnalitess;
                $this->lnkAclGroupsFonctionnalitessScheduledForDeletion->clear();
            }
            $this->lnkAclGroupsFonctionnalitessScheduledForDeletion[]= clone $lnkAclGroupsFonctionnalites;
            $lnkAclGroupsFonctionnalites->setAclFonctionnalites(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AclFonctionnalites is new, it will return
     * an empty collection; or if this AclFonctionnalites has previously
     * been saved, it will retrieve related LnkAclGroupsFonctionnalitess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AclFonctionnalites.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkAclGroupsFonctionnalites[] List of LnkAclGroupsFonctionnalites objects
     */
    public function getLnkAclGroupsFonctionnalitessJoinAclGroups($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkAclGroupsFonctionnalitesQuery::create(null, $criteria);
        $query->joinWith('AclGroups', $join_behavior);

        return $this->getLnkAclGroupsFonctionnalitess($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->fonc_id = null;
        $this->int_cont_id = null;
        $this->fonc_name = null;
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
            if ($this->collAclActionss) {
                foreach ($this->collAclActionss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkAclGroupsFonctionnalitess) {
                foreach ($this->collLnkAclGroupsFonctionnalitess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aAclInterfacesControllers instanceof Persistent) {
              $this->aAclInterfacesControllers->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAclActionss instanceof PropelCollection) {
            $this->collAclActionss->clearIterator();
        }
        $this->collAclActionss = null;
        if ($this->collLnkAclGroupsFonctionnalitess instanceof PropelCollection) {
            $this->collLnkAclGroupsFonctionnalitess->clearIterator();
        }
        $this->collLnkAclGroupsFonctionnalitess = null;
        $this->aAclInterfacesControllers = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AclFonctionnalitesPeer::DEFAULT_STRING_FORMAT);
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
                return BaseAclFonctionnalitesPeer::getConnection();
            }
}
