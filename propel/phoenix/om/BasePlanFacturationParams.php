<?php


/**
 * Base class that represents a row from the 'plan_facturation_params' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BasePlanFacturationParams extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PlanFacturationParamsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PlanFacturationParamsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the plan_fact_id field.
     * @var        int
     */
    protected $plan_fact_id;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the plan_fact_date_prem_fact field.
     * @var        string
     */
    protected $plan_fact_date_prem_fact;

    /**
     * The value for the plan_fact_date_der_fact field.
     * @var        string
     */
    protected $plan_fact_date_der_fact;

    /**
     * The value for the plan_fact_periode_id field.
     * @var        int
     */
    protected $plan_fact_periode_id;

    /**
     * The value for the plan_fact_periode_type_id field.
     * @var        int
     */
    protected $plan_fact_periode_type_id;

    /**
     * The value for the plan_fact_lib_avoir field.
     * @var        string
     */
    protected $plan_fact_lib_avoir;

    /**
     * The value for the plan_facturation_params_auto_display_vat field.
     * @var        int
     */
    protected $plan_facturation_params_auto_display_vat;

    /**
     * The value for the plan_fact_lib_facture field.
     * @var        string
     */
    protected $plan_fact_lib_facture;

    /**
     * The value for the plan_fact_info field.
     * @var        string
     */
    protected $plan_fact_info;

    /**
     * The value for the plan_fact_note_interne field.
     * @var        string
     */
    protected $plan_fact_note_interne;

    /**
     * @var        Operations
     */
    protected $aOperations;

    /**
     * @var        PropelObjectCollection|Factures[] Collection to store aggregation of Factures objects.
     */
    protected $collFacturess;
    protected $collFacturessPartial;

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
    protected $factureEditionHistorysScheduledForDeletion = null;

    /**
     * Get the [plan_fact_id] column value.
     *
     * @return int
     */
    public function getPlanFactId()
    {

        return $this->plan_fact_id;
    }

    /**
     * Get the [op_id] column value.
     *
     * @return int
     */
    public function getOpId()
    {

        return $this->op_id;
    }

    /**
     * Get the [optionally formatted] temporal [plan_fact_date_prem_fact] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPlanFactDatePremFact($format = 'Y-m-d H:i:s')
    {
        if ($this->plan_fact_date_prem_fact === null) {
            return null;
        }

        if ($this->plan_fact_date_prem_fact === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->plan_fact_date_prem_fact);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->plan_fact_date_prem_fact, true), $x);
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
     * Get the [optionally formatted] temporal [plan_fact_date_der_fact] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPlanFactDateDerFact($format = 'Y-m-d H:i:s')
    {
        if ($this->plan_fact_date_der_fact === null) {
            return null;
        }

        if ($this->plan_fact_date_der_fact === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->plan_fact_date_der_fact);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->plan_fact_date_der_fact, true), $x);
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
     * Get the [plan_fact_periode_id] column value.
     *
     * @return int
     */
    public function getPlanFactPeriodeId()
    {

        return $this->plan_fact_periode_id;
    }

    /**
     * Get the [plan_fact_periode_type_id] column value.
     *
     * @return int
     */
    public function getPlanFactPeriodeTypeId()
    {

        return $this->plan_fact_periode_type_id;
    }

    /**
     * Get the [plan_fact_lib_avoir] column value.
     *
     * @return string
     */
    public function getPlanFactLibAvoir()
    {

        return $this->plan_fact_lib_avoir;
    }

    /**
     * Get the [plan_facturation_params_auto_display_vat] column value.
     *
     * @return int
     */
    public function getPlanFacturationParamsAutoDisplayVat()
    {

        return $this->plan_facturation_params_auto_display_vat;
    }

    /**
     * Get the [plan_fact_lib_facture] column value.
     *
     * @return string
     */
    public function getPlanFactLibFacture()
    {

        return $this->plan_fact_lib_facture;
    }

    /**
     * Get the [plan_fact_info] column value.
     *
     * @return string
     */
    public function getPlanFactInfo()
    {

        return $this->plan_fact_info;
    }

    /**
     * Get the [plan_fact_note_interne] column value.
     *
     * @return string
     */
    public function getPlanFactNoteInterne()
    {

        return $this->plan_fact_note_interne;
    }

    /**
     * Set the value of [plan_fact_id] column.
     *
     * @param  int $v new value
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setPlanFactId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->plan_fact_id !== $v) {
                    $this->plan_fact_id = $v;
                    $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACT_ID;
                }


        return $this;
    } // setPlanFactId()

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setOpId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_id !== $v) {
                    $this->op_id = $v;
                    $this->modifiedColumns[] = PlanFacturationParamsPeer::OP_ID;
                }

        if ($this->aOperations !== null && $this->aOperations->getOpId() !== $v) {
            $this->aOperations = null;
        }


        return $this;
    } // setOpId()

    /**
     * Sets the value of [plan_fact_date_prem_fact] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setPlanFactDatePremFact($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->plan_fact_date_prem_fact !== null || $dt !== null) {
            $currentDateAsString = ($this->plan_fact_date_prem_fact !== null && $tmpDt = new DateTime($this->plan_fact_date_prem_fact)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->plan_fact_date_prem_fact = $newDateAsString;
                $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT;
            }
        } // if either are not null


        return $this;
    } // setPlanFactDatePremFact()

    /**
     * Sets the value of [plan_fact_date_der_fact] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setPlanFactDateDerFact($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->plan_fact_date_der_fact !== null || $dt !== null) {
            $currentDateAsString = ($this->plan_fact_date_der_fact !== null && $tmpDt = new DateTime($this->plan_fact_date_der_fact)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->plan_fact_date_der_fact = $newDateAsString;
                $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT;
            }
        } // if either are not null


        return $this;
    } // setPlanFactDateDerFact()

    /**
     * Set the value of [plan_fact_periode_id] column.
     *
     * @param  int $v new value
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setPlanFactPeriodeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->plan_fact_periode_id !== $v) {
                    $this->plan_fact_periode_id = $v;
                    $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID;
                }


        return $this;
    } // setPlanFactPeriodeId()

    /**
     * Set the value of [plan_fact_periode_type_id] column.
     *
     * @param  int $v new value
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setPlanFactPeriodeTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->plan_fact_periode_type_id !== $v) {
                    $this->plan_fact_periode_type_id = $v;
                    $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID;
                }


        return $this;
    } // setPlanFactPeriodeTypeId()

    /**
     * Set the value of [plan_fact_lib_avoir] column.
     *
     * @param  string $v new value
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setPlanFactLibAvoir($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->plan_fact_lib_avoir !== $v) {
            $this->plan_fact_lib_avoir = $v;
            $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACT_LIB_AVOIR;
        }


        return $this;
    } // setPlanFactLibAvoir()

    /**
     * Set the value of [plan_facturation_params_auto_display_vat] column.
     *
     * @param  int $v new value
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setPlanFacturationParamsAutoDisplayVat($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->plan_facturation_params_auto_display_vat !== $v) {
                    $this->plan_facturation_params_auto_display_vat = $v;
                    $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT;
                }


        return $this;
    } // setPlanFacturationParamsAutoDisplayVat()

    /**
     * Set the value of [plan_fact_lib_facture] column.
     *
     * @param  string $v new value
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setPlanFactLibFacture($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->plan_fact_lib_facture !== $v) {
            $this->plan_fact_lib_facture = $v;
            $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACT_LIB_FACTURE;
        }


        return $this;
    } // setPlanFactLibFacture()

    /**
     * Set the value of [plan_fact_info] column.
     *
     * @param  string $v new value
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setPlanFactInfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->plan_fact_info !== $v) {
            $this->plan_fact_info = $v;
            $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACT_INFO;
        }


        return $this;
    } // setPlanFactInfo()

    /**
     * Set the value of [plan_fact_note_interne] column.
     *
     * @param  string $v new value
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setPlanFactNoteInterne($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->plan_fact_note_interne !== $v) {
            $this->plan_fact_note_interne = $v;
            $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACT_NOTE_INTERNE;
        }


        return $this;
    } // setPlanFactNoteInterne()

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

            $this->plan_fact_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->plan_fact_date_prem_fact = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->plan_fact_date_der_fact = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->plan_fact_periode_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->plan_fact_periode_type_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->plan_fact_lib_avoir = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->plan_facturation_params_auto_display_vat = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->plan_fact_lib_facture = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->plan_fact_info = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->plan_fact_note_interne = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PlanFacturationParams object", $e);
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

        if ($this->aOperations !== null && $this->op_id !== $this->aOperations->getOpId()) {
            $this->aOperations = null;
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
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PlanFacturationParamsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperations = null;
            $this->collFacturess = null;

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
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PlanFacturationParamsQuery::create()
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
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PlanFacturationParamsPeer::addInstanceToPool($this);
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

            if ($this->aOperations !== null) {
                if ($this->aOperations->isModified() || $this->aOperations->isNew()) {
                    $affectedRows += $this->aOperations->save($con);
                }
                $this->setOperations($this->aOperations);
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

            if ($this->facturessScheduledForDeletion !== null) {
                if (!$this->facturessScheduledForDeletion->isEmpty()) {
                    FacturesQuery::create()
                        ->filterByPrimaryKeys($this->facturessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
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

            if ($this->factureEditionHistorysScheduledForDeletion !== null) {
                if (!$this->factureEditionHistorysScheduledForDeletion->isEmpty()) {
                    FactureEditionHistoryQuery::create()
                        ->filterByPrimaryKeys($this->factureEditionHistorysScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
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

        $this->modifiedColumns[] = PlanFacturationParamsPeer::PLAN_FACT_ID;
        if (null !== $this->plan_fact_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PlanFacturationParamsPeer::PLAN_FACT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_id`';
        }
        if ($this->isColumnModified(PlanFacturationParamsPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_date_prem_fact`';
        }
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_date_der_fact`';
        }
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_periode_id`';
        }
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_periode_type_id`';
        }
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_LIB_AVOIR)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_lib_avoir`';
        }
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT)) {
            $modifiedColumns[':p' . $index++]  = '`plan_facturation_params_auto_display_vat`';
        }
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_LIB_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_lib_facture`';
        }
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_INFO)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_info`';
        }
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_NOTE_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`plan_fact_note_interne`';
        }

        $sql = sprintf(
            'INSERT INTO `plan_facturation_params` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`plan_fact_id`':
                        $stmt->bindValue($identifier, $this->plan_fact_id, PDO::PARAM_INT);
                        break;
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`plan_fact_date_prem_fact`':
                        $stmt->bindValue($identifier, $this->plan_fact_date_prem_fact, PDO::PARAM_STR);
                        break;
                    case '`plan_fact_date_der_fact`':
                        $stmt->bindValue($identifier, $this->plan_fact_date_der_fact, PDO::PARAM_STR);
                        break;
                    case '`plan_fact_periode_id`':
                        $stmt->bindValue($identifier, $this->plan_fact_periode_id, PDO::PARAM_INT);
                        break;
                    case '`plan_fact_periode_type_id`':
                        $stmt->bindValue($identifier, $this->plan_fact_periode_type_id, PDO::PARAM_INT);
                        break;
                    case '`plan_fact_lib_avoir`':
                        $stmt->bindValue($identifier, $this->plan_fact_lib_avoir, PDO::PARAM_STR);
                        break;
                    case '`plan_facturation_params_auto_display_vat`':
                        $stmt->bindValue($identifier, $this->plan_facturation_params_auto_display_vat, PDO::PARAM_INT);
                        break;
                    case '`plan_fact_lib_facture`':
                        $stmt->bindValue($identifier, $this->plan_fact_lib_facture, PDO::PARAM_STR);
                        break;
                    case '`plan_fact_info`':
                        $stmt->bindValue($identifier, $this->plan_fact_info, PDO::PARAM_STR);
                        break;
                    case '`plan_fact_note_interne`':
                        $stmt->bindValue($identifier, $this->plan_fact_note_interne, PDO::PARAM_STR);
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
        $this->setPlanFactId($pk);

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

            if ($this->aOperations !== null) {
                if (!$this->aOperations->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperations->getValidationFailures());
                }
            }


            if (($retval = PlanFacturationParamsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFacturess !== null) {
                    foreach ($this->collFacturess as $referrerFK) {
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
        $pos = PlanFacturationParamsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPlanFactId();
                break;
            case 1:
                return $this->getOpId();
                break;
            case 2:
                return $this->getPlanFactDatePremFact();
                break;
            case 3:
                return $this->getPlanFactDateDerFact();
                break;
            case 4:
                return $this->getPlanFactPeriodeId();
                break;
            case 5:
                return $this->getPlanFactPeriodeTypeId();
                break;
            case 6:
                return $this->getPlanFactLibAvoir();
                break;
            case 7:
                return $this->getPlanFacturationParamsAutoDisplayVat();
                break;
            case 8:
                return $this->getPlanFactLibFacture();
                break;
            case 9:
                return $this->getPlanFactInfo();
                break;
            case 10:
                return $this->getPlanFactNoteInterne();
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
        if (isset($alreadyDumpedObjects['PlanFacturationParams'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PlanFacturationParams'][$this->getPrimaryKey()] = true;
        $keys = PlanFacturationParamsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPlanFactId(),
            $keys[1] => $this->getOpId(),
            $keys[2] => $this->getPlanFactDatePremFact(),
            $keys[3] => $this->getPlanFactDateDerFact(),
            $keys[4] => $this->getPlanFactPeriodeId(),
            $keys[5] => $this->getPlanFactPeriodeTypeId(),
            $keys[6] => $this->getPlanFactLibAvoir(),
            $keys[7] => $this->getPlanFacturationParamsAutoDisplayVat(),
            $keys[8] => $this->getPlanFactLibFacture(),
            $keys[9] => $this->getPlanFactInfo(),
            $keys[10] => $this->getPlanFactNoteInterne(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperations) {
                $result['Operations'] = $this->aOperations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collFacturess) {
                $result['Facturess'] = $this->collFacturess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PlanFacturationParamsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPlanFactId($value);
                break;
            case 1:
                $this->setOpId($value);
                break;
            case 2:
                $this->setPlanFactDatePremFact($value);
                break;
            case 3:
                $this->setPlanFactDateDerFact($value);
                break;
            case 4:
                $this->setPlanFactPeriodeId($value);
                break;
            case 5:
                $this->setPlanFactPeriodeTypeId($value);
                break;
            case 6:
                $this->setPlanFactLibAvoir($value);
                break;
            case 7:
                $this->setPlanFacturationParamsAutoDisplayVat($value);
                break;
            case 8:
                $this->setPlanFactLibFacture($value);
                break;
            case 9:
                $this->setPlanFactInfo($value);
                break;
            case 10:
                $this->setPlanFactNoteInterne($value);
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
        $keys = PlanFacturationParamsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setPlanFactId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPlanFactDatePremFact($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPlanFactDateDerFact($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPlanFactPeriodeId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPlanFactPeriodeTypeId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPlanFactLibAvoir($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPlanFacturationParamsAutoDisplayVat($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPlanFactLibFacture($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPlanFactInfo($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPlanFactNoteInterne($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PlanFacturationParamsPeer::DATABASE_NAME);

        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_ID)) $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_ID, $this->plan_fact_id);
        if ($this->isColumnModified(PlanFacturationParamsPeer::OP_ID)) $criteria->add(PlanFacturationParamsPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT)) $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT, $this->plan_fact_date_prem_fact);
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT)) $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT, $this->plan_fact_date_der_fact);
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID)) $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID, $this->plan_fact_periode_id);
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID)) $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID, $this->plan_fact_periode_type_id);
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_LIB_AVOIR)) $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_LIB_AVOIR, $this->plan_fact_lib_avoir);
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT)) $criteria->add(PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT, $this->plan_facturation_params_auto_display_vat);
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_LIB_FACTURE)) $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_LIB_FACTURE, $this->plan_fact_lib_facture);
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_INFO)) $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_INFO, $this->plan_fact_info);
        if ($this->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_NOTE_INTERNE)) $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_NOTE_INTERNE, $this->plan_fact_note_interne);

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
        $criteria = new Criteria(PlanFacturationParamsPeer::DATABASE_NAME);
        $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_ID, $this->plan_fact_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getPlanFactId();
    }

    /**
     * Generic method to set the primary key (plan_fact_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPlanFactId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getPlanFactId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PlanFacturationParams (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpId($this->getOpId());
        $copyObj->setPlanFactDatePremFact($this->getPlanFactDatePremFact());
        $copyObj->setPlanFactDateDerFact($this->getPlanFactDateDerFact());
        $copyObj->setPlanFactPeriodeId($this->getPlanFactPeriodeId());
        $copyObj->setPlanFactPeriodeTypeId($this->getPlanFactPeriodeTypeId());
        $copyObj->setPlanFactLibAvoir($this->getPlanFactLibAvoir());
        $copyObj->setPlanFacturationParamsAutoDisplayVat($this->getPlanFacturationParamsAutoDisplayVat());
        $copyObj->setPlanFactLibFacture($this->getPlanFactLibFacture());
        $copyObj->setPlanFactInfo($this->getPlanFactInfo());
        $copyObj->setPlanFactNoteInterne($this->getPlanFactNoteInterne());

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
            $copyObj->setPlanFactId(NULL); // this is a auto-increment column, so set to default value
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
     * @return PlanFacturationParams Clone of current object.
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
     * @return PlanFacturationParamsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PlanFacturationParamsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return PlanFacturationParams The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperations(Operations $v = null)
    {
        if ($v === null) {
            $this->setOpId(NULL);
        } else {
            $this->setOpId($v->getOpId());
        }

        $this->aOperations = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Operations object, it will not be re-added.
        if ($v !== null) {
            $v->addPlanFacturationParams($this);
        }


        return $this;
    }


    /**
     * Get the associated Operations object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Operations The associated Operations object.
     * @throws PropelException
     */
    public function getOperations(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperations === null && ($this->op_id !== null) && $doQuery) {
            $this->aOperations = OperationsQuery::create()->findPk($this->op_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperations->addPlanFacturationParamss($this);
             */
        }

        return $this->aOperations;
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
     * @return PlanFacturationParams The current object (for fluent API support)
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
     * If this PlanFacturationParams is new, it will return
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
                    ->filterByPlanFacturationParams($this)
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
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setFacturess(PropelCollection $facturess, PropelPDO $con = null)
    {
        $facturessToDelete = $this->getFacturess(new Criteria(), $con)->diff($facturess);


        $this->facturessScheduledForDeletion = $facturessToDelete;

        foreach ($facturessToDelete as $facturesRemoved) {
            $facturesRemoved->setPlanFacturationParams(null);
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
                ->filterByPlanFacturationParams($this)
                ->count($con);
        }

        return count($this->collFacturess);
    }

    /**
     * Method called to associate a Factures object to this object
     * through the Factures foreign key attribute.
     *
     * @param    Factures $l Factures
     * @return PlanFacturationParams The current object (for fluent API support)
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
        $factures->setPlanFacturationParams($this);
    }

    /**
     * @param	Factures $factures The factures object to remove.
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function removeFactures($factures)
    {
        if ($this->getFacturess()->contains($factures)) {
            $this->collFacturess->remove($this->collFacturess->search($factures));
            if (null === $this->facturessScheduledForDeletion) {
                $this->facturessScheduledForDeletion = clone $this->collFacturess;
                $this->facturessScheduledForDeletion->clear();
            }
            $this->facturessScheduledForDeletion[]= clone $factures;
            $factures->setPlanFacturationParams(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinJournalDeVente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('JournalDeVente', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Clears out the collFactureEditionHistorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return PlanFacturationParams The current object (for fluent API support)
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
     * If this PlanFacturationParams is new, it will return
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
                    ->filterByPlanFacturationParams($this)
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
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function setFactureEditionHistorys(PropelCollection $factureEditionHistorys, PropelPDO $con = null)
    {
        $factureEditionHistorysToDelete = $this->getFactureEditionHistorys(new Criteria(), $con)->diff($factureEditionHistorys);


        $this->factureEditionHistorysScheduledForDeletion = $factureEditionHistorysToDelete;

        foreach ($factureEditionHistorysToDelete as $factureEditionHistoryRemoved) {
            $factureEditionHistoryRemoved->setPlanFacturationParams(null);
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
                ->filterByPlanFacturationParams($this)
                ->count($con);
        }

        return count($this->collFactureEditionHistorys);
    }

    /**
     * Method called to associate a FactureEditionHistory object to this object
     * through the FactureEditionHistory foreign key attribute.
     *
     * @param    FactureEditionHistory $l FactureEditionHistory
     * @return PlanFacturationParams The current object (for fluent API support)
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
        $factureEditionHistory->setPlanFacturationParams($this);
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to remove.
     * @return PlanFacturationParams The current object (for fluent API support)
     */
    public function removeFactureEditionHistory($factureEditionHistory)
    {
        if ($this->getFactureEditionHistorys()->contains($factureEditionHistory)) {
            $this->collFactureEditionHistorys->remove($this->collFactureEditionHistorys->search($factureEditionHistory));
            if (null === $this->factureEditionHistorysScheduledForDeletion) {
                $this->factureEditionHistorysScheduledForDeletion = clone $this->collFactureEditionHistorys;
                $this->factureEditionHistorysScheduledForDeletion->clear();
            }
            $this->factureEditionHistorysScheduledForDeletion[]= clone $factureEditionHistory;
            $factureEditionHistory->setPlanFacturationParams(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinJournalDeVente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('JournalDeVente', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
     * Otherwise if this PlanFacturationParams is new, it will return
     * an empty collection; or if this PlanFacturationParams has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationParams.
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
        $this->plan_fact_id = null;
        $this->op_id = null;
        $this->plan_fact_date_prem_fact = null;
        $this->plan_fact_date_der_fact = null;
        $this->plan_fact_periode_id = null;
        $this->plan_fact_periode_type_id = null;
        $this->plan_fact_lib_avoir = null;
        $this->plan_facturation_params_auto_display_vat = null;
        $this->plan_fact_lib_facture = null;
        $this->plan_fact_info = null;
        $this->plan_fact_note_interne = null;
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
            if ($this->collFactureEditionHistorys) {
                foreach ($this->collFactureEditionHistorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aOperations instanceof Persistent) {
              $this->aOperations->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFacturess instanceof PropelCollection) {
            $this->collFacturess->clearIterator();
        }
        $this->collFacturess = null;
        if ($this->collFactureEditionHistorys instanceof PropelCollection) {
            $this->collFactureEditionHistorys->clearIterator();
        }
        $this->collFactureEditionHistorys = null;
        $this->aOperations = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PlanFacturationParamsPeer::DEFAULT_STRING_FORMAT);
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
                return BasePlanFacturationParamsPeer::getConnection();
            }
}
