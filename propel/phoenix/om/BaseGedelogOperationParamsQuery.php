<?php


/**
 * Base class that represents a query for the 'gedelog_operation_params' table.
 *
 *
 *
 * @method GedelogOperationParamsQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method GedelogOperationParamsQuery orderByGdlOpId($order = Criteria::ASC) Order by the gdl_op_id column
 * @method GedelogOperationParamsQuery orderByGdlEntId($order = Criteria::ASC) Order by the gdl_ent_id column
 * @method GedelogOperationParamsQuery orderByGdlComtId($order = Criteria::ASC) Order by the gdl_comt_id column
 * @method GedelogOperationParamsQuery orderByGdlFournId($order = Criteria::ASC) Order by the gdl_fourn_id column
 *
 * @method GedelogOperationParamsQuery groupByOpId() Group by the op_id column
 * @method GedelogOperationParamsQuery groupByGdlOpId() Group by the gdl_op_id column
 * @method GedelogOperationParamsQuery groupByGdlEntId() Group by the gdl_ent_id column
 * @method GedelogOperationParamsQuery groupByGdlComtId() Group by the gdl_comt_id column
 * @method GedelogOperationParamsQuery groupByGdlFournId() Group by the gdl_fourn_id column
 *
 * @method GedelogOperationParamsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GedelogOperationParamsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GedelogOperationParamsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GedelogOperationParamsQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method GedelogOperationParamsQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method GedelogOperationParamsQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method GedelogOperationParams findOne(PropelPDO $con = null) Return the first GedelogOperationParams matching the query
 * @method GedelogOperationParams findOneOrCreate(PropelPDO $con = null) Return the first GedelogOperationParams matching the query, or a new GedelogOperationParams object populated from the query conditions when no match is found
 *
 * @method GedelogOperationParams findOneByGdlOpId(int $gdl_op_id) Return the first GedelogOperationParams filtered by the gdl_op_id column
 * @method GedelogOperationParams findOneByGdlEntId(int $gdl_ent_id) Return the first GedelogOperationParams filtered by the gdl_ent_id column
 * @method GedelogOperationParams findOneByGdlComtId(int $gdl_comt_id) Return the first GedelogOperationParams filtered by the gdl_comt_id column
 * @method GedelogOperationParams findOneByGdlFournId(int $gdl_fourn_id) Return the first GedelogOperationParams filtered by the gdl_fourn_id column
 *
 * @method array findByOpId(int $op_id) Return GedelogOperationParams objects filtered by the op_id column
 * @method array findByGdlOpId(int $gdl_op_id) Return GedelogOperationParams objects filtered by the gdl_op_id column
 * @method array findByGdlEntId(int $gdl_ent_id) Return GedelogOperationParams objects filtered by the gdl_ent_id column
 * @method array findByGdlComtId(int $gdl_comt_id) Return GedelogOperationParams objects filtered by the gdl_comt_id column
 * @method array findByGdlFournId(int $gdl_fourn_id) Return GedelogOperationParams objects filtered by the gdl_fourn_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseGedelogOperationParamsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGedelogOperationParamsQuery object.
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
            $modelName = 'GedelogOperationParams';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GedelogOperationParamsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GedelogOperationParamsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GedelogOperationParamsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GedelogOperationParamsQuery) {
            return $criteria;
        }
        $query = new GedelogOperationParamsQuery(null, null, $modelAlias);

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
     * @return   GedelogOperationParams|GedelogOperationParams[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GedelogOperationParamsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GedelogOperationParamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GedelogOperationParams A model object, or null if the key is not found
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
     * @return                 GedelogOperationParams A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_id`, `gdl_op_id`, `gdl_ent_id`, `gdl_comt_id`, `gdl_fourn_id` FROM `gedelog_operation_params` WHERE `op_id` = :p0';
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
            $obj = new GedelogOperationParams();
            $obj->hydrate($row);
            GedelogOperationParamsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GedelogOperationParams|GedelogOperationParams[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GedelogOperationParams[]|mixed the list of results, formatted by the current formatter
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
     * @return GedelogOperationParamsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GedelogOperationParamsPeer::OP_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GedelogOperationParamsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GedelogOperationParamsPeer::OP_ID, $keys, Criteria::IN);
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
     * @return GedelogOperationParamsQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(GedelogOperationParamsPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(GedelogOperationParamsPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogOperationParamsPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the gdl_op_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGdlOpId(1234); // WHERE gdl_op_id = 1234
     * $query->filterByGdlOpId(array(12, 34)); // WHERE gdl_op_id IN (12, 34)
     * $query->filterByGdlOpId(array('min' => 12)); // WHERE gdl_op_id >= 12
     * $query->filterByGdlOpId(array('max' => 12)); // WHERE gdl_op_id <= 12
     * </code>
     *
     * @param     mixed $gdlOpId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GedelogOperationParamsQuery The current query, for fluid interface
     */
    public function filterByGdlOpId($gdlOpId = null, $comparison = null)
    {
        if (is_array($gdlOpId)) {
            $useMinMax = false;
            if (isset($gdlOpId['min'])) {
                $this->addUsingAlias(GedelogOperationParamsPeer::GDL_OP_ID, $gdlOpId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gdlOpId['max'])) {
                $this->addUsingAlias(GedelogOperationParamsPeer::GDL_OP_ID, $gdlOpId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogOperationParamsPeer::GDL_OP_ID, $gdlOpId, $comparison);
    }

    /**
     * Filter the query on the gdl_ent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGdlEntId(1234); // WHERE gdl_ent_id = 1234
     * $query->filterByGdlEntId(array(12, 34)); // WHERE gdl_ent_id IN (12, 34)
     * $query->filterByGdlEntId(array('min' => 12)); // WHERE gdl_ent_id >= 12
     * $query->filterByGdlEntId(array('max' => 12)); // WHERE gdl_ent_id <= 12
     * </code>
     *
     * @param     mixed $gdlEntId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GedelogOperationParamsQuery The current query, for fluid interface
     */
    public function filterByGdlEntId($gdlEntId = null, $comparison = null)
    {
        if (is_array($gdlEntId)) {
            $useMinMax = false;
            if (isset($gdlEntId['min'])) {
                $this->addUsingAlias(GedelogOperationParamsPeer::GDL_ENT_ID, $gdlEntId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gdlEntId['max'])) {
                $this->addUsingAlias(GedelogOperationParamsPeer::GDL_ENT_ID, $gdlEntId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogOperationParamsPeer::GDL_ENT_ID, $gdlEntId, $comparison);
    }

    /**
     * Filter the query on the gdl_comt_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGdlComtId(1234); // WHERE gdl_comt_id = 1234
     * $query->filterByGdlComtId(array(12, 34)); // WHERE gdl_comt_id IN (12, 34)
     * $query->filterByGdlComtId(array('min' => 12)); // WHERE gdl_comt_id >= 12
     * $query->filterByGdlComtId(array('max' => 12)); // WHERE gdl_comt_id <= 12
     * </code>
     *
     * @param     mixed $gdlComtId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GedelogOperationParamsQuery The current query, for fluid interface
     */
    public function filterByGdlComtId($gdlComtId = null, $comparison = null)
    {
        if (is_array($gdlComtId)) {
            $useMinMax = false;
            if (isset($gdlComtId['min'])) {
                $this->addUsingAlias(GedelogOperationParamsPeer::GDL_COMT_ID, $gdlComtId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gdlComtId['max'])) {
                $this->addUsingAlias(GedelogOperationParamsPeer::GDL_COMT_ID, $gdlComtId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogOperationParamsPeer::GDL_COMT_ID, $gdlComtId, $comparison);
    }

    /**
     * Filter the query on the gdl_fourn_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGdlFournId(1234); // WHERE gdl_fourn_id = 1234
     * $query->filterByGdlFournId(array(12, 34)); // WHERE gdl_fourn_id IN (12, 34)
     * $query->filterByGdlFournId(array('min' => 12)); // WHERE gdl_fourn_id >= 12
     * $query->filterByGdlFournId(array('max' => 12)); // WHERE gdl_fourn_id <= 12
     * </code>
     *
     * @param     mixed $gdlFournId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GedelogOperationParamsQuery The current query, for fluid interface
     */
    public function filterByGdlFournId($gdlFournId = null, $comparison = null)
    {
        if (is_array($gdlFournId)) {
            $useMinMax = false;
            if (isset($gdlFournId['min'])) {
                $this->addUsingAlias(GedelogOperationParamsPeer::GDL_FOURN_ID, $gdlFournId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gdlFournId['max'])) {
                $this->addUsingAlias(GedelogOperationParamsPeer::GDL_FOURN_ID, $gdlFournId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogOperationParamsPeer::GDL_FOURN_ID, $gdlFournId, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GedelogOperationParamsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(GedelogOperationParamsPeer::OP_ID, $operations->getOpId(), $comparison);
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
     * @return GedelogOperationParamsQuery The current query, for fluid interface
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
     * @param   GedelogOperationParams $gedelogOperationParams Object to remove from the list of results
     *
     * @return GedelogOperationParamsQuery The current query, for fluid interface
     */
    public function prune($gedelogOperationParams = null)
    {
        if ($gedelogOperationParams) {
            $this->addUsingAlias(GedelogOperationParamsPeer::OP_ID, $gedelogOperationParams->getOpId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
