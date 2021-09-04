<?php


/**
 * Base class that represents a row from the 'r_operation_type_sub_tpl' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTpl extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ROperationTypeSubTplPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ROperationTypeSubTplPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the ost_tpl_id field.
     * @var        int
     */
    protected $ost_tpl_id;

    /**
     * The value for the ost_tpl_libelle field.
     * @var        string
     */
    protected $ost_tpl_libelle;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationss;
    protected $collOperationssPartial;

    /**
     * @var        PropelObjectCollection|ROperationTypeSubTplPrestation[] Collection to store aggregation of ROperationTypeSubTplPrestation objects.
     */
    protected $collROperationTypeSubTplPrestations;
    protected $collROperationTypeSubTplPrestationsPartial;

    /**
     * @var        PropelObjectCollection|ROperationTypeSubTplPrime[] Collection to store aggregation of ROperationTypeSubTplPrime objects.
     */
    protected $collROperationTypeSubTplPrimes;
    protected $collROperationTypeSubTplPrimesPartial;

    /**
     * @var        PropelObjectCollection|ROperationTypeSubTplRubrique[] Collection to store aggregation of ROperationTypeSubTplRubrique objects.
     */
    protected $collROperationTypeSubTplRubriques;
    protected $collROperationTypeSubTplRubriquesPartial;

    /**
     * @var        PropelObjectCollection|ROperationTypeSubTplScenario[] Collection to store aggregation of ROperationTypeSubTplScenario objects.
     */
    protected $collROperationTypeSubTplScenarios;
    protected $collROperationTypeSubTplScenariosPartial;

    /**
     * @var        PropelObjectCollection|ROperationTypeSubTplCultures[] Collection to store aggregation of ROperationTypeSubTplCultures objects.
     */
    protected $collROperationTypeSubTplCulturess;
    protected $collROperationTypeSubTplCulturessPartial;

    /**
     * @var        PropelObjectCollection|ROperationTypeSubTplCurrencies[] Collection to store aggregation of ROperationTypeSubTplCurrencies objects.
     */
    protected $collROperationTypeSubTplCurrenciess;
    protected $collROperationTypeSubTplCurrenciessPartial;

    /**
     * @var        PropelObjectCollection|LnkROperationTypeSubTemplateMediasUniverses[] Collection to store aggregation of LnkROperationTypeSubTemplateMediasUniverses objects.
     */
    protected $collLnkROperationTypeSubTemplateMediasUniversess;
    protected $collLnkROperationTypeSubTemplateMediasUniversessPartial;

    /**
     * @var        PropelObjectCollection|ROperationTypeSubTplCountries[] Collection to store aggregation of ROperationTypeSubTplCountries objects.
     */
    protected $collROperationTypeSubTplCountriess;
    protected $collROperationTypeSubTplCountriessPartial;

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
    protected $rOperationTypeSubTplPrestationsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationTypeSubTplPrimesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationTypeSubTplRubriquesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationTypeSubTplScenariosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationTypeSubTplCulturessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationTypeSubTplCurrenciessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationTypeSubTplCountriessScheduledForDeletion = null;

    /**
     * Get the [ost_tpl_id] column value.
     *
     * @return int
     */
    public function getOstTplId()
    {

        return $this->ost_tpl_id;
    }

    /**
     * Get the [ost_tpl_libelle] column value.
     *
     * @return string
     */
    public function getOstTplLibelle()
    {

        return $this->ost_tpl_libelle;
    }

    /**
     * Set the value of [ost_tpl_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setOstTplId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ost_tpl_id !== $v) {
                    $this->ost_tpl_id = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplPeer::OST_TPL_ID;
                }


        return $this;
    } // setOstTplId()

    /**
     * Set the value of [ost_tpl_libelle] column.
     *
     * @param  string $v new value
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setOstTplLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ost_tpl_libelle !== $v) {
            $this->ost_tpl_libelle = $v;
            $this->modifiedColumns[] = ROperationTypeSubTplPeer::OST_TPL_LIBELLE;
        }


        return $this;
    } // setOstTplLibelle()

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

            $this->ost_tpl_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->ost_tpl_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 2; // 2 = ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ROperationTypeSubTpl object", $e);
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
            $con = Propel::getConnection(ROperationTypeSubTplPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ROperationTypeSubTplPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collOperationss = null;

            $this->collROperationTypeSubTplPrestations = null;

            $this->collROperationTypeSubTplPrimes = null;

            $this->collROperationTypeSubTplRubriques = null;

            $this->collROperationTypeSubTplScenarios = null;

            $this->collROperationTypeSubTplCulturess = null;

            $this->collROperationTypeSubTplCurrenciess = null;

            $this->collLnkROperationTypeSubTemplateMediasUniversess = null;

            $this->collROperationTypeSubTplCountriess = null;

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
            $con = Propel::getConnection(ROperationTypeSubTplPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ROperationTypeSubTplQuery::create()
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
            $con = Propel::getConnection(ROperationTypeSubTplPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ROperationTypeSubTplPeer::addInstanceToPool($this);
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
                    foreach ($this->operationssScheduledForDeletion as $operations) {
                        // need to save related object because we set the relation to null
                        $operations->save($con);
                    }
                    $this->operationssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationss !== null) {
                foreach ($this->collOperationss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rOperationTypeSubTplPrestationsScheduledForDeletion !== null) {
                if (!$this->rOperationTypeSubTplPrestationsScheduledForDeletion->isEmpty()) {
                    ROperationTypeSubTplPrestationQuery::create()
                        ->filterByPrimaryKeys($this->rOperationTypeSubTplPrestationsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->rOperationTypeSubTplPrestationsScheduledForDeletion = null;
                }
            }

            if ($this->collROperationTypeSubTplPrestations !== null) {
                foreach ($this->collROperationTypeSubTplPrestations as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rOperationTypeSubTplPrimesScheduledForDeletion !== null) {
                if (!$this->rOperationTypeSubTplPrimesScheduledForDeletion->isEmpty()) {
                    foreach ($this->rOperationTypeSubTplPrimesScheduledForDeletion as $rOperationTypeSubTplPrime) {
                        // need to save related object because we set the relation to null
                        $rOperationTypeSubTplPrime->save($con);
                    }
                    $this->rOperationTypeSubTplPrimesScheduledForDeletion = null;
                }
            }

            if ($this->collROperationTypeSubTplPrimes !== null) {
                foreach ($this->collROperationTypeSubTplPrimes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rOperationTypeSubTplRubriquesScheduledForDeletion !== null) {
                if (!$this->rOperationTypeSubTplRubriquesScheduledForDeletion->isEmpty()) {
                    foreach ($this->rOperationTypeSubTplRubriquesScheduledForDeletion as $rOperationTypeSubTplRubrique) {
                        // need to save related object because we set the relation to null
                        $rOperationTypeSubTplRubrique->save($con);
                    }
                    $this->rOperationTypeSubTplRubriquesScheduledForDeletion = null;
                }
            }

            if ($this->collROperationTypeSubTplRubriques !== null) {
                foreach ($this->collROperationTypeSubTplRubriques as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rOperationTypeSubTplScenariosScheduledForDeletion !== null) {
                if (!$this->rOperationTypeSubTplScenariosScheduledForDeletion->isEmpty()) {
                    ROperationTypeSubTplScenarioQuery::create()
                        ->filterByPrimaryKeys($this->rOperationTypeSubTplScenariosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->rOperationTypeSubTplScenariosScheduledForDeletion = null;
                }
            }

            if ($this->collROperationTypeSubTplScenarios !== null) {
                foreach ($this->collROperationTypeSubTplScenarios as $referrerFK) {
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

            if ($this->rOperationTypeSubTplCurrenciessScheduledForDeletion !== null) {
                if (!$this->rOperationTypeSubTplCurrenciessScheduledForDeletion->isEmpty()) {
                    foreach ($this->rOperationTypeSubTplCurrenciessScheduledForDeletion as $rOperationTypeSubTplCurrencies) {
                        // need to save related object because we set the relation to null
                        $rOperationTypeSubTplCurrencies->save($con);
                    }
                    $this->rOperationTypeSubTplCurrenciessScheduledForDeletion = null;
                }
            }

            if ($this->collROperationTypeSubTplCurrenciess !== null) {
                foreach ($this->collROperationTypeSubTplCurrenciess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion !== null) {
                if (!$this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion->isEmpty()) {
                    foreach ($this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion as $lnkROperationTypeSubTemplateMediasUniverses) {
                        // need to save related object because we set the relation to null
                        $lnkROperationTypeSubTemplateMediasUniverses->save($con);
                    }
                    $this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion = null;
                }
            }

            if ($this->collLnkROperationTypeSubTemplateMediasUniversess !== null) {
                foreach ($this->collLnkROperationTypeSubTemplateMediasUniversess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rOperationTypeSubTplCountriessScheduledForDeletion !== null) {
                if (!$this->rOperationTypeSubTplCountriessScheduledForDeletion->isEmpty()) {
                    foreach ($this->rOperationTypeSubTplCountriessScheduledForDeletion as $rOperationTypeSubTplCountries) {
                        // need to save related object because we set the relation to null
                        $rOperationTypeSubTplCountries->save($con);
                    }
                    $this->rOperationTypeSubTplCountriessScheduledForDeletion = null;
                }
            }

            if ($this->collROperationTypeSubTplCountriess !== null) {
                foreach ($this->collROperationTypeSubTplCountriess as $referrerFK) {
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

        $this->modifiedColumns[] = ROperationTypeSubTplPeer::OST_TPL_ID;
        if (null !== $this->ost_tpl_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ROperationTypeSubTplPeer::OST_TPL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ROperationTypeSubTplPeer::OST_TPL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplPeer::OST_TPL_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_libelle`';
        }

        $sql = sprintf(
            'INSERT INTO `r_operation_type_sub_tpl` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ost_tpl_id`':
                        $stmt->bindValue($identifier, $this->ost_tpl_id, PDO::PARAM_INT);
                        break;
                    case '`ost_tpl_libelle`':
                        $stmt->bindValue($identifier, $this->ost_tpl_libelle, PDO::PARAM_STR);
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
        $this->setOstTplId($pk);

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


            if (($retval = ROperationTypeSubTplPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOperationss !== null) {
                    foreach ($this->collOperationss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collROperationTypeSubTplPrestations !== null) {
                    foreach ($this->collROperationTypeSubTplPrestations as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collROperationTypeSubTplPrimes !== null) {
                    foreach ($this->collROperationTypeSubTplPrimes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collROperationTypeSubTplRubriques !== null) {
                    foreach ($this->collROperationTypeSubTplRubriques as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collROperationTypeSubTplScenarios !== null) {
                    foreach ($this->collROperationTypeSubTplScenarios as $referrerFK) {
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

                if ($this->collROperationTypeSubTplCurrenciess !== null) {
                    foreach ($this->collROperationTypeSubTplCurrenciess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkROperationTypeSubTemplateMediasUniversess !== null) {
                    foreach ($this->collLnkROperationTypeSubTemplateMediasUniversess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collROperationTypeSubTplCountriess !== null) {
                    foreach ($this->collROperationTypeSubTplCountriess as $referrerFK) {
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
        $pos = ROperationTypeSubTplPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOstTplId();
                break;
            case 1:
                return $this->getOstTplLibelle();
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
        if (isset($alreadyDumpedObjects['ROperationTypeSubTpl'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ROperationTypeSubTpl'][$this->getPrimaryKey()] = true;
        $keys = ROperationTypeSubTplPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOstTplId(),
            $keys[1] => $this->getOstTplLibelle(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collOperationss) {
                $result['Operationss'] = $this->collOperationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationTypeSubTplPrestations) {
                $result['ROperationTypeSubTplPrestations'] = $this->collROperationTypeSubTplPrestations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationTypeSubTplPrimes) {
                $result['ROperationTypeSubTplPrimes'] = $this->collROperationTypeSubTplPrimes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationTypeSubTplRubriques) {
                $result['ROperationTypeSubTplRubriques'] = $this->collROperationTypeSubTplRubriques->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationTypeSubTplScenarios) {
                $result['ROperationTypeSubTplScenarios'] = $this->collROperationTypeSubTplScenarios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationTypeSubTplCulturess) {
                $result['ROperationTypeSubTplCulturess'] = $this->collROperationTypeSubTplCulturess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationTypeSubTplCurrenciess) {
                $result['ROperationTypeSubTplCurrenciess'] = $this->collROperationTypeSubTplCurrenciess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkROperationTypeSubTemplateMediasUniversess) {
                $result['LnkROperationTypeSubTemplateMediasUniversess'] = $this->collLnkROperationTypeSubTemplateMediasUniversess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collROperationTypeSubTplCountriess) {
                $result['ROperationTypeSubTplCountriess'] = $this->collROperationTypeSubTplCountriess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ROperationTypeSubTplPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOstTplId($value);
                break;
            case 1:
                $this->setOstTplLibelle($value);
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
        $keys = ROperationTypeSubTplPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOstTplId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOstTplLibelle($arr[$keys[1]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ROperationTypeSubTplPeer::DATABASE_NAME);

        if ($this->isColumnModified(ROperationTypeSubTplPeer::OST_TPL_ID)) $criteria->add(ROperationTypeSubTplPeer::OST_TPL_ID, $this->ost_tpl_id);
        if ($this->isColumnModified(ROperationTypeSubTplPeer::OST_TPL_LIBELLE)) $criteria->add(ROperationTypeSubTplPeer::OST_TPL_LIBELLE, $this->ost_tpl_libelle);

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
        $criteria = new Criteria(ROperationTypeSubTplPeer::DATABASE_NAME);
        $criteria->add(ROperationTypeSubTplPeer::OST_TPL_ID, $this->ost_tpl_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOstTplId();
    }

    /**
     * Generic method to set the primary key (ost_tpl_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOstTplId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOstTplId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ROperationTypeSubTpl (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOstTplLibelle($this->getOstTplLibelle());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOperationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperations($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationTypeSubTplPrestations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeSubTplPrestation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationTypeSubTplPrimes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeSubTplPrime($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationTypeSubTplRubriques() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeSubTplRubrique($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationTypeSubTplScenarios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeSubTplScenario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationTypeSubTplCulturess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeSubTplCultures($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationTypeSubTplCurrenciess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeSubTplCurrencies($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkROperationTypeSubTemplateMediasUniversess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkROperationTypeSubTemplateMediasUniverses($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getROperationTypeSubTplCountriess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addROperationTypeSubTplCountries($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOstTplId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ROperationTypeSubTpl Clone of current object.
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
     * @return ROperationTypeSubTplPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ROperationTypeSubTplPeer();
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
        if ('Operations' == $relationName) {
            $this->initOperationss();
        }
        if ('ROperationTypeSubTplPrestation' == $relationName) {
            $this->initROperationTypeSubTplPrestations();
        }
        if ('ROperationTypeSubTplPrime' == $relationName) {
            $this->initROperationTypeSubTplPrimes();
        }
        if ('ROperationTypeSubTplRubrique' == $relationName) {
            $this->initROperationTypeSubTplRubriques();
        }
        if ('ROperationTypeSubTplScenario' == $relationName) {
            $this->initROperationTypeSubTplScenarios();
        }
        if ('ROperationTypeSubTplCultures' == $relationName) {
            $this->initROperationTypeSubTplCulturess();
        }
        if ('ROperationTypeSubTplCurrencies' == $relationName) {
            $this->initROperationTypeSubTplCurrenciess();
        }
        if ('LnkROperationTypeSubTemplateMediasUniverses' == $relationName) {
            $this->initLnkROperationTypeSubTemplateMediasUniversess();
        }
        if ('ROperationTypeSubTplCountries' == $relationName) {
            $this->initROperationTypeSubTplCountriess();
        }
    }

    /**
     * Clears out the collOperationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     * @see        addOperationss()
     */
    public function clearOperationss()
    {
        $this->collOperationss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationss($v = true)
    {
        $this->collOperationssPartial = $v;
    }

    /**
     * Initializes the collOperationss collection.
     *
     * By default this just sets the collOperationss collection to an empty array (like clearcollOperationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationss($overrideExisting = true)
    {
        if (null !== $this->collOperationss && !$overrideExisting) {
            return;
        }
        $this->collOperationss = new PropelObjectCollection();
        $this->collOperationss->setModel('Operations');
    }

    /**
     * Gets an array of Operations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationTypeSubTpl is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Operations[] List of Operations objects
     * @throws PropelException
     */
    public function getOperationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationssPartial && !$this->isNew();
        if (null === $this->collOperationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationss) {
                // return empty collection
                $this->initOperationss();
            } else {
                $collOperationss = OperationsQuery::create(null, $criteria)
                    ->filterByOperationTemplate($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationssPartial && count($collOperationss)) {
                      $this->initOperationss(false);

                      foreach ($collOperationss as $obj) {
                        if (false == $this->collOperationss->contains($obj)) {
                          $this->collOperationss->append($obj);
                        }
                      }

                      $this->collOperationssPartial = true;
                    }

                    $collOperationss->getInternalIterator()->rewind();

                    return $collOperationss;
                }

                if ($partial && $this->collOperationss) {
                    foreach ($this->collOperationss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationss[] = $obj;
                        }
                    }
                }

                $this->collOperationss = $collOperationss;
                $this->collOperationssPartial = false;
            }
        }

        return $this->collOperationss;
    }

    /**
     * Sets a collection of Operations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setOperationss(PropelCollection $operationss, PropelPDO $con = null)
    {
        $operationssToDelete = $this->getOperationss(new Criteria(), $con)->diff($operationss);


        $this->operationssScheduledForDeletion = $operationssToDelete;

        foreach ($operationssToDelete as $operationsRemoved) {
            $operationsRemoved->setOperationTemplate(null);
        }

        $this->collOperationss = null;
        foreach ($operationss as $operations) {
            $this->addOperations($operations);
        }

        $this->collOperationss = $operationss;
        $this->collOperationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Operations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Operations objects.
     * @throws PropelException
     */
    public function countOperationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationssPartial && !$this->isNew();
        if (null === $this->collOperationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationss());
            }
            $query = OperationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperationTemplate($this)
                ->count($con);
        }

        return count($this->collOperationss);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function addOperations(Operations $l)
    {
        if ($this->collOperationss === null) {
            $this->initOperationss();
            $this->collOperationssPartial = true;
        }

        if (!in_array($l, $this->collOperationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperations($l);

            if ($this->operationssScheduledForDeletion and $this->operationssScheduledForDeletion->contains($l)) {
                $this->operationssScheduledForDeletion->remove($this->operationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Operations $operations The operations object to add.
     */
    protected function doAddOperations($operations)
    {
        $this->collOperationss[]= $operations;
        $operations->setOperationTemplate($this);
    }

    /**
     * @param	Operations $operations The operations object to remove.
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function removeOperations($operations)
    {
        if ($this->getOperationss()->contains($operations)) {
            $this->collOperationss->remove($this->collOperationss->search($operations));
            if (null === $this->operationssScheduledForDeletion) {
                $this->operationssScheduledForDeletion = clone $this->collOperationss;
                $this->operationssScheduledForDeletion->clear();
            }
            $this->operationssScheduledForDeletion[]= $operations;
            $operations->setOperationTemplate(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinContactClient($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactClient', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinUserDC($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserDC', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinUserCP($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCP', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinUserCdp($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCdp', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinClientContratOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientContratOptions', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinClientSiteForLog($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientSiteForLog', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinGedelogOperationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('GedelogOperationParams', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatus', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinRCustomActivites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RCustomActivites', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinROperationType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationType', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinROperationTypeSub($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSub', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinOperationsExt($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsExt', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinRDelaiDevis($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RDelaiDevis', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinInvoicingAddressContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('InvoicingAddressContact', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinOperationsRelatedByOpParentId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsRelatedByOpParentId', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinOperationUniverse($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationUniverse', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinOperationMedia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationMedia', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinROperationClassifications($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationClassifications', $join_behavior);

        return $this->getOperationss($query, $con);
    }

    /**
     * Clears out the collROperationTypeSubTplPrestations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     * @see        addROperationTypeSubTplPrestations()
     */
    public function clearROperationTypeSubTplPrestations()
    {
        $this->collROperationTypeSubTplPrestations = null; // important to set this to null since that means it is uninitialized
        $this->collROperationTypeSubTplPrestationsPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationTypeSubTplPrestations collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationTypeSubTplPrestations($v = true)
    {
        $this->collROperationTypeSubTplPrestationsPartial = $v;
    }

    /**
     * Initializes the collROperationTypeSubTplPrestations collection.
     *
     * By default this just sets the collROperationTypeSubTplPrestations collection to an empty array (like clearcollROperationTypeSubTplPrestations());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationTypeSubTplPrestations($overrideExisting = true)
    {
        if (null !== $this->collROperationTypeSubTplPrestations && !$overrideExisting) {
            return;
        }
        $this->collROperationTypeSubTplPrestations = new PropelObjectCollection();
        $this->collROperationTypeSubTplPrestations->setModel('ROperationTypeSubTplPrestation');
    }

    /**
     * Gets an array of ROperationTypeSubTplPrestation objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationTypeSubTpl is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationTypeSubTplPrestation[] List of ROperationTypeSubTplPrestation objects
     * @throws PropelException
     */
    public function getROperationTypeSubTplPrestations($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplPrestationsPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplPrestations || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplPrestations) {
                // return empty collection
                $this->initROperationTypeSubTplPrestations();
            } else {
                $collROperationTypeSubTplPrestations = ROperationTypeSubTplPrestationQuery::create(null, $criteria)
                    ->filterByROperationTypeSubTpl($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationTypeSubTplPrestationsPartial && count($collROperationTypeSubTplPrestations)) {
                      $this->initROperationTypeSubTplPrestations(false);

                      foreach ($collROperationTypeSubTplPrestations as $obj) {
                        if (false == $this->collROperationTypeSubTplPrestations->contains($obj)) {
                          $this->collROperationTypeSubTplPrestations->append($obj);
                        }
                      }

                      $this->collROperationTypeSubTplPrestationsPartial = true;
                    }

                    $collROperationTypeSubTplPrestations->getInternalIterator()->rewind();

                    return $collROperationTypeSubTplPrestations;
                }

                if ($partial && $this->collROperationTypeSubTplPrestations) {
                    foreach ($this->collROperationTypeSubTplPrestations as $obj) {
                        if ($obj->isNew()) {
                            $collROperationTypeSubTplPrestations[] = $obj;
                        }
                    }
                }

                $this->collROperationTypeSubTplPrestations = $collROperationTypeSubTplPrestations;
                $this->collROperationTypeSubTplPrestationsPartial = false;
            }
        }

        return $this->collROperationTypeSubTplPrestations;
    }

    /**
     * Sets a collection of ROperationTypeSubTplPrestation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationTypeSubTplPrestations A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setROperationTypeSubTplPrestations(PropelCollection $rOperationTypeSubTplPrestations, PropelPDO $con = null)
    {
        $rOperationTypeSubTplPrestationsToDelete = $this->getROperationTypeSubTplPrestations(new Criteria(), $con)->diff($rOperationTypeSubTplPrestations);


        $this->rOperationTypeSubTplPrestationsScheduledForDeletion = $rOperationTypeSubTplPrestationsToDelete;

        foreach ($rOperationTypeSubTplPrestationsToDelete as $rOperationTypeSubTplPrestationRemoved) {
            $rOperationTypeSubTplPrestationRemoved->setROperationTypeSubTpl(null);
        }

        $this->collROperationTypeSubTplPrestations = null;
        foreach ($rOperationTypeSubTplPrestations as $rOperationTypeSubTplPrestation) {
            $this->addROperationTypeSubTplPrestation($rOperationTypeSubTplPrestation);
        }

        $this->collROperationTypeSubTplPrestations = $rOperationTypeSubTplPrestations;
        $this->collROperationTypeSubTplPrestationsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationTypeSubTplPrestation objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationTypeSubTplPrestation objects.
     * @throws PropelException
     */
    public function countROperationTypeSubTplPrestations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplPrestationsPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplPrestations || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplPrestations) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationTypeSubTplPrestations());
            }
            $query = ROperationTypeSubTplPrestationQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByROperationTypeSubTpl($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplPrestations);
    }

    /**
     * Method called to associate a ROperationTypeSubTplPrestation object to this object
     * through the ROperationTypeSubTplPrestation foreign key attribute.
     *
     * @param    ROperationTypeSubTplPrestation $l ROperationTypeSubTplPrestation
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function addROperationTypeSubTplPrestation(ROperationTypeSubTplPrestation $l)
    {
        if ($this->collROperationTypeSubTplPrestations === null) {
            $this->initROperationTypeSubTplPrestations();
            $this->collROperationTypeSubTplPrestationsPartial = true;
        }

        if (!in_array($l, $this->collROperationTypeSubTplPrestations->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationTypeSubTplPrestation($l);

            if ($this->rOperationTypeSubTplPrestationsScheduledForDeletion and $this->rOperationTypeSubTplPrestationsScheduledForDeletion->contains($l)) {
                $this->rOperationTypeSubTplPrestationsScheduledForDeletion->remove($this->rOperationTypeSubTplPrestationsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationTypeSubTplPrestation $rOperationTypeSubTplPrestation The rOperationTypeSubTplPrestation object to add.
     */
    protected function doAddROperationTypeSubTplPrestation($rOperationTypeSubTplPrestation)
    {
        $this->collROperationTypeSubTplPrestations[]= $rOperationTypeSubTplPrestation;
        $rOperationTypeSubTplPrestation->setROperationTypeSubTpl($this);
    }

    /**
     * @param	ROperationTypeSubTplPrestation $rOperationTypeSubTplPrestation The rOperationTypeSubTplPrestation object to remove.
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function removeROperationTypeSubTplPrestation($rOperationTypeSubTplPrestation)
    {
        if ($this->getROperationTypeSubTplPrestations()->contains($rOperationTypeSubTplPrestation)) {
            $this->collROperationTypeSubTplPrestations->remove($this->collROperationTypeSubTplPrestations->search($rOperationTypeSubTplPrestation));
            if (null === $this->rOperationTypeSubTplPrestationsScheduledForDeletion) {
                $this->rOperationTypeSubTplPrestationsScheduledForDeletion = clone $this->collROperationTypeSubTplPrestations;
                $this->rOperationTypeSubTplPrestationsScheduledForDeletion->clear();
            }
            $this->rOperationTypeSubTplPrestationsScheduledForDeletion[]= clone $rOperationTypeSubTplPrestation;
            $rOperationTypeSubTplPrestation->setROperationTypeSubTpl(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related ROperationTypeSubTplPrestations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeSubTplPrestation[] List of ROperationTypeSubTplPrestation objects
     */
    public function getROperationTypeSubTplPrestationsJoinROperationTypeSubTplRubrique($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeSubTplPrestationQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSubTplRubrique', $join_behavior);

        return $this->getROperationTypeSubTplPrestations($query, $con);
    }

    /**
     * Clears out the collROperationTypeSubTplPrimes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     * @see        addROperationTypeSubTplPrimes()
     */
    public function clearROperationTypeSubTplPrimes()
    {
        $this->collROperationTypeSubTplPrimes = null; // important to set this to null since that means it is uninitialized
        $this->collROperationTypeSubTplPrimesPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationTypeSubTplPrimes collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationTypeSubTplPrimes($v = true)
    {
        $this->collROperationTypeSubTplPrimesPartial = $v;
    }

    /**
     * Initializes the collROperationTypeSubTplPrimes collection.
     *
     * By default this just sets the collROperationTypeSubTplPrimes collection to an empty array (like clearcollROperationTypeSubTplPrimes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationTypeSubTplPrimes($overrideExisting = true)
    {
        if (null !== $this->collROperationTypeSubTplPrimes && !$overrideExisting) {
            return;
        }
        $this->collROperationTypeSubTplPrimes = new PropelObjectCollection();
        $this->collROperationTypeSubTplPrimes->setModel('ROperationTypeSubTplPrime');
    }

    /**
     * Gets an array of ROperationTypeSubTplPrime objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationTypeSubTpl is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationTypeSubTplPrime[] List of ROperationTypeSubTplPrime objects
     * @throws PropelException
     */
    public function getROperationTypeSubTplPrimes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplPrimesPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplPrimes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplPrimes) {
                // return empty collection
                $this->initROperationTypeSubTplPrimes();
            } else {
                $collROperationTypeSubTplPrimes = ROperationTypeSubTplPrimeQuery::create(null, $criteria)
                    ->filterByROperationTypeSubTpl($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationTypeSubTplPrimesPartial && count($collROperationTypeSubTplPrimes)) {
                      $this->initROperationTypeSubTplPrimes(false);

                      foreach ($collROperationTypeSubTplPrimes as $obj) {
                        if (false == $this->collROperationTypeSubTplPrimes->contains($obj)) {
                          $this->collROperationTypeSubTplPrimes->append($obj);
                        }
                      }

                      $this->collROperationTypeSubTplPrimesPartial = true;
                    }

                    $collROperationTypeSubTplPrimes->getInternalIterator()->rewind();

                    return $collROperationTypeSubTplPrimes;
                }

                if ($partial && $this->collROperationTypeSubTplPrimes) {
                    foreach ($this->collROperationTypeSubTplPrimes as $obj) {
                        if ($obj->isNew()) {
                            $collROperationTypeSubTplPrimes[] = $obj;
                        }
                    }
                }

                $this->collROperationTypeSubTplPrimes = $collROperationTypeSubTplPrimes;
                $this->collROperationTypeSubTplPrimesPartial = false;
            }
        }

        return $this->collROperationTypeSubTplPrimes;
    }

    /**
     * Sets a collection of ROperationTypeSubTplPrime objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationTypeSubTplPrimes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setROperationTypeSubTplPrimes(PropelCollection $rOperationTypeSubTplPrimes, PropelPDO $con = null)
    {
        $rOperationTypeSubTplPrimesToDelete = $this->getROperationTypeSubTplPrimes(new Criteria(), $con)->diff($rOperationTypeSubTplPrimes);


        $this->rOperationTypeSubTplPrimesScheduledForDeletion = $rOperationTypeSubTplPrimesToDelete;

        foreach ($rOperationTypeSubTplPrimesToDelete as $rOperationTypeSubTplPrimeRemoved) {
            $rOperationTypeSubTplPrimeRemoved->setROperationTypeSubTpl(null);
        }

        $this->collROperationTypeSubTplPrimes = null;
        foreach ($rOperationTypeSubTplPrimes as $rOperationTypeSubTplPrime) {
            $this->addROperationTypeSubTplPrime($rOperationTypeSubTplPrime);
        }

        $this->collROperationTypeSubTplPrimes = $rOperationTypeSubTplPrimes;
        $this->collROperationTypeSubTplPrimesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationTypeSubTplPrime objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationTypeSubTplPrime objects.
     * @throws PropelException
     */
    public function countROperationTypeSubTplPrimes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplPrimesPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplPrimes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplPrimes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationTypeSubTplPrimes());
            }
            $query = ROperationTypeSubTplPrimeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByROperationTypeSubTpl($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplPrimes);
    }

    /**
     * Method called to associate a ROperationTypeSubTplPrime object to this object
     * through the ROperationTypeSubTplPrime foreign key attribute.
     *
     * @param    ROperationTypeSubTplPrime $l ROperationTypeSubTplPrime
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function addROperationTypeSubTplPrime(ROperationTypeSubTplPrime $l)
    {
        if ($this->collROperationTypeSubTplPrimes === null) {
            $this->initROperationTypeSubTplPrimes();
            $this->collROperationTypeSubTplPrimesPartial = true;
        }

        if (!in_array($l, $this->collROperationTypeSubTplPrimes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationTypeSubTplPrime($l);

            if ($this->rOperationTypeSubTplPrimesScheduledForDeletion and $this->rOperationTypeSubTplPrimesScheduledForDeletion->contains($l)) {
                $this->rOperationTypeSubTplPrimesScheduledForDeletion->remove($this->rOperationTypeSubTplPrimesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationTypeSubTplPrime $rOperationTypeSubTplPrime The rOperationTypeSubTplPrime object to add.
     */
    protected function doAddROperationTypeSubTplPrime($rOperationTypeSubTplPrime)
    {
        $this->collROperationTypeSubTplPrimes[]= $rOperationTypeSubTplPrime;
        $rOperationTypeSubTplPrime->setROperationTypeSubTpl($this);
    }

    /**
     * @param	ROperationTypeSubTplPrime $rOperationTypeSubTplPrime The rOperationTypeSubTplPrime object to remove.
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function removeROperationTypeSubTplPrime($rOperationTypeSubTplPrime)
    {
        if ($this->getROperationTypeSubTplPrimes()->contains($rOperationTypeSubTplPrime)) {
            $this->collROperationTypeSubTplPrimes->remove($this->collROperationTypeSubTplPrimes->search($rOperationTypeSubTplPrime));
            if (null === $this->rOperationTypeSubTplPrimesScheduledForDeletion) {
                $this->rOperationTypeSubTplPrimesScheduledForDeletion = clone $this->collROperationTypeSubTplPrimes;
                $this->rOperationTypeSubTplPrimesScheduledForDeletion->clear();
            }
            $this->rOperationTypeSubTplPrimesScheduledForDeletion[]= $rOperationTypeSubTplPrime;
            $rOperationTypeSubTplPrime->setROperationTypeSubTpl(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related ROperationTypeSubTplPrimes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeSubTplPrime[] List of ROperationTypeSubTplPrime objects
     */
    public function getROperationTypeSubTplPrimesJoinRRewardTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeSubTplPrimeQuery::create(null, $criteria);
        $query->joinWith('RRewardTypes', $join_behavior);

        return $this->getROperationTypeSubTplPrimes($query, $con);
    }

    /**
     * Clears out the collROperationTypeSubTplRubriques collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     * @see        addROperationTypeSubTplRubriques()
     */
    public function clearROperationTypeSubTplRubriques()
    {
        $this->collROperationTypeSubTplRubriques = null; // important to set this to null since that means it is uninitialized
        $this->collROperationTypeSubTplRubriquesPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationTypeSubTplRubriques collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationTypeSubTplRubriques($v = true)
    {
        $this->collROperationTypeSubTplRubriquesPartial = $v;
    }

    /**
     * Initializes the collROperationTypeSubTplRubriques collection.
     *
     * By default this just sets the collROperationTypeSubTplRubriques collection to an empty array (like clearcollROperationTypeSubTplRubriques());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationTypeSubTplRubriques($overrideExisting = true)
    {
        if (null !== $this->collROperationTypeSubTplRubriques && !$overrideExisting) {
            return;
        }
        $this->collROperationTypeSubTplRubriques = new PropelObjectCollection();
        $this->collROperationTypeSubTplRubriques->setModel('ROperationTypeSubTplRubrique');
    }

    /**
     * Gets an array of ROperationTypeSubTplRubrique objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationTypeSubTpl is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationTypeSubTplRubrique[] List of ROperationTypeSubTplRubrique objects
     * @throws PropelException
     */
    public function getROperationTypeSubTplRubriques($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplRubriquesPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplRubriques || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplRubriques) {
                // return empty collection
                $this->initROperationTypeSubTplRubriques();
            } else {
                $collROperationTypeSubTplRubriques = ROperationTypeSubTplRubriqueQuery::create(null, $criteria)
                    ->filterByROperationTypeSubTpl($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationTypeSubTplRubriquesPartial && count($collROperationTypeSubTplRubriques)) {
                      $this->initROperationTypeSubTplRubriques(false);

                      foreach ($collROperationTypeSubTplRubriques as $obj) {
                        if (false == $this->collROperationTypeSubTplRubriques->contains($obj)) {
                          $this->collROperationTypeSubTplRubriques->append($obj);
                        }
                      }

                      $this->collROperationTypeSubTplRubriquesPartial = true;
                    }

                    $collROperationTypeSubTplRubriques->getInternalIterator()->rewind();

                    return $collROperationTypeSubTplRubriques;
                }

                if ($partial && $this->collROperationTypeSubTplRubriques) {
                    foreach ($this->collROperationTypeSubTplRubriques as $obj) {
                        if ($obj->isNew()) {
                            $collROperationTypeSubTplRubriques[] = $obj;
                        }
                    }
                }

                $this->collROperationTypeSubTplRubriques = $collROperationTypeSubTplRubriques;
                $this->collROperationTypeSubTplRubriquesPartial = false;
            }
        }

        return $this->collROperationTypeSubTplRubriques;
    }

    /**
     * Sets a collection of ROperationTypeSubTplRubrique objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationTypeSubTplRubriques A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setROperationTypeSubTplRubriques(PropelCollection $rOperationTypeSubTplRubriques, PropelPDO $con = null)
    {
        $rOperationTypeSubTplRubriquesToDelete = $this->getROperationTypeSubTplRubriques(new Criteria(), $con)->diff($rOperationTypeSubTplRubriques);


        $this->rOperationTypeSubTplRubriquesScheduledForDeletion = $rOperationTypeSubTplRubriquesToDelete;

        foreach ($rOperationTypeSubTplRubriquesToDelete as $rOperationTypeSubTplRubriqueRemoved) {
            $rOperationTypeSubTplRubriqueRemoved->setROperationTypeSubTpl(null);
        }

        $this->collROperationTypeSubTplRubriques = null;
        foreach ($rOperationTypeSubTplRubriques as $rOperationTypeSubTplRubrique) {
            $this->addROperationTypeSubTplRubrique($rOperationTypeSubTplRubrique);
        }

        $this->collROperationTypeSubTplRubriques = $rOperationTypeSubTplRubriques;
        $this->collROperationTypeSubTplRubriquesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationTypeSubTplRubrique objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationTypeSubTplRubrique objects.
     * @throws PropelException
     */
    public function countROperationTypeSubTplRubriques(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplRubriquesPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplRubriques || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplRubriques) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationTypeSubTplRubriques());
            }
            $query = ROperationTypeSubTplRubriqueQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByROperationTypeSubTpl($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplRubriques);
    }

    /**
     * Method called to associate a ROperationTypeSubTplRubrique object to this object
     * through the ROperationTypeSubTplRubrique foreign key attribute.
     *
     * @param    ROperationTypeSubTplRubrique $l ROperationTypeSubTplRubrique
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function addROperationTypeSubTplRubrique(ROperationTypeSubTplRubrique $l)
    {
        if ($this->collROperationTypeSubTplRubriques === null) {
            $this->initROperationTypeSubTplRubriques();
            $this->collROperationTypeSubTplRubriquesPartial = true;
        }

        if (!in_array($l, $this->collROperationTypeSubTplRubriques->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationTypeSubTplRubrique($l);

            if ($this->rOperationTypeSubTplRubriquesScheduledForDeletion and $this->rOperationTypeSubTplRubriquesScheduledForDeletion->contains($l)) {
                $this->rOperationTypeSubTplRubriquesScheduledForDeletion->remove($this->rOperationTypeSubTplRubriquesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationTypeSubTplRubrique $rOperationTypeSubTplRubrique The rOperationTypeSubTplRubrique object to add.
     */
    protected function doAddROperationTypeSubTplRubrique($rOperationTypeSubTplRubrique)
    {
        $this->collROperationTypeSubTplRubriques[]= $rOperationTypeSubTplRubrique;
        $rOperationTypeSubTplRubrique->setROperationTypeSubTpl($this);
    }

    /**
     * @param	ROperationTypeSubTplRubrique $rOperationTypeSubTplRubrique The rOperationTypeSubTplRubrique object to remove.
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function removeROperationTypeSubTplRubrique($rOperationTypeSubTplRubrique)
    {
        if ($this->getROperationTypeSubTplRubriques()->contains($rOperationTypeSubTplRubrique)) {
            $this->collROperationTypeSubTplRubriques->remove($this->collROperationTypeSubTplRubriques->search($rOperationTypeSubTplRubrique));
            if (null === $this->rOperationTypeSubTplRubriquesScheduledForDeletion) {
                $this->rOperationTypeSubTplRubriquesScheduledForDeletion = clone $this->collROperationTypeSubTplRubriques;
                $this->rOperationTypeSubTplRubriquesScheduledForDeletion->clear();
            }
            $this->rOperationTypeSubTplRubriquesScheduledForDeletion[]= $rOperationTypeSubTplRubrique;
            $rOperationTypeSubTplRubrique->setROperationTypeSubTpl(null);
        }

        return $this;
    }

    /**
     * Clears out the collROperationTypeSubTplScenarios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     * @see        addROperationTypeSubTplScenarios()
     */
    public function clearROperationTypeSubTplScenarios()
    {
        $this->collROperationTypeSubTplScenarios = null; // important to set this to null since that means it is uninitialized
        $this->collROperationTypeSubTplScenariosPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationTypeSubTplScenarios collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationTypeSubTplScenarios($v = true)
    {
        $this->collROperationTypeSubTplScenariosPartial = $v;
    }

    /**
     * Initializes the collROperationTypeSubTplScenarios collection.
     *
     * By default this just sets the collROperationTypeSubTplScenarios collection to an empty array (like clearcollROperationTypeSubTplScenarios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationTypeSubTplScenarios($overrideExisting = true)
    {
        if (null !== $this->collROperationTypeSubTplScenarios && !$overrideExisting) {
            return;
        }
        $this->collROperationTypeSubTplScenarios = new PropelObjectCollection();
        $this->collROperationTypeSubTplScenarios->setModel('ROperationTypeSubTplScenario');
    }

    /**
     * Gets an array of ROperationTypeSubTplScenario objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationTypeSubTpl is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationTypeSubTplScenario[] List of ROperationTypeSubTplScenario objects
     * @throws PropelException
     */
    public function getROperationTypeSubTplScenarios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplScenariosPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplScenarios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplScenarios) {
                // return empty collection
                $this->initROperationTypeSubTplScenarios();
            } else {
                $collROperationTypeSubTplScenarios = ROperationTypeSubTplScenarioQuery::create(null, $criteria)
                    ->filterByROperationTypeSubTpl($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationTypeSubTplScenariosPartial && count($collROperationTypeSubTplScenarios)) {
                      $this->initROperationTypeSubTplScenarios(false);

                      foreach ($collROperationTypeSubTplScenarios as $obj) {
                        if (false == $this->collROperationTypeSubTplScenarios->contains($obj)) {
                          $this->collROperationTypeSubTplScenarios->append($obj);
                        }
                      }

                      $this->collROperationTypeSubTplScenariosPartial = true;
                    }

                    $collROperationTypeSubTplScenarios->getInternalIterator()->rewind();

                    return $collROperationTypeSubTplScenarios;
                }

                if ($partial && $this->collROperationTypeSubTplScenarios) {
                    foreach ($this->collROperationTypeSubTplScenarios as $obj) {
                        if ($obj->isNew()) {
                            $collROperationTypeSubTplScenarios[] = $obj;
                        }
                    }
                }

                $this->collROperationTypeSubTplScenarios = $collROperationTypeSubTplScenarios;
                $this->collROperationTypeSubTplScenariosPartial = false;
            }
        }

        return $this->collROperationTypeSubTplScenarios;
    }

    /**
     * Sets a collection of ROperationTypeSubTplScenario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationTypeSubTplScenarios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setROperationTypeSubTplScenarios(PropelCollection $rOperationTypeSubTplScenarios, PropelPDO $con = null)
    {
        $rOperationTypeSubTplScenariosToDelete = $this->getROperationTypeSubTplScenarios(new Criteria(), $con)->diff($rOperationTypeSubTplScenarios);


        $this->rOperationTypeSubTplScenariosScheduledForDeletion = $rOperationTypeSubTplScenariosToDelete;

        foreach ($rOperationTypeSubTplScenariosToDelete as $rOperationTypeSubTplScenarioRemoved) {
            $rOperationTypeSubTplScenarioRemoved->setROperationTypeSubTpl(null);
        }

        $this->collROperationTypeSubTplScenarios = null;
        foreach ($rOperationTypeSubTplScenarios as $rOperationTypeSubTplScenario) {
            $this->addROperationTypeSubTplScenario($rOperationTypeSubTplScenario);
        }

        $this->collROperationTypeSubTplScenarios = $rOperationTypeSubTplScenarios;
        $this->collROperationTypeSubTplScenariosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationTypeSubTplScenario objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationTypeSubTplScenario objects.
     * @throws PropelException
     */
    public function countROperationTypeSubTplScenarios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplScenariosPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplScenarios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplScenarios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationTypeSubTplScenarios());
            }
            $query = ROperationTypeSubTplScenarioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByROperationTypeSubTpl($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplScenarios);
    }

    /**
     * Method called to associate a ROperationTypeSubTplScenario object to this object
     * through the ROperationTypeSubTplScenario foreign key attribute.
     *
     * @param    ROperationTypeSubTplScenario $l ROperationTypeSubTplScenario
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function addROperationTypeSubTplScenario(ROperationTypeSubTplScenario $l)
    {
        if ($this->collROperationTypeSubTplScenarios === null) {
            $this->initROperationTypeSubTplScenarios();
            $this->collROperationTypeSubTplScenariosPartial = true;
        }

        if (!in_array($l, $this->collROperationTypeSubTplScenarios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationTypeSubTplScenario($l);

            if ($this->rOperationTypeSubTplScenariosScheduledForDeletion and $this->rOperationTypeSubTplScenariosScheduledForDeletion->contains($l)) {
                $this->rOperationTypeSubTplScenariosScheduledForDeletion->remove($this->rOperationTypeSubTplScenariosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationTypeSubTplScenario $rOperationTypeSubTplScenario The rOperationTypeSubTplScenario object to add.
     */
    protected function doAddROperationTypeSubTplScenario($rOperationTypeSubTplScenario)
    {
        $this->collROperationTypeSubTplScenarios[]= $rOperationTypeSubTplScenario;
        $rOperationTypeSubTplScenario->setROperationTypeSubTpl($this);
    }

    /**
     * @param	ROperationTypeSubTplScenario $rOperationTypeSubTplScenario The rOperationTypeSubTplScenario object to remove.
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function removeROperationTypeSubTplScenario($rOperationTypeSubTplScenario)
    {
        if ($this->getROperationTypeSubTplScenarios()->contains($rOperationTypeSubTplScenario)) {
            $this->collROperationTypeSubTplScenarios->remove($this->collROperationTypeSubTplScenarios->search($rOperationTypeSubTplScenario));
            if (null === $this->rOperationTypeSubTplScenariosScheduledForDeletion) {
                $this->rOperationTypeSubTplScenariosScheduledForDeletion = clone $this->collROperationTypeSubTplScenarios;
                $this->rOperationTypeSubTplScenariosScheduledForDeletion->clear();
            }
            $this->rOperationTypeSubTplScenariosScheduledForDeletion[]= clone $rOperationTypeSubTplScenario;
            $rOperationTypeSubTplScenario->setROperationTypeSubTpl(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related ROperationTypeSubTplScenarios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeSubTplScenario[] List of ROperationTypeSubTplScenario objects
     */
    public function getROperationTypeSubTplScenariosJoinRScenarios($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeSubTplScenarioQuery::create(null, $criteria);
        $query->joinWith('RScenarios', $join_behavior);

        return $this->getROperationTypeSubTplScenarios($query, $con);
    }

    /**
     * Clears out the collROperationTypeSubTplCulturess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationTypeSubTpl The current object (for fluent API support)
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
     * If this ROperationTypeSubTpl is new, it will return
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
                    ->filterByROperationTypeSubTpl($this)
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
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setROperationTypeSubTplCulturess(PropelCollection $rOperationTypeSubTplCulturess, PropelPDO $con = null)
    {
        $rOperationTypeSubTplCulturessToDelete = $this->getROperationTypeSubTplCulturess(new Criteria(), $con)->diff($rOperationTypeSubTplCulturess);


        $this->rOperationTypeSubTplCulturessScheduledForDeletion = $rOperationTypeSubTplCulturessToDelete;

        foreach ($rOperationTypeSubTplCulturessToDelete as $rOperationTypeSubTplCulturesRemoved) {
            $rOperationTypeSubTplCulturesRemoved->setROperationTypeSubTpl(null);
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
                ->filterByROperationTypeSubTpl($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplCulturess);
    }

    /**
     * Method called to associate a ROperationTypeSubTplCultures object to this object
     * through the ROperationTypeSubTplCultures foreign key attribute.
     *
     * @param    ROperationTypeSubTplCultures $l ROperationTypeSubTplCultures
     * @return ROperationTypeSubTpl The current object (for fluent API support)
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
        $rOperationTypeSubTplCultures->setROperationTypeSubTpl($this);
    }

    /**
     * @param	ROperationTypeSubTplCultures $rOperationTypeSubTplCultures The rOperationTypeSubTplCultures object to remove.
     * @return ROperationTypeSubTpl The current object (for fluent API support)
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
            $rOperationTypeSubTplCultures->setROperationTypeSubTpl(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related ROperationTypeSubTplCulturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeSubTplCultures[] List of ROperationTypeSubTplCultures objects
     */
    public function getROperationTypeSubTplCulturessJoinRCultures($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeSubTplCulturesQuery::create(null, $criteria);
        $query->joinWith('RCultures', $join_behavior);

        return $this->getROperationTypeSubTplCulturess($query, $con);
    }

    /**
     * Clears out the collROperationTypeSubTplCurrenciess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     * @see        addROperationTypeSubTplCurrenciess()
     */
    public function clearROperationTypeSubTplCurrenciess()
    {
        $this->collROperationTypeSubTplCurrenciess = null; // important to set this to null since that means it is uninitialized
        $this->collROperationTypeSubTplCurrenciessPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationTypeSubTplCurrenciess collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationTypeSubTplCurrenciess($v = true)
    {
        $this->collROperationTypeSubTplCurrenciessPartial = $v;
    }

    /**
     * Initializes the collROperationTypeSubTplCurrenciess collection.
     *
     * By default this just sets the collROperationTypeSubTplCurrenciess collection to an empty array (like clearcollROperationTypeSubTplCurrenciess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationTypeSubTplCurrenciess($overrideExisting = true)
    {
        if (null !== $this->collROperationTypeSubTplCurrenciess && !$overrideExisting) {
            return;
        }
        $this->collROperationTypeSubTplCurrenciess = new PropelObjectCollection();
        $this->collROperationTypeSubTplCurrenciess->setModel('ROperationTypeSubTplCurrencies');
    }

    /**
     * Gets an array of ROperationTypeSubTplCurrencies objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationTypeSubTpl is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationTypeSubTplCurrencies[] List of ROperationTypeSubTplCurrencies objects
     * @throws PropelException
     */
    public function getROperationTypeSubTplCurrenciess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplCurrenciessPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplCurrenciess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplCurrenciess) {
                // return empty collection
                $this->initROperationTypeSubTplCurrenciess();
            } else {
                $collROperationTypeSubTplCurrenciess = ROperationTypeSubTplCurrenciesQuery::create(null, $criteria)
                    ->filterByROperationTypeSubTpl($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationTypeSubTplCurrenciessPartial && count($collROperationTypeSubTplCurrenciess)) {
                      $this->initROperationTypeSubTplCurrenciess(false);

                      foreach ($collROperationTypeSubTplCurrenciess as $obj) {
                        if (false == $this->collROperationTypeSubTplCurrenciess->contains($obj)) {
                          $this->collROperationTypeSubTplCurrenciess->append($obj);
                        }
                      }

                      $this->collROperationTypeSubTplCurrenciessPartial = true;
                    }

                    $collROperationTypeSubTplCurrenciess->getInternalIterator()->rewind();

                    return $collROperationTypeSubTplCurrenciess;
                }

                if ($partial && $this->collROperationTypeSubTplCurrenciess) {
                    foreach ($this->collROperationTypeSubTplCurrenciess as $obj) {
                        if ($obj->isNew()) {
                            $collROperationTypeSubTplCurrenciess[] = $obj;
                        }
                    }
                }

                $this->collROperationTypeSubTplCurrenciess = $collROperationTypeSubTplCurrenciess;
                $this->collROperationTypeSubTplCurrenciessPartial = false;
            }
        }

        return $this->collROperationTypeSubTplCurrenciess;
    }

    /**
     * Sets a collection of ROperationTypeSubTplCurrencies objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationTypeSubTplCurrenciess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setROperationTypeSubTplCurrenciess(PropelCollection $rOperationTypeSubTplCurrenciess, PropelPDO $con = null)
    {
        $rOperationTypeSubTplCurrenciessToDelete = $this->getROperationTypeSubTplCurrenciess(new Criteria(), $con)->diff($rOperationTypeSubTplCurrenciess);


        $this->rOperationTypeSubTplCurrenciessScheduledForDeletion = $rOperationTypeSubTplCurrenciessToDelete;

        foreach ($rOperationTypeSubTplCurrenciessToDelete as $rOperationTypeSubTplCurrenciesRemoved) {
            $rOperationTypeSubTplCurrenciesRemoved->setROperationTypeSubTpl(null);
        }

        $this->collROperationTypeSubTplCurrenciess = null;
        foreach ($rOperationTypeSubTplCurrenciess as $rOperationTypeSubTplCurrencies) {
            $this->addROperationTypeSubTplCurrencies($rOperationTypeSubTplCurrencies);
        }

        $this->collROperationTypeSubTplCurrenciess = $rOperationTypeSubTplCurrenciess;
        $this->collROperationTypeSubTplCurrenciessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationTypeSubTplCurrencies objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationTypeSubTplCurrencies objects.
     * @throws PropelException
     */
    public function countROperationTypeSubTplCurrenciess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplCurrenciessPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplCurrenciess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplCurrenciess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationTypeSubTplCurrenciess());
            }
            $query = ROperationTypeSubTplCurrenciesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByROperationTypeSubTpl($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplCurrenciess);
    }

    /**
     * Method called to associate a ROperationTypeSubTplCurrencies object to this object
     * through the ROperationTypeSubTplCurrencies foreign key attribute.
     *
     * @param    ROperationTypeSubTplCurrencies $l ROperationTypeSubTplCurrencies
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function addROperationTypeSubTplCurrencies(ROperationTypeSubTplCurrencies $l)
    {
        if ($this->collROperationTypeSubTplCurrenciess === null) {
            $this->initROperationTypeSubTplCurrenciess();
            $this->collROperationTypeSubTplCurrenciessPartial = true;
        }

        if (!in_array($l, $this->collROperationTypeSubTplCurrenciess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationTypeSubTplCurrencies($l);

            if ($this->rOperationTypeSubTplCurrenciessScheduledForDeletion and $this->rOperationTypeSubTplCurrenciessScheduledForDeletion->contains($l)) {
                $this->rOperationTypeSubTplCurrenciessScheduledForDeletion->remove($this->rOperationTypeSubTplCurrenciessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationTypeSubTplCurrencies $rOperationTypeSubTplCurrencies The rOperationTypeSubTplCurrencies object to add.
     */
    protected function doAddROperationTypeSubTplCurrencies($rOperationTypeSubTplCurrencies)
    {
        $this->collROperationTypeSubTplCurrenciess[]= $rOperationTypeSubTplCurrencies;
        $rOperationTypeSubTplCurrencies->setROperationTypeSubTpl($this);
    }

    /**
     * @param	ROperationTypeSubTplCurrencies $rOperationTypeSubTplCurrencies The rOperationTypeSubTplCurrencies object to remove.
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function removeROperationTypeSubTplCurrencies($rOperationTypeSubTplCurrencies)
    {
        if ($this->getROperationTypeSubTplCurrenciess()->contains($rOperationTypeSubTplCurrencies)) {
            $this->collROperationTypeSubTplCurrenciess->remove($this->collROperationTypeSubTplCurrenciess->search($rOperationTypeSubTplCurrencies));
            if (null === $this->rOperationTypeSubTplCurrenciessScheduledForDeletion) {
                $this->rOperationTypeSubTplCurrenciessScheduledForDeletion = clone $this->collROperationTypeSubTplCurrenciess;
                $this->rOperationTypeSubTplCurrenciessScheduledForDeletion->clear();
            }
            $this->rOperationTypeSubTplCurrenciessScheduledForDeletion[]= $rOperationTypeSubTplCurrencies;
            $rOperationTypeSubTplCurrencies->setROperationTypeSubTpl(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related ROperationTypeSubTplCurrenciess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeSubTplCurrencies[] List of ROperationTypeSubTplCurrencies objects
     */
    public function getROperationTypeSubTplCurrenciessJoinRCurrencies($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeSubTplCurrenciesQuery::create(null, $criteria);
        $query->joinWith('RCurrencies', $join_behavior);

        return $this->getROperationTypeSubTplCurrenciess($query, $con);
    }

    /**
     * Clears out the collLnkROperationTypeSubTemplateMediasUniversess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     * @see        addLnkROperationTypeSubTemplateMediasUniversess()
     */
    public function clearLnkROperationTypeSubTemplateMediasUniversess()
    {
        $this->collLnkROperationTypeSubTemplateMediasUniversess = null; // important to set this to null since that means it is uninitialized
        $this->collLnkROperationTypeSubTemplateMediasUniversessPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkROperationTypeSubTemplateMediasUniversess collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkROperationTypeSubTemplateMediasUniversess($v = true)
    {
        $this->collLnkROperationTypeSubTemplateMediasUniversessPartial = $v;
    }

    /**
     * Initializes the collLnkROperationTypeSubTemplateMediasUniversess collection.
     *
     * By default this just sets the collLnkROperationTypeSubTemplateMediasUniversess collection to an empty array (like clearcollLnkROperationTypeSubTemplateMediasUniversess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkROperationTypeSubTemplateMediasUniversess($overrideExisting = true)
    {
        if (null !== $this->collLnkROperationTypeSubTemplateMediasUniversess && !$overrideExisting) {
            return;
        }
        $this->collLnkROperationTypeSubTemplateMediasUniversess = new PropelObjectCollection();
        $this->collLnkROperationTypeSubTemplateMediasUniversess->setModel('LnkROperationTypeSubTemplateMediasUniverses');
    }

    /**
     * Gets an array of LnkROperationTypeSubTemplateMediasUniverses objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationTypeSubTpl is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkROperationTypeSubTemplateMediasUniverses[] List of LnkROperationTypeSubTemplateMediasUniverses objects
     * @throws PropelException
     */
    public function getLnkROperationTypeSubTemplateMediasUniversess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkROperationTypeSubTemplateMediasUniversessPartial && !$this->isNew();
        if (null === $this->collLnkROperationTypeSubTemplateMediasUniversess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkROperationTypeSubTemplateMediasUniversess) {
                // return empty collection
                $this->initLnkROperationTypeSubTemplateMediasUniversess();
            } else {
                $collLnkROperationTypeSubTemplateMediasUniversess = LnkROperationTypeSubTemplateMediasUniversesQuery::create(null, $criteria)
                    ->filterByOerationTypeSubTemplate($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkROperationTypeSubTemplateMediasUniversessPartial && count($collLnkROperationTypeSubTemplateMediasUniversess)) {
                      $this->initLnkROperationTypeSubTemplateMediasUniversess(false);

                      foreach ($collLnkROperationTypeSubTemplateMediasUniversess as $obj) {
                        if (false == $this->collLnkROperationTypeSubTemplateMediasUniversess->contains($obj)) {
                          $this->collLnkROperationTypeSubTemplateMediasUniversess->append($obj);
                        }
                      }

                      $this->collLnkROperationTypeSubTemplateMediasUniversessPartial = true;
                    }

                    $collLnkROperationTypeSubTemplateMediasUniversess->getInternalIterator()->rewind();

                    return $collLnkROperationTypeSubTemplateMediasUniversess;
                }

                if ($partial && $this->collLnkROperationTypeSubTemplateMediasUniversess) {
                    foreach ($this->collLnkROperationTypeSubTemplateMediasUniversess as $obj) {
                        if ($obj->isNew()) {
                            $collLnkROperationTypeSubTemplateMediasUniversess[] = $obj;
                        }
                    }
                }

                $this->collLnkROperationTypeSubTemplateMediasUniversess = $collLnkROperationTypeSubTemplateMediasUniversess;
                $this->collLnkROperationTypeSubTemplateMediasUniversessPartial = false;
            }
        }

        return $this->collLnkROperationTypeSubTemplateMediasUniversess;
    }

    /**
     * Sets a collection of LnkROperationTypeSubTemplateMediasUniverses objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkROperationTypeSubTemplateMediasUniversess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setLnkROperationTypeSubTemplateMediasUniversess(PropelCollection $lnkROperationTypeSubTemplateMediasUniversess, PropelPDO $con = null)
    {
        $lnkROperationTypeSubTemplateMediasUniversessToDelete = $this->getLnkROperationTypeSubTemplateMediasUniversess(new Criteria(), $con)->diff($lnkROperationTypeSubTemplateMediasUniversess);


        $this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion = $lnkROperationTypeSubTemplateMediasUniversessToDelete;

        foreach ($lnkROperationTypeSubTemplateMediasUniversessToDelete as $lnkROperationTypeSubTemplateMediasUniversesRemoved) {
            $lnkROperationTypeSubTemplateMediasUniversesRemoved->setOerationTypeSubTemplate(null);
        }

        $this->collLnkROperationTypeSubTemplateMediasUniversess = null;
        foreach ($lnkROperationTypeSubTemplateMediasUniversess as $lnkROperationTypeSubTemplateMediasUniverses) {
            $this->addLnkROperationTypeSubTemplateMediasUniverses($lnkROperationTypeSubTemplateMediasUniverses);
        }

        $this->collLnkROperationTypeSubTemplateMediasUniversess = $lnkROperationTypeSubTemplateMediasUniversess;
        $this->collLnkROperationTypeSubTemplateMediasUniversessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkROperationTypeSubTemplateMediasUniverses objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkROperationTypeSubTemplateMediasUniverses objects.
     * @throws PropelException
     */
    public function countLnkROperationTypeSubTemplateMediasUniversess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkROperationTypeSubTemplateMediasUniversessPartial && !$this->isNew();
        if (null === $this->collLnkROperationTypeSubTemplateMediasUniversess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkROperationTypeSubTemplateMediasUniversess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkROperationTypeSubTemplateMediasUniversess());
            }
            $query = LnkROperationTypeSubTemplateMediasUniversesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOerationTypeSubTemplate($this)
                ->count($con);
        }

        return count($this->collLnkROperationTypeSubTemplateMediasUniversess);
    }

    /**
     * Method called to associate a LnkROperationTypeSubTemplateMediasUniverses object to this object
     * through the LnkROperationTypeSubTemplateMediasUniverses foreign key attribute.
     *
     * @param    LnkROperationTypeSubTemplateMediasUniverses $l LnkROperationTypeSubTemplateMediasUniverses
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function addLnkROperationTypeSubTemplateMediasUniverses(LnkROperationTypeSubTemplateMediasUniverses $l)
    {
        if ($this->collLnkROperationTypeSubTemplateMediasUniversess === null) {
            $this->initLnkROperationTypeSubTemplateMediasUniversess();
            $this->collLnkROperationTypeSubTemplateMediasUniversessPartial = true;
        }

        if (!in_array($l, $this->collLnkROperationTypeSubTemplateMediasUniversess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkROperationTypeSubTemplateMediasUniverses($l);

            if ($this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion and $this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion->contains($l)) {
                $this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion->remove($this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkROperationTypeSubTemplateMediasUniverses $lnkROperationTypeSubTemplateMediasUniverses The lnkROperationTypeSubTemplateMediasUniverses object to add.
     */
    protected function doAddLnkROperationTypeSubTemplateMediasUniverses($lnkROperationTypeSubTemplateMediasUniverses)
    {
        $this->collLnkROperationTypeSubTemplateMediasUniversess[]= $lnkROperationTypeSubTemplateMediasUniverses;
        $lnkROperationTypeSubTemplateMediasUniverses->setOerationTypeSubTemplate($this);
    }

    /**
     * @param	LnkROperationTypeSubTemplateMediasUniverses $lnkROperationTypeSubTemplateMediasUniverses The lnkROperationTypeSubTemplateMediasUniverses object to remove.
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function removeLnkROperationTypeSubTemplateMediasUniverses($lnkROperationTypeSubTemplateMediasUniverses)
    {
        if ($this->getLnkROperationTypeSubTemplateMediasUniversess()->contains($lnkROperationTypeSubTemplateMediasUniverses)) {
            $this->collLnkROperationTypeSubTemplateMediasUniversess->remove($this->collLnkROperationTypeSubTemplateMediasUniversess->search($lnkROperationTypeSubTemplateMediasUniverses));
            if (null === $this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion) {
                $this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion = clone $this->collLnkROperationTypeSubTemplateMediasUniversess;
                $this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion->clear();
            }
            $this->lnkROperationTypeSubTemplateMediasUniversessScheduledForDeletion[]= $lnkROperationTypeSubTemplateMediasUniverses;
            $lnkROperationTypeSubTemplateMediasUniverses->setOerationTypeSubTemplate(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related LnkROperationTypeSubTemplateMediasUniversess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkROperationTypeSubTemplateMediasUniverses[] List of LnkROperationTypeSubTemplateMediasUniverses objects
     */
    public function getLnkROperationTypeSubTemplateMediasUniversessJoinOperationTypeSub($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkROperationTypeSubTemplateMediasUniversesQuery::create(null, $criteria);
        $query->joinWith('OperationTypeSub', $join_behavior);

        return $this->getLnkROperationTypeSubTemplateMediasUniversess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related LnkROperationTypeSubTemplateMediasUniversess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkROperationTypeSubTemplateMediasUniverses[] List of LnkROperationTypeSubTemplateMediasUniverses objects
     */
    public function getLnkROperationTypeSubTemplateMediasUniversessJoinOperationUniverse($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkROperationTypeSubTemplateMediasUniversesQuery::create(null, $criteria);
        $query->joinWith('OperationUniverse', $join_behavior);

        return $this->getLnkROperationTypeSubTemplateMediasUniversess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related LnkROperationTypeSubTemplateMediasUniversess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkROperationTypeSubTemplateMediasUniverses[] List of LnkROperationTypeSubTemplateMediasUniverses objects
     */
    public function getLnkROperationTypeSubTemplateMediasUniversessJoinOperationMedia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkROperationTypeSubTemplateMediasUniversesQuery::create(null, $criteria);
        $query->joinWith('OperationMedia', $join_behavior);

        return $this->getLnkROperationTypeSubTemplateMediasUniversess($query, $con);
    }

    /**
     * Clears out the collROperationTypeSubTplCountriess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     * @see        addROperationTypeSubTplCountriess()
     */
    public function clearROperationTypeSubTplCountriess()
    {
        $this->collROperationTypeSubTplCountriess = null; // important to set this to null since that means it is uninitialized
        $this->collROperationTypeSubTplCountriessPartial = null;

        return $this;
    }

    /**
     * reset is the collROperationTypeSubTplCountriess collection loaded partially
     *
     * @return void
     */
    public function resetPartialROperationTypeSubTplCountriess($v = true)
    {
        $this->collROperationTypeSubTplCountriessPartial = $v;
    }

    /**
     * Initializes the collROperationTypeSubTplCountriess collection.
     *
     * By default this just sets the collROperationTypeSubTplCountriess collection to an empty array (like clearcollROperationTypeSubTplCountriess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initROperationTypeSubTplCountriess($overrideExisting = true)
    {
        if (null !== $this->collROperationTypeSubTplCountriess && !$overrideExisting) {
            return;
        }
        $this->collROperationTypeSubTplCountriess = new PropelObjectCollection();
        $this->collROperationTypeSubTplCountriess->setModel('ROperationTypeSubTplCountries');
    }

    /**
     * Gets an array of ROperationTypeSubTplCountries objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ROperationTypeSubTpl is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ROperationTypeSubTplCountries[] List of ROperationTypeSubTplCountries objects
     * @throws PropelException
     */
    public function getROperationTypeSubTplCountriess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplCountriessPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplCountriess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplCountriess) {
                // return empty collection
                $this->initROperationTypeSubTplCountriess();
            } else {
                $collROperationTypeSubTplCountriess = ROperationTypeSubTplCountriesQuery::create(null, $criteria)
                    ->filterByTemplate($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collROperationTypeSubTplCountriessPartial && count($collROperationTypeSubTplCountriess)) {
                      $this->initROperationTypeSubTplCountriess(false);

                      foreach ($collROperationTypeSubTplCountriess as $obj) {
                        if (false == $this->collROperationTypeSubTplCountriess->contains($obj)) {
                          $this->collROperationTypeSubTplCountriess->append($obj);
                        }
                      }

                      $this->collROperationTypeSubTplCountriessPartial = true;
                    }

                    $collROperationTypeSubTplCountriess->getInternalIterator()->rewind();

                    return $collROperationTypeSubTplCountriess;
                }

                if ($partial && $this->collROperationTypeSubTplCountriess) {
                    foreach ($this->collROperationTypeSubTplCountriess as $obj) {
                        if ($obj->isNew()) {
                            $collROperationTypeSubTplCountriess[] = $obj;
                        }
                    }
                }

                $this->collROperationTypeSubTplCountriess = $collROperationTypeSubTplCountriess;
                $this->collROperationTypeSubTplCountriessPartial = false;
            }
        }

        return $this->collROperationTypeSubTplCountriess;
    }

    /**
     * Sets a collection of ROperationTypeSubTplCountries objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rOperationTypeSubTplCountriess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function setROperationTypeSubTplCountriess(PropelCollection $rOperationTypeSubTplCountriess, PropelPDO $con = null)
    {
        $rOperationTypeSubTplCountriessToDelete = $this->getROperationTypeSubTplCountriess(new Criteria(), $con)->diff($rOperationTypeSubTplCountriess);


        $this->rOperationTypeSubTplCountriessScheduledForDeletion = $rOperationTypeSubTplCountriessToDelete;

        foreach ($rOperationTypeSubTplCountriessToDelete as $rOperationTypeSubTplCountriesRemoved) {
            $rOperationTypeSubTplCountriesRemoved->setTemplate(null);
        }

        $this->collROperationTypeSubTplCountriess = null;
        foreach ($rOperationTypeSubTplCountriess as $rOperationTypeSubTplCountries) {
            $this->addROperationTypeSubTplCountries($rOperationTypeSubTplCountries);
        }

        $this->collROperationTypeSubTplCountriess = $rOperationTypeSubTplCountriess;
        $this->collROperationTypeSubTplCountriessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ROperationTypeSubTplCountries objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ROperationTypeSubTplCountries objects.
     * @throws PropelException
     */
    public function countROperationTypeSubTplCountriess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collROperationTypeSubTplCountriessPartial && !$this->isNew();
        if (null === $this->collROperationTypeSubTplCountriess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collROperationTypeSubTplCountriess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getROperationTypeSubTplCountriess());
            }
            $query = ROperationTypeSubTplCountriesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTemplate($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplCountriess);
    }

    /**
     * Method called to associate a ROperationTypeSubTplCountries object to this object
     * through the ROperationTypeSubTplCountries foreign key attribute.
     *
     * @param    ROperationTypeSubTplCountries $l ROperationTypeSubTplCountries
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function addROperationTypeSubTplCountries(ROperationTypeSubTplCountries $l)
    {
        if ($this->collROperationTypeSubTplCountriess === null) {
            $this->initROperationTypeSubTplCountriess();
            $this->collROperationTypeSubTplCountriessPartial = true;
        }

        if (!in_array($l, $this->collROperationTypeSubTplCountriess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddROperationTypeSubTplCountries($l);

            if ($this->rOperationTypeSubTplCountriessScheduledForDeletion and $this->rOperationTypeSubTplCountriessScheduledForDeletion->contains($l)) {
                $this->rOperationTypeSubTplCountriessScheduledForDeletion->remove($this->rOperationTypeSubTplCountriessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ROperationTypeSubTplCountries $rOperationTypeSubTplCountries The rOperationTypeSubTplCountries object to add.
     */
    protected function doAddROperationTypeSubTplCountries($rOperationTypeSubTplCountries)
    {
        $this->collROperationTypeSubTplCountriess[]= $rOperationTypeSubTplCountries;
        $rOperationTypeSubTplCountries->setTemplate($this);
    }

    /**
     * @param	ROperationTypeSubTplCountries $rOperationTypeSubTplCountries The rOperationTypeSubTplCountries object to remove.
     * @return ROperationTypeSubTpl The current object (for fluent API support)
     */
    public function removeROperationTypeSubTplCountries($rOperationTypeSubTplCountries)
    {
        if ($this->getROperationTypeSubTplCountriess()->contains($rOperationTypeSubTplCountries)) {
            $this->collROperationTypeSubTplCountriess->remove($this->collROperationTypeSubTplCountriess->search($rOperationTypeSubTplCountries));
            if (null === $this->rOperationTypeSubTplCountriessScheduledForDeletion) {
                $this->rOperationTypeSubTplCountriessScheduledForDeletion = clone $this->collROperationTypeSubTplCountriess;
                $this->rOperationTypeSubTplCountriessScheduledForDeletion->clear();
            }
            $this->rOperationTypeSubTplCountriessScheduledForDeletion[]= $rOperationTypeSubTplCountries;
            $rOperationTypeSubTplCountries->setTemplate(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ROperationTypeSubTpl is new, it will return
     * an empty collection; or if this ROperationTypeSubTpl has previously
     * been saved, it will retrieve related ROperationTypeSubTplCountriess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ROperationTypeSubTpl.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeSubTplCountries[] List of ROperationTypeSubTplCountries objects
     */
    public function getROperationTypeSubTplCountriessJoinTemplateCountry($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeSubTplCountriesQuery::create(null, $criteria);
        $query->joinWith('TemplateCountry', $join_behavior);

        return $this->getROperationTypeSubTplCountriess($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->ost_tpl_id = null;
        $this->ost_tpl_libelle = null;
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
            if ($this->collOperationss) {
                foreach ($this->collOperationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeSubTplPrestations) {
                foreach ($this->collROperationTypeSubTplPrestations as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeSubTplPrimes) {
                foreach ($this->collROperationTypeSubTplPrimes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeSubTplRubriques) {
                foreach ($this->collROperationTypeSubTplRubriques as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeSubTplScenarios) {
                foreach ($this->collROperationTypeSubTplScenarios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeSubTplCulturess) {
                foreach ($this->collROperationTypeSubTplCulturess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeSubTplCurrenciess) {
                foreach ($this->collROperationTypeSubTplCurrenciess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkROperationTypeSubTemplateMediasUniversess) {
                foreach ($this->collLnkROperationTypeSubTemplateMediasUniversess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeSubTplCountriess) {
                foreach ($this->collROperationTypeSubTplCountriess as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOperationss instanceof PropelCollection) {
            $this->collOperationss->clearIterator();
        }
        $this->collOperationss = null;
        if ($this->collROperationTypeSubTplPrestations instanceof PropelCollection) {
            $this->collROperationTypeSubTplPrestations->clearIterator();
        }
        $this->collROperationTypeSubTplPrestations = null;
        if ($this->collROperationTypeSubTplPrimes instanceof PropelCollection) {
            $this->collROperationTypeSubTplPrimes->clearIterator();
        }
        $this->collROperationTypeSubTplPrimes = null;
        if ($this->collROperationTypeSubTplRubriques instanceof PropelCollection) {
            $this->collROperationTypeSubTplRubriques->clearIterator();
        }
        $this->collROperationTypeSubTplRubriques = null;
        if ($this->collROperationTypeSubTplScenarios instanceof PropelCollection) {
            $this->collROperationTypeSubTplScenarios->clearIterator();
        }
        $this->collROperationTypeSubTplScenarios = null;
        if ($this->collROperationTypeSubTplCulturess instanceof PropelCollection) {
            $this->collROperationTypeSubTplCulturess->clearIterator();
        }
        $this->collROperationTypeSubTplCulturess = null;
        if ($this->collROperationTypeSubTplCurrenciess instanceof PropelCollection) {
            $this->collROperationTypeSubTplCurrenciess->clearIterator();
        }
        $this->collROperationTypeSubTplCurrenciess = null;
        if ($this->collLnkROperationTypeSubTemplateMediasUniversess instanceof PropelCollection) {
            $this->collLnkROperationTypeSubTemplateMediasUniversess->clearIterator();
        }
        $this->collLnkROperationTypeSubTemplateMediasUniversess = null;
        if ($this->collROperationTypeSubTplCountriess instanceof PropelCollection) {
            $this->collROperationTypeSubTplCountriess->clearIterator();
        }
        $this->collROperationTypeSubTplCountriess = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ROperationTypeSubTplPeer::DEFAULT_STRING_FORMAT);
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
                return BaseROperationTypeSubTplPeer::getConnection();
            }
}
