<?php


/**
 * Base static class for performing query and update operations on the 'operation_primes' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseOperationPrimesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'operation_primes';

    /** the related Propel class for this table */
    const OM_CLASS = 'OperationPrimes';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OperationPrimesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the op_prime_id field */
    const OP_PRIME_ID = 'operation_primes.op_prime_id';

    /** the column name for the op_id field */
    const OP_ID = 'operation_primes.op_id';

    /** the column name for the op_prime_libelle field */
    const OP_PRIME_LIBELLE = 'operation_primes.op_prime_libelle';

    /** the column name for the op_prime_numero field */
    const OP_PRIME_NUMERO = 'operation_primes.op_prime_numero';

    /** the column name for the gdl_art_id field */
    const GDL_ART_ID = 'operation_primes.gdl_art_id';

    /** the column name for the operation_prime_currency_id field */
    const OPERATION_PRIME_CURRENCY_ID = 'operation_primes.operation_prime_currency_id';

    /** the column name for the operation_prime_r_reward_type_id field */
    const OPERATION_PRIME_R_REWARD_TYPE_ID = 'operation_primes.operation_prime_r_reward_type_id';

    /** the column name for the operation_prime_r_reward_expedition_mode_id field */
    const OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID = 'operation_primes.operation_prime_r_reward_expedition_mode_id';

    /** the column name for the operation_prime_r_reward_transporter_id field */
    const OPERATION_PRIME_R_REWARD_TRANSPORTER_ID = 'operation_primes.operation_prime_r_reward_transporter_id';

    /** the column name for the operation_prime_fixed_amount field */
    const OPERATION_PRIME_FIXED_AMOUNT = 'operation_primes.operation_prime_fixed_amount';

    /** the column name for the operation_prime_product_price_pourcentage field */
    const OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE = 'operation_primes.operation_prime_product_price_pourcentage';

    /** the column name for the operation_prime_maximum_amount field */
    const OPERATION_PRIME_MAXIMUM_AMOUNT = 'operation_primes.operation_prime_maximum_amount';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of OperationPrimes objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array OperationPrimes[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OperationPrimesPeer::$fieldNames[OperationPrimesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('OpPrimeId', 'OpId', 'OpPrimeLibelle', 'OpPrimeNumero', 'GdlArtId', 'OperationPrimeCurrencyId', 'OperationPrimeRRewardTypeId', 'OperationPrimeRRewardExpeditionModeId', 'OperationPrimeRRewardTransporterId', 'OperationPrimeFixedAmount', 'OperationPrimeProductPricePourcentage', 'OperationPrimeMaximumAmount', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('opPrimeId', 'opId', 'opPrimeLibelle', 'opPrimeNumero', 'gdlArtId', 'operationPrimeCurrencyId', 'operationPrimeRRewardTypeId', 'operationPrimeRRewardExpeditionModeId', 'operationPrimeRRewardTransporterId', 'operationPrimeFixedAmount', 'operationPrimeProductPricePourcentage', 'operationPrimeMaximumAmount', ),
        BasePeer::TYPE_COLNAME => array (OperationPrimesPeer::OP_PRIME_ID, OperationPrimesPeer::OP_ID, OperationPrimesPeer::OP_PRIME_LIBELLE, OperationPrimesPeer::OP_PRIME_NUMERO, OperationPrimesPeer::GDL_ART_ID, OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT, OperationPrimesPeer::OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE, OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OP_PRIME_ID', 'OP_ID', 'OP_PRIME_LIBELLE', 'OP_PRIME_NUMERO', 'GDL_ART_ID', 'OPERATION_PRIME_CURRENCY_ID', 'OPERATION_PRIME_R_REWARD_TYPE_ID', 'OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID', 'OPERATION_PRIME_R_REWARD_TRANSPORTER_ID', 'OPERATION_PRIME_FIXED_AMOUNT', 'OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE', 'OPERATION_PRIME_MAXIMUM_AMOUNT', ),
        BasePeer::TYPE_FIELDNAME => array ('op_prime_id', 'op_id', 'op_prime_libelle', 'op_prime_numero', 'gdl_art_id', 'operation_prime_currency_id', 'operation_prime_r_reward_type_id', 'operation_prime_r_reward_expedition_mode_id', 'operation_prime_r_reward_transporter_id', 'operation_prime_fixed_amount', 'operation_prime_product_price_pourcentage', 'operation_prime_maximum_amount', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OperationPrimesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('OpPrimeId' => 0, 'OpId' => 1, 'OpPrimeLibelle' => 2, 'OpPrimeNumero' => 3, 'GdlArtId' => 4, 'OperationPrimeCurrencyId' => 5, 'OperationPrimeRRewardTypeId' => 6, 'OperationPrimeRRewardExpeditionModeId' => 7, 'OperationPrimeRRewardTransporterId' => 8, 'OperationPrimeFixedAmount' => 9, 'OperationPrimeProductPricePourcentage' => 10, 'OperationPrimeMaximumAmount' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('opPrimeId' => 0, 'opId' => 1, 'opPrimeLibelle' => 2, 'opPrimeNumero' => 3, 'gdlArtId' => 4, 'operationPrimeCurrencyId' => 5, 'operationPrimeRRewardTypeId' => 6, 'operationPrimeRRewardExpeditionModeId' => 7, 'operationPrimeRRewardTransporterId' => 8, 'operationPrimeFixedAmount' => 9, 'operationPrimeProductPricePourcentage' => 10, 'operationPrimeMaximumAmount' => 11, ),
        BasePeer::TYPE_COLNAME => array (OperationPrimesPeer::OP_PRIME_ID => 0, OperationPrimesPeer::OP_ID => 1, OperationPrimesPeer::OP_PRIME_LIBELLE => 2, OperationPrimesPeer::OP_PRIME_NUMERO => 3, OperationPrimesPeer::GDL_ART_ID => 4, OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID => 5, OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID => 6, OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID => 7, OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID => 8, OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT => 9, OperationPrimesPeer::OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE => 10, OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OP_PRIME_ID' => 0, 'OP_ID' => 1, 'OP_PRIME_LIBELLE' => 2, 'OP_PRIME_NUMERO' => 3, 'GDL_ART_ID' => 4, 'OPERATION_PRIME_CURRENCY_ID' => 5, 'OPERATION_PRIME_R_REWARD_TYPE_ID' => 6, 'OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID' => 7, 'OPERATION_PRIME_R_REWARD_TRANSPORTER_ID' => 8, 'OPERATION_PRIME_FIXED_AMOUNT' => 9, 'OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE' => 10, 'OPERATION_PRIME_MAXIMUM_AMOUNT' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('op_prime_id' => 0, 'op_id' => 1, 'op_prime_libelle' => 2, 'op_prime_numero' => 3, 'gdl_art_id' => 4, 'operation_prime_currency_id' => 5, 'operation_prime_r_reward_type_id' => 6, 'operation_prime_r_reward_expedition_mode_id' => 7, 'operation_prime_r_reward_transporter_id' => 8, 'operation_prime_fixed_amount' => 9, 'operation_prime_product_price_pourcentage' => 10, 'operation_prime_maximum_amount' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = OperationPrimesPeer::getFieldNames($toType);
        $key = isset(OperationPrimesPeer::$fieldKeys[$fromType][$name]) ? OperationPrimesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OperationPrimesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OperationPrimesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OperationPrimesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OperationPrimesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OperationPrimesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OperationPrimesPeer::OP_PRIME_ID);
            $criteria->addSelectColumn(OperationPrimesPeer::OP_ID);
            $criteria->addSelectColumn(OperationPrimesPeer::OP_PRIME_LIBELLE);
            $criteria->addSelectColumn(OperationPrimesPeer::OP_PRIME_NUMERO);
            $criteria->addSelectColumn(OperationPrimesPeer::GDL_ART_ID);
            $criteria->addSelectColumn(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID);
            $criteria->addSelectColumn(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID);
            $criteria->addSelectColumn(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID);
            $criteria->addSelectColumn(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID);
            $criteria->addSelectColumn(OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT);
            $criteria->addSelectColumn(OperationPrimesPeer::OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE);
            $criteria->addSelectColumn(OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT);
        } else {
            $criteria->addSelectColumn($alias . '.op_prime_id');
            $criteria->addSelectColumn($alias . '.op_id');
            $criteria->addSelectColumn($alias . '.op_prime_libelle');
            $criteria->addSelectColumn($alias . '.op_prime_numero');
            $criteria->addSelectColumn($alias . '.gdl_art_id');
            $criteria->addSelectColumn($alias . '.operation_prime_currency_id');
            $criteria->addSelectColumn($alias . '.operation_prime_r_reward_type_id');
            $criteria->addSelectColumn($alias . '.operation_prime_r_reward_expedition_mode_id');
            $criteria->addSelectColumn($alias . '.operation_prime_r_reward_transporter_id');
            $criteria->addSelectColumn($alias . '.operation_prime_fixed_amount');
            $criteria->addSelectColumn($alias . '.operation_prime_product_price_pourcentage');
            $criteria->addSelectColumn($alias . '.operation_prime_maximum_amount');
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
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return OperationPrimes
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OperationPrimesPeer::doSelect($critcopy, $con);
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
        return OperationPrimesPeer::populateObjects(OperationPrimesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

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
     * @param OperationPrimes $obj A OperationPrimes object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOpPrimeId();
            } // if key === null
            OperationPrimesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A OperationPrimes object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof OperationPrimes) {
                $key = (string) $value->getOpPrimeId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or OperationPrimes object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OperationPrimesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return OperationPrimes Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OperationPrimesPeer::$instances[$key])) {
                return OperationPrimesPeer::$instances[$key];
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
        foreach (OperationPrimesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OperationPrimesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to operation_primes
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
        $cls = OperationPrimesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OperationPrimesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OperationPrimesPeer::addInstanceToPool($obj, $key);
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
     * @return array (OperationPrimes object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OperationPrimesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OperationPrimesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OperationPrimesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OperationPrimesPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RCurrencies table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRCurrencies(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RRewardExpeditionModes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRRewardExpeditionModes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RRewardTransporters table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRRewardTransporters(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);

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
     * Selects a collection of OperationPrimes objects pre-filled with their Operations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;
        OperationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationPrimes) to $obj2 (Operations)
                $obj2->addOperationPrimes($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrimes objects pre-filled with their RCurrencies objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRCurrencies(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;
        RCurrenciesPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RCurrenciesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RCurrenciesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RCurrenciesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RCurrenciesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationPrimes) to $obj2 (RCurrencies)
                $obj2->addOperationPrimes($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrimes objects pre-filled with their RRewardTypes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRRewardTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;
        RRewardTypesPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationPrimes) to $obj2 (RRewardTypes)
                $obj2->addOperationPrimes($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrimes objects pre-filled with their RRewardExpeditionModes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRRewardExpeditionModes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;
        RRewardExpeditionModesPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RRewardExpeditionModesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RRewardExpeditionModesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RRewardExpeditionModesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RRewardExpeditionModesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationPrimes) to $obj2 (RRewardExpeditionModes)
                $obj2->addOperationPrimes($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrimes objects pre-filled with their RRewardTransporters objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRRewardTransporters(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;
        RRewardTransportersPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RRewardTransportersPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RRewardTransportersPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RRewardTransportersPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RRewardTransportersPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (OperationPrimes) to $obj2 (RRewardTransporters)
                $obj2->addOperationPrimes($obj1);

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
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);

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
     * Selects a collection of OperationPrimes objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RCurrenciesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RCurrenciesPeer::NUM_HYDRATE_COLUMNS;

        RRewardTypesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RRewardTypesPeer::NUM_HYDRATE_COLUMNS;

        RRewardExpeditionModesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RRewardExpeditionModesPeer::NUM_HYDRATE_COLUMNS;

        RRewardTransportersPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RRewardTransportersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationPrimes) to the collection in $obj2 (Operations)
                $obj2->addOperationPrimes($obj1);
            } // if joined row not null

            // Add objects for joined RCurrencies rows

            $key3 = RCurrenciesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = RCurrenciesPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = RCurrenciesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RCurrenciesPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj3 (RCurrencies)
                $obj3->addOperationPrimes($obj1);
            } // if joined row not null

            // Add objects for joined RRewardTypes rows

            $key4 = RRewardTypesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = RRewardTypesPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = RRewardTypesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RRewardTypesPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj4 (RRewardTypes)
                $obj4->addOperationPrimes($obj1);
            } // if joined row not null

            // Add objects for joined RRewardExpeditionModes rows

            $key5 = RRewardExpeditionModesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = RRewardExpeditionModesPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = RRewardExpeditionModesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RRewardExpeditionModesPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj5 (RRewardExpeditionModes)
                $obj5->addOperationPrimes($obj1);
            } // if joined row not null

            // Add objects for joined RRewardTransporters rows

            $key6 = RRewardTransportersPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = RRewardTransportersPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = RRewardTransportersPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RRewardTransportersPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj6 (RRewardTransporters)
                $obj6->addOperationPrimes($obj1);
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
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RCurrencies table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRCurrencies(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RRewardExpeditionModes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRRewardExpeditionModes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RRewardTransporters table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRRewardTransporters(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationPrimesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

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
     * Selects a collection of OperationPrimes objects pre-filled with all related objects except Operations.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
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
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        RCurrenciesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RCurrenciesPeer::NUM_HYDRATE_COLUMNS;

        RRewardTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RRewardTypesPeer::NUM_HYDRATE_COLUMNS;

        RRewardExpeditionModesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RRewardExpeditionModesPeer::NUM_HYDRATE_COLUMNS;

        RRewardTransportersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RRewardTransportersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RCurrencies rows

                $key2 = RCurrenciesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RCurrenciesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RCurrenciesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RCurrenciesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj2 (RCurrencies)
                $obj2->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardTypes rows

                $key3 = RRewardTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RRewardTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RRewardTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RRewardTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj3 (RRewardTypes)
                $obj3->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardExpeditionModes rows

                $key4 = RRewardExpeditionModesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RRewardExpeditionModesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RRewardExpeditionModesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RRewardExpeditionModesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj4 (RRewardExpeditionModes)
                $obj4->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardTransporters rows

                $key5 = RRewardTransportersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RRewardTransportersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RRewardTransportersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RRewardTransportersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj5 (RRewardTransporters)
                $obj5->addOperationPrimes($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrimes objects pre-filled with all related objects except RCurrencies.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRCurrencies(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RRewardTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RRewardTypesPeer::NUM_HYDRATE_COLUMNS;

        RRewardExpeditionModesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RRewardExpeditionModesPeer::NUM_HYDRATE_COLUMNS;

        RRewardTransportersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RRewardTransportersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationPrimes) to the collection in $obj2 (Operations)
                $obj2->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardTypes rows

                $key3 = RRewardTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RRewardTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RRewardTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RRewardTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj3 (RRewardTypes)
                $obj3->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardExpeditionModes rows

                $key4 = RRewardExpeditionModesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RRewardExpeditionModesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RRewardExpeditionModesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RRewardExpeditionModesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj4 (RRewardExpeditionModes)
                $obj4->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardTransporters rows

                $key5 = RRewardTransportersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RRewardTransportersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RRewardTransportersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RRewardTransportersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj5 (RRewardTransporters)
                $obj5->addOperationPrimes($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrimes objects pre-filled with all related objects except RRewardTypes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
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
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RCurrenciesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RCurrenciesPeer::NUM_HYDRATE_COLUMNS;

        RRewardExpeditionModesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RRewardExpeditionModesPeer::NUM_HYDRATE_COLUMNS;

        RRewardTransportersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RRewardTransportersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationPrimes) to the collection in $obj2 (Operations)
                $obj2->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RCurrencies rows

                $key3 = RCurrenciesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RCurrenciesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RCurrenciesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RCurrenciesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj3 (RCurrencies)
                $obj3->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardExpeditionModes rows

                $key4 = RRewardExpeditionModesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RRewardExpeditionModesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RRewardExpeditionModesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RRewardExpeditionModesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj4 (RRewardExpeditionModes)
                $obj4->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardTransporters rows

                $key5 = RRewardTransportersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RRewardTransportersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RRewardTransportersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RRewardTransportersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj5 (RRewardTransporters)
                $obj5->addOperationPrimes($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrimes objects pre-filled with all related objects except RRewardExpeditionModes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRRewardExpeditionModes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RCurrenciesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RCurrenciesPeer::NUM_HYDRATE_COLUMNS;

        RRewardTypesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RRewardTypesPeer::NUM_HYDRATE_COLUMNS;

        RRewardTransportersPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RRewardTransportersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationPrimes) to the collection in $obj2 (Operations)
                $obj2->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RCurrencies rows

                $key3 = RCurrenciesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RCurrenciesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RCurrenciesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RCurrenciesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj3 (RCurrencies)
                $obj3->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardTypes rows

                $key4 = RRewardTypesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RRewardTypesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RRewardTypesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RRewardTypesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj4 (RRewardTypes)
                $obj4->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardTransporters rows

                $key5 = RRewardTransportersPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RRewardTransportersPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RRewardTransportersPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RRewardTransportersPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj5 (RRewardTransporters)
                $obj5->addOperationPrimes($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of OperationPrimes objects pre-filled with all related objects except RRewardTransporters.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationPrimes objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRRewardTransporters(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);
        }

        OperationPrimesPeer::addSelectColumns($criteria);
        $startcol2 = OperationPrimesPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RCurrenciesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RCurrenciesPeer::NUM_HYDRATE_COLUMNS;

        RRewardTypesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RRewardTypesPeer::NUM_HYDRATE_COLUMNS;

        RRewardExpeditionModesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RRewardExpeditionModesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationPrimesPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, RCurrenciesPeer::R_CURRENCY_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, RRewardTypesPeer::R_REWARD_TYPE_ID, $join_behavior);

        $criteria->addJoin(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationPrimesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationPrimesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationPrimesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationPrimesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationPrimes) to the collection in $obj2 (Operations)
                $obj2->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RCurrencies rows

                $key3 = RCurrenciesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RCurrenciesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RCurrenciesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RCurrenciesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj3 (RCurrencies)
                $obj3->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardTypes rows

                $key4 = RRewardTypesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RRewardTypesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RRewardTypesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RRewardTypesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj4 (RRewardTypes)
                $obj4->addOperationPrimes($obj1);

            } // if joined row is not null

                // Add objects for joined RRewardExpeditionModes rows

                $key5 = RRewardExpeditionModesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RRewardExpeditionModesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RRewardExpeditionModesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RRewardExpeditionModesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (OperationPrimes) to the collection in $obj5 (RRewardExpeditionModes)
                $obj5->addOperationPrimes($obj1);

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
        return Propel::getDatabaseMap(OperationPrimesPeer::DATABASE_NAME)->getTable(OperationPrimesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOperationPrimesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOperationPrimesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OperationPrimesTableMap());
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
        return OperationPrimesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a OperationPrimes or Criteria object.
     *
     * @param      mixed $values Criteria or OperationPrimes object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from OperationPrimes object
        }

        if ($criteria->containsKey(OperationPrimesPeer::OP_PRIME_ID) && $criteria->keyContainsValue(OperationPrimesPeer::OP_PRIME_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OperationPrimesPeer::OP_PRIME_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a OperationPrimes or Criteria object.
     *
     * @param      mixed $values Criteria or OperationPrimes object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OperationPrimesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OperationPrimesPeer::OP_PRIME_ID);
            $value = $criteria->remove(OperationPrimesPeer::OP_PRIME_ID);
            if ($value) {
                $selectCriteria->add(OperationPrimesPeer::OP_PRIME_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OperationPrimesPeer::TABLE_NAME);
            }

        } else { // $values is OperationPrimes object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the operation_primes table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OperationPrimesPeer::TABLE_NAME, $con, OperationPrimesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OperationPrimesPeer::clearInstancePool();
            OperationPrimesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a OperationPrimes or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or OperationPrimes object or primary key or array of primary keys
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
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OperationPrimesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof OperationPrimes) { // it's a model object
            // invalidate the cache for this single object
            OperationPrimesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OperationPrimesPeer::DATABASE_NAME);
            $criteria->add(OperationPrimesPeer::OP_PRIME_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OperationPrimesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OperationPrimesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OperationPrimesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given OperationPrimes object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param OperationPrimes $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OperationPrimesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OperationPrimesPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(OperationPrimesPeer::OP_ID))
            $columns[OperationPrimesPeer::OP_ID] = $obj->getOpId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrimesPeer::OP_PRIME_LIBELLE))
            $columns[OperationPrimesPeer::OP_PRIME_LIBELLE] = $obj->getOpPrimeLibelle();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrimesPeer::OP_PRIME_NUMERO))
            $columns[OperationPrimesPeer::OP_PRIME_NUMERO] = $obj->getOpPrimeNumero();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrimesPeer::GDL_ART_ID))
            $columns[OperationPrimesPeer::GDL_ART_ID] = $obj->getGdlArtId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID))
            $columns[OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID] = $obj->getOperationPrimeCurrencyId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID))
            $columns[OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID] = $obj->getOperationPrimeRRewardTypeId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID))
            $columns[OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID] = $obj->getOperationPrimeRRewardExpeditionModeId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID))
            $columns[OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID] = $obj->getOperationPrimeRRewardTransporterId();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT))
            $columns[OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT] = $obj->getOperationPrimeFixedAmount();

        if ($obj->isNew() || $obj->isColumnModified(OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT))
            $columns[OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT] = $obj->getOperationPrimeMaximumAmount();

        }

        return BasePeer::doValidate(OperationPrimesPeer::DATABASE_NAME, OperationPrimesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return OperationPrimes
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OperationPrimesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OperationPrimesPeer::DATABASE_NAME);
        $criteria->add(OperationPrimesPeer::OP_PRIME_ID, $pk);

        $v = OperationPrimesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return OperationPrimes[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OperationPrimesPeer::DATABASE_NAME);
            $criteria->add(OperationPrimesPeer::OP_PRIME_ID, $pks, Criteria::IN);
            $objs = OperationPrimesPeer::doSelect($criteria, $con);
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
} // BaseOperationPrimesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOperationPrimesPeer::buildTableMap();

