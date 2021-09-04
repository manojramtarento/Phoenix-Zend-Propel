<?php


/**
 * Base class that represents a row from the 'users' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseUsers extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UsersPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UsersPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the user_login field.
     * @var        string
     */
    protected $user_login;

    /**
     * The value for the user_nom field.
     * @var        string
     */
    protected $user_nom;

    /**
     * The value for the user_prenom field.
     * @var        string
     */
    protected $user_prenom;

    /**
     * The value for the user_mail field.
     * @var        string
     */
    protected $user_mail;

    /**
     * The value for the user_phone field.
     * @var        string
     */
    protected $user_phone;

    /**
     * The value for the user_mobile field.
     * @var        string
     */
    protected $user_mobile;

    /**
     * The value for the r_user_type_id field.
     * @var        int
     */
    protected $r_user_type_id;

    /**
     * The value for the user_language field.
     * @var        string
     */
    protected $user_language;

    /**
     * The value for the user_password field.
     * @var        string
     */
    protected $user_password;

    /**
     * The value for the user_password_salt field.
     * @var        string
     */
    protected $user_password_salt;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * @var        RUserTypes
     */
    protected $aRUserTypes;

    /**
     * @var        PropelObjectCollection|Clients[] Collection to store aggregation of Clients objects.
     */
    protected $collClientss;
    protected $collClientssPartial;

    /**
     * @var        PropelObjectCollection|LnkUsersAclGroups[] Collection to store aggregation of LnkUsersAclGroups objects.
     */
    protected $collLnkUsersAclGroupss;
    protected $collLnkUsersAclGroupssPartial;

    /**
     * @var        PropelObjectCollection|OperationPrestations[] Collection to store aggregation of OperationPrestations objects.
     */
    protected $collOperationPrestationss;
    protected $collOperationPrestationssPartial;

    /**
     * @var        PropelObjectCollection|OperationStatuts[] Collection to store aggregation of OperationStatuts objects.
     */
    protected $collOperationStatutss;
    protected $collOperationStatutssPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationssRelatedByOpDcId;
    protected $collOperationssRelatedByOpDcIdPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationssRelatedByOpCpId;
    protected $collOperationssRelatedByOpCpIdPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationssRelatedByOpCdpId;
    protected $collOperationssRelatedByOpCdpIdPartial;

    /**
     * @var        PropelObjectCollection|FactureEditionHistory[] Collection to store aggregation of FactureEditionHistory objects.
     */
    protected $collFactureEditionHistorys;
    protected $collFactureEditionHistorysPartial;

    /**
     * @var        PropelObjectCollection|UserKpiSettings[] Collection to store aggregation of UserKpiSettings objects.
     */
    protected $collUserKpiSettingss;
    protected $collUserKpiSettingssPartial;

    /**
     * @var        PropelObjectCollection|LnkGrpValidationUsers[] Collection to store aggregation of LnkGrpValidationUsers objects.
     */
    protected $collLnkGrpValidationUserss;
    protected $collLnkGrpValidationUserssPartial;

    /**
     * @var        PropelObjectCollection|LnkUsersOrganisations[] Collection to store aggregation of LnkUsersOrganisations objects.
     */
    protected $collLnkUsersOrganisationss;
    protected $collLnkUsersOrganisationssPartial;

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
    protected $clientssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkUsersAclGroupssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationPrestationssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationStatutssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationssRelatedByOpDcIdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationssRelatedByOpCpIdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationssRelatedByOpCdpIdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $factureEditionHistorysScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $userKpiSettingssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkGrpValidationUserssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkUsersOrganisationssScheduledForDeletion = null;

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
     * Get the [user_login] column value.
     *
     * @return string
     */
    public function getUserLogin()
    {

        return $this->user_login;
    }

    /**
     * Get the [user_nom] column value.
     *
     * @return string
     */
    public function getUserNom()
    {

        return $this->user_nom;
    }

    /**
     * Get the [user_prenom] column value.
     *
     * @return string
     */
    public function getUserPrenom()
    {

        return $this->user_prenom;
    }

    /**
     * Get the [user_mail] column value.
     *
     * @return string
     */
    public function getUserMail()
    {

        return $this->user_mail;
    }

    /**
     * Get the [user_phone] column value.
     *
     * @return string
     */
    public function getUserPhone()
    {

        return $this->user_phone;
    }

    /**
     * Get the [user_mobile] column value.
     *
     * @return string
     */
    public function getUserMobile()
    {

        return $this->user_mobile;
    }

    /**
     * Get the [r_user_type_id] column value.
     *
     * @return int
     */
    public function getRUserTypeId()
    {

        return $this->r_user_type_id;
    }

    /**
     * Get the [user_language] column value.
     *
     * @return string
     */
    public function getUserLanguage()
    {

        return $this->user_language;
    }

    /**
     * Get the [user_password] column value.
     *
     * @return string
     */
    public function getUserPassword()
    {

        return $this->user_password;
    }

    /**
     * Get the [user_password_salt] column value.
     *
     * @return string
     */
    public function getUserPasswordSalt()
    {

        return $this->user_password_salt;
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
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return Users The current object (for fluent API support)
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
                    $this->modifiedColumns[] = UsersPeer::USER_ID;
                }


        return $this;
    } // setUserId()

    /**
     * Set the value of [user_login] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setUserLogin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_login !== $v) {
            $this->user_login = $v;
            $this->modifiedColumns[] = UsersPeer::USER_LOGIN;
        }


        return $this;
    } // setUserLogin()

    /**
     * Set the value of [user_nom] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setUserNom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_nom !== $v) {
            $this->user_nom = $v;
            $this->modifiedColumns[] = UsersPeer::USER_NOM;
        }


        return $this;
    } // setUserNom()

    /**
     * Set the value of [user_prenom] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setUserPrenom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_prenom !== $v) {
            $this->user_prenom = $v;
            $this->modifiedColumns[] = UsersPeer::USER_PRENOM;
        }


        return $this;
    } // setUserPrenom()

    /**
     * Set the value of [user_mail] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setUserMail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_mail !== $v) {
            $this->user_mail = $v;
            $this->modifiedColumns[] = UsersPeer::USER_MAIL;
        }


        return $this;
    } // setUserMail()

    /**
     * Set the value of [user_phone] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setUserPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_phone !== $v) {
            $this->user_phone = $v;
            $this->modifiedColumns[] = UsersPeer::USER_PHONE;
        }


        return $this;
    } // setUserPhone()

    /**
     * Set the value of [user_mobile] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setUserMobile($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_mobile !== $v) {
            $this->user_mobile = $v;
            $this->modifiedColumns[] = UsersPeer::USER_MOBILE;
        }


        return $this;
    } // setUserMobile()

    /**
     * Set the value of [r_user_type_id] column.
     *
     * @param  int $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setRUserTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_user_type_id !== $v) {
                    $this->r_user_type_id = $v;
                    $this->modifiedColumns[] = UsersPeer::R_USER_TYPE_ID;
                }

        if ($this->aRUserTypes !== null && $this->aRUserTypes->getRUserTypeId() !== $v) {
            $this->aRUserTypes = null;
        }


        return $this;
    } // setRUserTypeId()

    /**
     * Set the value of [user_language] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setUserLanguage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_language !== $v) {
            $this->user_language = $v;
            $this->modifiedColumns[] = UsersPeer::USER_LANGUAGE;
        }


        return $this;
    } // setUserLanguage()

    /**
     * Set the value of [user_password] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setUserPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_password !== $v) {
            $this->user_password = $v;
            $this->modifiedColumns[] = UsersPeer::USER_PASSWORD;
        }


        return $this;
    } // setUserPassword()

    /**
     * Set the value of [user_password_salt] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setUserPasswordSalt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_password_salt !== $v) {
            $this->user_password_salt = $v;
            $this->modifiedColumns[] = UsersPeer::USER_PASSWORD_SALT;
        }


        return $this;
    } // setUserPasswordSalt()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Users The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = UsersPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

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

            $this->user_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->user_login = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->user_nom = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->user_prenom = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->user_mail = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->user_phone = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->user_mobile = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->r_user_type_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->user_language = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->user_password = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->user_password_salt = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_create = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = UsersPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Users object", $e);
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

        if ($this->aRUserTypes !== null && $this->r_user_type_id !== $this->aRUserTypes->getRUserTypeId()) {
            $this->aRUserTypes = null;
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
            $con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UsersPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRUserTypes = null;
            $this->collClientss = null;

            $this->collLnkUsersAclGroupss = null;

            $this->collOperationPrestationss = null;

            $this->collOperationStatutss = null;

            $this->collOperationssRelatedByOpDcId = null;

            $this->collOperationssRelatedByOpCpId = null;

            $this->collOperationssRelatedByOpCdpId = null;

            $this->collFactureEditionHistorys = null;

            $this->collUserKpiSettingss = null;

            $this->collLnkGrpValidationUserss = null;

            $this->collLnkUsersOrganisationss = null;

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
            $con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UsersQuery::create()
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
            $con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setDateCreate(time());

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
                UsersPeer::addInstanceToPool($this);
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

            if ($this->aRUserTypes !== null) {
                if ($this->aRUserTypes->isModified() || $this->aRUserTypes->isNew()) {
                    $affectedRows += $this->aRUserTypes->save($con);
                }
                $this->setRUserTypes($this->aRUserTypes);
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

            if ($this->clientssScheduledForDeletion !== null) {
                if (!$this->clientssScheduledForDeletion->isEmpty()) {
                    foreach ($this->clientssScheduledForDeletion as $clients) {
                        // need to save related object because we set the relation to null
                        $clients->save($con);
                    }
                    $this->clientssScheduledForDeletion = null;
                }
            }

            if ($this->collClientss !== null) {
                foreach ($this->collClientss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkUsersAclGroupssScheduledForDeletion !== null) {
                if (!$this->lnkUsersAclGroupssScheduledForDeletion->isEmpty()) {
                    LnkUsersAclGroupsQuery::create()
                        ->filterByPrimaryKeys($this->lnkUsersAclGroupssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkUsersAclGroupssScheduledForDeletion = null;
                }
            }

            if ($this->collLnkUsersAclGroupss !== null) {
                foreach ($this->collLnkUsersAclGroupss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->operationStatutssScheduledForDeletion !== null) {
                if (!$this->operationStatutssScheduledForDeletion->isEmpty()) {
                    OperationStatutsQuery::create()
                        ->filterByPrimaryKeys($this->operationStatutssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->operationStatutssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationStatutss !== null) {
                foreach ($this->collOperationStatutss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationssRelatedByOpDcIdScheduledForDeletion !== null) {
                if (!$this->operationssRelatedByOpDcIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationssRelatedByOpDcIdScheduledForDeletion as $operationsRelatedByOpDcId) {
                        // need to save related object because we set the relation to null
                        $operationsRelatedByOpDcId->save($con);
                    }
                    $this->operationssRelatedByOpDcIdScheduledForDeletion = null;
                }
            }

            if ($this->collOperationssRelatedByOpDcId !== null) {
                foreach ($this->collOperationssRelatedByOpDcId as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationssRelatedByOpCpIdScheduledForDeletion !== null) {
                if (!$this->operationssRelatedByOpCpIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationssRelatedByOpCpIdScheduledForDeletion as $operationsRelatedByOpCpId) {
                        // need to save related object because we set the relation to null
                        $operationsRelatedByOpCpId->save($con);
                    }
                    $this->operationssRelatedByOpCpIdScheduledForDeletion = null;
                }
            }

            if ($this->collOperationssRelatedByOpCpId !== null) {
                foreach ($this->collOperationssRelatedByOpCpId as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationssRelatedByOpCdpIdScheduledForDeletion !== null) {
                if (!$this->operationssRelatedByOpCdpIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationssRelatedByOpCdpIdScheduledForDeletion as $operationsRelatedByOpCdpId) {
                        // need to save related object because we set the relation to null
                        $operationsRelatedByOpCdpId->save($con);
                    }
                    $this->operationssRelatedByOpCdpIdScheduledForDeletion = null;
                }
            }

            if ($this->collOperationssRelatedByOpCdpId !== null) {
                foreach ($this->collOperationssRelatedByOpCdpId as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->factureEditionHistorysScheduledForDeletion !== null) {
                if (!$this->factureEditionHistorysScheduledForDeletion->isEmpty()) {
                    foreach ($this->factureEditionHistorysScheduledForDeletion as $factureEditionHistory) {
                        // need to save related object because we set the relation to null
                        $factureEditionHistory->save($con);
                    }
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

            if ($this->userKpiSettingssScheduledForDeletion !== null) {
                if (!$this->userKpiSettingssScheduledForDeletion->isEmpty()) {
                    UserKpiSettingsQuery::create()
                        ->filterByPrimaryKeys($this->userKpiSettingssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->userKpiSettingssScheduledForDeletion = null;
                }
            }

            if ($this->collUserKpiSettingss !== null) {
                foreach ($this->collUserKpiSettingss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkGrpValidationUserssScheduledForDeletion !== null) {
                if (!$this->lnkGrpValidationUserssScheduledForDeletion->isEmpty()) {
                    foreach ($this->lnkGrpValidationUserssScheduledForDeletion as $lnkGrpValidationUsers) {
                        // need to save related object because we set the relation to null
                        $lnkGrpValidationUsers->save($con);
                    }
                    $this->lnkGrpValidationUserssScheduledForDeletion = null;
                }
            }

            if ($this->collLnkGrpValidationUserss !== null) {
                foreach ($this->collLnkGrpValidationUserss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkUsersOrganisationssScheduledForDeletion !== null) {
                if (!$this->lnkUsersOrganisationssScheduledForDeletion->isEmpty()) {
                    LnkUsersOrganisationsQuery::create()
                        ->filterByPrimaryKeys($this->lnkUsersOrganisationssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkUsersOrganisationssScheduledForDeletion = null;
                }
            }

            if ($this->collLnkUsersOrganisationss !== null) {
                foreach ($this->collLnkUsersOrganisationss as $referrerFK) {
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

        $this->modifiedColumns[] = UsersPeer::USER_ID;
        if (null !== $this->user_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UsersPeer::USER_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UsersPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(UsersPeer::USER_LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`user_login`';
        }
        if ($this->isColumnModified(UsersPeer::USER_NOM)) {
            $modifiedColumns[':p' . $index++]  = '`user_nom`';
        }
        if ($this->isColumnModified(UsersPeer::USER_PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`user_prenom`';
        }
        if ($this->isColumnModified(UsersPeer::USER_MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`user_mail`';
        }
        if ($this->isColumnModified(UsersPeer::USER_PHONE)) {
            $modifiedColumns[':p' . $index++]  = '`user_phone`';
        }
        if ($this->isColumnModified(UsersPeer::USER_MOBILE)) {
            $modifiedColumns[':p' . $index++]  = '`user_mobile`';
        }
        if ($this->isColumnModified(UsersPeer::R_USER_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_user_type_id`';
        }
        if ($this->isColumnModified(UsersPeer::USER_LANGUAGE)) {
            $modifiedColumns[':p' . $index++]  = '`user_language`';
        }
        if ($this->isColumnModified(UsersPeer::USER_PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`user_password`';
        }
        if ($this->isColumnModified(UsersPeer::USER_PASSWORD_SALT)) {
            $modifiedColumns[':p' . $index++]  = '`user_password_salt`';
        }
        if ($this->isColumnModified(UsersPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }

        $sql = sprintf(
            'INSERT INTO `users` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`user_login`':
                        $stmt->bindValue($identifier, $this->user_login, PDO::PARAM_STR);
                        break;
                    case '`user_nom`':
                        $stmt->bindValue($identifier, $this->user_nom, PDO::PARAM_STR);
                        break;
                    case '`user_prenom`':
                        $stmt->bindValue($identifier, $this->user_prenom, PDO::PARAM_STR);
                        break;
                    case '`user_mail`':
                        $stmt->bindValue($identifier, $this->user_mail, PDO::PARAM_STR);
                        break;
                    case '`user_phone`':
                        $stmt->bindValue($identifier, $this->user_phone, PDO::PARAM_STR);
                        break;
                    case '`user_mobile`':
                        $stmt->bindValue($identifier, $this->user_mobile, PDO::PARAM_STR);
                        break;
                    case '`r_user_type_id`':
                        $stmt->bindValue($identifier, $this->r_user_type_id, PDO::PARAM_INT);
                        break;
                    case '`user_language`':
                        $stmt->bindValue($identifier, $this->user_language, PDO::PARAM_STR);
                        break;
                    case '`user_password`':
                        $stmt->bindValue($identifier, $this->user_password, PDO::PARAM_STR);
                        break;
                    case '`user_password_salt`':
                        $stmt->bindValue($identifier, $this->user_password_salt, PDO::PARAM_STR);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
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
        $this->setUserId($pk);

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

            if ($this->aRUserTypes !== null) {
                if (!$this->aRUserTypes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRUserTypes->getValidationFailures());
                }
            }


            if (($retval = UsersPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collClientss !== null) {
                    foreach ($this->collClientss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkUsersAclGroupss !== null) {
                    foreach ($this->collLnkUsersAclGroupss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationPrestationss !== null) {
                    foreach ($this->collOperationPrestationss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationStatutss !== null) {
                    foreach ($this->collOperationStatutss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationssRelatedByOpDcId !== null) {
                    foreach ($this->collOperationssRelatedByOpDcId as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationssRelatedByOpCpId !== null) {
                    foreach ($this->collOperationssRelatedByOpCpId as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationssRelatedByOpCdpId !== null) {
                    foreach ($this->collOperationssRelatedByOpCdpId as $referrerFK) {
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

                if ($this->collUserKpiSettingss !== null) {
                    foreach ($this->collUserKpiSettingss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkGrpValidationUserss !== null) {
                    foreach ($this->collLnkGrpValidationUserss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkUsersOrganisationss !== null) {
                    foreach ($this->collLnkUsersOrganisationss as $referrerFK) {
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
        $pos = UsersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUserId();
                break;
            case 1:
                return $this->getUserLogin();
                break;
            case 2:
                return $this->getUserNom();
                break;
            case 3:
                return $this->getUserPrenom();
                break;
            case 4:
                return $this->getUserMail();
                break;
            case 5:
                return $this->getUserPhone();
                break;
            case 6:
                return $this->getUserMobile();
                break;
            case 7:
                return $this->getRUserTypeId();
                break;
            case 8:
                return $this->getUserLanguage();
                break;
            case 9:
                return $this->getUserPassword();
                break;
            case 10:
                return $this->getUserPasswordSalt();
                break;
            case 11:
                return $this->getDateCreate();
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
        if (isset($alreadyDumpedObjects['Users'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Users'][$this->getPrimaryKey()] = true;
        $keys = UsersPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getUserId(),
            $keys[1] => $this->getUserLogin(),
            $keys[2] => $this->getUserNom(),
            $keys[3] => $this->getUserPrenom(),
            $keys[4] => $this->getUserMail(),
            $keys[5] => $this->getUserPhone(),
            $keys[6] => $this->getUserMobile(),
            $keys[7] => $this->getRUserTypeId(),
            $keys[8] => $this->getUserLanguage(),
            $keys[9] => $this->getUserPassword(),
            $keys[10] => $this->getUserPasswordSalt(),
            $keys[11] => $this->getDateCreate(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRUserTypes) {
                $result['RUserTypes'] = $this->aRUserTypes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collClientss) {
                $result['Clientss'] = $this->collClientss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkUsersAclGroupss) {
                $result['LnkUsersAclGroupss'] = $this->collLnkUsersAclGroupss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationPrestationss) {
                $result['OperationPrestationss'] = $this->collOperationPrestationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationStatutss) {
                $result['OperationStatutss'] = $this->collOperationStatutss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationssRelatedByOpDcId) {
                $result['OperationssRelatedByOpDcId'] = $this->collOperationssRelatedByOpDcId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationssRelatedByOpCpId) {
                $result['OperationssRelatedByOpCpId'] = $this->collOperationssRelatedByOpCpId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationssRelatedByOpCdpId) {
                $result['OperationssRelatedByOpCdpId'] = $this->collOperationssRelatedByOpCdpId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collFactureEditionHistorys) {
                $result['FactureEditionHistorys'] = $this->collFactureEditionHistorys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUserKpiSettingss) {
                $result['UserKpiSettingss'] = $this->collUserKpiSettingss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkGrpValidationUserss) {
                $result['LnkGrpValidationUserss'] = $this->collLnkGrpValidationUserss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkUsersOrganisationss) {
                $result['LnkUsersOrganisationss'] = $this->collLnkUsersOrganisationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = UsersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUserId($value);
                break;
            case 1:
                $this->setUserLogin($value);
                break;
            case 2:
                $this->setUserNom($value);
                break;
            case 3:
                $this->setUserPrenom($value);
                break;
            case 4:
                $this->setUserMail($value);
                break;
            case 5:
                $this->setUserPhone($value);
                break;
            case 6:
                $this->setUserMobile($value);
                break;
            case 7:
                $this->setRUserTypeId($value);
                break;
            case 8:
                $this->setUserLanguage($value);
                break;
            case 9:
                $this->setUserPassword($value);
                break;
            case 10:
                $this->setUserPasswordSalt($value);
                break;
            case 11:
                $this->setDateCreate($value);
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
        $keys = UsersPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setUserId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUserLogin($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUserNom($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUserPrenom($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUserMail($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUserPhone($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUserMobile($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRUserTypeId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUserLanguage($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUserPassword($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setUserPasswordSalt($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateCreate($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UsersPeer::DATABASE_NAME);

        if ($this->isColumnModified(UsersPeer::USER_ID)) $criteria->add(UsersPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(UsersPeer::USER_LOGIN)) $criteria->add(UsersPeer::USER_LOGIN, $this->user_login);
        if ($this->isColumnModified(UsersPeer::USER_NOM)) $criteria->add(UsersPeer::USER_NOM, $this->user_nom);
        if ($this->isColumnModified(UsersPeer::USER_PRENOM)) $criteria->add(UsersPeer::USER_PRENOM, $this->user_prenom);
        if ($this->isColumnModified(UsersPeer::USER_MAIL)) $criteria->add(UsersPeer::USER_MAIL, $this->user_mail);
        if ($this->isColumnModified(UsersPeer::USER_PHONE)) $criteria->add(UsersPeer::USER_PHONE, $this->user_phone);
        if ($this->isColumnModified(UsersPeer::USER_MOBILE)) $criteria->add(UsersPeer::USER_MOBILE, $this->user_mobile);
        if ($this->isColumnModified(UsersPeer::R_USER_TYPE_ID)) $criteria->add(UsersPeer::R_USER_TYPE_ID, $this->r_user_type_id);
        if ($this->isColumnModified(UsersPeer::USER_LANGUAGE)) $criteria->add(UsersPeer::USER_LANGUAGE, $this->user_language);
        if ($this->isColumnModified(UsersPeer::USER_PASSWORD)) $criteria->add(UsersPeer::USER_PASSWORD, $this->user_password);
        if ($this->isColumnModified(UsersPeer::USER_PASSWORD_SALT)) $criteria->add(UsersPeer::USER_PASSWORD_SALT, $this->user_password_salt);
        if ($this->isColumnModified(UsersPeer::DATE_CREATE)) $criteria->add(UsersPeer::DATE_CREATE, $this->date_create);

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
        $criteria = new Criteria(UsersPeer::DATABASE_NAME);
        $criteria->add(UsersPeer::USER_ID, $this->user_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getUserId();
    }

    /**
     * Generic method to set the primary key (user_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setUserId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getUserId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Users (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserLogin($this->getUserLogin());
        $copyObj->setUserNom($this->getUserNom());
        $copyObj->setUserPrenom($this->getUserPrenom());
        $copyObj->setUserMail($this->getUserMail());
        $copyObj->setUserPhone($this->getUserPhone());
        $copyObj->setUserMobile($this->getUserMobile());
        $copyObj->setRUserTypeId($this->getRUserTypeId());
        $copyObj->setUserLanguage($this->getUserLanguage());
        $copyObj->setUserPassword($this->getUserPassword());
        $copyObj->setUserPasswordSalt($this->getUserPasswordSalt());
        $copyObj->setDateCreate($this->getDateCreate());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getClientss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClients($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkUsersAclGroupss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkUsersAclGroups($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationPrestationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationPrestations($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationStatutss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationStatuts($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationssRelatedByOpDcId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationsRelatedByOpDcId($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationssRelatedByOpCpId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationsRelatedByOpCpId($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationssRelatedByOpCdpId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationsRelatedByOpCdpId($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getFactureEditionHistorys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactureEditionHistory($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUserKpiSettingss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUserKpiSettings($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkGrpValidationUserss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkGrpValidationUsers($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkUsersOrganisationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkUsersOrganisations($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setUserId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Users Clone of current object.
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
     * @return UsersPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UsersPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a RUserTypes object.
     *
     * @param                  RUserTypes $v
     * @return Users The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRUserTypes(RUserTypes $v = null)
    {
        if ($v === null) {
            $this->setRUserTypeId(NULL);
        } else {
            $this->setRUserTypeId($v->getRUserTypeId());
        }

        $this->aRUserTypes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RUserTypes object, it will not be re-added.
        if ($v !== null) {
            $v->addUsers($this);
        }


        return $this;
    }


    /**
     * Get the associated RUserTypes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RUserTypes The associated RUserTypes object.
     * @throws PropelException
     */
    public function getRUserTypes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRUserTypes === null && ($this->r_user_type_id !== null) && $doQuery) {
            $this->aRUserTypes = RUserTypesQuery::create()->findPk($this->r_user_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRUserTypes->addUserss($this);
             */
        }

        return $this->aRUserTypes;
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
        if ('Clients' == $relationName) {
            $this->initClientss();
        }
        if ('LnkUsersAclGroups' == $relationName) {
            $this->initLnkUsersAclGroupss();
        }
        if ('OperationPrestations' == $relationName) {
            $this->initOperationPrestationss();
        }
        if ('OperationStatuts' == $relationName) {
            $this->initOperationStatutss();
        }
        if ('OperationsRelatedByOpDcId' == $relationName) {
            $this->initOperationssRelatedByOpDcId();
        }
        if ('OperationsRelatedByOpCpId' == $relationName) {
            $this->initOperationssRelatedByOpCpId();
        }
        if ('OperationsRelatedByOpCdpId' == $relationName) {
            $this->initOperationssRelatedByOpCdpId();
        }
        if ('FactureEditionHistory' == $relationName) {
            $this->initFactureEditionHistorys();
        }
        if ('UserKpiSettings' == $relationName) {
            $this->initUserKpiSettingss();
        }
        if ('LnkGrpValidationUsers' == $relationName) {
            $this->initLnkGrpValidationUserss();
        }
        if ('LnkUsersOrganisations' == $relationName) {
            $this->initLnkUsersOrganisationss();
        }
    }

    /**
     * Clears out the collClientss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        addClientss()
     */
    public function clearClientss()
    {
        $this->collClientss = null; // important to set this to null since that means it is uninitialized
        $this->collClientssPartial = null;

        return $this;
    }

    /**
     * reset is the collClientss collection loaded partially
     *
     * @return void
     */
    public function resetPartialClientss($v = true)
    {
        $this->collClientssPartial = $v;
    }

    /**
     * Initializes the collClientss collection.
     *
     * By default this just sets the collClientss collection to an empty array (like clearcollClientss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClientss($overrideExisting = true)
    {
        if (null !== $this->collClientss && !$overrideExisting) {
            return;
        }
        $this->collClientss = new PropelObjectCollection();
        $this->collClientss->setModel('Clients');
    }

    /**
     * Gets an array of Clients objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Clients[] List of Clients objects
     * @throws PropelException
     */
    public function getClientss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClientssPartial && !$this->isNew();
        if (null === $this->collClientss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClientss) {
                // return empty collection
                $this->initClientss();
            } else {
                $collClientss = ClientsQuery::create(null, $criteria)
                    ->filterByUserDc($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClientssPartial && count($collClientss)) {
                      $this->initClientss(false);

                      foreach ($collClientss as $obj) {
                        if (false == $this->collClientss->contains($obj)) {
                          $this->collClientss->append($obj);
                        }
                      }

                      $this->collClientssPartial = true;
                    }

                    $collClientss->getInternalIterator()->rewind();

                    return $collClientss;
                }

                if ($partial && $this->collClientss) {
                    foreach ($this->collClientss as $obj) {
                        if ($obj->isNew()) {
                            $collClientss[] = $obj;
                        }
                    }
                }

                $this->collClientss = $collClientss;
                $this->collClientssPartial = false;
            }
        }

        return $this->collClientss;
    }

    /**
     * Sets a collection of Clients objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clientss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setClientss(PropelCollection $clientss, PropelPDO $con = null)
    {
        $clientssToDelete = $this->getClientss(new Criteria(), $con)->diff($clientss);


        $this->clientssScheduledForDeletion = $clientssToDelete;

        foreach ($clientssToDelete as $clientsRemoved) {
            $clientsRemoved->setUserDc(null);
        }

        $this->collClientss = null;
        foreach ($clientss as $clients) {
            $this->addClients($clients);
        }

        $this->collClientss = $clientss;
        $this->collClientssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Clients objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Clients objects.
     * @throws PropelException
     */
    public function countClientss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClientssPartial && !$this->isNew();
        if (null === $this->collClientss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClientss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClientss());
            }
            $query = ClientsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUserDc($this)
                ->count($con);
        }

        return count($this->collClientss);
    }

    /**
     * Method called to associate a Clients object to this object
     * through the Clients foreign key attribute.
     *
     * @param    Clients $l Clients
     * @return Users The current object (for fluent API support)
     */
    public function addClients(Clients $l)
    {
        if ($this->collClientss === null) {
            $this->initClientss();
            $this->collClientssPartial = true;
        }

        if (!in_array($l, $this->collClientss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClients($l);

            if ($this->clientssScheduledForDeletion and $this->clientssScheduledForDeletion->contains($l)) {
                $this->clientssScheduledForDeletion->remove($this->clientssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Clients $clients The clients object to add.
     */
    protected function doAddClients($clients)
    {
        $this->collClientss[]= $clients;
        $clients->setUserDc($this);
    }

    /**
     * @param	Clients $clients The clients object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeClients($clients)
    {
        if ($this->getClientss()->contains($clients)) {
            $this->collClientss->remove($this->collClientss->search($clients));
            if (null === $this->clientssScheduledForDeletion) {
                $this->clientssScheduledForDeletion = clone $this->collClientss;
                $this->clientssScheduledForDeletion->clear();
            }
            $this->clientssScheduledForDeletion[]= $clients;
            $clients->setUserDc(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related Clientss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Clients[] List of Clients objects
     */
    public function getClientssJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClientsQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getClientss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related Clientss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Clients[] List of Clients objects
     */
    public function getClientssJoinContactGestion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClientsQuery::create(null, $criteria);
        $query->joinWith('ContactGestion', $join_behavior);

        return $this->getClientss($query, $con);
    }

    /**
     * Clears out the collLnkUsersAclGroupss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        addLnkUsersAclGroupss()
     */
    public function clearLnkUsersAclGroupss()
    {
        $this->collLnkUsersAclGroupss = null; // important to set this to null since that means it is uninitialized
        $this->collLnkUsersAclGroupssPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkUsersAclGroupss collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkUsersAclGroupss($v = true)
    {
        $this->collLnkUsersAclGroupssPartial = $v;
    }

    /**
     * Initializes the collLnkUsersAclGroupss collection.
     *
     * By default this just sets the collLnkUsersAclGroupss collection to an empty array (like clearcollLnkUsersAclGroupss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkUsersAclGroupss($overrideExisting = true)
    {
        if (null !== $this->collLnkUsersAclGroupss && !$overrideExisting) {
            return;
        }
        $this->collLnkUsersAclGroupss = new PropelObjectCollection();
        $this->collLnkUsersAclGroupss->setModel('LnkUsersAclGroups');
    }

    /**
     * Gets an array of LnkUsersAclGroups objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkUsersAclGroups[] List of LnkUsersAclGroups objects
     * @throws PropelException
     */
    public function getLnkUsersAclGroupss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkUsersAclGroupssPartial && !$this->isNew();
        if (null === $this->collLnkUsersAclGroupss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkUsersAclGroupss) {
                // return empty collection
                $this->initLnkUsersAclGroupss();
            } else {
                $collLnkUsersAclGroupss = LnkUsersAclGroupsQuery::create(null, $criteria)
                    ->filterByUsers($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkUsersAclGroupssPartial && count($collLnkUsersAclGroupss)) {
                      $this->initLnkUsersAclGroupss(false);

                      foreach ($collLnkUsersAclGroupss as $obj) {
                        if (false == $this->collLnkUsersAclGroupss->contains($obj)) {
                          $this->collLnkUsersAclGroupss->append($obj);
                        }
                      }

                      $this->collLnkUsersAclGroupssPartial = true;
                    }

                    $collLnkUsersAclGroupss->getInternalIterator()->rewind();

                    return $collLnkUsersAclGroupss;
                }

                if ($partial && $this->collLnkUsersAclGroupss) {
                    foreach ($this->collLnkUsersAclGroupss as $obj) {
                        if ($obj->isNew()) {
                            $collLnkUsersAclGroupss[] = $obj;
                        }
                    }
                }

                $this->collLnkUsersAclGroupss = $collLnkUsersAclGroupss;
                $this->collLnkUsersAclGroupssPartial = false;
            }
        }

        return $this->collLnkUsersAclGroupss;
    }

    /**
     * Sets a collection of LnkUsersAclGroups objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkUsersAclGroupss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setLnkUsersAclGroupss(PropelCollection $lnkUsersAclGroupss, PropelPDO $con = null)
    {
        $lnkUsersAclGroupssToDelete = $this->getLnkUsersAclGroupss(new Criteria(), $con)->diff($lnkUsersAclGroupss);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->lnkUsersAclGroupssScheduledForDeletion = clone $lnkUsersAclGroupssToDelete;

        foreach ($lnkUsersAclGroupssToDelete as $lnkUsersAclGroupsRemoved) {
            $lnkUsersAclGroupsRemoved->setUsers(null);
        }

        $this->collLnkUsersAclGroupss = null;
        foreach ($lnkUsersAclGroupss as $lnkUsersAclGroups) {
            $this->addLnkUsersAclGroups($lnkUsersAclGroups);
        }

        $this->collLnkUsersAclGroupss = $lnkUsersAclGroupss;
        $this->collLnkUsersAclGroupssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkUsersAclGroups objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkUsersAclGroups objects.
     * @throws PropelException
     */
    public function countLnkUsersAclGroupss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkUsersAclGroupssPartial && !$this->isNew();
        if (null === $this->collLnkUsersAclGroupss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkUsersAclGroupss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkUsersAclGroupss());
            }
            $query = LnkUsersAclGroupsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsers($this)
                ->count($con);
        }

        return count($this->collLnkUsersAclGroupss);
    }

    /**
     * Method called to associate a LnkUsersAclGroups object to this object
     * through the LnkUsersAclGroups foreign key attribute.
     *
     * @param    LnkUsersAclGroups $l LnkUsersAclGroups
     * @return Users The current object (for fluent API support)
     */
    public function addLnkUsersAclGroups(LnkUsersAclGroups $l)
    {
        if ($this->collLnkUsersAclGroupss === null) {
            $this->initLnkUsersAclGroupss();
            $this->collLnkUsersAclGroupssPartial = true;
        }

        if (!in_array($l, $this->collLnkUsersAclGroupss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkUsersAclGroups($l);

            if ($this->lnkUsersAclGroupssScheduledForDeletion and $this->lnkUsersAclGroupssScheduledForDeletion->contains($l)) {
                $this->lnkUsersAclGroupssScheduledForDeletion->remove($this->lnkUsersAclGroupssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkUsersAclGroups $lnkUsersAclGroups The lnkUsersAclGroups object to add.
     */
    protected function doAddLnkUsersAclGroups($lnkUsersAclGroups)
    {
        $this->collLnkUsersAclGroupss[]= $lnkUsersAclGroups;
        $lnkUsersAclGroups->setUsers($this);
    }

    /**
     * @param	LnkUsersAclGroups $lnkUsersAclGroups The lnkUsersAclGroups object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeLnkUsersAclGroups($lnkUsersAclGroups)
    {
        if ($this->getLnkUsersAclGroupss()->contains($lnkUsersAclGroups)) {
            $this->collLnkUsersAclGroupss->remove($this->collLnkUsersAclGroupss->search($lnkUsersAclGroups));
            if (null === $this->lnkUsersAclGroupssScheduledForDeletion) {
                $this->lnkUsersAclGroupssScheduledForDeletion = clone $this->collLnkUsersAclGroupss;
                $this->lnkUsersAclGroupssScheduledForDeletion->clear();
            }
            $this->lnkUsersAclGroupssScheduledForDeletion[]= clone $lnkUsersAclGroups;
            $lnkUsersAclGroups->setUsers(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related LnkUsersAclGroupss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkUsersAclGroups[] List of LnkUsersAclGroups objects
     */
    public function getLnkUsersAclGroupssJoinAclGroups($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkUsersAclGroupsQuery::create(null, $criteria);
        $query->joinWith('AclGroups', $join_behavior);

        return $this->getLnkUsersAclGroupss($query, $con);
    }

    /**
     * Clears out the collOperationPrestationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
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
     * If this Users is new, it will return
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
                    ->filterByUsers($this)
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
     * @return Users The current object (for fluent API support)
     */
    public function setOperationPrestationss(PropelCollection $operationPrestationss, PropelPDO $con = null)
    {
        $operationPrestationssToDelete = $this->getOperationPrestationss(new Criteria(), $con)->diff($operationPrestationss);


        $this->operationPrestationssScheduledForDeletion = $operationPrestationssToDelete;

        foreach ($operationPrestationssToDelete as $operationPrestationsRemoved) {
            $operationPrestationsRemoved->setUsers(null);
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
                ->filterByUsers($this)
                ->count($con);
        }

        return count($this->collOperationPrestationss);
    }

    /**
     * Method called to associate a OperationPrestations object to this object
     * through the OperationPrestations foreign key attribute.
     *
     * @param    OperationPrestations $l OperationPrestations
     * @return Users The current object (for fluent API support)
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
        $operationPrestations->setUsers($this);
    }

    /**
     * @param	OperationPrestations $operationPrestations The operationPrestations object to remove.
     * @return Users The current object (for fluent API support)
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
            $operationPrestations->setUsers(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Clears out the collOperationStatutss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        addOperationStatutss()
     */
    public function clearOperationStatutss()
    {
        $this->collOperationStatutss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationStatutssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationStatutss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationStatutss($v = true)
    {
        $this->collOperationStatutssPartial = $v;
    }

    /**
     * Initializes the collOperationStatutss collection.
     *
     * By default this just sets the collOperationStatutss collection to an empty array (like clearcollOperationStatutss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationStatutss($overrideExisting = true)
    {
        if (null !== $this->collOperationStatutss && !$overrideExisting) {
            return;
        }
        $this->collOperationStatutss = new PropelObjectCollection();
        $this->collOperationStatutss->setModel('OperationStatuts');
    }

    /**
     * Gets an array of OperationStatuts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     * @throws PropelException
     */
    public function getOperationStatutss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationStatutssPartial && !$this->isNew();
        if (null === $this->collOperationStatutss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationStatutss) {
                // return empty collection
                $this->initOperationStatutss();
            } else {
                $collOperationStatutss = OperationStatutsQuery::create(null, $criteria)
                    ->filterByUsers($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationStatutssPartial && count($collOperationStatutss)) {
                      $this->initOperationStatutss(false);

                      foreach ($collOperationStatutss as $obj) {
                        if (false == $this->collOperationStatutss->contains($obj)) {
                          $this->collOperationStatutss->append($obj);
                        }
                      }

                      $this->collOperationStatutssPartial = true;
                    }

                    $collOperationStatutss->getInternalIterator()->rewind();

                    return $collOperationStatutss;
                }

                if ($partial && $this->collOperationStatutss) {
                    foreach ($this->collOperationStatutss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationStatutss[] = $obj;
                        }
                    }
                }

                $this->collOperationStatutss = $collOperationStatutss;
                $this->collOperationStatutssPartial = false;
            }
        }

        return $this->collOperationStatutss;
    }

    /**
     * Sets a collection of OperationStatuts objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationStatutss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setOperationStatutss(PropelCollection $operationStatutss, PropelPDO $con = null)
    {
        $operationStatutssToDelete = $this->getOperationStatutss(new Criteria(), $con)->diff($operationStatutss);


        $this->operationStatutssScheduledForDeletion = $operationStatutssToDelete;

        foreach ($operationStatutssToDelete as $operationStatutsRemoved) {
            $operationStatutsRemoved->setUsers(null);
        }

        $this->collOperationStatutss = null;
        foreach ($operationStatutss as $operationStatuts) {
            $this->addOperationStatuts($operationStatuts);
        }

        $this->collOperationStatutss = $operationStatutss;
        $this->collOperationStatutssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationStatuts objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationStatuts objects.
     * @throws PropelException
     */
    public function countOperationStatutss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationStatutssPartial && !$this->isNew();
        if (null === $this->collOperationStatutss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationStatutss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationStatutss());
            }
            $query = OperationStatutsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsers($this)
                ->count($con);
        }

        return count($this->collOperationStatutss);
    }

    /**
     * Method called to associate a OperationStatuts object to this object
     * through the OperationStatuts foreign key attribute.
     *
     * @param    OperationStatuts $l OperationStatuts
     * @return Users The current object (for fluent API support)
     */
    public function addOperationStatuts(OperationStatuts $l)
    {
        if ($this->collOperationStatutss === null) {
            $this->initOperationStatutss();
            $this->collOperationStatutssPartial = true;
        }

        if (!in_array($l, $this->collOperationStatutss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationStatuts($l);

            if ($this->operationStatutssScheduledForDeletion and $this->operationStatutssScheduledForDeletion->contains($l)) {
                $this->operationStatutssScheduledForDeletion->remove($this->operationStatutssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationStatuts $operationStatuts The operationStatuts object to add.
     */
    protected function doAddOperationStatuts($operationStatuts)
    {
        $this->collOperationStatutss[]= $operationStatuts;
        $operationStatuts->setUsers($this);
    }

    /**
     * @param	OperationStatuts $operationStatuts The operationStatuts object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeOperationStatuts($operationStatuts)
    {
        if ($this->getOperationStatutss()->contains($operationStatuts)) {
            $this->collOperationStatutss->remove($this->collOperationStatutss->search($operationStatuts));
            if (null === $this->operationStatutssScheduledForDeletion) {
                $this->operationStatutssScheduledForDeletion = clone $this->collOperationStatutss;
                $this->operationStatutssScheduledForDeletion->clear();
            }
            $this->operationStatutssScheduledForDeletion[]= clone $operationStatuts;
            $operationStatuts->setUsers(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinOldROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('OldROperationStatus', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinNewROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('NewROperationStatus', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationStatuts[] List of OperationStatuts objects
     */
    public function getOperationStatutssJoinROperationStatutRefus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationStatutsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatutRefus', $join_behavior);

        return $this->getOperationStatutss($query, $con);
    }

    /**
     * Clears out the collOperationssRelatedByOpDcId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        addOperationssRelatedByOpDcId()
     */
    public function clearOperationssRelatedByOpDcId()
    {
        $this->collOperationssRelatedByOpDcId = null; // important to set this to null since that means it is uninitialized
        $this->collOperationssRelatedByOpDcIdPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationssRelatedByOpDcId collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationssRelatedByOpDcId($v = true)
    {
        $this->collOperationssRelatedByOpDcIdPartial = $v;
    }

    /**
     * Initializes the collOperationssRelatedByOpDcId collection.
     *
     * By default this just sets the collOperationssRelatedByOpDcId collection to an empty array (like clearcollOperationssRelatedByOpDcId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationssRelatedByOpDcId($overrideExisting = true)
    {
        if (null !== $this->collOperationssRelatedByOpDcId && !$overrideExisting) {
            return;
        }
        $this->collOperationssRelatedByOpDcId = new PropelObjectCollection();
        $this->collOperationssRelatedByOpDcId->setModel('Operations');
    }

    /**
     * Gets an array of Operations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Operations[] List of Operations objects
     * @throws PropelException
     */
    public function getOperationssRelatedByOpDcId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpDcIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpDcId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpDcId) {
                // return empty collection
                $this->initOperationssRelatedByOpDcId();
            } else {
                $collOperationssRelatedByOpDcId = OperationsQuery::create(null, $criteria)
                    ->filterByUserDC($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationssRelatedByOpDcIdPartial && count($collOperationssRelatedByOpDcId)) {
                      $this->initOperationssRelatedByOpDcId(false);

                      foreach ($collOperationssRelatedByOpDcId as $obj) {
                        if (false == $this->collOperationssRelatedByOpDcId->contains($obj)) {
                          $this->collOperationssRelatedByOpDcId->append($obj);
                        }
                      }

                      $this->collOperationssRelatedByOpDcIdPartial = true;
                    }

                    $collOperationssRelatedByOpDcId->getInternalIterator()->rewind();

                    return $collOperationssRelatedByOpDcId;
                }

                if ($partial && $this->collOperationssRelatedByOpDcId) {
                    foreach ($this->collOperationssRelatedByOpDcId as $obj) {
                        if ($obj->isNew()) {
                            $collOperationssRelatedByOpDcId[] = $obj;
                        }
                    }
                }

                $this->collOperationssRelatedByOpDcId = $collOperationssRelatedByOpDcId;
                $this->collOperationssRelatedByOpDcIdPartial = false;
            }
        }

        return $this->collOperationssRelatedByOpDcId;
    }

    /**
     * Sets a collection of OperationsRelatedByOpDcId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationssRelatedByOpDcId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setOperationssRelatedByOpDcId(PropelCollection $operationssRelatedByOpDcId, PropelPDO $con = null)
    {
        $operationssRelatedByOpDcIdToDelete = $this->getOperationssRelatedByOpDcId(new Criteria(), $con)->diff($operationssRelatedByOpDcId);


        $this->operationssRelatedByOpDcIdScheduledForDeletion = $operationssRelatedByOpDcIdToDelete;

        foreach ($operationssRelatedByOpDcIdToDelete as $operationsRelatedByOpDcIdRemoved) {
            $operationsRelatedByOpDcIdRemoved->setUserDC(null);
        }

        $this->collOperationssRelatedByOpDcId = null;
        foreach ($operationssRelatedByOpDcId as $operationsRelatedByOpDcId) {
            $this->addOperationsRelatedByOpDcId($operationsRelatedByOpDcId);
        }

        $this->collOperationssRelatedByOpDcId = $operationssRelatedByOpDcId;
        $this->collOperationssRelatedByOpDcIdPartial = false;

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
    public function countOperationssRelatedByOpDcId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpDcIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpDcId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpDcId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationssRelatedByOpDcId());
            }
            $query = OperationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUserDC($this)
                ->count($con);
        }

        return count($this->collOperationssRelatedByOpDcId);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return Users The current object (for fluent API support)
     */
    public function addOperationsRelatedByOpDcId(Operations $l)
    {
        if ($this->collOperationssRelatedByOpDcId === null) {
            $this->initOperationssRelatedByOpDcId();
            $this->collOperationssRelatedByOpDcIdPartial = true;
        }

        if (!in_array($l, $this->collOperationssRelatedByOpDcId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationsRelatedByOpDcId($l);

            if ($this->operationssRelatedByOpDcIdScheduledForDeletion and $this->operationssRelatedByOpDcIdScheduledForDeletion->contains($l)) {
                $this->operationssRelatedByOpDcIdScheduledForDeletion->remove($this->operationssRelatedByOpDcIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationsRelatedByOpDcId $operationsRelatedByOpDcId The operationsRelatedByOpDcId object to add.
     */
    protected function doAddOperationsRelatedByOpDcId($operationsRelatedByOpDcId)
    {
        $this->collOperationssRelatedByOpDcId[]= $operationsRelatedByOpDcId;
        $operationsRelatedByOpDcId->setUserDC($this);
    }

    /**
     * @param	OperationsRelatedByOpDcId $operationsRelatedByOpDcId The operationsRelatedByOpDcId object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeOperationsRelatedByOpDcId($operationsRelatedByOpDcId)
    {
        if ($this->getOperationssRelatedByOpDcId()->contains($operationsRelatedByOpDcId)) {
            $this->collOperationssRelatedByOpDcId->remove($this->collOperationssRelatedByOpDcId->search($operationsRelatedByOpDcId));
            if (null === $this->operationssRelatedByOpDcIdScheduledForDeletion) {
                $this->operationssRelatedByOpDcIdScheduledForDeletion = clone $this->collOperationssRelatedByOpDcId;
                $this->operationssRelatedByOpDcIdScheduledForDeletion->clear();
            }
            $this->operationssRelatedByOpDcIdScheduledForDeletion[]= $operationsRelatedByOpDcId;
            $operationsRelatedByOpDcId->setUserDC(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinContactClient($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactClient', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinClientContratOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientContratOptions', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinClientSiteForLog($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientSiteForLog', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinGedelogOperationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('GedelogOperationParams', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatus', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinRCustomActivites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RCustomActivites', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinROperationType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationType', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinROperationTypeSub($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSub', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinOperationsExt($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsExt', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinRDelaiDevis($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RDelaiDevis', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinInvoicingAddressContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('InvoicingAddressContact', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinOperationsRelatedByOpParentId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsRelatedByOpParentId', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinOperationUniverse($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationUniverse', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinOperationMedia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationMedia', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinOperationTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationTemplate', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpDcId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpDcIdJoinROperationClassifications($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationClassifications', $join_behavior);

        return $this->getOperationssRelatedByOpDcId($query, $con);
    }

    /**
     * Clears out the collOperationssRelatedByOpCpId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        addOperationssRelatedByOpCpId()
     */
    public function clearOperationssRelatedByOpCpId()
    {
        $this->collOperationssRelatedByOpCpId = null; // important to set this to null since that means it is uninitialized
        $this->collOperationssRelatedByOpCpIdPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationssRelatedByOpCpId collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationssRelatedByOpCpId($v = true)
    {
        $this->collOperationssRelatedByOpCpIdPartial = $v;
    }

    /**
     * Initializes the collOperationssRelatedByOpCpId collection.
     *
     * By default this just sets the collOperationssRelatedByOpCpId collection to an empty array (like clearcollOperationssRelatedByOpCpId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationssRelatedByOpCpId($overrideExisting = true)
    {
        if (null !== $this->collOperationssRelatedByOpCpId && !$overrideExisting) {
            return;
        }
        $this->collOperationssRelatedByOpCpId = new PropelObjectCollection();
        $this->collOperationssRelatedByOpCpId->setModel('Operations');
    }

    /**
     * Gets an array of Operations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Operations[] List of Operations objects
     * @throws PropelException
     */
    public function getOperationssRelatedByOpCpId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpCpIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpCpId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpCpId) {
                // return empty collection
                $this->initOperationssRelatedByOpCpId();
            } else {
                $collOperationssRelatedByOpCpId = OperationsQuery::create(null, $criteria)
                    ->filterByUserCP($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationssRelatedByOpCpIdPartial && count($collOperationssRelatedByOpCpId)) {
                      $this->initOperationssRelatedByOpCpId(false);

                      foreach ($collOperationssRelatedByOpCpId as $obj) {
                        if (false == $this->collOperationssRelatedByOpCpId->contains($obj)) {
                          $this->collOperationssRelatedByOpCpId->append($obj);
                        }
                      }

                      $this->collOperationssRelatedByOpCpIdPartial = true;
                    }

                    $collOperationssRelatedByOpCpId->getInternalIterator()->rewind();

                    return $collOperationssRelatedByOpCpId;
                }

                if ($partial && $this->collOperationssRelatedByOpCpId) {
                    foreach ($this->collOperationssRelatedByOpCpId as $obj) {
                        if ($obj->isNew()) {
                            $collOperationssRelatedByOpCpId[] = $obj;
                        }
                    }
                }

                $this->collOperationssRelatedByOpCpId = $collOperationssRelatedByOpCpId;
                $this->collOperationssRelatedByOpCpIdPartial = false;
            }
        }

        return $this->collOperationssRelatedByOpCpId;
    }

    /**
     * Sets a collection of OperationsRelatedByOpCpId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationssRelatedByOpCpId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setOperationssRelatedByOpCpId(PropelCollection $operationssRelatedByOpCpId, PropelPDO $con = null)
    {
        $operationssRelatedByOpCpIdToDelete = $this->getOperationssRelatedByOpCpId(new Criteria(), $con)->diff($operationssRelatedByOpCpId);


        $this->operationssRelatedByOpCpIdScheduledForDeletion = $operationssRelatedByOpCpIdToDelete;

        foreach ($operationssRelatedByOpCpIdToDelete as $operationsRelatedByOpCpIdRemoved) {
            $operationsRelatedByOpCpIdRemoved->setUserCP(null);
        }

        $this->collOperationssRelatedByOpCpId = null;
        foreach ($operationssRelatedByOpCpId as $operationsRelatedByOpCpId) {
            $this->addOperationsRelatedByOpCpId($operationsRelatedByOpCpId);
        }

        $this->collOperationssRelatedByOpCpId = $operationssRelatedByOpCpId;
        $this->collOperationssRelatedByOpCpIdPartial = false;

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
    public function countOperationssRelatedByOpCpId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpCpIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpCpId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpCpId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationssRelatedByOpCpId());
            }
            $query = OperationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUserCP($this)
                ->count($con);
        }

        return count($this->collOperationssRelatedByOpCpId);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return Users The current object (for fluent API support)
     */
    public function addOperationsRelatedByOpCpId(Operations $l)
    {
        if ($this->collOperationssRelatedByOpCpId === null) {
            $this->initOperationssRelatedByOpCpId();
            $this->collOperationssRelatedByOpCpIdPartial = true;
        }

        if (!in_array($l, $this->collOperationssRelatedByOpCpId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationsRelatedByOpCpId($l);

            if ($this->operationssRelatedByOpCpIdScheduledForDeletion and $this->operationssRelatedByOpCpIdScheduledForDeletion->contains($l)) {
                $this->operationssRelatedByOpCpIdScheduledForDeletion->remove($this->operationssRelatedByOpCpIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationsRelatedByOpCpId $operationsRelatedByOpCpId The operationsRelatedByOpCpId object to add.
     */
    protected function doAddOperationsRelatedByOpCpId($operationsRelatedByOpCpId)
    {
        $this->collOperationssRelatedByOpCpId[]= $operationsRelatedByOpCpId;
        $operationsRelatedByOpCpId->setUserCP($this);
    }

    /**
     * @param	OperationsRelatedByOpCpId $operationsRelatedByOpCpId The operationsRelatedByOpCpId object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeOperationsRelatedByOpCpId($operationsRelatedByOpCpId)
    {
        if ($this->getOperationssRelatedByOpCpId()->contains($operationsRelatedByOpCpId)) {
            $this->collOperationssRelatedByOpCpId->remove($this->collOperationssRelatedByOpCpId->search($operationsRelatedByOpCpId));
            if (null === $this->operationssRelatedByOpCpIdScheduledForDeletion) {
                $this->operationssRelatedByOpCpIdScheduledForDeletion = clone $this->collOperationssRelatedByOpCpId;
                $this->operationssRelatedByOpCpIdScheduledForDeletion->clear();
            }
            $this->operationssRelatedByOpCpIdScheduledForDeletion[]= $operationsRelatedByOpCpId;
            $operationsRelatedByOpCpId->setUserCP(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinContactClient($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactClient', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinClientContratOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientContratOptions', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinClientSiteForLog($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientSiteForLog', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinGedelogOperationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('GedelogOperationParams', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatus', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinRCustomActivites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RCustomActivites', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinROperationType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationType', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinROperationTypeSub($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSub', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinOperationsExt($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsExt', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinRDelaiDevis($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RDelaiDevis', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinInvoicingAddressContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('InvoicingAddressContact', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinOperationsRelatedByOpParentId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsRelatedByOpParentId', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinOperationUniverse($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationUniverse', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinOperationMedia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationMedia', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinOperationTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationTemplate', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCpIdJoinROperationClassifications($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationClassifications', $join_behavior);

        return $this->getOperationssRelatedByOpCpId($query, $con);
    }

    /**
     * Clears out the collOperationssRelatedByOpCdpId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        addOperationssRelatedByOpCdpId()
     */
    public function clearOperationssRelatedByOpCdpId()
    {
        $this->collOperationssRelatedByOpCdpId = null; // important to set this to null since that means it is uninitialized
        $this->collOperationssRelatedByOpCdpIdPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationssRelatedByOpCdpId collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationssRelatedByOpCdpId($v = true)
    {
        $this->collOperationssRelatedByOpCdpIdPartial = $v;
    }

    /**
     * Initializes the collOperationssRelatedByOpCdpId collection.
     *
     * By default this just sets the collOperationssRelatedByOpCdpId collection to an empty array (like clearcollOperationssRelatedByOpCdpId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationssRelatedByOpCdpId($overrideExisting = true)
    {
        if (null !== $this->collOperationssRelatedByOpCdpId && !$overrideExisting) {
            return;
        }
        $this->collOperationssRelatedByOpCdpId = new PropelObjectCollection();
        $this->collOperationssRelatedByOpCdpId->setModel('Operations');
    }

    /**
     * Gets an array of Operations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Operations[] List of Operations objects
     * @throws PropelException
     */
    public function getOperationssRelatedByOpCdpId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpCdpIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpCdpId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpCdpId) {
                // return empty collection
                $this->initOperationssRelatedByOpCdpId();
            } else {
                $collOperationssRelatedByOpCdpId = OperationsQuery::create(null, $criteria)
                    ->filterByUserCdp($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationssRelatedByOpCdpIdPartial && count($collOperationssRelatedByOpCdpId)) {
                      $this->initOperationssRelatedByOpCdpId(false);

                      foreach ($collOperationssRelatedByOpCdpId as $obj) {
                        if (false == $this->collOperationssRelatedByOpCdpId->contains($obj)) {
                          $this->collOperationssRelatedByOpCdpId->append($obj);
                        }
                      }

                      $this->collOperationssRelatedByOpCdpIdPartial = true;
                    }

                    $collOperationssRelatedByOpCdpId->getInternalIterator()->rewind();

                    return $collOperationssRelatedByOpCdpId;
                }

                if ($partial && $this->collOperationssRelatedByOpCdpId) {
                    foreach ($this->collOperationssRelatedByOpCdpId as $obj) {
                        if ($obj->isNew()) {
                            $collOperationssRelatedByOpCdpId[] = $obj;
                        }
                    }
                }

                $this->collOperationssRelatedByOpCdpId = $collOperationssRelatedByOpCdpId;
                $this->collOperationssRelatedByOpCdpIdPartial = false;
            }
        }

        return $this->collOperationssRelatedByOpCdpId;
    }

    /**
     * Sets a collection of OperationsRelatedByOpCdpId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationssRelatedByOpCdpId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setOperationssRelatedByOpCdpId(PropelCollection $operationssRelatedByOpCdpId, PropelPDO $con = null)
    {
        $operationssRelatedByOpCdpIdToDelete = $this->getOperationssRelatedByOpCdpId(new Criteria(), $con)->diff($operationssRelatedByOpCdpId);


        $this->operationssRelatedByOpCdpIdScheduledForDeletion = $operationssRelatedByOpCdpIdToDelete;

        foreach ($operationssRelatedByOpCdpIdToDelete as $operationsRelatedByOpCdpIdRemoved) {
            $operationsRelatedByOpCdpIdRemoved->setUserCdp(null);
        }

        $this->collOperationssRelatedByOpCdpId = null;
        foreach ($operationssRelatedByOpCdpId as $operationsRelatedByOpCdpId) {
            $this->addOperationsRelatedByOpCdpId($operationsRelatedByOpCdpId);
        }

        $this->collOperationssRelatedByOpCdpId = $operationssRelatedByOpCdpId;
        $this->collOperationssRelatedByOpCdpIdPartial = false;

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
    public function countOperationssRelatedByOpCdpId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpCdpIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpCdpId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpCdpId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationssRelatedByOpCdpId());
            }
            $query = OperationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUserCdp($this)
                ->count($con);
        }

        return count($this->collOperationssRelatedByOpCdpId);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return Users The current object (for fluent API support)
     */
    public function addOperationsRelatedByOpCdpId(Operations $l)
    {
        if ($this->collOperationssRelatedByOpCdpId === null) {
            $this->initOperationssRelatedByOpCdpId();
            $this->collOperationssRelatedByOpCdpIdPartial = true;
        }

        if (!in_array($l, $this->collOperationssRelatedByOpCdpId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationsRelatedByOpCdpId($l);

            if ($this->operationssRelatedByOpCdpIdScheduledForDeletion and $this->operationssRelatedByOpCdpIdScheduledForDeletion->contains($l)) {
                $this->operationssRelatedByOpCdpIdScheduledForDeletion->remove($this->operationssRelatedByOpCdpIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationsRelatedByOpCdpId $operationsRelatedByOpCdpId The operationsRelatedByOpCdpId object to add.
     */
    protected function doAddOperationsRelatedByOpCdpId($operationsRelatedByOpCdpId)
    {
        $this->collOperationssRelatedByOpCdpId[]= $operationsRelatedByOpCdpId;
        $operationsRelatedByOpCdpId->setUserCdp($this);
    }

    /**
     * @param	OperationsRelatedByOpCdpId $operationsRelatedByOpCdpId The operationsRelatedByOpCdpId object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeOperationsRelatedByOpCdpId($operationsRelatedByOpCdpId)
    {
        if ($this->getOperationssRelatedByOpCdpId()->contains($operationsRelatedByOpCdpId)) {
            $this->collOperationssRelatedByOpCdpId->remove($this->collOperationssRelatedByOpCdpId->search($operationsRelatedByOpCdpId));
            if (null === $this->operationssRelatedByOpCdpIdScheduledForDeletion) {
                $this->operationssRelatedByOpCdpIdScheduledForDeletion = clone $this->collOperationssRelatedByOpCdpId;
                $this->operationssRelatedByOpCdpIdScheduledForDeletion->clear();
            }
            $this->operationssRelatedByOpCdpIdScheduledForDeletion[]= $operationsRelatedByOpCdpId;
            $operationsRelatedByOpCdpId->setUserCdp(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinContactClient($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactClient', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinContactFacturation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ContactFacturation', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinClientContratOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientContratOptions', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinClientSiteForLog($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientSiteForLog', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinGedelogOperationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('GedelogOperationParams', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatus', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinRCustomActivites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RCustomActivites', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinROperationType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationType', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinROperationTypeSub($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSub', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinOperationsExt($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsExt', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinRDelaiDevis($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RDelaiDevis', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinInvoicingAddressContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('InvoicingAddressContact', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinOperationsRelatedByOpParentId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsRelatedByOpParentId', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinOperationUniverse($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationUniverse', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinOperationMedia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationMedia', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinOperationTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationTemplate', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related OperationssRelatedByOpCdpId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCdpIdJoinROperationClassifications($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationClassifications', $join_behavior);

        return $this->getOperationssRelatedByOpCdpId($query, $con);
    }

    /**
     * Clears out the collFactureEditionHistorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
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
     * If this Users is new, it will return
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
                    ->filterByFactReeditionUser($this)
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
     * @return Users The current object (for fluent API support)
     */
    public function setFactureEditionHistorys(PropelCollection $factureEditionHistorys, PropelPDO $con = null)
    {
        $factureEditionHistorysToDelete = $this->getFactureEditionHistorys(new Criteria(), $con)->diff($factureEditionHistorys);


        $this->factureEditionHistorysScheduledForDeletion = $factureEditionHistorysToDelete;

        foreach ($factureEditionHistorysToDelete as $factureEditionHistoryRemoved) {
            $factureEditionHistoryRemoved->setFactReeditionUser(null);
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
                ->filterByFactReeditionUser($this)
                ->count($con);
        }

        return count($this->collFactureEditionHistorys);
    }

    /**
     * Method called to associate a FactureEditionHistory object to this object
     * through the FactureEditionHistory foreign key attribute.
     *
     * @param    FactureEditionHistory $l FactureEditionHistory
     * @return Users The current object (for fluent API support)
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
        $factureEditionHistory->setFactReeditionUser($this);
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeFactureEditionHistory($factureEditionHistory)
    {
        if ($this->getFactureEditionHistorys()->contains($factureEditionHistory)) {
            $this->collFactureEditionHistorys->remove($this->collFactureEditionHistorys->search($factureEditionHistory));
            if (null === $this->factureEditionHistorysScheduledForDeletion) {
                $this->factureEditionHistorysScheduledForDeletion = clone $this->collFactureEditionHistorys;
                $this->factureEditionHistorysScheduledForDeletion->clear();
            }
            $this->factureEditionHistorysScheduledForDeletion[]= $factureEditionHistory;
            $factureEditionHistory->setFactReeditionUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinRFactureTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('RFactureTypes', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
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
     * Clears out the collUserKpiSettingss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        addUserKpiSettingss()
     */
    public function clearUserKpiSettingss()
    {
        $this->collUserKpiSettingss = null; // important to set this to null since that means it is uninitialized
        $this->collUserKpiSettingssPartial = null;

        return $this;
    }

    /**
     * reset is the collUserKpiSettingss collection loaded partially
     *
     * @return void
     */
    public function resetPartialUserKpiSettingss($v = true)
    {
        $this->collUserKpiSettingssPartial = $v;
    }

    /**
     * Initializes the collUserKpiSettingss collection.
     *
     * By default this just sets the collUserKpiSettingss collection to an empty array (like clearcollUserKpiSettingss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUserKpiSettingss($overrideExisting = true)
    {
        if (null !== $this->collUserKpiSettingss && !$overrideExisting) {
            return;
        }
        $this->collUserKpiSettingss = new PropelObjectCollection();
        $this->collUserKpiSettingss->setModel('UserKpiSettings');
    }

    /**
     * Gets an array of UserKpiSettings objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|UserKpiSettings[] List of UserKpiSettings objects
     * @throws PropelException
     */
    public function getUserKpiSettingss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUserKpiSettingssPartial && !$this->isNew();
        if (null === $this->collUserKpiSettingss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUserKpiSettingss) {
                // return empty collection
                $this->initUserKpiSettingss();
            } else {
                $collUserKpiSettingss = UserKpiSettingsQuery::create(null, $criteria)
                    ->filterByUsers($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUserKpiSettingssPartial && count($collUserKpiSettingss)) {
                      $this->initUserKpiSettingss(false);

                      foreach ($collUserKpiSettingss as $obj) {
                        if (false == $this->collUserKpiSettingss->contains($obj)) {
                          $this->collUserKpiSettingss->append($obj);
                        }
                      }

                      $this->collUserKpiSettingssPartial = true;
                    }

                    $collUserKpiSettingss->getInternalIterator()->rewind();

                    return $collUserKpiSettingss;
                }

                if ($partial && $this->collUserKpiSettingss) {
                    foreach ($this->collUserKpiSettingss as $obj) {
                        if ($obj->isNew()) {
                            $collUserKpiSettingss[] = $obj;
                        }
                    }
                }

                $this->collUserKpiSettingss = $collUserKpiSettingss;
                $this->collUserKpiSettingssPartial = false;
            }
        }

        return $this->collUserKpiSettingss;
    }

    /**
     * Sets a collection of UserKpiSettings objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $userKpiSettingss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setUserKpiSettingss(PropelCollection $userKpiSettingss, PropelPDO $con = null)
    {
        $userKpiSettingssToDelete = $this->getUserKpiSettingss(new Criteria(), $con)->diff($userKpiSettingss);


        $this->userKpiSettingssScheduledForDeletion = $userKpiSettingssToDelete;

        foreach ($userKpiSettingssToDelete as $userKpiSettingsRemoved) {
            $userKpiSettingsRemoved->setUsers(null);
        }

        $this->collUserKpiSettingss = null;
        foreach ($userKpiSettingss as $userKpiSettings) {
            $this->addUserKpiSettings($userKpiSettings);
        }

        $this->collUserKpiSettingss = $userKpiSettingss;
        $this->collUserKpiSettingssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related UserKpiSettings objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related UserKpiSettings objects.
     * @throws PropelException
     */
    public function countUserKpiSettingss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUserKpiSettingssPartial && !$this->isNew();
        if (null === $this->collUserKpiSettingss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUserKpiSettingss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUserKpiSettingss());
            }
            $query = UserKpiSettingsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsers($this)
                ->count($con);
        }

        return count($this->collUserKpiSettingss);
    }

    /**
     * Method called to associate a UserKpiSettings object to this object
     * through the UserKpiSettings foreign key attribute.
     *
     * @param    UserKpiSettings $l UserKpiSettings
     * @return Users The current object (for fluent API support)
     */
    public function addUserKpiSettings(UserKpiSettings $l)
    {
        if ($this->collUserKpiSettingss === null) {
            $this->initUserKpiSettingss();
            $this->collUserKpiSettingssPartial = true;
        }

        if (!in_array($l, $this->collUserKpiSettingss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUserKpiSettings($l);

            if ($this->userKpiSettingssScheduledForDeletion and $this->userKpiSettingssScheduledForDeletion->contains($l)) {
                $this->userKpiSettingssScheduledForDeletion->remove($this->userKpiSettingssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	UserKpiSettings $userKpiSettings The userKpiSettings object to add.
     */
    protected function doAddUserKpiSettings($userKpiSettings)
    {
        $this->collUserKpiSettingss[]= $userKpiSettings;
        $userKpiSettings->setUsers($this);
    }

    /**
     * @param	UserKpiSettings $userKpiSettings The userKpiSettings object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeUserKpiSettings($userKpiSettings)
    {
        if ($this->getUserKpiSettingss()->contains($userKpiSettings)) {
            $this->collUserKpiSettingss->remove($this->collUserKpiSettingss->search($userKpiSettings));
            if (null === $this->userKpiSettingssScheduledForDeletion) {
                $this->userKpiSettingssScheduledForDeletion = clone $this->collUserKpiSettingss;
                $this->userKpiSettingssScheduledForDeletion->clear();
            }
            $this->userKpiSettingssScheduledForDeletion[]= clone $userKpiSettings;
            $userKpiSettings->setUsers(null);
        }

        return $this;
    }

    /**
     * Clears out the collLnkGrpValidationUserss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        addLnkGrpValidationUserss()
     */
    public function clearLnkGrpValidationUserss()
    {
        $this->collLnkGrpValidationUserss = null; // important to set this to null since that means it is uninitialized
        $this->collLnkGrpValidationUserssPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkGrpValidationUserss collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkGrpValidationUserss($v = true)
    {
        $this->collLnkGrpValidationUserssPartial = $v;
    }

    /**
     * Initializes the collLnkGrpValidationUserss collection.
     *
     * By default this just sets the collLnkGrpValidationUserss collection to an empty array (like clearcollLnkGrpValidationUserss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkGrpValidationUserss($overrideExisting = true)
    {
        if (null !== $this->collLnkGrpValidationUserss && !$overrideExisting) {
            return;
        }
        $this->collLnkGrpValidationUserss = new PropelObjectCollection();
        $this->collLnkGrpValidationUserss->setModel('LnkGrpValidationUsers');
    }

    /**
     * Gets an array of LnkGrpValidationUsers objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkGrpValidationUsers[] List of LnkGrpValidationUsers objects
     * @throws PropelException
     */
    public function getLnkGrpValidationUserss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkGrpValidationUserssPartial && !$this->isNew();
        if (null === $this->collLnkGrpValidationUserss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkGrpValidationUserss) {
                // return empty collection
                $this->initLnkGrpValidationUserss();
            } else {
                $collLnkGrpValidationUserss = LnkGrpValidationUsersQuery::create(null, $criteria)
                    ->filterByValidationUser($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkGrpValidationUserssPartial && count($collLnkGrpValidationUserss)) {
                      $this->initLnkGrpValidationUserss(false);

                      foreach ($collLnkGrpValidationUserss as $obj) {
                        if (false == $this->collLnkGrpValidationUserss->contains($obj)) {
                          $this->collLnkGrpValidationUserss->append($obj);
                        }
                      }

                      $this->collLnkGrpValidationUserssPartial = true;
                    }

                    $collLnkGrpValidationUserss->getInternalIterator()->rewind();

                    return $collLnkGrpValidationUserss;
                }

                if ($partial && $this->collLnkGrpValidationUserss) {
                    foreach ($this->collLnkGrpValidationUserss as $obj) {
                        if ($obj->isNew()) {
                            $collLnkGrpValidationUserss[] = $obj;
                        }
                    }
                }

                $this->collLnkGrpValidationUserss = $collLnkGrpValidationUserss;
                $this->collLnkGrpValidationUserssPartial = false;
            }
        }

        return $this->collLnkGrpValidationUserss;
    }

    /**
     * Sets a collection of LnkGrpValidationUsers objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkGrpValidationUserss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setLnkGrpValidationUserss(PropelCollection $lnkGrpValidationUserss, PropelPDO $con = null)
    {
        $lnkGrpValidationUserssToDelete = $this->getLnkGrpValidationUserss(new Criteria(), $con)->diff($lnkGrpValidationUserss);


        $this->lnkGrpValidationUserssScheduledForDeletion = $lnkGrpValidationUserssToDelete;

        foreach ($lnkGrpValidationUserssToDelete as $lnkGrpValidationUsersRemoved) {
            $lnkGrpValidationUsersRemoved->setValidationUser(null);
        }

        $this->collLnkGrpValidationUserss = null;
        foreach ($lnkGrpValidationUserss as $lnkGrpValidationUsers) {
            $this->addLnkGrpValidationUsers($lnkGrpValidationUsers);
        }

        $this->collLnkGrpValidationUserss = $lnkGrpValidationUserss;
        $this->collLnkGrpValidationUserssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkGrpValidationUsers objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkGrpValidationUsers objects.
     * @throws PropelException
     */
    public function countLnkGrpValidationUserss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkGrpValidationUserssPartial && !$this->isNew();
        if (null === $this->collLnkGrpValidationUserss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkGrpValidationUserss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkGrpValidationUserss());
            }
            $query = LnkGrpValidationUsersQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByValidationUser($this)
                ->count($con);
        }

        return count($this->collLnkGrpValidationUserss);
    }

    /**
     * Method called to associate a LnkGrpValidationUsers object to this object
     * through the LnkGrpValidationUsers foreign key attribute.
     *
     * @param    LnkGrpValidationUsers $l LnkGrpValidationUsers
     * @return Users The current object (for fluent API support)
     */
    public function addLnkGrpValidationUsers(LnkGrpValidationUsers $l)
    {
        if ($this->collLnkGrpValidationUserss === null) {
            $this->initLnkGrpValidationUserss();
            $this->collLnkGrpValidationUserssPartial = true;
        }

        if (!in_array($l, $this->collLnkGrpValidationUserss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkGrpValidationUsers($l);

            if ($this->lnkGrpValidationUserssScheduledForDeletion and $this->lnkGrpValidationUserssScheduledForDeletion->contains($l)) {
                $this->lnkGrpValidationUserssScheduledForDeletion->remove($this->lnkGrpValidationUserssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkGrpValidationUsers $lnkGrpValidationUsers The lnkGrpValidationUsers object to add.
     */
    protected function doAddLnkGrpValidationUsers($lnkGrpValidationUsers)
    {
        $this->collLnkGrpValidationUserss[]= $lnkGrpValidationUsers;
        $lnkGrpValidationUsers->setValidationUser($this);
    }

    /**
     * @param	LnkGrpValidationUsers $lnkGrpValidationUsers The lnkGrpValidationUsers object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeLnkGrpValidationUsers($lnkGrpValidationUsers)
    {
        if ($this->getLnkGrpValidationUserss()->contains($lnkGrpValidationUsers)) {
            $this->collLnkGrpValidationUserss->remove($this->collLnkGrpValidationUserss->search($lnkGrpValidationUsers));
            if (null === $this->lnkGrpValidationUserssScheduledForDeletion) {
                $this->lnkGrpValidationUserssScheduledForDeletion = clone $this->collLnkGrpValidationUserss;
                $this->lnkGrpValidationUserssScheduledForDeletion->clear();
            }
            $this->lnkGrpValidationUserssScheduledForDeletion[]= $lnkGrpValidationUsers;
            $lnkGrpValidationUsers->setValidationUser(null);
        }

        return $this;
    }

    /**
     * Clears out the collLnkUsersOrganisationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        addLnkUsersOrganisationss()
     */
    public function clearLnkUsersOrganisationss()
    {
        $this->collLnkUsersOrganisationss = null; // important to set this to null since that means it is uninitialized
        $this->collLnkUsersOrganisationssPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkUsersOrganisationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkUsersOrganisationss($v = true)
    {
        $this->collLnkUsersOrganisationssPartial = $v;
    }

    /**
     * Initializes the collLnkUsersOrganisationss collection.
     *
     * By default this just sets the collLnkUsersOrganisationss collection to an empty array (like clearcollLnkUsersOrganisationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkUsersOrganisationss($overrideExisting = true)
    {
        if (null !== $this->collLnkUsersOrganisationss && !$overrideExisting) {
            return;
        }
        $this->collLnkUsersOrganisationss = new PropelObjectCollection();
        $this->collLnkUsersOrganisationss->setModel('LnkUsersOrganisations');
    }

    /**
     * Gets an array of LnkUsersOrganisations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkUsersOrganisations[] List of LnkUsersOrganisations objects
     * @throws PropelException
     */
    public function getLnkUsersOrganisationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkUsersOrganisationssPartial && !$this->isNew();
        if (null === $this->collLnkUsersOrganisationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkUsersOrganisationss) {
                // return empty collection
                $this->initLnkUsersOrganisationss();
            } else {
                $collLnkUsersOrganisationss = LnkUsersOrganisationsQuery::create(null, $criteria)
                    ->filterByUsers($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkUsersOrganisationssPartial && count($collLnkUsersOrganisationss)) {
                      $this->initLnkUsersOrganisationss(false);

                      foreach ($collLnkUsersOrganisationss as $obj) {
                        if (false == $this->collLnkUsersOrganisationss->contains($obj)) {
                          $this->collLnkUsersOrganisationss->append($obj);
                        }
                      }

                      $this->collLnkUsersOrganisationssPartial = true;
                    }

                    $collLnkUsersOrganisationss->getInternalIterator()->rewind();

                    return $collLnkUsersOrganisationss;
                }

                if ($partial && $this->collLnkUsersOrganisationss) {
                    foreach ($this->collLnkUsersOrganisationss as $obj) {
                        if ($obj->isNew()) {
                            $collLnkUsersOrganisationss[] = $obj;
                        }
                    }
                }

                $this->collLnkUsersOrganisationss = $collLnkUsersOrganisationss;
                $this->collLnkUsersOrganisationssPartial = false;
            }
        }

        return $this->collLnkUsersOrganisationss;
    }

    /**
     * Sets a collection of LnkUsersOrganisations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkUsersOrganisationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setLnkUsersOrganisationss(PropelCollection $lnkUsersOrganisationss, PropelPDO $con = null)
    {
        $lnkUsersOrganisationssToDelete = $this->getLnkUsersOrganisationss(new Criteria(), $con)->diff($lnkUsersOrganisationss);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->lnkUsersOrganisationssScheduledForDeletion = clone $lnkUsersOrganisationssToDelete;

        foreach ($lnkUsersOrganisationssToDelete as $lnkUsersOrganisationsRemoved) {
            $lnkUsersOrganisationsRemoved->setUsers(null);
        }

        $this->collLnkUsersOrganisationss = null;
        foreach ($lnkUsersOrganisationss as $lnkUsersOrganisations) {
            $this->addLnkUsersOrganisations($lnkUsersOrganisations);
        }

        $this->collLnkUsersOrganisationss = $lnkUsersOrganisationss;
        $this->collLnkUsersOrganisationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkUsersOrganisations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkUsersOrganisations objects.
     * @throws PropelException
     */
    public function countLnkUsersOrganisationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkUsersOrganisationssPartial && !$this->isNew();
        if (null === $this->collLnkUsersOrganisationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkUsersOrganisationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkUsersOrganisationss());
            }
            $query = LnkUsersOrganisationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsers($this)
                ->count($con);
        }

        return count($this->collLnkUsersOrganisationss);
    }

    /**
     * Method called to associate a LnkUsersOrganisations object to this object
     * through the LnkUsersOrganisations foreign key attribute.
     *
     * @param    LnkUsersOrganisations $l LnkUsersOrganisations
     * @return Users The current object (for fluent API support)
     */
    public function addLnkUsersOrganisations(LnkUsersOrganisations $l)
    {
        if ($this->collLnkUsersOrganisationss === null) {
            $this->initLnkUsersOrganisationss();
            $this->collLnkUsersOrganisationssPartial = true;
        }

        if (!in_array($l, $this->collLnkUsersOrganisationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkUsersOrganisations($l);

            if ($this->lnkUsersOrganisationssScheduledForDeletion and $this->lnkUsersOrganisationssScheduledForDeletion->contains($l)) {
                $this->lnkUsersOrganisationssScheduledForDeletion->remove($this->lnkUsersOrganisationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkUsersOrganisations $lnkUsersOrganisations The lnkUsersOrganisations object to add.
     */
    protected function doAddLnkUsersOrganisations($lnkUsersOrganisations)
    {
        $this->collLnkUsersOrganisationss[]= $lnkUsersOrganisations;
        $lnkUsersOrganisations->setUsers($this);
    }

    /**
     * @param	LnkUsersOrganisations $lnkUsersOrganisations The lnkUsersOrganisations object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeLnkUsersOrganisations($lnkUsersOrganisations)
    {
        if ($this->getLnkUsersOrganisationss()->contains($lnkUsersOrganisations)) {
            $this->collLnkUsersOrganisationss->remove($this->collLnkUsersOrganisationss->search($lnkUsersOrganisations));
            if (null === $this->lnkUsersOrganisationssScheduledForDeletion) {
                $this->lnkUsersOrganisationssScheduledForDeletion = clone $this->collLnkUsersOrganisationss;
                $this->lnkUsersOrganisationssScheduledForDeletion->clear();
            }
            $this->lnkUsersOrganisationssScheduledForDeletion[]= clone $lnkUsersOrganisations;
            $lnkUsersOrganisations->setUsers(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Users is new, it will return
     * an empty collection; or if this Users has previously
     * been saved, it will retrieve related LnkUsersOrganisationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Users.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkUsersOrganisations[] List of LnkUsersOrganisations objects
     */
    public function getLnkUsersOrganisationssJoinOrganisations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkUsersOrganisationsQuery::create(null, $criteria);
        $query->joinWith('Organisations', $join_behavior);

        return $this->getLnkUsersOrganisationss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->user_id = null;
        $this->user_login = null;
        $this->user_nom = null;
        $this->user_prenom = null;
        $this->user_mail = null;
        $this->user_phone = null;
        $this->user_mobile = null;
        $this->r_user_type_id = null;
        $this->user_language = null;
        $this->user_password = null;
        $this->user_password_salt = null;
        $this->date_create = null;
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
            if ($this->collClientss) {
                foreach ($this->collClientss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkUsersAclGroupss) {
                foreach ($this->collLnkUsersAclGroupss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationPrestationss) {
                foreach ($this->collOperationPrestationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationStatutss) {
                foreach ($this->collOperationStatutss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationssRelatedByOpDcId) {
                foreach ($this->collOperationssRelatedByOpDcId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationssRelatedByOpCpId) {
                foreach ($this->collOperationssRelatedByOpCpId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationssRelatedByOpCdpId) {
                foreach ($this->collOperationssRelatedByOpCdpId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFactureEditionHistorys) {
                foreach ($this->collFactureEditionHistorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUserKpiSettingss) {
                foreach ($this->collUserKpiSettingss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkGrpValidationUserss) {
                foreach ($this->collLnkGrpValidationUserss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkUsersOrganisationss) {
                foreach ($this->collLnkUsersOrganisationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aRUserTypes instanceof Persistent) {
              $this->aRUserTypes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collClientss instanceof PropelCollection) {
            $this->collClientss->clearIterator();
        }
        $this->collClientss = null;
        if ($this->collLnkUsersAclGroupss instanceof PropelCollection) {
            $this->collLnkUsersAclGroupss->clearIterator();
        }
        $this->collLnkUsersAclGroupss = null;
        if ($this->collOperationPrestationss instanceof PropelCollection) {
            $this->collOperationPrestationss->clearIterator();
        }
        $this->collOperationPrestationss = null;
        if ($this->collOperationStatutss instanceof PropelCollection) {
            $this->collOperationStatutss->clearIterator();
        }
        $this->collOperationStatutss = null;
        if ($this->collOperationssRelatedByOpDcId instanceof PropelCollection) {
            $this->collOperationssRelatedByOpDcId->clearIterator();
        }
        $this->collOperationssRelatedByOpDcId = null;
        if ($this->collOperationssRelatedByOpCpId instanceof PropelCollection) {
            $this->collOperationssRelatedByOpCpId->clearIterator();
        }
        $this->collOperationssRelatedByOpCpId = null;
        if ($this->collOperationssRelatedByOpCdpId instanceof PropelCollection) {
            $this->collOperationssRelatedByOpCdpId->clearIterator();
        }
        $this->collOperationssRelatedByOpCdpId = null;
        if ($this->collFactureEditionHistorys instanceof PropelCollection) {
            $this->collFactureEditionHistorys->clearIterator();
        }
        $this->collFactureEditionHistorys = null;
        if ($this->collUserKpiSettingss instanceof PropelCollection) {
            $this->collUserKpiSettingss->clearIterator();
        }
        $this->collUserKpiSettingss = null;
        if ($this->collLnkGrpValidationUserss instanceof PropelCollection) {
            $this->collLnkGrpValidationUserss->clearIterator();
        }
        $this->collLnkGrpValidationUserss = null;
        if ($this->collLnkUsersOrganisationss instanceof PropelCollection) {
            $this->collLnkUsersOrganisationss->clearIterator();
        }
        $this->collLnkUsersOrganisationss = null;
        $this->aRUserTypes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UsersPeer::DEFAULT_STRING_FORMAT);
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
                return BaseUsersPeer::getConnection();
            }
}
