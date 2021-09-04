<?php


/**
 * Base static class for performing query and update operations on the 'r_tva_type' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseRTvaTypePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'r_tva_type';

    /** the related Propel class for this table */
    const OM_CLASS = 'RTvaType';

    /** the related TableMap class for this table */
    const TM_CLASS = 'RTvaTypeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the r_tva_id field */
    const R_TVA_ID = 'r_tva_type.r_tva_id';

    /** the column name for the r_tva_libelle field */
    const R_TVA_LIBELLE = 'r_tva_type.r_tva_libelle';

    /** the column name for the r_tva_libelle_fact_synthese field */
    const R_TVA_LIBELLE_FACT_SYNTHESE = 'r_tva_type.r_tva_libelle_fact_synthese';

    /** the column name for the r_tva_typologie field */
    const R_TVA_TYPOLOGIE = 'r_tva_type.r_tva_typologie';

    /** the column name for the r_tva_statut field */
    const R_TVA_STATUT = 'r_tva_type.r_tva_statut';

    /** the column name for the r_tva_descriptif field */
    const R_TVA_DESCRIPTIF = 'r_tva_type.r_tva_descriptif';

    /** the column name for the r_tva_taux field */
    const R_TVA_TAUX = 'r_tva_type.r_tva_taux';

    /** the column name for the r_tva_coeff field */
    const R_TVA_COEFF = 'r_tva_type.r_tva_coeff';

    /** the column name for the r_tva_type_recup_coeff field */
    const R_TVA_TYPE_RECUP_COEFF = 'r_tva_type.r_tva_type_recup_coeff';

    /** the column name for the r_tva_rub_order field */
    const R_TVA_RUB_ORDER = 'r_tva_type.r_tva_rub_order';

    /** the column name for the actif field */
    const ACTIF = 'r_tva_type.actif';

    /** the column name for the r_tva_libelle_en field */
    const R_TVA_LIBELLE_EN = 'r_tva_type.r_tva_libelle_en';

    /** the column name for the r_tva_libelle_fact_synthese_en field */
    const R_TVA_LIBELLE_FACT_SYNTHESE_EN = 'r_tva_type.r_tva_libelle_fact_synthese_en';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of RTvaType objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array RTvaType[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. RTvaTypePeer::$fieldNames[RTvaTypePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('RTvaId', 'RTvaLibelle', 'RTvaLibelleFactSynthese', 'RTvaTypologie', 'RTvaStatut', 'RTvaDescriptif', 'RTvaTaux', 'RTvaCoeff', 'RTvaTypeRecupCoeff', 'RTvaRubOrder', 'Actif', 'RTvaLibelleEn', 'RTvaLibelleFactSyntheseEn', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('rTvaId', 'rTvaLibelle', 'rTvaLibelleFactSynthese', 'rTvaTypologie', 'rTvaStatut', 'rTvaDescriptif', 'rTvaTaux', 'rTvaCoeff', 'rTvaTypeRecupCoeff', 'rTvaRubOrder', 'actif', 'rTvaLibelleEn', 'rTvaLibelleFactSyntheseEn', ),
        BasePeer::TYPE_COLNAME => array (RTvaTypePeer::R_TVA_ID, RTvaTypePeer::R_TVA_LIBELLE, RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE, RTvaTypePeer::R_TVA_TYPOLOGIE, RTvaTypePeer::R_TVA_STATUT, RTvaTypePeer::R_TVA_DESCRIPTIF, RTvaTypePeer::R_TVA_TAUX, RTvaTypePeer::R_TVA_COEFF, RTvaTypePeer::R_TVA_TYPE_RECUP_COEFF, RTvaTypePeer::R_TVA_RUB_ORDER, RTvaTypePeer::ACTIF, RTvaTypePeer::R_TVA_LIBELLE_EN, RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE_EN, ),
        BasePeer::TYPE_RAW_COLNAME => array ('R_TVA_ID', 'R_TVA_LIBELLE', 'R_TVA_LIBELLE_FACT_SYNTHESE', 'R_TVA_TYPOLOGIE', 'R_TVA_STATUT', 'R_TVA_DESCRIPTIF', 'R_TVA_TAUX', 'R_TVA_COEFF', 'R_TVA_TYPE_RECUP_COEFF', 'R_TVA_RUB_ORDER', 'ACTIF', 'R_TVA_LIBELLE_EN', 'R_TVA_LIBELLE_FACT_SYNTHESE_EN', ),
        BasePeer::TYPE_FIELDNAME => array ('r_tva_id', 'r_tva_libelle', 'r_tva_libelle_fact_synthese', 'r_tva_typologie', 'r_tva_statut', 'r_tva_descriptif', 'r_tva_taux', 'r_tva_coeff', 'r_tva_type_recup_coeff', 'r_tva_rub_order', 'actif', 'r_tva_libelle_en', 'r_tva_libelle_fact_synthese_en', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. RTvaTypePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('RTvaId' => 0, 'RTvaLibelle' => 1, 'RTvaLibelleFactSynthese' => 2, 'RTvaTypologie' => 3, 'RTvaStatut' => 4, 'RTvaDescriptif' => 5, 'RTvaTaux' => 6, 'RTvaCoeff' => 7, 'RTvaTypeRecupCoeff' => 8, 'RTvaRubOrder' => 9, 'Actif' => 10, 'RTvaLibelleEn' => 11, 'RTvaLibelleFactSyntheseEn' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('rTvaId' => 0, 'rTvaLibelle' => 1, 'rTvaLibelleFactSynthese' => 2, 'rTvaTypologie' => 3, 'rTvaStatut' => 4, 'rTvaDescriptif' => 5, 'rTvaTaux' => 6, 'rTvaCoeff' => 7, 'rTvaTypeRecupCoeff' => 8, 'rTvaRubOrder' => 9, 'actif' => 10, 'rTvaLibelleEn' => 11, 'rTvaLibelleFactSyntheseEn' => 12, ),
        BasePeer::TYPE_COLNAME => array (RTvaTypePeer::R_TVA_ID => 0, RTvaTypePeer::R_TVA_LIBELLE => 1, RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE => 2, RTvaTypePeer::R_TVA_TYPOLOGIE => 3, RTvaTypePeer::R_TVA_STATUT => 4, RTvaTypePeer::R_TVA_DESCRIPTIF => 5, RTvaTypePeer::R_TVA_TAUX => 6, RTvaTypePeer::R_TVA_COEFF => 7, RTvaTypePeer::R_TVA_TYPE_RECUP_COEFF => 8, RTvaTypePeer::R_TVA_RUB_ORDER => 9, RTvaTypePeer::ACTIF => 10, RTvaTypePeer::R_TVA_LIBELLE_EN => 11, RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE_EN => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('R_TVA_ID' => 0, 'R_TVA_LIBELLE' => 1, 'R_TVA_LIBELLE_FACT_SYNTHESE' => 2, 'R_TVA_TYPOLOGIE' => 3, 'R_TVA_STATUT' => 4, 'R_TVA_DESCRIPTIF' => 5, 'R_TVA_TAUX' => 6, 'R_TVA_COEFF' => 7, 'R_TVA_TYPE_RECUP_COEFF' => 8, 'R_TVA_RUB_ORDER' => 9, 'ACTIF' => 10, 'R_TVA_LIBELLE_EN' => 11, 'R_TVA_LIBELLE_FACT_SYNTHESE_EN' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('r_tva_id' => 0, 'r_tva_libelle' => 1, 'r_tva_libelle_fact_synthese' => 2, 'r_tva_typologie' => 3, 'r_tva_statut' => 4, 'r_tva_descriptif' => 5, 'r_tva_taux' => 6, 'r_tva_coeff' => 7, 'r_tva_type_recup_coeff' => 8, 'r_tva_rub_order' => 9, 'actif' => 10, 'r_tva_libelle_en' => 11, 'r_tva_libelle_fact_synthese_en' => 12, ),
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
        $toNames = RTvaTypePeer::getFieldNames($toType);
        $key = isset(RTvaTypePeer::$fieldKeys[$fromType][$name]) ? RTvaTypePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(RTvaTypePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, RTvaTypePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return RTvaTypePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. RTvaTypePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RTvaTypePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_ID);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_LIBELLE);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_TYPOLOGIE);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_STATUT);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_DESCRIPTIF);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_TAUX);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_COEFF);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_TYPE_RECUP_COEFF);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_RUB_ORDER);
            $criteria->addSelectColumn(RTvaTypePeer::ACTIF);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_LIBELLE_EN);
            $criteria->addSelectColumn(RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE_EN);
        } else {
            $criteria->addSelectColumn($alias . '.r_tva_id');
            $criteria->addSelectColumn($alias . '.r_tva_libelle');
            $criteria->addSelectColumn($alias . '.r_tva_libelle_fact_synthese');
            $criteria->addSelectColumn($alias . '.r_tva_typologie');
            $criteria->addSelectColumn($alias . '.r_tva_statut');
            $criteria->addSelectColumn($alias . '.r_tva_descriptif');
            $criteria->addSelectColumn($alias . '.r_tva_taux');
            $criteria->addSelectColumn($alias . '.r_tva_coeff');
            $criteria->addSelectColumn($alias . '.r_tva_type_recup_coeff');
            $criteria->addSelectColumn($alias . '.r_tva_rub_order');
            $criteria->addSelectColumn($alias . '.actif');
            $criteria->addSelectColumn($alias . '.r_tva_libelle_en');
            $criteria->addSelectColumn($alias . '.r_tva_libelle_fact_synthese_en');
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
        $criteria->setPrimaryTableName(RTvaTypePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RTvaTypePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(RTvaTypePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RTvaTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return RTvaType
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RTvaTypePeer::doSelect($critcopy, $con);
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
        return RTvaTypePeer::populateObjects(RTvaTypePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(RTvaTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RTvaTypePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(RTvaTypePeer::DATABASE_NAME);

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
     * @param RTvaType $obj A RTvaType object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRTvaId();
            } // if key === null
            RTvaTypePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A RTvaType object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof RTvaType) {
                $key = (string) $value->getRTvaId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or RTvaType object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(RTvaTypePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return RTvaType Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(RTvaTypePeer::$instances[$key])) {
                return RTvaTypePeer::$instances[$key];
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
        foreach (RTvaTypePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        RTvaTypePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to r_tva_type
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
        $cls = RTvaTypePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RTvaTypePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RTvaTypePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RTvaTypePeer::addInstanceToPool($obj, $key);
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
     * @return array (RTvaType object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RTvaTypePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RTvaTypePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RTvaTypePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RTvaTypePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RTvaTypePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(RTvaTypePeer::DATABASE_NAME)->getTable(RTvaTypePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseRTvaTypePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseRTvaTypePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \RTvaTypeTableMap());
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
        return RTvaTypePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a RTvaType or Criteria object.
     *
     * @param      mixed $values Criteria or RTvaType object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RTvaTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from RTvaType object
        }

        if ($criteria->containsKey(RTvaTypePeer::R_TVA_ID) && $criteria->keyContainsValue(RTvaTypePeer::R_TVA_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RTvaTypePeer::R_TVA_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(RTvaTypePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a RTvaType or Criteria object.
     *
     * @param      mixed $values Criteria or RTvaType object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RTvaTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(RTvaTypePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RTvaTypePeer::R_TVA_ID);
            $value = $criteria->remove(RTvaTypePeer::R_TVA_ID);
            if ($value) {
                $selectCriteria->add(RTvaTypePeer::R_TVA_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RTvaTypePeer::TABLE_NAME);
            }

        } else { // $values is RTvaType object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(RTvaTypePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the r_tva_type table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RTvaTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(RTvaTypePeer::TABLE_NAME, $con, RTvaTypePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RTvaTypePeer::clearInstancePool();
            RTvaTypePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a RTvaType or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or RTvaType object or primary key or array of primary keys
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
            $con = Propel::getConnection(RTvaTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            RTvaTypePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof RTvaType) { // it's a model object
            // invalidate the cache for this single object
            RTvaTypePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RTvaTypePeer::DATABASE_NAME);
            $criteria->add(RTvaTypePeer::R_TVA_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                RTvaTypePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(RTvaTypePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            RTvaTypePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given RTvaType object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param RTvaType $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RTvaTypePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RTvaTypePeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_LIBELLE))
            $columns[RTvaTypePeer::R_TVA_LIBELLE] = $obj->getRTvaLibelle();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE))
            $columns[RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE] = $obj->getRTvaLibelleFactSynthese();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_TYPOLOGIE))
            $columns[RTvaTypePeer::R_TVA_TYPOLOGIE] = $obj->getRTvaTypologie();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_STATUT))
            $columns[RTvaTypePeer::R_TVA_STATUT] = $obj->getRTvaStatut();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_DESCRIPTIF))
            $columns[RTvaTypePeer::R_TVA_DESCRIPTIF] = $obj->getRTvaDescriptif();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_TAUX))
            $columns[RTvaTypePeer::R_TVA_TAUX] = $obj->getRTvaTaux();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_COEFF))
            $columns[RTvaTypePeer::R_TVA_COEFF] = $obj->getRTvaCoeff();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_TYPE_RECUP_COEFF))
            $columns[RTvaTypePeer::R_TVA_TYPE_RECUP_COEFF] = $obj->getRTvaTypeRecupCoeff();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_RUB_ORDER))
            $columns[RTvaTypePeer::R_TVA_RUB_ORDER] = $obj->getRTvaRubOrder();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::ACTIF))
            $columns[RTvaTypePeer::ACTIF] = $obj->getActif();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_LIBELLE_EN))
            $columns[RTvaTypePeer::R_TVA_LIBELLE_EN] = $obj->getRTvaLibelleEn();

        if ($obj->isNew() || $obj->isColumnModified(RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE_EN))
            $columns[RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE_EN] = $obj->getRTvaLibelleFactSyntheseEn();

        }

        return BasePeer::doValidate(RTvaTypePeer::DATABASE_NAME, RTvaTypePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return RTvaType
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RTvaTypePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RTvaTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RTvaTypePeer::DATABASE_NAME);
        $criteria->add(RTvaTypePeer::R_TVA_ID, $pk);

        $v = RTvaTypePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return RTvaType[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RTvaTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RTvaTypePeer::DATABASE_NAME);
            $criteria->add(RTvaTypePeer::R_TVA_ID, $pks, Criteria::IN);
            $objs = RTvaTypePeer::doSelect($criteria, $con);
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
} // BaseRTvaTypePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRTvaTypePeer::buildTableMap();

