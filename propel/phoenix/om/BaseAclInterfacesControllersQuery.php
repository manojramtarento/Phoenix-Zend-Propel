<?php


/**
 * Base class that represents a query for the 'acl_interfaces_controllers' table.
 *
 *
 *
 * @method AclInterfacesControllersQuery orderByIntContId($order = Criteria::ASC) Order by the int_cont_id column
 * @method AclInterfacesControllersQuery orderByModuleId($order = Criteria::ASC) Order by the module_id column
 * @method AclInterfacesControllersQuery orderByInterfaceName($order = Criteria::ASC) Order by the interface_name column
 * @method AclInterfacesControllersQuery orderByControllerName($order = Criteria::ASC) Order by the controller_name column
 *
 * @method AclInterfacesControllersQuery groupByIntContId() Group by the int_cont_id column
 * @method AclInterfacesControllersQuery groupByModuleId() Group by the module_id column
 * @method AclInterfacesControllersQuery groupByInterfaceName() Group by the interface_name column
 * @method AclInterfacesControllersQuery groupByControllerName() Group by the controller_name column
 *
 * @method AclInterfacesControllersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AclInterfacesControllersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AclInterfacesControllersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AclInterfacesControllersQuery leftJoinAclModules($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclModules relation
 * @method AclInterfacesControllersQuery rightJoinAclModules($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclModules relation
 * @method AclInterfacesControllersQuery innerJoinAclModules($relationAlias = null) Adds a INNER JOIN clause to the query using the AclModules relation
 *
 * @method AclInterfacesControllersQuery leftJoinAclActions($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclActions relation
 * @method AclInterfacesControllersQuery rightJoinAclActions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclActions relation
 * @method AclInterfacesControllersQuery innerJoinAclActions($relationAlias = null) Adds a INNER JOIN clause to the query using the AclActions relation
 *
 * @method AclInterfacesControllersQuery leftJoinAclFonctionnalites($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclFonctionnalites relation
 * @method AclInterfacesControllersQuery rightJoinAclFonctionnalites($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclFonctionnalites relation
 * @method AclInterfacesControllersQuery innerJoinAclFonctionnalites($relationAlias = null) Adds a INNER JOIN clause to the query using the AclFonctionnalites relation
 *
 * @method AclInterfacesControllers findOne(PropelPDO $con = null) Return the first AclInterfacesControllers matching the query
 * @method AclInterfacesControllers findOneOrCreate(PropelPDO $con = null) Return the first AclInterfacesControllers matching the query, or a new AclInterfacesControllers object populated from the query conditions when no match is found
 *
 * @method AclInterfacesControllers findOneByModuleId(int $module_id) Return the first AclInterfacesControllers filtered by the module_id column
 * @method AclInterfacesControllers findOneByInterfaceName(string $interface_name) Return the first AclInterfacesControllers filtered by the interface_name column
 * @method AclInterfacesControllers findOneByControllerName(string $controller_name) Return the first AclInterfacesControllers filtered by the controller_name column
 *
 * @method array findByIntContId(int $int_cont_id) Return AclInterfacesControllers objects filtered by the int_cont_id column
 * @method array findByModuleId(int $module_id) Return AclInterfacesControllers objects filtered by the module_id column
 * @method array findByInterfaceName(string $interface_name) Return AclInterfacesControllers objects filtered by the interface_name column
 * @method array findByControllerName(string $controller_name) Return AclInterfacesControllers objects filtered by the controller_name column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseAclInterfacesControllersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAclInterfacesControllersQuery object.
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
            $modelName = 'AclInterfacesControllers';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AclInterfacesControllersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AclInterfacesControllersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AclInterfacesControllersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AclInterfacesControllersQuery) {
            return $criteria;
        }
        $query = new AclInterfacesControllersQuery(null, null, $modelAlias);

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
     * @return   AclInterfacesControllers|AclInterfacesControllers[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AclInterfacesControllersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AclInterfacesControllersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 AclInterfacesControllers A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIntContId($key, $con = null)
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
     * @return                 AclInterfacesControllers A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `int_cont_id`, `module_id`, `interface_name`, `controller_name` FROM `acl_interfaces_controllers` WHERE `int_cont_id` = :p0';
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
            $obj = new AclInterfacesControllers();
            $obj->hydrate($row);
            AclInterfacesControllersPeer::addInstanceToPool($obj, (string) $key);
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
     * @return AclInterfacesControllers|AclInterfacesControllers[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|AclInterfacesControllers[]|mixed the list of results, formatted by the current formatter
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
     * @return AclInterfacesControllersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AclInterfacesControllersPeer::INT_CONT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AclInterfacesControllersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AclInterfacesControllersPeer::INT_CONT_ID, $keys, Criteria::IN);
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
     * @param     mixed $intContId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclInterfacesControllersQuery The current query, for fluid interface
     */
    public function filterByIntContId($intContId = null, $comparison = null)
    {
        if (is_array($intContId)) {
            $useMinMax = false;
            if (isset($intContId['min'])) {
                $this->addUsingAlias(AclInterfacesControllersPeer::INT_CONT_ID, $intContId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intContId['max'])) {
                $this->addUsingAlias(AclInterfacesControllersPeer::INT_CONT_ID, $intContId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AclInterfacesControllersPeer::INT_CONT_ID, $intContId, $comparison);
    }

    /**
     * Filter the query on the module_id column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleId(1234); // WHERE module_id = 1234
     * $query->filterByModuleId(array(12, 34)); // WHERE module_id IN (12, 34)
     * $query->filterByModuleId(array('min' => 12)); // WHERE module_id >= 12
     * $query->filterByModuleId(array('max' => 12)); // WHERE module_id <= 12
     * </code>
     *
     * @see       filterByAclModules()
     *
     * @param     mixed $moduleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclInterfacesControllersQuery The current query, for fluid interface
     */
    public function filterByModuleId($moduleId = null, $comparison = null)
    {
        if (is_array($moduleId)) {
            $useMinMax = false;
            if (isset($moduleId['min'])) {
                $this->addUsingAlias(AclInterfacesControllersPeer::MODULE_ID, $moduleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($moduleId['max'])) {
                $this->addUsingAlias(AclInterfacesControllersPeer::MODULE_ID, $moduleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AclInterfacesControllersPeer::MODULE_ID, $moduleId, $comparison);
    }

    /**
     * Filter the query on the interface_name column
     *
     * Example usage:
     * <code>
     * $query->filterByInterfaceName('fooValue');   // WHERE interface_name = 'fooValue'
     * $query->filterByInterfaceName('%fooValue%'); // WHERE interface_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $interfaceName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclInterfacesControllersQuery The current query, for fluid interface
     */
    public function filterByInterfaceName($interfaceName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($interfaceName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $interfaceName)) {
                $interfaceName = str_replace('*', '%', $interfaceName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AclInterfacesControllersPeer::INTERFACE_NAME, $interfaceName, $comparison);
    }

    /**
     * Filter the query on the controller_name column
     *
     * Example usage:
     * <code>
     * $query->filterByControllerName('fooValue');   // WHERE controller_name = 'fooValue'
     * $query->filterByControllerName('%fooValue%'); // WHERE controller_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $controllerName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclInterfacesControllersQuery The current query, for fluid interface
     */
    public function filterByControllerName($controllerName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($controllerName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $controllerName)) {
                $controllerName = str_replace('*', '%', $controllerName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AclInterfacesControllersPeer::CONTROLLER_NAME, $controllerName, $comparison);
    }

    /**
     * Filter the query by a related AclModules object
     *
     * @param   AclModules|PropelObjectCollection $aclModules The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclInterfacesControllersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclModules($aclModules, $comparison = null)
    {
        if ($aclModules instanceof AclModules) {
            return $this
                ->addUsingAlias(AclInterfacesControllersPeer::MODULE_ID, $aclModules->getModuleId(), $comparison);
        } elseif ($aclModules instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AclInterfacesControllersPeer::MODULE_ID, $aclModules->toKeyValue('PrimaryKey', 'ModuleId'), $comparison);
        } else {
            throw new PropelException('filterByAclModules() only accepts arguments of type AclModules or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AclModules relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AclInterfacesControllersQuery The current query, for fluid interface
     */
    public function joinAclModules($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AclModules');

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
            $this->addJoinObject($join, 'AclModules');
        }

        return $this;
    }

    /**
     * Use the AclModules relation AclModules object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AclModulesQuery A secondary query class using the current class as primary query
     */
    public function useAclModulesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAclModules($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AclModules', 'AclModulesQuery');
    }

    /**
     * Filter the query by a related AclActions object
     *
     * @param   AclActions|PropelObjectCollection $aclActions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclInterfacesControllersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclActions($aclActions, $comparison = null)
    {
        if ($aclActions instanceof AclActions) {
            return $this
                ->addUsingAlias(AclInterfacesControllersPeer::INT_CONT_ID, $aclActions->getIntContId(), $comparison);
        } elseif ($aclActions instanceof PropelObjectCollection) {
            return $this
                ->useAclActionsQuery()
                ->filterByPrimaryKeys($aclActions->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAclActions() only accepts arguments of type AclActions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AclActions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AclInterfacesControllersQuery The current query, for fluid interface
     */
    public function joinAclActions($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AclActions');

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
            $this->addJoinObject($join, 'AclActions');
        }

        return $this;
    }

    /**
     * Use the AclActions relation AclActions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AclActionsQuery A secondary query class using the current class as primary query
     */
    public function useAclActionsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAclActions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AclActions', 'AclActionsQuery');
    }

    /**
     * Filter the query by a related AclFonctionnalites object
     *
     * @param   AclFonctionnalites|PropelObjectCollection $aclFonctionnalites  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclInterfacesControllersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclFonctionnalites($aclFonctionnalites, $comparison = null)
    {
        if ($aclFonctionnalites instanceof AclFonctionnalites) {
            return $this
                ->addUsingAlias(AclInterfacesControllersPeer::INT_CONT_ID, $aclFonctionnalites->getIntContId(), $comparison);
        } elseif ($aclFonctionnalites instanceof PropelObjectCollection) {
            return $this
                ->useAclFonctionnalitesQuery()
                ->filterByPrimaryKeys($aclFonctionnalites->getPrimaryKeys())
                ->endUse();
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
     * @return AclInterfacesControllersQuery The current query, for fluid interface
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
     * @param   AclInterfacesControllers $aclInterfacesControllers Object to remove from the list of results
     *
     * @return AclInterfacesControllersQuery The current query, for fluid interface
     */
    public function prune($aclInterfacesControllers = null)
    {
        if ($aclInterfacesControllers) {
            $this->addUsingAlias(AclInterfacesControllersPeer::INT_CONT_ID, $aclInterfacesControllers->getIntContId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
