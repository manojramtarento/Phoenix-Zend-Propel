<?php


/**
 * Base class that represents a row from the 'r_countries_calling_codes' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRCountriesCallingCodes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RCountriesCallingCodesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RCountriesCallingCodesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_country_calling_code_id field.
     * @var        int
     */
    protected $r_country_calling_code_id;

    /**
     * The value for the r_country_calling_code field.
     * @var        string
     */
    protected $r_country_calling_code;

    /**
     * The value for the r_country_calling_code_actif field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $r_country_calling_code_actif;

    /**
     * @var        PropelObjectCollection|RCountries[] Collection to store aggregation of RCountries objects.
     */
    protected $collRCountriess;
    protected $collRCountriessPartial;

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
    protected $rCountriessScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->r_country_calling_code_actif = 1;
    }

    /**
     * Initializes internal state of BaseRCountriesCallingCodes object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [r_country_calling_code_id] column value.
     *
     * @return int
     */
    public function getRCountryCallingCodeId()
    {

        return $this->r_country_calling_code_id;
    }

    /**
     * Get the [r_country_calling_code] column value.
     *
     * @return string
     */
    public function getRCountryCallingCode()
    {

        return $this->r_country_calling_code;
    }

    /**
     * Get the [r_country_calling_code_actif] column value.
     *
     * @return int
     */
    public function getRCountryCallingCodeActif()
    {

        return $this->r_country_calling_code_actif;
    }

    /**
     * Set the value of [r_country_calling_code_id] column.
     *
     * @param  int $v new value
     * @return RCountriesCallingCodes The current object (for fluent API support)
     */
    public function setRCountryCallingCodeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_country_calling_code_id !== $v) {
                    $this->r_country_calling_code_id = $v;
                    $this->modifiedColumns[] = RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID;
                }


        return $this;
    } // setRCountryCallingCodeId()

    /**
     * Set the value of [r_country_calling_code] column.
     *
     * @param  string $v new value
     * @return RCountriesCallingCodes The current object (for fluent API support)
     */
    public function setRCountryCallingCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_country_calling_code !== $v) {
            $this->r_country_calling_code = $v;
            $this->modifiedColumns[] = RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE;
        }


        return $this;
    } // setRCountryCallingCode()

    /**
     * Set the value of [r_country_calling_code_actif] column.
     *
     * @param  int $v new value
     * @return RCountriesCallingCodes The current object (for fluent API support)
     */
    public function setRCountryCallingCodeActif($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_country_calling_code_actif !== $v) {
                    $this->r_country_calling_code_actif = $v;
                    $this->modifiedColumns[] = RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ACTIF;
                }


        return $this;
    } // setRCountryCallingCodeActif()

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
            if ($this->r_country_calling_code_actif !== 1) {
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

            $this->r_country_calling_code_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_country_calling_code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_country_calling_code_actif = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = RCountriesCallingCodesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RCountriesCallingCodes object", $e);
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
            $con = Propel::getConnection(RCountriesCallingCodesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RCountriesCallingCodesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collRCountriess = null;

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
            $con = Propel::getConnection(RCountriesCallingCodesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RCountriesCallingCodesQuery::create()
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
            $con = Propel::getConnection(RCountriesCallingCodesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RCountriesCallingCodesPeer::addInstanceToPool($this);
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

            if ($this->rCountriessScheduledForDeletion !== null) {
                if (!$this->rCountriessScheduledForDeletion->isEmpty()) {
                    foreach ($this->rCountriessScheduledForDeletion as $rCountries) {
                        // need to save related object because we set the relation to null
                        $rCountries->save($con);
                    }
                    $this->rCountriessScheduledForDeletion = null;
                }
            }

            if ($this->collRCountriess !== null) {
                foreach ($this->collRCountriess as $referrerFK) {
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

        $this->modifiedColumns[] = RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID;
        if (null !== $this->r_country_calling_code_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_country_calling_code_id`';
        }
        if ($this->isColumnModified(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`r_country_calling_code`';
        }
        if ($this->isColumnModified(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`r_country_calling_code_actif`';
        }

        $sql = sprintf(
            'INSERT INTO `r_countries_calling_codes` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_country_calling_code_id`':
                        $stmt->bindValue($identifier, $this->r_country_calling_code_id, PDO::PARAM_INT);
                        break;
                    case '`r_country_calling_code`':
                        $stmt->bindValue($identifier, $this->r_country_calling_code, PDO::PARAM_STR);
                        break;
                    case '`r_country_calling_code_actif`':
                        $stmt->bindValue($identifier, $this->r_country_calling_code_actif, PDO::PARAM_INT);
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
        $this->setRCountryCallingCodeId($pk);

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


            if (($retval = RCountriesCallingCodesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collRCountriess !== null) {
                    foreach ($this->collRCountriess as $referrerFK) {
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
        $pos = RCountriesCallingCodesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRCountryCallingCodeId();
                break;
            case 1:
                return $this->getRCountryCallingCode();
                break;
            case 2:
                return $this->getRCountryCallingCodeActif();
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
        if (isset($alreadyDumpedObjects['RCountriesCallingCodes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RCountriesCallingCodes'][$this->getPrimaryKey()] = true;
        $keys = RCountriesCallingCodesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRCountryCallingCodeId(),
            $keys[1] => $this->getRCountryCallingCode(),
            $keys[2] => $this->getRCountryCallingCodeActif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collRCountriess) {
                $result['RCountriess'] = $this->collRCountriess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RCountriesCallingCodesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRCountryCallingCodeId($value);
                break;
            case 1:
                $this->setRCountryCallingCode($value);
                break;
            case 2:
                $this->setRCountryCallingCodeActif($value);
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
        $keys = RCountriesCallingCodesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRCountryCallingCodeId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRCountryCallingCode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRCountryCallingCodeActif($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RCountriesCallingCodesPeer::DATABASE_NAME);

        if ($this->isColumnModified(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID)) $criteria->add(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID, $this->r_country_calling_code_id);
        if ($this->isColumnModified(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE)) $criteria->add(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE, $this->r_country_calling_code);
        if ($this->isColumnModified(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ACTIF)) $criteria->add(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ACTIF, $this->r_country_calling_code_actif);

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
        $criteria = new Criteria(RCountriesCallingCodesPeer::DATABASE_NAME);
        $criteria->add(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID, $this->r_country_calling_code_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRCountryCallingCodeId();
    }

    /**
     * Generic method to set the primary key (r_country_calling_code_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRCountryCallingCodeId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRCountryCallingCodeId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RCountriesCallingCodes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRCountryCallingCode($this->getRCountryCallingCode());
        $copyObj->setRCountryCallingCodeActif($this->getRCountryCallingCodeActif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getRCountriess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRCountries($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRCountryCallingCodeId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RCountriesCallingCodes Clone of current object.
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
     * @return RCountriesCallingCodesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RCountriesCallingCodesPeer();
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
        if ('RCountries' == $relationName) {
            $this->initRCountriess();
        }
    }

    /**
     * Clears out the collRCountriess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RCountriesCallingCodes The current object (for fluent API support)
     * @see        addRCountriess()
     */
    public function clearRCountriess()
    {
        $this->collRCountriess = null; // important to set this to null since that means it is uninitialized
        $this->collRCountriessPartial = null;

        return $this;
    }

    /**
     * reset is the collRCountriess collection loaded partially
     *
     * @return void
     */
    public function resetPartialRCountriess($v = true)
    {
        $this->collRCountriessPartial = $v;
    }

    /**
     * Initializes the collRCountriess collection.
     *
     * By default this just sets the collRCountriess collection to an empty array (like clearcollRCountriess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRCountriess($overrideExisting = true)
    {
        if (null !== $this->collRCountriess && !$overrideExisting) {
            return;
        }
        $this->collRCountriess = new PropelObjectCollection();
        $this->collRCountriess->setModel('RCountries');
    }

    /**
     * Gets an array of RCountries objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RCountriesCallingCodes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|RCountries[] List of RCountries objects
     * @throws PropelException
     */
    public function getRCountriess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRCountriessPartial && !$this->isNew();
        if (null === $this->collRCountriess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRCountriess) {
                // return empty collection
                $this->initRCountriess();
            } else {
                $collRCountriess = RCountriesQuery::create(null, $criteria)
                    ->filterByRCountriesCallingCodes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRCountriessPartial && count($collRCountriess)) {
                      $this->initRCountriess(false);

                      foreach ($collRCountriess as $obj) {
                        if (false == $this->collRCountriess->contains($obj)) {
                          $this->collRCountriess->append($obj);
                        }
                      }

                      $this->collRCountriessPartial = true;
                    }

                    $collRCountriess->getInternalIterator()->rewind();

                    return $collRCountriess;
                }

                if ($partial && $this->collRCountriess) {
                    foreach ($this->collRCountriess as $obj) {
                        if ($obj->isNew()) {
                            $collRCountriess[] = $obj;
                        }
                    }
                }

                $this->collRCountriess = $collRCountriess;
                $this->collRCountriessPartial = false;
            }
        }

        return $this->collRCountriess;
    }

    /**
     * Sets a collection of RCountries objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rCountriess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RCountriesCallingCodes The current object (for fluent API support)
     */
    public function setRCountriess(PropelCollection $rCountriess, PropelPDO $con = null)
    {
        $rCountriessToDelete = $this->getRCountriess(new Criteria(), $con)->diff($rCountriess);


        $this->rCountriessScheduledForDeletion = $rCountriessToDelete;

        foreach ($rCountriessToDelete as $rCountriesRemoved) {
            $rCountriesRemoved->setRCountriesCallingCodes(null);
        }

        $this->collRCountriess = null;
        foreach ($rCountriess as $rCountries) {
            $this->addRCountries($rCountries);
        }

        $this->collRCountriess = $rCountriess;
        $this->collRCountriessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related RCountries objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related RCountries objects.
     * @throws PropelException
     */
    public function countRCountriess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRCountriessPartial && !$this->isNew();
        if (null === $this->collRCountriess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRCountriess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRCountriess());
            }
            $query = RCountriesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRCountriesCallingCodes($this)
                ->count($con);
        }

        return count($this->collRCountriess);
    }

    /**
     * Method called to associate a RCountries object to this object
     * through the RCountries foreign key attribute.
     *
     * @param    RCountries $l RCountries
     * @return RCountriesCallingCodes The current object (for fluent API support)
     */
    public function addRCountries(RCountries $l)
    {
        if ($this->collRCountriess === null) {
            $this->initRCountriess();
            $this->collRCountriessPartial = true;
        }

        if (!in_array($l, $this->collRCountriess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRCountries($l);

            if ($this->rCountriessScheduledForDeletion and $this->rCountriessScheduledForDeletion->contains($l)) {
                $this->rCountriessScheduledForDeletion->remove($this->rCountriessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RCountries $rCountries The rCountries object to add.
     */
    protected function doAddRCountries($rCountries)
    {
        $this->collRCountriess[]= $rCountries;
        $rCountries->setRCountriesCallingCodes($this);
    }

    /**
     * @param	RCountries $rCountries The rCountries object to remove.
     * @return RCountriesCallingCodes The current object (for fluent API support)
     */
    public function removeRCountries($rCountries)
    {
        if ($this->getRCountriess()->contains($rCountries)) {
            $this->collRCountriess->remove($this->collRCountriess->search($rCountries));
            if (null === $this->rCountriessScheduledForDeletion) {
                $this->rCountriessScheduledForDeletion = clone $this->collRCountriess;
                $this->rCountriessScheduledForDeletion->clear();
            }
            $this->rCountriessScheduledForDeletion[]= $rCountries;
            $rCountries->setRCountriesCallingCodes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RCountriesCallingCodes is new, it will return
     * an empty collection; or if this RCountriesCallingCodes has previously
     * been saved, it will retrieve related RCountriess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RCountriesCallingCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RCountries[] List of RCountries objects
     */
    public function getRCountriessJoinRCurrencies($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RCountriesQuery::create(null, $criteria);
        $query->joinWith('RCurrencies', $join_behavior);

        return $this->getRCountriess($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_country_calling_code_id = null;
        $this->r_country_calling_code = null;
        $this->r_country_calling_code_actif = null;
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
            if ($this->collRCountriess) {
                foreach ($this->collRCountriess as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collRCountriess instanceof PropelCollection) {
            $this->collRCountriess->clearIterator();
        }
        $this->collRCountriess = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RCountriesCallingCodesPeer::DEFAULT_STRING_FORMAT);
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
      0 => 'r_country_calling_code',
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
                            $this->addValidationFailed('Cet indicatif existe déjà.', $aColumns[0]);
                        } else {
                            $this->addValidationFailed('Cet indicatif existe déjà.', 'error');
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
                return BaseRCountriesCallingCodesPeer::getConnection();
            }
}
