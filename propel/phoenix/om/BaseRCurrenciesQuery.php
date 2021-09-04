<?php


/**
 * Base class that represents a query for the 'r_currencies' table.
 *
 *
 *
 * @method RCurrenciesQuery orderByRCurrencyId($order = Criteria::ASC) Order by the r_currency_id column
 * @method RCurrenciesQuery orderByRCurrencyIsoCode($order = Criteria::ASC) Order by the r_currency_iso_code column
 * @method RCurrenciesQuery orderByRCurrencyLabel($order = Criteria::ASC) Order by the r_currency_label column
 * @method RCurrenciesQuery orderByRCurrencyActif($order = Criteria::ASC) Order by the r_currency_actif column
 *
 * @method RCurrenciesQuery groupByRCurrencyId() Group by the r_currency_id column
 * @method RCurrenciesQuery groupByRCurrencyIsoCode() Group by the r_currency_iso_code column
 * @method RCurrenciesQuery groupByRCurrencyLabel() Group by the r_currency_label column
 * @method RCurrenciesQuery groupByRCurrencyActif() Group by the r_currency_actif column
 *
 * @method RCurrenciesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RCurrenciesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RCurrenciesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RCurrenciesQuery leftJoinOperationPrimes($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrimes relation
 * @method RCurrenciesQuery rightJoinOperationPrimes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrimes relation
 * @method RCurrenciesQuery innerJoinOperationPrimes($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrimes relation
 *
 * @method RCurrenciesQuery leftJoinRCountries($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCountries relation
 * @method RCurrenciesQuery rightJoinRCountries($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCountries relation
 * @method RCurrenciesQuery innerJoinRCountries($relationAlias = null) Adds a INNER JOIN clause to the query using the RCountries relation
 *
 * @method RCurrenciesQuery leftJoinROperationTypeSubTplCurrencies($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplCurrencies relation
 * @method RCurrenciesQuery rightJoinROperationTypeSubTplCurrencies($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplCurrencies relation
 * @method RCurrenciesQuery innerJoinROperationTypeSubTplCurrencies($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplCurrencies relation
 *
 * @method RCurrencies findOne(PropelPDO $con = null) Return the first RCurrencies matching the query
 * @method RCurrencies findOneOrCreate(PropelPDO $con = null) Return the first RCurrencies matching the query, or a new RCurrencies object populated from the query conditions when no match is found
 *
 * @method RCurrencies findOneByRCurrencyIsoCode(string $r_currency_iso_code) Return the first RCurrencies filtered by the r_currency_iso_code column
 * @method RCurrencies findOneByRCurrencyLabel(string $r_currency_label) Return the first RCurrencies filtered by the r_currency_label column
 * @method RCurrencies findOneByRCurrencyActif(int $r_currency_actif) Return the first RCurrencies filtered by the r_currency_actif column
 *
 * @method array findByRCurrencyId(int $r_currency_id) Return RCurrencies objects filtered by the r_currency_id column
 * @method array findByRCurrencyIsoCode(string $r_currency_iso_code) Return RCurrencies objects filtered by the r_currency_iso_code column
 * @method array findByRCurrencyLabel(string $r_currency_label) Return RCurrencies objects filtered by the r_currency_label column
 * @method array findByRCurrencyActif(int $r_currency_actif) Return RCurrencies objects filtered by the r_currency_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRCurrenciesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRCurrenciesQuery object.
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
            $modelName = 'RCurrencies';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RCurrenciesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RCurrenciesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RCurrenciesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RCurrenciesQuery) {
            return $criteria;
        }
        $query = new RCurrenciesQuery(null, null, $modelAlias);

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
     * @return   RCurrencies|RCurrencies[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RCurrenciesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RCurrenciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RCurrencies A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRCurrencyId($key, $con = null)
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
     * @return                 RCurrencies A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_currency_id`, `r_currency_iso_code`, `r_currency_label`, `r_currency_actif` FROM `r_currencies` WHERE `r_currency_id` = :p0';
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
            $obj = new RCurrencies();
            $obj->hydrate($row);
            RCurrenciesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RCurrencies|RCurrencies[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RCurrencies[]|mixed the list of results, formatted by the current formatter
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
     * @return RCurrenciesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RCurrenciesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_currency_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRCurrencyId(1234); // WHERE r_currency_id = 1234
     * $query->filterByRCurrencyId(array(12, 34)); // WHERE r_currency_id IN (12, 34)
     * $query->filterByRCurrencyId(array('min' => 12)); // WHERE r_currency_id >= 12
     * $query->filterByRCurrencyId(array('max' => 12)); // WHERE r_currency_id <= 12
     * </code>
     *
     * @param     mixed $rCurrencyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCurrenciesQuery The current query, for fluid interface
     */
    public function filterByRCurrencyId($rCurrencyId = null, $comparison = null)
    {
        if (is_array($rCurrencyId)) {
            $useMinMax = false;
            if (isset($rCurrencyId['min'])) {
                $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ID, $rCurrencyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCurrencyId['max'])) {
                $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ID, $rCurrencyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ID, $rCurrencyId, $comparison);
    }

    /**
     * Filter the query on the r_currency_iso_code column
     *
     * Example usage:
     * <code>
     * $query->filterByRCurrencyIsoCode('fooValue');   // WHERE r_currency_iso_code = 'fooValue'
     * $query->filterByRCurrencyIsoCode('%fooValue%'); // WHERE r_currency_iso_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCurrencyIsoCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCurrenciesQuery The current query, for fluid interface
     */
    public function filterByRCurrencyIsoCode($rCurrencyIsoCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCurrencyIsoCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rCurrencyIsoCode)) {
                $rCurrencyIsoCode = str_replace('*', '%', $rCurrencyIsoCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ISO_CODE, $rCurrencyIsoCode, $comparison);
    }

    /**
     * Filter the query on the r_currency_label column
     *
     * Example usage:
     * <code>
     * $query->filterByRCurrencyLabel('fooValue');   // WHERE r_currency_label = 'fooValue'
     * $query->filterByRCurrencyLabel('%fooValue%'); // WHERE r_currency_label LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCurrencyLabel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCurrenciesQuery The current query, for fluid interface
     */
    public function filterByRCurrencyLabel($rCurrencyLabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCurrencyLabel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rCurrencyLabel)) {
                $rCurrencyLabel = str_replace('*', '%', $rCurrencyLabel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_LABEL, $rCurrencyLabel, $comparison);
    }

    /**
     * Filter the query on the r_currency_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRCurrencyActif(1234); // WHERE r_currency_actif = 1234
     * $query->filterByRCurrencyActif(array(12, 34)); // WHERE r_currency_actif IN (12, 34)
     * $query->filterByRCurrencyActif(array('min' => 12)); // WHERE r_currency_actif >= 12
     * $query->filterByRCurrencyActif(array('max' => 12)); // WHERE r_currency_actif <= 12
     * </code>
     *
     * @param     mixed $rCurrencyActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCurrenciesQuery The current query, for fluid interface
     */
    public function filterByRCurrencyActif($rCurrencyActif = null, $comparison = null)
    {
        if (is_array($rCurrencyActif)) {
            $useMinMax = false;
            if (isset($rCurrencyActif['min'])) {
                $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ACTIF, $rCurrencyActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCurrencyActif['max'])) {
                $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ACTIF, $rCurrencyActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ACTIF, $rCurrencyActif, $comparison);
    }

    /**
     * Filter the query by a related OperationPrimes object
     *
     * @param   OperationPrimes|PropelObjectCollection $operationPrimes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCurrenciesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrimes($operationPrimes, $comparison = null)
    {
        if ($operationPrimes instanceof OperationPrimes) {
            return $this
                ->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ID, $operationPrimes->getOperationPrimeCurrencyId(), $comparison);
        } elseif ($operationPrimes instanceof PropelObjectCollection) {
            return $this
                ->useOperationPrimesQuery()
                ->filterByPrimaryKeys($operationPrimes->getPrimaryKeys())
                ->endUse();
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
     * @return RCurrenciesQuery The current query, for fluid interface
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
     * @param   RCountries|PropelObjectCollection $rCountries  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCurrenciesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCountries($rCountries, $comparison = null)
    {
        if ($rCountries instanceof RCountries) {
            return $this
                ->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ID, $rCountries->getRCountryRCurrencyId(), $comparison);
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
     * @return RCurrenciesQuery The current query, for fluid interface
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
     * Filter the query by a related ROperationTypeSubTplCurrencies object
     *
     * @param   ROperationTypeSubTplCurrencies|PropelObjectCollection $rOperationTypeSubTplCurrencies  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCurrenciesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplCurrencies($rOperationTypeSubTplCurrencies, $comparison = null)
    {
        if ($rOperationTypeSubTplCurrencies instanceof ROperationTypeSubTplCurrencies) {
            return $this
                ->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ID, $rOperationTypeSubTplCurrencies->getROperationTypeSubTplCurrencyRCurrencyId(), $comparison);
        } elseif ($rOperationTypeSubTplCurrencies instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplCurrenciesQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplCurrencies->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplCurrencies() only accepts arguments of type ROperationTypeSubTplCurrencies or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplCurrencies relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCurrenciesQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplCurrencies($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplCurrencies');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplCurrencies');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplCurrencies relation ROperationTypeSubTplCurrencies object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplCurrenciesQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplCurrenciesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplCurrencies($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplCurrencies', 'ROperationTypeSubTplCurrenciesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RCurrencies $rCurrencies Object to remove from the list of results
     *
     * @return RCurrenciesQuery The current query, for fluid interface
     */
    public function prune($rCurrencies = null)
    {
        if ($rCurrencies) {
            $this->addUsingAlias(RCurrenciesPeer::R_CURRENCY_ID, $rCurrencies->getRCurrencyId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
