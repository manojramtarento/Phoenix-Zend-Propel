<?php


/**
 * Base static class for performing query and update operations on the 'plan_facturation_params' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BasePlanFacturationParamsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'plan_facturation_params';

    /** the related Propel class for this table */
    const OM_CLASS = 'PlanFacturationParams';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PlanFacturationParamsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the plan_fact_id field */
    const PLAN_FACT_ID = 'plan_facturation_params.plan_fact_id';

    /** the column name for the op_id field */
    const OP_ID = 'plan_facturation_params.op_id';

    /** the column name for the plan_fact_date_prem_fact field */
    const PLAN_FACT_DATE_PREM_FACT = 'plan_facturation_params.plan_fact_date_prem_fact';

    /** the column name for the plan_fact_date_der_fact field */
    const PLAN_FACT_DATE_DER_FACT = 'plan_facturation_params.plan_fact_date_der_fact';

    /** the column name for the plan_fact_periode_id field */
    const PLAN_FACT_PERIODE_ID = 'plan_facturation_params.plan_fact_periode_id';

    /** the column name for the plan_fact_periode_type_id field */
    const PLAN_FACT_PERIODE_TYPE_ID = 'plan_facturation_params.plan_fact_periode_type_id';

    /** the column name for the plan_fact_lib_avoir field */
    const PLAN_FACT_LIB_AVOIR = 'plan_facturation_params.plan_fact_lib_avoir';

    /** the column name for the plan_facturation_params_auto_display_vat field */
    const PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT = 'plan_facturation_params.plan_facturation_params_auto_display_vat';

    /** the column name for the plan_fact_lib_facture field */
    const PLAN_FACT_LIB_FACTURE = 'plan_facturation_params.plan_fact_lib_facture';

    /** the column name for the plan_fact_info field */
    const PLAN_FACT_INFO = 'plan_facturation_params.plan_fact_info';

    /** the column name for the plan_fact_note_interne field */
    const PLAN_FACT_NOTE_INTERNE = 'plan_facturation_params.plan_fact_note_interne';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of PlanFacturationParams objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PlanFacturationParams[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PlanFacturationParamsPeer::$fieldNames[PlanFacturationParamsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('PlanFactId', 'OpId', 'PlanFactDatePremFact', 'PlanFactDateDerFact', 'PlanFactPeriodeId', 'PlanFactPeriodeTypeId', 'PlanFactLibAvoir', 'PlanFacturationParamsAutoDisplayVat', 'PlanFactLibFacture', 'PlanFactInfo', 'PlanFactNoteInterne', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('planFactId', 'opId', 'planFactDatePremFact', 'planFactDateDerFact', 'planFactPeriodeId', 'planFactPeriodeTypeId', 'planFactLibAvoir', 'planFacturationParamsAutoDisplayVat', 'planFactLibFacture', 'planFactInfo', 'planFactNoteInterne', ),
        BasePeer::TYPE_COLNAME => array (PlanFacturationParamsPeer::PLAN_FACT_ID, PlanFacturationParamsPeer::OP_ID, PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT, PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT, PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID, PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID, PlanFacturationParamsPeer::PLAN_FACT_LIB_AVOIR, PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT, PlanFacturationParamsPeer::PLAN_FACT_LIB_FACTURE, PlanFacturationParamsPeer::PLAN_FACT_INFO, PlanFacturationParamsPeer::PLAN_FACT_NOTE_INTERNE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PLAN_FACT_ID', 'OP_ID', 'PLAN_FACT_DATE_PREM_FACT', 'PLAN_FACT_DATE_DER_FACT', 'PLAN_FACT_PERIODE_ID', 'PLAN_FACT_PERIODE_TYPE_ID', 'PLAN_FACT_LIB_AVOIR', 'PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT', 'PLAN_FACT_LIB_FACTURE', 'PLAN_FACT_INFO', 'PLAN_FACT_NOTE_INTERNE', ),
        BasePeer::TYPE_FIELDNAME => array ('plan_fact_id', 'op_id', 'plan_fact_date_prem_fact', 'plan_fact_date_der_fact', 'plan_fact_periode_id', 'plan_fact_periode_type_id', 'plan_fact_lib_avoir', 'plan_facturation_params_auto_display_vat', 'plan_fact_lib_facture', 'plan_fact_info', 'plan_fact_note_interne', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PlanFacturationParamsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('PlanFactId' => 0, 'OpId' => 1, 'PlanFactDatePremFact' => 2, 'PlanFactDateDerFact' => 3, 'PlanFactPeriodeId' => 4, 'PlanFactPeriodeTypeId' => 5, 'PlanFactLibAvoir' => 6, 'PlanFacturationParamsAutoDisplayVat' => 7, 'PlanFactLibFacture' => 8, 'PlanFactInfo' => 9, 'PlanFactNoteInterne' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('planFactId' => 0, 'opId' => 1, 'planFactDatePremFact' => 2, 'planFactDateDerFact' => 3, 'planFactPeriodeId' => 4, 'planFactPeriodeTypeId' => 5, 'planFactLibAvoir' => 6, 'planFacturationParamsAutoDisplayVat' => 7, 'planFactLibFacture' => 8, 'planFactInfo' => 9, 'planFactNoteInterne' => 10, ),
        BasePeer::TYPE_COLNAME => array (PlanFacturationParamsPeer::PLAN_FACT_ID => 0, PlanFacturationParamsPeer::OP_ID => 1, PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT => 2, PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT => 3, PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID => 4, PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID => 5, PlanFacturationParamsPeer::PLAN_FACT_LIB_AVOIR => 6, PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT => 7, PlanFacturationParamsPeer::PLAN_FACT_LIB_FACTURE => 8, PlanFacturationParamsPeer::PLAN_FACT_INFO => 9, PlanFacturationParamsPeer::PLAN_FACT_NOTE_INTERNE => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PLAN_FACT_ID' => 0, 'OP_ID' => 1, 'PLAN_FACT_DATE_PREM_FACT' => 2, 'PLAN_FACT_DATE_DER_FACT' => 3, 'PLAN_FACT_PERIODE_ID' => 4, 'PLAN_FACT_PERIODE_TYPE_ID' => 5, 'PLAN_FACT_LIB_AVOIR' => 6, 'PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT' => 7, 'PLAN_FACT_LIB_FACTURE' => 8, 'PLAN_FACT_INFO' => 9, 'PLAN_FACT_NOTE_INTERNE' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('plan_fact_id' => 0, 'op_id' => 1, 'plan_fact_date_prem_fact' => 2, 'plan_fact_date_der_fact' => 3, 'plan_fact_periode_id' => 4, 'plan_fact_periode_type_id' => 5, 'plan_fact_lib_avoir' => 6, 'plan_facturation_params_auto_display_vat' => 7, 'plan_fact_lib_facture' => 8, 'plan_fact_info' => 9, 'plan_fact_note_interne' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $toNames = PlanFacturationParamsPeer::getFieldNames($toType);
        $key = isset(PlanFacturationParamsPeer::$fieldKeys[$fromType][$name]) ? PlanFacturationParamsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PlanFacturationParamsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PlanFacturationParamsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PlanFacturationParamsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PlanFacturationParamsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PlanFacturationParamsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PlanFacturationParamsPeer::PLAN_FACT_ID);
            $criteria->addSelectColumn(PlanFacturationParamsPeer::OP_ID);
            $criteria->addSelectColumn(PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT);
            $criteria->addSelectColumn(PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT);
            $criteria->addSelectColumn(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID);
            $criteria->addSelectColumn(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID);
            $criteria->addSelectColumn(PlanFacturationParamsPeer::PLAN_FACT_LIB_AVOIR);
            $criteria->addSelectColumn(PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT);
            $criteria->addSelectColumn(PlanFacturationParamsPeer::PLAN_FACT_LIB_FACTURE);
            $criteria->addSelectColumn(PlanFacturationParamsPeer::PLAN_FACT_INFO);
            $criteria->addSelectColumn(PlanFacturationParamsPeer::PLAN_FACT_NOTE_INTERNE);
        } else {
            $criteria->addSelectColumn($alias . '.plan_fact_id');
            $criteria->addSelectColumn($alias . '.op_id');
            $criteria->addSelectColumn($alias . '.plan_fact_date_prem_fact');
            $criteria->addSelectColumn($alias . '.plan_fact_date_der_fact');
            $criteria->addSelectColumn($alias . '.plan_fact_periode_id');
            $criteria->addSelectColumn($alias . '.plan_fact_periode_type_id');
            $criteria->addSelectColumn($alias . '.plan_fact_lib_avoir');
            $criteria->addSelectColumn($alias . '.plan_facturation_params_auto_display_vat');
            $criteria->addSelectColumn($alias . '.plan_fact_lib_facture');
            $criteria->addSelectColumn($alias . '.plan_fact_info');
            $criteria->addSelectColumn($alias . '.plan_fact_note_interne');
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
        $criteria->setPrimaryTableName(PlanFacturationParamsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationParamsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PlanFacturationParamsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return PlanFacturationParams
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PlanFacturationParamsPeer::doSelect($critcopy, $con);
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
        return PlanFacturationParamsPeer::populateObjects(PlanFacturationParamsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PlanFacturationParamsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationParamsPeer::DATABASE_NAME);

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
     * @param PlanFacturationParams $obj A PlanFacturationParams object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPlanFactId();
            } // if key === null
            PlanFacturationParamsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A PlanFacturationParams object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PlanFacturationParams) {
                $key = (string) $value->getPlanFactId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PlanFacturationParams object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PlanFacturationParamsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return PlanFacturationParams Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PlanFacturationParamsPeer::$instances[$key])) {
                return PlanFacturationParamsPeer::$instances[$key];
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
        foreach (PlanFacturationParamsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PlanFacturationParamsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to plan_facturation_params
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
        $cls = PlanFacturationParamsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PlanFacturationParamsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PlanFacturationParamsPeer::addInstanceToPool($obj, $key);
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
     * @return array (PlanFacturationParams object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PlanFacturationParamsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PlanFacturationParamsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PlanFacturationParamsPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(PlanFacturationParamsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationParamsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationParamsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationParamsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

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
     * Selects a collection of PlanFacturationParams objects pre-filled with their Operations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationParams objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationParamsPeer::DATABASE_NAME);
        }

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol = PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;
        OperationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(PlanFacturationParamsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationParamsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PlanFacturationParamsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationParamsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationParams) to $obj2 (Operations)
                $obj2->addPlanFacturationParams($obj1);

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
        $criteria->setPrimaryTableName(PlanFacturationParamsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationParamsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationParamsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationParamsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

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
     * Selects a collection of PlanFacturationParams objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationParams objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationParamsPeer::DATABASE_NAME);
        }

        PlanFacturationParamsPeer::addSelectColumns($criteria);
        $startcol2 = PlanFacturationParamsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PlanFacturationParamsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationParamsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationParamsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PlanFacturationParamsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationParamsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationParams) to the collection in $obj2 (Operations)
                $obj2->addPlanFacturationParams($obj1);
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
        return Propel::getDatabaseMap(PlanFacturationParamsPeer::DATABASE_NAME)->getTable(PlanFacturationParamsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePlanFacturationParamsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePlanFacturationParamsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PlanFacturationParamsTableMap());
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
        return PlanFacturationParamsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PlanFacturationParams or Criteria object.
     *
     * @param      mixed $values Criteria or PlanFacturationParams object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PlanFacturationParams object
        }

        if ($criteria->containsKey(PlanFacturationParamsPeer::PLAN_FACT_ID) && $criteria->keyContainsValue(PlanFacturationParamsPeer::PLAN_FACT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PlanFacturationParamsPeer::PLAN_FACT_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PlanFacturationParamsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a PlanFacturationParams or Criteria object.
     *
     * @param      mixed $values Criteria or PlanFacturationParams object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PlanFacturationParamsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PlanFacturationParamsPeer::PLAN_FACT_ID);
            $value = $criteria->remove(PlanFacturationParamsPeer::PLAN_FACT_ID);
            if ($value) {
                $selectCriteria->add(PlanFacturationParamsPeer::PLAN_FACT_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PlanFacturationParamsPeer::TABLE_NAME);
            }

        } else { // $values is PlanFacturationParams object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PlanFacturationParamsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the plan_facturation_params table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PlanFacturationParamsPeer::TABLE_NAME, $con, PlanFacturationParamsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PlanFacturationParamsPeer::clearInstancePool();
            PlanFacturationParamsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PlanFacturationParams or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PlanFacturationParams object or primary key or array of primary keys
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
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PlanFacturationParamsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PlanFacturationParams) { // it's a model object
            // invalidate the cache for this single object
            PlanFacturationParamsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PlanFacturationParamsPeer::DATABASE_NAME);
            $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PlanFacturationParamsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationParamsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PlanFacturationParamsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PlanFacturationParams object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param PlanFacturationParams $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PlanFacturationParamsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PlanFacturationParamsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT))
            $columns[PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT] = $obj->getPlanFactDatePremFact();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT))
            $columns[PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT] = $obj->getPlanFactDateDerFact();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID))
            $columns[PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID] = $obj->getPlanFactPeriodeId();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID))
            $columns[PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID] = $obj->getPlanFactPeriodeTypeId();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_LIB_AVOIR))
            $columns[PlanFacturationParamsPeer::PLAN_FACT_LIB_AVOIR] = $obj->getPlanFactLibAvoir();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT))
            $columns[PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT] = $obj->getPlanFacturationParamsAutoDisplayVat();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_LIB_FACTURE))
            $columns[PlanFacturationParamsPeer::PLAN_FACT_LIB_FACTURE] = $obj->getPlanFactLibFacture();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_INFO))
            $columns[PlanFacturationParamsPeer::PLAN_FACT_INFO] = $obj->getPlanFactInfo();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationParamsPeer::PLAN_FACT_NOTE_INTERNE))
            $columns[PlanFacturationParamsPeer::PLAN_FACT_NOTE_INTERNE] = $obj->getPlanFactNoteInterne();

        }

        return BasePeer::doValidate(PlanFacturationParamsPeer::DATABASE_NAME, PlanFacturationParamsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return PlanFacturationParams
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PlanFacturationParamsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PlanFacturationParamsPeer::DATABASE_NAME);
        $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_ID, $pk);

        $v = PlanFacturationParamsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return PlanFacturationParams[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PlanFacturationParamsPeer::DATABASE_NAME);
            $criteria->add(PlanFacturationParamsPeer::PLAN_FACT_ID, $pks, Criteria::IN);
            $objs = PlanFacturationParamsPeer::doSelect($criteria, $con);
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
} // BasePlanFacturationParamsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePlanFacturationParamsPeer::buildTableMap();

