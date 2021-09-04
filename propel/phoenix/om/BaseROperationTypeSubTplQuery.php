<?php


/**
 * Base class that represents a query for the 'r_operation_type_sub_tpl' table.
 *
 *
 *
 * @method ROperationTypeSubTplQuery orderByOstTplId($order = Criteria::ASC) Order by the ost_tpl_id column
 * @method ROperationTypeSubTplQuery orderByOstTplLibelle($order = Criteria::ASC) Order by the ost_tpl_libelle column
 *
 * @method ROperationTypeSubTplQuery groupByOstTplId() Group by the ost_tpl_id column
 * @method ROperationTypeSubTplQuery groupByOstTplLibelle() Group by the ost_tpl_libelle column
 *
 * @method ROperationTypeSubTplQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeSubTplQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeSubTplQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeSubTplQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ROperationTypeSubTplQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ROperationTypeSubTplQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ROperationTypeSubTplQuery leftJoinROperationTypeSubTplPrestation($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplPrestation relation
 * @method ROperationTypeSubTplQuery rightJoinROperationTypeSubTplPrestation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplPrestation relation
 * @method ROperationTypeSubTplQuery innerJoinROperationTypeSubTplPrestation($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplPrestation relation
 *
 * @method ROperationTypeSubTplQuery leftJoinROperationTypeSubTplPrime($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplPrime relation
 * @method ROperationTypeSubTplQuery rightJoinROperationTypeSubTplPrime($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplPrime relation
 * @method ROperationTypeSubTplQuery innerJoinROperationTypeSubTplPrime($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplPrime relation
 *
 * @method ROperationTypeSubTplQuery leftJoinROperationTypeSubTplRubrique($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplRubrique relation
 * @method ROperationTypeSubTplQuery rightJoinROperationTypeSubTplRubrique($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplRubrique relation
 * @method ROperationTypeSubTplQuery innerJoinROperationTypeSubTplRubrique($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplRubrique relation
 *
 * @method ROperationTypeSubTplQuery leftJoinROperationTypeSubTplScenario($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplScenario relation
 * @method ROperationTypeSubTplQuery rightJoinROperationTypeSubTplScenario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplScenario relation
 * @method ROperationTypeSubTplQuery innerJoinROperationTypeSubTplScenario($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplScenario relation
 *
 * @method ROperationTypeSubTplQuery leftJoinROperationTypeSubTplCultures($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplCultures relation
 * @method ROperationTypeSubTplQuery rightJoinROperationTypeSubTplCultures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplCultures relation
 * @method ROperationTypeSubTplQuery innerJoinROperationTypeSubTplCultures($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplCultures relation
 *
 * @method ROperationTypeSubTplQuery leftJoinROperationTypeSubTplCurrencies($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplCurrencies relation
 * @method ROperationTypeSubTplQuery rightJoinROperationTypeSubTplCurrencies($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplCurrencies relation
 * @method ROperationTypeSubTplQuery innerJoinROperationTypeSubTplCurrencies($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplCurrencies relation
 *
 * @method ROperationTypeSubTplQuery leftJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 * @method ROperationTypeSubTplQuery rightJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 * @method ROperationTypeSubTplQuery innerJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 *
 * @method ROperationTypeSubTplQuery leftJoinROperationTypeSubTplCountries($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplCountries relation
 * @method ROperationTypeSubTplQuery rightJoinROperationTypeSubTplCountries($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplCountries relation
 * @method ROperationTypeSubTplQuery innerJoinROperationTypeSubTplCountries($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplCountries relation
 *
 * @method ROperationTypeSubTpl findOne(PropelPDO $con = null) Return the first ROperationTypeSubTpl matching the query
 * @method ROperationTypeSubTpl findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeSubTpl matching the query, or a new ROperationTypeSubTpl object populated from the query conditions when no match is found
 *
 * @method ROperationTypeSubTpl findOneByOstTplLibelle(string $ost_tpl_libelle) Return the first ROperationTypeSubTpl filtered by the ost_tpl_libelle column
 *
 * @method array findByOstTplId(int $ost_tpl_id) Return ROperationTypeSubTpl objects filtered by the ost_tpl_id column
 * @method array findByOstTplLibelle(string $ost_tpl_libelle) Return ROperationTypeSubTpl objects filtered by the ost_tpl_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeSubTplQuery object.
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
            $modelName = 'ROperationTypeSubTpl';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeSubTplQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeSubTplQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeSubTplQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeSubTplQuery) {
            return $criteria;
        }
        $query = new ROperationTypeSubTplQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeSubTpl|ROperationTypeSubTpl[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeSubTplPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeSubTpl A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOstTplId($key, $con = null)
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
     * @return                 ROperationTypeSubTpl A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ost_tpl_id`, `ost_tpl_libelle` FROM `r_operation_type_sub_tpl` WHERE `ost_tpl_id` = :p0';
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
            $obj = new ROperationTypeSubTpl();
            $obj->hydrate($row);
            ROperationTypeSubTplPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeSubTpl|ROperationTypeSubTpl[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeSubTpl[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ost_tpl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplId(1234); // WHERE ost_tpl_id = 1234
     * $query->filterByOstTplId(array(12, 34)); // WHERE ost_tpl_id IN (12, 34)
     * $query->filterByOstTplId(array('min' => 12)); // WHERE ost_tpl_id >= 12
     * $query->filterByOstTplId(array('max' => 12)); // WHERE ost_tpl_id <= 12
     * </code>
     *
     * @param     mixed $ostTplId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function filterByOstTplId($ostTplId = null, $comparison = null)
    {
        if (is_array($ostTplId)) {
            $useMinMax = false;
            if (isset($ostTplId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $ostTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $ostTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $ostTplId, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplLibelle('fooValue');   // WHERE ost_tpl_libelle = 'fooValue'
     * $query->filterByOstTplLibelle('%fooValue%'); // WHERE ost_tpl_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ostTplLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function filterByOstTplLibelle($ostTplLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ostTplLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ostTplLibelle)) {
                $ostTplLibelle = str_replace('*', '%', $ostTplLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_LIBELLE, $ostTplLibelle, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $operations->getOperationOstTplId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperations() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Operations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function joinOperations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Operations');

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
            $this->addJoinObject($join, 'Operations');
        }

        return $this;
    }

    /**
     * Use the Operations relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Operations', 'OperationsQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTplPrestation object
     *
     * @param   ROperationTypeSubTplPrestation|PropelObjectCollection $rOperationTypeSubTplPrestation  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplPrestation($rOperationTypeSubTplPrestation, $comparison = null)
    {
        if ($rOperationTypeSubTplPrestation instanceof ROperationTypeSubTplPrestation) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $rOperationTypeSubTplPrestation->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTplPrestation instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplPrestationQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplPrestation->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplPrestation() only accepts arguments of type ROperationTypeSubTplPrestation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplPrestation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplPrestation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplPrestation');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplPrestation');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplPrestation relation ROperationTypeSubTplPrestation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplPrestationQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplPrestationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplPrestation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplPrestation', 'ROperationTypeSubTplPrestationQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTplPrime object
     *
     * @param   ROperationTypeSubTplPrime|PropelObjectCollection $rOperationTypeSubTplPrime  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplPrime($rOperationTypeSubTplPrime, $comparison = null)
    {
        if ($rOperationTypeSubTplPrime instanceof ROperationTypeSubTplPrime) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $rOperationTypeSubTplPrime->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTplPrime instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplPrimeQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplPrime->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplPrime() only accepts arguments of type ROperationTypeSubTplPrime or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplPrime relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplPrime($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplPrime');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplPrime');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplPrime relation ROperationTypeSubTplPrime object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplPrimeQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplPrimeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplPrime($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplPrime', 'ROperationTypeSubTplPrimeQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTplRubrique object
     *
     * @param   ROperationTypeSubTplRubrique|PropelObjectCollection $rOperationTypeSubTplRubrique  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplRubrique($rOperationTypeSubTplRubrique, $comparison = null)
    {
        if ($rOperationTypeSubTplRubrique instanceof ROperationTypeSubTplRubrique) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $rOperationTypeSubTplRubrique->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTplRubrique instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplRubriqueQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplRubrique->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplRubrique() only accepts arguments of type ROperationTypeSubTplRubrique or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplRubrique relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplRubrique($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplRubrique');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplRubrique');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplRubrique relation ROperationTypeSubTplRubrique object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplRubriqueQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplRubriqueQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplRubrique($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplRubrique', 'ROperationTypeSubTplRubriqueQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTplScenario object
     *
     * @param   ROperationTypeSubTplScenario|PropelObjectCollection $rOperationTypeSubTplScenario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplScenario($rOperationTypeSubTplScenario, $comparison = null)
    {
        if ($rOperationTypeSubTplScenario instanceof ROperationTypeSubTplScenario) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $rOperationTypeSubTplScenario->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTplScenario instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplScenarioQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplScenario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplScenario() only accepts arguments of type ROperationTypeSubTplScenario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplScenario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplScenario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplScenario');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplScenario');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplScenario relation ROperationTypeSubTplScenario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplScenarioQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplScenarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplScenario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplScenario', 'ROperationTypeSubTplScenarioQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTplCultures object
     *
     * @param   ROperationTypeSubTplCultures|PropelObjectCollection $rOperationTypeSubTplCultures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplCultures($rOperationTypeSubTplCultures, $comparison = null)
    {
        if ($rOperationTypeSubTplCultures instanceof ROperationTypeSubTplCultures) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $rOperationTypeSubTplCultures->getROperationTypeSubTplCultureTplId(), $comparison);
        } elseif ($rOperationTypeSubTplCultures instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplCulturesQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplCultures->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplCultures() only accepts arguments of type ROperationTypeSubTplCultures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplCultures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplCultures($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplCultures');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplCultures');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplCultures relation ROperationTypeSubTplCultures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplCulturesQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplCulturesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplCultures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplCultures', 'ROperationTypeSubTplCulturesQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTplCurrencies object
     *
     * @param   ROperationTypeSubTplCurrencies|PropelObjectCollection $rOperationTypeSubTplCurrencies  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplCurrencies($rOperationTypeSubTplCurrencies, $comparison = null)
    {
        if ($rOperationTypeSubTplCurrencies instanceof ROperationTypeSubTplCurrencies) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $rOperationTypeSubTplCurrencies->getROperationTypeSubTplCurrencyTplId(), $comparison);
        } elseif ($rOperationTypeSubTplCurrencies instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplCurrenciesQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplCurrencies->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplCurrencies() only accepts arguments of type ROperationTypeSubTplCurrencies or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplCurrencies relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplCurrencies($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplCurrencies');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplCurrencies');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplCurrencies relation ROperationTypeSubTplCurrencies object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplCurrenciesQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplCurrenciesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplCurrencies($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplCurrencies', 'ROperationTypeSubTplCurrenciesQuery');
    }

    /**
     * Filter the query by a related LnkROperationTypeSubTemplateMediasUniverses object
     *
     * @param   LnkROperationTypeSubTemplateMediasUniverses|PropelObjectCollection $lnkROperationTypeSubTemplateMediasUniverses  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkROperationTypeSubTemplateMediasUniverses($lnkROperationTypeSubTemplateMediasUniverses, $comparison = null)
    {
        if ($lnkROperationTypeSubTemplateMediasUniverses instanceof LnkROperationTypeSubTemplateMediasUniverses) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $lnkROperationTypeSubTemplateMediasUniverses->getLnkROperationTypeSubTemplateMediaUniverseTplId(), $comparison);
        } elseif ($lnkROperationTypeSubTemplateMediasUniverses instanceof PropelObjectCollection) {
            return $this
                ->useLnkROperationTypeSubTemplateMediasUniversesQuery()
                ->filterByPrimaryKeys($lnkROperationTypeSubTemplateMediasUniverses->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkROperationTypeSubTemplateMediasUniverses() only accepts arguments of type LnkROperationTypeSubTemplateMediasUniverses or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function joinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkROperationTypeSubTemplateMediasUniverses');

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
            $this->addJoinObject($join, 'LnkROperationTypeSubTemplateMediasUniverses');
        }

        return $this;
    }

    /**
     * Use the LnkROperationTypeSubTemplateMediasUniverses relation LnkROperationTypeSubTemplateMediasUniverses object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkROperationTypeSubTemplateMediasUniversesQuery A secondary query class using the current class as primary query
     */
    public function useLnkROperationTypeSubTemplateMediasUniversesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLnkROperationTypeSubTemplateMediasUniverses($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkROperationTypeSubTemplateMediasUniverses', 'LnkROperationTypeSubTemplateMediasUniversesQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTplCountries object
     *
     * @param   ROperationTypeSubTplCountries|PropelObjectCollection $rOperationTypeSubTplCountries  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplCountries($rOperationTypeSubTplCountries, $comparison = null)
    {
        if ($rOperationTypeSubTplCountries instanceof ROperationTypeSubTplCountries) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $rOperationTypeSubTplCountries->getROperationTypeSubTplCountryTplId(), $comparison);
        } elseif ($rOperationTypeSubTplCountries instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplCountriesQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplCountries->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplCountries() only accepts arguments of type ROperationTypeSubTplCountries or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplCountries relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplCountries($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplCountries');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplCountries');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplCountries relation ROperationTypeSubTplCountries object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplCountriesQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplCountriesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplCountries($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplCountries', 'ROperationTypeSubTplCountriesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTypeSubTpl $rOperationTypeSubTpl Object to remove from the list of results
     *
     * @return ROperationTypeSubTplQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeSubTpl = null)
    {
        if ($rOperationTypeSubTpl) {
            $this->addUsingAlias(ROperationTypeSubTplPeer::OST_TPL_ID, $rOperationTypeSubTpl->getOstTplId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
