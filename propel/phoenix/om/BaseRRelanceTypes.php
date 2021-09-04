<?php


/**
 * Base class that represents a row from the 'r_relance_types' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRRelanceTypes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RRelanceTypesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RRelanceTypesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_rel_type_id field.
     * @var        int
     */
    protected $r_rel_type_id;

    /**
     * The value for the r_rel_type_libelle field.
     * @var        string
     */
    protected $r_rel_type_libelle;

    /**
     * The value for the r_rel_type_libelle_en field.
     * @var        string
     */
    protected $r_rel_type_libelle_en;

    /**
     * The value for the r_rel_type_lettre_recommandee field.
     * @var        boolean
     */
    protected $r_rel_type_lettre_recommandee;

    /**
     * The value for the actif field.
     * @var        int
     */
    protected $actif;

    /**
     * @var        PropelObjectCollection|Relances[] Collection to store aggregation of Relances objects.
     */
    protected $collRelancess;
    protected $collRelancessPartial;

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
    protected $relancessScheduledForDeletion = null;

    /**
     * Get the [r_rel_type_id] column value.
     *
     * @return int
     */
    public function getRRelTypeId()
    {

        return $this->r_rel_type_id;
    }

    /**
     * Get the [r_rel_type_libelle] column value.
     *
     * @return string
     */
    public function getRRelTypeLibelle()
    {

        return $this->r_rel_type_libelle;
    }

    /**
     * Get the [r_rel_type_libelle_en] column value.
     *
     * @return string
     */
    public function getRRelTypeLibelleEn()
    {

        return $this->r_rel_type_libelle_en;
    }

    /**
     * Get the [r_rel_type_lettre_recommandee] column value.
     *
     * @return boolean
     */
    public function getRRelTypeLettreRecommandee()
    {

        return $this->r_rel_type_lettre_recommandee;
    }

    /**
     * Get the [actif] column value.
     *
     * @return int
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Set the value of [r_rel_type_id] column.
     *
     * @param  int $v new value
     * @return RRelanceTypes The current object (for fluent API support)
     */
    public function setRRelTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_rel_type_id !== $v) {
                    $this->r_rel_type_id = $v;
                    $this->modifiedColumns[] = RRelanceTypesPeer::R_REL_TYPE_ID;
                }


        return $this;
    } // setRRelTypeId()

    /**
     * Set the value of [r_rel_type_libelle] column.
     *
     * @param  string $v new value
     * @return RRelanceTypes The current object (for fluent API support)
     */
    public function setRRelTypeLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_rel_type_libelle !== $v) {
            $this->r_rel_type_libelle = $v;
            $this->modifiedColumns[] = RRelanceTypesPeer::R_REL_TYPE_LIBELLE;
        }


        return $this;
    } // setRRelTypeLibelle()

    /**
     * Set the value of [r_rel_type_libelle_en] column.
     *
     * @param  string $v new value
     * @return RRelanceTypes The current object (for fluent API support)
     */
    public function setRRelTypeLibelleEn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_rel_type_libelle_en !== $v) {
            $this->r_rel_type_libelle_en = $v;
            $this->modifiedColumns[] = RRelanceTypesPeer::R_REL_TYPE_LIBELLE_EN;
        }


        return $this;
    } // setRRelTypeLibelleEn()

    /**
     * Sets the value of the [r_rel_type_lettre_recommandee] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RRelanceTypes The current object (for fluent API support)
     */
    public function setRRelTypeLettreRecommandee($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_rel_type_lettre_recommandee !== $v) {
            $this->r_rel_type_lettre_recommandee = $v;
            $this->modifiedColumns[] = RRelanceTypesPeer::R_REL_TYPE_LETTRE_RECOMMANDEE;
        }


        return $this;
    } // setRRelTypeLettreRecommandee()

    /**
     * Set the value of [actif] column.
     *
     * @param  int $v new value
     * @return RRelanceTypes The current object (for fluent API support)
     */
    public function setActif($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->actif !== $v) {
                    $this->actif = $v;
                    $this->modifiedColumns[] = RRelanceTypesPeer::ACTIF;
                }


        return $this;
    } // setActif()

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

            $this->r_rel_type_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_rel_type_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_rel_type_libelle_en = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->r_rel_type_lettre_recommandee = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->actif = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = RRelanceTypesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RRelanceTypes object", $e);
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
            $con = Propel::getConnection(RRelanceTypesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RRelanceTypesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collRelancess = null;

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
            $con = Propel::getConnection(RRelanceTypesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RRelanceTypesQuery::create()
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
            $con = Propel::getConnection(RRelanceTypesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setActif(1);

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
                RRelanceTypesPeer::addInstanceToPool($this);
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

            if ($this->relancessScheduledForDeletion !== null) {
                if (!$this->relancessScheduledForDeletion->isEmpty()) {
                    foreach ($this->relancessScheduledForDeletion as $relances) {
                        // need to save related object because we set the relation to null
                        $relances->save($con);
                    }
                    $this->relancessScheduledForDeletion = null;
                }
            }

            if ($this->collRelancess !== null) {
                foreach ($this->collRelancess as $referrerFK) {
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

        $this->modifiedColumns[] = RRelanceTypesPeer::R_REL_TYPE_ID;
        if (null !== $this->r_rel_type_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RRelanceTypesPeer::R_REL_TYPE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RRelanceTypesPeer::R_REL_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_rel_type_id`';
        }
        if ($this->isColumnModified(RRelanceTypesPeer::R_REL_TYPE_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_rel_type_libelle`';
        }
        if ($this->isColumnModified(RRelanceTypesPeer::R_REL_TYPE_LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`r_rel_type_libelle_en`';
        }
        if ($this->isColumnModified(RRelanceTypesPeer::R_REL_TYPE_LETTRE_RECOMMANDEE)) {
            $modifiedColumns[':p' . $index++]  = '`r_rel_type_lettre_recommandee`';
        }
        if ($this->isColumnModified(RRelanceTypesPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }

        $sql = sprintf(
            'INSERT INTO `r_relance_types` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_rel_type_id`':
                        $stmt->bindValue($identifier, $this->r_rel_type_id, PDO::PARAM_INT);
                        break;
                    case '`r_rel_type_libelle`':
                        $stmt->bindValue($identifier, $this->r_rel_type_libelle, PDO::PARAM_STR);
                        break;
                    case '`r_rel_type_libelle_en`':
                        $stmt->bindValue($identifier, $this->r_rel_type_libelle_en, PDO::PARAM_STR);
                        break;
                    case '`r_rel_type_lettre_recommandee`':
                        $stmt->bindValue($identifier, (int) $this->r_rel_type_lettre_recommandee, PDO::PARAM_INT);
                        break;
                    case '`actif`':
                        $stmt->bindValue($identifier, $this->actif, PDO::PARAM_INT);
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
        $this->setRRelTypeId($pk);

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


            if (($retval = RRelanceTypesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collRelancess !== null) {
                    foreach ($this->collRelancess as $referrerFK) {
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
        $pos = RRelanceTypesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRRelTypeId();
                break;
            case 1:
                return $this->getRRelTypeLibelle();
                break;
            case 2:
                return $this->getRRelTypeLibelleEn();
                break;
            case 3:
                return $this->getRRelTypeLettreRecommandee();
                break;
            case 4:
                return $this->getActif();
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
        if (isset($alreadyDumpedObjects['RRelanceTypes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RRelanceTypes'][$this->getPrimaryKey()] = true;
        $keys = RRelanceTypesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRRelTypeId(),
            $keys[1] => $this->getRRelTypeLibelle(),
            $keys[2] => $this->getRRelTypeLibelleEn(),
            $keys[3] => $this->getRRelTypeLettreRecommandee(),
            $keys[4] => $this->getActif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collRelancess) {
                $result['Relancess'] = $this->collRelancess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RRelanceTypesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRRelTypeId($value);
                break;
            case 1:
                $this->setRRelTypeLibelle($value);
                break;
            case 2:
                $this->setRRelTypeLibelleEn($value);
                break;
            case 3:
                $this->setRRelTypeLettreRecommandee($value);
                break;
            case 4:
                $this->setActif($value);
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
        $keys = RRelanceTypesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRRelTypeId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRRelTypeLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRRelTypeLibelleEn($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRRelTypeLettreRecommandee($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setActif($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RRelanceTypesPeer::DATABASE_NAME);

        if ($this->isColumnModified(RRelanceTypesPeer::R_REL_TYPE_ID)) $criteria->add(RRelanceTypesPeer::R_REL_TYPE_ID, $this->r_rel_type_id);
        if ($this->isColumnModified(RRelanceTypesPeer::R_REL_TYPE_LIBELLE)) $criteria->add(RRelanceTypesPeer::R_REL_TYPE_LIBELLE, $this->r_rel_type_libelle);
        if ($this->isColumnModified(RRelanceTypesPeer::R_REL_TYPE_LIBELLE_EN)) $criteria->add(RRelanceTypesPeer::R_REL_TYPE_LIBELLE_EN, $this->r_rel_type_libelle_en);
        if ($this->isColumnModified(RRelanceTypesPeer::R_REL_TYPE_LETTRE_RECOMMANDEE)) $criteria->add(RRelanceTypesPeer::R_REL_TYPE_LETTRE_RECOMMANDEE, $this->r_rel_type_lettre_recommandee);
        if ($this->isColumnModified(RRelanceTypesPeer::ACTIF)) $criteria->add(RRelanceTypesPeer::ACTIF, $this->actif);

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
        $criteria = new Criteria(RRelanceTypesPeer::DATABASE_NAME);
        $criteria->add(RRelanceTypesPeer::R_REL_TYPE_ID, $this->r_rel_type_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRRelTypeId();
    }

    /**
     * Generic method to set the primary key (r_rel_type_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRRelTypeId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRRelTypeId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RRelanceTypes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRRelTypeLibelle($this->getRRelTypeLibelle());
        $copyObj->setRRelTypeLibelleEn($this->getRRelTypeLibelleEn());
        $copyObj->setRRelTypeLettreRecommandee($this->getRRelTypeLettreRecommandee());
        $copyObj->setActif($this->getActif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getRelancess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRelances($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRRelTypeId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RRelanceTypes Clone of current object.
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
     * @return RRelanceTypesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RRelanceTypesPeer();
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
        if ('Relances' == $relationName) {
            $this->initRelancess();
        }
    }

    /**
     * Clears out the collRelancess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RRelanceTypes The current object (for fluent API support)
     * @see        addRelancess()
     */
    public function clearRelancess()
    {
        $this->collRelancess = null; // important to set this to null since that means it is uninitialized
        $this->collRelancessPartial = null;

        return $this;
    }

    /**
     * reset is the collRelancess collection loaded partially
     *
     * @return void
     */
    public function resetPartialRelancess($v = true)
    {
        $this->collRelancessPartial = $v;
    }

    /**
     * Initializes the collRelancess collection.
     *
     * By default this just sets the collRelancess collection to an empty array (like clearcollRelancess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRelancess($overrideExisting = true)
    {
        if (null !== $this->collRelancess && !$overrideExisting) {
            return;
        }
        $this->collRelancess = new PropelObjectCollection();
        $this->collRelancess->setModel('Relances');
    }

    /**
     * Gets an array of Relances objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RRelanceTypes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Relances[] List of Relances objects
     * @throws PropelException
     */
    public function getRelancess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRelancessPartial && !$this->isNew();
        if (null === $this->collRelancess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRelancess) {
                // return empty collection
                $this->initRelancess();
            } else {
                $collRelancess = RelancesQuery::create(null, $criteria)
                    ->filterByRRelanceTypes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRelancessPartial && count($collRelancess)) {
                      $this->initRelancess(false);

                      foreach ($collRelancess as $obj) {
                        if (false == $this->collRelancess->contains($obj)) {
                          $this->collRelancess->append($obj);
                        }
                      }

                      $this->collRelancessPartial = true;
                    }

                    $collRelancess->getInternalIterator()->rewind();

                    return $collRelancess;
                }

                if ($partial && $this->collRelancess) {
                    foreach ($this->collRelancess as $obj) {
                        if ($obj->isNew()) {
                            $collRelancess[] = $obj;
                        }
                    }
                }

                $this->collRelancess = $collRelancess;
                $this->collRelancessPartial = false;
            }
        }

        return $this->collRelancess;
    }

    /**
     * Sets a collection of Relances objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $relancess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RRelanceTypes The current object (for fluent API support)
     */
    public function setRelancess(PropelCollection $relancess, PropelPDO $con = null)
    {
        $relancessToDelete = $this->getRelancess(new Criteria(), $con)->diff($relancess);


        $this->relancessScheduledForDeletion = $relancessToDelete;

        foreach ($relancessToDelete as $relancesRemoved) {
            $relancesRemoved->setRRelanceTypes(null);
        }

        $this->collRelancess = null;
        foreach ($relancess as $relances) {
            $this->addRelances($relances);
        }

        $this->collRelancess = $relancess;
        $this->collRelancessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Relances objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Relances objects.
     * @throws PropelException
     */
    public function countRelancess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRelancessPartial && !$this->isNew();
        if (null === $this->collRelancess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRelancess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRelancess());
            }
            $query = RelancesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRRelanceTypes($this)
                ->count($con);
        }

        return count($this->collRelancess);
    }

    /**
     * Method called to associate a Relances object to this object
     * through the Relances foreign key attribute.
     *
     * @param    Relances $l Relances
     * @return RRelanceTypes The current object (for fluent API support)
     */
    public function addRelances(Relances $l)
    {
        if ($this->collRelancess === null) {
            $this->initRelancess();
            $this->collRelancessPartial = true;
        }

        if (!in_array($l, $this->collRelancess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRelances($l);

            if ($this->relancessScheduledForDeletion and $this->relancessScheduledForDeletion->contains($l)) {
                $this->relancessScheduledForDeletion->remove($this->relancessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Relances $relances The relances object to add.
     */
    protected function doAddRelances($relances)
    {
        $this->collRelancess[]= $relances;
        $relances->setRRelanceTypes($this);
    }

    /**
     * @param	Relances $relances The relances object to remove.
     * @return RRelanceTypes The current object (for fluent API support)
     */
    public function removeRelances($relances)
    {
        if ($this->getRelancess()->contains($relances)) {
            $this->collRelancess->remove($this->collRelancess->search($relances));
            if (null === $this->relancessScheduledForDeletion) {
                $this->relancessScheduledForDeletion = clone $this->collRelancess;
                $this->relancessScheduledForDeletion->clear();
            }
            $this->relancessScheduledForDeletion[]= $relances;
            $relances->setRRelanceTypes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RRelanceTypes is new, it will return
     * an empty collection; or if this RRelanceTypes has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RRelanceTypes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getRelancess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RRelanceTypes is new, it will return
     * an empty collection; or if this RRelanceTypes has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RRelanceTypes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinRRelanceStatuts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('RRelanceStatuts', $join_behavior);

        return $this->getRelancess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RRelanceTypes is new, it will return
     * an empty collection; or if this RRelanceTypes has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RRelanceTypes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getRelancess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RRelanceTypes is new, it will return
     * an empty collection; or if this RRelanceTypes has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RRelanceTypes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getRelancess($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_rel_type_id = null;
        $this->r_rel_type_libelle = null;
        $this->r_rel_type_libelle_en = null;
        $this->r_rel_type_lettre_recommandee = null;
        $this->actif = null;
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
            if ($this->collRelancess) {
                foreach ($this->collRelancess as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collRelancess instanceof PropelCollection) {
            $this->collRelancess->clearIterator();
        }
        $this->collRelancess = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RRelanceTypesPeer::DEFAULT_STRING_FORMAT);
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
                return BaseRRelanceTypesPeer::getConnection();
            }
}
