<?php


/**
 * Base class that represents a query for the 'r_operation_tasks_type' table.
 *
 *
 *
 * @method ROperationTasksTypeQuery orderByROpTaskTypeId($order = Criteria::ASC) Order by the r_op_task_type_id column
 * @method ROperationTasksTypeQuery orderByROpTaskTypeLibelle($order = Criteria::ASC) Order by the r_op_task_type_libelle column
 * @method ROperationTasksTypeQuery orderByROpTaskTypeDateRef($order = Criteria::ASC) Order by the r_op_task_type_date_ref column
 * @method ROperationTasksTypeQuery orderByROpTaskTypeDelta($order = Criteria::ASC) Order by the r_op_task_type_delta column
 * @method ROperationTasksTypeQuery orderByROpTaskTypeRappel($order = Criteria::ASC) Order by the r_op_task_type_rappel column
 * @method ROperationTasksTypeQuery orderByROpTaskTypeAssignToUser($order = Criteria::ASC) Order by the r_op_task_type_assign_to_user column
 * @method ROperationTasksTypeQuery orderByROpTaskTypeNotifyToUser($order = Criteria::ASC) Order by the r_op_task_type_notify_to_user column
 * @method ROperationTasksTypeQuery orderByROpTaskTypeAssignToGroup($order = Criteria::ASC) Order by the r_op_task_type_assign_to_group column
 * @method ROperationTasksTypeQuery orderByROpTaskTypeNotifyToGroup($order = Criteria::ASC) Order by the r_op_task_type_notify_to_group column
 * @method ROperationTasksTypeQuery orderByROpTaskTypeAssignToCp($order = Criteria::ASC) Order by the r_op_task_type_assign_to_cp column
 * @method ROperationTasksTypeQuery orderByROpTaskTypeAssignToDc($order = Criteria::ASC) Order by the r_op_task_type_assign_to_dc column
 * @method ROperationTasksTypeQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method ROperationTasksTypeQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method ROperationTasksTypeQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 *
 * @method ROperationTasksTypeQuery groupByROpTaskTypeId() Group by the r_op_task_type_id column
 * @method ROperationTasksTypeQuery groupByROpTaskTypeLibelle() Group by the r_op_task_type_libelle column
 * @method ROperationTasksTypeQuery groupByROpTaskTypeDateRef() Group by the r_op_task_type_date_ref column
 * @method ROperationTasksTypeQuery groupByROpTaskTypeDelta() Group by the r_op_task_type_delta column
 * @method ROperationTasksTypeQuery groupByROpTaskTypeRappel() Group by the r_op_task_type_rappel column
 * @method ROperationTasksTypeQuery groupByROpTaskTypeAssignToUser() Group by the r_op_task_type_assign_to_user column
 * @method ROperationTasksTypeQuery groupByROpTaskTypeNotifyToUser() Group by the r_op_task_type_notify_to_user column
 * @method ROperationTasksTypeQuery groupByROpTaskTypeAssignToGroup() Group by the r_op_task_type_assign_to_group column
 * @method ROperationTasksTypeQuery groupByROpTaskTypeNotifyToGroup() Group by the r_op_task_type_notify_to_group column
 * @method ROperationTasksTypeQuery groupByROpTaskTypeAssignToCp() Group by the r_op_task_type_assign_to_cp column
 * @method ROperationTasksTypeQuery groupByROpTaskTypeAssignToDc() Group by the r_op_task_type_assign_to_dc column
 * @method ROperationTasksTypeQuery groupByUserId() Group by the user_id column
 * @method ROperationTasksTypeQuery groupByDateCreate() Group by the date_create column
 * @method ROperationTasksTypeQuery groupByDateModify() Group by the date_modify column
 *
 * @method ROperationTasksTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTasksTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTasksTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTasksType findOne(PropelPDO $con = null) Return the first ROperationTasksType matching the query
 * @method ROperationTasksType findOneOrCreate(PropelPDO $con = null) Return the first ROperationTasksType matching the query, or a new ROperationTasksType object populated from the query conditions when no match is found
 *
 * @method ROperationTasksType findOneByROpTaskTypeLibelle(string $r_op_task_type_libelle) Return the first ROperationTasksType filtered by the r_op_task_type_libelle column
 * @method ROperationTasksType findOneByROpTaskTypeDateRef(int $r_op_task_type_date_ref) Return the first ROperationTasksType filtered by the r_op_task_type_date_ref column
 * @method ROperationTasksType findOneByROpTaskTypeDelta(int $r_op_task_type_delta) Return the first ROperationTasksType filtered by the r_op_task_type_delta column
 * @method ROperationTasksType findOneByROpTaskTypeRappel(int $r_op_task_type_rappel) Return the first ROperationTasksType filtered by the r_op_task_type_rappel column
 * @method ROperationTasksType findOneByROpTaskTypeAssignToUser(int $r_op_task_type_assign_to_user) Return the first ROperationTasksType filtered by the r_op_task_type_assign_to_user column
 * @method ROperationTasksType findOneByROpTaskTypeNotifyToUser(int $r_op_task_type_notify_to_user) Return the first ROperationTasksType filtered by the r_op_task_type_notify_to_user column
 * @method ROperationTasksType findOneByROpTaskTypeAssignToGroup(int $r_op_task_type_assign_to_group) Return the first ROperationTasksType filtered by the r_op_task_type_assign_to_group column
 * @method ROperationTasksType findOneByROpTaskTypeNotifyToGroup(int $r_op_task_type_notify_to_group) Return the first ROperationTasksType filtered by the r_op_task_type_notify_to_group column
 * @method ROperationTasksType findOneByROpTaskTypeAssignToCp(boolean $r_op_task_type_assign_to_cp) Return the first ROperationTasksType filtered by the r_op_task_type_assign_to_cp column
 * @method ROperationTasksType findOneByROpTaskTypeAssignToDc(boolean $r_op_task_type_assign_to_dc) Return the first ROperationTasksType filtered by the r_op_task_type_assign_to_dc column
 * @method ROperationTasksType findOneByUserId(int $user_id) Return the first ROperationTasksType filtered by the user_id column
 * @method ROperationTasksType findOneByDateCreate(string $date_create) Return the first ROperationTasksType filtered by the date_create column
 * @method ROperationTasksType findOneByDateModify(string $date_modify) Return the first ROperationTasksType filtered by the date_modify column
 *
 * @method array findByROpTaskTypeId(int $r_op_task_type_id) Return ROperationTasksType objects filtered by the r_op_task_type_id column
 * @method array findByROpTaskTypeLibelle(string $r_op_task_type_libelle) Return ROperationTasksType objects filtered by the r_op_task_type_libelle column
 * @method array findByROpTaskTypeDateRef(int $r_op_task_type_date_ref) Return ROperationTasksType objects filtered by the r_op_task_type_date_ref column
 * @method array findByROpTaskTypeDelta(int $r_op_task_type_delta) Return ROperationTasksType objects filtered by the r_op_task_type_delta column
 * @method array findByROpTaskTypeRappel(int $r_op_task_type_rappel) Return ROperationTasksType objects filtered by the r_op_task_type_rappel column
 * @method array findByROpTaskTypeAssignToUser(int $r_op_task_type_assign_to_user) Return ROperationTasksType objects filtered by the r_op_task_type_assign_to_user column
 * @method array findByROpTaskTypeNotifyToUser(int $r_op_task_type_notify_to_user) Return ROperationTasksType objects filtered by the r_op_task_type_notify_to_user column
 * @method array findByROpTaskTypeAssignToGroup(int $r_op_task_type_assign_to_group) Return ROperationTasksType objects filtered by the r_op_task_type_assign_to_group column
 * @method array findByROpTaskTypeNotifyToGroup(int $r_op_task_type_notify_to_group) Return ROperationTasksType objects filtered by the r_op_task_type_notify_to_group column
 * @method array findByROpTaskTypeAssignToCp(boolean $r_op_task_type_assign_to_cp) Return ROperationTasksType objects filtered by the r_op_task_type_assign_to_cp column
 * @method array findByROpTaskTypeAssignToDc(boolean $r_op_task_type_assign_to_dc) Return ROperationTasksType objects filtered by the r_op_task_type_assign_to_dc column
 * @method array findByUserId(int $user_id) Return ROperationTasksType objects filtered by the user_id column
 * @method array findByDateCreate(string $date_create) Return ROperationTasksType objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return ROperationTasksType objects filtered by the date_modify column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTasksTypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTasksTypeQuery object.
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
            $modelName = 'ROperationTasksType';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTasksTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTasksTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTasksTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTasksTypeQuery) {
            return $criteria;
        }
        $query = new ROperationTasksTypeQuery(null, null, $modelAlias);

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
     * @return   ROperationTasksType|ROperationTasksType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTasksTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTasksTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTasksType A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROpTaskTypeId($key, $con = null)
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
     * @return                 ROperationTasksType A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_op_task_type_id`, `r_op_task_type_libelle`, `r_op_task_type_date_ref`, `r_op_task_type_delta`, `r_op_task_type_rappel`, `r_op_task_type_assign_to_user`, `r_op_task_type_notify_to_user`, `r_op_task_type_assign_to_group`, `r_op_task_type_notify_to_group`, `r_op_task_type_assign_to_cp`, `r_op_task_type_assign_to_dc`, `user_id`, `date_create`, `date_modify` FROM `r_operation_tasks_type` WHERE `r_op_task_type_id` = :p0';
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
            $obj = new ROperationTasksType();
            $obj->hydrate($row);
            ROperationTasksTypePeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTasksType|ROperationTasksType[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTasksType[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $keys, Criteria::IN);
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
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeId($rOpTaskTypeId = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeId)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeId['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeId['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $rOpTaskTypeId, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeLibelle('fooValue');   // WHERE r_op_task_type_libelle = 'fooValue'
     * $query->filterByROpTaskTypeLibelle('%fooValue%'); // WHERE r_op_task_type_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rOpTaskTypeLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeLibelle($rOpTaskTypeLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rOpTaskTypeLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rOpTaskTypeLibelle)) {
                $rOpTaskTypeLibelle = str_replace('*', '%', $rOpTaskTypeLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_LIBELLE, $rOpTaskTypeLibelle, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_date_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeDateRef(1234); // WHERE r_op_task_type_date_ref = 1234
     * $query->filterByROpTaskTypeDateRef(array(12, 34)); // WHERE r_op_task_type_date_ref IN (12, 34)
     * $query->filterByROpTaskTypeDateRef(array('min' => 12)); // WHERE r_op_task_type_date_ref >= 12
     * $query->filterByROpTaskTypeDateRef(array('max' => 12)); // WHERE r_op_task_type_date_ref <= 12
     * </code>
     *
     * @param     mixed $rOpTaskTypeDateRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeDateRef($rOpTaskTypeDateRef = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeDateRef)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeDateRef['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF, $rOpTaskTypeDateRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeDateRef['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF, $rOpTaskTypeDateRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_DATE_REF, $rOpTaskTypeDateRef, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_delta column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeDelta(1234); // WHERE r_op_task_type_delta = 1234
     * $query->filterByROpTaskTypeDelta(array(12, 34)); // WHERE r_op_task_type_delta IN (12, 34)
     * $query->filterByROpTaskTypeDelta(array('min' => 12)); // WHERE r_op_task_type_delta >= 12
     * $query->filterByROpTaskTypeDelta(array('max' => 12)); // WHERE r_op_task_type_delta <= 12
     * </code>
     *
     * @param     mixed $rOpTaskTypeDelta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeDelta($rOpTaskTypeDelta = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeDelta)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeDelta['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA, $rOpTaskTypeDelta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeDelta['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA, $rOpTaskTypeDelta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_DELTA, $rOpTaskTypeDelta, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_rappel column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeRappel(1234); // WHERE r_op_task_type_rappel = 1234
     * $query->filterByROpTaskTypeRappel(array(12, 34)); // WHERE r_op_task_type_rappel IN (12, 34)
     * $query->filterByROpTaskTypeRappel(array('min' => 12)); // WHERE r_op_task_type_rappel >= 12
     * $query->filterByROpTaskTypeRappel(array('max' => 12)); // WHERE r_op_task_type_rappel <= 12
     * </code>
     *
     * @param     mixed $rOpTaskTypeRappel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeRappel($rOpTaskTypeRappel = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeRappel)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeRappel['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL, $rOpTaskTypeRappel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeRappel['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL, $rOpTaskTypeRappel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_RAPPEL, $rOpTaskTypeRappel, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_assign_to_user column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeAssignToUser(1234); // WHERE r_op_task_type_assign_to_user = 1234
     * $query->filterByROpTaskTypeAssignToUser(array(12, 34)); // WHERE r_op_task_type_assign_to_user IN (12, 34)
     * $query->filterByROpTaskTypeAssignToUser(array('min' => 12)); // WHERE r_op_task_type_assign_to_user >= 12
     * $query->filterByROpTaskTypeAssignToUser(array('max' => 12)); // WHERE r_op_task_type_assign_to_user <= 12
     * </code>
     *
     * @param     mixed $rOpTaskTypeAssignToUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeAssignToUser($rOpTaskTypeAssignToUser = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeAssignToUser)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeAssignToUser['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER, $rOpTaskTypeAssignToUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeAssignToUser['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER, $rOpTaskTypeAssignToUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_USER, $rOpTaskTypeAssignToUser, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_notify_to_user column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeNotifyToUser(1234); // WHERE r_op_task_type_notify_to_user = 1234
     * $query->filterByROpTaskTypeNotifyToUser(array(12, 34)); // WHERE r_op_task_type_notify_to_user IN (12, 34)
     * $query->filterByROpTaskTypeNotifyToUser(array('min' => 12)); // WHERE r_op_task_type_notify_to_user >= 12
     * $query->filterByROpTaskTypeNotifyToUser(array('max' => 12)); // WHERE r_op_task_type_notify_to_user <= 12
     * </code>
     *
     * @param     mixed $rOpTaskTypeNotifyToUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeNotifyToUser($rOpTaskTypeNotifyToUser = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeNotifyToUser)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeNotifyToUser['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER, $rOpTaskTypeNotifyToUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeNotifyToUser['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER, $rOpTaskTypeNotifyToUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_USER, $rOpTaskTypeNotifyToUser, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_assign_to_group column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeAssignToGroup(1234); // WHERE r_op_task_type_assign_to_group = 1234
     * $query->filterByROpTaskTypeAssignToGroup(array(12, 34)); // WHERE r_op_task_type_assign_to_group IN (12, 34)
     * $query->filterByROpTaskTypeAssignToGroup(array('min' => 12)); // WHERE r_op_task_type_assign_to_group >= 12
     * $query->filterByROpTaskTypeAssignToGroup(array('max' => 12)); // WHERE r_op_task_type_assign_to_group <= 12
     * </code>
     *
     * @param     mixed $rOpTaskTypeAssignToGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeAssignToGroup($rOpTaskTypeAssignToGroup = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeAssignToGroup)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeAssignToGroup['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP, $rOpTaskTypeAssignToGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeAssignToGroup['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP, $rOpTaskTypeAssignToGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_GROUP, $rOpTaskTypeAssignToGroup, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_notify_to_group column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeNotifyToGroup(1234); // WHERE r_op_task_type_notify_to_group = 1234
     * $query->filterByROpTaskTypeNotifyToGroup(array(12, 34)); // WHERE r_op_task_type_notify_to_group IN (12, 34)
     * $query->filterByROpTaskTypeNotifyToGroup(array('min' => 12)); // WHERE r_op_task_type_notify_to_group >= 12
     * $query->filterByROpTaskTypeNotifyToGroup(array('max' => 12)); // WHERE r_op_task_type_notify_to_group <= 12
     * </code>
     *
     * @param     mixed $rOpTaskTypeNotifyToGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeNotifyToGroup($rOpTaskTypeNotifyToGroup = null, $comparison = null)
    {
        if (is_array($rOpTaskTypeNotifyToGroup)) {
            $useMinMax = false;
            if (isset($rOpTaskTypeNotifyToGroup['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP, $rOpTaskTypeNotifyToGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpTaskTypeNotifyToGroup['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP, $rOpTaskTypeNotifyToGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_NOTIFY_TO_GROUP, $rOpTaskTypeNotifyToGroup, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_assign_to_cp column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeAssignToCp(true); // WHERE r_op_task_type_assign_to_cp = true
     * $query->filterByROpTaskTypeAssignToCp('yes'); // WHERE r_op_task_type_assign_to_cp = true
     * </code>
     *
     * @param     boolean|string $rOpTaskTypeAssignToCp The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeAssignToCp($rOpTaskTypeAssignToCp = null, $comparison = null)
    {
        if (is_string($rOpTaskTypeAssignToCp)) {
            $rOpTaskTypeAssignToCp = in_array(strtolower($rOpTaskTypeAssignToCp), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_CP, $rOpTaskTypeAssignToCp, $comparison);
    }

    /**
     * Filter the query on the r_op_task_type_assign_to_dc column
     *
     * Example usage:
     * <code>
     * $query->filterByROpTaskTypeAssignToDc(true); // WHERE r_op_task_type_assign_to_dc = true
     * $query->filterByROpTaskTypeAssignToDc('yes'); // WHERE r_op_task_type_assign_to_dc = true
     * </code>
     *
     * @param     boolean|string $rOpTaskTypeAssignToDc The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByROpTaskTypeAssignToDc($rOpTaskTypeAssignToDc = null, $comparison = null)
    {
        if (is_string($rOpTaskTypeAssignToDc)) {
            $rOpTaskTypeAssignToDc = in_array(strtolower($rOpTaskTypeAssignToDc), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ASSIGN_TO_DC, $rOpTaskTypeAssignToDc, $comparison);
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
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::USER_ID, $userId, $comparison);
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
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(ROperationTasksTypePeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTasksTypePeer::DATE_MODIFY, $dateModify, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTasksType $rOperationTasksType Object to remove from the list of results
     *
     * @return ROperationTasksTypeQuery The current query, for fluid interface
     */
    public function prune($rOperationTasksType = null)
    {
        if ($rOperationTasksType) {
            $this->addUsingAlias(ROperationTasksTypePeer::R_OP_TASK_TYPE_ID, $rOperationTasksType->getROpTaskTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
