<?php


/**
 * Base static class for performing query and update operations on the 'contacts' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseContactsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'contacts';

    /** the related Propel class for this table */
    const OM_CLASS = 'Contacts';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ContactsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the ct_id field */
    const CT_ID = 'contacts.ct_id';

    /** the column name for the cl_id field */
    const CL_ID = 'contacts.cl_id';

    /** the column name for the ct_firstname field */
    const CT_FIRSTNAME = 'contacts.ct_firstname';

    /** the column name for the ct_lastname field */
    const CT_LASTNAME = 'contacts.ct_lastname';

    /** the column name for the ct_email field */
    const CT_EMAIL = 'contacts.ct_email';

    /** the column name for the ct_phone field */
    const CT_PHONE = 'contacts.ct_phone';

    /** the column name for the ct_mobile field */
    const CT_MOBILE = 'contacts.ct_mobile';

    /** the column name for the ct_fax field */
    const CT_FAX = 'contacts.ct_fax';

    /** the column name for the ct_title field */
    const CT_TITLE = 'contacts.ct_title';

    /** the column name for the cl_site_id field */
    const CL_SITE_ID = 'contacts.cl_site_id';

    /** the column name for the ct_newsletter field */
    const CT_NEWSLETTER = 'contacts.ct_newsletter';

    /** the column name for the user_id field */
    const USER_ID = 'contacts.user_id';

    /** the column name for the user_modify field */
    const USER_MODIFY = 'contacts.user_modify';

    /** the column name for the date_create field */
    const DATE_CREATE = 'contacts.date_create';

    /** the column name for the date_modify field */
    const DATE_MODIFY = 'contacts.date_modify';

    /** the column name for the actif field */
    const ACTIF = 'contacts.actif';

    /** the column name for the ct_phone_indicatif field */
    const CT_PHONE_INDICATIF = 'contacts.ct_phone_indicatif';

    /** the column name for the ct_mobile_indicatif field */
    const CT_MOBILE_INDICATIF = 'contacts.ct_mobile_indicatif';

    /** the column name for the ct_fax_indicatif field */
    const CT_FAX_INDICATIF = 'contacts.ct_fax_indicatif';

    /** the column name for the ct_receive_fact_by_email field */
    const CT_RECEIVE_FACT_BY_EMAIL = 'contacts.ct_receive_fact_by_email';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Contacts objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Contacts[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ContactsPeer::$fieldNames[ContactsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('CtId', 'ClId', 'CtFirstname', 'CtLastname', 'CtEmail', 'CtPhone', 'CtMobile', 'CtFax', 'CtTitle', 'ClSiteId', 'CtNewsletter', 'UserId', 'UserModify', 'DateCreate', 'DateModify', 'Actif', 'CtPhoneIndicatif', 'CtMobileIndicatif', 'CtFaxIndicatif', 'CtReceiveFactByEmail', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ctId', 'clId', 'ctFirstname', 'ctLastname', 'ctEmail', 'ctPhone', 'ctMobile', 'ctFax', 'ctTitle', 'clSiteId', 'ctNewsletter', 'userId', 'userModify', 'dateCreate', 'dateModify', 'actif', 'ctPhoneIndicatif', 'ctMobileIndicatif', 'ctFaxIndicatif', 'ctReceiveFactByEmail', ),
        BasePeer::TYPE_COLNAME => array (ContactsPeer::CT_ID, ContactsPeer::CL_ID, ContactsPeer::CT_FIRSTNAME, ContactsPeer::CT_LASTNAME, ContactsPeer::CT_EMAIL, ContactsPeer::CT_PHONE, ContactsPeer::CT_MOBILE, ContactsPeer::CT_FAX, ContactsPeer::CT_TITLE, ContactsPeer::CL_SITE_ID, ContactsPeer::CT_NEWSLETTER, ContactsPeer::USER_ID, ContactsPeer::USER_MODIFY, ContactsPeer::DATE_CREATE, ContactsPeer::DATE_MODIFY, ContactsPeer::ACTIF, ContactsPeer::CT_PHONE_INDICATIF, ContactsPeer::CT_MOBILE_INDICATIF, ContactsPeer::CT_FAX_INDICATIF, ContactsPeer::CT_RECEIVE_FACT_BY_EMAIL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CT_ID', 'CL_ID', 'CT_FIRSTNAME', 'CT_LASTNAME', 'CT_EMAIL', 'CT_PHONE', 'CT_MOBILE', 'CT_FAX', 'CT_TITLE', 'CL_SITE_ID', 'CT_NEWSLETTER', 'USER_ID', 'USER_MODIFY', 'DATE_CREATE', 'DATE_MODIFY', 'ACTIF', 'CT_PHONE_INDICATIF', 'CT_MOBILE_INDICATIF', 'CT_FAX_INDICATIF', 'CT_RECEIVE_FACT_BY_EMAIL', ),
        BasePeer::TYPE_FIELDNAME => array ('ct_id', 'cl_id', 'ct_firstname', 'ct_lastname', 'ct_email', 'ct_phone', 'ct_mobile', 'ct_fax', 'ct_title', 'cl_site_id', 'ct_newsletter', 'user_id', 'user_modify', 'date_create', 'date_modify', 'actif', 'ct_phone_indicatif', 'ct_mobile_indicatif', 'ct_fax_indicatif', 'ct_receive_fact_by_email', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ContactsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('CtId' => 0, 'ClId' => 1, 'CtFirstname' => 2, 'CtLastname' => 3, 'CtEmail' => 4, 'CtPhone' => 5, 'CtMobile' => 6, 'CtFax' => 7, 'CtTitle' => 8, 'ClSiteId' => 9, 'CtNewsletter' => 10, 'UserId' => 11, 'UserModify' => 12, 'DateCreate' => 13, 'DateModify' => 14, 'Actif' => 15, 'CtPhoneIndicatif' => 16, 'CtMobileIndicatif' => 17, 'CtFaxIndicatif' => 18, 'CtReceiveFactByEmail' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ctId' => 0, 'clId' => 1, 'ctFirstname' => 2, 'ctLastname' => 3, 'ctEmail' => 4, 'ctPhone' => 5, 'ctMobile' => 6, 'ctFax' => 7, 'ctTitle' => 8, 'clSiteId' => 9, 'ctNewsletter' => 10, 'userId' => 11, 'userModify' => 12, 'dateCreate' => 13, 'dateModify' => 14, 'actif' => 15, 'ctPhoneIndicatif' => 16, 'ctMobileIndicatif' => 17, 'ctFaxIndicatif' => 18, 'ctReceiveFactByEmail' => 19, ),
        BasePeer::TYPE_COLNAME => array (ContactsPeer::CT_ID => 0, ContactsPeer::CL_ID => 1, ContactsPeer::CT_FIRSTNAME => 2, ContactsPeer::CT_LASTNAME => 3, ContactsPeer::CT_EMAIL => 4, ContactsPeer::CT_PHONE => 5, ContactsPeer::CT_MOBILE => 6, ContactsPeer::CT_FAX => 7, ContactsPeer::CT_TITLE => 8, ContactsPeer::CL_SITE_ID => 9, ContactsPeer::CT_NEWSLETTER => 10, ContactsPeer::USER_ID => 11, ContactsPeer::USER_MODIFY => 12, ContactsPeer::DATE_CREATE => 13, ContactsPeer::DATE_MODIFY => 14, ContactsPeer::ACTIF => 15, ContactsPeer::CT_PHONE_INDICATIF => 16, ContactsPeer::CT_MOBILE_INDICATIF => 17, ContactsPeer::CT_FAX_INDICATIF => 18, ContactsPeer::CT_RECEIVE_FACT_BY_EMAIL => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CT_ID' => 0, 'CL_ID' => 1, 'CT_FIRSTNAME' => 2, 'CT_LASTNAME' => 3, 'CT_EMAIL' => 4, 'CT_PHONE' => 5, 'CT_MOBILE' => 6, 'CT_FAX' => 7, 'CT_TITLE' => 8, 'CL_SITE_ID' => 9, 'CT_NEWSLETTER' => 10, 'USER_ID' => 11, 'USER_MODIFY' => 12, 'DATE_CREATE' => 13, 'DATE_MODIFY' => 14, 'ACTIF' => 15, 'CT_PHONE_INDICATIF' => 16, 'CT_MOBILE_INDICATIF' => 17, 'CT_FAX_INDICATIF' => 18, 'CT_RECEIVE_FACT_BY_EMAIL' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('ct_id' => 0, 'cl_id' => 1, 'ct_firstname' => 2, 'ct_lastname' => 3, 'ct_email' => 4, 'ct_phone' => 5, 'ct_mobile' => 6, 'ct_fax' => 7, 'ct_title' => 8, 'cl_site_id' => 9, 'ct_newsletter' => 10, 'user_id' => 11, 'user_modify' => 12, 'date_create' => 13, 'date_modify' => 14, 'actif' => 15, 'ct_phone_indicatif' => 16, 'ct_mobile_indicatif' => 17, 'ct_fax_indicatif' => 18, 'ct_receive_fact_by_email' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
        $toNames = ContactsPeer::getFieldNames($toType);
        $key = isset(ContactsPeer::$fieldKeys[$fromType][$name]) ? ContactsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ContactsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ContactsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ContactsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ContactsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ContactsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ContactsPeer::CT_ID);
            $criteria->addSelectColumn(ContactsPeer::CL_ID);
            $criteria->addSelectColumn(ContactsPeer::CT_FIRSTNAME);
            $criteria->addSelectColumn(ContactsPeer::CT_LASTNAME);
            $criteria->addSelectColumn(ContactsPeer::CT_EMAIL);
            $criteria->addSelectColumn(ContactsPeer::CT_PHONE);
            $criteria->addSelectColumn(ContactsPeer::CT_MOBILE);
            $criteria->addSelectColumn(ContactsPeer::CT_FAX);
            $criteria->addSelectColumn(ContactsPeer::CT_TITLE);
            $criteria->addSelectColumn(ContactsPeer::CL_SITE_ID);
            $criteria->addSelectColumn(ContactsPeer::CT_NEWSLETTER);
            $criteria->addSelectColumn(ContactsPeer::USER_ID);
            $criteria->addSelectColumn(ContactsPeer::USER_MODIFY);
            $criteria->addSelectColumn(ContactsPeer::DATE_CREATE);
            $criteria->addSelectColumn(ContactsPeer::DATE_MODIFY);
            $criteria->addSelectColumn(ContactsPeer::ACTIF);
            $criteria->addSelectColumn(ContactsPeer::CT_PHONE_INDICATIF);
            $criteria->addSelectColumn(ContactsPeer::CT_MOBILE_INDICATIF);
            $criteria->addSelectColumn(ContactsPeer::CT_FAX_INDICATIF);
            $criteria->addSelectColumn(ContactsPeer::CT_RECEIVE_FACT_BY_EMAIL);
        } else {
            $criteria->addSelectColumn($alias . '.ct_id');
            $criteria->addSelectColumn($alias . '.cl_id');
            $criteria->addSelectColumn($alias . '.ct_firstname');
            $criteria->addSelectColumn($alias . '.ct_lastname');
            $criteria->addSelectColumn($alias . '.ct_email');
            $criteria->addSelectColumn($alias . '.ct_phone');
            $criteria->addSelectColumn($alias . '.ct_mobile');
            $criteria->addSelectColumn($alias . '.ct_fax');
            $criteria->addSelectColumn($alias . '.ct_title');
            $criteria->addSelectColumn($alias . '.cl_site_id');
            $criteria->addSelectColumn($alias . '.ct_newsletter');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.user_modify');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.date_modify');
            $criteria->addSelectColumn($alias . '.actif');
            $criteria->addSelectColumn($alias . '.ct_phone_indicatif');
            $criteria->addSelectColumn($alias . '.ct_mobile_indicatif');
            $criteria->addSelectColumn($alias . '.ct_fax_indicatif');
            $criteria->addSelectColumn($alias . '.ct_receive_fact_by_email');
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
        $criteria->setPrimaryTableName(ContactsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ContactsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ContactsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Contacts
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ContactsPeer::doSelect($critcopy, $con);
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
        return ContactsPeer::populateObjects(ContactsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ContactsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ContactsPeer::DATABASE_NAME);

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
     * @param Contacts $obj A Contacts object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getCtId();
            } // if key === null
            ContactsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Contacts object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Contacts) {
                $key = (string) $value->getCtId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Contacts object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ContactsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Contacts Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ContactsPeer::$instances[$key])) {
                return ContactsPeer::$instances[$key];
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
        foreach (ContactsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ContactsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to contacts
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
        $cls = ContactsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ContactsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ContactsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ContactsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Contacts object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ContactsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ContactsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ContactsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ContactsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ContactsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related ClientSites table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClientSites(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ContactsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ContactsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ContactsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ContactsPeer::CL_SITE_ID, ClientSitesPeer::CL_SITE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClientsRelatedByClId table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinClientsRelatedByClId(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ContactsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ContactsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ContactsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ContactsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

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
     * Selects a collection of Contacts objects pre-filled with their ClientSites objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Contacts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClientSites(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ContactsPeer::DATABASE_NAME);
        }

        ContactsPeer::addSelectColumns($criteria);
        $startcol = ContactsPeer::NUM_HYDRATE_COLUMNS;
        ClientSitesPeer::addSelectColumns($criteria);

        $criteria->addJoin(ContactsPeer::CL_SITE_ID, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ContactsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ContactsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ContactsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ContactsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClientSitesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientSitesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClientSitesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Contacts) to $obj2 (ClientSites)
                $obj2->addContacts($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Contacts objects pre-filled with their Clients objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Contacts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinClientsRelatedByClId(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ContactsPeer::DATABASE_NAME);
        }

        ContactsPeer::addSelectColumns($criteria);
        $startcol = ContactsPeer::NUM_HYDRATE_COLUMNS;
        ClientsPeer::addSelectColumns($criteria);

        $criteria->addJoin(ContactsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ContactsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ContactsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ContactsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ContactsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Contacts) to $obj2 (Clients)
                $obj2->addContactsRelatedByClId($obj1);

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
        $criteria->setPrimaryTableName(ContactsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ContactsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ContactsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ContactsPeer::CL_SITE_ID, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(ContactsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

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
     * Selects a collection of Contacts objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Contacts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ContactsPeer::DATABASE_NAME);
        }

        ContactsPeer::addSelectColumns($criteria);
        $startcol2 = ContactsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ContactsPeer::CL_SITE_ID, ClientSitesPeer::CL_SITE_ID, $join_behavior);

        $criteria->addJoin(ContactsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ContactsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ContactsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ContactsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ContactsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined ClientSites rows

            $key2 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ClientSitesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientSitesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientSitesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Contacts) to the collection in $obj2 (ClientSites)
                $obj2->addContacts($obj1);
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

                // Add the $obj1 (Contacts) to the collection in $obj3 (Clients)
                $obj3->addContactsRelatedByClId($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related ClientSites table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClientSites(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ContactsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ContactsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ContactsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ContactsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ClientsRelatedByClId table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptClientsRelatedByClId(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ContactsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ContactsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ContactsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ContactsPeer::CL_SITE_ID, ClientSitesPeer::CL_SITE_ID, $join_behavior);

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
     * Selects a collection of Contacts objects pre-filled with all related objects except ClientSites.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Contacts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClientSites(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ContactsPeer::DATABASE_NAME);
        }

        ContactsPeer::addSelectColumns($criteria);
        $startcol2 = ContactsPeer::NUM_HYDRATE_COLUMNS;

        ClientsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ContactsPeer::CL_ID, ClientsPeer::CL_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ContactsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ContactsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ContactsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ContactsPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Contacts) to the collection in $obj2 (Clients)
                $obj2->addContactsRelatedByClId($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Contacts objects pre-filled with all related objects except ClientsRelatedByClId.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Contacts objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptClientsRelatedByClId(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ContactsPeer::DATABASE_NAME);
        }

        ContactsPeer::addSelectColumns($criteria);
        $startcol2 = ContactsPeer::NUM_HYDRATE_COLUMNS;

        ClientSitesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientSitesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ContactsPeer::CL_SITE_ID, ClientSitesPeer::CL_SITE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ContactsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ContactsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ContactsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ContactsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ClientSites rows

                $key2 = ClientSitesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientSitesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientSitesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientSitesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Contacts) to the collection in $obj2 (ClientSites)
                $obj2->addContacts($obj1);

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
        return Propel::getDatabaseMap(ContactsPeer::DATABASE_NAME)->getTable(ContactsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseContactsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseContactsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ContactsTableMap());
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
        return ContactsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Contacts or Criteria object.
     *
     * @param      mixed $values Criteria or Contacts object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Contacts object
        }

        if ($criteria->containsKey(ContactsPeer::CT_ID) && $criteria->keyContainsValue(ContactsPeer::CT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ContactsPeer::CT_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ContactsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Contacts or Criteria object.
     *
     * @param      mixed $values Criteria or Contacts object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ContactsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ContactsPeer::CT_ID);
            $value = $criteria->remove(ContactsPeer::CT_ID);
            if ($value) {
                $selectCriteria->add(ContactsPeer::CT_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ContactsPeer::TABLE_NAME);
            }

        } else { // $values is Contacts object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ContactsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the contacts table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ContactsPeer::TABLE_NAME, $con, ContactsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ContactsPeer::clearInstancePool();
            ContactsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Contacts or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Contacts object or primary key or array of primary keys
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
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ContactsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Contacts) { // it's a model object
            // invalidate the cache for this single object
            ContactsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ContactsPeer::DATABASE_NAME);
            $criteria->add(ContactsPeer::CT_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ContactsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ContactsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ContactsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Contacts object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Contacts $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ContactsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ContactsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CL_ID))
            $columns[ContactsPeer::CL_ID] = $obj->getClId();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_FIRSTNAME))
            $columns[ContactsPeer::CT_FIRSTNAME] = $obj->getCtFirstname();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_LASTNAME))
            $columns[ContactsPeer::CT_LASTNAME] = $obj->getCtLastname();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_EMAIL))
            $columns[ContactsPeer::CT_EMAIL] = $obj->getCtEmail();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_PHONE))
            $columns[ContactsPeer::CT_PHONE] = $obj->getCtPhone();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_MOBILE))
            $columns[ContactsPeer::CT_MOBILE] = $obj->getCtMobile();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_FAX))
            $columns[ContactsPeer::CT_FAX] = $obj->getCtFax();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_TITLE))
            $columns[ContactsPeer::CT_TITLE] = $obj->getCtTitle();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CL_SITE_ID))
            $columns[ContactsPeer::CL_SITE_ID] = $obj->getClSiteId();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_NEWSLETTER))
            $columns[ContactsPeer::CT_NEWSLETTER] = $obj->getCtNewsletter();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::USER_ID))
            $columns[ContactsPeer::USER_ID] = $obj->getUserId();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::USER_MODIFY))
            $columns[ContactsPeer::USER_MODIFY] = $obj->getUserModify();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::DATE_CREATE))
            $columns[ContactsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::DATE_MODIFY))
            $columns[ContactsPeer::DATE_MODIFY] = $obj->getDateModify();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::ACTIF))
            $columns[ContactsPeer::ACTIF] = $obj->getActif();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_PHONE_INDICATIF))
            $columns[ContactsPeer::CT_PHONE_INDICATIF] = $obj->getCtPhoneIndicatif();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_MOBILE_INDICATIF))
            $columns[ContactsPeer::CT_MOBILE_INDICATIF] = $obj->getCtMobileIndicatif();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_FAX_INDICATIF))
            $columns[ContactsPeer::CT_FAX_INDICATIF] = $obj->getCtFaxIndicatif();

        if ($obj->isNew() || $obj->isColumnModified(ContactsPeer::CT_RECEIVE_FACT_BY_EMAIL))
            $columns[ContactsPeer::CT_RECEIVE_FACT_BY_EMAIL] = $obj->getCtReceiveFactByEmail();

        }

        return BasePeer::doValidate(ContactsPeer::DATABASE_NAME, ContactsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Contacts
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ContactsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ContactsPeer::DATABASE_NAME);
        $criteria->add(ContactsPeer::CT_ID, $pk);

        $v = ContactsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Contacts[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ContactsPeer::DATABASE_NAME);
            $criteria->add(ContactsPeer::CT_ID, $pks, Criteria::IN);
            $objs = ContactsPeer::doSelect($criteria, $con);
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
} // BaseContactsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseContactsPeer::buildTableMap();

