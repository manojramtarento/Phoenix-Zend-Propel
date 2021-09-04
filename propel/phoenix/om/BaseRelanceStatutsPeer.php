<?php


/**
 * Base static class for performing query and update operations on the 'relance_statuts' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseRelanceStatutsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'relance_statuts';

    /** the related Propel class for this table */
    const OM_CLASS = 'RelanceStatuts';

    /** the related TableMap class for this table */
    const TM_CLASS = 'RelanceStatutsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the rs_id field */
    const RS_ID = 'relance_statuts.rs_id';

    /** the column name for the rel_id field */
    const REL_ID = 'relance_statuts.rel_id';

    /** the column name for the r_rel_stat_id field */
    const R_REL_STAT_ID = 'relance_statuts.r_rel_stat_id';

    /** the column name for the user_id field */
    const USER_ID = 'relance_statuts.user_id';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'relance_statuts.user_modify';

    /** the column name for the date_create field */
    const DATE_CREATE = 'relance_statuts.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'relance_statuts.date_modify';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of RelanceStatuts objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array RelanceStatuts[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. RelanceStatutsPeer::$fieldNames[RelanceStatutsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('RsId', 'RelId', 'RRelStatId', 'UserId', 'UserModify', 'DateCreate', 'DateModify', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('rsId', 'relId', 'rRelStatId', 'userId', 'userModify', 'dateCreate', 'dateModify', ),
        BasePeer::TYPE_COLNAME => array (RelanceStatutsPeer::RS_ID, RelanceStatutsPeer::REL_ID, RelanceStatutsPeer::R_REL_STAT_ID, RelanceStatutsPeer::USER_ID, RelanceStatutsPeer::USER_MODIFY, RelanceStatutsPeer::DATE_CREATE, RelanceStatutsPeer::DATE_MODIFY, ),
        BasePeer::TYPE_RAW_COLNAME => array ('RS_ID', 'REL_ID', 'R_REL_STAT_ID', 'USER_ID', 'USER_MODIFY', 'DATE_CREATE', 'DATE_MODIFY', ),
        BasePeer::TYPE_FIELDNAME => array ('rs_id', 'rel_id', 'r_rel_stat_id', 'user_id', 'user_modify', 'date_create', 'date_modify', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. RelanceStatutsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('RsId' => 0, 'RelId' => 1, 'RRelStatId' => 2, 'UserId' => 3, 'UserModify' => 4, 'DateCreate' => 5, 'DateModify' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('rsId' => 0, 'relId' => 1, 'rRelStatId' => 2, 'userId' => 3, 'userModify' => 4, 'dateCreate' => 5, 'dateModify' => 6, ),
        BasePeer::TYPE_COLNAME => array (RelanceStatutsPeer::RS_ID => 0, RelanceStatutsPeer::REL_ID => 1, RelanceStatutsPeer::R_REL_STAT_ID => 2, RelanceStatutsPeer::USER_ID => 3, RelanceStatutsPeer::USER_MODIFY => 4, RelanceStatutsPeer::DATE_CREATE => 5, RelanceStatutsPeer::DATE_MODIFY => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('RS_ID' => 0, 'REL_ID' => 1, 'R_REL_STAT_ID' => 2, 'USER_ID' => 3, 'USER_MODIFY' => 4, 'DATE_CREATE' => 5, 'DATE_MODIFY' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('rs_id' => 0, 'rel_id' => 1, 'r_rel_stat_id' => 2, 'user_id' => 3, 'user_modify' => 4, 'date_create' => 5, 'date_modify' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
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
        $toNames = RelanceStatutsPeer::getFieldNames($toType);
        $key = isset(RelanceStatutsPeer::$fieldKeys[$fromType][$name]) ? RelanceStatutsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(RelanceStatutsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, RelanceStatutsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return RelanceStatutsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. RelanceStatutsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RelanceStatutsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(RelanceStatutsPeer::RS_ID);
            $criteria->addSelectColumn(RelanceStatutsPeer::REL_ID);
            $criteria->addSelectColumn(RelanceStatutsPeer::R_REL_STAT_ID);
            $criteria->addSelectColumn(RelanceStatutsPeer::USER_ID);
            $criteria->addSelectColumn(RelanceStatutsPeer::USER_MODIFY);
            $criteria->addSelectColumn(RelanceStatutsPeer::DATE_CREATE);
            $criteria->addSelectColumn(RelanceStatutsPeer::DATE_MODIFY);
        } else {
            $criteria->addSelectColumn($alias . '.rs_id');
            $criteria->addSelectColumn($alias . '.rel_id');
            $criteria->addSelectColumn($alias . '.r_rel_stat_id');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.user_modify');
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
        $criteria->setPrimaryTableName(RelanceStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelanceStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return RelanceStatuts
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RelanceStatutsPeer::doSelect($critcopy, $con);
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
        return RelanceStatutsPeer::populateObjects(RelanceStatutsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RelanceStatutsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);

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
     * @param RelanceStatuts $obj A RelanceStatuts object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRsId();
            } // if key === null
            RelanceStatutsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A RelanceStatuts object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof RelanceStatuts) {
                $key = (string) $value->getRsId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or RelanceStatuts object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(RelanceStatutsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return RelanceStatuts Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(RelanceStatutsPeer::$instances[$key])) {
                return RelanceStatutsPeer::$instances[$key];
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
        foreach (RelanceStatutsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        RelanceStatutsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to relance_statuts
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
        $cls = RelanceStatutsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RelanceStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RelanceStatutsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RelanceStatutsPeer::addInstanceToPool($obj, $key);
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
     * @return array (RelanceStatuts object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RelanceStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RelanceStatutsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RelanceStatutsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RelanceStatutsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RelanceStatutsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related RRelanceStatuts table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRRelanceStatuts(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RelanceStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelanceStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelanceStatutsPeer::R_REL_STAT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Relances table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRelances(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RelanceStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelanceStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelanceStatutsPeer::REL_ID, RelancesPeer::REL_ID, $join_behavior);

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
     * Selects a collection of RelanceStatuts objects pre-filled with their RRelanceStatuts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RelanceStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRRelanceStatuts(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);
        }

        RelanceStatutsPeer::addSelectColumns($criteria);
        $startcol = RelanceStatutsPeer::NUM_HYDRATE_COLUMNS;
        RRelanceStatutsPeer::addSelectColumns($criteria);

        $criteria->addJoin(RelanceStatutsPeer::R_REL_STAT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelanceStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelanceStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RelanceStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelanceStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RRelanceStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RRelanceStatutsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RRelanceStatutsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RRelanceStatutsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (RelanceStatuts) to $obj2 (RRelanceStatuts)
                $obj2->addRelanceStatuts($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RelanceStatuts objects pre-filled with their Relances objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RelanceStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRelances(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);
        }

        RelanceStatutsPeer::addSelectColumns($criteria);
        $startcol = RelanceStatutsPeer::NUM_HYDRATE_COLUMNS;
        RelancesPeer::addSelectColumns($criteria);

        $criteria->addJoin(RelanceStatutsPeer::REL_ID, RelancesPeer::REL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelanceStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelanceStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RelanceStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelanceStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RelancesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RelancesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RelancesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RelancesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (RelanceStatuts) to $obj2 (Relances)
                $obj2->addRelanceStatuts($obj1);

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
        $criteria->setPrimaryTableName(RelanceStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelanceStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelanceStatutsPeer::R_REL_STAT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelanceStatutsPeer::REL_ID, RelancesPeer::REL_ID, $join_behavior);

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
     * Selects a collection of RelanceStatuts objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RelanceStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);
        }

        RelanceStatutsPeer::addSelectColumns($criteria);
        $startcol2 = RelanceStatutsPeer::NUM_HYDRATE_COLUMNS;

        RRelanceStatutsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RRelanceStatutsPeer::NUM_HYDRATE_COLUMNS;

        RelancesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RelancesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RelanceStatutsPeer::R_REL_STAT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelanceStatutsPeer::REL_ID, RelancesPeer::REL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelanceStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelanceStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RelanceStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelanceStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined RRelanceStatuts rows

            $key2 = RRelanceStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = RRelanceStatutsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RRelanceStatutsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RRelanceStatutsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (RelanceStatuts) to the collection in $obj2 (RRelanceStatuts)
                $obj2->addRelanceStatuts($obj1);
            } // if joined row not null

            // Add objects for joined Relances rows

            $key3 = RelancesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = RelancesPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = RelancesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RelancesPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (RelanceStatuts) to the collection in $obj3 (Relances)
                $obj3->addRelanceStatuts($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related RRelanceStatuts table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRRelanceStatuts(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RelanceStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelanceStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelanceStatutsPeer::REL_ID, RelancesPeer::REL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Relances table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRelances(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RelanceStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelanceStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelanceStatutsPeer::R_REL_STAT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

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
     * Selects a collection of RelanceStatuts objects pre-filled with all related objects except RRelanceStatuts.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RelanceStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRRelanceStatuts(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);
        }

        RelanceStatutsPeer::addSelectColumns($criteria);
        $startcol2 = RelanceStatutsPeer::NUM_HYDRATE_COLUMNS;

        RelancesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RelancesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RelanceStatutsPeer::REL_ID, RelancesPeer::REL_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelanceStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelanceStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RelanceStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelanceStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Relances rows

                $key2 = RelancesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RelancesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RelancesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RelancesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (RelanceStatuts) to the collection in $obj2 (Relances)
                $obj2->addRelanceStatuts($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of RelanceStatuts objects pre-filled with all related objects except Relances.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of RelanceStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRelances(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);
        }

        RelanceStatutsPeer::addSelectColumns($criteria);
        $startcol2 = RelanceStatutsPeer::NUM_HYDRATE_COLUMNS;

        RRelanceStatutsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RRelanceStatutsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RelanceStatutsPeer::R_REL_STAT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelanceStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelanceStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RelanceStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelanceStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RRelanceStatuts rows

                $key2 = RRelanceStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RRelanceStatutsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RRelanceStatutsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RRelanceStatutsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (RelanceStatuts) to the collection in $obj2 (RRelanceStatuts)
                $obj2->addRelanceStatuts($obj1);

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
        return Propel::getDatabaseMap(RelanceStatutsPeer::DATABASE_NAME)->getTable(RelanceStatutsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseRelanceStatutsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseRelanceStatutsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \RelanceStatutsTableMap());
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
        return RelanceStatutsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a RelanceStatuts or Criteria object.
     *
     * @param      mixed $values Criteria or RelanceStatuts object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from RelanceStatuts object
        }

        if ($criteria->containsKey(RelanceStatutsPeer::RS_ID) && $criteria->keyContainsValue(RelanceStatutsPeer::RS_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RelanceStatutsPeer::RS_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a RelanceStatuts or Criteria object.
     *
     * @param      mixed $values Criteria or RelanceStatuts object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(RelanceStatutsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RelanceStatutsPeer::RS_ID);
            $value = $criteria->remove(RelanceStatutsPeer::RS_ID);
            if ($value) {
                $selectCriteria->add(RelanceStatutsPeer::RS_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RelanceStatutsPeer::TABLE_NAME);
            }

        } else { // $values is RelanceStatuts object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the relance_statuts table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(RelanceStatutsPeer::TABLE_NAME, $con, RelanceStatutsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RelanceStatutsPeer::clearInstancePool();
            RelanceStatutsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a RelanceStatuts or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or RelanceStatuts object or primary key or array of primary keys
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
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            RelanceStatutsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof RelanceStatuts) { // it's a model object
            // invalidate the cache for this single object
            RelanceStatutsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RelanceStatutsPeer::DATABASE_NAME);
            $criteria->add(RelanceStatutsPeer::RS_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                RelanceStatutsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(RelanceStatutsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            RelanceStatutsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given RelanceStatuts object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param RelanceStatuts $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RelanceStatutsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RelanceStatutsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(RelanceStatutsPeer::REL_ID))
            $columns[RelanceStatutsPeer::REL_ID] = $obj->getRelId();

        if ($obj->isNew() || $obj->isColumnModified(RelanceStatutsPeer::R_REL_STAT_ID))
            $columns[RelanceStatutsPeer::R_REL_STAT_ID] = $obj->getRRelStatId();

        if ($obj->isNew() || $obj->isColumnModified(RelanceStatutsPeer::USER_ID))
            $columns[RelanceStatutsPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(RelanceStatutsPeer::USER_MODIFY))
            $columns[RelanceStatutsPeer::USER_MODIFY] = $obj->getUserModify();

        if ($obj->isNew() || $obj->isColumnModified(RelanceStatutsPeer::DATE_CREATE))
            $columns[RelanceStatutsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(RelanceStatutsPeer::DATE_MODIFY))
            $columns[RelanceStatutsPeer::DATE_MODIFY] = $obj->getDateModify();

        }

        return BasePeer::doValidate(RelanceStatutsPeer::DATABASE_NAME, RelanceStatutsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return RelanceStatuts
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RelanceStatutsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RelanceStatutsPeer::DATABASE_NAME);
        $criteria->add(RelanceStatutsPeer::RS_ID, $pk);

        $v = RelanceStatutsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return RelanceStatuts[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RelanceStatutsPeer::DATABASE_NAME);
            $criteria->add(RelanceStatutsPeer::RS_ID, $pks, Criteria::IN);
            $objs = RelanceStatutsPeer::doSelect($criteria, $con);
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
} // BaseRelanceStatutsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRelanceStatutsPeer::buildTableMap();

