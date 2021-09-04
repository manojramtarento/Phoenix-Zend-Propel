<?php


/**
 * Base class that represents a query for the 'organisations' table.
 *
 *
 *
 * @method OrganisationsQuery orderByOrganisationId($order = Criteria::ASC) Order by the organisation_id column
 * @method OrganisationsQuery orderByOrganisationName($order = Criteria::ASC) Order by the organisation_name column
 *
 * @method OrganisationsQuery groupByOrganisationId() Group by the organisation_id column
 * @method OrganisationsQuery groupByOrganisationName() Group by the organisation_name column
 *
 * @method OrganisationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OrganisationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OrganisationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OrganisationsQuery leftJoinAclGroups($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclGroups relation
 * @method OrganisationsQuery rightJoinAclGroups($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclGroups relation
 * @method OrganisationsQuery innerJoinAclGroups($relationAlias = null) Adds a INNER JOIN clause to the query using the AclGroups relation
 *
 * @method OrganisationsQuery leftJoinSettings($relationAlias = null) Adds a LEFT JOIN clause to the query using the Settings relation
 * @method OrganisationsQuery rightJoinSettings($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Settings relation
 * @method OrganisationsQuery innerJoinSettings($relationAlias = null) Adds a INNER JOIN clause to the query using the Settings relation
 *
 * @method OrganisationsQuery leftJoinLnkUsersOrganisations($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkUsersOrganisations relation
 * @method OrganisationsQuery rightJoinLnkUsersOrganisations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkUsersOrganisations relation
 * @method OrganisationsQuery innerJoinLnkUsersOrganisations($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkUsersOrganisations relation
 *
 * @method Organisations findOne(PropelPDO $con = null) Return the first Organisations matching the query
 * @method Organisations findOneOrCreate(PropelPDO $con = null) Return the first Organisations matching the query, or a new Organisations object populated from the query conditions when no match is found
 *
 * @method Organisations findOneByOrganisationName(string $organisation_name) Return the first Organisations filtered by the organisation_name column
 *
 * @method array findByOrganisationId(int $organisation_id) Return Organisations objects filtered by the organisation_id column
 * @method array findByOrganisationName(string $organisation_name) Return Organisations objects filtered by the organisation_name column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOrganisationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOrganisationsQuery object.
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
            $modelName = 'Organisations';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrganisationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OrganisationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OrganisationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrganisationsQuery) {
            return $criteria;
        }
        $query = new OrganisationsQuery(null, null, $modelAlias);

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
     * @return   Organisations|Organisations[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OrganisationsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OrganisationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Organisations A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOrganisationId($key, $con = null)
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
     * @return                 Organisations A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `organisation_id`, `organisation_name` FROM `organisations` WHERE `organisation_id` = :p0';
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
            $obj = new Organisations();
            $obj->hydrate($row);
            OrganisationsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Organisations|Organisations[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Organisations[]|mixed the list of results, formatted by the current formatter
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
     * @return OrganisationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OrganisationsPeer::ORGANISATION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OrganisationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OrganisationsPeer::ORGANISATION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the organisation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisationId(1234); // WHERE organisation_id = 1234
     * $query->filterByOrganisationId(array(12, 34)); // WHERE organisation_id IN (12, 34)
     * $query->filterByOrganisationId(array('min' => 12)); // WHERE organisation_id >= 12
     * $query->filterByOrganisationId(array('max' => 12)); // WHERE organisation_id <= 12
     * </code>
     *
     * @param     mixed $organisationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrganisationsQuery The current query, for fluid interface
     */
    public function filterByOrganisationId($organisationId = null, $comparison = null)
    {
        if (is_array($organisationId)) {
            $useMinMax = false;
            if (isset($organisationId['min'])) {
                $this->addUsingAlias(OrganisationsPeer::ORGANISATION_ID, $organisationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($organisationId['max'])) {
                $this->addUsingAlias(OrganisationsPeer::ORGANISATION_ID, $organisationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrganisationsPeer::ORGANISATION_ID, $organisationId, $comparison);
    }

    /**
     * Filter the query on the organisation_name column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisationName('fooValue');   // WHERE organisation_name = 'fooValue'
     * $query->filterByOrganisationName('%fooValue%'); // WHERE organisation_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisationName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrganisationsQuery The current query, for fluid interface
     */
    public function filterByOrganisationName($organisationName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisationName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisationName)) {
                $organisationName = str_replace('*', '%', $organisationName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrganisationsPeer::ORGANISATION_NAME, $organisationName, $comparison);
    }

    /**
     * Filter the query by a related AclGroups object
     *
     * @param   AclGroups|PropelObjectCollection $aclGroups  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrganisationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclGroups($aclGroups, $comparison = null)
    {
        if ($aclGroups instanceof AclGroups) {
            return $this
                ->addUsingAlias(OrganisationsPeer::ORGANISATION_ID, $aclGroups->getGroupOrganisationId(), $comparison);
        } elseif ($aclGroups instanceof PropelObjectCollection) {
            return $this
                ->useAclGroupsQuery()
                ->filterByPrimaryKeys($aclGroups->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAclGroups() only accepts arguments of type AclGroups or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AclGroups relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrganisationsQuery The current query, for fluid interface
     */
    public function joinAclGroups($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AclGroups');

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
            $this->addJoinObject($join, 'AclGroups');
        }

        return $this;
    }

    /**
     * Use the AclGroups relation AclGroups object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AclGroupsQuery A secondary query class using the current class as primary query
     */
    public function useAclGroupsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAclGroups($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AclGroups', 'AclGroupsQuery');
    }

    /**
     * Filter the query by a related Settings object
     *
     * @param   Settings|PropelObjectCollection $settings  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrganisationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySettings($settings, $comparison = null)
    {
        if ($settings instanceof Settings) {
            return $this
                ->addUsingAlias(OrganisationsPeer::ORGANISATION_ID, $settings->getSettingOrganisationId(), $comparison);
        } elseif ($settings instanceof PropelObjectCollection) {
            return $this
                ->useSettingsQuery()
                ->filterByPrimaryKeys($settings->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySettings() only accepts arguments of type Settings or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Settings relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrganisationsQuery The current query, for fluid interface
     */
    public function joinSettings($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Settings');

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
            $this->addJoinObject($join, 'Settings');
        }

        return $this;
    }

    /**
     * Use the Settings relation Settings object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SettingsQuery A secondary query class using the current class as primary query
     */
    public function useSettingsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSettings($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Settings', 'SettingsQuery');
    }

    /**
     * Filter the query by a related LnkUsersOrganisations object
     *
     * @param   LnkUsersOrganisations|PropelObjectCollection $lnkUsersOrganisations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrganisationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkUsersOrganisations($lnkUsersOrganisations, $comparison = null)
    {
        if ($lnkUsersOrganisations instanceof LnkUsersOrganisations) {
            return $this
                ->addUsingAlias(OrganisationsPeer::ORGANISATION_ID, $lnkUsersOrganisations->getLnkUsersOrganisationsOrganisationId(), $comparison);
        } elseif ($lnkUsersOrganisations instanceof PropelObjectCollection) {
            return $this
                ->useLnkUsersOrganisationsQuery()
                ->filterByPrimaryKeys($lnkUsersOrganisations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkUsersOrganisations() only accepts arguments of type LnkUsersOrganisations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkUsersOrganisations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrganisationsQuery The current query, for fluid interface
     */
    public function joinLnkUsersOrganisations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkUsersOrganisations');

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
            $this->addJoinObject($join, 'LnkUsersOrganisations');
        }

        return $this;
    }

    /**
     * Use the LnkUsersOrganisations relation LnkUsersOrganisations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkUsersOrganisationsQuery A secondary query class using the current class as primary query
     */
    public function useLnkUsersOrganisationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkUsersOrganisations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkUsersOrganisations', 'LnkUsersOrganisationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Organisations $organisations Object to remove from the list of results
     *
     * @return OrganisationsQuery The current query, for fluid interface
     */
    public function prune($organisations = null)
    {
        if ($organisations) {
            $this->addUsingAlias(OrganisationsPeer::ORGANISATION_ID, $organisations->getOrganisationId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
