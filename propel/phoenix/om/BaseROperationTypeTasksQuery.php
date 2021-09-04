<?php


/**
 * Base class that represents a query for the 'r_operation_type_tasks' table.
 *
 *
 *
 * @method ROperationTypeTasksQuery orderByOtTaskId($order = Criteria::ASC) Order by the ot_task_id column
 * @method ROperationTypeTasksQuery orderByOtId($order = Criteria::ASC) Order by the ot_id column
 * @method ROperationTypeTasksQuery orderByROpTaskTypeId($order = Criteria::ASC) Order by the r_op_task_type_id column
 *
 * @method ROperationTypeTasksQuery groupByOtTaskId() Group by the ot_task_id column
 * @method ROperationTypeTasksQuery groupByOtId() Group by the ot_id column
 * @method ROperationTypeTasksQuery groupByROpTaskTypeId() Group by the r_op_task_type_id column
 *
 * @method ROperationTypeTasksQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeTasksQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeTasksQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeTasks findOne(PropelPDO $con = null) Return the first ROperationTypeTasks matching the query
 * @method ROperationTypeTasks findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeTasks matching the query, or a new ROperationTypeTasks object populated from the query conditions when no match is found
 *
 * @method ROperationTypeTasks findOneByOtId(int $ot_id) Return the first ROperationTypeTasks filtered by the ot_id column
 * @method ROperationTypeTasks findOneByROpTaskTypeId(int $r_op_task_type_id) Return the first ROperationTypeTasks filtered by the r_op_task_type_id column
 *
 * @method array findByOtTaskId(int $ot_task_id) Return ROperationTypeTasks objects filtered by the ot_task_id column
 * @method array findByOtId(int $ot_id) Return ROperationTypeTasks objects filtered by the ot_id column
 * @method array findByROpTaskTypeId(int $r_op_task_type_id) Return ROperationTypeTasks objects filtered by the r_op_task_type_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeTasksQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeTasksQuery object.
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
            $modelName = 'ROperationTypeTasks';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeTasksQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeTasksQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeTasksQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeTasksQuery) {
            return $criteria;
        }
        $query = new ROperationTypeTasksQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeTasks|ROperationTypeTasks[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeTasksPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeTasks A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOtTaskId($key, $con = null)
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
     * @return                 ROperationTypeTasks A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ot_task_id`, `ot_id`, `r_op_task_type_id` FROM `r_operation_type_tasks` WHERE `ot_task_id` = :p0';
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
            $obj = new ROperationTypeTasks();
            $obj->hydrate($row);
            ROperationTypeTasksPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeTasks|ROperationTypeTasks[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeTasks[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeTasksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeTasksPeer::OT_TASK_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeTasksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeTasksPeer::OT_TASK_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ot_task_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOtTaskId(1234); // WHERE ot_task_id = 1234
     * $query->filterByOtTaskId(array(12, 34)); // WHERE ot_task_id IN (12, 34)
     * $query->filterByOtTaskId(array('min' => 12)); // WHERE ot_task_id >= 12
     * $query->filterByOtTaskId(array('max' => 12)); // WHERE ot_task_id <= 12
     * </code>
     *
     * @param     mixed $otTaskId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeTasksQuery The current query, for fluid interface
     */
    public function filterByOtTaskId($otTaskId = null, $comparison = null)
    {
        if (is_array($otTaskId)) {
            $useMinMax = false;
            if (isset($otTaskId['min'])) {
                $this->addUsingAlias(ROperationTypeTasksPeer::OT_TASK_ID, $otTaskId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otTaskId['max'])) {
                $this->addUsingAlias(ROperationTypeTasksPeer::OT_TASK_ID, $otTaskId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeTasksPeer::OT_TASK_ID, $otTaskId, $comparison);
    }

    /**
     * Filter the query on the ot_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOtId(1234); // WHERE ot_id = 1234
     * $query->filterByOtId(array(12, 34)); // WHERE ot_id IN (12, 34)
     * $query->filterByOtId(array('min' => 12)); // WHERE ot_id >= 12
     * $query->filterByOtId(array('max' => 12)); // WHERE ot_id <= 12
     * </code>
     *
     * @param     mixed $otId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeTasksQuery The current query, for fluid interface
     */
    public function filterByOtId($otId = null, $comparison = null)
    {
        if (is_array($otId)) {
            $useMinMax = false;
            if (isset($otId['min'])) {
                $this->addUsingAlias(ROperationTypeTasksPeer::OT_ID, $otId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otId['max'])) {
                $this->addUsingAlias(ROperationTypeTasksPeer::OT_ID, $otId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeTasksPeer::OT_ID, $otId, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeId(1234); // WHERE r_op_task_type_id = 1234
     * $query->filterByROpTaskTypeId(array(12, 34)); // WHERE r_op_task_type_id IN (12, 34)
     * $query->filterByROpTaskTypeId(array('min' => 12)); // WHERE r_op_task_type_id >= 12
     * $query->filterByROpTaskTypeId(array('max' => 12)); // WHERE r_op_task_type_id <= 12
     * </code>
     *
     * @param     mixed $rOpTaskTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeTasksQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeId($rOpTaskTypeId = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeId)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeId['min'])) {
                $this->addUsingAlias(ROperationTypeTasksPeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeId['max'])) {
                $this->addUsingAlias(ROperationTypeTasksPeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeTasksPeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTypeTasks $rOperationTypeTasks Object to remove from the list of results
     *
     * @return ROperationTypeTasksQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeTasks = null)
    {
        if ($rOperationTypeTasks) {
            $this->addUsingAlias(ROperationTypeTasksPeer::OT_TASK_ID, $rOperationTypeTasks->getOtTaskId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
