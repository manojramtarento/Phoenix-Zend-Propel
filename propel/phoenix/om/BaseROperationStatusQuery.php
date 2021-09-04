<?php


/**
 * Base class that represents a query for the 'r_operation_status' table.
 *
 *
 *
 * @method ROperationStatusQuery orderByOsId($order = Criteria::ASC) Order by the os_id column
 * @method ROperationStatusQuery orderByOsLibelle($order = Criteria::ASC) Order by the os_libelle column
 * @method ROperationStatusQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method ROperationStatusQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method ROperationStatusQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method ROperationStatusQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method ROperationStatusQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method ROperationStatusQuery groupByOsId() Group by the os_id column
 * @method ROperationStatusQuery groupByOsLibelle() Group by the os_libelle column
 * @method ROperationStatusQuery groupByUserId() Group by the user_id column
 * @method ROperationStatusQuery groupByUserModify() Group by the user_modify column
 * @method ROperationStatusQuery groupByDateCreate() Group by the date_create column
 * @method ROperationStatusQuery groupByDateModify() Group by the date_modify column
 * @method ROperationStatusQuery groupByActif() Group by the actif column
 *
 * @method ROperationStatusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationStatusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationStatusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationStatusQuery leftJoinOperationStatutsRelatedByHsOldStatutId($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationStatutsRelatedByHsOldStatutId relation
 * @method ROperationStatusQuery rightJoinOperationStatutsRelatedByHsOldStatutId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationStatutsRelatedByHsOldStatutId relation
 * @method ROperationStatusQuery innerJoinOperationStatutsRelatedByHsOldStatutId($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationStatutsRelatedByHsOldStatutId relation
 *
 * @method ROperationStatusQuery leftJoinOperationStatutsRelatedByHsNewStatutId($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationStatutsRelatedByHsNewStatutId relation
 * @method ROperationStatusQuery rightJoinOperationStatutsRelatedByHsNewStatutId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationStatutsRelatedByHsNewStatutId relation
 * @method ROperationStatusQuery innerJoinOperationStatutsRelatedByHsNewStatutId($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationStatutsRelatedByHsNewStatutId relation
 *
 * @method ROperationStatusQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ROperationStatusQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ROperationStatusQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ROperationStatusQuery leftJoinROperationStatusRequiredOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationStatusRequiredOptions relation
 * @method ROperationStatusQuery rightJoinROperationStatusRequiredOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationStatusRequiredOptions relation
 * @method ROperationStatusQuery innerJoinROperationStatusRequiredOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationStatusRequiredOptions relation
 *
 * @method ROperationStatus findOne(PropelPDO $con = null) Return the first ROperationStatus matching the query
 * @method ROperationStatus findOneOrCreate(PropelPDO $con = null) Return the first ROperationStatus matching the query, or a new ROperationStatus object populated from the query conditions when no match is found
 *
 * @method ROperationStatus findOneByOsLibelle(string $os_libelle) Return the first ROperationStatus filtered by the os_libelle column
 * @method ROperationStatus findOneByUserId(int $user_id) Return the first ROperationStatus filtered by the user_id column
 * @method ROperationStatus findOneByUserModify(int $user_modify) Return the first ROperationStatus filtered by the user_modify column
 * @method ROperationStatus findOneByDateCreate(string $date_create) Return the first ROperationStatus filtered by the date_create column
 * @method ROperationStatus findOneByDateModify(string $date_modify) Return the first ROperationStatus filtered by the date_modify column
 * @method ROperationStatus findOneByActif(int $actif) Return the first ROperationStatus filtered by the actif column
 *
 * @method array findByOsId(int $os_id) Return ROperationStatus objects filtered by the os_id column
 * @method array findByOsLibelle(string $os_libelle) Return ROperationStatus objects filtered by the os_libelle column
 * @method array findByUserId(int $user_id) Return ROperationStatus objects filtered by the user_id column
 * @method array findByUserModify(int $user_modify) Return ROperationStatus objects filtered by the user_modify column
 * @method array findByDateCreate(string $date_create) Return ROperationStatus objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return ROperationStatus objects filtered by the date_modify column
 * @method array findByActif(int $actif) Return ROperationStatus objects filtered by the actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationStatusQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationStatusQuery object.
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
            $modelName = 'ROperationStatus';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationStatusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationStatusQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationStatusQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationStatusQuery) {
            return $criteria;
        }
        $query = new ROperationStatusQuery(null, null, $modelAlias);

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
     * @return   ROperationStatus|ROperationStatus[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationStatusPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationStatusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationStatus A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOsId($key, $con = null)
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
     * @return                 ROperationStatus A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `os_id`, `os_libelle`, `user_id`, `user_modify`, `date_create`, `date_modify`, `actif` FROM `r_operation_status` WHERE `os_id` = :p0';
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
            $obj = new ROperationStatus();
            $obj->hydrate($row);
            ROperationStatusPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationStatus|ROperationStatus[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationStatus[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationStatusPeer::OS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationStatusPeer::OS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the os_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOsId(1234); // WHERE os_id = 1234
     * $query->filterByOsId(array(12, 34)); // WHERE os_id IN (12, 34)
     * $query->filterByOsId(array('min' => 12)); // WHERE os_id >= 12
     * $query->filterByOsId(array('max' => 12)); // WHERE os_id <= 12
     * </code>
     *
     * @param     mixed $osId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function filterByOsId($osId = null, $comparison = null)
    {
        if (is_array($osId)) {
            $useMinMax = false;
            if (isset($osId['min'])) {
                $this->addUsingAlias(ROperationStatusPeer::OS_ID, $osId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($osId['max'])) {
                $this->addUsingAlias(ROperationStatusPeer::OS_ID, $osId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationStatusPeer::OS_ID, $osId, $comparison);
    }

    /**
     * Filter the query on the os_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOsLibelle('fooValue');   // WHERE os_libelle = 'fooValue'
     * $query->filterByOsLibelle('%fooValue%'); // WHERE os_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $osLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function filterByOsLibelle($osLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($osLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $osLibelle)) {
                $osLibelle = str_replace('*', '%', $osLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationStatusPeer::OS_LIBELLE, $osLibelle, $comparison);
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
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(ROperationStatusPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(ROperationStatusPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationStatusPeer::USER_ID, $userId, $comparison);
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
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(ROperationStatusPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(ROperationStatusPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationStatusPeer::USER_MODIFY, $userModify, $comparison);
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
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(ROperationStatusPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(ROperationStatusPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationStatusPeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(ROperationStatusPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(ROperationStatusPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationStatusPeer::DATE_MODIFY, $dateModify, $comparison);
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
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(ROperationStatusPeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(ROperationStatusPeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationStatusPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query by a related OperationStatuts object
     *
     * @param   OperationStatuts|PropelObjectCollection $operationStatuts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationStatusQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationStatutsRelatedByHsOldStatutId($operationStatuts, $comparison = null)
    {
        if ($operationStatuts instanceof OperationStatuts) {
            return $this
                ->addUsingAlias(ROperationStatusPeer::OS_ID, $operationStatuts->getHsOldStatutId(), $comparison);
        } elseif ($operationStatuts instanceof PropelObjectCollection) {
            return $this
                ->useOperationStatutsRelatedByHsOldStatutIdQuery()
                ->filterByPrimaryKeys($operationStatuts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationStatutsRelatedByHsOldStatutId() only accepts arguments of type OperationStatuts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationStatutsRelatedByHsOldStatutId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function joinOperationStatutsRelatedByHsOldStatutId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationStatutsRelatedByHsOldStatutId');

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
            $this->addJoinObject($join, 'OperationStatutsRelatedByHsOldStatutId');
        }

        return $this;
    }

    /**
     * Use the OperationStatutsRelatedByHsOldStatutId relation OperationStatuts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationStatutsQuery A secondary query class using the current class as primary query
     */
    public function useOperationStatutsRelatedByHsOldStatutIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationStatutsRelatedByHsOldStatutId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationStatutsRelatedByHsOldStatutId', 'OperationStatutsQuery');
    }

    /**
     * Filter the query by a related OperationStatuts object
     *
     * @param   OperationStatuts|PropelObjectCollection $operationStatuts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationStatusQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationStatutsRelatedByHsNewStatutId($operationStatuts, $comparison = null)
    {
        if ($operationStatuts instanceof OperationStatuts) {
            return $this
                ->addUsingAlias(ROperationStatusPeer::OS_ID, $operationStatuts->getHsNewStatutId(), $comparison);
        } elseif ($operationStatuts instanceof PropelObjectCollection) {
            return $this
                ->useOperationStatutsRelatedByHsNewStatutIdQuery()
                ->filterByPrimaryKeys($operationStatuts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationStatutsRelatedByHsNewStatutId() only accepts arguments of type OperationStatuts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationStatutsRelatedByHsNewStatutId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function joinOperationStatutsRelatedByHsNewStatutId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationStatutsRelatedByHsNewStatutId');

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
            $this->addJoinObject($join, 'OperationStatutsRelatedByHsNewStatutId');
        }

        return $this;
    }

    /**
     * Use the OperationStatutsRelatedByHsNewStatutId relation OperationStatuts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationStatutsQuery A secondary query class using the current class as primary query
     */
    public function useOperationStatutsRelatedByHsNewStatutIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationStatutsRelatedByHsNewStatutId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationStatutsRelatedByHsNewStatutId', 'OperationStatutsQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationStatusQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ROperationStatusPeer::OS_ID, $operations->getOpStatusId(), $comparison);
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
     * @return ROperationStatusQuery The current query, for fluid interface
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
     * Filter the query by a related ROperationStatusRequiredOptions object
     *
     * @param   ROperationStatusRequiredOptions|PropelObjectCollection $rOperationStatusRequiredOptions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationStatusQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationStatusRequiredOptions($rOperationStatusRequiredOptions, $comparison = null)
    {
        if ($rOperationStatusRequiredOptions instanceof ROperationStatusRequiredOptions) {
            return $this
                ->addUsingAlias(ROperationStatusPeer::OS_ID, $rOperationStatusRequiredOptions->getROperationStatusRequiredOptionsROperationStatusOsId(), $comparison);
        } elseif ($rOperationStatusRequiredOptions instanceof PropelObjectCollection) {
            return $this
                ->useROperationStatusRequiredOptionsQuery()
                ->filterByPrimaryKeys($rOperationStatusRequiredOptions->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationStatusRequiredOptions() only accepts arguments of type ROperationStatusRequiredOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationStatusRequiredOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function joinROperationStatusRequiredOptions($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationStatusRequiredOptions');

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
            $this->addJoinObject($join, 'ROperationStatusRequiredOptions');
        }

        return $this;
    }

    /**
     * Use the ROperationStatusRequiredOptions relation ROperationStatusRequiredOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationStatusRequiredOptionsQuery A secondary query class using the current class as primary query
     */
    public function useROperationStatusRequiredOptionsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationStatusRequiredOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationStatusRequiredOptions', 'ROperationStatusRequiredOptionsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationStatus $rOperationStatus Object to remove from the list of results
     *
     * @return ROperationStatusQuery The current query, for fluid interface
     */
    public function prune($rOperationStatus = null)
    {
        if ($rOperationStatus) {
            $this->addUsingAlias(ROperationStatusPeer::OS_ID, $rOperationStatus->getOsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
