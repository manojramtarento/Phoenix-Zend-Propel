<?php


/**
 * Base static class for performing query and update operations on the 'r_operation_type_sub' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'r_operation_type_sub';

    /** the related Propel class for this table */
    const OM_CLASS = 'ROperationTypeSub';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ROperationTypeSubTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the ost_id field */
    const OST_ID = 'r_operation_type_sub.ost_id';

    /** the column name for the ost_ot_id field */
    const OST_OT_ID = 'r_operation_type_sub.ost_ot_id';

    /** the column name for the ost_libelle field */
    const OST_LIBELLE = 'r_operation_type_sub.ost_libelle';

    /** the column name for the user_id field */
    const USER_ID = 'r_operation_type_sub.user_id';

    /** the column name for the user_modiy field */
    const USER_MODIY = 'r_operation_type_sub.user_modiy';

    /** the column name for the date_create field */
    const DATE_CREATE = 'r_operation_type_sub.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'r_operation_type_sub.date_modify';

    /** the column name for the actif field */
    const ACTIF = 'r_operation_type_sub.actif';

    /** the column name for the ord field */
    const ORD = 'r_operation_type_sub.ord';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ROperationTypeSub objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ROperationTypeSub[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ROperationTypeSubPeer::$fieldNames[ROperationTypeSubPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('OstId', 'OstOtId', 'OstLibelle', 'UserId', 'UserModiy', 'DateCreate', 'DateModify', 'Actif', 'Ord', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ostId', 'ostOtId', 'ostLibelle', 'userId', 'userModiy', 'dateCreate', 'dateModify', 'actif', 'ord', ),
        BasePeer::TYPE_COLNAME => array (ROperationTypeSubPeer::OST_ID, ROperationTypeSubPeer::OST_OT_ID, ROperationTypeSubPeer::OST_LIBELLE, ROperationTypeSubPeer::USER_ID, ROperationTypeSubPeer::USER_MODIY, ROperationTypeSubPeer::DATE_CREATE, ROperationTypeSubPeer::DATE_MODIFY, ROperationTypeSubPeer::ACTIF, ROperationTypeSubPeer::ORD, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OST_ID', 'OST_OT_ID', 'OST_LIBELLE', 'USER_ID', 'USER_MODIY', 'DATE_CREATE', 'DATE_MODIFY', 'ACTIF', 'ORD', ),
        BasePeer::TYPE_FIELDNAME => array ('ost_id', 'ost_ot_id', 'ost_libelle', 'user_id', 'user_modiy', 'date_create', 'date_modify', 'actif', 'ord', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ROperationTypeSubPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('OstId' => 0, 'OstOtId' => 1, 'OstLibelle' => 2, 'UserId' => 3, 'UserModiy' => 4, 'DateCreate' => 5, 'DateModify' => 6, 'Actif' => 7, 'Ord' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ostId' => 0, 'ostOtId' => 1, 'ostLibelle' => 2, 'userId' => 3, 'userModiy' => 4, 'dateCreate' => 5, 'dateModify' => 6, 'actif' => 7, 'ord' => 8, ),
        BasePeer::TYPE_COLNAME => array (ROperationTypeSubPeer::OST_ID => 0, ROperationTypeSubPeer::OST_OT_ID => 1, ROperationTypeSubPeer::OST_LIBELLE => 2, ROperationTypeSubPeer::USER_ID => 3, ROperationTypeSubPeer::USER_MODIY => 4, ROperationTypeSubPeer::DATE_CREATE => 5, ROperationTypeSubPeer::DATE_MODIFY => 6, ROperationTypeSubPeer::ACTIF => 7, ROperationTypeSubPeer::ORD => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OST_ID' => 0, 'OST_OT_ID' => 1, 'OST_LIBELLE' => 2, 'USER_ID' => 3, 'USER_MODIY' => 4, 'DATE_CREATE' => 5, 'DATE_MODIFY' => 6, 'ACTIF' => 7, 'ORD' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('ost_id' => 0, 'ost_ot_id' => 1, 'ost_libelle' => 2, 'user_id' => 3, 'user_modiy' => 4, 'date_create' => 5, 'date_modify' => 6, 'actif' => 7, 'ord' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $toNames = ROperationTypeSubPeer::getFieldNames($toType);
        $key = isset(ROperationTypeSubPeer::$fieldKeys[$fromType][$name]) ? ROperationTypeSubPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ROperationTypeSubPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ROperationTypeSubPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ROperationTypeSubPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ROperationTypeSubPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ROperationTypeSubPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ROperationTypeSubPeer::OST_ID);
            $criteria->addSelectColumn(ROperationTypeSubPeer::OST_OT_ID);
            $criteria->addSelectColumn(ROperationTypeSubPeer::OST_LIBELLE);
            $criteria->addSelectColumn(ROperationTypeSubPeer::USER_ID);
            $criteria->addSelectColumn(ROperationTypeSubPeer::USER_MODIY);
            $criteria->addSelectColumn(ROperationTypeSubPeer::DATE_CREATE);
            $criteria->addSelectColumn(ROperationTypeSubPeer::DATE_MODIFY);
            $criteria->addSelectColumn(ROperationTypeSubPeer::ACTIF);
            $criteria->addSelectColumn(ROperationTypeSubPeer::ORD);
        } else {
            $criteria->addSelectColumn($alias . '.ost_id');
            $criteria->addSelectColumn($alias . '.ost_ot_id');
            $criteria->addSelectColumn($alias . '.ost_libelle');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.user_modiy');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.actif');
            $criteria->addSelectColumn($alias . '.ord');
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
        $criteria->setPrimaryTableName(ROperationTypeSubPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ROperationTypeSubPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ROperationTypeSubPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return ROperationTypeSub
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ROperationTypeSubPeer::doSelect($critcopy, $con);
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
        return ROperationTypeSubPeer::populateObjects(ROperationTypeSubPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ROperationTypeSubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ROperationTypeSubPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubPeer::DATABASE_NAME);

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
     * @param ROperationTypeSub $obj A ROperationTypeSub object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOstId();
            } // if key === null
            ROperationTypeSubPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ROperationTypeSub object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ROperationTypeSub) {
                $key = (string) $value->getOstId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ROperationTypeSub object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ROperationTypeSubPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ROperationTypeSub Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ROperationTypeSubPeer::$instances[$key])) {
                return ROperationTypeSubPeer::$instances[$key];
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
        foreach (ROperationTypeSubPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ROperationTypeSubPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to r_operation_type_sub
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
        $cls = ROperationTypeSubPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ROperationTypeSubPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ROperationTypeSubPeer::addInstanceToPool($obj, $key);
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
     * @return array (ROperationTypeSub object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ROperationTypeSubPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ROperationTypeSubPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ROperationTypeSubPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ROperationTypeSubPeer::DATABASE_NAME)->getTable(ROperationTypeSubPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseROperationTypeSubPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseROperationTypeSubPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ROperationTypeSubTableMap());
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
        return ROperationTypeSubPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ROperationTypeSub or Criteria object.
     *
     * @param      mixed $values Criteria or ROperationTypeSub object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ROperationTypeSub object
        }


        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ROperationTypeSub or Criteria object.
     *
     * @param      mixed $values Criteria or ROperationTypeSub object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ROperationTypeSubPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ROperationTypeSubPeer::OST_ID);
            $value = $criteria->remove(ROperationTypeSubPeer::OST_ID);
            if ($value) {
                $selectCriteria->add(ROperationTypeSubPeer::OST_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ROperationTypeSubPeer::TABLE_NAME);
            }

        } else { // $values is ROperationTypeSub object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ROperationTypeSubPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the r_operation_type_sub table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ROperationTypeSubPeer::TABLE_NAME, $con, ROperationTypeSubPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ROperationTypeSubPeer::clearInstancePool();
            ROperationTypeSubPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ROperationTypeSub or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ROperationTypeSub object or primary key or array of primary keys
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
            $con = Propel::getConnection(ROperationTypeSubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ROperationTypeSubPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ROperationTypeSub) { // it's a model object
            // invalidate the cache for this single object
            ROperationTypeSubPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ROperationTypeSubPeer::DATABASE_NAME);
            $criteria->add(ROperationTypeSubPeer::OST_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ROperationTypeSubPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ROperationTypeSubPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ROperationTypeSub object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ROperationTypeSub $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ROperationTypeSubPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ROperationTypeSubPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubPeer::OST_OT_ID))
            $columns[ROperationTypeSubPeer::OST_OT_ID] = $obj->getOstOtId();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubPeer::OST_LIBELLE))
            $columns[ROperationTypeSubPeer::OST_LIBELLE] = $obj->getOstLibelle();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubPeer::USER_ID))
            $columns[ROperationTypeSubPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubPeer::USER_MODIY))
            $columns[ROperationTypeSubPeer::USER_MODIY] = $obj->getUserModiy();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubPeer::DATE_CREATE))
            $columns[ROperationTypeSubPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubPeer::DATE_MODIFY))
            $columns[ROperationTypeSubPeer::DATE_MODIFY] = $obj->getDateModify();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubPeer::ACTIF))
            $columns[ROperationTypeSubPeer::ACTIF] = $obj->getActif();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubPeer::ORD))
            $columns[ROperationTypeSubPeer::ORD] = $obj->getOrd();

        }

        return BasePeer::doValidate(ROperationTypeSubPeer::DATABASE_NAME, ROperationTypeSubPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ROperationTypeSub
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ROperationTypeSubPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ROperationTypeSubPeer::DATABASE_NAME);
        $criteria->add(ROperationTypeSubPeer::OST_ID, $pk);

        $v = ROperationTypeSubPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ROperationTypeSub[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ROperationTypeSubPeer::DATABASE_NAME);
            $criteria->add(ROperationTypeSubPeer::OST_ID, $pks, Criteria::IN);
            $objs = ROperationTypeSubPeer::doSelect($criteria, $con);
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
} // BaseROperationTypeSubPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseROperationTypeSubPeer::buildTableMap();

