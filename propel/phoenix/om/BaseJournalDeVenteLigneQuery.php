<?php


/**
 * Base class that represents a query for the 'journal_de_vente_ligne' table.
 *
 *
 *
 * @method JournalDeVenteLigneQuery orderByJdvlId($order = Criteria::ASC) Order by the jdvl_id column
 * @method JournalDeVenteLigneQuery orderByJdvlType($order = Criteria::ASC) Order by the jdvl_type column
 * @method JournalDeVenteLigneQuery orderByJdvlDate($order = Criteria::ASC) Order by the jdvl_date column
 * @method JournalDeVenteLigneQuery orderByJdvlJournal($order = Criteria::ASC) Order by the jdvl_journal column
 * @method JournalDeVenteLigneQuery orderByJdvlGeneral($order = Criteria::ASC) Order by the jdvl_general column
 * @method JournalDeVenteLigneQuery orderByJdvlAuxiliaire($order = Criteria::ASC) Order by the jdvl_auxiliaire column
 * @method JournalDeVenteLigneQuery orderByJdvlSens($order = Criteria::ASC) Order by the jdvl_sens column
 * @method JournalDeVenteLigneQuery orderByJdvlMontant($order = Criteria::ASC) Order by the jdvl_montant column
 * @method JournalDeVenteLigneQuery orderByJdvlClient($order = Criteria::ASC) Order by the jdvl_client column
 * @method JournalDeVenteLigneQuery orderByJdvlReference($order = Criteria::ASC) Order by the jdvl_reference column
 * @method JournalDeVenteLigneQuery orderByJdvlOpId($order = Criteria::ASC) Order by the jdvl_op_id column
 * @method JournalDeVenteLigneQuery orderByJdvlDateEcheance($order = Criteria::ASC) Order by the jdvl_date_echeance column
 * @method JournalDeVenteLigneQuery orderByJdvlSectionAnalytique1($order = Criteria::ASC) Order by the jdvl_section_analytique_1 column
 * @method JournalDeVenteLigneQuery orderByJdvlSectionAnalytique2($order = Criteria::ASC) Order by the jdvl_section_analytique_2 column
 * @method JournalDeVenteLigneQuery orderByJdvlSectionAnalytique3($order = Criteria::ASC) Order by the jdvl_section_analytique_3 column
 * @method JournalDeVenteLigneQuery orderByJdvlSectionAnalytique4($order = Criteria::ASC) Order by the jdvl_section_analytique_4 column
 * @method JournalDeVenteLigneQuery orderByJdvlSectionAnalytique5($order = Criteria::ASC) Order by the jdvl_section_analytique_5 column
 * @method JournalDeVenteLigneQuery orderByJdvlOrder($order = Criteria::ASC) Order by the jdvl_order column
 * @method JournalDeVenteLigneQuery orderByJdvId($order = Criteria::ASC) Order by the jdv_id column
 * @method JournalDeVenteLigneQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method JournalDeVenteLigneQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method JournalDeVenteLigneQuery groupByJdvlId() Group by the jdvl_id column
 * @method JournalDeVenteLigneQuery groupByJdvlType() Group by the jdvl_type column
 * @method JournalDeVenteLigneQuery groupByJdvlDate() Group by the jdvl_date column
 * @method JournalDeVenteLigneQuery groupByJdvlJournal() Group by the jdvl_journal column
 * @method JournalDeVenteLigneQuery groupByJdvlGeneral() Group by the jdvl_general column
 * @method JournalDeVenteLigneQuery groupByJdvlAuxiliaire() Group by the jdvl_auxiliaire column
 * @method JournalDeVenteLigneQuery groupByJdvlSens() Group by the jdvl_sens column
 * @method JournalDeVenteLigneQuery groupByJdvlMontant() Group by the jdvl_montant column
 * @method JournalDeVenteLigneQuery groupByJdvlClient() Group by the jdvl_client column
 * @method JournalDeVenteLigneQuery groupByJdvlReference() Group by the jdvl_reference column
 * @method JournalDeVenteLigneQuery groupByJdvlOpId() Group by the jdvl_op_id column
 * @method JournalDeVenteLigneQuery groupByJdvlDateEcheance() Group by the jdvl_date_echeance column
 * @method JournalDeVenteLigneQuery groupByJdvlSectionAnalytique1() Group by the jdvl_section_analytique_1 column
 * @method JournalDeVenteLigneQuery groupByJdvlSectionAnalytique2() Group by the jdvl_section_analytique_2 column
 * @method JournalDeVenteLigneQuery groupByJdvlSectionAnalytique3() Group by the jdvl_section_analytique_3 column
 * @method JournalDeVenteLigneQuery groupByJdvlSectionAnalytique4() Group by the jdvl_section_analytique_4 column
 * @method JournalDeVenteLigneQuery groupByJdvlSectionAnalytique5() Group by the jdvl_section_analytique_5 column
 * @method JournalDeVenteLigneQuery groupByJdvlOrder() Group by the jdvl_order column
 * @method JournalDeVenteLigneQuery groupByJdvId() Group by the jdv_id column
 * @method JournalDeVenteLigneQuery groupByDateCreate() Group by the date_create column
 * @method JournalDeVenteLigneQuery groupByUserId() Group by the user_id column
 *
 * @method JournalDeVenteLigneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method JournalDeVenteLigneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method JournalDeVenteLigneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method JournalDeVenteLigneQuery leftJoinJournalDeVente($relationAlias = null) Adds a LEFT JOIN clause to the query using the JournalDeVente relation
 * @method JournalDeVenteLigneQuery rightJoinJournalDeVente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the JournalDeVente relation
 * @method JournalDeVenteLigneQuery innerJoinJournalDeVente($relationAlias = null) Adds a INNER JOIN clause to the query using the JournalDeVente relation
 *
 * @method JournalDeVenteLigne findOne(PropelPDO $con = null) Return the first JournalDeVenteLigne matching the query
 * @method JournalDeVenteLigne findOneOrCreate(PropelPDO $con = null) Return the first JournalDeVenteLigne matching the query, or a new JournalDeVenteLigne object populated from the query conditions when no match is found
 *
 * @method JournalDeVenteLigne findOneByJdvlType(string $jdvl_type) Return the first JournalDeVenteLigne filtered by the jdvl_type column
 * @method JournalDeVenteLigne findOneByJdvlDate(string $jdvl_date) Return the first JournalDeVenteLigne filtered by the jdvl_date column
 * @method JournalDeVenteLigne findOneByJdvlJournal(string $jdvl_journal) Return the first JournalDeVenteLigne filtered by the jdvl_journal column
 * @method JournalDeVenteLigne findOneByJdvlGeneral(string $jdvl_general) Return the first JournalDeVenteLigne filtered by the jdvl_general column
 * @method JournalDeVenteLigne findOneByJdvlAuxiliaire(string $jdvl_auxiliaire) Return the first JournalDeVenteLigne filtered by the jdvl_auxiliaire column
 * @method JournalDeVenteLigne findOneByJdvlSens(string $jdvl_sens) Return the first JournalDeVenteLigne filtered by the jdvl_sens column
 * @method JournalDeVenteLigne findOneByJdvlMontant(string $jdvl_montant) Return the first JournalDeVenteLigne filtered by the jdvl_montant column
 * @method JournalDeVenteLigne findOneByJdvlClient(string $jdvl_client) Return the first JournalDeVenteLigne filtered by the jdvl_client column
 * @method JournalDeVenteLigne findOneByJdvlReference(string $jdvl_reference) Return the first JournalDeVenteLigne filtered by the jdvl_reference column
 * @method JournalDeVenteLigne findOneByJdvlOpId(int $jdvl_op_id) Return the first JournalDeVenteLigne filtered by the jdvl_op_id column
 * @method JournalDeVenteLigne findOneByJdvlDateEcheance(string $jdvl_date_echeance) Return the first JournalDeVenteLigne filtered by the jdvl_date_echeance column
 * @method JournalDeVenteLigne findOneByJdvlSectionAnalytique1(string $jdvl_section_analytique_1) Return the first JournalDeVenteLigne filtered by the jdvl_section_analytique_1 column
 * @method JournalDeVenteLigne findOneByJdvlSectionAnalytique2(string $jdvl_section_analytique_2) Return the first JournalDeVenteLigne filtered by the jdvl_section_analytique_2 column
 * @method JournalDeVenteLigne findOneByJdvlSectionAnalytique3(string $jdvl_section_analytique_3) Return the first JournalDeVenteLigne filtered by the jdvl_section_analytique_3 column
 * @method JournalDeVenteLigne findOneByJdvlSectionAnalytique4(string $jdvl_section_analytique_4) Return the first JournalDeVenteLigne filtered by the jdvl_section_analytique_4 column
 * @method JournalDeVenteLigne findOneByJdvlSectionAnalytique5(string $jdvl_section_analytique_5) Return the first JournalDeVenteLigne filtered by the jdvl_section_analytique_5 column
 * @method JournalDeVenteLigne findOneByJdvlOrder(int $jdvl_order) Return the first JournalDeVenteLigne filtered by the jdvl_order column
 * @method JournalDeVenteLigne findOneByJdvId(int $jdv_id) Return the first JournalDeVenteLigne filtered by the jdv_id column
 * @method JournalDeVenteLigne findOneByDateCreate(string $date_create) Return the first JournalDeVenteLigne filtered by the date_create column
 * @method JournalDeVenteLigne findOneByUserId(int $user_id) Return the first JournalDeVenteLigne filtered by the user_id column
 *
 * @method array findByJdvlId(string $jdvl_id) Return JournalDeVenteLigne objects filtered by the jdvl_id column
 * @method array findByJdvlType(string $jdvl_type) Return JournalDeVenteLigne objects filtered by the jdvl_type column
 * @method array findByJdvlDate(string $jdvl_date) Return JournalDeVenteLigne objects filtered by the jdvl_date column
 * @method array findByJdvlJournal(string $jdvl_journal) Return JournalDeVenteLigne objects filtered by the jdvl_journal column
 * @method array findByJdvlGeneral(string $jdvl_general) Return JournalDeVenteLigne objects filtered by the jdvl_general column
 * @method array findByJdvlAuxiliaire(string $jdvl_auxiliaire) Return JournalDeVenteLigne objects filtered by the jdvl_auxiliaire column
 * @method array findByJdvlSens(string $jdvl_sens) Return JournalDeVenteLigne objects filtered by the jdvl_sens column
 * @method array findByJdvlMontant(string $jdvl_montant) Return JournalDeVenteLigne objects filtered by the jdvl_montant column
 * @method array findByJdvlClient(string $jdvl_client) Return JournalDeVenteLigne objects filtered by the jdvl_client column
 * @method array findByJdvlReference(string $jdvl_reference) Return JournalDeVenteLigne objects filtered by the jdvl_reference column
 * @method array findByJdvlOpId(int $jdvl_op_id) Return JournalDeVenteLigne objects filtered by the jdvl_op_id column
 * @method array findByJdvlDateEcheance(string $jdvl_date_echeance) Return JournalDeVenteLigne objects filtered by the jdvl_date_echeance column
 * @method array findByJdvlSectionAnalytique1(string $jdvl_section_analytique_1) Return JournalDeVenteLigne objects filtered by the jdvl_section_analytique_1 column
 * @method array findByJdvlSectionAnalytique2(string $jdvl_section_analytique_2) Return JournalDeVenteLigne objects filtered by the jdvl_section_analytique_2 column
 * @method array findByJdvlSectionAnalytique3(string $jdvl_section_analytique_3) Return JournalDeVenteLigne objects filtered by the jdvl_section_analytique_3 column
 * @method array findByJdvlSectionAnalytique4(string $jdvl_section_analytique_4) Return JournalDeVenteLigne objects filtered by the jdvl_section_analytique_4 column
 * @method array findByJdvlSectionAnalytique5(string $jdvl_section_analytique_5) Return JournalDeVenteLigne objects filtered by the jdvl_section_analytique_5 column
 * @method array findByJdvlOrder(int $jdvl_order) Return JournalDeVenteLigne objects filtered by the jdvl_order column
 * @method array findByJdvId(int $jdv_id) Return JournalDeVenteLigne objects filtered by the jdv_id column
 * @method array findByDateCreate(string $date_create) Return JournalDeVenteLigne objects filtered by the date_create column
 * @method array findByUserId(int $user_id) Return JournalDeVenteLigne objects filtered by the user_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseJournalDeVenteLigneQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseJournalDeVenteLigneQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'phoenix';
        }
        if (null === $modelName) {
            $modelName = 'JournalDeVenteLigne';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new JournalDeVenteLigneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   JournalDeVenteLigneQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return JournalDeVenteLigneQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof JournalDeVenteLigneQuery) {
            return $criteria;
        }
        $query = new JournalDeVenteLigneQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   JournalDeVenteLigne|JournalDeVenteLigne[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = JournalDeVenteLignePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 JournalDeVenteLigne A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByJdvlId($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 JournalDeVenteLigne A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `jdvl_id`, `jdvl_type`, `jdvl_date`, `jdvl_journal`, `jdvl_general`, `jdvl_auxiliaire`, `jdvl_sens`, `jdvl_montant`, `jdvl_client`, `jdvl_reference`, `jdvl_op_id`, `jdvl_date_echeance`, `jdvl_section_analytique_1`, `jdvl_section_analytique_2`, `jdvl_section_analytique_3`, `jdvl_section_analytique_4`, `jdvl_section_analytique_5`, `jdvl_order`, `jdv_id`, `date_create`, `user_id` FROM `journal_de_vente_ligne` WHERE `jdvl_id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new JournalDeVenteLigne();
            $obj->hydrate($row);
            JournalDeVenteLignePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return JournalDeVenteLigne|JournalDeVenteLigne[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|JournalDeVenteLigne[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the jdvl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlId(1234); // WHERE jdvl_id = 1234
     * $query->filterByJdvlId(array(12, 34)); // WHERE jdvl_id IN (12, 34)
     * $query->filterByJdvlId(array('min' => 12)); // WHERE jdvl_id >= 12
     * $query->filterByJdvlId(array('max' => 12)); // WHERE jdvl_id <= 12
     * </code>
     *
     * @param     mixed $jdvlId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlId($jdvlId = null, $comparison = null)
    {
        if (is_array($jdvlId)) {
            $useMinMax = false;
            if (isset($jdvlId['min'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_ID, $jdvlId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jdvlId['max'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_ID, $jdvlId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_ID, $jdvlId, $comparison);
    }

    /**
     * Filter the query on the jdvl_type column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlType('fooValue');   // WHERE jdvl_type = 'fooValue'
     * $query->filterByJdvlType('%fooValue%'); // WHERE jdvl_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlType($jdvlType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlType)) {
                $jdvlType = str_replace('*', '%', $jdvlType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_TYPE, $jdvlType, $comparison);
    }

    /**
     * Filter the query on the jdvl_date column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlDate('2011-03-14'); // WHERE jdvl_date = '2011-03-14'
     * $query->filterByJdvlDate('now'); // WHERE jdvl_date = '2011-03-14'
     * $query->filterByJdvlDate(array('max' => 'yesterday')); // WHERE jdvl_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $jdvlDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlDate($jdvlDate = null, $comparison = null)
    {
        if (is_array($jdvlDate)) {
            $useMinMax = false;
            if (isset($jdvlDate['min'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_DATE, $jdvlDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jdvlDate['max'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_DATE, $jdvlDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_DATE, $jdvlDate, $comparison);
    }

    /**
     * Filter the query on the jdvl_journal column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlJournal('fooValue');   // WHERE jdvl_journal = 'fooValue'
     * $query->filterByJdvlJournal('%fooValue%'); // WHERE jdvl_journal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlJournal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlJournal($jdvlJournal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlJournal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlJournal)) {
                $jdvlJournal = str_replace('*', '%', $jdvlJournal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_JOURNAL, $jdvlJournal, $comparison);
    }

    /**
     * Filter the query on the jdvl_general column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlGeneral('fooValue');   // WHERE jdvl_general = 'fooValue'
     * $query->filterByJdvlGeneral('%fooValue%'); // WHERE jdvl_general LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlGeneral The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlGeneral($jdvlGeneral = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlGeneral)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlGeneral)) {
                $jdvlGeneral = str_replace('*', '%', $jdvlGeneral);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_GENERAL, $jdvlGeneral, $comparison);
    }

    /**
     * Filter the query on the jdvl_auxiliaire column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlAuxiliaire('fooValue');   // WHERE jdvl_auxiliaire = 'fooValue'
     * $query->filterByJdvlAuxiliaire('%fooValue%'); // WHERE jdvl_auxiliaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlAuxiliaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlAuxiliaire($jdvlAuxiliaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlAuxiliaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlAuxiliaire)) {
                $jdvlAuxiliaire = str_replace('*', '%', $jdvlAuxiliaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_AUXILIAIRE, $jdvlAuxiliaire, $comparison);
    }

    /**
     * Filter the query on the jdvl_sens column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlSens('fooValue');   // WHERE jdvl_sens = 'fooValue'
     * $query->filterByJdvlSens('%fooValue%'); // WHERE jdvl_sens LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlSens The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlSens($jdvlSens = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlSens)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlSens)) {
                $jdvlSens = str_replace('*', '%', $jdvlSens);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_SENS, $jdvlSens, $comparison);
    }

    /**
     * Filter the query on the jdvl_montant column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlMontant('fooValue');   // WHERE jdvl_montant = 'fooValue'
     * $query->filterByJdvlMontant('%fooValue%'); // WHERE jdvl_montant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlMontant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlMontant($jdvlMontant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlMontant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlMontant)) {
                $jdvlMontant = str_replace('*', '%', $jdvlMontant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_MONTANT, $jdvlMontant, $comparison);
    }

    /**
     * Filter the query on the jdvl_client column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlClient('fooValue');   // WHERE jdvl_client = 'fooValue'
     * $query->filterByJdvlClient('%fooValue%'); // WHERE jdvl_client LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlClient The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlClient($jdvlClient = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlClient)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlClient)) {
                $jdvlClient = str_replace('*', '%', $jdvlClient);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_CLIENT, $jdvlClient, $comparison);
    }

    /**
     * Filter the query on the jdvl_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlReference('fooValue');   // WHERE jdvl_reference = 'fooValue'
     * $query->filterByJdvlReference('%fooValue%'); // WHERE jdvl_reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlReference($jdvlReference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlReference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlReference)) {
                $jdvlReference = str_replace('*', '%', $jdvlReference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_REFERENCE, $jdvlReference, $comparison);
    }

    /**
     * Filter the query on the jdvl_op_id column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlOpId(1234); // WHERE jdvl_op_id = 1234
     * $query->filterByJdvlOpId(array(12, 34)); // WHERE jdvl_op_id IN (12, 34)
     * $query->filterByJdvlOpId(array('min' => 12)); // WHERE jdvl_op_id >= 12
     * $query->filterByJdvlOpId(array('max' => 12)); // WHERE jdvl_op_id <= 12
     * </code>
     *
     * @param     mixed $jdvlOpId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlOpId($jdvlOpId = null, $comparison = null)
    {
        if (is_array($jdvlOpId)) {
            $useMinMax = false;
            if (isset($jdvlOpId['min'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_OP_ID, $jdvlOpId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jdvlOpId['max'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_OP_ID, $jdvlOpId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_OP_ID, $jdvlOpId, $comparison);
    }

    /**
     * Filter the query on the jdvl_date_echeance column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlDateEcheance('2011-03-14'); // WHERE jdvl_date_echeance = '2011-03-14'
     * $query->filterByJdvlDateEcheance('now'); // WHERE jdvl_date_echeance = '2011-03-14'
     * $query->filterByJdvlDateEcheance(array('max' => 'yesterday')); // WHERE jdvl_date_echeance < '2011-03-13'
     * </code>
     *
     * @param     mixed $jdvlDateEcheance The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlDateEcheance($jdvlDateEcheance = null, $comparison = null)
    {
        if (is_array($jdvlDateEcheance)) {
            $useMinMax = false;
            if (isset($jdvlDateEcheance['min'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE, $jdvlDateEcheance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jdvlDateEcheance['max'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE, $jdvlDateEcheance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE, $jdvlDateEcheance, $comparison);
    }

    /**
     * Filter the query on the jdvl_section_analytique_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlSectionAnalytique1('fooValue');   // WHERE jdvl_section_analytique_1 = 'fooValue'
     * $query->filterByJdvlSectionAnalytique1('%fooValue%'); // WHERE jdvl_section_analytique_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlSectionAnalytique1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlSectionAnalytique1($jdvlSectionAnalytique1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlSectionAnalytique1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlSectionAnalytique1)) {
                $jdvlSectionAnalytique1 = str_replace('*', '%', $jdvlSectionAnalytique1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_1, $jdvlSectionAnalytique1, $comparison);
    }

    /**
     * Filter the query on the jdvl_section_analytique_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlSectionAnalytique2('fooValue');   // WHERE jdvl_section_analytique_2 = 'fooValue'
     * $query->filterByJdvlSectionAnalytique2('%fooValue%'); // WHERE jdvl_section_analytique_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlSectionAnalytique2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlSectionAnalytique2($jdvlSectionAnalytique2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlSectionAnalytique2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlSectionAnalytique2)) {
                $jdvlSectionAnalytique2 = str_replace('*', '%', $jdvlSectionAnalytique2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_2, $jdvlSectionAnalytique2, $comparison);
    }

    /**
     * Filter the query on the jdvl_section_analytique_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlSectionAnalytique3('fooValue');   // WHERE jdvl_section_analytique_3 = 'fooValue'
     * $query->filterByJdvlSectionAnalytique3('%fooValue%'); // WHERE jdvl_section_analytique_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlSectionAnalytique3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlSectionAnalytique3($jdvlSectionAnalytique3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlSectionAnalytique3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlSectionAnalytique3)) {
                $jdvlSectionAnalytique3 = str_replace('*', '%', $jdvlSectionAnalytique3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_3, $jdvlSectionAnalytique3, $comparison);
    }

    /**
     * Filter the query on the jdvl_section_analytique_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlSectionAnalytique4('fooValue');   // WHERE jdvl_section_analytique_4 = 'fooValue'
     * $query->filterByJdvlSectionAnalytique4('%fooValue%'); // WHERE jdvl_section_analytique_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlSectionAnalytique4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlSectionAnalytique4($jdvlSectionAnalytique4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlSectionAnalytique4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlSectionAnalytique4)) {
                $jdvlSectionAnalytique4 = str_replace('*', '%', $jdvlSectionAnalytique4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_4, $jdvlSectionAnalytique4, $comparison);
    }

    /**
     * Filter the query on the jdvl_section_analytique_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlSectionAnalytique5('fooValue');   // WHERE jdvl_section_analytique_5 = 'fooValue'
     * $query->filterByJdvlSectionAnalytique5('%fooValue%'); // WHERE jdvl_section_analytique_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jdvlSectionAnalytique5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlSectionAnalytique5($jdvlSectionAnalytique5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jdvlSectionAnalytique5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jdvlSectionAnalytique5)) {
                $jdvlSectionAnalytique5 = str_replace('*', '%', $jdvlSectionAnalytique5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_5, $jdvlSectionAnalytique5, $comparison);
    }

    /**
     * Filter the query on the jdvl_order column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvlOrder(1234); // WHERE jdvl_order = 1234
     * $query->filterByJdvlOrder(array(12, 34)); // WHERE jdvl_order IN (12, 34)
     * $query->filterByJdvlOrder(array('min' => 12)); // WHERE jdvl_order >= 12
     * $query->filterByJdvlOrder(array('max' => 12)); // WHERE jdvl_order <= 12
     * </code>
     *
     * @param     mixed $jdvlOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvlOrder($jdvlOrder = null, $comparison = null)
    {
        if (is_array($jdvlOrder)) {
            $useMinMax = false;
            if (isset($jdvlOrder['min'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_ORDER, $jdvlOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jdvlOrder['max'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_ORDER, $jdvlOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_ORDER, $jdvlOrder, $comparison);
    }

    /**
     * Filter the query on the jdv_id column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvId(1234); // WHERE jdv_id = 1234
     * $query->filterByJdvId(array(12, 34)); // WHERE jdv_id IN (12, 34)
     * $query->filterByJdvId(array('min' => 12)); // WHERE jdv_id >= 12
     * $query->filterByJdvId(array('max' => 12)); // WHERE jdv_id <= 12
     * </code>
     *
     * @see       filterByJournalDeVente()
     *
     * @param     mixed $jdvId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByJdvId($jdvId = null, $comparison = null)
    {
        if (is_array($jdvId)) {
            $useMinMax = false;
            if (isset($jdvId['min'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDV_ID, $jdvId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jdvId['max'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::JDV_ID, $jdvId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::JDV_ID, $jdvId, $comparison);
    }

    /**
     * Filter the query on the date_create column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreate('2011-03-14'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate('now'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate(array('max' => 'yesterday')); // WHERE date_create < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(JournalDeVenteLignePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVenteLignePeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query by a related JournalDeVente object
     *
     * @param   JournalDeVente|PropelObjectCollection $journalDeVente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 JournalDeVenteLigneQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByJournalDeVente($journalDeVente, $comparison = null)
    {
        if ($journalDeVente instanceof JournalDeVente) {
            return $this
                ->addUsingAlias(JournalDeVenteLignePeer::JDV_ID, $journalDeVente->getJdvId(), $comparison);
        } elseif ($journalDeVente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(JournalDeVenteLignePeer::JDV_ID, $journalDeVente->toKeyValue('PrimaryKey', 'JdvId'), $comparison);
        } else {
            throw new PropelException('filterByJournalDeVente() only accepts arguments of type JournalDeVente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the JournalDeVente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function joinJournalDeVente($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('JournalDeVente');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'JournalDeVente');
        }

        return $this;
    }

    /**
     * Use the JournalDeVente relation JournalDeVente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   JournalDeVenteQuery A secondary query class using the current class as primary query
     */
    public function useJournalDeVenteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinJournalDeVente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'JournalDeVente', 'JournalDeVenteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   JournalDeVenteLigne $journalDeVenteLigne Object to remove from the list of results
     *
     * @return JournalDeVenteLigneQuery The current query, for fluid interface
     */
    public function prune($journalDeVenteLigne = null)
    {
        if ($journalDeVenteLigne) {
            $this->addUsingAlias(JournalDeVenteLignePeer::JDVL_ID, $journalDeVenteLigne->getJdvlId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
