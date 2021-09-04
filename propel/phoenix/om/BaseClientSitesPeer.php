<?php


/**
 * Base static class for performing query and update operations on the 'client_sites' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseClientSitesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'client_sites';

    /** the related Propel class for this table */
    const OM_CLASS = 'ClientSites';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ClientSitesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the cl_site_id field */
    const CL_SITE_ID = 'client_sites.cl_site_id';

    /** the column name for the cl_id field */
    const CL_ID = 'client_sites.cl_id';

    /** the column name for the cl_site_libelle field */
    const CL_SITE_LIBELLE = 'client_sites.cl_site_libelle';

    /** the column name for the cl_site_addr_1 field */
    const CL_SITE_ADDR_1 = 'client_sites.cl_site_addr_1';

    /** the column name for the cl_site_addr_2 field */
    const CL_SITE_ADDR_2 = 'client_sites.cl_site_addr_2';

    /** the column name for the cl_site_addr_3 field */
    const CL_SITE_ADDR_3 = 'client_sites.cl_site_addr_3';

    /** the column name for the cl_site_zipcode field */
    const CL_SITE_ZIPCODE = 'client_sites.cl_site_zipcode';

    /** the column name for the cl_site_town field */
    const CL_SITE_TOWN = 'client_sites.cl_site_town';

    /** the column name for the cl_site_country_id field */
    const CL_SITE_COUNTRY_ID = 'client_sites.cl_site_country_id';

    /** the column name for the cl_site_is_for_log field */
    const CL_SITE_IS_FOR_LOG = 'client_sites.cl_site_is_for_log';

    /** the column name for the gdl_fourn_id field */
    const GDL_FOURN_ID = 'client_sites.gdl_fourn_id';

    /** the column name for the actif field */
    const ACTIF = 'client_sites.actif';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ClientSites objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ClientSites[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ClientSitesPeer::$fieldNames[ClientSitesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ClSiteId', 'ClId', 'ClSiteLibelle', 'ClSiteAddr1', 'ClSiteAddr2', 'ClSiteAddr3', 'ClSiteZipcode', 'ClSiteTown', 'ClSiteCountryId', 'ClSiteIsForLog', 'GdlFournId', 'Actif', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('clSiteId', 'clId', 'clSiteLibelle', 'clSiteAddr1', 'clSiteAddr2', 'clSiteAddr3', 'clSiteZipcode', 'clSiteTown', 'clSiteCountryId', 'clSiteIsForLog', 'gdlFournId', 'actif', ),
        BasePeer::TYPE_COLNAME => array (ClientSitesPeer::CL_SITE_ID, ClientSitesPeer::CL_ID, ClientSitesPeer::CL_SITE_LIBELLE, ClientSitesPeer::CL_SITE_ADDR_1, ClientSitesPeer::CL_SITE_ADDR_2, ClientSitesPeer::CL_SITE_ADDR_3, ClientSitesPeer::CL_SITE_ZIPCODE, ClientSitesPeer::CL_SITE_TOWN, ClientSitesPeer::CL_SITE_COUNTRY_ID, ClientSitesPeer::CL_SITE_IS_FOR_LOG, ClientSitesPeer::GDL_FOURN_ID, ClientSitesPeer::ACTIF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CL_SITE_ID', 'CL_ID', 'CL_SITE_LIBELLE', 'CL_SITE_ADDR_1', 'CL_SITE_ADDR_2', 'CL_SITE_ADDR_3', 'CL_SITE_ZIPCODE', 'CL_SITE_TOWN', 'CL_SITE_COUNTRY_ID', 'CL_SITE_IS_FOR_LOG', 'GDL_FOURN_ID', 'ACTIF', ),
        BasePeer::TYPE_FIELDNAME => array ('cl_site_id', 'cl_id', 'cl_site_libelle', 'cl_site_addr_1', 'cl_site_addr_2', 'cl_site_addr_3', 'cl_site_zipcode', 'cl_site_town', 'cl_site_country_id', 'cl_site_is_for_log', 'gdl_fourn_id', 'actif', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ClientSitesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ClSiteId' => 0, 'ClId' => 1, 'ClSiteLibelle' => 2, 'ClSiteAddr1' => 3, 'ClSiteAddr2' => 4, 'ClSiteAddr3' => 5, 'ClSiteZipcode' => 6, 'ClSiteTown' => 7, 'ClSiteCountryId' => 8, 'ClSiteIsForLog' => 9, 'GdlFournId' => 10, 'Actif' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('clSiteId' => 0, 'clId' => 1, 'clSiteLibelle' => 2, 'clSiteAddr1' => 3, 'clSiteAddr2' => 4, 'clSiteAddr3' => 5, 'clSiteZipcode' => 6, 'clSiteTown' => 7, 'clSiteCountryId' => 8, 'clSiteIsForLog' => 9, 'gdlFournId' => 10, 'actif' => 11, ),
        BasePeer::TYPE_COLNAME => array (ClientSitesPeer::CL_SITE_ID => 0, ClientSitesPeer::CL_ID => 1, ClientSitesPeer::CL_SITE_LIBELLE => 2, ClientSitesPeer::CL_SITE_ADDR_1 => 3, ClientSitesPeer::CL_SITE_ADDR_2 => 4, ClientSitesPeer::CL_SITE_ADDR_3 => 5, ClientSitesPeer::CL_SITE_ZIPCODE => 6, ClientSitesPeer::CL_SITE_TOWN => 7, ClientSitesPeer::CL_SITE_COUNTRY_ID => 8, ClientSitesPeer::CL_SITE_IS_FOR_LOG => 9, ClientSitesPeer::GDL_FOURN_ID => 10, ClientSitesPeer::ACTIF => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CL_SITE_ID' => 0, 'CL_ID' => 1, 'CL_SITE_LIBELLE' => 2, 'CL_SITE_ADDR_1' => 3, 'CL_SITE_ADDR_2' => 4, 'CL_SITE_ADDR_3' => 5, 'CL_SITE_ZIPCODE' => 6, 'CL_SITE_TOWN' => 7, 'CL_SITE_COUNTRY_ID' => 8, 'CL_SITE_IS_FOR_LOG' => 9, 'GDL_FOURN_ID' => 10, 'ACTIF' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('cl_site_id' => 0, 'cl_id' => 1, 'cl_site_libelle' => 2, 'cl_site_addr_1' => 3, 'cl_site_addr_2' => 4, 'cl_site_addr_3' => 5, 'cl_site_zipcode' => 6, 'cl_site_town' => 7, 'cl_site_country_id' => 8, 'cl_site_is_for_log' => 9, 'gdl_fourn_id' => 10, 'actif' => 11, ),
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
        $toNames = ClientSitesPeer::getFieldNames($toType);
        $key = isset(ClientSitesPeer::$fieldKeys[$fromType][$name]) ? ClientSitesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ClientSitesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ClientSitesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ClientSitesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ClientSitesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ClientSitesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ClientSitesPeer::CL_SITE_ID);
            $criteria->addSelectColumn(ClientSitesPeer::CL_ID);
            $criteria->addSelectColumn(ClientSitesPeer::CL_SITE_LIBELLE);
            $criteria->addSelectColumn(ClientSitesPeer::CL_SITE_ADDR_1);
            $criteria->addSelectColumn(ClientSitesPeer::CL_SITE_ADDR_2);
            $criteria->addSelectColumn(ClientSitesPeer::CL_SITE_ADDR_3);
            $criteria->addSelectColumn(ClientSitesPeer::CL_SITE_ZIPCODE);
            $criteria->addSelectColumn(ClientSitesPeer::CL_SITE_TOWN);
            $criteria->addSelectColumn(ClientSitesPeer::CL_SITE_COUNTRY_ID);
            $criteria->addSelectColumn(ClientSitesPeer::CL_SITE_IS_FOR_LOG);
            $criteria->addSelectColumn(ClientSitesPeer::GDL_FOURN_ID);
            $criteria->addSelectColumn(ClientSitesPeer::ACTIF);
        } else {
            $criteria->addSelectColumn($alias . '.cl_site_id');
            $criteria->addSelectColumn($alias . '.cl_id');
            $criteria->addSelectColumn($alias . '.cl_site_libelle');
            $criteria->addSelectColumn($alias . '.cl_site_addr_1');
            $criteria->addSelectColumn($alias . '.cl_site_addr_2');
            $criteria->addSelectColumn($alias . '.cl_site_addr_3');
            $criteria->addSelectColumn($alias . '.cl_site_zipcode');
            $criteria->addSelectColumn($alias . '.cl_site_town');
            $criteria->addSelectColumn($alias . '.cl_site_country_id');
            $criteria->addSelectColumn($alias . '.cl_site_is_for_log');
            $criteria->addSelectColumn($alias . '.gdl_fourn_id');
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
        $criteria->setPrimaryTableName(ClientSitesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientSitesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ClientSitesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return ClientSites
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ClientSitesPeer::doSelect($critcopy, $con);
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
        return ClientSitesPeer::populateObjects(ClientSitesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ClientSitesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ClientSitesPeer::DATABASE_NAME);

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
     * @param ClientSites $obj A ClientSites object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getClSiteId();
            } // if key === null
            ClientSitesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ClientSites object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ClientSites) {
                $key = (string) $value->getClSiteId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ClientSites object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ClientSitesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ClientSites Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ClientSitesPeer::$instances[$key])) {
                return ClientSitesPeer::$instances[$key];
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
        foreach (ClientSitesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ClientSitesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to client_sites
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
        $cls = ClientSitesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ClientSitesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ClientSitesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ClientSitesPeer::addInstanceToPool($obj, $key);
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
     * @return array (ClientSites object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ClientSitesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ClientSitesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ClientSitesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ClientSitesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ClientSitesPeer::DATABASE_NAME)->getTable(ClientSitesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseClientSitesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseClientSitesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ClientSitesTableMap());
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
        return ClientSitesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ClientSites or Criteria object.
     *
     * @param      mixed $values Criteria or ClientSites object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ClientSites object
        }

        if ($criteria->containsKey(ClientSitesPeer::CL_SITE_ID) && $criteria->keyContainsValue(ClientSitesPeer::CL_SITE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ClientSitesPeer::CL_SITE_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ClientSitesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ClientSites or Criteria object.
     *
     * @param      mixed $values Criteria or ClientSites object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ClientSitesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ClientSitesPeer::CL_SITE_ID);
            $value = $criteria->remove(ClientSitesPeer::CL_SITE_ID);
            if ($value) {
                $selectCriteria->add(ClientSitesPeer::CL_SITE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ClientSitesPeer::TABLE_NAME);
            }

        } else { // $values is ClientSites object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ClientSitesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the client_sites table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ClientSitesPeer::TABLE_NAME, $con, ClientSitesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ClientSitesPeer::clearInstancePool();
            ClientSitesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ClientSites or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ClientSites object or primary key or array of primary keys
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
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ClientSitesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ClientSites) { // it's a model object
            // invalidate the cache for this single object
            ClientSitesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ClientSitesPeer::DATABASE_NAME);
            $criteria->add(ClientSitesPeer::CL_SITE_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ClientSitesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ClientSitesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ClientSitesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ClientSites object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ClientSites $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ClientSitesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ClientSitesPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::CL_ID))
            $columns[ClientSitesPeer::CL_ID] = $obj->getClId();

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::CL_SITE_LIBELLE))
            $columns[ClientSitesPeer::CL_SITE_LIBELLE] = $obj->getClSiteLibelle();

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::CL_SITE_ADDR_1))
            $columns[ClientSitesPeer::CL_SITE_ADDR_1] = $obj->getClSiteAddr1();

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::CL_SITE_ADDR_2))
            $columns[ClientSitesPeer::CL_SITE_ADDR_2] = $obj->getClSiteAddr2();

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::CL_SITE_ADDR_3))
            $columns[ClientSitesPeer::CL_SITE_ADDR_3] = $obj->getClSiteAddr3();

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::CL_SITE_ZIPCODE))
            $columns[ClientSitesPeer::CL_SITE_ZIPCODE] = $obj->getClSiteZipcode();

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::CL_SITE_TOWN))
            $columns[ClientSitesPeer::CL_SITE_TOWN] = $obj->getClSiteTown();

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::CL_SITE_COUNTRY_ID))
            $columns[ClientSitesPeer::CL_SITE_COUNTRY_ID] = $obj->getClSiteCountryId();

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::CL_SITE_IS_FOR_LOG))
            $columns[ClientSitesPeer::CL_SITE_IS_FOR_LOG] = $obj->getClSiteIsForLog();

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::GDL_FOURN_ID))
            $columns[ClientSitesPeer::GDL_FOURN_ID] = $obj->getGdlFournId();

        if ($obj->isNew() || $obj->isColumnModified(ClientSitesPeer::ACTIF))
            $columns[ClientSitesPeer::ACTIF] = $obj->getActif();

        }

        return BasePeer::doValidate(ClientSitesPeer::DATABASE_NAME, ClientSitesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ClientSites
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ClientSitesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ClientSitesPeer::DATABASE_NAME);
        $criteria->add(ClientSitesPeer::CL_SITE_ID, $pk);

        $v = ClientSitesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ClientSites[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ClientSitesPeer::DATABASE_NAME);
            $criteria->add(ClientSitesPeer::CL_SITE_ID, $pks, Criteria::IN);
            $objs = ClientSitesPeer::doSelect($criteria, $con);
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
} // BaseClientSitesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseClientSitesPeer::buildTableMap();

