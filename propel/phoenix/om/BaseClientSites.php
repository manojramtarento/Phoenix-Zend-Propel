<?php


/**
 * Base class that represents a row from the 'client_sites' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseClientSites extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ClientSitesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ClientSitesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the cl_site_id field.
     * @var        int
     */
    protected $cl_site_id;

    /**
     * The value for the cl_id field.
     * @var        int
     */
    protected $cl_id;

    /**
     * The value for the cl_site_libelle field.
     * @var        string
     */
    protected $cl_site_libelle;

    /**
     * The value for the cl_site_addr_1 field.
     * @var        string
     */
    protected $cl_site_addr_1;

    /**
     * The value for the cl_site_addr_2 field.
     * @var        string
     */
    protected $cl_site_addr_2;

    /**
     * The value for the cl_site_addr_3 field.
     * @var        string
     */
    protected $cl_site_addr_3;

    /**
     * The value for the cl_site_zipcode field.
     * @var        string
     */
    protected $cl_site_zipcode;

    /**
     * The value for the cl_site_town field.
     * @var        string
     */
    protected $cl_site_town;

    /**
     * The value for the cl_site_country_id field.
     * @var        int
     */
    protected $cl_site_country_id;

    /**
     * The value for the cl_site_is_for_log field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $cl_site_is_for_log;

    /**
     * The value for the gdl_fourn_id field.
     * @var        int
     */
    protected $gdl_fourn_id;

    /**
     * The value for the actif field.
     * @var        boolean
     */
    protected $actif;

    /**
     * @var        PropelObjectCollection|Contacts[] Collection to store aggregation of Contacts objects.
     */
    protected $collContactss;
    protected $collContactssPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationss;
    protected $collOperationssPartial;

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
    protected $contactssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationssScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->cl_site_is_for_log = false;
    }

    /**
     * Initializes internal state of BaseClientSites object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [cl_site_id] column value.
     *
     * @return int
     */
    public function getClSiteId()
    {

        return $this->cl_site_id;
    }

    /**
     * Get the [cl_id] column value.
     *
     * @return int
     */
    public function getClId()
    {

        return $this->cl_id;
    }

    /**
     * Get the [cl_site_libelle] column value.
     *
     * @return string
     */
    public function getClSiteLibelle()
    {

        return $this->cl_site_libelle;
    }

    /**
     * Get the [cl_site_addr_1] column value.
     *
     * @return string
     */
    public function getClSiteAddr1()
    {

        return $this->cl_site_addr_1;
    }

    /**
     * Get the [cl_site_addr_2] column value.
     *
     * @return string
     */
    public function getClSiteAddr2()
    {

        return $this->cl_site_addr_2;
    }

    /**
     * Get the [cl_site_addr_3] column value.
     *
     * @return string
     */
    public function getClSiteAddr3()
    {

        return $this->cl_site_addr_3;
    }

    /**
     * Get the [cl_site_zipcode] column value.
     *
     * @return string
     */
    public function getClSiteZipcode()
    {

        return $this->cl_site_zipcode;
    }

    /**
     * Get the [cl_site_town] column value.
     *
     * @return string
     */
    public function getClSiteTown()
    {

        return $this->cl_site_town;
    }

    /**
     * Get the [cl_site_country_id] column value.
     *
     * @return int
     */
    public function getClSiteCountryId()
    {

        return $this->cl_site_country_id;
    }

    /**
     * Get the [cl_site_is_for_log] column value.
     *
     * @return boolean
     */
    public function getClSiteIsForLog()
    {

        return $this->cl_site_is_for_log;
    }

    /**
     * Get the [gdl_fourn_id] column value.
     *
     * @return int
     */
    public function getGdlFournId()
    {

        return $this->gdl_fourn_id;
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
     * Set the value of [cl_site_id] column.
     *
     * @param  int $v new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setClSiteId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_site_id !== $v) {
                    $this->cl_site_id = $v;
                    $this->modifiedColumns[] = ClientSitesPeer::CL_SITE_ID;
                }


        return $this;
    } // setClSiteId()

    /**
     * Set the value of [cl_id] column.
     *
     * @param  int $v new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setClId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_id !== $v) {
                    $this->cl_id = $v;
                    $this->modifiedColumns[] = ClientSitesPeer::CL_ID;
                }


        return $this;
    } // setClId()

    /**
     * Set the value of [cl_site_libelle] column.
     *
     * @param  string $v new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setClSiteLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_site_libelle !== $v) {
            $this->cl_site_libelle = $v;
            $this->modifiedColumns[] = ClientSitesPeer::CL_SITE_LIBELLE;
        }


        return $this;
    } // setClSiteLibelle()

    /**
     * Set the value of [cl_site_addr_1] column.
     *
     * @param  string $v new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setClSiteAddr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_site_addr_1 !== $v) {
            $this->cl_site_addr_1 = $v;
            $this->modifiedColumns[] = ClientSitesPeer::CL_SITE_ADDR_1;
        }


        return $this;
    } // setClSiteAddr1()

    /**
     * Set the value of [cl_site_addr_2] column.
     *
     * @param  string $v new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setClSiteAddr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_site_addr_2 !== $v) {
            $this->cl_site_addr_2 = $v;
            $this->modifiedColumns[] = ClientSitesPeer::CL_SITE_ADDR_2;
        }


        return $this;
    } // setClSiteAddr2()

    /**
     * Set the value of [cl_site_addr_3] column.
     *
     * @param  string $v new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setClSiteAddr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_site_addr_3 !== $v) {
            $this->cl_site_addr_3 = $v;
            $this->modifiedColumns[] = ClientSitesPeer::CL_SITE_ADDR_3;
        }


        return $this;
    } // setClSiteAddr3()

    /**
     * Set the value of [cl_site_zipcode] column.
     *
     * @param  string $v new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setClSiteZipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_site_zipcode !== $v) {
            $this->cl_site_zipcode = $v;
            $this->modifiedColumns[] = ClientSitesPeer::CL_SITE_ZIPCODE;
        }


        return $this;
    } // setClSiteZipcode()

    /**
     * Set the value of [cl_site_town] column.
     *
     * @param  string $v new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setClSiteTown($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cl_site_town !== $v) {
            $this->cl_site_town = $v;
            $this->modifiedColumns[] = ClientSitesPeer::CL_SITE_TOWN;
        }


        return $this;
    } // setClSiteTown()

    /**
     * Set the value of [cl_site_country_id] column.
     *
     * @param  int $v new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setClSiteCountryId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_site_country_id !== $v) {
                    $this->cl_site_country_id = $v;
                    $this->modifiedColumns[] = ClientSitesPeer::CL_SITE_COUNTRY_ID;
                }


        return $this;
    } // setClSiteCountryId()

    /**
     * Sets the value of the [cl_site_is_for_log] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setClSiteIsForLog($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->cl_site_is_for_log !== $v) {
            $this->cl_site_is_for_log = $v;
            $this->modifiedColumns[] = ClientSitesPeer::CL_SITE_IS_FOR_LOG;
        }


        return $this;
    } // setClSiteIsForLog()

    /**
     * Set the value of [gdl_fourn_id] column.
     *
     * @param  int $v new value
     * @return ClientSites The current object (for fluent API support)
     */
    public function setGdlFournId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->gdl_fourn_id !== $v) {
                    $this->gdl_fourn_id = $v;
                    $this->modifiedColumns[] = ClientSitesPeer::GDL_FOURN_ID;
                }


        return $this;
    } // setGdlFournId()

    /**
     * Sets the value of the [actif] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ClientSites The current object (for fluent API support)
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
            $this->modifiedColumns[] = ClientSitesPeer::ACTIF;
        }


        return $this;
    } // setActif()

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
            if ($this->cl_site_is_for_log !== false) {
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

            $this->cl_site_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->cl_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->cl_site_libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cl_site_addr_1 = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cl_site_addr_2 = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cl_site_addr_3 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->cl_site_zipcode = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->cl_site_town = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cl_site_country_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->cl_site_is_for_log = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
            $this->gdl_fourn_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->actif = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = ClientSitesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ClientSites object", $e);
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
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ClientSitesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collContactss = null;

            $this->collOperationss = null;

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
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ClientSitesQuery::create()
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
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
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
                ClientSitesPeer::addInstanceToPool($this);
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

            if ($this->contactssScheduledForDeletion !== null) {
                if (!$this->contactssScheduledForDeletion->isEmpty()) {
                    foreach ($this->contactssScheduledForDeletion as $contacts) {
                        // need to save related object because we set the relation to null
                        $contacts->save($con);
                    }
                    $this->contactssScheduledForDeletion = null;
                }
            }

            if ($this->collContactss !== null) {
                foreach ($this->collContactss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = ClientSitesPeer::CL_SITE_ID;
        if (null !== $this->cl_site_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ClientSitesPeer::CL_SITE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_id`';
        }
        if ($this->isColumnModified(ClientSitesPeer::CL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_id`';
        }
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_libelle`';
        }
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_ADDR_1)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_addr_1`';
        }
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_ADDR_2)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_addr_2`';
        }
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_ADDR_3)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_addr_3`';
        }
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_ZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_zipcode`';
        }
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_TOWN)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_town`';
        }
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_COUNTRY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_country_id`';
        }
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_IS_FOR_LOG)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_is_for_log`';
        }
        if ($this->isColumnModified(ClientSitesPeer::GDL_FOURN_ID)) {
            $modifiedColumns[':p' . $index++]  = '`gdl_fourn_id`';
        }
        if ($this->isColumnModified(ClientSitesPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }

        $sql = sprintf(
            'INSERT INTO `client_sites` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`cl_site_id`':
                        $stmt->bindValue($identifier, $this->cl_site_id, PDO::PARAM_INT);
                        break;
                    case '`cl_id`':
                        $stmt->bindValue($identifier, $this->cl_id, PDO::PARAM_INT);
                        break;
                    case '`cl_site_libelle`':
                        $stmt->bindValue($identifier, $this->cl_site_libelle, PDO::PARAM_STR);
                        break;
                    case '`cl_site_addr_1`':
                        $stmt->bindValue($identifier, $this->cl_site_addr_1, PDO::PARAM_STR);
                        break;
                    case '`cl_site_addr_2`':
                        $stmt->bindValue($identifier, $this->cl_site_addr_2, PDO::PARAM_STR);
                        break;
                    case '`cl_site_addr_3`':
                        $stmt->bindValue($identifier, $this->cl_site_addr_3, PDO::PARAM_STR);
                        break;
                    case '`cl_site_zipcode`':
                        $stmt->bindValue($identifier, $this->cl_site_zipcode, PDO::PARAM_STR);
                        break;
                    case '`cl_site_town`':
                        $stmt->bindValue($identifier, $this->cl_site_town, PDO::PARAM_STR);
                        break;
                    case '`cl_site_country_id`':
                        $stmt->bindValue($identifier, $this->cl_site_country_id, PDO::PARAM_INT);
                        break;
                    case '`cl_site_is_for_log`':
                        $stmt->bindValue($identifier, (int) $this->cl_site_is_for_log, PDO::PARAM_INT);
                        break;
                    case '`gdl_fourn_id`':
                        $stmt->bindValue($identifier, $this->gdl_fourn_id, PDO::PARAM_INT);
                        break;
                    case '`actif`':
                        $stmt->bindValue($identifier, (int) $this->actif, PDO::PARAM_INT);
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
        $this->setClSiteId($pk);

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


            if (($retval = ClientSitesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collContactss !== null) {
                    foreach ($this->collContactss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationss !== null) {
                    foreach ($this->collOperationss as $referrerFK) {
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
        $pos = ClientSitesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getClSiteId();
                break;
            case 1:
                return $this->getClId();
                break;
            case 2:
                return $this->getClSiteLibelle();
                break;
            case 3:
                return $this->getClSiteAddr1();
                break;
            case 4:
                return $this->getClSiteAddr2();
                break;
            case 5:
                return $this->getClSiteAddr3();
                break;
            case 6:
                return $this->getClSiteZipcode();
                break;
            case 7:
                return $this->getClSiteTown();
                break;
            case 8:
                return $this->getClSiteCountryId();
                break;
            case 9:
                return $this->getClSiteIsForLog();
                break;
            case 10:
                return $this->getGdlFournId();
                break;
            case 11:
                return $this->getActif();
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
        if (isset($alreadyDumpedObjects['ClientSites'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ClientSites'][$this->getPrimaryKey()] = true;
        $keys = ClientSitesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getClSiteId(),
            $keys[1] => $this->getClId(),
            $keys[2] => $this->getClSiteLibelle(),
            $keys[3] => $this->getClSiteAddr1(),
            $keys[4] => $this->getClSiteAddr2(),
            $keys[5] => $this->getClSiteAddr3(),
            $keys[6] => $this->getClSiteZipcode(),
            $keys[7] => $this->getClSiteTown(),
            $keys[8] => $this->getClSiteCountryId(),
            $keys[9] => $this->getClSiteIsForLog(),
            $keys[10] => $this->getGdlFournId(),
            $keys[11] => $this->getActif(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collContactss) {
                $result['Contactss'] = $this->collContactss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationss) {
                $result['Operationss'] = $this->collOperationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ClientSitesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setClSiteId($value);
                break;
            case 1:
                $this->setClId($value);
                break;
            case 2:
                $this->setClSiteLibelle($value);
                break;
            case 3:
                $this->setClSiteAddr1($value);
                break;
            case 4:
                $this->setClSiteAddr2($value);
                break;
            case 5:
                $this->setClSiteAddr3($value);
                break;
            case 6:
                $this->setClSiteZipcode($value);
                break;
            case 7:
                $this->setClSiteTown($value);
                break;
            case 8:
                $this->setClSiteCountryId($value);
                break;
            case 9:
                $this->setClSiteIsForLog($value);
                break;
            case 10:
                $this->setGdlFournId($value);
                break;
            case 11:
                $this->setActif($value);
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
        $keys = ClientSitesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setClSiteId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setClId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setClSiteLibelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setClSiteAddr1($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setClSiteAddr2($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setClSiteAddr3($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setClSiteZipcode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setClSiteTown($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setClSiteCountryId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setClSiteIsForLog($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setGdlFournId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setActif($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ClientSitesPeer::DATABASE_NAME);

        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_ID)) $criteria->add(ClientSitesPeer::CL_SITE_ID, $this->cl_site_id);
        if ($this->isColumnModified(ClientSitesPeer::CL_ID)) $criteria->add(ClientSitesPeer::CL_ID, $this->cl_id);
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_LIBELLE)) $criteria->add(ClientSitesPeer::CL_SITE_LIBELLE, $this->cl_site_libelle);
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_ADDR_1)) $criteria->add(ClientSitesPeer::CL_SITE_ADDR_1, $this->cl_site_addr_1);
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_ADDR_2)) $criteria->add(ClientSitesPeer::CL_SITE_ADDR_2, $this->cl_site_addr_2);
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_ADDR_3)) $criteria->add(ClientSitesPeer::CL_SITE_ADDR_3, $this->cl_site_addr_3);
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_ZIPCODE)) $criteria->add(ClientSitesPeer::CL_SITE_ZIPCODE, $this->cl_site_zipcode);
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_TOWN)) $criteria->add(ClientSitesPeer::CL_SITE_TOWN, $this->cl_site_town);
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_COUNTRY_ID)) $criteria->add(ClientSitesPeer::CL_SITE_COUNTRY_ID, $this->cl_site_country_id);
        if ($this->isColumnModified(ClientSitesPeer::CL_SITE_IS_FOR_LOG)) $criteria->add(ClientSitesPeer::CL_SITE_IS_FOR_LOG, $this->cl_site_is_for_log);
        if ($this->isColumnModified(ClientSitesPeer::GDL_FOURN_ID)) $criteria->add(ClientSitesPeer::GDL_FOURN_ID, $this->gdl_fourn_id);
        if ($this->isColumnModified(ClientSitesPeer::ACTIF)) $criteria->add(ClientSitesPeer::ACTIF, $this->actif);

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
        $criteria = new Criteria(ClientSitesPeer::DATABASE_NAME);
        $criteria->add(ClientSitesPeer::CL_SITE_ID, $this->cl_site_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getClSiteId();
    }

    /**
     * Generic method to set the primary key (cl_site_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setClSiteId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getClSiteId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ClientSites (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setClId($this->getClId());
        $copyObj->setClSiteLibelle($this->getClSiteLibelle());
        $copyObj->setClSiteAddr1($this->getClSiteAddr1());
        $copyObj->setClSiteAddr2($this->getClSiteAddr2());
        $copyObj->setClSiteAddr3($this->getClSiteAddr3());
        $copyObj->setClSiteZipcode($this->getClSiteZipcode());
        $copyObj->setClSiteTown($this->getClSiteTown());
        $copyObj->setClSiteCountryId($this->getClSiteCountryId());
        $copyObj->setClSiteIsForLog($this->getClSiteIsForLog());
        $copyObj->setGdlFournId($this->getGdlFournId());
        $copyObj->setActif($this->getActif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getContactss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addContacts($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperations($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setClSiteId(NULL); // this is a auto-increment column, so set to default value
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
     * @return ClientSites Clone of current object.
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
     * @return ClientSitesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ClientSitesPeer();
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
        if ('Contacts' == $relationName) {
            $this->initContactss();
        }
        if ('Operations' == $relationName) {
            $this->initOperationss();
        }
    }

    /**
     * Clears out the collContactss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ClientSites The current object (for fluent API support)
     * @see        addContactss()
     */
    public function clearContactss()
    {
        $this->collContactss = null; // important to set this to null since that means it is uninitialized
        $this->collContactssPartial = null;

        return $this;
    }

    /**
     * reset is the collContactss collection loaded partially
     *
     * @return void
     */
    public function resetPartialContactss($v = true)
    {
        $this->collContactssPartial = $v;
    }

    /**
     * Initializes the collContactss collection.
     *
     * By default this just sets the collContactss collection to an empty array (like clearcollContactss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initContactss($overrideExisting = true)
    {
        if (null !== $this->collContactss && !$overrideExisting) {
            return;
        }
        $this->collContactss = new PropelObjectCollection();
        $this->collContactss->setModel('Contacts');
    }

    /**
     * Gets an array of Contacts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ClientSites is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Contacts[] List of Contacts objects
     * @throws PropelException
     */
    public function getContactss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collContactssPartial && !$this->isNew();
        if (null === $this->collContactss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collContactss) {
                // return empty collection
                $this->initContactss();
            } else {
                $collContactss = ContactsQuery::create(null, $criteria)
                    ->filterByClientSites($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collContactssPartial && count($collContactss)) {
                      $this->initContactss(false);

                      foreach ($collContactss as $obj) {
                        if (false == $this->collContactss->contains($obj)) {
                          $this->collContactss->append($obj);
                        }
                      }

                      $this->collContactssPartial = true;
                    }

                    $collContactss->getInternalIterator()->rewind();

                    return $collContactss;
                }

                if ($partial && $this->collContactss) {
                    foreach ($this->collContactss as $obj) {
                        if ($obj->isNew()) {
                            $collContactss[] = $obj;
                        }
                    }
                }

                $this->collContactss = $collContactss;
                $this->collContactssPartial = false;
            }
        }

        return $this->collContactss;
    }

    /**
     * Sets a collection of Contacts objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $contactss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ClientSites The current object (for fluent API support)
     */
    public function setContactss(PropelCollection $contactss, PropelPDO $con = null)
    {
        $contactssToDelete = $this->getContactss(new Criteria(), $con)->diff($contactss);


        $this->contactssScheduledForDeletion = $contactssToDelete;

        foreach ($contactssToDelete as $contactsRemoved) {
            $contactsRemoved->setClientSites(null);
        }

        $this->collContactss = null;
        foreach ($contactss as $contacts) {
            $this->addContacts($contacts);
        }

        $this->collContactss = $contactss;
        $this->collContactssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Contacts objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Contacts objects.
     * @throws PropelException
     */
    public function countContactss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collContactssPartial && !$this->isNew();
        if (null === $this->collContactss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collContactss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getContactss());
            }
            $query = ContactsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClientSites($this)
                ->count($con);
        }

        return count($this->collContactss);
    }

    /**
     * Method called to associate a Contacts object to this object
     * through the Contacts foreign key attribute.
     *
     * @param    Contacts $l Contacts
     * @return ClientSites The current object (for fluent API support)
     */
    public function addContacts(Contacts $l)
    {
        if ($this->collContactss === null) {
            $this->initContactss();
            $this->collContactssPartial = true;
        }

        if (!in_array($l, $this->collContactss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddContacts($l);

            if ($this->contactssScheduledForDeletion and $this->contactssScheduledForDeletion->contains($l)) {
                $this->contactssScheduledForDeletion->remove($this->contactssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Contacts $contacts The contacts object to add.
     */
    protected function doAddContacts($contacts)
    {
        $this->collContactss[]= $contacts;
        $contacts->setClientSites($this);
    }

    /**
     * @param	Contacts $contacts The contacts object to remove.
     * @return ClientSites The current object (for fluent API support)
     */
    public function removeContacts($contacts)
    {
        if ($this->getContactss()->contains($contacts)) {
            $this->collContactss->remove($this->collContactss->search($contacts));
            if (null === $this->contactssScheduledForDeletion) {
                $this->contactssScheduledForDeletion = clone $this->collContactss;
                $this->contactssScheduledForDeletion->clear();
            }
            $this->contactssScheduledForDeletion[]= $contacts;
            $contacts->setClientSites(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Contactss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Contacts[] List of Contacts objects
     */
    public function getContactssJoinClientsRelatedByClId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ContactsQuery::create(null, $criteria);
        $query->joinWith('ClientsRelatedByClId', $join_behavior);

        return $this->getContactss($query, $con);
    }

    /**
     * Clears out the collOperationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ClientSites The current object (for fluent API support)
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
     * If this ClientSites is new, it will return
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
                    ->filterByClientSiteForLog($this)
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
     * @return ClientSites The current object (for fluent API support)
     */
    public function setOperationss(PropelCollection $operationss, PropelPDO $con = null)
    {
        $operationssToDelete = $this->getOperationss(new Criteria(), $con)->diff($operationss);


        $this->operationssScheduledForDeletion = $operationssToDelete;

        foreach ($operationssToDelete as $operationsRemoved) {
            $operationsRemoved->setClientSiteForLog(null);
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
                ->filterByClientSiteForLog($this)
                ->count($con);
        }

        return count($this->collOperationss);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return ClientSites The current object (for fluent API support)
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
        $operations->setClientSiteForLog($this);
    }

    /**
     * @param	Operations $operations The operations object to remove.
     * @return ClientSites The current object (for fluent API support)
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
            $operations->setClientSiteForLog(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssJoinOperationTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationTemplate', $join_behavior);

        return $this->getOperationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ClientSites is new, it will return
     * an empty collection; or if this ClientSites has previously
     * been saved, it will retrieve related Operationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ClientSites.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->cl_site_id = null;
        $this->cl_id = null;
        $this->cl_site_libelle = null;
        $this->cl_site_addr_1 = null;
        $this->cl_site_addr_2 = null;
        $this->cl_site_addr_3 = null;
        $this->cl_site_zipcode = null;
        $this->cl_site_town = null;
        $this->cl_site_country_id = null;
        $this->cl_site_is_for_log = null;
        $this->gdl_fourn_id = null;
        $this->actif = null;
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
            if ($this->collContactss) {
                foreach ($this->collContactss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationss) {
                foreach ($this->collOperationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collContactss instanceof PropelCollection) {
            $this->collContactss->clearIterator();
        }
        $this->collContactss = null;
        if ($this->collOperationss instanceof PropelCollection) {
            $this->collOperationss->clearIterator();
        }
        $this->collOperationss = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ClientSitesPeer::DEFAULT_STRING_FORMAT);
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
                return BaseClientSitesPeer::getConnection();
            }
}
