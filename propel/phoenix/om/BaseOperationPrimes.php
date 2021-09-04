<?php


/**
 * Base class that represents a row from the 'operation_primes' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationPrimes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationPrimesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationPrimesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the op_prime_id field.
     * @var        int
     */
    protected $op_prime_id;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the op_prime_libelle field.
     * @var        string
     */
    protected $op_prime_libelle;

    /**
     * The value for the op_prime_numero field.
     * @var        int
     */
    protected $op_prime_numero;

    /**
     * The value for the gdl_art_id field.
     * @var        int
     */
    protected $gdl_art_id;

    /**
     * The value for the operation_prime_currency_id field.
     * @var        int
     */
    protected $operation_prime_currency_id;

    /**
     * The value for the operation_prime_r_reward_type_id field.
     * @var        int
     */
    protected $operation_prime_r_reward_type_id;

    /**
     * The value for the operation_prime_r_reward_expedition_mode_id field.
     * @var        int
     */
    protected $operation_prime_r_reward_expedition_mode_id;

    /**
     * The value for the operation_prime_r_reward_transporter_id field.
     * @var        int
     */
    protected $operation_prime_r_reward_transporter_id;

    /**
     * The value for the operation_prime_fixed_amount field.
     * @var        float
     */
    protected $operation_prime_fixed_amount;

    /**
     * The value for the operation_prime_product_price_pourcentage field.
     * @var        int
     */
    protected $operation_prime_product_price_pourcentage;

    /**
     * The value for the operation_prime_maximum_amount field.
     * @var        float
     */
    protected $operation_prime_maximum_amount;

    /**
     * @var        Operations
     */
    protected $aOperations;

    /**
     * @var        RCurrencies
     */
    protected $aRCurrencies;

    /**
     * @var        RRewardTypes
     */
    protected $aRRewardTypes;

    /**
     * @var        RRewardExpeditionModes
     */
    protected $aRRewardExpeditionModes;

    /**
     * @var        RRewardTransporters
     */
    protected $aRRewardTransporters;

    /**
     * @var        PropelObjectCollection|OperationPrestations[] Collection to store aggregation of OperationPrestations objects.
     */
    protected $collOperationPrestationss;
    protected $collOperationPrestationssPartial;

    /**
     * @var        PropelObjectCollection|OperationScenarii[] Collection to store aggregation of OperationScenarii objects.
     */
    protected $collOperationScenariis;
    protected $collOperationScenariisPartial;

    /**
     * @var        PropelObjectCollection|LnkOperationPrimeRCountries[] Collection to store aggregation of LnkOperationPrimeRCountries objects.
     */
    protected $collLnkOperationPrimeRCountriess;
    protected $collLnkOperationPrimeRCountriessPartial;

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
    protected $operationScenariisScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkOperationPrimeRCountriessScheduledForDeletion = null;

    /**
     * Get the [op_prime_id] column value.
     *
     * @return int
     */
    public function getOpPrimeId()
    {

        return $this->op_prime_id;
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
     * Get the [op_prime_libelle] column value.
     *
     * @return string
     */
    public function getOpPrimeLibelle()
    {

        return $this->op_prime_libelle;
    }

    /**
     * Get the [op_prime_numero] column value.
     *
     * @return int
     */
    public function getOpPrimeNumero()
    {

        return $this->op_prime_numero;
    }

    /**
     * Get the [gdl_art_id] column value.
     *
     * @return int
     */
    public function getGdlArtId()
    {

        return $this->gdl_art_id;
    }

    /**
     * Get the [operation_prime_currency_id] column value.
     *
     * @return int
     */
    public function getOperationPrimeCurrencyId()
    {

        return $this->operation_prime_currency_id;
    }

    /**
     * Get the [operation_prime_r_reward_type_id] column value.
     *
     * @return int
     */
    public function getOperationPrimeRRewardTypeId()
    {

        return $this->operation_prime_r_reward_type_id;
    }

    /**
     * Get the [operation_prime_r_reward_expedition_mode_id] column value.
     *
     * @return int
     */
    public function getOperationPrimeRRewardExpeditionModeId()
    {

        return $this->operation_prime_r_reward_expedition_mode_id;
    }

    /**
     * Get the [operation_prime_r_reward_transporter_id] column value.
     *
     * @return int
     */
    public function getOperationPrimeRRewardTransporterId()
    {

        return $this->operation_prime_r_reward_transporter_id;
    }

    /**
     * Get the [operation_prime_fixed_amount] column value.
     *
     * @return float
     */
    public function getOperationPrimeFixedAmount()
    {

        return $this->operation_prime_fixed_amount;
    }

    /**
     * Get the [operation_prime_product_price_pourcentage] column value.
     *
     * @return int
     */
    public function getOperationPrimeProductPricePourcentage()
    {

        return $this->operation_prime_product_price_pourcentage;
    }

    /**
     * Get the [operation_prime_maximum_amount] column value.
     *
     * @return float
     */
    public function getOperationPrimeMaximumAmount()
    {

        return $this->operation_prime_maximum_amount;
    }

    /**
     * Set the value of [op_prime_id] column.
     *
     * @param  int $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOpPrimeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prime_id !== $v) {
                    $this->op_prime_id = $v;
                    $this->modifiedColumns[] = OperationPrimesPeer::OP_PRIME_ID;
                }


        return $this;
    } // setOpPrimeId()

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return OperationPrimes The current object (for fluent API support)
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
                    $this->modifiedColumns[] = OperationPrimesPeer::OP_ID;
                }

        if ($this->aOperations !== null && $this->aOperations->getOpId() !== $v) {
            $this->aOperations = null;
        }


        return $this;
    } // setOpId()

    /**
     * Set the value of [op_prime_libelle] column.
     *
     * @param  string $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOpPrimeLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_prime_libelle !== $v) {
            $this->op_prime_libelle = $v;
            $this->modifiedColumns[] = OperationPrimesPeer::OP_PRIME_LIBELLE;
        }


        return $this;
    } // setOpPrimeLibelle()

    /**
     * Set the value of [op_prime_numero] column.
     *
     * @param  int $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOpPrimeNumero($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prime_numero !== $v) {
                    $this->op_prime_numero = $v;
                    $this->modifiedColumns[] = OperationPrimesPeer::OP_PRIME_NUMERO;
                }


        return $this;
    } // setOpPrimeNumero()

    /**
     * Set the value of [gdl_art_id] column.
     *
     * @param  int $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setGdlArtId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->gdl_art_id !== $v) {
                    $this->gdl_art_id = $v;
                    $this->modifiedColumns[] = OperationPrimesPeer::GDL_ART_ID;
                }


        return $this;
    } // setGdlArtId()

    /**
     * Set the value of [operation_prime_currency_id] column.
     *
     * @param  int $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOperationPrimeCurrencyId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->operation_prime_currency_id !== $v) {
                    $this->operation_prime_currency_id = $v;
                    $this->modifiedColumns[] = OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID;
                }

        if ($this->aRCurrencies !== null && $this->aRCurrencies->getRCurrencyId() !== $v) {
            $this->aRCurrencies = null;
        }


        return $this;
    } // setOperationPrimeCurrencyId()

    /**
     * Set the value of [operation_prime_r_reward_type_id] column.
     *
     * @param  int $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOperationPrimeRRewardTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->operation_prime_r_reward_type_id !== $v) {
                    $this->operation_prime_r_reward_type_id = $v;
                    $this->modifiedColumns[] = OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID;
                }

        if ($this->aRRewardTypes !== null && $this->aRRewardTypes->getRRewardTypeId() !== $v) {
            $this->aRRewardTypes = null;
        }


        return $this;
    } // setOperationPrimeRRewardTypeId()

    /**
     * Set the value of [operation_prime_r_reward_expedition_mode_id] column.
     *
     * @param  int $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOperationPrimeRRewardExpeditionModeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->operation_prime_r_reward_expedition_mode_id !== $v) {
                    $this->operation_prime_r_reward_expedition_mode_id = $v;
                    $this->modifiedColumns[] = OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID;
                }

        if ($this->aRRewardExpeditionModes !== null && $this->aRRewardExpeditionModes->getRRewardExpeditionModeId() !== $v) {
            $this->aRRewardExpeditionModes = null;
        }


        return $this;
    } // setOperationPrimeRRewardExpeditionModeId()

    /**
     * Set the value of [operation_prime_r_reward_transporter_id] column.
     *
     * @param  int $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOperationPrimeRRewardTransporterId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->operation_prime_r_reward_transporter_id !== $v) {
                    $this->operation_prime_r_reward_transporter_id = $v;
                    $this->modifiedColumns[] = OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID;
                }

        if ($this->aRRewardTransporters !== null && $this->aRRewardTransporters->getRRewardTransporterId() !== $v) {
            $this->aRRewardTransporters = null;
        }


        return $this;
    } // setOperationPrimeRRewardTransporterId()

    /**
     * Set the value of [operation_prime_fixed_amount] column.
     *
     * @param  float $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOperationPrimeFixedAmount($v)
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
                if ($this->operation_prime_fixed_amount !== $v) {
                    $this->operation_prime_fixed_amount = $v;
                    $this->modifiedColumns[] = OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT;
                }


        return $this;
    } // setOperationPrimeFixedAmount()

    /**
     * Set the value of [operation_prime_product_price_pourcentage] column.
     *
     * @param  int $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOperationPrimeProductPricePourcentage($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->operation_prime_product_price_pourcentage !== $v) {
                    $this->operation_prime_product_price_pourcentage = $v;
                    $this->modifiedColumns[] = OperationPrimesPeer::OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE;
                }


        return $this;
    } // setOperationPrimeProductPricePourcentage()

    /**
     * Set the value of [operation_prime_maximum_amount] column.
     *
     * @param  float $v new value
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOperationPrimeMaximumAmount($v)
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
                if ($this->operation_prime_maximum_amount !== $v) {
                    $this->operation_prime_maximum_amount = $v;
                    $this->modifiedColumns[] = OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT;
                }


        return $this;
    } // setOperationPrimeMaximumAmount()

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

            $this->op_prime_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->op_prime_libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->op_prime_numero = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->gdl_art_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->operation_prime_currency_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->operation_prime_r_reward_type_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->operation_prime_r_reward_expedition_mode_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->operation_prime_r_reward_transporter_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->operation_prime_fixed_amount = ($row[$startcol + 9] !== null) ? (float) $row[$startcol + 9] : null;
            $this->operation_prime_product_price_pourcentage = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->operation_prime_maximum_amount = ($row[$startcol + 11] !== null) ? (float) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = OperationPrimesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OperationPrimes object", $e);
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
        if ($this->aRCurrencies !== null && $this->operation_prime_currency_id !== $this->aRCurrencies->getRCurrencyId()) {
            $this->aRCurrencies = null;
        }
        if ($this->aRRewardTypes !== null && $this->operation_prime_r_reward_type_id !== $this->aRRewardTypes->getRRewardTypeId()) {
            $this->aRRewardTypes = null;
        }
        if ($this->aRRewardExpeditionModes !== null && $this->operation_prime_r_reward_expedition_mode_id !== $this->aRRewardExpeditionModes->getRRewardExpeditionModeId()) {
            $this->aRRewardExpeditionModes = null;
        }
        if ($this->aRRewardTransporters !== null && $this->operation_prime_r_reward_transporter_id !== $this->aRRewardTransporters->getRRewardTransporterId()) {
            $this->aRRewardTransporters = null;
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
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationPrimesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperations = null;
            $this->aRCurrencies = null;
            $this->aRRewardTypes = null;
            $this->aRRewardExpeditionModes = null;
            $this->aRRewardTransporters = null;
            $this->collOperationPrestationss = null;

            $this->collOperationScenariis = null;

            $this->collLnkOperationPrimeRCountriess = null;

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
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationPrimesQuery::create()
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
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OperationPrimesPeer::addInstanceToPool($this);
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

            if ($this->aRCurrencies !== null) {
                if ($this->aRCurrencies->isModified() || $this->aRCurrencies->isNew()) {
                    $affectedRows += $this->aRCurrencies->save($con);
                }
                $this->setRCurrencies($this->aRCurrencies);
            }

            if ($this->aRRewardTypes !== null) {
                if ($this->aRRewardTypes->isModified() || $this->aRRewardTypes->isNew()) {
                    $affectedRows += $this->aRRewardTypes->save($con);
                }
                $this->setRRewardTypes($this->aRRewardTypes);
            }

            if ($this->aRRewardExpeditionModes !== null) {
                if ($this->aRRewardExpeditionModes->isModified() || $this->aRRewardExpeditionModes->isNew()) {
                    $affectedRows += $this->aRRewardExpeditionModes->save($con);
                }
                $this->setRRewardExpeditionModes($this->aRRewardExpeditionModes);
            }

            if ($this->aRRewardTransporters !== null) {
                if ($this->aRRewardTransporters->isModified() || $this->aRRewardTransporters->isNew()) {
                    $affectedRows += $this->aRRewardTransporters->save($con);
                }
                $this->setRRewardTransporters($this->aRRewardTransporters);
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

            if ($this->operationScenariisScheduledForDeletion !== null) {
                if (!$this->operationScenariisScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationScenariisScheduledForDeletion as $operationScenarii) {
                        // need to save related object because we set the relation to null
                        $operationScenarii->save($con);
                    }
                    $this->operationScenariisScheduledForDeletion = null;
                }
            }

            if ($this->collOperationScenariis !== null) {
                foreach ($this->collOperationScenariis as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkOperationPrimeRCountriessScheduledForDeletion !== null) {
                if (!$this->lnkOperationPrimeRCountriessScheduledForDeletion->isEmpty()) {
                    foreach ($this->lnkOperationPrimeRCountriessScheduledForDeletion as $lnkOperationPrimeRCountries) {
                        // need to save related object because we set the relation to null
                        $lnkOperationPrimeRCountries->save($con);
                    }
                    $this->lnkOperationPrimeRCountriessScheduledForDeletion = null;
                }
            }

            if ($this->collLnkOperationPrimeRCountriess !== null) {
                foreach ($this->collLnkOperationPrimeRCountriess as $referrerFK) {
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

        $this->modifiedColumns[] = OperationPrimesPeer::OP_PRIME_ID;
        if (null !== $this->op_prime_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OperationPrimesPeer::OP_PRIME_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationPrimesPeer::OP_PRIME_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_prime_id`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::OP_PRIME_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`op_prime_libelle`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::OP_PRIME_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`op_prime_numero`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::GDL_ART_ID)) {
            $modifiedColumns[':p' . $index++]  = '`gdl_art_id`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`operation_prime_currency_id`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`operation_prime_r_reward_type_id`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`operation_prime_r_reward_expedition_mode_id`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`operation_prime_r_reward_transporter_id`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`operation_prime_fixed_amount`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`operation_prime_product_price_pourcentage`';
        }
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`operation_prime_maximum_amount`';
        }

        $sql = sprintf(
            'INSERT INTO `operation_primes` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`op_prime_id`':
                        $stmt->bindValue($identifier, $this->op_prime_id, PDO::PARAM_INT);
                        break;
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`op_prime_libelle`':
                        $stmt->bindValue($identifier, $this->op_prime_libelle, PDO::PARAM_STR);
                        break;
                    case '`op_prime_numero`':
                        $stmt->bindValue($identifier, $this->op_prime_numero, PDO::PARAM_INT);
                        break;
                    case '`gdl_art_id`':
                        $stmt->bindValue($identifier, $this->gdl_art_id, PDO::PARAM_INT);
                        break;
                    case '`operation_prime_currency_id`':
                        $stmt->bindValue($identifier, $this->operation_prime_currency_id, PDO::PARAM_INT);
                        break;
                    case '`operation_prime_r_reward_type_id`':
                        $stmt->bindValue($identifier, $this->operation_prime_r_reward_type_id, PDO::PARAM_INT);
                        break;
                    case '`operation_prime_r_reward_expedition_mode_id`':
                        $stmt->bindValue($identifier, $this->operation_prime_r_reward_expedition_mode_id, PDO::PARAM_INT);
                        break;
                    case '`operation_prime_r_reward_transporter_id`':
                        $stmt->bindValue($identifier, $this->operation_prime_r_reward_transporter_id, PDO::PARAM_INT);
                        break;
                    case '`operation_prime_fixed_amount`':
                        $stmt->bindValue($identifier, $this->operation_prime_fixed_amount, PDO::PARAM_INT);
                        break;
                    case '`operation_prime_product_price_pourcentage`':
                        $stmt->bindValue($identifier, $this->operation_prime_product_price_pourcentage, PDO::PARAM_INT);
                        break;
                    case '`operation_prime_maximum_amount`':
                        $stmt->bindValue($identifier, $this->operation_prime_maximum_amount, PDO::PARAM_INT);
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
        $this->setOpPrimeId($pk);

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

            if ($this->aRCurrencies !== null) {
                if (!$this->aRCurrencies->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRCurrencies->getValidationFailures());
                }
            }

            if ($this->aRRewardTypes !== null) {
                if (!$this->aRRewardTypes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRRewardTypes->getValidationFailures());
                }
            }

            if ($this->aRRewardExpeditionModes !== null) {
                if (!$this->aRRewardExpeditionModes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRRewardExpeditionModes->getValidationFailures());
                }
            }

            if ($this->aRRewardTransporters !== null) {
                if (!$this->aRRewardTransporters->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRRewardTransporters->getValidationFailures());
                }
            }


            if (($retval = OperationPrimesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOperationPrestationss !== null) {
                    foreach ($this->collOperationPrestationss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationScenariis !== null) {
                    foreach ($this->collOperationScenariis as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkOperationPrimeRCountriess !== null) {
                    foreach ($this->collLnkOperationPrimeRCountriess as $referrerFK) {
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
        $pos = OperationPrimesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOpPrimeId();
                break;
            case 1:
                return $this->getOpId();
                break;
            case 2:
                return $this->getOpPrimeLibelle();
                break;
            case 3:
                return $this->getOpPrimeNumero();
                break;
            case 4:
                return $this->getGdlArtId();
                break;
            case 5:
                return $this->getOperationPrimeCurrencyId();
                break;
            case 6:
                return $this->getOperationPrimeRRewardTypeId();
                break;
            case 7:
                return $this->getOperationPrimeRRewardExpeditionModeId();
                break;
            case 8:
                return $this->getOperationPrimeRRewardTransporterId();
                break;
            case 9:
                return $this->getOperationPrimeFixedAmount();
                break;
            case 10:
                return $this->getOperationPrimeProductPricePourcentage();
                break;
            case 11:
                return $this->getOperationPrimeMaximumAmount();
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
        if (isset($alreadyDumpedObjects['OperationPrimes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OperationPrimes'][$this->getPrimaryKey()] = true;
        $keys = OperationPrimesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOpPrimeId(),
            $keys[1] => $this->getOpId(),
            $keys[2] => $this->getOpPrimeLibelle(),
            $keys[3] => $this->getOpPrimeNumero(),
            $keys[4] => $this->getGdlArtId(),
            $keys[5] => $this->getOperationPrimeCurrencyId(),
            $keys[6] => $this->getOperationPrimeRRewardTypeId(),
            $keys[7] => $this->getOperationPrimeRRewardExpeditionModeId(),
            $keys[8] => $this->getOperationPrimeRRewardTransporterId(),
            $keys[9] => $this->getOperationPrimeFixedAmount(),
            $keys[10] => $this->getOperationPrimeProductPricePourcentage(),
            $keys[11] => $this->getOperationPrimeMaximumAmount(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperations) {
                $result['Operations'] = $this->aOperations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRCurrencies) {
                $result['RCurrencies'] = $this->aRCurrencies->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRRewardTypes) {
                $result['RRewardTypes'] = $this->aRRewardTypes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRRewardExpeditionModes) {
                $result['RRewardExpeditionModes'] = $this->aRRewardExpeditionModes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRRewardTransporters) {
                $result['RRewardTransporters'] = $this->aRRewardTransporters->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collOperationPrestationss) {
                $result['OperationPrestationss'] = $this->collOperationPrestationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationScenariis) {
                $result['OperationScenariis'] = $this->collOperationScenariis->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkOperationPrimeRCountriess) {
                $result['LnkOperationPrimeRCountriess'] = $this->collLnkOperationPrimeRCountriess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = OperationPrimesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOpPrimeId($value);
                break;
            case 1:
                $this->setOpId($value);
                break;
            case 2:
                $this->setOpPrimeLibelle($value);
                break;
            case 3:
                $this->setOpPrimeNumero($value);
                break;
            case 4:
                $this->setGdlArtId($value);
                break;
            case 5:
                $this->setOperationPrimeCurrencyId($value);
                break;
            case 6:
                $this->setOperationPrimeRRewardTypeId($value);
                break;
            case 7:
                $this->setOperationPrimeRRewardExpeditionModeId($value);
                break;
            case 8:
                $this->setOperationPrimeRRewardTransporterId($value);
                break;
            case 9:
                $this->setOperationPrimeFixedAmount($value);
                break;
            case 10:
                $this->setOperationPrimeProductPricePourcentage($value);
                break;
            case 11:
                $this->setOperationPrimeMaximumAmount($value);
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
        $keys = OperationPrimesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOpPrimeId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOpPrimeLibelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOpPrimeNumero($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setGdlArtId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOperationPrimeCurrencyId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOperationPrimeRRewardTypeId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOperationPrimeRRewardExpeditionModeId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOperationPrimeRRewardTransporterId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setOperationPrimeFixedAmount($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setOperationPrimeProductPricePourcentage($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setOperationPrimeMaximumAmount($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationPrimesPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationPrimesPeer::OP_PRIME_ID)) $criteria->add(OperationPrimesPeer::OP_PRIME_ID, $this->op_prime_id);
        if ($this->isColumnModified(OperationPrimesPeer::OP_ID)) $criteria->add(OperationPrimesPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(OperationPrimesPeer::OP_PRIME_LIBELLE)) $criteria->add(OperationPrimesPeer::OP_PRIME_LIBELLE, $this->op_prime_libelle);
        if ($this->isColumnModified(OperationPrimesPeer::OP_PRIME_NUMERO)) $criteria->add(OperationPrimesPeer::OP_PRIME_NUMERO, $this->op_prime_numero);
        if ($this->isColumnModified(OperationPrimesPeer::GDL_ART_ID)) $criteria->add(OperationPrimesPeer::GDL_ART_ID, $this->gdl_art_id);
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID)) $criteria->add(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, $this->operation_prime_currency_id);
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID)) $criteria->add(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, $this->operation_prime_r_reward_type_id);
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID)) $criteria->add(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, $this->operation_prime_r_reward_expedition_mode_id);
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID)) $criteria->add(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, $this->operation_prime_r_reward_transporter_id);
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT)) $criteria->add(OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT, $this->operation_prime_fixed_amount);
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE)) $criteria->add(OperationPrimesPeer::OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE, $this->operation_prime_product_price_pourcentage);
        if ($this->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT)) $criteria->add(OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT, $this->operation_prime_maximum_amount);

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
        $criteria = new Criteria(OperationPrimesPeer::DATABASE_NAME);
        $criteria->add(OperationPrimesPeer::OP_PRIME_ID, $this->op_prime_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOpPrimeId();
    }

    /**
     * Generic method to set the primary key (op_prime_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOpPrimeId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOpPrimeId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of OperationPrimes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpId($this->getOpId());
        $copyObj->setOpPrimeLibelle($this->getOpPrimeLibelle());
        $copyObj->setOpPrimeNumero($this->getOpPrimeNumero());
        $copyObj->setGdlArtId($this->getGdlArtId());
        $copyObj->setOperationPrimeCurrencyId($this->getOperationPrimeCurrencyId());
        $copyObj->setOperationPrimeRRewardTypeId($this->getOperationPrimeRRewardTypeId());
        $copyObj->setOperationPrimeRRewardExpeditionModeId($this->getOperationPrimeRRewardExpeditionModeId());
        $copyObj->setOperationPrimeRRewardTransporterId($this->getOperationPrimeRRewardTransporterId());
        $copyObj->setOperationPrimeFixedAmount($this->getOperationPrimeFixedAmount());
        $copyObj->setOperationPrimeProductPricePourcentage($this->getOperationPrimeProductPricePourcentage());
        $copyObj->setOperationPrimeMaximumAmount($this->getOperationPrimeMaximumAmount());

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

            foreach ($this->getOperationScenariis() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationScenarii($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkOperationPrimeRCountriess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkOperationPrimeRCountries($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOpPrimeId(NULL); // this is a auto-increment column, so set to default value
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
     * @return OperationPrimes Clone of current object.
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
     * @return OperationPrimesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationPrimesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return OperationPrimes The current object (for fluent API support)
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
            $v->addOperationPrimes($this);
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
                $this->aOperations->addOperationPrimess($this);
             */
        }

        return $this->aOperations;
    }

    /**
     * Declares an association between this object and a RCurrencies object.
     *
     * @param                  RCurrencies $v
     * @return OperationPrimes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRCurrencies(RCurrencies $v = null)
    {
        if ($v === null) {
            $this->setOperationPrimeCurrencyId(NULL);
        } else {
            $this->setOperationPrimeCurrencyId($v->getRCurrencyId());
        }

        $this->aRCurrencies = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RCurrencies object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationPrimes($this);
        }


        return $this;
    }


    /**
     * Get the associated RCurrencies object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RCurrencies The associated RCurrencies object.
     * @throws PropelException
     */
    public function getRCurrencies(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRCurrencies === null && ($this->operation_prime_currency_id !== null) && $doQuery) {
            $this->aRCurrencies = RCurrenciesQuery::create()->findPk($this->operation_prime_currency_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRCurrencies->addOperationPrimess($this);
             */
        }

        return $this->aRCurrencies;
    }

    /**
     * Declares an association between this object and a RRewardTypes object.
     *
     * @param                  RRewardTypes $v
     * @return OperationPrimes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRRewardTypes(RRewardTypes $v = null)
    {
        if ($v === null) {
            $this->setOperationPrimeRRewardTypeId(NULL);
        } else {
            $this->setOperationPrimeRRewardTypeId($v->getRRewardTypeId());
        }

        $this->aRRewardTypes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RRewardTypes object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationPrimes($this);
        }


        return $this;
    }


    /**
     * Get the associated RRewardTypes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RRewardTypes The associated RRewardTypes object.
     * @throws PropelException
     */
    public function getRRewardTypes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRRewardTypes === null && ($this->operation_prime_r_reward_type_id !== null) && $doQuery) {
            $this->aRRewardTypes = RRewardTypesQuery::create()->findPk($this->operation_prime_r_reward_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRRewardTypes->addOperationPrimess($this);
             */
        }

        return $this->aRRewardTypes;
    }

    /**
     * Declares an association between this object and a RRewardExpeditionModes object.
     *
     * @param                  RRewardExpeditionModes $v
     * @return OperationPrimes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRRewardExpeditionModes(RRewardExpeditionModes $v = null)
    {
        if ($v === null) {
            $this->setOperationPrimeRRewardExpeditionModeId(NULL);
        } else {
            $this->setOperationPrimeRRewardExpeditionModeId($v->getRRewardExpeditionModeId());
        }

        $this->aRRewardExpeditionModes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RRewardExpeditionModes object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationPrimes($this);
        }


        return $this;
    }


    /**
     * Get the associated RRewardExpeditionModes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RRewardExpeditionModes The associated RRewardExpeditionModes object.
     * @throws PropelException
     */
    public function getRRewardExpeditionModes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRRewardExpeditionModes === null && ($this->operation_prime_r_reward_expedition_mode_id !== null) && $doQuery) {
            $this->aRRewardExpeditionModes = RRewardExpeditionModesQuery::create()->findPk($this->operation_prime_r_reward_expedition_mode_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRRewardExpeditionModes->addOperationPrimess($this);
             */
        }

        return $this->aRRewardExpeditionModes;
    }

    /**
     * Declares an association between this object and a RRewardTransporters object.
     *
     * @param                  RRewardTransporters $v
     * @return OperationPrimes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRRewardTransporters(RRewardTransporters $v = null)
    {
        if ($v === null) {
            $this->setOperationPrimeRRewardTransporterId(NULL);
        } else {
            $this->setOperationPrimeRRewardTransporterId($v->getRRewardTransporterId());
        }

        $this->aRRewardTransporters = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RRewardTransporters object, it will not be re-added.
        if ($v !== null) {
            $v->addOperationPrimes($this);
        }


        return $this;
    }


    /**
     * Get the associated RRewardTransporters object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RRewardTransporters The associated RRewardTransporters object.
     * @throws PropelException
     */
    public function getRRewardTransporters(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRRewardTransporters === null && ($this->operation_prime_r_reward_transporter_id !== null) && $doQuery) {
            $this->aRRewardTransporters = RRewardTransportersQuery::create()->findPk($this->operation_prime_r_reward_transporter_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRRewardTransporters->addOperationPrimess($this);
             */
        }

        return $this->aRRewardTransporters;
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
        if ('OperationScenarii' == $relationName) {
            $this->initOperationScenariis();
        }
        if ('LnkOperationPrimeRCountries' == $relationName) {
            $this->initLnkOperationPrimeRCountriess();
        }
    }

    /**
     * Clears out the collOperationPrestationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return OperationPrimes The current object (for fluent API support)
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
     * If this OperationPrimes is new, it will return
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
                    ->filterByOperationPrimes($this)
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
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOperationPrestationss(PropelCollection $operationPrestationss, PropelPDO $con = null)
    {
        $operationPrestationssToDelete = $this->getOperationPrestationss(new Criteria(), $con)->diff($operationPrestationss);


        $this->operationPrestationssScheduledForDeletion = $operationPrestationssToDelete;

        foreach ($operationPrestationssToDelete as $operationPrestationsRemoved) {
            $operationPrestationsRemoved->setOperationPrimes(null);
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
                ->filterByOperationPrimes($this)
                ->count($con);
        }

        return count($this->collOperationPrestationss);
    }

    /**
     * Method called to associate a OperationPrestations object to this object
     * through the OperationPrestations foreign key attribute.
     *
     * @param    OperationPrestations $l OperationPrestations
     * @return OperationPrimes The current object (for fluent API support)
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
        $operationPrestations->setOperationPrimes($this);
    }

    /**
     * @param	OperationPrestations $operationPrestations The operationPrestations object to remove.
     * @return OperationPrimes The current object (for fluent API support)
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
            $operationPrestations->setOperationPrimes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationPrimes is new, it will return
     * an empty collection; or if this OperationPrimes has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationPrimes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationScenarii($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationScenarii', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationPrimes is new, it will return
     * an empty collection; or if this OperationPrimes has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationPrimes.
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
     * Otherwise if this OperationPrimes is new, it will return
     * an empty collection; or if this OperationPrimes has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationPrimes.
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
     * Otherwise if this OperationPrimes is new, it will return
     * an empty collection; or if this OperationPrimes has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationPrimes.
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
     * Otherwise if this OperationPrimes is new, it will return
     * an empty collection; or if this OperationPrimes has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationPrimes.
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
     * Otherwise if this OperationPrimes is new, it will return
     * an empty collection; or if this OperationPrimes has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationPrimes.
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
     * Clears out the collOperationScenariis collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return OperationPrimes The current object (for fluent API support)
     * @see        addOperationScenariis()
     */
    public function clearOperationScenariis()
    {
        $this->collOperationScenariis = null; // important to set this to null since that means it is uninitialized
        $this->collOperationScenariisPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationScenariis collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationScenariis($v = true)
    {
        $this->collOperationScenariisPartial = $v;
    }

    /**
     * Initializes the collOperationScenariis collection.
     *
     * By default this just sets the collOperationScenariis collection to an empty array (like clearcollOperationScenariis());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationScenariis($overrideExisting = true)
    {
        if (null !== $this->collOperationScenariis && !$overrideExisting) {
            return;
        }
        $this->collOperationScenariis = new PropelObjectCollection();
        $this->collOperationScenariis->setModel('OperationScenarii');
    }

    /**
     * Gets an array of OperationScenarii objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this OperationPrimes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationScenarii[] List of OperationScenarii objects
     * @throws PropelException
     */
    public function getOperationScenariis($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationScenariisPartial && !$this->isNew();
        if (null === $this->collOperationScenariis || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationScenariis) {
                // return empty collection
                $this->initOperationScenariis();
            } else {
                $collOperationScenariis = OperationScenariiQuery::create(null, $criteria)
                    ->filterByOperationPrimes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationScenariisPartial && count($collOperationScenariis)) {
                      $this->initOperationScenariis(false);

                      foreach ($collOperationScenariis as $obj) {
                        if (false == $this->collOperationScenariis->contains($obj)) {
                          $this->collOperationScenariis->append($obj);
                        }
                      }

                      $this->collOperationScenariisPartial = true;
                    }

                    $collOperationScenariis->getInternalIterator()->rewind();

                    return $collOperationScenariis;
                }

                if ($partial && $this->collOperationScenariis) {
                    foreach ($this->collOperationScenariis as $obj) {
                        if ($obj->isNew()) {
                            $collOperationScenariis[] = $obj;
                        }
                    }
                }

                $this->collOperationScenariis = $collOperationScenariis;
                $this->collOperationScenariisPartial = false;
            }
        }

        return $this->collOperationScenariis;
    }

    /**
     * Sets a collection of OperationScenarii objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationScenariis A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setOperationScenariis(PropelCollection $operationScenariis, PropelPDO $con = null)
    {
        $operationScenariisToDelete = $this->getOperationScenariis(new Criteria(), $con)->diff($operationScenariis);


        $this->operationScenariisScheduledForDeletion = $operationScenariisToDelete;

        foreach ($operationScenariisToDelete as $operationScenariiRemoved) {
            $operationScenariiRemoved->setOperationPrimes(null);
        }

        $this->collOperationScenariis = null;
        foreach ($operationScenariis as $operationScenarii) {
            $this->addOperationScenarii($operationScenarii);
        }

        $this->collOperationScenariis = $operationScenariis;
        $this->collOperationScenariisPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationScenarii objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationScenarii objects.
     * @throws PropelException
     */
    public function countOperationScenariis(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationScenariisPartial && !$this->isNew();
        if (null === $this->collOperationScenariis || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationScenariis) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationScenariis());
            }
            $query = OperationScenariiQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperationPrimes($this)
                ->count($con);
        }

        return count($this->collOperationScenariis);
    }

    /**
     * Method called to associate a OperationScenarii object to this object
     * through the OperationScenarii foreign key attribute.
     *
     * @param    OperationScenarii $l OperationScenarii
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function addOperationScenarii(OperationScenarii $l)
    {
        if ($this->collOperationScenariis === null) {
            $this->initOperationScenariis();
            $this->collOperationScenariisPartial = true;
        }

        if (!in_array($l, $this->collOperationScenariis->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationScenarii($l);

            if ($this->operationScenariisScheduledForDeletion and $this->operationScenariisScheduledForDeletion->contains($l)) {
                $this->operationScenariisScheduledForDeletion->remove($this->operationScenariisScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationScenarii $operationScenarii The operationScenarii object to add.
     */
    protected function doAddOperationScenarii($operationScenarii)
    {
        $this->collOperationScenariis[]= $operationScenarii;
        $operationScenarii->setOperationPrimes($this);
    }

    /**
     * @param	OperationScenarii $operationScenarii The operationScenarii object to remove.
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function removeOperationScenarii($operationScenarii)
    {
        if ($this->getOperationScenariis()->contains($operationScenarii)) {
            $this->collOperationScenariis->remove($this->collOperationScenariis->search($operationScenarii));
            if (null === $this->operationScenariisScheduledForDeletion) {
                $this->operationScenariisScheduledForDeletion = clone $this->collOperationScenariis;
                $this->operationScenariisScheduledForDeletion->clear();
            }
            $this->operationScenariisScheduledForDeletion[]= $operationScenarii;
            $operationScenarii->setOperationPrimes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationPrimes is new, it will return
     * an empty collection; or if this OperationPrimes has previously
     * been saved, it will retrieve related OperationScenariis from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationPrimes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationScenarii[] List of OperationScenarii objects
     */
    public function getOperationScenariisJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationScenariiQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getOperationScenariis($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationPrimes is new, it will return
     * an empty collection; or if this OperationPrimes has previously
     * been saved, it will retrieve related OperationScenariis from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationPrimes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationScenarii[] List of OperationScenarii objects
     */
    public function getOperationScenariisJoinRScenarios($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationScenariiQuery::create(null, $criteria);
        $query->joinWith('RScenarios', $join_behavior);

        return $this->getOperationScenariis($query, $con);
    }

    /**
     * Clears out the collLnkOperationPrimeRCountriess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return OperationPrimes The current object (for fluent API support)
     * @see        addLnkOperationPrimeRCountriess()
     */
    public function clearLnkOperationPrimeRCountriess()
    {
        $this->collLnkOperationPrimeRCountriess = null; // important to set this to null since that means it is uninitialized
        $this->collLnkOperationPrimeRCountriessPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkOperationPrimeRCountriess collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkOperationPrimeRCountriess($v = true)
    {
        $this->collLnkOperationPrimeRCountriessPartial = $v;
    }

    /**
     * Initializes the collLnkOperationPrimeRCountriess collection.
     *
     * By default this just sets the collLnkOperationPrimeRCountriess collection to an empty array (like clearcollLnkOperationPrimeRCountriess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkOperationPrimeRCountriess($overrideExisting = true)
    {
        if (null !== $this->collLnkOperationPrimeRCountriess && !$overrideExisting) {
            return;
        }
        $this->collLnkOperationPrimeRCountriess = new PropelObjectCollection();
        $this->collLnkOperationPrimeRCountriess->setModel('LnkOperationPrimeRCountries');
    }

    /**
     * Gets an array of LnkOperationPrimeRCountries objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this OperationPrimes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkOperationPrimeRCountries[] List of LnkOperationPrimeRCountries objects
     * @throws PropelException
     */
    public function getLnkOperationPrimeRCountriess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationPrimeRCountriessPartial && !$this->isNew();
        if (null === $this->collLnkOperationPrimeRCountriess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationPrimeRCountriess) {
                // return empty collection
                $this->initLnkOperationPrimeRCountriess();
            } else {
                $collLnkOperationPrimeRCountriess = LnkOperationPrimeRCountriesQuery::create(null, $criteria)
                    ->filterByOperationPrimes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkOperationPrimeRCountriessPartial && count($collLnkOperationPrimeRCountriess)) {
                      $this->initLnkOperationPrimeRCountriess(false);

                      foreach ($collLnkOperationPrimeRCountriess as $obj) {
                        if (false == $this->collLnkOperationPrimeRCountriess->contains($obj)) {
                          $this->collLnkOperationPrimeRCountriess->append($obj);
                        }
                      }

                      $this->collLnkOperationPrimeRCountriessPartial = true;
                    }

                    $collLnkOperationPrimeRCountriess->getInternalIterator()->rewind();

                    return $collLnkOperationPrimeRCountriess;
                }

                if ($partial && $this->collLnkOperationPrimeRCountriess) {
                    foreach ($this->collLnkOperationPrimeRCountriess as $obj) {
                        if ($obj->isNew()) {
                            $collLnkOperationPrimeRCountriess[] = $obj;
                        }
                    }
                }

                $this->collLnkOperationPrimeRCountriess = $collLnkOperationPrimeRCountriess;
                $this->collLnkOperationPrimeRCountriessPartial = false;
            }
        }

        return $this->collLnkOperationPrimeRCountriess;
    }

    /**
     * Sets a collection of LnkOperationPrimeRCountries objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkOperationPrimeRCountriess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function setLnkOperationPrimeRCountriess(PropelCollection $lnkOperationPrimeRCountriess, PropelPDO $con = null)
    {
        $lnkOperationPrimeRCountriessToDelete = $this->getLnkOperationPrimeRCountriess(new Criteria(), $con)->diff($lnkOperationPrimeRCountriess);


        $this->lnkOperationPrimeRCountriessScheduledForDeletion = $lnkOperationPrimeRCountriessToDelete;

        foreach ($lnkOperationPrimeRCountriessToDelete as $lnkOperationPrimeRCountriesRemoved) {
            $lnkOperationPrimeRCountriesRemoved->setOperationPrimes(null);
        }

        $this->collLnkOperationPrimeRCountriess = null;
        foreach ($lnkOperationPrimeRCountriess as $lnkOperationPrimeRCountries) {
            $this->addLnkOperationPrimeRCountries($lnkOperationPrimeRCountries);
        }

        $this->collLnkOperationPrimeRCountriess = $lnkOperationPrimeRCountriess;
        $this->collLnkOperationPrimeRCountriessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkOperationPrimeRCountries objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkOperationPrimeRCountries objects.
     * @throws PropelException
     */
    public function countLnkOperationPrimeRCountriess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationPrimeRCountriessPartial && !$this->isNew();
        if (null === $this->collLnkOperationPrimeRCountriess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationPrimeRCountriess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkOperationPrimeRCountriess());
            }
            $query = LnkOperationPrimeRCountriesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOperationPrimes($this)
                ->count($con);
        }

        return count($this->collLnkOperationPrimeRCountriess);
    }

    /**
     * Method called to associate a LnkOperationPrimeRCountries object to this object
     * through the LnkOperationPrimeRCountries foreign key attribute.
     *
     * @param    LnkOperationPrimeRCountries $l LnkOperationPrimeRCountries
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function addLnkOperationPrimeRCountries(LnkOperationPrimeRCountries $l)
    {
        if ($this->collLnkOperationPrimeRCountriess === null) {
            $this->initLnkOperationPrimeRCountriess();
            $this->collLnkOperationPrimeRCountriessPartial = true;
        }

        if (!in_array($l, $this->collLnkOperationPrimeRCountriess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkOperationPrimeRCountries($l);

            if ($this->lnkOperationPrimeRCountriessScheduledForDeletion and $this->lnkOperationPrimeRCountriessScheduledForDeletion->contains($l)) {
                $this->lnkOperationPrimeRCountriessScheduledForDeletion->remove($this->lnkOperationPrimeRCountriessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkOperationPrimeRCountries $lnkOperationPrimeRCountries The lnkOperationPrimeRCountries object to add.
     */
    protected function doAddLnkOperationPrimeRCountries($lnkOperationPrimeRCountries)
    {
        $this->collLnkOperationPrimeRCountriess[]= $lnkOperationPrimeRCountries;
        $lnkOperationPrimeRCountries->setOperationPrimes($this);
    }

    /**
     * @param	LnkOperationPrimeRCountries $lnkOperationPrimeRCountries The lnkOperationPrimeRCountries object to remove.
     * @return OperationPrimes The current object (for fluent API support)
     */
    public function removeLnkOperationPrimeRCountries($lnkOperationPrimeRCountries)
    {
        if ($this->getLnkOperationPrimeRCountriess()->contains($lnkOperationPrimeRCountries)) {
            $this->collLnkOperationPrimeRCountriess->remove($this->collLnkOperationPrimeRCountriess->search($lnkOperationPrimeRCountries));
            if (null === $this->lnkOperationPrimeRCountriessScheduledForDeletion) {
                $this->lnkOperationPrimeRCountriessScheduledForDeletion = clone $this->collLnkOperationPrimeRCountriess;
                $this->lnkOperationPrimeRCountriessScheduledForDeletion->clear();
            }
            $this->lnkOperationPrimeRCountriessScheduledForDeletion[]= $lnkOperationPrimeRCountries;
            $lnkOperationPrimeRCountries->setOperationPrimes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this OperationPrimes is new, it will return
     * an empty collection; or if this OperationPrimes has previously
     * been saved, it will retrieve related LnkOperationPrimeRCountriess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in OperationPrimes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkOperationPrimeRCountries[] List of LnkOperationPrimeRCountries objects
     */
    public function getLnkOperationPrimeRCountriessJoinRCountries($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkOperationPrimeRCountriesQuery::create(null, $criteria);
        $query->joinWith('RCountries', $join_behavior);

        return $this->getLnkOperationPrimeRCountriess($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->op_prime_id = null;
        $this->op_id = null;
        $this->op_prime_libelle = null;
        $this->op_prime_numero = null;
        $this->gdl_art_id = null;
        $this->operation_prime_currency_id = null;
        $this->operation_prime_r_reward_type_id = null;
        $this->operation_prime_r_reward_expedition_mode_id = null;
        $this->operation_prime_r_reward_transporter_id = null;
        $this->operation_prime_fixed_amount = null;
        $this->operation_prime_product_price_pourcentage = null;
        $this->operation_prime_maximum_amount = null;
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
            if ($this->collOperationPrestationss) {
                foreach ($this->collOperationPrestationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationScenariis) {
                foreach ($this->collOperationScenariis as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkOperationPrimeRCountriess) {
                foreach ($this->collLnkOperationPrimeRCountriess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aOperations instanceof Persistent) {
              $this->aOperations->clearAllReferences($deep);
            }
            if ($this->aRCurrencies instanceof Persistent) {
              $this->aRCurrencies->clearAllReferences($deep);
            }
            if ($this->aRRewardTypes instanceof Persistent) {
              $this->aRRewardTypes->clearAllReferences($deep);
            }
            if ($this->aRRewardExpeditionModes instanceof Persistent) {
              $this->aRRewardExpeditionModes->clearAllReferences($deep);
            }
            if ($this->aRRewardTransporters instanceof Persistent) {
              $this->aRRewardTransporters->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOperationPrestationss instanceof PropelCollection) {
            $this->collOperationPrestationss->clearIterator();
        }
        $this->collOperationPrestationss = null;
        if ($this->collOperationScenariis instanceof PropelCollection) {
            $this->collOperationScenariis->clearIterator();
        }
        $this->collOperationScenariis = null;
        if ($this->collLnkOperationPrimeRCountriess instanceof PropelCollection) {
            $this->collLnkOperationPrimeRCountriess->clearIterator();
        }
        $this->collLnkOperationPrimeRCountriess = null;
        $this->aOperations = null;
        $this->aRCurrencies = null;
        $this->aRRewardTypes = null;
        $this->aRRewardExpeditionModes = null;
        $this->aRRewardTransporters = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OperationPrimesPeer::DEFAULT_STRING_FORMAT);
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
      0 => 'op_prime_libelle',
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
                            $this->addValidationFailed('Ce nom est déjà utilisé par un prime de la même opération.', $aColumns[0]);
                        } else {
                            $this->addValidationFailed('Ce nom est déjà utilisé par un prime de la même opération.', 'error');
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
                return BaseOperationPrimesPeer::getConnection();
            }
}
