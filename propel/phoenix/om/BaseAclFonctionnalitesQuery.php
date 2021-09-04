<?php


/**
 * Base class that represents a query for the 'acl_fonctionnalites' table.
 *
 *
 *
 * @method AclFonctionnalitesQuery orderByFoncId($order = Criteria::ASC) Order by the fonc_id column
 * @method AclFonctionnalitesQuery orderByIntContId($order = Criteria::ASC) Order by the int_cont_id column
 * @method AclFonctionnalitesQuery orderByFoncName($order = Criteria::ASC) Order by the fonc_name column
 *
 * @method AclFonctionnalitesQuery groupByFoncId() Group by the fonc_id column
 * @method AclFonctionnalitesQuery groupByIntContId() Group by the int_cont_id column
 * @method AclFonctionnalitesQuery groupByFoncName() Group by the fonc_name column
 *
 * @method AclFonctionnalitesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AclFonctionnalitesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AclFonctionnalitesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AclFonctionnalitesQuery leftJoinAclInterfacesControllers($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclInterfacesControllers relation
 * @method AclFonctionnalitesQuery rightJoinAclInterfacesControllers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclInterfacesControllers relation
 * @method AclFonctionnalitesQuery innerJoinAclInterfacesControllers($relationAlias = null) Adds a INNER JOIN clause to the query using the AclInterfacesControllers relation
 *
 * @method AclFonctionnalitesQuery leftJoinAclActions($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclActions relation
 * @method AclFonctionnalitesQuery rightJoinAclActions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclActions relation
 * @method AclFonctionnalitesQuery innerJoinAclActions($relationAlias = null) Adds a INNER JOIN clause to the query using the AclActions relation
 *
 * @method AclFonctionnalitesQuery leftJoinLnkAclGroupsFonctionnalites($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkAclGroupsFonctionnalites relation
 * @method AclFonctionnalitesQuery rightJoinLnkAclGroupsFonctionnalites($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkAclGroupsFonctionnalites relation
 * @method AclFonctionnalitesQuery innerJoinLnkAclGroupsFonctionnalites($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkAclGroupsFonctionnalites relation
 *
 * @method AclFonctionnalites findOne(PropelPDO $con = null) Return the first AclFonctionnalites matching the query
 * @method AclFonctionnalites findOneOrCreate(PropelPDO $con = null) Return the first AclFonctionnalites matching the query, or a new AclFonctionnalites object populated from the query conditions when no match is found
 *
 * @method AclFonctionnalites findOneByIntContId(int $int_cont_id) Return the first AclFonctionnalites filtered by the int_cont_id column
 * @method AclFonctionnalites findOneByFoncName(string $fonc_name) Return the first AclFonctionnalites filtered by the fonc_name column
 *
 * @method array findByFoncId(int $fonc_id) Return AclFonctionnalites objects filtered by the fonc_id column
 * @method array findByIntContId(int $int_cont_id) Return AclFonctionnalites objects filtered by the int_cont_id column
 * @method array findByFoncName(string $fonc_name) Return AclFonctionnalites objects filtered by the fonc_name column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseAclFonctionnalitesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAclFonctionnalitesQuery object.
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
            $modelName = 'AclFonctionnalites';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AclFonctionnalitesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AclFonctionnalitesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AclFonctionnalitesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AclFonctionnalitesQuery) {
            return $criteria;
        }
        $query = new AclFonctionnalitesQuery(null, null, $modelAlias);

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
     * @return   AclFonctionnalites|AclFonctionnalites[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AclFonctionnalitesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AclFonctionnalitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 AclFonctionnalites A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFoncId($key, $con = null)
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
     * @return                 AclFonctionnalites A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `fonc_id`, `int_cont_id`, `fonc_name` FROM `acl_fonctionnalites` WHERE `fonc_id` = :p0';
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
            $obj = new AclFonctionnalites();
            $obj->hydrate($row);
            AclFonctionnalitesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return AclFonctionnalites|AclFonctionnalites[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|AclFonctionnalites[]|mixed the list of results, formatted by the current formatter
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
     * @return AclFonctionnalitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AclFonctionnalitesPeer::FONC_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AclFonctionnalitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AclFonctionnalitesPeer::FONC_ID, $keys, Criteria::IN);
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
     * @param     mixed $foncId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclFonctionnalitesQuery The current query, for fluid interface
     */
    public function filterByFoncId($foncId = null, $comparison = null)
    {
        if (is_array($foncId)) {
            $useMinMax = false;
            if (isset($foncId['min'])) {
                $this->addUsingAlias(AclFonctionnalitesPeer::FONC_ID, $foncId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foncId['max'])) {
                $this->addUsingAlias(AclFonctionnalitesPeer::FONC_ID, $foncId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AclFonctionnalitesPeer::FONC_ID, $foncId, $comparison);
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
     * @return AclFonctionnalitesQuery The current query, for fluid interface
     */
    public function filterByIntContId($intContId = null, $comparison = null)
    {
        if (is_array($intContId)) {
            $useMinMax = false;
            if (isset($intContId['min'])) {
                $this->addUsingAlias(AclFonctionnalitesPeer::INT_CONT_ID, $intContId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intContId['max'])) {
                $this->addUsingAlias(AclFonctionnalitesPeer::INT_CONT_ID, $intContId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AclFonctionnalitesPeer::INT_CONT_ID, $intContId, $comparison);
    }

    /**
     * Filter the query on the fonc_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFoncName('fooValue');   // WHERE fonc_name = 'fooValue'
     * $query->filterByFoncName('%fooValue%'); // WHERE fonc_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foncName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AclFonctionnalitesQuery The current query, for fluid interface
     */
    public function filterByFoncName($foncName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foncName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foncName)) {
                $foncName = str_replace('*', '%', $foncName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AclFonctionnalitesPeer::FONC_NAME, $foncName, $comparison);
    }

    /**
     * Filter the query by a related AclInterfacesControllers object
     *
     * @param   AclInterfacesControllers|PropelObjectCollection $aclInterfacesControllers The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclFonctionnalitesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclInterfacesControllers($aclInterfacesControllers, $comparison = null)
    {
        if ($aclInterfacesControllers instanceof AclInterfacesControllers) {
            return $this
                ->addUsingAlias(AclFonctionnalitesPeer::INT_CONT_ID, $aclInterfacesControllers->getIntContId(), $comparison);
        } elseif ($aclInterfacesControllers instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AclFonctionnalitesPeer::INT_CONT_ID, $aclInterfacesControllers->toKeyValue('PrimaryKey', 'IntContId'), $comparison);
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
     * @return AclFonctionnalitesQuery The current query, for fluid interface
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
     * Filter the query by a related AclActions object
     *
     * @param   AclActions|PropelObjectCollection $aclActions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclFonctionnalitesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclActions($aclActions, $comparison = null)
    {
        if ($aclActions instanceof AclActions) {
            return $this
                ->addUsingAlias(AclFonctionnalitesPeer::FONC_ID, $aclActions->getFoncId(), $comparison);
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
     * @return AclFonctionnalitesQuery The current query, for fluid interface
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
     * Filter the query by a related LnkAclGroupsFonctionnalites object
     *
     * @param   LnkAclGroupsFonctionnalites|PropelObjectCollection $lnkAclGroupsFonctionnalites  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AclFonctionnalitesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkAclGroupsFonctionnalites($lnkAclGroupsFonctionnalites, $comparison = null)
    {
        if ($lnkAclGroupsFonctionnalites instanceof LnkAclGroupsFonctionnalites) {
            return $this
                ->addUsingAlias(AclFonctionnalitesPeer::FONC_ID, $lnkAclGroupsFonctionnalites->getLnkAclGroupsFonctionnaliteFoncId(), $comparison);
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
     * @return AclFonctionnalitesQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   AclFonctionnalites $aclFonctionnalites Object to remove from the list of results
     *
     * @return AclFonctionnalitesQuery The current query, for fluid interface
     */
    public function prune($aclFonctionnalites = null)
    {
        if ($aclFonctionnalites) {
            $this->addUsingAlias(AclFonctionnalitesPeer::FONC_ID, $aclFonctionnalites->getFoncId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
