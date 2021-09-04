<?php


/**
 * Base class that represents a query for the 'settings' table.
 *
 *
 *
 * @method SettingsQuery orderBySettingId($order = Criteria::ASC) Order by the setting_id column
 * @method SettingsQuery orderBySettingOrganisationId($order = Criteria::ASC) Order by the setting_organisation_id column
 * @method SettingsQuery orderBySettingKey($order = Criteria::ASC) Order by the setting_key column
 * @method SettingsQuery orderBySettingValue($order = Criteria::ASC) Order by the setting_value column
 *
 * @method SettingsQuery groupBySettingId() Group by the setting_id column
 * @method SettingsQuery groupBySettingOrganisationId() Group by the setting_organisation_id column
 * @method SettingsQuery groupBySettingKey() Group by the setting_key column
 * @method SettingsQuery groupBySettingValue() Group by the setting_value column
 *
 * @method SettingsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SettingsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SettingsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SettingsQuery leftJoinOrganisations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Organisations relation
 * @method SettingsQuery rightJoinOrganisations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Organisations relation
 * @method SettingsQuery innerJoinOrganisations($relationAlias = null) Adds a INNER JOIN clause to the query using the Organisations relation
 *
 * @method Settings findOne(PropelPDO $con = null) Return the first Settings matching the query
 * @method Settings findOneOrCreate(PropelPDO $con = null) Return the first Settings matching the query, or a new Settings object populated from the query conditions when no match is found
 *
 * @method Settings findOneBySettingOrganisationId(int $setting_organisation_id) Return the first Settings filtered by the setting_organisation_id column
 * @method Settings findOneBySettingKey(string $setting_key) Return the first Settings filtered by the setting_key column
 * @method Settings findOneBySettingValue(string $setting_value) Return the first Settings filtered by the setting_value column
 *
 * @method array findBySettingId(int $setting_id) Return Settings objects filtered by the setting_id column
 * @method array findBySettingOrganisationId(int $setting_organisation_id) Return Settings objects filtered by the setting_organisation_id column
 * @method array findBySettingKey(string $setting_key) Return Settings objects filtered by the setting_key column
 * @method array findBySettingValue(string $setting_value) Return Settings objects filtered by the setting_value column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseSettingsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSettingsQuery object.
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
            $modelName = 'Settings';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SettingsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SettingsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SettingsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SettingsQuery) {
            return $criteria;
        }
        $query = new SettingsQuery(null, null, $modelAlias);

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
     * @return   Settings|Settings[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SettingsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SettingsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Settings A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySettingId($key, $con = null)
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
     * @return                 Settings A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `setting_id`, `setting_organisation_id`, `setting_key`, `setting_value` FROM `settings` WHERE `setting_id` = :p0';
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
            $obj = new Settings();
            $obj->hydrate($row);
            SettingsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Settings|Settings[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Settings[]|mixed the list of results, formatted by the current formatter
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
     * @return SettingsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SettingsPeer::SETTING_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SettingsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SettingsPeer::SETTING_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the setting_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySettingId(1234); // WHERE setting_id = 1234
     * $query->filterBySettingId(array(12, 34)); // WHERE setting_id IN (12, 34)
     * $query->filterBySettingId(array('min' => 12)); // WHERE setting_id >= 12
     * $query->filterBySettingId(array('max' => 12)); // WHERE setting_id <= 12
     * </code>
     *
     * @param     mixed $settingId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SettingsQuery The current query, for fluid interface
     */
    public function filterBySettingId($settingId = null, $comparison = null)
    {
        if (is_array($settingId)) {
            $useMinMax = false;
            if (isset($settingId['min'])) {
                $this->addUsingAlias(SettingsPeer::SETTING_ID, $settingId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($settingId['max'])) {
                $this->addUsingAlias(SettingsPeer::SETTING_ID, $settingId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SettingsPeer::SETTING_ID, $settingId, $comparison);
    }

    /**
     * Filter the query on the setting_organisation_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySettingOrganisationId(1234); // WHERE setting_organisation_id = 1234
     * $query->filterBySettingOrganisationId(array(12, 34)); // WHERE setting_organisation_id IN (12, 34)
     * $query->filterBySettingOrganisationId(array('min' => 12)); // WHERE setting_organisation_id >= 12
     * $query->filterBySettingOrganisationId(array('max' => 12)); // WHERE setting_organisation_id <= 12
     * </code>
     *
     * @see       filterByOrganisations()
     *
     * @param     mixed $settingOrganisationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SettingsQuery The current query, for fluid interface
     */
    public function filterBySettingOrganisationId($settingOrganisationId = null, $comparison = null)
    {
        if (is_array($settingOrganisationId)) {
            $useMinMax = false;
            if (isset($settingOrganisationId['min'])) {
                $this->addUsingAlias(SettingsPeer::SETTING_ORGANISATION_ID, $settingOrganisationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($settingOrganisationId['max'])) {
                $this->addUsingAlias(SettingsPeer::SETTING_ORGANISATION_ID, $settingOrganisationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SettingsPeer::SETTING_ORGANISATION_ID, $settingOrganisationId, $comparison);
    }

    /**
     * Filter the query on the setting_key column
     *
     * Example usage:
     * <code>
     * $query->filterBySettingKey('fooValue');   // WHERE setting_key = 'fooValue'
     * $query->filterBySettingKey('%fooValue%'); // WHERE setting_key LIKE '%fooValue%'
     * </code>
     *
     * @param     string $settingKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SettingsQuery The current query, for fluid interface
     */
    public function filterBySettingKey($settingKey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($settingKey)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $settingKey)) {
                $settingKey = str_replace('*', '%', $settingKey);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SettingsPeer::SETTING_KEY, $settingKey, $comparison);
    }

    /**
     * Filter the query on the setting_value column
     *
     * Example usage:
     * <code>
     * $query->filterBySettingValue('fooValue');   // WHERE setting_value = 'fooValue'
     * $query->filterBySettingValue('%fooValue%'); // WHERE setting_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $settingValue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SettingsQuery The current query, for fluid interface
     */
    public function filterBySettingValue($settingValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($settingValue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $settingValue)) {
                $settingValue = str_replace('*', '%', $settingValue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SettingsPeer::SETTING_VALUE, $settingValue, $comparison);
    }

    /**
     * Filter the query by a related Organisations object
     *
     * @param   Organisations|PropelObjectCollection $organisations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SettingsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrganisations($organisations, $comparison = null)
    {
        if ($organisations instanceof Organisations) {
            return $this
                ->addUsingAlias(SettingsPeer::SETTING_ORGANISATION_ID, $organisations->getOrganisationId(), $comparison);
        } elseif ($organisations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SettingsPeer::SETTING_ORGANISATION_ID, $organisations->toKeyValue('PrimaryKey', 'OrganisationId'), $comparison);
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
     * @return SettingsQuery The current query, for fluid interface
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
     * @param   Settings $settings Object to remove from the list of results
     *
     * @return SettingsQuery The current query, for fluid interface
     */
    public function prune($settings = null)
    {
        if ($settings) {
            $this->addUsingAlias(SettingsPeer::SETTING_ID, $settings->getSettingId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
