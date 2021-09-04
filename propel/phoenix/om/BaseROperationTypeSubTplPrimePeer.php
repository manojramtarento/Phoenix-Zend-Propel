<?php


/**
 * Base static class for performing query and update operations on the 'r_operation_type_sub_tpl_prime' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplPrimePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'r_operation_type_sub_tpl_prime';

    /** the related Propel class for this table */
    const OM_CLASS = 'ROperationTypeSubTplPrime';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ROperationTypeSubTplPrimeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the ost_tpl_prime_id field */
    const OST_TPL_PRIME_ID = 'r_operation_type_sub_tpl_prime.ost_tpl_prime_id';

    /** the column name for the ost_tpl_id field */
    const OST_TPL_ID = 'r_operation_type_sub_tpl_prime.ost_tpl_id';

    /** the column name for the ost_tpl_prime_libelle field */
    const OST_TPL_PRIME_LIBELLE = 'r_operation_type_sub_tpl_prime.ost_tpl_prime_libelle';

    /** the column name for the ost_tpl_prime_numero field */
    const OST_TPL_PRIME_NUMERO = 'r_operation_type_sub_tpl_prime.ost_tpl_prime_numero';

    /** the column name for the ost_tpl_reward_type field */
    const OST_TPL_REWARD_TYPE = 'r_operation_type_sub_tpl_prime.ost_tpl_reward_type';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ROperationTypeSubTplPrime objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ROperationTypeSubTplPrime[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ROperationTypeSubTplPrimePeer::$fieldNames[ROperationTypeSubTplPrimePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('OstTplPrimeId', 'OstTplId', 'OstTplPrimeLibelle', 'OstTplPrimeNumero', 'OstTplRewardType', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ostTplPrimeId', 'ostTplId', 'ostTplPrimeLibelle', 'ostTplPrimeNumero', 'ostTplRewardType', ),
        BasePeer::TYPE_COLNAME => array (ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, ROperationTypeSubTplPrimePeer::OST_TPL_ID, ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_LIBELLE, ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO, ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OST_TPL_PRIME_ID', 'OST_TPL_ID', 'OST_TPL_PRIME_LIBELLE', 'OST_TPL_PRIME_NUMERO', 'OST_TPL_REWARD_TYPE', ),
        BasePeer::TYPE_FIELDNAME => array ('ost_tpl_prime_id', 'ost_tpl_id', 'ost_tpl_prime_libelle', 'ost_tpl_prime_numero', 'ost_tpl_reward_type', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ROperationTypeSubTplPrimePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('OstTplPrimeId' => 0, 'OstTplId' => 1, 'OstTplPrimeLibelle' => 2, 'OstTplPrimeNumero' => 3, 'OstTplRewardType' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ostTplPrimeId' => 0, 'ostTplId' => 1, 'ostTplPrimeLibelle' => 2, 'ostTplPrimeNumero' => 3, 'ostTplRewardType' => 4, ),
        BasePeer::TYPE_COLNAME => array (ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID => 0, ROperationTypeSubTplPrimePeer::OST_TPL_ID => 1, ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_LIBELLE => 2, ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO => 3, ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OST_TPL_PRIME_ID' => 0, 'OST_TPL_ID' => 1, 'OST_TPL_PRIME_LIBELLE' => 2, 'OST_TPL_PRIME_NUMERO' => 3, 'OST_TPL_REWARD_TYPE' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('ost_tpl_prime_id' => 0, 'ost_tpl_id' => 1, 'ost_tpl_prime_libelle' => 2, 'ost_tpl_prime_numero' => 3, 'ost_tpl_reward_type' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
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
        $toNames = ROperationTypeSubTplPrimePeer::getFieldNames($toType);
        $key = isset(ROperationTypeSubTplPrimePeer::$fieldKeys[$fromType][$name]) ? ROperationTypeSubTplPrimePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ROperationTypeSubTplPrimePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ROperationTypeSubTplPrimePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ROperationTypeSubTplPrimePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ROperationTypeSubTplPrimePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ROperationTypeSubTplPrimePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID);
            $criteria->addSelectColumn(ROperationTypeSubTplPrimePeer::OST_TPL_ID);
            $criteria->addSelectColumn(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_LIBELLE);
            $criteria->addSelectColumn(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO);
            $criteria->addSelectColumn(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE);
        } else {
            $criteria->addSelectColumn($alias . '.ost_tpl_prime_id');
            $criteria->addSelectColumn($alias . '.ost_tpl_id');
            $criteria->addSelectColumn($alias . '.ost_tpl_prime_libelle');
            $criteria->addSelectColumn($alias . '.ost_tpl_prime_numero');
            $criteria->addSelectColumn($alias . '.ost_tpl_reward_type');
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
        $criteria->setPrimaryTableName(ROperationTypeSubTplPrimePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return ROperationTypeSubTplPrime
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ROperationTypeSubTplPrimePeer::doSelect($critcopy, $con);
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
        return ROperationTypeSubTplPrimePeer::populateObjects(ROperationTypeSubTplPrimePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

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
     * @param ROperationTypeSubTplPrime $obj A ROperationTypeSubTplPrime object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOstTplPrimeId();
            } // if key === null
            ROperationTypeSubTplPrimePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ROperationTypeSubTplPrime object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ROperationTypeSubTplPrime) {
                $key = (string) $value->getOstTplPrimeId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ROperationTypeSubTplPrime object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ROperationTypeSubTplPrimePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ROperationTypeSubTplPrime Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ROperationTypeSubTplPrimePeer::$instances[$key])) {
                return ROperationTypeSubTplPrimePeer::$instances[$key];
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
        foreach (ROperationTypeSubTplPrimePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ROperationTypeSubTplPrimePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to r_operation_type_sub_tpl_prime
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
        $cls = ROperationTypeSubTplPrimePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ROperationTypeSubTplPrimePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ROperationTypeSubTplPrimePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ROperationTypeSubTplPrimePeer::addInstanceToPool($obj, $key);
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
     * @return array (ROperationTypeSubTplPrime object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ROperationTypeSubTplPrimePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ROperationTypeSubTplPrimePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ROperationTypeSubTplPrimePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ROperationTypeSubTplPrimePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ROperationTypeSubTplPrimePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related ROperationTypeSubTpl table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinROperationTypeSubTpl(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ROperationTypeSubTplPrimePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RRewardTypes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRRewardTypes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ROperationTypeSubTplPrimePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

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
     * Selects a collection of ROperationTypeSubTplPrime objects pre-filled with their ROperationTypeSubTpl objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ROperationTypeSubTplPrime objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinROperationTypeSubTpl(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);
        }

        ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        $startcol = ROperationTypeSubTplPrimePeer::NUM_HYDRATE_COLUMNS;
        ROperationTypeSubTplPeer::addSelectColumns($criteria);

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ROperationTypeSubTplPrimePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ROperationTypeSubTplPrimePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ROperationTypeSubTplPrimePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ROperationTypeSubTplPrimePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationTypeSubTplPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ROperationTypeSubTplPrime) to $obj2 (ROperationTypeSubTpl)
                $obj2->addROperationTypeSubTplPrime($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ROperationTypeSubTplPrime objects pre-filled with their RRewardTypes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ROperationTypeSubTplPrime objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRRewardTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);
        }

        ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        $startcol = ROperationTypeSubTplPrimePeer::NUM_HYDRATE_COLUMNS;
        RRewardTypesPeer::addSelectColumns($criteria);

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ROperationTypeSubTplPrimePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ROperationTypeSubTplPrimePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ROperationTypeSubTplPrimePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ROperationTypeSubTplPrimePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RRewardTypesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RRewardTypesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RRewardTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RRewardTypesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ROperationTypeSubTplPrime) to $obj2 (RRewardTypes)
                $obj2->addROperationTypeSubTplPrime($obj1);

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
        $criteria->setPrimaryTableName(ROperationTypeSubTplPrimePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

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
     * Selects a collection of ROperationTypeSubTplPrime objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ROperationTypeSubTplPrime objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);
        }

        ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        $startcol2 = ROperationTypeSubTplPrimePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        RRewardTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RRewardTypesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ROperationTypeSubTplPrimePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ROperationTypeSubTplPrimePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ROperationTypeSubTplPrimePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ROperationTypeSubTplPrimePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined ROperationTypeSubTpl rows

            $key2 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ROperationTypeSubTplPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (ROperationTypeSubTplPrime) to the collection in $obj2 (ROperationTypeSubTpl)
                $obj2->addROperationTypeSubTplPrime($obj1);
            } // if joined row not null

            // Add objects for joined RRewardTypes rows

            $key3 = RRewardTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = RRewardTypesPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = RRewardTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RRewardTypesPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (ROperationTypeSubTplPrime) to the collection in $obj3 (RRewardTypes)
                $obj3->addROperationTypeSubTplPrime($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related ROperationTypeSubTpl table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptROperationTypeSubTpl(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ROperationTypeSubTplPrimePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RRewardTypes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRRewardTypes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ROperationTypeSubTplPrimePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

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
     * Selects a collection of ROperationTypeSubTplPrime objects pre-filled with all related objects except ROperationTypeSubTpl.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ROperationTypeSubTplPrime objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptROperationTypeSubTpl(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);
        }

        ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        $startcol2 = ROperationTypeSubTplPrimePeer::NUM_HYDRATE_COLUMNS;

        RRewardTypesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RRewardTypesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ROperationTypeSubTplPrimePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ROperationTypeSubTplPrimePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ROperationTypeSubTplPrimePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ROperationTypeSubTplPrimePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RRewardTypes rows

                $key2 = RRewardTypesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RRewardTypesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RRewardTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RRewardTypesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ROperationTypeSubTplPrime) to the collection in $obj2 (RRewardTypes)
                $obj2->addROperationTypeSubTplPrime($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ROperationTypeSubTplPrime objects pre-filled with all related objects except RRewardTypes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ROperationTypeSubTplPrime objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRRewardTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);
        }

        ROperationTypeSubTplPrimePeer::addSelectColumns($criteria);
        $startcol2 = ROperationTypeSubTplPrimePeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ROperationTypeSubTplPrimePeer::OST_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ROperationTypeSubTplPrimePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ROperationTypeSubTplPrimePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ROperationTypeSubTplPrimePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ROperationTypeSubTplPrimePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ROperationTypeSubTpl rows

                $key2 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ROperationTypeSubTplPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ROperationTypeSubTplPrime) to the collection in $obj2 (ROperationTypeSubTpl)
                $obj2->addROperationTypeSubTplPrime($obj1);

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
        return Propel::getDatabaseMap(ROperationTypeSubTplPrimePeer::DATABASE_NAME)->getTable(ROperationTypeSubTplPrimePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseROperationTypeSubTplPrimePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseROperationTypeSubTplPrimePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ROperationTypeSubTplPrimeTableMap());
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
        return ROperationTypeSubTplPrimePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ROperationTypeSubTplPrime or Criteria object.
     *
     * @param      mixed $values Criteria or ROperationTypeSubTplPrime object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ROperationTypeSubTplPrime object
        }

        if ($criteria->containsKey(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID) && $criteria->keyContainsValue(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ROperationTypeSubTplPrime or Criteria object.
     *
     * @param      mixed $values Criteria or ROperationTypeSubTplPrime object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID);
            $value = $criteria->remove(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID);
            if ($value) {
                $selectCriteria->add(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ROperationTypeSubTplPrimePeer::TABLE_NAME);
            }

        } else { // $values is ROperationTypeSubTplPrime object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the r_operation_type_sub_tpl_prime table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ROperationTypeSubTplPrimePeer::TABLE_NAME, $con, ROperationTypeSubTplPrimePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ROperationTypeSubTplPrimePeer::clearInstancePool();
            ROperationTypeSubTplPrimePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ROperationTypeSubTplPrime or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ROperationTypeSubTplPrime object or primary key or array of primary keys
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
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ROperationTypeSubTplPrimePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ROperationTypeSubTplPrime) { // it's a model object
            // invalidate the cache for this single object
            ROperationTypeSubTplPrimePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ROperationTypeSubTplPrimePeer::DATABASE_NAME);
            $criteria->add(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ROperationTypeSubTplPrimePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ROperationTypeSubTplPrimePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ROperationTypeSubTplPrimePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ROperationTypeSubTplPrime object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ROperationTypeSubTplPrime $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ROperationTypeSubTplPrimePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ROperationTypeSubTplPrimePeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_ID))
            $columns[ROperationTypeSubTplPrimePeer::OST_TPL_ID] = $obj->getOstTplId();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_LIBELLE))
            $columns[ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_LIBELLE] = $obj->getOstTplPrimeLibelle();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO))
            $columns[ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO] = $obj->getOstTplPrimeNumero();

        if ($obj->isNew() || $obj->isColumnModified(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE))
            $columns[ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE] = $obj->getOstTplRewardType();

        }

        return BasePeer::doValidate(ROperationTypeSubTplPrimePeer::DATABASE_NAME, ROperationTypeSubTplPrimePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ROperationTypeSubTplPrime
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ROperationTypeSubTplPrimePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ROperationTypeSubTplPrimePeer::DATABASE_NAME);
        $criteria->add(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $pk);

        $v = ROperationTypeSubTplPrimePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ROperationTypeSubTplPrime[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ROperationTypeSubTplPrimePeer::DATABASE_NAME);
            $criteria->add(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $pks, Criteria::IN);
            $objs = ROperationTypeSubTplPrimePeer::doSelect($criteria, $con);
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
} // BaseROperationTypeSubTplPrimePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseROperationTypeSubTplPrimePeer::buildTableMap();

