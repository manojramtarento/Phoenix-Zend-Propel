<?php


/**
 * Base class that represents a query for the 'r_reward_transporters' table.
 *
 *
 *
 * @method RRewardTransportersQuery orderByRRewardTransporterId($order = Criteria::ASC) Order by the r_reward_transporter_id column
 * @method RRewardTransportersQuery orderByRRewardTransporterLabel($order = Criteria::ASC) Order by the r_reward_transporter_label column
 * @method RRewardTransportersQuery orderByRRewardTransporterActif($order = Criteria::ASC) Order by the r_reward_transporter_actif column
 *
 * @method RRewardTransportersQuery groupByRRewardTransporterId() Group by the r_reward_transporter_id column
 * @method RRewardTransportersQuery groupByRRewardTransporterLabel() Group by the r_reward_transporter_label column
 * @method RRewardTransportersQuery groupByRRewardTransporterActif() Group by the r_reward_transporter_actif column
 *
 * @method RRewardTransportersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RRewardTransportersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RRewardTransportersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RRewardTransportersQuery leftJoinOperationPrimes($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrimes relation
 * @method RRewardTransportersQuery rightJoinOperationPrimes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrimes relation
 * @method RRewardTransportersQuery innerJoinOperationPrimes($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrimes relation
 *
 * @method RRewardTransporters findOne(PropelPDO $con = null) Return the first RRewardTransporters matching the query
 * @method RRewardTransporters findOneOrCreate(PropelPDO $con = null) Return the first RRewardTransporters matching the query, or a new RRewardTransporters object populated from the query conditions when no match is found
 *
 * @method RRewardTransporters findOneByRRewardTransporterLabel(string $r_reward_transporter_label) Return the first RRewardTransporters filtered by the r_reward_transporter_label column
 * @method RRewardTransporters findOneByRRewardTransporterActif(int $r_reward_transporter_actif) Return the first RRewardTransporters filtered by the r_reward_transporter_actif column
 *
 * @method array findByRRewardTransporterId(int $r_reward_transporter_id) Return RRewardTransporters objects filtered by the r_reward_transporter_id column
 * @method array findByRRewardTransporterLabel(string $r_reward_transporter_label) Return RRewardTransporters objects filtered by the r_reward_transporter_label column
 * @method array findByRRewardTransporterActif(int $r_reward_transporter_actif) Return RRewardTransporters objects filtered by the r_reward_transporter_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRRewardTransportersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRRewardTransportersQuery object.
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
            $modelName = 'RRewardTransporters';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RRewardTransportersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RRewardTransportersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RRewardTransportersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RRewardTransportersQuery) {
            return $criteria;
        }
        $query = new RRewardTransportersQuery(null, null, $modelAlias);

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
     * @return   RRewardTransporters|RRewardTransporters[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RRewardTransportersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RRewardTransportersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RRewardTransporters A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRRewardTransporterId($key, $con = null)
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
     * @return                 RRewardTransporters A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_reward_transporter_id`, `r_reward_transporter_label`, `r_reward_transporter_actif` FROM `r_reward_transporters` WHERE `r_reward_transporter_id` = :p0';
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
            $obj = new RRewardTransporters();
            $obj->hydrate($row);
            RRewardTransportersPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RRewardTransporters|RRewardTransporters[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RRewardTransporters[]|mixed the list of results, formatted by the current formatter
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
     * @return RRewardTransportersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RRewardTransportersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_reward_transporter_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRewardTransporterId(1234); // WHERE r_reward_transporter_id = 1234
     * $query->filterByRRewardTransporterId(array(12, 34)); // WHERE r_reward_transporter_id IN (12, 34)
     * $query->filterByRRewardTransporterId(array('min' => 12)); // WHERE r_reward_transporter_id >= 12
     * $query->filterByRRewardTransporterId(array('max' => 12)); // WHERE r_reward_transporter_id <= 12
     * </code>
     *
     * @param     mixed $rRewardTransporterId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRewardTransportersQuery The current query, for fluid interface
     */
    public function filterByRRewardTransporterId($rRewardTransporterId = null, $comparison = null)
    {
        if (is_array($rRewardTransporterId)) {
            $useMinMax = false;
            if (isset($rRewardTransporterId['min'])) {
                $this->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $rRewardTransporterId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRewardTransporterId['max'])) {
                $this->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $rRewardTransporterId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $rRewardTransporterId, $comparison);
    }

    /**
     * Filter the query on the r_reward_transporter_label column
     *
     * Example usage:
     * <code>
     * $query->filterByRRewardTransporterLabel('fooValue');   // WHERE r_reward_transporter_label = 'fooValue'
     * $query->filterByRRewardTransporterLabel('%fooValue%'); // WHERE r_reward_transporter_label LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rRewardTransporterLabel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRewardTransportersQuery The current query, for fluid interface
     */
    public function filterByRRewardTransporterLabel($rRewardTransporterLabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rRewardTransporterLabel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rRewardTransporterLabel)) {
                $rRewardTransporterLabel = str_replace('*', '%', $rRewardTransporterLabel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_LABEL, $rRewardTransporterLabel, $comparison);
    }

    /**
     * Filter the query on the r_reward_transporter_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRRewardTransporterActif(1234); // WHERE r_reward_transporter_actif = 1234
     * $query->filterByRRewardTransporterActif(array(12, 34)); // WHERE r_reward_transporter_actif IN (12, 34)
     * $query->filterByRRewardTransporterActif(array('min' => 12)); // WHERE r_reward_transporter_actif >= 12
     * $query->filterByRRewardTransporterActif(array('max' => 12)); // WHERE r_reward_transporter_actif <= 12
     * </code>
     *
     * @param     mixed $rRewardTransporterActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRewardTransportersQuery The current query, for fluid interface
     */
    public function filterByRRewardTransporterActif($rRewardTransporterActif = null, $comparison = null)
    {
        if (is_array($rRewardTransporterActif)) {
            $useMinMax = false;
            if (isset($rRewardTransporterActif['min'])) {
                $this->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_ACTIF, $rRewardTransporterActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRewardTransporterActif['max'])) {
                $this->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_ACTIF, $rRewardTransporterActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_ACTIF, $rRewardTransporterActif, $comparison);
    }

    /**
     * Filter the query by a related OperationPrimes object
     *
     * @param   OperationPrimes|PropelObjectCollection $operationPrimes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRewardTransportersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrimes($operationPrimes, $comparison = null)
    {
        if ($operationPrimes instanceof OperationPrimes) {
            return $this
                ->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $operationPrimes->getOperationPrimeRRewardTransporterId(), $comparison);
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
     * @return RRewardTransportersQuery The current query, for fluid interface
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
     * @param   RRewardTransporters $rRewardTransporters Object to remove from the list of results
     *
     * @return RRewardTransportersQuery The current query, for fluid interface
     */
    public function prune($rRewardTransporters = null)
    {
        if ($rRewardTransporters) {
            $this->addUsingAlias(RRewardTransportersPeer::R_REWARD_TRANSPORTER_ID, $rRewardTransporters->getRRewardTransporterId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
