<?php


/**
 * Base class that represents a row from the 'operation_prestations_factures_achats' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationPrestationsFacturesAchats extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OperationPrestationsFacturesAchatsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OperationPrestationsFacturesAchatsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the op_prest_achat_id field.
     * @var        int
     */
    protected $op_prest_achat_id;

    /**
     * The value for the op_prest_id field.
     * @var        int
     */
    protected $op_prest_id;

    /**
     * The value for the op_prest_achat_num_facture field.
     * @var        string
     */
    protected $op_prest_achat_num_facture;

    /**
     * The value for the op_prest_achat_date_facture field.
     * @var        string
     */
    protected $op_prest_achat_date_facture;

    /**
     * The value for the op_prest_achat_quantite field.
     * @var        int
     */
    protected $op_prest_achat_quantite;

    /**
     * The value for the op_prest_achat_cout_interne field.
     * @var        float
     */
    protected $op_prest_achat_cout_interne;

    /**
     * The value for the op_prest_achat_cout_externe field.
     * @var        float
     */
    protected $op_prest_achat_cout_externe;

    /**
     * The value for the op_prest_achat_file_id field.
     * @var        int
     */
    protected $op_prest_achat_file_id;

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
     * Get the [op_prest_achat_id] column value.
     *
     * @return int
     */
    public function getOpPrestAchatId()
    {

        return $this->op_prest_achat_id;
    }

    /**
     * Get the [op_prest_id] column value.
     *
     * @return int
     */
    public function getOpPrestId()
    {

        return $this->op_prest_id;
    }

    /**
     * Get the [op_prest_achat_num_facture] column value.
     *
     * @return string
     */
    public function getOpPrestAchatNumFacture()
    {

        return $this->op_prest_achat_num_facture;
    }

    /**
     * Get the [optionally formatted] temporal [op_prest_achat_date_facture] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOpPrestAchatDateFacture($format = 'Y-m-d H:i:s')
    {
        if ($this->op_prest_achat_date_facture === null) {
            return null;
        }

        if ($this->op_prest_achat_date_facture === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->op_prest_achat_date_facture);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->op_prest_achat_date_facture, true), $x);
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
     * Get the [op_prest_achat_quantite] column value.
     *
     * @return int
     */
    public function getOpPrestAchatQuantite()
    {

        return $this->op_prest_achat_quantite;
    }

    /**
     * Get the [op_prest_achat_cout_interne] column value.
     *
     * @return float
     */
    public function getOpPrestAchatCoutInterne()
    {

        return $this->op_prest_achat_cout_interne;
    }

    /**
     * Get the [op_prest_achat_cout_externe] column value.
     *
     * @return float
     */
    public function getOpPrestAchatCoutExterne()
    {

        return $this->op_prest_achat_cout_externe;
    }

    /**
     * Get the [op_prest_achat_file_id] column value.
     *
     * @return int
     */
    public function getOpPrestAchatFileId()
    {

        return $this->op_prest_achat_file_id;
    }

    /**
     * Set the value of [op_prest_achat_id] column.
     *
     * @param  int $v new value
     * @return OperationPrestationsFacturesAchats The current object (for fluent API support)
     */
    public function setOpPrestAchatId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_achat_id !== $v) {
                    $this->op_prest_achat_id = $v;
                    $this->modifiedColumns[] = OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID;
                }


        return $this;
    } // setOpPrestAchatId()

    /**
     * Set the value of [op_prest_id] column.
     *
     * @param  int $v new value
     * @return OperationPrestationsFacturesAchats The current object (for fluent API support)
     */
    public function setOpPrestId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_id !== $v) {
                    $this->op_prest_id = $v;
                    $this->modifiedColumns[] = OperationPrestationsFacturesAchatsPeer::OP_PREST_ID;
                }


        return $this;
    } // setOpPrestId()

    /**
     * Set the value of [op_prest_achat_num_facture] column.
     *
     * @param  string $v new value
     * @return OperationPrestationsFacturesAchats The current object (for fluent API support)
     */
    public function setOpPrestAchatNumFacture($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->op_prest_achat_num_facture !== $v) {
            $this->op_prest_achat_num_facture = $v;
            $this->modifiedColumns[] = OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_NUM_FACTURE;
        }


        return $this;
    } // setOpPrestAchatNumFacture()

    /**
     * Sets the value of [op_prest_achat_date_facture] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return OperationPrestationsFacturesAchats The current object (for fluent API support)
     */
    public function setOpPrestAchatDateFacture($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->op_prest_achat_date_facture !== null || $dt !== null) {
            $currentDateAsString = ($this->op_prest_achat_date_facture !== null && $tmpDt = new DateTime($this->op_prest_achat_date_facture)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->op_prest_achat_date_facture = $newDateAsString;
                $this->modifiedColumns[] = OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_DATE_FACTURE;
            }
        } // if either are not null


        return $this;
    } // setOpPrestAchatDateFacture()

    /**
     * Set the value of [op_prest_achat_quantite] column.
     *
     * @param  int $v new value
     * @return OperationPrestationsFacturesAchats The current object (for fluent API support)
     */
    public function setOpPrestAchatQuantite($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_achat_quantite !== $v) {
                    $this->op_prest_achat_quantite = $v;
                    $this->modifiedColumns[] = OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_QUANTITE;
                }


        return $this;
    } // setOpPrestAchatQuantite()

    /**
     * Set the value of [op_prest_achat_cout_interne] column.
     *
     * @param  float $v new value
     * @return OperationPrestationsFacturesAchats The current object (for fluent API support)
     */
    public function setOpPrestAchatCoutInterne($v)
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
                if ($this->op_prest_achat_cout_interne !== $v) {
                    $this->op_prest_achat_cout_interne = $v;
                    $this->modifiedColumns[] = OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_INTERNE;
                }


        return $this;
    } // setOpPrestAchatCoutInterne()

    /**
     * Set the value of [op_prest_achat_cout_externe] column.
     *
     * @param  float $v new value
     * @return OperationPrestationsFacturesAchats The current object (for fluent API support)
     */
    public function setOpPrestAchatCoutExterne($v)
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
                if ($this->op_prest_achat_cout_externe !== $v) {
                    $this->op_prest_achat_cout_externe = $v;
                    $this->modifiedColumns[] = OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_EXTERNE;
                }


        return $this;
    } // setOpPrestAchatCoutExterne()

    /**
     * Set the value of [op_prest_achat_file_id] column.
     *
     * @param  int $v new value
     * @return OperationPrestationsFacturesAchats The current object (for fluent API support)
     */
    public function setOpPrestAchatFileId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_achat_file_id !== $v) {
                    $this->op_prest_achat_file_id = $v;
                    $this->modifiedColumns[] = OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_FILE_ID;
                }


        return $this;
    } // setOpPrestAchatFileId()

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

            $this->op_prest_achat_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_prest_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->op_prest_achat_num_facture = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->op_prest_achat_date_facture = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->op_prest_achat_quantite = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->op_prest_achat_cout_interne = ($row[$startcol + 5] !== null) ? (float) $row[$startcol + 5] : null;
            $this->op_prest_achat_cout_externe = ($row[$startcol + 6] !== null) ? (float) $row[$startcol + 6] : null;
            $this->op_prest_achat_file_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = OperationPrestationsFacturesAchatsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OperationPrestationsFacturesAchats object", $e);
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
            $con = Propel::getConnection(OperationPrestationsFacturesAchatsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OperationPrestationsFacturesAchatsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(OperationPrestationsFacturesAchatsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OperationPrestationsFacturesAchatsQuery::create()
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
            $con = Propel::getConnection(OperationPrestationsFacturesAchatsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OperationPrestationsFacturesAchatsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID;
        if (null !== $this->op_prest_achat_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_achat_id`';
        }
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_id`';
        }
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_NUM_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_achat_num_facture`';
        }
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_DATE_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_achat_date_facture`';
        }
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_QUANTITE)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_achat_quantite`';
        }
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_achat_cout_interne`';
        }
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_achat_cout_externe`';
        }
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_FILE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_achat_file_id`';
        }

        $sql = sprintf(
            'INSERT INTO `operation_prestations_factures_achats` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`op_prest_achat_id`':
                        $stmt->bindValue($identifier, $this->op_prest_achat_id, PDO::PARAM_INT);
                        break;
                    case '`op_prest_id`':
                        $stmt->bindValue($identifier, $this->op_prest_id, PDO::PARAM_INT);
                        break;
                    case '`op_prest_achat_num_facture`':
                        $stmt->bindValue($identifier, $this->op_prest_achat_num_facture, PDO::PARAM_STR);
                        break;
                    case '`op_prest_achat_date_facture`':
                        $stmt->bindValue($identifier, $this->op_prest_achat_date_facture, PDO::PARAM_STR);
                        break;
                    case '`op_prest_achat_quantite`':
                        $stmt->bindValue($identifier, $this->op_prest_achat_quantite, PDO::PARAM_INT);
                        break;
                    case '`op_prest_achat_cout_interne`':
                        $stmt->bindValue($identifier, $this->op_prest_achat_cout_interne, PDO::PARAM_INT);
                        break;
                    case '`op_prest_achat_cout_externe`':
                        $stmt->bindValue($identifier, $this->op_prest_achat_cout_externe, PDO::PARAM_INT);
                        break;
                    case '`op_prest_achat_file_id`':
                        $stmt->bindValue($identifier, $this->op_prest_achat_file_id, PDO::PARAM_INT);
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
        $this->setOpPrestAchatId($pk);

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


            if (($retval = OperationPrestationsFacturesAchatsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = OperationPrestationsFacturesAchatsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOpPrestAchatId();
                break;
            case 1:
                return $this->getOpPrestId();
                break;
            case 2:
                return $this->getOpPrestAchatNumFacture();
                break;
            case 3:
                return $this->getOpPrestAchatDateFacture();
                break;
            case 4:
                return $this->getOpPrestAchatQuantite();
                break;
            case 5:
                return $this->getOpPrestAchatCoutInterne();
                break;
            case 6:
                return $this->getOpPrestAchatCoutExterne();
                break;
            case 7:
                return $this->getOpPrestAchatFileId();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['OperationPrestationsFacturesAchats'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OperationPrestationsFacturesAchats'][$this->getPrimaryKey()] = true;
        $keys = OperationPrestationsFacturesAchatsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOpPrestAchatId(),
            $keys[1] => $this->getOpPrestId(),
            $keys[2] => $this->getOpPrestAchatNumFacture(),
            $keys[3] => $this->getOpPrestAchatDateFacture(),
            $keys[4] => $this->getOpPrestAchatQuantite(),
            $keys[5] => $this->getOpPrestAchatCoutInterne(),
            $keys[6] => $this->getOpPrestAchatCoutExterne(),
            $keys[7] => $this->getOpPrestAchatFileId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
        $pos = OperationPrestationsFacturesAchatsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOpPrestAchatId($value);
                break;
            case 1:
                $this->setOpPrestId($value);
                break;
            case 2:
                $this->setOpPrestAchatNumFacture($value);
                break;
            case 3:
                $this->setOpPrestAchatDateFacture($value);
                break;
            case 4:
                $this->setOpPrestAchatQuantite($value);
                break;
            case 5:
                $this->setOpPrestAchatCoutInterne($value);
                break;
            case 6:
                $this->setOpPrestAchatCoutExterne($value);
                break;
            case 7:
                $this->setOpPrestAchatFileId($value);
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
        $keys = OperationPrestationsFacturesAchatsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOpPrestAchatId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpPrestId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOpPrestAchatNumFacture($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOpPrestAchatDateFacture($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOpPrestAchatQuantite($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOpPrestAchatCoutInterne($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOpPrestAchatCoutExterne($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOpPrestAchatFileId($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OperationPrestationsFacturesAchatsPeer::DATABASE_NAME);

        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID)) $criteria->add(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID, $this->op_prest_achat_id);
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ID)) $criteria->add(OperationPrestationsFacturesAchatsPeer::OP_PREST_ID, $this->op_prest_id);
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_NUM_FACTURE)) $criteria->add(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_NUM_FACTURE, $this->op_prest_achat_num_facture);
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_DATE_FACTURE)) $criteria->add(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_DATE_FACTURE, $this->op_prest_achat_date_facture);
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_QUANTITE)) $criteria->add(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_QUANTITE, $this->op_prest_achat_quantite);
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_INTERNE)) $criteria->add(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_INTERNE, $this->op_prest_achat_cout_interne);
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_EXTERNE)) $criteria->add(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_EXTERNE, $this->op_prest_achat_cout_externe);
        if ($this->isColumnModified(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_FILE_ID)) $criteria->add(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_FILE_ID, $this->op_prest_achat_file_id);

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
        $criteria = new Criteria(OperationPrestationsFacturesAchatsPeer::DATABASE_NAME);
        $criteria->add(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID, $this->op_prest_achat_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOpPrestAchatId();
    }

    /**
     * Generic method to set the primary key (op_prest_achat_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOpPrestAchatId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOpPrestAchatId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of OperationPrestationsFacturesAchats (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpPrestId($this->getOpPrestId());
        $copyObj->setOpPrestAchatNumFacture($this->getOpPrestAchatNumFacture());
        $copyObj->setOpPrestAchatDateFacture($this->getOpPrestAchatDateFacture());
        $copyObj->setOpPrestAchatQuantite($this->getOpPrestAchatQuantite());
        $copyObj->setOpPrestAchatCoutInterne($this->getOpPrestAchatCoutInterne());
        $copyObj->setOpPrestAchatCoutExterne($this->getOpPrestAchatCoutExterne());
        $copyObj->setOpPrestAchatFileId($this->getOpPrestAchatFileId());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOpPrestAchatId(NULL); // this is a auto-increment column, so set to default value
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
     * @return OperationPrestationsFacturesAchats Clone of current object.
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
     * @return OperationPrestationsFacturesAchatsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OperationPrestationsFacturesAchatsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->op_prest_achat_id = null;
        $this->op_prest_id = null;
        $this->op_prest_achat_num_facture = null;
        $this->op_prest_achat_date_facture = null;
        $this->op_prest_achat_quantite = null;
        $this->op_prest_achat_cout_interne = null;
        $this->op_prest_achat_cout_externe = null;
        $this->op_prest_achat_file_id = null;
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OperationPrestationsFacturesAchatsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseOperationPrestationsFacturesAchatsPeer::getConnection();
            }
}
