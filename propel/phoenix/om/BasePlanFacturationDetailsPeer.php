<?php


/**
 * Base static class for performing query and update operations on the 'plan_facturation_details' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BasePlanFacturationDetailsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'plan_facturation_details';

    /** the related Propel class for this table */
    const OM_CLASS = 'PlanFacturationDetails';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PlanFacturationDetailsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the pfd_id field */
    const PFD_ID = 'plan_facturation_details.pfd_id';

    /** the column name for the op_id field */
    const OP_ID = 'plan_facturation_details.op_id';

    /** the column name for the pfd_type_fact_id field */
    const PFD_TYPE_FACT_ID = 'plan_facturation_details.pfd_type_fact_id';

    /** the column name for the pfd_date_planif field */
    const PFD_DATE_PLANIF = 'plan_facturation_details.pfd_date_planif';

    /** the column name for the pfd_taux_adf field */
    const PFD_TAUX_ADF = 'plan_facturation_details.pfd_taux_adf';

    /** the column name for the pfd_taux_partiel field */
    const PFD_TAUX_PARTIEL = 'plan_facturation_details.pfd_taux_partiel';

    /** the column name for the pfd_id_to_cancel field */
    const PFD_ID_TO_CANCEL = 'plan_facturation_details.pfd_id_to_cancel';

    /** the column name for the pfd_fact_annul field */
    const PFD_FACT_ANNUL = 'plan_facturation_details.pfd_fact_annul';

    /** the column name for the pfd_fact_annul_motif_id field */
    const PFD_FACT_ANNUL_MOTIF_ID = 'plan_facturation_details.pfd_fact_annul_motif_id';

    /** the column name for the pfd_fact_annul_autre_motif field */
    const PFD_FACT_ANNUL_AUTRE_MOTIF = 'plan_facturation_details.pfd_fact_annul_autre_motif';

    /** the column name for the pfd_fact_id field */
    const PFD_FACT_ID = 'plan_facturation_details.pfd_fact_id';

    /** the column name for the date_create field */
    const DATE_CREATE = 'plan_facturation_details.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'plan_facturation_details.date_modify';

    /** the column name for the user_id field */
    const USER_ID = 'plan_facturation_details.user_id';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'plan_facturation_details.user_modify';

    /** the column name for the pfd_num_cmd field */
    const PFD_NUM_CMD = 'plan_facturation_details.pfd_num_cmd';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of PlanFacturationDetails objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PlanFacturationDetails[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PlanFacturationDetailsPeer::$fieldNames[PlanFacturationDetailsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('PfdId', 'OpId', 'PfdTypeFactId', 'PfdDatePlanif', 'PfdTauxAdf', 'PfdTauxPartiel', 'PfdIdToCancel', 'PfdFactAnnul', 'PfdFactAnnulMotifId', 'PfdFactAnnulAutreMotif', 'PfdFactId', 'DateCreate', 'DateModify', 'UserId', 'UserModify', 'PfdNumCmd', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('pfdId', 'opId', 'pfdTypeFactId', 'pfdDatePlanif', 'pfdTauxAdf', 'pfdTauxPartiel', 'pfdIdToCancel', 'pfdFactAnnul', 'pfdFactAnnulMotifId', 'pfdFactAnnulAutreMotif', 'pfdFactId', 'dateCreate', 'dateModify', 'userId', 'userModify', 'pfdNumCmd', ),
        BasePeer::TYPE_COLNAME => array (PlanFacturationDetailsPeer::PFD_ID, PlanFacturationDetailsPeer::OP_ID, PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, PlanFacturationDetailsPeer::PFD_DATE_PLANIF, PlanFacturationDetailsPeer::PFD_TAUX_ADF, PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL, PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL, PlanFacturationDetailsPeer::PFD_FACT_ANNUL, PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, PlanFacturationDetailsPeer::PFD_FACT_ANNUL_AUTRE_MOTIF, PlanFacturationDetailsPeer::PFD_FACT_ID, PlanFacturationDetailsPeer::DATE_CREATE, PlanFacturationDetailsPeer::DATE_MODIFY, PlanFacturationDetailsPeer::USER_ID, PlanFacturationDetailsPeer::USER_MODIFY, PlanFacturationDetailsPeer::PFD_NUM_CMD, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PFD_ID', 'OP_ID', 'PFD_TYPE_FACT_ID', 'PFD_DATE_PLANIF', 'PFD_TAUX_ADF', 'PFD_TAUX_PARTIEL', 'PFD_ID_TO_CANCEL', 'PFD_FACT_ANNUL', 'PFD_FACT_ANNUL_MOTIF_ID', 'PFD_FACT_ANNUL_AUTRE_MOTIF', 'PFD_FACT_ID', 'DATE_CREATE', 'DATE_MODIFY', 'USER_ID', 'USER_MODIFY', 'PFD_NUM_CMD', ),
        BasePeer::TYPE_FIELDNAME => array ('pfd_id', 'op_id', 'pfd_type_fact_id', 'pfd_date_planif', 'pfd_taux_adf', 'pfd_taux_partiel', 'pfd_id_to_cancel', 'pfd_fact_annul', 'pfd_fact_annul_motif_id', 'pfd_fact_annul_autre_motif', 'pfd_fact_id', 'date_create', 'date_modify', 'user_id', 'user_modify', 'pfd_num_cmd', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PlanFacturationDetailsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('PfdId' => 0, 'OpId' => 1, 'PfdTypeFactId' => 2, 'PfdDatePlanif' => 3, 'PfdTauxAdf' => 4, 'PfdTauxPartiel' => 5, 'PfdIdToCancel' => 6, 'PfdFactAnnul' => 7, 'PfdFactAnnulMotifId' => 8, 'PfdFactAnnulAutreMotif' => 9, 'PfdFactId' => 10, 'DateCreate' => 11, 'DateModify' => 12, 'UserId' => 13, 'UserModify' => 14, 'PfdNumCmd' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('pfdId' => 0, 'opId' => 1, 'pfdTypeFactId' => 2, 'pfdDatePlanif' => 3, 'pfdTauxAdf' => 4, 'pfdTauxPartiel' => 5, 'pfdIdToCancel' => 6, 'pfdFactAnnul' => 7, 'pfdFactAnnulMotifId' => 8, 'pfdFactAnnulAutreMotif' => 9, 'pfdFactId' => 10, 'dateCreate' => 11, 'dateModify' => 12, 'userId' => 13, 'userModify' => 14, 'pfdNumCmd' => 15, ),
        BasePeer::TYPE_COLNAME => array (PlanFacturationDetailsPeer::PFD_ID => 0, PlanFacturationDetailsPeer::OP_ID => 1, PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID => 2, PlanFacturationDetailsPeer::PFD_DATE_PLANIF => 3, PlanFacturationDetailsPeer::PFD_TAUX_ADF => 4, PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL => 5, PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL => 6, PlanFacturationDetailsPeer::PFD_FACT_ANNUL => 7, PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID => 8, PlanFacturationDetailsPeer::PFD_FACT_ANNUL_AUTRE_MOTIF => 9, PlanFacturationDetailsPeer::PFD_FACT_ID => 10, PlanFacturationDetailsPeer::DATE_CREATE => 11, PlanFacturationDetailsPeer::DATE_MODIFY => 12, PlanFacturationDetailsPeer::USER_ID => 13, PlanFacturationDetailsPeer::USER_MODIFY => 14, PlanFacturationDetailsPeer::PFD_NUM_CMD => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PFD_ID' => 0, 'OP_ID' => 1, 'PFD_TYPE_FACT_ID' => 2, 'PFD_DATE_PLANIF' => 3, 'PFD_TAUX_ADF' => 4, 'PFD_TAUX_PARTIEL' => 5, 'PFD_ID_TO_CANCEL' => 6, 'PFD_FACT_ANNUL' => 7, 'PFD_FACT_ANNUL_MOTIF_ID' => 8, 'PFD_FACT_ANNUL_AUTRE_MOTIF' => 9, 'PFD_FACT_ID' => 10, 'DATE_CREATE' => 11, 'DATE_MODIFY' => 12, 'USER_ID' => 13, 'USER_MODIFY' => 14, 'PFD_NUM_CMD' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('pfd_id' => 0, 'op_id' => 1, 'pfd_type_fact_id' => 2, 'pfd_date_planif' => 3, 'pfd_taux_adf' => 4, 'pfd_taux_partiel' => 5, 'pfd_id_to_cancel' => 6, 'pfd_fact_annul' => 7, 'pfd_fact_annul_motif_id' => 8, 'pfd_fact_annul_autre_motif' => 9, 'pfd_fact_id' => 10, 'date_create' => 11, 'date_modify' => 12, 'user_id' => 13, 'user_modify' => 14, 'pfd_num_cmd' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $toNames = PlanFacturationDetailsPeer::getFieldNames($toType);
        $key = isset(PlanFacturationDetailsPeer::$fieldKeys[$fromType][$name]) ? PlanFacturationDetailsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PlanFacturationDetailsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PlanFacturationDetailsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PlanFacturationDetailsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PlanFacturationDetailsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PlanFacturationDetailsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_ID);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::OP_ID);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_DATE_PLANIF);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_TAUX_ADF);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_FACT_ANNUL);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_AUTRE_MOTIF);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_FACT_ID);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::DATE_CREATE);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::DATE_MODIFY);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::USER_ID);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::USER_MODIFY);
            $criteria->addSelectColumn(PlanFacturationDetailsPeer::PFD_NUM_CMD);
        } else {
            $criteria->addSelectColumn($alias . '.pfd_id');
            $criteria->addSelectColumn($alias . '.op_id');
            $criteria->addSelectColumn($alias . '.pfd_type_fact_id');
            $criteria->addSelectColumn($alias . '.pfd_date_planif');
            $criteria->addSelectColumn($alias . '.pfd_taux_adf');
            $criteria->addSelectColumn($alias . '.pfd_taux_partiel');
            $criteria->addSelectColumn($alias . '.pfd_id_to_cancel');
            $criteria->addSelectColumn($alias . '.pfd_fact_annul');
            $criteria->addSelectColumn($alias . '.pfd_fact_annul_motif_id');
            $criteria->addSelectColumn($alias . '.pfd_fact_annul_autre_motif');
            $criteria->addSelectColumn($alias . '.pfd_fact_id');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.user_modify');
            $criteria->addSelectColumn($alias . '.pfd_num_cmd');
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
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return PlanFacturationDetails
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PlanFacturationDetailsPeer::doSelect($critcopy, $con);
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
        return PlanFacturationDetailsPeer::populateObjects(PlanFacturationDetailsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

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
     * @param PlanFacturationDetails $obj A PlanFacturationDetails object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPfdId();
            } // if key === null
            PlanFacturationDetailsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A PlanFacturationDetails object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PlanFacturationDetails) {
                $key = (string) $value->getPfdId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PlanFacturationDetails object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PlanFacturationDetailsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return PlanFacturationDetails Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PlanFacturationDetailsPeer::$instances[$key])) {
                return PlanFacturationDetailsPeer::$instances[$key];
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
        foreach (PlanFacturationDetailsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PlanFacturationDetailsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to plan_facturation_details
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
        $cls = PlanFacturationDetailsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PlanFacturationDetailsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PlanFacturationDetailsPeer::addInstanceToPool($obj, $key);
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
     * @return array (PlanFacturationDetails object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PlanFacturationDetailsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PlanFacturationDetailsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PlanFacturationDetailsPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RFactureTypes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRFactureTypes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related FactureToCancel table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinFactureToCancel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related FactureGenerated table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinFactureGenerated(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related InvoiceCancellationMotive table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinInvoiceCancellationMotive(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);

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
     * Selects a collection of PlanFacturationDetails objects pre-filled with their Operations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;
        OperationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationDetails) to $obj2 (Operations)
                $obj2->addPlanFacturationDetails($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PlanFacturationDetails objects pre-filled with their RFactureTypes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRFactureTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;
        RFactureTypesPeer::addSelectColumns($criteria);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RFactureTypesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RFactureTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RFactureTypesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (PlanFacturationDetails) to $obj2 (RFactureTypes)
                $obj2->addPlanFacturationDetails($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PlanFacturationDetails objects pre-filled with their Factures objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinFactureToCancel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;
        FacturesPeer::addSelectColumns($criteria);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationDetails) to $obj2 (Factures)
                $obj2->addPlanFacturationDetailsRelatedByPfdFactAnnul($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PlanFacturationDetails objects pre-filled with their Factures objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinFactureGenerated(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;
        FacturesPeer::addSelectColumns($criteria);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationDetails) to $obj2 (Factures)
                $obj2->addPlanFacturationDetailsRelatedByPfdFactId($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PlanFacturationDetails objects pre-filled with their RFactureAnnulationMotifs objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinInvoiceCancellationMotive(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;
        RFactureAnnulationMotifsPeer::addSelectColumns($criteria);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RFactureAnnulationMotifsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RFactureAnnulationMotifsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RFactureAnnulationMotifsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RFactureAnnulationMotifsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (PlanFacturationDetails) to $obj2 (RFactureAnnulationMotifs)
                $obj2->addPlanFacturationDetails($obj1);

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
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);

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
     * Selects a collection of PlanFacturationDetails objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol2 = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        RFactureAnnulationMotifsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RFactureAnnulationMotifsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj2 (Operations)
                $obj2->addPlanFacturationDetails($obj1);
            } // if joined row not null

            // Add objects for joined RFactureTypes rows

            $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj3 (RFactureTypes)
                $obj3->addPlanFacturationDetails($obj1);
            } // if joined row not null

            // Add objects for joined Factures rows

            $key4 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = FacturesPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = FacturesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    FacturesPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj4 (Factures)
                $obj4->addPlanFacturationDetailsRelatedByPfdFactAnnul($obj1);
            } // if joined row not null

            // Add objects for joined Factures rows

            $key5 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = FacturesPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = FacturesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    FacturesPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj5 (Factures)
                $obj5->addPlanFacturationDetailsRelatedByPfdFactId($obj1);
            } // if joined row not null

            // Add objects for joined RFactureAnnulationMotifs rows

            $key6 = RFactureAnnulationMotifsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = RFactureAnnulationMotifsPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = RFactureAnnulationMotifsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RFactureAnnulationMotifsPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj6 (RFactureAnnulationMotifs)
                $obj6->addPlanFacturationDetails($obj1);
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
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RFactureTypes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRFactureTypes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related FactureToCancel table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptFactureToCancel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related PlanFacturationDetailToCancel table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPlanFacturationDetailToCancel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related FactureGenerated table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptFactureGenerated(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related InvoiceCancellationMotive table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptInvoiceCancellationMotive(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PlanFacturationDetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

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
     * Selects a collection of PlanFacturationDetails objects pre-filled with all related objects except Operations.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
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
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol2 = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        RFactureAnnulationMotifsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RFactureAnnulationMotifsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RFactureTypes rows

                $key2 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RFactureTypesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RFactureTypesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj2 (RFactureTypes)
                $obj2->addPlanFacturationDetails($obj1);

            } // if joined row is not null

                // Add objects for joined Factures rows

                $key3 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = FacturesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = FacturesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    FacturesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj3 (Factures)
                $obj3->addPlanFacturationDetailsRelatedByPfdFactAnnul($obj1);

            } // if joined row is not null

                // Add objects for joined Factures rows

                $key4 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = FacturesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = FacturesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    FacturesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj4 (Factures)
                $obj4->addPlanFacturationDetailsRelatedByPfdFactId($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureAnnulationMotifs rows

                $key5 = RFactureAnnulationMotifsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RFactureAnnulationMotifsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RFactureAnnulationMotifsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RFactureAnnulationMotifsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj5 (RFactureAnnulationMotifs)
                $obj5->addPlanFacturationDetails($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PlanFacturationDetails objects pre-filled with all related objects except RFactureTypes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRFactureTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol2 = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        RFactureAnnulationMotifsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + RFactureAnnulationMotifsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj2 (Operations)
                $obj2->addPlanFacturationDetails($obj1);

            } // if joined row is not null

                // Add objects for joined Factures rows

                $key3 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = FacturesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = FacturesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    FacturesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj3 (Factures)
                $obj3->addPlanFacturationDetailsRelatedByPfdFactAnnul($obj1);

            } // if joined row is not null

                // Add objects for joined Factures rows

                $key4 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = FacturesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = FacturesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    FacturesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj4 (Factures)
                $obj4->addPlanFacturationDetailsRelatedByPfdFactId($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureAnnulationMotifs rows

                $key5 = RFactureAnnulationMotifsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = RFactureAnnulationMotifsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = RFactureAnnulationMotifsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    RFactureAnnulationMotifsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj5 (RFactureAnnulationMotifs)
                $obj5->addPlanFacturationDetails($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PlanFacturationDetails objects pre-filled with all related objects except FactureToCancel.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptFactureToCancel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol2 = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        RFactureAnnulationMotifsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RFactureAnnulationMotifsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj2 (Operations)
                $obj2->addPlanFacturationDetails($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj3 (RFactureTypes)
                $obj3->addPlanFacturationDetails($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureAnnulationMotifs rows

                $key4 = RFactureAnnulationMotifsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RFactureAnnulationMotifsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RFactureAnnulationMotifsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RFactureAnnulationMotifsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj4 (RFactureAnnulationMotifs)
                $obj4->addPlanFacturationDetails($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PlanFacturationDetails objects pre-filled with all related objects except PlanFacturationDetailToCancel.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPlanFacturationDetailToCancel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol2 = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        RFactureAnnulationMotifsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + RFactureAnnulationMotifsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj2 (Operations)
                $obj2->addPlanFacturationDetails($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj3 (RFactureTypes)
                $obj3->addPlanFacturationDetails($obj1);

            } // if joined row is not null

                // Add objects for joined Factures rows

                $key4 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = FacturesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = FacturesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    FacturesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj4 (Factures)
                $obj4->addPlanFacturationDetailsRelatedByPfdFactAnnul($obj1);

            } // if joined row is not null

                // Add objects for joined Factures rows

                $key5 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = FacturesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = FacturesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    FacturesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj5 (Factures)
                $obj5->addPlanFacturationDetailsRelatedByPfdFactId($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureAnnulationMotifs rows

                $key6 = RFactureAnnulationMotifsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = RFactureAnnulationMotifsPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = RFactureAnnulationMotifsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    RFactureAnnulationMotifsPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj6 (RFactureAnnulationMotifs)
                $obj6->addPlanFacturationDetails($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PlanFacturationDetails objects pre-filled with all related objects except FactureGenerated.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptFactureGenerated(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol2 = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        RFactureAnnulationMotifsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RFactureAnnulationMotifsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj2 (Operations)
                $obj2->addPlanFacturationDetails($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj3 (RFactureTypes)
                $obj3->addPlanFacturationDetails($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureAnnulationMotifs rows

                $key4 = RFactureAnnulationMotifsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RFactureAnnulationMotifsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RFactureAnnulationMotifsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RFactureAnnulationMotifsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj4 (RFactureAnnulationMotifs)
                $obj4->addPlanFacturationDetails($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PlanFacturationDetails objects pre-filled with all related objects except InvoiceCancellationMotive.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PlanFacturationDetails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptInvoiceCancellationMotive(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);
        }

        PlanFacturationDetailsPeer::addSelectColumns($criteria);
        $startcol2 = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        RFactureTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RFactureTypesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        FacturesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + FacturesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PlanFacturationDetailsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, RFactureTypesPeer::R_FACT_TYPE_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, FacturesPeer::FACT_ID, $join_behavior);

        $criteria->addJoin(PlanFacturationDetailsPeer::PFD_FACT_ID, FacturesPeer::FACT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PlanFacturationDetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PlanFacturationDetailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PlanFacturationDetailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PlanFacturationDetailsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj2 (Operations)
                $obj2->addPlanFacturationDetails($obj1);

            } // if joined row is not null

                // Add objects for joined RFactureTypes rows

                $key3 = RFactureTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RFactureTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RFactureTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RFactureTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj3 (RFactureTypes)
                $obj3->addPlanFacturationDetails($obj1);

            } // if joined row is not null

                // Add objects for joined Factures rows

                $key4 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = FacturesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = FacturesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    FacturesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj4 (Factures)
                $obj4->addPlanFacturationDetailsRelatedByPfdFactAnnul($obj1);

            } // if joined row is not null

                // Add objects for joined Factures rows

                $key5 = FacturesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = FacturesPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = FacturesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    FacturesPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (PlanFacturationDetails) to the collection in $obj5 (Factures)
                $obj5->addPlanFacturationDetailsRelatedByPfdFactId($obj1);

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
        return Propel::getDatabaseMap(PlanFacturationDetailsPeer::DATABASE_NAME)->getTable(PlanFacturationDetailsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePlanFacturationDetailsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePlanFacturationDetailsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PlanFacturationDetailsTableMap());
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
        return PlanFacturationDetailsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PlanFacturationDetails or Criteria object.
     *
     * @param      mixed $values Criteria or PlanFacturationDetails object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PlanFacturationDetails object
        }

        if ($criteria->containsKey(PlanFacturationDetailsPeer::PFD_ID) && $criteria->keyContainsValue(PlanFacturationDetailsPeer::PFD_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PlanFacturationDetailsPeer::PFD_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a PlanFacturationDetails or Criteria object.
     *
     * @param      mixed $values Criteria or PlanFacturationDetails object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PlanFacturationDetailsPeer::PFD_ID);
            $value = $criteria->remove(PlanFacturationDetailsPeer::PFD_ID);
            if ($value) {
                $selectCriteria->add(PlanFacturationDetailsPeer::PFD_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PlanFacturationDetailsPeer::TABLE_NAME);
            }

        } else { // $values is PlanFacturationDetails object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the plan_facturation_details table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PlanFacturationDetailsPeer::TABLE_NAME, $con, PlanFacturationDetailsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PlanFacturationDetailsPeer::clearInstancePool();
            PlanFacturationDetailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PlanFacturationDetails or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PlanFacturationDetails object or primary key or array of primary keys
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
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PlanFacturationDetailsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PlanFacturationDetails) { // it's a model object
            // invalidate the cache for this single object
            PlanFacturationDetailsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PlanFacturationDetailsPeer::DATABASE_NAME);
            $criteria->add(PlanFacturationDetailsPeer::PFD_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PlanFacturationDetailsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PlanFacturationDetailsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PlanFacturationDetailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PlanFacturationDetails object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param PlanFacturationDetails $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PlanFacturationDetailsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PlanFacturationDetailsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::OP_ID))
            $columns[PlanFacturationDetailsPeer::OP_ID] = $obj->getOpId();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID))
            $columns[PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID] = $obj->getPfdTypeFactId();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::PFD_DATE_PLANIF))
            $columns[PlanFacturationDetailsPeer::PFD_DATE_PLANIF] = $obj->getPfdDatePlanif();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::PFD_TAUX_ADF))
            $columns[PlanFacturationDetailsPeer::PFD_TAUX_ADF] = $obj->getPfdTauxAdf();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL))
            $columns[PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL] = $obj->getPfdTauxPartiel();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL))
            $columns[PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL] = $obj->getPfdIdToCancel();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ANNUL))
            $columns[PlanFacturationDetailsPeer::PFD_FACT_ANNUL] = $obj->getPfdFactAnnul();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID))
            $columns[PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID] = $obj->getPfdFactAnnulMotifId();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_AUTRE_MOTIF))
            $columns[PlanFacturationDetailsPeer::PFD_FACT_ANNUL_AUTRE_MOTIF] = $obj->getPfdFactAnnulAutreMotif();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ID))
            $columns[PlanFacturationDetailsPeer::PFD_FACT_ID] = $obj->getPfdFactId();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::DATE_CREATE))
            $columns[PlanFacturationDetailsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::DATE_MODIFY))
            $columns[PlanFacturationDetailsPeer::DATE_MODIFY] = $obj->getDateModify();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::USER_ID))
            $columns[PlanFacturationDetailsPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::USER_MODIFY))
            $columns[PlanFacturationDetailsPeer::USER_MODIFY] = $obj->getUserModify();

        if ($obj->isNew() || $obj->isColumnModified(PlanFacturationDetailsPeer::PFD_NUM_CMD))
            $columns[PlanFacturationDetailsPeer::PFD_NUM_CMD] = $obj->getPfdNumCmd();

        }

        return BasePeer::doValidate(PlanFacturationDetailsPeer::DATABASE_NAME, PlanFacturationDetailsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return PlanFacturationDetails
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PlanFacturationDetailsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PlanFacturationDetailsPeer::DATABASE_NAME);
        $criteria->add(PlanFacturationDetailsPeer::PFD_ID, $pk);

        $v = PlanFacturationDetailsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return PlanFacturationDetails[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PlanFacturationDetailsPeer::DATABASE_NAME);
            $criteria->add(PlanFacturationDetailsPeer::PFD_ID, $pks, Criteria::IN);
            $objs = PlanFacturationDetailsPeer::doSelect($criteria, $con);
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
} // BasePlanFacturationDetailsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePlanFacturationDetailsPeer::buildTableMap();

