<?php


/**
 * Base static class for performing query and update operations on the 'operation_statuts' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseOperationStatutsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'operation_statuts';

    /** the related Propel class for this table */
    const OM_CLASS = 'OperationStatuts';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OperationStatutsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the hs_id field */
    const HS_ID = 'operation_statuts.hs_id';

    /** the column name for the op_id field */
    const OP_ID = 'operation_statuts.op_id';

    /** the column name for the hs_old_statut_id field */
    const HS_OLD_STATUT_ID = 'operation_statuts.hs_old_statut_id';

    /** the column name for the hs_new_statut_id field */
    const HS_NEW_STATUT_ID = 'operation_statuts.hs_new_statut_id';

    /** the column name for the hs_refus_id field */
    const HS_REFUS_ID = 'operation_statuts.hs_refus_id';

    /** the column name for the actif field */
    const ACTIF = 'operation_statuts.actif';

    /** the column name for the user_id field */
    const USER_ID = 'operation_statuts.user_id';

    /** the column name for the date_create field */
    const DATE_CREATE = 'operation_statuts.date_create';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'operation_statuts.user_modify';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'operation_statuts.date_modify';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of OperationStatuts objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array OperationStatuts[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OperationStatutsPeer::$fieldNames[OperationStatutsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('HsId', 'OpId', 'HsOldStatutId', 'HsNewStatutId', 'HsRefusId', 'Actif', 'UserId', 'DateCreate', 'UserModify', 'DateModify', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('hsId', 'opId', 'hsOldStatutId', 'hsNewStatutId', 'hsRefusId', 'actif', 'userId', 'dateCreate', 'userModify', 'dateModify', ),
        BasePeer::TYPE_COLNAME => array (OperationStatutsPeer::HS_ID, OperationStatutsPeer::OP_ID, OperationStatutsPeer::HS_OLD_STATUT_ID, OperationStatutsPeer::HS_NEW_STATUT_ID, OperationStatutsPeer::HS_REFUS_ID, OperationStatutsPeer::ACTIF, OperationStatutsPeer::USER_ID, OperationStatutsPeer::DATE_CREATE, OperationStatutsPeer::USER_MODIFY, OperationStatutsPeer::DATE_MODIFY, ),
        BasePeer::TYPE_RAW_COLNAME => array ('HS_ID', 'OP_ID', 'HS_OLD_STATUT_ID', 'HS_NEW_STATUT_ID', 'HS_REFUS_ID', 'ACTIF', 'USER_ID', 'DATE_CREATE', 'USER_MODIFY', 'DATE_MODIFY', ),
        BasePeer::TYPE_FIELDNAME => array ('hs_id', 'op_id', 'hs_old_statut_id', 'hs_new_statut_id', 'hs_refus_id', 'actif', 'user_id', 'date_create', 'user_modify', 'date_modify', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OperationStatutsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('HsId' => 0, 'OpId' => 1, 'HsOldStatutId' => 2, 'HsNewStatutId' => 3, 'HsRefusId' => 4, 'Actif' => 5, 'UserId' => 6, 'DateCreate' => 7, 'UserModify' => 8, 'DateModify' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('hsId' => 0, 'opId' => 1, 'hsOldStatutId' => 2, 'hsNewStatutId' => 3, 'hsRefusId' => 4, 'actif' => 5, 'userId' => 6, 'dateCreate' => 7, 'userModify' => 8, 'dateModify' => 9, ),
        BasePeer::TYPE_COLNAME => array (OperationStatutsPeer::HS_ID => 0, OperationStatutsPeer::OP_ID => 1, OperationStatutsPeer::HS_OLD_STATUT_ID => 2, OperationStatutsPeer::HS_NEW_STATUT_ID => 3, OperationStatutsPeer::HS_REFUS_ID => 4, OperationStatutsPeer::ACTIF => 5, OperationStatutsPeer::USER_ID => 6, OperationStatutsPeer::DATE_CREATE => 7, OperationStatutsPeer::USER_MODIFY => 8, OperationStatutsPeer::DATE_MODIFY => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('HS_ID' => 0, 'OP_ID' => 1, 'HS_OLD_STATUT_ID' => 2, 'HS_NEW_STATUT_ID' => 3, 'HS_REFUS_ID' => 4, 'ACTIF' => 5, 'USER_ID' => 6, 'DATE_CREATE' => 7, 'USER_MODIFY' => 8, 'DATE_MODIFY' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('hs_id' => 0, 'op_id' => 1, 'hs_old_statut_id' => 2, 'hs_new_statut_id' => 3, 'hs_refus_id' => 4, 'actif' => 5, 'user_id' => 6, 'date_create' => 7, 'user_modify' => 8, 'date_modify' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = OperationStatutsPeer::getFieldNames($toType);
        $key = isset(OperationStatutsPeer::$fieldKeys[$fromType][$name]) ? OperationStatutsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OperationStatutsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OperationStatutsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OperationStatutsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OperationStatutsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OperationStatutsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OperationStatutsPeer::HS_ID);
            $criteria->addSelectColumn(OperationStatutsPeer::OP_ID);
            $criteria->addSelectColumn(OperationStatutsPeer::HS_OLD_STATUT_ID);
            $criteria->addSelectColumn(OperationStatutsPeer::HS_NEW_STATUT_ID);
            $criteria->addSelectColumn(OperationStatutsPeer::HS_REFUS_ID);
            $criteria->addSelectColumn(OperationStatutsPeer::ACTIF);
            $criteria->addSelectColumn(OperationStatutsPeer::USER_ID);
            $criteria->addSelectColumn(OperationStatutsPeer::DATE_CREATE);
            $criteria->addSelectColumn(OperationStatutsPeer::USER_MODIFY);
            $criteria->addSelectColumn(OperationStatutsPeer::DATE_MODIFY);
        } else {
            $criteria->addSelectColumn($alias . '.hs_id');
            $criteria->addSelectColumn($alias . '.op_id');
            $criteria->addSelectColumn($alias . '.hs_old_statut_id');
            $criteria->addSelectColumn($alias . '.hs_new_statut_id');
            $criteria->addSelectColumn($alias . '.hs_refus_id');
            $criteria->addSelectColumn($alias . '.actif');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.user_modify');
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
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return OperationStatuts
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OperationStatutsPeer::doSelect($critcopy, $con);
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
        return OperationStatutsPeer::populateObjects(OperationStatutsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

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
     * @param OperationStatuts $obj A OperationStatuts object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getHsId();
            } // if key === null
            OperationStatutsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A OperationStatuts object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof OperationStatuts) {
                $key = (string) $value->getHsId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or OperationStatuts object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OperationStatutsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return OperationStatuts Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OperationStatutsPeer::$instances[$key])) {
                return OperationStatutsPeer::$instances[$key];
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
        foreach (OperationStatutsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OperationStatutsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to operation_statuts
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
        $cls = OperationStatutsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OperationStatutsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OperationStatutsPeer::addInstanceToPool($obj, $key);
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
     * @return array (OperationStatuts object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OperationStatutsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OperationStatutsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OperationStatutsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OperationStatutsPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OldROperationStatus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOldROperationStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::HS_OLD_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related NewROperationStatus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinNewROperationStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::HS_NEW_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ROperationStatutRefus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinROperationStatutRefus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Users table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUsers(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Selects a collection of OperationStatuts objects pre-filled with their Operations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;
        OperationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationStatuts) to $obj2 (Operations)
                $obj2->addOperationStatuts($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationStatuts objects pre-filled with their ROperationStatus objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOldROperationStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;
        ROperationStatusPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationStatutsPeer::HS_OLD_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationStatusPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationStatusPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationStatusPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationStatuts) to $obj2 (ROperationStatus)
                $obj2->addOperationStatutsRelatedByHsOldStatutId($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationStatuts objects pre-filled with their ROperationStatus objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinNewROperationStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;
        ROperationStatusPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationStatutsPeer::HS_NEW_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationStatusPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationStatusPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationStatusPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationStatuts) to $obj2 (ROperationStatus)
                $obj2->addOperationStatutsRelatedByHsNewStatutId($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationStatuts objects pre-filled with their ROperationStatutRefus objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinROperationStatutRefus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;
        ROperationStatutRefusPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationStatutRefusPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationStatutRefusPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationStatutRefusPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationStatutRefusPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationStatuts) to $obj2 (ROperationStatutRefus)
                $obj2->addOperationStatuts($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationStatuts objects pre-filled with their Users objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsers(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;
        UsersPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UsersPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UsersPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UsersPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationStatuts) to $obj2 (Users)
                $obj2->addOperationStatuts($obj1);

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
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_OLD_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_NEW_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Selects a collection of OperationStatuts objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol2 = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatutRefusPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ROperationStatutRefusPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_OLD_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_NEW_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationStatuts) to the collection in $obj2 (Operations)
                $obj2->addOperationStatuts($obj1);
            } // if joined row not null

            // Add objects for joined ROperationStatus rows

            $key3 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ROperationStatusPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ROperationStatusPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationStatusPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj3 (ROperationStatus)
                $obj3->addOperationStatutsRelatedByHsOldStatutId($obj1);
            } // if joined row not null

            // Add objects for joined ROperationStatus rows

            $key4 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ROperationStatusPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ROperationStatusPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ROperationStatusPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj4 (ROperationStatus)
                $obj4->addOperationStatutsRelatedByHsNewStatutId($obj1);
            } // if joined row not null

            // Add objects for joined ROperationStatutRefus rows

            $key5 = ROperationStatutRefusPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = ROperationStatutRefusPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = ROperationStatutRefusPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ROperationStatutRefusPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj5 (ROperationStatutRefus)
                $obj5->addOperationStatuts($obj1);
            } // if joined row not null

            // Add objects for joined Users rows

            $key6 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = UsersPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = UsersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsersPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj6 (Users)
                $obj6->addOperationStatuts($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
    public static function doCountJoinAllExceptOperations(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::HS_OLD_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_NEW_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OldROperationStatus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOldROperationStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related NewROperationStatus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptNewROperationStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ROperationStatutRefus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptROperationStatutRefus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_OLD_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_NEW_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Users table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUsers(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_OLD_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_NEW_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

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
     * Selects a collection of OperationStatuts objects pre-filled with all related objects except Operations.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol2 = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatutRefusPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ROperationStatutRefusPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationStatutsPeer::HS_OLD_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_NEW_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ROperationStatus rows

                $key2 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ROperationStatusPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ROperationStatusPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj2 (ROperationStatus)
                $obj2->addOperationStatutsRelatedByHsOldStatutId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key3 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ROperationStatusPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationStatusPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj3 (ROperationStatus)
                $obj3->addOperationStatutsRelatedByHsNewStatutId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationStatutRefus rows

                $key4 = ROperationStatutRefusPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ROperationStatutRefusPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ROperationStatutRefusPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ROperationStatutRefusPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj4 (ROperationStatutRefus)
                $obj4->addOperationStatuts($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj5 (Users)
                $obj5->addOperationStatuts($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationStatuts objects pre-filled with all related objects except OldROperationStatus.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOldROperationStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol2 = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatutRefusPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationStatutRefusPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj2 (Operations)
                $obj2->addOperationStatuts($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationStatutRefus rows

                $key3 = ROperationStatutRefusPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ROperationStatutRefusPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ROperationStatutRefusPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationStatutRefusPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj3 (ROperationStatutRefus)
                $obj3->addOperationStatuts($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key4 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UsersPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UsersPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsersPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj4 (Users)
                $obj4->addOperationStatuts($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationStatuts objects pre-filled with all related objects except NewROperationStatus.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptNewROperationStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol2 = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatutRefusPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationStatutRefusPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj2 (Operations)
                $obj2->addOperationStatuts($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationStatutRefus rows

                $key3 = ROperationStatutRefusPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ROperationStatutRefusPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ROperationStatutRefusPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationStatutRefusPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj3 (ROperationStatutRefus)
                $obj3->addOperationStatuts($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key4 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UsersPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UsersPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsersPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj4 (Users)
                $obj4->addOperationStatuts($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationStatuts objects pre-filled with all related objects except ROperationStatutRefus.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptROperationStatutRefus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol2 = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_OLD_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_NEW_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::USER_ID, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj2 (Operations)
                $obj2->addOperationStatuts($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key3 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ROperationStatusPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationStatusPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj3 (ROperationStatus)
                $obj3->addOperationStatutsRelatedByHsOldStatutId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key4 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ROperationStatusPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ROperationStatusPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj4 (ROperationStatus)
                $obj4->addOperationStatutsRelatedByHsNewStatutId($obj1);

            } // if joined row is not null

                // Add objects for joined Users rows

                $key5 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj5 (Users)
                $obj5->addOperationStatuts($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationStatuts objects pre-filled with all related objects except Users.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUsers(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);
        }

        OperationStatutsPeer::addSelectColumns($criteria);
        $startcol2 = OperationStatutsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatusPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ROperationStatusPeer::NUM_HYDRATE_COLUMNS;

        ROperationStatutRefusPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ROperationStatutRefusPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationStatutsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_OLD_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_NEW_STATUT_ID, ROperationStatusPeer::OS_ID, $join_behavior);

        $criteria->addJoin(OperationStatutsPeer::HS_REFUS_ID, ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationStatutsPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj2 (Operations)
                $obj2->addOperationStatuts($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key3 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ROperationStatusPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationStatusPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj3 (ROperationStatus)
                $obj3->addOperationStatutsRelatedByHsOldStatutId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationStatus rows

                $key4 = ROperationStatusPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ROperationStatusPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ROperationStatusPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ROperationStatusPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj4 (ROperationStatus)
                $obj4->addOperationStatutsRelatedByHsNewStatutId($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationStatutRefus rows

                $key5 = ROperationStatutRefusPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ROperationStatutRefusPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ROperationStatutRefusPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ROperationStatutRefusPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationStatuts) to the collection in $obj5 (ROperationStatutRefus)
                $obj5->addOperationStatuts($obj1);

            } // if joined row is not null

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
        return Propel::getDatabaseMap(OperationStatutsPeer::DATABASE_NAME)->getTable(OperationStatutsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOperationStatutsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOperationStatutsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OperationStatutsTableMap());
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
        return OperationStatutsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a OperationStatuts or Criteria object.
     *
     * @param      mixed $values Criteria or OperationStatuts object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from OperationStatuts object
        }

        if ($criteria->containsKey(OperationStatutsPeer::HS_ID) && $criteria->keyContainsValue(OperationStatutsPeer::HS_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OperationStatutsPeer::HS_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a OperationStatuts or Criteria object.
     *
     * @param      mixed $values Criteria or OperationStatuts object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OperationStatutsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OperationStatutsPeer::HS_ID);
            $value = $criteria->remove(OperationStatutsPeer::HS_ID);
            if ($value) {
                $selectCriteria->add(OperationStatutsPeer::HS_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OperationStatutsPeer::TABLE_NAME);
            }

        } else { // $values is OperationStatuts object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the operation_statuts table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OperationStatutsPeer::TABLE_NAME, $con, OperationStatutsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OperationStatutsPeer::clearInstancePool();
            OperationStatutsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a OperationStatuts or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or OperationStatuts object or primary key or array of primary keys
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
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OperationStatutsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof OperationStatuts) { // it's a model object
            // invalidate the cache for this single object
            OperationStatutsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OperationStatutsPeer::DATABASE_NAME);
            $criteria->add(OperationStatutsPeer::HS_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OperationStatutsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OperationStatutsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OperationStatutsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given OperationStatuts object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param OperationStatuts $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OperationStatutsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OperationStatutsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(OperationStatutsPeer::OP_ID))
            $columns[OperationStatutsPeer::OP_ID] = $obj->getOpId();

        if ($obj->isNew() || $obj->isColumnModified(OperationStatutsPeer::HS_OLD_STATUT_ID))
            $columns[OperationStatutsPeer::HS_OLD_STATUT_ID] = $obj->getHsOldStatutId();

        if ($obj->isNew() || $obj->isColumnModified(OperationStatutsPeer::HS_NEW_STATUT_ID))
            $columns[OperationStatutsPeer::HS_NEW_STATUT_ID] = $obj->getHsNewStatutId();

        if ($obj->isNew() || $obj->isColumnModified(OperationStatutsPeer::HS_REFUS_ID))
            $columns[OperationStatutsPeer::HS_REFUS_ID] = $obj->getHsRefusId();

        if ($obj->isNew() || $obj->isColumnModified(OperationStatutsPeer::ACTIF))
            $columns[OperationStatutsPeer::ACTIF] = $obj->getActif();

        if ($obj->isNew() || $obj->isColumnModified(OperationStatutsPeer::USER_ID))
            $columns[OperationStatutsPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(OperationStatutsPeer::DATE_CREATE))
            $columns[OperationStatutsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(OperationStatutsPeer::USER_MODIFY))
            $columns[OperationStatutsPeer::USER_MODIFY] = $obj->getUserModify();

        if ($obj->isNew() || $obj->isColumnModified(OperationStatutsPeer::DATE_MODIFY))
            $columns[OperationStatutsPeer::DATE_MODIFY] = $obj->getDateModify();

        }

        return BasePeer::doValidate(OperationStatutsPeer::DATABASE_NAME, OperationStatutsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return OperationStatuts
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OperationStatutsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OperationStatutsPeer::DATABASE_NAME);
        $criteria->add(OperationStatutsPeer::HS_ID, $pk);

        $v = OperationStatutsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return OperationStatuts[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OperationStatutsPeer::DATABASE_NAME);
            $criteria->add(OperationStatutsPeer::HS_ID, $pks, Criteria::IN);
            $objs = OperationStatutsPeer::doSelect($criteria, $con);
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
} // BaseOperationStatutsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOperationStatutsPeer::buildTableMap();

