<?php


/**
 * Base class that represents a query for the 'r_operation_type_sub_tpl_rubrique' table.
 *
 *
 *
 * @method ROperationTypeSubTplRubriqueQuery orderByOstTplRubriqueId($order = Criteria::ASC) Order by the ost_tpl_rubrique_id column
 * @method ROperationTypeSubTplRubriqueQuery orderByOstTplId($order = Criteria::ASC) Order by the ost_tpl_id column
 * @method ROperationTypeSubTplRubriqueQuery orderByRRubriqueId($order = Criteria::ASC) Order by the r_rubrique_id column
 * @method ROperationTypeSubTplRubriqueQuery orderByOstTplRubriqueOrder($order = Criteria::ASC) Order by the ost_tpl_rubrique_order column
 *
 * @method ROperationTypeSubTplRubriqueQuery groupByOstTplRubriqueId() Group by the ost_tpl_rubrique_id column
 * @method ROperationTypeSubTplRubriqueQuery groupByOstTplId() Group by the ost_tpl_id column
 * @method ROperationTypeSubTplRubriqueQuery groupByRRubriqueId() Group by the r_rubrique_id column
 * @method ROperationTypeSubTplRubriqueQuery groupByOstTplRubriqueOrder() Group by the ost_tpl_rubrique_order column
 *
 * @method ROperationTypeSubTplRubriqueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeSubTplRubriqueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeSubTplRubriqueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeSubTplRubriqueQuery leftJoinROperationTypeSubTpl($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplRubriqueQuery rightJoinROperationTypeSubTpl($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplRubriqueQuery innerJoinROperationTypeSubTpl($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTpl relation
 *
 * @method ROperationTypeSubTplRubriqueQuery leftJoinROperationTypeSubTplPrestation($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplPrestation relation
 * @method ROperationTypeSubTplRubriqueQuery rightJoinROperationTypeSubTplPrestation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplPrestation relation
 * @method ROperationTypeSubTplRubriqueQuery innerJoinROperationTypeSubTplPrestation($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplPrestation relation
 *
 * @method ROperationTypeSubTplRubrique findOne(PropelPDO $con = null) Return the first ROperationTypeSubTplRubrique matching the query
 * @method ROperationTypeSubTplRubrique findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeSubTplRubrique matching the query, or a new ROperationTypeSubTplRubrique object populated from the query conditions when no match is found
 *
 * @method ROperationTypeSubTplRubrique findOneByOstTplId(int $ost_tpl_id) Return the first ROperationTypeSubTplRubrique filtered by the ost_tpl_id column
 * @method ROperationTypeSubTplRubrique findOneByRRubriqueId(int $r_rubrique_id) Return the first ROperationTypeSubTplRubrique filtered by the r_rubrique_id column
 * @method ROperationTypeSubTplRubrique findOneByOstTplRubriqueOrder(int $ost_tpl_rubrique_order) Return the first ROperationTypeSubTplRubrique filtered by the ost_tpl_rubrique_order column
 *
 * @method array findByOstTplRubriqueId(int $ost_tpl_rubrique_id) Return ROperationTypeSubTplRubrique objects filtered by the ost_tpl_rubrique_id column
 * @method array findByOstTplId(int $ost_tpl_id) Return ROperationTypeSubTplRubrique objects filtered by the ost_tpl_id column
 * @method array findByRRubriqueId(int $r_rubrique_id) Return ROperationTypeSubTplRubrique objects filtered by the r_rubrique_id column
 * @method array findByOstTplRubriqueOrder(int $ost_tpl_rubrique_order) Return ROperationTypeSubTplRubrique objects filtered by the ost_tpl_rubrique_order column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplRubriqueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeSubTplRubriqueQuery object.
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
            $modelName = 'ROperationTypeSubTplRubrique';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeSubTplRubriqueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeSubTplRubriqueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeSubTplRubriqueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeSubTplRubriqueQuery) {
            return $criteria;
        }
        $query = new ROperationTypeSubTplRubriqueQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeSubTplRubrique|ROperationTypeSubTplRubrique[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeSubTplRubriquePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplRubriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeSubTplRubrique A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOstTplRubriqueId($key, $con = null)
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
     * @return                 ROperationTypeSubTplRubrique A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ost_tpl_rubrique_id`, `ost_tpl_id`, `r_rubrique_id`, `ost_tpl_rubrique_order` FROM `r_operation_type_sub_tpl_rubrique` WHERE `ost_tpl_rubrique_id` = :p0';
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
            $obj = new ROperationTypeSubTplRubrique();
            $obj->hydrate($row);
            ROperationTypeSubTplRubriquePeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeSubTplRubrique|ROperationTypeSubTplRubrique[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeSubTplRubrique[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ost_tpl_rubrique_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplRubriqueId(1234); // WHERE ost_tpl_rubrique_id = 1234
     * $query->filterByOstTplRubriqueId(array(12, 34)); // WHERE ost_tpl_rubrique_id IN (12, 34)
     * $query->filterByOstTplRubriqueId(array('min' => 12)); // WHERE ost_tpl_rubrique_id >= 12
     * $query->filterByOstTplRubriqueId(array('max' => 12)); // WHERE ost_tpl_rubrique_id <= 12
     * </code>
     *
     * @param     mixed $ostTplRubriqueId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
     */
    public function filterByOstTplRubriqueId($ostTplRubriqueId = null, $comparison = null)
    {
        if (is_array($ostTplRubriqueId)) {
            $useMinMax = false;
            if (isset($ostTplRubriqueId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID, $ostTplRubriqueId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplRubriqueId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID, $ostTplRubriqueId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID, $ostTplRubriqueId, $comparison);
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
     * @see       filterByROperationTypeSubTpl()
     *
     * @param     mixed $ostTplId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
     */
    public function filterByOstTplId($ostTplId = null, $comparison = null)
    {
        if (is_array($ostTplId)) {
            $useMinMax = false;
            if (isset($ostTplId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_ID, $ostTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_ID, $ostTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_ID, $ostTplId, $comparison);
    }

    /**
     * Filter the query on the r_rubrique_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRubriqueId(1234); // WHERE r_rubrique_id = 1234
     * $query->filterByRRubriqueId(array(12, 34)); // WHERE r_rubrique_id IN (12, 34)
     * $query->filterByRRubriqueId(array('min' => 12)); // WHERE r_rubrique_id >= 12
     * $query->filterByRRubriqueId(array('max' => 12)); // WHERE r_rubrique_id <= 12
     * </code>
     *
     * @param     mixed $rRubriqueId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
     */
    public function filterByRRubriqueId($rRubriqueId = null, $comparison = null)
    {
        if (is_array($rRubriqueId)) {
            $useMinMax = false;
            if (isset($rRubriqueId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::R_RUBRIQUE_ID, $rRubriqueId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRubriqueId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::R_RUBRIQUE_ID, $rRubriqueId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::R_RUBRIQUE_ID, $rRubriqueId, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_rubrique_order column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplRubriqueOrder(1234); // WHERE ost_tpl_rubrique_order = 1234
     * $query->filterByOstTplRubriqueOrder(array(12, 34)); // WHERE ost_tpl_rubrique_order IN (12, 34)
     * $query->filterByOstTplRubriqueOrder(array('min' => 12)); // WHERE ost_tpl_rubrique_order >= 12
     * $query->filterByOstTplRubriqueOrder(array('max' => 12)); // WHERE ost_tpl_rubrique_order <= 12
     * </code>
     *
     * @param     mixed $ostTplRubriqueOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
     */
    public function filterByOstTplRubriqueOrder($ostTplRubriqueOrder = null, $comparison = null)
    {
        if (is_array($ostTplRubriqueOrder)) {
            $useMinMax = false;
            if (isset($ostTplRubriqueOrder['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ORDER, $ostTplRubriqueOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplRubriqueOrder['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ORDER, $ostTplRubriqueOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ORDER, $ostTplRubriqueOrder, $comparison);
    }

    /**
     * Filter the query by a related ROperationTypeSubTpl object
     *
     * @param   ROperationTypeSubTpl|PropelObjectCollection $rOperationTypeSubTpl The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTpl($rOperationTypeSubTpl, $comparison = null)
    {
        if ($rOperationTypeSubTpl instanceof ROperationTypeSubTpl) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_ID, $rOperationTypeSubTpl->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTpl instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_ID, $rOperationTypeSubTpl->toKeyValue('PrimaryKey', 'OstTplId'), $comparison);
        } else {
            throw new PropelException('filterByROperationTypeSubTpl() only accepts arguments of type ROperationTypeSubTpl or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTpl relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTpl($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTpl');

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
            $this->addJoinObject($join, 'ROperationTypeSubTpl');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTpl relation ROperationTypeSubTpl object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTpl($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTpl', 'ROperationTypeSubTplQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTplPrestation object
     *
     * @param   ROperationTypeSubTplPrestation|PropelObjectCollection $rOperationTypeSubTplPrestation  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplPrestation($rOperationTypeSubTplPrestation, $comparison = null)
    {
        if ($rOperationTypeSubTplPrestation instanceof ROperationTypeSubTplPrestation) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID, $rOperationTypeSubTplPrestation->getOstTplRubriqueId(), $comparison);
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
     * @return ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ROperationTypeSubTplRubrique $rOperationTypeSubTplRubrique Object to remove from the list of results
     *
     * @return ROperationTypeSubTplRubriqueQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeSubTplRubrique = null)
    {
        if ($rOperationTypeSubTplRubrique) {
            $this->addUsingAlias(ROperationTypeSubTplRubriquePeer::OST_TPL_RUBRIQUE_ID, $rOperationTypeSubTplRubrique->getOstTplRubriqueId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
