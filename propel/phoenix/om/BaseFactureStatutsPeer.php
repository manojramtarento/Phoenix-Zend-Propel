<?php


/**
 * Base static class for performing query and update operations on the 'facture_statuts' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseFactureStatutsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'facture_statuts';

    /** the related Propel class for this table */
    const OM_CLASS = 'FactureStatuts';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FactureStatutsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the fs_id field */
    const FS_ID = 'facture_statuts.fs_id';

    /** the column name for the fact_id field */
    const FACT_ID = 'facture_statuts.fact_id';

    /** the column name for the r_fact_stat_id field */
    const R_FACT_STAT_ID = 'facture_statuts.r_fact_stat_id';

    /** the column name for the user_id field */
    const USER_ID = 'facture_statuts.user_id';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'facture_statuts.user_modify';

    /** the column name for the date_create field */
    const DATE_CREATE = 'facture_statuts.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'facture_statuts.date_modify';

    /** the column name for the is_effective field */
    const IS_EFFECTIVE = 'facture_statuts.is_effective';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of FactureStatuts objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array FactureStatuts[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FactureStatutsPeer::$fieldNames[FactureStatutsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('FsId', 'FactId', 'RFactStatId', 'UserId', 'UserModify', 'DateCreate', 'DateModify', 'IsEffective', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('fsId', 'factId', 'rFactStatId', 'userId', 'userModify', 'dateCreate', 'dateModify', 'isEffective', ),
        BasePeer::TYPE_COLNAME => array (FactureStatutsPeer::FS_ID, FactureStatutsPeer::FACT_ID, FactureStatutsPeer::R_FACT_STAT_ID, FactureStatutsPeer::USER_ID, FactureStatutsPeer::USER_MODIFY, FactureStatutsPeer::DATE_CREATE, FactureStatutsPeer::DATE_MODIFY, FactureStatutsPeer::IS_EFFECTIVE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FS_ID', 'FACT_ID', 'R_FACT_STAT_ID', 'USER_ID', 'USER_MODIFY', 'DATE_CREATE', 'DATE_MODIFY', 'IS_EFFECTIVE', ),
        BasePeer::TYPE_FIELDNAME => array ('fs_id', 'fact_id', 'r_fact_stat_id', 'user_id', 'user_modify', 'date_create', 'date_modify', 'is_effective', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FactureStatutsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('FsId' => 0, 'FactId' => 1, 'RFactStatId' => 2, 'UserId' => 3, 'UserModify' => 4, 'DateCreate' => 5, 'DateModify' => 6, 'IsEffective' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('fsId' => 0, 'factId' => 1, 'rFactStatId' => 2, 'userId' => 3, 'userModify' => 4, 'dateCreate' => 5, 'dateModify' => 6, 'isEffective' => 7, ),
        BasePeer::TYPE_COLNAME => array (FactureStatutsPeer::FS_ID => 0, FactureStatutsPeer::FACT_ID => 1, FactureStatutsPeer::R_FACT_STAT_ID => 2, FactureStatutsPeer::USER_ID => 3, FactureStatutsPeer::USER_MODIFY => 4, FactureStatutsPeer::DATE_CREATE => 5, FactureStatutsPeer::DATE_MODIFY => 6, FactureStatutsPeer::IS_EFFECTIVE => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FS_ID' => 0, 'FACT_ID' => 1, 'R_FACT_STAT_ID' => 2, 'USER_ID' => 3, 'USER_MODIFY' => 4, 'DATE_CREATE' => 5, 'DATE_MODIFY' => 6, 'IS_EFFECTIVE' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('fs_id' => 0, 'fact_id' => 1, 'r_fact_stat_id' => 2, 'user_id' => 3, 'user_modify' => 4, 'date_create' => 5, 'date_modify' => 6, 'is_effective' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
        $toNames = FactureStatutsPeer::getFieldNames($toType);
        $key = isset(FactureStatutsPeer::$fieldKeys[$fromType][$name]) ? FactureStatutsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FactureStatutsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FactureStatutsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FactureStatutsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FactureStatutsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FactureStatutsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FactureStatutsPeer::FS_ID);
            $criteria->addSelectColumn(FactureStatutsPeer::FACT_ID);
            $criteria->addSelectColumn(FactureStatutsPeer::R_FACT_STAT_ID);
            $criteria->addSelectColumn(FactureStatutsPeer::USER_ID);
            $criteria->addSelectColumn(FactureStatutsPeer::USER_MODIFY);
            $criteria->addSelectColumn(FactureStatutsPeer::DATE_CREATE);
            $criteria->addSelectColumn(FactureStatutsPeer::DATE_MODIFY);
            $criteria->addSelectColumn(FactureStatutsPeer::IS_EFFECTIVE);
        } else {
            $criteria->addSelectColumn($alias . '.fs_id');
            $criteria->addSelectColumn($alias . '.fact_id');
            $criteria->addSelectColumn($alias . '.r_fact_stat_id');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.user_modify');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.is_effective');
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
        $criteria->setPrimaryTableName(FactureStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactureStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FactureStatutsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return FactureStatuts
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FactureStatutsPeer::doSelect($critcopy, $con);
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
        return FactureStatutsPeer::populateObjects(FactureStatutsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FactureStatutsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FactureStatutsPeer::DATABASE_NAME);

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
     * @param FactureStatuts $obj A FactureStatuts object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getFsId();
            } // if key === null
            FactureStatutsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A FactureStatuts object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof FactureStatuts) {
                $key = (string) $value->getFsId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or FactureStatuts object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FactureStatutsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return FactureStatuts Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FactureStatutsPeer::$instances[$key])) {
                return FactureStatutsPeer::$instances[$key];
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
        foreach (FactureStatutsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FactureStatutsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to facture_statuts
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
        $cls = FactureStatutsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FactureStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FactureStatutsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FactureStatutsPeer::addInstanceToPool($obj, $key);
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
     * @return array (FactureStatuts object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FactureStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FactureStatutsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FactureStatutsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FactureStatutsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FactureStatutsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Factures table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinFactures(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactureStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactureStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FactureStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactureStatutsPeer::FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

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
     * Selects a collection of FactureStatuts objects pre-filled with their Factures objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactureStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinFactures(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactureStatutsPeer::DATABASE_NAME);
        }

        FactureStatutsPeer::addSelectColumns($criteria);
        $startcol = FactureStatutsPeer::NUM_HYDRATE_COLUMNS;
        FacturesPeer::addSelectColumns($criteria);

        $criteria->addJoin(FactureStatutsPeer::FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactureStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactureStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FactureStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactureStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = FacturesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = FacturesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    FacturesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (FactureStatuts) to $obj2 (Factures)
                $obj2->addFactureStatuts($obj1);

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
        $criteria->setPrimaryTableName(FactureStatutsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactureStatutsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FactureStatutsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactureStatutsPeer::FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

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
     * Selects a collection of FactureStatuts objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactureStatuts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactureStatutsPeer::DATABASE_NAME);
        }

        FactureStatutsPeer::addSelectColumns($criteria);
        $startcol2 = FactureStatutsPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FactureStatutsPeer::FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactureStatutsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactureStatutsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FactureStatutsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactureStatutsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Factures rows

            $key2 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = FacturesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = FacturesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    FacturesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (FactureStatuts) to the collection in $obj2 (Factures)
                $obj2->addFactureStatuts($obj1);
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
        return Propel::getDatabaseMap(FactureStatutsPeer::DATABASE_NAME)->getTable(FactureStatutsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFactureStatutsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFactureStatutsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FactureStatutsTableMap());
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
        return FactureStatutsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a FactureStatuts or Criteria object.
     *
     * @param      mixed $values Criteria or FactureStatuts object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from FactureStatuts object
        }

        if ($criteria->containsKey(FactureStatutsPeer::FS_ID) && $criteria->keyContainsValue(FactureStatutsPeer::FS_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FactureStatutsPeer::FS_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FactureStatutsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a FactureStatuts or Criteria object.
     *
     * @param      mixed $values Criteria or FactureStatuts object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FactureStatutsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FactureStatutsPeer::FS_ID);
            $value = $criteria->remove(FactureStatutsPeer::FS_ID);
            if ($value) {
                $selectCriteria->add(FactureStatutsPeer::FS_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FactureStatutsPeer::TABLE_NAME);
            }

        } else { // $values is FactureStatuts object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FactureStatutsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the facture_statuts table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FactureStatutsPeer::TABLE_NAME, $con, FactureStatutsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FactureStatutsPeer::clearInstancePool();
            FactureStatutsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a FactureStatuts or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or FactureStatuts object or primary key or array of primary keys
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
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FactureStatutsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof FactureStatuts) { // it's a model object
            // invalidate the cache for this single object
            FactureStatutsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FactureStatutsPeer::DATABASE_NAME);
            $criteria->add(FactureStatutsPeer::FS_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FactureStatutsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FactureStatutsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FactureStatutsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given FactureStatuts object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param FactureStatuts $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FactureStatutsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FactureStatutsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(FactureStatutsPeer::FACT_ID))
            $columns[FactureStatutsPeer::FACT_ID] = $obj->getFactId();

        if ($obj->isNew() || $obj->isColumnModified(FactureStatutsPeer::R_FACT_STAT_ID))
            $columns[FactureStatutsPeer::R_FACT_STAT_ID] = $obj->getRFactStatId();

        if ($obj->isNew() || $obj->isColumnModified(FactureStatutsPeer::USER_ID))
            $columns[FactureStatutsPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(FactureStatutsPeer::USER_MODIFY))
            $columns[FactureStatutsPeer::USER_MODIFY] = $obj->getUserModify();

        if ($obj->isNew() || $obj->isColumnModified(FactureStatutsPeer::DATE_CREATE))
            $columns[FactureStatutsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(FactureStatutsPeer::DATE_MODIFY))
            $columns[FactureStatutsPeer::DATE_MODIFY] = $obj->getDateModify();

        }

        return BasePeer::doValidate(FactureStatutsPeer::DATABASE_NAME, FactureStatutsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return FactureStatuts
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FactureStatutsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FactureStatutsPeer::DATABASE_NAME);
        $criteria->add(FactureStatutsPeer::FS_ID, $pk);

        $v = FactureStatutsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return FactureStatuts[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FactureStatutsPeer::DATABASE_NAME);
            $criteria->add(FactureStatutsPeer::FS_ID, $pks, Criteria::IN);
            $objs = FactureStatutsPeer::doSelect($criteria, $con);
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
} // BaseFactureStatutsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFactureStatutsPeer::buildTableMap();

