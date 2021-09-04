<?php


/**
 * Base class that represents a query for the 'r_user_types' table.
 *
 *
 *
 * @method RUserTypesQuery orderByRUserTypeId($order = Criteria::ASC) Order by the r_user_type_id column
 * @method RUserTypesQuery orderByRUserTypeShortName($order = Criteria::ASC) Order by the r_user_type_short_name column
 * @method RUserTypesQuery orderByRUserTypeFullName($order = Criteria::ASC) Order by the r_user_type_full_name column
 * @method RUserTypesQuery orderByRUserTypeActif($order = Criteria::ASC) Order by the r_user_type_actif column
 *
 * @method RUserTypesQuery groupByRUserTypeId() Group by the r_user_type_id column
 * @method RUserTypesQuery groupByRUserTypeShortName() Group by the r_user_type_short_name column
 * @method RUserTypesQuery groupByRUserTypeFullName() Group by the r_user_type_full_name column
 * @method RUserTypesQuery groupByRUserTypeActif() Group by the r_user_type_actif column
 *
 * @method RUserTypesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RUserTypesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RUserTypesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RUserTypesQuery leftJoinUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Users relation
 * @method RUserTypesQuery rightJoinUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Users relation
 * @method RUserTypesQuery innerJoinUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the Users relation
 *
 * @method RUserTypes findOne(PropelPDO $con = null) Return the first RUserTypes matching the query
 * @method RUserTypes findOneOrCreate(PropelPDO $con = null) Return the first RUserTypes matching the query, or a new RUserTypes object populated from the query conditions when no match is found
 *
 * @method RUserTypes findOneByRUserTypeShortName(string $r_user_type_short_name) Return the first RUserTypes filtered by the r_user_type_short_name column
 * @method RUserTypes findOneByRUserTypeFullName(string $r_user_type_full_name) Return the first RUserTypes filtered by the r_user_type_full_name column
 * @method RUserTypes findOneByRUserTypeActif(int $r_user_type_actif) Return the first RUserTypes filtered by the r_user_type_actif column
 *
 * @method array findByRUserTypeId(int $r_user_type_id) Return RUserTypes objects filtered by the r_user_type_id column
 * @method array findByRUserTypeShortName(string $r_user_type_short_name) Return RUserTypes objects filtered by the r_user_type_short_name column
 * @method array findByRUserTypeFullName(string $r_user_type_full_name) Return RUserTypes objects filtered by the r_user_type_full_name column
 * @method array findByRUserTypeActif(int $r_user_type_actif) Return RUserTypes objects filtered by the r_user_type_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRUserTypesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRUserTypesQuery object.
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
            $modelName = 'RUserTypes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RUserTypesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RUserTypesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RUserTypesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RUserTypesQuery) {
            return $criteria;
        }
        $query = new RUserTypesQuery(null, null, $modelAlias);

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
     * @return   RUserTypes|RUserTypes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RUserTypesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RUserTypesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RUserTypes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRUserTypeId($key, $con = null)
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
     * @return                 RUserTypes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_user_type_id`, `r_user_type_short_name`, `r_user_type_full_name`, `r_user_type_actif` FROM `r_user_types` WHERE `r_user_type_id` = :p0';
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
            $obj = new RUserTypes();
            $obj->hydrate($row);
            RUserTypesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RUserTypes|RUserTypes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RUserTypes[]|mixed the list of results, formatted by the current formatter
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
     * @return RUserTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RUserTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_user_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRUserTypeId(1234); // WHERE r_user_type_id = 1234
     * $query->filterByRUserTypeId(array(12, 34)); // WHERE r_user_type_id IN (12, 34)
     * $query->filterByRUserTypeId(array('min' => 12)); // WHERE r_user_type_id >= 12
     * $query->filterByRUserTypeId(array('max' => 12)); // WHERE r_user_type_id <= 12
     * </code>
     *
     * @param     mixed $rUserTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RUserTypesQuery The current query, for fluid interface
     */
    public function filterByRUserTypeId($rUserTypeId = null, $comparison = null)
    {
        if (is_array($rUserTypeId)) {
            $useMinMax = false;
            if (isset($rUserTypeId['min'])) {
                $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_ID, $rUserTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rUserTypeId['max'])) {
                $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_ID, $rUserTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_ID, $rUserTypeId, $comparison);
    }

    /**
     * Filter the query on the r_user_type_short_name column
     *
     * Example usage:
     * <code>
     * $query->filterByRUserTypeShortName('fooValue');   // WHERE r_user_type_short_name = 'fooValue'
     * $query->filterByRUserTypeShortName('%fooValue%'); // WHERE r_user_type_short_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rUserTypeShortName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RUserTypesQuery The current query, for fluid interface
     */
    public function filterByRUserTypeShortName($rUserTypeShortName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rUserTypeShortName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rUserTypeShortName)) {
                $rUserTypeShortName = str_replace('*', '%', $rUserTypeShortName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_SHORT_NAME, $rUserTypeShortName, $comparison);
    }

    /**
     * Filter the query on the r_user_type_full_name column
     *
     * Example usage:
     * <code>
     * $query->filterByRUserTypeFullName('fooValue');   // WHERE r_user_type_full_name = 'fooValue'
     * $query->filterByRUserTypeFullName('%fooValue%'); // WHERE r_user_type_full_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rUserTypeFullName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RUserTypesQuery The current query, for fluid interface
     */
    public function filterByRUserTypeFullName($rUserTypeFullName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rUserTypeFullName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rUserTypeFullName)) {
                $rUserTypeFullName = str_replace('*', '%', $rUserTypeFullName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_FULL_NAME, $rUserTypeFullName, $comparison);
    }

    /**
     * Filter the query on the r_user_type_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRUserTypeActif(1234); // WHERE r_user_type_actif = 1234
     * $query->filterByRUserTypeActif(array(12, 34)); // WHERE r_user_type_actif IN (12, 34)
     * $query->filterByRUserTypeActif(array('min' => 12)); // WHERE r_user_type_actif >= 12
     * $query->filterByRUserTypeActif(array('max' => 12)); // WHERE r_user_type_actif <= 12
     * </code>
     *
     * @param     mixed $rUserTypeActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RUserTypesQuery The current query, for fluid interface
     */
    public function filterByRUserTypeActif($rUserTypeActif = null, $comparison = null)
    {
        if (is_array($rUserTypeActif)) {
            $useMinMax = false;
            if (isset($rUserTypeActif['min'])) {
                $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_ACTIF, $rUserTypeActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rUserTypeActif['max'])) {
                $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_ACTIF, $rUserTypeActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_ACTIF, $rUserTypeActif, $comparison);
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RUserTypesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsers($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(RUserTypesPeer::R_USER_TYPE_ID, $users->getRUserTypeId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            return $this
                ->useUsersQuery()
                ->filterByPrimaryKeys($users->getPrimaryKeys())
                ->endUse();
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
     * @return RUserTypesQuery The current query, for fluid interface
     */
    public function joinUsers($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useUsersQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Users', 'UsersQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RUserTypes $rUserTypes Object to remove from the list of results
     *
     * @return RUserTypesQuery The current query, for fluid interface
     */
    public function prune($rUserTypes = null)
    {
        if ($rUserTypes) {
            $this->addUsingAlias(RUserTypesPeer::R_USER_TYPE_ID, $rUserTypes->getRUserTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
