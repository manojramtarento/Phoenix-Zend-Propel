<?php


/**
 * Base class that represents a query for the 'user_kpi_settings' table.
 *
 *
 *
 * @method UserKpiSettingsQuery orderByUserKpiSettingsId($order = Criteria::ASC) Order by the user_kpi_settings_id column
 * @method UserKpiSettingsQuery orderByUserKpiSettingsUserId($order = Criteria::ASC) Order by the user_kpi_settings_user_id column
 * @method UserKpiSettingsQuery orderByUserKpiSettingsName($order = Criteria::ASC) Order by the user_kpi_settings_name column
 * @method UserKpiSettingsQuery orderByUserKpiSettingsValue($order = Criteria::ASC) Order by the user_kpi_settings_value column
 *
 * @method UserKpiSettingsQuery groupByUserKpiSettingsId() Group by the user_kpi_settings_id column
 * @method UserKpiSettingsQuery groupByUserKpiSettingsUserId() Group by the user_kpi_settings_user_id column
 * @method UserKpiSettingsQuery groupByUserKpiSettingsName() Group by the user_kpi_settings_name column
 * @method UserKpiSettingsQuery groupByUserKpiSettingsValue() Group by the user_kpi_settings_value column
 *
 * @method UserKpiSettingsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UserKpiSettingsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UserKpiSettingsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UserKpiSettingsQuery leftJoinUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Users relation
 * @method UserKpiSettingsQuery rightJoinUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Users relation
 * @method UserKpiSettingsQuery innerJoinUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the Users relation
 *
 * @method UserKpiSettings findOne(PropelPDO $con = null) Return the first UserKpiSettings matching the query
 * @method UserKpiSettings findOneOrCreate(PropelPDO $con = null) Return the first UserKpiSettings matching the query, or a new UserKpiSettings object populated from the query conditions when no match is found
 *
 * @method UserKpiSettings findOneByUserKpiSettingsUserId(int $user_kpi_settings_user_id) Return the first UserKpiSettings filtered by the user_kpi_settings_user_id column
 * @method UserKpiSettings findOneByUserKpiSettingsName(string $user_kpi_settings_name) Return the first UserKpiSettings filtered by the user_kpi_settings_name column
 * @method UserKpiSettings findOneByUserKpiSettingsValue(string $user_kpi_settings_value) Return the first UserKpiSettings filtered by the user_kpi_settings_value column
 *
 * @method array findByUserKpiSettingsId(int $user_kpi_settings_id) Return UserKpiSettings objects filtered by the user_kpi_settings_id column
 * @method array findByUserKpiSettingsUserId(int $user_kpi_settings_user_id) Return UserKpiSettings objects filtered by the user_kpi_settings_user_id column
 * @method array findByUserKpiSettingsName(string $user_kpi_settings_name) Return UserKpiSettings objects filtered by the user_kpi_settings_name column
 * @method array findByUserKpiSettingsValue(string $user_kpi_settings_value) Return UserKpiSettings objects filtered by the user_kpi_settings_value column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseUserKpiSettingsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUserKpiSettingsQuery object.
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
            $modelName = 'UserKpiSettings';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UserKpiSettingsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UserKpiSettingsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UserKpiSettingsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UserKpiSettingsQuery) {
            return $criteria;
        }
        $query = new UserKpiSettingsQuery(null, null, $modelAlias);

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
     * @return   UserKpiSettings|UserKpiSettings[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UserKpiSettingsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UserKpiSettingsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 UserKpiSettings A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUserKpiSettingsId($key, $con = null)
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
     * @return                 UserKpiSettings A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `user_kpi_settings_id`, `user_kpi_settings_user_id`, `user_kpi_settings_name`, `user_kpi_settings_value` FROM `user_kpi_settings` WHERE `user_kpi_settings_id` = :p0';
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
            $obj = new UserKpiSettings();
            $obj->hydrate($row);
            UserKpiSettingsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return UserKpiSettings|UserKpiSettings[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|UserKpiSettings[]|mixed the list of results, formatted by the current formatter
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
     * @return UserKpiSettingsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UserKpiSettingsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the user_kpi_settings_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserKpiSettingsId(1234); // WHERE user_kpi_settings_id = 1234
     * $query->filterByUserKpiSettingsId(array(12, 34)); // WHERE user_kpi_settings_id IN (12, 34)
     * $query->filterByUserKpiSettingsId(array('min' => 12)); // WHERE user_kpi_settings_id >= 12
     * $query->filterByUserKpiSettingsId(array('max' => 12)); // WHERE user_kpi_settings_id <= 12
     * </code>
     *
     * @param     mixed $userKpiSettingsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserKpiSettingsQuery The current query, for fluid interface
     */
    public function filterByUserKpiSettingsId($userKpiSettingsId = null, $comparison = null)
    {
        if (is_array($userKpiSettingsId)) {
            $useMinMax = false;
            if (isset($userKpiSettingsId['min'])) {
                $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_ID, $userKpiSettingsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userKpiSettingsId['max'])) {
                $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_ID, $userKpiSettingsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_ID, $userKpiSettingsId, $comparison);
    }

    /**
     * Filter the query on the user_kpi_settings_user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserKpiSettingsUserId(1234); // WHERE user_kpi_settings_user_id = 1234
     * $query->filterByUserKpiSettingsUserId(array(12, 34)); // WHERE user_kpi_settings_user_id IN (12, 34)
     * $query->filterByUserKpiSettingsUserId(array('min' => 12)); // WHERE user_kpi_settings_user_id >= 12
     * $query->filterByUserKpiSettingsUserId(array('max' => 12)); // WHERE user_kpi_settings_user_id <= 12
     * </code>
     *
     * @see       filterByUsers()
     *
     * @param     mixed $userKpiSettingsUserId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserKpiSettingsQuery The current query, for fluid interface
     */
    public function filterByUserKpiSettingsUserId($userKpiSettingsUserId = null, $comparison = null)
    {
        if (is_array($userKpiSettingsUserId)) {
            $useMinMax = false;
            if (isset($userKpiSettingsUserId['min'])) {
                $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_USER_ID, $userKpiSettingsUserId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userKpiSettingsUserId['max'])) {
                $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_USER_ID, $userKpiSettingsUserId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_USER_ID, $userKpiSettingsUserId, $comparison);
    }

    /**
     * Filter the query on the user_kpi_settings_name column
     *
     * Example usage:
     * <code>
     * $query->filterByUserKpiSettingsName('fooValue');   // WHERE user_kpi_settings_name = 'fooValue'
     * $query->filterByUserKpiSettingsName('%fooValue%'); // WHERE user_kpi_settings_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userKpiSettingsName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserKpiSettingsQuery The current query, for fluid interface
     */
    public function filterByUserKpiSettingsName($userKpiSettingsName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userKpiSettingsName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userKpiSettingsName)) {
                $userKpiSettingsName = str_replace('*', '%', $userKpiSettingsName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_NAME, $userKpiSettingsName, $comparison);
    }

    /**
     * Filter the query on the user_kpi_settings_value column
     *
     * Example usage:
     * <code>
     * $query->filterByUserKpiSettingsValue('fooValue');   // WHERE user_kpi_settings_value = 'fooValue'
     * $query->filterByUserKpiSettingsValue('%fooValue%'); // WHERE user_kpi_settings_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userKpiSettingsValue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserKpiSettingsQuery The current query, for fluid interface
     */
    public function filterByUserKpiSettingsValue($userKpiSettingsValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userKpiSettingsValue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userKpiSettingsValue)) {
                $userKpiSettingsValue = str_replace('*', '%', $userKpiSettingsValue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_VALUE, $userKpiSettingsValue, $comparison);
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserKpiSettingsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsers($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_USER_ID, $users->getUserId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_USER_ID, $users->toKeyValue('PrimaryKey', 'UserId'), $comparison);
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
     * @return UserKpiSettingsQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   UserKpiSettings $userKpiSettings Object to remove from the list of results
     *
     * @return UserKpiSettingsQuery The current query, for fluid interface
     */
    public function prune($userKpiSettings = null)
    {
        if ($userKpiSettings) {
            $this->addUsingAlias(UserKpiSettingsPeer::USER_KPI_SETTINGS_ID, $userKpiSettings->getUserKpiSettingsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
