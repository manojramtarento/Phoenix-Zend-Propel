<?php


/**
 * Base class that represents a query for the 'r_operation_type_sub_tasks' table.
 *
 *
 *
 * @method ROperationTypeSubTasksQuery orderByOstTaskId($order = Criteria::ASC) Order by the ost_task_id column
 * @method ROperationTypeSubTasksQuery orderByOstId($order = Criteria::ASC) Order by the ost_id column
 * @method ROperationTypeSubTasksQuery orderByROpTaskTypeId($order = Criteria::ASC) Order by the r_op_task_type_id column
 *
 * @method ROperationTypeSubTasksQuery groupByOstTaskId() Group by the ost_task_id column
 * @method ROperationTypeSubTasksQuery groupByOstId() Group by the ost_id column
 * @method ROperationTypeSubTasksQuery groupByROpTaskTypeId() Group by the r_op_task_type_id column
 *
 * @method ROperationTypeSubTasksQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeSubTasksQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeSubTasksQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeSubTasks findOne(PropelPDO $con = null) Return the first ROperationTypeSubTasks matching the query
 * @method ROperationTypeSubTasks findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeSubTasks matching the query, or a new ROperationTypeSubTasks object populated from the query conditions when no match is found
 *
 * @method ROperationTypeSubTasks findOneByOstId(int $ost_id) Return the first ROperationTypeSubTasks filtered by the ost_id column
 * @method ROperationTypeSubTasks findOneByROpTaskTypeId(int $r_op_task_type_id) Return the first ROperationTypeSubTasks filtered by the r_op_task_type_id column
 *
 * @method array findByOstTaskId(int $ost_task_id) Return ROperationTypeSubTasks objects filtered by the ost_task_id column
 * @method array findByOstId(int $ost_id) Return ROperationTypeSubTasks objects filtered by the ost_id column
 * @method array findByROpTaskTypeId(int $r_op_task_type_id) Return ROperationTypeSubTasks objects filtered by the r_op_task_type_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTasksQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeSubTasksQuery object.
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
            $modelName = 'ROperationTypeSubTasks';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeSubTasksQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeSubTasksQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeSubTasksQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeSubTasksQuery) {
            return $criteria;
        }
        $query = new ROperationTypeSubTasksQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeSubTasks|ROperationTypeSubTasks[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeSubTasksPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeSubTasks A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOstTaskId($key, $con = null)
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
     * @return                 ROperationTypeSubTasks A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ost_task_id`, `ost_id`, `r_op_task_type_id` FROM `r_operation_type_sub_tasks` WHERE `ost_task_id` = :p0';
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
            $obj = new ROperationTypeSubTasks();
            $obj->hydrate($row);
            ROperationTypeSubTasksPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeSubTasks|ROperationTypeSubTasks[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeSubTasks[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeSubTasksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeSubTasksPeer::OST_TASK_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeSubTasksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeSubTasksPeer::OST_TASK_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ost_task_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTaskId(1234); // WHERE ost_task_id = 1234
     * $query->filterByOstTaskId(array(12, 34)); // WHERE ost_task_id IN (12, 34)
     * $query->filterByOstTaskId(array('min' => 12)); // WHERE ost_task_id >= 12
     * $query->filterByOstTaskId(array('max' => 12)); // WHERE ost_task_id <= 12
     * </code>
     *
     * @param     mixed $ostTaskId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTasksQuery The current query, for fluid interface
     */
    public function filterByOstTaskId($ostTaskId = null, $comparison = null)
    {
        if (is_array($ostTaskId)) {
            $useMinMax = false;
            if (isset($ostTaskId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTasksPeer::OST_TASK_ID, $ostTaskId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTaskId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTasksPeer::OST_TASK_ID, $ostTaskId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTasksPeer::OST_TASK_ID, $ostTaskId, $comparison);
    }

    /**
     * Filter the query on the ost_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstId(1234); // WHERE ost_id = 1234
     * $query->filterByOstId(array(12, 34)); // WHERE ost_id IN (12, 34)
     * $query->filterByOstId(array('min' => 12)); // WHERE ost_id >= 12
     * $query->filterByOstId(array('max' => 12)); // WHERE ost_id <= 12
     * </code>
     *
     * @param     mixed $ostId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTasksQuery The current query, for fluid interface
     */
    public function filterByOstId($ostId = null, $comparison = null)
    {
        if (is_array($ostId)) {
            $useMinMax = false;
            if (isset($ostId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTasksPeer::OST_ID, $ostId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTasksPeer::OST_ID, $ostId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTasksPeer::OST_ID, $ostId, $comparison);
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
     * @return ROperationTypeSubTasksQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeId($rOpTaskTypeId = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeId)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTasksPeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTasksPeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTasksPeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTypeSubTasks $rOperationTypeSubTasks Object to remove from the list of results
     *
     * @return ROperationTypeSubTasksQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeSubTasks = null)
    {
        if ($rOperationTypeSubTasks) {
            $this->addUsingAlias(ROperationTypeSubTasksPeer::OST_TASK_ID, $rOperationTypeSubTasks->getOstTaskId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
