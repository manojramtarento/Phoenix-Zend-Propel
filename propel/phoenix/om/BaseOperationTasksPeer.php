<?php


/**
 * Base static class for performing query and update operations on the 'operation_tasks' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseOperationTasksPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'operation_tasks';

    /** the related Propel class for this table */
    const OM_CLASS = 'OperationTasks';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OperationTasksTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the op_task_id field */
    const OP_TASK_ID = 'operation_tasks.op_task_id';

    /** the column name for the op_id field */
    const OP_ID = 'operation_tasks.op_id';

    /** the column name for the op_task_type_id field */
    const OP_TASK_TYPE_ID = 'operation_tasks.op_task_type_id';

    /** the column name for the op_task_deadline field */
    const OP_TASK_DEADLINE = 'operation_tasks.op_task_deadline';

    /** the column name for the op_task_alerte field */
    const OP_TASK_ALERTE = 'operation_tasks.op_task_alerte';

    /** the column name for the op_task_retard field */
    const OP_TASK_RETARD = 'operation_tasks.op_task_retard';

    /** the column name for the op_task_duree_estim field */
    const OP_TASK_DUREE_ESTIM = 'operation_tasks.op_task_duree_estim';

    /** the column name for the op_task_duree_reelle field */
    const OP_TASK_DUREE_REELLE = 'operation_tasks.op_task_duree_reelle';

    /** the column name for the op_task_detail field */
    const OP_TASK_DETAIL = 'operation_tasks.op_task_detail';

    /** the column name for the op_task_done field */
    const OP_TASK_DONE = 'operation_tasks.op_task_done';

    /** the column name for the op_task_comments field */
    const OP_TASK_COMMENTS = 'operation_tasks.op_task_comments';

    /** the column name for the date_create field */
    const DATE_CREATE = 'operation_tasks.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'operation_tasks.date_modify';

    /** the column name for the user_id field */
    const USER_ID = 'operation_tasks.user_id';

    /** the column name for the op_task_assign_to_user field */
    const OP_TASK_ASSIGN_TO_USER = 'operation_tasks.op_task_assign_to_user';

    /** the column name for the op_task_notify_to_user field */
    const OP_TASK_NOTIFY_TO_USER = 'operation_tasks.op_task_notify_to_user';

    /** the column name for the op_task_assign_to_group field */
    const OP_TASK_ASSIGN_TO_GROUP = 'operation_tasks.op_task_assign_to_group';

    /** the column name for the op_task_notify_to_group field */
    const OP_TASK_NOTIFY_TO_GROUP = 'operation_tasks.op_task_notify_to_group';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of OperationTasks objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array OperationTasks[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OperationTasksPeer::$fieldNames[OperationTasksPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('OpTaskId', 'OpId', 'OpTaskTypeId', 'OpTaskDeadline', 'OpTaskAlerte', 'OpTaskRetard', 'OpTaskDureeEstim', 'OpTaskDureeReelle', 'OpTaskDetail', 'OpTaskDone', 'OpTaskComments', 'DateCreate', 'DateModify', 'UserId', 'OpTaskAssignToUser', 'OpTaskNotifyToUser', 'OpTaskAssignToGroup', 'OpTaskNotifyToGroup', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('opTaskId', 'opId', 'opTaskTypeId', 'opTaskDeadline', 'opTaskAlerte', 'opTaskRetard', 'opTaskDureeEstim', 'opTaskDureeReelle', 'opTaskDetail', 'opTaskDone', 'opTaskComments', 'dateCreate', 'dateModify', 'userId', 'opTaskAssignToUser', 'opTaskNotifyToUser', 'opTaskAssignToGroup', 'opTaskNotifyToGroup', ),
        BasePeer::TYPE_COLNAME => array (OperationTasksPeer::OP_TASK_ID, OperationTasksPeer::OP_ID, OperationTasksPeer::OP_TASK_TYPE_ID, OperationTasksPeer::OP_TASK_DEADLINE, OperationTasksPeer::OP_TASK_ALERTE, OperationTasksPeer::OP_TASK_RETARD, OperationTasksPeer::OP_TASK_DUREE_ESTIM, OperationTasksPeer::OP_TASK_DUREE_REELLE, OperationTasksPeer::OP_TASK_DETAIL, OperationTasksPeer::OP_TASK_DONE, OperationTasksPeer::OP_TASK_COMMENTS, OperationTasksPeer::DATE_CREATE, OperationTasksPeer::DATE_MODIFY, OperationTasksPeer::USER_ID, OperationTasksPeer::OP_TASK_ASSIGN_TO_USER, OperationTasksPeer::OP_TASK_NOTIFY_TO_USER, OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP, OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OP_TASK_ID', 'OP_ID', 'OP_TASK_TYPE_ID', 'OP_TASK_DEADLINE', 'OP_TASK_ALERTE', 'OP_TASK_RETARD', 'OP_TASK_DUREE_ESTIM', 'OP_TASK_DUREE_REELLE', 'OP_TASK_DETAIL', 'OP_TASK_DONE', 'OP_TASK_COMMENTS', 'DATE_CREATE', 'DATE_MODIFY', 'USER_ID', 'OP_TASK_ASSIGN_TO_USER', 'OP_TASK_NOTIFY_TO_USER', 'OP_TASK_ASSIGN_TO_GROUP', 'OP_TASK_NOTIFY_TO_GROUP', ),
        BasePeer::TYPE_FIELDNAME => array ('op_task_id', 'op_id', 'op_task_type_id', 'op_task_deadline', 'op_task_alerte', 'op_task_retard', 'op_task_duree_estim', 'op_task_duree_reelle', 'op_task_detail', 'op_task_done', 'op_task_comments', 'date_create', 'date_modify', 'user_id', 'op_task_assign_to_user', 'op_task_notify_to_user', 'op_task_assign_to_group', 'op_task_notify_to_group', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OperationTasksPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('OpTaskId' => 0, 'OpId' => 1, 'OpTaskTypeId' => 2, 'OpTaskDeadline' => 3, 'OpTaskAlerte' => 4, 'OpTaskRetard' => 5, 'OpTaskDureeEstim' => 6, 'OpTaskDureeReelle' => 7, 'OpTaskDetail' => 8, 'OpTaskDone' => 9, 'OpTaskComments' => 10, 'DateCreate' => 11, 'DateModify' => 12, 'UserId' => 13, 'OpTaskAssignToUser' => 14, 'OpTaskNotifyToUser' => 15, 'OpTaskAssignToGroup' => 16, 'OpTaskNotifyToGroup' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('opTaskId' => 0, 'opId' => 1, 'opTaskTypeId' => 2, 'opTaskDeadline' => 3, 'opTaskAlerte' => 4, 'opTaskRetard' => 5, 'opTaskDureeEstim' => 6, 'opTaskDureeReelle' => 7, 'opTaskDetail' => 8, 'opTaskDone' => 9, 'opTaskComments' => 10, 'dateCreate' => 11, 'dateModify' => 12, 'userId' => 13, 'opTaskAssignToUser' => 14, 'opTaskNotifyToUser' => 15, 'opTaskAssignToGroup' => 16, 'opTaskNotifyToGroup' => 17, ),
        BasePeer::TYPE_COLNAME => array (OperationTasksPeer::OP_TASK_ID => 0, OperationTasksPeer::OP_ID => 1, OperationTasksPeer::OP_TASK_TYPE_ID => 2, OperationTasksPeer::OP_TASK_DEADLINE => 3, OperationTasksPeer::OP_TASK_ALERTE => 4, OperationTasksPeer::OP_TASK_RETARD => 5, OperationTasksPeer::OP_TASK_DUREE_ESTIM => 6, OperationTasksPeer::OP_TASK_DUREE_REELLE => 7, OperationTasksPeer::OP_TASK_DETAIL => 8, OperationTasksPeer::OP_TASK_DONE => 9, OperationTasksPeer::OP_TASK_COMMENTS => 10, OperationTasksPeer::DATE_CREATE => 11, OperationTasksPeer::DATE_MODIFY => 12, OperationTasksPeer::USER_ID => 13, OperationTasksPeer::OP_TASK_ASSIGN_TO_USER => 14, OperationTasksPeer::OP_TASK_NOTIFY_TO_USER => 15, OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP => 16, OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OP_TASK_ID' => 0, 'OP_ID' => 1, 'OP_TASK_TYPE_ID' => 2, 'OP_TASK_DEADLINE' => 3, 'OP_TASK_ALERTE' => 4, 'OP_TASK_RETARD' => 5, 'OP_TASK_DUREE_ESTIM' => 6, 'OP_TASK_DUREE_REELLE' => 7, 'OP_TASK_DETAIL' => 8, 'OP_TASK_DONE' => 9, 'OP_TASK_COMMENTS' => 10, 'DATE_CREATE' => 11, 'DATE_MODIFY' => 12, 'USER_ID' => 13, 'OP_TASK_ASSIGN_TO_USER' => 14, 'OP_TASK_NOTIFY_TO_USER' => 15, 'OP_TASK_ASSIGN_TO_GROUP' => 16, 'OP_TASK_NOTIFY_TO_GROUP' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('op_task_id' => 0, 'op_id' => 1, 'op_task_type_id' => 2, 'op_task_deadline' => 3, 'op_task_alerte' => 4, 'op_task_retard' => 5, 'op_task_duree_estim' => 6, 'op_task_duree_reelle' => 7, 'op_task_detail' => 8, 'op_task_done' => 9, 'op_task_comments' => 10, 'date_create' => 11, 'date_modify' => 12, 'user_id' => 13, 'op_task_assign_to_user' => 14, 'op_task_notify_to_user' => 15, 'op_task_assign_to_group' => 16, 'op_task_notify_to_group' => 17, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = OperationTasksPeer::getFieldNames($toType);
        $key = isset(OperationTasksPeer::$fieldKeys[$fromType][$name]) ? OperationTasksPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OperationTasksPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, OperationTasksPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OperationTasksPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. OperationTasksPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OperationTasksPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_ID);
            $criteria->addSelectColumn(OperationTasksPeer::OP_ID);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_TYPE_ID);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_DEADLINE);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_ALERTE);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_RETARD);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_DUREE_ESTIM);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_DUREE_REELLE);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_DETAIL);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_DONE);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_COMMENTS);
            $criteria->addSelectColumn(OperationTasksPeer::DATE_CREATE);
            $criteria->addSelectColumn(OperationTasksPeer::DATE_MODIFY);
            $criteria->addSelectColumn(OperationTasksPeer::USER_ID);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_ASSIGN_TO_USER);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_NOTIFY_TO_USER);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP);
            $criteria->addSelectColumn(OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP);
        } else {
            $criteria->addSelectColumn($alias . '.op_task_id');
            $criteria->addSelectColumn($alias . '.op_id');
            $criteria->addSelectColumn($alias . '.op_task_type_id');
            $criteria->addSelectColumn($alias . '.op_task_deadline');
            $criteria->addSelectColumn($alias . '.op_task_alerte');
            $criteria->addSelectColumn($alias . '.op_task_retard');
            $criteria->addSelectColumn($alias . '.op_task_duree_estim');
            $criteria->addSelectColumn($alias . '.op_task_duree_reelle');
            $criteria->addSelectColumn($alias . '.op_task_detail');
            $criteria->addSelectColumn($alias . '.op_task_done');
            $criteria->addSelectColumn($alias . '.op_task_comments');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.op_task_assign_to_user');
            $criteria->addSelectColumn($alias . '.op_task_notify_to_user');
            $criteria->addSelectColumn($alias . '.op_task_assign_to_group');
            $criteria->addSelectColumn($alias . '.op_task_notify_to_group');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationTasksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationTasksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OperationTasksPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return OperationTasks
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OperationTasksPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return OperationTasksPeer::populateObjects(OperationTasksPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OperationTasksPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OperationTasksPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param OperationTasks $obj A OperationTasks object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOpTaskId();
            } // if key === null
            OperationTasksPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A OperationTasks object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof OperationTasks) {
                $key = (string) $value->getOpTaskId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or OperationTasks object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OperationTasksPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return OperationTasks Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OperationTasksPeer::$instances[$key])) {
                return OperationTasksPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (OperationTasksPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OperationTasksPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to operation_tasks
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = OperationTasksPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OperationTasksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OperationTasksPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OperationTasksPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (OperationTasks object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OperationTasksPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OperationTasksPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OperationTasksPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OperationTasksPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OperationTasksPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Operations table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperations(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationTasksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationTasksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationTasksPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationTasksPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of OperationTasks objects pre-filled with their Operations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationTasks objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationTasksPeer::DATABASE_NAME);
        }

        OperationTasksPeer::addSelectColumns($criteria);
        $startcol = OperationTasksPeer::NUM_HYDRATE_COLUMNS;
        OperationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationTasksPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationTasksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationTasksPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationTasksPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationTasksPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = OperationsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationTasks) to $obj2 (Operations)
                $obj2->addOperationTasks($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationTasksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationTasksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationTasksPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationTasksPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of OperationTasks objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationTasks objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationTasksPeer::DATABASE_NAME);
        }

        OperationTasksPeer::addSelectColumns($criteria);
        $startcol2 = OperationTasksPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationTasksPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationTasksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationTasksPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationTasksPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationTasksPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Operations rows

            $key2 = OperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = OperationsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OperationsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (OperationTasks) to the collection in $obj2 (Operations)
                $obj2->addOperationTasks($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(OperationTasksPeer::DATABASE_NAME)->getTable(OperationTasksPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOperationTasksPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOperationTasksPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OperationTasksTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return OperationTasksPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a OperationTasks or Criteria object.
     *
     * @param      mixed $values Criteria or OperationTasks object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from OperationTasks object
        }

        if ($criteria->containsKey(OperationTasksPeer::OP_TASK_ID) && $criteria->keyContainsValue(OperationTasksPeer::OP_TASK_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OperationTasksPeer::OP_TASK_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OperationTasksPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a OperationTasks or Criteria object.
     *
     * @param      mixed $values Criteria or OperationTasks object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OperationTasksPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OperationTasksPeer::OP_TASK_ID);
            $value = $criteria->remove(OperationTasksPeer::OP_TASK_ID);
            if ($value) {
                $selectCriteria->add(OperationTasksPeer::OP_TASK_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OperationTasksPeer::TABLE_NAME);
            }

        } else { // $values is OperationTasks object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OperationTasksPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the operation_tasks table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OperationTasksPeer::TABLE_NAME, $con, OperationTasksPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OperationTasksPeer::clearInstancePool();
            OperationTasksPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a OperationTasks or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or OperationTasks object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OperationTasksPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof OperationTasks) { // it's a model object
            // invalidate the cache for this single object
            OperationTasksPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OperationTasksPeer::DATABASE_NAME);
            $criteria->add(OperationTasksPeer::OP_TASK_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OperationTasksPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OperationTasksPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OperationTasksPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given OperationTasks object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param OperationTasks $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OperationTasksPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OperationTasksPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_ID))
            $columns[OperationTasksPeer::OP_ID] = $obj->getOpId();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_TYPE_ID))
            $columns[OperationTasksPeer::OP_TASK_TYPE_ID] = $obj->getOpTaskTypeId();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_DEADLINE))
            $columns[OperationTasksPeer::OP_TASK_DEADLINE] = $obj->getOpTaskDeadline();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_ALERTE))
            $columns[OperationTasksPeer::OP_TASK_ALERTE] = $obj->getOpTaskAlerte();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_RETARD))
            $columns[OperationTasksPeer::OP_TASK_RETARD] = $obj->getOpTaskRetard();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_DUREE_ESTIM))
            $columns[OperationTasksPeer::OP_TASK_DUREE_ESTIM] = $obj->getOpTaskDureeEstim();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_DUREE_REELLE))
            $columns[OperationTasksPeer::OP_TASK_DUREE_REELLE] = $obj->getOpTaskDureeReelle();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_DETAIL))
            $columns[OperationTasksPeer::OP_TASK_DETAIL] = $obj->getOpTaskDetail();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_DONE))
            $columns[OperationTasksPeer::OP_TASK_DONE] = $obj->getOpTaskDone();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_COMMENTS))
            $columns[OperationTasksPeer::OP_TASK_COMMENTS] = $obj->getOpTaskComments();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::DATE_CREATE))
            $columns[OperationTasksPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::DATE_MODIFY))
            $columns[OperationTasksPeer::DATE_MODIFY] = $obj->getDateModify();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::USER_ID))
            $columns[OperationTasksPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_ASSIGN_TO_USER))
            $columns[OperationTasksPeer::OP_TASK_ASSIGN_TO_USER] = $obj->getOpTaskAssignToUser();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_NOTIFY_TO_USER))
            $columns[OperationTasksPeer::OP_TASK_NOTIFY_TO_USER] = $obj->getOpTaskNotifyToUser();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP))
            $columns[OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP] = $obj->getOpTaskAssignToGroup();

        if ($obj->isNew() || $obj->isColumnModified(OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP))
            $columns[OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP] = $obj->getOpTaskNotifyToGroup();

        }

        return BasePeer::doValidate(OperationTasksPeer::DATABASE_NAME, OperationTasksPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return OperationTasks
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OperationTasksPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OperationTasksPeer::DATABASE_NAME);
        $criteria->add(OperationTasksPeer::OP_TASK_ID, $pk);

        $v = OperationTasksPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return OperationTasks[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OperationTasksPeer::DATABASE_NAME);
            $criteria->add(OperationTasksPeer::OP_TASK_ID, $pks, Criteria::IN);
            $objs = OperationTasksPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

    // utils behavior

            /**
            * Return connection object
            * @return PropelPDO
            */
            public static function getConnection(){
                return Propel::getConnection(self::DATABASE_NAME);
            }
} // BaseOperationTasksPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOperationTasksPeer::buildTableMap();

