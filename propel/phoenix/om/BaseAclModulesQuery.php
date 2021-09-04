<?php


/**
 * Base class that represents a query for the 'acl_modules' table.
 *
 *
 *
 * @method AclModulesQuery orderByModuleId($order = Criteria::ASC) Order by the module_id column
 * @method AclModulesQuery orderByModuleName($order = Criteria::ASC) Order by the module_name column
 *
 * @method AclModulesQuery groupByModuleId() Group by the module_id column
 * @method AclModulesQuery groupByModuleName() Group by the module_name column
 *
 * @method AclModulesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AclModulesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AclModulesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AclModulesQuery leftJoinAclInterfacesControllers($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclInterfacesControllers relation
 * @method AclModulesQuery rightJoinAclInterfacesControllers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclInterfacesControllers relation
 * @method AclModulesQuery innerJoinAclInterfacesControllers($relationAlias = null) Adds a INNER JOIN clause to the query using the AclInterfacesControllers relation
 *
 * @method AclModules findOne(PropelPDO $con = null) Return the first AclModules matching the query
 * @method AclModules findOneOrCreate(PropelPDO $con = null) Return the first AclModules matching the query, or a new AclModules object populated from the query conditions when no match is found
 *
 * @method AclModules findOneByModuleName(string $module_name) Return the first AclModules filtered by the module_name column
 *
 * @method array findByModuleId(int $module_id) Return AclModules objects filtered by the module_id column
 * @method array findByModuleName(string $module_name) Return AclModules objects filtered by the module_name column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseAclModulesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAclModulesQuery object.
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
            $modelName = 'AclModules';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AclModulesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AclModulesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AclModulesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AclModulesQuery) {
            return $criteria;
        }
        $query = new AclModulesQuery(null, null, $modelAlias);

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
     * @return   AclModules|AclModules[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AclModulesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AclModulesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 AclModules A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByModuleId($key, $con = null)
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
     * @return                 AclModules A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `module_id`, `module_name` FROM `acl_modules` WHERE `module_id` = :p0';
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
            $obj = new AclModules();
            $obj->hydrate($row);
            AclModulesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return AclModules|AclModules[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|AclModules[]|mixed the list of results, formatted by the current formatter
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
     * @return AclModulesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AclModulesPeer::MODULE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AclModulesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AclModulesPeer::MODULE_ID, $keys, Criteria::IN);
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
     * @param     mixed $moduleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclModulesQuery The current query, for fluid interface
     */
    public function filterByModuleId($moduleId = null, $comparison = null)
    {
        if (is_array($moduleId)) {
            $useMinMax = false;
            if (isset($moduleId['min'])) {
                $this->addUsingAlias(AclModulesPeer::MODULE_ID, $moduleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($moduleId['max'])) {
                $this->addUsingAlias(AclModulesPeer::MODULE_ID, $moduleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AclModulesPeer::MODULE_ID, $moduleId, $comparison);
    }

    /**
     * Filter the query on the module_name column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleName('fooValue');   // WHERE module_name = 'fooValue'
     * $query->filterByModuleName('%fooValue%'); // WHERE module_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduleName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclModulesQuery The current query, for fluid interface
     */
    public function filterByModuleName($moduleName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduleName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moduleName)) {
                $moduleName = str_replace('*', '%', $moduleName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AclModulesPeer::MODULE_NAME, $moduleName, $comparison);
    }

    /**
     * Filter the query by a related AclInterfacesControllers object
     *
     * @param   AclInterfacesControllers|PropelObjectCollection $aclInterfacesControllers  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclModulesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclInterfacesControllers($aclInterfacesControllers, $comparison = null)
    {
        if ($aclInterfacesControllers instanceof AclInterfacesControllers) {
            return $this
                ->addUsingAlias(AclModulesPeer::MODULE_ID, $aclInterfacesControllers->getModuleId(), $comparison);
        } elseif ($aclInterfacesControllers instanceof PropelObjectCollection) {
            return $this
                ->useAclInterfacesControllersQuery()
                ->filterByPrimaryKeys($aclInterfacesControllers->getPrimaryKeys())
                ->endUse();
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
     * @return AclModulesQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   AclModules $aclModules Object to remove from the list of results
     *
     * @return AclModulesQuery The current query, for fluid interface
     */
    public function prune($aclModules = null)
    {
        if ($aclModules) {
            $this->addUsingAlias(AclModulesPeer::MODULE_ID, $aclModules->getModuleId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
