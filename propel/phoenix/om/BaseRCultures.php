<?php


/**
 * Base class that represents a row from the 'r_cultures' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRCultures extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RCulturesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RCulturesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_culture_id field.
     * @var        int
     */
    protected $r_culture_id;

    /**
     * The value for the r_culture_code field.
     * @var        string
     */
    protected $r_culture_code;

    /**
     * The value for the r_culture_label field.
     * @var        string
     */
    protected $r_culture_label;

    /**
     * The value for the r_culture_language_code field.
     * @var        string
     */
    protected $r_culture_language_code;

    /**
     * The value for the r_culture_actif field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $r_culture_actif;

    /**
     * @var        RLanguages
     */
    protected $aRLanguages;

    /**
     * @var        PropelObjectCollection|LnkRCountryRCultures[] Collection to store aggregation of LnkRCountryRCultures objects.
     */
    protected $collLnkRCountryRCulturess;
    protected $collLnkRCountryRCulturessPartial;

    /**
     * @var        PropelObjectCollection|ROperationTypeSubTplCultures[] Collection to store aggregation of ROperationTypeSubTplCultures objects.
     */
    protected $collROperationTypeSubTplCulturess;
    protected $collROperationTypeSubTplCulturessPartial;

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
    protected $lnkRCountryRCulturessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationTypeSubTplCulturessScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->r_culture_actif = 1;
    }

    /**
     * Initializes internal state of BaseRCultures object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [r_culture_id] column value.
     *
     * @return int
     */
    public function getRCultureId()
    {

        return $this->r_culture_id;
    }

    /**
     * Get the [r_culture_code] column value.
     *
     * @return string
     */
    public function getRCultureCode()
    {

        return $this->r_culture_code;
    }

    /**
     * Get the [r_culture_label] column value.
     *
     * @return string
     */
    public function getRCultureLabel()
    {

        return $this->r_culture_label;
    }

    /**
     * Get the [r_culture_language_code] column value.
     *
     * @return string
     */
    public function getRCultureLanguageCode()
    {

        return $this->r_culture_language_code;
    }

    /**
     * Get the [r_culture_actif] column value.
     *
     * @return int
     */
    public function getRCultureActif()
    {

        return $this->r_culture_actif;
    }

    /**
     * Set the value of [r_culture_id] column.
     *
     * @param  int $v new value
     * @return RCultures The current object (for fluent API support)
     */
    public function setRCultureId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_culture_id !== $v) {
                    $this->r_culture_id = $v;
                    $this->modifiedColumns[] = RCulturesPeer::R_CULTURE_ID;
                }


        return $this;
    } // setRCultureId()

    /**
     * Set the value of [r_culture_code] column.
     *
     * @param  string $v new value
     * @return RCultures The current object (for fluent API support)
     */
    public function setRCultureCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_culture_code !== $v) {
            $this->r_culture_code = $v;
            $this->modifiedColumns[] = RCulturesPeer::R_CULTURE_CODE;
        }


        return $this;
    } // setRCultureCode()

    /**
     * Set the value of [r_culture_label] column.
     *
     * @param  string $v new value
     * @return RCultures The current object (for fluent API support)
     */
    public function setRCultureLabel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_culture_label !== $v) {
            $this->r_culture_label = $v;
            $this->modifiedColumns[] = RCulturesPeer::R_CULTURE_LABEL;
        }


        return $this;
    } // setRCultureLabel()

    /**
     * Set the value of [r_culture_language_code] column.
     *
     * @param  string $v new value
     * @return RCultures The current object (for fluent API support)
     */
    public function setRCultureLanguageCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_culture_language_code !== $v) {
            $this->r_culture_language_code = $v;
            $this->modifiedColumns[] = RCulturesPeer::R_CULTURE_LANGUAGE_CODE;
        }

        if ($this->aRLanguages !== null && $this->aRLanguages->getRLangCode() !== $v) {
            $this->aRLanguages = null;
        }


        return $this;
    } // setRCultureLanguageCode()

    /**
     * Set the value of [r_culture_actif] column.
     *
     * @param  int $v new value
     * @return RCultures The current object (for fluent API support)
     */
    public function setRCultureActif($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_culture_actif !== $v) {
                    $this->r_culture_actif = $v;
                    $this->modifiedColumns[] = RCulturesPeer::R_CULTURE_ACTIF;
                }


        return $this;
    } // setRCultureActif()

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
            if ($this->r_culture_actif !== 1) {
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

            $this->r_culture_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_culture_code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_culture_label = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->r_culture_language_code = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->r_culture_actif = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = RCulturesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RCultures object", $e);
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

        if ($this->aRLanguages !== null && $this->r_culture_language_code !== $this->aRLanguages->getRLangCode()) {
            $this->aRLanguages = null;
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
            $con = Propel::getConnection(RCulturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RCulturesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRLanguages = null;
            $this->collLnkRCountryRCulturess = null;

            $this->collROperationTypeSubTplCulturess = null;

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
            $con = Propel::getConnection(RCulturesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RCulturesQuery::create()
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
            $con = Propel::getConnection(RCulturesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RCulturesPeer::addInstanceToPool($this);
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

            if ($this->aRLanguages !== null) {
                if ($this->aRLanguages->isModified() || $this->aRLanguages->isNew()) {
                    $affectedRows += $this->aRLanguages->save($con);
                }
                $this->setRLanguages($this->aRLanguages);
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

            if ($this->lnkRCountryRCulturessScheduledForDeletion !== null) {
                if (!$this->lnkRCountryRCulturessScheduledForDeletion->isEmpty()) {
                    foreach ($this->lnkRCountryRCulturessScheduledForDeletion as $lnkRCountryRCultures) {
                        // need to save related object because we set the relation to null
                        $lnkRCountryRCultures->save($con);
                    }
                    $this->lnkRCountryRCulturessScheduledForDeletion = null;
                }
            }

            if ($this->collLnkRCountryRCulturess !== null) {
                foreach ($this->collLnkRCountryRCulturess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rOperationTypeSubTplCulturessScheduledForDeletion !== null) {
                if (!$this->rOperationTypeSubTplCulturessScheduledForDeletion->isEmpty()) {
                    foreach ($this->rOperationTypeSubTplCulturessScheduledForDeletion as $rOperationTypeSubTplCultures) {
                        // need to save related object because we set the relation to null
                        $rOperationTypeSubTplCultures->save($con);
                    }
                    $this->rOperationTypeSubTplCulturessScheduledForDeletion = null;
                }
            }

            if ($this->collROperationTypeSubTplCulturess !== null) {
                foreach ($this->collROperationTypeSubTplCulturess as $referrerFK) {
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

        $this->modifiedColumns[] = RCulturesPeer::R_CULTURE_ID;
        if (null !== $this->r_culture_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RCulturesPeer::R_CULTURE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RCulturesPeer::R_CULTURE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_culture_id`';
        }
        if ($this->isColumnModified(RCulturesPeer::R_CULTURE_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`r_culture_code`';
        }
        if ($this->isColumnModified(RCulturesPeer::R_CULTURE_LABEL)) {
            $modifiedColumns[':p' . $index++]  = '`r_culture_label`';
        }
        if ($this->isColumnModified(RCulturesPeer::R_CULTURE_LANGUAGE_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`r_culture_language_code`';
        }
        if ($this->isColumnModified(RCulturesPeer::R_CULTURE_ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`r_culture_actif`';
        }

        $sql = sprintf(
            'INSERT INTO `r_cultures` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_culture_id`':
                        $stmt->bindValue($identifier, $this->r_culture_id, PDO::PARAM_INT);
                        break;
                    case '`r_culture_code`':
                        $stmt->bindValue($identifier, $this->r_culture_code, PDO::PARAM_STR);
                        break;
                    case '`r_culture_label`':
                        $stmt->bindValue($identifier, $this->r_culture_label, PDO::PARAM_STR);
                        break;
                    case '`r_culture_language_code`':
                        $stmt->bindValue($identifier, $this->r_culture_language_code, PDO::PARAM_STR);
                        break;
                    case '`r_culture_actif`':
                        $stmt->bindValue($identifier, $this->r_culture_actif, PDO::PARAM_INT);
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
        $this->setRCultureId($pk);

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

            if ($this->aRLanguages !== null) {
                if (!$this->aRLanguages->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRLanguages->getValidationFailures());
                }
            }


            if (($retval = RCulturesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collLnkRCountryRCulturess !== null) {
                    foreach ($this->collLnkRCountryRCulturess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collROperationTypeSubTplCulturess !== null) {
                    foreach ($this->collROperationTypeSubTplCulturess as $referrerFK) {
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
        $pos = RCulturesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRCultureId();
                break;
            case 1:
                return $this->getRCultureCode();
                break;
            case 2:
                return $this->getRCultureLabel();
                break;
            case 3:
                return $this->getRCultureLanguageCode();
                break;
            case 4:
                return $this->getRCultureActif();
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
        if (isset($alreadyDumpedObjects['RCultures'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RCultures'][$this->getPrimaryKey()] = true;
        $keys = RCulturesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRCultureId(),
            $keys[1] => $this->getRCultureCode(),
            $keys[2] => $this->getRCultureLabel(),
            $keys[3] => $this->getRCultureLanguageCode(),
            $keys[4] => $this->getRCultureActif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRLanguages) {
                $result['RLanguages'] = $this->aRLanguages->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collLnkRCountryRCulturess) {
                $result['LnkRCountryRCulturess'] = $this->collLnkRCountryRCulturess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationTypeSubTplCulturess) {
                $result['ROperationTypeSubTplCulturess'] = $this->collROperationTypeSubTplCulturess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RCulturesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRCultureId($value);
                break;
            case 1:
                $this->setRCultureCode($value);
                break;
            case 2:
                $this->setRCultureLabel($value);
                break;
            case 3:
                $this->setRCultureLanguageCode($value);
                break;
            case 4:
                $this->setRCultureActif($value);
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
        $keys = RCulturesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRCultureId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRCultureCode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRCultureLabel($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRCultureLanguageCode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRCultureActif($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RCulturesPeer::DATABASE_NAME);

        if ($this->isColumnModified(RCulturesPeer::R_CULTURE_ID)) $criteria->add(RCulturesPeer::R_CULTURE_ID, $this->r_culture_id);
        if ($this->isColumnModified(RCulturesPeer::R_CULTURE_CODE)) $criteria->add(RCulturesPeer::R_CULTURE_CODE, $this->r_culture_code);
        if ($this->isColumnModified(RCulturesPeer::R_CULTURE_LABEL)) $criteria->add(RCulturesPeer::R_CULTURE_LABEL, $this->r_culture_label);
        if ($this->isColumnModified(RCulturesPeer::R_CULTURE_LANGUAGE_CODE)) $criteria->add(RCulturesPeer::R_CULTURE_LANGUAGE_CODE, $this->r_culture_language_code);
        if ($this->isColumnModified(RCulturesPeer::R_CULTURE_ACTIF)) $criteria->add(RCulturesPeer::R_CULTURE_ACTIF, $this->r_culture_actif);

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
        $criteria = new Criteria(RCulturesPeer::DATABASE_NAME);
        $criteria->add(RCulturesPeer::R_CULTURE_ID, $this->r_culture_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRCultureId();
    }

    /**
     * Generic method to set the primary key (r_culture_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRCultureId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRCultureId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RCultures (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRCultureCode($this->getRCultureCode());
        $copyObj->setRCultureLabel($this->getRCultureLabel());
        $copyObj->setRCultureLanguageCode($this->getRCultureLanguageCode());
        $copyObj->setRCultureActif($this->getRCultureActif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getLnkRCountryRCulturess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkRCountryRCultures($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationTypeSubTplCulturess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeSubTplCultures($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRCultureId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RCultures Clone of current object.
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
     * @return RCulturesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RCulturesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a RLanguages object.
     *
     * @param                  RLanguages $v
     * @return RCultures The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRLanguages(RLanguages $v = null)
    {
        if ($v === null) {
            $this->setRCultureLanguageCode(NULL);
        } else {
            $this->setRCultureLanguageCode($v->getRLangCode());
        }

        $this->aRLanguages = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RLanguages object, it will not be re-added.
        if ($v !== null) {
            $v->addRCultures($this);
        }


        return $this;
    }


    /**
     * Get the associated RLanguages object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RLanguages The associated RLanguages object.
     * @throws PropelException
     */
    public function getRLanguages(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRLanguages === null && (($this->r_culture_language_code !== "" && $this->r_culture_language_code !== null)) && $doQuery) {
            $this->aRLanguages = RLanguagesQuery::create()->findPk($this->r_culture_language_code, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRLanguages->addRCulturess($this);
             */
        }

        return $this->aRLanguages;
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
        if ('LnkRCountryRCultures' == $relationName) {
            $this->initLnkRCountryRCulturess();
        }
        if ('ROperationTypeSubTplCultures' == $relationName) {
            $this->initROperationTypeSubTplCulturess();
        }
    }

    /**
     * Clears out the collLnkRCountryRCulturess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RCultures The current object (for fluent API support)
     * @see        addLnkRCountryRCulturess()
     */
    public function clearLnkRCountryRCulturess()
    {
        $this->collLnkRCountryRCulturess = null; // important to set this to null since that means it is uninitialized
        $this->collLnkRCountryRCulturessPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkRCountryRCulturess collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkRCountryRCulturess($v = true)
    {
        $this->collLnkRCountryRCulturessPartial = $v;
    }

    /**
     * Initializes the collLnkRCountryRCulturess collection.
     *
     * By default this just sets the collLnkRCountryRCulturess collection to an empty array (like clearcollLnkRCountryRCulturess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkRCountryRCulturess($overrideExisting = true)
    {
        if (null !== $this->collLnkRCountryRCulturess && !$overrideExisting) {
            return;
        }
        $this->collLnkRCountryRCulturess = new PropelObjectCollection();
        $this->collLnkRCountryRCulturess->setModel('LnkRCountryRCultures');
    }

    /**
     * Gets an array of LnkRCountryRCultures objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RCultures is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkRCountryRCultures[] List of LnkRCountryRCultures objects
     * @throws PropelException
     */
    public function getLnkRCountryRCulturess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkRCountryRCulturessPartial && !$this->isNew();
        if (null === $this->collLnkRCountryRCulturess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkRCountryRCulturess) {
                // return empty collection
                $this->initLnkRCountryRCulturess();
            } else {
                $collLnkRCountryRCulturess = LnkRCountryRCulturesQuery::create(null, $criteria)
                    ->filterByRCultures($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkRCountryRCulturessPartial && count($collLnkRCountryRCulturess)) {
                      $this->initLnkRCountryRCulturess(false);

                      foreach ($collLnkRCountryRCulturess as $obj) {
                        if (false == $this->collLnkRCountryRCulturess->contains($obj)) {
                          $this->collLnkRCountryRCulturess->append($obj);
                        }
                      }

                      $this->collLnkRCountryRCulturessPartial = true;
                    }

                    $collLnkRCountryRCulturess->getInternalIterator()->rewind();

                    return $collLnkRCountryRCulturess;
                }

                if ($partial && $this->collLnkRCountryRCulturess) {
                    foreach ($this->collLnkRCountryRCulturess as $obj) {
                        if ($obj->isNew()) {
                            $collLnkRCountryRCulturess[] = $obj;
                        }
                    }
                }

                $this->collLnkRCountryRCulturess = $collLnkRCountryRCulturess;
                $this->collLnkRCountryRCulturessPartial = false;
            }
        }

        return $this->collLnkRCountryRCulturess;
    }

    /**
     * Sets a collection of LnkRCountryRCultures objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkRCountryRCulturess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RCultures The current object (for fluent API support)
     */
    public function setLnkRCountryRCulturess(PropelCollection $lnkRCountryRCulturess, PropelPDO $con = null)
    {
        $lnkRCountryRCulturessToDelete = $this->getLnkRCountryRCulturess(new Criteria(), $con)->diff($lnkRCountryRCulturess);


        $this->lnkRCountryRCulturessScheduledForDeletion = $lnkRCountryRCulturessToDelete;

        foreach ($lnkRCountryRCulturessToDelete as $lnkRCountryRCulturesRemoved) {
            $lnkRCountryRCulturesRemoved->setRCultures(null);
        }

        $this->collLnkRCountryRCulturess = null;
        foreach ($lnkRCountryRCulturess as $lnkRCountryRCultures) {
            $this->addLnkRCountryRCultures($lnkRCountryRCultures);
        }

        $this->collLnkRCountryRCulturess = $lnkRCountryRCulturess;
        $this->collLnkRCountryRCulturessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkRCountryRCultures objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkRCountryRCultures objects.
     * @throws PropelException
     */
    public function countLnkRCountryRCulturess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkRCountryRCulturessPartial && !$this->isNew();
        if (null === $this->collLnkRCountryRCulturess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkRCountryRCulturess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkRCountryRCulturess());
            }
            $query = LnkRCountryRCulturesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRCultures($this)
                ->count($con);
        }

        return count($this->collLnkRCountryRCulturess);
    }

    /**
     * Method called to associate a LnkRCountryRCultures object to this object
     * through the LnkRCountryRCultures foreign key attribute.
     *
     * @param    LnkRCountryRCultures $l LnkRCountryRCultures
     * @return RCultures The current object (for fluent API support)
     */
    public function addLnkRCountryRCultures(LnkRCountryRCultures $l)
    {
        if ($this->collLnkRCountryRCulturess === null) {
            $this->initLnkRCountryRCulturess();
            $this->collLnkRCountryRCulturessPartial = true;
        }

        if (!in_array($l, $this->collLnkRCountryRCulturess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkRCountryRCultures($l);

            if ($this->lnkRCountryRCulturessScheduledForDeletion and $this->lnkRCountryRCulturessScheduledForDeletion->contains($l)) {
                $this->lnkRCountryRCulturessScheduledForDeletion->remove($this->lnkRCountryRCulturessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkRCountryRCultures $lnkRCountryRCultures The lnkRCountryRCultures object to add.
     */
    protected function doAddLnkRCountryRCultures($lnkRCountryRCultures)
    {
        $this->collLnkRCountryRCulturess[]= $lnkRCountryRCultures;
        $lnkRCountryRCultures->setRCultures($this);
    }

    /**
     * @param	LnkRCountryRCultures $lnkRCountryRCultures The lnkRCountryRCultures object to remove.
     * @return RCultures The current object (for fluent API support)
     */
    public function removeLnkRCountryRCultures($lnkRCountryRCultures)
    {
        if ($this->getLnkRCountryRCulturess()->contains($lnkRCountryRCultures)) {
            $this->collLnkRCountryRCulturess->remove($this->collLnkRCountryRCulturess->search($lnkRCountryRCultures));
            if (null === $this->lnkRCountryRCulturessScheduledForDeletion) {
                $this->lnkRCountryRCulturessScheduledForDeletion = clone $this->collLnkRCountryRCulturess;
                $this->lnkRCountryRCulturessScheduledForDeletion->clear();
            }
            $this->lnkRCountryRCulturessScheduledForDeletion[]= $lnkRCountryRCultures;
            $lnkRCountryRCultures->setRCultures(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RCultures is new, it will return
     * an empty collection; or if this RCultures has previously
     * been saved, it will retrieve related LnkRCountryRCulturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RCultures.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkRCountryRCultures[] List of LnkRCountryRCultures objects
     */
    public function getLnkRCountryRCulturessJoinRCountries($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkRCountryRCulturesQuery::create(null, $criteria);
        $query->joinWith('RCountries', $join_behavior);

        return $this->getLnkRCountryRCulturess($query, $con);
    }

    /**
     * Clears out the collROperationTypeSubTplCulturess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RCultures The current object (for fluent API support)
     * @see        addROperationTypeSubTplCulturess()
     */
    public function clearROperationTypeSubTplCulturess()
    {
        $this->collROperationTypeSubTplCulturess = null; // important to set this to null since that means it is uninitialized
        $this->collROperationTypeSubTplCulturessPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationTypeSubTplCulturess collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationTypeSubTplCulturess($v = true)
    {
        $this->collROperationTypeSubTplCulturessPartial = $v;
    }

    /**
     * Initializes the collROperationTypeSubTplCulturess collection.
     *
     * By default this just sets the collROperationTypeSubTplCulturess collection to an empty array (like clearcollROperationTypeSubTplCulturess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationTypeSubTplCulturess($overrideExisting = true)
    {
        if (null !== $this->collROperationTypeSubTplCulturess && !$overrideExisting) {
            return;
        }
        $this->collROperationTypeSubTplCulturess = new PropelObjectCollection();
        $this->collROperationTypeSubTplCulturess->setModel('ROperationTypeSubTplCultures');
    }

    /**
     * Gets an array of ROperationTypeSubTplCultures objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RCultures is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationTypeSubTplCultures[] List of ROperationTypeSubTplCultures objects
     * @throws PropelException
     */
    public function getROperationTypeSubTplCulturess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplCulturessPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplCulturess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplCulturess) {
                // return empty collection
                $this->initROperationTypeSubTplCulturess();
            } else {
                $collROperationTypeSubTplCulturess = ROperationTypeSubTplCulturesQuery::create(null, $criteria)
                    ->filterByRCultures($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationTypeSubTplCulturessPartial && count($collROperationTypeSubTplCulturess)) {
                      $this->initROperationTypeSubTplCulturess(false);

                      foreach ($collROperationTypeSubTplCulturess as $obj) {
                        if (false == $this->collROperationTypeSubTplCulturess->contains($obj)) {
                          $this->collROperationTypeSubTplCulturess->append($obj);
                        }
                      }

                      $this->collROperationTypeSubTplCulturessPartial = true;
                    }

                    $collROperationTypeSubTplCulturess->getInternalIterator()->rewind();

                    return $collROperationTypeSubTplCulturess;
                }

                if ($partial && $this->collROperationTypeSubTplCulturess) {
                    foreach ($this->collROperationTypeSubTplCulturess as $obj) {
                        if ($obj->isNew()) {
                            $collROperationTypeSubTplCulturess[] = $obj;
                        }
                    }
                }

                $this->collROperationTypeSubTplCulturess = $collROperationTypeSubTplCulturess;
                $this->collROperationTypeSubTplCulturessPartial = false;
            }
        }

        return $this->collROperationTypeSubTplCulturess;
    }

    /**
     * Sets a collection of ROperationTypeSubTplCultures objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationTypeSubTplCulturess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RCultures The current object (for fluent API support)
     */
    public function setROperationTypeSubTplCulturess(PropelCollection $rOperationTypeSubTplCulturess, PropelPDO $con = null)
    {
        $rOperationTypeSubTplCulturessToDelete = $this->getROperationTypeSubTplCulturess(new Criteria(), $con)->diff($rOperationTypeSubTplCulturess);


        $this->rOperationTypeSubTplCulturessScheduledForDeletion = $rOperationTypeSubTplCulturessToDelete;

        foreach ($rOperationTypeSubTplCulturessToDelete as $rOperationTypeSubTplCulturesRemoved) {
            $rOperationTypeSubTplCulturesRemoved->setRCultures(null);
        }

        $this->collROperationTypeSubTplCulturess = null;
        foreach ($rOperationTypeSubTplCulturess as $rOperationTypeSubTplCultures) {
            $this->addROperationTypeSubTplCultures($rOperationTypeSubTplCultures);
        }

        $this->collROperationTypeSubTplCulturess = $rOperationTypeSubTplCulturess;
        $this->collROperationTypeSubTplCulturessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationTypeSubTplCultures objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationTypeSubTplCultures objects.
     * @throws PropelException
     */
    public function countROperationTypeSubTplCulturess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplCulturessPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplCulturess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplCulturess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationTypeSubTplCulturess());
            }
            $query = ROperationTypeSubTplCulturesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRCultures($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplCulturess);
    }

    /**
     * Method called to associate a ROperationTypeSubTplCultures object to this object
     * through the ROperationTypeSubTplCultures foreign key attribute.
     *
     * @param    ROperationTypeSubTplCultures $l ROperationTypeSubTplCultures
     * @return RCultures The current object (for fluent API support)
     */
    public function addROperationTypeSubTplCultures(ROperationTypeSubTplCultures $l)
    {
        if ($this->collROperationTypeSubTplCulturess === null) {
            $this->initROperationTypeSubTplCulturess();
            $this->collROperationTypeSubTplCulturessPartial = true;
        }

        if (!in_array($l, $this->collROperationTypeSubTplCulturess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationTypeSubTplCultures($l);

            if ($this->rOperationTypeSubTplCulturessScheduledForDeletion and $this->rOperationTypeSubTplCulturessScheduledForDeletion->contains($l)) {
                $this->rOperationTypeSubTplCulturessScheduledForDeletion->remove($this->rOperationTypeSubTplCulturessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationTypeSubTplCultures $rOperationTypeSubTplCultures The rOperationTypeSubTplCultures object to add.
     */
    protected function doAddROperationTypeSubTplCultures($rOperationTypeSubTplCultures)
    {
        $this->collROperationTypeSubTplCulturess[]= $rOperationTypeSubTplCultures;
        $rOperationTypeSubTplCultures->setRCultures($this);
    }

    /**
     * @param	ROperationTypeSubTplCultures $rOperationTypeSubTplCultures The rOperationTypeSubTplCultures object to remove.
     * @return RCultures The current object (for fluent API support)
     */
    public function removeROperationTypeSubTplCultures($rOperationTypeSubTplCultures)
    {
        if ($this->getROperationTypeSubTplCulturess()->contains($rOperationTypeSubTplCultures)) {
            $this->collROperationTypeSubTplCulturess->remove($this->collROperationTypeSubTplCulturess->search($rOperationTypeSubTplCultures));
            if (null === $this->rOperationTypeSubTplCulturessScheduledForDeletion) {
                $this->rOperationTypeSubTplCulturessScheduledForDeletion = clone $this->collROperationTypeSubTplCulturess;
                $this->rOperationTypeSubTplCulturessScheduledForDeletion->clear();
            }
            $this->rOperationTypeSubTplCulturessScheduledForDeletion[]= $rOperationTypeSubTplCultures;
            $rOperationTypeSubTplCultures->setRCultures(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RCultures is new, it will return
     * an empty collection; or if this RCultures has previously
     * been saved, it will retrieve related ROperationTypeSubTplCulturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RCultures.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeSubTplCultures[] List of ROperationTypeSubTplCultures objects
     */
    public function getROperationTypeSubTplCulturessJoinROperationTypeSubTpl($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeSubTplCulturesQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSubTpl', $join_behavior);

        return $this->getROperationTypeSubTplCulturess($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_culture_id = null;
        $this->r_culture_code = null;
        $this->r_culture_label = null;
        $this->r_culture_language_code = null;
        $this->r_culture_actif = null;
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
            if ($this->collLnkRCountryRCulturess) {
                foreach ($this->collLnkRCountryRCulturess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeSubTplCulturess) {
                foreach ($this->collROperationTypeSubTplCulturess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aRLanguages instanceof Persistent) {
              $this->aRLanguages->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collLnkRCountryRCulturess instanceof PropelCollection) {
            $this->collLnkRCountryRCulturess->clearIterator();
        }
        $this->collLnkRCountryRCulturess = null;
        if ($this->collROperationTypeSubTplCulturess instanceof PropelCollection) {
            $this->collROperationTypeSubTplCulturess->clearIterator();
        }
        $this->collROperationTypeSubTplCulturess = null;
        $this->aRLanguages = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RCulturesPeer::DEFAULT_STRING_FORMAT);
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
      0 => 'r_culture_code',
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
                            $this->addValidationFailed('Ce code de culture existe déjà.', $aColumns[0]);
                        } else {
                            $this->addValidationFailed('Ce code de culture existe déjà.', 'error');
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
                return BaseRCulturesPeer::getConnection();
            }
}
