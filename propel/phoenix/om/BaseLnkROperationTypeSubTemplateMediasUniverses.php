<?php


/**
 * Base class that represents a row from the 'lnk_r_operation_type_sub_template_medias_universes' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkROperationTypeSubTemplateMediasUniverses extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LnkROperationTypeSubTemplateMediasUniversesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LnkROperationTypeSubTemplateMediasUniversesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the lnk_r_operation_type_sub_template_media_universe_id field.
     * @var        int
     */
    protected $lnk_r_operation_type_sub_template_media_universe_id;

    /**
     * The value for the lnk_r_operation_type_sub_template_media_universe_ost_id field.
     * @var        int
     */
    protected $lnk_r_operation_type_sub_template_media_universe_ost_id;

    /**
     * The value for the lnk_r_operation_type_sub_template_media_universe_tpl_id field.
     * @var        int
     */
    protected $lnk_r_operation_type_sub_template_media_universe_tpl_id;

    /**
     * The value for the lnk_r_operation_type_sub_template_media_universe_universe_id field.
     * @var        int
     */
    protected $lnk_r_operation_type_sub_template_media_universe_universe_id;

    /**
     * The value for the lnk_r_operation_type_sub_template_media_universe_media_id field.
     * @var        int
     */
    protected $lnk_r_operation_type_sub_template_media_universe_media_id;

    /**
     * @var        ROperationTypeSub
     */
    protected $aOperationTypeSub;

    /**
     * @var        ROperationTypeSubTpl
     */
    protected $aOerationTypeSubTemplate;

    /**
     * @var        ROperationUniverses
     */
    protected $aOperationUniverse;

    /**
     * @var        ROperationMedias
     */
    protected $aOperationMedia;

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
     * Get the [lnk_r_operation_type_sub_template_media_universe_id] column value.
     *
     * @return int
     */
    public function getLnkROperationTypeSubTemplateMediaUniverseId()
    {

        return $this->lnk_r_operation_type_sub_template_media_universe_id;
    }

    /**
     * Get the [lnk_r_operation_type_sub_template_media_universe_ost_id] column value.
     *
     * @return int
     */
    public function getLnkROperationTypeSubTemplateMediaUniverseOstId()
    {

        return $this->lnk_r_operation_type_sub_template_media_universe_ost_id;
    }

    /**
     * Get the [lnk_r_operation_type_sub_template_media_universe_tpl_id] column value.
     *
     * @return int
     */
    public function getLnkROperationTypeSubTemplateMediaUniverseTplId()
    {

        return $this->lnk_r_operation_type_sub_template_media_universe_tpl_id;
    }

    /**
     * Get the [lnk_r_operation_type_sub_template_media_universe_universe_id] column value.
     *
     * @return int
     */
    public function getLnkROperationTypeSubTemplateMediaUniverseUniverseId()
    {

        return $this->lnk_r_operation_type_sub_template_media_universe_universe_id;
    }

    /**
     * Get the [lnk_r_operation_type_sub_template_media_universe_media_id] column value.
     *
     * @return int
     */
    public function getLnkROperationTypeSubTemplateMediaUniverseMediaId()
    {

        return $this->lnk_r_operation_type_sub_template_media_universe_media_id;
    }

    /**
     * Set the value of [lnk_r_operation_type_sub_template_media_universe_id] column.
     *
     * @param  int $v new value
     * @return LnkROperationTypeSubTemplateMediasUniverses The current object (for fluent API support)
     */
    public function setLnkROperationTypeSubTemplateMediaUniverseId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->lnk_r_operation_type_sub_template_media_universe_id !== $v) {
                    $this->lnk_r_operation_type_sub_template_media_universe_id = $v;
                    $this->modifiedColumns[] = LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID;
                }


        return $this;
    } // setLnkROperationTypeSubTemplateMediaUniverseId()

    /**
     * Set the value of [lnk_r_operation_type_sub_template_media_universe_ost_id] column.
     *
     * @param  int $v new value
     * @return LnkROperationTypeSubTemplateMediasUniverses The current object (for fluent API support)
     */
    public function setLnkROperationTypeSubTemplateMediaUniverseOstId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->lnk_r_operation_type_sub_template_media_universe_ost_id !== $v) {
                    $this->lnk_r_operation_type_sub_template_media_universe_ost_id = $v;
                    $this->modifiedColumns[] = LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID;
                }

        if ($this->aOperationTypeSub !== null && $this->aOperationTypeSub->getOstId() !== $v) {
            $this->aOperationTypeSub = null;
        }


        return $this;
    } // setLnkROperationTypeSubTemplateMediaUniverseOstId()

    /**
     * Set the value of [lnk_r_operation_type_sub_template_media_universe_tpl_id] column.
     *
     * @param  int $v new value
     * @return LnkROperationTypeSubTemplateMediasUniverses The current object (for fluent API support)
     */
    public function setLnkROperationTypeSubTemplateMediaUniverseTplId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->lnk_r_operation_type_sub_template_media_universe_tpl_id !== $v) {
                    $this->lnk_r_operation_type_sub_template_media_universe_tpl_id = $v;
                    $this->modifiedColumns[] = LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID;
                }

        if ($this->aOerationTypeSubTemplate !== null && $this->aOerationTypeSubTemplate->getOstTplId() !== $v) {
            $this->aOerationTypeSubTemplate = null;
        }


        return $this;
    } // setLnkROperationTypeSubTemplateMediaUniverseTplId()

    /**
     * Set the value of [lnk_r_operation_type_sub_template_media_universe_universe_id] column.
     *
     * @param  int $v new value
     * @return LnkROperationTypeSubTemplateMediasUniverses The current object (for fluent API support)
     */
    public function setLnkROperationTypeSubTemplateMediaUniverseUniverseId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->lnk_r_operation_type_sub_template_media_universe_universe_id !== $v) {
                    $this->lnk_r_operation_type_sub_template_media_universe_universe_id = $v;
                    $this->modifiedColumns[] = LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID;
                }

        if ($this->aOperationUniverse !== null && $this->aOperationUniverse->getROperationUniverseId() !== $v) {
            $this->aOperationUniverse = null;
        }


        return $this;
    } // setLnkROperationTypeSubTemplateMediaUniverseUniverseId()

    /**
     * Set the value of [lnk_r_operation_type_sub_template_media_universe_media_id] column.
     *
     * @param  int $v new value
     * @return LnkROperationTypeSubTemplateMediasUniverses The current object (for fluent API support)
     */
    public function setLnkROperationTypeSubTemplateMediaUniverseMediaId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->lnk_r_operation_type_sub_template_media_universe_media_id !== $v) {
                    $this->lnk_r_operation_type_sub_template_media_universe_media_id = $v;
                    $this->modifiedColumns[] = LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID;
                }

        if ($this->aOperationMedia !== null && $this->aOperationMedia->getROperationMediaId() !== $v) {
            $this->aOperationMedia = null;
        }


        return $this;
    } // setLnkROperationTypeSubTemplateMediaUniverseMediaId()

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

            $this->lnk_r_operation_type_sub_template_media_universe_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->lnk_r_operation_type_sub_template_media_universe_ost_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->lnk_r_operation_type_sub_template_media_universe_tpl_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->lnk_r_operation_type_sub_template_media_universe_universe_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->lnk_r_operation_type_sub_template_media_universe_media_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating LnkROperationTypeSubTemplateMediasUniverses object", $e);
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

        if ($this->aOperationTypeSub !== null && $this->lnk_r_operation_type_sub_template_media_universe_ost_id !== $this->aOperationTypeSub->getOstId()) {
            $this->aOperationTypeSub = null;
        }
        if ($this->aOerationTypeSubTemplate !== null && $this->lnk_r_operation_type_sub_template_media_universe_tpl_id !== $this->aOerationTypeSubTemplate->getOstTplId()) {
            $this->aOerationTypeSubTemplate = null;
        }
        if ($this->aOperationUniverse !== null && $this->lnk_r_operation_type_sub_template_media_universe_universe_id !== $this->aOperationUniverse->getROperationUniverseId()) {
            $this->aOperationUniverse = null;
        }
        if ($this->aOperationMedia !== null && $this->lnk_r_operation_type_sub_template_media_universe_media_id !== $this->aOperationMedia->getROperationMediaId()) {
            $this->aOperationMedia = null;
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
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LnkROperationTypeSubTemplateMediasUniversesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperationTypeSub = null;
            $this->aOerationTypeSubTemplate = null;
            $this->aOperationUniverse = null;
            $this->aOperationMedia = null;
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
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LnkROperationTypeSubTemplateMediasUniversesQuery::create()
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
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($this);
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

            if ($this->aOperationTypeSub !== null) {
                if ($this->aOperationTypeSub->isModified() || $this->aOperationTypeSub->isNew()) {
                    $affectedRows += $this->aOperationTypeSub->save($con);
                }
                $this->setOperationTypeSub($this->aOperationTypeSub);
            }

            if ($this->aOerationTypeSubTemplate !== null) {
                if ($this->aOerationTypeSubTemplate->isModified() || $this->aOerationTypeSubTemplate->isNew()) {
                    $affectedRows += $this->aOerationTypeSubTemplate->save($con);
                }
                $this->setOerationTypeSubTemplate($this->aOerationTypeSubTemplate);
            }

            if ($this->aOperationUniverse !== null) {
                if ($this->aOperationUniverse->isModified() || $this->aOperationUniverse->isNew()) {
                    $affectedRows += $this->aOperationUniverse->save($con);
                }
                $this->setOperationUniverse($this->aOperationUniverse);
            }

            if ($this->aOperationMedia !== null) {
                if ($this->aOperationMedia->isModified() || $this->aOperationMedia->isNew()) {
                    $affectedRows += $this->aOperationMedia->save($con);
                }
                $this->setOperationMedia($this->aOperationMedia);
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

        $this->modifiedColumns[] = LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID;
        if (null !== $this->lnk_r_operation_type_sub_template_media_universe_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`lnk_r_operation_type_sub_template_media_universe_id`';
        }
        if ($this->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID)) {
            $modifiedColumns[':p' . $index++]  = '`lnk_r_operation_type_sub_template_media_universe_ost_id`';
        }
        if ($this->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`lnk_r_operation_type_sub_template_media_universe_tpl_id`';
        }
        if ($this->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`lnk_r_operation_type_sub_template_media_universe_universe_id`';
        }
        if ($this->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID)) {
            $modifiedColumns[':p' . $index++]  = '`lnk_r_operation_type_sub_template_media_universe_media_id`';
        }

        $sql = sprintf(
            'INSERT INTO `lnk_r_operation_type_sub_template_medias_universes` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`lnk_r_operation_type_sub_template_media_universe_id`':
                        $stmt->bindValue($identifier, $this->lnk_r_operation_type_sub_template_media_universe_id, PDO::PARAM_INT);
                        break;
                    case '`lnk_r_operation_type_sub_template_media_universe_ost_id`':
                        $stmt->bindValue($identifier, $this->lnk_r_operation_type_sub_template_media_universe_ost_id, PDO::PARAM_INT);
                        break;
                    case '`lnk_r_operation_type_sub_template_media_universe_tpl_id`':
                        $stmt->bindValue($identifier, $this->lnk_r_operation_type_sub_template_media_universe_tpl_id, PDO::PARAM_INT);
                        break;
                    case '`lnk_r_operation_type_sub_template_media_universe_universe_id`':
                        $stmt->bindValue($identifier, $this->lnk_r_operation_type_sub_template_media_universe_universe_id, PDO::PARAM_INT);
                        break;
                    case '`lnk_r_operation_type_sub_template_media_universe_media_id`':
                        $stmt->bindValue($identifier, $this->lnk_r_operation_type_sub_template_media_universe_media_id, PDO::PARAM_INT);
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
        $this->setLnkROperationTypeSubTemplateMediaUniverseId($pk);

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

            if ($this->aOperationTypeSub !== null) {
                if (!$this->aOperationTypeSub->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationTypeSub->getValidationFailures());
                }
            }

            if ($this->aOerationTypeSubTemplate !== null) {
                if (!$this->aOerationTypeSubTemplate->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOerationTypeSubTemplate->getValidationFailures());
                }
            }

            if ($this->aOperationUniverse !== null) {
                if (!$this->aOperationUniverse->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationUniverse->getValidationFailures());
                }
            }

            if ($this->aOperationMedia !== null) {
                if (!$this->aOperationMedia->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperationMedia->getValidationFailures());
                }
            }


            if (($retval = LnkROperationTypeSubTemplateMediasUniversesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = LnkROperationTypeSubTemplateMediasUniversesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLnkROperationTypeSubTemplateMediaUniverseId();
                break;
            case 1:
                return $this->getLnkROperationTypeSubTemplateMediaUniverseOstId();
                break;
            case 2:
                return $this->getLnkROperationTypeSubTemplateMediaUniverseTplId();
                break;
            case 3:
                return $this->getLnkROperationTypeSubTemplateMediaUniverseUniverseId();
                break;
            case 4:
                return $this->getLnkROperationTypeSubTemplateMediaUniverseMediaId();
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
        if (isset($alreadyDumpedObjects['LnkROperationTypeSubTemplateMediasUniverses'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['LnkROperationTypeSubTemplateMediasUniverses'][$this->getPrimaryKey()] = true;
        $keys = LnkROperationTypeSubTemplateMediasUniversesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLnkROperationTypeSubTemplateMediaUniverseId(),
            $keys[1] => $this->getLnkROperationTypeSubTemplateMediaUniverseOstId(),
            $keys[2] => $this->getLnkROperationTypeSubTemplateMediaUniverseTplId(),
            $keys[3] => $this->getLnkROperationTypeSubTemplateMediaUniverseUniverseId(),
            $keys[4] => $this->getLnkROperationTypeSubTemplateMediaUniverseMediaId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperationTypeSub) {
                $result['OperationTypeSub'] = $this->aOperationTypeSub->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOerationTypeSubTemplate) {
                $result['OerationTypeSubTemplate'] = $this->aOerationTypeSubTemplate->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationUniverse) {
                $result['OperationUniverse'] = $this->aOperationUniverse->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOperationMedia) {
                $result['OperationMedia'] = $this->aOperationMedia->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = LnkROperationTypeSubTemplateMediasUniversesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLnkROperationTypeSubTemplateMediaUniverseId($value);
                break;
            case 1:
                $this->setLnkROperationTypeSubTemplateMediaUniverseOstId($value);
                break;
            case 2:
                $this->setLnkROperationTypeSubTemplateMediaUniverseTplId($value);
                break;
            case 3:
                $this->setLnkROperationTypeSubTemplateMediaUniverseUniverseId($value);
                break;
            case 4:
                $this->setLnkROperationTypeSubTemplateMediaUniverseMediaId($value);
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
        $keys = LnkROperationTypeSubTemplateMediasUniversesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLnkROperationTypeSubTemplateMediaUniverseId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLnkROperationTypeSubTemplateMediaUniverseOstId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLnkROperationTypeSubTemplateMediaUniverseTplId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLnkROperationTypeSubTemplateMediaUniverseUniverseId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLnkROperationTypeSubTemplateMediaUniverseMediaId($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($this->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID)) $criteria->add(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $this->lnk_r_operation_type_sub_template_media_universe_id);
        if ($this->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID)) $criteria->add(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, $this->lnk_r_operation_type_sub_template_media_universe_ost_id);
        if ($this->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID)) $criteria->add(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, $this->lnk_r_operation_type_sub_template_media_universe_tpl_id);
        if ($this->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID)) $criteria->add(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, $this->lnk_r_operation_type_sub_template_media_universe_universe_id);
        if ($this->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID)) $criteria->add(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, $this->lnk_r_operation_type_sub_template_media_universe_media_id);

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
        $criteria = new Criteria(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        $criteria->add(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $this->lnk_r_operation_type_sub_template_media_universe_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getLnkROperationTypeSubTemplateMediaUniverseId();
    }

    /**
     * Generic method to set the primary key (lnk_r_operation_type_sub_template_media_universe_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setLnkROperationTypeSubTemplateMediaUniverseId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getLnkROperationTypeSubTemplateMediaUniverseId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of LnkROperationTypeSubTemplateMediasUniverses (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLnkROperationTypeSubTemplateMediaUniverseOstId($this->getLnkROperationTypeSubTemplateMediaUniverseOstId());
        $copyObj->setLnkROperationTypeSubTemplateMediaUniverseTplId($this->getLnkROperationTypeSubTemplateMediaUniverseTplId());
        $copyObj->setLnkROperationTypeSubTemplateMediaUniverseUniverseId($this->getLnkROperationTypeSubTemplateMediaUniverseUniverseId());
        $copyObj->setLnkROperationTypeSubTemplateMediaUniverseMediaId($this->getLnkROperationTypeSubTemplateMediaUniverseMediaId());

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
            $copyObj->setLnkROperationTypeSubTemplateMediaUniverseId(NULL); // this is a auto-increment column, so set to default value
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
     * @return LnkROperationTypeSubTemplateMediasUniverses Clone of current object.
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
     * @return LnkROperationTypeSubTemplateMediasUniversesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LnkROperationTypeSubTemplateMediasUniversesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ROperationTypeSub object.
     *
     * @param                  ROperationTypeSub $v
     * @return LnkROperationTypeSubTemplateMediasUniverses The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationTypeSub(ROperationTypeSub $v = null)
    {
        if ($v === null) {
            $this->setLnkROperationTypeSubTemplateMediaUniverseOstId(NULL);
        } else {
            $this->setLnkROperationTypeSubTemplateMediaUniverseOstId($v->getOstId());
        }

        $this->aOperationTypeSub = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationTypeSub object, it will not be re-added.
        if ($v !== null) {
            $v->addLnkROperationTypeSubTemplateMediasUniverses($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationTypeSub object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationTypeSub The associated ROperationTypeSub object.
     * @throws PropelException
     */
    public function getOperationTypeSub(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationTypeSub === null && ($this->lnk_r_operation_type_sub_template_media_universe_ost_id !== null) && $doQuery) {
            $this->aOperationTypeSub = ROperationTypeSubQuery::create()->findPk($this->lnk_r_operation_type_sub_template_media_universe_ost_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationTypeSub->addLnkROperationTypeSubTemplateMediasUniversess($this);
             */
        }

        return $this->aOperationTypeSub;
    }

    /**
     * Declares an association between this object and a ROperationTypeSubTpl object.
     *
     * @param                  ROperationTypeSubTpl $v
     * @return LnkROperationTypeSubTemplateMediasUniverses The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOerationTypeSubTemplate(ROperationTypeSubTpl $v = null)
    {
        if ($v === null) {
            $this->setLnkROperationTypeSubTemplateMediaUniverseTplId(NULL);
        } else {
            $this->setLnkROperationTypeSubTemplateMediaUniverseTplId($v->getOstTplId());
        }

        $this->aOerationTypeSubTemplate = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationTypeSubTpl object, it will not be re-added.
        if ($v !== null) {
            $v->addLnkROperationTypeSubTemplateMediasUniverses($this);
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
    public function getOerationTypeSubTemplate(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOerationTypeSubTemplate === null && ($this->lnk_r_operation_type_sub_template_media_universe_tpl_id !== null) && $doQuery) {
            $this->aOerationTypeSubTemplate = ROperationTypeSubTplQuery::create()->findPk($this->lnk_r_operation_type_sub_template_media_universe_tpl_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOerationTypeSubTemplate->addLnkROperationTypeSubTemplateMediasUniversess($this);
             */
        }

        return $this->aOerationTypeSubTemplate;
    }

    /**
     * Declares an association between this object and a ROperationUniverses object.
     *
     * @param                  ROperationUniverses $v
     * @return LnkROperationTypeSubTemplateMediasUniverses The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationUniverse(ROperationUniverses $v = null)
    {
        if ($v === null) {
            $this->setLnkROperationTypeSubTemplateMediaUniverseUniverseId(NULL);
        } else {
            $this->setLnkROperationTypeSubTemplateMediaUniverseUniverseId($v->getROperationUniverseId());
        }

        $this->aOperationUniverse = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationUniverses object, it will not be re-added.
        if ($v !== null) {
            $v->addLnkROperationTypeSubTemplateMediasUniverses($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationUniverses object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationUniverses The associated ROperationUniverses object.
     * @throws PropelException
     */
    public function getOperationUniverse(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationUniverse === null && ($this->lnk_r_operation_type_sub_template_media_universe_universe_id !== null) && $doQuery) {
            $this->aOperationUniverse = ROperationUniversesQuery::create()->findPk($this->lnk_r_operation_type_sub_template_media_universe_universe_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationUniverse->addLnkROperationTypeSubTemplateMediasUniversess($this);
             */
        }

        return $this->aOperationUniverse;
    }

    /**
     * Declares an association between this object and a ROperationMedias object.
     *
     * @param                  ROperationMedias $v
     * @return LnkROperationTypeSubTemplateMediasUniverses The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperationMedia(ROperationMedias $v = null)
    {
        if ($v === null) {
            $this->setLnkROperationTypeSubTemplateMediaUniverseMediaId(NULL);
        } else {
            $this->setLnkROperationTypeSubTemplateMediaUniverseMediaId($v->getROperationMediaId());
        }

        $this->aOperationMedia = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ROperationMedias object, it will not be re-added.
        if ($v !== null) {
            $v->addLnkROperationTypeSubTemplateMediasUniverses($this);
        }


        return $this;
    }


    /**
     * Get the associated ROperationMedias object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ROperationMedias The associated ROperationMedias object.
     * @throws PropelException
     */
    public function getOperationMedia(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperationMedia === null && ($this->lnk_r_operation_type_sub_template_media_universe_media_id !== null) && $doQuery) {
            $this->aOperationMedia = ROperationMediasQuery::create()->findPk($this->lnk_r_operation_type_sub_template_media_universe_media_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperationMedia->addLnkROperationTypeSubTemplateMediasUniversess($this);
             */
        }

        return $this->aOperationMedia;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->lnk_r_operation_type_sub_template_media_universe_id = null;
        $this->lnk_r_operation_type_sub_template_media_universe_ost_id = null;
        $this->lnk_r_operation_type_sub_template_media_universe_tpl_id = null;
        $this->lnk_r_operation_type_sub_template_media_universe_universe_id = null;
        $this->lnk_r_operation_type_sub_template_media_universe_media_id = null;
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
            if ($this->aOperationTypeSub instanceof Persistent) {
              $this->aOperationTypeSub->clearAllReferences($deep);
            }
            if ($this->aOerationTypeSubTemplate instanceof Persistent) {
              $this->aOerationTypeSubTemplate->clearAllReferences($deep);
            }
            if ($this->aOperationUniverse instanceof Persistent) {
              $this->aOperationUniverse->clearAllReferences($deep);
            }
            if ($this->aOperationMedia instanceof Persistent) {
              $this->aOperationMedia->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aOperationTypeSub = null;
        $this->aOerationTypeSubTemplate = null;
        $this->aOperationUniverse = null;
        $this->aOperationMedia = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(LnkROperationTypeSubTemplateMediasUniversesPeer::DEFAULT_STRING_FORMAT);
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
      0 => 'lnk_r_operation_type_sub_template_media_universe_ost_id',
      1 => 'lnk_r_operation_type_sub_template_media_universe_tpl_id',
      2 => 'lnk_r_operation_type_sub_template_media_universe_universe_id',
      3 => 'lnk_r_operation_type_sub_template_media_universe_media_id',
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
                            $this->addValidationFailed('Cette association mécanique / template / média / universe existe déjà', $aColumns[0]);
                        } else {
                            $this->addValidationFailed('Cette association mécanique / template / média / universe existe déjà', 'error');
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
                return BaseLnkROperationTypeSubTemplateMediasUniversesPeer::getConnection();
            }
}
