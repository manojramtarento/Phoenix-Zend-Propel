<?php


/**
 * Base class that represents a query for the 'r_operation_type' table.
 *
 *
 *
 * @method ROperationTypeQuery orderByOtId($order = Criteria::ASC) Order by the ot_id column
 * @method ROperationTypeQuery orderByActId($order = Criteria::ASC) Order by the act_id column
 * @method ROperationTypeQuery orderByOtLibelle($order = Criteria::ASC) Order by the ot_libelle column
 * @method ROperationTypeQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method ROperationTypeQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method ROperationTypeQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method ROperationTypeQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method ROperationTypeQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method ROperationTypeQuery orderByOrd($order = Criteria::ASC) Order by the ord column
 *
 * @method ROperationTypeQuery groupByOtId() Group by the ot_id column
 * @method ROperationTypeQuery groupByActId() Group by the act_id column
 * @method ROperationTypeQuery groupByOtLibelle() Group by the ot_libelle column
 * @method ROperationTypeQuery groupByUserId() Group by the user_id column
 * @method ROperationTypeQuery groupByUserModify() Group by the user_modify column
 * @method ROperationTypeQuery groupByDateCreate() Group by the date_create column
 * @method ROperationTypeQuery groupByDateModify() Group by the date_modify column
 * @method ROperationTypeQuery groupByActif() Group by the actif column
 * @method ROperationTypeQuery groupByOrd() Group by the ord column
 *
 * @method ROperationTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ROperationTypeQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ROperationTypeQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ROperationTypeQuery leftJoinROperationTypeRequiredOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeRequiredOptions relation
 * @method ROperationTypeQuery rightJoinROperationTypeRequiredOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeRequiredOptions relation
 * @method ROperationTypeQuery innerJoinROperationTypeRequiredOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeRequiredOptions relation
 *
 * @method ROperationType findOne(PropelPDO $con = null) Return the first ROperationType matching the query
 * @method ROperationType findOneOrCreate(PropelPDO $con = null) Return the first ROperationType matching the query, or a new ROperationType object populated from the query conditions when no match is found
 *
 * @method ROperationType findOneByActId(int $act_id) Return the first ROperationType filtered by the act_id column
 * @method ROperationType findOneByOtLibelle(string $ot_libelle) Return the first ROperationType filtered by the ot_libelle column
 * @method ROperationType findOneByUserId(int $user_id) Return the first ROperationType filtered by the user_id column
 * @method ROperationType findOneByUserModify(int $user_modify) Return the first ROperationType filtered by the user_modify column
 * @method ROperationType findOneByDateCreate(string $date_create) Return the first ROperationType filtered by the date_create column
 * @method ROperationType findOneByDateModify(string $date_modify) Return the first ROperationType filtered by the date_modify column
 * @method ROperationType findOneByActif(int $actif) Return the first ROperationType filtered by the actif column
 * @method ROperationType findOneByOrd(int $ord) Return the first ROperationType filtered by the ord column
 *
 * @method array findByOtId(int $ot_id) Return ROperationType objects filtered by the ot_id column
 * @method array findByActId(int $act_id) Return ROperationType objects filtered by the act_id column
 * @method array findByOtLibelle(string $ot_libelle) Return ROperationType objects filtered by the ot_libelle column
 * @method array findByUserId(int $user_id) Return ROperationType objects filtered by the user_id column
 * @method array findByUserModify(int $user_modify) Return ROperationType objects filtered by the user_modify column
 * @method array findByDateCreate(string $date_create) Return ROperationType objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return ROperationType objects filtered by the date_modify column
 * @method array findByActif(int $actif) Return ROperationType objects filtered by the actif column
 * @method array findByOrd(int $ord) Return ROperationType objects filtered by the ord column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeQuery object.
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
            $modelName = 'ROperationType';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeQuery) {
            return $criteria;
        }
        $query = new ROperationTypeQuery(null, null, $modelAlias);

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
     * @return   ROperationType|ROperationType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationType A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOtId($key, $con = null)
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
     * @return                 ROperationType A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ot_id`, `act_id`, `ot_libelle`, `user_id`, `user_modify`, `date_create`, `date_modify`, `actif`, `ord` FROM `r_operation_type` WHERE `ot_id` = :p0';
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
            $obj = new ROperationType();
            $obj->hydrate($row);
            ROperationTypePeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationType|ROperationType[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationType[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypePeer::OT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypePeer::OT_ID, $keys, Criteria::IN);
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
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByOtId($otId = null, $comparison = null)
    {
        if (is_array($otId)) {
            $useMinMax = false;
            if (isset($otId['min'])) {
                $this->addUsingAlias(ROperationTypePeer::OT_ID, $otId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otId['max'])) {
                $this->addUsingAlias(ROperationTypePeer::OT_ID, $otId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypePeer::OT_ID, $otId, $comparison);
    }

    /**
     * Filter the query on the act_id column
     *
     * Example usage:
     * <code>
     * $query->filterByActId(1234); // WHERE act_id = 1234
     * $query->filterByActId(array(12, 34)); // WHERE act_id IN (12, 34)
     * $query->filterByActId(array('min' => 12)); // WHERE act_id >= 12
     * $query->filterByActId(array('max' => 12)); // WHERE act_id <= 12
     * </code>
     *
     * @param     mixed $actId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByActId($actId = null, $comparison = null)
    {
        if (is_array($actId)) {
            $useMinMax = false;
            if (isset($actId['min'])) {
                $this->addUsingAlias(ROperationTypePeer::ACT_ID, $actId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actId['max'])) {
                $this->addUsingAlias(ROperationTypePeer::ACT_ID, $actId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypePeer::ACT_ID, $actId, $comparison);
    }

    /**
     * Filter the query on the ot_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOtLibelle('fooValue');   // WHERE ot_libelle = 'fooValue'
     * $query->filterByOtLibelle('%fooValue%'); // WHERE ot_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByOtLibelle($otLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otLibelle)) {
                $otLibelle = str_replace('*', '%', $otLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationTypePeer::OT_LIBELLE, $otLibelle, $comparison);
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
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(ROperationTypePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(ROperationTypePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypePeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the user_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByUserModify(1234); // WHERE user_modify = 1234
     * $query->filterByUserModify(array(12, 34)); // WHERE user_modify IN (12, 34)
     * $query->filterByUserModify(array('min' => 12)); // WHERE user_modify >= 12
     * $query->filterByUserModify(array('max' => 12)); // WHERE user_modify <= 12
     * </code>
     *
     * @param     mixed $userModify The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(ROperationTypePeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(ROperationTypePeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypePeer::USER_MODIFY, $userModify, $comparison);
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
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(ROperationTypePeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(ROperationTypePeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypePeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(ROperationTypePeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(ROperationTypePeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypePeer::DATE_MODIFY, $dateModify, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(1234); // WHERE actif = 1234
     * $query->filterByActif(array(12, 34)); // WHERE actif IN (12, 34)
     * $query->filterByActif(array('min' => 12)); // WHERE actif >= 12
     * $query->filterByActif(array('max' => 12)); // WHERE actif <= 12
     * </code>
     *
     * @param     mixed $actif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(ROperationTypePeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(ROperationTypePeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypePeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the ord column
     *
     * Example usage:
     * <code>
     * $query->filterByOrd(1234); // WHERE ord = 1234
     * $query->filterByOrd(array(12, 34)); // WHERE ord IN (12, 34)
     * $query->filterByOrd(array('min' => 12)); // WHERE ord >= 12
     * $query->filterByOrd(array('max' => 12)); // WHERE ord <= 12
     * </code>
     *
     * @param     mixed $ord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function filterByOrd($ord = null, $comparison = null)
    {
        if (is_array($ord)) {
            $useMinMax = false;
            if (isset($ord['min'])) {
                $this->addUsingAlias(ROperationTypePeer::ORD, $ord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ord['max'])) {
                $this->addUsingAlias(ROperationTypePeer::ORD, $ord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypePeer::ORD, $ord, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ROperationTypePeer::OT_ID, $operations->getOpTypeId(), $comparison);
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
     * @return ROperationTypeQuery The current query, for fluid interface
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
     * Filter the query by a related ROperationTypeRequiredOptions object
     *
     * @param   ROperationTypeRequiredOptions|PropelObjectCollection $rOperationTypeRequiredOptions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeRequiredOptions($rOperationTypeRequiredOptions, $comparison = null)
    {
        if ($rOperationTypeRequiredOptions instanceof ROperationTypeRequiredOptions) {
            return $this
                ->addUsingAlias(ROperationTypePeer::OT_ID, $rOperationTypeRequiredOptions->getROperationTypeRequiredOptionROperationTypeId(), $comparison);
        } elseif ($rOperationTypeRequiredOptions instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeRequiredOptionsQuery()
                ->filterByPrimaryKeys($rOperationTypeRequiredOptions->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeRequiredOptions() only accepts arguments of type ROperationTypeRequiredOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeRequiredOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function joinROperationTypeRequiredOptions($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeRequiredOptions');

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
            $this->addJoinObject($join, 'ROperationTypeRequiredOptions');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeRequiredOptions relation ROperationTypeRequiredOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeRequiredOptionsQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeRequiredOptionsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationTypeRequiredOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeRequiredOptions', 'ROperationTypeRequiredOptionsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationType $rOperationType Object to remove from the list of results
     *
     * @return ROperationTypeQuery The current query, for fluid interface
     */
    public function prune($rOperationType = null)
    {
        if ($rOperationType) {
            $this->addUsingAlias(ROperationTypePeer::OT_ID, $rOperationType->getOtId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
