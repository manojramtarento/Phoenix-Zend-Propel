<?php


/**
 * Base class that represents a row from the 'acl_groups' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseAclGroups extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AclGroupsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AclGroupsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the group_id field.
     * @var        int
     */
    protected $group_id;

    /**
     * The value for the group_name field.
     * @var        string
     */
    protected $group_name;

    /**
     * The value for the group_organisation_id field.
     * @var        int
     */
    protected $group_organisation_id;

    /**
     * @var        Organisations
     */
    protected $aOrganisations;

    /**
     * @var        PropelObjectCollection|LnkAclGroupsFonctionnalites[] Collection to store aggregation of LnkAclGroupsFonctionnalites objects.
     */
    protected $collLnkAclGroupsFonctionnalitess;
    protected $collLnkAclGroupsFonctionnalitessPartial;

    /**
     * @var        PropelObjectCollection|LnkUsersAclGroups[] Collection to store aggregation of LnkUsersAclGroups objects.
     */
    protected $collLnkUsersAclGroupss;
    protected $collLnkUsersAclGroupssPartial;

    /**
     * @var        PropelObjectCollection|RPrestations[] Collection to store aggregation of RPrestations objects.
     */
    protected $collRPrestationss;
    protected $collRPrestationssPartial;

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
    protected $lnkAclGroupsFonctionnalitessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkUsersAclGroupssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rPrestationssScheduledForDeletion = null;

    /**
     * Get the [group_id] column value.
     *
     * @return int
     */
    public function getGroupId()
    {

        return $this->group_id;
    }

    /**
     * Get the [group_name] column value.
     *
     * @return string
     */
    public function getGroupName()
    {

        return $this->group_name;
    }

    /**
     * Get the [group_organisation_id] column value.
     *
     * @return int
     */
    public function getGroupOrganisationId()
    {

        return $this->group_organisation_id;
    }

    /**
     * Set the value of [group_id] column.
     *
     * @param  int $v new value
     * @return AclGroups The current object (for fluent API support)
     */
    public function setGroupId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->group_id !== $v) {
                    $this->group_id = $v;
                    $this->modifiedColumns[] = AclGroupsPeer::GROUP_ID;
                }


        return $this;
    } // setGroupId()

    /**
     * Set the value of [group_name] column.
     *
     * @param  string $v new value
     * @return AclGroups The current object (for fluent API support)
     */
    public function setGroupName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->group_name !== $v) {
            $this->group_name = $v;
            $this->modifiedColumns[] = AclGroupsPeer::GROUP_NAME;
        }


        return $this;
    } // setGroupName()

    /**
     * Set the value of [group_organisation_id] column.
     *
     * @param  int $v new value
     * @return AclGroups The current object (for fluent API support)
     */
    public function setGroupOrganisationId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->group_organisation_id !== $v) {
                    $this->group_organisation_id = $v;
                    $this->modifiedColumns[] = AclGroupsPeer::GROUP_ORGANISATION_ID;
                }

        if ($this->aOrganisations !== null && $this->aOrganisations->getOrganisationId() !== $v) {
            $this->aOrganisations = null;
        }


        return $this;
    } // setGroupOrganisationId()

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

            $this->group_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->group_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->group_organisation_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = AclGroupsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating AclGroups object", $e);
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

        if ($this->aOrganisations !== null && $this->group_organisation_id !== $this->aOrganisations->getOrganisationId()) {
            $this->aOrganisations = null;
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
            $con = Propel::getConnection(AclGroupsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AclGroupsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOrganisations = null;
            $this->collLnkAclGroupsFonctionnalitess = null;

            $this->collLnkUsersAclGroupss = null;

            $this->collRPrestationss = null;

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
            $con = Propel::getConnection(AclGroupsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AclGroupsQuery::create()
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
            $con = Propel::getConnection(AclGroupsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AclGroupsPeer::addInstanceToPool($this);
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

            if ($this->aOrganisations !== null) {
                if ($this->aOrganisations->isModified() || $this->aOrganisations->isNew()) {
                    $affectedRows += $this->aOrganisations->save($con);
                }
                $this->setOrganisations($this->aOrganisations);
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

            if ($this->lnkUsersAclGroupssScheduledForDeletion !== null) {
                if (!$this->lnkUsersAclGroupssScheduledForDeletion->isEmpty()) {
                    LnkUsersAclGroupsQuery::create()
                        ->filterByPrimaryKeys($this->lnkUsersAclGroupssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkUsersAclGroupssScheduledForDeletion = null;
                }
            }

            if ($this->collLnkUsersAclGroupss !== null) {
                foreach ($this->collLnkUsersAclGroupss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rPrestationssScheduledForDeletion !== null) {
                if (!$this->rPrestationssScheduledForDeletion->isEmpty()) {
                    foreach ($this->rPrestationssScheduledForDeletion as $rPrestations) {
                        // need to save related object because we set the relation to null
                        $rPrestations->save($con);
                    }
                    $this->rPrestationssScheduledForDeletion = null;
                }
            }

            if ($this->collRPrestationss !== null) {
                foreach ($this->collRPrestationss as $referrerFK) {
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

        $this->modifiedColumns[] = AclGroupsPeer::GROUP_ID;
        if (null !== $this->group_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AclGroupsPeer::GROUP_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AclGroupsPeer::GROUP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`group_id`';
        }
        if ($this->isColumnModified(AclGroupsPeer::GROUP_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`group_name`';
        }
        if ($this->isColumnModified(AclGroupsPeer::GROUP_ORGANISATION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`group_organisation_id`';
        }

        $sql = sprintf(
            'INSERT INTO `acl_groups` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`group_id`':
                        $stmt->bindValue($identifier, $this->group_id, PDO::PARAM_INT);
                        break;
                    case '`group_name`':
                        $stmt->bindValue($identifier, $this->group_name, PDO::PARAM_STR);
                        break;
                    case '`group_organisation_id`':
                        $stmt->bindValue($identifier, $this->group_organisation_id, PDO::PARAM_INT);
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
        $this->setGroupId($pk);

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

            if ($this->aOrganisations !== null) {
                if (!$this->aOrganisations->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOrganisations->getValidationFailures());
                }
            }


            if (($retval = AclGroupsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collLnkAclGroupsFonctionnalitess !== null) {
                    foreach ($this->collLnkAclGroupsFonctionnalitess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkUsersAclGroupss !== null) {
                    foreach ($this->collLnkUsersAclGroupss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRPrestationss !== null) {
                    foreach ($this->collRPrestationss as $referrerFK) {
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
        $pos = AclGroupsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGroupId();
                break;
            case 1:
                return $this->getGroupName();
                break;
            case 2:
                return $this->getGroupOrganisationId();
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
        if (isset($alreadyDumpedObjects['AclGroups'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['AclGroups'][$this->getPrimaryKey()] = true;
        $keys = AclGroupsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getGroupId(),
            $keys[1] => $this->getGroupName(),
            $keys[2] => $this->getGroupOrganisationId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOrganisations) {
                $result['Organisations'] = $this->aOrganisations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collLnkAclGroupsFonctionnalitess) {
                $result['LnkAclGroupsFonctionnalitess'] = $this->collLnkAclGroupsFonctionnalitess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkUsersAclGroupss) {
                $result['LnkUsersAclGroupss'] = $this->collLnkUsersAclGroupss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRPrestationss) {
                $result['RPrestationss'] = $this->collRPrestationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = AclGroupsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGroupId($value);
                break;
            case 1:
                $this->setGroupName($value);
                break;
            case 2:
                $this->setGroupOrganisationId($value);
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
        $keys = AclGroupsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setGroupId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setGroupName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGroupOrganisationId($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AclGroupsPeer::DATABASE_NAME);

        if ($this->isColumnModified(AclGroupsPeer::GROUP_ID)) $criteria->add(AclGroupsPeer::GROUP_ID, $this->group_id);
        if ($this->isColumnModified(AclGroupsPeer::GROUP_NAME)) $criteria->add(AclGroupsPeer::GROUP_NAME, $this->group_name);
        if ($this->isColumnModified(AclGroupsPeer::GROUP_ORGANISATION_ID)) $criteria->add(AclGroupsPeer::GROUP_ORGANISATION_ID, $this->group_organisation_id);

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
        $criteria = new Criteria(AclGroupsPeer::DATABASE_NAME);
        $criteria->add(AclGroupsPeer::GROUP_ID, $this->group_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getGroupId();
    }

    /**
     * Generic method to set the primary key (group_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setGroupId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getGroupId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of AclGroups (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGroupName($this->getGroupName());
        $copyObj->setGroupOrganisationId($this->getGroupOrganisationId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getLnkAclGroupsFonctionnalitess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkAclGroupsFonctionnalites($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkUsersAclGroupss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkUsersAclGroups($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRPrestationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRPrestations($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setGroupId(NULL); // this is a auto-increment column, so set to default value
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
     * @return AclGroups Clone of current object.
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
     * @return AclGroupsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AclGroupsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Organisations object.
     *
     * @param                  Organisations $v
     * @return AclGroups The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOrganisations(Organisations $v = null)
    {
        if ($v === null) {
            $this->setGroupOrganisationId(NULL);
        } else {
            $this->setGroupOrganisationId($v->getOrganisationId());
        }

        $this->aOrganisations = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Organisations object, it will not be re-added.
        if ($v !== null) {
            $v->addAclGroups($this);
        }


        return $this;
    }


    /**
     * Get the associated Organisations object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Organisations The associated Organisations object.
     * @throws PropelException
     */
    public function getOrganisations(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOrganisations === null && ($this->group_organisation_id !== null) && $doQuery) {
            $this->aOrganisations = OrganisationsQuery::create()->findPk($this->group_organisation_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOrganisations->addAclGroupss($this);
             */
        }

        return $this->aOrganisations;
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
        if ('LnkAclGroupsFonctionnalites' == $relationName) {
            $this->initLnkAclGroupsFonctionnalitess();
        }
        if ('LnkUsersAclGroups' == $relationName) {
            $this->initLnkUsersAclGroupss();
        }
        if ('RPrestations' == $relationName) {
            $this->initRPrestationss();
        }
    }

    /**
     * Clears out the collLnkAclGroupsFonctionnalitess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return AclGroups The current object (for fluent API support)
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
     * If this AclGroups is new, it will return
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
                    ->filterByAclGroups($this)
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
     * @return AclGroups The current object (for fluent API support)
     */
    public function setLnkAclGroupsFonctionnalitess(PropelCollection $lnkAclGroupsFonctionnalitess, PropelPDO $con = null)
    {
        $lnkAclGroupsFonctionnalitessToDelete = $this->getLnkAclGroupsFonctionnalitess(new Criteria(), $con)->diff($lnkAclGroupsFonctionnalitess);


        $this->lnkAclGroupsFonctionnalitessScheduledForDeletion = $lnkAclGroupsFonctionnalitessToDelete;

        foreach ($lnkAclGroupsFonctionnalitessToDelete as $lnkAclGroupsFonctionnalitesRemoved) {
            $lnkAclGroupsFonctionnalitesRemoved->setAclGroups(null);
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
                ->filterByAclGroups($this)
                ->count($con);
        }

        return count($this->collLnkAclGroupsFonctionnalitess);
    }

    /**
     * Method called to associate a LnkAclGroupsFonctionnalites object to this object
     * through the LnkAclGroupsFonctionnalites foreign key attribute.
     *
     * @param    LnkAclGroupsFonctionnalites $l LnkAclGroupsFonctionnalites
     * @return AclGroups The current object (for fluent API support)
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
        $lnkAclGroupsFonctionnalites->setAclGroups($this);
    }

    /**
     * @param	LnkAclGroupsFonctionnalites $lnkAclGroupsFonctionnalites The lnkAclGroupsFonctionnalites object to remove.
     * @return AclGroups The current object (for fluent API support)
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
            $lnkAclGroupsFonctionnalites->setAclGroups(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AclGroups is new, it will return
     * an empty collection; or if this AclGroups has previously
     * been saved, it will retrieve related LnkAclGroupsFonctionnalitess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AclGroups.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkAclGroupsFonctionnalites[] List of LnkAclGroupsFonctionnalites objects
     */
    public function getLnkAclGroupsFonctionnalitessJoinAclFonctionnalites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkAclGroupsFonctionnalitesQuery::create(null, $criteria);
        $query->joinWith('AclFonctionnalites', $join_behavior);

        return $this->getLnkAclGroupsFonctionnalitess($query, $con);
    }

    /**
     * Clears out the collLnkUsersAclGroupss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return AclGroups The current object (for fluent API support)
     * @see        addLnkUsersAclGroupss()
     */
    public function clearLnkUsersAclGroupss()
    {
        $this->collLnkUsersAclGroupss = null; // important to set this to null since that means it is uninitialized
        $this->collLnkUsersAclGroupssPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkUsersAclGroupss collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkUsersAclGroupss($v = true)
    {
        $this->collLnkUsersAclGroupssPartial = $v;
    }

    /**
     * Initializes the collLnkUsersAclGroupss collection.
     *
     * By default this just sets the collLnkUsersAclGroupss collection to an empty array (like clearcollLnkUsersAclGroupss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkUsersAclGroupss($overrideExisting = true)
    {
        if (null !== $this->collLnkUsersAclGroupss && !$overrideExisting) {
            return;
        }
        $this->collLnkUsersAclGroupss = new PropelObjectCollection();
        $this->collLnkUsersAclGroupss->setModel('LnkUsersAclGroups');
    }

    /**
     * Gets an array of LnkUsersAclGroups objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this AclGroups is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkUsersAclGroups[] List of LnkUsersAclGroups objects
     * @throws PropelException
     */
    public function getLnkUsersAclGroupss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkUsersAclGroupssPartial && !$this->isNew();
        if (null === $this->collLnkUsersAclGroupss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkUsersAclGroupss) {
                // return empty collection
                $this->initLnkUsersAclGroupss();
            } else {
                $collLnkUsersAclGroupss = LnkUsersAclGroupsQuery::create(null, $criteria)
                    ->filterByAclGroups($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkUsersAclGroupssPartial && count($collLnkUsersAclGroupss)) {
                      $this->initLnkUsersAclGroupss(false);

                      foreach ($collLnkUsersAclGroupss as $obj) {
                        if (false == $this->collLnkUsersAclGroupss->contains($obj)) {
                          $this->collLnkUsersAclGroupss->append($obj);
                        }
                      }

                      $this->collLnkUsersAclGroupssPartial = true;
                    }

                    $collLnkUsersAclGroupss->getInternalIterator()->rewind();

                    return $collLnkUsersAclGroupss;
                }

                if ($partial && $this->collLnkUsersAclGroupss) {
                    foreach ($this->collLnkUsersAclGroupss as $obj) {
                        if ($obj->isNew()) {
                            $collLnkUsersAclGroupss[] = $obj;
                        }
                    }
                }

                $this->collLnkUsersAclGroupss = $collLnkUsersAclGroupss;
                $this->collLnkUsersAclGroupssPartial = false;
            }
        }

        return $this->collLnkUsersAclGroupss;
    }

    /**
     * Sets a collection of LnkUsersAclGroups objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkUsersAclGroupss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return AclGroups The current object (for fluent API support)
     */
    public function setLnkUsersAclGroupss(PropelCollection $lnkUsersAclGroupss, PropelPDO $con = null)
    {
        $lnkUsersAclGroupssToDelete = $this->getLnkUsersAclGroupss(new Criteria(), $con)->diff($lnkUsersAclGroupss);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->lnkUsersAclGroupssScheduledForDeletion = clone $lnkUsersAclGroupssToDelete;

        foreach ($lnkUsersAclGroupssToDelete as $lnkUsersAclGroupsRemoved) {
            $lnkUsersAclGroupsRemoved->setAclGroups(null);
        }

        $this->collLnkUsersAclGroupss = null;
        foreach ($lnkUsersAclGroupss as $lnkUsersAclGroups) {
            $this->addLnkUsersAclGroups($lnkUsersAclGroups);
        }

        $this->collLnkUsersAclGroupss = $lnkUsersAclGroupss;
        $this->collLnkUsersAclGroupssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkUsersAclGroups objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkUsersAclGroups objects.
     * @throws PropelException
     */
    public function countLnkUsersAclGroupss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkUsersAclGroupssPartial && !$this->isNew();
        if (null === $this->collLnkUsersAclGroupss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkUsersAclGroupss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkUsersAclGroupss());
            }
            $query = LnkUsersAclGroupsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAclGroups($this)
                ->count($con);
        }

        return count($this->collLnkUsersAclGroupss);
    }

    /**
     * Method called to associate a LnkUsersAclGroups object to this object
     * through the LnkUsersAclGroups foreign key attribute.
     *
     * @param    LnkUsersAclGroups $l LnkUsersAclGroups
     * @return AclGroups The current object (for fluent API support)
     */
    public function addLnkUsersAclGroups(LnkUsersAclGroups $l)
    {
        if ($this->collLnkUsersAclGroupss === null) {
            $this->initLnkUsersAclGroupss();
            $this->collLnkUsersAclGroupssPartial = true;
        }

        if (!in_array($l, $this->collLnkUsersAclGroupss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkUsersAclGroups($l);

            if ($this->lnkUsersAclGroupssScheduledForDeletion and $this->lnkUsersAclGroupssScheduledForDeletion->contains($l)) {
                $this->lnkUsersAclGroupssScheduledForDeletion->remove($this->lnkUsersAclGroupssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkUsersAclGroups $lnkUsersAclGroups The lnkUsersAclGroups object to add.
     */
    protected function doAddLnkUsersAclGroups($lnkUsersAclGroups)
    {
        $this->collLnkUsersAclGroupss[]= $lnkUsersAclGroups;
        $lnkUsersAclGroups->setAclGroups($this);
    }

    /**
     * @param	LnkUsersAclGroups $lnkUsersAclGroups The lnkUsersAclGroups object to remove.
     * @return AclGroups The current object (for fluent API support)
     */
    public function removeLnkUsersAclGroups($lnkUsersAclGroups)
    {
        if ($this->getLnkUsersAclGroupss()->contains($lnkUsersAclGroups)) {
            $this->collLnkUsersAclGroupss->remove($this->collLnkUsersAclGroupss->search($lnkUsersAclGroups));
            if (null === $this->lnkUsersAclGroupssScheduledForDeletion) {
                $this->lnkUsersAclGroupssScheduledForDeletion = clone $this->collLnkUsersAclGroupss;
                $this->lnkUsersAclGroupssScheduledForDeletion->clear();
            }
            $this->lnkUsersAclGroupssScheduledForDeletion[]= clone $lnkUsersAclGroups;
            $lnkUsersAclGroups->setAclGroups(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AclGroups is new, it will return
     * an empty collection; or if this AclGroups has previously
     * been saved, it will retrieve related LnkUsersAclGroupss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AclGroups.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkUsersAclGroups[] List of LnkUsersAclGroups objects
     */
    public function getLnkUsersAclGroupssJoinUsers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkUsersAclGroupsQuery::create(null, $criteria);
        $query->joinWith('Users', $join_behavior);

        return $this->getLnkUsersAclGroupss($query, $con);
    }

    /**
     * Clears out the collRPrestationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return AclGroups The current object (for fluent API support)
     * @see        addRPrestationss()
     */
    public function clearRPrestationss()
    {
        $this->collRPrestationss = null; // important to set this to null since that means it is uninitialized
        $this->collRPrestationssPartial = null;

        return $this;
    }

    /**
     * reset is the collRPrestationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialRPrestationss($v = true)
    {
        $this->collRPrestationssPartial = $v;
    }

    /**
     * Initializes the collRPrestationss collection.
     *
     * By default this just sets the collRPrestationss collection to an empty array (like clearcollRPrestationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRPrestationss($overrideExisting = true)
    {
        if (null !== $this->collRPrestationss && !$overrideExisting) {
            return;
        }
        $this->collRPrestationss = new PropelObjectCollection();
        $this->collRPrestationss->setModel('RPrestations');
    }

    /**
     * Gets an array of RPrestations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this AclGroups is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|RPrestations[] List of RPrestations objects
     * @throws PropelException
     */
    public function getRPrestationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRPrestationssPartial && !$this->isNew();
        if (null === $this->collRPrestationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRPrestationss) {
                // return empty collection
                $this->initRPrestationss();
            } else {
                $collRPrestationss = RPrestationsQuery::create(null, $criteria)
                    ->filterByGroupValidation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRPrestationssPartial && count($collRPrestationss)) {
                      $this->initRPrestationss(false);

                      foreach ($collRPrestationss as $obj) {
                        if (false == $this->collRPrestationss->contains($obj)) {
                          $this->collRPrestationss->append($obj);
                        }
                      }

                      $this->collRPrestationssPartial = true;
                    }

                    $collRPrestationss->getInternalIterator()->rewind();

                    return $collRPrestationss;
                }

                if ($partial && $this->collRPrestationss) {
                    foreach ($this->collRPrestationss as $obj) {
                        if ($obj->isNew()) {
                            $collRPrestationss[] = $obj;
                        }
                    }
                }

                $this->collRPrestationss = $collRPrestationss;
                $this->collRPrestationssPartial = false;
            }
        }

        return $this->collRPrestationss;
    }

    /**
     * Sets a collection of RPrestations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rPrestationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return AclGroups The current object (for fluent API support)
     */
    public function setRPrestationss(PropelCollection $rPrestationss, PropelPDO $con = null)
    {
        $rPrestationssToDelete = $this->getRPrestationss(new Criteria(), $con)->diff($rPrestationss);


        $this->rPrestationssScheduledForDeletion = $rPrestationssToDelete;

        foreach ($rPrestationssToDelete as $rPrestationsRemoved) {
            $rPrestationsRemoved->setGroupValidation(null);
        }

        $this->collRPrestationss = null;
        foreach ($rPrestationss as $rPrestations) {
            $this->addRPrestations($rPrestations);
        }

        $this->collRPrestationss = $rPrestationss;
        $this->collRPrestationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related RPrestations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related RPrestations objects.
     * @throws PropelException
     */
    public function countRPrestationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRPrestationssPartial && !$this->isNew();
        if (null === $this->collRPrestationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRPrestationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRPrestationss());
            }
            $query = RPrestationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGroupValidation($this)
                ->count($con);
        }

        return count($this->collRPrestationss);
    }

    /**
     * Method called to associate a RPrestations object to this object
     * through the RPrestations foreign key attribute.
     *
     * @param    RPrestations $l RPrestations
     * @return AclGroups The current object (for fluent API support)
     */
    public function addRPrestations(RPrestations $l)
    {
        if ($this->collRPrestationss === null) {
            $this->initRPrestationss();
            $this->collRPrestationssPartial = true;
        }

        if (!in_array($l, $this->collRPrestationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRPrestations($l);

            if ($this->rPrestationssScheduledForDeletion and $this->rPrestationssScheduledForDeletion->contains($l)) {
                $this->rPrestationssScheduledForDeletion->remove($this->rPrestationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RPrestations $rPrestations The rPrestations object to add.
     */
    protected function doAddRPrestations($rPrestations)
    {
        $this->collRPrestationss[]= $rPrestations;
        $rPrestations->setGroupValidation($this);
    }

    /**
     * @param	RPrestations $rPrestations The rPrestations object to remove.
     * @return AclGroups The current object (for fluent API support)
     */
    public function removeRPrestations($rPrestations)
    {
        if ($this->getRPrestationss()->contains($rPrestations)) {
            $this->collRPrestationss->remove($this->collRPrestationss->search($rPrestations));
            if (null === $this->rPrestationssScheduledForDeletion) {
                $this->rPrestationssScheduledForDeletion = clone $this->collRPrestationss;
                $this->rPrestationssScheduledForDeletion->clear();
            }
            $this->rPrestationssScheduledForDeletion[]= $rPrestations;
            $rPrestations->setGroupValidation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AclGroups is new, it will return
     * an empty collection; or if this AclGroups has previously
     * been saved, it will retrieve related RPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AclGroups.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RPrestations[] List of RPrestations objects
     */
    public function getRPrestationssJoinAxe1($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RPrestationsQuery::create(null, $criteria);
        $query->joinWith('Axe1', $join_behavior);

        return $this->getRPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AclGroups is new, it will return
     * an empty collection; or if this AclGroups has previously
     * been saved, it will retrieve related RPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AclGroups.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RPrestations[] List of RPrestations objects
     */
    public function getRPrestationssJoinAxe2($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RPrestationsQuery::create(null, $criteria);
        $query->joinWith('Axe2', $join_behavior);

        return $this->getRPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AclGroups is new, it will return
     * an empty collection; or if this AclGroups has previously
     * been saved, it will retrieve related RPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AclGroups.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RPrestations[] List of RPrestations objects
     */
    public function getRPrestationssJoinAxe3($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RPrestationsQuery::create(null, $criteria);
        $query->joinWith('Axe3', $join_behavior);

        return $this->getRPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AclGroups is new, it will return
     * an empty collection; or if this AclGroups has previously
     * been saved, it will retrieve related RPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AclGroups.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RPrestations[] List of RPrestations objects
     */
    public function getRPrestationssJoinAxe4($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RPrestationsQuery::create(null, $criteria);
        $query->joinWith('Axe4', $join_behavior);

        return $this->getRPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AclGroups is new, it will return
     * an empty collection; or if this AclGroups has previously
     * been saved, it will retrieve related RPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AclGroups.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RPrestations[] List of RPrestations objects
     */
    public function getRPrestationssJoinAxe5($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RPrestationsQuery::create(null, $criteria);
        $query->joinWith('Axe5', $join_behavior);

        return $this->getRPrestationss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->group_id = null;
        $this->group_name = null;
        $this->group_organisation_id = null;
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
            if ($this->collLnkAclGroupsFonctionnalitess) {
                foreach ($this->collLnkAclGroupsFonctionnalitess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkUsersAclGroupss) {
                foreach ($this->collLnkUsersAclGroupss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRPrestationss) {
                foreach ($this->collRPrestationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aOrganisations instanceof Persistent) {
              $this->aOrganisations->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collLnkAclGroupsFonctionnalitess instanceof PropelCollection) {
            $this->collLnkAclGroupsFonctionnalitess->clearIterator();
        }
        $this->collLnkAclGroupsFonctionnalitess = null;
        if ($this->collLnkUsersAclGroupss instanceof PropelCollection) {
            $this->collLnkUsersAclGroupss->clearIterator();
        }
        $this->collLnkUsersAclGroupss = null;
        if ($this->collRPrestationss instanceof PropelCollection) {
            $this->collRPrestationss->clearIterator();
        }
        $this->collRPrestationss = null;
        $this->aOrganisations = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AclGroupsPeer::DEFAULT_STRING_FORMAT);
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

    // validateisunique behavior
    
                protected function _validateIsUnique(){
                    $oTableMap = $this->getPeer()->getTableMap();
                    $sTableName = $oTableMap->getName();
                    $aColumns = array (
      0 => 'group_name',
      1 => 'group_organisation_id',
    );
                    $aPrimaryKeys = $oTableMap->getPrimaryKeyColumns();
    
                    $bModified = false;
                    $aModifiedColumns = $this->getModifiedColumns();
                    foreach($aColumns as $sColumn){
                        if(in_array($sTableName.'.'.$sColumn,$aModifiedColumns)){
                            $bModified = true;
                            continue;
                        }
                    }
    
                    if(!$bModified){
                        return;
                    }
    
                    $oCriteria = new Criteria();
    
                    foreach($aPrimaryKeys as $oColumn){
                        $sGetter = 'get' . $oColumn->getPhpName();
                        $oCriteria->add($oColumn->getFullyQualifiedName(), $this->$sGetter(), Criteria::NOT_EQUAL);
                    }
    
                    // Add "actif" criteria if column exists
                    if ($oTableMap->hasColumn('actif')) {
                        $oCriteria->add('actif', 1, Criteria::EQUAL);
                    }
    
                    foreach ($aColumns as $sColumn) {
                        $oColumn = $oTableMap->getColumn($sColumn);
                        $sGetter = 'get' . $oColumn->getPhpName();
                        $oCriteria->add($oColumn->getFullyQualifiedName(), $this->$sGetter(), Criteria::EQUAL);
                    }
    
                    if(call_user_func(array($oTableMap->getClassName() . 'Peer', 'doCount'), $oCriteria)){
                        if(count($aColumns) === 1){
                            $this->addValidationFailed('Ce nom de rôle existe déjà pour cette organisation', $aColumns[0]);
                        } else {
                            $this->addValidationFailed('Ce nom de rôle existe déjà pour cette organisation', 'error');
                        }
                    }
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
                return BaseAclGroupsPeer::getConnection();
            }
}
