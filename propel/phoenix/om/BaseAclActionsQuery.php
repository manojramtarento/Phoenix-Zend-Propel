<?php


/**
 * Base class that represents a query for the 'acl_actions' table.
 *
 *
 *
 * @method AclActionsQuery orderByActionId($order = Criteria::ASC) Order by the action_id column
 * @method AclActionsQuery orderByIntContId($order = Criteria::ASC) Order by the int_cont_id column
 * @method AclActionsQuery orderByActionName($order = Criteria::ASC) Order by the action_name column
 * @method AclActionsQuery orderByFoncId($order = Criteria::ASC) Order by the fonc_id column
 * @method AclActionsQuery orderByComment($order = Criteria::ASC) Order by the comment column
 *
 * @method AclActionsQuery groupByActionId() Group by the action_id column
 * @method AclActionsQuery groupByIntContId() Group by the int_cont_id column
 * @method AclActionsQuery groupByActionName() Group by the action_name column
 * @method AclActionsQuery groupByFoncId() Group by the fonc_id column
 * @method AclActionsQuery groupByComment() Group by the comment column
 *
 * @method AclActionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AclActionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AclActionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AclActionsQuery leftJoinAclInterfacesControllers($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclInterfacesControllers relation
 * @method AclActionsQuery rightJoinAclInterfacesControllers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclInterfacesControllers relation
 * @method AclActionsQuery innerJoinAclInterfacesControllers($relationAlias = null) Adds a INNER JOIN clause to the query using the AclInterfacesControllers relation
 *
 * @method AclActionsQuery leftJoinAclFonctionnalites($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclFonctionnalites relation
 * @method AclActionsQuery rightJoinAclFonctionnalites($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclFonctionnalites relation
 * @method AclActionsQuery innerJoinAclFonctionnalites($relationAlias = null) Adds a INNER JOIN clause to the query using the AclFonctionnalites relation
 *
 * @method AclActions findOne(PropelPDO $con = null) Return the first AclActions matching the query
 * @method AclActions findOneOrCreate(PropelPDO $con = null) Return the first AclActions matching the query, or a new AclActions object populated from the query conditions when no match is found
 *
 * @method AclActions findOneByIntContId(int $int_cont_id) Return the first AclActions filtered by the int_cont_id column
 * @method AclActions findOneByActionName(string $action_name) Return the first AclActions filtered by the action_name column
 * @method AclActions findOneByFoncId(int $fonc_id) Return the first AclActions filtered by the fonc_id column
 * @method AclActions findOneByComment(string $comment) Return the first AclActions filtered by the comment column
 *
 * @method array findByActionId(int $action_id) Return AclActions objects filtered by the action_id column
 * @method array findByIntContId(int $int_cont_id) Return AclActions objects filtered by the int_cont_id column
 * @method array findByActionName(string $action_name) Return AclActions objects filtered by the action_name column
 * @method array findByFoncId(int $fonc_id) Return AclActions objects filtered by the fonc_id column
 * @method array findByComment(string $comment) Return AclActions objects filtered by the comment column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseAclActionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAclActionsQuery object.
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
            $modelName = 'AclActions';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AclActionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AclActionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AclActionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AclActionsQuery) {
            return $criteria;
        }
        $query = new AclActionsQuery(null, null, $modelAlias);

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
     * @return   AclActions|AclActions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AclActionsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AclActionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 AclActions A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByActionId($key, $con = null)
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
     * @return                 AclActions A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `action_id`, `int_cont_id`, `action_name`, `fonc_id`, `comment` FROM `acl_actions` WHERE `action_id` = :p0';
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
            $obj = new AclActions();
            $obj->hydrate($row);
            AclActionsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return AclActions|AclActions[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|AclActions[]|mixed the list of results, formatted by the current formatter
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
     * @return AclActionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AclActionsPeer::ACTION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AclActionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AclActionsPeer::ACTION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the action_id column
     *
     * Example usage:
     * <code>
     * $query->filterByActionId(1234); // WHERE action_id = 1234
     * $query->filterByActionId(array(12, 34)); // WHERE action_id IN (12, 34)
     * $query->filterByActionId(array('min' => 12)); // WHERE action_id >= 12
     * $query->filterByActionId(array('max' => 12)); // WHERE action_id <= 12
     * </code>
     *
     * @param     mixed $actionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclActionsQuery The current query, for fluid interface
     */
    public function filterByActionId($actionId = null, $comparison = null)
    {
        if (is_array($actionId)) {
            $useMinMax = false;
            if (isset($actionId['min'])) {
                $this->addUsingAlias(AclActionsPeer::ACTION_ID, $actionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actionId['max'])) {
                $this->addUsingAlias(AclActionsPeer::ACTION_ID, $actionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AclActionsPeer::ACTION_ID, $actionId, $comparison);
    }

    /**
     * Filter the query on the int_cont_id column
     *
     * Example usage:
     * <code>
     * $query->filterByIntContId(1234); // WHERE int_cont_id = 1234
     * $query->filterByIntContId(array(12, 34)); // WHERE int_cont_id IN (12, 34)
     * $query->filterByIntContId(array('min' => 12)); // WHERE int_cont_id >= 12
     * $query->filterByIntContId(array('max' => 12)); // WHERE int_cont_id <= 12
     * </code>
     *
     * @see       filterByAclInterfacesControllers()
     *
     * @param     mixed $intContId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclActionsQuery The current query, for fluid interface
     */
    public function filterByIntContId($intContId = null, $comparison = null)
    {
        if (is_array($intContId)) {
            $useMinMax = false;
            if (isset($intContId['min'])) {
                $this->addUsingAlias(AclActionsPeer::INT_CONT_ID, $intContId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intContId['max'])) {
                $this->addUsingAlias(AclActionsPeer::INT_CONT_ID, $intContId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AclActionsPeer::INT_CONT_ID, $intContId, $comparison);
    }

    /**
     * Filter the query on the action_name column
     *
     * Example usage:
     * <code>
     * $query->filterByActionName('fooValue');   // WHERE action_name = 'fooValue'
     * $query->filterByActionName('%fooValue%'); // WHERE action_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclActionsQuery The current query, for fluid interface
     */
    public function filterByActionName($actionName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionName)) {
                $actionName = str_replace('*', '%', $actionName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AclActionsPeer::ACTION_NAME, $actionName, $comparison);
    }

    /**
     * Filter the query on the fonc_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFoncId(1234); // WHERE fonc_id = 1234
     * $query->filterByFoncId(array(12, 34)); // WHERE fonc_id IN (12, 34)
     * $query->filterByFoncId(array('min' => 12)); // WHERE fonc_id >= 12
     * $query->filterByFoncId(array('max' => 12)); // WHERE fonc_id <= 12
     * </code>
     *
     * @see       filterByAclFonctionnalites()
     *
     * @param     mixed $foncId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclActionsQuery The current query, for fluid interface
     */
    public function filterByFoncId($foncId = null, $comparison = null)
    {
        if (is_array($foncId)) {
            $useMinMax = false;
            if (isset($foncId['min'])) {
                $this->addUsingAlias(AclActionsPeer::FONC_ID, $foncId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foncId['max'])) {
                $this->addUsingAlias(AclActionsPeer::FONC_ID, $foncId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AclActionsPeer::FONC_ID, $foncId, $comparison);
    }

    /**
     * Filter the query on the comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclActionsQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AclActionsPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query by a related AclInterfacesControllers object
     *
     * @param   AclInterfacesControllers|PropelObjectCollection $aclInterfacesControllers The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclActionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclInterfacesControllers($aclInterfacesControllers, $comparison = null)
    {
        if ($aclInterfacesControllers instanceof AclInterfacesControllers) {
            return $this
                ->addUsingAlias(AclActionsPeer::INT_CONT_ID, $aclInterfacesControllers->getIntContId(), $comparison);
        } elseif ($aclInterfacesControllers instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AclActionsPeer::INT_CONT_ID, $aclInterfacesControllers->toKeyValue('PrimaryKey', 'IntContId'), $comparison);
        } else {
            throw new PropelException('filterByAclInterfacesControllers() only accepts arguments of type AclInterfacesControllers or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AclInterfacesControllers relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AclActionsQuery The current query, for fluid interface
     */
    public function joinAclInterfacesControllers($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AclInterfacesControllers');

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
            $this->addJoinObject($join, 'AclInterfacesControllers');
        }

        return $this;
    }

    /**
     * Use the AclInterfacesControllers relation AclInterfacesControllers object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AclInterfacesControllersQuery A secondary query class using the current class as primary query
     */
    public function useAclInterfacesControllersQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAclInterfacesControllers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AclInterfacesControllers', 'AclInterfacesControllersQuery');
    }

    /**
     * Filter the query by a related AclFonctionnalites object
     *
     * @param   AclFonctionnalites|PropelObjectCollection $aclFonctionnalites The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclActionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclFonctionnalites($aclFonctionnalites, $comparison = null)
    {
        if ($aclFonctionnalites instanceof AclFonctionnalites) {
            return $this
                ->addUsingAlias(AclActionsPeer::FONC_ID, $aclFonctionnalites->getFoncId(), $comparison);
        } elseif ($aclFonctionnalites instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AclActionsPeer::FONC_ID, $aclFonctionnalites->toKeyValue('PrimaryKey', 'FoncId'), $comparison);
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
     * @return AclActionsQuery The current query, for fluid interface
     */
    public function joinAclFonctionnalites($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useAclFonctionnalitesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAclFonctionnalites($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AclFonctionnalites', 'AclFonctionnalitesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   AclActions $aclActions Object to remove from the list of results
     *
     * @return AclActionsQuery The current query, for fluid interface
     */
    public function prune($aclActions = null)
    {
        if ($aclActions) {
            $this->addUsingAlias(AclActionsPeer::ACTION_ID, $aclActions->getActionId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
