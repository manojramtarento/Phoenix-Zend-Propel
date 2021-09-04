<?php


/**
 * Base class that represents a query for the 'r_operation_options_tasks' table.
 *
 *
 *
 * @method ROperationOptionsTasksQuery orderByOptionTaskId($order = Criteria::ASC) Order by the option_task_id column
 * @method ROperationOptionsTasksQuery orderByOptionId($order = Criteria::ASC) Order by the option_id column
 * @method ROperationOptionsTasksQuery orderByROpTaskTypeId($order = Criteria::ASC) Order by the r_op_task_type_id column
 *
 * @method ROperationOptionsTasksQuery groupByOptionTaskId() Group by the option_task_id column
 * @method ROperationOptionsTasksQuery groupByOptionId() Group by the option_id column
 * @method ROperationOptionsTasksQuery groupByROpTaskTypeId() Group by the r_op_task_type_id column
 *
 * @method ROperationOptionsTasksQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationOptionsTasksQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationOptionsTasksQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationOptionsTasks findOne(PropelPDO $con = null) Return the first ROperationOptionsTasks matching the query
 * @method ROperationOptionsTasks findOneOrCreate(PropelPDO $con = null) Return the first ROperationOptionsTasks matching the query, or a new ROperationOptionsTasks object populated from the query conditions when no match is found
 *
 * @method ROperationOptionsTasks findOneByOptionId(int $option_id) Return the first ROperationOptionsTasks filtered by the option_id column
 * @method ROperationOptionsTasks findOneByROpTaskTypeId(int $r_op_task_type_id) Return the first ROperationOptionsTasks filtered by the r_op_task_type_id column
 *
 * @method array findByOptionTaskId(int $option_task_id) Return ROperationOptionsTasks objects filtered by the option_task_id column
 * @method array findByOptionId(int $option_id) Return ROperationOptionsTasks objects filtered by the option_id column
 * @method array findByROpTaskTypeId(int $r_op_task_type_id) Return ROperationOptionsTasks objects filtered by the r_op_task_type_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationOptionsTasksQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationOptionsTasksQuery object.
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
            $modelName = 'ROperationOptionsTasks';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationOptionsTasksQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationOptionsTasksQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationOptionsTasksQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationOptionsTasksQuery) {
            return $criteria;
        }
        $query = new ROperationOptionsTasksQuery(null, null, $modelAlias);

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
     * @return   ROperationOptionsTasks|ROperationOptionsTasks[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationOptionsTasksPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationOptionsTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationOptionsTasks A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOptionTaskId($key, $con = null)
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
     * @return                 ROperationOptionsTasks A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `option_task_id`, `option_id`, `r_op_task_type_id` FROM `r_operation_options_tasks` WHERE `option_task_id` = :p0';
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
            $obj = new ROperationOptionsTasks();
            $obj->hydrate($row);
            ROperationOptionsTasksPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationOptionsTasks|ROperationOptionsTasks[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationOptionsTasks[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationOptionsTasksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationOptionsTasksPeer::OPTION_TASK_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationOptionsTasksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationOptionsTasksPeer::OPTION_TASK_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the option_task_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOptionTaskId(1234); // WHERE option_task_id = 1234
     * $query->filterByOptionTaskId(array(12, 34)); // WHERE option_task_id IN (12, 34)
     * $query->filterByOptionTaskId(array('min' => 12)); // WHERE option_task_id >= 12
     * $query->filterByOptionTaskId(array('max' => 12)); // WHERE option_task_id <= 12
     * </code>
     *
     * @param     mixed $optionTaskId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsTasksQuery The current query, for fluid interface
     */
    public function filterByOptionTaskId($optionTaskId = null, $comparison = null)
    {
        if (is_array($optionTaskId)) {
            $useMinMax = false;
            if (isset($optionTaskId['min'])) {
                $this->addUsingAlias(ROperationOptionsTasksPeer::OPTION_TASK_ID, $optionTaskId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optionTaskId['max'])) {
                $this->addUsingAlias(ROperationOptionsTasksPeer::OPTION_TASK_ID, $optionTaskId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsTasksPeer::OPTION_TASK_ID, $optionTaskId, $comparison);
    }

    /**
     * Filter the query on the option_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOptionId(1234); // WHERE option_id = 1234
     * $query->filterByOptionId(array(12, 34)); // WHERE option_id IN (12, 34)
     * $query->filterByOptionId(array('min' => 12)); // WHERE option_id >= 12
     * $query->filterByOptionId(array('max' => 12)); // WHERE option_id <= 12
     * </code>
     *
     * @param     mixed $optionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsTasksQuery The current query, for fluid interface
     */
    public function filterByOptionId($optionId = null, $comparison = null)
    {
        if (is_array($optionId)) {
            $useMinMax = false;
            if (isset($optionId['min'])) {
                $this->addUsingAlias(ROperationOptionsTasksPeer::OPTION_ID, $optionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optionId['max'])) {
                $this->addUsingAlias(ROperationOptionsTasksPeer::OPTION_ID, $optionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsTasksPeer::OPTION_ID, $optionId, $comparison);
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
     * @return ROperationOptionsTasksQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeId($rOpTaskTypeId = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeId)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeId['min'])) {
                $this->addUsingAlias(ROperationOptionsTasksPeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeId['max'])) {
                $this->addUsingAlias(ROperationOptionsTasksPeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsTasksPeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationOptionsTasks $rOperationOptionsTasks Object to remove from the list of results
     *
     * @return ROperationOptionsTasksQuery The current query, for fluid interface
     */
    public function prune($rOperationOptionsTasks = null)
    {
        if ($rOperationOptionsTasks) {
            $this->addUsingAlias(ROperationOptionsTasksPeer::OPTION_TASK_ID, $rOperationOptionsTasks->getOptionTaskId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
