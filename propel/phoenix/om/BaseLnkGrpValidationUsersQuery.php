<?php


/**
 * Base class that represents a query for the 'lnk_grp_validation_users' table.
 *
 *
 *
 * @method LnkGrpValidationUsersQuery orderByLnkGrpValidationUserId($order = Criteria::ASC) Order by the lnk_grp_validation_user_id column
 * @method LnkGrpValidationUsersQuery orderByRPGroupeValidationId($order = Criteria::ASC) Order by the r_p_groupe_validation_id column
 * @method LnkGrpValidationUsersQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method LnkGrpValidationUsersQuery groupByLnkGrpValidationUserId() Group by the lnk_grp_validation_user_id column
 * @method LnkGrpValidationUsersQuery groupByRPGroupeValidationId() Group by the r_p_groupe_validation_id column
 * @method LnkGrpValidationUsersQuery groupByUserId() Group by the user_id column
 *
 * @method LnkGrpValidationUsersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkGrpValidationUsersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkGrpValidationUsersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkGrpValidationUsersQuery leftJoinValidationUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the ValidationUser relation
 * @method LnkGrpValidationUsersQuery rightJoinValidationUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ValidationUser relation
 * @method LnkGrpValidationUsersQuery innerJoinValidationUser($relationAlias = null) Adds a INNER JOIN clause to the query using the ValidationUser relation
 *
 * @method LnkGrpValidationUsers findOne(PropelPDO $con = null) Return the first LnkGrpValidationUsers matching the query
 * @method LnkGrpValidationUsers findOneOrCreate(PropelPDO $con = null) Return the first LnkGrpValidationUsers matching the query, or a new LnkGrpValidationUsers object populated from the query conditions when no match is found
 *
 * @method LnkGrpValidationUsers findOneByRPGroupeValidationId(int $r_p_groupe_validation_id) Return the first LnkGrpValidationUsers filtered by the r_p_groupe_validation_id column
 * @method LnkGrpValidationUsers findOneByUserId(int $user_id) Return the first LnkGrpValidationUsers filtered by the user_id column
 *
 * @method array findByLnkGrpValidationUserId(int $lnk_grp_validation_user_id) Return LnkGrpValidationUsers objects filtered by the lnk_grp_validation_user_id column
 * @method array findByRPGroupeValidationId(int $r_p_groupe_validation_id) Return LnkGrpValidationUsers objects filtered by the r_p_groupe_validation_id column
 * @method array findByUserId(int $user_id) Return LnkGrpValidationUsers objects filtered by the user_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkGrpValidationUsersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkGrpValidationUsersQuery object.
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
            $modelName = 'LnkGrpValidationUsers';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkGrpValidationUsersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkGrpValidationUsersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkGrpValidationUsersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkGrpValidationUsersQuery) {
            return $criteria;
        }
        $query = new LnkGrpValidationUsersQuery(null, null, $modelAlias);

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
     * @return   LnkGrpValidationUsers|LnkGrpValidationUsers[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkGrpValidationUsersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkGrpValidationUsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 LnkGrpValidationUsers A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLnkGrpValidationUserId($key, $con = null)
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
     * @return                 LnkGrpValidationUsers A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `lnk_grp_validation_user_id`, `r_p_groupe_validation_id`, `user_id` FROM `lnk_grp_validation_users` WHERE `lnk_grp_validation_user_id` = :p0';
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
            $obj = new LnkGrpValidationUsers();
            $obj->hydrate($row);
            LnkGrpValidationUsersPeer::addInstanceToPool($obj, (string) $key);
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
     * @return LnkGrpValidationUsers|LnkGrpValidationUsers[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LnkGrpValidationUsers[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkGrpValidationUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LnkGrpValidationUsersPeer::LNK_GRP_VALIDATION_USER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkGrpValidationUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LnkGrpValidationUsersPeer::LNK_GRP_VALIDATION_USER_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the lnk_grp_validation_user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkGrpValidationUserId(1234); // WHERE lnk_grp_validation_user_id = 1234
     * $query->filterByLnkGrpValidationUserId(array(12, 34)); // WHERE lnk_grp_validation_user_id IN (12, 34)
     * $query->filterByLnkGrpValidationUserId(array('min' => 12)); // WHERE lnk_grp_validation_user_id >= 12
     * $query->filterByLnkGrpValidationUserId(array('max' => 12)); // WHERE lnk_grp_validation_user_id <= 12
     * </code>
     *
     * @param     mixed $lnkGrpValidationUserId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkGrpValidationUsersQuery The current query, for fluid interface
     */
    public function filterByLnkGrpValidationUserId($lnkGrpValidationUserId = null, $comparison = null)
    {
        if (is_array($lnkGrpValidationUserId)) {
            $useMinMax = false;
            if (isset($lnkGrpValidationUserId['min'])) {
                $this->addUsingAlias(LnkGrpValidationUsersPeer::LNK_GRP_VALIDATION_USER_ID, $lnkGrpValidationUserId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkGrpValidationUserId['max'])) {
                $this->addUsingAlias(LnkGrpValidationUsersPeer::LNK_GRP_VALIDATION_USER_ID, $lnkGrpValidationUserId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkGrpValidationUsersPeer::LNK_GRP_VALIDATION_USER_ID, $lnkGrpValidationUserId, $comparison);
    }

    /**
     * Filter the query on the r_p_groupe_validation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPGroupeValidationId(1234); // WHERE r_p_groupe_validation_id = 1234
     * $query->filterByRPGroupeValidationId(array(12, 34)); // WHERE r_p_groupe_validation_id IN (12, 34)
     * $query->filterByRPGroupeValidationId(array('min' => 12)); // WHERE r_p_groupe_validation_id >= 12
     * $query->filterByRPGroupeValidationId(array('max' => 12)); // WHERE r_p_groupe_validation_id <= 12
     * </code>
     *
     * @param     mixed $rPGroupeValidationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkGrpValidationUsersQuery The current query, for fluid interface
     */
    public function filterByRPGroupeValidationId($rPGroupeValidationId = null, $comparison = null)
    {
        if (is_array($rPGroupeValidationId)) {
            $useMinMax = false;
            if (isset($rPGroupeValidationId['min'])) {
                $this->addUsingAlias(LnkGrpValidationUsersPeer::R_P_GROUPE_VALIDATION_ID, $rPGroupeValidationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPGroupeValidationId['max'])) {
                $this->addUsingAlias(LnkGrpValidationUsersPeer::R_P_GROUPE_VALIDATION_ID, $rPGroupeValidationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkGrpValidationUsersPeer::R_P_GROUPE_VALIDATION_ID, $rPGroupeValidationId, $comparison);
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
     * @see       filterByValidationUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkGrpValidationUsersQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(LnkGrpValidationUsersPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(LnkGrpValidationUsersPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkGrpValidationUsersPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkGrpValidationUsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByValidationUser($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(LnkGrpValidationUsersPeer::USER_ID, $users->getUserId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkGrpValidationUsersPeer::USER_ID, $users->toKeyValue('PrimaryKey', 'UserId'), $comparison);
        } else {
            throw new PropelException('filterByValidationUser() only accepts arguments of type Users or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ValidationUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkGrpValidationUsersQuery The current query, for fluid interface
     */
    public function joinValidationUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ValidationUser');

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
            $this->addJoinObject($join, 'ValidationUser');
        }

        return $this;
    }

    /**
     * Use the ValidationUser relation Users object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsersQuery A secondary query class using the current class as primary query
     */
    public function useValidationUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinValidationUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ValidationUser', 'UsersQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   LnkGrpValidationUsers $lnkGrpValidationUsers Object to remove from the list of results
     *
     * @return LnkGrpValidationUsersQuery The current query, for fluid interface
     */
    public function prune($lnkGrpValidationUsers = null)
    {
        if ($lnkGrpValidationUsers) {
            $this->addUsingAlias(LnkGrpValidationUsersPeer::LNK_GRP_VALIDATION_USER_ID, $lnkGrpValidationUsers->getLnkGrpValidationUserId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
