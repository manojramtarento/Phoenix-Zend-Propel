<?php


/**
 * Base class that represents a query for the 'r_operation_type_required_options' table.
 *
 *
 *
 * @method ROperationTypeRequiredOptionsQuery orderByROperationTypeRequiredOptionROperationTypeId($order = Criteria::ASC) Order by the r_operation_type_required_option_r_operation_type_id column
 * @method ROperationTypeRequiredOptionsQuery orderByROperationTypeRequiredOptionROperationOptionId($order = Criteria::ASC) Order by the r_operation_type_required_option_r_operation_option_id column
 *
 * @method ROperationTypeRequiredOptionsQuery groupByROperationTypeRequiredOptionROperationTypeId() Group by the r_operation_type_required_option_r_operation_type_id column
 * @method ROperationTypeRequiredOptionsQuery groupByROperationTypeRequiredOptionROperationOptionId() Group by the r_operation_type_required_option_r_operation_option_id column
 *
 * @method ROperationTypeRequiredOptionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeRequiredOptionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeRequiredOptionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeRequiredOptionsQuery leftJoinROperationOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationOptions relation
 * @method ROperationTypeRequiredOptionsQuery rightJoinROperationOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationOptions relation
 * @method ROperationTypeRequiredOptionsQuery innerJoinROperationOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationOptions relation
 *
 * @method ROperationTypeRequiredOptionsQuery leftJoinROperationType($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationType relation
 * @method ROperationTypeRequiredOptionsQuery rightJoinROperationType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationType relation
 * @method ROperationTypeRequiredOptionsQuery innerJoinROperationType($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationType relation
 *
 * @method ROperationTypeRequiredOptions findOne(PropelPDO $con = null) Return the first ROperationTypeRequiredOptions matching the query
 * @method ROperationTypeRequiredOptions findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeRequiredOptions matching the query, or a new ROperationTypeRequiredOptions object populated from the query conditions when no match is found
 *
 * @method ROperationTypeRequiredOptions findOneByROperationTypeRequiredOptionROperationTypeId(int $r_operation_type_required_option_r_operation_type_id) Return the first ROperationTypeRequiredOptions filtered by the r_operation_type_required_option_r_operation_type_id column
 * @method ROperationTypeRequiredOptions findOneByROperationTypeRequiredOptionROperationOptionId(int $r_operation_type_required_option_r_operation_option_id) Return the first ROperationTypeRequiredOptions filtered by the r_operation_type_required_option_r_operation_option_id column
 *
 * @method array findByROperationTypeRequiredOptionROperationTypeId(int $r_operation_type_required_option_r_operation_type_id) Return ROperationTypeRequiredOptions objects filtered by the r_operation_type_required_option_r_operation_type_id column
 * @method array findByROperationTypeRequiredOptionROperationOptionId(int $r_operation_type_required_option_r_operation_option_id) Return ROperationTypeRequiredOptions objects filtered by the r_operation_type_required_option_r_operation_option_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeRequiredOptionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeRequiredOptionsQuery object.
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
            $modelName = 'ROperationTypeRequiredOptions';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeRequiredOptionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeRequiredOptionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeRequiredOptionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeRequiredOptionsQuery) {
            return $criteria;
        }
        $query = new ROperationTypeRequiredOptionsQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$r_operation_type_required_option_r_operation_type_id, $r_operation_type_required_option_r_operation_option_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ROperationTypeRequiredOptions|ROperationTypeRequiredOptions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeRequiredOptionsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeRequiredOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeRequiredOptions A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_operation_type_required_option_r_operation_type_id`, `r_operation_type_required_option_r_operation_option_id` FROM `r_operation_type_required_options` WHERE `r_operation_type_required_option_r_operation_type_id` = :p0 AND `r_operation_type_required_option_r_operation_option_id` = :p1';
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
            $obj = new ROperationTypeRequiredOptions();
            $obj->hydrate($row);
            ROperationTypeRequiredOptionsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return ROperationTypeRequiredOptions|ROperationTypeRequiredOptions[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeRequiredOptions[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeRequiredOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_TYPE_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_OPTION_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeRequiredOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_TYPE_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_OPTION_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the r_operation_type_required_option_r_operation_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeRequiredOptionROperationTypeId(1234); // WHERE r_operation_type_required_option_r_operation_type_id = 1234
     * $query->filterByROperationTypeRequiredOptionROperationTypeId(array(12, 34)); // WHERE r_operation_type_required_option_r_operation_type_id IN (12, 34)
     * $query->filterByROperationTypeRequiredOptionROperationTypeId(array('min' => 12)); // WHERE r_operation_type_required_option_r_operation_type_id >= 12
     * $query->filterByROperationTypeRequiredOptionROperationTypeId(array('max' => 12)); // WHERE r_operation_type_required_option_r_operation_type_id <= 12
     * </code>
     *
     * @see       filterByROperationType()
     *
     * @param     mixed $rOperationTypeRequiredOptionROperationTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeRequiredOptionsQuery The current query, for fluid interface
     */
    public function filterByROperationTypeRequiredOptionROperationTypeId($rOperationTypeRequiredOptionROperationTypeId = null, $comparison = null)
    {
        if (is_array($rOperationTypeRequiredOptionROperationTypeId)) {
            $useMinMax = false;
            if (isset($rOperationTypeRequiredOptionROperationTypeId['min'])) {
                $this->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_TYPE_ID, $rOperationTypeRequiredOptionROperationTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeRequiredOptionROperationTypeId['max'])) {
                $this->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_TYPE_ID, $rOperationTypeRequiredOptionROperationTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_TYPE_ID, $rOperationTypeRequiredOptionROperationTypeId, $comparison);
    }

    /**
     * Filter the query on the r_operation_type_required_option_r_operation_option_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeRequiredOptionROperationOptionId(1234); // WHERE r_operation_type_required_option_r_operation_option_id = 1234
     * $query->filterByROperationTypeRequiredOptionROperationOptionId(array(12, 34)); // WHERE r_operation_type_required_option_r_operation_option_id IN (12, 34)
     * $query->filterByROperationTypeRequiredOptionROperationOptionId(array('min' => 12)); // WHERE r_operation_type_required_option_r_operation_option_id >= 12
     * $query->filterByROperationTypeRequiredOptionROperationOptionId(array('max' => 12)); // WHERE r_operation_type_required_option_r_operation_option_id <= 12
     * </code>
     *
     * @see       filterByROperationOptions()
     *
     * @param     mixed $rOperationTypeRequiredOptionROperationOptionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeRequiredOptionsQuery The current query, for fluid interface
     */
    public function filterByROperationTypeRequiredOptionROperationOptionId($rOperationTypeRequiredOptionROperationOptionId = null, $comparison = null)
    {
        if (is_array($rOperationTypeRequiredOptionROperationOptionId)) {
            $useMinMax = false;
            if (isset($rOperationTypeRequiredOptionROperationOptionId['min'])) {
                $this->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_OPTION_ID, $rOperationTypeRequiredOptionROperationOptionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeRequiredOptionROperationOptionId['max'])) {
                $this->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_OPTION_ID, $rOperationTypeRequiredOptionROperationOptionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_OPTION_ID, $rOperationTypeRequiredOptionROperationOptionId, $comparison);
    }

    /**
     * Filter the query by a related ROperationOptions object
     *
     * @param   ROperationOptions|PropelObjectCollection $rOperationOptions The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeRequiredOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationOptions($rOperationOptions, $comparison = null)
    {
        if ($rOperationOptions instanceof ROperationOptions) {
            return $this
                ->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_OPTION_ID, $rOperationOptions->getROpOptionId(), $comparison);
        } elseif ($rOperationOptions instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_OPTION_ID, $rOperationOptions->toKeyValue('PrimaryKey', 'ROpOptionId'), $comparison);
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
     * @return ROperationTypeRequiredOptionsQuery The current query, for fluid interface
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
     * Filter the query by a related ROperationType object
     *
     * @param   ROperationType|PropelObjectCollection $rOperationType The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeRequiredOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationType($rOperationType, $comparison = null)
    {
        if ($rOperationType instanceof ROperationType) {
            return $this
                ->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_TYPE_ID, $rOperationType->getOtId(), $comparison);
        } elseif ($rOperationType instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_TYPE_ID, $rOperationType->toKeyValue('PrimaryKey', 'OtId'), $comparison);
        } else {
            throw new PropelException('filterByROperationType() only accepts arguments of type ROperationType or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeRequiredOptionsQuery The current query, for fluid interface
     */
    public function joinROperationType($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationType');

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
            $this->addJoinObject($join, 'ROperationType');
        }

        return $this;
    }

    /**
     * Use the ROperationType relation ROperationType object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationType', 'ROperationTypeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTypeRequiredOptions $rOperationTypeRequiredOptions Object to remove from the list of results
     *
     * @return ROperationTypeRequiredOptionsQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeRequiredOptions = null)
    {
        if ($rOperationTypeRequiredOptions) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_TYPE_ID), $rOperationTypeRequiredOptions->getROperationTypeRequiredOptionROperationTypeId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ROperationTypeRequiredOptionsPeer::R_OPERATION_TYPE_REQUIRED_OPTION_R_OPERATION_OPTION_ID), $rOperationTypeRequiredOptions->getROperationTypeRequiredOptionROperationOptionId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
