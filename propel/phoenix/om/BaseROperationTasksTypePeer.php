<?php


/**
 * Base static class for performing query and update operations on the 'r_operation_tasks_type' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseROperationTasksTypePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'r_operation_tasks_type';

    /** the related Propel class for this table */
    const OM_CLASS = 'ROperationTasksType';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ROperationTasksTypeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the r_op_task_type_id field */
    const R_OP_TASK_TYPE_ID = 'r_operation_tasks_type.r_op_task_type_id';

    /** the column name for the r_op_task_type_libelle field */
    const R_OP_TASK_TYPE_LIBELLE = 'r_operation_tasks_type.r_op_task_type_libelle';

    /** the column name for the r_op_task_type_date_ref field */
    const R_OP_TASK_TYPE_DATE_REF = 'r_operation_tasks_type.r_op_task_type_date_ref';

    /** the column name for the r_op_task_type_delta field */
    const R_OP_TASK_TYPE_DELTA = 'r_operation_tasks_type.r_op_task_type_delta';

    /** the column name for the r_op_task_type_rappel field */
    const R_OP_TASK_TYPE_RAPPEL = 'r_operation_tasks_type.r_op_task_type_rappel';

    /** the column name for the r_op_task_type_assign_to_user field */
    const R_OP_TASK_TYPE_ASSIGN_TO_USER = 'r_operation_tasks_type.r_op_task_type_assign_to_user';

    /** the column name for the r_op_task_type_notify_to_user field */
    const R_OP_TASK_TYPE_NOTIFY_TO_USER = 'r_operation_tasks_type.r_op_task_type_notify_to_user';

    /** the column name for the r_op_task_type_assign_to_group field */
    const R_OP_TASK_TYPE_ASSIGN_TO_GROUP = 'r_operation_tasks_type.r_op_task_type_assign_to_group';

    /** the column name for the r_op_task_type_notify_to_group field */
    const R_OP_TASK_TYPE_NOTIFY_TO_GROUP = 'r_operation_tasks_type.r_op_task_type_notify_to_group';

    /** the column name for the r_op_task_type_assign_to_cp field */
    const R_OP_TASK_TYPE_ASSIGN_TO_CP = 'r_operation_tasks_type.r_op_task_type_assign_to_cp';

    /** the column name for the r_op_task_type_assign_to_dc field */
    const R_OP_TASK_TYPE_ASSIGN_TO_DC = 'r_operation_tasks_type.r_op_task_type_assign_to_dc';

    /** the column name for the user_id field */
    const USER_ID = 'r_operation_tasks_type.user_id';

    /** the column name for the date_create field */
    const DATE_CREATE = 'r_operation_tasks_type.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'r_operation_tasks_type.date_modify';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ROperationTasksType objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ROperationTasksType[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ROperationTasksTypePeer::$fieldNames[ROperationTasksTypePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ROpTaskTypeId', 'ROpTaskTypeLibelle', 'ROpTaskTypeDateRef', 'ROpTaskTypeDelta', 'ROpTaskTypeRappel', 'ROpTaskTypeAssignToUser', 'ROpTaskTypeNotifyToUser', 'ROpTaskTypeAssignToGroup', 'ROpTaskTypeNotifyToGroup', 'ROpTaskTypeAssignToCp', 'ROpTaskTypeAssignToDc', 'UserId', 'DateCreate', 'DateModify', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('rOpTaskTypeId', 'rOpTaskTypeLibelle', 'rOpTaskTypeDateRef', 'rOpTaskTypeDelta', 'rOpTaskTypeRappel', 'rOpTaskTypeAssignToUser', 'rOpTaskTypeNotifyToUser', 'rOpTaskTypeAssignToGroup', 'rOpTaskTypeNotifyToGroup', 'rOpTaskTypeAssignToCp', 'rOpTaskTypeAssignToDc', 'userId', 'dateCreate', 'dateModify', ),
        BasePeer::TYPE_COLNAME => array (ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, ROperationTasksTypePeer::R_OP_TASK_TYPE_LIBELLE, ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF, ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA, ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL, ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER, ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER, ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP, ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP, ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_CP, ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_DC, ROperationTasksTypePeer::USER_ID, ROperationTasksTypePeer::DATE_CREATE, ROperationTasksTypePeer::DATE_MODIFY, ),
        BasePeer::TYPE_RAW_COLNAME => array ('R_OP_TASK_TYPE_ID', 'R_OP_TASK_TYPE_LIBELLE', 'R_OP_TASK_TYPE_DATE_REF', 'R_OP_TASK_TYPE_DELTA', 'R_OP_TASK_TYPE_RAPPEL', 'R_OP_TASK_TYPE_ASSIGN_TO_USER', 'R_OP_TASK_TYPE_NOTIFY_TO_USER', 'R_OP_TASK_TYPE_ASSIGN_TO_GROUP', 'R_OP_TASK_TYPE_NOTIFY_TO_GROUP', 'R_OP_TASK_TYPE_ASSIGN_TO_CP', 'R_OP_TASK_TYPE_ASSIGN_TO_DC', 'USER_ID', 'DATE_CREATE', 'DATE_MODIFY', ),
        BasePeer::TYPE_FIELDNAME => array ('r_op_task_type_id', 'r_op_task_type_libelle', 'r_op_task_type_date_ref', 'r_op_task_type_delta', 'r_op_task_type_rappel', 'r_op_task_type_assign_to_user', 'r_op_task_type_notify_to_user', 'r_op_task_type_assign_to_group', 'r_op_task_type_notify_to_group', 'r_op_task_type_assign_to_cp', 'r_op_task_type_assign_to_dc', 'user_id', 'date_create', 'date_modify', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ROperationTasksTypePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ROpTaskTypeId' => 0, 'ROpTaskTypeLibelle' => 1, 'ROpTaskTypeDateRef' => 2, 'ROpTaskTypeDelta' => 3, 'ROpTaskTypeRappel' => 4, 'ROpTaskTypeAssignToUser' => 5, 'ROpTaskTypeNotifyToUser' => 6, 'ROpTaskTypeAssignToGroup' => 7, 'ROpTaskTypeNotifyToGroup' => 8, 'ROpTaskTypeAssignToCp' => 9, 'ROpTaskTypeAssignToDc' => 10, 'UserId' => 11, 'DateCreate' => 12, 'DateModify' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('rOpTaskTypeId' => 0, 'rOpTaskTypeLibelle' => 1, 'rOpTaskTypeDateRef' => 2, 'rOpTaskTypeDelta' => 3, 'rOpTaskTypeRappel' => 4, 'rOpTaskTypeAssignToUser' => 5, 'rOpTaskTypeNotifyToUser' => 6, 'rOpTaskTypeAssignToGroup' => 7, 'rOpTaskTypeNotifyToGroup' => 8, 'rOpTaskTypeAssignToCp' => 9, 'rOpTaskTypeAssignToDc' => 10, 'userId' => 11, 'dateCreate' => 12, 'dateModify' => 13, ),
        BasePeer::TYPE_COLNAME => array (ROperationTasksTypePeer::R_OP_TASK_TYPE_ID => 0, ROperationTasksTypePeer::R_OP_TASK_TYPE_LIBELLE => 1, ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF => 2, ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA => 3, ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL => 4, ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER => 5, ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER => 6, ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP => 7, ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP => 8, ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_CP => 9, ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_DC => 10, ROperationTasksTypePeer::USER_ID => 11, ROperationTasksTypePeer::DATE_CREATE => 12, ROperationTasksTypePeer::DATE_MODIFY => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('R_OP_TASK_TYPE_ID' => 0, 'R_OP_TASK_TYPE_LIBELLE' => 1, 'R_OP_TASK_TYPE_DATE_REF' => 2, 'R_OP_TASK_TYPE_DELTA' => 3, 'R_OP_TASK_TYPE_RAPPEL' => 4, 'R_OP_TASK_TYPE_ASSIGN_TO_USER' => 5, 'R_OP_TASK_TYPE_NOTIFY_TO_USER' => 6, 'R_OP_TASK_TYPE_ASSIGN_TO_GROUP' => 7, 'R_OP_TASK_TYPE_NOTIFY_TO_GROUP' => 8, 'R_OP_TASK_TYPE_ASSIGN_TO_CP' => 9, 'R_OP_TASK_TYPE_ASSIGN_TO_DC' => 10, 'USER_ID' => 11, 'DATE_CREATE' => 12, 'DATE_MODIFY' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('r_op_task_type_id' => 0, 'r_op_task_type_libelle' => 1, 'r_op_task_type_date_ref' => 2, 'r_op_task_type_delta' => 3, 'r_op_task_type_rappel' => 4, 'r_op_task_type_assign_to_user' => 5, 'r_op_task_type_notify_to_user' => 6, 'r_op_task_type_assign_to_group' => 7, 'r_op_task_type_notify_to_group' => 8, 'r_op_task_type_assign_to_cp' => 9, 'r_op_task_type_assign_to_dc' => 10, 'user_id' => 11, 'date_create' => 12, 'date_modify' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $toNames = ROperationTasksTypePeer::getFieldNames($toType);
        $key = isset(ROperationTasksTypePeer::$fieldKeys[$fromType][$name]) ? ROperationTasksTypePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ROperationTasksTypePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ROperationTasksTypePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ROperationTasksTypePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ROperationTasksTypePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ROperationTasksTypePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID);
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_LIBELLE);
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF);
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA);
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL);
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER);
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER);
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP);
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP);
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_CP);
            $criteria->addSelectColumn(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_DC);
            $criteria->addSelectColumn(ROperationTasksTypePeer::USER_ID);
            $criteria->addSelectColumn(ROperationTasksTypePeer::DATE_CREATE);
            $criteria->addSelectColumn(ROperationTasksTypePeer::DATE_MODIFY);
        } else {
            $criteria->addSelectColumn($alias . '.r_op_task_type_id');
            $criteria->addSelectColumn($alias . '.r_op_task_type_libelle');
            $criteria->addSelectColumn($alias . '.r_op_task_type_date_ref');
            $criteria->addSelectColumn($alias . '.r_op_task_type_delta');
            $criteria->addSelectColumn($alias . '.r_op_task_type_rappel');
            $criteria->addSelectColumn($alias . '.r_op_task_type_assign_to_user');
            $criteria->addSelectColumn($alias . '.r_op_task_type_notify_to_user');
            $criteria->addSelectColumn($alias . '.r_op_task_type_assign_to_group');
            $criteria->addSelectColumn($alias . '.r_op_task_type_notify_to_group');
            $criteria->addSelectColumn($alias . '.r_op_task_type_assign_to_cp');
            $criteria->addSelectColumn($alias . '.r_op_task_type_assign_to_dc');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_modify');
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
        $criteria->setPrimaryTableName(ROperationTasksTypePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ROperationTasksTypePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ROperationTasksTypePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return ROperationTasksType
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ROperationTasksTypePeer::doSelect($critcopy, $con);
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
        return ROperationTasksTypePeer::populateObjects(ROperationTasksTypePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ROperationTasksTypePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ROperationTasksTypePeer::DATABASE_NAME);

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
     * @param ROperationTasksType $obj A ROperationTasksType object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getROpTaskTypeId();
            } // if key === null
            ROperationTasksTypePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ROperationTasksType object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ROperationTasksType) {
                $key = (string) $value->getROpTaskTypeId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ROperationTasksType object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ROperationTasksTypePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ROperationTasksType Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ROperationTasksTypePeer::$instances[$key])) {
                return ROperationTasksTypePeer::$instances[$key];
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
        foreach (ROperationTasksTypePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ROperationTasksTypePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to r_operation_tasks_type
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
        $cls = ROperationTasksTypePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ROperationTasksTypePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ROperationTasksTypePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ROperationTasksTypePeer::addInstanceToPool($obj, $key);
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
     * @return array (ROperationTasksType object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ROperationTasksTypePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ROperationTasksTypePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ROperationTasksTypePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ROperationTasksTypePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ROperationTasksTypePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(ROperationTasksTypePeer::DATABASE_NAME)->getTable(ROperationTasksTypePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseROperationTasksTypePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseROperationTasksTypePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ROperationTasksTypeTableMap());
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
        return ROperationTasksTypePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ROperationTasksType or Criteria object.
     *
     * @param      mixed $values Criteria or ROperationTasksType object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ROperationTasksType object
        }

        if ($criteria->containsKey(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID) && $criteria->keyContainsValue(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ROperationTasksTypePeer::R_OP_TASK_TYPE_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ROperationTasksTypePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ROperationTasksType or Criteria object.
     *
     * @param      mixed $values Criteria or ROperationTasksType object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ROperationTasksTypePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID);
            $value = $criteria->remove(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID);
            if ($value) {
                $selectCriteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ROperationTasksTypePeer::TABLE_NAME);
            }

        } else { // $values is ROperationTasksType object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ROperationTasksTypePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the r_operation_tasks_type table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ROperationTasksTypePeer::TABLE_NAME, $con, ROperationTasksTypePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ROperationTasksTypePeer::clearInstancePool();
            ROperationTasksTypePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ROperationTasksType or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ROperationTasksType object or primary key or array of primary keys
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
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ROperationTasksTypePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ROperationTasksType) { // it's a model object
            // invalidate the cache for this single object
            ROperationTasksTypePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ROperationTasksTypePeer::DATABASE_NAME);
            $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ROperationTasksTypePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ROperationTasksTypePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ROperationTasksTypePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ROperationTasksType object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ROperationTasksType $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ROperationTasksTypePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ROperationTasksTypePeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_LIBELLE))
            $columns[ROperationTasksTypePeer::R_OP_TASK_TYPE_LIBELLE] = $obj->getROpTaskTypeLibelle();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF))
            $columns[ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF] = $obj->getROpTaskTypeDateRef();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA))
            $columns[ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA] = $obj->getROpTaskTypeDelta();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL))
            $columns[ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL] = $obj->getROpTaskTypeRappel();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER))
            $columns[ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER] = $obj->getROpTaskTypeAssignToUser();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER))
            $columns[ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER] = $obj->getROpTaskTypeNotifyToUser();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP))
            $columns[ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP] = $obj->getROpTaskTypeAssignToGroup();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP))
            $columns[ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP] = $obj->getROpTaskTypeNotifyToGroup();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_CP))
            $columns[ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_CP] = $obj->getROpTaskTypeAssignToCp();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_DC))
            $columns[ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_DC] = $obj->getROpTaskTypeAssignToDc();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::USER_ID))
            $columns[ROperationTasksTypePeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::DATE_CREATE))
            $columns[ROperationTasksTypePeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTasksTypePeer::DATE_MODIFY))
            $columns[ROperationTasksTypePeer::DATE_MODIFY] = $obj->getDateModify();

        }

        return BasePeer::doValidate(ROperationTasksTypePeer::DATABASE_NAME, ROperationTasksTypePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ROperationTasksType
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ROperationTasksTypePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ROperationTasksTypePeer::DATABASE_NAME);
        $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $pk);

        $v = ROperationTasksTypePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ROperationTasksType[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ROperationTasksTypePeer::DATABASE_NAME);
            $criteria->add(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $pks, Criteria::IN);
            $objs = ROperationTasksTypePeer::doSelect($criteria, $con);
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
} // BaseROperationTasksTypePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseROperationTasksTypePeer::buildTableMap();

