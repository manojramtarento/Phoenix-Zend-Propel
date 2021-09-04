<?php


/**
 * Base class that represents a query for the 'r_operation_status_required_options' table.
 *
 *
 *
 * @method ROperationStatusRequiredOptionsQuery orderByROperationStatusRequiredOptionsROperationStatusOsId($order = Criteria::ASC) Order by the r_operation_status_required_options_r_operation_status_os_id column
 * @method ROperationStatusRequiredOptionsQuery orderByROperationStatusRequiredOptionsROperationOptionId($order = Criteria::ASC) Order by the r_operation_status_required_options_r_operation_option_id column
 *
 * @method ROperationStatusRequiredOptionsQuery groupByROperationStatusRequiredOptionsROperationStatusOsId() Group by the r_operation_status_required_options_r_operation_status_os_id column
 * @method ROperationStatusRequiredOptionsQuery groupByROperationStatusRequiredOptionsROperationOptionId() Group by the r_operation_status_required_options_r_operation_option_id column
 *
 * @method ROperationStatusRequiredOptionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationStatusRequiredOptionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationStatusRequiredOptionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationStatusRequiredOptionsQuery leftJoinROperationOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationOptions relation
 * @method ROperationStatusRequiredOptionsQuery rightJoinROperationOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationOptions relation
 * @method ROperationStatusRequiredOptionsQuery innerJoinROperationOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationOptions relation
 *
 * @method ROperationStatusRequiredOptionsQuery leftJoinROperationStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationStatus relation
 * @method ROperationStatusRequiredOptionsQuery rightJoinROperationStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationStatus relation
 * @method ROperationStatusRequiredOptionsQuery innerJoinROperationStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationStatus relation
 *
 * @method ROperationStatusRequiredOptions findOne(PropelPDO $con = null) Return the first ROperationStatusRequiredOptions matching the query
 * @method ROperationStatusRequiredOptions findOneOrCreate(PropelPDO $con = null) Return the first ROperationStatusRequiredOptions matching the query, or a new ROperationStatusRequiredOptions object populated from the query conditions when no match is found
 *
 * @method ROperationStatusRequiredOptions findOneByROperationStatusRequiredOptionsROperationStatusOsId(int $r_operation_status_required_options_r_operation_status_os_id) Return the first ROperationStatusRequiredOptions filtered by the r_operation_status_required_options_r_operation_status_os_id column
 * @method ROperationStatusRequiredOptions findOneByROperationStatusRequiredOptionsROperationOptionId(int $r_operation_status_required_options_r_operation_option_id) Return the first ROperationStatusRequiredOptions filtered by the r_operation_status_required_options_r_operation_option_id column
 *
 * @method array findByROperationStatusRequiredOptionsROperationStatusOsId(int $r_operation_status_required_options_r_operation_status_os_id) Return ROperationStatusRequiredOptions objects filtered by the r_operation_status_required_options_r_operation_status_os_id column
 * @method array findByROperationStatusRequiredOptionsROperationOptionId(int $r_operation_status_required_options_r_operation_option_id) Return ROperationStatusRequiredOptions objects filtered by the r_operation_status_required_options_r_operation_option_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationStatusRequiredOptionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationStatusRequiredOptionsQuery object.
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
            $modelName = 'ROperationStatusRequiredOptions';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationStatusRequiredOptionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationStatusRequiredOptionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationStatusRequiredOptionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationStatusRequiredOptionsQuery) {
            return $criteria;
        }
        $query = new ROperationStatusRequiredOptionsQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$r_operation_status_required_options_r_operation_status_os_id, $r_operation_status_required_options_r_operation_option_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ROperationStatusRequiredOptions|ROperationStatusRequiredOptions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationStatusRequiredOptionsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationStatusRequiredOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ROperationStatusRequiredOptions A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_operation_status_required_options_r_operation_status_os_id`, `r_operation_status_required_options_r_operation_option_id` FROM `r_operation_status_required_options` WHERE `r_operation_status_required_options_r_operation_status_os_id` = :p0 AND `r_operation_status_required_options_r_operation_option_id` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ROperationStatusRequiredOptions();
            $obj->hydrate($row);
            ROperationStatusRequiredOptionsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return ROperationStatusRequiredOptions|ROperationStatusRequiredOptions[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ROperationStatusRequiredOptions[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationStatusRequiredOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_STATUS_OS_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_OPTION_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationStatusRequiredOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_STATUS_OS_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_OPTION_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the r_operation_status_required_options_r_operation_status_os_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationStatusRequiredOptionsROperationStatusOsId(1234); // WHERE r_operation_status_required_options_r_operation_status_os_id = 1234
     * $query->filterByROperationStatusRequiredOptionsROperationStatusOsId(array(12, 34)); // WHERE r_operation_status_required_options_r_operation_status_os_id IN (12, 34)
     * $query->filterByROperationStatusRequiredOptionsROperationStatusOsId(array('min' => 12)); // WHERE r_operation_status_required_options_r_operation_status_os_id >= 12
     * $query->filterByROperationStatusRequiredOptionsROperationStatusOsId(array('max' => 12)); // WHERE r_operation_status_required_options_r_operation_status_os_id <= 12
     * </code>
     *
     * @see       filterByROperationStatus()
     *
     * @param     mixed $rOperationStatusRequiredOptionsROperationStatusOsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationStatusRequiredOptionsQuery The current query, for fluid interface
     */
    public function filterByROperationStatusRequiredOptionsROperationStatusOsId($rOperationStatusRequiredOptionsROperationStatusOsId = null, $comparison = null)
    {
        if (is_array($rOperationStatusRequiredOptionsROperationStatusOsId)) {
            $useMinMax = false;
            if (isset($rOperationStatusRequiredOptionsROperationStatusOsId['min'])) {
                $this->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_STATUS_OS_ID, $rOperationStatusRequiredOptionsROperationStatusOsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationStatusRequiredOptionsROperationStatusOsId['max'])) {
                $this->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_STATUS_OS_ID, $rOperationStatusRequiredOptionsROperationStatusOsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_STATUS_OS_ID, $rOperationStatusRequiredOptionsROperationStatusOsId, $comparison);
    }

    /**
     * Filter the query on the r_operation_status_required_options_r_operation_option_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationStatusRequiredOptionsROperationOptionId(1234); // WHERE r_operation_status_required_options_r_operation_option_id = 1234
     * $query->filterByROperationStatusRequiredOptionsROperationOptionId(array(12, 34)); // WHERE r_operation_status_required_options_r_operation_option_id IN (12, 34)
     * $query->filterByROperationStatusRequiredOptionsROperationOptionId(array('min' => 12)); // WHERE r_operation_status_required_options_r_operation_option_id >= 12
     * $query->filterByROperationStatusRequiredOptionsROperationOptionId(array('max' => 12)); // WHERE r_operation_status_required_options_r_operation_option_id <= 12
     * </code>
     *
     * @see       filterByROperationOptions()
     *
     * @param     mixed $rOperationStatusRequiredOptionsROperationOptionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationStatusRequiredOptionsQuery The current query, for fluid interface
     */
    public function filterByROperationStatusRequiredOptionsROperationOptionId($rOperationStatusRequiredOptionsROperationOptionId = null, $comparison = null)
    {
        if (is_array($rOperationStatusRequiredOptionsROperationOptionId)) {
            $useMinMax = false;
            if (isset($rOperationStatusRequiredOptionsROperationOptionId['min'])) {
                $this->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_OPTION_ID, $rOperationStatusRequiredOptionsROperationOptionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationStatusRequiredOptionsROperationOptionId['max'])) {
                $this->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_OPTION_ID, $rOperationStatusRequiredOptionsROperationOptionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_OPTION_ID, $rOperationStatusRequiredOptionsROperationOptionId, $comparison);
    }

    /**
     * Filter the query by a related ROperationOptions object
     *
     * @param   ROperationOptions|PropelObjectCollection $rOperationOptions The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationStatusRequiredOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationOptions($rOperationOptions, $comparison = null)
    {
        if ($rOperationOptions instanceof ROperationOptions) {
            return $this
                ->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_OPTION_ID, $rOperationOptions->getROpOptionId(), $comparison);
        } elseif ($rOperationOptions instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_OPTION_ID, $rOperationOptions->toKeyValue('PrimaryKey', 'ROpOptionId'), $comparison);
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
     * @return ROperationStatusRequiredOptionsQuery The current query, for fluid interface
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
     * Filter the query by a related ROperationStatus object
     *
     * @param   ROperationStatus|PropelObjectCollection $rOperationStatus The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationStatusRequiredOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationStatus($rOperationStatus, $comparison = null)
    {
        if ($rOperationStatus instanceof ROperationStatus) {
            return $this
                ->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_STATUS_OS_ID, $rOperationStatus->getOsId(), $comparison);
        } elseif ($rOperationStatus instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_STATUS_OS_ID, $rOperationStatus->toKeyValue('PrimaryKey', 'OsId'), $comparison);
        } else {
            throw new PropelException('filterByROperationStatus() only accepts arguments of type ROperationStatus or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationStatus relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationStatusRequiredOptionsQuery The current query, for fluid interface
     */
    public function joinROperationStatus($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationStatus');

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
            $this->addJoinObject($join, 'ROperationStatus');
        }

        return $this;
    }

    /**
     * Use the ROperationStatus relation ROperationStatus object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationStatusQuery A secondary query class using the current class as primary query
     */
    public function useROperationStatusQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationStatus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationStatus', 'ROperationStatusQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationStatusRequiredOptions $rOperationStatusRequiredOptions Object to remove from the list of results
     *
     * @return ROperationStatusRequiredOptionsQuery The current query, for fluid interface
     */
    public function prune($rOperationStatusRequiredOptions = null)
    {
        if ($rOperationStatusRequiredOptions) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_STATUS_OS_ID), $rOperationStatusRequiredOptions->getROperationStatusRequiredOptionsROperationStatusOsId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ROperationStatusRequiredOptionsPeer::R_OPERATION_STATUS_REQUIRED_OPTIONS_R_OPERATION_OPTION_ID), $rOperationStatusRequiredOptions->getROperationStatusRequiredOptionsROperationOptionId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
