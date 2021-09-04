<?php


/**
 * Base static class for performing query and update operations on the 'histo_couts' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseHistoCoutsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'histo_couts';

    /** the related Propel class for this table */
    const OM_CLASS = 'HistoCouts';

    /** the related TableMap class for this table */
    const TM_CLASS = 'HistoCoutsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the histo_couts_id field */
    const HISTO_COUTS_ID = 'histo_couts.histo_couts_id';

    /** the column name for the op_prest_id field */
    const OP_PREST_ID = 'histo_couts.op_prest_id';

    /** the column name for the user_id field */
    const USER_ID = 'histo_couts.user_id';

    /** the column name for the histo_couts_value field */
    const HISTO_COUTS_VALUE = 'histo_couts.histo_couts_value';

    /** the column name for the r_couts_nature_id field */
    const R_COUTS_NATURE_ID = 'histo_couts.r_couts_nature_id';

    /** the column name for the date_create field */
    const DATE_CREATE = 'histo_couts.date_create';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of HistoCouts objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array HistoCouts[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. HistoCoutsPeer::$fieldNames[HistoCoutsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('HistoCoutsId', 'OpPrestId', 'UserId', 'HistoCoutsValue', 'RCoutsNatureId', 'DateCreate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('histoCoutsId', 'opPrestId', 'userId', 'histoCoutsValue', 'rCoutsNatureId', 'dateCreate', ),
        BasePeer::TYPE_COLNAME => array (HistoCoutsPeer::HISTO_COUTS_ID, HistoCoutsPeer::OP_PREST_ID, HistoCoutsPeer::USER_ID, HistoCoutsPeer::HISTO_COUTS_VALUE, HistoCoutsPeer::R_COUTS_NATURE_ID, HistoCoutsPeer::DATE_CREATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('HISTO_COUTS_ID', 'OP_PREST_ID', 'USER_ID', 'HISTO_COUTS_VALUE', 'R_COUTS_NATURE_ID', 'DATE_CREATE', ),
        BasePeer::TYPE_FIELDNAME => array ('histo_couts_id', 'op_prest_id', 'user_id', 'histo_couts_value', 'r_couts_nature_id', 'date_create', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. HistoCoutsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('HistoCoutsId' => 0, 'OpPrestId' => 1, 'UserId' => 2, 'HistoCoutsValue' => 3, 'RCoutsNatureId' => 4, 'DateCreate' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('histoCoutsId' => 0, 'opPrestId' => 1, 'userId' => 2, 'histoCoutsValue' => 3, 'rCoutsNatureId' => 4, 'dateCreate' => 5, ),
        BasePeer::TYPE_COLNAME => array (HistoCoutsPeer::HISTO_COUTS_ID => 0, HistoCoutsPeer::OP_PREST_ID => 1, HistoCoutsPeer::USER_ID => 2, HistoCoutsPeer::HISTO_COUTS_VALUE => 3, HistoCoutsPeer::R_COUTS_NATURE_ID => 4, HistoCoutsPeer::DATE_CREATE => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('HISTO_COUTS_ID' => 0, 'OP_PREST_ID' => 1, 'USER_ID' => 2, 'HISTO_COUTS_VALUE' => 3, 'R_COUTS_NATURE_ID' => 4, 'DATE_CREATE' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('histo_couts_id' => 0, 'op_prest_id' => 1, 'user_id' => 2, 'histo_couts_value' => 3, 'r_couts_nature_id' => 4, 'date_create' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
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
        $toNames = HistoCoutsPeer::getFieldNames($toType);
        $key = isset(HistoCoutsPeer::$fieldKeys[$fromType][$name]) ? HistoCoutsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(HistoCoutsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, HistoCoutsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return HistoCoutsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. HistoCoutsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(HistoCoutsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(HistoCoutsPeer::HISTO_COUTS_ID);
            $criteria->addSelectColumn(HistoCoutsPeer::OP_PREST_ID);
            $criteria->addSelectColumn(HistoCoutsPeer::USER_ID);
            $criteria->addSelectColumn(HistoCoutsPeer::HISTO_COUTS_VALUE);
            $criteria->addSelectColumn(HistoCoutsPeer::R_COUTS_NATURE_ID);
            $criteria->addSelectColumn(HistoCoutsPeer::DATE_CREATE);
        } else {
            $criteria->addSelectColumn($alias . '.histo_couts_id');
            $criteria->addSelectColumn($alias . '.op_prest_id');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.histo_couts_value');
            $criteria->addSelectColumn($alias . '.r_couts_nature_id');
            $criteria->addSelectColumn($alias . '.date_create');
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
        $criteria->setPrimaryTableName(HistoCoutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            HistoCoutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(HistoCoutsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return HistoCouts
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = HistoCoutsPeer::doSelect($critcopy, $con);
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
        return HistoCoutsPeer::populateObjects(HistoCoutsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            HistoCoutsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(HistoCoutsPeer::DATABASE_NAME);

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
     * @param HistoCouts $obj A HistoCouts object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getHistoCoutsId();
            } // if key === null
            HistoCoutsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A HistoCouts object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof HistoCouts) {
                $key = (string) $value->getHistoCoutsId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or HistoCouts object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(HistoCoutsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return HistoCouts Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(HistoCoutsPeer::$instances[$key])) {
                return HistoCoutsPeer::$instances[$key];
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
        foreach (HistoCoutsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        HistoCoutsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to histo_couts
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
        $cls = HistoCoutsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = HistoCoutsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                HistoCoutsPeer::addInstanceToPool($obj, $key);
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
     * @return array (HistoCouts object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = HistoCoutsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + HistoCoutsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = HistoCoutsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            HistoCoutsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related RCoutsNature table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRCoutsNature(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(HistoCoutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            HistoCoutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(HistoCoutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(HistoCoutsPeer::R_COUTS_NATURE_ID, RCoutsNaturePeer::R_COUTS_NATURE_ID, $join_behavior);

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
     * Selects a collection of HistoCouts objects pre-filled with their RCoutsNature objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of HistoCouts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRCoutsNature(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(HistoCoutsPeer::DATABASE_NAME);
        }

        HistoCoutsPeer::addSelectColumns($criteria);
        $startcol = HistoCoutsPeer::NUM_HYDRATE_COLUMNS;
        RCoutsNaturePeer::addSelectColumns($criteria);

        $criteria->addJoin(HistoCoutsPeer::R_COUTS_NATURE_ID, RCoutsNaturePeer::R_COUTS_NATURE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = HistoCoutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = HistoCoutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                HistoCoutsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RCoutsNaturePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RCoutsNaturePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RCoutsNaturePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RCoutsNaturePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (HistoCouts) to $obj2 (RCoutsNature)
                $obj2->addHistoCouts($obj1);

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
        $criteria->setPrimaryTableName(HistoCoutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            HistoCoutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(HistoCoutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(HistoCoutsPeer::R_COUTS_NATURE_ID, RCoutsNaturePeer::R_COUTS_NATURE_ID, $join_behavior);

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
     * Selects a collection of HistoCouts objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of HistoCouts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(HistoCoutsPeer::DATABASE_NAME);
        }

        HistoCoutsPeer::addSelectColumns($criteria);
        $startcol2 = HistoCoutsPeer::NUM_HYDRATE_COLUMNS;

        RCoutsNaturePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RCoutsNaturePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(HistoCoutsPeer::R_COUTS_NATURE_ID, RCoutsNaturePeer::R_COUTS_NATURE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = HistoCoutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = HistoCoutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = HistoCoutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                HistoCoutsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined RCoutsNature rows

            $key2 = RCoutsNaturePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = RCoutsNaturePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RCoutsNaturePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RCoutsNaturePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (HistoCouts) to the collection in $obj2 (RCoutsNature)
                $obj2->addHistoCouts($obj1);
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
        return Propel::getDatabaseMap(HistoCoutsPeer::DATABASE_NAME)->getTable(HistoCoutsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseHistoCoutsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseHistoCoutsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \HistoCoutsTableMap());
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
        return HistoCoutsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a HistoCouts or Criteria object.
     *
     * @param      mixed $values Criteria or HistoCouts object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from HistoCouts object
        }

        if ($criteria->containsKey(HistoCoutsPeer::HISTO_COUTS_ID) && $criteria->keyContainsValue(HistoCoutsPeer::HISTO_COUTS_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.HistoCoutsPeer::HISTO_COUTS_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(HistoCoutsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a HistoCouts or Criteria object.
     *
     * @param      mixed $values Criteria or HistoCouts object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(HistoCoutsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(HistoCoutsPeer::HISTO_COUTS_ID);
            $value = $criteria->remove(HistoCoutsPeer::HISTO_COUTS_ID);
            if ($value) {
                $selectCriteria->add(HistoCoutsPeer::HISTO_COUTS_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(HistoCoutsPeer::TABLE_NAME);
            }

        } else { // $values is HistoCouts object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(HistoCoutsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the histo_couts table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(HistoCoutsPeer::TABLE_NAME, $con, HistoCoutsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            HistoCoutsPeer::clearInstancePool();
            HistoCoutsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a HistoCouts or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or HistoCouts object or primary key or array of primary keys
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
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            HistoCoutsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof HistoCouts) { // it's a model object
            // invalidate the cache for this single object
            HistoCoutsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(HistoCoutsPeer::DATABASE_NAME);
            $criteria->add(HistoCoutsPeer::HISTO_COUTS_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                HistoCoutsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(HistoCoutsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            HistoCoutsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given HistoCouts object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param HistoCouts $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(HistoCoutsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(HistoCoutsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(HistoCoutsPeer::OP_PREST_ID))
            $columns[HistoCoutsPeer::OP_PREST_ID] = $obj->getOpPrestId();

        if ($obj->isNew() || $obj->isColumnModified(HistoCoutsPeer::USER_ID))
            $columns[HistoCoutsPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(HistoCoutsPeer::HISTO_COUTS_VALUE))
            $columns[HistoCoutsPeer::HISTO_COUTS_VALUE] = $obj->getHistoCoutsValue();

        if ($obj->isNew() || $obj->isColumnModified(HistoCoutsPeer::R_COUTS_NATURE_ID))
            $columns[HistoCoutsPeer::R_COUTS_NATURE_ID] = $obj->getRCoutsNatureId();

        if ($obj->isNew() || $obj->isColumnModified(HistoCoutsPeer::DATE_CREATE))
            $columns[HistoCoutsPeer::DATE_CREATE] = $obj->getDateCreate();

        }

        return BasePeer::doValidate(HistoCoutsPeer::DATABASE_NAME, HistoCoutsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return HistoCouts
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = HistoCoutsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(HistoCoutsPeer::DATABASE_NAME);
        $criteria->add(HistoCoutsPeer::HISTO_COUTS_ID, $pk);

        $v = HistoCoutsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return HistoCouts[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(HistoCoutsPeer::DATABASE_NAME);
            $criteria->add(HistoCoutsPeer::HISTO_COUTS_ID, $pks, Criteria::IN);
            $objs = HistoCoutsPeer::doSelect($criteria, $con);
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
} // BaseHistoCoutsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseHistoCoutsPeer::buildTableMap();

