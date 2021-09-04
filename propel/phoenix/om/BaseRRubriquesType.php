<?php


/**
 * Base class that represents a row from the 'r_rubriques_type' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRRubriquesType extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RRubriquesTypePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RRubriquesTypePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the rubrique_type_id field.
     * @var        int
     */
    protected $rubrique_type_id;

    /**
     * The value for the rubrique_type_libelle field.
     * @var        string
     */
    protected $rubrique_type_libelle;

    /**
     * The value for the frais_fixe field.
     * @var        boolean
     */
    protected $frais_fixe;

    /**
     * @var        PropelObjectCollection|OperationRubriques[] Collection to store aggregation of OperationRubriques objects.
     */
    protected $collOperationRubriquess;
    protected $collOperationRubriquessPartial;

    /**
     * @var        PropelObjectCollection|RRubriques[] Collection to store aggregation of RRubriques objects.
     */
    protected $collRRubriquess;
    protected $collRRubriquessPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationss;

    /**
     * @var        PropelObjectCollection|RTvaType[] Collection to store aggregation of RTvaType objects.
     */
    protected $collRTvaTypes;

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
    protected $operationssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rTvaTypesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationRubriquessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rRubriquessScheduledForDeletion = null;

    /**
     * Get the [rubrique_type_id] column value.
     *
     * @return int
     */
    public function getRubriqueTypeId()
    {

        return $this->rubrique_type_id;
    }

    /**
     * Get the [rubrique_type_libelle] column value.
     *
     * @return string
     */
    public function getRubriqueTypeLibelle()
    {

        return $this->rubrique_type_libelle;
    }

    /**
     * Get the [frais_fixe] column value.
     *
     * @return boolean
     */
    public function getFraisFixe()
    {

        return $this->frais_fixe;
    }

    /**
     * Set the value of [rubrique_type_id] column.
     *
     * @param  int $v new value
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function setRubriqueTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->rubrique_type_id !== $v) {
                    $this->rubrique_type_id = $v;
                    $this->modifiedColumns[] = RRubriquesTypePeer::RUBRIQUE_TYPE_ID;
                }


        return $this;
    } // setRubriqueTypeId()

    /**
     * Set the value of [rubrique_type_libelle] column.
     *
     * @param  string $v new value
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function setRubriqueTypeLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rubrique_type_libelle !== $v) {
            $this->rubrique_type_libelle = $v;
            $this->modifiedColumns[] = RRubriquesTypePeer::RUBRIQUE_TYPE_LIBELLE;
        }


        return $this;
    } // setRubriqueTypeLibelle()

    /**
     * Sets the value of the [frais_fixe] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function setFraisFixe($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->frais_fixe !== $v) {
            $this->frais_fixe = $v;
            $this->modifiedColumns[] = RRubriquesTypePeer::FRAIS_FIXE;
        }


        return $this;
    } // setFraisFixe()

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

            $this->rubrique_type_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->rubrique_type_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->frais_fixe = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = RRubriquesTypePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RRubriquesType object", $e);
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
            $con = Propel::getConnection(RRubriquesTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RRubriquesTypePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collOperationRubriquess = null;

            $this->collRRubriquess = null;

            $this->collOperationss = null;
            $this->collRTvaTypes = null;
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
            $con = Propel::getConnection(RRubriquesTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RRubriquesTypeQuery::create()
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
            $con = Propel::getConnection(RRubriquesTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RRubriquesTypePeer::addInstanceToPool($this);
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

            if ($this->operationssScheduledForDeletion !== null) {
                if (!$this->operationssScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    $pk = $this->getPrimaryKey();
                    foreach ($this->operationssScheduledForDeletion->getPrimaryKeys(false) as $remotePk) {
                        $pks[] = array($remotePk, $pk);
                    }
                    OperationRubriquesQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);
                    $this->operationssScheduledForDeletion = null;
                }

                foreach ($this->getOperationss() as $operations) {
                    if ($operations->isModified()) {
                        $operations->save($con);
                    }
                }
            } elseif ($this->collOperationss) {
                foreach ($this->collOperationss as $operations) {
                    if ($operations->isModified()) {
                        $operations->save($con);
                    }
                }
            }

            if ($this->rTvaTypesScheduledForDeletion !== null) {
                if (!$this->rTvaTypesScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    $pk = $this->getPrimaryKey();
                    foreach ($this->rTvaTypesScheduledForDeletion->getPrimaryKeys(false) as $remotePk) {
                        $pks[] = array($remotePk, $pk);
                    }
                    OperationRubriquesQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);
                    $this->rTvaTypesScheduledForDeletion = null;
                }

                foreach ($this->getRTvaTypes() as $rTvaType) {
                    if ($rTvaType->isModified()) {
                        $rTvaType->save($con);
                    }
                }
            } elseif ($this->collRTvaTypes) {
                foreach ($this->collRTvaTypes as $rTvaType) {
                    if ($rTvaType->isModified()) {
                        $rTvaType->save($con);
                    }
                }
            }

            if ($this->operationRubriquessScheduledForDeletion !== null) {
                if (!$this->operationRubriquessScheduledForDeletion->isEmpty()) {
                    OperationRubriquesQuery::create()
                        ->filterByPrimaryKeys($this->operationRubriquessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->operationRubriquessScheduledForDeletion = null;
                }
            }

            if ($this->collOperationRubriquess !== null) {
                foreach ($this->collOperationRubriquess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rRubriquessScheduledForDeletion !== null) {
                if (!$this->rRubriquessScheduledForDeletion->isEmpty()) {
                    foreach ($this->rRubriquessScheduledForDeletion as $rRubriques) {
                        // need to save related object because we set the relation to null
                        $rRubriques->save($con);
                    }
                    $this->rRubriquessScheduledForDeletion = null;
                }
            }

            if ($this->collRRubriquess !== null) {
                foreach ($this->collRRubriquess as $referrerFK) {
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

        $this->modifiedColumns[] = RRubriquesTypePeer::RUBRIQUE_TYPE_ID;
        if (null !== $this->rubrique_type_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RRubriquesTypePeer::RUBRIQUE_TYPE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RRubriquesTypePeer::RUBRIQUE_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`rubrique_type_id`';
        }
        if ($this->isColumnModified(RRubriquesTypePeer::RUBRIQUE_TYPE_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`rubrique_type_libelle`';
        }
        if ($this->isColumnModified(RRubriquesTypePeer::FRAIS_FIXE)) {
            $modifiedColumns[':p' . $index++]  = '`frais_fixe`';
        }

        $sql = sprintf(
            'INSERT INTO `r_rubriques_type` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`rubrique_type_id`':
                        $stmt->bindValue($identifier, $this->rubrique_type_id, PDO::PARAM_INT);
                        break;
                    case '`rubrique_type_libelle`':
                        $stmt->bindValue($identifier, $this->rubrique_type_libelle, PDO::PARAM_STR);
                        break;
                    case '`frais_fixe`':
                        $stmt->bindValue($identifier, (int) $this->frais_fixe, PDO::PARAM_INT);
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
        $this->setRubriqueTypeId($pk);

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


            if (($retval = RRubriquesTypePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOperationRubriquess !== null) {
                    foreach ($this->collOperationRubriquess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRRubriquess !== null) {
                    foreach ($this->collRRubriquess as $referrerFK) {
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
        $pos = RRubriquesTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRubriqueTypeId();
                break;
            case 1:
                return $this->getRubriqueTypeLibelle();
                break;
            case 2:
                return $this->getFraisFixe();
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
        if (isset($alreadyDumpedObjects['RRubriquesType'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RRubriquesType'][$this->getPrimaryKey()] = true;
        $keys = RRubriquesTypePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRubriqueTypeId(),
            $keys[1] => $this->getRubriqueTypeLibelle(),
            $keys[2] => $this->getFraisFixe(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collOperationRubriquess) {
                $result['OperationRubriquess'] = $this->collOperationRubriquess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRRubriquess) {
                $result['RRubriquess'] = $this->collRRubriquess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RRubriquesTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRubriqueTypeId($value);
                break;
            case 1:
                $this->setRubriqueTypeLibelle($value);
                break;
            case 2:
                $this->setFraisFixe($value);
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
        $keys = RRubriquesTypePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRubriqueTypeId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRubriqueTypeLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFraisFixe($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RRubriquesTypePeer::DATABASE_NAME);

        if ($this->isColumnModified(RRubriquesTypePeer::RUBRIQUE_TYPE_ID)) $criteria->add(RRubriquesTypePeer::RUBRIQUE_TYPE_ID, $this->rubrique_type_id);
        if ($this->isColumnModified(RRubriquesTypePeer::RUBRIQUE_TYPE_LIBELLE)) $criteria->add(RRubriquesTypePeer::RUBRIQUE_TYPE_LIBELLE, $this->rubrique_type_libelle);
        if ($this->isColumnModified(RRubriquesTypePeer::FRAIS_FIXE)) $criteria->add(RRubriquesTypePeer::FRAIS_FIXE, $this->frais_fixe);

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
        $criteria = new Criteria(RRubriquesTypePeer::DATABASE_NAME);
        $criteria->add(RRubriquesTypePeer::RUBRIQUE_TYPE_ID, $this->rubrique_type_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRubriqueTypeId();
    }

    /**
     * Generic method to set the primary key (rubrique_type_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRubriqueTypeId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRubriqueTypeId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RRubriquesType (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRubriqueTypeLibelle($this->getRubriqueTypeLibelle());
        $copyObj->setFraisFixe($this->getFraisFixe());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOperationRubriquess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationRubriques($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRRubriquess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRRubriques($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRubriqueTypeId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RRubriquesType Clone of current object.
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
     * @return RRubriquesTypePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RRubriquesTypePeer();
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
        if ('OperationRubriques' == $relationName) {
            $this->initOperationRubriquess();
        }
        if ('RRubriques' == $relationName) {
            $this->initRRubriquess();
        }
    }

    /**
     * Clears out the collOperationRubriquess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RRubriquesType The current object (for fluent API support)
     * @see        addOperationRubriquess()
     */
    public function clearOperationRubriquess()
    {
        $this->collOperationRubriquess = null; // important to set this to null since that means it is uninitialized
        $this->collOperationRubriquessPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationRubriquess collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationRubriquess($v = true)
    {
        $this->collOperationRubriquessPartial = $v;
    }

    /**
     * Initializes the collOperationRubriquess collection.
     *
     * By default this just sets the collOperationRubriquess collection to an empty array (like clearcollOperationRubriquess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationRubriquess($overrideExisting = true)
    {
        if (null !== $this->collOperationRubriquess && !$overrideExisting) {
            return;
        }
        $this->collOperationRubriquess = new PropelObjectCollection();
        $this->collOperationRubriquess->setModel('OperationRubriques');
    }

    /**
     * Gets an array of OperationRubriques objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RRubriquesType is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationRubriques[] List of OperationRubriques objects
     * @throws PropelException
     */
    public function getOperationRubriquess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationRubriquessPartial && !$this->isNew();
        if (null === $this->collOperationRubriquess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationRubriquess) {
                // return empty collection
                $this->initOperationRubriquess();
            } else {
                $collOperationRubriquess = OperationRubriquesQuery::create(null, $criteria)
                    ->filterByRRubriquesType($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationRubriquessPartial && count($collOperationRubriquess)) {
                      $this->initOperationRubriquess(false);

                      foreach ($collOperationRubriquess as $obj) {
                        if (false == $this->collOperationRubriquess->contains($obj)) {
                          $this->collOperationRubriquess->append($obj);
                        }
                      }

                      $this->collOperationRubriquessPartial = true;
                    }

                    $collOperationRubriquess->getInternalIterator()->rewind();

                    return $collOperationRubriquess;
                }

                if ($partial && $this->collOperationRubriquess) {
                    foreach ($this->collOperationRubriquess as $obj) {
                        if ($obj->isNew()) {
                            $collOperationRubriquess[] = $obj;
                        }
                    }
                }

                $this->collOperationRubriquess = $collOperationRubriquess;
                $this->collOperationRubriquessPartial = false;
            }
        }

        return $this->collOperationRubriquess;
    }

    /**
     * Sets a collection of OperationRubriques objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationRubriquess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function setOperationRubriquess(PropelCollection $operationRubriquess, PropelPDO $con = null)
    {
        $operationRubriquessToDelete = $this->getOperationRubriquess(new Criteria(), $con)->diff($operationRubriquess);


        $this->operationRubriquessScheduledForDeletion = $operationRubriquessToDelete;

        foreach ($operationRubriquessToDelete as $operationRubriquesRemoved) {
            $operationRubriquesRemoved->setRRubriquesType(null);
        }

        $this->collOperationRubriquess = null;
        foreach ($operationRubriquess as $operationRubriques) {
            $this->addOperationRubriques($operationRubriques);
        }

        $this->collOperationRubriquess = $operationRubriquess;
        $this->collOperationRubriquessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationRubriques objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationRubriques objects.
     * @throws PropelException
     */
    public function countOperationRubriquess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationRubriquessPartial && !$this->isNew();
        if (null === $this->collOperationRubriquess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationRubriquess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationRubriquess());
            }
            $query = OperationRubriquesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRRubriquesType($this)
                ->count($con);
        }

        return count($this->collOperationRubriquess);
    }

    /**
     * Method called to associate a OperationRubriques object to this object
     * through the OperationRubriques foreign key attribute.
     *
     * @param    OperationRubriques $l OperationRubriques
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function addOperationRubriques(OperationRubriques $l)
    {
        if ($this->collOperationRubriquess === null) {
            $this->initOperationRubriquess();
            $this->collOperationRubriquessPartial = true;
        }

        if (!in_array($l, $this->collOperationRubriquess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationRubriques($l);

            if ($this->operationRubriquessScheduledForDeletion and $this->operationRubriquessScheduledForDeletion->contains($l)) {
                $this->operationRubriquessScheduledForDeletion->remove($this->operationRubriquessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationRubriques $operationRubriques The operationRubriques object to add.
     */
    protected function doAddOperationRubriques($operationRubriques)
    {
        $this->collOperationRubriquess[]= $operationRubriques;
        $operationRubriques->setRRubriquesType($this);
    }

    /**
     * @param	OperationRubriques $operationRubriques The operationRubriques object to remove.
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function removeOperationRubriques($operationRubriques)
    {
        if ($this->getOperationRubriquess()->contains($operationRubriques)) {
            $this->collOperationRubriquess->remove($this->collOperationRubriquess->search($operationRubriques));
            if (null === $this->operationRubriquessScheduledForDeletion) {
                $this->operationRubriquessScheduledForDeletion = clone $this->collOperationRubriquess;
                $this->operationRubriquessScheduledForDeletion->clear();
            }
            $this->operationRubriquessScheduledForDeletion[]= clone $operationRubriques;
            $operationRubriques->setRRubriquesType(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RRubriquesType is new, it will return
     * an empty collection; or if this RRubriquesType has previously
     * been saved, it will retrieve related OperationRubriquess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RRubriquesType.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationRubriques[] List of OperationRubriques objects
     */
    public function getOperationRubriquessJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationRubriquesQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getOperationRubriquess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RRubriquesType is new, it will return
     * an empty collection; or if this RRubriquesType has previously
     * been saved, it will retrieve related OperationRubriquess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RRubriquesType.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationRubriques[] List of OperationRubriques objects
     */
    public function getOperationRubriquessJoinRTvaType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationRubriquesQuery::create(null, $criteria);
        $query->joinWith('RTvaType', $join_behavior);

        return $this->getOperationRubriquess($query, $con);
    }

    /**
     * Clears out the collRRubriquess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RRubriquesType The current object (for fluent API support)
     * @see        addRRubriquess()
     */
    public function clearRRubriquess()
    {
        $this->collRRubriquess = null; // important to set this to null since that means it is uninitialized
        $this->collRRubriquessPartial = null;

        return $this;
    }

    /**
     * reset is the collRRubriquess collection loaded partially
     *
     * @return void
     */
    public function resetPartialRRubriquess($v = true)
    {
        $this->collRRubriquessPartial = $v;
    }

    /**
     * Initializes the collRRubriquess collection.
     *
     * By default this just sets the collRRubriquess collection to an empty array (like clearcollRRubriquess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRRubriquess($overrideExisting = true)
    {
        if (null !== $this->collRRubriquess && !$overrideExisting) {
            return;
        }
        $this->collRRubriquess = new PropelObjectCollection();
        $this->collRRubriquess->setModel('RRubriques');
    }

    /**
     * Gets an array of RRubriques objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RRubriquesType is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|RRubriques[] List of RRubriques objects
     * @throws PropelException
     */
    public function getRRubriquess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRRubriquessPartial && !$this->isNew();
        if (null === $this->collRRubriquess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRRubriquess) {
                // return empty collection
                $this->initRRubriquess();
            } else {
                $collRRubriquess = RRubriquesQuery::create(null, $criteria)
                    ->filterByRRubriquesType($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRRubriquessPartial && count($collRRubriquess)) {
                      $this->initRRubriquess(false);

                      foreach ($collRRubriquess as $obj) {
                        if (false == $this->collRRubriquess->contains($obj)) {
                          $this->collRRubriquess->append($obj);
                        }
                      }

                      $this->collRRubriquessPartial = true;
                    }

                    $collRRubriquess->getInternalIterator()->rewind();

                    return $collRRubriquess;
                }

                if ($partial && $this->collRRubriquess) {
                    foreach ($this->collRRubriquess as $obj) {
                        if ($obj->isNew()) {
                            $collRRubriquess[] = $obj;
                        }
                    }
                }

                $this->collRRubriquess = $collRRubriquess;
                $this->collRRubriquessPartial = false;
            }
        }

        return $this->collRRubriquess;
    }

    /**
     * Sets a collection of RRubriques objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rRubriquess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function setRRubriquess(PropelCollection $rRubriquess, PropelPDO $con = null)
    {
        $rRubriquessToDelete = $this->getRRubriquess(new Criteria(), $con)->diff($rRubriquess);


        $this->rRubriquessScheduledForDeletion = $rRubriquessToDelete;

        foreach ($rRubriquessToDelete as $rRubriquesRemoved) {
            $rRubriquesRemoved->setRRubriquesType(null);
        }

        $this->collRRubriquess = null;
        foreach ($rRubriquess as $rRubriques) {
            $this->addRRubriques($rRubriques);
        }

        $this->collRRubriquess = $rRubriquess;
        $this->collRRubriquessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related RRubriques objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related RRubriques objects.
     * @throws PropelException
     */
    public function countRRubriquess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRRubriquessPartial && !$this->isNew();
        if (null === $this->collRRubriquess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRRubriquess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRRubriquess());
            }
            $query = RRubriquesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRRubriquesType($this)
                ->count($con);
        }

        return count($this->collRRubriquess);
    }

    /**
     * Method called to associate a RRubriques object to this object
     * through the RRubriques foreign key attribute.
     *
     * @param    RRubriques $l RRubriques
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function addRRubriques(RRubriques $l)
    {
        if ($this->collRRubriquess === null) {
            $this->initRRubriquess();
            $this->collRRubriquessPartial = true;
        }

        if (!in_array($l, $this->collRRubriquess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRRubriques($l);

            if ($this->rRubriquessScheduledForDeletion and $this->rRubriquessScheduledForDeletion->contains($l)) {
                $this->rRubriquessScheduledForDeletion->remove($this->rRubriquessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RRubriques $rRubriques The rRubriques object to add.
     */
    protected function doAddRRubriques($rRubriques)
    {
        $this->collRRubriquess[]= $rRubriques;
        $rRubriques->setRRubriquesType($this);
    }

    /**
     * @param	RRubriques $rRubriques The rRubriques object to remove.
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function removeRRubriques($rRubriques)
    {
        if ($this->getRRubriquess()->contains($rRubriques)) {
            $this->collRRubriquess->remove($this->collRRubriquess->search($rRubriques));
            if (null === $this->rRubriquessScheduledForDeletion) {
                $this->rRubriquessScheduledForDeletion = clone $this->collRRubriquess;
                $this->rRubriquessScheduledForDeletion->clear();
            }
            $this->rRubriquessScheduledForDeletion[]= $rRubriques;
            $rRubriques->setRRubriquesType(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RRubriquesType is new, it will return
     * an empty collection; or if this RRubriquesType has previously
     * been saved, it will retrieve related RRubriquess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RRubriquesType.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RRubriques[] List of RRubriques objects
     */
    public function getRRubriquessJoinRTvaType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RRubriquesQuery::create(null, $criteria);
        $query->joinWith('RTvaType', $join_behavior);

        return $this->getRRubriquess($query, $con);
    }

    /**
     * Clears out the collOperationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RRubriquesType The current object (for fluent API support)
     * @see        addOperationss()
     */
    public function clearOperationss()
    {
        $this->collOperationss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationssPartial = null;

        return $this;
    }

    /**
     * Initializes the collOperationss collection.
     *
     * By default this just sets the collOperationss collection to an empty collection (like clearOperationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initOperationss()
    {
        $this->collOperationss = new PropelObjectCollection();
        $this->collOperationss->setModel('Operations');
    }

    /**
     * Gets a collection of Operations objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RRubriquesType is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param PropelPDO $con Optional connection object
     *
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationss($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collOperationss || null !== $criteria) {
            if ($this->isNew() && null === $this->collOperationss) {
                // return empty collection
                $this->initOperationss();
            } else {
                $collOperationss = OperationsQuery::create(null, $criteria)
                    ->filterByRRubriquesType($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collOperationss;
                }
                $this->collOperationss = $collOperationss;
            }
        }

        return $this->collOperationss;
    }

    /**
     * Sets a collection of Operations objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function setOperationss(PropelCollection $operationss, PropelPDO $con = null)
    {
        $this->clearOperationss();
        $currentOperationss = $this->getOperationss(null, $con);

        $this->operationssScheduledForDeletion = $currentOperationss->diff($operationss);

        foreach ($operationss as $operations) {
            if (!$currentOperationss->contains($operations)) {
                $this->doAddOperations($operations);
            }
        }

        $this->collOperationss = $operationss;

        return $this;
    }

    /**
     * Gets the number of Operations objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param boolean $distinct Set to true to force count distinct
     * @param PropelPDO $con Optional connection object
     *
     * @return int the number of related Operations objects
     */
    public function countOperationss($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collOperationss || null !== $criteria) {
            if ($this->isNew() && null === $this->collOperationss) {
                return 0;
            } else {
                $query = OperationsQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByRRubriquesType($this)
                    ->count($con);
            }
        } else {
            return count($this->collOperationss);
        }
    }

    /**
     * Associate a Operations object to this object
     * through the operation_rubriques cross reference table.
     *
     * @param  Operations $operations The OperationRubriques object to relate
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function addOperations(Operations $operations)
    {
        if ($this->collOperationss === null) {
            $this->initOperationss();
        }

        if (!$this->collOperationss->contains($operations)) { // only add it if the **same** object is not already associated
            $this->doAddOperations($operations);
            $this->collOperationss[] = $operations;

            if ($this->operationssScheduledForDeletion and $this->operationssScheduledForDeletion->contains($operations)) {
                $this->operationssScheduledForDeletion->remove($this->operationssScheduledForDeletion->search($operations));
            }
        }

        return $this;
    }

    /**
     * @param	Operations $operations The operations object to add.
     */
    protected function doAddOperations(Operations $operations)
    {
        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$operations->getRRubriquesTypes()->contains($this)) { $operationRubriques = new OperationRubriques();
            $operationRubriques->setOperations($operations);
            $this->addOperationRubriques($operationRubriques);

            $foreignCollection = $operations->getRRubriquesTypes();
            $foreignCollection[] = $this;
        }
    }

    /**
     * Remove a Operations object to this object
     * through the operation_rubriques cross reference table.
     *
     * @param Operations $operations The OperationRubriques object to relate
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function removeOperations(Operations $operations)
    {
        if ($this->getOperationss()->contains($operations)) {
            $this->collOperationss->remove($this->collOperationss->search($operations));
            if (null === $this->operationssScheduledForDeletion) {
                $this->operationssScheduledForDeletion = clone $this->collOperationss;
                $this->operationssScheduledForDeletion->clear();
            }
            $this->operationssScheduledForDeletion[]= $operations;
        }

        return $this;
    }

    /**
     * Clears out the collRTvaTypes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RRubriquesType The current object (for fluent API support)
     * @see        addRTvaTypes()
     */
    public function clearRTvaTypes()
    {
        $this->collRTvaTypes = null; // important to set this to null since that means it is uninitialized
        $this->collRTvaTypesPartial = null;

        return $this;
    }

    /**
     * Initializes the collRTvaTypes collection.
     *
     * By default this just sets the collRTvaTypes collection to an empty collection (like clearRTvaTypes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initRTvaTypes()
    {
        $this->collRTvaTypes = new PropelObjectCollection();
        $this->collRTvaTypes->setModel('RTvaType');
    }

    /**
     * Gets a collection of RTvaType objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RRubriquesType is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param PropelPDO $con Optional connection object
     *
     * @return PropelObjectCollection|RTvaType[] List of RTvaType objects
     */
    public function getRTvaTypes($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collRTvaTypes || null !== $criteria) {
            if ($this->isNew() && null === $this->collRTvaTypes) {
                // return empty collection
                $this->initRTvaTypes();
            } else {
                $collRTvaTypes = RTvaTypeQuery::create(null, $criteria)
                    ->filterByRRubriquesType($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collRTvaTypes;
                }
                $this->collRTvaTypes = $collRTvaTypes;
            }
        }

        return $this->collRTvaTypes;
    }

    /**
     * Sets a collection of RTvaType objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rTvaTypes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function setRTvaTypes(PropelCollection $rTvaTypes, PropelPDO $con = null)
    {
        $this->clearRTvaTypes();
        $currentRTvaTypes = $this->getRTvaTypes(null, $con);

        $this->rTvaTypesScheduledForDeletion = $currentRTvaTypes->diff($rTvaTypes);

        foreach ($rTvaTypes as $rTvaType) {
            if (!$currentRTvaTypes->contains($rTvaType)) {
                $this->doAddRTvaType($rTvaType);
            }
        }

        $this->collRTvaTypes = $rTvaTypes;

        return $this;
    }

    /**
     * Gets the number of RTvaType objects related by a many-to-many relationship
     * to the current object by way of the operation_rubriques cross-reference table.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param boolean $distinct Set to true to force count distinct
     * @param PropelPDO $con Optional connection object
     *
     * @return int the number of related RTvaType objects
     */
    public function countRTvaTypes($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collRTvaTypes || null !== $criteria) {
            if ($this->isNew() && null === $this->collRTvaTypes) {
                return 0;
            } else {
                $query = RTvaTypeQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByRRubriquesType($this)
                    ->count($con);
            }
        } else {
            return count($this->collRTvaTypes);
        }
    }

    /**
     * Associate a RTvaType object to this object
     * through the operation_rubriques cross reference table.
     *
     * @param  RTvaType $rTvaType The OperationRubriques object to relate
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function addRTvaType(RTvaType $rTvaType)
    {
        if ($this->collRTvaTypes === null) {
            $this->initRTvaTypes();
        }

        if (!$this->collRTvaTypes->contains($rTvaType)) { // only add it if the **same** object is not already associated
            $this->doAddRTvaType($rTvaType);
            $this->collRTvaTypes[] = $rTvaType;

            if ($this->rTvaTypesScheduledForDeletion and $this->rTvaTypesScheduledForDeletion->contains($rTvaType)) {
                $this->rTvaTypesScheduledForDeletion->remove($this->rTvaTypesScheduledForDeletion->search($rTvaType));
            }
        }

        return $this;
    }

    /**
     * @param	RTvaType $rTvaType The rTvaType object to add.
     */
    protected function doAddRTvaType(RTvaType $rTvaType)
    {
        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$rTvaType->getRRubriquesTypes()->contains($this)) { $operationRubriques = new OperationRubriques();
            $operationRubriques->setRTvaType($rTvaType);
            $this->addOperationRubriques($operationRubriques);

            $foreignCollection = $rTvaType->getRRubriquesTypes();
            $foreignCollection[] = $this;
        }
    }

    /**
     * Remove a RTvaType object to this object
     * through the operation_rubriques cross reference table.
     *
     * @param RTvaType $rTvaType The OperationRubriques object to relate
     * @return RRubriquesType The current object (for fluent API support)
     */
    public function removeRTvaType(RTvaType $rTvaType)
    {
        if ($this->getRTvaTypes()->contains($rTvaType)) {
            $this->collRTvaTypes->remove($this->collRTvaTypes->search($rTvaType));
            if (null === $this->rTvaTypesScheduledForDeletion) {
                $this->rTvaTypesScheduledForDeletion = clone $this->collRTvaTypes;
                $this->rTvaTypesScheduledForDeletion->clear();
            }
            $this->rTvaTypesScheduledForDeletion[]= $rTvaType;
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->rubrique_type_id = null;
        $this->rubrique_type_libelle = null;
        $this->frais_fixe = null;
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
            if ($this->collOperationRubriquess) {
                foreach ($this->collOperationRubriquess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRRubriquess) {
                foreach ($this->collRRubriquess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationss) {
                foreach ($this->collOperationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRTvaTypes) {
                foreach ($this->collRTvaTypes as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOperationRubriquess instanceof PropelCollection) {
            $this->collOperationRubriquess->clearIterator();
        }
        $this->collOperationRubriquess = null;
        if ($this->collRRubriquess instanceof PropelCollection) {
            $this->collRRubriquess->clearIterator();
        }
        $this->collRRubriquess = null;
        if ($this->collOperationss instanceof PropelCollection) {
            $this->collOperationss->clearIterator();
        }
        $this->collOperationss = null;
        if ($this->collRTvaTypes instanceof PropelCollection) {
            $this->collRTvaTypes->clearIterator();
        }
        $this->collRTvaTypes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RRubriquesTypePeer::DEFAULT_STRING_FORMAT);
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
                return BaseRRubriquesTypePeer::getConnection();
            }
}
