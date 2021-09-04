<?php


/**
 * Base class that represents a query for the 'r_reward_types' table.
 *
 *
 *
 * @method RRewardTypesQuery orderByRRewardTypeId($order = Criteria::ASC) Order by the r_reward_type_id column
 * @method RRewardTypesQuery orderByRRewardTypeLabel($order = Criteria::ASC) Order by the r_reward_type_label column
 * @method RRewardTypesQuery orderByRRewardTypeActif($order = Criteria::ASC) Order by the r_reward_type_actif column
 *
 * @method RRewardTypesQuery groupByRRewardTypeId() Group by the r_reward_type_id column
 * @method RRewardTypesQuery groupByRRewardTypeLabel() Group by the r_reward_type_label column
 * @method RRewardTypesQuery groupByRRewardTypeActif() Group by the r_reward_type_actif column
 *
 * @method RRewardTypesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RRewardTypesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RRewardTypesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RRewardTypesQuery leftJoinOperationPrimes($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrimes relation
 * @method RRewardTypesQuery rightJoinOperationPrimes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrimes relation
 * @method RRewardTypesQuery innerJoinOperationPrimes($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrimes relation
 *
 * @method RRewardTypesQuery leftJoinROperationTypeSubTplPrime($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplPrime relation
 * @method RRewardTypesQuery rightJoinROperationTypeSubTplPrime($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplPrime relation
 * @method RRewardTypesQuery innerJoinROperationTypeSubTplPrime($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplPrime relation
 *
 * @method RRewardTypes findOne(PropelPDO $con = null) Return the first RRewardTypes matching the query
 * @method RRewardTypes findOneOrCreate(PropelPDO $con = null) Return the first RRewardTypes matching the query, or a new RRewardTypes object populated from the query conditions when no match is found
 *
 * @method RRewardTypes findOneByRRewardTypeLabel(string $r_reward_type_label) Return the first RRewardTypes filtered by the r_reward_type_label column
 * @method RRewardTypes findOneByRRewardTypeActif(int $r_reward_type_actif) Return the first RRewardTypes filtered by the r_reward_type_actif column
 *
 * @method array findByRRewardTypeId(int $r_reward_type_id) Return RRewardTypes objects filtered by the r_reward_type_id column
 * @method array findByRRewardTypeLabel(string $r_reward_type_label) Return RRewardTypes objects filtered by the r_reward_type_label column
 * @method array findByRRewardTypeActif(int $r_reward_type_actif) Return RRewardTypes objects filtered by the r_reward_type_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRRewardTypesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRRewardTypesQuery object.
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
            $modelName = 'RRewardTypes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RRewardTypesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RRewardTypesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RRewardTypesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RRewardTypesQuery) {
            return $criteria;
        }
        $query = new RRewardTypesQuery(null, null, $modelAlias);

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
     * @return   RRewardTypes|RRewardTypes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RRewardTypesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RRewardTypesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RRewardTypes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRRewardTypeId($key, $con = null)
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
     * @return                 RRewardTypes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_reward_type_id`, `r_reward_type_label`, `r_reward_type_actif` FROM `r_reward_types` WHERE `r_reward_type_id` = :p0';
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
            $obj = new RRewardTypes();
            $obj->hydrate($row);
            RRewardTypesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RRewardTypes|RRewardTypes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RRewardTypes[]|mixed the list of results, formatted by the current formatter
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
     * @return RRewardTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RRewardTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_reward_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRewardTypeId(1234); // WHERE r_reward_type_id = 1234
     * $query->filterByRRewardTypeId(array(12, 34)); // WHERE r_reward_type_id IN (12, 34)
     * $query->filterByRRewardTypeId(array('min' => 12)); // WHERE r_reward_type_id >= 12
     * $query->filterByRRewardTypeId(array('max' => 12)); // WHERE r_reward_type_id <= 12
     * </code>
     *
     * @param     mixed $rRewardTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRewardTypesQuery The current query, for fluid interface
     */
    public function filterByRRewardTypeId($rRewardTypeId = null, $comparison = null)
    {
        if (is_array($rRewardTypeId)) {
            $useMinMax = false;
            if (isset($rRewardTypeId['min'])) {
                $this->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ID, $rRewardTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRewardTypeId['max'])) {
                $this->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ID, $rRewardTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ID, $rRewardTypeId, $comparison);
    }

    /**
     * Filter the query on the r_reward_type_label column
     *
     * Example usage:
     * <code>
     * $query->filterByRRewardTypeLabel('fooValue');   // WHERE r_reward_type_label = 'fooValue'
     * $query->filterByRRewardTypeLabel('%fooValue%'); // WHERE r_reward_type_label LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rRewardTypeLabel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRewardTypesQuery The current query, for fluid interface
     */
    public function filterByRRewardTypeLabel($rRewardTypeLabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rRewardTypeLabel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rRewardTypeLabel)) {
                $rRewardTypeLabel = str_replace('*', '%', $rRewardTypeLabel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_LABEL, $rRewardTypeLabel, $comparison);
    }

    /**
     * Filter the query on the r_reward_type_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRRewardTypeActif(1234); // WHERE r_reward_type_actif = 1234
     * $query->filterByRRewardTypeActif(array(12, 34)); // WHERE r_reward_type_actif IN (12, 34)
     * $query->filterByRRewardTypeActif(array('min' => 12)); // WHERE r_reward_type_actif >= 12
     * $query->filterByRRewardTypeActif(array('max' => 12)); // WHERE r_reward_type_actif <= 12
     * </code>
     *
     * @param     mixed $rRewardTypeActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRewardTypesQuery The current query, for fluid interface
     */
    public function filterByRRewardTypeActif($rRewardTypeActif = null, $comparison = null)
    {
        if (is_array($rRewardTypeActif)) {
            $useMinMax = false;
            if (isset($rRewardTypeActif['min'])) {
                $this->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ACTIF, $rRewardTypeActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRewardTypeActif['max'])) {
                $this->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ACTIF, $rRewardTypeActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ACTIF, $rRewardTypeActif, $comparison);
    }

    /**
     * Filter the query by a related OperationPrimes object
     *
     * @param   OperationPrimes|PropelObjectCollection $operationPrimes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRewardTypesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrimes($operationPrimes, $comparison = null)
    {
        if ($operationPrimes instanceof OperationPrimes) {
            return $this
                ->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ID, $operationPrimes->getOperationPrimeRRewardTypeId(), $comparison);
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
     * @return RRewardTypesQuery The current query, for fluid interface
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
     * Filter the query by a related ROperationTypeSubTplPrime object
     *
     * @param   ROperationTypeSubTplPrime|PropelObjectCollection $rOperationTypeSubTplPrime  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRewardTypesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplPrime($rOperationTypeSubTplPrime, $comparison = null)
    {
        if ($rOperationTypeSubTplPrime instanceof ROperationTypeSubTplPrime) {
            return $this
                ->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ID, $rOperationTypeSubTplPrime->getOstTplRewardType(), $comparison);
        } elseif ($rOperationTypeSubTplPrime instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplPrimeQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplPrime->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplPrime() only accepts arguments of type ROperationTypeSubTplPrime or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplPrime relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RRewardTypesQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplPrime($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplPrime');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplPrime');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplPrime relation ROperationTypeSubTplPrime object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplPrimeQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplPrimeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplPrime($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplPrime', 'ROperationTypeSubTplPrimeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RRewardTypes $rRewardTypes Object to remove from the list of results
     *
     * @return RRewardTypesQuery The current query, for fluid interface
     */
    public function prune($rRewardTypes = null)
    {
        if ($rRewardTypes) {
            $this->addUsingAlias(RRewardTypesPeer::R_REWARD_TYPE_ID, $rRewardTypes->getRRewardTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
