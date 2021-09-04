<?php


/**
 * Base class that represents a query for the 'lnk_acl_groups_fonctionnalites' table.
 *
 *
 *
 * @method LnkAclGroupsFonctionnalitesQuery orderByLnkAclGroupsFonctionnaliteId($order = Criteria::ASC) Order by the lnk_acl_groups_fonctionnalite_id column
 * @method LnkAclGroupsFonctionnalitesQuery orderByLnkAclGroupsFonctionnaliteGroupId($order = Criteria::ASC) Order by the lnk_acl_groups_fonctionnalite_group_id column
 * @method LnkAclGroupsFonctionnalitesQuery orderByLnkAclGroupsFonctionnaliteFoncId($order = Criteria::ASC) Order by the lnk_acl_groups_fonctionnalite_fonc_id column
 *
 * @method LnkAclGroupsFonctionnalitesQuery groupByLnkAclGroupsFonctionnaliteId() Group by the lnk_acl_groups_fonctionnalite_id column
 * @method LnkAclGroupsFonctionnalitesQuery groupByLnkAclGroupsFonctionnaliteGroupId() Group by the lnk_acl_groups_fonctionnalite_group_id column
 * @method LnkAclGroupsFonctionnalitesQuery groupByLnkAclGroupsFonctionnaliteFoncId() Group by the lnk_acl_groups_fonctionnalite_fonc_id column
 *
 * @method LnkAclGroupsFonctionnalitesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkAclGroupsFonctionnalitesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkAclGroupsFonctionnalitesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkAclGroupsFonctionnalitesQuery leftJoinAclFonctionnalites($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclFonctionnalites relation
 * @method LnkAclGroupsFonctionnalitesQuery rightJoinAclFonctionnalites($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclFonctionnalites relation
 * @method LnkAclGroupsFonctionnalitesQuery innerJoinAclFonctionnalites($relationAlias = null) Adds a INNER JOIN clause to the query using the AclFonctionnalites relation
 *
 * @method LnkAclGroupsFonctionnalitesQuery leftJoinAclGroups($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclGroups relation
 * @method LnkAclGroupsFonctionnalitesQuery rightJoinAclGroups($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclGroups relation
 * @method LnkAclGroupsFonctionnalitesQuery innerJoinAclGroups($relationAlias = null) Adds a INNER JOIN clause to the query using the AclGroups relation
 *
 * @method LnkAclGroupsFonctionnalites findOne(PropelPDO $con = null) Return the first LnkAclGroupsFonctionnalites matching the query
 * @method LnkAclGroupsFonctionnalites findOneOrCreate(PropelPDO $con = null) Return the first LnkAclGroupsFonctionnalites matching the query, or a new LnkAclGroupsFonctionnalites object populated from the query conditions when no match is found
 *
 * @method LnkAclGroupsFonctionnalites findOneByLnkAclGroupsFonctionnaliteGroupId(int $lnk_acl_groups_fonctionnalite_group_id) Return the first LnkAclGroupsFonctionnalites filtered by the lnk_acl_groups_fonctionnalite_group_id column
 * @method LnkAclGroupsFonctionnalites findOneByLnkAclGroupsFonctionnaliteFoncId(int $lnk_acl_groups_fonctionnalite_fonc_id) Return the first LnkAclGroupsFonctionnalites filtered by the lnk_acl_groups_fonctionnalite_fonc_id column
 *
 * @method array findByLnkAclGroupsFonctionnaliteId(int $lnk_acl_groups_fonctionnalite_id) Return LnkAclGroupsFonctionnalites objects filtered by the lnk_acl_groups_fonctionnalite_id column
 * @method array findByLnkAclGroupsFonctionnaliteGroupId(int $lnk_acl_groups_fonctionnalite_group_id) Return LnkAclGroupsFonctionnalites objects filtered by the lnk_acl_groups_fonctionnalite_group_id column
 * @method array findByLnkAclGroupsFonctionnaliteFoncId(int $lnk_acl_groups_fonctionnalite_fonc_id) Return LnkAclGroupsFonctionnalites objects filtered by the lnk_acl_groups_fonctionnalite_fonc_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkAclGroupsFonctionnalitesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkAclGroupsFonctionnalitesQuery object.
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
            $modelName = 'LnkAclGroupsFonctionnalites';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkAclGroupsFonctionnalitesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkAclGroupsFonctionnalitesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkAclGroupsFonctionnalitesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkAclGroupsFonctionnalitesQuery) {
            return $criteria;
        }
        $query = new LnkAclGroupsFonctionnalitesQuery(null, null, $modelAlias);

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
     * @return   LnkAclGroupsFonctionnalites|LnkAclGroupsFonctionnalites[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkAclGroupsFonctionnalitesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkAclGroupsFonctionnalitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 LnkAclGroupsFonctionnalites A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLnkAclGroupsFonctionnaliteId($key, $con = null)
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
     * @return                 LnkAclGroupsFonctionnalites A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `lnk_acl_groups_fonctionnalite_id`, `lnk_acl_groups_fonctionnalite_group_id`, `lnk_acl_groups_fonctionnalite_fonc_id` FROM `lnk_acl_groups_fonctionnalites` WHERE `lnk_acl_groups_fonctionnalite_id` = :p0';
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
            $obj = new LnkAclGroupsFonctionnalites();
            $obj->hydrate($row);
            LnkAclGroupsFonctionnalitesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return LnkAclGroupsFonctionnalites|LnkAclGroupsFonctionnalites[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LnkAclGroupsFonctionnalites[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkAclGroupsFonctionnalitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkAclGroupsFonctionnalitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the lnk_acl_groups_fonctionnalite_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkAclGroupsFonctionnaliteId(1234); // WHERE lnk_acl_groups_fonctionnalite_id = 1234
     * $query->filterByLnkAclGroupsFonctionnaliteId(array(12, 34)); // WHERE lnk_acl_groups_fonctionnalite_id IN (12, 34)
     * $query->filterByLnkAclGroupsFonctionnaliteId(array('min' => 12)); // WHERE lnk_acl_groups_fonctionnalite_id >= 12
     * $query->filterByLnkAclGroupsFonctionnaliteId(array('max' => 12)); // WHERE lnk_acl_groups_fonctionnalite_id <= 12
     * </code>
     *
     * @param     mixed $lnkAclGroupsFonctionnaliteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkAclGroupsFonctionnalitesQuery The current query, for fluid interface
     */
    public function filterByLnkAclGroupsFonctionnaliteId($lnkAclGroupsFonctionnaliteId = null, $comparison = null)
    {
        if (is_array($lnkAclGroupsFonctionnaliteId)) {
            $useMinMax = false;
            if (isset($lnkAclGroupsFonctionnaliteId['min'])) {
                $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_ID, $lnkAclGroupsFonctionnaliteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkAclGroupsFonctionnaliteId['max'])) {
                $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_ID, $lnkAclGroupsFonctionnaliteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_ID, $lnkAclGroupsFonctionnaliteId, $comparison);
    }

    /**
     * Filter the query on the lnk_acl_groups_fonctionnalite_group_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkAclGroupsFonctionnaliteGroupId(1234); // WHERE lnk_acl_groups_fonctionnalite_group_id = 1234
     * $query->filterByLnkAclGroupsFonctionnaliteGroupId(array(12, 34)); // WHERE lnk_acl_groups_fonctionnalite_group_id IN (12, 34)
     * $query->filterByLnkAclGroupsFonctionnaliteGroupId(array('min' => 12)); // WHERE lnk_acl_groups_fonctionnalite_group_id >= 12
     * $query->filterByLnkAclGroupsFonctionnaliteGroupId(array('max' => 12)); // WHERE lnk_acl_groups_fonctionnalite_group_id <= 12
     * </code>
     *
     * @see       filterByAclGroups()
     *
     * @param     mixed $lnkAclGroupsFonctionnaliteGroupId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkAclGroupsFonctionnalitesQuery The current query, for fluid interface
     */
    public function filterByLnkAclGroupsFonctionnaliteGroupId($lnkAclGroupsFonctionnaliteGroupId = null, $comparison = null)
    {
        if (is_array($lnkAclGroupsFonctionnaliteGroupId)) {
            $useMinMax = false;
            if (isset($lnkAclGroupsFonctionnaliteGroupId['min'])) {
                $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_GROUP_ID, $lnkAclGroupsFonctionnaliteGroupId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkAclGroupsFonctionnaliteGroupId['max'])) {
                $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_GROUP_ID, $lnkAclGroupsFonctionnaliteGroupId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_GROUP_ID, $lnkAclGroupsFonctionnaliteGroupId, $comparison);
    }

    /**
     * Filter the query on the lnk_acl_groups_fonctionnalite_fonc_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkAclGroupsFonctionnaliteFoncId(1234); // WHERE lnk_acl_groups_fonctionnalite_fonc_id = 1234
     * $query->filterByLnkAclGroupsFonctionnaliteFoncId(array(12, 34)); // WHERE lnk_acl_groups_fonctionnalite_fonc_id IN (12, 34)
     * $query->filterByLnkAclGroupsFonctionnaliteFoncId(array('min' => 12)); // WHERE lnk_acl_groups_fonctionnalite_fonc_id >= 12
     * $query->filterByLnkAclGroupsFonctionnaliteFoncId(array('max' => 12)); // WHERE lnk_acl_groups_fonctionnalite_fonc_id <= 12
     * </code>
     *
     * @see       filterByAclFonctionnalites()
     *
     * @param     mixed $lnkAclGroupsFonctionnaliteFoncId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkAclGroupsFonctionnalitesQuery The current query, for fluid interface
     */
    public function filterByLnkAclGroupsFonctionnaliteFoncId($lnkAclGroupsFonctionnaliteFoncId = null, $comparison = null)
    {
        if (is_array($lnkAclGroupsFonctionnaliteFoncId)) {
            $useMinMax = false;
            if (isset($lnkAclGroupsFonctionnaliteFoncId['min'])) {
                $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_FONC_ID, $lnkAclGroupsFonctionnaliteFoncId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkAclGroupsFonctionnaliteFoncId['max'])) {
                $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_FONC_ID, $lnkAclGroupsFonctionnaliteFoncId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_FONC_ID, $lnkAclGroupsFonctionnaliteFoncId, $comparison);
    }

    /**
     * Filter the query by a related AclFonctionnalites object
     *
     * @param   AclFonctionnalites|PropelObjectCollection $aclFonctionnalites The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkAclGroupsFonctionnalitesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclFonctionnalites($aclFonctionnalites, $comparison = null)
    {
        if ($aclFonctionnalites instanceof AclFonctionnalites) {
            return $this
                ->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_FONC_ID, $aclFonctionnalites->getFoncId(), $comparison);
        } elseif ($aclFonctionnalites instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_FONC_ID, $aclFonctionnalites->toKeyValue('PrimaryKey', 'FoncId'), $comparison);
        } else {
            throw new PropelException('filterByAclFonctionnalites() only accepts arguments of type AclFonctionnalites or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AclFonctionnalites relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkAclGroupsFonctionnalitesQuery The current query, for fluid interface
     */
    public function joinAclFonctionnalites($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AclFonctionnalites');

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
            $this->addJoinObject($join, 'AclFonctionnalites');
        }

        return $this;
    }

    /**
     * Use the AclFonctionnalites relation AclFonctionnalites object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AclFonctionnalitesQuery A secondary query class using the current class as primary query
     */
    public function useAclFonctionnalitesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAclFonctionnalites($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AclFonctionnalites', 'AclFonctionnalitesQuery');
    }

    /**
     * Filter the query by a related AclGroups object
     *
     * @param   AclGroups|PropelObjectCollection $aclGroups The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkAclGroupsFonctionnalitesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclGroups($aclGroups, $comparison = null)
    {
        if ($aclGroups instanceof AclGroups) {
            return $this
                ->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_GROUP_ID, $aclGroups->getGroupId(), $comparison);
        } elseif ($aclGroups instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_GROUP_ID, $aclGroups->toKeyValue('PrimaryKey', 'GroupId'), $comparison);
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
     * @return LnkAclGroupsFonctionnalitesQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   LnkAclGroupsFonctionnalites $lnkAclGroupsFonctionnalites Object to remove from the list of results
     *
     * @return LnkAclGroupsFonctionnalitesQuery The current query, for fluid interface
     */
    public function prune($lnkAclGroupsFonctionnalites = null)
    {
        if ($lnkAclGroupsFonctionnalites) {
            $this->addUsingAlias(LnkAclGroupsFonctionnalitesPeer::LNK_ACL_GROUPS_FONCTIONNALITE_ID, $lnkAclGroupsFonctionnalites->getLnkAclGroupsFonctionnaliteId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
