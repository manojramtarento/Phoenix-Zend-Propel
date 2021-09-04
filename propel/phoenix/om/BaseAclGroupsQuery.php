<?php


/**
 * Base class that represents a query for the 'acl_groups' table.
 *
 *
 *
 * @method AclGroupsQuery orderByGroupId($order = Criteria::ASC) Order by the group_id column
 * @method AclGroupsQuery orderByGroupName($order = Criteria::ASC) Order by the group_name column
 * @method AclGroupsQuery orderByGroupOrganisationId($order = Criteria::ASC) Order by the group_organisation_id column
 *
 * @method AclGroupsQuery groupByGroupId() Group by the group_id column
 * @method AclGroupsQuery groupByGroupName() Group by the group_name column
 * @method AclGroupsQuery groupByGroupOrganisationId() Group by the group_organisation_id column
 *
 * @method AclGroupsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AclGroupsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AclGroupsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AclGroupsQuery leftJoinOrganisations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Organisations relation
 * @method AclGroupsQuery rightJoinOrganisations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Organisations relation
 * @method AclGroupsQuery innerJoinOrganisations($relationAlias = null) Adds a INNER JOIN clause to the query using the Organisations relation
 *
 * @method AclGroupsQuery leftJoinLnkAclGroupsFonctionnalites($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkAclGroupsFonctionnalites relation
 * @method AclGroupsQuery rightJoinLnkAclGroupsFonctionnalites($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkAclGroupsFonctionnalites relation
 * @method AclGroupsQuery innerJoinLnkAclGroupsFonctionnalites($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkAclGroupsFonctionnalites relation
 *
 * @method AclGroupsQuery leftJoinLnkUsersAclGroups($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkUsersAclGroups relation
 * @method AclGroupsQuery rightJoinLnkUsersAclGroups($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkUsersAclGroups relation
 * @method AclGroupsQuery innerJoinLnkUsersAclGroups($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkUsersAclGroups relation
 *
 * @method AclGroupsQuery leftJoinRPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the RPrestations relation
 * @method AclGroupsQuery rightJoinRPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RPrestations relation
 * @method AclGroupsQuery innerJoinRPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the RPrestations relation
 *
 * @method AclGroups findOne(PropelPDO $con = null) Return the first AclGroups matching the query
 * @method AclGroups findOneOrCreate(PropelPDO $con = null) Return the first AclGroups matching the query, or a new AclGroups object populated from the query conditions when no match is found
 *
 * @method AclGroups findOneByGroupName(string $group_name) Return the first AclGroups filtered by the group_name column
 * @method AclGroups findOneByGroupOrganisationId(int $group_organisation_id) Return the first AclGroups filtered by the group_organisation_id column
 *
 * @method array findByGroupId(int $group_id) Return AclGroups objects filtered by the group_id column
 * @method array findByGroupName(string $group_name) Return AclGroups objects filtered by the group_name column
 * @method array findByGroupOrganisationId(int $group_organisation_id) Return AclGroups objects filtered by the group_organisation_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseAclGroupsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAclGroupsQuery object.
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
            $modelName = 'AclGroups';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AclGroupsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AclGroupsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AclGroupsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AclGroupsQuery) {
            return $criteria;
        }
        $query = new AclGroupsQuery(null, null, $modelAlias);

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
     * @return   AclGroups|AclGroups[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AclGroupsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AclGroupsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 AclGroups A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByGroupId($key, $con = null)
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
     * @return                 AclGroups A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `group_id`, `group_name`, `group_organisation_id` FROM `acl_groups` WHERE `group_id` = :p0';
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
            $obj = new AclGroups();
            $obj->hydrate($row);
            AclGroupsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return AclGroups|AclGroups[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|AclGroups[]|mixed the list of results, formatted by the current formatter
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
     * @return AclGroupsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AclGroupsPeer::GROUP_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AclGroupsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AclGroupsPeer::GROUP_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the group_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupId(1234); // WHERE group_id = 1234
     * $query->filterByGroupId(array(12, 34)); // WHERE group_id IN (12, 34)
     * $query->filterByGroupId(array('min' => 12)); // WHERE group_id >= 12
     * $query->filterByGroupId(array('max' => 12)); // WHERE group_id <= 12
     * </code>
     *
     * @param     mixed $groupId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclGroupsQuery The current query, for fluid interface
     */
    public function filterByGroupId($groupId = null, $comparison = null)
    {
        if (is_array($groupId)) {
            $useMinMax = false;
            if (isset($groupId['min'])) {
                $this->addUsingAlias(AclGroupsPeer::GROUP_ID, $groupId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groupId['max'])) {
                $this->addUsingAlias(AclGroupsPeer::GROUP_ID, $groupId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AclGroupsPeer::GROUP_ID, $groupId, $comparison);
    }

    /**
     * Filter the query on the group_name column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupName('fooValue');   // WHERE group_name = 'fooValue'
     * $query->filterByGroupName('%fooValue%'); // WHERE group_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groupName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclGroupsQuery The current query, for fluid interface
     */
    public function filterByGroupName($groupName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $groupName)) {
                $groupName = str_replace('*', '%', $groupName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AclGroupsPeer::GROUP_NAME, $groupName, $comparison);
    }

    /**
     * Filter the query on the group_organisation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupOrganisationId(1234); // WHERE group_organisation_id = 1234
     * $query->filterByGroupOrganisationId(array(12, 34)); // WHERE group_organisation_id IN (12, 34)
     * $query->filterByGroupOrganisationId(array('min' => 12)); // WHERE group_organisation_id >= 12
     * $query->filterByGroupOrganisationId(array('max' => 12)); // WHERE group_organisation_id <= 12
     * </code>
     *
     * @see       filterByOrganisations()
     *
     * @param     mixed $groupOrganisationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclGroupsQuery The current query, for fluid interface
     */
    public function filterByGroupOrganisationId($groupOrganisationId = null, $comparison = null)
    {
        if (is_array($groupOrganisationId)) {
            $useMinMax = false;
            if (isset($groupOrganisationId['min'])) {
                $this->addUsingAlias(AclGroupsPeer::GROUP_ORGANISATION_ID, $groupOrganisationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groupOrganisationId['max'])) {
                $this->addUsingAlias(AclGroupsPeer::GROUP_ORGANISATION_ID, $groupOrganisationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AclGroupsPeer::GROUP_ORGANISATION_ID, $groupOrganisationId, $comparison);
    }

    /**
     * Filter the query by a related Organisations object
     *
     * @param   Organisations|PropelObjectCollection $organisations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclGroupsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrganisations($organisations, $comparison = null)
    {
        if ($organisations instanceof Organisations) {
            return $this
                ->addUsingAlias(AclGroupsPeer::GROUP_ORGANISATION_ID, $organisations->getOrganisationId(), $comparison);
        } elseif ($organisations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AclGroupsPeer::GROUP_ORGANISATION_ID, $organisations->toKeyValue('PrimaryKey', 'OrganisationId'), $comparison);
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
     * @return AclGroupsQuery The current query, for fluid interface
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
     * Filter the query by a related LnkAclGroupsFonctionnalites object
     *
     * @param   LnkAclGroupsFonctionnalites|PropelObjectCollection $lnkAclGroupsFonctionnalites  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclGroupsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkAclGroupsFonctionnalites($lnkAclGroupsFonctionnalites, $comparison = null)
    {
        if ($lnkAclGroupsFonctionnalites instanceof LnkAclGroupsFonctionnalites) {
            return $this
                ->addUsingAlias(AclGroupsPeer::GROUP_ID, $lnkAclGroupsFonctionnalites->getLnkAclGroupsFonctionnaliteGroupId(), $comparison);
        } elseif ($lnkAclGroupsFonctionnalites instanceof PropelObjectCollection) {
            return $this
                ->useLnkAclGroupsFonctionnalitesQuery()
                ->filterByPrimaryKeys($lnkAclGroupsFonctionnalites->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkAclGroupsFonctionnalites() only accepts arguments of type LnkAclGroupsFonctionnalites or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkAclGroupsFonctionnalites relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AclGroupsQuery The current query, for fluid interface
     */
    public function joinLnkAclGroupsFonctionnalites($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkAclGroupsFonctionnalites');

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
            $this->addJoinObject($join, 'LnkAclGroupsFonctionnalites');
        }

        return $this;
    }

    /**
     * Use the LnkAclGroupsFonctionnalites relation LnkAclGroupsFonctionnalites object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkAclGroupsFonctionnalitesQuery A secondary query class using the current class as primary query
     */
    public function useLnkAclGroupsFonctionnalitesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkAclGroupsFonctionnalites($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkAclGroupsFonctionnalites', 'LnkAclGroupsFonctionnalitesQuery');
    }

    /**
     * Filter the query by a related LnkUsersAclGroups object
     *
     * @param   LnkUsersAclGroups|PropelObjectCollection $lnkUsersAclGroups  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclGroupsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkUsersAclGroups($lnkUsersAclGroups, $comparison = null)
    {
        if ($lnkUsersAclGroups instanceof LnkUsersAclGroups) {
            return $this
                ->addUsingAlias(AclGroupsPeer::GROUP_ID, $lnkUsersAclGroups->getGroupId(), $comparison);
        } elseif ($lnkUsersAclGroups instanceof PropelObjectCollection) {
            return $this
                ->useLnkUsersAclGroupsQuery()
                ->filterByPrimaryKeys($lnkUsersAclGroups->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkUsersAclGroups() only accepts arguments of type LnkUsersAclGroups or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkUsersAclGroups relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AclGroupsQuery The current query, for fluid interface
     */
    public function joinLnkUsersAclGroups($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkUsersAclGroups');

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
            $this->addJoinObject($join, 'LnkUsersAclGroups');
        }

        return $this;
    }

    /**
     * Use the LnkUsersAclGroups relation LnkUsersAclGroups object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkUsersAclGroupsQuery A secondary query class using the current class as primary query
     */
    public function useLnkUsersAclGroupsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkUsersAclGroups($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkUsersAclGroups', 'LnkUsersAclGroupsQuery');
    }

    /**
     * Filter the query by a related RPrestations object
     *
     * @param   RPrestations|PropelObjectCollection $rPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclGroupsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRPrestations($rPrestations, $comparison = null)
    {
        if ($rPrestations instanceof RPrestations) {
            return $this
                ->addUsingAlias(AclGroupsPeer::GROUP_ID, $rPrestations->getRPGroupeValidationId(), $comparison);
        } elseif ($rPrestations instanceof PropelObjectCollection) {
            return $this
                ->useRPrestationsQuery()
                ->filterByPrimaryKeys($rPrestations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRPrestations() only accepts arguments of type RPrestations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RPrestations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AclGroupsQuery The current query, for fluid interface
     */
    public function joinRPrestations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RPrestations');

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
            $this->addJoinObject($join, 'RPrestations');
        }

        return $this;
    }

    /**
     * Use the RPrestations relation RPrestations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RPrestationsQuery A secondary query class using the current class as primary query
     */
    public function useRPrestationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RPrestations', 'RPrestationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   AclGroups $aclGroups Object to remove from the list of results
     *
     * @return AclGroupsQuery The current query, for fluid interface
     */
    public function prune($aclGroups = null)
    {
        if ($aclGroups) {
            $this->addUsingAlias(AclGroupsPeer::GROUP_ID, $aclGroups->getGroupId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
