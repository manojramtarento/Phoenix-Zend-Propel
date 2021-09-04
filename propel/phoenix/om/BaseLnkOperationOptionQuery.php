<?php


/**
 * Base class that represents a query for the 'lnk_operation_option' table.
 *
 *
 *
 * @method LnkOperationOptionQuery orderByLnkOpOptId($order = Criteria::ASC) Order by the lnk_op_opt_id column
 * @method LnkOperationOptionQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method LnkOperationOptionQuery orderByOpOptId($order = Criteria::ASC) Order by the op_opt_id column
 * @method LnkOperationOptionQuery orderByIsLinked($order = Criteria::ASC) Order by the is_linked column
 *
 * @method LnkOperationOptionQuery groupByLnkOpOptId() Group by the lnk_op_opt_id column
 * @method LnkOperationOptionQuery groupByOpId() Group by the op_id column
 * @method LnkOperationOptionQuery groupByOpOptId() Group by the op_opt_id column
 * @method LnkOperationOptionQuery groupByIsLinked() Group by the is_linked column
 *
 * @method LnkOperationOptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkOperationOptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkOperationOptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkOperationOptionQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method LnkOperationOptionQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method LnkOperationOptionQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method LnkOperationOptionQuery leftJoinROperationOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationOptions relation
 * @method LnkOperationOptionQuery rightJoinROperationOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationOptions relation
 * @method LnkOperationOptionQuery innerJoinROperationOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationOptions relation
 *
 * @method LnkOperationOption findOne(PropelPDO $con = null) Return the first LnkOperationOption matching the query
 * @method LnkOperationOption findOneOrCreate(PropelPDO $con = null) Return the first LnkOperationOption matching the query, or a new LnkOperationOption object populated from the query conditions when no match is found
 *
 * @method LnkOperationOption findOneByOpId(int $op_id) Return the first LnkOperationOption filtered by the op_id column
 * @method LnkOperationOption findOneByOpOptId(int $op_opt_id) Return the first LnkOperationOption filtered by the op_opt_id column
 * @method LnkOperationOption findOneByIsLinked(boolean $is_linked) Return the first LnkOperationOption filtered by the is_linked column
 *
 * @method array findByLnkOpOptId(int $lnk_op_opt_id) Return LnkOperationOption objects filtered by the lnk_op_opt_id column
 * @method array findByOpId(int $op_id) Return LnkOperationOption objects filtered by the op_id column
 * @method array findByOpOptId(int $op_opt_id) Return LnkOperationOption objects filtered by the op_opt_id column
 * @method array findByIsLinked(boolean $is_linked) Return LnkOperationOption objects filtered by the is_linked column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkOperationOptionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkOperationOptionQuery object.
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
            $modelName = 'LnkOperationOption';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkOperationOptionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkOperationOptionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkOperationOptionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkOperationOptionQuery) {
            return $criteria;
        }
        $query = new LnkOperationOptionQuery(null, null, $modelAlias);

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
     * @return   LnkOperationOption|LnkOperationOption[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkOperationOptionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkOperationOptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 LnkOperationOption A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLnkOpOptId($key, $con = null)
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
     * @return                 LnkOperationOption A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `lnk_op_opt_id`, `op_id`, `op_opt_id`, `is_linked` FROM `lnk_operation_option` WHERE `lnk_op_opt_id` = :p0';
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
            $obj = new LnkOperationOption();
            $obj->hydrate($row);
            LnkOperationOptionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return LnkOperationOption|LnkOperationOption[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LnkOperationOption[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkOperationOptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LnkOperationOptionPeer::LNK_OP_OPT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkOperationOptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LnkOperationOptionPeer::LNK_OP_OPT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the lnk_op_opt_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkOpOptId(1234); // WHERE lnk_op_opt_id = 1234
     * $query->filterByLnkOpOptId(array(12, 34)); // WHERE lnk_op_opt_id IN (12, 34)
     * $query->filterByLnkOpOptId(array('min' => 12)); // WHERE lnk_op_opt_id >= 12
     * $query->filterByLnkOpOptId(array('max' => 12)); // WHERE lnk_op_opt_id <= 12
     * </code>
     *
     * @param     mixed $lnkOpOptId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationOptionQuery The current query, for fluid interface
     */
    public function filterByLnkOpOptId($lnkOpOptId = null, $comparison = null)
    {
        if (is_array($lnkOpOptId)) {
            $useMinMax = false;
            if (isset($lnkOpOptId['min'])) {
                $this->addUsingAlias(LnkOperationOptionPeer::LNK_OP_OPT_ID, $lnkOpOptId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkOpOptId['max'])) {
                $this->addUsingAlias(LnkOperationOptionPeer::LNK_OP_OPT_ID, $lnkOpOptId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationOptionPeer::LNK_OP_OPT_ID, $lnkOpOptId, $comparison);
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
     * @see       filterByOperations()
     *
     * @param     mixed $opId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationOptionQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(LnkOperationOptionPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(LnkOperationOptionPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationOptionPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the op_opt_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpOptId(1234); // WHERE op_opt_id = 1234
     * $query->filterByOpOptId(array(12, 34)); // WHERE op_opt_id IN (12, 34)
     * $query->filterByOpOptId(array('min' => 12)); // WHERE op_opt_id >= 12
     * $query->filterByOpOptId(array('max' => 12)); // WHERE op_opt_id <= 12
     * </code>
     *
     * @see       filterByROperationOptions()
     *
     * @param     mixed $opOptId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationOptionQuery The current query, for fluid interface
     */
    public function filterByOpOptId($opOptId = null, $comparison = null)
    {
        if (is_array($opOptId)) {
            $useMinMax = false;
            if (isset($opOptId['min'])) {
                $this->addUsingAlias(LnkOperationOptionPeer::OP_OPT_ID, $opOptId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opOptId['max'])) {
                $this->addUsingAlias(LnkOperationOptionPeer::OP_OPT_ID, $opOptId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationOptionPeer::OP_OPT_ID, $opOptId, $comparison);
    }

    /**
     * Filter the query on the is_linked column
     *
     * Example usage:
     * <code>
     * $query->filterByIsLinked(true); // WHERE is_linked = true
     * $query->filterByIsLinked('yes'); // WHERE is_linked = true
     * </code>
     *
     * @param     boolean|string $isLinked The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationOptionQuery The current query, for fluid interface
     */
    public function filterByIsLinked($isLinked = null, $comparison = null)
    {
        if (is_string($isLinked)) {
            $isLinked = in_array(strtolower($isLinked), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(LnkOperationOptionPeer::IS_LINKED, $isLinked, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkOperationOptionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(LnkOperationOptionPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkOperationOptionPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return LnkOperationOptionQuery The current query, for fluid interface
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
     * Filter the query by a related ROperationOptions object
     *
     * @param   ROperationOptions|PropelObjectCollection $rOperationOptions The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkOperationOptionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationOptions($rOperationOptions, $comparison = null)
    {
        if ($rOperationOptions instanceof ROperationOptions) {
            return $this
                ->addUsingAlias(LnkOperationOptionPeer::OP_OPT_ID, $rOperationOptions->getROpOptionId(), $comparison);
        } elseif ($rOperationOptions instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkOperationOptionPeer::OP_OPT_ID, $rOperationOptions->toKeyValue('PrimaryKey', 'ROpOptionId'), $comparison);
        } else {
            throw new PropelException('filterByROperationOptions() only accepts arguments of type ROperationOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkOperationOptionQuery The current query, for fluid interface
     */
    public function joinROperationOptions($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationOptions');

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
            $this->addJoinObject($join, 'ROperationOptions');
        }

        return $this;
    }

    /**
     * Use the ROperationOptions relation ROperationOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationOptionsQuery A secondary query class using the current class as primary query
     */
    public function useROperationOptionsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationOptions', 'ROperationOptionsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   LnkOperationOption $lnkOperationOption Object to remove from the list of results
     *
     * @return LnkOperationOptionQuery The current query, for fluid interface
     */
    public function prune($lnkOperationOption = null)
    {
        if ($lnkOperationOption) {
            $this->addUsingAlias(LnkOperationOptionPeer::LNK_OP_OPT_ID, $lnkOperationOption->getLnkOpOptId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
