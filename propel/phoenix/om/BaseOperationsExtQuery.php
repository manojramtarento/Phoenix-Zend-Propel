<?php


/**
 * Base class that represents a query for the 'operations_ext' table.
 *
 *
 *
 * @method OperationsExtQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method OperationsExtQuery orderByOptStatHideBilanFinancier($order = Criteria::ASC) Order by the opt_stat_hide_bilan_financier column
 * @method OperationsExtQuery orderByOptSyncTaskDate($order = Criteria::ASC) Order by the opt_sync_task_date column
 * @method OperationsExtQuery orderByOptSyncGedelogDate($order = Criteria::ASC) Order by the opt_sync_gedelog_date column
 * @method OperationsExtQuery orderByOptSyncTaskUserId($order = Criteria::ASC) Order by the opt_sync_task_user_id column
 * @method OperationsExtQuery orderByOptSyncGedelogUserId($order = Criteria::ASC) Order by the opt_sync_gedelog_user_id column
 *
 * @method OperationsExtQuery groupByOpId() Group by the op_id column
 * @method OperationsExtQuery groupByOptStatHideBilanFinancier() Group by the opt_stat_hide_bilan_financier column
 * @method OperationsExtQuery groupByOptSyncTaskDate() Group by the opt_sync_task_date column
 * @method OperationsExtQuery groupByOptSyncGedelogDate() Group by the opt_sync_gedelog_date column
 * @method OperationsExtQuery groupByOptSyncTaskUserId() Group by the opt_sync_task_user_id column
 * @method OperationsExtQuery groupByOptSyncGedelogUserId() Group by the opt_sync_gedelog_user_id column
 *
 * @method OperationsExtQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationsExtQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationsExtQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationsExtQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method OperationsExtQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method OperationsExtQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method OperationsExt findOne(PropelPDO $con = null) Return the first OperationsExt matching the query
 * @method OperationsExt findOneOrCreate(PropelPDO $con = null) Return the first OperationsExt matching the query, or a new OperationsExt object populated from the query conditions when no match is found
 *
 * @method OperationsExt findOneByOptStatHideBilanFinancier(boolean $opt_stat_hide_bilan_financier) Return the first OperationsExt filtered by the opt_stat_hide_bilan_financier column
 * @method OperationsExt findOneByOptSyncTaskDate(string $opt_sync_task_date) Return the first OperationsExt filtered by the opt_sync_task_date column
 * @method OperationsExt findOneByOptSyncGedelogDate(string $opt_sync_gedelog_date) Return the first OperationsExt filtered by the opt_sync_gedelog_date column
 * @method OperationsExt findOneByOptSyncTaskUserId(int $opt_sync_task_user_id) Return the first OperationsExt filtered by the opt_sync_task_user_id column
 * @method OperationsExt findOneByOptSyncGedelogUserId(int $opt_sync_gedelog_user_id) Return the first OperationsExt filtered by the opt_sync_gedelog_user_id column
 *
 * @method array findByOpId(int $op_id) Return OperationsExt objects filtered by the op_id column
 * @method array findByOptStatHideBilanFinancier(boolean $opt_stat_hide_bilan_financier) Return OperationsExt objects filtered by the opt_stat_hide_bilan_financier column
 * @method array findByOptSyncTaskDate(string $opt_sync_task_date) Return OperationsExt objects filtered by the opt_sync_task_date column
 * @method array findByOptSyncGedelogDate(string $opt_sync_gedelog_date) Return OperationsExt objects filtered by the opt_sync_gedelog_date column
 * @method array findByOptSyncTaskUserId(int $opt_sync_task_user_id) Return OperationsExt objects filtered by the opt_sync_task_user_id column
 * @method array findByOptSyncGedelogUserId(int $opt_sync_gedelog_user_id) Return OperationsExt objects filtered by the opt_sync_gedelog_user_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationsExtQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationsExtQuery object.
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
            $modelName = 'OperationsExt';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationsExtQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationsExtQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationsExtQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationsExtQuery) {
            return $criteria;
        }
        $query = new OperationsExtQuery(null, null, $modelAlias);

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
     * @return   OperationsExt|OperationsExt[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationsExtPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationsExtPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationsExt A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOpId($key, $con = null)
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
     * @return                 OperationsExt A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_id`, `opt_stat_hide_bilan_financier`, `opt_sync_task_date`, `opt_sync_gedelog_date`, `opt_sync_task_user_id`, `opt_sync_gedelog_user_id` FROM `operations_ext` WHERE `op_id` = :p0';
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
            $obj = new OperationsExt();
            $obj->hydrate($row);
            OperationsExtPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OperationsExt|OperationsExt[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationsExt[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationsExtQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationsExtPeer::OP_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationsExtQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationsExtPeer::OP_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the op_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpId(1234); // WHERE op_id = 1234
     * $query->filterByOpId(array(12, 34)); // WHERE op_id IN (12, 34)
     * $query->filterByOpId(array('min' => 12)); // WHERE op_id >= 12
     * $query->filterByOpId(array('max' => 12)); // WHERE op_id <= 12
     * </code>
     *
     * @param     mixed $opId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsExtQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(OperationsExtPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(OperationsExtPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsExtPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the opt_stat_hide_bilan_financier column
     *
     * Example usage:
     * <code>
     * $query->filterByOptStatHideBilanFinancier(true); // WHERE opt_stat_hide_bilan_financier = true
     * $query->filterByOptStatHideBilanFinancier('yes'); // WHERE opt_stat_hide_bilan_financier = true
     * </code>
     *
     * @param     boolean|string $optStatHideBilanFinancier The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsExtQuery The current query, for fluid interface
     */
    public function filterByOptStatHideBilanFinancier($optStatHideBilanFinancier = null, $comparison = null)
    {
        if (is_string($optStatHideBilanFinancier)) {
            $optStatHideBilanFinancier = in_array(strtolower($optStatHideBilanFinancier), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationsExtPeer::OPT_STAT_HIDE_BILAN_FINANCIER, $optStatHideBilanFinancier, $comparison);
    }

    /**
     * Filter the query on the opt_sync_task_date column
     *
     * Example usage:
     * <code>
     * $query->filterByOptSyncTaskDate('2011-03-14'); // WHERE opt_sync_task_date = '2011-03-14'
     * $query->filterByOptSyncTaskDate('now'); // WHERE opt_sync_task_date = '2011-03-14'
     * $query->filterByOptSyncTaskDate(array('max' => 'yesterday')); // WHERE opt_sync_task_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $optSyncTaskDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsExtQuery The current query, for fluid interface
     */
    public function filterByOptSyncTaskDate($optSyncTaskDate = null, $comparison = null)
    {
        if (is_array($optSyncTaskDate)) {
            $useMinMax = false;
            if (isset($optSyncTaskDate['min'])) {
                $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_TASK_DATE, $optSyncTaskDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optSyncTaskDate['max'])) {
                $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_TASK_DATE, $optSyncTaskDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_TASK_DATE, $optSyncTaskDate, $comparison);
    }

    /**
     * Filter the query on the opt_sync_gedelog_date column
     *
     * Example usage:
     * <code>
     * $query->filterByOptSyncGedelogDate('2011-03-14'); // WHERE opt_sync_gedelog_date = '2011-03-14'
     * $query->filterByOptSyncGedelogDate('now'); // WHERE opt_sync_gedelog_date = '2011-03-14'
     * $query->filterByOptSyncGedelogDate(array('max' => 'yesterday')); // WHERE opt_sync_gedelog_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $optSyncGedelogDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsExtQuery The current query, for fluid interface
     */
    public function filterByOptSyncGedelogDate($optSyncGedelogDate = null, $comparison = null)
    {
        if (is_array($optSyncGedelogDate)) {
            $useMinMax = false;
            if (isset($optSyncGedelogDate['min'])) {
                $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_GEDELOG_DATE, $optSyncGedelogDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optSyncGedelogDate['max'])) {
                $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_GEDELOG_DATE, $optSyncGedelogDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_GEDELOG_DATE, $optSyncGedelogDate, $comparison);
    }

    /**
     * Filter the query on the opt_sync_task_user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOptSyncTaskUserId(1234); // WHERE opt_sync_task_user_id = 1234
     * $query->filterByOptSyncTaskUserId(array(12, 34)); // WHERE opt_sync_task_user_id IN (12, 34)
     * $query->filterByOptSyncTaskUserId(array('min' => 12)); // WHERE opt_sync_task_user_id >= 12
     * $query->filterByOptSyncTaskUserId(array('max' => 12)); // WHERE opt_sync_task_user_id <= 12
     * </code>
     *
     * @param     mixed $optSyncTaskUserId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsExtQuery The current query, for fluid interface
     */
    public function filterByOptSyncTaskUserId($optSyncTaskUserId = null, $comparison = null)
    {
        if (is_array($optSyncTaskUserId)) {
            $useMinMax = false;
            if (isset($optSyncTaskUserId['min'])) {
                $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_TASK_USER_ID, $optSyncTaskUserId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optSyncTaskUserId['max'])) {
                $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_TASK_USER_ID, $optSyncTaskUserId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_TASK_USER_ID, $optSyncTaskUserId, $comparison);
    }

    /**
     * Filter the query on the opt_sync_gedelog_user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOptSyncGedelogUserId(1234); // WHERE opt_sync_gedelog_user_id = 1234
     * $query->filterByOptSyncGedelogUserId(array(12, 34)); // WHERE opt_sync_gedelog_user_id IN (12, 34)
     * $query->filterByOptSyncGedelogUserId(array('min' => 12)); // WHERE opt_sync_gedelog_user_id >= 12
     * $query->filterByOptSyncGedelogUserId(array('max' => 12)); // WHERE opt_sync_gedelog_user_id <= 12
     * </code>
     *
     * @param     mixed $optSyncGedelogUserId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsExtQuery The current query, for fluid interface
     */
    public function filterByOptSyncGedelogUserId($optSyncGedelogUserId = null, $comparison = null)
    {
        if (is_array($optSyncGedelogUserId)) {
            $useMinMax = false;
            if (isset($optSyncGedelogUserId['min'])) {
                $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_GEDELOG_USER_ID, $optSyncGedelogUserId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optSyncGedelogUserId['max'])) {
                $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_GEDELOG_USER_ID, $optSyncGedelogUserId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsExtPeer::OPT_SYNC_GEDELOG_USER_ID, $optSyncGedelogUserId, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsExtQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(OperationsExtPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperations() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Operations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsExtQuery The current query, for fluid interface
     */
    public function joinOperations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Operations');

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
            $this->addJoinObject($join, 'Operations');
        }

        return $this;
    }

    /**
     * Use the Operations relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Operations', 'OperationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   OperationsExt $operationsExt Object to remove from the list of results
     *
     * @return OperationsExtQuery The current query, for fluid interface
     */
    public function prune($operationsExt = null)
    {
        if ($operationsExt) {
            $this->addUsingAlias(OperationsExtPeer::OP_ID, $operationsExt->getOpId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
