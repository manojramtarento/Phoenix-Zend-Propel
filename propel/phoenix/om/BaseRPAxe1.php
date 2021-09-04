<?php


/**
 * Base class that represents a row from the 'r_p_axe1' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPAxe1 extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RPAxe1Peer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RPAxe1Peer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_p_axe1_id field.
     * @var        int
     */
    protected $r_p_axe1_id;

    /**
     * The value for the r_p_axe1_tag field.
     * @var        string
     */
    protected $r_p_axe1_tag;

    /**
     * The value for the r_p_axe1_libelle field.
     * @var        string
     */
    protected $r_p_axe1_libelle;

    /**
     * The value for the r_activity_kpi_id field.
     * @var        int
     */
    protected $r_activity_kpi_id;

    /**
     * The value for the r_p_axe1_actif field.
     * @var        boolean
     */
    protected $r_p_axe1_actif;

    /**
     * @var        RActivityKpi
     */
    protected $aKpiActivity;

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
    protected $rPrestationssScheduledForDeletion = null;

    /**
     * Get the [r_p_axe1_id] column value.
     *
     * @return int
     */
    public function getRPAxe1Id()
    {

        return $this->r_p_axe1_id;
    }

    /**
     * Get the [r_p_axe1_tag] column value.
     *
     * @return string
     */
    public function getRPAxe1Tag()
    {

        return $this->r_p_axe1_tag;
    }

    /**
     * Get the [r_p_axe1_libelle] column value.
     *
     * @return string
     */
    public function getRPAxe1Libelle()
    {

        return $this->r_p_axe1_libelle;
    }

    /**
     * Get the [r_activity_kpi_id] column value.
     *
     * @return int
     */
    public function getRActivityKpiId()
    {

        return $this->r_activity_kpi_id;
    }

    /**
     * Get the [r_p_axe1_actif] column value.
     *
     * @return boolean
     */
    public function getRPAxe1Actif()
    {

        return $this->r_p_axe1_actif;
    }

    /**
     * Set the value of [r_p_axe1_id] column.
     *
     * @param  int $v new value
     * @return RPAxe1 The current object (for fluent API support)
     */
    public function setRPAxe1Id($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_p_axe1_id !== $v) {
                    $this->r_p_axe1_id = $v;
                    $this->modifiedColumns[] = RPAxe1Peer::R_P_AXE1_ID;
                }


        return $this;
    } // setRPAxe1Id()

    /**
     * Set the value of [r_p_axe1_tag] column.
     *
     * @param  string $v new value
     * @return RPAxe1 The current object (for fluent API support)
     */
    public function setRPAxe1Tag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_axe1_tag !== $v) {
            $this->r_p_axe1_tag = $v;
            $this->modifiedColumns[] = RPAxe1Peer::R_P_AXE1_TAG;
        }


        return $this;
    } // setRPAxe1Tag()

    /**
     * Set the value of [r_p_axe1_libelle] column.
     *
     * @param  string $v new value
     * @return RPAxe1 The current object (for fluent API support)
     */
    public function setRPAxe1Libelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_axe1_libelle !== $v) {
            $this->r_p_axe1_libelle = $v;
            $this->modifiedColumns[] = RPAxe1Peer::R_P_AXE1_LIBELLE;
        }


        return $this;
    } // setRPAxe1Libelle()

    /**
     * Set the value of [r_activity_kpi_id] column.
     *
     * @param  int $v new value
     * @return RPAxe1 The current object (for fluent API support)
     */
    public function setRActivityKpiId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_activity_kpi_id !== $v) {
                    $this->r_activity_kpi_id = $v;
                    $this->modifiedColumns[] = RPAxe1Peer::R_ACTIVITY_KPI_ID;
                }

        if ($this->aKpiActivity !== null && $this->aKpiActivity->getRActivityKpiId() !== $v) {
            $this->aKpiActivity = null;
        }


        return $this;
    } // setRActivityKpiId()

    /**
     * Sets the value of the [r_p_axe1_actif] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RPAxe1 The current object (for fluent API support)
     */
    public function setRPAxe1Actif($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_p_axe1_actif !== $v) {
            $this->r_p_axe1_actif = $v;
            $this->modifiedColumns[] = RPAxe1Peer::R_P_AXE1_ACTIF;
        }


        return $this;
    } // setRPAxe1Actif()

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

            $this->r_p_axe1_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_p_axe1_tag = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_p_axe1_libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->r_activity_kpi_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->r_p_axe1_actif = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = RPAxe1Peer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RPAxe1 object", $e);
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

        if ($this->aKpiActivity !== null && $this->r_activity_kpi_id !== $this->aKpiActivity->getRActivityKpiId()) {
            $this->aKpiActivity = null;
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
            $con = Propel::getConnection(RPAxe1Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RPAxe1Peer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aKpiActivity = null;
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
            $con = Propel::getConnection(RPAxe1Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RPAxe1Query::create()
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
            $con = Propel::getConnection(RPAxe1Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RPAxe1Peer::addInstanceToPool($this);
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

            if ($this->aKpiActivity !== null) {
                if ($this->aKpiActivity->isModified() || $this->aKpiActivity->isNew()) {
                    $affectedRows += $this->aKpiActivity->save($con);
                }
                $this->setKpiActivity($this->aKpiActivity);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RPAxe1Peer::R_P_AXE1_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe1_id`';
        }
        if ($this->isColumnModified(RPAxe1Peer::R_P_AXE1_TAG)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe1_tag`';
        }
        if ($this->isColumnModified(RPAxe1Peer::R_P_AXE1_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe1_libelle`';
        }
        if ($this->isColumnModified(RPAxe1Peer::R_ACTIVITY_KPI_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_activity_kpi_id`';
        }
        if ($this->isColumnModified(RPAxe1Peer::R_P_AXE1_ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe1_actif`';
        }

        $sql = sprintf(
            'INSERT INTO `r_p_axe1` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_p_axe1_id`':
                        $stmt->bindValue($identifier, $this->r_p_axe1_id, PDO::PARAM_INT);
                        break;
                    case '`r_p_axe1_tag`':
                        $stmt->bindValue($identifier, $this->r_p_axe1_tag, PDO::PARAM_STR);
                        break;
                    case '`r_p_axe1_libelle`':
                        $stmt->bindValue($identifier, $this->r_p_axe1_libelle, PDO::PARAM_STR);
                        break;
                    case '`r_activity_kpi_id`':
                        $stmt->bindValue($identifier, $this->r_activity_kpi_id, PDO::PARAM_INT);
                        break;
                    case '`r_p_axe1_actif`':
                        $stmt->bindValue($identifier, (int) $this->r_p_axe1_actif, PDO::PARAM_INT);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aKpiActivity !== null) {
                if (!$this->aKpiActivity->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aKpiActivity->getValidationFailures());
                }
            }


            if (($retval = RPAxe1Peer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = RPAxe1Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRPAxe1Id();
                break;
            case 1:
                return $this->getRPAxe1Tag();
                break;
            case 2:
                return $this->getRPAxe1Libelle();
                break;
            case 3:
                return $this->getRActivityKpiId();
                break;
            case 4:
                return $this->getRPAxe1Actif();
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
        if (isset($alreadyDumpedObjects['RPAxe1'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RPAxe1'][$this->getPrimaryKey()] = true;
        $keys = RPAxe1Peer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRPAxe1Id(),
            $keys[1] => $this->getRPAxe1Tag(),
            $keys[2] => $this->getRPAxe1Libelle(),
            $keys[3] => $this->getRActivityKpiId(),
            $keys[4] => $this->getRPAxe1Actif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aKpiActivity) {
                $result['KpiActivity'] = $this->aKpiActivity->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = RPAxe1Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRPAxe1Id($value);
                break;
            case 1:
                $this->setRPAxe1Tag($value);
                break;
            case 2:
                $this->setRPAxe1Libelle($value);
                break;
            case 3:
                $this->setRActivityKpiId($value);
                break;
            case 4:
                $this->setRPAxe1Actif($value);
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
        $keys = RPAxe1Peer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRPAxe1Id($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRPAxe1Tag($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRPAxe1Libelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRActivityKpiId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRPAxe1Actif($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RPAxe1Peer::DATABASE_NAME);

        if ($this->isColumnModified(RPAxe1Peer::R_P_AXE1_ID)) $criteria->add(RPAxe1Peer::R_P_AXE1_ID, $this->r_p_axe1_id);
        if ($this->isColumnModified(RPAxe1Peer::R_P_AXE1_TAG)) $criteria->add(RPAxe1Peer::R_P_AXE1_TAG, $this->r_p_axe1_tag);
        if ($this->isColumnModified(RPAxe1Peer::R_P_AXE1_LIBELLE)) $criteria->add(RPAxe1Peer::R_P_AXE1_LIBELLE, $this->r_p_axe1_libelle);
        if ($this->isColumnModified(RPAxe1Peer::R_ACTIVITY_KPI_ID)) $criteria->add(RPAxe1Peer::R_ACTIVITY_KPI_ID, $this->r_activity_kpi_id);
        if ($this->isColumnModified(RPAxe1Peer::R_P_AXE1_ACTIF)) $criteria->add(RPAxe1Peer::R_P_AXE1_ACTIF, $this->r_p_axe1_actif);

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
        $criteria = new Criteria(RPAxe1Peer::DATABASE_NAME);
        $criteria->add(RPAxe1Peer::R_P_AXE1_ID, $this->r_p_axe1_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRPAxe1Id();
    }

    /**
     * Generic method to set the primary key (r_p_axe1_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRPAxe1Id($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRPAxe1Id();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RPAxe1 (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRPAxe1Tag($this->getRPAxe1Tag());
        $copyObj->setRPAxe1Libelle($this->getRPAxe1Libelle());
        $copyObj->setRActivityKpiId($this->getRActivityKpiId());
        $copyObj->setRPAxe1Actif($this->getRPAxe1Actif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
            $copyObj->setRPAxe1Id(NULL); // this is a auto-increment column, so set to default value
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
     * @return RPAxe1 Clone of current object.
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
     * @return RPAxe1Peer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RPAxe1Peer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a RActivityKpi object.
     *
     * @param                  RActivityKpi $v
     * @return RPAxe1 The current object (for fluent API support)
     * @throws PropelException
     */
    public function setKpiActivity(RActivityKpi $v = null)
    {
        if ($v === null) {
            $this->setRActivityKpiId(NULL);
        } else {
            $this->setRActivityKpiId($v->getRActivityKpiId());
        }

        $this->aKpiActivity = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RActivityKpi object, it will not be re-added.
        if ($v !== null) {
            $v->addRPAxe1($this);
        }


        return $this;
    }


    /**
     * Get the associated RActivityKpi object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RActivityKpi The associated RActivityKpi object.
     * @throws PropelException
     */
    public function getKpiActivity(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aKpiActivity === null && ($this->r_activity_kpi_id !== null) && $doQuery) {
            $this->aKpiActivity = RActivityKpiQuery::create()->findPk($this->r_activity_kpi_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aKpiActivity->addRPAxe1s($this);
             */
        }

        return $this->aKpiActivity;
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
        if ('RPrestations' == $relationName) {
            $this->initRPrestationss();
        }
    }

    /**
     * Clears out the collRPrestationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RPAxe1 The current object (for fluent API support)
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
     * If this RPAxe1 is new, it will return
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
                    ->filterByAxe1($this)
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
     * @return RPAxe1 The current object (for fluent API support)
     */
    public function setRPrestationss(PropelCollection $rPrestationss, PropelPDO $con = null)
    {
        $rPrestationssToDelete = $this->getRPrestationss(new Criteria(), $con)->diff($rPrestationss);


        $this->rPrestationssScheduledForDeletion = $rPrestationssToDelete;

        foreach ($rPrestationssToDelete as $rPrestationsRemoved) {
            $rPrestationsRemoved->setAxe1(null);
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
                ->filterByAxe1($this)
                ->count($con);
        }

        return count($this->collRPrestationss);
    }

    /**
     * Method called to associate a RPrestations object to this object
     * through the RPrestations foreign key attribute.
     *
     * @param    RPrestations $l RPrestations
     * @return RPAxe1 The current object (for fluent API support)
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
        $rPrestations->setAxe1($this);
    }

    /**
     * @param	RPrestations $rPrestations The rPrestations object to remove.
     * @return RPAxe1 The current object (for fluent API support)
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
            $rPrestations->setAxe1(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RPAxe1 is new, it will return
     * an empty collection; or if this RPAxe1 has previously
     * been saved, it will retrieve related RPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPAxe1.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RPrestations[] List of RPrestations objects
     */
    public function getRPrestationssJoinGroupValidation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RPrestationsQuery::create(null, $criteria);
        $query->joinWith('GroupValidation', $join_behavior);

        return $this->getRPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RPAxe1 is new, it will return
     * an empty collection; or if this RPAxe1 has previously
     * been saved, it will retrieve related RPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPAxe1.
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
     * Otherwise if this RPAxe1 is new, it will return
     * an empty collection; or if this RPAxe1 has previously
     * been saved, it will retrieve related RPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPAxe1.
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
     * Otherwise if this RPAxe1 is new, it will return
     * an empty collection; or if this RPAxe1 has previously
     * been saved, it will retrieve related RPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPAxe1.
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
     * Otherwise if this RPAxe1 is new, it will return
     * an empty collection; or if this RPAxe1 has previously
     * been saved, it will retrieve related RPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPAxe1.
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
        $this->r_p_axe1_id = null;
        $this->r_p_axe1_tag = null;
        $this->r_p_axe1_libelle = null;
        $this->r_activity_kpi_id = null;
        $this->r_p_axe1_actif = null;
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
            if ($this->collRPrestationss) {
                foreach ($this->collRPrestationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aKpiActivity instanceof Persistent) {
              $this->aKpiActivity->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collRPrestationss instanceof PropelCollection) {
            $this->collRPrestationss->clearIterator();
        }
        $this->collRPrestationss = null;
        $this->aKpiActivity = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RPAxe1Peer::DEFAULT_STRING_FORMAT);
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
                return BaseRPAxe1Peer::getConnection();
            }
}
