<?php


/**
 * Base class that represents a query for the 'operation_tasks' table.
 *
 *
 *
 * @method OperationTasksQuery orderByOpTaskId($order = Criteria::ASC) Order by the op_task_id column
 * @method OperationTasksQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method OperationTasksQuery orderByOpTaskTypeId($order = Criteria::ASC) Order by the op_task_type_id column
 * @method OperationTasksQuery orderByOpTaskDeadline($order = Criteria::ASC) Order by the op_task_deadline column
 * @method OperationTasksQuery orderByOpTaskAlerte($order = Criteria::ASC) Order by the op_task_alerte column
 * @method OperationTasksQuery orderByOpTaskRetard($order = Criteria::ASC) Order by the op_task_retard column
 * @method OperationTasksQuery orderByOpTaskDureeEstim($order = Criteria::ASC) Order by the op_task_duree_estim column
 * @method OperationTasksQuery orderByOpTaskDureeReelle($order = Criteria::ASC) Order by the op_task_duree_reelle column
 * @method OperationTasksQuery orderByOpTaskDetail($order = Criteria::ASC) Order by the op_task_detail column
 * @method OperationTasksQuery orderByOpTaskDone($order = Criteria::ASC) Order by the op_task_done column
 * @method OperationTasksQuery orderByOpTaskComments($order = Criteria::ASC) Order by the op_task_comments column
 * @method OperationTasksQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method OperationTasksQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method OperationTasksQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method OperationTasksQuery orderByOpTaskAssignToUser($order = Criteria::ASC) Order by the op_task_assign_to_user column
 * @method OperationTasksQuery orderByOpTaskNotifyToUser($order = Criteria::ASC) Order by the op_task_notify_to_user column
 * @method OperationTasksQuery orderByOpTaskAssignToGroup($order = Criteria::ASC) Order by the op_task_assign_to_group column
 * @method OperationTasksQuery orderByOpTaskNotifyToGroup($order = Criteria::ASC) Order by the op_task_notify_to_group column
 *
 * @method OperationTasksQuery groupByOpTaskId() Group by the op_task_id column
 * @method OperationTasksQuery groupByOpId() Group by the op_id column
 * @method OperationTasksQuery groupByOpTaskTypeId() Group by the op_task_type_id column
 * @method OperationTasksQuery groupByOpTaskDeadline() Group by the op_task_deadline column
 * @method OperationTasksQuery groupByOpTaskAlerte() Group by the op_task_alerte column
 * @method OperationTasksQuery groupByOpTaskRetard() Group by the op_task_retard column
 * @method OperationTasksQuery groupByOpTaskDureeEstim() Group by the op_task_duree_estim column
 * @method OperationTasksQuery groupByOpTaskDureeReelle() Group by the op_task_duree_reelle column
 * @method OperationTasksQuery groupByOpTaskDetail() Group by the op_task_detail column
 * @method OperationTasksQuery groupByOpTaskDone() Group by the op_task_done column
 * @method OperationTasksQuery groupByOpTaskComments() Group by the op_task_comments column
 * @method OperationTasksQuery groupByDateCreate() Group by the date_create column
 * @method OperationTasksQuery groupByDateModify() Group by the date_modify column
 * @method OperationTasksQuery groupByUserId() Group by the user_id column
 * @method OperationTasksQuery groupByOpTaskAssignToUser() Group by the op_task_assign_to_user column
 * @method OperationTasksQuery groupByOpTaskNotifyToUser() Group by the op_task_notify_to_user column
 * @method OperationTasksQuery groupByOpTaskAssignToGroup() Group by the op_task_assign_to_group column
 * @method OperationTasksQuery groupByOpTaskNotifyToGroup() Group by the op_task_notify_to_group column
 *
 * @method OperationTasksQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationTasksQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationTasksQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationTasksQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method OperationTasksQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method OperationTasksQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method OperationTasks findOne(PropelPDO $con = null) Return the first OperationTasks matching the query
 * @method OperationTasks findOneOrCreate(PropelPDO $con = null) Return the first OperationTasks matching the query, or a new OperationTasks object populated from the query conditions when no match is found
 *
 * @method OperationTasks findOneByOpId(int $op_id) Return the first OperationTasks filtered by the op_id column
 * @method OperationTasks findOneByOpTaskTypeId(int $op_task_type_id) Return the first OperationTasks filtered by the op_task_type_id column
 * @method OperationTasks findOneByOpTaskDeadline(string $op_task_deadline) Return the first OperationTasks filtered by the op_task_deadline column
 * @method OperationTasks findOneByOpTaskAlerte(string $op_task_alerte) Return the first OperationTasks filtered by the op_task_alerte column
 * @method OperationTasks findOneByOpTaskRetard(string $op_task_retard) Return the first OperationTasks filtered by the op_task_retard column
 * @method OperationTasks findOneByOpTaskDureeEstim(int $op_task_duree_estim) Return the first OperationTasks filtered by the op_task_duree_estim column
 * @method OperationTasks findOneByOpTaskDureeReelle(int $op_task_duree_reelle) Return the first OperationTasks filtered by the op_task_duree_reelle column
 * @method OperationTasks findOneByOpTaskDetail(string $op_task_detail) Return the first OperationTasks filtered by the op_task_detail column
 * @method OperationTasks findOneByOpTaskDone(string $op_task_done) Return the first OperationTasks filtered by the op_task_done column
 * @method OperationTasks findOneByOpTaskComments(string $op_task_comments) Return the first OperationTasks filtered by the op_task_comments column
 * @method OperationTasks findOneByDateCreate(string $date_create) Return the first OperationTasks filtered by the date_create column
 * @method OperationTasks findOneByDateModify(string $date_modify) Return the first OperationTasks filtered by the date_modify column
 * @method OperationTasks findOneByUserId(int $user_id) Return the first OperationTasks filtered by the user_id column
 * @method OperationTasks findOneByOpTaskAssignToUser(int $op_task_assign_to_user) Return the first OperationTasks filtered by the op_task_assign_to_user column
 * @method OperationTasks findOneByOpTaskNotifyToUser(int $op_task_notify_to_user) Return the first OperationTasks filtered by the op_task_notify_to_user column
 * @method OperationTasks findOneByOpTaskAssignToGroup(int $op_task_assign_to_group) Return the first OperationTasks filtered by the op_task_assign_to_group column
 * @method OperationTasks findOneByOpTaskNotifyToGroup(int $op_task_notify_to_group) Return the first OperationTasks filtered by the op_task_notify_to_group column
 *
 * @method array findByOpTaskId(int $op_task_id) Return OperationTasks objects filtered by the op_task_id column
 * @method array findByOpId(int $op_id) Return OperationTasks objects filtered by the op_id column
 * @method array findByOpTaskTypeId(int $op_task_type_id) Return OperationTasks objects filtered by the op_task_type_id column
 * @method array findByOpTaskDeadline(string $op_task_deadline) Return OperationTasks objects filtered by the op_task_deadline column
 * @method array findByOpTaskAlerte(string $op_task_alerte) Return OperationTasks objects filtered by the op_task_alerte column
 * @method array findByOpTaskRetard(string $op_task_retard) Return OperationTasks objects filtered by the op_task_retard column
 * @method array findByOpTaskDureeEstim(int $op_task_duree_estim) Return OperationTasks objects filtered by the op_task_duree_estim column
 * @method array findByOpTaskDureeReelle(int $op_task_duree_reelle) Return OperationTasks objects filtered by the op_task_duree_reelle column
 * @method array findByOpTaskDetail(string $op_task_detail) Return OperationTasks objects filtered by the op_task_detail column
 * @method array findByOpTaskDone(string $op_task_done) Return OperationTasks objects filtered by the op_task_done column
 * @method array findByOpTaskComments(string $op_task_comments) Return OperationTasks objects filtered by the op_task_comments column
 * @method array findByDateCreate(string $date_create) Return OperationTasks objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return OperationTasks objects filtered by the date_modify column
 * @method array findByUserId(int $user_id) Return OperationTasks objects filtered by the user_id column
 * @method array findByOpTaskAssignToUser(int $op_task_assign_to_user) Return OperationTasks objects filtered by the op_task_assign_to_user column
 * @method array findByOpTaskNotifyToUser(int $op_task_notify_to_user) Return OperationTasks objects filtered by the op_task_notify_to_user column
 * @method array findByOpTaskAssignToGroup(int $op_task_assign_to_group) Return OperationTasks objects filtered by the op_task_assign_to_group column
 * @method array findByOpTaskNotifyToGroup(int $op_task_notify_to_group) Return OperationTasks objects filtered by the op_task_notify_to_group column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationTasksQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationTasksQuery object.
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
            $modelName = 'OperationTasks';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationTasksQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationTasksQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationTasksQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationTasksQuery) {
            return $criteria;
        }
        $query = new OperationTasksQuery(null, null, $modelAlias);

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
     * @return   OperationTasks|OperationTasks[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationTasksPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationTasksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationTasks A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOpTaskId($key, $con = null)
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
     * @return                 OperationTasks A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_task_id`, `op_id`, `op_task_type_id`, `op_task_deadline`, `op_task_alerte`, `op_task_retard`, `op_task_duree_estim`, `op_task_duree_reelle`, `op_task_detail`, `op_task_done`, `op_task_comments`, `date_create`, `date_modify`, `user_id`, `op_task_assign_to_user`, `op_task_notify_to_user`, `op_task_assign_to_group`, `op_task_notify_to_group` FROM `operation_tasks` WHERE `op_task_id` = :p0';
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
            $obj = new OperationTasks();
            $obj->hydrate($row);
            OperationTasksPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OperationTasks|OperationTasks[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationTasks[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the op_task_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskId(1234); // WHERE op_task_id = 1234
     * $query->filterByOpTaskId(array(12, 34)); // WHERE op_task_id IN (12, 34)
     * $query->filterByOpTaskId(array('min' => 12)); // WHERE op_task_id >= 12
     * $query->filterByOpTaskId(array('max' => 12)); // WHERE op_task_id <= 12
     * </code>
     *
     * @param     mixed $opTaskId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskId($opTaskId = null, $comparison = null)
    {
        if (is_array($opTaskId)) {
            $useMinMax = false;
            if (isset($opTaskId['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_ID, $opTaskId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskId['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_ID, $opTaskId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_ID, $opTaskId, $comparison);
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
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the op_task_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskTypeId(1234); // WHERE op_task_type_id = 1234
     * $query->filterByOpTaskTypeId(array(12, 34)); // WHERE op_task_type_id IN (12, 34)
     * $query->filterByOpTaskTypeId(array('min' => 12)); // WHERE op_task_type_id >= 12
     * $query->filterByOpTaskTypeId(array('max' => 12)); // WHERE op_task_type_id <= 12
     * </code>
     *
     * @param     mixed $opTaskTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskTypeId($opTaskTypeId = null, $comparison = null)
    {
        if (is_array($opTaskTypeId)) {
            $useMinMax = false;
            if (isset($opTaskTypeId['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_TYPE_ID, $opTaskTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskTypeId['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_TYPE_ID, $opTaskTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_TYPE_ID, $opTaskTypeId, $comparison);
    }

    /**
     * Filter the query on the op_task_deadline column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskDeadline('2011-03-14'); // WHERE op_task_deadline = '2011-03-14'
     * $query->filterByOpTaskDeadline('now'); // WHERE op_task_deadline = '2011-03-14'
     * $query->filterByOpTaskDeadline(array('max' => 'yesterday')); // WHERE op_task_deadline < '2011-03-13'
     * </code>
     *
     * @param     mixed $opTaskDeadline The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskDeadline($opTaskDeadline = null, $comparison = null)
    {
        if (is_array($opTaskDeadline)) {
            $useMinMax = false;
            if (isset($opTaskDeadline['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_DEADLINE, $opTaskDeadline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskDeadline['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_DEADLINE, $opTaskDeadline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_DEADLINE, $opTaskDeadline, $comparison);
    }

    /**
     * Filter the query on the op_task_alerte column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskAlerte('2011-03-14'); // WHERE op_task_alerte = '2011-03-14'
     * $query->filterByOpTaskAlerte('now'); // WHERE op_task_alerte = '2011-03-14'
     * $query->filterByOpTaskAlerte(array('max' => 'yesterday')); // WHERE op_task_alerte < '2011-03-13'
     * </code>
     *
     * @param     mixed $opTaskAlerte The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskAlerte($opTaskAlerte = null, $comparison = null)
    {
        if (is_array($opTaskAlerte)) {
            $useMinMax = false;
            if (isset($opTaskAlerte['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_ALERTE, $opTaskAlerte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskAlerte['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_ALERTE, $opTaskAlerte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_ALERTE, $opTaskAlerte, $comparison);
    }

    /**
     * Filter the query on the op_task_retard column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskRetard('2011-03-14'); // WHERE op_task_retard = '2011-03-14'
     * $query->filterByOpTaskRetard('now'); // WHERE op_task_retard = '2011-03-14'
     * $query->filterByOpTaskRetard(array('max' => 'yesterday')); // WHERE op_task_retard < '2011-03-13'
     * </code>
     *
     * @param     mixed $opTaskRetard The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskRetard($opTaskRetard = null, $comparison = null)
    {
        if (is_array($opTaskRetard)) {
            $useMinMax = false;
            if (isset($opTaskRetard['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_RETARD, $opTaskRetard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskRetard['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_RETARD, $opTaskRetard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_RETARD, $opTaskRetard, $comparison);
    }

    /**
     * Filter the query on the op_task_duree_estim column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskDureeEstim(1234); // WHERE op_task_duree_estim = 1234
     * $query->filterByOpTaskDureeEstim(array(12, 34)); // WHERE op_task_duree_estim IN (12, 34)
     * $query->filterByOpTaskDureeEstim(array('min' => 12)); // WHERE op_task_duree_estim >= 12
     * $query->filterByOpTaskDureeEstim(array('max' => 12)); // WHERE op_task_duree_estim <= 12
     * </code>
     *
     * @param     mixed $opTaskDureeEstim The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskDureeEstim($opTaskDureeEstim = null, $comparison = null)
    {
        if (is_array($opTaskDureeEstim)) {
            $useMinMax = false;
            if (isset($opTaskDureeEstim['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_DUREE_ESTIM, $opTaskDureeEstim['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskDureeEstim['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_DUREE_ESTIM, $opTaskDureeEstim['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_DUREE_ESTIM, $opTaskDureeEstim, $comparison);
    }

    /**
     * Filter the query on the op_task_duree_reelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskDureeReelle(1234); // WHERE op_task_duree_reelle = 1234
     * $query->filterByOpTaskDureeReelle(array(12, 34)); // WHERE op_task_duree_reelle IN (12, 34)
     * $query->filterByOpTaskDureeReelle(array('min' => 12)); // WHERE op_task_duree_reelle >= 12
     * $query->filterByOpTaskDureeReelle(array('max' => 12)); // WHERE op_task_duree_reelle <= 12
     * </code>
     *
     * @param     mixed $opTaskDureeReelle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskDureeReelle($opTaskDureeReelle = null, $comparison = null)
    {
        if (is_array($opTaskDureeReelle)) {
            $useMinMax = false;
            if (isset($opTaskDureeReelle['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_DUREE_REELLE, $opTaskDureeReelle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskDureeReelle['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_DUREE_REELLE, $opTaskDureeReelle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_DUREE_REELLE, $opTaskDureeReelle, $comparison);
    }

    /**
     * Filter the query on the op_task_detail column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskDetail('fooValue');   // WHERE op_task_detail = 'fooValue'
     * $query->filterByOpTaskDetail('%fooValue%'); // WHERE op_task_detail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opTaskDetail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskDetail($opTaskDetail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opTaskDetail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opTaskDetail)) {
                $opTaskDetail = str_replace('*', '%', $opTaskDetail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_DETAIL, $opTaskDetail, $comparison);
    }

    /**
     * Filter the query on the op_task_done column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskDone('2011-03-14'); // WHERE op_task_done = '2011-03-14'
     * $query->filterByOpTaskDone('now'); // WHERE op_task_done = '2011-03-14'
     * $query->filterByOpTaskDone(array('max' => 'yesterday')); // WHERE op_task_done < '2011-03-13'
     * </code>
     *
     * @param     mixed $opTaskDone The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskDone($opTaskDone = null, $comparison = null)
    {
        if (is_array($opTaskDone)) {
            $useMinMax = false;
            if (isset($opTaskDone['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_DONE, $opTaskDone['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskDone['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_DONE, $opTaskDone['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_DONE, $opTaskDone, $comparison);
    }

    /**
     * Filter the query on the op_task_comments column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskComments('fooValue');   // WHERE op_task_comments = 'fooValue'
     * $query->filterByOpTaskComments('%fooValue%'); // WHERE op_task_comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opTaskComments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskComments($opTaskComments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opTaskComments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opTaskComments)) {
                $opTaskComments = str_replace('*', '%', $opTaskComments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_COMMENTS, $opTaskComments, $comparison);
    }

    /**
     * Filter the query on the date_create column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreate('2011-03-14'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate('now'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate(array('max' => 'yesterday')); // WHERE date_create < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(OperationTasksPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(OperationTasksPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query on the date_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModify('2011-03-14'); // WHERE date_modify = '2011-03-14'
     * $query->filterByDateModify('now'); // WHERE date_modify = '2011-03-14'
     * $query->filterByDateModify(array('max' => 'yesterday')); // WHERE date_modify < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModify The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(OperationTasksPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(OperationTasksPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::DATE_MODIFY, $dateModify, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(OperationTasksPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(OperationTasksPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the op_task_assign_to_user column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskAssignToUser(1234); // WHERE op_task_assign_to_user = 1234
     * $query->filterByOpTaskAssignToUser(array(12, 34)); // WHERE op_task_assign_to_user IN (12, 34)
     * $query->filterByOpTaskAssignToUser(array('min' => 12)); // WHERE op_task_assign_to_user >= 12
     * $query->filterByOpTaskAssignToUser(array('max' => 12)); // WHERE op_task_assign_to_user <= 12
     * </code>
     *
     * @param     mixed $opTaskAssignToUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskAssignToUser($opTaskAssignToUser = null, $comparison = null)
    {
        if (is_array($opTaskAssignToUser)) {
            $useMinMax = false;
            if (isset($opTaskAssignToUser['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_ASSIGN_TO_USER, $opTaskAssignToUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskAssignToUser['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_ASSIGN_TO_USER, $opTaskAssignToUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_ASSIGN_TO_USER, $opTaskAssignToUser, $comparison);
    }

    /**
     * Filter the query on the op_task_notify_to_user column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskNotifyToUser(1234); // WHERE op_task_notify_to_user = 1234
     * $query->filterByOpTaskNotifyToUser(array(12, 34)); // WHERE op_task_notify_to_user IN (12, 34)
     * $query->filterByOpTaskNotifyToUser(array('min' => 12)); // WHERE op_task_notify_to_user >= 12
     * $query->filterByOpTaskNotifyToUser(array('max' => 12)); // WHERE op_task_notify_to_user <= 12
     * </code>
     *
     * @param     mixed $opTaskNotifyToUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskNotifyToUser($opTaskNotifyToUser = null, $comparison = null)
    {
        if (is_array($opTaskNotifyToUser)) {
            $useMinMax = false;
            if (isset($opTaskNotifyToUser['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_NOTIFY_TO_USER, $opTaskNotifyToUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskNotifyToUser['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_NOTIFY_TO_USER, $opTaskNotifyToUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_NOTIFY_TO_USER, $opTaskNotifyToUser, $comparison);
    }

    /**
     * Filter the query on the op_task_assign_to_group column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskAssignToGroup(1234); // WHERE op_task_assign_to_group = 1234
     * $query->filterByOpTaskAssignToGroup(array(12, 34)); // WHERE op_task_assign_to_group IN (12, 34)
     * $query->filterByOpTaskAssignToGroup(array('min' => 12)); // WHERE op_task_assign_to_group >= 12
     * $query->filterByOpTaskAssignToGroup(array('max' => 12)); // WHERE op_task_assign_to_group <= 12
     * </code>
     *
     * @param     mixed $opTaskAssignToGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskAssignToGroup($opTaskAssignToGroup = null, $comparison = null)
    {
        if (is_array($opTaskAssignToGroup)) {
            $useMinMax = false;
            if (isset($opTaskAssignToGroup['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP, $opTaskAssignToGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskAssignToGroup['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP, $opTaskAssignToGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_ASSIGN_TO_GROUP, $opTaskAssignToGroup, $comparison);
    }

    /**
     * Filter the query on the op_task_notify_to_group column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTaskNotifyToGroup(1234); // WHERE op_task_notify_to_group = 1234
     * $query->filterByOpTaskNotifyToGroup(array(12, 34)); // WHERE op_task_notify_to_group IN (12, 34)
     * $query->filterByOpTaskNotifyToGroup(array('min' => 12)); // WHERE op_task_notify_to_group >= 12
     * $query->filterByOpTaskNotifyToGroup(array('max' => 12)); // WHERE op_task_notify_to_group <= 12
     * </code>
     *
     * @param     mixed $opTaskNotifyToGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function filterByOpTaskNotifyToGroup($opTaskNotifyToGroup = null, $comparison = null)
    {
        if (is_array($opTaskNotifyToGroup)) {
            $useMinMax = false;
            if (isset($opTaskNotifyToGroup['min'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP, $opTaskNotifyToGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTaskNotifyToGroup['max'])) {
                $this->addUsingAlias(OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP, $opTaskNotifyToGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationTasksPeer::OP_TASK_NOTIFY_TO_GROUP, $opTaskNotifyToGroup, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationTasksQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(OperationTasksPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationTasksPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function joinOperations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useOperationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Operations', 'OperationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   OperationTasks $operationTasks Object to remove from the list of results
     *
     * @return OperationTasksQuery The current query, for fluid interface
     */
    public function prune($operationTasks = null)
    {
        if ($operationTasks) {
            $this->addUsingAlias(OperationTasksPeer::OP_TASK_ID, $operationTasks->getOpTaskId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
