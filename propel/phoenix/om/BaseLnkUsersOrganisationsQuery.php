<?php


/**
 * Base class that represents a query for the 'lnk_users_organisations' table.
 *
 *
 *
 * @method LnkUsersOrganisationsQuery orderByLnkUsersOrganisationsUserId($order = Criteria::ASC) Order by the lnk_users_organisations_user_id column
 * @method LnkUsersOrganisationsQuery orderByLnkUsersOrganisationsOrganisationId($order = Criteria::ASC) Order by the lnk_users_organisations_organisation_id column
 *
 * @method LnkUsersOrganisationsQuery groupByLnkUsersOrganisationsUserId() Group by the lnk_users_organisations_user_id column
 * @method LnkUsersOrganisationsQuery groupByLnkUsersOrganisationsOrganisationId() Group by the lnk_users_organisations_organisation_id column
 *
 * @method LnkUsersOrganisationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkUsersOrganisationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkUsersOrganisationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkUsersOrganisationsQuery leftJoinUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Users relation
 * @method LnkUsersOrganisationsQuery rightJoinUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Users relation
 * @method LnkUsersOrganisationsQuery innerJoinUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the Users relation
 *
 * @method LnkUsersOrganisationsQuery leftJoinOrganisations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Organisations relation
 * @method LnkUsersOrganisationsQuery rightJoinOrganisations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Organisations relation
 * @method LnkUsersOrganisationsQuery innerJoinOrganisations($relationAlias = null) Adds a INNER JOIN clause to the query using the Organisations relation
 *
 * @method LnkUsersOrganisations findOne(PropelPDO $con = null) Return the first LnkUsersOrganisations matching the query
 * @method LnkUsersOrganisations findOneOrCreate(PropelPDO $con = null) Return the first LnkUsersOrganisations matching the query, or a new LnkUsersOrganisations object populated from the query conditions when no match is found
 *
 * @method LnkUsersOrganisations findOneByLnkUsersOrganisationsUserId(int $lnk_users_organisations_user_id) Return the first LnkUsersOrganisations filtered by the lnk_users_organisations_user_id column
 * @method LnkUsersOrganisations findOneByLnkUsersOrganisationsOrganisationId(int $lnk_users_organisations_organisation_id) Return the first LnkUsersOrganisations filtered by the lnk_users_organisations_organisation_id column
 *
 * @method array findByLnkUsersOrganisationsUserId(int $lnk_users_organisations_user_id) Return LnkUsersOrganisations objects filtered by the lnk_users_organisations_user_id column
 * @method array findByLnkUsersOrganisationsOrganisationId(int $lnk_users_organisations_organisation_id) Return LnkUsersOrganisations objects filtered by the lnk_users_organisations_organisation_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkUsersOrganisationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkUsersOrganisationsQuery object.
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
            $modelName = 'LnkUsersOrganisations';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkUsersOrganisationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkUsersOrganisationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkUsersOrganisationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkUsersOrganisationsQuery) {
            return $criteria;
        }
        $query = new LnkUsersOrganisationsQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$lnk_users_organisations_user_id, $lnk_users_organisations_organisation_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   LnkUsersOrganisations|LnkUsersOrganisations[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkUsersOrganisationsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkUsersOrganisationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 LnkUsersOrganisations A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `lnk_users_organisations_user_id`, `lnk_users_organisations_organisation_id` FROM `lnk_users_organisations` WHERE `lnk_users_organisations_user_id` = :p0 AND `lnk_users_organisations_organisation_id` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new LnkUsersOrganisations();
            $obj->hydrate($row);
            LnkUsersOrganisationsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return LnkUsersOrganisations|LnkUsersOrganisations[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LnkUsersOrganisations[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkUsersOrganisationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_USER_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_ORGANISATION_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkUsersOrganisationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_USER_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_ORGANISATION_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the lnk_users_organisations_user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkUsersOrganisationsUserId(1234); // WHERE lnk_users_organisations_user_id = 1234
     * $query->filterByLnkUsersOrganisationsUserId(array(12, 34)); // WHERE lnk_users_organisations_user_id IN (12, 34)
     * $query->filterByLnkUsersOrganisationsUserId(array('min' => 12)); // WHERE lnk_users_organisations_user_id >= 12
     * $query->filterByLnkUsersOrganisationsUserId(array('max' => 12)); // WHERE lnk_users_organisations_user_id <= 12
     * </code>
     *
     * @see       filterByUsers()
     *
     * @param     mixed $lnkUsersOrganisationsUserId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkUsersOrganisationsQuery The current query, for fluid interface
     */
    public function filterByLnkUsersOrganisationsUserId($lnkUsersOrganisationsUserId = null, $comparison = null)
    {
        if (is_array($lnkUsersOrganisationsUserId)) {
            $useMinMax = false;
            if (isset($lnkUsersOrganisationsUserId['min'])) {
                $this->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_USER_ID, $lnkUsersOrganisationsUserId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkUsersOrganisationsUserId['max'])) {
                $this->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_USER_ID, $lnkUsersOrganisationsUserId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_USER_ID, $lnkUsersOrganisationsUserId, $comparison);
    }

    /**
     * Filter the query on the lnk_users_organisations_organisation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkUsersOrganisationsOrganisationId(1234); // WHERE lnk_users_organisations_organisation_id = 1234
     * $query->filterByLnkUsersOrganisationsOrganisationId(array(12, 34)); // WHERE lnk_users_organisations_organisation_id IN (12, 34)
     * $query->filterByLnkUsersOrganisationsOrganisationId(array('min' => 12)); // WHERE lnk_users_organisations_organisation_id >= 12
     * $query->filterByLnkUsersOrganisationsOrganisationId(array('max' => 12)); // WHERE lnk_users_organisations_organisation_id <= 12
     * </code>
     *
     * @see       filterByOrganisations()
     *
     * @param     mixed $lnkUsersOrganisationsOrganisationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkUsersOrganisationsQuery The current query, for fluid interface
     */
    public function filterByLnkUsersOrganisationsOrganisationId($lnkUsersOrganisationsOrganisationId = null, $comparison = null)
    {
        if (is_array($lnkUsersOrganisationsOrganisationId)) {
            $useMinMax = false;
            if (isset($lnkUsersOrganisationsOrganisationId['min'])) {
                $this->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_ORGANISATION_ID, $lnkUsersOrganisationsOrganisationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkUsersOrganisationsOrganisationId['max'])) {
                $this->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_ORGANISATION_ID, $lnkUsersOrganisationsOrganisationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_ORGANISATION_ID, $lnkUsersOrganisationsOrganisationId, $comparison);
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkUsersOrganisationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsers($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_USER_ID, $users->getUserId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_USER_ID, $users->toKeyValue('PrimaryKey', 'UserId'), $comparison);
        } else {
            throw new PropelException('filterByUsers() only accepts arguments of type Users or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Users relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkUsersOrganisationsQuery The current query, for fluid interface
     */
    public function joinUsers($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Users');

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
            $this->addJoinObject($join, 'Users');
        }

        return $this;
    }

    /**
     * Use the Users relation Users object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsersQuery A secondary query class using the current class as primary query
     */
    public function useUsersQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Users', 'UsersQuery');
    }

    /**
     * Filter the query by a related Organisations object
     *
     * @param   Organisations|PropelObjectCollection $organisations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkUsersOrganisationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrganisations($organisations, $comparison = null)
    {
        if ($organisations instanceof Organisations) {
            return $this
                ->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_ORGANISATION_ID, $organisations->getOrganisationId(), $comparison);
        } elseif ($organisations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_ORGANISATION_ID, $organisations->toKeyValue('PrimaryKey', 'OrganisationId'), $comparison);
        } else {
            throw new PropelException('filterByOrganisations() only accepts arguments of type Organisations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Organisations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkUsersOrganisationsQuery The current query, for fluid interface
     */
    public function joinOrganisations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Organisations');

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
            $this->addJoinObject($join, 'Organisations');
        }

        return $this;
    }

    /**
     * Use the Organisations relation Organisations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrganisationsQuery A secondary query class using the current class as primary query
     */
    public function useOrganisationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrganisations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Organisations', 'OrganisationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   LnkUsersOrganisations $lnkUsersOrganisations Object to remove from the list of results
     *
     * @return LnkUsersOrganisationsQuery The current query, for fluid interface
     */
    public function prune($lnkUsersOrganisations = null)
    {
        if ($lnkUsersOrganisations) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_USER_ID), $lnkUsersOrganisations->getLnkUsersOrganisationsUserId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LnkUsersOrganisationsPeer::LNK_USERS_ORGANISATIONS_ORGANISATION_ID), $lnkUsersOrganisations->getLnkUsersOrganisationsOrganisationId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
