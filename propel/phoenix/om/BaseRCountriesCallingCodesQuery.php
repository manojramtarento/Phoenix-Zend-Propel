<?php


/**
 * Base class that represents a query for the 'r_countries_calling_codes' table.
 *
 *
 *
 * @method RCountriesCallingCodesQuery orderByRCountryCallingCodeId($order = Criteria::ASC) Order by the r_country_calling_code_id column
 * @method RCountriesCallingCodesQuery orderByRCountryCallingCode($order = Criteria::ASC) Order by the r_country_calling_code column
 * @method RCountriesCallingCodesQuery orderByRCountryCallingCodeActif($order = Criteria::ASC) Order by the r_country_calling_code_actif column
 *
 * @method RCountriesCallingCodesQuery groupByRCountryCallingCodeId() Group by the r_country_calling_code_id column
 * @method RCountriesCallingCodesQuery groupByRCountryCallingCode() Group by the r_country_calling_code column
 * @method RCountriesCallingCodesQuery groupByRCountryCallingCodeActif() Group by the r_country_calling_code_actif column
 *
 * @method RCountriesCallingCodesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RCountriesCallingCodesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RCountriesCallingCodesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RCountriesCallingCodesQuery leftJoinRCountries($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCountries relation
 * @method RCountriesCallingCodesQuery rightJoinRCountries($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCountries relation
 * @method RCountriesCallingCodesQuery innerJoinRCountries($relationAlias = null) Adds a INNER JOIN clause to the query using the RCountries relation
 *
 * @method RCountriesCallingCodes findOne(PropelPDO $con = null) Return the first RCountriesCallingCodes matching the query
 * @method RCountriesCallingCodes findOneOrCreate(PropelPDO $con = null) Return the first RCountriesCallingCodes matching the query, or a new RCountriesCallingCodes object populated from the query conditions when no match is found
 *
 * @method RCountriesCallingCodes findOneByRCountryCallingCode(string $r_country_calling_code) Return the first RCountriesCallingCodes filtered by the r_country_calling_code column
 * @method RCountriesCallingCodes findOneByRCountryCallingCodeActif(int $r_country_calling_code_actif) Return the first RCountriesCallingCodes filtered by the r_country_calling_code_actif column
 *
 * @method array findByRCountryCallingCodeId(int $r_country_calling_code_id) Return RCountriesCallingCodes objects filtered by the r_country_calling_code_id column
 * @method array findByRCountryCallingCode(string $r_country_calling_code) Return RCountriesCallingCodes objects filtered by the r_country_calling_code column
 * @method array findByRCountryCallingCodeActif(int $r_country_calling_code_actif) Return RCountriesCallingCodes objects filtered by the r_country_calling_code_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRCountriesCallingCodesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRCountriesCallingCodesQuery object.
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
            $modelName = 'RCountriesCallingCodes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RCountriesCallingCodesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RCountriesCallingCodesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RCountriesCallingCodesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RCountriesCallingCodesQuery) {
            return $criteria;
        }
        $query = new RCountriesCallingCodesQuery(null, null, $modelAlias);

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
     * @return   RCountriesCallingCodes|RCountriesCallingCodes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RCountriesCallingCodesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RCountriesCallingCodesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RCountriesCallingCodes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRCountryCallingCodeId($key, $con = null)
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
     * @return                 RCountriesCallingCodes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_country_calling_code_id`, `r_country_calling_code`, `r_country_calling_code_actif` FROM `r_countries_calling_codes` WHERE `r_country_calling_code_id` = :p0';
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
            $obj = new RCountriesCallingCodes();
            $obj->hydrate($row);
            RCountriesCallingCodesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RCountriesCallingCodes|RCountriesCallingCodes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RCountriesCallingCodes[]|mixed the list of results, formatted by the current formatter
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
     * @return RCountriesCallingCodesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RCountriesCallingCodesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_country_calling_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryCallingCodeId(1234); // WHERE r_country_calling_code_id = 1234
     * $query->filterByRCountryCallingCodeId(array(12, 34)); // WHERE r_country_calling_code_id IN (12, 34)
     * $query->filterByRCountryCallingCodeId(array('min' => 12)); // WHERE r_country_calling_code_id >= 12
     * $query->filterByRCountryCallingCodeId(array('max' => 12)); // WHERE r_country_calling_code_id <= 12
     * </code>
     *
     * @param     mixed $rCountryCallingCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesCallingCodesQuery The current query, for fluid interface
     */
    public function filterByRCountryCallingCodeId($rCountryCallingCodeId = null, $comparison = null)
    {
        if (is_array($rCountryCallingCodeId)) {
            $useMinMax = false;
            if (isset($rCountryCallingCodeId['min'])) {
                $this->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID, $rCountryCallingCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCountryCallingCodeId['max'])) {
                $this->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID, $rCountryCallingCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID, $rCountryCallingCodeId, $comparison);
    }

    /**
     * Filter the query on the r_country_calling_code column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryCallingCode('fooValue');   // WHERE r_country_calling_code = 'fooValue'
     * $query->filterByRCountryCallingCode('%fooValue%'); // WHERE r_country_calling_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCountryCallingCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesCallingCodesQuery The current query, for fluid interface
     */
    public function filterByRCountryCallingCode($rCountryCallingCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCountryCallingCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rCountryCallingCode)) {
                $rCountryCallingCode = str_replace('*', '%', $rCountryCallingCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE, $rCountryCallingCode, $comparison);
    }

    /**
     * Filter the query on the r_country_calling_code_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryCallingCodeActif(1234); // WHERE r_country_calling_code_actif = 1234
     * $query->filterByRCountryCallingCodeActif(array(12, 34)); // WHERE r_country_calling_code_actif IN (12, 34)
     * $query->filterByRCountryCallingCodeActif(array('min' => 12)); // WHERE r_country_calling_code_actif >= 12
     * $query->filterByRCountryCallingCodeActif(array('max' => 12)); // WHERE r_country_calling_code_actif <= 12
     * </code>
     *
     * @param     mixed $rCountryCallingCodeActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesCallingCodesQuery The current query, for fluid interface
     */
    public function filterByRCountryCallingCodeActif($rCountryCallingCodeActif = null, $comparison = null)
    {
        if (is_array($rCountryCallingCodeActif)) {
            $useMinMax = false;
            if (isset($rCountryCallingCodeActif['min'])) {
                $this->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ACTIF, $rCountryCallingCodeActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCountryCallingCodeActif['max'])) {
                $this->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ACTIF, $rCountryCallingCodeActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ACTIF, $rCountryCallingCodeActif, $comparison);
    }

    /**
     * Filter the query by a related RCountries object
     *
     * @param   RCountries|PropelObjectCollection $rCountries  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCountriesCallingCodesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCountries($rCountries, $comparison = null)
    {
        if ($rCountries instanceof RCountries) {
            return $this
                ->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID, $rCountries->getRCountryRCountryCallingCodeId(), $comparison);
        } elseif ($rCountries instanceof PropelObjectCollection) {
            return $this
                ->useRCountriesQuery()
                ->filterByPrimaryKeys($rCountries->getPrimaryKeys())
                ->endUse();
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
     * @return RCountriesCallingCodesQuery The current query, for fluid interface
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
     * @param   RCountriesCallingCodes $rCountriesCallingCodes Object to remove from the list of results
     *
     * @return RCountriesCallingCodesQuery The current query, for fluid interface
     */
    public function prune($rCountriesCallingCodes = null)
    {
        if ($rCountriesCallingCodes) {
            $this->addUsingAlias(RCountriesCallingCodesPeer::R_COUNTRY_CALLING_CODE_ID, $rCountriesCallingCodes->getRCountryCallingCodeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
