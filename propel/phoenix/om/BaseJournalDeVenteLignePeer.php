<?php


/**
 * Base static class for performing query and update operations on the 'journal_de_vente_ligne' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseJournalDeVenteLignePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'journal_de_vente_ligne';

    /** the related Propel class for this table */
    const OM_CLASS = 'JournalDeVenteLigne';

    /** the related TableMap class for this table */
    const TM_CLASS = 'JournalDeVenteLigneTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the jdvl_id field */
    const JDVL_ID = 'journal_de_vente_ligne.jdvl_id';

    /** the column name for the jdvl_type field */
    const JDVL_TYPE = 'journal_de_vente_ligne.jdvl_type';

    /** the column name for the jdvl_date field */
    const JDVL_DATE = 'journal_de_vente_ligne.jdvl_date';

    /** the column name for the jdvl_journal field */
    const JDVL_JOURNAL = 'journal_de_vente_ligne.jdvl_journal';

    /** the column name for the jdvl_general field */
    const JDVL_GENERAL = 'journal_de_vente_ligne.jdvl_general';

    /** the column name for the jdvl_auxiliaire field */
    const JDVL_AUXILIAIRE = 'journal_de_vente_ligne.jdvl_auxiliaire';

    /** the column name for the jdvl_sens field */
    const JDVL_SENS = 'journal_de_vente_ligne.jdvl_sens';

    /** the column name for the jdvl_montant field */
    const JDVL_MONTANT = 'journal_de_vente_ligne.jdvl_montant';

    /** the column name for the jdvl_client field */
    const JDVL_CLIENT = 'journal_de_vente_ligne.jdvl_client';

    /** the column name for the jdvl_reference field */
    const JDVL_REFERENCE = 'journal_de_vente_ligne.jdvl_reference';

    /** the column name for the jdvl_op_id field */
    const JDVL_OP_ID = 'journal_de_vente_ligne.jdvl_op_id';

    /** the column name for the jdvl_date_echeance field */
    const JDVL_DATE_ECHEANCE = 'journal_de_vente_ligne.jdvl_date_echeance';

    /** the column name for the jdvl_section_analytique_1 field */
    const JDVL_SECTION_ANALYTIQUE_1 = 'journal_de_vente_ligne.jdvl_section_analytique_1';

    /** the column name for the jdvl_section_analytique_2 field */
    const JDVL_SECTION_ANALYTIQUE_2 = 'journal_de_vente_ligne.jdvl_section_analytique_2';

    /** the column name for the jdvl_section_analytique_3 field */
    const JDVL_SECTION_ANALYTIQUE_3 = 'journal_de_vente_ligne.jdvl_section_analytique_3';

    /** the column name for the jdvl_section_analytique_4 field */
    const JDVL_SECTION_ANALYTIQUE_4 = 'journal_de_vente_ligne.jdvl_section_analytique_4';

    /** the column name for the jdvl_section_analytique_5 field */
    const JDVL_SECTION_ANALYTIQUE_5 = 'journal_de_vente_ligne.jdvl_section_analytique_5';

    /** the column name for the jdvl_order field */
    const JDVL_ORDER = 'journal_de_vente_ligne.jdvl_order';

    /** the column name for the jdv_id field */
    const JDV_ID = 'journal_de_vente_ligne.jdv_id';

    /** the column name for the date_create field */
    const DATE_CREATE = 'journal_de_vente_ligne.date_create';

    /** the column name for the user_id field */
    const USER_ID = 'journal_de_vente_ligne.user_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of JournalDeVenteLigne objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array JournalDeVenteLigne[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. JournalDeVenteLignePeer::$fieldNames[JournalDeVenteLignePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('JdvlId', 'JdvlType', 'JdvlDate', 'JdvlJournal', 'JdvlGeneral', 'JdvlAuxiliaire', 'JdvlSens', 'JdvlMontant', 'JdvlClient', 'JdvlReference', 'JdvlOpId', 'JdvlDateEcheance', 'JdvlSectionAnalytique1', 'JdvlSectionAnalytique2', 'JdvlSectionAnalytique3', 'JdvlSectionAnalytique4', 'JdvlSectionAnalytique5', 'JdvlOrder', 'JdvId', 'DateCreate', 'UserId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('jdvlId', 'jdvlType', 'jdvlDate', 'jdvlJournal', 'jdvlGeneral', 'jdvlAuxiliaire', 'jdvlSens', 'jdvlMontant', 'jdvlClient', 'jdvlReference', 'jdvlOpId', 'jdvlDateEcheance', 'jdvlSectionAnalytique1', 'jdvlSectionAnalytique2', 'jdvlSectionAnalytique3', 'jdvlSectionAnalytique4', 'jdvlSectionAnalytique5', 'jdvlOrder', 'jdvId', 'dateCreate', 'userId', ),
        BasePeer::TYPE_COLNAME => array (JournalDeVenteLignePeer::JDVL_ID, JournalDeVenteLignePeer::JDVL_TYPE, JournalDeVenteLignePeer::JDVL_DATE, JournalDeVenteLignePeer::JDVL_JOURNAL, JournalDeVenteLignePeer::JDVL_GENERAL, JournalDeVenteLignePeer::JDVL_AUXILIAIRE, JournalDeVenteLignePeer::JDVL_SENS, JournalDeVenteLignePeer::JDVL_MONTANT, JournalDeVenteLignePeer::JDVL_CLIENT, JournalDeVenteLignePeer::JDVL_REFERENCE, JournalDeVenteLignePeer::JDVL_OP_ID, JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE, JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_1, JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_2, JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_3, JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_4, JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_5, JournalDeVenteLignePeer::JDVL_ORDER, JournalDeVenteLignePeer::JDV_ID, JournalDeVenteLignePeer::DATE_CREATE, JournalDeVenteLignePeer::USER_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('JDVL_ID', 'JDVL_TYPE', 'JDVL_DATE', 'JDVL_JOURNAL', 'JDVL_GENERAL', 'JDVL_AUXILIAIRE', 'JDVL_SENS', 'JDVL_MONTANT', 'JDVL_CLIENT', 'JDVL_REFERENCE', 'JDVL_OP_ID', 'JDVL_DATE_ECHEANCE', 'JDVL_SECTION_ANALYTIQUE_1', 'JDVL_SECTION_ANALYTIQUE_2', 'JDVL_SECTION_ANALYTIQUE_3', 'JDVL_SECTION_ANALYTIQUE_4', 'JDVL_SECTION_ANALYTIQUE_5', 'JDVL_ORDER', 'JDV_ID', 'DATE_CREATE', 'USER_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('jdvl_id', 'jdvl_type', 'jdvl_date', 'jdvl_journal', 'jdvl_general', 'jdvl_auxiliaire', 'jdvl_sens', 'jdvl_montant', 'jdvl_client', 'jdvl_reference', 'jdvl_op_id', 'jdvl_date_echeance', 'jdvl_section_analytique_1', 'jdvl_section_analytique_2', 'jdvl_section_analytique_3', 'jdvl_section_analytique_4', 'jdvl_section_analytique_5', 'jdvl_order', 'jdv_id', 'date_create', 'user_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. JournalDeVenteLignePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('JdvlId' => 0, 'JdvlType' => 1, 'JdvlDate' => 2, 'JdvlJournal' => 3, 'JdvlGeneral' => 4, 'JdvlAuxiliaire' => 5, 'JdvlSens' => 6, 'JdvlMontant' => 7, 'JdvlClient' => 8, 'JdvlReference' => 9, 'JdvlOpId' => 10, 'JdvlDateEcheance' => 11, 'JdvlSectionAnalytique1' => 12, 'JdvlSectionAnalytique2' => 13, 'JdvlSectionAnalytique3' => 14, 'JdvlSectionAnalytique4' => 15, 'JdvlSectionAnalytique5' => 16, 'JdvlOrder' => 17, 'JdvId' => 18, 'DateCreate' => 19, 'UserId' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('jdvlId' => 0, 'jdvlType' => 1, 'jdvlDate' => 2, 'jdvlJournal' => 3, 'jdvlGeneral' => 4, 'jdvlAuxiliaire' => 5, 'jdvlSens' => 6, 'jdvlMontant' => 7, 'jdvlClient' => 8, 'jdvlReference' => 9, 'jdvlOpId' => 10, 'jdvlDateEcheance' => 11, 'jdvlSectionAnalytique1' => 12, 'jdvlSectionAnalytique2' => 13, 'jdvlSectionAnalytique3' => 14, 'jdvlSectionAnalytique4' => 15, 'jdvlSectionAnalytique5' => 16, 'jdvlOrder' => 17, 'jdvId' => 18, 'dateCreate' => 19, 'userId' => 20, ),
        BasePeer::TYPE_COLNAME => array (JournalDeVenteLignePeer::JDVL_ID => 0, JournalDeVenteLignePeer::JDVL_TYPE => 1, JournalDeVenteLignePeer::JDVL_DATE => 2, JournalDeVenteLignePeer::JDVL_JOURNAL => 3, JournalDeVenteLignePeer::JDVL_GENERAL => 4, JournalDeVenteLignePeer::JDVL_AUXILIAIRE => 5, JournalDeVenteLignePeer::JDVL_SENS => 6, JournalDeVenteLignePeer::JDVL_MONTANT => 7, JournalDeVenteLignePeer::JDVL_CLIENT => 8, JournalDeVenteLignePeer::JDVL_REFERENCE => 9, JournalDeVenteLignePeer::JDVL_OP_ID => 10, JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE => 11, JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_1 => 12, JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_2 => 13, JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_3 => 14, JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_4 => 15, JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_5 => 16, JournalDeVenteLignePeer::JDVL_ORDER => 17, JournalDeVenteLignePeer::JDV_ID => 18, JournalDeVenteLignePeer::DATE_CREATE => 19, JournalDeVenteLignePeer::USER_ID => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('JDVL_ID' => 0, 'JDVL_TYPE' => 1, 'JDVL_DATE' => 2, 'JDVL_JOURNAL' => 3, 'JDVL_GENERAL' => 4, 'JDVL_AUXILIAIRE' => 5, 'JDVL_SENS' => 6, 'JDVL_MONTANT' => 7, 'JDVL_CLIENT' => 8, 'JDVL_REFERENCE' => 9, 'JDVL_OP_ID' => 10, 'JDVL_DATE_ECHEANCE' => 11, 'JDVL_SECTION_ANALYTIQUE_1' => 12, 'JDVL_SECTION_ANALYTIQUE_2' => 13, 'JDVL_SECTION_ANALYTIQUE_3' => 14, 'JDVL_SECTION_ANALYTIQUE_4' => 15, 'JDVL_SECTION_ANALYTIQUE_5' => 16, 'JDVL_ORDER' => 17, 'JDV_ID' => 18, 'DATE_CREATE' => 19, 'USER_ID' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('jdvl_id' => 0, 'jdvl_type' => 1, 'jdvl_date' => 2, 'jdvl_journal' => 3, 'jdvl_general' => 4, 'jdvl_auxiliaire' => 5, 'jdvl_sens' => 6, 'jdvl_montant' => 7, 'jdvl_client' => 8, 'jdvl_reference' => 9, 'jdvl_op_id' => 10, 'jdvl_date_echeance' => 11, 'jdvl_section_analytique_1' => 12, 'jdvl_section_analytique_2' => 13, 'jdvl_section_analytique_3' => 14, 'jdvl_section_analytique_4' => 15, 'jdvl_section_analytique_5' => 16, 'jdvl_order' => 17, 'jdv_id' => 18, 'date_create' => 19, 'user_id' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $toNames = JournalDeVenteLignePeer::getFieldNames($toType);
        $key = isset(JournalDeVenteLignePeer::$fieldKeys[$fromType][$name]) ? JournalDeVenteLignePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(JournalDeVenteLignePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, JournalDeVenteLignePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return JournalDeVenteLignePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. JournalDeVenteLignePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(JournalDeVenteLignePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_ID);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_TYPE);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_DATE);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_JOURNAL);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_GENERAL);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_AUXILIAIRE);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_SENS);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_MONTANT);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_CLIENT);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_REFERENCE);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_OP_ID);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_1);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_2);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_3);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_4);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_5);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDVL_ORDER);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::JDV_ID);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::DATE_CREATE);
            $criteria->addSelectColumn(JournalDeVenteLignePeer::USER_ID);
        } else {
            $criteria->addSelectColumn($alias . '.jdvl_id');
            $criteria->addSelectColumn($alias . '.jdvl_type');
            $criteria->addSelectColumn($alias . '.jdvl_date');
            $criteria->addSelectColumn($alias . '.jdvl_journal');
            $criteria->addSelectColumn($alias . '.jdvl_general');
            $criteria->addSelectColumn($alias . '.jdvl_auxiliaire');
            $criteria->addSelectColumn($alias . '.jdvl_sens');
            $criteria->addSelectColumn($alias . '.jdvl_montant');
            $criteria->addSelectColumn($alias . '.jdvl_client');
            $criteria->addSelectColumn($alias . '.jdvl_reference');
            $criteria->addSelectColumn($alias . '.jdvl_op_id');
            $criteria->addSelectColumn($alias . '.jdvl_date_echeance');
            $criteria->addSelectColumn($alias . '.jdvl_section_analytique_1');
            $criteria->addSelectColumn($alias . '.jdvl_section_analytique_2');
            $criteria->addSelectColumn($alias . '.jdvl_section_analytique_3');
            $criteria->addSelectColumn($alias . '.jdvl_section_analytique_4');
            $criteria->addSelectColumn($alias . '.jdvl_section_analytique_5');
            $criteria->addSelectColumn($alias . '.jdvl_order');
            $criteria->addSelectColumn($alias . '.jdv_id');
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
        $criteria->setPrimaryTableName(JournalDeVenteLignePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            JournalDeVenteLignePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(JournalDeVenteLignePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return JournalDeVenteLigne
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = JournalDeVenteLignePeer::doSelect($critcopy, $con);
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
        return JournalDeVenteLignePeer::populateObjects(JournalDeVenteLignePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            JournalDeVenteLignePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(JournalDeVenteLignePeer::DATABASE_NAME);

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
     * @param JournalDeVenteLigne $obj A JournalDeVenteLigne object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getJdvlId();
            } // if key === null
            JournalDeVenteLignePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A JournalDeVenteLigne object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof JournalDeVenteLigne) {
                $key = (string) $value->getJdvlId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or JournalDeVenteLigne object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(JournalDeVenteLignePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return JournalDeVenteLigne Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(JournalDeVenteLignePeer::$instances[$key])) {
                return JournalDeVenteLignePeer::$instances[$key];
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
        foreach (JournalDeVenteLignePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        JournalDeVenteLignePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to journal_de_vente_ligne
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

        return (string) $row[$startcol];
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
        $cls = JournalDeVenteLignePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = JournalDeVenteLignePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = JournalDeVenteLignePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                JournalDeVenteLignePeer::addInstanceToPool($obj, $key);
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
     * @return array (JournalDeVenteLigne object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = JournalDeVenteLignePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = JournalDeVenteLignePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + JournalDeVenteLignePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = JournalDeVenteLignePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            JournalDeVenteLignePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related JournalDeVente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinJournalDeVente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(JournalDeVenteLignePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            JournalDeVenteLignePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(JournalDeVenteLignePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(JournalDeVenteLignePeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

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
     * Selects a collection of JournalDeVenteLigne objects pre-filled with their JournalDeVente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of JournalDeVenteLigne objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinJournalDeVente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(JournalDeVenteLignePeer::DATABASE_NAME);
        }

        JournalDeVenteLignePeer::addSelectColumns($criteria);
        $startcol = JournalDeVenteLignePeer::NUM_HYDRATE_COLUMNS;
        JournalDeVentePeer::addSelectColumns($criteria);

        $criteria->addJoin(JournalDeVenteLignePeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = JournalDeVenteLignePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = JournalDeVenteLignePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = JournalDeVenteLignePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                JournalDeVenteLignePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = JournalDeVentePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = JournalDeVentePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    JournalDeVentePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (JournalDeVenteLigne) to $obj2 (JournalDeVente)
                $obj2->addJournalDeVenteLigne($obj1);

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
        $criteria->setPrimaryTableName(JournalDeVenteLignePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            JournalDeVenteLignePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(JournalDeVenteLignePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(JournalDeVenteLignePeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

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
     * Selects a collection of JournalDeVenteLigne objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of JournalDeVenteLigne objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(JournalDeVenteLignePeer::DATABASE_NAME);
        }

        JournalDeVenteLignePeer::addSelectColumns($criteria);
        $startcol2 = JournalDeVenteLignePeer::NUM_HYDRATE_COLUMNS;

        JournalDeVentePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + JournalDeVentePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(JournalDeVenteLignePeer::JDV_ID, JournalDeVentePeer::JDV_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = JournalDeVenteLignePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = JournalDeVenteLignePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = JournalDeVenteLignePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                JournalDeVenteLignePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined JournalDeVente rows

            $key2 = JournalDeVentePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = JournalDeVentePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = JournalDeVentePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    JournalDeVentePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (JournalDeVenteLigne) to the collection in $obj2 (JournalDeVente)
                $obj2->addJournalDeVenteLigne($obj1);
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
        return Propel::getDatabaseMap(JournalDeVenteLignePeer::DATABASE_NAME)->getTable(JournalDeVenteLignePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseJournalDeVenteLignePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseJournalDeVenteLignePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \JournalDeVenteLigneTableMap());
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
        return JournalDeVenteLignePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a JournalDeVenteLigne or Criteria object.
     *
     * @param      mixed $values Criteria or JournalDeVenteLigne object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from JournalDeVenteLigne object
        }


        // Set the correct dbName
        $criteria->setDbName(JournalDeVenteLignePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a JournalDeVenteLigne or Criteria object.
     *
     * @param      mixed $values Criteria or JournalDeVenteLigne object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(JournalDeVenteLignePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(JournalDeVenteLignePeer::JDVL_ID);
            $value = $criteria->remove(JournalDeVenteLignePeer::JDVL_ID);
            if ($value) {
                $selectCriteria->add(JournalDeVenteLignePeer::JDVL_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(JournalDeVenteLignePeer::TABLE_NAME);
            }

        } else { // $values is JournalDeVenteLigne object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(JournalDeVenteLignePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the journal_de_vente_ligne table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(JournalDeVenteLignePeer::TABLE_NAME, $con, JournalDeVenteLignePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            JournalDeVenteLignePeer::clearInstancePool();
            JournalDeVenteLignePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a JournalDeVenteLigne or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or JournalDeVenteLigne object or primary key or array of primary keys
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
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            JournalDeVenteLignePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof JournalDeVenteLigne) { // it's a model object
            // invalidate the cache for this single object
            JournalDeVenteLignePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(JournalDeVenteLignePeer::DATABASE_NAME);
            $criteria->add(JournalDeVenteLignePeer::JDVL_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                JournalDeVenteLignePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(JournalDeVenteLignePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            JournalDeVenteLignePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given JournalDeVenteLigne object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param JournalDeVenteLigne $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(JournalDeVenteLignePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(JournalDeVenteLignePeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_TYPE))
            $columns[JournalDeVenteLignePeer::JDVL_TYPE] = $obj->getJdvlType();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_DATE))
            $columns[JournalDeVenteLignePeer::JDVL_DATE] = $obj->getJdvlDate();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_JOURNAL))
            $columns[JournalDeVenteLignePeer::JDVL_JOURNAL] = $obj->getJdvlJournal();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_GENERAL))
            $columns[JournalDeVenteLignePeer::JDVL_GENERAL] = $obj->getJdvlGeneral();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_AUXILIAIRE))
            $columns[JournalDeVenteLignePeer::JDVL_AUXILIAIRE] = $obj->getJdvlAuxiliaire();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_SENS))
            $columns[JournalDeVenteLignePeer::JDVL_SENS] = $obj->getJdvlSens();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_MONTANT))
            $columns[JournalDeVenteLignePeer::JDVL_MONTANT] = $obj->getJdvlMontant();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_CLIENT))
            $columns[JournalDeVenteLignePeer::JDVL_CLIENT] = $obj->getJdvlClient();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_REFERENCE))
            $columns[JournalDeVenteLignePeer::JDVL_REFERENCE] = $obj->getJdvlReference();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_OP_ID))
            $columns[JournalDeVenteLignePeer::JDVL_OP_ID] = $obj->getJdvlOpId();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE))
            $columns[JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE] = $obj->getJdvlDateEcheance();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_1))
            $columns[JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_1] = $obj->getJdvlSectionAnalytique1();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_2))
            $columns[JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_2] = $obj->getJdvlSectionAnalytique2();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_3))
            $columns[JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_3] = $obj->getJdvlSectionAnalytique3();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_4))
            $columns[JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_4] = $obj->getJdvlSectionAnalytique4();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_5))
            $columns[JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_5] = $obj->getJdvlSectionAnalytique5();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDVL_ORDER))
            $columns[JournalDeVenteLignePeer::JDVL_ORDER] = $obj->getJdvlOrder();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::JDV_ID))
            $columns[JournalDeVenteLignePeer::JDV_ID] = $obj->getJdvId();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::DATE_CREATE))
            $columns[JournalDeVenteLignePeer::DATE_CREATE] = $obj->getDateCreate();

        if ($obj->isNew() || $obj->isColumnModified(JournalDeVenteLignePeer::USER_ID))
            $columns[JournalDeVenteLignePeer::USER_ID] = $obj->getUserId();

        }

        return BasePeer::doValidate(JournalDeVenteLignePeer::DATABASE_NAME, JournalDeVenteLignePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return JournalDeVenteLigne
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = JournalDeVenteLignePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(JournalDeVenteLignePeer::DATABASE_NAME);
        $criteria->add(JournalDeVenteLignePeer::JDVL_ID, $pk);

        $v = JournalDeVenteLignePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return JournalDeVenteLigne[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(JournalDeVenteLignePeer::DATABASE_NAME);
            $criteria->add(JournalDeVenteLignePeer::JDVL_ID, $pks, Criteria::IN);
            $objs = JournalDeVenteLignePeer::doSelect($criteria, $con);
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
} // BaseJournalDeVenteLignePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseJournalDeVenteLignePeer::buildTableMap();

