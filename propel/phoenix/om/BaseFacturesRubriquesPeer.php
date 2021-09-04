<?php


/**
 * Base static class for performing query and update operations on the 'factures_rubriques' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseFacturesRubriquesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'factures_rubriques';

    /** the related Propel class for this table */
    const OM_CLASS = 'FacturesRubriques';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FacturesRubriquesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the fact_rub_id field */
    const FACT_RUB_ID = 'factures_rubriques.fact_rub_id';

    /** the column name for the fact_id field */
    const FACT_ID = 'factures_rubriques.fact_id';

    /** the column name for the r_rubrique_id field */
    const R_RUBRIQUE_ID = 'factures_rubriques.r_rubrique_id';

    /** the column name for the op_rubrique_id field */
    const OP_RUBRIQUE_ID = 'factures_rubriques.op_rubrique_id';

    /** the column name for the fact_rub_order field */
    const FACT_RUB_ORDER = 'factures_rubriques.fact_rub_order';

    /** the column name for the fact_rub_libelle field */
    const FACT_RUB_LIBELLE = 'factures_rubriques.fact_rub_libelle';

    /** the column name for the fact_rub_montant_ht field */
    const FACT_RUB_MONTANT_HT = 'factures_rubriques.fact_rub_montant_ht';

    /** the column name for the fact_rub_montant_ttc field */
    const FACT_RUB_MONTANT_TTC = 'factures_rubriques.fact_rub_montant_ttc';

    /** the column name for the r_tva_type_id field */
    const R_TVA_TYPE_ID = 'factures_rubriques.r_tva_type_id';

    /** the column name for the r_rub_type_id field */
    const R_RUB_TYPE_ID = 'factures_rubriques.r_rub_type_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of FacturesRubriques objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array FacturesRubriques[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FacturesRubriquesPeer::$fieldNames[FacturesRubriquesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('FactRubId', 'FactId', 'RRubriqueId', 'OpRubriqueId', 'FactRubOrder', 'FactRubLibelle', 'FactRubMontantHt', 'FactRubMontantTTC', 'RTvaTypeId', 'RRubTypeId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('factRubId', 'factId', 'rRubriqueId', 'opRubriqueId', 'factRubOrder', 'factRubLibelle', 'factRubMontantHt', 'factRubMontantTTC', 'rTvaTypeId', 'rRubTypeId', ),
        BasePeer::TYPE_COLNAME => array (FacturesRubriquesPeer::FACT_RUB_ID, FacturesRubriquesPeer::FACT_ID, FacturesRubriquesPeer::R_RUBRIQUE_ID, FacturesRubriquesPeer::OP_RUBRIQUE_ID, FacturesRubriquesPeer::FACT_RUB_ORDER, FacturesRubriquesPeer::FACT_RUB_LIBELLE, FacturesRubriquesPeer::FACT_RUB_MONTANT_HT, FacturesRubriquesPeer::FACT_RUB_MONTANT_TTC, FacturesRubriquesPeer::R_TVA_TYPE_ID, FacturesRubriquesPeer::R_RUB_TYPE_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FACT_RUB_ID', 'FACT_ID', 'R_RUBRIQUE_ID', 'OP_RUBRIQUE_ID', 'FACT_RUB_ORDER', 'FACT_RUB_LIBELLE', 'FACT_RUB_MONTANT_HT', 'FACT_RUB_MONTANT_TTC', 'R_TVA_TYPE_ID', 'R_RUB_TYPE_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('fact_rub_id', 'fact_id', 'r_rubrique_id', 'op_rubrique_id', 'fact_rub_order', 'fact_rub_libelle', 'fact_rub_montant_ht', 'fact_rub_montant_ttc', 'r_tva_type_id', 'r_rub_type_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FacturesRubriquesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('FactRubId' => 0, 'FactId' => 1, 'RRubriqueId' => 2, 'OpRubriqueId' => 3, 'FactRubOrder' => 4, 'FactRubLibelle' => 5, 'FactRubMontantHt' => 6, 'FactRubMontantTTC' => 7, 'RTvaTypeId' => 8, 'RRubTypeId' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('factRubId' => 0, 'factId' => 1, 'rRubriqueId' => 2, 'opRubriqueId' => 3, 'factRubOrder' => 4, 'factRubLibelle' => 5, 'factRubMontantHt' => 6, 'factRubMontantTTC' => 7, 'rTvaTypeId' => 8, 'rRubTypeId' => 9, ),
        BasePeer::TYPE_COLNAME => array (FacturesRubriquesPeer::FACT_RUB_ID => 0, FacturesRubriquesPeer::FACT_ID => 1, FacturesRubriquesPeer::R_RUBRIQUE_ID => 2, FacturesRubriquesPeer::OP_RUBRIQUE_ID => 3, FacturesRubriquesPeer::FACT_RUB_ORDER => 4, FacturesRubriquesPeer::FACT_RUB_LIBELLE => 5, FacturesRubriquesPeer::FACT_RUB_MONTANT_HT => 6, FacturesRubriquesPeer::FACT_RUB_MONTANT_TTC => 7, FacturesRubriquesPeer::R_TVA_TYPE_ID => 8, FacturesRubriquesPeer::R_RUB_TYPE_ID => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FACT_RUB_ID' => 0, 'FACT_ID' => 1, 'R_RUBRIQUE_ID' => 2, 'OP_RUBRIQUE_ID' => 3, 'FACT_RUB_ORDER' => 4, 'FACT_RUB_LIBELLE' => 5, 'FACT_RUB_MONTANT_HT' => 6, 'FACT_RUB_MONTANT_TTC' => 7, 'R_TVA_TYPE_ID' => 8, 'R_RUB_TYPE_ID' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('fact_rub_id' => 0, 'fact_id' => 1, 'r_rubrique_id' => 2, 'op_rubrique_id' => 3, 'fact_rub_order' => 4, 'fact_rub_libelle' => 5, 'fact_rub_montant_ht' => 6, 'fact_rub_montant_ttc' => 7, 'r_tva_type_id' => 8, 'r_rub_type_id' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = FacturesRubriquesPeer::getFieldNames($toType);
        $key = isset(FacturesRubriquesPeer::$fieldKeys[$fromType][$name]) ? FacturesRubriquesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FacturesRubriquesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FacturesRubriquesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FacturesRubriquesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FacturesRubriquesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FacturesRubriquesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FacturesRubriquesPeer::FACT_RUB_ID);
            $criteria->addSelectColumn(FacturesRubriquesPeer::FACT_ID);
            $criteria->addSelectColumn(FacturesRubriquesPeer::R_RUBRIQUE_ID);
            $criteria->addSelectColumn(FacturesRubriquesPeer::OP_RUBRIQUE_ID);
            $criteria->addSelectColumn(FacturesRubriquesPeer::FACT_RUB_ORDER);
            $criteria->addSelectColumn(FacturesRubriquesPeer::FACT_RUB_LIBELLE);
            $criteria->addSelectColumn(FacturesRubriquesPeer::FACT_RUB_MONTANT_HT);
            $criteria->addSelectColumn(FacturesRubriquesPeer::FACT_RUB_MONTANT_TTC);
            $criteria->addSelectColumn(FacturesRubriquesPeer::R_TVA_TYPE_ID);
            $criteria->addSelectColumn(FacturesRubriquesPeer::R_RUB_TYPE_ID);
        } else {
            $criteria->addSelectColumn($alias . '.fact_rub_id');
            $criteria->addSelectColumn($alias . '.fact_id');
            $criteria->addSelectColumn($alias . '.r_rubrique_id');
            $criteria->addSelectColumn($alias . '.op_rubrique_id');
            $criteria->addSelectColumn($alias . '.fact_rub_order');
            $criteria->addSelectColumn($alias . '.fact_rub_libelle');
            $criteria->addSelectColumn($alias . '.fact_rub_montant_ht');
            $criteria->addSelectColumn($alias . '.fact_rub_montant_ttc');
            $criteria->addSelectColumn($alias . '.r_tva_type_id');
            $criteria->addSelectColumn($alias . '.r_rub_type_id');
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
        $criteria->setPrimaryTableName(FacturesRubriquesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesRubriquesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return FacturesRubriques
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FacturesRubriquesPeer::doSelect($critcopy, $con);
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
        return FacturesRubriquesPeer::populateObjects(FacturesRubriquesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FacturesRubriquesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);

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
     * @param FacturesRubriques $obj A FacturesRubriques object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getFactRubId();
            } // if key === null
            FacturesRubriquesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A FacturesRubriques object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof FacturesRubriques) {
                $key = (string) $value->getFactRubId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or FacturesRubriques object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FacturesRubriquesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return FacturesRubriques Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FacturesRubriquesPeer::$instances[$key])) {
                return FacturesRubriquesPeer::$instances[$key];
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
        foreach (FacturesRubriquesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FacturesRubriquesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to factures_rubriques
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
        $cls = FacturesRubriquesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FacturesRubriquesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FacturesRubriquesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FacturesRubriquesPeer::addInstanceToPool($obj, $key);
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
     * @return array (FacturesRubriques object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FacturesRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FacturesRubriquesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FacturesRubriquesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FacturesRubriquesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FacturesRubriquesPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(FacturesRubriquesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesRubriquesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesRubriquesPeer::FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RTvaType table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRTvaType(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesRubriquesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesRubriquesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesRubriquesPeer::R_TVA_TYPE_ID, RTvaTypePeer::R_TVA_ID, $join_behavior);

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
     * Selects a collection of FacturesRubriques objects pre-filled with their Factures objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FacturesRubriques objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinFactures(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);
        }

        FacturesRubriquesPeer::addSelectColumns($criteria);
        $startcol = FacturesRubriquesPeer::NUM_HYDRATE_COLUMNS;
        FacturesPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesRubriquesPeer::FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesRubriquesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesRubriquesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesRubriquesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesRubriquesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (FacturesRubriques) to $obj2 (Factures)
                $obj2->addFacturesRubriques($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of FacturesRubriques objects pre-filled with their RTvaType objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FacturesRubriques objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRTvaType(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);
        }

        FacturesRubriquesPeer::addSelectColumns($criteria);
        $startcol = FacturesRubriquesPeer::NUM_HYDRATE_COLUMNS;
        RTvaTypePeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesRubriquesPeer::R_TVA_TYPE_ID, RTvaTypePeer::R_TVA_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesRubriquesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesRubriquesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesRubriquesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesRubriquesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RTvaTypePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RTvaTypePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RTvaTypePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RTvaTypePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (FacturesRubriques) to $obj2 (RTvaType)
                $obj2->addFacturesRubriques($obj1);

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
        $criteria->setPrimaryTableName(FacturesRubriquesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesRubriquesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesRubriquesPeer::FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(FacturesRubriquesPeer::R_TVA_TYPE_ID, RTvaTypePeer::R_TVA_ID, $join_behavior);

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
     * Selects a collection of FacturesRubriques objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FacturesRubriques objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);
        }

        FacturesRubriquesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesRubriquesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        RTvaTypePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RTvaTypePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesRubriquesPeer::FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(FacturesRubriquesPeer::R_TVA_TYPE_ID, RTvaTypePeer::R_TVA_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesRubriquesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesRubriquesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesRubriquesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesRubriquesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (FacturesRubriques) to the collection in $obj2 (Factures)
                $obj2->addFacturesRubriques($obj1);
            } // if joined row not null

            // Add objects for joined RTvaType rows

            $key3 = RTvaTypePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = RTvaTypePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = RTvaTypePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RTvaTypePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (FacturesRubriques) to the collection in $obj3 (RTvaType)
                $obj3->addFacturesRubriques($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
    public static function doCountJoinAllExceptFactures(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesRubriquesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesRubriquesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesRubriquesPeer::R_TVA_TYPE_ID, RTvaTypePeer::R_TVA_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RTvaType table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRTvaType(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesRubriquesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesRubriquesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesRubriquesPeer::FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

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
     * Selects a collection of FacturesRubriques objects pre-filled with all related objects except Factures.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FacturesRubriques objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptFactures(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);
        }

        FacturesRubriquesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesRubriquesPeer::NUM_HYDRATE_COLUMNS;

        RTvaTypePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RTvaTypePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesRubriquesPeer::R_TVA_TYPE_ID, RTvaTypePeer::R_TVA_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesRubriquesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesRubriquesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesRubriquesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesRubriquesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RTvaType rows

                $key2 = RTvaTypePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RTvaTypePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RTvaTypePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RTvaTypePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (FacturesRubriques) to the collection in $obj2 (RTvaType)
                $obj2->addFacturesRubriques($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of FacturesRubriques objects pre-filled with all related objects except RTvaType.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FacturesRubriques objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRTvaType(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);
        }

        FacturesRubriquesPeer::addSelectColumns($criteria);
        $startcol2 = FacturesRubriquesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesRubriquesPeer::FACT_ID, FacturesPeer::FACT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesRubriquesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesRubriquesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesRubriquesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesRubriquesPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (FacturesRubriques) to the collection in $obj2 (Factures)
                $obj2->addFacturesRubriques($obj1);

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
        return Propel::getDatabaseMap(FacturesRubriquesPeer::DATABASE_NAME)->getTable(FacturesRubriquesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFacturesRubriquesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFacturesRubriquesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FacturesRubriquesTableMap());
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
        return FacturesRubriquesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a FacturesRubriques or Criteria object.
     *
     * @param      mixed $values Criteria or FacturesRubriques object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from FacturesRubriques object
        }

        if ($criteria->containsKey(FacturesRubriquesPeer::FACT_RUB_ID) && $criteria->keyContainsValue(FacturesRubriquesPeer::FACT_RUB_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FacturesRubriquesPeer::FACT_RUB_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a FacturesRubriques or Criteria object.
     *
     * @param      mixed $values Criteria or FacturesRubriques object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FacturesRubriquesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FacturesRubriquesPeer::FACT_RUB_ID);
            $value = $criteria->remove(FacturesRubriquesPeer::FACT_RUB_ID);
            if ($value) {
                $selectCriteria->add(FacturesRubriquesPeer::FACT_RUB_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FacturesRubriquesPeer::TABLE_NAME);
            }

        } else { // $values is FacturesRubriques object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the factures_rubriques table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FacturesRubriquesPeer::TABLE_NAME, $con, FacturesRubriquesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FacturesRubriquesPeer::clearInstancePool();
            FacturesRubriquesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a FacturesRubriques or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or FacturesRubriques object or primary key or array of primary keys
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
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FacturesRubriquesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof FacturesRubriques) { // it's a model object
            // invalidate the cache for this single object
            FacturesRubriquesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FacturesRubriquesPeer::DATABASE_NAME);
            $criteria->add(FacturesRubriquesPeer::FACT_RUB_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FacturesRubriquesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FacturesRubriquesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FacturesRubriquesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given FacturesRubriques object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param FacturesRubriques $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FacturesRubriquesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FacturesRubriquesPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(FacturesRubriquesPeer::FACT_ID))
            $columns[FacturesRubriquesPeer::FACT_ID] = $obj->getFactId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesRubriquesPeer::OP_RUBRIQUE_ID))
            $columns[FacturesRubriquesPeer::OP_RUBRIQUE_ID] = $obj->getOpRubriqueId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesRubriquesPeer::FACT_RUB_ORDER))
            $columns[FacturesRubriquesPeer::FACT_RUB_ORDER] = $obj->getFactRubOrder();

        if ($obj->isNew() || $obj->isColumnModified(FacturesRubriquesPeer::FACT_RUB_LIBELLE))
            $columns[FacturesRubriquesPeer::FACT_RUB_LIBELLE] = $obj->getFactRubLibelle();

        if ($obj->isNew() || $obj->isColumnModified(FacturesRubriquesPeer::FACT_RUB_MONTANT_HT))
            $columns[FacturesRubriquesPeer::FACT_RUB_MONTANT_HT] = $obj->getFactRubMontantHt();

        if ($obj->isNew() || $obj->isColumnModified(FacturesRubriquesPeer::R_TVA_TYPE_ID))
            $columns[FacturesRubriquesPeer::R_TVA_TYPE_ID] = $obj->getRTvaTypeId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesRubriquesPeer::R_RUB_TYPE_ID))
            $columns[FacturesRubriquesPeer::R_RUB_TYPE_ID] = $obj->getRRubTypeId();

        }

        return BasePeer::doValidate(FacturesRubriquesPeer::DATABASE_NAME, FacturesRubriquesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return FacturesRubriques
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FacturesRubriquesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FacturesRubriquesPeer::DATABASE_NAME);
        $criteria->add(FacturesRubriquesPeer::FACT_RUB_ID, $pk);

        $v = FacturesRubriquesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return FacturesRubriques[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FacturesRubriquesPeer::DATABASE_NAME);
            $criteria->add(FacturesRubriquesPeer::FACT_RUB_ID, $pks, Criteria::IN);
            $objs = FacturesRubriquesPeer::doSelect($criteria, $con);
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
} // BaseFacturesRubriquesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFacturesRubriquesPeer::buildTableMap();

