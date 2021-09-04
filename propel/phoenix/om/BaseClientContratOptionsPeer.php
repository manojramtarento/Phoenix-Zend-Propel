<?php


/**
 * Base static class for performing query and update operations on the 'client_contrat_options' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseClientContratOptionsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'client_contrat_options';

    /** the related Propel class for this table */
    const OM_CLASS = 'ClientContratOptions';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ClientContratOptionsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the cl_ct_opt_id field */
    const CL_CT_OPT_ID = 'client_contrat_options.cl_ct_opt_id';

    /** the column name for the cl_id field */
    const CL_ID = 'client_contrat_options.cl_id';

    /** the column name for the cl_ct_archivage_duree field */
    const CL_CT_ARCHIVAGE_DUREE = 'client_contrat_options.cl_ct_archivage_duree';

    /** the column name for the cl_ct_archivage_unit field */
    const CL_CT_ARCHIVAGE_UNIT = 'client_contrat_options.cl_ct_archivage_unit';

    /** the column name for the cl_ct_revision_birthday field */
    const CL_CT_REVISION_BIRTHDAY = 'client_contrat_options.cl_ct_revision_birthday';

    /** the column name for the cl_ct_reconduction field */
    const CL_CT_RECONDUCTION = 'client_contrat_options.cl_ct_reconduction';

    /** the column name for the cl_ct_start field */
    const CL_CT_START = 'client_contrat_options.cl_ct_start';

    /** the column name for the cl_ct_echeance field */
    const CL_CT_ECHEANCE = 'client_contrat_options.cl_ct_echeance';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ClientContratOptions objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ClientContratOptions[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ClientContratOptionsPeer::$fieldNames[ClientContratOptionsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ClCtOptId', 'ClId', 'ClCtArchivageDuree', 'ClCtArchivageUnit', 'ClCtRevisionBirthday', 'ClCtReconduction', 'ClCtStart', 'ClCtEcheance', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('clCtOptId', 'clId', 'clCtArchivageDuree', 'clCtArchivageUnit', 'clCtRevisionBirthday', 'clCtReconduction', 'clCtStart', 'clCtEcheance', ),
        BasePeer::TYPE_COLNAME => array (ClientContratOptionsPeer::CL_CT_OPT_ID, ClientContratOptionsPeer::CL_ID, ClientContratOptionsPeer::CL_CT_ARCHIVAGE_DUREE, ClientContratOptionsPeer::CL_CT_ARCHIVAGE_UNIT, ClientContratOptionsPeer::CL_CT_REVISION_BIRTHDAY, ClientContratOptionsPeer::CL_CT_RECONDUCTION, ClientContratOptionsPeer::CL_CT_START, ClientContratOptionsPeer::CL_CT_ECHEANCE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CL_CT_OPT_ID', 'CL_ID', 'CL_CT_ARCHIVAGE_DUREE', 'CL_CT_ARCHIVAGE_UNIT', 'CL_CT_REVISION_BIRTHDAY', 'CL_CT_RECONDUCTION', 'CL_CT_START', 'CL_CT_ECHEANCE', ),
        BasePeer::TYPE_FIELDNAME => array ('cl_ct_opt_id', 'cl_id', 'cl_ct_archivage_duree', 'cl_ct_archivage_unit', 'cl_ct_revision_birthday', 'cl_ct_reconduction', 'cl_ct_start', 'cl_ct_echeance', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ClientContratOptionsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ClCtOptId' => 0, 'ClId' => 1, 'ClCtArchivageDuree' => 2, 'ClCtArchivageUnit' => 3, 'ClCtRevisionBirthday' => 4, 'ClCtReconduction' => 5, 'ClCtStart' => 6, 'ClCtEcheance' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('clCtOptId' => 0, 'clId' => 1, 'clCtArchivageDuree' => 2, 'clCtArchivageUnit' => 3, 'clCtRevisionBirthday' => 4, 'clCtReconduction' => 5, 'clCtStart' => 6, 'clCtEcheance' => 7, ),
        BasePeer::TYPE_COLNAME => array (ClientContratOptionsPeer::CL_CT_OPT_ID => 0, ClientContratOptionsPeer::CL_ID => 1, ClientContratOptionsPeer::CL_CT_ARCHIVAGE_DUREE => 2, ClientContratOptionsPeer::CL_CT_ARCHIVAGE_UNIT => 3, ClientContratOptionsPeer::CL_CT_REVISION_BIRTHDAY => 4, ClientContratOptionsPeer::CL_CT_RECONDUCTION => 5, ClientContratOptionsPeer::CL_CT_START => 6, ClientContratOptionsPeer::CL_CT_ECHEANCE => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CL_CT_OPT_ID' => 0, 'CL_ID' => 1, 'CL_CT_ARCHIVAGE_DUREE' => 2, 'CL_CT_ARCHIVAGE_UNIT' => 3, 'CL_CT_REVISION_BIRTHDAY' => 4, 'CL_CT_RECONDUCTION' => 5, 'CL_CT_START' => 6, 'CL_CT_ECHEANCE' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('cl_ct_opt_id' => 0, 'cl_id' => 1, 'cl_ct_archivage_duree' => 2, 'cl_ct_archivage_unit' => 3, 'cl_ct_revision_birthday' => 4, 'cl_ct_reconduction' => 5, 'cl_ct_start' => 6, 'cl_ct_echeance' => 7, ),
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
        $toNames = ClientContratOptionsPeer::getFieldNames($toType);
        $key = isset(ClientContratOptionsPeer::$fieldKeys[$fromType][$name]) ? ClientContratOptionsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ClientContratOptionsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ClientContratOptionsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ClientContratOptionsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ClientContratOptionsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ClientContratOptionsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ClientContratOptionsPeer::CL_CT_OPT_ID);
            $criteria->addSelectColumn(ClientContratOptionsPeer::CL_ID);
            $criteria->addSelectColumn(ClientContratOptionsPeer::CL_CT_ARCHIVAGE_DUREE);
            $criteria->addSelectColumn(ClientContratOptionsPeer::CL_CT_ARCHIVAGE_UNIT);
            $criteria->addSelectColumn(ClientContratOptionsPeer::CL_CT_REVISION_BIRTHDAY);
            $criteria->addSelectColumn(ClientContratOptionsPeer::CL_CT_RECONDUCTION);
            $criteria->addSelectColumn(ClientContratOptionsPeer::CL_CT_START);
            $criteria->addSelectColumn(ClientContratOptionsPeer::CL_CT_ECHEANCE);
        } else {
            $criteria->addSelectColumn($alias . '.cl_ct_opt_id');
            $criteria->addSelectColumn($alias . '.cl_id');
            $criteria->addSelectColumn($alias . '.cl_ct_archivage_duree');
            $criteria->addSelectColumn($alias . '.cl_ct_archivage_unit');
            $criteria->addSelectColumn($alias . '.cl_ct_revision_birthday');
            $criteria->addSelectColumn($alias . '.cl_ct_reconduction');
            $criteria->addSelectColumn($alias . '.cl_ct_start');
            $criteria->addSelectColumn($alias . '.cl_ct_echeance');
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
        $criteria->setPrimaryTableName(ClientContratOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientContratOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ClientContratOptionsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return ClientContratOptions
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ClientContratOptionsPeer::doSelect($critcopy, $con);
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
        return ClientContratOptionsPeer::populateObjects(ClientContratOptionsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ClientContratOptionsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ClientContratOptionsPeer::DATABASE_NAME);

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
     * @param ClientContratOptions $obj A ClientContratOptions object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getClCtOptId();
            } // if key === null
            ClientContratOptionsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ClientContratOptions object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ClientContratOptions) {
                $key = (string) $value->getClCtOptId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ClientContratOptions object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ClientContratOptionsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ClientContratOptions Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ClientContratOptionsPeer::$instances[$key])) {
                return ClientContratOptionsPeer::$instances[$key];
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
        foreach (ClientContratOptionsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ClientContratOptionsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to client_contrat_options
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
        $cls = ClientContratOptionsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ClientContratOptionsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ClientContratOptionsPeer::addInstanceToPool($obj, $key);
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
     * @return array (ClientContratOptions object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ClientContratOptionsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ClientContratOptionsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ClientContratOptionsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Clients table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClients(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientContratOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientContratOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientContratOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientContratOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

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
     * Selects a collection of ClientContratOptions objects pre-filled with their Clients objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientContratOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClients(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientContratOptionsPeer::DATABASE_NAME);
        }

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol = ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;
        ClientsPeer::addSelectColumns($criteria);

        $criteria->addJoin(ClientContratOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientContratOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ClientContratOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientContratOptionsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClientsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ClientContratOptions) to $obj2 (Clients)
                $obj2->addClientContratOptions($obj1);

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
        $criteria->setPrimaryTableName(ClientContratOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientContratOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientContratOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientContratOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

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
     * Selects a collection of ClientContratOptions objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientContratOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientContratOptionsPeer::DATABASE_NAME);
        }

        ClientContratOptionsPeer::addSelectColumns($criteria);
        $startcol2 = ClientContratOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientContratOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientContratOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientContratOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientContratOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientContratOptionsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Clients rows

            $key2 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ClientsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (ClientContratOptions) to the collection in $obj2 (Clients)
                $obj2->addClientContratOptions($obj1);
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
        return Propel::getDatabaseMap(ClientContratOptionsPeer::DATABASE_NAME)->getTable(ClientContratOptionsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseClientContratOptionsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseClientContratOptionsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ClientContratOptionsTableMap());
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
        return ClientContratOptionsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ClientContratOptions or Criteria object.
     *
     * @param      mixed $values Criteria or ClientContratOptions object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ClientContratOptions object
        }

        if ($criteria->containsKey(ClientContratOptionsPeer::CL_CT_OPT_ID) && $criteria->keyContainsValue(ClientContratOptionsPeer::CL_CT_OPT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ClientContratOptionsPeer::CL_CT_OPT_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ClientContratOptionsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ClientContratOptions or Criteria object.
     *
     * @param      mixed $values Criteria or ClientContratOptions object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ClientContratOptionsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ClientContratOptionsPeer::CL_CT_OPT_ID);
            $value = $criteria->remove(ClientContratOptionsPeer::CL_CT_OPT_ID);
            if ($value) {
                $selectCriteria->add(ClientContratOptionsPeer::CL_CT_OPT_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ClientContratOptionsPeer::TABLE_NAME);
            }

        } else { // $values is ClientContratOptions object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ClientContratOptionsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the client_contrat_options table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ClientContratOptionsPeer::TABLE_NAME, $con, ClientContratOptionsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ClientContratOptionsPeer::clearInstancePool();
            ClientContratOptionsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ClientContratOptions or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ClientContratOptions object or primary key or array of primary keys
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
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ClientContratOptionsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ClientContratOptions) { // it's a model object
            // invalidate the cache for this single object
            ClientContratOptionsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ClientContratOptionsPeer::DATABASE_NAME);
            $criteria->add(ClientContratOptionsPeer::CL_CT_OPT_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ClientContratOptionsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ClientContratOptionsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ClientContratOptionsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ClientContratOptions object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ClientContratOptions $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ClientContratOptionsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ClientContratOptionsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(ClientContratOptionsPeer::CL_ID))
            $columns[ClientContratOptionsPeer::CL_ID] = $obj->getClId();

        if ($obj->isNew() || $obj->isColumnModified(ClientContratOptionsPeer::CL_CT_ARCHIVAGE_DUREE))
            $columns[ClientContratOptionsPeer::CL_CT_ARCHIVAGE_DUREE] = $obj->getClCtArchivageDuree();

        if ($obj->isNew() || $obj->isColumnModified(ClientContratOptionsPeer::CL_CT_REVISION_BIRTHDAY))
            $columns[ClientContratOptionsPeer::CL_CT_REVISION_BIRTHDAY] = $obj->getClCtRevisionBirthday();

        if ($obj->isNew() || $obj->isColumnModified(ClientContratOptionsPeer::CL_CT_RECONDUCTION))
            $columns[ClientContratOptionsPeer::CL_CT_RECONDUCTION] = $obj->getClCtReconduction();

        if ($obj->isNew() || $obj->isColumnModified(ClientContratOptionsPeer::CL_CT_ECHEANCE))
            $columns[ClientContratOptionsPeer::CL_CT_ECHEANCE] = $obj->getClCtEcheance();

        }

        return BasePeer::doValidate(ClientContratOptionsPeer::DATABASE_NAME, ClientContratOptionsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ClientContratOptions
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ClientContratOptionsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ClientContratOptionsPeer::DATABASE_NAME);
        $criteria->add(ClientContratOptionsPeer::CL_CT_OPT_ID, $pk);

        $v = ClientContratOptionsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ClientContratOptions[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ClientContratOptionsPeer::DATABASE_NAME);
            $criteria->add(ClientContratOptionsPeer::CL_CT_OPT_ID, $pks, Criteria::IN);
            $objs = ClientContratOptionsPeer::doSelect($criteria, $con);
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
} // BaseClientContratOptionsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseClientContratOptionsPeer::buildTableMap();

