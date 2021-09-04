<?php


/**
 * Base class that represents a row from the 'r_countries' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRCountries extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RCountriesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RCountriesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_country_id field.
     * @var        int
     */
    protected $r_country_id;

    /**
     * The value for the r_country_code field.
     * @var        string
     */
    protected $r_country_code;

    /**
     * The value for the r_country_name field.
     * @var        string
     */
    protected $r_country_name;

    /**
     * The value for the r_country_zone_code_bin field.
     * @var        int
     */
    protected $r_country_zone_code_bin;

    /**
     * The value for the r_country_r_currency_id field.
     * @var        int
     */
    protected $r_country_r_currency_id;

    /**
     * The value for the r_country_r_country_calling_code_id field.
     * @var        int
     */
    protected $r_country_r_country_calling_code_id;

    /**
     * The value for the r_country_actif field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $r_country_actif;

    /**
     * @var        RCurrencies
     */
    protected $aRCurrencies;

    /**
     * @var        RCountriesCallingCodes
     */
    protected $aRCountriesCallingCodes;

    /**
     * @var        PropelObjectCollection|ClientFactureOptions[] Collection to store aggregation of ClientFactureOptions objects.
     */
    protected $collClientFactureOptionss;
    protected $collClientFactureOptionssPartial;

    /**
     * @var        PropelObjectCollection|LnkOperationCountry[] Collection to store aggregation of LnkOperationCountry objects.
     */
    protected $collLnkOperationCountrys;
    protected $collLnkOperationCountrysPartial;

    /**
     * @var        PropelObjectCollection|LnkRCountryRCultures[] Collection to store aggregation of LnkRCountryRCultures objects.
     */
    protected $collLnkRCountryRCulturess;
    protected $collLnkRCountryRCulturessPartial;

    /**
     * @var        PropelObjectCollection|LnkOperationPrimeRCountries[] Collection to store aggregation of LnkOperationPrimeRCountries objects.
     */
    protected $collLnkOperationPrimeRCountriess;
    protected $collLnkOperationPrimeRCountriessPartial;

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
    protected $clientFactureOptionssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkOperationCountrysScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkRCountryRCulturessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkOperationPrimeRCountriessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rOperationTypeSubTplCountriessScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->r_country_actif = 1;
    }

    /**
     * Initializes internal state of BaseRCountries object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [r_country_id] column value.
     *
     * @return int
     */
    public function getRCountryId()
    {

        return $this->r_country_id;
    }

    /**
     * Get the [r_country_code] column value.
     *
     * @return string
     */
    public function getRCountryCode()
    {

        return $this->r_country_code;
    }

    /**
     * Get the [r_country_name] column value.
     *
     * @return string
     */
    public function getRCountryName()
    {

        return $this->r_country_name;
    }

    /**
     * Get the [r_country_zone_code_bin] column value.
     *
     * @return int
     */
    public function getRCountryZoneCodeBin()
    {

        return $this->r_country_zone_code_bin;
    }

    /**
     * Get the [r_country_r_currency_id] column value.
     *
     * @return int
     */
    public function getRCountryRCurrencyId()
    {

        return $this->r_country_r_currency_id;
    }

    /**
     * Get the [r_country_r_country_calling_code_id] column value.
     *
     * @return int
     */
    public function getRCountryRCountryCallingCodeId()
    {

        return $this->r_country_r_country_calling_code_id;
    }

    /**
     * Get the [r_country_actif] column value.
     *
     * @return int
     */
    public function getRCountryActif()
    {

        return $this->r_country_actif;
    }

    /**
     * Set the value of [r_country_id] column.
     *
     * @param  int $v new value
     * @return RCountries The current object (for fluent API support)
     */
    public function setRCountryId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_country_id !== $v) {
                    $this->r_country_id = $v;
                    $this->modifiedColumns[] = RCountriesPeer::R_COUNTRY_ID;
                }


        return $this;
    } // setRCountryId()

    /**
     * Set the value of [r_country_code] column.
     *
     * @param  string $v new value
     * @return RCountries The current object (for fluent API support)
     */
    public function setRCountryCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_country_code !== $v) {
            $this->r_country_code = $v;
            $this->modifiedColumns[] = RCountriesPeer::R_COUNTRY_CODE;
        }


        return $this;
    } // setRCountryCode()

    /**
     * Set the value of [r_country_name] column.
     *
     * @param  string $v new value
     * @return RCountries The current object (for fluent API support)
     */
    public function setRCountryName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_country_name !== $v) {
            $this->r_country_name = $v;
            $this->modifiedColumns[] = RCountriesPeer::R_COUNTRY_NAME;
        }


        return $this;
    } // setRCountryName()

    /**
     * Set the value of [r_country_zone_code_bin] column.
     *
     * @param  int $v new value
     * @return RCountries The current object (for fluent API support)
     */
    public function setRCountryZoneCodeBin($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_country_zone_code_bin !== $v) {
                    $this->r_country_zone_code_bin = $v;
                    $this->modifiedColumns[] = RCountriesPeer::R_COUNTRY_ZONE_CODE_BIN;
                }


        return $this;
    } // setRCountryZoneCodeBin()

    /**
     * Set the value of [r_country_r_currency_id] column.
     *
     * @param  int $v new value
     * @return RCountries The current object (for fluent API support)
     */
    public function setRCountryRCurrencyId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_country_r_currency_id !== $v) {
                    $this->r_country_r_currency_id = $v;
                    $this->modifiedColumns[] = RCountriesPeer::R_COUNTRY_R_CURRENCY_ID;
                }

        if ($this->aRCurrencies !== null && $this->aRCurrencies->getRCurrencyId() !== $v) {
            $this->aRCurrencies = null;
        }


        return $this;
    } // setRCountryRCurrencyId()

    /**
     * Set the value of [r_country_r_country_calling_code_id] column.
     *
     * @param  int $v new value
     * @return RCountries The current object (for fluent API support)
     */
    public function setRCountryRCountryCallingCodeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_country_r_country_calling_code_id !== $v) {
                    $this->r_country_r_country_calling_code_id = $v;
                    $this->modifiedColumns[] = RCountriesPeer::R_COUNTRY_R_COUNTRY_CALLING_CODE_ID;
                }

        if ($this->aRCountriesCallingCodes !== null && $this->aRCountriesCallingCodes->getRCountryCallingCodeId() !== $v) {
            $this->aRCountriesCallingCodes = null;
        }


        return $this;
    } // setRCountryRCountryCallingCodeId()

    /**
     * Set the value of [r_country_actif] column.
     *
     * @param  int $v new value
     * @return RCountries The current object (for fluent API support)
     */
    public function setRCountryActif($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_country_actif !== $v) {
                    $this->r_country_actif = $v;
                    $this->modifiedColumns[] = RCountriesPeer::R_COUNTRY_ACTIF;
                }


        return $this;
    } // setRCountryActif()

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
            if ($this->r_country_actif !== 1) {
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

            $this->r_country_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_country_code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_country_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->r_country_zone_code_bin = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->r_country_r_currency_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->r_country_r_country_calling_code_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->r_country_actif = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = RCountriesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RCountries object", $e);
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

        if ($this->aRCurrencies !== null && $this->r_country_r_currency_id !== $this->aRCurrencies->getRCurrencyId()) {
            $this->aRCurrencies = null;
        }
        if ($this->aRCountriesCallingCodes !== null && $this->r_country_r_country_calling_code_id !== $this->aRCountriesCallingCodes->getRCountryCallingCodeId()) {
            $this->aRCountriesCallingCodes = null;
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
            $con = Propel::getConnection(RCountriesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RCountriesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRCurrencies = null;
            $this->aRCountriesCallingCodes = null;
            $this->collClientFactureOptionss = null;

            $this->collLnkOperationCountrys = null;

            $this->collLnkRCountryRCulturess = null;

            $this->collLnkOperationPrimeRCountriess = null;

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
            $con = Propel::getConnection(RCountriesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RCountriesQuery::create()
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
            $con = Propel::getConnection(RCountriesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RCountriesPeer::addInstanceToPool($this);
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

            if ($this->aRCurrencies !== null) {
                if ($this->aRCurrencies->isModified() || $this->aRCurrencies->isNew()) {
                    $affectedRows += $this->aRCurrencies->save($con);
                }
                $this->setRCurrencies($this->aRCurrencies);
            }

            if ($this->aRCountriesCallingCodes !== null) {
                if ($this->aRCountriesCallingCodes->isModified() || $this->aRCountriesCallingCodes->isNew()) {
                    $affectedRows += $this->aRCountriesCallingCodes->save($con);
                }
                $this->setRCountriesCallingCodes($this->aRCountriesCallingCodes);
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

            if ($this->clientFactureOptionssScheduledForDeletion !== null) {
                if (!$this->clientFactureOptionssScheduledForDeletion->isEmpty()) {
                    foreach ($this->clientFactureOptionssScheduledForDeletion as $clientFactureOptions) {
                        // need to save related object because we set the relation to null
                        $clientFactureOptions->save($con);
                    }
                    $this->clientFactureOptionssScheduledForDeletion = null;
                }
            }

            if ($this->collClientFactureOptionss !== null) {
                foreach ($this->collClientFactureOptionss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkOperationCountrysScheduledForDeletion !== null) {
                if (!$this->lnkOperationCountrysScheduledForDeletion->isEmpty()) {
                    LnkOperationCountryQuery::create()
                        ->filterByPrimaryKeys($this->lnkOperationCountrysScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkOperationCountrysScheduledForDeletion = null;
                }
            }

            if ($this->collLnkOperationCountrys !== null) {
                foreach ($this->collLnkOperationCountrys as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkRCountryRCulturessScheduledForDeletion !== null) {
                if (!$this->lnkRCountryRCulturessScheduledForDeletion->isEmpty()) {
                    foreach ($this->lnkRCountryRCulturessScheduledForDeletion as $lnkRCountryRCultures) {
                        // need to save related object because we set the relation to null
                        $lnkRCountryRCultures->save($con);
                    }
                    $this->lnkRCountryRCulturessScheduledForDeletion = null;
                }
            }

            if ($this->collLnkRCountryRCulturess !== null) {
                foreach ($this->collLnkRCountryRCulturess as $referrerFK) {
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

        $this->modifiedColumns[] = RCountriesPeer::R_COUNTRY_ID;
        if (null !== $this->r_country_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RCountriesPeer::R_COUNTRY_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_country_id`';
        }
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`r_country_code`';
        }
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`r_country_name`';
        }
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_ZONE_CODE_BIN)) {
            $modifiedColumns[':p' . $index++]  = '`r_country_zone_code_bin`';
        }
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_R_CURRENCY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_country_r_currency_id`';
        }
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_R_COUNTRY_CALLING_CODE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_country_r_country_calling_code_id`';
        }
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`r_country_actif`';
        }

        $sql = sprintf(
            'INSERT INTO `r_countries` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_country_id`':
                        $stmt->bindValue($identifier, $this->r_country_id, PDO::PARAM_INT);
                        break;
                    case '`r_country_code`':
                        $stmt->bindValue($identifier, $this->r_country_code, PDO::PARAM_STR);
                        break;
                    case '`r_country_name`':
                        $stmt->bindValue($identifier, $this->r_country_name, PDO::PARAM_STR);
                        break;
                    case '`r_country_zone_code_bin`':
                        $stmt->bindValue($identifier, $this->r_country_zone_code_bin, PDO::PARAM_INT);
                        break;
                    case '`r_country_r_currency_id`':
                        $stmt->bindValue($identifier, $this->r_country_r_currency_id, PDO::PARAM_INT);
                        break;
                    case '`r_country_r_country_calling_code_id`':
                        $stmt->bindValue($identifier, $this->r_country_r_country_calling_code_id, PDO::PARAM_INT);
                        break;
                    case '`r_country_actif`':
                        $stmt->bindValue($identifier, $this->r_country_actif, PDO::PARAM_INT);
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
        $this->setRCountryId($pk);

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

            if ($this->aRCurrencies !== null) {
                if (!$this->aRCurrencies->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRCurrencies->getValidationFailures());
                }
            }

            if ($this->aRCountriesCallingCodes !== null) {
                if (!$this->aRCountriesCallingCodes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRCountriesCallingCodes->getValidationFailures());
                }
            }


            if (($retval = RCountriesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collClientFactureOptionss !== null) {
                    foreach ($this->collClientFactureOptionss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkOperationCountrys !== null) {
                    foreach ($this->collLnkOperationCountrys as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkRCountryRCulturess !== null) {
                    foreach ($this->collLnkRCountryRCulturess as $referrerFK) {
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
        $pos = RCountriesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRCountryId();
                break;
            case 1:
                return $this->getRCountryCode();
                break;
            case 2:
                return $this->getRCountryName();
                break;
            case 3:
                return $this->getRCountryZoneCodeBin();
                break;
            case 4:
                return $this->getRCountryRCurrencyId();
                break;
            case 5:
                return $this->getRCountryRCountryCallingCodeId();
                break;
            case 6:
                return $this->getRCountryActif();
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
        if (isset($alreadyDumpedObjects['RCountries'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RCountries'][$this->getPrimaryKey()] = true;
        $keys = RCountriesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRCountryId(),
            $keys[1] => $this->getRCountryCode(),
            $keys[2] => $this->getRCountryName(),
            $keys[3] => $this->getRCountryZoneCodeBin(),
            $keys[4] => $this->getRCountryRCurrencyId(),
            $keys[5] => $this->getRCountryRCountryCallingCodeId(),
            $keys[6] => $this->getRCountryActif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRCurrencies) {
                $result['RCurrencies'] = $this->aRCurrencies->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRCountriesCallingCodes) {
                $result['RCountriesCallingCodes'] = $this->aRCountriesCallingCodes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collClientFactureOptionss) {
                $result['ClientFactureOptionss'] = $this->collClientFactureOptionss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkOperationCountrys) {
                $result['LnkOperationCountrys'] = $this->collLnkOperationCountrys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkRCountryRCulturess) {
                $result['LnkRCountryRCulturess'] = $this->collLnkRCountryRCulturess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkOperationPrimeRCountriess) {
                $result['LnkOperationPrimeRCountriess'] = $this->collLnkOperationPrimeRCountriess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RCountriesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRCountryId($value);
                break;
            case 1:
                $this->setRCountryCode($value);
                break;
            case 2:
                $this->setRCountryName($value);
                break;
            case 3:
                $this->setRCountryZoneCodeBin($value);
                break;
            case 4:
                $this->setRCountryRCurrencyId($value);
                break;
            case 5:
                $this->setRCountryRCountryCallingCodeId($value);
                break;
            case 6:
                $this->setRCountryActif($value);
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
        $keys = RCountriesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRCountryId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRCountryCode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRCountryName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRCountryZoneCodeBin($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRCountryRCurrencyId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRCountryRCountryCallingCodeId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRCountryActif($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RCountriesPeer::DATABASE_NAME);

        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_ID)) $criteria->add(RCountriesPeer::R_COUNTRY_ID, $this->r_country_id);
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_CODE)) $criteria->add(RCountriesPeer::R_COUNTRY_CODE, $this->r_country_code);
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_NAME)) $criteria->add(RCountriesPeer::R_COUNTRY_NAME, $this->r_country_name);
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_ZONE_CODE_BIN)) $criteria->add(RCountriesPeer::R_COUNTRY_ZONE_CODE_BIN, $this->r_country_zone_code_bin);
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_R_CURRENCY_ID)) $criteria->add(RCountriesPeer::R_COUNTRY_R_CURRENCY_ID, $this->r_country_r_currency_id);
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_R_COUNTRY_CALLING_CODE_ID)) $criteria->add(RCountriesPeer::R_COUNTRY_R_COUNTRY_CALLING_CODE_ID, $this->r_country_r_country_calling_code_id);
        if ($this->isColumnModified(RCountriesPeer::R_COUNTRY_ACTIF)) $criteria->add(RCountriesPeer::R_COUNTRY_ACTIF, $this->r_country_actif);

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
        $criteria = new Criteria(RCountriesPeer::DATABASE_NAME);
        $criteria->add(RCountriesPeer::R_COUNTRY_ID, $this->r_country_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRCountryId();
    }

    /**
     * Generic method to set the primary key (r_country_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRCountryId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRCountryId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RCountries (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRCountryCode($this->getRCountryCode());
        $copyObj->setRCountryName($this->getRCountryName());
        $copyObj->setRCountryZoneCodeBin($this->getRCountryZoneCodeBin());
        $copyObj->setRCountryRCurrencyId($this->getRCountryRCurrencyId());
        $copyObj->setRCountryRCountryCallingCodeId($this->getRCountryRCountryCallingCodeId());
        $copyObj->setRCountryActif($this->getRCountryActif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getClientFactureOptionss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClientFactureOptions($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkOperationCountrys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkOperationCountry($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkRCountryRCulturess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkRCountryRCultures($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkOperationPrimeRCountriess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkOperationPrimeRCountries($relObj->copy($deepCopy));
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
            $copyObj->setRCountryId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RCountries Clone of current object.
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
     * @return RCountriesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RCountriesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a RCurrencies object.
     *
     * @param                  RCurrencies $v
     * @return RCountries The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRCurrencies(RCurrencies $v = null)
    {
        if ($v === null) {
            $this->setRCountryRCurrencyId(NULL);
        } else {
            $this->setRCountryRCurrencyId($v->getRCurrencyId());
        }

        $this->aRCurrencies = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RCurrencies object, it will not be re-added.
        if ($v !== null) {
            $v->addRCountries($this);
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
        if ($this->aRCurrencies === null && ($this->r_country_r_currency_id !== null) && $doQuery) {
            $this->aRCurrencies = RCurrenciesQuery::create()->findPk($this->r_country_r_currency_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRCurrencies->addRCountriess($this);
             */
        }

        return $this->aRCurrencies;
    }

    /**
     * Declares an association between this object and a RCountriesCallingCodes object.
     *
     * @param                  RCountriesCallingCodes $v
     * @return RCountries The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRCountriesCallingCodes(RCountriesCallingCodes $v = null)
    {
        if ($v === null) {
            $this->setRCountryRCountryCallingCodeId(NULL);
        } else {
            $this->setRCountryRCountryCallingCodeId($v->getRCountryCallingCodeId());
        }

        $this->aRCountriesCallingCodes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RCountriesCallingCodes object, it will not be re-added.
        if ($v !== null) {
            $v->addRCountries($this);
        }


        return $this;
    }


    /**
     * Get the associated RCountriesCallingCodes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RCountriesCallingCodes The associated RCountriesCallingCodes object.
     * @throws PropelException
     */
    public function getRCountriesCallingCodes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRCountriesCallingCodes === null && ($this->r_country_r_country_calling_code_id !== null) && $doQuery) {
            $this->aRCountriesCallingCodes = RCountriesCallingCodesQuery::create()->findPk($this->r_country_r_country_calling_code_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRCountriesCallingCodes->addRCountriess($this);
             */
        }

        return $this->aRCountriesCallingCodes;
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
        if ('ClientFactureOptions' == $relationName) {
            $this->initClientFactureOptionss();
        }
        if ('LnkOperationCountry' == $relationName) {
            $this->initLnkOperationCountrys();
        }
        if ('LnkRCountryRCultures' == $relationName) {
            $this->initLnkRCountryRCulturess();
        }
        if ('LnkOperationPrimeRCountries' == $relationName) {
            $this->initLnkOperationPrimeRCountriess();
        }
        if ('ROperationTypeSubTplCountries' == $relationName) {
            $this->initROperationTypeSubTplCountriess();
        }
    }

    /**
     * Clears out the collClientFactureOptionss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RCountries The current object (for fluent API support)
     * @see        addClientFactureOptionss()
     */
    public function clearClientFactureOptionss()
    {
        $this->collClientFactureOptionss = null; // important to set this to null since that means it is uninitialized
        $this->collClientFactureOptionssPartial = null;

        return $this;
    }

    /**
     * reset is the collClientFactureOptionss collection loaded partially
     *
     * @return void
     */
    public function resetPartialClientFactureOptionss($v = true)
    {
        $this->collClientFactureOptionssPartial = $v;
    }

    /**
     * Initializes the collClientFactureOptionss collection.
     *
     * By default this just sets the collClientFactureOptionss collection to an empty array (like clearcollClientFactureOptionss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClientFactureOptionss($overrideExisting = true)
    {
        if (null !== $this->collClientFactureOptionss && !$overrideExisting) {
            return;
        }
        $this->collClientFactureOptionss = new PropelObjectCollection();
        $this->collClientFactureOptionss->setModel('ClientFactureOptions');
    }

    /**
     * Gets an array of ClientFactureOptions objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RCountries is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ClientFactureOptions[] List of ClientFactureOptions objects
     * @throws PropelException
     */
    public function getClientFactureOptionss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClientFactureOptionssPartial && !$this->isNew();
        if (null === $this->collClientFactureOptionss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClientFactureOptionss) {
                // return empty collection
                $this->initClientFactureOptionss();
            } else {
                $collClientFactureOptionss = ClientFactureOptionsQuery::create(null, $criteria)
                    ->filterByCountryInvoiced($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClientFactureOptionssPartial && count($collClientFactureOptionss)) {
                      $this->initClientFactureOptionss(false);

                      foreach ($collClientFactureOptionss as $obj) {
                        if (false == $this->collClientFactureOptionss->contains($obj)) {
                          $this->collClientFactureOptionss->append($obj);
                        }
                      }

                      $this->collClientFactureOptionssPartial = true;
                    }

                    $collClientFactureOptionss->getInternalIterator()->rewind();

                    return $collClientFactureOptionss;
                }

                if ($partial && $this->collClientFactureOptionss) {
                    foreach ($this->collClientFactureOptionss as $obj) {
                        if ($obj->isNew()) {
                            $collClientFactureOptionss[] = $obj;
                        }
                    }
                }

                $this->collClientFactureOptionss = $collClientFactureOptionss;
                $this->collClientFactureOptionssPartial = false;
            }
        }

        return $this->collClientFactureOptionss;
    }

    /**
     * Sets a collection of ClientFactureOptions objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clientFactureOptionss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RCountries The current object (for fluent API support)
     */
    public function setClientFactureOptionss(PropelCollection $clientFactureOptionss, PropelPDO $con = null)
    {
        $clientFactureOptionssToDelete = $this->getClientFactureOptionss(new Criteria(), $con)->diff($clientFactureOptionss);


        $this->clientFactureOptionssScheduledForDeletion = $clientFactureOptionssToDelete;

        foreach ($clientFactureOptionssToDelete as $clientFactureOptionsRemoved) {
            $clientFactureOptionsRemoved->setCountryInvoiced(null);
        }

        $this->collClientFactureOptionss = null;
        foreach ($clientFactureOptionss as $clientFactureOptions) {
            $this->addClientFactureOptions($clientFactureOptions);
        }

        $this->collClientFactureOptionss = $clientFactureOptionss;
        $this->collClientFactureOptionssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ClientFactureOptions objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ClientFactureOptions objects.
     * @throws PropelException
     */
    public function countClientFactureOptionss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClientFactureOptionssPartial && !$this->isNew();
        if (null === $this->collClientFactureOptionss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClientFactureOptionss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClientFactureOptionss());
            }
            $query = ClientFactureOptionsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCountryInvoiced($this)
                ->count($con);
        }

        return count($this->collClientFactureOptionss);
    }

    /**
     * Method called to associate a ClientFactureOptions object to this object
     * through the ClientFactureOptions foreign key attribute.
     *
     * @param    ClientFactureOptions $l ClientFactureOptions
     * @return RCountries The current object (for fluent API support)
     */
    public function addClientFactureOptions(ClientFactureOptions $l)
    {
        if ($this->collClientFactureOptionss === null) {
            $this->initClientFactureOptionss();
            $this->collClientFactureOptionssPartial = true;
        }

        if (!in_array($l, $this->collClientFactureOptionss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClientFactureOptions($l);

            if ($this->clientFactureOptionssScheduledForDeletion and $this->clientFactureOptionssScheduledForDeletion->contains($l)) {
                $this->clientFactureOptionssScheduledForDeletion->remove($this->clientFactureOptionssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ClientFactureOptions $clientFactureOptions The clientFactureOptions object to add.
     */
    protected function doAddClientFactureOptions($clientFactureOptions)
    {
        $this->collClientFactureOptionss[]= $clientFactureOptions;
        $clientFactureOptions->setCountryInvoiced($this);
    }

    /**
     * @param	ClientFactureOptions $clientFactureOptions The clientFactureOptions object to remove.
     * @return RCountries The current object (for fluent API support)
     */
    public function removeClientFactureOptions($clientFactureOptions)
    {
        if ($this->getClientFactureOptionss()->contains($clientFactureOptions)) {
            $this->collClientFactureOptionss->remove($this->collClientFactureOptionss->search($clientFactureOptions));
            if (null === $this->clientFactureOptionssScheduledForDeletion) {
                $this->clientFactureOptionssScheduledForDeletion = clone $this->collClientFactureOptionss;
                $this->clientFactureOptionssScheduledForDeletion->clear();
            }
            $this->clientFactureOptionssScheduledForDeletion[]= $clientFactureOptions;
            $clientFactureOptions->setCountryInvoiced(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RCountries is new, it will return
     * an empty collection; or if this RCountries has previously
     * been saved, it will retrieve related ClientFactureOptionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RCountries.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ClientFactureOptions[] List of ClientFactureOptions objects
     */
    public function getClientFactureOptionssJoinRFactureOptionsEcheances($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClientFactureOptionsQuery::create(null, $criteria);
        $query->joinWith('RFactureOptionsEcheances', $join_behavior);

        return $this->getClientFactureOptionss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RCountries is new, it will return
     * an empty collection; or if this RCountries has previously
     * been saved, it will retrieve related ClientFactureOptionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RCountries.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ClientFactureOptions[] List of ClientFactureOptions objects
     */
    public function getClientFactureOptionssJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClientFactureOptionsQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getClientFactureOptionss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RCountries is new, it will return
     * an empty collection; or if this RCountries has previously
     * been saved, it will retrieve related ClientFactureOptionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RCountries.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ClientFactureOptions[] List of ClientFactureOptions objects
     */
    public function getClientFactureOptionssJoinRLanguages($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClientFactureOptionsQuery::create(null, $criteria);
        $query->joinWith('RLanguages', $join_behavior);

        return $this->getClientFactureOptionss($query, $con);
    }

    /**
     * Clears out the collLnkOperationCountrys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RCountries The current object (for fluent API support)
     * @see        addLnkOperationCountrys()
     */
    public function clearLnkOperationCountrys()
    {
        $this->collLnkOperationCountrys = null; // important to set this to null since that means it is uninitialized
        $this->collLnkOperationCountrysPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkOperationCountrys collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkOperationCountrys($v = true)
    {
        $this->collLnkOperationCountrysPartial = $v;
    }

    /**
     * Initializes the collLnkOperationCountrys collection.
     *
     * By default this just sets the collLnkOperationCountrys collection to an empty array (like clearcollLnkOperationCountrys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkOperationCountrys($overrideExisting = true)
    {
        if (null !== $this->collLnkOperationCountrys && !$overrideExisting) {
            return;
        }
        $this->collLnkOperationCountrys = new PropelObjectCollection();
        $this->collLnkOperationCountrys->setModel('LnkOperationCountry');
    }

    /**
     * Gets an array of LnkOperationCountry objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RCountries is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkOperationCountry[] List of LnkOperationCountry objects
     * @throws PropelException
     */
    public function getLnkOperationCountrys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationCountrysPartial && !$this->isNew();
        if (null === $this->collLnkOperationCountrys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationCountrys) {
                // return empty collection
                $this->initLnkOperationCountrys();
            } else {
                $collLnkOperationCountrys = LnkOperationCountryQuery::create(null, $criteria)
                    ->filterByRCountries($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkOperationCountrysPartial && count($collLnkOperationCountrys)) {
                      $this->initLnkOperationCountrys(false);

                      foreach ($collLnkOperationCountrys as $obj) {
                        if (false == $this->collLnkOperationCountrys->contains($obj)) {
                          $this->collLnkOperationCountrys->append($obj);
                        }
                      }

                      $this->collLnkOperationCountrysPartial = true;
                    }

                    $collLnkOperationCountrys->getInternalIterator()->rewind();

                    return $collLnkOperationCountrys;
                }

                if ($partial && $this->collLnkOperationCountrys) {
                    foreach ($this->collLnkOperationCountrys as $obj) {
                        if ($obj->isNew()) {
                            $collLnkOperationCountrys[] = $obj;
                        }
                    }
                }

                $this->collLnkOperationCountrys = $collLnkOperationCountrys;
                $this->collLnkOperationCountrysPartial = false;
            }
        }

        return $this->collLnkOperationCountrys;
    }

    /**
     * Sets a collection of LnkOperationCountry objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkOperationCountrys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RCountries The current object (for fluent API support)
     */
    public function setLnkOperationCountrys(PropelCollection $lnkOperationCountrys, PropelPDO $con = null)
    {
        $lnkOperationCountrysToDelete = $this->getLnkOperationCountrys(new Criteria(), $con)->diff($lnkOperationCountrys);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->lnkOperationCountrysScheduledForDeletion = clone $lnkOperationCountrysToDelete;

        foreach ($lnkOperationCountrysToDelete as $lnkOperationCountryRemoved) {
            $lnkOperationCountryRemoved->setRCountries(null);
        }

        $this->collLnkOperationCountrys = null;
        foreach ($lnkOperationCountrys as $lnkOperationCountry) {
            $this->addLnkOperationCountry($lnkOperationCountry);
        }

        $this->collLnkOperationCountrys = $lnkOperationCountrys;
        $this->collLnkOperationCountrysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkOperationCountry objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkOperationCountry objects.
     * @throws PropelException
     */
    public function countLnkOperationCountrys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationCountrysPartial && !$this->isNew();
        if (null === $this->collLnkOperationCountrys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationCountrys) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkOperationCountrys());
            }
            $query = LnkOperationCountryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRCountries($this)
                ->count($con);
        }

        return count($this->collLnkOperationCountrys);
    }

    /**
     * Method called to associate a LnkOperationCountry object to this object
     * through the LnkOperationCountry foreign key attribute.
     *
     * @param    LnkOperationCountry $l LnkOperationCountry
     * @return RCountries The current object (for fluent API support)
     */
    public function addLnkOperationCountry(LnkOperationCountry $l)
    {
        if ($this->collLnkOperationCountrys === null) {
            $this->initLnkOperationCountrys();
            $this->collLnkOperationCountrysPartial = true;
        }

        if (!in_array($l, $this->collLnkOperationCountrys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkOperationCountry($l);

            if ($this->lnkOperationCountrysScheduledForDeletion and $this->lnkOperationCountrysScheduledForDeletion->contains($l)) {
                $this->lnkOperationCountrysScheduledForDeletion->remove($this->lnkOperationCountrysScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkOperationCountry $lnkOperationCountry The lnkOperationCountry object to add.
     */
    protected function doAddLnkOperationCountry($lnkOperationCountry)
    {
        $this->collLnkOperationCountrys[]= $lnkOperationCountry;
        $lnkOperationCountry->setRCountries($this);
    }

    /**
     * @param	LnkOperationCountry $lnkOperationCountry The lnkOperationCountry object to remove.
     * @return RCountries The current object (for fluent API support)
     */
    public function removeLnkOperationCountry($lnkOperationCountry)
    {
        if ($this->getLnkOperationCountrys()->contains($lnkOperationCountry)) {
            $this->collLnkOperationCountrys->remove($this->collLnkOperationCountrys->search($lnkOperationCountry));
            if (null === $this->lnkOperationCountrysScheduledForDeletion) {
                $this->lnkOperationCountrysScheduledForDeletion = clone $this->collLnkOperationCountrys;
                $this->lnkOperationCountrysScheduledForDeletion->clear();
            }
            $this->lnkOperationCountrysScheduledForDeletion[]= clone $lnkOperationCountry;
            $lnkOperationCountry->setRCountries(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RCountries is new, it will return
     * an empty collection; or if this RCountries has previously
     * been saved, it will retrieve related LnkOperationCountrys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RCountries.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkOperationCountry[] List of LnkOperationCountry objects
     */
    public function getLnkOperationCountrysJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkOperationCountryQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getLnkOperationCountrys($query, $con);
    }

    /**
     * Clears out the collLnkRCountryRCulturess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RCountries The current object (for fluent API support)
     * @see        addLnkRCountryRCulturess()
     */
    public function clearLnkRCountryRCulturess()
    {
        $this->collLnkRCountryRCulturess = null; // important to set this to null since that means it is uninitialized
        $this->collLnkRCountryRCulturessPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkRCountryRCulturess collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkRCountryRCulturess($v = true)
    {
        $this->collLnkRCountryRCulturessPartial = $v;
    }

    /**
     * Initializes the collLnkRCountryRCulturess collection.
     *
     * By default this just sets the collLnkRCountryRCulturess collection to an empty array (like clearcollLnkRCountryRCulturess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkRCountryRCulturess($overrideExisting = true)
    {
        if (null !== $this->collLnkRCountryRCulturess && !$overrideExisting) {
            return;
        }
        $this->collLnkRCountryRCulturess = new PropelObjectCollection();
        $this->collLnkRCountryRCulturess->setModel('LnkRCountryRCultures');
    }

    /**
     * Gets an array of LnkRCountryRCultures objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RCountries is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkRCountryRCultures[] List of LnkRCountryRCultures objects
     * @throws PropelException
     */
    public function getLnkRCountryRCulturess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkRCountryRCulturessPartial && !$this->isNew();
        if (null === $this->collLnkRCountryRCulturess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkRCountryRCulturess) {
                // return empty collection
                $this->initLnkRCountryRCulturess();
            } else {
                $collLnkRCountryRCulturess = LnkRCountryRCulturesQuery::create(null, $criteria)
                    ->filterByRCountries($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkRCountryRCulturessPartial && count($collLnkRCountryRCulturess)) {
                      $this->initLnkRCountryRCulturess(false);

                      foreach ($collLnkRCountryRCulturess as $obj) {
                        if (false == $this->collLnkRCountryRCulturess->contains($obj)) {
                          $this->collLnkRCountryRCulturess->append($obj);
                        }
                      }

                      $this->collLnkRCountryRCulturessPartial = true;
                    }

                    $collLnkRCountryRCulturess->getInternalIterator()->rewind();

                    return $collLnkRCountryRCulturess;
                }

                if ($partial && $this->collLnkRCountryRCulturess) {
                    foreach ($this->collLnkRCountryRCulturess as $obj) {
                        if ($obj->isNew()) {
                            $collLnkRCountryRCulturess[] = $obj;
                        }
                    }
                }

                $this->collLnkRCountryRCulturess = $collLnkRCountryRCulturess;
                $this->collLnkRCountryRCulturessPartial = false;
            }
        }

        return $this->collLnkRCountryRCulturess;
    }

    /**
     * Sets a collection of LnkRCountryRCultures objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkRCountryRCulturess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RCountries The current object (for fluent API support)
     */
    public function setLnkRCountryRCulturess(PropelCollection $lnkRCountryRCulturess, PropelPDO $con = null)
    {
        $lnkRCountryRCulturessToDelete = $this->getLnkRCountryRCulturess(new Criteria(), $con)->diff($lnkRCountryRCulturess);


        $this->lnkRCountryRCulturessScheduledForDeletion = $lnkRCountryRCulturessToDelete;

        foreach ($lnkRCountryRCulturessToDelete as $lnkRCountryRCulturesRemoved) {
            $lnkRCountryRCulturesRemoved->setRCountries(null);
        }

        $this->collLnkRCountryRCulturess = null;
        foreach ($lnkRCountryRCulturess as $lnkRCountryRCultures) {
            $this->addLnkRCountryRCultures($lnkRCountryRCultures);
        }

        $this->collLnkRCountryRCulturess = $lnkRCountryRCulturess;
        $this->collLnkRCountryRCulturessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkRCountryRCultures objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkRCountryRCultures objects.
     * @throws PropelException
     */
    public function countLnkRCountryRCulturess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkRCountryRCulturessPartial && !$this->isNew();
        if (null === $this->collLnkRCountryRCulturess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkRCountryRCulturess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkRCountryRCulturess());
            }
            $query = LnkRCountryRCulturesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRCountries($this)
                ->count($con);
        }

        return count($this->collLnkRCountryRCulturess);
    }

    /**
     * Method called to associate a LnkRCountryRCultures object to this object
     * through the LnkRCountryRCultures foreign key attribute.
     *
     * @param    LnkRCountryRCultures $l LnkRCountryRCultures
     * @return RCountries The current object (for fluent API support)
     */
    public function addLnkRCountryRCultures(LnkRCountryRCultures $l)
    {
        if ($this->collLnkRCountryRCulturess === null) {
            $this->initLnkRCountryRCulturess();
            $this->collLnkRCountryRCulturessPartial = true;
        }

        if (!in_array($l, $this->collLnkRCountryRCulturess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkRCountryRCultures($l);

            if ($this->lnkRCountryRCulturessScheduledForDeletion and $this->lnkRCountryRCulturessScheduledForDeletion->contains($l)) {
                $this->lnkRCountryRCulturessScheduledForDeletion->remove($this->lnkRCountryRCulturessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkRCountryRCultures $lnkRCountryRCultures The lnkRCountryRCultures object to add.
     */
    protected function doAddLnkRCountryRCultures($lnkRCountryRCultures)
    {
        $this->collLnkRCountryRCulturess[]= $lnkRCountryRCultures;
        $lnkRCountryRCultures->setRCountries($this);
    }

    /**
     * @param	LnkRCountryRCultures $lnkRCountryRCultures The lnkRCountryRCultures object to remove.
     * @return RCountries The current object (for fluent API support)
     */
    public function removeLnkRCountryRCultures($lnkRCountryRCultures)
    {
        if ($this->getLnkRCountryRCulturess()->contains($lnkRCountryRCultures)) {
            $this->collLnkRCountryRCulturess->remove($this->collLnkRCountryRCulturess->search($lnkRCountryRCultures));
            if (null === $this->lnkRCountryRCulturessScheduledForDeletion) {
                $this->lnkRCountryRCulturessScheduledForDeletion = clone $this->collLnkRCountryRCulturess;
                $this->lnkRCountryRCulturessScheduledForDeletion->clear();
            }
            $this->lnkRCountryRCulturessScheduledForDeletion[]= $lnkRCountryRCultures;
            $lnkRCountryRCultures->setRCountries(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RCountries is new, it will return
     * an empty collection; or if this RCountries has previously
     * been saved, it will retrieve related LnkRCountryRCulturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RCountries.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkRCountryRCultures[] List of LnkRCountryRCultures objects
     */
    public function getLnkRCountryRCulturessJoinRCultures($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkRCountryRCulturesQuery::create(null, $criteria);
        $query->joinWith('RCultures', $join_behavior);

        return $this->getLnkRCountryRCulturess($query, $con);
    }

    /**
     * Clears out the collLnkOperationPrimeRCountriess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RCountries The current object (for fluent API support)
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
     * If this RCountries is new, it will return
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
                    ->filterByRCountries($this)
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
     * @return RCountries The current object (for fluent API support)
     */
    public function setLnkOperationPrimeRCountriess(PropelCollection $lnkOperationPrimeRCountriess, PropelPDO $con = null)
    {
        $lnkOperationPrimeRCountriessToDelete = $this->getLnkOperationPrimeRCountriess(new Criteria(), $con)->diff($lnkOperationPrimeRCountriess);


        $this->lnkOperationPrimeRCountriessScheduledForDeletion = $lnkOperationPrimeRCountriessToDelete;

        foreach ($lnkOperationPrimeRCountriessToDelete as $lnkOperationPrimeRCountriesRemoved) {
            $lnkOperationPrimeRCountriesRemoved->setRCountries(null);
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
                ->filterByRCountries($this)
                ->count($con);
        }

        return count($this->collLnkOperationPrimeRCountriess);
    }

    /**
     * Method called to associate a LnkOperationPrimeRCountries object to this object
     * through the LnkOperationPrimeRCountries foreign key attribute.
     *
     * @param    LnkOperationPrimeRCountries $l LnkOperationPrimeRCountries
     * @return RCountries The current object (for fluent API support)
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
        $lnkOperationPrimeRCountries->setRCountries($this);
    }

    /**
     * @param	LnkOperationPrimeRCountries $lnkOperationPrimeRCountries The lnkOperationPrimeRCountries object to remove.
     * @return RCountries The current object (for fluent API support)
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
            $lnkOperationPrimeRCountries->setRCountries(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RCountries is new, it will return
     * an empty collection; or if this RCountries has previously
     * been saved, it will retrieve related LnkOperationPrimeRCountriess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RCountries.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkOperationPrimeRCountries[] List of LnkOperationPrimeRCountries objects
     */
    public function getLnkOperationPrimeRCountriessJoinOperationPrimes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkOperationPrimeRCountriesQuery::create(null, $criteria);
        $query->joinWith('OperationPrimes', $join_behavior);

        return $this->getLnkOperationPrimeRCountriess($query, $con);
    }

    /**
     * Clears out the collROperationTypeSubTplCountriess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RCountries The current object (for fluent API support)
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
     * If this RCountries is new, it will return
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
                    ->filterByTemplateCountry($this)
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
     * @return RCountries The current object (for fluent API support)
     */
    public function setROperationTypeSubTplCountriess(PropelCollection $rOperationTypeSubTplCountriess, PropelPDO $con = null)
    {
        $rOperationTypeSubTplCountriessToDelete = $this->getROperationTypeSubTplCountriess(new Criteria(), $con)->diff($rOperationTypeSubTplCountriess);


        $this->rOperationTypeSubTplCountriessScheduledForDeletion = $rOperationTypeSubTplCountriessToDelete;

        foreach ($rOperationTypeSubTplCountriessToDelete as $rOperationTypeSubTplCountriesRemoved) {
            $rOperationTypeSubTplCountriesRemoved->setTemplateCountry(null);
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
                ->filterByTemplateCountry($this)
                ->count($con);
        }

        return count($this->collROperationTypeSubTplCountriess);
    }

    /**
     * Method called to associate a ROperationTypeSubTplCountries object to this object
     * through the ROperationTypeSubTplCountries foreign key attribute.
     *
     * @param    ROperationTypeSubTplCountries $l ROperationTypeSubTplCountries
     * @return RCountries The current object (for fluent API support)
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
        $rOperationTypeSubTplCountries->setTemplateCountry($this);
    }

    /**
     * @param	ROperationTypeSubTplCountries $rOperationTypeSubTplCountries The rOperationTypeSubTplCountries object to remove.
     * @return RCountries The current object (for fluent API support)
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
            $rOperationTypeSubTplCountries->setTemplateCountry(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RCountries is new, it will return
     * an empty collection; or if this RCountries has previously
     * been saved, it will retrieve related ROperationTypeSubTplCountriess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RCountries.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ROperationTypeSubTplCountries[] List of ROperationTypeSubTplCountries objects
     */
    public function getROperationTypeSubTplCountriessJoinTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ROperationTypeSubTplCountriesQuery::create(null, $criteria);
        $query->joinWith('Template', $join_behavior);

        return $this->getROperationTypeSubTplCountriess($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_country_id = null;
        $this->r_country_code = null;
        $this->r_country_name = null;
        $this->r_country_zone_code_bin = null;
        $this->r_country_r_currency_id = null;
        $this->r_country_r_country_calling_code_id = null;
        $this->r_country_actif = null;
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
            if ($this->collClientFactureOptionss) {
                foreach ($this->collClientFactureOptionss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkOperationCountrys) {
                foreach ($this->collLnkOperationCountrys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkRCountryRCulturess) {
                foreach ($this->collLnkRCountryRCulturess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkOperationPrimeRCountriess) {
                foreach ($this->collLnkOperationPrimeRCountriess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collROperationTypeSubTplCountriess) {
                foreach ($this->collROperationTypeSubTplCountriess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aRCurrencies instanceof Persistent) {
              $this->aRCurrencies->clearAllReferences($deep);
            }
            if ($this->aRCountriesCallingCodes instanceof Persistent) {
              $this->aRCountriesCallingCodes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collClientFactureOptionss instanceof PropelCollection) {
            $this->collClientFactureOptionss->clearIterator();
        }
        $this->collClientFactureOptionss = null;
        if ($this->collLnkOperationCountrys instanceof PropelCollection) {
            $this->collLnkOperationCountrys->clearIterator();
        }
        $this->collLnkOperationCountrys = null;
        if ($this->collLnkRCountryRCulturess instanceof PropelCollection) {
            $this->collLnkRCountryRCulturess->clearIterator();
        }
        $this->collLnkRCountryRCulturess = null;
        if ($this->collLnkOperationPrimeRCountriess instanceof PropelCollection) {
            $this->collLnkOperationPrimeRCountriess->clearIterator();
        }
        $this->collLnkOperationPrimeRCountriess = null;
        if ($this->collROperationTypeSubTplCountriess instanceof PropelCollection) {
            $this->collROperationTypeSubTplCountriess->clearIterator();
        }
        $this->collROperationTypeSubTplCountriess = null;
        $this->aRCurrencies = null;
        $this->aRCountriesCallingCodes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RCountriesPeer::DEFAULT_STRING_FORMAT);
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
      0 => 'r_country_code',
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
                            $this->addValidationFailed('Ce code pays existe déjà.', $aColumns[0]);
                        } else {
                            $this->addValidationFailed('Ce code pays existe déjà.', 'error');
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
                return BaseRCountriesPeer::getConnection();
            }
}
