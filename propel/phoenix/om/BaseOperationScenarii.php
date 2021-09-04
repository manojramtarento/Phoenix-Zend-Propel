<?php


/**
 * Base class that represents a row from the 'operation_scenarii' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationScenarii extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationScenariiPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationScenariiPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the op_scenario_id field.
     * @var        int
     */
    protected $op_scenario_id;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the op_scenario_numero field.
     * @var        int
     */
    protected $op_scenario_numero;

    /**
     * The value for the op_r_scenario_id field.
     * @var        int
     */
    protected $op_r_scenario_id;

    /**
     * The value for the op_scenario_libelle field.
     * @var        string
     */
    protected $op_scenario_libelle;

    /**
     * The value for the op_scenario_volume field.
     * @var        int
     */
    protected $op_scenario_volume;

    /**
     * The value for the op_scenario_pcent field.
     * Note: this column has a database default value of: 100.0
     * @var        float
     */
    protected $op_scenario_pcent;

    /**
     * The value for the op_r_prime_id field.
     * @var        int
     */
    protected $op_r_prime_id;

    /**
     * The value for the op_scenario_reference field.
     * @var        string
     */
    protected $op_scenario_reference;

    /**
     * @var        Operations
     */
    protected $aOperations;

    /**
     * @var        RScenarios
     */
    protected $aRScenarios;

    /**
     * @var        OperationPrimes
     */
    protected $aOperationPrimes;

    /**
     * @var        PropelObjectCollection|OperationPrestations[] Collection to store aggregation of OperationPrestations objects.
     */
    protected $collOperationPrestationss;
    protected $collOperationPrestationssPartial;

    /**
     * @var        PropelObjectCollection|OperationScenariiParents[] Collection to store aggregation of OperationScenariiParents objects.
     */
    protected $collOperationScenariiParentssRelatedByOpsNumero;
    protected $collOperationScenariiParentssRelatedByOpsNumeroPartial;

    /**
     * @var        PropelObjectCollection|OperationScenariiParents[] Collection to store aggregation of OperationScenariiParents objects.
     */
    protected $collOperationScenariiParentssRelatedByOpsParentNumero;
    protected $collOperationScenariiParentssRelatedByOpsParentNumeroPartial;

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
    protected $operationPrestationssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->op_scenario_pcent = 100.0;
    }

    /**
     * Initializes internal state of BaseOperationScenarii object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [op_scenario_id] column value.
     *
     * @return int
     */
    public function getOpScenarioId()
    {

        return $this->op_scenario_id;
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
     * Get the [op_scenario_numero] column value.
     *
     * @return int
     */
    public function getOpScenarioNumero()
    {

        return $this->op_scenario_numero;
    }

    /**
     * Get the [op_r_scenario_id] column value.
     *
     * @return int
     */
    public function getOpRScenarioId()
    {

        return $this->op_r_scenario_id;
    }

    /**
     * Get the [op_scenario_libelle] column value.
     *
     * @return string
     */
    public function getOpScenarioLibelle()
    {

        return $this->op_scenario_libelle;
    }

    /**
     * Get the [op_scenario_volume] column value.
     *
     * @return int
     */
    public function getOpScenarioVolume()
    {

        return $this->op_scenario_volume;
    }

    /**
     * Get the [op_scenario_pcent] column value.
     *
     * @return float
     */
    public function getOpScenarioPcent()
    {

        return $this->op_scenario_pcent;
    }

    /**
     * Get the [op_r_prime_id] column value.
     *
     * @return int
     */
    public function getOpRPrimeId()
    {

        return $this->op_r_prime_id;
    }

    /**
     * Get the [op_scenario_reference] column value.
     *
     * @return string
     */
    public function getOpScenarioReference()
    {

        return $this->op_scenario_reference;
    }

    /**
     * Set the value of [op_scenario_id] column.
     *
     * @param  int $v new value
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOpScenarioId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_scenario_id !== $v) {
                    $this->op_scenario_id = $v;
                    $this->modifiedColumns[] = OperationScenariiPeer::OP_SCENARIO_ID;
                }


        return $this;
    } // setOpScenarioId()

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return OperationScenarii The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationScenariiPeer::OP_ID;
                }

        if ($this->aOperations !== null && $this->aOperations->getOpId() !== $v) {
            $this->aOperations = null;
        }


        return $this;
    } // setOpId()

    /**
     * Set the value of [op_scenario_numero] column.
     *
     * @param  int $v new value
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOpScenarioNumero($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_scenario_numero !== $v) {
                    $this->op_scenario_numero = $v;
                    $this->modifiedColumns[] = OperationScenariiPeer::OP_SCENARIO_NUMERO;
                }


        return $this;
    } // setOpScenarioNumero()

    /**
     * Set the value of [op_r_scenario_id] column.
     *
     * @param  int $v new value
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOpRScenarioId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_r_scenario_id !== $v) {
                    $this->op_r_scenario_id = $v;
                    $this->modifiedColumns[] = OperationScenariiPeer::OP_R_SCENARIO_ID;
                }

        if ($this->aRScenarios !== null && $this->aRScenarios->getRScenarioId() !== $v) {
            $this->aRScenarios = null;
        }


        return $this;
    } // setOpRScenarioId()

    /**
     * Set the value of [op_scenario_libelle] column.
     *
     * @param  string $v new value
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOpScenarioLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_scenario_libelle !== $v) {
            $this->op_scenario_libelle = $v;
            $this->modifiedColumns[] = OperationScenariiPeer::OP_SCENARIO_LIBELLE;
        }


        return $this;
    } // setOpScenarioLibelle()

    /**
     * Set the value of [op_scenario_volume] column.
     *
     * @param  int $v new value
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOpScenarioVolume($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_scenario_volume !== $v) {
                    $this->op_scenario_volume = $v;
                    $this->modifiedColumns[] = OperationScenariiPeer::OP_SCENARIO_VOLUME;
                }


        return $this;
    } // setOpScenarioVolume()

    /**
     * Set the value of [op_scenario_pcent] column.
     *
     * @param  float $v new value
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOpScenarioPcent($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->op_scenario_pcent !== $v) {
                    $this->op_scenario_pcent = $v;
                    $this->modifiedColumns[] = OperationScenariiPeer::OP_SCENARIO_PCENT;
                }


        return $this;
    } // setOpScenarioPcent()

    /**
     * Set the value of [op_r_prime_id] column.
     *
     * @param  int $v new value
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOpRPrimeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_r_prime_id !== $v) {
                    $this->op_r_prime_id = $v;
                    $this->modifiedColumns[] = OperationScenariiPeer::OP_R_PRIME_ID;
                }

        if ($this->aOperationPrimes !== null && $this->aOperationPrimes->getOpPrimeId() !== $v) {
            $this->aOperationPrimes = null;
        }


        return $this;
    } // setOpRPrimeId()

    /**
     * Set the value of [op_scenario_reference] column.
     *
     * @param  string $v new value
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOpScenarioReference($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_scenario_reference !== $v) {
            $this->op_scenario_reference = $v;
            $this->modifiedColumns[] = OperationScenariiPeer::OP_SCENARIO_REFERENCE;
        }


        return $this;
    } // setOpScenarioReference()

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
            if ($this->op_scenario_pcent !== 100.0) {
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

            $this->op_scenario_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->op_scenario_numero = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->op_r_scenario_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->op_scenario_libelle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->op_scenario_volume = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->op_scenario_pcent = ($row[$startcol + 6] !== null) ? (float) $row[$startcol + 6] : null;
            $this->op_r_prime_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->op_scenario_reference = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = OperationScenariiPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OperationScenarii object", $e);
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
        if ($this->aRScenarios !== null && $this->op_r_scenario_id !== $this->aRScenarios->getRScenarioId()) {
            $this->aRScenarios = null;
        }
        if ($this->aOperationPrimes !== null && $this->op_r_prime_id !== $this->aOperationPrimes->getOpPrimeId()) {
            $this->aOperationPrimes = null;
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
            $con = Propel::getConnection(OperationScenariiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationScenariiPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperations = null;
            $this->aRScenarios = null;
            $this->aOperationPrimes = null;
            $this->collOperationPrestationss = null;

            $this->collOperationScenariiParentssRelatedByOpsNumero = null;

            $this->collOperationScenariiParentssRelatedByOpsParentNumero = null;

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
            $con = Propel::getConnection(OperationScenariiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationScenariiQuery::create()
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
            $con = Propel::getConnection(OperationScenariiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OperationScenariiPeer::addInstanceToPool($this);
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

            if ($this->aRScenarios !== null) {
                if ($this->aRScenarios->isModified() || $this->aRScenarios->isNew()) {
                    $affectedRows += $this->aRScenarios->save($con);
                }
                $this->setRScenarios($this->aRScenarios);
            }

            if ($this->aOperationPrimes !== null) {
                if ($this->aOperationPrimes->isModified() || $this->aOperationPrimes->isNew()) {
                    $affectedRows += $this->aOperationPrimes->save($con);
                }
                $this->setOperationPrimes($this->aOperationPrimes);
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

            if ($this->operationPrestationssScheduledForDeletion !== null) {
                if (!$this->operationPrestationssScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationPrestationssScheduledForDeletion as $operationPrestations) {
                        // need to save related object because we set the relation to null
                        $operationPrestations->save($con);
                    }
                    $this->operationPrestationssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationPrestationss !== null) {
                foreach ($this->collOperationPrestationss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion !== null) {
                if (!$this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion->isEmpty()) {
                    OperationScenariiParentsQuery::create()
                        ->filterByPrimaryKeys($this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion = null;
                }
            }

            if ($this->collOperationScenariiParentssRelatedByOpsNumero !== null) {
                foreach ($this->collOperationScenariiParentssRelatedByOpsNumero as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion !== null) {
                if (!$this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion->isEmpty()) {
                    OperationScenariiParentsQuery::create()
                        ->filterByPrimaryKeys($this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion = null;
                }
            }

            if ($this->collOperationScenariiParentssRelatedByOpsParentNumero !== null) {
                foreach ($this->collOperationScenariiParentssRelatedByOpsParentNumero as $referrerFK) {
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

        $this->modifiedColumns[] = OperationScenariiPeer::OP_SCENARIO_ID;
        if (null !== $this->op_scenario_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OperationScenariiPeer::OP_SCENARIO_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_scenario_id`';
        }
        if ($this->isColumnModified(OperationScenariiPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`op_scenario_numero`';
        }
        if ($this->isColumnModified(OperationScenariiPeer::OP_R_SCENARIO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_r_scenario_id`';
        }
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`op_scenario_libelle`';
        }
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_VOLUME)) {
            $modifiedColumns[':p' . $index++]  = '`op_scenario_volume`';
        }
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_PCENT)) {
            $modifiedColumns[':p' . $index++]  = '`op_scenario_pcent`';
        }
        if ($this->isColumnModified(OperationScenariiPeer::OP_R_PRIME_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_r_prime_id`';
        }
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`op_scenario_reference`';
        }

        $sql = sprintf(
            'INSERT INTO `operation_scenarii` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`op_scenario_id`':
                        $stmt->bindValue($identifier, $this->op_scenario_id, PDO::PARAM_INT);
                        break;
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`op_scenario_numero`':
                        $stmt->bindValue($identifier, $this->op_scenario_numero, PDO::PARAM_INT);
                        break;
                    case '`op_r_scenario_id`':
                        $stmt->bindValue($identifier, $this->op_r_scenario_id, PDO::PARAM_INT);
                        break;
                    case '`op_scenario_libelle`':
                        $stmt->bindValue($identifier, $this->op_scenario_libelle, PDO::PARAM_STR);
                        break;
                    case '`op_scenario_volume`':
                        $stmt->bindValue($identifier, $this->op_scenario_volume, PDO::PARAM_INT);
                        break;
                    case '`op_scenario_pcent`':
                        $stmt->bindValue($identifier, $this->op_scenario_pcent, PDO::PARAM_STR);
                        break;
                    case '`op_r_prime_id`':
                        $stmt->bindValue($identifier, $this->op_r_prime_id, PDO::PARAM_INT);
                        break;
                    case '`op_scenario_reference`':
                        $stmt->bindValue($identifier, $this->op_scenario_reference, PDO::PARAM_STR);
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
        $this->setOpScenarioId($pk);

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

            if ($this->aRScenarios !== null) {
                if (!$this->aRScenarios->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRScenarios->getValidationFailures());
                }
            }

            if ($this->aOperationPrimes !== null) {
                if (!$this->aOperationPrimes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationPrimes->getValidationFailures());
                }
            }


            if (($retval = OperationScenariiPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOperationPrestationss !== null) {
                    foreach ($this->collOperationPrestationss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationScenariiParentssRelatedByOpsNumero !== null) {
                    foreach ($this->collOperationScenariiParentssRelatedByOpsNumero as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationScenariiParentssRelatedByOpsParentNumero !== null) {
                    foreach ($this->collOperationScenariiParentssRelatedByOpsParentNumero as $referrerFK) {
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
        $pos = OperationScenariiPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOpScenarioId();
                break;
            case 1:
                return $this->getOpId();
                break;
            case 2:
                return $this->getOpScenarioNumero();
                break;
            case 3:
                return $this->getOpRScenarioId();
                break;
            case 4:
                return $this->getOpScenarioLibelle();
                break;
            case 5:
                return $this->getOpScenarioVolume();
                break;
            case 6:
                return $this->getOpScenarioPcent();
                break;
            case 7:
                return $this->getOpRPrimeId();
                break;
            case 8:
                return $this->getOpScenarioReference();
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
        if (isset($alreadyDumpedObjects['OperationScenarii'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OperationScenarii'][$this->getPrimaryKey()] = true;
        $keys = OperationScenariiPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOpScenarioId(),
            $keys[1] => $this->getOpId(),
            $keys[2] => $this->getOpScenarioNumero(),
            $keys[3] => $this->getOpRScenarioId(),
            $keys[4] => $this->getOpScenarioLibelle(),
            $keys[5] => $this->getOpScenarioVolume(),
            $keys[6] => $this->getOpScenarioPcent(),
            $keys[7] => $this->getOpRPrimeId(),
            $keys[8] => $this->getOpScenarioReference(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperations) {
                $result['Operations'] = $this->aOperations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRScenarios) {
                $result['RScenarios'] = $this->aRScenarios->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationPrimes) {
                $result['OperationPrimes'] = $this->aOperationPrimes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collOperationPrestationss) {
                $result['OperationPrestationss'] = $this->collOperationPrestationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationScenariiParentssRelatedByOpsNumero) {
                $result['OperationScenariiParentssRelatedByOpsNumero'] = $this->collOperationScenariiParentssRelatedByOpsNumero->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationScenariiParentssRelatedByOpsParentNumero) {
                $result['OperationScenariiParentssRelatedByOpsParentNumero'] = $this->collOperationScenariiParentssRelatedByOpsParentNumero->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = OperationScenariiPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOpScenarioId($value);
                break;
            case 1:
                $this->setOpId($value);
                break;
            case 2:
                $this->setOpScenarioNumero($value);
                break;
            case 3:
                $this->setOpRScenarioId($value);
                break;
            case 4:
                $this->setOpScenarioLibelle($value);
                break;
            case 5:
                $this->setOpScenarioVolume($value);
                break;
            case 6:
                $this->setOpScenarioPcent($value);
                break;
            case 7:
                $this->setOpRPrimeId($value);
                break;
            case 8:
                $this->setOpScenarioReference($value);
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
        $keys = OperationScenariiPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOpScenarioId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOpScenarioNumero($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOpRScenarioId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOpScenarioLibelle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOpScenarioVolume($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOpScenarioPcent($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOpRPrimeId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOpScenarioReference($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationScenariiPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_ID)) $criteria->add(OperationScenariiPeer::OP_SCENARIO_ID, $this->op_scenario_id);
        if ($this->isColumnModified(OperationScenariiPeer::OP_ID)) $criteria->add(OperationScenariiPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_NUMERO)) $criteria->add(OperationScenariiPeer::OP_SCENARIO_NUMERO, $this->op_scenario_numero);
        if ($this->isColumnModified(OperationScenariiPeer::OP_R_SCENARIO_ID)) $criteria->add(OperationScenariiPeer::OP_R_SCENARIO_ID, $this->op_r_scenario_id);
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_LIBELLE)) $criteria->add(OperationScenariiPeer::OP_SCENARIO_LIBELLE, $this->op_scenario_libelle);
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_VOLUME)) $criteria->add(OperationScenariiPeer::OP_SCENARIO_VOLUME, $this->op_scenario_volume);
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_PCENT)) $criteria->add(OperationScenariiPeer::OP_SCENARIO_PCENT, $this->op_scenario_pcent);
        if ($this->isColumnModified(OperationScenariiPeer::OP_R_PRIME_ID)) $criteria->add(OperationScenariiPeer::OP_R_PRIME_ID, $this->op_r_prime_id);
        if ($this->isColumnModified(OperationScenariiPeer::OP_SCENARIO_REFERENCE)) $criteria->add(OperationScenariiPeer::OP_SCENARIO_REFERENCE, $this->op_scenario_reference);

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
        $criteria = new Criteria(OperationScenariiPeer::DATABASE_NAME);
        $criteria->add(OperationScenariiPeer::OP_SCENARIO_ID, $this->op_scenario_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOpScenarioId();
    }

    /**
     * Generic method to set the primary key (op_scenario_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOpScenarioId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOpScenarioId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of OperationScenarii (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpId($this->getOpId());
        $copyObj->setOpScenarioNumero($this->getOpScenarioNumero());
        $copyObj->setOpRScenarioId($this->getOpRScenarioId());
        $copyObj->setOpScenarioLibelle($this->getOpScenarioLibelle());
        $copyObj->setOpScenarioVolume($this->getOpScenarioVolume());
        $copyObj->setOpScenarioPcent($this->getOpScenarioPcent());
        $copyObj->setOpRPrimeId($this->getOpRPrimeId());
        $copyObj->setOpScenarioReference($this->getOpScenarioReference());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOperationPrestationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationPrestations($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationScenariiParentssRelatedByOpsNumero() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationScenariiParentsRelatedByOpsNumero($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationScenariiParentssRelatedByOpsParentNumero() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationScenariiParentsRelatedByOpsParentNumero($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOpScenarioId(NULL); // this is a auto-increment column, so set to default value
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
     * @return OperationScenarii Clone of current object.
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
     * @return OperationScenariiPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationScenariiPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return OperationScenarii The current object (for fluent API support)
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
            $v->addOperationScenarii($this);
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
                $this->aOperations->addOperationScenariis($this);
             */
        }

        return $this->aOperations;
    }

    /**
     * Declares an association between this object and a RScenarios object.
     *
     * @param                  RScenarios $v
     * @return OperationScenarii The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRScenarios(RScenarios $v = null)
    {
        if ($v === null) {
            $this->setOpRScenarioId(NULL);
        } else {
            $this->setOpRScenarioId($v->getRScenarioId());
        }

        $this->aRScenarios = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RScenarios object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationScenarii($this);
        }


        return $this;
    }


    /**
     * Get the associated RScenarios object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RScenarios The associated RScenarios object.
     * @throws PropelException
     */
    public function getRScenarios(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRScenarios === null && ($this->op_r_scenario_id !== null) && $doQuery) {
            $this->aRScenarios = RScenariosQuery::create()->findPk($this->op_r_scenario_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRScenarios->addOperationScenariis($this);
             */
        }

        return $this->aRScenarios;
    }

    /**
     * Declares an association between this object and a OperationPrimes object.
     *
     * @param                  OperationPrimes $v
     * @return OperationScenarii The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationPrimes(OperationPrimes $v = null)
    {
        if ($v === null) {
            $this->setOpRPrimeId(NULL);
        } else {
            $this->setOpRPrimeId($v->getOpPrimeId());
        }

        $this->aOperationPrimes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the OperationPrimes object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationScenarii($this);
        }


        return $this;
    }


    /**
     * Get the associated OperationPrimes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return OperationPrimes The associated OperationPrimes object.
     * @throws PropelException
     */
    public function getOperationPrimes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationPrimes === null && ($this->op_r_prime_id !== null) && $doQuery) {
            $this->aOperationPrimes = OperationPrimesQuery::create()->findPk($this->op_r_prime_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationPrimes->addOperationScenariis($this);
             */
        }

        return $this->aOperationPrimes;
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
        if ('OperationPrestations' == $relationName) {
            $this->initOperationPrestationss();
        }
        if ('OperationScenariiParentsRelatedByOpsNumero' == $relationName) {
            $this->initOperationScenariiParentssRelatedByOpsNumero();
        }
        if ('OperationScenariiParentsRelatedByOpsParentNumero' == $relationName) {
            $this->initOperationScenariiParentssRelatedByOpsParentNumero();
        }
    }

    /**
     * Clears out the collOperationPrestationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return OperationScenarii The current object (for fluent API support)
     * @see        addOperationPrestationss()
     */
    public function clearOperationPrestationss()
    {
        $this->collOperationPrestationss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationPrestationssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationPrestationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationPrestationss($v = true)
    {
        $this->collOperationPrestationssPartial = $v;
    }

    /**
     * Initializes the collOperationPrestationss collection.
     *
     * By default this just sets the collOperationPrestationss collection to an empty array (like clearcollOperationPrestationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationPrestationss($overrideExisting = true)
    {
        if (null !== $this->collOperationPrestationss && !$overrideExisting) {
            return;
        }
        $this->collOperationPrestationss = new PropelObjectCollection();
        $this->collOperationPrestationss->setModel('OperationPrestations');
    }

    /**
     * Gets an array of OperationPrestations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this OperationScenarii is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     * @throws PropelException
     */
    public function getOperationPrestationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationPrestationssPartial && !$this->isNew();
        if (null === $this->collOperationPrestationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationPrestationss) {
                // return empty collection
                $this->initOperationPrestationss();
            } else {
                $collOperationPrestationss = OperationPrestationsQuery::create(null, $criteria)
                    ->filterByOperationScenarii($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationPrestationssPartial && count($collOperationPrestationss)) {
                      $this->initOperationPrestationss(false);

                      foreach ($collOperationPrestationss as $obj) {
                        if (false == $this->collOperationPrestationss->contains($obj)) {
                          $this->collOperationPrestationss->append($obj);
                        }
                      }

                      $this->collOperationPrestationssPartial = true;
                    }

                    $collOperationPrestationss->getInternalIterator()->rewind();

                    return $collOperationPrestationss;
                }

                if ($partial && $this->collOperationPrestationss) {
                    foreach ($this->collOperationPrestationss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationPrestationss[] = $obj;
                        }
                    }
                }

                $this->collOperationPrestationss = $collOperationPrestationss;
                $this->collOperationPrestationssPartial = false;
            }
        }

        return $this->collOperationPrestationss;
    }

    /**
     * Sets a collection of OperationPrestations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationPrestationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOperationPrestationss(PropelCollection $operationPrestationss, PropelPDO $con = null)
    {
        $operationPrestationssToDelete = $this->getOperationPrestationss(new Criteria(), $con)->diff($operationPrestationss);


        $this->operationPrestationssScheduledForDeletion = $operationPrestationssToDelete;

        foreach ($operationPrestationssToDelete as $operationPrestationsRemoved) {
            $operationPrestationsRemoved->setOperationScenarii(null);
        }

        $this->collOperationPrestationss = null;
        foreach ($operationPrestationss as $operationPrestations) {
            $this->addOperationPrestations($operationPrestations);
        }

        $this->collOperationPrestationss = $operationPrestationss;
        $this->collOperationPrestationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationPrestations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationPrestations objects.
     * @throws PropelException
     */
    public function countOperationPrestationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationPrestationssPartial && !$this->isNew();
        if (null === $this->collOperationPrestationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationPrestationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationPrestationss());
            }
            $query = OperationPrestationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperationScenarii($this)
                ->count($con);
        }

        return count($this->collOperationPrestationss);
    }

    /**
     * Method called to associate a OperationPrestations object to this object
     * through the OperationPrestations foreign key attribute.
     *
     * @param    OperationPrestations $l OperationPrestations
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function addOperationPrestations(OperationPrestations $l)
    {
        if ($this->collOperationPrestationss === null) {
            $this->initOperationPrestationss();
            $this->collOperationPrestationssPartial = true;
        }

        if (!in_array($l, $this->collOperationPrestationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationPrestations($l);

            if ($this->operationPrestationssScheduledForDeletion and $this->operationPrestationssScheduledForDeletion->contains($l)) {
                $this->operationPrestationssScheduledForDeletion->remove($this->operationPrestationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationPrestations $operationPrestations The operationPrestations object to add.
     */
    protected function doAddOperationPrestations($operationPrestations)
    {
        $this->collOperationPrestationss[]= $operationPrestations;
        $operationPrestations->setOperationScenarii($this);
    }

    /**
     * @param	OperationPrestations $operationPrestations The operationPrestations object to remove.
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function removeOperationPrestations($operationPrestations)
    {
        if ($this->getOperationPrestationss()->contains($operationPrestations)) {
            $this->collOperationPrestationss->remove($this->collOperationPrestationss->search($operationPrestations));
            if (null === $this->operationPrestationssScheduledForDeletion) {
                $this->operationPrestationssScheduledForDeletion = clone $this->collOperationPrestationss;
                $this->operationPrestationssScheduledForDeletion->clear();
            }
            $this->operationPrestationssScheduledForDeletion[]= $operationPrestations;
            $operationPrestations->setOperationScenarii(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationScenarii is new, it will return
     * an empty collection; or if this OperationScenarii has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationScenarii.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationRubriques($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationRubriques', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationScenarii is new, it will return
     * an empty collection; or if this OperationScenarii has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationScenarii.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationScenarii is new, it will return
     * an empty collection; or if this OperationScenarii has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationScenarii.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinRPrestations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('RPrestations', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationScenarii is new, it will return
     * an empty collection; or if this OperationScenarii has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationScenarii.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationPrimes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationPrimes', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationScenarii is new, it will return
     * an empty collection; or if this OperationScenarii has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationScenarii.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinHistoCouts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('HistoCouts', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationScenarii is new, it will return
     * an empty collection; or if this OperationScenarii has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationScenarii.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinUsers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('Users', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }

    /**
     * Clears out the collOperationScenariiParentssRelatedByOpsNumero collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return OperationScenarii The current object (for fluent API support)
     * @see        addOperationScenariiParentssRelatedByOpsNumero()
     */
    public function clearOperationScenariiParentssRelatedByOpsNumero()
    {
        $this->collOperationScenariiParentssRelatedByOpsNumero = null; // important to set this to null since that means it is uninitialized
        $this->collOperationScenariiParentssRelatedByOpsNumeroPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationScenariiParentssRelatedByOpsNumero collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationScenariiParentssRelatedByOpsNumero($v = true)
    {
        $this->collOperationScenariiParentssRelatedByOpsNumeroPartial = $v;
    }

    /**
     * Initializes the collOperationScenariiParentssRelatedByOpsNumero collection.
     *
     * By default this just sets the collOperationScenariiParentssRelatedByOpsNumero collection to an empty array (like clearcollOperationScenariiParentssRelatedByOpsNumero());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationScenariiParentssRelatedByOpsNumero($overrideExisting = true)
    {
        if (null !== $this->collOperationScenariiParentssRelatedByOpsNumero && !$overrideExisting) {
            return;
        }
        $this->collOperationScenariiParentssRelatedByOpsNumero = new PropelObjectCollection();
        $this->collOperationScenariiParentssRelatedByOpsNumero->setModel('OperationScenariiParents');
    }

    /**
     * Gets an array of OperationScenariiParents objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this OperationScenarii is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationScenariiParents[] List of OperationScenariiParents objects
     * @throws PropelException
     */
    public function getOperationScenariiParentssRelatedByOpsNumero($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationScenariiParentssRelatedByOpsNumeroPartial && !$this->isNew();
        if (null === $this->collOperationScenariiParentssRelatedByOpsNumero || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationScenariiParentssRelatedByOpsNumero) {
                // return empty collection
                $this->initOperationScenariiParentssRelatedByOpsNumero();
            } else {
                $collOperationScenariiParentssRelatedByOpsNumero = OperationScenariiParentsQuery::create(null, $criteria)
                    ->filterByOperationScenariiRelatedByOpsNumero($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationScenariiParentssRelatedByOpsNumeroPartial && count($collOperationScenariiParentssRelatedByOpsNumero)) {
                      $this->initOperationScenariiParentssRelatedByOpsNumero(false);

                      foreach ($collOperationScenariiParentssRelatedByOpsNumero as $obj) {
                        if (false == $this->collOperationScenariiParentssRelatedByOpsNumero->contains($obj)) {
                          $this->collOperationScenariiParentssRelatedByOpsNumero->append($obj);
                        }
                      }

                      $this->collOperationScenariiParentssRelatedByOpsNumeroPartial = true;
                    }

                    $collOperationScenariiParentssRelatedByOpsNumero->getInternalIterator()->rewind();

                    return $collOperationScenariiParentssRelatedByOpsNumero;
                }

                if ($partial && $this->collOperationScenariiParentssRelatedByOpsNumero) {
                    foreach ($this->collOperationScenariiParentssRelatedByOpsNumero as $obj) {
                        if ($obj->isNew()) {
                            $collOperationScenariiParentssRelatedByOpsNumero[] = $obj;
                        }
                    }
                }

                $this->collOperationScenariiParentssRelatedByOpsNumero = $collOperationScenariiParentssRelatedByOpsNumero;
                $this->collOperationScenariiParentssRelatedByOpsNumeroPartial = false;
            }
        }

        return $this->collOperationScenariiParentssRelatedByOpsNumero;
    }

    /**
     * Sets a collection of OperationScenariiParentsRelatedByOpsNumero objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationScenariiParentssRelatedByOpsNumero A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOperationScenariiParentssRelatedByOpsNumero(PropelCollection $operationScenariiParentssRelatedByOpsNumero, PropelPDO $con = null)
    {
        $operationScenariiParentssRelatedByOpsNumeroToDelete = $this->getOperationScenariiParentssRelatedByOpsNumero(new Criteria(), $con)->diff($operationScenariiParentssRelatedByOpsNumero);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion = clone $operationScenariiParentssRelatedByOpsNumeroToDelete;

        foreach ($operationScenariiParentssRelatedByOpsNumeroToDelete as $operationScenariiParentsRelatedByOpsNumeroRemoved) {
            $operationScenariiParentsRelatedByOpsNumeroRemoved->setOperationScenariiRelatedByOpsNumero(null);
        }

        $this->collOperationScenariiParentssRelatedByOpsNumero = null;
        foreach ($operationScenariiParentssRelatedByOpsNumero as $operationScenariiParentsRelatedByOpsNumero) {
            $this->addOperationScenariiParentsRelatedByOpsNumero($operationScenariiParentsRelatedByOpsNumero);
        }

        $this->collOperationScenariiParentssRelatedByOpsNumero = $operationScenariiParentssRelatedByOpsNumero;
        $this->collOperationScenariiParentssRelatedByOpsNumeroPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationScenariiParents objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationScenariiParents objects.
     * @throws PropelException
     */
    public function countOperationScenariiParentssRelatedByOpsNumero(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationScenariiParentssRelatedByOpsNumeroPartial && !$this->isNew();
        if (null === $this->collOperationScenariiParentssRelatedByOpsNumero || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationScenariiParentssRelatedByOpsNumero) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationScenariiParentssRelatedByOpsNumero());
            }
            $query = OperationScenariiParentsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperationScenariiRelatedByOpsNumero($this)
                ->count($con);
        }

        return count($this->collOperationScenariiParentssRelatedByOpsNumero);
    }

    /**
     * Method called to associate a OperationScenariiParents object to this object
     * through the OperationScenariiParents foreign key attribute.
     *
     * @param    OperationScenariiParents $l OperationScenariiParents
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function addOperationScenariiParentsRelatedByOpsNumero(OperationScenariiParents $l)
    {
        if ($this->collOperationScenariiParentssRelatedByOpsNumero === null) {
            $this->initOperationScenariiParentssRelatedByOpsNumero();
            $this->collOperationScenariiParentssRelatedByOpsNumeroPartial = true;
        }

        if (!in_array($l, $this->collOperationScenariiParentssRelatedByOpsNumero->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationScenariiParentsRelatedByOpsNumero($l);

            if ($this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion and $this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion->contains($l)) {
                $this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion->remove($this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationScenariiParentsRelatedByOpsNumero $operationScenariiParentsRelatedByOpsNumero The operationScenariiParentsRelatedByOpsNumero object to add.
     */
    protected function doAddOperationScenariiParentsRelatedByOpsNumero($operationScenariiParentsRelatedByOpsNumero)
    {
        $this->collOperationScenariiParentssRelatedByOpsNumero[]= $operationScenariiParentsRelatedByOpsNumero;
        $operationScenariiParentsRelatedByOpsNumero->setOperationScenariiRelatedByOpsNumero($this);
    }

    /**
     * @param	OperationScenariiParentsRelatedByOpsNumero $operationScenariiParentsRelatedByOpsNumero The operationScenariiParentsRelatedByOpsNumero object to remove.
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function removeOperationScenariiParentsRelatedByOpsNumero($operationScenariiParentsRelatedByOpsNumero)
    {
        if ($this->getOperationScenariiParentssRelatedByOpsNumero()->contains($operationScenariiParentsRelatedByOpsNumero)) {
            $this->collOperationScenariiParentssRelatedByOpsNumero->remove($this->collOperationScenariiParentssRelatedByOpsNumero->search($operationScenariiParentsRelatedByOpsNumero));
            if (null === $this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion) {
                $this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion = clone $this->collOperationScenariiParentssRelatedByOpsNumero;
                $this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion->clear();
            }
            $this->operationScenariiParentssRelatedByOpsNumeroScheduledForDeletion[]= clone $operationScenariiParentsRelatedByOpsNumero;
            $operationScenariiParentsRelatedByOpsNumero->setOperationScenariiRelatedByOpsNumero(null);
        }

        return $this;
    }

    /**
     * Clears out the collOperationScenariiParentssRelatedByOpsParentNumero collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return OperationScenarii The current object (for fluent API support)
     * @see        addOperationScenariiParentssRelatedByOpsParentNumero()
     */
    public function clearOperationScenariiParentssRelatedByOpsParentNumero()
    {
        $this->collOperationScenariiParentssRelatedByOpsParentNumero = null; // important to set this to null since that means it is uninitialized
        $this->collOperationScenariiParentssRelatedByOpsParentNumeroPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationScenariiParentssRelatedByOpsParentNumero collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationScenariiParentssRelatedByOpsParentNumero($v = true)
    {
        $this->collOperationScenariiParentssRelatedByOpsParentNumeroPartial = $v;
    }

    /**
     * Initializes the collOperationScenariiParentssRelatedByOpsParentNumero collection.
     *
     * By default this just sets the collOperationScenariiParentssRelatedByOpsParentNumero collection to an empty array (like clearcollOperationScenariiParentssRelatedByOpsParentNumero());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationScenariiParentssRelatedByOpsParentNumero($overrideExisting = true)
    {
        if (null !== $this->collOperationScenariiParentssRelatedByOpsParentNumero && !$overrideExisting) {
            return;
        }
        $this->collOperationScenariiParentssRelatedByOpsParentNumero = new PropelObjectCollection();
        $this->collOperationScenariiParentssRelatedByOpsParentNumero->setModel('OperationScenariiParents');
    }

    /**
     * Gets an array of OperationScenariiParents objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this OperationScenarii is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationScenariiParents[] List of OperationScenariiParents objects
     * @throws PropelException
     */
    public function getOperationScenariiParentssRelatedByOpsParentNumero($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationScenariiParentssRelatedByOpsParentNumeroPartial && !$this->isNew();
        if (null === $this->collOperationScenariiParentssRelatedByOpsParentNumero || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationScenariiParentssRelatedByOpsParentNumero) {
                // return empty collection
                $this->initOperationScenariiParentssRelatedByOpsParentNumero();
            } else {
                $collOperationScenariiParentssRelatedByOpsParentNumero = OperationScenariiParentsQuery::create(null, $criteria)
                    ->filterByOperationScenariiRelatedByOpsParentNumero($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationScenariiParentssRelatedByOpsParentNumeroPartial && count($collOperationScenariiParentssRelatedByOpsParentNumero)) {
                      $this->initOperationScenariiParentssRelatedByOpsParentNumero(false);

                      foreach ($collOperationScenariiParentssRelatedByOpsParentNumero as $obj) {
                        if (false == $this->collOperationScenariiParentssRelatedByOpsParentNumero->contains($obj)) {
                          $this->collOperationScenariiParentssRelatedByOpsParentNumero->append($obj);
                        }
                      }

                      $this->collOperationScenariiParentssRelatedByOpsParentNumeroPartial = true;
                    }

                    $collOperationScenariiParentssRelatedByOpsParentNumero->getInternalIterator()->rewind();

                    return $collOperationScenariiParentssRelatedByOpsParentNumero;
                }

                if ($partial && $this->collOperationScenariiParentssRelatedByOpsParentNumero) {
                    foreach ($this->collOperationScenariiParentssRelatedByOpsParentNumero as $obj) {
                        if ($obj->isNew()) {
                            $collOperationScenariiParentssRelatedByOpsParentNumero[] = $obj;
                        }
                    }
                }

                $this->collOperationScenariiParentssRelatedByOpsParentNumero = $collOperationScenariiParentssRelatedByOpsParentNumero;
                $this->collOperationScenariiParentssRelatedByOpsParentNumeroPartial = false;
            }
        }

        return $this->collOperationScenariiParentssRelatedByOpsParentNumero;
    }

    /**
     * Sets a collection of OperationScenariiParentsRelatedByOpsParentNumero objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationScenariiParentssRelatedByOpsParentNumero A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function setOperationScenariiParentssRelatedByOpsParentNumero(PropelCollection $operationScenariiParentssRelatedByOpsParentNumero, PropelPDO $con = null)
    {
        $operationScenariiParentssRelatedByOpsParentNumeroToDelete = $this->getOperationScenariiParentssRelatedByOpsParentNumero(new Criteria(), $con)->diff($operationScenariiParentssRelatedByOpsParentNumero);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion = clone $operationScenariiParentssRelatedByOpsParentNumeroToDelete;

        foreach ($operationScenariiParentssRelatedByOpsParentNumeroToDelete as $operationScenariiParentsRelatedByOpsParentNumeroRemoved) {
            $operationScenariiParentsRelatedByOpsParentNumeroRemoved->setOperationScenariiRelatedByOpsParentNumero(null);
        }

        $this->collOperationScenariiParentssRelatedByOpsParentNumero = null;
        foreach ($operationScenariiParentssRelatedByOpsParentNumero as $operationScenariiParentsRelatedByOpsParentNumero) {
            $this->addOperationScenariiParentsRelatedByOpsParentNumero($operationScenariiParentsRelatedByOpsParentNumero);
        }

        $this->collOperationScenariiParentssRelatedByOpsParentNumero = $operationScenariiParentssRelatedByOpsParentNumero;
        $this->collOperationScenariiParentssRelatedByOpsParentNumeroPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationScenariiParents objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationScenariiParents objects.
     * @throws PropelException
     */
    public function countOperationScenariiParentssRelatedByOpsParentNumero(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationScenariiParentssRelatedByOpsParentNumeroPartial && !$this->isNew();
        if (null === $this->collOperationScenariiParentssRelatedByOpsParentNumero || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationScenariiParentssRelatedByOpsParentNumero) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationScenariiParentssRelatedByOpsParentNumero());
            }
            $query = OperationScenariiParentsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperationScenariiRelatedByOpsParentNumero($this)
                ->count($con);
        }

        return count($this->collOperationScenariiParentssRelatedByOpsParentNumero);
    }

    /**
     * Method called to associate a OperationScenariiParents object to this object
     * through the OperationScenariiParents foreign key attribute.
     *
     * @param    OperationScenariiParents $l OperationScenariiParents
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function addOperationScenariiParentsRelatedByOpsParentNumero(OperationScenariiParents $l)
    {
        if ($this->collOperationScenariiParentssRelatedByOpsParentNumero === null) {
            $this->initOperationScenariiParentssRelatedByOpsParentNumero();
            $this->collOperationScenariiParentssRelatedByOpsParentNumeroPartial = true;
        }

        if (!in_array($l, $this->collOperationScenariiParentssRelatedByOpsParentNumero->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationScenariiParentsRelatedByOpsParentNumero($l);

            if ($this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion and $this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion->contains($l)) {
                $this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion->remove($this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationScenariiParentsRelatedByOpsParentNumero $operationScenariiParentsRelatedByOpsParentNumero The operationScenariiParentsRelatedByOpsParentNumero object to add.
     */
    protected function doAddOperationScenariiParentsRelatedByOpsParentNumero($operationScenariiParentsRelatedByOpsParentNumero)
    {
        $this->collOperationScenariiParentssRelatedByOpsParentNumero[]= $operationScenariiParentsRelatedByOpsParentNumero;
        $operationScenariiParentsRelatedByOpsParentNumero->setOperationScenariiRelatedByOpsParentNumero($this);
    }

    /**
     * @param	OperationScenariiParentsRelatedByOpsParentNumero $operationScenariiParentsRelatedByOpsParentNumero The operationScenariiParentsRelatedByOpsParentNumero object to remove.
     * @return OperationScenarii The current object (for fluent API support)
     */
    public function removeOperationScenariiParentsRelatedByOpsParentNumero($operationScenariiParentsRelatedByOpsParentNumero)
    {
        if ($this->getOperationScenariiParentssRelatedByOpsParentNumero()->contains($operationScenariiParentsRelatedByOpsParentNumero)) {
            $this->collOperationScenariiParentssRelatedByOpsParentNumero->remove($this->collOperationScenariiParentssRelatedByOpsParentNumero->search($operationScenariiParentsRelatedByOpsParentNumero));
            if (null === $this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion) {
                $this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion = clone $this->collOperationScenariiParentssRelatedByOpsParentNumero;
                $this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion->clear();
            }
            $this->operationScenariiParentssRelatedByOpsParentNumeroScheduledForDeletion[]= clone $operationScenariiParentsRelatedByOpsParentNumero;
            $operationScenariiParentsRelatedByOpsParentNumero->setOperationScenariiRelatedByOpsParentNumero(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->op_scenario_id = null;
        $this->op_id = null;
        $this->op_scenario_numero = null;
        $this->op_r_scenario_id = null;
        $this->op_scenario_libelle = null;
        $this->op_scenario_volume = null;
        $this->op_scenario_pcent = null;
        $this->op_r_prime_id = null;
        $this->op_scenario_reference = null;
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
            if ($this->collOperationPrestationss) {
                foreach ($this->collOperationPrestationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationScenariiParentssRelatedByOpsNumero) {
                foreach ($this->collOperationScenariiParentssRelatedByOpsNumero as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationScenariiParentssRelatedByOpsParentNumero) {
                foreach ($this->collOperationScenariiParentssRelatedByOpsParentNumero as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aOperations instanceof Persistent) {
              $this->aOperations->clearAllReferences($deep);
            }
            if ($this->aRScenarios instanceof Persistent) {
              $this->aRScenarios->clearAllReferences($deep);
            }
            if ($this->aOperationPrimes instanceof Persistent) {
              $this->aOperationPrimes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOperationPrestationss instanceof PropelCollection) {
            $this->collOperationPrestationss->clearIterator();
        }
        $this->collOperationPrestationss = null;
        if ($this->collOperationScenariiParentssRelatedByOpsNumero instanceof PropelCollection) {
            $this->collOperationScenariiParentssRelatedByOpsNumero->clearIterator();
        }
        $this->collOperationScenariiParentssRelatedByOpsNumero = null;
        if ($this->collOperationScenariiParentssRelatedByOpsParentNumero instanceof PropelCollection) {
            $this->collOperationScenariiParentssRelatedByOpsParentNumero->clearIterator();
        }
        $this->collOperationScenariiParentssRelatedByOpsParentNumero = null;
        $this->aOperations = null;
        $this->aRScenarios = null;
        $this->aOperationPrimes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OperationScenariiPeer::DEFAULT_STRING_FORMAT);
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
      0 => 'op_scenario_libelle',
      1 => 'op_id',
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
                            $this->addValidationFailed('Ce nom est déjà utilisé par un autre scénario de la même opération.', $aColumns[0]);
                        } else {
                            $this->addValidationFailed('Ce nom est déjà utilisé par un autre scénario de la même opération.', 'error');
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
                return BaseOperationScenariiPeer::getConnection();
            }
}
