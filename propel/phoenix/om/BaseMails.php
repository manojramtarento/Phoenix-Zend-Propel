<?php


/**
 * Base class that represents a row from the 'mails' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseMails extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MailsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MailsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the mail_id field.
     * @var        int
     */
    protected $mail_id;

    /**
     * The value for the mail_entity_name field.
     * @var        string
     */
    protected $mail_entity_name;

    /**
     * The value for the mail_entity_id field.
     * @var        int
     */
    protected $mail_entity_id;

    /**
     * The value for the mail_to field.
     * @var        string
     */
    protected $mail_to;

    /**
     * The value for the mail_cc field.
     * @var        string
     */
    protected $mail_cc;

    /**
     * The value for the mail_bcc field.
     * @var        string
     */
    protected $mail_bcc;

    /**
     * The value for the mail_subject field.
     * @var        string
     */
    protected $mail_subject;

    /**
     * The value for the mail_message field.
     * @var        string
     */
    protected $mail_message;

    /**
     * The value for the r_mail_type_id field.
     * @var        int
     */
    protected $r_mail_type_id;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * @var        RMailTypes
     */
    protected $aRMailTypes;

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
     * Get the [mail_id] column value.
     *
     * @return int
     */
    public function getMailId()
    {

        return $this->mail_id;
    }

    /**
     * Get the [mail_entity_name] column value.
     *
     * @return string
     */
    public function getMailEntityName()
    {

        return $this->mail_entity_name;
    }

    /**
     * Get the [mail_entity_id] column value.
     *
     * @return int
     */
    public function getMailEntityId()
    {

        return $this->mail_entity_id;
    }

    /**
     * Get the [mail_to] column value.
     *
     * @return string
     */
    public function getMailTo()
    {

        return $this->mail_to;
    }

    /**
     * Get the [mail_cc] column value.
     *
     * @return string
     */
    public function getMailCc()
    {

        return $this->mail_cc;
    }

    /**
     * Get the [mail_bcc] column value.
     *
     * @return string
     */
    public function getMailBcc()
    {

        return $this->mail_bcc;
    }

    /**
     * Get the [mail_subject] column value.
     *
     * @return string
     */
    public function getMailSubject()
    {

        return $this->mail_subject;
    }

    /**
     * Get the [mail_message] column value.
     *
     * @return string
     */
    public function getMailMessage()
    {

        return $this->mail_message;
    }

    /**
     * Get the [r_mail_type_id] column value.
     *
     * @return int
     */
    public function getRMailTypeId()
    {

        return $this->r_mail_type_id;
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
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
    }

    /**
     * Set the value of [mail_id] column.
     *
     * @param  int $v new value
     * @return Mails The current object (for fluent API support)
     */
    public function setMailId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->mail_id !== $v) {
                    $this->mail_id = $v;
                    $this->modifiedColumns[] = MailsPeer::MAIL_ID;
                }


        return $this;
    } // setMailId()

    /**
     * Set the value of [mail_entity_name] column.
     *
     * @param  string $v new value
     * @return Mails The current object (for fluent API support)
     */
    public function setMailEntityName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mail_entity_name !== $v) {
            $this->mail_entity_name = $v;
            $this->modifiedColumns[] = MailsPeer::MAIL_ENTITY_NAME;
        }


        return $this;
    } // setMailEntityName()

    /**
     * Set the value of [mail_entity_id] column.
     *
     * @param  int $v new value
     * @return Mails The current object (for fluent API support)
     */
    public function setMailEntityId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->mail_entity_id !== $v) {
                    $this->mail_entity_id = $v;
                    $this->modifiedColumns[] = MailsPeer::MAIL_ENTITY_ID;
                }


        return $this;
    } // setMailEntityId()

    /**
     * Set the value of [mail_to] column.
     *
     * @param  string $v new value
     * @return Mails The current object (for fluent API support)
     */
    public function setMailTo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mail_to !== $v) {
            $this->mail_to = $v;
            $this->modifiedColumns[] = MailsPeer::MAIL_TO;
        }


        return $this;
    } // setMailTo()

    /**
     * Set the value of [mail_cc] column.
     *
     * @param  string $v new value
     * @return Mails The current object (for fluent API support)
     */
    public function setMailCc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mail_cc !== $v) {
            $this->mail_cc = $v;
            $this->modifiedColumns[] = MailsPeer::MAIL_CC;
        }


        return $this;
    } // setMailCc()

    /**
     * Set the value of [mail_bcc] column.
     *
     * @param  string $v new value
     * @return Mails The current object (for fluent API support)
     */
    public function setMailBcc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mail_bcc !== $v) {
            $this->mail_bcc = $v;
            $this->modifiedColumns[] = MailsPeer::MAIL_BCC;
        }


        return $this;
    } // setMailBcc()

    /**
     * Set the value of [mail_subject] column.
     *
     * @param  string $v new value
     * @return Mails The current object (for fluent API support)
     */
    public function setMailSubject($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mail_subject !== $v) {
            $this->mail_subject = $v;
            $this->modifiedColumns[] = MailsPeer::MAIL_SUBJECT;
        }


        return $this;
    } // setMailSubject()

    /**
     * Set the value of [mail_message] column.
     *
     * @param  string $v new value
     * @return Mails The current object (for fluent API support)
     */
    public function setMailMessage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mail_message !== $v) {
            $this->mail_message = $v;
            $this->modifiedColumns[] = MailsPeer::MAIL_MESSAGE;
        }


        return $this;
    } // setMailMessage()

    /**
     * Set the value of [r_mail_type_id] column.
     *
     * @param  int $v new value
     * @return Mails The current object (for fluent API support)
     */
    public function setRMailTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_mail_type_id !== $v) {
                    $this->r_mail_type_id = $v;
                    $this->modifiedColumns[] = MailsPeer::R_MAIL_TYPE_ID;
                }

        if ($this->aRMailTypes !== null && $this->aRMailTypes->getRMailTypeId() !== $v) {
            $this->aRMailTypes = null;
        }


        return $this;
    } // setRMailTypeId()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Mails The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = MailsPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return Mails The current object (for fluent API support)
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
                    $this->modifiedColumns[] = MailsPeer::USER_ID;
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

            $this->mail_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->mail_entity_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->mail_entity_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->mail_to = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->mail_cc = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->mail_bcc = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->mail_subject = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->mail_message = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->r_mail_type_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->date_create = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->user_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = MailsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Mails object", $e);
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

        if ($this->aRMailTypes !== null && $this->r_mail_type_id !== $this->aRMailTypes->getRMailTypeId()) {
            $this->aRMailTypes = null;
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
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MailsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRMailTypes = null;
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
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MailsQuery::create()
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
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setDateCreate(time());
                
                                $this->setUserId(Zend_Auth::getInstance()->getStorage()->read()->getUserId());

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
                MailsPeer::addInstanceToPool($this);
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

            if ($this->aRMailTypes !== null) {
                if ($this->aRMailTypes->isModified() || $this->aRMailTypes->isNew()) {
                    $affectedRows += $this->aRMailTypes->save($con);
                }
                $this->setRMailTypes($this->aRMailTypes);
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

        $this->modifiedColumns[] = MailsPeer::MAIL_ID;
        if (null !== $this->mail_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MailsPeer::MAIL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MailsPeer::MAIL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`mail_id`';
        }
        if ($this->isColumnModified(MailsPeer::MAIL_ENTITY_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`mail_entity_name`';
        }
        if ($this->isColumnModified(MailsPeer::MAIL_ENTITY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`mail_entity_id`';
        }
        if ($this->isColumnModified(MailsPeer::MAIL_TO)) {
            $modifiedColumns[':p' . $index++]  = '`mail_to`';
        }
        if ($this->isColumnModified(MailsPeer::MAIL_CC)) {
            $modifiedColumns[':p' . $index++]  = '`mail_cc`';
        }
        if ($this->isColumnModified(MailsPeer::MAIL_BCC)) {
            $modifiedColumns[':p' . $index++]  = '`mail_bcc`';
        }
        if ($this->isColumnModified(MailsPeer::MAIL_SUBJECT)) {
            $modifiedColumns[':p' . $index++]  = '`mail_subject`';
        }
        if ($this->isColumnModified(MailsPeer::MAIL_MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`mail_message`';
        }
        if ($this->isColumnModified(MailsPeer::R_MAIL_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_mail_type_id`';
        }
        if ($this->isColumnModified(MailsPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(MailsPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }

        $sql = sprintf(
            'INSERT INTO `mails` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`mail_id`':
                        $stmt->bindValue($identifier, $this->mail_id, PDO::PARAM_INT);
                        break;
                    case '`mail_entity_name`':
                        $stmt->bindValue($identifier, $this->mail_entity_name, PDO::PARAM_STR);
                        break;
                    case '`mail_entity_id`':
                        $stmt->bindValue($identifier, $this->mail_entity_id, PDO::PARAM_INT);
                        break;
                    case '`mail_to`':
                        $stmt->bindValue($identifier, $this->mail_to, PDO::PARAM_STR);
                        break;
                    case '`mail_cc`':
                        $stmt->bindValue($identifier, $this->mail_cc, PDO::PARAM_STR);
                        break;
                    case '`mail_bcc`':
                        $stmt->bindValue($identifier, $this->mail_bcc, PDO::PARAM_STR);
                        break;
                    case '`mail_subject`':
                        $stmt->bindValue($identifier, $this->mail_subject, PDO::PARAM_STR);
                        break;
                    case '`mail_message`':
                        $stmt->bindValue($identifier, $this->mail_message, PDO::PARAM_STR);
                        break;
                    case '`r_mail_type_id`':
                        $stmt->bindValue($identifier, $this->r_mail_type_id, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
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
        $this->setMailId($pk);

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

            if ($this->aRMailTypes !== null) {
                if (!$this->aRMailTypes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRMailTypes->getValidationFailures());
                }
            }


            if (($retval = MailsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getMailId();
                break;
            case 1:
                return $this->getMailEntityName();
                break;
            case 2:
                return $this->getMailEntityId();
                break;
            case 3:
                return $this->getMailTo();
                break;
            case 4:
                return $this->getMailCc();
                break;
            case 5:
                return $this->getMailBcc();
                break;
            case 6:
                return $this->getMailSubject();
                break;
            case 7:
                return $this->getMailMessage();
                break;
            case 8:
                return $this->getRMailTypeId();
                break;
            case 9:
                return $this->getDateCreate();
                break;
            case 10:
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
        if (isset($alreadyDumpedObjects['Mails'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Mails'][$this->getPrimaryKey()] = true;
        $keys = MailsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getMailId(),
            $keys[1] => $this->getMailEntityName(),
            $keys[2] => $this->getMailEntityId(),
            $keys[3] => $this->getMailTo(),
            $keys[4] => $this->getMailCc(),
            $keys[5] => $this->getMailBcc(),
            $keys[6] => $this->getMailSubject(),
            $keys[7] => $this->getMailMessage(),
            $keys[8] => $this->getRMailTypeId(),
            $keys[9] => $this->getDateCreate(),
            $keys[10] => $this->getUserId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRMailTypes) {
                $result['RMailTypes'] = $this->aRMailTypes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = MailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setMailId($value);
                break;
            case 1:
                $this->setMailEntityName($value);
                break;
            case 2:
                $this->setMailEntityId($value);
                break;
            case 3:
                $this->setMailTo($value);
                break;
            case 4:
                $this->setMailCc($value);
                break;
            case 5:
                $this->setMailBcc($value);
                break;
            case 6:
                $this->setMailSubject($value);
                break;
            case 7:
                $this->setMailMessage($value);
                break;
            case 8:
                $this->setRMailTypeId($value);
                break;
            case 9:
                $this->setDateCreate($value);
                break;
            case 10:
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
        $keys = MailsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setMailId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMailEntityName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMailEntityId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMailTo($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMailCc($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMailBcc($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMailSubject($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMailMessage($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRMailTypeId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateCreate($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setUserId($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MailsPeer::DATABASE_NAME);

        if ($this->isColumnModified(MailsPeer::MAIL_ID)) $criteria->add(MailsPeer::MAIL_ID, $this->mail_id);
        if ($this->isColumnModified(MailsPeer::MAIL_ENTITY_NAME)) $criteria->add(MailsPeer::MAIL_ENTITY_NAME, $this->mail_entity_name);
        if ($this->isColumnModified(MailsPeer::MAIL_ENTITY_ID)) $criteria->add(MailsPeer::MAIL_ENTITY_ID, $this->mail_entity_id);
        if ($this->isColumnModified(MailsPeer::MAIL_TO)) $criteria->add(MailsPeer::MAIL_TO, $this->mail_to);
        if ($this->isColumnModified(MailsPeer::MAIL_CC)) $criteria->add(MailsPeer::MAIL_CC, $this->mail_cc);
        if ($this->isColumnModified(MailsPeer::MAIL_BCC)) $criteria->add(MailsPeer::MAIL_BCC, $this->mail_bcc);
        if ($this->isColumnModified(MailsPeer::MAIL_SUBJECT)) $criteria->add(MailsPeer::MAIL_SUBJECT, $this->mail_subject);
        if ($this->isColumnModified(MailsPeer::MAIL_MESSAGE)) $criteria->add(MailsPeer::MAIL_MESSAGE, $this->mail_message);
        if ($this->isColumnModified(MailsPeer::R_MAIL_TYPE_ID)) $criteria->add(MailsPeer::R_MAIL_TYPE_ID, $this->r_mail_type_id);
        if ($this->isColumnModified(MailsPeer::DATE_CREATE)) $criteria->add(MailsPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(MailsPeer::USER_ID)) $criteria->add(MailsPeer::USER_ID, $this->user_id);

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
        $criteria = new Criteria(MailsPeer::DATABASE_NAME);
        $criteria->add(MailsPeer::MAIL_ID, $this->mail_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getMailId();
    }

    /**
     * Generic method to set the primary key (mail_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setMailId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getMailId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Mails (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMailEntityName($this->getMailEntityName());
        $copyObj->setMailEntityId($this->getMailEntityId());
        $copyObj->setMailTo($this->getMailTo());
        $copyObj->setMailCc($this->getMailCc());
        $copyObj->setMailBcc($this->getMailBcc());
        $copyObj->setMailSubject($this->getMailSubject());
        $copyObj->setMailMessage($this->getMailMessage());
        $copyObj->setRMailTypeId($this->getRMailTypeId());
        $copyObj->setDateCreate($this->getDateCreate());
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
            $copyObj->setMailId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Mails Clone of current object.
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
     * @return MailsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MailsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a RMailTypes object.
     *
     * @param                  RMailTypes $v
     * @return Mails The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRMailTypes(RMailTypes $v = null)
    {
        if ($v === null) {
            $this->setRMailTypeId(NULL);
        } else {
            $this->setRMailTypeId($v->getRMailTypeId());
        }

        $this->aRMailTypes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RMailTypes object, it will not be re-added.
        if ($v !== null) {
            $v->addMails($this);
        }


        return $this;
    }


    /**
     * Get the associated RMailTypes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RMailTypes The associated RMailTypes object.
     * @throws PropelException
     */
    public function getRMailTypes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRMailTypes === null && ($this->r_mail_type_id !== null) && $doQuery) {
            $this->aRMailTypes = RMailTypesQuery::create()->findPk($this->r_mail_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRMailTypes->addMailss($this);
             */
        }

        return $this->aRMailTypes;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->mail_id = null;
        $this->mail_entity_name = null;
        $this->mail_entity_id = null;
        $this->mail_to = null;
        $this->mail_cc = null;
        $this->mail_bcc = null;
        $this->mail_subject = null;
        $this->mail_message = null;
        $this->r_mail_type_id = null;
        $this->date_create = null;
        $this->user_id = null;
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
            if ($this->aRMailTypes instanceof Persistent) {
              $this->aRMailTypes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aRMailTypes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MailsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseMailsPeer::getConnection();
            }
}
