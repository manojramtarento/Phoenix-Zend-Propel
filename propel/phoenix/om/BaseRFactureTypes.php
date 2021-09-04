<?php


/**
 * Base class that represents a row from the 'r_facture_types' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRFactureTypes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RFactureTypesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RFactureTypesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_fact_type_id field.
     * @var        int
     */
    protected $r_fact_type_id;

    /**
     * The value for the r_fact_type_libelle field.
     * @var        string
     */
    protected $r_fact_type_libelle;

    /**
     * The value for the r_fact_type_libelle_detail field.
     * @var        string
     */
    protected $r_fact_type_libelle_detail;

    /**
     * The value for the r_fact_type_libelle_detail_en field.
     * @var        string
     */
    protected $r_fact_type_libelle_detail_en;

    /**
     * The value for the r_fact_calc_id field.
     * @var        int
     */
    protected $r_fact_calc_id;

    /**
     * The value for the r_fact_pres_id field.
     * @var        int
     */
    protected $r_fact_pres_id;

    /**
     * @var        RFactureCalculs
     */
    protected $aRFactureCalculs;

    /**
     * @var        RFacturePresentations
     */
    protected $aRFacturePresentations;

    /**
     * @var        PropelObjectCollection|Factures[] Collection to store aggregation of Factures objects.
     */
    protected $collFacturess;
    protected $collFacturessPartial;

    /**
     * @var        PropelObjectCollection|PlanFacturationDetails[] Collection to store aggregation of PlanFacturationDetails objects.
     */
    protected $collPlanFacturationDetailss;
    protected $collPlanFacturationDetailssPartial;

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
    protected $planFacturationDetailssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $factureEditionHistorysScheduledForDeletion = null;

    /**
     * Get the [r_fact_type_id] column value.
     *
     * @return int
     */
    public function getRFactTypeId()
    {

        return $this->r_fact_type_id;
    }

    /**
     * Get the [r_fact_type_libelle] column value.
     *
     * @return string
     */
    public function getRFactTypeLibelle()
    {

        return $this->r_fact_type_libelle;
    }

    /**
     * Get the [r_fact_type_libelle_detail] column value.
     *
     * @return string
     */
    public function getRFactTypeLibelleDetail()
    {

        return $this->r_fact_type_libelle_detail;
    }

    /**
     * Get the [r_fact_type_libelle_detail_en] column value.
     *
     * @return string
     */
    public function getRFactTypeLibelleDetailEn()
    {

        return $this->r_fact_type_libelle_detail_en;
    }

    /**
     * Get the [r_fact_calc_id] column value.
     *
     * @return int
     */
    public function getRFactCalcId()
    {

        return $this->r_fact_calc_id;
    }

    /**
     * Get the [r_fact_pres_id] column value.
     *
     * @return int
     */
    public function getRFactPresId()
    {

        return $this->r_fact_pres_id;
    }

    /**
     * Set the value of [r_fact_type_id] column.
     *
     * @param  int $v new value
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function setRFactTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_fact_type_id !== $v) {
                    $this->r_fact_type_id = $v;
                    $this->modifiedColumns[] = RFactureTypesPeer::R_FACT_TYPE_ID;
                }


        return $this;
    } // setRFactTypeId()

    /**
     * Set the value of [r_fact_type_libelle] column.
     *
     * @param  string $v new value
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function setRFactTypeLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_fact_type_libelle !== $v) {
            $this->r_fact_type_libelle = $v;
            $this->modifiedColumns[] = RFactureTypesPeer::R_FACT_TYPE_LIBELLE;
        }


        return $this;
    } // setRFactTypeLibelle()

    /**
     * Set the value of [r_fact_type_libelle_detail] column.
     *
     * @param  string $v new value
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function setRFactTypeLibelleDetail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_fact_type_libelle_detail !== $v) {
            $this->r_fact_type_libelle_detail = $v;
            $this->modifiedColumns[] = RFactureTypesPeer::R_FACT_TYPE_LIBELLE_DETAIL;
        }


        return $this;
    } // setRFactTypeLibelleDetail()

    /**
     * Set the value of [r_fact_type_libelle_detail_en] column.
     *
     * @param  string $v new value
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function setRFactTypeLibelleDetailEn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_fact_type_libelle_detail_en !== $v) {
            $this->r_fact_type_libelle_detail_en = $v;
            $this->modifiedColumns[] = RFactureTypesPeer::R_FACT_TYPE_LIBELLE_DETAIL_EN;
        }


        return $this;
    } // setRFactTypeLibelleDetailEn()

    /**
     * Set the value of [r_fact_calc_id] column.
     *
     * @param  int $v new value
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function setRFactCalcId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_fact_calc_id !== $v) {
                    $this->r_fact_calc_id = $v;
                    $this->modifiedColumns[] = RFactureTypesPeer::R_FACT_CALC_ID;
                }

        if ($this->aRFactureCalculs !== null && $this->aRFactureCalculs->getRFactCalcId() !== $v) {
            $this->aRFactureCalculs = null;
        }


        return $this;
    } // setRFactCalcId()

    /**
     * Set the value of [r_fact_pres_id] column.
     *
     * @param  int $v new value
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function setRFactPresId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_fact_pres_id !== $v) {
                    $this->r_fact_pres_id = $v;
                    $this->modifiedColumns[] = RFactureTypesPeer::R_FACT_PRES_ID;
                }

        if ($this->aRFacturePresentations !== null && $this->aRFacturePresentations->getRFactPresId() !== $v) {
            $this->aRFacturePresentations = null;
        }


        return $this;
    } // setRFactPresId()

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

            $this->r_fact_type_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_fact_type_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_fact_type_libelle_detail = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->r_fact_type_libelle_detail_en = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->r_fact_calc_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->r_fact_pres_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = RFactureTypesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RFactureTypes object", $e);
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

        if ($this->aRFactureCalculs !== null && $this->r_fact_calc_id !== $this->aRFactureCalculs->getRFactCalcId()) {
            $this->aRFactureCalculs = null;
        }
        if ($this->aRFacturePresentations !== null && $this->r_fact_pres_id !== $this->aRFacturePresentations->getRFactPresId()) {
            $this->aRFacturePresentations = null;
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
            $con = Propel::getConnection(RFactureTypesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RFactureTypesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRFactureCalculs = null;
            $this->aRFacturePresentations = null;
            $this->collFacturess = null;

            $this->collPlanFacturationDetailss = null;

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
            $con = Propel::getConnection(RFactureTypesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RFactureTypesQuery::create()
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
            $con = Propel::getConnection(RFactureTypesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RFactureTypesPeer::addInstanceToPool($this);
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

            if ($this->aRFactureCalculs !== null) {
                if ($this->aRFactureCalculs->isModified() || $this->aRFactureCalculs->isNew()) {
                    $affectedRows += $this->aRFactureCalculs->save($con);
                }
                $this->setRFactureCalculs($this->aRFactureCalculs);
            }

            if ($this->aRFacturePresentations !== null) {
                if ($this->aRFacturePresentations->isModified() || $this->aRFacturePresentations->isNew()) {
                    $affectedRows += $this->aRFacturePresentations->save($con);
                }
                $this->setRFacturePresentations($this->aRFacturePresentations);
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

            if ($this->planFacturationDetailssScheduledForDeletion !== null) {
                if (!$this->planFacturationDetailssScheduledForDeletion->isEmpty()) {
                    PlanFacturationDetailsQuery::create()
                        ->filterByPrimaryKeys($this->planFacturationDetailssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->planFacturationDetailssScheduledForDeletion = null;
                }
            }

            if ($this->collPlanFacturationDetailss !== null) {
                foreach ($this->collPlanFacturationDetailss as $referrerFK) {
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_fact_type_id`';
        }
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_TYPE_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_fact_type_libelle`';
        }
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_TYPE_LIBELLE_DETAIL)) {
            $modifiedColumns[':p' . $index++]  = '`r_fact_type_libelle_detail`';
        }
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_TYPE_LIBELLE_DETAIL_EN)) {
            $modifiedColumns[':p' . $index++]  = '`r_fact_type_libelle_detail_en`';
        }
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_CALC_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_fact_calc_id`';
        }
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_PRES_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_fact_pres_id`';
        }

        $sql = sprintf(
            'INSERT INTO `r_facture_types` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_fact_type_id`':
                        $stmt->bindValue($identifier, $this->r_fact_type_id, PDO::PARAM_INT);
                        break;
                    case '`r_fact_type_libelle`':
                        $stmt->bindValue($identifier, $this->r_fact_type_libelle, PDO::PARAM_STR);
                        break;
                    case '`r_fact_type_libelle_detail`':
                        $stmt->bindValue($identifier, $this->r_fact_type_libelle_detail, PDO::PARAM_STR);
                        break;
                    case '`r_fact_type_libelle_detail_en`':
                        $stmt->bindValue($identifier, $this->r_fact_type_libelle_detail_en, PDO::PARAM_STR);
                        break;
                    case '`r_fact_calc_id`':
                        $stmt->bindValue($identifier, $this->r_fact_calc_id, PDO::PARAM_INT);
                        break;
                    case '`r_fact_pres_id`':
                        $stmt->bindValue($identifier, $this->r_fact_pres_id, PDO::PARAM_INT);
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

            if ($this->aRFactureCalculs !== null) {
                if (!$this->aRFactureCalculs->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRFactureCalculs->getValidationFailures());
                }
            }

            if ($this->aRFacturePresentations !== null) {
                if (!$this->aRFacturePresentations->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRFacturePresentations->getValidationFailures());
                }
            }


            if (($retval = RFactureTypesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFacturess !== null) {
                    foreach ($this->collFacturess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPlanFacturationDetailss !== null) {
                    foreach ($this->collPlanFacturationDetailss as $referrerFK) {
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
        $pos = RFactureTypesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRFactTypeId();
                break;
            case 1:
                return $this->getRFactTypeLibelle();
                break;
            case 2:
                return $this->getRFactTypeLibelleDetail();
                break;
            case 3:
                return $this->getRFactTypeLibelleDetailEn();
                break;
            case 4:
                return $this->getRFactCalcId();
                break;
            case 5:
                return $this->getRFactPresId();
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
        if (isset($alreadyDumpedObjects['RFactureTypes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RFactureTypes'][$this->getPrimaryKey()] = true;
        $keys = RFactureTypesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRFactTypeId(),
            $keys[1] => $this->getRFactTypeLibelle(),
            $keys[2] => $this->getRFactTypeLibelleDetail(),
            $keys[3] => $this->getRFactTypeLibelleDetailEn(),
            $keys[4] => $this->getRFactCalcId(),
            $keys[5] => $this->getRFactPresId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRFactureCalculs) {
                $result['RFactureCalculs'] = $this->aRFactureCalculs->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRFacturePresentations) {
                $result['RFacturePresentations'] = $this->aRFacturePresentations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collFacturess) {
                $result['Facturess'] = $this->collFacturess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPlanFacturationDetailss) {
                $result['PlanFacturationDetailss'] = $this->collPlanFacturationDetailss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RFactureTypesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRFactTypeId($value);
                break;
            case 1:
                $this->setRFactTypeLibelle($value);
                break;
            case 2:
                $this->setRFactTypeLibelleDetail($value);
                break;
            case 3:
                $this->setRFactTypeLibelleDetailEn($value);
                break;
            case 4:
                $this->setRFactCalcId($value);
                break;
            case 5:
                $this->setRFactPresId($value);
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
        $keys = RFactureTypesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRFactTypeId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRFactTypeLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRFactTypeLibelleDetail($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRFactTypeLibelleDetailEn($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRFactCalcId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRFactPresId($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RFactureTypesPeer::DATABASE_NAME);

        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_TYPE_ID)) $criteria->add(RFactureTypesPeer::R_FACT_TYPE_ID, $this->r_fact_type_id);
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_TYPE_LIBELLE)) $criteria->add(RFactureTypesPeer::R_FACT_TYPE_LIBELLE, $this->r_fact_type_libelle);
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_TYPE_LIBELLE_DETAIL)) $criteria->add(RFactureTypesPeer::R_FACT_TYPE_LIBELLE_DETAIL, $this->r_fact_type_libelle_detail);
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_TYPE_LIBELLE_DETAIL_EN)) $criteria->add(RFactureTypesPeer::R_FACT_TYPE_LIBELLE_DETAIL_EN, $this->r_fact_type_libelle_detail_en);
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_CALC_ID)) $criteria->add(RFactureTypesPeer::R_FACT_CALC_ID, $this->r_fact_calc_id);
        if ($this->isColumnModified(RFactureTypesPeer::R_FACT_PRES_ID)) $criteria->add(RFactureTypesPeer::R_FACT_PRES_ID, $this->r_fact_pres_id);

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
        $criteria = new Criteria(RFactureTypesPeer::DATABASE_NAME);
        $criteria->add(RFactureTypesPeer::R_FACT_TYPE_ID, $this->r_fact_type_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRFactTypeId();
    }

    /**
     * Generic method to set the primary key (r_fact_type_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRFactTypeId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRFactTypeId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RFactureTypes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRFactTypeLibelle($this->getRFactTypeLibelle());
        $copyObj->setRFactTypeLibelleDetail($this->getRFactTypeLibelleDetail());
        $copyObj->setRFactTypeLibelleDetailEn($this->getRFactTypeLibelleDetailEn());
        $copyObj->setRFactCalcId($this->getRFactCalcId());
        $copyObj->setRFactPresId($this->getRFactPresId());

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

            foreach ($this->getPlanFacturationDetailss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPlanFacturationDetails($relObj->copy($deepCopy));
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
            $copyObj->setRFactTypeId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RFactureTypes Clone of current object.
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
     * @return RFactureTypesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RFactureTypesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a RFactureCalculs object.
     *
     * @param                  RFactureCalculs $v
     * @return RFactureTypes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRFactureCalculs(RFactureCalculs $v = null)
    {
        if ($v === null) {
            $this->setRFactCalcId(NULL);
        } else {
            $this->setRFactCalcId($v->getRFactCalcId());
        }

        $this->aRFactureCalculs = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RFactureCalculs object, it will not be re-added.
        if ($v !== null) {
            $v->addRFactureTypes($this);
        }


        return $this;
    }


    /**
     * Get the associated RFactureCalculs object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RFactureCalculs The associated RFactureCalculs object.
     * @throws PropelException
     */
    public function getRFactureCalculs(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRFactureCalculs === null && ($this->r_fact_calc_id !== null) && $doQuery) {
            $this->aRFactureCalculs = RFactureCalculsQuery::create()->findPk($this->r_fact_calc_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRFactureCalculs->addRFactureTypess($this);
             */
        }

        return $this->aRFactureCalculs;
    }

    /**
     * Declares an association between this object and a RFacturePresentations object.
     *
     * @param                  RFacturePresentations $v
     * @return RFactureTypes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRFacturePresentations(RFacturePresentations $v = null)
    {
        if ($v === null) {
            $this->setRFactPresId(NULL);
        } else {
            $this->setRFactPresId($v->getRFactPresId());
        }

        $this->aRFacturePresentations = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RFacturePresentations object, it will not be re-added.
        if ($v !== null) {
            $v->addRFactureTypes($this);
        }


        return $this;
    }


    /**
     * Get the associated RFacturePresentations object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RFacturePresentations The associated RFacturePresentations object.
     * @throws PropelException
     */
    public function getRFacturePresentations(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRFacturePresentations === null && ($this->r_fact_pres_id !== null) && $doQuery) {
            $this->aRFacturePresentations = RFacturePresentationsQuery::create()->findPk($this->r_fact_pres_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRFacturePresentations->addRFactureTypess($this);
             */
        }

        return $this->aRFacturePresentations;
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
        if ('PlanFacturationDetails' == $relationName) {
            $this->initPlanFacturationDetailss();
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
     * @return RFactureTypes The current object (for fluent API support)
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
     * If this RFactureTypes is new, it will return
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
                    ->filterByRFactureTypes($this)
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
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function setFacturess(PropelCollection $facturess, PropelPDO $con = null)
    {
        $facturessToDelete = $this->getFacturess(new Criteria(), $con)->diff($facturess);


        $this->facturessScheduledForDeletion = $facturessToDelete;

        foreach ($facturessToDelete as $facturesRemoved) {
            $facturesRemoved->setRFactureTypes(null);
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
                ->filterByRFactureTypes($this)
                ->count($con);
        }

        return count($this->collFacturess);
    }

    /**
     * Method called to associate a Factures object to this object
     * through the Factures foreign key attribute.
     *
     * @param    Factures $l Factures
     * @return RFactureTypes The current object (for fluent API support)
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
        $factures->setRFactureTypes($this);
    }

    /**
     * @param	Factures $factures The factures object to remove.
     * @return RFactureTypes The current object (for fluent API support)
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
            $factures->setRFactureTypes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Clears out the collPlanFacturationDetailss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RFactureTypes The current object (for fluent API support)
     * @see        addPlanFacturationDetailss()
     */
    public function clearPlanFacturationDetailss()
    {
        $this->collPlanFacturationDetailss = null; // important to set this to null since that means it is uninitialized
        $this->collPlanFacturationDetailssPartial = null;

        return $this;
    }

    /**
     * reset is the collPlanFacturationDetailss collection loaded partially
     *
     * @return void
     */
    public function resetPartialPlanFacturationDetailss($v = true)
    {
        $this->collPlanFacturationDetailssPartial = $v;
    }

    /**
     * Initializes the collPlanFacturationDetailss collection.
     *
     * By default this just sets the collPlanFacturationDetailss collection to an empty array (like clearcollPlanFacturationDetailss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPlanFacturationDetailss($overrideExisting = true)
    {
        if (null !== $this->collPlanFacturationDetailss && !$overrideExisting) {
            return;
        }
        $this->collPlanFacturationDetailss = new PropelObjectCollection();
        $this->collPlanFacturationDetailss->setModel('PlanFacturationDetails');
    }

    /**
     * Gets an array of PlanFacturationDetails objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RFactureTypes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     * @throws PropelException
     */
    public function getPlanFacturationDetailss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPlanFacturationDetailssPartial && !$this->isNew();
        if (null === $this->collPlanFacturationDetailss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPlanFacturationDetailss) {
                // return empty collection
                $this->initPlanFacturationDetailss();
            } else {
                $collPlanFacturationDetailss = PlanFacturationDetailsQuery::create(null, $criteria)
                    ->filterByRFactureTypes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPlanFacturationDetailssPartial && count($collPlanFacturationDetailss)) {
                      $this->initPlanFacturationDetailss(false);

                      foreach ($collPlanFacturationDetailss as $obj) {
                        if (false == $this->collPlanFacturationDetailss->contains($obj)) {
                          $this->collPlanFacturationDetailss->append($obj);
                        }
                      }

                      $this->collPlanFacturationDetailssPartial = true;
                    }

                    $collPlanFacturationDetailss->getInternalIterator()->rewind();

                    return $collPlanFacturationDetailss;
                }

                if ($partial && $this->collPlanFacturationDetailss) {
                    foreach ($this->collPlanFacturationDetailss as $obj) {
                        if ($obj->isNew()) {
                            $collPlanFacturationDetailss[] = $obj;
                        }
                    }
                }

                $this->collPlanFacturationDetailss = $collPlanFacturationDetailss;
                $this->collPlanFacturationDetailssPartial = false;
            }
        }

        return $this->collPlanFacturationDetailss;
    }

    /**
     * Sets a collection of PlanFacturationDetails objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $planFacturationDetailss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function setPlanFacturationDetailss(PropelCollection $planFacturationDetailss, PropelPDO $con = null)
    {
        $planFacturationDetailssToDelete = $this->getPlanFacturationDetailss(new Criteria(), $con)->diff($planFacturationDetailss);


        $this->planFacturationDetailssScheduledForDeletion = $planFacturationDetailssToDelete;

        foreach ($planFacturationDetailssToDelete as $planFacturationDetailsRemoved) {
            $planFacturationDetailsRemoved->setRFactureTypes(null);
        }

        $this->collPlanFacturationDetailss = null;
        foreach ($planFacturationDetailss as $planFacturationDetails) {
            $this->addPlanFacturationDetails($planFacturationDetails);
        }

        $this->collPlanFacturationDetailss = $planFacturationDetailss;
        $this->collPlanFacturationDetailssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PlanFacturationDetails objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related PlanFacturationDetails objects.
     * @throws PropelException
     */
    public function countPlanFacturationDetailss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPlanFacturationDetailssPartial && !$this->isNew();
        if (null === $this->collPlanFacturationDetailss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPlanFacturationDetailss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPlanFacturationDetailss());
            }
            $query = PlanFacturationDetailsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRFactureTypes($this)
                ->count($con);
        }

        return count($this->collPlanFacturationDetailss);
    }

    /**
     * Method called to associate a PlanFacturationDetails object to this object
     * through the PlanFacturationDetails foreign key attribute.
     *
     * @param    PlanFacturationDetails $l PlanFacturationDetails
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function addPlanFacturationDetails(PlanFacturationDetails $l)
    {
        if ($this->collPlanFacturationDetailss === null) {
            $this->initPlanFacturationDetailss();
            $this->collPlanFacturationDetailssPartial = true;
        }

        if (!in_array($l, $this->collPlanFacturationDetailss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPlanFacturationDetails($l);

            if ($this->planFacturationDetailssScheduledForDeletion and $this->planFacturationDetailssScheduledForDeletion->contains($l)) {
                $this->planFacturationDetailssScheduledForDeletion->remove($this->planFacturationDetailssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	PlanFacturationDetails $planFacturationDetails The planFacturationDetails object to add.
     */
    protected function doAddPlanFacturationDetails($planFacturationDetails)
    {
        $this->collPlanFacturationDetailss[]= $planFacturationDetails;
        $planFacturationDetails->setRFactureTypes($this);
    }

    /**
     * @param	PlanFacturationDetails $planFacturationDetails The planFacturationDetails object to remove.
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function removePlanFacturationDetails($planFacturationDetails)
    {
        if ($this->getPlanFacturationDetailss()->contains($planFacturationDetails)) {
            $this->collPlanFacturationDetailss->remove($this->collPlanFacturationDetailss->search($planFacturationDetails));
            if (null === $this->planFacturationDetailssScheduledForDeletion) {
                $this->planFacturationDetailssScheduledForDeletion = clone $this->collPlanFacturationDetailss;
                $this->planFacturationDetailssScheduledForDeletion->clear();
            }
            $this->planFacturationDetailssScheduledForDeletion[]= clone $planFacturationDetails;
            $planFacturationDetails->setRFactureTypes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related PlanFacturationDetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getPlanFacturationDetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related PlanFacturationDetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssJoinFactureToCancel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('FactureToCancel', $join_behavior);

        return $this->getPlanFacturationDetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related PlanFacturationDetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssJoinPlanFacturationDetailToCancel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('PlanFacturationDetailToCancel', $join_behavior);

        return $this->getPlanFacturationDetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related PlanFacturationDetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssJoinFactureGenerated($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('FactureGenerated', $join_behavior);

        return $this->getPlanFacturationDetailss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related PlanFacturationDetailss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssJoinInvoiceCancellationMotive($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('InvoiceCancellationMotive', $join_behavior);

        return $this->getPlanFacturationDetailss($query, $con);
    }

    /**
     * Clears out the collFactureEditionHistorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RFactureTypes The current object (for fluent API support)
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
     * If this RFactureTypes is new, it will return
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
                    ->filterByRFactureTypes($this)
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
     * @return RFactureTypes The current object (for fluent API support)
     */
    public function setFactureEditionHistorys(PropelCollection $factureEditionHistorys, PropelPDO $con = null)
    {
        $factureEditionHistorysToDelete = $this->getFactureEditionHistorys(new Criteria(), $con)->diff($factureEditionHistorys);


        $this->factureEditionHistorysScheduledForDeletion = $factureEditionHistorysToDelete;

        foreach ($factureEditionHistorysToDelete as $factureEditionHistoryRemoved) {
            $factureEditionHistoryRemoved->setRFactureTypes(null);
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
                ->filterByRFactureTypes($this)
                ->count($con);
        }

        return count($this->collFactureEditionHistorys);
    }

    /**
     * Method called to associate a FactureEditionHistory object to this object
     * through the FactureEditionHistory foreign key attribute.
     *
     * @param    FactureEditionHistory $l FactureEditionHistory
     * @return RFactureTypes The current object (for fluent API support)
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
        $factureEditionHistory->setRFactureTypes($this);
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to remove.
     * @return RFactureTypes The current object (for fluent API support)
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
            $factureEditionHistory->setRFactureTypes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
     * Otherwise if this RFactureTypes is new, it will return
     * an empty collection; or if this RFactureTypes has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RFactureTypes.
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
        $this->r_fact_type_id = null;
        $this->r_fact_type_libelle = null;
        $this->r_fact_type_libelle_detail = null;
        $this->r_fact_type_libelle_detail_en = null;
        $this->r_fact_calc_id = null;
        $this->r_fact_pres_id = null;
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
            if ($this->collPlanFacturationDetailss) {
                foreach ($this->collPlanFacturationDetailss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFactureEditionHistorys) {
                foreach ($this->collFactureEditionHistorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aRFactureCalculs instanceof Persistent) {
              $this->aRFactureCalculs->clearAllReferences($deep);
            }
            if ($this->aRFacturePresentations instanceof Persistent) {
              $this->aRFacturePresentations->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFacturess instanceof PropelCollection) {
            $this->collFacturess->clearIterator();
        }
        $this->collFacturess = null;
        if ($this->collPlanFacturationDetailss instanceof PropelCollection) {
            $this->collPlanFacturationDetailss->clearIterator();
        }
        $this->collPlanFacturationDetailss = null;
        if ($this->collFactureEditionHistorys instanceof PropelCollection) {
            $this->collFactureEditionHistorys->clearIterator();
        }
        $this->collFactureEditionHistorys = null;
        $this->aRFactureCalculs = null;
        $this->aRFacturePresentations = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RFactureTypesPeer::DEFAULT_STRING_FORMAT);
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
                return BaseRFactureTypesPeer::getConnection();
            }
}
