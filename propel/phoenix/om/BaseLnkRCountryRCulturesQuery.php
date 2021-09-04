<?php


/**
 * Base class that represents a query for the 'lnk_r_country_r_cultures' table.
 *
 *
 *
 * @method LnkRCountryRCulturesQuery orderByLnkRCountryRCultureId($order = Criteria::ASC) Order by the lnk_r_country_r_culture_id column
 * @method LnkRCountryRCulturesQuery orderByLnkRCountryRCultureRCountryId($order = Criteria::ASC) Order by the lnk_r_country_r_culture_r_country_id column
 * @method LnkRCountryRCulturesQuery orderByLnkRCountryRCultureRCultureId($order = Criteria::ASC) Order by the lnk_r_country_r_culture_r_culture_id column
 *
 * @method LnkRCountryRCulturesQuery groupByLnkRCountryRCultureId() Group by the lnk_r_country_r_culture_id column
 * @method LnkRCountryRCulturesQuery groupByLnkRCountryRCultureRCountryId() Group by the lnk_r_country_r_culture_r_country_id column
 * @method LnkRCountryRCulturesQuery groupByLnkRCountryRCultureRCultureId() Group by the lnk_r_country_r_culture_r_culture_id column
 *
 * @method LnkRCountryRCulturesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkRCountryRCulturesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkRCountryRCulturesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkRCountryRCulturesQuery leftJoinRCountries($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCountries relation
 * @method LnkRCountryRCulturesQuery rightJoinRCountries($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCountries relation
 * @method LnkRCountryRCulturesQuery innerJoinRCountries($relationAlias = null) Adds a INNER JOIN clause to the query using the RCountries relation
 *
 * @method LnkRCountryRCulturesQuery leftJoinRCultures($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCultures relation
 * @method LnkRCountryRCulturesQuery rightJoinRCultures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCultures relation
 * @method LnkRCountryRCulturesQuery innerJoinRCultures($relationAlias = null) Adds a INNER JOIN clause to the query using the RCultures relation
 *
 * @method LnkRCountryRCultures findOne(PropelPDO $con = null) Return the first LnkRCountryRCultures matching the query
 * @method LnkRCountryRCultures findOneOrCreate(PropelPDO $con = null) Return the first LnkRCountryRCultures matching the query, or a new LnkRCountryRCultures object populated from the query conditions when no match is found
 *
 * @method LnkRCountryRCultures findOneByLnkRCountryRCultureRCountryId(int $lnk_r_country_r_culture_r_country_id) Return the first LnkRCountryRCultures filtered by the lnk_r_country_r_culture_r_country_id column
 * @method LnkRCountryRCultures findOneByLnkRCountryRCultureRCultureId(int $lnk_r_country_r_culture_r_culture_id) Return the first LnkRCountryRCultures filtered by the lnk_r_country_r_culture_r_culture_id column
 *
 * @method array findByLnkRCountryRCultureId(int $lnk_r_country_r_culture_id) Return LnkRCountryRCultures objects filtered by the lnk_r_country_r_culture_id column
 * @method array findByLnkRCountryRCultureRCountryId(int $lnk_r_country_r_culture_r_country_id) Return LnkRCountryRCultures objects filtered by the lnk_r_country_r_culture_r_country_id column
 * @method array findByLnkRCountryRCultureRCultureId(int $lnk_r_country_r_culture_r_culture_id) Return LnkRCountryRCultures objects filtered by the lnk_r_country_r_culture_r_culture_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkRCountryRCulturesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkRCountryRCulturesQuery object.
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
            $modelName = 'LnkRCountryRCultures';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkRCountryRCulturesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkRCountryRCulturesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkRCountryRCulturesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkRCountryRCulturesQuery) {
            return $criteria;
        }
        $query = new LnkRCountryRCulturesQuery(null, null, $modelAlias);

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
     * @return   LnkRCountryRCultures|LnkRCountryRCultures[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkRCountryRCulturesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkRCountryRCulturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 LnkRCountryRCultures A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLnkRCountryRCultureId($key, $con = null)
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
     * @return                 LnkRCountryRCultures A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `lnk_r_country_r_culture_id`, `lnk_r_country_r_culture_r_country_id`, `lnk_r_country_r_culture_r_culture_id` FROM `lnk_r_country_r_cultures` WHERE `lnk_r_country_r_culture_id` = :p0';
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
            $obj = new LnkRCountryRCultures();
            $obj->hydrate($row);
            LnkRCountryRCulturesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return LnkRCountryRCultures|LnkRCountryRCultures[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LnkRCountryRCultures[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkRCountryRCulturesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkRCountryRCulturesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the lnk_r_country_r_culture_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkRCountryRCultureId(1234); // WHERE lnk_r_country_r_culture_id = 1234
     * $query->filterByLnkRCountryRCultureId(array(12, 34)); // WHERE lnk_r_country_r_culture_id IN (12, 34)
     * $query->filterByLnkRCountryRCultureId(array('min' => 12)); // WHERE lnk_r_country_r_culture_id >= 12
     * $query->filterByLnkRCountryRCultureId(array('max' => 12)); // WHERE lnk_r_country_r_culture_id <= 12
     * </code>
     *
     * @param     mixed $lnkRCountryRCultureId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkRCountryRCulturesQuery The current query, for fluid interface
     */
    public function filterByLnkRCountryRCultureId($lnkRCountryRCultureId = null, $comparison = null)
    {
        if (is_array($lnkRCountryRCultureId)) {
            $useMinMax = false;
            if (isset($lnkRCountryRCultureId['min'])) {
                $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_ID, $lnkRCountryRCultureId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkRCountryRCultureId['max'])) {
                $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_ID, $lnkRCountryRCultureId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_ID, $lnkRCountryRCultureId, $comparison);
    }

    /**
     * Filter the query on the lnk_r_country_r_culture_r_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkRCountryRCultureRCountryId(1234); // WHERE lnk_r_country_r_culture_r_country_id = 1234
     * $query->filterByLnkRCountryRCultureRCountryId(array(12, 34)); // WHERE lnk_r_country_r_culture_r_country_id IN (12, 34)
     * $query->filterByLnkRCountryRCultureRCountryId(array('min' => 12)); // WHERE lnk_r_country_r_culture_r_country_id >= 12
     * $query->filterByLnkRCountryRCultureRCountryId(array('max' => 12)); // WHERE lnk_r_country_r_culture_r_country_id <= 12
     * </code>
     *
     * @see       filterByRCountries()
     *
     * @param     mixed $lnkRCountryRCultureRCountryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkRCountryRCulturesQuery The current query, for fluid interface
     */
    public function filterByLnkRCountryRCultureRCountryId($lnkRCountryRCultureRCountryId = null, $comparison = null)
    {
        if (is_array($lnkRCountryRCultureRCountryId)) {
            $useMinMax = false;
            if (isset($lnkRCountryRCultureRCountryId['min'])) {
                $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_R_COUNTRY_ID, $lnkRCountryRCultureRCountryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkRCountryRCultureRCountryId['max'])) {
                $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_R_COUNTRY_ID, $lnkRCountryRCultureRCountryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_R_COUNTRY_ID, $lnkRCountryRCultureRCountryId, $comparison);
    }

    /**
     * Filter the query on the lnk_r_country_r_culture_r_culture_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkRCountryRCultureRCultureId(1234); // WHERE lnk_r_country_r_culture_r_culture_id = 1234
     * $query->filterByLnkRCountryRCultureRCultureId(array(12, 34)); // WHERE lnk_r_country_r_culture_r_culture_id IN (12, 34)
     * $query->filterByLnkRCountryRCultureRCultureId(array('min' => 12)); // WHERE lnk_r_country_r_culture_r_culture_id >= 12
     * $query->filterByLnkRCountryRCultureRCultureId(array('max' => 12)); // WHERE lnk_r_country_r_culture_r_culture_id <= 12
     * </code>
     *
     * @see       filterByRCultures()
     *
     * @param     mixed $lnkRCountryRCultureRCultureId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkRCountryRCulturesQuery The current query, for fluid interface
     */
    public function filterByLnkRCountryRCultureRCultureId($lnkRCountryRCultureRCultureId = null, $comparison = null)
    {
        if (is_array($lnkRCountryRCultureRCultureId)) {
            $useMinMax = false;
            if (isset($lnkRCountryRCultureRCultureId['min'])) {
                $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_R_CULTURE_ID, $lnkRCountryRCultureRCultureId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkRCountryRCultureRCultureId['max'])) {
                $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_R_CULTURE_ID, $lnkRCountryRCultureRCultureId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_R_CULTURE_ID, $lnkRCountryRCultureRCultureId, $comparison);
    }

    /**
     * Filter the query by a related RCountries object
     *
     * @param   RCountries|PropelObjectCollection $rCountries The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkRCountryRCulturesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCountries($rCountries, $comparison = null)
    {
        if ($rCountries instanceof RCountries) {
            return $this
                ->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_R_COUNTRY_ID, $rCountries->getRCountryId(), $comparison);
        } elseif ($rCountries instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_R_COUNTRY_ID, $rCountries->toKeyValue('PrimaryKey', 'RCountryId'), $comparison);
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
     * @return LnkRCountryRCulturesQuery The current query, for fluid interface
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
     * Filter the query by a related RCultures object
     *
     * @param   RCultures|PropelObjectCollection $rCultures The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkRCountryRCulturesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCultures($rCultures, $comparison = null)
    {
        if ($rCultures instanceof RCultures) {
            return $this
                ->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_R_CULTURE_ID, $rCultures->getRCultureId(), $comparison);
        } elseif ($rCultures instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_R_CULTURE_ID, $rCultures->toKeyValue('PrimaryKey', 'RCultureId'), $comparison);
        } else {
            throw new PropelException('filterByRCultures() only accepts arguments of type RCultures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RCultures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkRCountryRCulturesQuery The current query, for fluid interface
     */
    public function joinRCultures($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RCultures');

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
            $this->addJoinObject($join, 'RCultures');
        }

        return $this;
    }

    /**
     * Use the RCultures relation RCultures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCulturesQuery A secondary query class using the current class as primary query
     */
    public function useRCulturesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRCultures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RCultures', 'RCulturesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   LnkRCountryRCultures $lnkRCountryRCultures Object to remove from the list of results
     *
     * @return LnkRCountryRCulturesQuery The current query, for fluid interface
     */
    public function prune($lnkRCountryRCultures = null)
    {
        if ($lnkRCountryRCultures) {
            $this->addUsingAlias(LnkRCountryRCulturesPeer::LNK_R_COUNTRY_R_CULTURE_ID, $lnkRCountryRCultures->getLnkRCountryRCultureId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
