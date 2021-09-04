<?php


/**
 * Base static class for performing query and update operations on the 'lnk_r_operation_type_sub_template_medias_universes' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseLnkROperationTypeSubTemplateMediasUniversesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'lnk_r_operation_type_sub_template_medias_universes';

    /** the related Propel class for this table */
    const OM_CLASS = 'LnkROperationTypeSubTemplateMediasUniverses';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LnkROperationTypeSubTemplateMediasUniversesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the lnk_r_operation_type_sub_template_media_universe_id field */
    const LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID = 'lnk_r_operation_type_sub_template_medias_universes.lnk_r_operation_type_sub_template_media_universe_id';

    /** the column name for the lnk_r_operation_type_sub_template_media_universe_ost_id field */
    const LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID = 'lnk_r_operation_type_sub_template_medias_universes.lnk_r_operation_type_sub_template_media_universe_ost_id';

    /** the column name for the lnk_r_operation_type_sub_template_media_universe_tpl_id field */
    const LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID = 'lnk_r_operation_type_sub_template_medias_universes.lnk_r_operation_type_sub_template_media_universe_tpl_id';

    /** the column name for the lnk_r_operation_type_sub_template_media_universe_universe_id field */
    const LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID = 'lnk_r_operation_type_sub_template_medias_universes.lnk_r_operation_type_sub_template_media_universe_universe_id';

    /** the column name for the lnk_r_operation_type_sub_template_media_universe_media_id field */
    const LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID = 'lnk_r_operation_type_sub_template_medias_universes.lnk_r_operation_type_sub_template_media_universe_media_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of LnkROperationTypeSubTemplateMediasUniverses objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array LnkROperationTypeSubTemplateMediasUniverses[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LnkROperationTypeSubTemplateMediasUniversesPeer::$fieldNames[LnkROperationTypeSubTemplateMediasUniversesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('LnkROperationTypeSubTemplateMediaUniverseId', 'LnkROperationTypeSubTemplateMediaUniverseOstId', 'LnkROperationTypeSubTemplateMediaUniverseTplId', 'LnkROperationTypeSubTemplateMediaUniverseUniverseId', 'LnkROperationTypeSubTemplateMediaUniverseMediaId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('lnkROperationTypeSubTemplateMediaUniverseId', 'lnkROperationTypeSubTemplateMediaUniverseOstId', 'lnkROperationTypeSubTemplateMediaUniverseTplId', 'lnkROperationTypeSubTemplateMediaUniverseUniverseId', 'lnkROperationTypeSubTemplateMediaUniverseMediaId', ),
        BasePeer::TYPE_COLNAME => array (LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID', 'LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID', 'LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID', 'LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID', 'LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('lnk_r_operation_type_sub_template_media_universe_id', 'lnk_r_operation_type_sub_template_media_universe_ost_id', 'lnk_r_operation_type_sub_template_media_universe_tpl_id', 'lnk_r_operation_type_sub_template_media_universe_universe_id', 'lnk_r_operation_type_sub_template_media_universe_media_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LnkROperationTypeSubTemplateMediasUniversesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('LnkROperationTypeSubTemplateMediaUniverseId' => 0, 'LnkROperationTypeSubTemplateMediaUniverseOstId' => 1, 'LnkROperationTypeSubTemplateMediaUniverseTplId' => 2, 'LnkROperationTypeSubTemplateMediaUniverseUniverseId' => 3, 'LnkROperationTypeSubTemplateMediaUniverseMediaId' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('lnkROperationTypeSubTemplateMediaUniverseId' => 0, 'lnkROperationTypeSubTemplateMediaUniverseOstId' => 1, 'lnkROperationTypeSubTemplateMediaUniverseTplId' => 2, 'lnkROperationTypeSubTemplateMediaUniverseUniverseId' => 3, 'lnkROperationTypeSubTemplateMediaUniverseMediaId' => 4, ),
        BasePeer::TYPE_COLNAME => array (LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID => 0, LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID => 1, LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID => 2, LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID => 3, LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID' => 0, 'LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID' => 1, 'LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID' => 2, 'LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID' => 3, 'LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('lnk_r_operation_type_sub_template_media_universe_id' => 0, 'lnk_r_operation_type_sub_template_media_universe_ost_id' => 1, 'lnk_r_operation_type_sub_template_media_universe_tpl_id' => 2, 'lnk_r_operation_type_sub_template_media_universe_universe_id' => 3, 'lnk_r_operation_type_sub_template_media_universe_media_id' => 4, ),
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
        $toNames = LnkROperationTypeSubTemplateMediasUniversesPeer::getFieldNames($toType);
        $key = isset(LnkROperationTypeSubTemplateMediasUniversesPeer::$fieldKeys[$fromType][$name]) ? LnkROperationTypeSubTemplateMediasUniversesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LnkROperationTypeSubTemplateMediasUniversesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, LnkROperationTypeSubTemplateMediasUniversesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LnkROperationTypeSubTemplateMediasUniversesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. LnkROperationTypeSubTemplateMediasUniversesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID);
            $criteria->addSelectColumn(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID);
            $criteria->addSelectColumn(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID);
            $criteria->addSelectColumn(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID);
            $criteria->addSelectColumn(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID);
        } else {
            $criteria->addSelectColumn($alias . '.lnk_r_operation_type_sub_template_media_universe_id');
            $criteria->addSelectColumn($alias . '.lnk_r_operation_type_sub_template_media_universe_ost_id');
            $criteria->addSelectColumn($alias . '.lnk_r_operation_type_sub_template_media_universe_tpl_id');
            $criteria->addSelectColumn($alias . '.lnk_r_operation_type_sub_template_media_universe_universe_id');
            $criteria->addSelectColumn($alias . '.lnk_r_operation_type_sub_template_media_universe_media_id');
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
        $criteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return LnkROperationTypeSubTemplateMediasUniverses
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LnkROperationTypeSubTemplateMediasUniversesPeer::doSelect($critcopy, $con);
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
        return LnkROperationTypeSubTemplateMediasUniversesPeer::populateObjects(LnkROperationTypeSubTemplateMediasUniversesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

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
     * @param LnkROperationTypeSubTemplateMediasUniverses $obj A LnkROperationTypeSubTemplateMediasUniverses object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getLnkROperationTypeSubTemplateMediaUniverseId();
            } // if key === null
            LnkROperationTypeSubTemplateMediasUniversesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A LnkROperationTypeSubTemplateMediasUniverses object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof LnkROperationTypeSubTemplateMediasUniverses) {
                $key = (string) $value->getLnkROperationTypeSubTemplateMediaUniverseId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or LnkROperationTypeSubTemplateMediasUniverses object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LnkROperationTypeSubTemplateMediasUniversesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return LnkROperationTypeSubTemplateMediasUniverses Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LnkROperationTypeSubTemplateMediasUniversesPeer::$instances[$key])) {
                return LnkROperationTypeSubTemplateMediasUniversesPeer::$instances[$key];
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
        foreach (LnkROperationTypeSubTemplateMediasUniversesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LnkROperationTypeSubTemplateMediasUniversesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to lnk_r_operation_type_sub_template_medias_universes
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
        $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj, $key);
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
     * @return array (LnkROperationTypeSubTemplateMediasUniverses object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related OperationTypeSub table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperationTypeSub(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OerationTypeSubTemplate table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOerationTypeSubTemplate(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationUniverse table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperationUniverse(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationMedia table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOperationMedia(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

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
     * Selects a collection of LnkROperationTypeSubTemplateMediasUniverses objects pre-filled with their ROperationTypeSub objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of LnkROperationTypeSubTemplateMediasUniverses objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperationTypeSub(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        }

        LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        $startcol = LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS;
        ROperationTypeSubPeer::addSelectColumns($criteria);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationTypeSubPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationTypeSubPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationTypeSubPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to $obj2 (ROperationTypeSub)
                $obj2->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of LnkROperationTypeSubTemplateMediasUniverses objects pre-filled with their ROperationTypeSubTpl objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of LnkROperationTypeSubTemplateMediasUniverses objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOerationTypeSubTemplate(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        }

        LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        $startcol = LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS;
        ROperationTypeSubTplPeer::addSelectColumns($criteria);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to $obj2 (ROperationTypeSubTpl)
                $obj2->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of LnkROperationTypeSubTemplateMediasUniverses objects pre-filled with their ROperationUniverses objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of LnkROperationTypeSubTemplateMediasUniverses objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperationUniverse(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        }

        LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        $startcol = LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS;
        ROperationUniversesPeer::addSelectColumns($criteria);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationUniversesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationUniversesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationUniversesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to $obj2 (ROperationUniverses)
                $obj2->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of LnkROperationTypeSubTemplateMediasUniverses objects pre-filled with their ROperationMedias objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of LnkROperationTypeSubTemplateMediasUniverses objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOperationMedia(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        }

        LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        $startcol = LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS;
        ROperationMediasPeer::addSelectColumns($criteria);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ROperationMediasPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationMediasPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ROperationMediasPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to $obj2 (ROperationMedias)
                $obj2->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

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
        $criteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

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
     * Selects a collection of LnkROperationTypeSubTemplateMediasUniverses objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of LnkROperationTypeSubTemplateMediasUniverses objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        }

        LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        $startcol2 = LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined ROperationTypeSub rows

            $key2 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ROperationTypeSubPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ROperationTypeSubPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ROperationTypeSubPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj2 (ROperationTypeSub)
                $obj2->addLnkROperationTypeSubTemplateMediasUniverses($obj1);
            } // if joined row not null

            // Add objects for joined ROperationTypeSubTpl rows

            $key3 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ROperationTypeSubTplPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj3 (ROperationTypeSubTpl)
                $obj3->addLnkROperationTypeSubTemplateMediasUniverses($obj1);
            } // if joined row not null

            // Add objects for joined ROperationUniverses rows

            $key4 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ROperationUniversesPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ROperationUniversesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ROperationUniversesPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj4 (ROperationUniverses)
                $obj4->addLnkROperationTypeSubTemplateMediasUniverses($obj1);
            } // if joined row not null

            // Add objects for joined ROperationMedias rows

            $key5 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = ROperationMediasPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = ROperationMediasPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ROperationMediasPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj5 (ROperationMedias)
                $obj5->addLnkROperationTypeSubTemplateMediasUniverses($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related OperationTypeSub table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationTypeSub(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OerationTypeSubTemplate table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOerationTypeSubTemplate(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationUniverse table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationUniverse(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related OperationMedia table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOperationMedia(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

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
     * Selects a collection of LnkROperationTypeSubTemplateMediasUniverses objects pre-filled with all related objects except OperationTypeSub.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of LnkROperationTypeSubTemplateMediasUniverses objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationTypeSub(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        }

        LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        $startcol2 = LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj2 (ROperationTypeSubTpl)
                $obj2->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key3 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ROperationUniversesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationUniversesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj3 (ROperationUniverses)
                $obj3->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key4 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ROperationMediasPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ROperationMediasPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj4 (ROperationMedias)
                $obj4->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of LnkROperationTypeSubTemplateMediasUniverses objects pre-filled with all related objects except OerationTypeSubTemplate.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of LnkROperationTypeSubTemplateMediasUniverses objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOerationTypeSubTemplate(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        }

        LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        $startcol2 = LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ROperationTypeSub rows

                $key2 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ROperationTypeSubPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ROperationTypeSubPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj2 (ROperationTypeSub)
                $obj2->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key3 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ROperationUniversesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationUniversesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj3 (ROperationUniverses)
                $obj3->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key4 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ROperationMediasPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ROperationMediasPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj4 (ROperationMedias)
                $obj4->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of LnkROperationTypeSubTemplateMediasUniverses objects pre-filled with all related objects except OperationUniverse.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of LnkROperationTypeSubTemplateMediasUniverses objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationUniverse(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        }

        LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        $startcol2 = LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationMediasPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ROperationMediasPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, ROperationMediasPeer::R_OPERATION_MEDIA_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ROperationTypeSub rows

                $key2 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ROperationTypeSubPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ROperationTypeSubPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj2 (ROperationTypeSub)
                $obj2->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key3 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ROperationTypeSubTplPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj3 (ROperationTypeSubTpl)
                $obj3->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationMedias rows

                $key4 = ROperationMediasPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ROperationMediasPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ROperationMediasPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ROperationMediasPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj4 (ROperationMedias)
                $obj4->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of LnkROperationTypeSubTemplateMediasUniverses objects pre-filled with all related objects except OperationMedia.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of LnkROperationTypeSubTemplateMediasUniverses objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOperationMedia(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        }

        LnkROperationTypeSubTemplateMediasUniversesPeer::addSelectColumns($criteria);
        $startcol2 = LnkROperationTypeSubTemplateMediasUniversesPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ROperationTypeSubPeer::NUM_HYDRATE_COLUMNS;

        ROperationTypeSubTplPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ROperationTypeSubTplPeer::NUM_HYDRATE_COLUMNS;

        ROperationUniversesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ROperationUniversesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, ROperationTypeSubPeer::OST_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, ROperationTypeSubTplPeer::OST_TPL_ID, $join_behavior);

        $criteria->addJoin(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = LnkROperationTypeSubTemplateMediasUniversesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ROperationTypeSub rows

                $key2 = ROperationTypeSubPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ROperationTypeSubPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ROperationTypeSubPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ROperationTypeSubPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj2 (ROperationTypeSub)
                $obj2->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationTypeSubTpl rows

                $key3 = ROperationTypeSubTplPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ROperationTypeSubTplPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ROperationTypeSubTplPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ROperationTypeSubTplPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj3 (ROperationTypeSubTpl)
                $obj3->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

            } // if joined row is not null

                // Add objects for joined ROperationUniverses rows

                $key4 = ROperationUniversesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ROperationUniversesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ROperationUniversesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ROperationUniversesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (LnkROperationTypeSubTemplateMediasUniverses) to the collection in $obj4 (ROperationUniverses)
                $obj4->addLnkROperationTypeSubTemplateMediasUniverses($obj1);

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
        return Propel::getDatabaseMap(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME)->getTable(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LnkROperationTypeSubTemplateMediasUniversesTableMap());
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
        return LnkROperationTypeSubTemplateMediasUniversesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a LnkROperationTypeSubTemplateMediasUniverses or Criteria object.
     *
     * @param      mixed $values Criteria or LnkROperationTypeSubTemplateMediasUniverses object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from LnkROperationTypeSubTemplateMediasUniverses object
        }

        if ($criteria->containsKey(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID) && $criteria->keyContainsValue(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a LnkROperationTypeSubTemplateMediasUniverses or Criteria object.
     *
     * @param      mixed $values Criteria or LnkROperationTypeSubTemplateMediasUniverses object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID);
            $value = $criteria->remove(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID);
            if ($value) {
                $selectCriteria->add(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);
            }

        } else { // $values is LnkROperationTypeSubTemplateMediasUniverses object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the lnk_r_operation_type_sub_template_medias_universes table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME, $con, LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LnkROperationTypeSubTemplateMediasUniversesPeer::clearInstancePool();
            LnkROperationTypeSubTemplateMediasUniversesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a LnkROperationTypeSubTemplateMediasUniverses or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or LnkROperationTypeSubTemplateMediasUniverses object or primary key or array of primary keys
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
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            LnkROperationTypeSubTemplateMediasUniversesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof LnkROperationTypeSubTemplateMediasUniverses) { // it's a model object
            // invalidate the cache for this single object
            LnkROperationTypeSubTemplateMediasUniversesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
            $criteria->add(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                LnkROperationTypeSubTemplateMediasUniversesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LnkROperationTypeSubTemplateMediasUniversesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given LnkROperationTypeSubTemplateMediasUniverses object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param LnkROperationTypeSubTemplateMediasUniverses $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID))
            $columns[LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID] = $obj->getLnkROperationTypeSubTemplateMediaUniverseOstId();

        if ($obj->isNew() || $obj->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID))
            $columns[LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID] = $obj->getLnkROperationTypeSubTemplateMediaUniverseTplId();

        if ($obj->isNew() || $obj->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID))
            $columns[LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID] = $obj->getLnkROperationTypeSubTemplateMediaUniverseUniverseId();

        if ($obj->isNew() || $obj->isColumnModified(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID))
            $columns[LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID] = $obj->getLnkROperationTypeSubTemplateMediaUniverseMediaId();

        }

        return BasePeer::doValidate(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, LnkROperationTypeSubTemplateMediasUniversesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return LnkROperationTypeSubTemplateMediasUniverses
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
        $criteria->add(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $pk);

        $v = LnkROperationTypeSubTemplateMediasUniversesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return LnkROperationTypeSubTemplateMediasUniverses[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME);
            $criteria->add(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $pks, Criteria::IN);
            $objs = LnkROperationTypeSubTemplateMediasUniversesPeer::doSelect($criteria, $con);
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
} // BaseLnkROperationTypeSubTemplateMediasUniversesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLnkROperationTypeSubTemplateMediasUniversesPeer::buildTableMap();

