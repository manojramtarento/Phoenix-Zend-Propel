<?php


/**
 * Base class that represents a row from the 'r_operation_type_sub_tpl_scenario' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplScenario extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ROperationTypeSubTplScenarioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ROperationTypeSubTplScenarioPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the ost_tpl_scenario_id field.
     * @var        int
     */
    protected $ost_tpl_scenario_id;

    /**
     * The value for the ost_tpl_id field.
     * @var        int
     */
    protected $ost_tpl_id;

    /**
     * The value for the r_scenario_id field.
     * @var        int
     */
    protected $r_scenario_id;

    /**
     * The value for the r_scenario_numero field.
     * @var        int
     */
    protected $r_scenario_numero;

    /**
     * The value for the r_scenario_pcent field.
     * @var        int
     */
    protected $r_scenario_pcent;

    /**
     * The value for the r_prime_numero field.
     * @var        int
     */
    protected $r_prime_numero;

    /**
     * The value for the r_scenario_reference field.
     * @var        string
     */
    protected $r_scenario_reference;

    /**
     * The value for the ost_tpl_scenario_is_mandatory field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $ost_tpl_scenario_is_mandatory;

    /**
     * @var        ROperationTypeSubTpl
     */
    protected $aROperationTypeSubTpl;

    /**
     * @var        RScenarios
     */
    protected $aRScenarios;

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
        $this->ost_tpl_scenario_is_mandatory = false;
    }

    /**
     * Initializes internal state of BaseROperationTypeSubTplScenario object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [ost_tpl_scenario_id] column value.
     *
     * @return int
     */
    public function getOstTplScenarioId()
    {

        return $this->ost_tpl_scenario_id;
    }

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
     * Get the [r_scenario_id] column value.
     *
     * @return int
     */
    public function getRScenarioId()
    {

        return $this->r_scenario_id;
    }

    /**
     * Get the [r_scenario_numero] column value.
     *
     * @return int
     */
    public function getRScenarioNumero()
    {

        return $this->r_scenario_numero;
    }

    /**
     * Get the [r_scenario_pcent] column value.
     *
     * @return int
     */
    public function getRScenarioPcent()
    {

        return $this->r_scenario_pcent;
    }

    /**
     * Get the [r_prime_numero] column value.
     *
     * @return int
     */
    public function getRPrimeNumero()
    {

        return $this->r_prime_numero;
    }

    /**
     * Get the [r_scenario_reference] column value.
     *
     * @return string
     */
    public function getRScenarioReference()
    {

        return $this->r_scenario_reference;
    }

    /**
     * Get the [ost_tpl_scenario_is_mandatory] column value.
     *
     * @return boolean
     */
    public function getOstTplScenarioIsMandatory()
    {

        return $this->ost_tpl_scenario_is_mandatory;
    }

    /**
     * Set the value of [ost_tpl_scenario_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplScenario The current object (for fluent API support)
     */
    public function setOstTplScenarioId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ost_tpl_scenario_id !== $v) {
                    $this->ost_tpl_scenario_id = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID;
                }


        return $this;
    } // setOstTplScenarioId()

    /**
     * Set the value of [ost_tpl_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplScenario The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ROperationTypeSubTplScenarioPeer::OST_TPL_ID;
                }

        if ($this->aROperationTypeSubTpl !== null && $this->aROperationTypeSubTpl->getOstTplId() !== $v) {
            $this->aROperationTypeSubTpl = null;
        }


        return $this;
    } // setOstTplId()

    /**
     * Set the value of [r_scenario_id] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplScenario The current object (for fluent API support)
     */
    public function setRScenarioId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_scenario_id !== $v) {
                    $this->r_scenario_id = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplScenarioPeer::R_SCENARIO_ID;
                }

        if ($this->aRScenarios !== null && $this->aRScenarios->getRScenarioId() !== $v) {
            $this->aRScenarios = null;
        }


        return $this;
    } // setRScenarioId()

    /**
     * Set the value of [r_scenario_numero] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplScenario The current object (for fluent API support)
     */
    public function setRScenarioNumero($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_scenario_numero !== $v) {
                    $this->r_scenario_numero = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplScenarioPeer::R_SCENARIO_NUMERO;
                }


        return $this;
    } // setRScenarioNumero()

    /**
     * Set the value of [r_scenario_pcent] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplScenario The current object (for fluent API support)
     */
    public function setRScenarioPcent($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_scenario_pcent !== $v) {
                    $this->r_scenario_pcent = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplScenarioPeer::R_SCENARIO_PCENT;
                }


        return $this;
    } // setRScenarioPcent()

    /**
     * Set the value of [r_prime_numero] column.
     *
     * @param  int $v new value
     * @return ROperationTypeSubTplScenario The current object (for fluent API support)
     */
    public function setRPrimeNumero($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_prime_numero !== $v) {
                    $this->r_prime_numero = $v;
                    $this->modifiedColumns[] = ROperationTypeSubTplScenarioPeer::R_PRIME_NUMERO;
                }


        return $this;
    } // setRPrimeNumero()

    /**
     * Set the value of [r_scenario_reference] column.
     *
     * @param  string $v new value
     * @return ROperationTypeSubTplScenario The current object (for fluent API support)
     */
    public function setRScenarioReference($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_scenario_reference !== $v) {
            $this->r_scenario_reference = $v;
            $this->modifiedColumns[] = ROperationTypeSubTplScenarioPeer::R_SCENARIO_REFERENCE;
        }


        return $this;
    } // setRScenarioReference()

    /**
     * Sets the value of the [ost_tpl_scenario_is_mandatory] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ROperationTypeSubTplScenario The current object (for fluent API support)
     */
    public function setOstTplScenarioIsMandatory($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ost_tpl_scenario_is_mandatory !== $v) {
            $this->ost_tpl_scenario_is_mandatory = $v;
            $this->modifiedColumns[] = ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_IS_MANDATORY;
        }


        return $this;
    } // setOstTplScenarioIsMandatory()

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
            if ($this->ost_tpl_scenario_is_mandatory !== false) {
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

            $this->ost_tpl_scenario_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->ost_tpl_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->r_scenario_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->r_scenario_numero = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->r_scenario_pcent = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->r_prime_numero = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->r_scenario_reference = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->ost_tpl_scenario_is_mandatory = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = ROperationTypeSubTplScenarioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ROperationTypeSubTplScenario object", $e);
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

        if ($this->aROperationTypeSubTpl !== null && $this->ost_tpl_id !== $this->aROperationTypeSubTpl->getOstTplId()) {
            $this->aROperationTypeSubTpl = null;
        }
        if ($this->aRScenarios !== null && $this->r_scenario_id !== $this->aRScenarios->getRScenarioId()) {
            $this->aRScenarios = null;
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
            $con = Propel::getConnection(ROperationTypeSubTplScenarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ROperationTypeSubTplScenarioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aROperationTypeSubTpl = null;
            $this->aRScenarios = null;
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
            $con = Propel::getConnection(ROperationTypeSubTplScenarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ROperationTypeSubTplScenarioQuery::create()
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
            $con = Propel::getConnection(ROperationTypeSubTplScenarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ROperationTypeSubTplScenarioPeer::addInstanceToPool($this);
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

            if ($this->aROperationTypeSubTpl !== null) {
                if ($this->aROperationTypeSubTpl->isModified() || $this->aROperationTypeSubTpl->isNew()) {
                    $affectedRows += $this->aROperationTypeSubTpl->save($con);
                }
                $this->setROperationTypeSubTpl($this->aROperationTypeSubTpl);
            }

            if ($this->aRScenarios !== null) {
                if ($this->aRScenarios->isModified() || $this->aRScenarios->isNew()) {
                    $affectedRows += $this->aRScenarios->save($con);
                }
                $this->setRScenarios($this->aRScenarios);
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

        $this->modifiedColumns[] = ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID;
        if (null !== $this->ost_tpl_scenario_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_scenario_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::OST_TPL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::R_SCENARIO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_scenario_id`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::R_SCENARIO_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`r_scenario_numero`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::R_SCENARIO_PCENT)) {
            $modifiedColumns[':p' . $index++]  = '`r_scenario_pcent`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::R_PRIME_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`r_prime_numero`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::R_SCENARIO_REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`r_scenario_reference`';
        }
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_IS_MANDATORY)) {
            $modifiedColumns[':p' . $index++]  = '`ost_tpl_scenario_is_mandatory`';
        }

        $sql = sprintf(
            'INSERT INTO `r_operation_type_sub_tpl_scenario` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ost_tpl_scenario_id`':
                        $stmt->bindValue($identifier, $this->ost_tpl_scenario_id, PDO::PARAM_INT);
                        break;
                    case '`ost_tpl_id`':
                        $stmt->bindValue($identifier, $this->ost_tpl_id, PDO::PARAM_INT);
                        break;
                    case '`r_scenario_id`':
                        $stmt->bindValue($identifier, $this->r_scenario_id, PDO::PARAM_INT);
                        break;
                    case '`r_scenario_numero`':
                        $stmt->bindValue($identifier, $this->r_scenario_numero, PDO::PARAM_INT);
                        break;
                    case '`r_scenario_pcent`':
                        $stmt->bindValue($identifier, $this->r_scenario_pcent, PDO::PARAM_INT);
                        break;
                    case '`r_prime_numero`':
                        $stmt->bindValue($identifier, $this->r_prime_numero, PDO::PARAM_INT);
                        break;
                    case '`r_scenario_reference`':
                        $stmt->bindValue($identifier, $this->r_scenario_reference, PDO::PARAM_STR);
                        break;
                    case '`ost_tpl_scenario_is_mandatory`':
                        $stmt->bindValue($identifier, (int) $this->ost_tpl_scenario_is_mandatory, PDO::PARAM_INT);
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
        $this->setOstTplScenarioId($pk);

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

            if ($this->aROperationTypeSubTpl !== null) {
                if (!$this->aROperationTypeSubTpl->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aROperationTypeSubTpl->getValidationFailures());
                }
            }

            if ($this->aRScenarios !== null) {
                if (!$this->aRScenarios->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRScenarios->getValidationFailures());
                }
            }


            if (($retval = ROperationTypeSubTplScenarioPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ROperationTypeSubTplScenarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOstTplScenarioId();
                break;
            case 1:
                return $this->getOstTplId();
                break;
            case 2:
                return $this->getRScenarioId();
                break;
            case 3:
                return $this->getRScenarioNumero();
                break;
            case 4:
                return $this->getRScenarioPcent();
                break;
            case 5:
                return $this->getRPrimeNumero();
                break;
            case 6:
                return $this->getRScenarioReference();
                break;
            case 7:
                return $this->getOstTplScenarioIsMandatory();
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
        if (isset($alreadyDumpedObjects['ROperationTypeSubTplScenario'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ROperationTypeSubTplScenario'][$this->getPrimaryKey()] = true;
        $keys = ROperationTypeSubTplScenarioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOstTplScenarioId(),
            $keys[1] => $this->getOstTplId(),
            $keys[2] => $this->getRScenarioId(),
            $keys[3] => $this->getRScenarioNumero(),
            $keys[4] => $this->getRScenarioPcent(),
            $keys[5] => $this->getRPrimeNumero(),
            $keys[6] => $this->getRScenarioReference(),
            $keys[7] => $this->getOstTplScenarioIsMandatory(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aROperationTypeSubTpl) {
                $result['ROperationTypeSubTpl'] = $this->aROperationTypeSubTpl->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRScenarios) {
                $result['RScenarios'] = $this->aRScenarios->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = ROperationTypeSubTplScenarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOstTplScenarioId($value);
                break;
            case 1:
                $this->setOstTplId($value);
                break;
            case 2:
                $this->setRScenarioId($value);
                break;
            case 3:
                $this->setRScenarioNumero($value);
                break;
            case 4:
                $this->setRScenarioPcent($value);
                break;
            case 5:
                $this->setRPrimeNumero($value);
                break;
            case 6:
                $this->setRScenarioReference($value);
                break;
            case 7:
                $this->setOstTplScenarioIsMandatory($value);
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
        $keys = ROperationTypeSubTplScenarioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOstTplScenarioId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOstTplId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRScenarioId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRScenarioNumero($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRScenarioPcent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRPrimeNumero($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRScenarioReference($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOstTplScenarioIsMandatory($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ROperationTypeSubTplScenarioPeer::DATABASE_NAME);

        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID)) $criteria->add(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID, $this->ost_tpl_scenario_id);
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::OST_TPL_ID)) $criteria->add(ROperationTypeSubTplScenarioPeer::OST_TPL_ID, $this->ost_tpl_id);
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::R_SCENARIO_ID)) $criteria->add(ROperationTypeSubTplScenarioPeer::R_SCENARIO_ID, $this->r_scenario_id);
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::R_SCENARIO_NUMERO)) $criteria->add(ROperationTypeSubTplScenarioPeer::R_SCENARIO_NUMERO, $this->r_scenario_numero);
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::R_SCENARIO_PCENT)) $criteria->add(ROperationTypeSubTplScenarioPeer::R_SCENARIO_PCENT, $this->r_scenario_pcent);
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::R_PRIME_NUMERO)) $criteria->add(ROperationTypeSubTplScenarioPeer::R_PRIME_NUMERO, $this->r_prime_numero);
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::R_SCENARIO_REFERENCE)) $criteria->add(ROperationTypeSubTplScenarioPeer::R_SCENARIO_REFERENCE, $this->r_scenario_reference);
        if ($this->isColumnModified(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_IS_MANDATORY)) $criteria->add(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_IS_MANDATORY, $this->ost_tpl_scenario_is_mandatory);

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
        $criteria = new Criteria(ROperationTypeSubTplScenarioPeer::DATABASE_NAME);
        $criteria->add(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID, $this->ost_tpl_scenario_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOstTplScenarioId();
    }

    /**
     * Generic method to set the primary key (ost_tpl_scenario_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOstTplScenarioId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOstTplScenarioId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ROperationTypeSubTplScenario (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOstTplId($this->getOstTplId());
        $copyObj->setRScenarioId($this->getRScenarioId());
        $copyObj->setRScenarioNumero($this->getRScenarioNumero());
        $copyObj->setRScenarioPcent($this->getRScenarioPcent());
        $copyObj->setRPrimeNumero($this->getRPrimeNumero());
        $copyObj->setRScenarioReference($this->getRScenarioReference());
        $copyObj->setOstTplScenarioIsMandatory($this->getOstTplScenarioIsMandatory());

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
            $copyObj->setOstTplScenarioId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ROperationTypeSubTplScenario Clone of current object.
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
     * @return ROperationTypeSubTplScenarioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ROperationTypeSubTplScenarioPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ROperationTypeSubTpl object.
     *
     * @param                  ROperationTypeSubTpl $v
     * @return ROperationTypeSubTplScenario The current object (for fluent API support)
     * @throws PropelException
     */
    public function setROperationTypeSubTpl(ROperationTypeSubTpl $v = null)
    {
        if ($v === null) {
            $this->setOstTplId(NULL);
        } else {
            $this->setOstTplId($v->getOstTplId());
        }

        $this->aROperationTypeSubTpl = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationTypeSubTpl object, it will not be re-added.
        if ($v !== null) {
            $v->addROperationTypeSubTplScenario($this);
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
    public function getROperationTypeSubTpl(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aROperationTypeSubTpl === null && ($this->ost_tpl_id !== null) && $doQuery) {
            $this->aROperationTypeSubTpl = ROperationTypeSubTplQuery::create()->findPk($this->ost_tpl_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aROperationTypeSubTpl->addROperationTypeSubTplScenarios($this);
             */
        }

        return $this->aROperationTypeSubTpl;
    }

    /**
     * Declares an association between this object and a RScenarios object.
     *
     * @param                  RScenarios $v
     * @return ROperationTypeSubTplScenario The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRScenarios(RScenarios $v = null)
    {
        if ($v === null) {
            $this->setRScenarioId(NULL);
        } else {
            $this->setRScenarioId($v->getRScenarioId());
        }

        $this->aRScenarios = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RScenarios object, it will not be re-added.
        if ($v !== null) {
            $v->addROperationTypeSubTplScenario($this);
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
        if ($this->aRScenarios === null && ($this->r_scenario_id !== null) && $doQuery) {
            $this->aRScenarios = RScenariosQuery::create()->findPk($this->r_scenario_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRScenarios->addROperationTypeSubTplScenarios($this);
             */
        }

        return $this->aRScenarios;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->ost_tpl_scenario_id = null;
        $this->ost_tpl_id = null;
        $this->r_scenario_id = null;
        $this->r_scenario_numero = null;
        $this->r_scenario_pcent = null;
        $this->r_prime_numero = null;
        $this->r_scenario_reference = null;
        $this->ost_tpl_scenario_is_mandatory = null;
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
            if ($this->aROperationTypeSubTpl instanceof Persistent) {
              $this->aROperationTypeSubTpl->clearAllReferences($deep);
            }
            if ($this->aRScenarios instanceof Persistent) {
              $this->aRScenarios->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aROperationTypeSubTpl = null;
        $this->aRScenarios = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ROperationTypeSubTplScenarioPeer::DEFAULT_STRING_FORMAT);
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
                return BaseROperationTypeSubTplScenarioPeer::getConnection();
            }
}
