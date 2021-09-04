<?php


/**
 * Base static class for performing query and update operations on the 'clients' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseClientsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'clients';

    /** the related Propel class for this table */
    const OM_CLASS = 'Clients';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ClientsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the cl_id field */
    const CL_ID = 'clients.cl_id';

    /** the column name for the cl_libelle field */
    const CL_LIBELLE = 'clients.cl_libelle';

    /** the column name for the cl_activity_id field */
    const CL_ACTIVITY_ID = 'clients.cl_activity_id';

    /** the column name for the cl_type_id field */
    const CL_TYPE_ID = 'clients.cl_type_id';

    /** the column name for the cl_ct_gestion field */
    const CL_CT_GESTION = 'clients.cl_ct_gestion';

    /** the column name for the cl_ct_facturation field */
    const CL_CT_FACTURATION = 'clients.cl_ct_facturation';

    /** the column name for the cl_dc_id field */
    const CL_DC_ID = 'clients.cl_dc_id';

    /** the column name for the cl_exclude_of_q3_campaign field */
    const CL_EXCLUDE_OF_Q3_CAMPAIGN = 'clients.cl_exclude_of_q3_campaign';

    /** the column name for the user_id field */
    const USER_ID = 'clients.user_id';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'clients.user_modify';

    /** the column name for the date_create field */
    const DATE_CREATE = 'clients.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'clients.date_modify';

    /** the column name for the actif field */
    const ACTIF = 'clients.actif';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Clients objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Clients[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ClientsPeer::$fieldNames[ClientsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ClId', 'ClLibelle', 'ClActivityId', 'ClTypeId', 'ClCtGestion', 'ClCtFacturation', 'ClDcId', 'ClExcludeOfQ3Campaign', 'UserId', 'UserModify', 'DateCreate', 'DateModify', 'Actif', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('clId', 'clLibelle', 'clActivityId', 'clTypeId', 'clCtGestion', 'clCtFacturation', 'clDcId', 'clExcludeOfQ3Campaign', 'userId', 'userModify', 'dateCreate', 'dateModify', 'actif', ),
        BasePeer::TYPE_COLNAME => array (ClientsPeer::CL_ID, ClientsPeer::CL_LIBELLE, ClientsPeer::CL_ACTIVITY_ID, ClientsPeer::CL_TYPE_ID, ClientsPeer::CL_CT_GESTION, ClientsPeer::CL_CT_FACTURATION, ClientsPeer::CL_DC_ID, ClientsPeer::CL_EXCLUDE_OF_Q3_CAMPAIGN, ClientsPeer::USER_ID, ClientsPeer::USER_MODIFY, ClientsPeer::DATE_CREATE, ClientsPeer::DATE_MODIFY, ClientsPeer::ACTIF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CL_ID', 'CL_LIBELLE', 'CL_ACTIVITY_ID', 'CL_TYPE_ID', 'CL_CT_GESTION', 'CL_CT_FACTURATION', 'CL_DC_ID', 'CL_EXCLUDE_OF_Q3_CAMPAIGN', 'USER_ID', 'USER_MODIFY', 'DATE_CREATE', 'DATE_MODIFY', 'ACTIF', ),
        BasePeer::TYPE_FIELDNAME => array ('cl_id', 'cl_libelle', 'cl_activity_id', 'cl_type_id', 'cl_ct_gestion', 'cl_ct_facturation', 'cl_dc_id', 'cl_exclude_of_q3_campaign', 'user_id', 'user_modify', 'date_create', 'date_modify', 'actif', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ClientsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ClId' => 0, 'ClLibelle' => 1, 'ClActivityId' => 2, 'ClTypeId' => 3, 'ClCtGestion' => 4, 'ClCtFacturation' => 5, 'ClDcId' => 6, 'ClExcludeOfQ3Campaign' => 7, 'UserId' => 8, 'UserModify' => 9, 'DateCreate' => 10, 'DateModify' => 11, 'Actif' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('clId' => 0, 'clLibelle' => 1, 'clActivityId' => 2, 'clTypeId' => 3, 'clCtGestion' => 4, 'clCtFacturation' => 5, 'clDcId' => 6, 'clExcludeOfQ3Campaign' => 7, 'userId' => 8, 'userModify' => 9, 'dateCreate' => 10, 'dateModify' => 11, 'actif' => 12, ),
        BasePeer::TYPE_COLNAME => array (ClientsPeer::CL_ID => 0, ClientsPeer::CL_LIBELLE => 1, ClientsPeer::CL_ACTIVITY_ID => 2, ClientsPeer::CL_TYPE_ID => 3, ClientsPeer::CL_CT_GESTION => 4, ClientsPeer::CL_CT_FACTURATION => 5, ClientsPeer::CL_DC_ID => 6, ClientsPeer::CL_EXCLUDE_OF_Q3_CAMPAIGN => 7, ClientsPeer::USER_ID => 8, ClientsPeer::USER_MODIFY => 9, ClientsPeer::DATE_CREATE => 10, ClientsPeer::DATE_MODIFY => 11, ClientsPeer::ACTIF => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CL_ID' => 0, 'CL_LIBELLE' => 1, 'CL_ACTIVITY_ID' => 2, 'CL_TYPE_ID' => 3, 'CL_CT_GESTION' => 4, 'CL_CT_FACTURATION' => 5, 'CL_DC_ID' => 6, 'CL_EXCLUDE_OF_Q3_CAMPAIGN' => 7, 'USER_ID' => 8, 'USER_MODIFY' => 9, 'DATE_CREATE' => 10, 'DATE_MODIFY' => 11, 'ACTIF' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('cl_id' => 0, 'cl_libelle' => 1, 'cl_activity_id' => 2, 'cl_type_id' => 3, 'cl_ct_gestion' => 4, 'cl_ct_facturation' => 5, 'cl_dc_id' => 6, 'cl_exclude_of_q3_campaign' => 7, 'user_id' => 8, 'user_modify' => 9, 'date_create' => 10, 'date_modify' => 11, 'actif' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $toNames = ClientsPeer::getFieldNames($toType);
        $key = isset(ClientsPeer::$fieldKeys[$fromType][$name]) ? ClientsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ClientsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ClientsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ClientsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ClientsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ClientsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ClientsPeer::CL_ID);
            $criteria->addSelectColumn(ClientsPeer::CL_LIBELLE);
            $criteria->addSelectColumn(ClientsPeer::CL_ACTIVITY_ID);
            $criteria->addSelectColumn(ClientsPeer::CL_TYPE_ID);
            $criteria->addSelectColumn(ClientsPeer::CL_CT_GESTION);
            $criteria->addSelectColumn(ClientsPeer::CL_CT_FACTURATION);
            $criteria->addSelectColumn(ClientsPeer::CL_DC_ID);
            $criteria->addSelectColumn(ClientsPeer::CL_EXCLUDE_OF_Q3_CAMPAIGN);
            $criteria->addSelectColumn(ClientsPeer::USER_ID);
            $criteria->addSelectColumn(ClientsPeer::USER_MODIFY);
            $criteria->addSelectColumn(ClientsPeer::DATE_CREATE);
            $criteria->addSelectColumn(ClientsPeer::DATE_MODIFY);
            $criteria->addSelectColumn(ClientsPeer::ACTIF);
        } else {
            $criteria->addSelectColumn($alias . '.cl_id');
            $criteria->addSelectColumn($alias . '.cl_libelle');
            $criteria->addSelectColumn($alias . '.cl_activity_id');
            $criteria->addSelectColumn($alias . '.cl_type_id');
            $criteria->addSelectColumn($alias . '.cl_ct_gestion');
            $criteria->addSelectColumn($alias . '.cl_ct_facturation');
            $criteria->addSelectColumn($alias . '.cl_dc_id');
            $criteria->addSelectColumn($alias . '.cl_exclude_of_q3_campaign');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.user_modify');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.actif');
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
        $criteria->setPrimaryTableName(ClientsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ClientsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Clients
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ClientsPeer::doSelect($critcopy, $con);
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
        return ClientsPeer::populateObjects(ClientsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ClientsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

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
     * @param Clients $obj A Clients object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getClId();
            } // if key === null
            ClientsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Clients object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Clients) {
                $key = (string) $value->getClId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Clients object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ClientsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Clients Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ClientsPeer::$instances[$key])) {
                return ClientsPeer::$instances[$key];
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
        foreach (ClientsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ClientsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to clients
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
        $cls = ClientsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ClientsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ClientsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ClientsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Clients object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ClientsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ClientsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ClientsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ClientsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related UserDc table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUserDc(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientsPeer::CL_DC_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ContactFacturation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinContactFacturation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientsPeer::CL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ContactGestion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinContactGestion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientsPeer::CL_CT_GESTION, ContactsPeer::CT_ID, $join_behavior);

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
     * Selects a collection of Clients objects pre-filled with their Users objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Clients objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUserDc(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientsPeer::DATABASE_NAME);
        }

        ClientsPeer::addSelectColumns($criteria);
        $startcol = ClientsPeer::NUM_HYDRATE_COLUMNS;
        UsersPeer::addSelectColumns($criteria);

        $criteria->addJoin(ClientsPeer::CL_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ClientsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Clients) to $obj2 (Users)
                $obj2->addClients($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Clients objects pre-filled with their Contacts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Clients objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinContactFacturation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientsPeer::DATABASE_NAME);
        }

        ClientsPeer::addSelectColumns($criteria);
        $startcol = ClientsPeer::NUM_HYDRATE_COLUMNS;
        ContactsPeer::addSelectColumns($criteria);

        $criteria->addJoin(ClientsPeer::CL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ClientsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ContactsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ContactsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ContactsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Clients) to $obj2 (Contacts)
                $obj2->addClientsRelatedByClCtFacturation($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Clients objects pre-filled with their Contacts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Clients objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinContactGestion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientsPeer::DATABASE_NAME);
        }

        ClientsPeer::addSelectColumns($criteria);
        $startcol = ClientsPeer::NUM_HYDRATE_COLUMNS;
        ContactsPeer::addSelectColumns($criteria);

        $criteria->addJoin(ClientsPeer::CL_CT_GESTION, ContactsPeer::CT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ClientsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ContactsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ContactsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ContactsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Clients) to $obj2 (Contacts)
                $obj2->addClientsRelatedByClCtGestion($obj1);

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
        $criteria->setPrimaryTableName(ClientsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientsPeer::CL_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(ClientsPeer::CL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(ClientsPeer::CL_CT_GESTION, ContactsPeer::CT_ID, $join_behavior);

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
     * Selects a collection of Clients objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Clients objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientsPeer::DATABASE_NAME);
        }

        ClientsPeer::addSelectColumns($criteria);
        $startcol2 = ClientsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsersPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientsPeer::CL_DC_ID, UsersPeer::USER_ID, $join_behavior);

        $criteria->addJoin(ClientsPeer::CL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(ClientsPeer::CL_CT_GESTION, ContactsPeer::CT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Users rows

            $key2 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = UsersPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UsersPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UsersPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Clients) to the collection in $obj2 (Users)
                $obj2->addClients($obj1);
            } // if joined row not null

            // Add objects for joined Contacts rows

            $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ContactsPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Clients) to the collection in $obj3 (Contacts)
                $obj3->addClientsRelatedByClCtFacturation($obj1);
            } // if joined row not null

            // Add objects for joined Contacts rows

            $key4 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ContactsPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ContactsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ContactsPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Clients) to the collection in $obj4 (Contacts)
                $obj4->addClientsRelatedByClCtGestion($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related UserDc table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUserDc(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientsPeer::CL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(ClientsPeer::CL_CT_GESTION, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ContactFacturation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptContactFacturation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientsPeer::CL_DC_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ContactGestion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptContactGestion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientsPeer::CL_DC_ID, UsersPeer::USER_ID, $join_behavior);

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
     * Selects a collection of Clients objects pre-filled with all related objects except UserDc.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Clients objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUserDc(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientsPeer::DATABASE_NAME);
        }

        ClientsPeer::addSelectColumns($criteria);
        $startcol2 = ClientsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientsPeer::CL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

        $criteria->addJoin(ClientsPeer::CL_CT_GESTION, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Contacts rows

                $key2 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ContactsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ContactsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ContactsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Clients) to the collection in $obj2 (Contacts)
                $obj2->addClientsRelatedByClCtFacturation($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key3 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ContactsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ContactsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ContactsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Clients) to the collection in $obj3 (Contacts)
                $obj3->addClientsRelatedByClCtGestion($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Clients objects pre-filled with all related objects except ContactFacturation.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Clients objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptContactFacturation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientsPeer::DATABASE_NAME);
        }

        ClientsPeer::addSelectColumns($criteria);
        $startcol2 = ClientsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientsPeer::CL_DC_ID, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Users rows

                $key2 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UsersPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UsersPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UsersPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Clients) to the collection in $obj2 (Users)
                $obj2->addClients($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Clients objects pre-filled with all related objects except ContactGestion.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Clients objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptContactGestion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientsPeer::DATABASE_NAME);
        }

        ClientsPeer::addSelectColumns($criteria);
        $startcol2 = ClientsPeer::NUM_HYDRATE_COLUMNS;

        UsersPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsersPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientsPeer::CL_DC_ID, UsersPeer::USER_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Users rows

                $key2 = UsersPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UsersPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UsersPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UsersPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Clients) to the collection in $obj2 (Users)
                $obj2->addClients($obj1);

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
        return Propel::getDatabaseMap(ClientsPeer::DATABASE_NAME)->getTable(ClientsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseClientsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseClientsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ClientsTableMap());
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
        return ClientsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Clients or Criteria object.
     *
     * @param      mixed $values Criteria or Clients object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Clients object
        }

        if ($criteria->containsKey(ClientsPeer::CL_ID) && $criteria->keyContainsValue(ClientsPeer::CL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ClientsPeer::CL_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Clients or Criteria object.
     *
     * @param      mixed $values Criteria or Clients object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ClientsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ClientsPeer::CL_ID);
            $value = $criteria->remove(ClientsPeer::CL_ID);
            if ($value) {
                $selectCriteria->add(ClientsPeer::CL_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ClientsPeer::TABLE_NAME);
            }

        } else { // $values is Clients object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the clients table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ClientsPeer::TABLE_NAME, $con, ClientsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ClientsPeer::clearInstancePool();
            ClientsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Clients or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Clients object or primary key or array of primary keys
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
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ClientsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Clients) { // it's a model object
            // invalidate the cache for this single object
            ClientsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ClientsPeer::DATABASE_NAME);
            $criteria->add(ClientsPeer::CL_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ClientsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ClientsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ClientsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Clients object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Clients $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ClientsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ClientsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::CL_LIBELLE))
            $columns[ClientsPeer::CL_LIBELLE] = $obj->getClLibelle();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::CL_ACTIVITY_ID))
            $columns[ClientsPeer::CL_ACTIVITY_ID] = $obj->getClActivityId();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::CL_TYPE_ID))
            $columns[ClientsPeer::CL_TYPE_ID] = $obj->getClTypeId();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::CL_CT_GESTION))
            $columns[ClientsPeer::CL_CT_GESTION] = $obj->getClCtGestion();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::CL_CT_FACTURATION))
            $columns[ClientsPeer::CL_CT_FACTURATION] = $obj->getClCtFacturation();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::CL_DC_ID))
            $columns[ClientsPeer::CL_DC_ID] = $obj->getClDcId();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::CL_EXCLUDE_OF_Q3_CAMPAIGN))
            $columns[ClientsPeer::CL_EXCLUDE_OF_Q3_CAMPAIGN] = $obj->getClExcludeOfQ3Campaign();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::USER_ID))
            $columns[ClientsPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::USER_MODIFY))
            $columns[ClientsPeer::USER_MODIFY] = $obj->getUserModify();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::DATE_CREATE))
            $columns[ClientsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::DATE_MODIFY))
            $columns[ClientsPeer::DATE_MODIFY] = $obj->getDateModify();

        if ($obj->isNew() || $obj->isColumnModified(ClientsPeer::ACTIF))
            $columns[ClientsPeer::ACTIF] = $obj->getActif();

        }

        return BasePeer::doValidate(ClientsPeer::DATABASE_NAME, ClientsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Clients
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ClientsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ClientsPeer::DATABASE_NAME);
        $criteria->add(ClientsPeer::CL_ID, $pk);

        $v = ClientsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Clients[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ClientsPeer::DATABASE_NAME);
            $criteria->add(ClientsPeer::CL_ID, $pks, Criteria::IN);
            $objs = ClientsPeer::doSelect($criteria, $con);
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
} // BaseClientsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseClientsPeer::buildTableMap();

