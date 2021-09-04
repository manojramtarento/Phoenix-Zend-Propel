<?php


/**
 * Base static class for performing query and update operations on the 'relances' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseRelancesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'relances';

    /** the related Propel class for this table */
    const OM_CLASS = 'Relances';

    /** the related TableMap class for this table */
    const TM_CLASS = 'RelancesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the rel_id field */
    const REL_ID = 'relances.rel_id';

    /** the column name for the rel_numero field */
    const REL_NUMERO = 'relances.rel_numero';

    /** the column name for the rel_reference field */
    const REL_REFERENCE = 'relances.rel_reference';

    /** the column name for the cl_id field */
    const CL_ID = 'relances.cl_id';

    /** the column name for the date_create field */
    const DATE_CREATE = 'relances.date_create';

    /** the column name for the rel_echeance field */
    const REL_ECHEANCE = 'relances.rel_echeance';

    /** the column name for the rel_type_id field */
    const REL_TYPE_ID = 'relances.rel_type_id';

    /** the column name for the rel_parent_id field */
    const REL_PARENT_ID = 'relances.rel_parent_id';

    /** the column name for the rel_statut_id field */
    const REL_STATUT_ID = 'relances.rel_statut_id';

    /** the column name for the rel_lang field */
    const REL_LANG = 'relances.rel_lang';

    /** the column name for the rel_ct_facturation field */
    const REL_CT_FACTURATION = 'relances.rel_ct_facturation';

    /** the column name for the rel_adresse1 field */
    const REL_ADRESSE1 = 'relances.rel_adresse1';

    /** the column name for the rel_adresse2 field */
    const REL_ADRESSE2 = 'relances.rel_adresse2';

    /** the column name for the rel_adresse3 field */
    const REL_ADRESSE3 = 'relances.rel_adresse3';

    /** the column name for the rel_code_postal field */
    const REL_CODE_POSTAL = 'relances.rel_code_postal';

    /** the column name for the rel_ville field */
    const REL_VILLE = 'relances.rel_ville';

    /** the column name for the rel_pays field */
    const REL_PAYS = 'relances.rel_pays';

    /** the column name for the last_recalculation_date field */
    const LAST_RECALCULATION_DATE = 'relances.last_recalculation_date';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Relances objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Relances[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. RelancesPeer::$fieldNames[RelancesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('RelId', 'RelNumero', 'RelReference', 'ClId', 'DateCreate', 'RelEcheance', 'RelTypeId', 'RelParentId', 'RelStatutId', 'RelLang', 'RelCtFacturation', 'RelAdresse1', 'RelAdresse2', 'RelAdresse3', 'RelCodePostal', 'RelVille', 'RelPays', 'LastRecalculationDate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('relId', 'relNumero', 'relReference', 'clId', 'dateCreate', 'relEcheance', 'relTypeId', 'relParentId', 'relStatutId', 'relLang', 'relCtFacturation', 'relAdresse1', 'relAdresse2', 'relAdresse3', 'relCodePostal', 'relVille', 'relPays', 'lastRecalculationDate', ),
        BasePeer::TYPE_COLNAME => array (RelancesPeer::REL_ID, RelancesPeer::REL_NUMERO, RelancesPeer::REL_REFERENCE, RelancesPeer::CL_ID, RelancesPeer::DATE_CREATE, RelancesPeer::REL_ECHEANCE, RelancesPeer::REL_TYPE_ID, RelancesPeer::REL_PARENT_ID, RelancesPeer::REL_STATUT_ID, RelancesPeer::REL_LANG, RelancesPeer::REL_CT_FACTURATION, RelancesPeer::REL_ADRESSE1, RelancesPeer::REL_ADRESSE2, RelancesPeer::REL_ADRESSE3, RelancesPeer::REL_CODE_POSTAL, RelancesPeer::REL_VILLE, RelancesPeer::REL_PAYS, RelancesPeer::LAST_RECALCULATION_DATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REL_ID', 'REL_NUMERO', 'REL_REFERENCE', 'CL_ID', 'DATE_CREATE', 'REL_ECHEANCE', 'REL_TYPE_ID', 'REL_PARENT_ID', 'REL_STATUT_ID', 'REL_LANG', 'REL_CT_FACTURATION', 'REL_ADRESSE1', 'REL_ADRESSE2', 'REL_ADRESSE3', 'REL_CODE_POSTAL', 'REL_VILLE', 'REL_PAYS', 'LAST_RECALCULATION_DATE', ),
        BasePeer::TYPE_FIELDNAME => array ('rel_id', 'rel_numero', 'rel_reference', 'cl_id', 'date_create', 'rel_echeance', 'rel_type_id', 'rel_parent_id', 'rel_statut_id', 'rel_lang', 'rel_ct_facturation', 'rel_adresse1', 'rel_adresse2', 'rel_adresse3', 'rel_code_postal', 'rel_ville', 'rel_pays', 'last_recalculation_date', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. RelancesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('RelId' => 0, 'RelNumero' => 1, 'RelReference' => 2, 'ClId' => 3, 'DateCreate' => 4, 'RelEcheance' => 5, 'RelTypeId' => 6, 'RelParentId' => 7, 'RelStatutId' => 8, 'RelLang' => 9, 'RelCtFacturation' => 10, 'RelAdresse1' => 11, 'RelAdresse2' => 12, 'RelAdresse3' => 13, 'RelCodePostal' => 14, 'RelVille' => 15, 'RelPays' => 16, 'LastRecalculationDate' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('relId' => 0, 'relNumero' => 1, 'relReference' => 2, 'clId' => 3, 'dateCreate' => 4, 'relEcheance' => 5, 'relTypeId' => 6, 'relParentId' => 7, 'relStatutId' => 8, 'relLang' => 9, 'relCtFacturation' => 10, 'relAdresse1' => 11, 'relAdresse2' => 12, 'relAdresse3' => 13, 'relCodePostal' => 14, 'relVille' => 15, 'relPays' => 16, 'lastRecalculationDate' => 17, ),
        BasePeer::TYPE_COLNAME => array (RelancesPeer::REL_ID => 0, RelancesPeer::REL_NUMERO => 1, RelancesPeer::REL_REFERENCE => 2, RelancesPeer::CL_ID => 3, RelancesPeer::DATE_CREATE => 4, RelancesPeer::REL_ECHEANCE => 5, RelancesPeer::REL_TYPE_ID => 6, RelancesPeer::REL_PARENT_ID => 7, RelancesPeer::REL_STATUT_ID => 8, RelancesPeer::REL_LANG => 9, RelancesPeer::REL_CT_FACTURATION => 10, RelancesPeer::REL_ADRESSE1 => 11, RelancesPeer::REL_ADRESSE2 => 12, RelancesPeer::REL_ADRESSE3 => 13, RelancesPeer::REL_CODE_POSTAL => 14, RelancesPeer::REL_VILLE => 15, RelancesPeer::REL_PAYS => 16, RelancesPeer::LAST_RECALCULATION_DATE => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REL_ID' => 0, 'REL_NUMERO' => 1, 'REL_REFERENCE' => 2, 'CL_ID' => 3, 'DATE_CREATE' => 4, 'REL_ECHEANCE' => 5, 'REL_TYPE_ID' => 6, 'REL_PARENT_ID' => 7, 'REL_STATUT_ID' => 8, 'REL_LANG' => 9, 'REL_CT_FACTURATION' => 10, 'REL_ADRESSE1' => 11, 'REL_ADRESSE2' => 12, 'REL_ADRESSE3' => 13, 'REL_CODE_POSTAL' => 14, 'REL_VILLE' => 15, 'REL_PAYS' => 16, 'LAST_RECALCULATION_DATE' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('rel_id' => 0, 'rel_numero' => 1, 'rel_reference' => 2, 'cl_id' => 3, 'date_create' => 4, 'rel_echeance' => 5, 'rel_type_id' => 6, 'rel_parent_id' => 7, 'rel_statut_id' => 8, 'rel_lang' => 9, 'rel_ct_facturation' => 10, 'rel_adresse1' => 11, 'rel_adresse2' => 12, 'rel_adresse3' => 13, 'rel_code_postal' => 14, 'rel_ville' => 15, 'rel_pays' => 16, 'last_recalculation_date' => 17, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
        $toNames = RelancesPeer::getFieldNames($toType);
        $key = isset(RelancesPeer::$fieldKeys[$fromType][$name]) ? RelancesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(RelancesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, RelancesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return RelancesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. RelancesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RelancesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(RelancesPeer::REL_ID);
            $criteria->addSelectColumn(RelancesPeer::REL_NUMERO);
            $criteria->addSelectColumn(RelancesPeer::REL_REFERENCE);
            $criteria->addSelectColumn(RelancesPeer::CL_ID);
            $criteria->addSelectColumn(RelancesPeer::DATE_CREATE);
            $criteria->addSelectColumn(RelancesPeer::REL_ECHEANCE);
            $criteria->addSelectColumn(RelancesPeer::REL_TYPE_ID);
            $criteria->addSelectColumn(RelancesPeer::REL_PARENT_ID);
            $criteria->addSelectColumn(RelancesPeer::REL_STATUT_ID);
            $criteria->addSelectColumn(RelancesPeer::REL_LANG);
            $criteria->addSelectColumn(RelancesPeer::REL_CT_FACTURATION);
            $criteria->addSelectColumn(RelancesPeer::REL_ADRESSE1);
            $criteria->addSelectColumn(RelancesPeer::REL_ADRESSE2);
            $criteria->addSelectColumn(RelancesPeer::REL_ADRESSE3);
            $criteria->addSelectColumn(RelancesPeer::REL_CODE_POSTAL);
            $criteria->addSelectColumn(RelancesPeer::REL_VILLE);
            $criteria->addSelectColumn(RelancesPeer::REL_PAYS);
            $criteria->addSelectColumn(RelancesPeer::LAST_RECALCULATION_DATE);
        } else {
            $criteria->addSelectColumn($alias . '.rel_id');
            $criteria->addSelectColumn($alias . '.rel_numero');
            $criteria->addSelectColumn($alias . '.rel_reference');
            $criteria->addSelectColumn($alias . '.cl_id');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.rel_echeance');
            $criteria->addSelectColumn($alias . '.rel_type_id');
            $criteria->addSelectColumn($alias . '.rel_parent_id');
            $criteria->addSelectColumn($alias . '.rel_statut_id');
            $criteria->addSelectColumn($alias . '.rel_lang');
            $criteria->addSelectColumn($alias . '.rel_ct_facturation');
            $criteria->addSelectColumn($alias . '.rel_adresse1');
            $criteria->addSelectColumn($alias . '.rel_adresse2');
            $criteria->addSelectColumn($alias . '.rel_adresse3');
            $criteria->addSelectColumn($alias . '.rel_code_postal');
            $criteria->addSelectColumn($alias . '.rel_ville');
            $criteria->addSelectColumn($alias . '.rel_pays');
            $criteria->addSelectColumn($alias . '.last_recalculation_date');
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
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(RelancesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Relances
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RelancesPeer::doSelect($critcopy, $con);
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
        return RelancesPeer::populateObjects(RelancesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RelancesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

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
     * @param Relances $obj A Relances object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRelId();
            } // if key === null
            RelancesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Relances object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Relances) {
                $key = (string) $value->getRelId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Relances object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(RelancesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Relances Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(RelancesPeer::$instances[$key])) {
                return RelancesPeer::$instances[$key];
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
        foreach (RelancesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        RelancesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to relances
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
        $cls = RelancesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RelancesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RelancesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Relances object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RelancesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RelancesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RelancesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RelancesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RelancesPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RRelanceTypes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRRelanceTypes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RRelanceStatuts table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRRelanceStatuts(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClientFactureOptions table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClientFactureOptions(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

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
     * Selects a collection of Relances objects pre-filled with their Clients objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClients(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol = RelancesPeer::NUM_HYDRATE_COLUMNS;
        ClientsPeer::addSelectColumns($criteria);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Relances) to $obj2 (Clients)
                $obj2->addRelances($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Relances objects pre-filled with their RRelanceTypes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRRelanceTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol = RelancesPeer::NUM_HYDRATE_COLUMNS;
        RRelanceTypesPeer::addSelectColumns($criteria);

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RRelanceTypesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RRelanceTypesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RRelanceTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RRelanceTypesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Relances) to $obj2 (RRelanceTypes)
                $obj2->addRelances($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Relances objects pre-filled with their RRelanceStatuts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRRelanceStatuts(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol = RelancesPeer::NUM_HYDRATE_COLUMNS;
        RRelanceStatutsPeer::addSelectColumns($criteria);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RRelanceStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RRelanceStatutsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RRelanceStatutsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RRelanceStatutsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Relances) to $obj2 (RRelanceStatuts)
                $obj2->addRelances($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Relances objects pre-filled with their ClientFactureOptions objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClientFactureOptions(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol = RelancesPeer::NUM_HYDRATE_COLUMNS;
        ClientFactureOptionsPeer::addSelectColumns($criteria);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClientFactureOptionsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClientFactureOptionsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Relances) to $obj2 (ClientFactureOptions)
                $obj2->addRelances($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Relances objects pre-filled with their Contacts objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinContactFacturation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol = RelancesPeer::NUM_HYDRATE_COLUMNS;
        ContactsPeer::addSelectColumns($criteria);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Relances) to $obj2 (Contacts)
                $obj2->addRelances($obj1);

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
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

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
     * Selects a collection of Relances objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol2 = RelancesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        RRelanceTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RRelanceTypesPeer::NUM_HYDRATE_COLUMNS;

        RRelanceStatutsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RRelanceStatutsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Relances) to the collection in $obj2 (Clients)
                $obj2->addRelances($obj1);
            } // if joined row not null

            // Add objects for joined RRelanceTypes rows

            $key3 = RRelanceTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = RRelanceTypesPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = RRelanceTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RRelanceTypesPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Relances) to the collection in $obj3 (RRelanceTypes)
                $obj3->addRelances($obj1);
            } // if joined row not null

            // Add objects for joined RRelanceStatuts rows

            $key4 = RRelanceStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = RRelanceStatutsPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = RRelanceStatutsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RRelanceStatutsPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Relances) to the collection in $obj4 (RRelanceStatuts)
                $obj4->addRelances($obj1);
            } // if joined row not null

            // Add objects for joined ClientFactureOptions rows

            $key5 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = ClientFactureOptionsPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ClientFactureOptionsPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Relances) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addRelances($obj1);
            } // if joined row not null

            // Add objects for joined Contacts rows

            $key6 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = ContactsPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = ContactsPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ContactsPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Relances) to the collection in $obj6 (Contacts)
                $obj6->addRelances($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RRelanceTypes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRRelanceTypes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RRelanceStatuts table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRRelanceStatuts(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClientFactureOptions table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClientFactureOptions(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RelancesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

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
     * Selects a collection of Relances objects pre-filled with all related objects except Clients.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
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
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol2 = RelancesPeer::NUM_HYDRATE_COLUMNS;

        RRelanceTypesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RRelanceTypesPeer::NUM_HYDRATE_COLUMNS;

        RRelanceStatutsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RRelanceStatutsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RRelanceTypes rows

                $key2 = RRelanceTypesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RRelanceTypesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RRelanceTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RRelanceTypesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Relances) to the collection in $obj2 (RRelanceTypes)
                $obj2->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined RRelanceStatuts rows

                $key3 = RRelanceStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RRelanceStatutsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RRelanceStatutsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RRelanceStatutsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Relances) to the collection in $obj3 (RRelanceStatuts)
                $obj3->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key4 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientFactureOptionsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientFactureOptionsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Relances) to the collection in $obj4 (ClientFactureOptions)
                $obj4->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key5 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ContactsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ContactsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ContactsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Relances) to the collection in $obj5 (Contacts)
                $obj5->addRelances($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Relances objects pre-filled with all related objects except RRelanceTypes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRRelanceTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol2 = RelancesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        RRelanceStatutsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RRelanceStatutsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Relances) to the collection in $obj2 (Clients)
                $obj2->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined RRelanceStatuts rows

                $key3 = RRelanceStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RRelanceStatutsPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RRelanceStatutsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RRelanceStatutsPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Relances) to the collection in $obj3 (RRelanceStatuts)
                $obj3->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key4 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientFactureOptionsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientFactureOptionsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Relances) to the collection in $obj4 (ClientFactureOptions)
                $obj4->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key5 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ContactsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ContactsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ContactsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Relances) to the collection in $obj5 (Contacts)
                $obj5->addRelances($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Relances objects pre-filled with all related objects except RRelanceStatuts.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRRelanceStatuts(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol2 = RelancesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        RRelanceTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RRelanceTypesPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Relances) to the collection in $obj2 (Clients)
                $obj2->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined RRelanceTypes rows

                $key3 = RRelanceTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RRelanceTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RRelanceTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RRelanceTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Relances) to the collection in $obj3 (RRelanceTypes)
                $obj3->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key4 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ClientFactureOptionsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ClientFactureOptionsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Relances) to the collection in $obj4 (ClientFactureOptions)
                $obj4->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key5 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ContactsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ContactsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ContactsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Relances) to the collection in $obj5 (Contacts)
                $obj5->addRelances($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Relances objects pre-filled with all related objects except ClientFactureOptions.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClientFactureOptions(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol2 = RelancesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        RRelanceTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RRelanceTypesPeer::NUM_HYDRATE_COLUMNS;

        RRelanceStatutsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RRelanceStatutsPeer::NUM_HYDRATE_COLUMNS;

        ContactsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ContactsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_CT_FACTURATION, ContactsPeer::CT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Relances) to the collection in $obj2 (Clients)
                $obj2->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined RRelanceTypes rows

                $key3 = RRelanceTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RRelanceTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RRelanceTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RRelanceTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Relances) to the collection in $obj3 (RRelanceTypes)
                $obj3->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined RRelanceStatuts rows

                $key4 = RRelanceStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RRelanceStatutsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RRelanceStatutsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RRelanceStatutsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Relances) to the collection in $obj4 (RRelanceStatuts)
                $obj4->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined Contacts rows

                $key5 = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ContactsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ContactsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ContactsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Relances) to the collection in $obj5 (Contacts)
                $obj5->addRelances($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Relances objects pre-filled with all related objects except ContactFacturation.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Relances objects.
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
            $criteria->setDbName(RelancesPeer::DATABASE_NAME);
        }

        RelancesPeer::addSelectColumns($criteria);
        $startcol2 = RelancesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        RRelanceTypesPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RRelanceTypesPeer::NUM_HYDRATE_COLUMNS;

        RRelanceStatutsPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RRelanceStatutsPeer::NUM_HYDRATE_COLUMNS;

        ClientFactureOptionsPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ClientFactureOptionsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RelancesPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_TYPE_ID, RRelanceTypesPeer::R_REL_TYPE_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::REL_STATUT_ID, RRelanceStatutsPeer::R_REL_STATUT_ID, $join_behavior);

        $criteria->addJoin(RelancesPeer::CL_ID, ClientFactureOptionsPeer::CL_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RelancesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RelancesPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RelancesPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RelancesPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Relances) to the collection in $obj2 (Clients)
                $obj2->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined RRelanceTypes rows

                $key3 = RRelanceTypesPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RRelanceTypesPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RRelanceTypesPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RRelanceTypesPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Relances) to the collection in $obj3 (RRelanceTypes)
                $obj3->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined RRelanceStatuts rows

                $key4 = RRelanceStatutsPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = RRelanceStatutsPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = RRelanceStatutsPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RRelanceStatutsPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Relances) to the collection in $obj4 (RRelanceStatuts)
                $obj4->addRelances($obj1);

            } // if joined row is not null

                // Add objects for joined ClientFactureOptions rows

                $key5 = ClientFactureOptionsPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ClientFactureOptionsPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ClientFactureOptionsPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ClientFactureOptionsPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Relances) to the collection in $obj5 (ClientFactureOptions)
                $obj5->addRelances($obj1);

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
        return Propel::getDatabaseMap(RelancesPeer::DATABASE_NAME)->getTable(RelancesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseRelancesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseRelancesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \RelancesTableMap());
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
        return RelancesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Relances or Criteria object.
     *
     * @param      mixed $values Criteria or Relances object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Relances object
        }

        if ($criteria->containsKey(RelancesPeer::REL_ID) && $criteria->keyContainsValue(RelancesPeer::REL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RelancesPeer::REL_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Relances or Criteria object.
     *
     * @param      mixed $values Criteria or Relances object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(RelancesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RelancesPeer::REL_ID);
            $value = $criteria->remove(RelancesPeer::REL_ID);
            if ($value) {
                $selectCriteria->add(RelancesPeer::REL_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RelancesPeer::TABLE_NAME);
            }

        } else { // $values is Relances object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the relances table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(RelancesPeer::TABLE_NAME, $con, RelancesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RelancesPeer::clearInstancePool();
            RelancesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Relances or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Relances object or primary key or array of primary keys
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
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            RelancesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Relances) { // it's a model object
            // invalidate the cache for this single object
            RelancesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RelancesPeer::DATABASE_NAME);
            $criteria->add(RelancesPeer::REL_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                RelancesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(RelancesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            RelancesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Relances object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Relances $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RelancesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RelancesPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_REFERENCE))
            $columns[RelancesPeer::REL_REFERENCE] = $obj->getRelReference();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::CL_ID))
            $columns[RelancesPeer::CL_ID] = $obj->getClId();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::DATE_CREATE))
            $columns[RelancesPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_TYPE_ID))
            $columns[RelancesPeer::REL_TYPE_ID] = $obj->getRelTypeId();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_PARENT_ID))
            $columns[RelancesPeer::REL_PARENT_ID] = $obj->getRelParentId();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_STATUT_ID))
            $columns[RelancesPeer::REL_STATUT_ID] = $obj->getRelStatutId();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_LANG))
            $columns[RelancesPeer::REL_LANG] = $obj->getRelLang();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_ADRESSE1))
            $columns[RelancesPeer::REL_ADRESSE1] = $obj->getRelAdresse1();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_ADRESSE2))
            $columns[RelancesPeer::REL_ADRESSE2] = $obj->getRelAdresse2();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_ADRESSE3))
            $columns[RelancesPeer::REL_ADRESSE3] = $obj->getRelAdresse3();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_CODE_POSTAL))
            $columns[RelancesPeer::REL_CODE_POSTAL] = $obj->getRelCodePostal();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_VILLE))
            $columns[RelancesPeer::REL_VILLE] = $obj->getRelVille();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::REL_PAYS))
            $columns[RelancesPeer::REL_PAYS] = $obj->getRelPays();

        if ($obj->isNew() || $obj->isColumnModified(RelancesPeer::LAST_RECALCULATION_DATE))
            $columns[RelancesPeer::LAST_RECALCULATION_DATE] = $obj->getLastRecalculationDate();

        }

        return BasePeer::doValidate(RelancesPeer::DATABASE_NAME, RelancesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Relances
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RelancesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RelancesPeer::DATABASE_NAME);
        $criteria->add(RelancesPeer::REL_ID, $pk);

        $v = RelancesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Relances[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RelancesPeer::DATABASE_NAME);
            $criteria->add(RelancesPeer::REL_ID, $pks, Criteria::IN);
            $objs = RelancesPeer::doSelect($criteria, $con);
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
} // BaseRelancesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRelancesPeer::buildTableMap();

