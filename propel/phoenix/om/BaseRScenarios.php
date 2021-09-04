<?php


/**
 * Base class that represents a row from the 'r_scenarios' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRScenarios extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RScenariosPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RScenariosPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_scenario_id field.
     * @var        int
     */
    protected $r_scenario_id;

    /**
     * The value for the r_scenario_libelle field.
     * @var        string
     */
    protected $r_scenario_libelle;

    /**
     * The value for the r_scenario_libelle_en field.
     * @var        string
     */
    protected $r_scenario_libelle_en;

    /**
     * The value for the r_scenario_actif field.
     * @var        boolean
     */
    protected $r_scenario_actif;

    /**
     * @var        PropelObjectCollection|OperationScenarii[] Collection to store aggregation of OperationScenarii objects.
     */
    protected $collOperationScenariis;
    protected $collOperationScenariisPartial;

    /**
     * @var        PropelObjectCollection|ROperationTypeSubTplScenario[] Collection to store aggregation of ROperationTypeSubTplScenario objects.
     */
    protected $collROperationTypeSubTplScenarios;
    protected $collROperationTypeSubTplScenariosPartial;

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
    protected $operationScenariisScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationTypeSubTplScenariosScheduledForDeletion = null;

    /**
     * Get the [r_scenario_id] column value.
     *
     * @return int
     */
    public function getRScenarioId()
    {

        return $this->r_scenario_id;
    }

    /**
     * Get the [r_scenario_libelle] column value.
     *
     * @return string
     */
    public function getRScenarioLibelle()
    {

        return $this->r_scenario_libelle;
    }

    /**
     * Get the [r_scenario_libelle_en] column value.
     *
     * @return string
     */
    public function getRScenarioLibelleEn()
    {

        return $this->r_scenario_libelle_en;
    }

    /**
     * Get the [r_scenario_actif] column value.
     *
     * @return boolean
     */
    public function getRScenarioActif()
    {

        return $this->r_scenario_actif;
    }

    /**
     * Set the value of [r_scenario_id] column.
     *
     * @param  int $v new value
     * @return RScenarios The current object (for fluent API support)
     */
    public function setRScenarioId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_scenario_id !== $v) {
                    $this->r_scenario_id = $v;
                    $this->modifiedColumns[] = RScenariosPeer::R_SCENARIO_ID;
                }


        return $this;
    } // setRScenarioId()

    /**
     * Set the value of [r_scenario_libelle] column.
     *
     * @param  string $v new value
     * @return RScenarios The current object (for fluent API support)
     */
    public function setRScenarioLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_scenario_libelle !== $v) {
            $this->r_scenario_libelle = $v;
            $this->modifiedColumns[] = RScenariosPeer::R_SCENARIO_LIBELLE;
        }


        return $this;
    } // setRScenarioLibelle()

    /**
     * Set the value of [r_scenario_libelle_en] column.
     *
     * @param  string $v new value
     * @return RScenarios The current object (for fluent API support)
     */
    public function setRScenarioLibelleEn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_scenario_libelle_en !== $v) {
            $this->r_scenario_libelle_en = $v;
            $this->modifiedColumns[] = RScenariosPeer::R_SCENARIO_LIBELLE_EN;
        }


        return $this;
    } // setRScenarioLibelleEn()

    /**
     * Sets the value of the [r_scenario_actif] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RScenarios The current object (for fluent API support)
     */
    public function setRScenarioActif($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_scenario_actif !== $v) {
            $this->r_scenario_actif = $v;
            $this->modifiedColumns[] = RScenariosPeer::R_SCENARIO_ACTIF;
        }


        return $this;
    } // setRScenarioActif()

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

            $this->r_scenario_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_scenario_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_scenario_libelle_en = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->r_scenario_actif = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = RScenariosPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RScenarios object", $e);
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
            $con = Propel::getConnection(RScenariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RScenariosPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collOperationScenariis = null;

            $this->collROperationTypeSubTplScenarios = null;

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
            $con = Propel::getConnection(RScenariosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RScenariosQuery::create()
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
            $con = Propel::getConnection(RScenariosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RScenariosPeer::addInstanceToPool($this);
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

            if ($this->operationScenariisScheduledForDeletion !== null) {
                if (!$this->operationScenariisScheduledForDeletion->isEmpty()) {
                    OperationScenariiQuery::create()
                        ->filterByPrimaryKeys($this->operationScenariisScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->operationScenariisScheduledForDeletion = null;
                }
            }

            if ($this->collOperationScenariis !== null) {
                foreach ($this->collOperationScenariis as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rOperationTypeSubTplScenariosScheduledForDeletion !== null) {
                if (!$this->rOperationTypeSubTplScenariosScheduledForDeletion->isEmpty()) {
                    ROperationTypeSubTplScenarioQuery::create()
                        ->filterByPrimaryKeys($this->rOperationTypeSubTplScenariosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->rOperationTypeSubTplScenariosScheduledForDeletion = null;
                }
            }

            if ($this->collROperationTypeSubTplScenarios !== null) {
                foreach ($this->collROperationTypeSubTplScenarios as $referrerFK) {
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

        $this->modifiedColumns[] = RScenariosPeer::R_SCENARIO_ID;
        if (null !== $this->r_scenario_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RScenariosPeer::R_SCENARIO_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RScenariosPeer::R_SCENARIO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_scenario_id`';
        }
        if ($this->isColumnModified(RScenariosPeer::R_SCENARIO_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_scenario_libelle`';
        }
        if ($this->isColumnModified(RScenariosPeer::R_SCENARIO_LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`r_scenario_libelle_en`';
        }
        if ($this->isColumnModified(RScenariosPeer::R_SCENARIO_ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`r_scenario_actif`';
        }

        $sql = sprintf(
            'INSERT INTO `r_scenarios` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_scenario_id`':
                        $stmt->bindValue($identifier, $this->r_scenario_id, PDO::PARAM_INT);
                        break;
                    case '`r_scenario_libelle`':
                        $stmt->bindValue($identifier, $this->r_scenario_libelle, PDO::PARAM_STR);
                        break;
                    case '`r_scenario_libelle_en`':
                        $stmt->bindValue($identifier, $this->r_scenario_libelle_en, PDO::PARAM_STR);
                        break;
                    case '`r_scenario_actif`':
                        $stmt->bindValue($identifier, (int) $this->r_scenario_actif, PDO::PARAM_INT);
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
        $this->setRScenarioId($pk);

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


            if (($retval = RScenariosPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOperationScenariis !== null) {
                    foreach ($this->collOperationScenariis as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collROperationTypeSubTplScenarios !== null) {
                    foreach ($this->collROperationTypeSubTplScenarios as $referrerFK) {
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
        $pos = RScenariosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRScenarioId();
                break;
            case 1:
                return $this->getRScenarioLibelle();
                break;
            case 2:
                return $this->getRScenarioLibelleEn();
                break;
            case 3:
                return $this->getRScenarioActif();
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
        if (isset($alreadyDumpedObjects['RScenarios'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RScenarios'][$this->getPrimaryKey()] = true;
        $keys = RScenariosPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRScenarioId(),
            $keys[1] => $this->getRScenarioLibelle(),
            $keys[2] => $this->getRScenarioLibelleEn(),
            $keys[3] => $this->getRScenarioActif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collOperationScenariis) {
                $result['OperationScenariis'] = $this->collOperationScenariis->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationTypeSubTplScenarios) {
                $result['ROperationTypeSubTplScenarios'] = $this->collROperationTypeSubTplScenarios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RScenariosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRScenarioId($value);
                break;
            case 1:
                $this->setRScenarioLibelle($value);
                break;
            case 2:
                $this->setRScenarioLibelleEn($value);
                break;
            case 3:
                $this->setRScenarioActif($value);
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
        $keys = RScenariosPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRScenarioId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRScenarioLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRScenarioLibelleEn($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRScenarioActif($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RScenariosPeer::DATABASE_NAME);

        if ($this->isColumnModified(RScenariosPeer::R_SCENARIO_ID)) $criteria->add(RScenariosPeer::R_SCENARIO_ID, $this->r_scenario_id);
        if ($this->isColumnModified(RScenariosPeer::R_SCENARIO_LIBELLE)) $criteria->add(RScenariosPeer::R_SCENARIO_LIBELLE, $this->r_scenario_libelle);
        if ($this->isColumnModified(RScenariosPeer::R_SCENARIO_LIBELLE_EN)) $criteria->add(RScenariosPeer::R_SCENARIO_LIBELLE_EN, $this->r_scenario_libelle_en);
        if ($this->isColumnModified(RScenariosPeer::R_SCENARIO_ACTIF)) $criteria->add(RScenariosPeer::R_SCENARIO_ACTIF, $this->r_scenario_actif);

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
        $criteria = new Criteria(RScenariosPeer::DATABASE_NAME);
        $criteria->add(RScenariosPeer::R_SCENARIO_ID, $this->r_scenario_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRScenarioId();
    }

    /**
     * Generic method to set the primary key (r_scenario_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRScenarioId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRScenarioId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RScenarios (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRScenarioLibelle($this->getRScenarioLibelle());
        $copyObj->setRScenarioLibelleEn($this->getRScenarioLibelleEn());
        $copyObj->setRScenarioActif($this->getRScenarioActif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOperationScenariis() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationScenarii($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationTypeSubTplScenarios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeSubTplScenario($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRScenarioId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RScenarios Clone of current object.
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
     * @return RScenariosPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RScenariosPeer();
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
        if ('OperationScenarii' == $relationName) {
            $this->initOperationScenariis();
        }
        if ('ROperationTypeSubTplScenario' == $relationName) {
            $this->initROperationTypeSubTplScenarios();
        }
    }

    /**
     * Clears out the collOperationScenariis collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RScenarios The current object (for fluent API support)
     * @see        addOperationScenariis()
     */
    public function clearOperationScenariis()
    {
        $this->collOperationScenariis = null; // important to set this to null since that means it is uninitialized
        $this->collOperationScenariisPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationScenariis collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationScenariis($v = true)
    {
        $this->collOperationScenariisPartial = $v;
    }

    /**
     * Initializes the collOperationScenariis collection.
     *
     * By default this just sets the collOperationScenariis collection to an empty array (like clearcollOperationScenariis());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationScenariis($overrideExisting = true)
    {
        if (null !== $this->collOperationScenariis && !$overrideExisting) {
            return;
        }
        $this->collOperationScenariis = new PropelObjectCollection();
        $this->collOperationScenariis->setModel('OperationScenarii');
    }

    /**
     * Gets an array of OperationScenarii objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RScenarios is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationScenarii[] List of OperationScenarii objects
     * @throws PropelException
     */
    public function getOperationScenariis($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationScenariisPartial && !$this->isNew();
        if (null === $this->collOperationScenariis || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationScenariis) {
                // return empty collection
                $this->initOperationScenariis();
            } else {
                $collOperationScenariis = OperationScenariiQuery::create(null, $criteria)
                    ->filterByRScenarios($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationScenariisPartial && count($collOperationScenariis)) {
                      $this->initOperationScenariis(false);

                      foreach ($collOperationScenariis as $obj) {
                        if (false == $this->collOperationScenariis->contains($obj)) {
                          $this->collOperationScenariis->append($obj);
                        }
                      }

                      $this->collOperationScenariisPartial = true;
                    }

                    $collOperationScenariis->getInternalIterator()->rewind();

                    return $collOperationScenariis;
                }

                if ($partial && $this->collOperationScenariis) {
                    foreach ($this->collOperationScenariis as $obj) {
                        if ($obj->isNew()) {
                            $collOperationScenariis[] = $obj;
                        }
                    }
                }

                $this->collOperationScenariis = $collOperationScenariis;
                $this->collOperationScenariisPartial = false;
            }
        }

        return $this->collOperationScenariis;
    }

    /**
     * Sets a collection of OperationScenarii objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationScenariis A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RScenarios The current object (for fluent API support)
     */
    public function setOperationScenariis(PropelCollection $operationScenariis, PropelPDO $con = null)
    {
        $operationScenariisToDelete = $this->getOperationScenariis(new Criteria(), $con)->diff($operationScenariis);


        $this->operationScenariisScheduledForDeletion = $operationScenariisToDelete;

        foreach ($operationScenariisToDelete as $operationScenariiRemoved) {
            $operationScenariiRemoved->setRScenarios(null);
        }

        $this->collOperationScenariis = null;
        foreach ($operationScenariis as $operationScenarii) {
            $this->addOperationScenarii($operationScenarii);
        }

        $this->collOperationScenariis = $operationScenariis;
        $this->collOperationScenariisPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationScenarii objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationScenarii objects.
     * @throws PropelException
     */
    public function countOperationScenariis(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationScenariisPartial && !$this->isNew();
        if (null === $this->collOperationScenariis || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationScenariis) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationScenariis());
            }
            $query = OperationScenariiQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRScenarios($this)
                ->count($con);
        }

        return count($this->collOperationScenariis);
    }

    /**
     * Method called to associate a OperationScenarii object to this object
     * through the OperationScenarii foreign key attribute.
     *
     * @param    OperationScenarii $l OperationScenarii
     * @return RScenarios The current object (for fluent API support)
     */
    public function addOperationScenarii(OperationScenarii $l)
    {
        if ($this->collOperationScenariis === null) {
            $this->initOperationScenariis();
            $this->collOperationScenariisPartial = true;
        }

        if (!in_array($l, $this->collOperationScenariis->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationScenarii($l);

            if ($this->operationScenariisScheduledForDeletion and $this->operationScenariisScheduledForDeletion->contains($l)) {
                $this->operationScenariisScheduledForDeletion->remove($this->operationScenariisScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationScenarii $operationScenarii The operationScenarii object to add.
     */
    protected function doAddOperationScenarii($operationScenarii)
    {
        $this->collOperationScenariis[]= $operationScenarii;
        $operationScenarii->setRScenarios($this);
    }

    /**
     * @param	OperationScenarii $operationScenarii The operationScenarii object to remove.
     * @return RScenarios The current object (for fluent API support)
     */
    public function removeOperationScenarii($operationScenarii)
    {
        if ($this->getOperationScenariis()->contains($operationScenarii)) {
            $this->collOperationScenariis->remove($this->collOperationScenariis->search($operationScenarii));
            if (null === $this->operationScenariisScheduledForDeletion) {
                $this->operationScenariisScheduledForDeletion = clone $this->collOperationScenariis;
                $this->operationScenariisScheduledForDeletion->clear();
            }
            $this->operationScenariisScheduledForDeletion[]= clone $operationScenarii;
            $operationScenarii->setRScenarios(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RScenarios is new, it will return
     * an empty collection; or if this RScenarios has previously
     * been saved, it will retrieve related OperationScenariis from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RScenarios.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationScenarii[] List of OperationScenarii objects
     */
    public function getOperationScenariisJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationScenariiQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getOperationScenariis($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RScenarios is new, it will return
     * an empty collection; or if this RScenarios has previously
     * been saved, it will retrieve related OperationScenariis from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RScenarios.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationScenarii[] List of OperationScenarii objects
     */
    public function getOperationScenariisJoinOperationPrimes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationScenariiQuery::create(null, $criteria);
        $query->joinWith('OperationPrimes', $join_behavior);

        return $this->getOperationScenariis($query, $con);
    }

    /**
     * Clears out the collROperationTypeSubTplScenarios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RScenarios The current object (for fluent API support)
     * @see        addROperationTypeSubTplScenarios()
     */
    public function clearROperationTypeSubTplScenarios()
    {
        $this->collROperationTypeSubTplScenarios = null; // important to set this to null since that means it is uninitialized
        $this->collROperationTypeSubTplScenariosPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationTypeSubTplScenarios collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationTypeSubTplScenarios($v = true)
    {
        $this->collROperationTypeSubTplScenariosPartial = $v;
    }

    /**
     * Initializes the collROperationTypeSubTplScenarios collection.
     *
     * By default this just sets the collROperationTypeSubTplScenarios collection to an empty array (like clearcollROperationTypeSubTplScenarios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationTypeSubTplScenarios($overrideExisting = true)
    {
        if (null !== $this->collROperationTypeSubTplScenarios && !$overrideExisting) {
            return;
        }
        $this->collROperationTypeSubTplScenarios = new PropelObjectCollection();
        $this->collROperationTypeSubTplScenarios->setModel('ROperationTypeSubTplScenario');
    }

    /**
     * Gets an array of ROperationTypeSubTplScenario objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RScenarios is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationTypeSubTplScenario[] List of ROperationTypeSubTplScenario objects
     * @throws PropelException
     */
    public function getROperationTypeSubTplScenarios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplScenariosPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplScenarios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplScenarios) {
                // return empty collection
                $this->initROperationTypeSubTplScenarios();
            } else {
                $collROperationTypeSubTplScenarios = ROperationTypeSubTplScenarioQuery::create(null, $criteria)
                    ->filterByRScenarios($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationTypeSubTplScenariosPartial && count($collROperationTypeSubTplScenarios)) {
                      $this->initROperationTypeSubTplScenarios(false);

                      foreach ($collROperationTypeSubTplScenarios as $obj) {
                        if (false == $this->collROperationTypeSubTplScenarios->contains($obj)) {
                          $this->collROperationTypeSubTplScenarios->append($obj);
                        }
                      }

                      $this->collROperationTypeSubTplScenariosPartial = true;
                    }

                    $collROperationTypeSubTplScenarios->getInternalIterator()->rewind();

                    return $collROperationTypeSubTplScenarios;
                }

                if ($partial && $this->collROperationTypeSubTplScenarios) {
                    foreach ($this->collROperationTypeSubTplScenarios as $obj) {
                        if ($obj->isNew()) {
                            $collROperationTypeSubTplScenarios[] = $obj;
                        }
                    }
                }

                $this->collROperationTypeSubTplScenarios = $collROperationTypeSubTplScenarios;
                $this->collROperationTypeSubTplScenariosPartial = false;
            }
        }

        return $this->collROperationTypeSubTplScenarios;
    }

    /**
     * Sets a collection of ROperationTypeSubTplScenario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationTypeSubTplScenarios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RScenarios The current object (for fluent API support)
     */
    public function setROperationTypeSubTplScenarios(PropelCollection $rOperationTypeSubTplScenarios, PropelPDO $con = null)
    {
        $rOperationTypeSubTplScenariosToDelete = $this->getROperationTypeSubTplScenarios(new Criteria(), $con)->diff($rOperationTypeSubTplScenarios);


        $this->rOperationTypeSubTplScenariosScheduledForDeletion = $rOperationTypeSubTplScenariosToDelete;

        foreach ($rOperationTypeSubTplScenariosToDelete as $rOperationTypeSubTplScenarioRemoved) {
            $rOperationTypeSubTplScenarioRemoved->setRScenarios(null);
        }

        $this->collROperationTypeSubTplScenarios = null;
        foreach ($rOperationTypeSubTplScenarios as $rOperationTypeSubTplScenario) {
            $this->addROperationTypeSubTplScenario($rOperationTypeSubTplScenario);
        }

        $this->collROperationTypeSubTplScenarios = $rOperationTypeSubTplScenarios;
        $this->collROperationTypeSubTplScenariosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationTypeSubTplScenario objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationTypeSubTplScenario objects.
     * @throws PropelException
     */
    public function countROperationTypeSubTplScenarios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplScenariosPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplScenarios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplScenarios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationTypeSubTplScenarios());
            }
            $query = ROperationTypeSubTplScenarioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRScenarios($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplScenarios);
    }

    /**
     * Method called to associate a ROperationTypeSubTplScenario object to this object
     * through the ROperationTypeSubTplScenario foreign key attribute.
     *
     * @param    ROperationTypeSubTplScenario $l ROperationTypeSubTplScenario
     * @return RScenarios The current object (for fluent API support)
     */
    public function addROperationTypeSubTplScenario(ROperationTypeSubTplScenario $l)
    {
        if ($this->collROperationTypeSubTplScenarios === null) {
            $this->initROperationTypeSubTplScenarios();
            $this->collROperationTypeSubTplScenariosPartial = true;
        }

        if (!in_array($l, $this->collROperationTypeSubTplScenarios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationTypeSubTplScenario($l);

            if ($this->rOperationTypeSubTplScenariosScheduledForDeletion and $this->rOperationTypeSubTplScenariosScheduledForDeletion->contains($l)) {
                $this->rOperationTypeSubTplScenariosScheduledForDeletion->remove($this->rOperationTypeSubTplScenariosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationTypeSubTplScenario $rOperationTypeSubTplScenario The rOperationTypeSubTplScenario object to add.
     */
    protected function doAddROperationTypeSubTplScenario($rOperationTypeSubTplScenario)
    {
        $this->collROperationTypeSubTplScenarios[]= $rOperationTypeSubTplScenario;
        $rOperationTypeSubTplScenario->setRScenarios($this);
    }

    /**
     * @param	ROperationTypeSubTplScenario $rOperationTypeSubTplScenario The rOperationTypeSubTplScenario object to remove.
     * @return RScenarios The current object (for fluent API support)
     */
    public function removeROperationTypeSubTplScenario($rOperationTypeSubTplScenario)
    {
        if ($this->getROperationTypeSubTplScenarios()->contains($rOperationTypeSubTplScenario)) {
            $this->collROperationTypeSubTplScenarios->remove($this->collROperationTypeSubTplScenarios->search($rOperationTypeSubTplScenario));
            if (null === $this->rOperationTypeSubTplScenariosScheduledForDeletion) {
                $this->rOperationTypeSubTplScenariosScheduledForDeletion = clone $this->collROperationTypeSubTplScenarios;
                $this->rOperationTypeSubTplScenariosScheduledForDeletion->clear();
            }
            $this->rOperationTypeSubTplScenariosScheduledForDeletion[]= clone $rOperationTypeSubTplScenario;
            $rOperationTypeSubTplScenario->setRScenarios(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RScenarios is new, it will return
     * an empty collection; or if this RScenarios has previously
     * been saved, it will retrieve related ROperationTypeSubTplScenarios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RScenarios.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeSubTplScenario[] List of ROperationTypeSubTplScenario objects
     */
    public function getROperationTypeSubTplScenariosJoinROperationTypeSubTpl($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeSubTplScenarioQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSubTpl', $join_behavior);

        return $this->getROperationTypeSubTplScenarios($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_scenario_id = null;
        $this->r_scenario_libelle = null;
        $this->r_scenario_libelle_en = null;
        $this->r_scenario_actif = null;
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
            if ($this->collOperationScenariis) {
                foreach ($this->collOperationScenariis as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeSubTplScenarios) {
                foreach ($this->collROperationTypeSubTplScenarios as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOperationScenariis instanceof PropelCollection) {
            $this->collOperationScenariis->clearIterator();
        }
        $this->collOperationScenariis = null;
        if ($this->collROperationTypeSubTplScenarios instanceof PropelCollection) {
            $this->collROperationTypeSubTplScenarios->clearIterator();
        }
        $this->collROperationTypeSubTplScenarios = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RScenariosPeer::DEFAULT_STRING_FORMAT);
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
                return BaseRScenariosPeer::getConnection();
            }
}
