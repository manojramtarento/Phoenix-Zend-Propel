<?php


/**
 * Base class that represents a query for the 'operation_scenarii_parents' table.
 *
 *
 *
 * @method OperationScenariiParentsQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method OperationScenariiParentsQuery orderByOpsNumero($order = Criteria::ASC) Order by the ops_numero column
 * @method OperationScenariiParentsQuery orderByOpsParentNumero($order = Criteria::ASC) Order by the ops_parent_numero column
 *
 * @method OperationScenariiParentsQuery groupByOpId() Group by the op_id column
 * @method OperationScenariiParentsQuery groupByOpsNumero() Group by the ops_numero column
 * @method OperationScenariiParentsQuery groupByOpsParentNumero() Group by the ops_parent_numero column
 *
 * @method OperationScenariiParentsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationScenariiParentsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationScenariiParentsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationScenariiParentsQuery leftJoinOperationScenariiRelatedByOpsNumero($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationScenariiRelatedByOpsNumero relation
 * @method OperationScenariiParentsQuery rightJoinOperationScenariiRelatedByOpsNumero($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationScenariiRelatedByOpsNumero relation
 * @method OperationScenariiParentsQuery innerJoinOperationScenariiRelatedByOpsNumero($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationScenariiRelatedByOpsNumero relation
 *
 * @method OperationScenariiParentsQuery leftJoinOperationScenariiRelatedByOpsParentNumero($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationScenariiRelatedByOpsParentNumero relation
 * @method OperationScenariiParentsQuery rightJoinOperationScenariiRelatedByOpsParentNumero($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationScenariiRelatedByOpsParentNumero relation
 * @method OperationScenariiParentsQuery innerJoinOperationScenariiRelatedByOpsParentNumero($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationScenariiRelatedByOpsParentNumero relation
 *
 * @method OperationScenariiParents findOne(PropelPDO $con = null) Return the first OperationScenariiParents matching the query
 * @method OperationScenariiParents findOneOrCreate(PropelPDO $con = null) Return the first OperationScenariiParents matching the query, or a new OperationScenariiParents object populated from the query conditions when no match is found
 *
 * @method OperationScenariiParents findOneByOpId(int $op_id) Return the first OperationScenariiParents filtered by the op_id column
 * @method OperationScenariiParents findOneByOpsNumero(int $ops_numero) Return the first OperationScenariiParents filtered by the ops_numero column
 * @method OperationScenariiParents findOneByOpsParentNumero(int $ops_parent_numero) Return the first OperationScenariiParents filtered by the ops_parent_numero column
 *
 * @method array findByOpId(int $op_id) Return OperationScenariiParents objects filtered by the op_id column
 * @method array findByOpsNumero(int $ops_numero) Return OperationScenariiParents objects filtered by the ops_numero column
 * @method array findByOpsParentNumero(int $ops_parent_numero) Return OperationScenariiParents objects filtered by the ops_parent_numero column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationScenariiParentsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationScenariiParentsQuery object.
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
            $modelName = 'OperationScenariiParents';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationScenariiParentsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationScenariiParentsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationScenariiParentsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationScenariiParentsQuery) {
            return $criteria;
        }
        $query = new OperationScenariiParentsQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$op_id, $ops_numero, $ops_parent_numero]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   OperationScenariiParents|OperationScenariiParents[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationScenariiParentsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationScenariiParentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationScenariiParents A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_id`, `ops_numero`, `ops_parent_numero` FROM `operation_scenarii_parents` WHERE `op_id` = :p0 AND `ops_numero` = :p1 AND `ops_parent_numero` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new OperationScenariiParents();
            $obj->hydrate($row);
            OperationScenariiParentsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return OperationScenariiParents|OperationScenariiParents[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationScenariiParents[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationScenariiParentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(OperationScenariiParentsPeer::OP_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(OperationScenariiParentsPeer::OPS_NUMERO, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(OperationScenariiParentsPeer::OPS_PARENT_NUMERO, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationScenariiParentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(OperationScenariiParentsPeer::OP_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(OperationScenariiParentsPeer::OPS_NUMERO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(OperationScenariiParentsPeer::OPS_PARENT_NUMERO, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return OperationScenariiParentsQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(OperationScenariiParentsPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(OperationScenariiParentsPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationScenariiParentsPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the ops_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByOpsNumero(1234); // WHERE ops_numero = 1234
     * $query->filterByOpsNumero(array(12, 34)); // WHERE ops_numero IN (12, 34)
     * $query->filterByOpsNumero(array('min' => 12)); // WHERE ops_numero >= 12
     * $query->filterByOpsNumero(array('max' => 12)); // WHERE ops_numero <= 12
     * </code>
     *
     * @see       filterByOperationScenariiRelatedByOpsNumero()
     *
     * @param     mixed $opsNumero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationScenariiParentsQuery The current query, for fluid interface
     */
    public function filterByOpsNumero($opsNumero = null, $comparison = null)
    {
        if (is_array($opsNumero)) {
            $useMinMax = false;
            if (isset($opsNumero['min'])) {
                $this->addUsingAlias(OperationScenariiParentsPeer::OPS_NUMERO, $opsNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opsNumero['max'])) {
                $this->addUsingAlias(OperationScenariiParentsPeer::OPS_NUMERO, $opsNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationScenariiParentsPeer::OPS_NUMERO, $opsNumero, $comparison);
    }

    /**
     * Filter the query on the ops_parent_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByOpsParentNumero(1234); // WHERE ops_parent_numero = 1234
     * $query->filterByOpsParentNumero(array(12, 34)); // WHERE ops_parent_numero IN (12, 34)
     * $query->filterByOpsParentNumero(array('min' => 12)); // WHERE ops_parent_numero >= 12
     * $query->filterByOpsParentNumero(array('max' => 12)); // WHERE ops_parent_numero <= 12
     * </code>
     *
     * @see       filterByOperationScenariiRelatedByOpsParentNumero()
     *
     * @param     mixed $opsParentNumero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationScenariiParentsQuery The current query, for fluid interface
     */
    public function filterByOpsParentNumero($opsParentNumero = null, $comparison = null)
    {
        if (is_array($opsParentNumero)) {
            $useMinMax = false;
            if (isset($opsParentNumero['min'])) {
                $this->addUsingAlias(OperationScenariiParentsPeer::OPS_PARENT_NUMERO, $opsParentNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opsParentNumero['max'])) {
                $this->addUsingAlias(OperationScenariiParentsPeer::OPS_PARENT_NUMERO, $opsParentNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationScenariiParentsPeer::OPS_PARENT_NUMERO, $opsParentNumero, $comparison);
    }

    /**
     * Filter the query by a related OperationScenarii object
     *
     * @param   OperationScenarii|PropelObjectCollection $operationScenarii The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationScenariiParentsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationScenariiRelatedByOpsNumero($operationScenarii, $comparison = null)
    {
        if ($operationScenarii instanceof OperationScenarii) {
            return $this
                ->addUsingAlias(OperationScenariiParentsPeer::OPS_NUMERO, $operationScenarii->getOpScenarioNumero(), $comparison);
        } elseif ($operationScenarii instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationScenariiParentsPeer::OPS_NUMERO, $operationScenarii->toKeyValue('PrimaryKey', 'OpScenarioNumero'), $comparison);
        } else {
            throw new PropelException('filterByOperationScenariiRelatedByOpsNumero() only accepts arguments of type OperationScenarii or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationScenariiRelatedByOpsNumero relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationScenariiParentsQuery The current query, for fluid interface
     */
    public function joinOperationScenariiRelatedByOpsNumero($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationScenariiRelatedByOpsNumero');

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
            $this->addJoinObject($join, 'OperationScenariiRelatedByOpsNumero');
        }

        return $this;
    }

    /**
     * Use the OperationScenariiRelatedByOpsNumero relation OperationScenarii object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationScenariiQuery A secondary query class using the current class as primary query
     */
    public function useOperationScenariiRelatedByOpsNumeroQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationScenariiRelatedByOpsNumero($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationScenariiRelatedByOpsNumero', 'OperationScenariiQuery');
    }

    /**
     * Filter the query by a related OperationScenarii object
     *
     * @param   OperationScenarii|PropelObjectCollection $operationScenarii The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationScenariiParentsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationScenariiRelatedByOpsParentNumero($operationScenarii, $comparison = null)
    {
        if ($operationScenarii instanceof OperationScenarii) {
            return $this
                ->addUsingAlias(OperationScenariiParentsPeer::OPS_PARENT_NUMERO, $operationScenarii->getOpScenarioNumero(), $comparison);
        } elseif ($operationScenarii instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationScenariiParentsPeer::OPS_PARENT_NUMERO, $operationScenarii->toKeyValue('PrimaryKey', 'OpScenarioNumero'), $comparison);
        } else {
            throw new PropelException('filterByOperationScenariiRelatedByOpsParentNumero() only accepts arguments of type OperationScenarii or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationScenariiRelatedByOpsParentNumero relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationScenariiParentsQuery The current query, for fluid interface
     */
    public function joinOperationScenariiRelatedByOpsParentNumero($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationScenariiRelatedByOpsParentNumero');

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
            $this->addJoinObject($join, 'OperationScenariiRelatedByOpsParentNumero');
        }

        return $this;
    }

    /**
     * Use the OperationScenariiRelatedByOpsParentNumero relation OperationScenarii object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationScenariiQuery A secondary query class using the current class as primary query
     */
    public function useOperationScenariiRelatedByOpsParentNumeroQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationScenariiRelatedByOpsParentNumero($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationScenariiRelatedByOpsParentNumero', 'OperationScenariiQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   OperationScenariiParents $operationScenariiParents Object to remove from the list of results
     *
     * @return OperationScenariiParentsQuery The current query, for fluid interface
     */
    public function prune($operationScenariiParents = null)
    {
        if ($operationScenariiParents) {
            $this->addCond('pruneCond0', $this->getAliasedColName(OperationScenariiParentsPeer::OP_ID), $operationScenariiParents->getOpId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(OperationScenariiParentsPeer::OPS_NUMERO), $operationScenariiParents->getOpsNumero(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(OperationScenariiParentsPeer::OPS_PARENT_NUMERO), $operationScenariiParents->getOpsParentNumero(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
