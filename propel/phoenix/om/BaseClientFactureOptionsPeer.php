<?php


/**
 * Base static class for performing query and update operations on the 'client_facture_options' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseClientFactureOptionsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'client_facture_options';

    /** the related Propel class for this table */
    const OM_CLASS = 'ClientFactureOptions';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ClientFactureOptionsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the cl_fact_opt_id field */
    const CL_FACT_OPT_ID = 'client_facture_options.cl_fact_opt_id';

    /** the column name for the cl_id field */
    const CL_ID = 'client_facture_options.cl_id';

    /** the column name for the cl_fact_bdc_required field */
    const CL_FACT_BDC_REQUIRED = 'client_facture_options.cl_fact_bdc_required';

    /** the column name for the cl_fact_bdc field */
    const CL_FACT_BDC = 'client_facture_options.cl_fact_bdc';

    /** the column name for the cl_fact_tvaintra field */
    const CL_FACT_TVAINTRA = 'client_facture_options.cl_fact_tvaintra';

    /** the column name for the cl_fact_country_id field */
    const CL_FACT_COUNTRY_ID = 'client_facture_options.cl_fact_country_id';

    /** the column name for the cl_fact_adf field */
    const CL_FACT_ADF = 'client_facture_options.cl_fact_adf';

    /** the column name for the cl_fact_compte field */
    const CL_FACT_COMPTE = 'client_facture_options.cl_fact_compte';

    /** the column name for the cl_fact_rfa field */
    const CL_FACT_RFA = 'client_facture_options.cl_fact_rfa';

    /** the column name for the cl_fact_rfa_descr field */
    const CL_FACT_RFA_DESCR = 'client_facture_options.cl_fact_rfa_descr';

    /** the column name for the cl_fact_echeance field */
    const CL_FACT_ECHEANCE = 'client_facture_options.cl_fact_echeance';

    /** the column name for the cl_fact_lang field */
    const CL_FACT_LANG = 'client_facture_options.cl_fact_lang';

    /** the column name for the plan_fact_periode_id field */
    const PLAN_FACT_PERIODE_ID = 'client_facture_options.plan_fact_periode_id';

    /** the column name for the plan_fact_periode_type_id field */
    const PLAN_FACT_PERIODE_TYPE_ID = 'client_facture_options.plan_fact_periode_type_id';

    /** the column name for the cl_fact_siret field */
    const CL_FACT_SIRET = 'client_facture_options.cl_fact_siret';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ClientFactureOptions objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ClientFactureOptions[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ClientFactureOptionsPeer::$fieldNames[ClientFactureOptionsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ClFactOptId', 'ClId', 'ClFactBdcRequired', 'ClFactBdc', 'ClFactTvaintra', 'ClFactCountryId', 'ClFactAdf', 'ClFactCompte', 'ClFactRfa', 'ClFactRfaDescr', 'ClFactEcheance', 'ClFactLang', 'PlanFactPeriodeId', 'PlanFactPeriodeTypeId', 'ClFactSiret', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('clFactOptId', 'clId', 'clFactBdcRequired', 'clFactBdc', 'clFactTvaintra', 'clFactCountryId', 'clFactAdf', 'clFactCompte', 'clFactRfa', 'clFactRfaDescr', 'clFactEcheance', 'clFactLang', 'planFactPeriodeId', 'planFactPeriodeTypeId', 'clFactSiret', ),
        BasePeer::TYPE_COLNAME => array (ClientFactureOptionsPeer::CL_FACT_OPT_ID, ClientFactureOptionsPeer::CL_ID, ClientFactureOptionsPeer::CL_FACT_BDC_REQUIRED, ClientFactureOptionsPeer::CL_FACT_BDC, ClientFactureOptionsPeer::CL_FACT_TVAINTRA, ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, ClientFactureOptionsPeer::CL_FACT_ADF, ClientFactureOptionsPeer::CL_FACT_COMPTE, ClientFactureOptionsPeer::CL_FACT_RFA, ClientFactureOptionsPeer::CL_FACT_RFA_DESCR, ClientFactureOptionsPeer::CL_FACT_ECHEANCE, ClientFactureOptionsPeer::CL_FACT_LANG, ClientFactureOptionsPeer::PLAN_FACT_PERIODE_ID, ClientFactureOptionsPeer::PLAN_FACT_PERIODE_TYPE_ID, ClientFactureOptionsPeer::CL_FACT_SIRET, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CL_FACT_OPT_ID', 'CL_ID', 'CL_FACT_BDC_REQUIRED', 'CL_FACT_BDC', 'CL_FACT_TVAINTRA', 'CL_FACT_COUNTRY_ID', 'CL_FACT_ADF', 'CL_FACT_COMPTE', 'CL_FACT_RFA', 'CL_FACT_RFA_DESCR', 'CL_FACT_ECHEANCE', 'CL_FACT_LANG', 'PLAN_FACT_PERIODE_ID', 'PLAN_FACT_PERIODE_TYPE_ID', 'CL_FACT_SIRET', ),
        BasePeer::TYPE_FIELDNAME => array ('cl_fact_opt_id', 'cl_id', 'cl_fact_bdc_required', 'cl_fact_bdc', 'cl_fact_tvaintra', 'cl_fact_country_id', 'cl_fact_adf', 'cl_fact_compte', 'cl_fact_rfa', 'cl_fact_rfa_descr', 'cl_fact_echeance', 'cl_fact_lang', 'plan_fact_periode_id', 'plan_fact_periode_type_id', 'cl_fact_siret', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ClientFactureOptionsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ClFactOptId' => 0, 'ClId' => 1, 'ClFactBdcRequired' => 2, 'ClFactBdc' => 3, 'ClFactTvaintra' => 4, 'ClFactCountryId' => 5, 'ClFactAdf' => 6, 'ClFactCompte' => 7, 'ClFactRfa' => 8, 'ClFactRfaDescr' => 9, 'ClFactEcheance' => 10, 'ClFactLang' => 11, 'PlanFactPeriodeId' => 12, 'PlanFactPeriodeTypeId' => 13, 'ClFactSiret' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('clFactOptId' => 0, 'clId' => 1, 'clFactBdcRequired' => 2, 'clFactBdc' => 3, 'clFactTvaintra' => 4, 'clFactCountryId' => 5, 'clFactAdf' => 6, 'clFactCompte' => 7, 'clFactRfa' => 8, 'clFactRfaDescr' => 9, 'clFactEcheance' => 10, 'clFactLang' => 11, 'planFactPeriodeId' => 12, 'planFactPeriodeTypeId' => 13, 'clFactSiret' => 14, ),
        BasePeer::TYPE_COLNAME => array (ClientFactureOptionsPeer::CL_FACT_OPT_ID => 0, ClientFactureOptionsPeer::CL_ID => 1, ClientFactureOptionsPeer::CL_FACT_BDC_REQUIRED => 2, ClientFactureOptionsPeer::CL_FACT_BDC => 3, ClientFactureOptionsPeer::CL_FACT_TVAINTRA => 4, ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID => 5, ClientFactureOptionsPeer::CL_FACT_ADF => 6, ClientFactureOptionsPeer::CL_FACT_COMPTE => 7, ClientFactureOptionsPeer::CL_FACT_RFA => 8, ClientFactureOptionsPeer::CL_FACT_RFA_DESCR => 9, ClientFactureOptionsPeer::CL_FACT_ECHEANCE => 10, ClientFactureOptionsPeer::CL_FACT_LANG => 11, ClientFactureOptionsPeer::PLAN_FACT_PERIODE_ID => 12, ClientFactureOptionsPeer::PLAN_FACT_PERIODE_TYPE_ID => 13, ClientFactureOptionsPeer::CL_FACT_SIRET => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CL_FACT_OPT_ID' => 0, 'CL_ID' => 1, 'CL_FACT_BDC_REQUIRED' => 2, 'CL_FACT_BDC' => 3, 'CL_FACT_TVAINTRA' => 4, 'CL_FACT_COUNTRY_ID' => 5, 'CL_FACT_ADF' => 6, 'CL_FACT_COMPTE' => 7, 'CL_FACT_RFA' => 8, 'CL_FACT_RFA_DESCR' => 9, 'CL_FACT_ECHEANCE' => 10, 'CL_FACT_LANG' => 11, 'PLAN_FACT_PERIODE_ID' => 12, 'PLAN_FACT_PERIODE_TYPE_ID' => 13, 'CL_FACT_SIRET' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('cl_fact_opt_id' => 0, 'cl_id' => 1, 'cl_fact_bdc_required' => 2, 'cl_fact_bdc' => 3, 'cl_fact_tvaintra' => 4, 'cl_fact_country_id' => 5, 'cl_fact_adf' => 6, 'cl_fact_compte' => 7, 'cl_fact_rfa' => 8, 'cl_fact_rfa_descr' => 9, 'cl_fact_echeance' => 10, 'cl_fact_lang' => 11, 'plan_fact_periode_id' => 12, 'plan_fact_periode_type_id' => 13, 'cl_fact_siret' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $toNames = ClientFactureOptionsPeer::getFieldNames($toType);
        $key = isset(ClientFactureOptionsPeer::$fieldKeys[$fromType][$name]) ? ClientFactureOptionsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ClientFactureOptionsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ClientFactureOptionsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ClientFactureOptionsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ClientFactureOptionsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ClientFactureOptionsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_OPT_ID);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_ID);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_BDC_REQUIRED);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_BDC);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_TVAINTRA);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_ADF);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_COMPTE);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_RFA);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_RFA_DESCR);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_ECHEANCE);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_LANG);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_ID);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_TYPE_ID);
            $criteria->addSelectColumn(ClientFactureOptionsPeer::CL_FACT_SIRET);
        } else {
            $criteria->addSelectColumn($alias . '.cl_fact_opt_id');
            $criteria->addSelectColumn($alias . '.cl_id');
            $criteria->addSelectColumn($alias . '.cl_fact_bdc_required');
            $criteria->addSelectColumn($alias . '.cl_fact_bdc');
            $criteria->addSelectColumn($alias . '.cl_fact_tvaintra');
            $criteria->addSelectColumn($alias . '.cl_fact_country_id');
            $criteria->addSelectColumn($alias . '.cl_fact_adf');
            $criteria->addSelectColumn($alias . '.cl_fact_compte');
            $criteria->addSelectColumn($alias . '.cl_fact_rfa');
            $criteria->addSelectColumn($alias . '.cl_fact_rfa_descr');
            $criteria->addSelectColumn($alias . '.cl_fact_echeance');
            $criteria->addSelectColumn($alias . '.cl_fact_lang');
            $criteria->addSelectColumn($alias . '.plan_fact_periode_id');
            $criteria->addSelectColumn($alias . '.plan_fact_periode_type_id');
            $criteria->addSelectColumn($alias . '.cl_fact_siret');
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
        $criteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return ClientFactureOptions
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ClientFactureOptionsPeer::doSelect($critcopy, $con);
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
        return ClientFactureOptionsPeer::populateObjects(ClientFactureOptionsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

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
     * @param ClientFactureOptions $obj A ClientFactureOptions object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getClFactOptId();
            } // if key === null
            ClientFactureOptionsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ClientFactureOptions object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ClientFactureOptions) {
                $key = (string) $value->getClFactOptId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ClientFactureOptions object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ClientFactureOptionsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ClientFactureOptions Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ClientFactureOptionsPeer::$instances[$key])) {
                return ClientFactureOptionsPeer::$instances[$key];
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
        foreach (ClientFactureOptionsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ClientFactureOptionsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to client_facture_options
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
        $cls = ClientFactureOptionsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ClientFactureOptionsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ClientFactureOptionsPeer::addInstanceToPool($obj, $key);
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
     * @return array (ClientFactureOptions object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ClientFactureOptionsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ClientFactureOptionsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ClientFactureOptionsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related RFactureOptionsEcheances table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRFactureOptionsEcheances(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientFactureOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RLanguages table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRLanguages(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_LANG, RLanguagesPeer::R_LANG_CODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CountryInvoiced table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCountryInvoiced(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, RCountriesPeer::R_COUNTRY_ID, $join_behavior);

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
     * Selects a collection of ClientFactureOptions objects pre-filled with their RFactureOptionsEcheances objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientFactureOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRFactureOptionsEcheances(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);
        }

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol = ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;
        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientFactureOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ClientFactureOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientFactureOptionsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ClientFactureOptions) to $obj2 (RFactureOptionsEcheances)
                $obj2->addClientFactureOptions($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ClientFactureOptions objects pre-filled with their Clients objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientFactureOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClients(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);
        }

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol = ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;
        ClientsPeer::addSelectColumns($criteria);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientFactureOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ClientFactureOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientFactureOptionsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (ClientFactureOptions) to $obj2 (Clients)
                $obj2->addClientFactureOptions($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ClientFactureOptions objects pre-filled with their RLanguages objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientFactureOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRLanguages(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);
        }

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol = ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;
        RLanguagesPeer::addSelectColumns($criteria);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_LANG, RLanguagesPeer::R_LANG_CODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientFactureOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ClientFactureOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientFactureOptionsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RLanguagesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RLanguagesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RLanguagesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RLanguagesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ClientFactureOptions) to $obj2 (RLanguages)
                $obj2->addClientFactureOptions($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ClientFactureOptions objects pre-filled with their RCountries objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientFactureOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCountryInvoiced(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);
        }

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol = ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;
        RCountriesPeer::addSelectColumns($criteria);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, RCountriesPeer::R_COUNTRY_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientFactureOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ClientFactureOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientFactureOptionsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RCountriesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RCountriesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RCountriesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RCountriesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ClientFactureOptions) to $obj2 (RCountries)
                $obj2->addClientFactureOptions($obj1);

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
        $criteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_LANG, RLanguagesPeer::R_LANG_CODE, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, RCountriesPeer::R_COUNTRY_ID, $join_behavior);

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
     * Selects a collection of ClientFactureOptions objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientFactureOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);
        }

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol2 = ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        RLanguagesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RLanguagesPeer::NUM_HYDRATE_COLUMNS;

        RCountriesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RCountriesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_LANG, RLanguagesPeer::R_LANG_CODE, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, RCountriesPeer::R_COUNTRY_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientFactureOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientFactureOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientFactureOptionsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined RFactureOptionsEcheances rows

            $key2 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj2 (RFactureOptionsEcheances)
                $obj2->addClientFactureOptions($obj1);
            } // if joined row not null

            // Add objects for joined Clients rows

            $key3 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ClientsPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ClientsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ClientsPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj3 (Clients)
                $obj3->addClientFactureOptions($obj1);
            } // if joined row not null

            // Add objects for joined RLanguages rows

            $key4 = RLanguagesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = RLanguagesPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = RLanguagesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RLanguagesPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj4 (RLanguages)
                $obj4->addClientFactureOptions($obj1);
            } // if joined row not null

            // Add objects for joined RCountries rows

            $key5 = RCountriesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = RCountriesPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = RCountriesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RCountriesPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj5 (RCountries)
                $obj5->addClientFactureOptions($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related RFactureOptionsEcheances table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRFactureOptionsEcheances(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientFactureOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_LANG, RLanguagesPeer::R_LANG_CODE, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, RCountriesPeer::R_COUNTRY_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Clients table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClients(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_LANG, RLanguagesPeer::R_LANG_CODE, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, RCountriesPeer::R_COUNTRY_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RLanguages table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRLanguages(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, RCountriesPeer::R_COUNTRY_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CountryInvoiced table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCountryInvoiced(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientFactureOptionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_LANG, RLanguagesPeer::R_LANG_CODE, $join_behavior);

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
     * Selects a collection of ClientFactureOptions objects pre-filled with all related objects except RFactureOptionsEcheances.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientFactureOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRFactureOptionsEcheances(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);
        }

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol2 = ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        RLanguagesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RLanguagesPeer::NUM_HYDRATE_COLUMNS;

        RCountriesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RCountriesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientFactureOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_LANG, RLanguagesPeer::R_LANG_CODE, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, RCountriesPeer::R_COUNTRY_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientFactureOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientFactureOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientFactureOptionsPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj2 (Clients)
                $obj2->addClientFactureOptions($obj1);

            } // if joined row is not null

                // Add objects for joined RLanguages rows

                $key3 = RLanguagesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RLanguagesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RLanguagesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RLanguagesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj3 (RLanguages)
                $obj3->addClientFactureOptions($obj1);

            } // if joined row is not null

                // Add objects for joined RCountries rows

                $key4 = RCountriesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RCountriesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RCountriesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RCountriesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj4 (RCountries)
                $obj4->addClientFactureOptions($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ClientFactureOptions objects pre-filled with all related objects except Clients.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientFactureOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClients(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);
        }

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol2 = ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        RLanguagesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RLanguagesPeer::NUM_HYDRATE_COLUMNS;

        RCountriesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RCountriesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_LANG, RLanguagesPeer::R_LANG_CODE, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, RCountriesPeer::R_COUNTRY_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientFactureOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientFactureOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientFactureOptionsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RFactureOptionsEcheances rows

                $key2 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj2 (RFactureOptionsEcheances)
                $obj2->addClientFactureOptions($obj1);

            } // if joined row is not null

                // Add objects for joined RLanguages rows

                $key3 = RLanguagesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RLanguagesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RLanguagesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RLanguagesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj3 (RLanguages)
                $obj3->addClientFactureOptions($obj1);

            } // if joined row is not null

                // Add objects for joined RCountries rows

                $key4 = RCountriesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RCountriesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RCountriesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RCountriesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj4 (RCountries)
                $obj4->addClientFactureOptions($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ClientFactureOptions objects pre-filled with all related objects except RLanguages.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientFactureOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRLanguages(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);
        }

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol2 = ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        RCountriesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RCountriesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, RCountriesPeer::R_COUNTRY_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientFactureOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientFactureOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientFactureOptionsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RFactureOptionsEcheances rows

                $key2 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj2 (RFactureOptionsEcheances)
                $obj2->addClientFactureOptions($obj1);

            } // if joined row is not null

                // Add objects for joined Clients rows

                $key3 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ClientsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ClientsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ClientsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj3 (Clients)
                $obj3->addClientFactureOptions($obj1);

            } // if joined row is not null

                // Add objects for joined RCountries rows

                $key4 = RCountriesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RCountriesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RCountriesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RCountriesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj4 (RCountries)
                $obj4->addClientFactureOptions($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ClientFactureOptions objects pre-filled with all related objects except CountryInvoiced.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ClientFactureOptions objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCountryInvoiced(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);
        }

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol2 = ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        RFactureOptionsEcheancesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RFactureOptionsEcheancesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        RLanguagesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RLanguagesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(ClientFactureOptionsPeer::CL_FACT_LANG, RLanguagesPeer::R_LANG_CODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientFactureOptionsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientFactureOptionsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientFactureOptionsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RFactureOptionsEcheances rows

                $key2 = RFactureOptionsEcheancesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RFactureOptionsEcheancesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RFactureOptionsEcheancesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RFactureOptionsEcheancesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj2 (RFactureOptionsEcheances)
                $obj2->addClientFactureOptions($obj1);

            } // if joined row is not null

                // Add objects for joined Clients rows

                $key3 = ClientsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ClientsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ClientsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ClientsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj3 (Clients)
                $obj3->addClientFactureOptions($obj1);

            } // if joined row is not null

                // Add objects for joined RLanguages rows

                $key4 = RLanguagesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RLanguagesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RLanguagesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RLanguagesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (ClientFactureOptions) to the collection in $obj4 (RLanguages)
                $obj4->addClientFactureOptions($obj1);

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
        return Propel::getDatabaseMap(ClientFactureOptionsPeer::DATABASE_NAME)->getTable(ClientFactureOptionsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseClientFactureOptionsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseClientFactureOptionsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ClientFactureOptionsTableMap());
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
        return ClientFactureOptionsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ClientFactureOptions or Criteria object.
     *
     * @param      mixed $values Criteria or ClientFactureOptions object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ClientFactureOptions object
        }

        if ($criteria->containsKey(ClientFactureOptionsPeer::CL_FACT_OPT_ID) && $criteria->keyContainsValue(ClientFactureOptionsPeer::CL_FACT_OPT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ClientFactureOptionsPeer::CL_FACT_OPT_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ClientFactureOptions or Criteria object.
     *
     * @param      mixed $values Criteria or ClientFactureOptions object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ClientFactureOptionsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ClientFactureOptionsPeer::CL_FACT_OPT_ID);
            $value = $criteria->remove(ClientFactureOptionsPeer::CL_FACT_OPT_ID);
            if ($value) {
                $selectCriteria->add(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ClientFactureOptionsPeer::TABLE_NAME);
            }

        } else { // $values is ClientFactureOptions object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the client_facture_options table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ClientFactureOptionsPeer::TABLE_NAME, $con, ClientFactureOptionsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ClientFactureOptionsPeer::clearInstancePool();
            ClientFactureOptionsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ClientFactureOptions or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ClientFactureOptions object or primary key or array of primary keys
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
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ClientFactureOptionsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ClientFactureOptions) { // it's a model object
            // invalidate the cache for this single object
            ClientFactureOptionsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ClientFactureOptionsPeer::DATABASE_NAME);
            $criteria->add(ClientFactureOptionsPeer::CL_FACT_OPT_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ClientFactureOptionsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ClientFactureOptionsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ClientFactureOptionsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ClientFactureOptions object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ClientFactureOptions $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ClientFactureOptionsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ClientFactureOptionsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_ID))
            $columns[ClientFactureOptionsPeer::CL_ID] = $obj->getClId();

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_FACT_BDC_REQUIRED))
            $columns[ClientFactureOptionsPeer::CL_FACT_BDC_REQUIRED] = $obj->getClFactBdcRequired();

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_FACT_TVAINTRA))
            $columns[ClientFactureOptionsPeer::CL_FACT_TVAINTRA] = $obj->getClFactTvaintra();

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID))
            $columns[ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID] = $obj->getClFactCountryId();

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_FACT_ADF))
            $columns[ClientFactureOptionsPeer::CL_FACT_ADF] = $obj->getClFactAdf();

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_FACT_COMPTE))
            $columns[ClientFactureOptionsPeer::CL_FACT_COMPTE] = $obj->getClFactCompte();

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_FACT_RFA))
            $columns[ClientFactureOptionsPeer::CL_FACT_RFA] = $obj->getClFactRfa();

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_FACT_RFA_DESCR))
            $columns[ClientFactureOptionsPeer::CL_FACT_RFA_DESCR] = $obj->getClFactRfaDescr();

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_FACT_ECHEANCE))
            $columns[ClientFactureOptionsPeer::CL_FACT_ECHEANCE] = $obj->getClFactEcheance();

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_FACT_LANG))
            $columns[ClientFactureOptionsPeer::CL_FACT_LANG] = $obj->getClFactLang();

        if ($obj->isNew() || $obj->isColumnModified(ClientFactureOptionsPeer::CL_FACT_SIRET))
            $columns[ClientFactureOptionsPeer::CL_FACT_SIRET] = $obj->getClFactSiret();

        }

        return BasePeer::doValidate(ClientFactureOptionsPeer::DATABASE_NAME, ClientFactureOptionsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ClientFactureOptions
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ClientFactureOptionsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ClientFactureOptionsPeer::DATABASE_NAME);
        $criteria->add(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $pk);

        $v = ClientFactureOptionsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ClientFactureOptions[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ClientFactureOptionsPeer::DATABASE_NAME);
            $criteria->add(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $pks, Criteria::IN);
            $objs = ClientFactureOptionsPeer::doSelect($criteria, $con);
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
} // BaseClientFactureOptionsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseClientFactureOptionsPeer::buildTableMap();

