<?php


/**
 * Base static class for performing query and update operations on the 'operation_decouverts' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseOperationDecouvertsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'operation_decouverts';

    /** the related Propel class for this table */
    const OM_CLASS = 'OperationDecouverts';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OperationDecouvertsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the op_dec_id field */
    const OP_DEC_ID = 'operation_decouverts.op_dec_id';

    /** the column name for the op_id field */
    const OP_ID = 'operation_decouverts.op_id';

    /** the column name for the op_dec_mont_demande field */
    const OP_DEC_MONT_DEMANDE = 'operation_decouverts.op_dec_mont_demande';

    /** the column name for the op_dec_mont_accord field */
    const OP_DEC_MONT_ACCORD = 'operation_decouverts.op_dec_mont_accord';

    /** the column name for the op_dec_motif_demande field */
    const OP_DEC_MOTIF_DEMANDE = 'operation_decouverts.op_dec_motif_demande';

    /** the column name for the op_dec_motif_accord field */
    const OP_DEC_MOTIF_ACCORD = 'operation_decouverts.op_dec_motif_accord';

    /** the column name for the op_dec_statut_id field */
    const OP_DEC_STATUT_ID = 'operation_decouverts.op_dec_statut_id';

    /** the column name for the date_create field */
    const DATE_CREATE = 'operation_decouverts.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'operation_decouverts.date_modify';

    /** the column name for the user_id field */
    const USER_ID = 'operation_decouverts.user_id';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'operation_decouverts.user_modify';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of OperationDecouverts objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array OperationDecouverts[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OperationDecouvertsPeer::$fieldNames[OperationDecouvertsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('OpDecId', 'OpId', 'OpDecMontDemande', 'OpDecMontAccord', 'OpDecMotifDemande', 'OpDecMotifAccord', 'OpDecStatutId', 'DateCreate', 'DateModify', 'UserId', 'UserModify', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('opDecId', 'opId', 'opDecMontDemande', 'opDecMontAccord', 'opDecMotifDemande', 'opDecMotifAccord', 'opDecStatutId', 'dateCreate', 'dateModify', 'userId', 'userModify', ),
        BasePeer::TYPE_COLNAME => array (OperationDecouvertsPeer::OP_DEC_ID, OperationDecouvertsPeer::OP_ID, OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE, OperationDecouvertsPeer::OP_DEC_MONT_ACCORD, OperationDecouvertsPeer::OP_DEC_MOTIF_DEMANDE, OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD, OperationDecouvertsPeer::OP_DEC_STATUT_ID, OperationDecouvertsPeer::DATE_CREATE, OperationDecouvertsPeer::DATE_MODIFY, OperationDecouvertsPeer::USER_ID, OperationDecouvertsPeer::USER_MODIFY, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OP_DEC_ID', 'OP_ID', 'OP_DEC_MONT_DEMANDE', 'OP_DEC_MONT_ACCORD', 'OP_DEC_MOTIF_DEMANDE', 'OP_DEC_MOTIF_ACCORD', 'OP_DEC_STATUT_ID', 'DATE_CREATE', 'DATE_MODIFY', 'USER_ID', 'USER_MODIFY', ),
        BasePeer::TYPE_FIELDNAME => array ('op_dec_id', 'op_id', 'op_dec_mont_demande', 'op_dec_mont_accord', 'op_dec_motif_demande', 'op_dec_motif_accord', 'op_dec_statut_id', 'date_create', 'date_modify', 'user_id', 'user_modify', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OperationDecouvertsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('OpDecId' => 0, 'OpId' => 1, 'OpDecMontDemande' => 2, 'OpDecMontAccord' => 3, 'OpDecMotifDemande' => 4, 'OpDecMotifAccord' => 5, 'OpDecStatutId' => 6, 'DateCreate' => 7, 'DateModify' => 8, 'UserId' => 9, 'UserModify' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('opDecId' => 0, 'opId' => 1, 'opDecMontDemande' => 2, 'opDecMontAccord' => 3, 'opDecMotifDemande' => 4, 'opDecMotifAccord' => 5, 'opDecStatutId' => 6, 'dateCreate' => 7, 'dateModify' => 8, 'userId' => 9, 'userModify' => 10, ),
        BasePeer::TYPE_COLNAME => array (OperationDecouvertsPeer::OP_DEC_ID => 0, OperationDecouvertsPeer::OP_ID => 1, OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE => 2, OperationDecouvertsPeer::OP_DEC_MONT_ACCORD => 3, OperationDecouvertsPeer::OP_DEC_MOTIF_DEMANDE => 4, OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD => 5, OperationDecouvertsPeer::OP_DEC_STATUT_ID => 6, OperationDecouvertsPeer::DATE_CREATE => 7, OperationDecouvertsPeer::DATE_MODIFY => 8, OperationDecouvertsPeer::USER_ID => 9, OperationDecouvertsPeer::USER_MODIFY => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OP_DEC_ID' => 0, 'OP_ID' => 1, 'OP_DEC_MONT_DEMANDE' => 2, 'OP_DEC_MONT_ACCORD' => 3, 'OP_DEC_MOTIF_DEMANDE' => 4, 'OP_DEC_MOTIF_ACCORD' => 5, 'OP_DEC_STATUT_ID' => 6, 'DATE_CREATE' => 7, 'DATE_MODIFY' => 8, 'USER_ID' => 9, 'USER_MODIFY' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('op_dec_id' => 0, 'op_id' => 1, 'op_dec_mont_demande' => 2, 'op_dec_mont_accord' => 3, 'op_dec_motif_demande' => 4, 'op_dec_motif_accord' => 5, 'op_dec_statut_id' => 6, 'date_create' => 7, 'date_modify' => 8, 'user_id' => 9, 'user_modify' => 10, ),
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
        $toNames = OperationDecouvertsPeer::getFieldNames($toType);
        $key = isset(OperationDecouvertsPeer::$fieldKeys[$fromType][$name]) ? OperationDecouvertsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OperationDecouvertsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OperationDecouvertsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OperationDecouvertsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OperationDecouvertsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OperationDecouvertsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OperationDecouvertsPeer::OP_DEC_ID);
            $criteria->addSelectColumn(OperationDecouvertsPeer::OP_ID);
            $criteria->addSelectColumn(OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE);
            $criteria->addSelectColumn(OperationDecouvertsPeer::OP_DEC_MONT_ACCORD);
            $criteria->addSelectColumn(OperationDecouvertsPeer::OP_DEC_MOTIF_DEMANDE);
            $criteria->addSelectColumn(OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD);
            $criteria->addSelectColumn(OperationDecouvertsPeer::OP_DEC_STATUT_ID);
            $criteria->addSelectColumn(OperationDecouvertsPeer::DATE_CREATE);
            $criteria->addSelectColumn(OperationDecouvertsPeer::DATE_MODIFY);
            $criteria->addSelectColumn(OperationDecouvertsPeer::USER_ID);
            $criteria->addSelectColumn(OperationDecouvertsPeer::USER_MODIFY);
        } else {
            $criteria->addSelectColumn($alias . '.op_dec_id');
            $criteria->addSelectColumn($alias . '.op_id');
            $criteria->addSelectColumn($alias . '.op_dec_mont_demande');
            $criteria->addSelectColumn($alias . '.op_dec_mont_accord');
            $criteria->addSelectColumn($alias . '.op_dec_motif_demande');
            $criteria->addSelectColumn($alias . '.op_dec_motif_accord');
            $criteria->addSelectColumn($alias . '.op_dec_statut_id');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.user_modify');
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
        $criteria->setPrimaryTableName(OperationDecouvertsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationDecouvertsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OperationDecouvertsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return OperationDecouverts
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OperationDecouvertsPeer::doSelect($critcopy, $con);
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
        return OperationDecouvertsPeer::populateObjects(OperationDecouvertsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OperationDecouvertsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OperationDecouvertsPeer::DATABASE_NAME);

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
     * @param OperationDecouverts $obj A OperationDecouverts object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOpDecId();
            } // if key === null
            OperationDecouvertsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A OperationDecouverts object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof OperationDecouverts) {
                $key = (string) $value->getOpDecId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or OperationDecouverts object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OperationDecouvertsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return OperationDecouverts Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OperationDecouvertsPeer::$instances[$key])) {
                return OperationDecouvertsPeer::$instances[$key];
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
        foreach (OperationDecouvertsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OperationDecouvertsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to operation_decouverts
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
        $cls = OperationDecouvertsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OperationDecouvertsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OperationDecouvertsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OperationDecouvertsPeer::addInstanceToPool($obj, $key);
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
     * @return array (OperationDecouverts object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OperationDecouvertsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OperationDecouvertsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OperationDecouvertsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OperationDecouvertsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OperationDecouvertsPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(OperationDecouvertsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationDecouvertsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationDecouvertsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationDecouvertsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

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
     * Selects a collection of OperationDecouverts objects pre-filled with their Operations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationDecouverts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationDecouvertsPeer::DATABASE_NAME);
        }

        OperationDecouvertsPeer::addSelectColumns($criteria);
        $startcol = OperationDecouvertsPeer::NUM_HYDRATE_COLUMNS;
        OperationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(OperationDecouvertsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationDecouvertsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationDecouvertsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OperationDecouvertsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationDecouvertsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationDecouverts) to $obj2 (Operations)
                $obj2->addOperationDecouverts($obj1);

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
        $criteria->setPrimaryTableName(OperationDecouvertsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OperationDecouvertsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OperationDecouvertsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OperationDecouvertsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

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
     * Selects a collection of OperationDecouverts objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of OperationDecouverts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OperationDecouvertsPeer::DATABASE_NAME);
        }

        OperationDecouvertsPeer::addSelectColumns($criteria);
        $startcol2 = OperationDecouvertsPeer::NUM_HYDRATE_COLUMNS;

        OperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OperationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OperationDecouvertsPeer::OP_ID, OperationsPeer::OP_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OperationDecouvertsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OperationDecouvertsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OperationDecouvertsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OperationDecouvertsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (OperationDecouverts) to the collection in $obj2 (Operations)
                $obj2->addOperationDecouverts($obj1);
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
        return Propel::getDatabaseMap(OperationDecouvertsPeer::DATABASE_NAME)->getTable(OperationDecouvertsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOperationDecouvertsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOperationDecouvertsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OperationDecouvertsTableMap());
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
        return OperationDecouvertsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a OperationDecouverts or Criteria object.
     *
     * @param      mixed $values Criteria or OperationDecouverts object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from OperationDecouverts object
        }

        if ($criteria->containsKey(OperationDecouvertsPeer::OP_DEC_ID) && $criteria->keyContainsValue(OperationDecouvertsPeer::OP_DEC_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OperationDecouvertsPeer::OP_DEC_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OperationDecouvertsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a OperationDecouverts or Criteria object.
     *
     * @param      mixed $values Criteria or OperationDecouverts object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OperationDecouvertsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OperationDecouvertsPeer::OP_DEC_ID);
            $value = $criteria->remove(OperationDecouvertsPeer::OP_DEC_ID);
            if ($value) {
                $selectCriteria->add(OperationDecouvertsPeer::OP_DEC_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OperationDecouvertsPeer::TABLE_NAME);
            }

        } else { // $values is OperationDecouverts object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OperationDecouvertsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the operation_decouverts table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OperationDecouvertsPeer::TABLE_NAME, $con, OperationDecouvertsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OperationDecouvertsPeer::clearInstancePool();
            OperationDecouvertsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a OperationDecouverts or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or OperationDecouverts object or primary key or array of primary keys
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
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OperationDecouvertsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof OperationDecouverts) { // it's a model object
            // invalidate the cache for this single object
            OperationDecouvertsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OperationDecouvertsPeer::DATABASE_NAME);
            $criteria->add(OperationDecouvertsPeer::OP_DEC_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OperationDecouvertsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OperationDecouvertsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OperationDecouvertsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given OperationDecouverts object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param OperationDecouverts $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OperationDecouvertsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OperationDecouvertsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(OperationDecouvertsPeer::OP_ID))
            $columns[OperationDecouvertsPeer::OP_ID] = $obj->getOpId();

        if ($obj->isNew() || $obj->isColumnModified(OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE))
            $columns[OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE] = $obj->getOpDecMontDemande();

        if ($obj->isNew() || $obj->isColumnModified(OperationDecouvertsPeer::OP_DEC_MOTIF_DEMANDE))
            $columns[OperationDecouvertsPeer::OP_DEC_MOTIF_DEMANDE] = $obj->getOpDecMotifDemande();

        if ($obj->isNew() || $obj->isColumnModified(OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD))
            $columns[OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD] = $obj->getOpDecMotifAccord();

        if ($obj->isNew() || $obj->isColumnModified(OperationDecouvertsPeer::OP_DEC_STATUT_ID))
            $columns[OperationDecouvertsPeer::OP_DEC_STATUT_ID] = $obj->getOpDecStatutId();

        if ($obj->isNew() || $obj->isColumnModified(OperationDecouvertsPeer::DATE_CREATE))
            $columns[OperationDecouvertsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(OperationDecouvertsPeer::DATE_MODIFY))
            $columns[OperationDecouvertsPeer::DATE_MODIFY] = $obj->getDateModify();

        if ($obj->isNew() || $obj->isColumnModified(OperationDecouvertsPeer::USER_ID))
            $columns[OperationDecouvertsPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(OperationDecouvertsPeer::USER_MODIFY))
            $columns[OperationDecouvertsPeer::USER_MODIFY] = $obj->getUserModify();

        }

        return BasePeer::doValidate(OperationDecouvertsPeer::DATABASE_NAME, OperationDecouvertsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return OperationDecouverts
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OperationDecouvertsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OperationDecouvertsPeer::DATABASE_NAME);
        $criteria->add(OperationDecouvertsPeer::OP_DEC_ID, $pk);

        $v = OperationDecouvertsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return OperationDecouverts[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OperationDecouvertsPeer::DATABASE_NAME);
            $criteria->add(OperationDecouvertsPeer::OP_DEC_ID, $pks, Criteria::IN);
            $objs = OperationDecouvertsPeer::doSelect($criteria, $con);
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
} // BaseOperationDecouvertsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOperationDecouvertsPeer::buildTableMap();

