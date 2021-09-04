<?php


/**
 * Base class that represents a row from the 'r_operation_type_sub_tpl_countries' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplCountries extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ROperationTypeSubTplCountriesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ROperationTypeSubTplCountriesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_operation_type_sub_tpl_country_id field.
     * @var        int
     */
    protected $r_operation_type_sub_tpl_country_id;

    /**
     * The value for the r_operation_type_sub_tpl_country_tpl_id field.
     * @var        int
     */
    protected $r_operation_type_sub_tpl_country_tpl_id;

    /**
     * The value for the r_operation_type_sub_tpl_country_r_country_id field.
     * @var        int
     */
    protected $r_operation_type_sub_tpl_country_r_country_id;

    /**
     * The value for the r_operation_type_sub_tpl_country_is_country_linked field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $r_operation_type_sub_tpl_country_is_country_linked;

    /**
     * @var        RCountries
     */
    protected $aTemplateCountry;

    /**
     * @var        ROperationTypeSubTpl
     */
    protected $aTemplate;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->r_operation_type_sub_tpl_country_is_country_linked = 1;
    }

    /**
     * Initializes internal state of BaseROperationTypeSubTplCountries object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [r_operation_type_sub_tpl_country_id] column value.
     *
     * @return int
     */
    public function getROperationTypeSubTplCountryId()
    {

        return $this->r_operation_type_sub_tpl_country_id;
    }

    /**
     * Get the [r_operation_type_sub_tpl_country_tpl_id] column value.
     *
     * @return int
     */
    public function getROperationTypeSubTplCountryTplId()
    {

        return $this->r_operation_type_sub_tpl_country_tpl_id;
    }

    /**
     * Get the [r_operation_type_sub_tpl_country_r_country_id] column value.
     *
     * @return int
     */
    public function getROperationTypeSubTplCountryRCountryId()
    {

        return $this->r_operation_type_sub_tpl_country_r_country_id;
    }

    /**
     * Get the [r_operation_type_sub_tpl_country_is_country_linked] column value.
     *
     * @return int
     */
    public function getROperationTypeSubTplCountryIsCountryLinked()
    {

        return $this->r_operation_type_sub_tpl_country_is_country_linked;
    }

    /**
     * Set the value of [r_operation_type_sub_tpl_country_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplCountries The current object (for fluent API support)
     */
    public function setROperationTypeSubTplCountryId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_operation_type_sub_tpl_country_id !== $v) {
                    $this->r_operation_type_sub_tpl_country_id = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID;
                }


        return $this;
    } // setROperationTypeSubTplCountryId()

    /**
     * Set the value of [r_operation_type_sub_tpl_country_tpl_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplCountries The current object (for fluent API support)
     */
    public function setROperationTypeSubTplCountryTplId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_operation_type_sub_tpl_country_tpl_id !== $v) {
                    $this->r_operation_type_sub_tpl_country_tpl_id = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_TPL_ID;
                }

        if ($this->aTemplate !== null && $this->aTemplate->getOstTplId() !== $v) {
            $this->aTemplate = null;
        }


        return $this;
    } // setROperationTypeSubTplCountryTplId()

    /**
     * Set the value of [r_operation_type_sub_tpl_country_r_country_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplCountries The current object (for fluent API support)
     */
    public function setROperationTypeSubTplCountryRCountryId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_operation_type_sub_tpl_country_r_country_id !== $v) {
                    $this->r_operation_type_sub_tpl_country_r_country_id = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID;
                }

        if ($this->aTemplateCountry !== null && $this->aTemplateCountry->getRCountryId() !== $v) {
            $this->aTemplateCountry = null;
        }


        return $this;
    } // setROperationTypeSubTplCountryRCountryId()

    /**
     * Set the value of [r_operation_type_sub_tpl_country_is_country_linked] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplCountries The current object (for fluent API support)
     */
    public function setROperationTypeSubTplCountryIsCountryLinked($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_operation_type_sub_tpl_country_is_country_linked !== $v) {
                    $this->r_operation_type_sub_tpl_country_is_country_linked = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_IS_COUNTRY_LINKED;
                }


        return $this;
    } // setROperationTypeSubTplCountryIsCountryLinked()

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
            if ($this->r_operation_type_sub_tpl_country_is_country_linked !== 1) {
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

            $this->r_operation_type_sub_tpl_country_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_operation_type_sub_tpl_country_tpl_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->r_operation_type_sub_tpl_country_r_country_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->r_operation_type_sub_tpl_country_is_country_linked = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = ROperationTypeSubTplCountriesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ROperationTypeSubTplCountries object", $e);
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

        if ($this->aTemplate !== null && $this->r_operation_type_sub_tpl_country_tpl_id !== $this->aTemplate->getOstTplId()) {
            $this->aTemplate = null;
        }
        if ($this->aTemplateCountry !== null && $this->r_operation_type_sub_tpl_country_r_country_id !== $this->aTemplateCountry->getRCountryId()) {
            $this->aTemplateCountry = null;
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
            $con = Propel::getConnection(ROperationTypeSubTplCountriesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ROperationTypeSubTplCountriesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTemplateCountry = null;
            $this->aTemplate = null;
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
            $con = Propel::getConnection(ROperationTypeSubTplCountriesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ROperationTypeSubTplCountriesQuery::create()
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
            $con = Propel::getConnection(ROperationTypeSubTplCountriesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ROperationTypeSubTplCountriesPeer::addInstanceToPool($this);
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

            if ($this->aTemplateCountry !== null) {
                if ($this->aTemplateCountry->isModified() || $this->aTemplateCountry->isNew()) {
                    $affectedRows += $this->aTemplateCountry->save($con);
                }
                $this->setTemplateCountry($this->aTemplateCountry);
            }

            if ($this->aTemplate !== null) {
                if ($this->aTemplate->isModified() || $this->aTemplate->isNew()) {
                    $affectedRows += $this->aTemplate->save($con);
                }
                $this->setTemplate($this->aTemplate);
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

        $this->modifiedColumns[] = ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID;
        if (null !== $this->r_operation_type_sub_tpl_country_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_operation_type_sub_tpl_country_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_TPL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_operation_type_sub_tpl_country_tpl_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_operation_type_sub_tpl_country_r_country_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_IS_COUNTRY_LINKED)) {
            $modifiedColumns[':p' . $index++]  = '`r_operation_type_sub_tpl_country_is_country_linked`';
        }

        $sql = sprintf(
            'INSERT INTO `r_operation_type_sub_tpl_countries` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_operation_type_sub_tpl_country_id`':
                        $stmt->bindValue($identifier, $this->r_operation_type_sub_tpl_country_id, PDO::PARAM_INT);
                        break;
                    case '`r_operation_type_sub_tpl_country_tpl_id`':
                        $stmt->bindValue($identifier, $this->r_operation_type_sub_tpl_country_tpl_id, PDO::PARAM_INT);
                        break;
                    case '`r_operation_type_sub_tpl_country_r_country_id`':
                        $stmt->bindValue($identifier, $this->r_operation_type_sub_tpl_country_r_country_id, PDO::PARAM_INT);
                        break;
                    case '`r_operation_type_sub_tpl_country_is_country_linked`':
                        $stmt->bindValue($identifier, $this->r_operation_type_sub_tpl_country_is_country_linked, PDO::PARAM_INT);
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
        $this->setROperationTypeSubTplCountryId($pk);

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

            if ($this->aTemplateCountry !== null) {
                if (!$this->aTemplateCountry->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTemplateCountry->getValidationFailures());
                }
            }

            if ($this->aTemplate !== null) {
                if (!$this->aTemplate->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTemplate->getValidationFailures());
                }
            }


            if (($retval = ROperationTypeSubTplCountriesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = ROperationTypeSubTplCountriesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getROperationTypeSubTplCountryId();
                break;
            case 1:
                return $this->getROperationTypeSubTplCountryTplId();
                break;
            case 2:
                return $this->getROperationTypeSubTplCountryRCountryId();
                break;
            case 3:
                return $this->getROperationTypeSubTplCountryIsCountryLinked();
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
        if (isset($alreadyDumpedObjects['ROperationTypeSubTplCountries'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ROperationTypeSubTplCountries'][$this->getPrimaryKey()] = true;
        $keys = ROperationTypeSubTplCountriesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getROperationTypeSubTplCountryId(),
            $keys[1] => $this->getROperationTypeSubTplCountryTplId(),
            $keys[2] => $this->getROperationTypeSubTplCountryRCountryId(),
            $keys[3] => $this->getROperationTypeSubTplCountryIsCountryLinked(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aTemplateCountry) {
                $result['TemplateCountry'] = $this->aTemplateCountry->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTemplate) {
                $result['Template'] = $this->aTemplate->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = ROperationTypeSubTplCountriesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setROperationTypeSubTplCountryId($value);
                break;
            case 1:
                $this->setROperationTypeSubTplCountryTplId($value);
                break;
            case 2:
                $this->setROperationTypeSubTplCountryRCountryId($value);
                break;
            case 3:
                $this->setROperationTypeSubTplCountryIsCountryLinked($value);
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
        $keys = ROperationTypeSubTplCountriesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setROperationTypeSubTplCountryId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setROperationTypeSubTplCountryTplId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setROperationTypeSubTplCountryRCountryId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setROperationTypeSubTplCountryIsCountryLinked($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ROperationTypeSubTplCountriesPeer::DATABASE_NAME);

        if ($this->isColumnModified(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID)) $criteria->add(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID, $this->r_operation_type_sub_tpl_country_id);
        if ($this->isColumnModified(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_TPL_ID)) $criteria->add(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_TPL_ID, $this->r_operation_type_sub_tpl_country_tpl_id);
        if ($this->isColumnModified(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID)) $criteria->add(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID, $this->r_operation_type_sub_tpl_country_r_country_id);
        if ($this->isColumnModified(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_IS_COUNTRY_LINKED)) $criteria->add(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_IS_COUNTRY_LINKED, $this->r_operation_type_sub_tpl_country_is_country_linked);

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
        $criteria = new Criteria(ROperationTypeSubTplCountriesPeer::DATABASE_NAME);
        $criteria->add(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID, $this->r_operation_type_sub_tpl_country_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getROperationTypeSubTplCountryId();
    }

    /**
     * Generic method to set the primary key (r_operation_type_sub_tpl_country_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setROperationTypeSubTplCountryId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getROperationTypeSubTplCountryId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ROperationTypeSubTplCountries (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setROperationTypeSubTplCountryTplId($this->getROperationTypeSubTplCountryTplId());
        $copyObj->setROperationTypeSubTplCountryRCountryId($this->getROperationTypeSubTplCountryRCountryId());
        $copyObj->setROperationTypeSubTplCountryIsCountryLinked($this->getROperationTypeSubTplCountryIsCountryLinked());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setROperationTypeSubTplCountryId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ROperationTypeSubTplCountries Clone of current object.
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
     * @return ROperationTypeSubTplCountriesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ROperationTypeSubTplCountriesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a RCountries object.
     *
     * @param                  RCountries $v
     * @return ROperationTypeSubTplCountries The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTemplateCountry(RCountries $v = null)
    {
        if ($v === null) {
            $this->setROperationTypeSubTplCountryRCountryId(NULL);
        } else {
            $this->setROperationTypeSubTplCountryRCountryId($v->getRCountryId());
        }

        $this->aTemplateCountry = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RCountries object, it will not be re-added.
        if ($v !== null) {
            $v->addROperationTypeSubTplCountries($this);
        }


        return $this;
    }


    /**
     * Get the associated RCountries object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RCountries The associated RCountries object.
     * @throws PropelException
     */
    public function getTemplateCountry(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTemplateCountry === null && ($this->r_operation_type_sub_tpl_country_r_country_id !== null) && $doQuery) {
            $this->aTemplateCountry = RCountriesQuery::create()->findPk($this->r_operation_type_sub_tpl_country_r_country_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTemplateCountry->addROperationTypeSubTplCountriess($this);
             */
        }

        return $this->aTemplateCountry;
    }

    /**
     * Declares an association between this object and a ROperationTypeSubTpl object.
     *
     * @param                  ROperationTypeSubTpl $v
     * @return ROperationTypeSubTplCountries The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTemplate(ROperationTypeSubTpl $v = null)
    {
        if ($v === null) {
            $this->setROperationTypeSubTplCountryTplId(NULL);
        } else {
            $this->setROperationTypeSubTplCountryTplId($v->getOstTplId());
        }

        $this->aTemplate = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationTypeSubTpl object, it will not be re-added.
        if ($v !== null) {
            $v->addROperationTypeSubTplCountries($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationTypeSubTpl object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationTypeSubTpl The associated ROperationTypeSubTpl object.
     * @throws PropelException
     */
    public function getTemplate(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTemplate === null && ($this->r_operation_type_sub_tpl_country_tpl_id !== null) && $doQuery) {
            $this->aTemplate = ROperationTypeSubTplQuery::create()->findPk($this->r_operation_type_sub_tpl_country_tpl_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTemplate->addROperationTypeSubTplCountriess($this);
             */
        }

        return $this->aTemplate;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_operation_type_sub_tpl_country_id = null;
        $this->r_operation_type_sub_tpl_country_tpl_id = null;
        $this->r_operation_type_sub_tpl_country_r_country_id = null;
        $this->r_operation_type_sub_tpl_country_is_country_linked = null;
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
            if ($this->aTemplateCountry instanceof Persistent) {
              $this->aTemplateCountry->clearAllReferences($deep);
            }
            if ($this->aTemplate instanceof Persistent) {
              $this->aTemplate->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aTemplateCountry = null;
        $this->aTemplate = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ROperationTypeSubTplCountriesPeer::DEFAULT_STRING_FORMAT);
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
                return BaseROperationTypeSubTplCountriesPeer::getConnection();
            }
}
