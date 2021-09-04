<?php


/**
 * Base class that represents a query for the 'r_reward_expedition_modes' table.
 *
 *
 *
 * @method RRewardExpeditionModesQuery orderByRRewardExpeditionModeId($order = Criteria::ASC) Order by the r_reward_expedition_mode_id column
 * @method RRewardExpeditionModesQuery orderByRRewardExpeditionModeLabel($order = Criteria::ASC) Order by the r_reward_expedition_mode_label column
 * @method RRewardExpeditionModesQuery orderByRRewardExpeditionModeActif($order = Criteria::ASC) Order by the r_reward_expedition_mode_actif column
 *
 * @method RRewardExpeditionModesQuery groupByRRewardExpeditionModeId() Group by the r_reward_expedition_mode_id column
 * @method RRewardExpeditionModesQuery groupByRRewardExpeditionModeLabel() Group by the r_reward_expedition_mode_label column
 * @method RRewardExpeditionModesQuery groupByRRewardExpeditionModeActif() Group by the r_reward_expedition_mode_actif column
 *
 * @method RRewardExpeditionModesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RRewardExpeditionModesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RRewardExpeditionModesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RRewardExpeditionModesQuery leftJoinOperationPrimes($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrimes relation
 * @method RRewardExpeditionModesQuery rightJoinOperationPrimes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrimes relation
 * @method RRewardExpeditionModesQuery innerJoinOperationPrimes($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrimes relation
 *
 * @method RRewardExpeditionModes findOne(PropelPDO $con = null) Return the first RRewardExpeditionModes matching the query
 * @method RRewardExpeditionModes findOneOrCreate(PropelPDO $con = null) Return the first RRewardExpeditionModes matching the query, or a new RRewardExpeditionModes object populated from the query conditions when no match is found
 *
 * @method RRewardExpeditionModes findOneByRRewardExpeditionModeLabel(string $r_reward_expedition_mode_label) Return the first RRewardExpeditionModes filtered by the r_reward_expedition_mode_label column
 * @method RRewardExpeditionModes findOneByRRewardExpeditionModeActif(int $r_reward_expedition_mode_actif) Return the first RRewardExpeditionModes filtered by the r_reward_expedition_mode_actif column
 *
 * @method array findByRRewardExpeditionModeId(int $r_reward_expedition_mode_id) Return RRewardExpeditionModes objects filtered by the r_reward_expedition_mode_id column
 * @method array findByRRewardExpeditionModeLabel(string $r_reward_expedition_mode_label) Return RRewardExpeditionModes objects filtered by the r_reward_expedition_mode_label column
 * @method array findByRRewardExpeditionModeActif(int $r_reward_expedition_mode_actif) Return RRewardExpeditionModes objects filtered by the r_reward_expedition_mode_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRRewardExpeditionModesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRRewardExpeditionModesQuery object.
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
            $modelName = 'RRewardExpeditionModes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RRewardExpeditionModesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RRewardExpeditionModesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RRewardExpeditionModesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RRewardExpeditionModesQuery) {
            return $criteria;
        }
        $query = new RRewardExpeditionModesQuery(null, null, $modelAlias);

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
     * @return   RRewardExpeditionModes|RRewardExpeditionModes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RRewardExpeditionModesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RRewardExpeditionModesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RRewardExpeditionModes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRRewardExpeditionModeId($key, $con = null)
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
     * @return                 RRewardExpeditionModes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_reward_expedition_mode_id`, `r_reward_expedition_mode_label`, `r_reward_expedition_mode_actif` FROM `r_reward_expedition_modes` WHERE `r_reward_expedition_mode_id` = :p0';
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
            $obj = new RRewardExpeditionModes();
            $obj->hydrate($row);
            RRewardExpeditionModesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RRewardExpeditionModes|RRewardExpeditionModes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RRewardExpeditionModes[]|mixed the list of results, formatted by the current formatter
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
     * @return RRewardExpeditionModesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RRewardExpeditionModesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_reward_expedition_mode_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRewardExpeditionModeId(1234); // WHERE r_reward_expedition_mode_id = 1234
     * $query->filterByRRewardExpeditionModeId(array(12, 34)); // WHERE r_reward_expedition_mode_id IN (12, 34)
     * $query->filterByRRewardExpeditionModeId(array('min' => 12)); // WHERE r_reward_expedition_mode_id >= 12
     * $query->filterByRRewardExpeditionModeId(array('max' => 12)); // WHERE r_reward_expedition_mode_id <= 12
     * </code>
     *
     * @param     mixed $rRewardExpeditionModeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRewardExpeditionModesQuery The current query, for fluid interface
     */
    public function filterByRRewardExpeditionModeId($rRewardExpeditionModeId = null, $comparison = null)
    {
        if (is_array($rRewardExpeditionModeId)) {
            $useMinMax = false;
            if (isset($rRewardExpeditionModeId['min'])) {
                $this->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $rRewardExpeditionModeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRewardExpeditionModeId['max'])) {
                $this->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $rRewardExpeditionModeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $rRewardExpeditionModeId, $comparison);
    }

    /**
     * Filter the query on the r_reward_expedition_mode_label column
     *
     * Example usage:
     * <code>
     * $query->filterByRRewardExpeditionModeLabel('fooValue');   // WHERE r_reward_expedition_mode_label = 'fooValue'
     * $query->filterByRRewardExpeditionModeLabel('%fooValue%'); // WHERE r_reward_expedition_mode_label LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rRewardExpeditionModeLabel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRewardExpeditionModesQuery The current query, for fluid interface
     */
    public function filterByRRewardExpeditionModeLabel($rRewardExpeditionModeLabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rRewardExpeditionModeLabel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rRewardExpeditionModeLabel)) {
                $rRewardExpeditionModeLabel = str_replace('*', '%', $rRewardExpeditionModeLabel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_LABEL, $rRewardExpeditionModeLabel, $comparison);
    }

    /**
     * Filter the query on the r_reward_expedition_mode_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRRewardExpeditionModeActif(1234); // WHERE r_reward_expedition_mode_actif = 1234
     * $query->filterByRRewardExpeditionModeActif(array(12, 34)); // WHERE r_reward_expedition_mode_actif IN (12, 34)
     * $query->filterByRRewardExpeditionModeActif(array('min' => 12)); // WHERE r_reward_expedition_mode_actif >= 12
     * $query->filterByRRewardExpeditionModeActif(array('max' => 12)); // WHERE r_reward_expedition_mode_actif <= 12
     * </code>
     *
     * @param     mixed $rRewardExpeditionModeActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRewardExpeditionModesQuery The current query, for fluid interface
     */
    public function filterByRRewardExpeditionModeActif($rRewardExpeditionModeActif = null, $comparison = null)
    {
        if (is_array($rRewardExpeditionModeActif)) {
            $useMinMax = false;
            if (isset($rRewardExpeditionModeActif['min'])) {
                $this->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ACTIF, $rRewardExpeditionModeActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRewardExpeditionModeActif['max'])) {
                $this->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ACTIF, $rRewardExpeditionModeActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ACTIF, $rRewardExpeditionModeActif, $comparison);
    }

    /**
     * Filter the query by a related OperationPrimes object
     *
     * @param   OperationPrimes|PropelObjectCollection $operationPrimes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRewardExpeditionModesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrimes($operationPrimes, $comparison = null)
    {
        if ($operationPrimes instanceof OperationPrimes) {
            return $this
                ->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $operationPrimes->getOperationPrimeRRewardExpeditionModeId(), $comparison);
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
     * @return RRewardExpeditionModesQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   RRewardExpeditionModes $rRewardExpeditionModes Object to remove from the list of results
     *
     * @return RRewardExpeditionModesQuery The current query, for fluid interface
     */
    public function prune($rRewardExpeditionModes = null)
    {
        if ($rRewardExpeditionModes) {
            $this->addUsingAlias(RRewardExpeditionModesPeer::R_REWARD_EXPEDITION_MODE_ID, $rRewardExpeditionModes->getRRewardExpeditionModeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
