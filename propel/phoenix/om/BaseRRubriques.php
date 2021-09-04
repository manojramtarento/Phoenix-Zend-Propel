<?php


/**
 * Base class that represents a row from the 'r_rubriques' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRRubriques extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RRubriquesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RRubriquesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_rub_id field.
     * @var        int
     */
    protected $r_rub_id;

    /**
     * The value for the r_rub_libelle field.
     * @var        string
     */
    protected $r_rub_libelle;

    /**
     * The value for the r_rub_libelle_en field.
     * @var        string
     */
    protected $r_rub_libelle_en;

    /**
     * The value for the r_rub_type_id field.
     * @var        int
     */
    protected $r_rub_type_id;

    /**
     * The value for the r_tva_type_id field.
     * @var        int
     */
    protected $r_tva_type_id;

    /**
     * The value for the actif field.
     * @var        boolean
     */
    protected $actif;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * @var        RTvaType
     */
    protected $aRTvaType;

    /**
     * @var        RRubriquesType
     */
    protected $aRRubriquesType;

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
     * Get the [r_rub_id] column value.
     *
     * @return int
     */
    public function getRRubId()
    {

        return $this->r_rub_id;
    }

    /**
     * Get the [r_rub_libelle] column value.
     *
     * @return string
     */
    public function getRRubLibelle()
    {

        return $this->r_rub_libelle;
    }

    /**
     * Get the [r_rub_libelle_en] column value.
     *
     * @return string
     */
    public function getRRubLibelleEn()
    {

        return $this->r_rub_libelle_en;
    }

    /**
     * Get the [r_rub_type_id] column value.
     *
     * @return int
     */
    public function getRRubTypeId()
    {

        return $this->r_rub_type_id;
    }

    /**
     * Get the [r_tva_type_id] column value.
     *
     * @return int
     */
    public function getRTvaTypeId()
    {

        return $this->r_tva_type_id;
    }

    /**
     * Get the [actif] column value.
     *
     * @return boolean
     */
    public function getActif()
    {

        return $this->actif;
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
     * Set the value of [r_rub_id] column.
     *
     * @param  int $v new value
     * @return RRubriques The current object (for fluent API support)
     */
    public function setRRubId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_rub_id !== $v) {
                    $this->r_rub_id = $v;
                    $this->modifiedColumns[] = RRubriquesPeer::R_RUB_ID;
                }


        return $this;
    } // setRRubId()

    /**
     * Set the value of [r_rub_libelle] column.
     *
     * @param  string $v new value
     * @return RRubriques The current object (for fluent API support)
     */
    public function setRRubLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_rub_libelle !== $v) {
            $this->r_rub_libelle = $v;
            $this->modifiedColumns[] = RRubriquesPeer::R_RUB_LIBELLE;
        }


        return $this;
    } // setRRubLibelle()

    /**
     * Set the value of [r_rub_libelle_en] column.
     *
     * @param  string $v new value
     * @return RRubriques The current object (for fluent API support)
     */
    public function setRRubLibelleEn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_rub_libelle_en !== $v) {
            $this->r_rub_libelle_en = $v;
            $this->modifiedColumns[] = RRubriquesPeer::R_RUB_LIBELLE_EN;
        }


        return $this;
    } // setRRubLibelleEn()

    /**
     * Set the value of [r_rub_type_id] column.
     *
     * @param  int $v new value
     * @return RRubriques The current object (for fluent API support)
     */
    public function setRRubTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_rub_type_id !== $v) {
                    $this->r_rub_type_id = $v;
                    $this->modifiedColumns[] = RRubriquesPeer::R_RUB_TYPE_ID;
                }

        if ($this->aRRubriquesType !== null && $this->aRRubriquesType->getRubriqueTypeId() !== $v) {
            $this->aRRubriquesType = null;
        }


        return $this;
    } // setRRubTypeId()

    /**
     * Set the value of [r_tva_type_id] column.
     *
     * @param  int $v new value
     * @return RRubriques The current object (for fluent API support)
     */
    public function setRTvaTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_tva_type_id !== $v) {
                    $this->r_tva_type_id = $v;
                    $this->modifiedColumns[] = RRubriquesPeer::R_TVA_TYPE_ID;
                }

        if ($this->aRTvaType !== null && $this->aRTvaType->getRTvaId() !== $v) {
            $this->aRTvaType = null;
        }


        return $this;
    } // setRTvaTypeId()

    /**
     * Sets the value of the [actif] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RRubriques The current object (for fluent API support)
     */
    public function setActif($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actif !== $v) {
            $this->actif = $v;
            $this->modifiedColumns[] = RRubriquesPeer::ACTIF;
        }


        return $this;
    } // setActif()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return RRubriques The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = RRubriquesPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

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

            $this->r_rub_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_rub_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_rub_libelle_en = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->r_rub_type_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->r_tva_type_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->actif = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->date_create = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = RRubriquesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RRubriques object", $e);
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

        if ($this->aRRubriquesType !== null && $this->r_rub_type_id !== $this->aRRubriquesType->getRubriqueTypeId()) {
            $this->aRRubriquesType = null;
        }
        if ($this->aRTvaType !== null && $this->r_tva_type_id !== $this->aRTvaType->getRTvaId()) {
            $this->aRTvaType = null;
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
            $con = Propel::getConnection(RRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RRubriquesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRTvaType = null;
            $this->aRRubriquesType = null;
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
            $con = Propel::getConnection(RRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RRubriquesQuery::create()
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
            $con = Propel::getConnection(RRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setDateCreate(time());
                
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
                RRubriquesPeer::addInstanceToPool($this);
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

            if ($this->aRTvaType !== null) {
                if ($this->aRTvaType->isModified() || $this->aRTvaType->isNew()) {
                    $affectedRows += $this->aRTvaType->save($con);
                }
                $this->setRTvaType($this->aRTvaType);
            }

            if ($this->aRRubriquesType !== null) {
                if ($this->aRRubriquesType->isModified() || $this->aRRubriquesType->isNew()) {
                    $affectedRows += $this->aRRubriquesType->save($con);
                }
                $this->setRRubriquesType($this->aRRubriquesType);
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

        $this->modifiedColumns[] = RRubriquesPeer::R_RUB_ID;
        if (null !== $this->r_rub_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RRubriquesPeer::R_RUB_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RRubriquesPeer::R_RUB_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_rub_id`';
        }
        if ($this->isColumnModified(RRubriquesPeer::R_RUB_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_rub_libelle`';
        }
        if ($this->isColumnModified(RRubriquesPeer::R_RUB_LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`r_rub_libelle_en`';
        }
        if ($this->isColumnModified(RRubriquesPeer::R_RUB_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_rub_type_id`';
        }
        if ($this->isColumnModified(RRubriquesPeer::R_TVA_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_tva_type_id`';
        }
        if ($this->isColumnModified(RRubriquesPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }
        if ($this->isColumnModified(RRubriquesPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }

        $sql = sprintf(
            'INSERT INTO `r_rubriques` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_rub_id`':
                        $stmt->bindValue($identifier, $this->r_rub_id, PDO::PARAM_INT);
                        break;
                    case '`r_rub_libelle`':
                        $stmt->bindValue($identifier, $this->r_rub_libelle, PDO::PARAM_STR);
                        break;
                    case '`r_rub_libelle_en`':
                        $stmt->bindValue($identifier, $this->r_rub_libelle_en, PDO::PARAM_STR);
                        break;
                    case '`r_rub_type_id`':
                        $stmt->bindValue($identifier, $this->r_rub_type_id, PDO::PARAM_INT);
                        break;
                    case '`r_tva_type_id`':
                        $stmt->bindValue($identifier, $this->r_tva_type_id, PDO::PARAM_INT);
                        break;
                    case '`actif`':
                        $stmt->bindValue($identifier, (int) $this->actif, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
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
        $this->setRRubId($pk);

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

            if ($this->aRTvaType !== null) {
                if (!$this->aRTvaType->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRTvaType->getValidationFailures());
                }
            }

            if ($this->aRRubriquesType !== null) {
                if (!$this->aRRubriquesType->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRRubriquesType->getValidationFailures());
                }
            }


            if (($retval = RRubriquesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = RRubriquesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRRubId();
                break;
            case 1:
                return $this->getRRubLibelle();
                break;
            case 2:
                return $this->getRRubLibelleEn();
                break;
            case 3:
                return $this->getRRubTypeId();
                break;
            case 4:
                return $this->getRTvaTypeId();
                break;
            case 5:
                return $this->getActif();
                break;
            case 6:
                return $this->getDateCreate();
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
        if (isset($alreadyDumpedObjects['RRubriques'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RRubriques'][$this->getPrimaryKey()] = true;
        $keys = RRubriquesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRRubId(),
            $keys[1] => $this->getRRubLibelle(),
            $keys[2] => $this->getRRubLibelleEn(),
            $keys[3] => $this->getRRubTypeId(),
            $keys[4] => $this->getRTvaTypeId(),
            $keys[5] => $this->getActif(),
            $keys[6] => $this->getDateCreate(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRTvaType) {
                $result['RTvaType'] = $this->aRTvaType->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRRubriquesType) {
                $result['RRubriquesType'] = $this->aRRubriquesType->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = RRubriquesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRRubId($value);
                break;
            case 1:
                $this->setRRubLibelle($value);
                break;
            case 2:
                $this->setRRubLibelleEn($value);
                break;
            case 3:
                $this->setRRubTypeId($value);
                break;
            case 4:
                $this->setRTvaTypeId($value);
                break;
            case 5:
                $this->setActif($value);
                break;
            case 6:
                $this->setDateCreate($value);
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
        $keys = RRubriquesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRRubId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRRubLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRRubLibelleEn($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRRubTypeId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRTvaTypeId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setActif($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateCreate($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RRubriquesPeer::DATABASE_NAME);

        if ($this->isColumnModified(RRubriquesPeer::R_RUB_ID)) $criteria->add(RRubriquesPeer::R_RUB_ID, $this->r_rub_id);
        if ($this->isColumnModified(RRubriquesPeer::R_RUB_LIBELLE)) $criteria->add(RRubriquesPeer::R_RUB_LIBELLE, $this->r_rub_libelle);
        if ($this->isColumnModified(RRubriquesPeer::R_RUB_LIBELLE_EN)) $criteria->add(RRubriquesPeer::R_RUB_LIBELLE_EN, $this->r_rub_libelle_en);
        if ($this->isColumnModified(RRubriquesPeer::R_RUB_TYPE_ID)) $criteria->add(RRubriquesPeer::R_RUB_TYPE_ID, $this->r_rub_type_id);
        if ($this->isColumnModified(RRubriquesPeer::R_TVA_TYPE_ID)) $criteria->add(RRubriquesPeer::R_TVA_TYPE_ID, $this->r_tva_type_id);
        if ($this->isColumnModified(RRubriquesPeer::ACTIF)) $criteria->add(RRubriquesPeer::ACTIF, $this->actif);
        if ($this->isColumnModified(RRubriquesPeer::DATE_CREATE)) $criteria->add(RRubriquesPeer::DATE_CREATE, $this->date_create);

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
        $criteria = new Criteria(RRubriquesPeer::DATABASE_NAME);
        $criteria->add(RRubriquesPeer::R_RUB_ID, $this->r_rub_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRRubId();
    }

    /**
     * Generic method to set the primary key (r_rub_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRRubId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRRubId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RRubriques (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRRubLibelle($this->getRRubLibelle());
        $copyObj->setRRubLibelleEn($this->getRRubLibelleEn());
        $copyObj->setRRubTypeId($this->getRRubTypeId());
        $copyObj->setRTvaTypeId($this->getRTvaTypeId());
        $copyObj->setActif($this->getActif());
        $copyObj->setDateCreate($this->getDateCreate());

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
            $copyObj->setRRubId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RRubriques Clone of current object.
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
     * @return RRubriquesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RRubriquesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a RTvaType object.
     *
     * @param                  RTvaType $v
     * @return RRubriques The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRTvaType(RTvaType $v = null)
    {
        if ($v === null) {
            $this->setRTvaTypeId(NULL);
        } else {
            $this->setRTvaTypeId($v->getRTvaId());
        }

        $this->aRTvaType = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RTvaType object, it will not be re-added.
        if ($v !== null) {
            $v->addRRubriques($this);
        }


        return $this;
    }


    /**
     * Get the associated RTvaType object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RTvaType The associated RTvaType object.
     * @throws PropelException
     */
    public function getRTvaType(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRTvaType === null && ($this->r_tva_type_id !== null) && $doQuery) {
            $this->aRTvaType = RTvaTypeQuery::create()->findPk($this->r_tva_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRTvaType->addRRubriquess($this);
             */
        }

        return $this->aRTvaType;
    }

    /**
     * Declares an association between this object and a RRubriquesType object.
     *
     * @param                  RRubriquesType $v
     * @return RRubriques The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRRubriquesType(RRubriquesType $v = null)
    {
        if ($v === null) {
            $this->setRRubTypeId(NULL);
        } else {
            $this->setRRubTypeId($v->getRubriqueTypeId());
        }

        $this->aRRubriquesType = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RRubriquesType object, it will not be re-added.
        if ($v !== null) {
            $v->addRRubriques($this);
        }


        return $this;
    }


    /**
     * Get the associated RRubriquesType object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RRubriquesType The associated RRubriquesType object.
     * @throws PropelException
     */
    public function getRRubriquesType(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRRubriquesType === null && ($this->r_rub_type_id !== null) && $doQuery) {
            $this->aRRubriquesType = RRubriquesTypeQuery::create()->findPk($this->r_rub_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRRubriquesType->addRRubriquess($this);
             */
        }

        return $this->aRRubriquesType;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_rub_id = null;
        $this->r_rub_libelle = null;
        $this->r_rub_libelle_en = null;
        $this->r_rub_type_id = null;
        $this->r_tva_type_id = null;
        $this->actif = null;
        $this->date_create = null;
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
            if ($this->aRTvaType instanceof Persistent) {
              $this->aRTvaType->clearAllReferences($deep);
            }
            if ($this->aRRubriquesType instanceof Persistent) {
              $this->aRRubriquesType->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aRTvaType = null;
        $this->aRRubriquesType = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RRubriquesPeer::DEFAULT_STRING_FORMAT);
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
                return BaseRRubriquesPeer::getConnection();
            }
}
