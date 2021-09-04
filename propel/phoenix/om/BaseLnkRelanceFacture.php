<?php


/**
 * Base class that represents a row from the 'lnk_relance_facture' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkRelanceFacture extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LnkRelanceFacturePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LnkRelanceFacturePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the lnk_rel_fact_id field.
     * @var        int
     */
    protected $lnk_rel_fact_id;

    /**
     * The value for the rel_id field.
     * @var        int
     */
    protected $rel_id;

    /**
     * The value for the fact_id field.
     * @var        int
     */
    protected $fact_id;

    /**
     * The value for the montant_a_regler field.
     * @var        float
     */
    protected $montant_a_regler;

    /**
     * The value for the actif field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $actif;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * The value for the date_modify field.
     * @var        string
     */
    protected $date_modify;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * @var        Relances
     */
    protected $aRelances;

    /**
     * @var        Factures
     */
    protected $aFactures;

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
        $this->actif = true;
    }

    /**
     * Initializes internal state of BaseLnkRelanceFacture object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [lnk_rel_fact_id] column value.
     *
     * @return int
     */
    public function getLnkRelFactId()
    {

        return $this->lnk_rel_fact_id;
    }

    /**
     * Get the [rel_id] column value.
     *
     * @return int
     */
    public function getRelId()
    {

        return $this->rel_id;
    }

    /**
     * Get the [fact_id] column value.
     *
     * @return int
     */
    public function getFactId()
    {

        return $this->fact_id;
    }

    /**
     * Get the [montant_a_regler] column value.
     *
     * @return float
     */
    public function getMontantARegler()
    {

        return $this->montant_a_regler;
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
     * Get the [optionally formatted] temporal [date_modify] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateModify($format = 'Y-m-d H:i:s')
    {
        if ($this->date_modify === null) {
            return null;
        }

        if ($this->date_modify === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_modify);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modify, true), $x);
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
     * Set the value of [lnk_rel_fact_id] column.
     *
     * @param  int $v new value
     * @return LnkRelanceFacture The current object (for fluent API support)
     */
    public function setLnkRelFactId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->lnk_rel_fact_id !== $v) {
                    $this->lnk_rel_fact_id = $v;
                    $this->modifiedColumns[] = LnkRelanceFacturePeer::LNK_REL_FACT_ID;
                }


        return $this;
    } // setLnkRelFactId()

    /**
     * Set the value of [rel_id] column.
     *
     * @param  int $v new value
     * @return LnkRelanceFacture The current object (for fluent API support)
     */
    public function setRelId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->rel_id !== $v) {
                    $this->rel_id = $v;
                    $this->modifiedColumns[] = LnkRelanceFacturePeer::REL_ID;
                }

        if ($this->aRelances !== null && $this->aRelances->getRelId() !== $v) {
            $this->aRelances = null;
        }


        return $this;
    } // setRelId()

    /**
     * Set the value of [fact_id] column.
     *
     * @param  int $v new value
     * @return LnkRelanceFacture The current object (for fluent API support)
     */
    public function setFactId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_id !== $v) {
                    $this->fact_id = $v;
                    $this->modifiedColumns[] = LnkRelanceFacturePeer::FACT_ID;
                }

        if ($this->aFactures !== null && $this->aFactures->getFactId() !== $v) {
            $this->aFactures = null;
        }


        return $this;
    } // setFactId()

    /**
     * Set the value of [montant_a_regler] column.
     *
     * @param  float $v new value
     * @return LnkRelanceFacture The current object (for fluent API support)
     */
    public function setMontantARegler($v)
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
                if ($this->montant_a_regler !== $v) {
                    $this->montant_a_regler = $v;
                    $this->modifiedColumns[] = LnkRelanceFacturePeer::MONTANT_A_REGLER;
                }


        return $this;
    } // setMontantARegler()

    /**
     * Sets the value of the [actif] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return LnkRelanceFacture The current object (for fluent API support)
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
            $this->modifiedColumns[] = LnkRelanceFacturePeer::ACTIF;
        }


        return $this;
    } // setActif()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return LnkRelanceFacture The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = LnkRelanceFacturePeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return LnkRelanceFacture The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = LnkRelanceFacturePeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return LnkRelanceFacture The current object (for fluent API support)
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
                    $this->modifiedColumns[] = LnkRelanceFacturePeer::USER_ID;
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
            if ($this->actif !== true) {
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

            $this->lnk_rel_fact_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->rel_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fact_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->montant_a_regler = ($row[$startcol + 3] !== null) ? (float) $row[$startcol + 3] : null;
            $this->actif = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->date_create = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->date_modify = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->user_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = LnkRelanceFacturePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating LnkRelanceFacture object", $e);
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

        if ($this->aRelances !== null && $this->rel_id !== $this->aRelances->getRelId()) {
            $this->aRelances = null;
        }
        if ($this->aFactures !== null && $this->fact_id !== $this->aFactures->getFactId()) {
            $this->aFactures = null;
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
            $con = Propel::getConnection(LnkRelanceFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LnkRelanceFacturePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRelances = null;
            $this->aFactures = null;
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
            $con = Propel::getConnection(LnkRelanceFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LnkRelanceFactureQuery::create()
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
            $con = Propel::getConnection(LnkRelanceFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                
                                $this->setUserId(Zend_Auth::getInstance()->getStorage()->read()->getUserId());

            } else {
                $ret = $ret && $this->preUpdate($con);
                // log behavior
                
                                $this->setDateModify(time());

            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                LnkRelanceFacturePeer::addInstanceToPool($this);
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

            if ($this->aRelances !== null) {
                if ($this->aRelances->isModified() || $this->aRelances->isNew()) {
                    $affectedRows += $this->aRelances->save($con);
                }
                $this->setRelances($this->aRelances);
            }

            if ($this->aFactures !== null) {
                if ($this->aFactures->isModified() || $this->aFactures->isNew()) {
                    $affectedRows += $this->aFactures->save($con);
                }
                $this->setFactures($this->aFactures);
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

        $this->modifiedColumns[] = LnkRelanceFacturePeer::LNK_REL_FACT_ID;
        if (null !== $this->lnk_rel_fact_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . LnkRelanceFacturePeer::LNK_REL_FACT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(LnkRelanceFacturePeer::LNK_REL_FACT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`lnk_rel_fact_id`';
        }
        if ($this->isColumnModified(LnkRelanceFacturePeer::REL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`rel_id`';
        }
        if ($this->isColumnModified(LnkRelanceFacturePeer::FACT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fact_id`';
        }
        if ($this->isColumnModified(LnkRelanceFacturePeer::MONTANT_A_REGLER)) {
            $modifiedColumns[':p' . $index++]  = '`montant_a_regler`';
        }
        if ($this->isColumnModified(LnkRelanceFacturePeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }
        if ($this->isColumnModified(LnkRelanceFacturePeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(LnkRelanceFacturePeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }
        if ($this->isColumnModified(LnkRelanceFacturePeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }

        $sql = sprintf(
            'INSERT INTO `lnk_relance_facture` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`lnk_rel_fact_id`':
                        $stmt->bindValue($identifier, $this->lnk_rel_fact_id, PDO::PARAM_INT);
                        break;
                    case '`rel_id`':
                        $stmt->bindValue($identifier, $this->rel_id, PDO::PARAM_INT);
                        break;
                    case '`fact_id`':
                        $stmt->bindValue($identifier, $this->fact_id, PDO::PARAM_INT);
                        break;
                    case '`montant_a_regler`':
                        $stmt->bindValue($identifier, $this->montant_a_regler, PDO::PARAM_STR);
                        break;
                    case '`actif`':
                        $stmt->bindValue($identifier, (int) $this->actif, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`date_modify`':
                        $stmt->bindValue($identifier, $this->date_modify, PDO::PARAM_STR);
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
        $this->setLnkRelFactId($pk);

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

            if ($this->aRelances !== null) {
                if (!$this->aRelances->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRelances->getValidationFailures());
                }
            }

            if ($this->aFactures !== null) {
                if (!$this->aFactures->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aFactures->getValidationFailures());
                }
            }


            if (($retval = LnkRelanceFacturePeer::doValidate($this, $columns)) !== true) {
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
        $pos = LnkRelanceFacturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLnkRelFactId();
                break;
            case 1:
                return $this->getRelId();
                break;
            case 2:
                return $this->getFactId();
                break;
            case 3:
                return $this->getMontantARegler();
                break;
            case 4:
                return $this->getActif();
                break;
            case 5:
                return $this->getDateCreate();
                break;
            case 6:
                return $this->getDateModify();
                break;
            case 7:
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
        if (isset($alreadyDumpedObjects['LnkRelanceFacture'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['LnkRelanceFacture'][$this->getPrimaryKey()] = true;
        $keys = LnkRelanceFacturePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLnkRelFactId(),
            $keys[1] => $this->getRelId(),
            $keys[2] => $this->getFactId(),
            $keys[3] => $this->getMontantARegler(),
            $keys[4] => $this->getActif(),
            $keys[5] => $this->getDateCreate(),
            $keys[6] => $this->getDateModify(),
            $keys[7] => $this->getUserId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRelances) {
                $result['Relances'] = $this->aRelances->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aFactures) {
                $result['Factures'] = $this->aFactures->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = LnkRelanceFacturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLnkRelFactId($value);
                break;
            case 1:
                $this->setRelId($value);
                break;
            case 2:
                $this->setFactId($value);
                break;
            case 3:
                $this->setMontantARegler($value);
                break;
            case 4:
                $this->setActif($value);
                break;
            case 5:
                $this->setDateCreate($value);
                break;
            case 6:
                $this->setDateModify($value);
                break;
            case 7:
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
        $keys = LnkRelanceFacturePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLnkRelFactId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRelId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFactId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMontantARegler($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setActif($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateCreate($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateModify($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setUserId($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LnkRelanceFacturePeer::DATABASE_NAME);

        if ($this->isColumnModified(LnkRelanceFacturePeer::LNK_REL_FACT_ID)) $criteria->add(LnkRelanceFacturePeer::LNK_REL_FACT_ID, $this->lnk_rel_fact_id);
        if ($this->isColumnModified(LnkRelanceFacturePeer::REL_ID)) $criteria->add(LnkRelanceFacturePeer::REL_ID, $this->rel_id);
        if ($this->isColumnModified(LnkRelanceFacturePeer::FACT_ID)) $criteria->add(LnkRelanceFacturePeer::FACT_ID, $this->fact_id);
        if ($this->isColumnModified(LnkRelanceFacturePeer::MONTANT_A_REGLER)) $criteria->add(LnkRelanceFacturePeer::MONTANT_A_REGLER, $this->montant_a_regler);
        if ($this->isColumnModified(LnkRelanceFacturePeer::ACTIF)) $criteria->add(LnkRelanceFacturePeer::ACTIF, $this->actif);
        if ($this->isColumnModified(LnkRelanceFacturePeer::DATE_CREATE)) $criteria->add(LnkRelanceFacturePeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(LnkRelanceFacturePeer::DATE_MODIFY)) $criteria->add(LnkRelanceFacturePeer::DATE_MODIFY, $this->date_modify);
        if ($this->isColumnModified(LnkRelanceFacturePeer::USER_ID)) $criteria->add(LnkRelanceFacturePeer::USER_ID, $this->user_id);

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
        $criteria = new Criteria(LnkRelanceFacturePeer::DATABASE_NAME);
        $criteria->add(LnkRelanceFacturePeer::LNK_REL_FACT_ID, $this->lnk_rel_fact_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getLnkRelFactId();
    }

    /**
     * Generic method to set the primary key (lnk_rel_fact_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setLnkRelFactId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getLnkRelFactId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of LnkRelanceFacture (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRelId($this->getRelId());
        $copyObj->setFactId($this->getFactId());
        $copyObj->setMontantARegler($this->getMontantARegler());
        $copyObj->setActif($this->getActif());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setDateModify($this->getDateModify());
        $copyObj->setUserId($this->getUserId());

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
            $copyObj->setLnkRelFactId(NULL); // this is a auto-increment column, so set to default value
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
     * @return LnkRelanceFacture Clone of current object.
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
     * @return LnkRelanceFacturePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LnkRelanceFacturePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Relances object.
     *
     * @param                  Relances $v
     * @return LnkRelanceFacture The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRelances(Relances $v = null)
    {
        if ($v === null) {
            $this->setRelId(NULL);
        } else {
            $this->setRelId($v->getRelId());
        }

        $this->aRelances = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Relances object, it will not be re-added.
        if ($v !== null) {
            $v->addLnkRelanceFacture($this);
        }


        return $this;
    }


    /**
     * Get the associated Relances object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Relances The associated Relances object.
     * @throws PropelException
     */
    public function getRelances(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRelances === null && ($this->rel_id !== null) && $doQuery) {
            $this->aRelances = RelancesQuery::create()->findPk($this->rel_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRelances->addLnkRelanceFactures($this);
             */
        }

        return $this->aRelances;
    }

    /**
     * Declares an association between this object and a Factures object.
     *
     * @param                  Factures $v
     * @return LnkRelanceFacture The current object (for fluent API support)
     * @throws PropelException
     */
    public function setFactures(Factures $v = null)
    {
        if ($v === null) {
            $this->setFactId(NULL);
        } else {
            $this->setFactId($v->getFactId());
        }

        $this->aFactures = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Factures object, it will not be re-added.
        if ($v !== null) {
            $v->addLnkRelanceFacture($this);
        }


        return $this;
    }


    /**
     * Get the associated Factures object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Factures The associated Factures object.
     * @throws PropelException
     */
    public function getFactures(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aFactures === null && ($this->fact_id !== null) && $doQuery) {
            $this->aFactures = FacturesQuery::create()->findPk($this->fact_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aFactures->addLnkRelanceFactures($this);
             */
        }

        return $this->aFactures;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->lnk_rel_fact_id = null;
        $this->rel_id = null;
        $this->fact_id = null;
        $this->montant_a_regler = null;
        $this->actif = null;
        $this->date_create = null;
        $this->date_modify = null;
        $this->user_id = null;
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
            if ($this->aRelances instanceof Persistent) {
              $this->aRelances->clearAllReferences($deep);
            }
            if ($this->aFactures instanceof Persistent) {
              $this->aFactures->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aRelances = null;
        $this->aFactures = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(LnkRelanceFacturePeer::DEFAULT_STRING_FORMAT);
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
                return BaseLnkRelanceFacturePeer::getConnection();
            }
}
