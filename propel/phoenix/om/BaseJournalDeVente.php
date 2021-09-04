<?php


/**
 * Base class that represents a row from the 'journal_de_vente' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseJournalDeVente extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'JournalDeVentePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        JournalDeVentePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the jdv_id field.
     * @var        int
     */
    protected $jdv_id;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * @var        PropelObjectCollection|Factures[] Collection to store aggregation of Factures objects.
     */
    protected $collFacturess;
    protected $collFacturessPartial;

    /**
     * @var        PropelObjectCollection|JournalDeVenteLigne[] Collection to store aggregation of JournalDeVenteLigne objects.
     */
    protected $collJournalDeVenteLignes;
    protected $collJournalDeVenteLignesPartial;

    /**
     * @var        PropelObjectCollection|FactureEditionHistory[] Collection to store aggregation of FactureEditionHistory objects.
     */
    protected $collFactureEditionHistorys;
    protected $collFactureEditionHistorysPartial;

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
    protected $facturessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $journalDeVenteLignesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $factureEditionHistorysScheduledForDeletion = null;

    /**
     * Get the [jdv_id] column value.
     *
     * @return int
     */
    public function getJdvId()
    {

        return $this->jdv_id;
    }

    /**
     * Get the [optionally formatted] temporal [date_create] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCreate($format = 'Y-m-d H:i:s')
    {
        if ($this->date_create === null) {
            return null;
        }

        if ($this->date_create === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_create);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_create, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
    }

    /**
     * Set the value of [jdv_id] column.
     *
     * @param  int $v new value
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function setJdvId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->jdv_id !== $v) {
                    $this->jdv_id = $v;
                    $this->modifiedColumns[] = JournalDeVentePeer::JDV_ID;
                }


        return $this;
    } // setJdvId()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = JournalDeVentePeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function setUserId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->user_id !== $v) {
                    $this->user_id = $v;
                    $this->modifiedColumns[] = JournalDeVentePeer::USER_ID;
                }


        return $this;
    } // setUserId()

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

            $this->jdv_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->date_create = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->user_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = JournalDeVentePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating JournalDeVente object", $e);
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
            $con = Propel::getConnection(JournalDeVentePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = JournalDeVentePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collFacturess = null;

            $this->collJournalDeVenteLignes = null;

            $this->collFactureEditionHistorys = null;

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
            $con = Propel::getConnection(JournalDeVentePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = JournalDeVenteQuery::create()
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
            $con = Propel::getConnection(JournalDeVentePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setDateCreate(time());
                
                                $this->setUserId(Zend_Auth::getInstance()->getStorage()->read()->getUserId());

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
                JournalDeVentePeer::addInstanceToPool($this);
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

            if ($this->facturessScheduledForDeletion !== null) {
                if (!$this->facturessScheduledForDeletion->isEmpty()) {
                    foreach ($this->facturessScheduledForDeletion as $factures) {
                        // need to save related object because we set the relation to null
                        $factures->save($con);
                    }
                    $this->facturessScheduledForDeletion = null;
                }
            }

            if ($this->collFacturess !== null) {
                foreach ($this->collFacturess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->journalDeVenteLignesScheduledForDeletion !== null) {
                if (!$this->journalDeVenteLignesScheduledForDeletion->isEmpty()) {
                    foreach ($this->journalDeVenteLignesScheduledForDeletion as $journalDeVenteLigne) {
                        // need to save related object because we set the relation to null
                        $journalDeVenteLigne->save($con);
                    }
                    $this->journalDeVenteLignesScheduledForDeletion = null;
                }
            }

            if ($this->collJournalDeVenteLignes !== null) {
                foreach ($this->collJournalDeVenteLignes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->factureEditionHistorysScheduledForDeletion !== null) {
                if (!$this->factureEditionHistorysScheduledForDeletion->isEmpty()) {
                    foreach ($this->factureEditionHistorysScheduledForDeletion as $factureEditionHistory) {
                        // need to save related object because we set the relation to null
                        $factureEditionHistory->save($con);
                    }
                    $this->factureEditionHistorysScheduledForDeletion = null;
                }
            }

            if ($this->collFactureEditionHistorys !== null) {
                foreach ($this->collFactureEditionHistorys as $referrerFK) {
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

        $this->modifiedColumns[] = JournalDeVentePeer::JDV_ID;
        if (null !== $this->jdv_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . JournalDeVentePeer::JDV_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(JournalDeVentePeer::JDV_ID)) {
            $modifiedColumns[':p' . $index++]  = '`jdv_id`';
        }
        if ($this->isColumnModified(JournalDeVentePeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(JournalDeVentePeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }

        $sql = sprintf(
            'INSERT INTO `journal_de_vente` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`jdv_id`':
                        $stmt->bindValue($identifier, $this->jdv_id, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
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
        $this->setJdvId($pk);

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


            if (($retval = JournalDeVentePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFacturess !== null) {
                    foreach ($this->collFacturess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collJournalDeVenteLignes !== null) {
                    foreach ($this->collJournalDeVenteLignes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collFactureEditionHistorys !== null) {
                    foreach ($this->collFactureEditionHistorys as $referrerFK) {
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
        $pos = JournalDeVentePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getJdvId();
                break;
            case 1:
                return $this->getDateCreate();
                break;
            case 2:
                return $this->getUserId();
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
        if (isset($alreadyDumpedObjects['JournalDeVente'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['JournalDeVente'][$this->getPrimaryKey()] = true;
        $keys = JournalDeVentePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getJdvId(),
            $keys[1] => $this->getDateCreate(),
            $keys[2] => $this->getUserId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collFacturess) {
                $result['Facturess'] = $this->collFacturess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collJournalDeVenteLignes) {
                $result['JournalDeVenteLignes'] = $this->collJournalDeVenteLignes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collFactureEditionHistorys) {
                $result['FactureEditionHistorys'] = $this->collFactureEditionHistorys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = JournalDeVentePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setJdvId($value);
                break;
            case 1:
                $this->setDateCreate($value);
                break;
            case 2:
                $this->setUserId($value);
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
        $keys = JournalDeVentePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setJdvId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDateCreate($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUserId($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(JournalDeVentePeer::DATABASE_NAME);

        if ($this->isColumnModified(JournalDeVentePeer::JDV_ID)) $criteria->add(JournalDeVentePeer::JDV_ID, $this->jdv_id);
        if ($this->isColumnModified(JournalDeVentePeer::DATE_CREATE)) $criteria->add(JournalDeVentePeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(JournalDeVentePeer::USER_ID)) $criteria->add(JournalDeVentePeer::USER_ID, $this->user_id);

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
        $criteria = new Criteria(JournalDeVentePeer::DATABASE_NAME);
        $criteria->add(JournalDeVentePeer::JDV_ID, $this->jdv_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getJdvId();
    }

    /**
     * Generic method to set the primary key (jdv_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setJdvId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getJdvId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of JournalDeVente (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setUserId($this->getUserId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getFacturess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactures($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getJournalDeVenteLignes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addJournalDeVenteLigne($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getFactureEditionHistorys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactureEditionHistory($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setJdvId(NULL); // this is a auto-increment column, so set to default value
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
     * @return JournalDeVente Clone of current object.
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
     * @return JournalDeVentePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new JournalDeVentePeer();
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
        if ('Factures' == $relationName) {
            $this->initFacturess();
        }
        if ('JournalDeVenteLigne' == $relationName) {
            $this->initJournalDeVenteLignes();
        }
        if ('FactureEditionHistory' == $relationName) {
            $this->initFactureEditionHistorys();
        }
    }

    /**
     * Clears out the collFacturess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return JournalDeVente The current object (for fluent API support)
     * @see        addFacturess()
     */
    public function clearFacturess()
    {
        $this->collFacturess = null; // important to set this to null since that means it is uninitialized
        $this->collFacturessPartial = null;

        return $this;
    }

    /**
     * reset is the collFacturess collection loaded partially
     *
     * @return void
     */
    public function resetPartialFacturess($v = true)
    {
        $this->collFacturessPartial = $v;
    }

    /**
     * Initializes the collFacturess collection.
     *
     * By default this just sets the collFacturess collection to an empty array (like clearcollFacturess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFacturess($overrideExisting = true)
    {
        if (null !== $this->collFacturess && !$overrideExisting) {
            return;
        }
        $this->collFacturess = new PropelObjectCollection();
        $this->collFacturess->setModel('Factures');
    }

    /**
     * Gets an array of Factures objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this JournalDeVente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Factures[] List of Factures objects
     * @throws PropelException
     */
    public function getFacturess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFacturessPartial && !$this->isNew();
        if (null === $this->collFacturess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFacturess) {
                // return empty collection
                $this->initFacturess();
            } else {
                $collFacturess = FacturesQuery::create(null, $criteria)
                    ->filterByJournalDeVente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFacturessPartial && count($collFacturess)) {
                      $this->initFacturess(false);

                      foreach ($collFacturess as $obj) {
                        if (false == $this->collFacturess->contains($obj)) {
                          $this->collFacturess->append($obj);
                        }
                      }

                      $this->collFacturessPartial = true;
                    }

                    $collFacturess->getInternalIterator()->rewind();

                    return $collFacturess;
                }

                if ($partial && $this->collFacturess) {
                    foreach ($this->collFacturess as $obj) {
                        if ($obj->isNew()) {
                            $collFacturess[] = $obj;
                        }
                    }
                }

                $this->collFacturess = $collFacturess;
                $this->collFacturessPartial = false;
            }
        }

        return $this->collFacturess;
    }

    /**
     * Sets a collection of Factures objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $facturess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function setFacturess(PropelCollection $facturess, PropelPDO $con = null)
    {
        $facturessToDelete = $this->getFacturess(new Criteria(), $con)->diff($facturess);


        $this->facturessScheduledForDeletion = $facturessToDelete;

        foreach ($facturessToDelete as $facturesRemoved) {
            $facturesRemoved->setJournalDeVente(null);
        }

        $this->collFacturess = null;
        foreach ($facturess as $factures) {
            $this->addFactures($factures);
        }

        $this->collFacturess = $facturess;
        $this->collFacturessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Factures objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Factures objects.
     * @throws PropelException
     */
    public function countFacturess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFacturessPartial && !$this->isNew();
        if (null === $this->collFacturess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFacturess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFacturess());
            }
            $query = FacturesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByJournalDeVente($this)
                ->count($con);
        }

        return count($this->collFacturess);
    }

    /**
     * Method called to associate a Factures object to this object
     * through the Factures foreign key attribute.
     *
     * @param    Factures $l Factures
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function addFactures(Factures $l)
    {
        if ($this->collFacturess === null) {
            $this->initFacturess();
            $this->collFacturessPartial = true;
        }

        if (!in_array($l, $this->collFacturess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFactures($l);

            if ($this->facturessScheduledForDeletion and $this->facturessScheduledForDeletion->contains($l)) {
                $this->facturessScheduledForDeletion->remove($this->facturessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Factures $factures The factures object to add.
     */
    protected function doAddFactures($factures)
    {
        $this->collFacturess[]= $factures;
        $factures->setJournalDeVente($this);
    }

    /**
     * @param	Factures $factures The factures object to remove.
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function removeFactures($factures)
    {
        if ($this->getFacturess()->contains($factures)) {
            $this->collFacturess->remove($this->collFacturess->search($factures));
            if (null === $this->facturessScheduledForDeletion) {
                $this->facturessScheduledForDeletion = clone $this->collFacturess;
                $this->facturessScheduledForDeletion->clear();
            }
            $this->facturessScheduledForDeletion[]= $factures;
            $factures->setJournalDeVente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinRFactureTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('RFactureTypes', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinRFactureStatuts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('RFactureStatuts', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinPlanFacturationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('PlanFacturationParams', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinRFactureOptionsEcheances($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('RFactureOptionsEcheances', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getFacturess($query, $con);
    }

    /**
     * Clears out the collJournalDeVenteLignes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return JournalDeVente The current object (for fluent API support)
     * @see        addJournalDeVenteLignes()
     */
    public function clearJournalDeVenteLignes()
    {
        $this->collJournalDeVenteLignes = null; // important to set this to null since that means it is uninitialized
        $this->collJournalDeVenteLignesPartial = null;

        return $this;
    }

    /**
     * reset is the collJournalDeVenteLignes collection loaded partially
     *
     * @return void
     */
    public function resetPartialJournalDeVenteLignes($v = true)
    {
        $this->collJournalDeVenteLignesPartial = $v;
    }

    /**
     * Initializes the collJournalDeVenteLignes collection.
     *
     * By default this just sets the collJournalDeVenteLignes collection to an empty array (like clearcollJournalDeVenteLignes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initJournalDeVenteLignes($overrideExisting = true)
    {
        if (null !== $this->collJournalDeVenteLignes && !$overrideExisting) {
            return;
        }
        $this->collJournalDeVenteLignes = new PropelObjectCollection();
        $this->collJournalDeVenteLignes->setModel('JournalDeVenteLigne');
    }

    /**
     * Gets an array of JournalDeVenteLigne objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this JournalDeVente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|JournalDeVenteLigne[] List of JournalDeVenteLigne objects
     * @throws PropelException
     */
    public function getJournalDeVenteLignes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collJournalDeVenteLignesPartial && !$this->isNew();
        if (null === $this->collJournalDeVenteLignes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collJournalDeVenteLignes) {
                // return empty collection
                $this->initJournalDeVenteLignes();
            } else {
                $collJournalDeVenteLignes = JournalDeVenteLigneQuery::create(null, $criteria)
                    ->filterByJournalDeVente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collJournalDeVenteLignesPartial && count($collJournalDeVenteLignes)) {
                      $this->initJournalDeVenteLignes(false);

                      foreach ($collJournalDeVenteLignes as $obj) {
                        if (false == $this->collJournalDeVenteLignes->contains($obj)) {
                          $this->collJournalDeVenteLignes->append($obj);
                        }
                      }

                      $this->collJournalDeVenteLignesPartial = true;
                    }

                    $collJournalDeVenteLignes->getInternalIterator()->rewind();

                    return $collJournalDeVenteLignes;
                }

                if ($partial && $this->collJournalDeVenteLignes) {
                    foreach ($this->collJournalDeVenteLignes as $obj) {
                        if ($obj->isNew()) {
                            $collJournalDeVenteLignes[] = $obj;
                        }
                    }
                }

                $this->collJournalDeVenteLignes = $collJournalDeVenteLignes;
                $this->collJournalDeVenteLignesPartial = false;
            }
        }

        return $this->collJournalDeVenteLignes;
    }

    /**
     * Sets a collection of JournalDeVenteLigne objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $journalDeVenteLignes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function setJournalDeVenteLignes(PropelCollection $journalDeVenteLignes, PropelPDO $con = null)
    {
        $journalDeVenteLignesToDelete = $this->getJournalDeVenteLignes(new Criteria(), $con)->diff($journalDeVenteLignes);


        $this->journalDeVenteLignesScheduledForDeletion = $journalDeVenteLignesToDelete;

        foreach ($journalDeVenteLignesToDelete as $journalDeVenteLigneRemoved) {
            $journalDeVenteLigneRemoved->setJournalDeVente(null);
        }

        $this->collJournalDeVenteLignes = null;
        foreach ($journalDeVenteLignes as $journalDeVenteLigne) {
            $this->addJournalDeVenteLigne($journalDeVenteLigne);
        }

        $this->collJournalDeVenteLignes = $journalDeVenteLignes;
        $this->collJournalDeVenteLignesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related JournalDeVenteLigne objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related JournalDeVenteLigne objects.
     * @throws PropelException
     */
    public function countJournalDeVenteLignes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collJournalDeVenteLignesPartial && !$this->isNew();
        if (null === $this->collJournalDeVenteLignes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collJournalDeVenteLignes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getJournalDeVenteLignes());
            }
            $query = JournalDeVenteLigneQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByJournalDeVente($this)
                ->count($con);
        }

        return count($this->collJournalDeVenteLignes);
    }

    /**
     * Method called to associate a JournalDeVenteLigne object to this object
     * through the JournalDeVenteLigne foreign key attribute.
     *
     * @param    JournalDeVenteLigne $l JournalDeVenteLigne
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function addJournalDeVenteLigne(JournalDeVenteLigne $l)
    {
        if ($this->collJournalDeVenteLignes === null) {
            $this->initJournalDeVenteLignes();
            $this->collJournalDeVenteLignesPartial = true;
        }

        if (!in_array($l, $this->collJournalDeVenteLignes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddJournalDeVenteLigne($l);

            if ($this->journalDeVenteLignesScheduledForDeletion and $this->journalDeVenteLignesScheduledForDeletion->contains($l)) {
                $this->journalDeVenteLignesScheduledForDeletion->remove($this->journalDeVenteLignesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	JournalDeVenteLigne $journalDeVenteLigne The journalDeVenteLigne object to add.
     */
    protected function doAddJournalDeVenteLigne($journalDeVenteLigne)
    {
        $this->collJournalDeVenteLignes[]= $journalDeVenteLigne;
        $journalDeVenteLigne->setJournalDeVente($this);
    }

    /**
     * @param	JournalDeVenteLigne $journalDeVenteLigne The journalDeVenteLigne object to remove.
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function removeJournalDeVenteLigne($journalDeVenteLigne)
    {
        if ($this->getJournalDeVenteLignes()->contains($journalDeVenteLigne)) {
            $this->collJournalDeVenteLignes->remove($this->collJournalDeVenteLignes->search($journalDeVenteLigne));
            if (null === $this->journalDeVenteLignesScheduledForDeletion) {
                $this->journalDeVenteLignesScheduledForDeletion = clone $this->collJournalDeVenteLignes;
                $this->journalDeVenteLignesScheduledForDeletion->clear();
            }
            $this->journalDeVenteLignesScheduledForDeletion[]= $journalDeVenteLigne;
            $journalDeVenteLigne->setJournalDeVente(null);
        }

        return $this;
    }

    /**
     * Clears out the collFactureEditionHistorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return JournalDeVente The current object (for fluent API support)
     * @see        addFactureEditionHistorys()
     */
    public function clearFactureEditionHistorys()
    {
        $this->collFactureEditionHistorys = null; // important to set this to null since that means it is uninitialized
        $this->collFactureEditionHistorysPartial = null;

        return $this;
    }

    /**
     * reset is the collFactureEditionHistorys collection loaded partially
     *
     * @return void
     */
    public function resetPartialFactureEditionHistorys($v = true)
    {
        $this->collFactureEditionHistorysPartial = $v;
    }

    /**
     * Initializes the collFactureEditionHistorys collection.
     *
     * By default this just sets the collFactureEditionHistorys collection to an empty array (like clearcollFactureEditionHistorys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFactureEditionHistorys($overrideExisting = true)
    {
        if (null !== $this->collFactureEditionHistorys && !$overrideExisting) {
            return;
        }
        $this->collFactureEditionHistorys = new PropelObjectCollection();
        $this->collFactureEditionHistorys->setModel('FactureEditionHistory');
    }

    /**
     * Gets an array of FactureEditionHistory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this JournalDeVente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     * @throws PropelException
     */
    public function getFactureEditionHistorys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFactureEditionHistorysPartial && !$this->isNew();
        if (null === $this->collFactureEditionHistorys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFactureEditionHistorys) {
                // return empty collection
                $this->initFactureEditionHistorys();
            } else {
                $collFactureEditionHistorys = FactureEditionHistoryQuery::create(null, $criteria)
                    ->filterByJournalDeVente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFactureEditionHistorysPartial && count($collFactureEditionHistorys)) {
                      $this->initFactureEditionHistorys(false);

                      foreach ($collFactureEditionHistorys as $obj) {
                        if (false == $this->collFactureEditionHistorys->contains($obj)) {
                          $this->collFactureEditionHistorys->append($obj);
                        }
                      }

                      $this->collFactureEditionHistorysPartial = true;
                    }

                    $collFactureEditionHistorys->getInternalIterator()->rewind();

                    return $collFactureEditionHistorys;
                }

                if ($partial && $this->collFactureEditionHistorys) {
                    foreach ($this->collFactureEditionHistorys as $obj) {
                        if ($obj->isNew()) {
                            $collFactureEditionHistorys[] = $obj;
                        }
                    }
                }

                $this->collFactureEditionHistorys = $collFactureEditionHistorys;
                $this->collFactureEditionHistorysPartial = false;
            }
        }

        return $this->collFactureEditionHistorys;
    }

    /**
     * Sets a collection of FactureEditionHistory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $factureEditionHistorys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function setFactureEditionHistorys(PropelCollection $factureEditionHistorys, PropelPDO $con = null)
    {
        $factureEditionHistorysToDelete = $this->getFactureEditionHistorys(new Criteria(), $con)->diff($factureEditionHistorys);


        $this->factureEditionHistorysScheduledForDeletion = $factureEditionHistorysToDelete;

        foreach ($factureEditionHistorysToDelete as $factureEditionHistoryRemoved) {
            $factureEditionHistoryRemoved->setJournalDeVente(null);
        }

        $this->collFactureEditionHistorys = null;
        foreach ($factureEditionHistorys as $factureEditionHistory) {
            $this->addFactureEditionHistory($factureEditionHistory);
        }

        $this->collFactureEditionHistorys = $factureEditionHistorys;
        $this->collFactureEditionHistorysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related FactureEditionHistory objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related FactureEditionHistory objects.
     * @throws PropelException
     */
    public function countFactureEditionHistorys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFactureEditionHistorysPartial && !$this->isNew();
        if (null === $this->collFactureEditionHistorys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFactureEditionHistorys) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFactureEditionHistorys());
            }
            $query = FactureEditionHistoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByJournalDeVente($this)
                ->count($con);
        }

        return count($this->collFactureEditionHistorys);
    }

    /**
     * Method called to associate a FactureEditionHistory object to this object
     * through the FactureEditionHistory foreign key attribute.
     *
     * @param    FactureEditionHistory $l FactureEditionHistory
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function addFactureEditionHistory(FactureEditionHistory $l)
    {
        if ($this->collFactureEditionHistorys === null) {
            $this->initFactureEditionHistorys();
            $this->collFactureEditionHistorysPartial = true;
        }

        if (!in_array($l, $this->collFactureEditionHistorys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFactureEditionHistory($l);

            if ($this->factureEditionHistorysScheduledForDeletion and $this->factureEditionHistorysScheduledForDeletion->contains($l)) {
                $this->factureEditionHistorysScheduledForDeletion->remove($this->factureEditionHistorysScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to add.
     */
    protected function doAddFactureEditionHistory($factureEditionHistory)
    {
        $this->collFactureEditionHistorys[]= $factureEditionHistory;
        $factureEditionHistory->setJournalDeVente($this);
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to remove.
     * @return JournalDeVente The current object (for fluent API support)
     */
    public function removeFactureEditionHistory($factureEditionHistory)
    {
        if ($this->getFactureEditionHistorys()->contains($factureEditionHistory)) {
            $this->collFactureEditionHistorys->remove($this->collFactureEditionHistorys->search($factureEditionHistory));
            if (null === $this->factureEditionHistorysScheduledForDeletion) {
                $this->factureEditionHistorysScheduledForDeletion = clone $this->collFactureEditionHistorys;
                $this->factureEditionHistorysScheduledForDeletion->clear();
            }
            $this->factureEditionHistorysScheduledForDeletion[]= $factureEditionHistory;
            $factureEditionHistory->setJournalDeVente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinRFactureTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('RFactureTypes', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinRFactureStatuts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('RFactureStatuts', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinPlanFacturationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('PlanFacturationParams', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinRFactureOptionsEcheances($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('RFactureOptionsEcheances', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinFactReeditionUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('FactReeditionUser', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this JournalDeVente is new, it will return
     * an empty collection; or if this JournalDeVente has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in JournalDeVente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinReeditedFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('ReeditedFacture', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->jdv_id = null;
        $this->date_create = null;
        $this->user_id = null;
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
            if ($this->collFacturess) {
                foreach ($this->collFacturess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collJournalDeVenteLignes) {
                foreach ($this->collJournalDeVenteLignes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFactureEditionHistorys) {
                foreach ($this->collFactureEditionHistorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFacturess instanceof PropelCollection) {
            $this->collFacturess->clearIterator();
        }
        $this->collFacturess = null;
        if ($this->collJournalDeVenteLignes instanceof PropelCollection) {
            $this->collJournalDeVenteLignes->clearIterator();
        }
        $this->collJournalDeVenteLignes = null;
        if ($this->collFactureEditionHistorys instanceof PropelCollection) {
            $this->collFactureEditionHistorys->clearIterator();
        }
        $this->collFactureEditionHistorys = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(JournalDeVentePeer::DEFAULT_STRING_FORMAT);
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
                return BaseJournalDeVentePeer::getConnection();
            }
}
