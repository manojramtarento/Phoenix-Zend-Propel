<?php


/**
 * Base class that represents a row from the 'acl_interfaces_controllers' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseAclInterfacesControllers extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AclInterfacesControllersPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AclInterfacesControllersPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the int_cont_id field.
     * @var        int
     */
    protected $int_cont_id;

    /**
     * The value for the module_id field.
     * @var        int
     */
    protected $module_id;

    /**
     * The value for the interface_name field.
     * @var        string
     */
    protected $interface_name;

    /**
     * The value for the controller_name field.
     * @var        string
     */
    protected $controller_name;

    /**
     * @var        AclModules
     */
    protected $aAclModules;

    /**
     * @var        PropelObjectCollection|AclActions[] Collection to store aggregation of AclActions objects.
     */
    protected $collAclActionss;
    protected $collAclActionssPartial;

    /**
     * @var        PropelObjectCollection|AclFonctionnalites[] Collection to store aggregation of AclFonctionnalites objects.
     */
    protected $collAclFonctionnalitess;
    protected $collAclFonctionnalitessPartial;

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
    protected $aclFonctionnalitessScheduledForDeletion = null;

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
     * Get the [module_id] column value.
     *
     * @return int
     */
    public function getModuleId()
    {

        return $this->module_id;
    }

    /**
     * Get the [interface_name] column value.
     *
     * @return string
     */
    public function getInterfaceName()
    {

        return $this->interface_name;
    }

    /**
     * Get the [controller_name] column value.
     *
     * @return string
     */
    public function getControllerName()
    {

        return $this->controller_name;
    }

    /**
     * Set the value of [int_cont_id] column.
     *
     * @param  int $v new value
     * @return AclInterfacesControllers The current object (for fluent API support)
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
                    $this->modifiedColumns[] = AclInterfacesControllersPeer::INT_CONT_ID;
                }


        return $this;
    } // setIntContId()

    /**
     * Set the value of [module_id] column.
     *
     * @param  int $v new value
     * @return AclInterfacesControllers The current object (for fluent API support)
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
                    $this->modifiedColumns[] = AclInterfacesControllersPeer::MODULE_ID;
                }

        if ($this->aAclModules !== null && $this->aAclModules->getModuleId() !== $v) {
            $this->aAclModules = null;
        }


        return $this;
    } // setModuleId()

    /**
     * Set the value of [interface_name] column.
     *
     * @param  string $v new value
     * @return AclInterfacesControllers The current object (for fluent API support)
     */
    public function setInterfaceName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->interface_name !== $v) {
            $this->interface_name = $v;
            $this->modifiedColumns[] = AclInterfacesControllersPeer::INTERFACE_NAME;
        }


        return $this;
    } // setInterfaceName()

    /**
     * Set the value of [controller_name] column.
     *
     * @param  string $v new value
     * @return AclInterfacesControllers The current object (for fluent API support)
     */
    public function setControllerName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->controller_name !== $v) {
            $this->controller_name = $v;
            $this->modifiedColumns[] = AclInterfacesControllersPeer::CONTROLLER_NAME;
        }


        return $this;
    } // setControllerName()

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

            $this->int_cont_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->module_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->interface_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->controller_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = AclInterfacesControllersPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating AclInterfacesControllers object", $e);
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

        if ($this->aAclModules !== null && $this->module_id !== $this->aAclModules->getModuleId()) {
            $this->aAclModules = null;
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
            $con = Propel::getConnection(AclInterfacesControllersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AclInterfacesControllersPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAclModules = null;
            $this->collAclActionss = null;

            $this->collAclFonctionnalitess = null;

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
            $con = Propel::getConnection(AclInterfacesControllersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AclInterfacesControllersQuery::create()
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
            $con = Propel::getConnection(AclInterfacesControllersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AclInterfacesControllersPeer::addInstanceToPool($this);
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

            if ($this->aAclModules !== null) {
                if ($this->aAclModules->isModified() || $this->aAclModules->isNew()) {
                    $affectedRows += $this->aAclModules->save($con);
                }
                $this->setAclModules($this->aAclModules);
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

            if ($this->aclFonctionnalitessScheduledForDeletion !== null) {
                if (!$this->aclFonctionnalitessScheduledForDeletion->isEmpty()) {
                    foreach ($this->aclFonctionnalitessScheduledForDeletion as $aclFonctionnalites) {
                        // need to save related object because we set the relation to null
                        $aclFonctionnalites->save($con);
                    }
                    $this->aclFonctionnalitessScheduledForDeletion = null;
                }
            }

            if ($this->collAclFonctionnalitess !== null) {
                foreach ($this->collAclFonctionnalitess as $referrerFK) {
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

        $this->modifiedColumns[] = AclInterfacesControllersPeer::INT_CONT_ID;
        if (null !== $this->int_cont_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AclInterfacesControllersPeer::INT_CONT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AclInterfacesControllersPeer::INT_CONT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`int_cont_id`';
        }
        if ($this->isColumnModified(AclInterfacesControllersPeer::MODULE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`module_id`';
        }
        if ($this->isColumnModified(AclInterfacesControllersPeer::INTERFACE_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`interface_name`';
        }
        if ($this->isColumnModified(AclInterfacesControllersPeer::CONTROLLER_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`controller_name`';
        }

        $sql = sprintf(
            'INSERT INTO `acl_interfaces_controllers` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`int_cont_id`':
                        $stmt->bindValue($identifier, $this->int_cont_id, PDO::PARAM_INT);
                        break;
                    case '`module_id`':
                        $stmt->bindValue($identifier, $this->module_id, PDO::PARAM_INT);
                        break;
                    case '`interface_name`':
                        $stmt->bindValue($identifier, $this->interface_name, PDO::PARAM_STR);
                        break;
                    case '`controller_name`':
                        $stmt->bindValue($identifier, $this->controller_name, PDO::PARAM_STR);
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
        $this->setIntContId($pk);

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

            if ($this->aAclModules !== null) {
                if (!$this->aAclModules->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAclModules->getValidationFailures());
                }
            }


            if (($retval = AclInterfacesControllersPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAclActionss !== null) {
                    foreach ($this->collAclActionss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collAclFonctionnalitess !== null) {
                    foreach ($this->collAclFonctionnalitess as $referrerFK) {
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
        $pos = AclInterfacesControllersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIntContId();
                break;
            case 1:
                return $this->getModuleId();
                break;
            case 2:
                return $this->getInterfaceName();
                break;
            case 3:
                return $this->getControllerName();
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
        if (isset($alreadyDumpedObjects['AclInterfacesControllers'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['AclInterfacesControllers'][$this->getPrimaryKey()] = true;
        $keys = AclInterfacesControllersPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIntContId(),
            $keys[1] => $this->getModuleId(),
            $keys[2] => $this->getInterfaceName(),
            $keys[3] => $this->getControllerName(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAclModules) {
                $result['AclModules'] = $this->aAclModules->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAclActionss) {
                $result['AclActionss'] = $this->collAclActionss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collAclFonctionnalitess) {
                $result['AclFonctionnalitess'] = $this->collAclFonctionnalitess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = AclInterfacesControllersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIntContId($value);
                break;
            case 1:
                $this->setModuleId($value);
                break;
            case 2:
                $this->setInterfaceName($value);
                break;
            case 3:
                $this->setControllerName($value);
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
        $keys = AclInterfacesControllersPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIntContId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setModuleId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setInterfaceName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setControllerName($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AclInterfacesControllersPeer::DATABASE_NAME);

        if ($this->isColumnModified(AclInterfacesControllersPeer::INT_CONT_ID)) $criteria->add(AclInterfacesControllersPeer::INT_CONT_ID, $this->int_cont_id);
        if ($this->isColumnModified(AclInterfacesControllersPeer::MODULE_ID)) $criteria->add(AclInterfacesControllersPeer::MODULE_ID, $this->module_id);
        if ($this->isColumnModified(AclInterfacesControllersPeer::INTERFACE_NAME)) $criteria->add(AclInterfacesControllersPeer::INTERFACE_NAME, $this->interface_name);
        if ($this->isColumnModified(AclInterfacesControllersPeer::CONTROLLER_NAME)) $criteria->add(AclInterfacesControllersPeer::CONTROLLER_NAME, $this->controller_name);

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
        $criteria = new Criteria(AclInterfacesControllersPeer::DATABASE_NAME);
        $criteria->add(AclInterfacesControllersPeer::INT_CONT_ID, $this->int_cont_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIntContId();
    }

    /**
     * Generic method to set the primary key (int_cont_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIntContId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIntContId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of AclInterfacesControllers (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setModuleId($this->getModuleId());
        $copyObj->setInterfaceName($this->getInterfaceName());
        $copyObj->setControllerName($this->getControllerName());

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

            foreach ($this->getAclFonctionnalitess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAclFonctionnalites($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIntContId(NULL); // this is a auto-increment column, so set to default value
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
     * @return AclInterfacesControllers Clone of current object.
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
     * @return AclInterfacesControllersPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AclInterfacesControllersPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a AclModules object.
     *
     * @param                  AclModules $v
     * @return AclInterfacesControllers The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAclModules(AclModules $v = null)
    {
        if ($v === null) {
            $this->setModuleId(NULL);
        } else {
            $this->setModuleId($v->getModuleId());
        }

        $this->aAclModules = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the AclModules object, it will not be re-added.
        if ($v !== null) {
            $v->addAclInterfacesControllers($this);
        }


        return $this;
    }


    /**
     * Get the associated AclModules object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return AclModules The associated AclModules object.
     * @throws PropelException
     */
    public function getAclModules(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAclModules === null && ($this->module_id !== null) && $doQuery) {
            $this->aAclModules = AclModulesQuery::create()->findPk($this->module_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAclModules->addAclInterfacesControllerss($this);
             */
        }

        return $this->aAclModules;
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
        if ('AclFonctionnalites' == $relationName) {
            $this->initAclFonctionnalitess();
        }
    }

    /**
     * Clears out the collAclActionss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return AclInterfacesControllers The current object (for fluent API support)
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
     * If this AclInterfacesControllers is new, it will return
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
                    ->filterByAclInterfacesControllers($this)
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
     * @return AclInterfacesControllers The current object (for fluent API support)
     */
    public function setAclActionss(PropelCollection $aclActionss, PropelPDO $con = null)
    {
        $aclActionssToDelete = $this->getAclActionss(new Criteria(), $con)->diff($aclActionss);


        $this->aclActionssScheduledForDeletion = $aclActionssToDelete;

        foreach ($aclActionssToDelete as $aclActionsRemoved) {
            $aclActionsRemoved->setAclInterfacesControllers(null);
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
                ->filterByAclInterfacesControllers($this)
                ->count($con);
        }

        return count($this->collAclActionss);
    }

    /**
     * Method called to associate a AclActions object to this object
     * through the AclActions foreign key attribute.
     *
     * @param    AclActions $l AclActions
     * @return AclInterfacesControllers The current object (for fluent API support)
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
        $aclActions->setAclInterfacesControllers($this);
    }

    /**
     * @param	AclActions $aclActions The aclActions object to remove.
     * @return AclInterfacesControllers The current object (for fluent API support)
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
            $aclActions->setAclInterfacesControllers(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AclInterfacesControllers is new, it will return
     * an empty collection; or if this AclInterfacesControllers has previously
     * been saved, it will retrieve related AclActionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AclInterfacesControllers.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|AclActions[] List of AclActions objects
     */
    public function getAclActionssJoinAclFonctionnalites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AclActionsQuery::create(null, $criteria);
        $query->joinWith('AclFonctionnalites', $join_behavior);

        return $this->getAclActionss($query, $con);
    }

    /**
     * Clears out the collAclFonctionnalitess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return AclInterfacesControllers The current object (for fluent API support)
     * @see        addAclFonctionnalitess()
     */
    public function clearAclFonctionnalitess()
    {
        $this->collAclFonctionnalitess = null; // important to set this to null since that means it is uninitialized
        $this->collAclFonctionnalitessPartial = null;

        return $this;
    }

    /**
     * reset is the collAclFonctionnalitess collection loaded partially
     *
     * @return void
     */
    public function resetPartialAclFonctionnalitess($v = true)
    {
        $this->collAclFonctionnalitessPartial = $v;
    }

    /**
     * Initializes the collAclFonctionnalitess collection.
     *
     * By default this just sets the collAclFonctionnalitess collection to an empty array (like clearcollAclFonctionnalitess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAclFonctionnalitess($overrideExisting = true)
    {
        if (null !== $this->collAclFonctionnalitess && !$overrideExisting) {
            return;
        }
        $this->collAclFonctionnalitess = new PropelObjectCollection();
        $this->collAclFonctionnalitess->setModel('AclFonctionnalites');
    }

    /**
     * Gets an array of AclFonctionnalites objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this AclInterfacesControllers is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|AclFonctionnalites[] List of AclFonctionnalites objects
     * @throws PropelException
     */
    public function getAclFonctionnalitess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAclFonctionnalitessPartial && !$this->isNew();
        if (null === $this->collAclFonctionnalitess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAclFonctionnalitess) {
                // return empty collection
                $this->initAclFonctionnalitess();
            } else {
                $collAclFonctionnalitess = AclFonctionnalitesQuery::create(null, $criteria)
                    ->filterByAclInterfacesControllers($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAclFonctionnalitessPartial && count($collAclFonctionnalitess)) {
                      $this->initAclFonctionnalitess(false);

                      foreach ($collAclFonctionnalitess as $obj) {
                        if (false == $this->collAclFonctionnalitess->contains($obj)) {
                          $this->collAclFonctionnalitess->append($obj);
                        }
                      }

                      $this->collAclFonctionnalitessPartial = true;
                    }

                    $collAclFonctionnalitess->getInternalIterator()->rewind();

                    return $collAclFonctionnalitess;
                }

                if ($partial && $this->collAclFonctionnalitess) {
                    foreach ($this->collAclFonctionnalitess as $obj) {
                        if ($obj->isNew()) {
                            $collAclFonctionnalitess[] = $obj;
                        }
                    }
                }

                $this->collAclFonctionnalitess = $collAclFonctionnalitess;
                $this->collAclFonctionnalitessPartial = false;
            }
        }

        return $this->collAclFonctionnalitess;
    }

    /**
     * Sets a collection of AclFonctionnalites objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $aclFonctionnalitess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return AclInterfacesControllers The current object (for fluent API support)
     */
    public function setAclFonctionnalitess(PropelCollection $aclFonctionnalitess, PropelPDO $con = null)
    {
        $aclFonctionnalitessToDelete = $this->getAclFonctionnalitess(new Criteria(), $con)->diff($aclFonctionnalitess);


        $this->aclFonctionnalitessScheduledForDeletion = $aclFonctionnalitessToDelete;

        foreach ($aclFonctionnalitessToDelete as $aclFonctionnalitesRemoved) {
            $aclFonctionnalitesRemoved->setAclInterfacesControllers(null);
        }

        $this->collAclFonctionnalitess = null;
        foreach ($aclFonctionnalitess as $aclFonctionnalites) {
            $this->addAclFonctionnalites($aclFonctionnalites);
        }

        $this->collAclFonctionnalitess = $aclFonctionnalitess;
        $this->collAclFonctionnalitessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related AclFonctionnalites objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related AclFonctionnalites objects.
     * @throws PropelException
     */
    public function countAclFonctionnalitess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAclFonctionnalitessPartial && !$this->isNew();
        if (null === $this->collAclFonctionnalitess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAclFonctionnalitess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAclFonctionnalitess());
            }
            $query = AclFonctionnalitesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAclInterfacesControllers($this)
                ->count($con);
        }

        return count($this->collAclFonctionnalitess);
    }

    /**
     * Method called to associate a AclFonctionnalites object to this object
     * through the AclFonctionnalites foreign key attribute.
     *
     * @param    AclFonctionnalites $l AclFonctionnalites
     * @return AclInterfacesControllers The current object (for fluent API support)
     */
    public function addAclFonctionnalites(AclFonctionnalites $l)
    {
        if ($this->collAclFonctionnalitess === null) {
            $this->initAclFonctionnalitess();
            $this->collAclFonctionnalitessPartial = true;
        }

        if (!in_array($l, $this->collAclFonctionnalitess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAclFonctionnalites($l);

            if ($this->aclFonctionnalitessScheduledForDeletion and $this->aclFonctionnalitessScheduledForDeletion->contains($l)) {
                $this->aclFonctionnalitessScheduledForDeletion->remove($this->aclFonctionnalitessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	AclFonctionnalites $aclFonctionnalites The aclFonctionnalites object to add.
     */
    protected function doAddAclFonctionnalites($aclFonctionnalites)
    {
        $this->collAclFonctionnalitess[]= $aclFonctionnalites;
        $aclFonctionnalites->setAclInterfacesControllers($this);
    }

    /**
     * @param	AclFonctionnalites $aclFonctionnalites The aclFonctionnalites object to remove.
     * @return AclInterfacesControllers The current object (for fluent API support)
     */
    public function removeAclFonctionnalites($aclFonctionnalites)
    {
        if ($this->getAclFonctionnalitess()->contains($aclFonctionnalites)) {
            $this->collAclFonctionnalitess->remove($this->collAclFonctionnalitess->search($aclFonctionnalites));
            if (null === $this->aclFonctionnalitessScheduledForDeletion) {
                $this->aclFonctionnalitessScheduledForDeletion = clone $this->collAclFonctionnalitess;
                $this->aclFonctionnalitessScheduledForDeletion->clear();
            }
            $this->aclFonctionnalitessScheduledForDeletion[]= $aclFonctionnalites;
            $aclFonctionnalites->setAclInterfacesControllers(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->int_cont_id = null;
        $this->module_id = null;
        $this->interface_name = null;
        $this->controller_name = null;
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
            if ($this->collAclFonctionnalitess) {
                foreach ($this->collAclFonctionnalitess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aAclModules instanceof Persistent) {
              $this->aAclModules->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAclActionss instanceof PropelCollection) {
            $this->collAclActionss->clearIterator();
        }
        $this->collAclActionss = null;
        if ($this->collAclFonctionnalitess instanceof PropelCollection) {
            $this->collAclFonctionnalitess->clearIterator();
        }
        $this->collAclFonctionnalitess = null;
        $this->aAclModules = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AclInterfacesControllersPeer::DEFAULT_STRING_FORMAT);
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
                return BaseAclInterfacesControllersPeer::getConnection();
            }
}
