<?php


/**
 * Base class that represents a query for the 'lnk_operation_prime_r_countries' table.
 *
 *
 *
 * @method LnkOperationPrimeRCountriesQuery orderByLnkOperationPrimeRCountryId($order = Criteria::ASC) Order by the lnk_operation_prime_r_country_id column
 * @method LnkOperationPrimeRCountriesQuery orderByLnkOperationPrimeRCountryOperationPrimeId($order = Criteria::ASC) Order by the lnk_operation_prime_r_country_operation_prime_id column
 * @method LnkOperationPrimeRCountriesQuery orderByLnkOperationPrimeRCountryRcountryId($order = Criteria::ASC) Order by the lnk_operation_prime_r_country_r_country_id column
 * @method LnkOperationPrimeRCountriesQuery orderByLnkOperationPrimeRCountryIsCountryLinked($order = Criteria::ASC) Order by the lnk_operation_prime_r_country_is_country_linked column
 *
 * @method LnkOperationPrimeRCountriesQuery groupByLnkOperationPrimeRCountryId() Group by the lnk_operation_prime_r_country_id column
 * @method LnkOperationPrimeRCountriesQuery groupByLnkOperationPrimeRCountryOperationPrimeId() Group by the lnk_operation_prime_r_country_operation_prime_id column
 * @method LnkOperationPrimeRCountriesQuery groupByLnkOperationPrimeRCountryRcountryId() Group by the lnk_operation_prime_r_country_r_country_id column
 * @method LnkOperationPrimeRCountriesQuery groupByLnkOperationPrimeRCountryIsCountryLinked() Group by the lnk_operation_prime_r_country_is_country_linked column
 *
 * @method LnkOperationPrimeRCountriesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkOperationPrimeRCountriesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkOperationPrimeRCountriesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkOperationPrimeRCountriesQuery leftJoinOperationPrimes($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrimes relation
 * @method LnkOperationPrimeRCountriesQuery rightJoinOperationPrimes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrimes relation
 * @method LnkOperationPrimeRCountriesQuery innerJoinOperationPrimes($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrimes relation
 *
 * @method LnkOperationPrimeRCountriesQuery leftJoinRCountries($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCountries relation
 * @method LnkOperationPrimeRCountriesQuery rightJoinRCountries($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCountries relation
 * @method LnkOperationPrimeRCountriesQuery innerJoinRCountries($relationAlias = null) Adds a INNER JOIN clause to the query using the RCountries relation
 *
 * @method LnkOperationPrimeRCountries findOne(PropelPDO $con = null) Return the first LnkOperationPrimeRCountries matching the query
 * @method LnkOperationPrimeRCountries findOneOrCreate(PropelPDO $con = null) Return the first LnkOperationPrimeRCountries matching the query, or a new LnkOperationPrimeRCountries object populated from the query conditions when no match is found
 *
 * @method LnkOperationPrimeRCountries findOneByLnkOperationPrimeRCountryOperationPrimeId(int $lnk_operation_prime_r_country_operation_prime_id) Return the first LnkOperationPrimeRCountries filtered by the lnk_operation_prime_r_country_operation_prime_id column
 * @method LnkOperationPrimeRCountries findOneByLnkOperationPrimeRCountryRcountryId(int $lnk_operation_prime_r_country_r_country_id) Return the first LnkOperationPrimeRCountries filtered by the lnk_operation_prime_r_country_r_country_id column
 * @method LnkOperationPrimeRCountries findOneByLnkOperationPrimeRCountryIsCountryLinked(int $lnk_operation_prime_r_country_is_country_linked) Return the first LnkOperationPrimeRCountries filtered by the lnk_operation_prime_r_country_is_country_linked column
 *
 * @method array findByLnkOperationPrimeRCountryId(int $lnk_operation_prime_r_country_id) Return LnkOperationPrimeRCountries objects filtered by the lnk_operation_prime_r_country_id column
 * @method array findByLnkOperationPrimeRCountryOperationPrimeId(int $lnk_operation_prime_r_country_operation_prime_id) Return LnkOperationPrimeRCountries objects filtered by the lnk_operation_prime_r_country_operation_prime_id column
 * @method array findByLnkOperationPrimeRCountryRcountryId(int $lnk_operation_prime_r_country_r_country_id) Return LnkOperationPrimeRCountries objects filtered by the lnk_operation_prime_r_country_r_country_id column
 * @method array findByLnkOperationPrimeRCountryIsCountryLinked(int $lnk_operation_prime_r_country_is_country_linked) Return LnkOperationPrimeRCountries objects filtered by the lnk_operation_prime_r_country_is_country_linked column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkOperationPrimeRCountriesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkOperationPrimeRCountriesQuery object.
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
            $modelName = 'LnkOperationPrimeRCountries';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkOperationPrimeRCountriesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkOperationPrimeRCountriesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkOperationPrimeRCountriesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkOperationPrimeRCountriesQuery) {
            return $criteria;
        }
        $query = new LnkOperationPrimeRCountriesQuery(null, null, $modelAlias);

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
     * @return   LnkOperationPrimeRCountries|LnkOperationPrimeRCountries[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkOperationPrimeRCountriesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkOperationPrimeRCountriesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 LnkOperationPrimeRCountries A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLnkOperationPrimeRCountryId($key, $con = null)
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
     * @return                 LnkOperationPrimeRCountries A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `lnk_operation_prime_r_country_id`, `lnk_operation_prime_r_country_operation_prime_id`, `lnk_operation_prime_r_country_r_country_id`, `lnk_operation_prime_r_country_is_country_linked` FROM `lnk_operation_prime_r_countries` WHERE `lnk_operation_prime_r_country_id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new LnkOperationPrimeRCountries();
            $obj->hydrate($row);
            LnkOperationPrimeRCountriesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return LnkOperationPrimeRCountries|LnkOperationPrimeRCountries[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LnkOperationPrimeRCountries[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the lnk_operation_prime_r_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkOperationPrimeRCountryId(1234); // WHERE lnk_operation_prime_r_country_id = 1234
     * $query->filterByLnkOperationPrimeRCountryId(array(12, 34)); // WHERE lnk_operation_prime_r_country_id IN (12, 34)
     * $query->filterByLnkOperationPrimeRCountryId(array('min' => 12)); // WHERE lnk_operation_prime_r_country_id >= 12
     * $query->filterByLnkOperationPrimeRCountryId(array('max' => 12)); // WHERE lnk_operation_prime_r_country_id <= 12
     * </code>
     *
     * @param     mixed $lnkOperationPrimeRCountryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     */
    public function filterByLnkOperationPrimeRCountryId($lnkOperationPrimeRCountryId = null, $comparison = null)
    {
        if (is_array($lnkOperationPrimeRCountryId)) {
            $useMinMax = false;
            if (isset($lnkOperationPrimeRCountryId['min'])) {
                $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_ID, $lnkOperationPrimeRCountryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkOperationPrimeRCountryId['max'])) {
                $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_ID, $lnkOperationPrimeRCountryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_ID, $lnkOperationPrimeRCountryId, $comparison);
    }

    /**
     * Filter the query on the lnk_operation_prime_r_country_operation_prime_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkOperationPrimeRCountryOperationPrimeId(1234); // WHERE lnk_operation_prime_r_country_operation_prime_id = 1234
     * $query->filterByLnkOperationPrimeRCountryOperationPrimeId(array(12, 34)); // WHERE lnk_operation_prime_r_country_operation_prime_id IN (12, 34)
     * $query->filterByLnkOperationPrimeRCountryOperationPrimeId(array('min' => 12)); // WHERE lnk_operation_prime_r_country_operation_prime_id >= 12
     * $query->filterByLnkOperationPrimeRCountryOperationPrimeId(array('max' => 12)); // WHERE lnk_operation_prime_r_country_operation_prime_id <= 12
     * </code>
     *
     * @see       filterByOperationPrimes()
     *
     * @param     mixed $lnkOperationPrimeRCountryOperationPrimeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     */
    public function filterByLnkOperationPrimeRCountryOperationPrimeId($lnkOperationPrimeRCountryOperationPrimeId = null, $comparison = null)
    {
        if (is_array($lnkOperationPrimeRCountryOperationPrimeId)) {
            $useMinMax = false;
            if (isset($lnkOperationPrimeRCountryOperationPrimeId['min'])) {
                $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_OPERATION_PRIME_ID, $lnkOperationPrimeRCountryOperationPrimeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkOperationPrimeRCountryOperationPrimeId['max'])) {
                $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_OPERATION_PRIME_ID, $lnkOperationPrimeRCountryOperationPrimeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_OPERATION_PRIME_ID, $lnkOperationPrimeRCountryOperationPrimeId, $comparison);
    }

    /**
     * Filter the query on the lnk_operation_prime_r_country_r_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkOperationPrimeRCountryRcountryId(1234); // WHERE lnk_operation_prime_r_country_r_country_id = 1234
     * $query->filterByLnkOperationPrimeRCountryRcountryId(array(12, 34)); // WHERE lnk_operation_prime_r_country_r_country_id IN (12, 34)
     * $query->filterByLnkOperationPrimeRCountryRcountryId(array('min' => 12)); // WHERE lnk_operation_prime_r_country_r_country_id >= 12
     * $query->filterByLnkOperationPrimeRCountryRcountryId(array('max' => 12)); // WHERE lnk_operation_prime_r_country_r_country_id <= 12
     * </code>
     *
     * @see       filterByRCountries()
     *
     * @param     mixed $lnkOperationPrimeRCountryRcountryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     */
    public function filterByLnkOperationPrimeRCountryRcountryId($lnkOperationPrimeRCountryRcountryId = null, $comparison = null)
    {
        if (is_array($lnkOperationPrimeRCountryRcountryId)) {
            $useMinMax = false;
            if (isset($lnkOperationPrimeRCountryRcountryId['min'])) {
                $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_R_COUNTRY_ID, $lnkOperationPrimeRCountryRcountryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkOperationPrimeRCountryRcountryId['max'])) {
                $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_R_COUNTRY_ID, $lnkOperationPrimeRCountryRcountryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_R_COUNTRY_ID, $lnkOperationPrimeRCountryRcountryId, $comparison);
    }

    /**
     * Filter the query on the lnk_operation_prime_r_country_is_country_linked column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkOperationPrimeRCountryIsCountryLinked(1234); // WHERE lnk_operation_prime_r_country_is_country_linked = 1234
     * $query->filterByLnkOperationPrimeRCountryIsCountryLinked(array(12, 34)); // WHERE lnk_operation_prime_r_country_is_country_linked IN (12, 34)
     * $query->filterByLnkOperationPrimeRCountryIsCountryLinked(array('min' => 12)); // WHERE lnk_operation_prime_r_country_is_country_linked >= 12
     * $query->filterByLnkOperationPrimeRCountryIsCountryLinked(array('max' => 12)); // WHERE lnk_operation_prime_r_country_is_country_linked <= 12
     * </code>
     *
     * @param     mixed $lnkOperationPrimeRCountryIsCountryLinked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     */
    public function filterByLnkOperationPrimeRCountryIsCountryLinked($lnkOperationPrimeRCountryIsCountryLinked = null, $comparison = null)
    {
        if (is_array($lnkOperationPrimeRCountryIsCountryLinked)) {
            $useMinMax = false;
            if (isset($lnkOperationPrimeRCountryIsCountryLinked['min'])) {
                $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_IS_COUNTRY_LINKED, $lnkOperationPrimeRCountryIsCountryLinked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkOperationPrimeRCountryIsCountryLinked['max'])) {
                $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_IS_COUNTRY_LINKED, $lnkOperationPrimeRCountryIsCountryLinked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_IS_COUNTRY_LINKED, $lnkOperationPrimeRCountryIsCountryLinked, $comparison);
    }

    /**
     * Filter the query by a related OperationPrimes object
     *
     * @param   OperationPrimes|PropelObjectCollection $operationPrimes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrimes($operationPrimes, $comparison = null)
    {
        if ($operationPrimes instanceof OperationPrimes) {
            return $this
                ->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_OPERATION_PRIME_ID, $operationPrimes->getOpPrimeId(), $comparison);
        } elseif ($operationPrimes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_OPERATION_PRIME_ID, $operationPrimes->toKeyValue('PrimaryKey', 'OpPrimeId'), $comparison);
        } else {
            throw new PropelException('filterByOperationPrimes() only accepts arguments of type OperationPrimes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationPrimes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     */
    public function joinOperationPrimes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationPrimes');

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
            $this->addJoinObject($join, 'OperationPrimes');
        }

        return $this;
    }

    /**
     * Use the OperationPrimes relation OperationPrimes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationPrimesQuery A secondary query class using the current class as primary query
     */
    public function useOperationPrimesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationPrimes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationPrimes', 'OperationPrimesQuery');
    }

    /**
     * Filter the query by a related RCountries object
     *
     * @param   RCountries|PropelObjectCollection $rCountries The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCountries($rCountries, $comparison = null)
    {
        if ($rCountries instanceof RCountries) {
            return $this
                ->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_R_COUNTRY_ID, $rCountries->getRCountryId(), $comparison);
        } elseif ($rCountries instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_R_COUNTRY_ID, $rCountries->toKeyValue('PrimaryKey', 'RCountryId'), $comparison);
        } else {
            throw new PropelException('filterByRCountries() only accepts arguments of type RCountries or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RCountries relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     */
    public function joinRCountries($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RCountries');

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
            $this->addJoinObject($join, 'RCountries');
        }

        return $this;
    }

    /**
     * Use the RCountries relation RCountries object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCountriesQuery A secondary query class using the current class as primary query
     */
    public function useRCountriesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRCountries($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RCountries', 'RCountriesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   LnkOperationPrimeRCountries $lnkOperationPrimeRCountries Object to remove from the list of results
     *
     * @return LnkOperationPrimeRCountriesQuery The current query, for fluid interface
     */
    public function prune($lnkOperationPrimeRCountries = null)
    {
        if ($lnkOperationPrimeRCountries) {
            $this->addUsingAlias(LnkOperationPrimeRCountriesPeer::LNK_OPERATION_PRIME_R_COUNTRY_ID, $lnkOperationPrimeRCountries->getLnkOperationPrimeRCountryId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
