<?php


/**
 * Base static class for performing query and update operations on the 'mails' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseMailsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'mails';

    /** the related Propel class for this table */
    const OM_CLASS = 'Mails';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MailsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the mail_id field */
    const MAIL_ID = 'mails.mail_id';

    /** the column name for the mail_entity_name field */
    const MAIL_ENTITY_NAME = 'mails.mail_entity_name';

    /** the column name for the mail_entity_id field */
    const MAIL_ENTITY_ID = 'mails.mail_entity_id';

    /** the column name for the mail_to field */
    const MAIL_TO = 'mails.mail_to';

    /** the column name for the mail_cc field */
    const MAIL_CC = 'mails.mail_cc';

    /** the column name for the mail_bcc field */
    const MAIL_BCC = 'mails.mail_bcc';

    /** the column name for the mail_subject field */
    const MAIL_SUBJECT = 'mails.mail_subject';

    /** the column name for the mail_message field */
    const MAIL_MESSAGE = 'mails.mail_message';

    /** the column name for the r_mail_type_id field */
    const R_MAIL_TYPE_ID = 'mails.r_mail_type_id';

    /** the column name for the date_create field */
    const DATE_CREATE = 'mails.date_create';

    /** the column name for the user_id field */
    const USER_ID = 'mails.user_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Mails objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Mails[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MailsPeer::$fieldNames[MailsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('MailId', 'MailEntityName', 'MailEntityId', 'MailTo', 'MailCc', 'MailBcc', 'MailSubject', 'MailMessage', 'RMailTypeId', 'DateCreate', 'UserId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('mailId', 'mailEntityName', 'mailEntityId', 'mailTo', 'mailCc', 'mailBcc', 'mailSubject', 'mailMessage', 'rMailTypeId', 'dateCreate', 'userId', ),
        BasePeer::TYPE_COLNAME => array (MailsPeer::MAIL_ID, MailsPeer::MAIL_ENTITY_NAME, MailsPeer::MAIL_ENTITY_ID, MailsPeer::MAIL_TO, MailsPeer::MAIL_CC, MailsPeer::MAIL_BCC, MailsPeer::MAIL_SUBJECT, MailsPeer::MAIL_MESSAGE, MailsPeer::R_MAIL_TYPE_ID, MailsPeer::DATE_CREATE, MailsPeer::USER_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('MAIL_ID', 'MAIL_ENTITY_NAME', 'MAIL_ENTITY_ID', 'MAIL_TO', 'MAIL_CC', 'MAIL_BCC', 'MAIL_SUBJECT', 'MAIL_MESSAGE', 'R_MAIL_TYPE_ID', 'DATE_CREATE', 'USER_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('mail_id', 'mail_entity_name', 'mail_entity_id', 'mail_to', 'mail_cc', 'mail_bcc', 'mail_subject', 'mail_message', 'r_mail_type_id', 'date_create', 'user_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MailsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('MailId' => 0, 'MailEntityName' => 1, 'MailEntityId' => 2, 'MailTo' => 3, 'MailCc' => 4, 'MailBcc' => 5, 'MailSubject' => 6, 'MailMessage' => 7, 'RMailTypeId' => 8, 'DateCreate' => 9, 'UserId' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('mailId' => 0, 'mailEntityName' => 1, 'mailEntityId' => 2, 'mailTo' => 3, 'mailCc' => 4, 'mailBcc' => 5, 'mailSubject' => 6, 'mailMessage' => 7, 'rMailTypeId' => 8, 'dateCreate' => 9, 'userId' => 10, ),
        BasePeer::TYPE_COLNAME => array (MailsPeer::MAIL_ID => 0, MailsPeer::MAIL_ENTITY_NAME => 1, MailsPeer::MAIL_ENTITY_ID => 2, MailsPeer::MAIL_TO => 3, MailsPeer::MAIL_CC => 4, MailsPeer::MAIL_BCC => 5, MailsPeer::MAIL_SUBJECT => 6, MailsPeer::MAIL_MESSAGE => 7, MailsPeer::R_MAIL_TYPE_ID => 8, MailsPeer::DATE_CREATE => 9, MailsPeer::USER_ID => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('MAIL_ID' => 0, 'MAIL_ENTITY_NAME' => 1, 'MAIL_ENTITY_ID' => 2, 'MAIL_TO' => 3, 'MAIL_CC' => 4, 'MAIL_BCC' => 5, 'MAIL_SUBJECT' => 6, 'MAIL_MESSAGE' => 7, 'R_MAIL_TYPE_ID' => 8, 'DATE_CREATE' => 9, 'USER_ID' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('mail_id' => 0, 'mail_entity_name' => 1, 'mail_entity_id' => 2, 'mail_to' => 3, 'mail_cc' => 4, 'mail_bcc' => 5, 'mail_subject' => 6, 'mail_message' => 7, 'r_mail_type_id' => 8, 'date_create' => 9, 'user_id' => 10, ),
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
        $toNames = MailsPeer::getFieldNames($toType);
        $key = isset(MailsPeer::$fieldKeys[$fromType][$name]) ? MailsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MailsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MailsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MailsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MailsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MailsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MailsPeer::MAIL_ID);
            $criteria->addSelectColumn(MailsPeer::MAIL_ENTITY_NAME);
            $criteria->addSelectColumn(MailsPeer::MAIL_ENTITY_ID);
            $criteria->addSelectColumn(MailsPeer::MAIL_TO);
            $criteria->addSelectColumn(MailsPeer::MAIL_CC);
            $criteria->addSelectColumn(MailsPeer::MAIL_BCC);
            $criteria->addSelectColumn(MailsPeer::MAIL_SUBJECT);
            $criteria->addSelectColumn(MailsPeer::MAIL_MESSAGE);
            $criteria->addSelectColumn(MailsPeer::R_MAIL_TYPE_ID);
            $criteria->addSelectColumn(MailsPeer::DATE_CREATE);
            $criteria->addSelectColumn(MailsPeer::USER_ID);
        } else {
            $criteria->addSelectColumn($alias . '.mail_id');
            $criteria->addSelectColumn($alias . '.mail_entity_name');
            $criteria->addSelectColumn($alias . '.mail_entity_id');
            $criteria->addSelectColumn($alias . '.mail_to');
            $criteria->addSelectColumn($alias . '.mail_cc');
            $criteria->addSelectColumn($alias . '.mail_bcc');
            $criteria->addSelectColumn($alias . '.mail_subject');
            $criteria->addSelectColumn($alias . '.mail_message');
            $criteria->addSelectColumn($alias . '.r_mail_type_id');
            $criteria->addSelectColumn($alias . '.date_create');
            $criteria->addSelectColumn($alias . '.user_id');
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
        $criteria->setPrimaryTableName(MailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MailsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Mails
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MailsPeer::doSelect($critcopy, $con);
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
        return MailsPeer::populateObjects(MailsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MailsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MailsPeer::DATABASE_NAME);

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
     * @param Mails $obj A Mails object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getMailId();
            } // if key === null
            MailsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Mails object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Mails) {
                $key = (string) $value->getMailId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Mails object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MailsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Mails Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MailsPeer::$instances[$key])) {
                return MailsPeer::$instances[$key];
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
        foreach (MailsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MailsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to mails
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
        $cls = MailsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MailsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MailsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Mails object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MailsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MailsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MailsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MailsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MailsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related RMailTypes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRMailTypes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(MailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MailsPeer::R_MAIL_TYPE_ID, RMailTypesPeer::R_MAIL_TYPE_ID, $join_behavior);

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
     * Selects a collection of Mails objects pre-filled with their RMailTypes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Mails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRMailTypes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(MailsPeer::DATABASE_NAME);
        }

        MailsPeer::addSelectColumns($criteria);
        $startcol = MailsPeer::NUM_HYDRATE_COLUMNS;
        RMailTypesPeer::addSelectColumns($criteria);

        $criteria->addJoin(MailsPeer::R_MAIL_TYPE_ID, RMailTypesPeer::R_MAIL_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = MailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MailsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RMailTypesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RMailTypesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RMailTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RMailTypesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Mails) to $obj2 (RMailTypes)
                $obj2->addMails($obj1);

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
        $criteria->setPrimaryTableName(MailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(MailsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MailsPeer::R_MAIL_TYPE_ID, RMailTypesPeer::R_MAIL_TYPE_ID, $join_behavior);

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
     * Selects a collection of Mails objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Mails objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(MailsPeer::DATABASE_NAME);
        }

        MailsPeer::addSelectColumns($criteria);
        $startcol2 = MailsPeer::NUM_HYDRATE_COLUMNS;

        RMailTypesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RMailTypesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(MailsPeer::R_MAIL_TYPE_ID, RMailTypesPeer::R_MAIL_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MailsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = MailsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MailsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined RMailTypes rows

            $key2 = RMailTypesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = RMailTypesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RMailTypesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RMailTypesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Mails) to the collection in $obj2 (RMailTypes)
                $obj2->addMails($obj1);
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
        return Propel::getDatabaseMap(MailsPeer::DATABASE_NAME)->getTable(MailsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMailsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMailsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MailsTableMap());
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
        return MailsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Mails or Criteria object.
     *
     * @param      mixed $values Criteria or Mails object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Mails object
        }

        if ($criteria->containsKey(MailsPeer::MAIL_ID) && $criteria->keyContainsValue(MailsPeer::MAIL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MailsPeer::MAIL_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(MailsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Mails or Criteria object.
     *
     * @param      mixed $values Criteria or Mails object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MailsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MailsPeer::MAIL_ID);
            $value = $criteria->remove(MailsPeer::MAIL_ID);
            if ($value) {
                $selectCriteria->add(MailsPeer::MAIL_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MailsPeer::TABLE_NAME);
            }

        } else { // $values is Mails object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MailsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the mails table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MailsPeer::TABLE_NAME, $con, MailsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MailsPeer::clearInstancePool();
            MailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Mails or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Mails object or primary key or array of primary keys
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
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MailsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Mails) { // it's a model object
            // invalidate the cache for this single object
            MailsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MailsPeer::DATABASE_NAME);
            $criteria->add(MailsPeer::MAIL_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                MailsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(MailsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Mails object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Mails $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MailsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MailsPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(MailsPeer::MAIL_ENTITY_NAME))
            $columns[MailsPeer::MAIL_ENTITY_NAME] = $obj->getMailEntityName();

        if ($obj->isNew() || $obj->isColumnModified(MailsPeer::MAIL_ENTITY_ID))
            $columns[MailsPeer::MAIL_ENTITY_ID] = $obj->getMailEntityId();

        if ($obj->isNew() || $obj->isColumnModified(MailsPeer::MAIL_TO))
            $columns[MailsPeer::MAIL_TO] = $obj->getMailTo();

        if ($obj->isNew() || $obj->isColumnModified(MailsPeer::MAIL_CC))
            $columns[MailsPeer::MAIL_CC] = $obj->getMailCc();

        if ($obj->isNew() || $obj->isColumnModified(MailsPeer::MAIL_BCC))
            $columns[MailsPeer::MAIL_BCC] = $obj->getMailBcc();

        if ($obj->isNew() || $obj->isColumnModified(MailsPeer::MAIL_SUBJECT))
            $columns[MailsPeer::MAIL_SUBJECT] = $obj->getMailSubject();

        if ($obj->isNew() || $obj->isColumnModified(MailsPeer::MAIL_MESSAGE))
            $columns[MailsPeer::MAIL_MESSAGE] = $obj->getMailMessage();

        if ($obj->isNew() || $obj->isColumnModified(MailsPeer::R_MAIL_TYPE_ID))
            $columns[MailsPeer::R_MAIL_TYPE_ID] = $obj->getRMailTypeId();

        if ($obj->isNew() || $obj->isColumnModified(MailsPeer::DATE_CREATE))
            $columns[MailsPeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(MailsPeer::USER_ID))
            $columns[MailsPeer::USER_ID] = $obj->getUserId();

        }

        return BasePeer::doValidate(MailsPeer::DATABASE_NAME, MailsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Mails
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MailsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MailsPeer::DATABASE_NAME);
        $criteria->add(MailsPeer::MAIL_ID, $pk);

        $v = MailsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Mails[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MailsPeer::DATABASE_NAME);
            $criteria->add(MailsPeer::MAIL_ID, $pks, Criteria::IN);
            $objs = MailsPeer::doSelect($criteria, $con);
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
} // BaseMailsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMailsPeer::buildTableMap();

