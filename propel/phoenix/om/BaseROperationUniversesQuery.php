<?php


/**
 * Base class that represents a query for the 'r_operation_universes' table.
 *
 *
 *
 * @method ROperationUniversesQuery orderByROperationUniverseId($order = Criteria::ASC) Order by the r_operation_universe_id column
 * @method ROperationUniversesQuery orderByROperationUniverseLabel($order = Criteria::ASC) Order by the r_operation_universe_label column
 * @method ROperationUniversesQuery orderByROperationUniverseActif($order = Criteria::ASC) Order by the r_operation_universe_actif column
 * @method ROperationUniversesQuery orderByROperationUniverseOrder($order = Criteria::ASC) Order by the r_operation_universe_order column
 *
 * @method ROperationUniversesQuery groupByROperationUniverseId() Group by the r_operation_universe_id column
 * @method ROperationUniversesQuery groupByROperationUniverseLabel() Group by the r_operation_universe_label column
 * @method ROperationUniversesQuery groupByROperationUniverseActif() Group by the r_operation_universe_actif column
 * @method ROperationUniversesQuery groupByROperationUniverseOrder() Group by the r_operation_universe_order column
 *
 * @method ROperationUniversesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationUniversesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationUniversesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationUniversesQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ROperationUniversesQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ROperationUniversesQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ROperationUniversesQuery leftJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 * @method ROperationUniversesQuery rightJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 * @method ROperationUniversesQuery innerJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 *
 * @method ROperationUniverses findOne(PropelPDO $con = null) Return the first ROperationUniverses matching the query
 * @method ROperationUniverses findOneOrCreate(PropelPDO $con = null) Return the first ROperationUniverses matching the query, or a new ROperationUniverses object populated from the query conditions when no match is found
 *
 * @method ROperationUniverses findOneByROperationUniverseLabel(string $r_operation_universe_label) Return the first ROperationUniverses filtered by the r_operation_universe_label column
 * @method ROperationUniverses findOneByROperationUniverseActif(int $r_operation_universe_actif) Return the first ROperationUniverses filtered by the r_operation_universe_actif column
 * @method ROperationUniverses findOneByROperationUniverseOrder(int $r_operation_universe_order) Return the first ROperationUniverses filtered by the r_operation_universe_order column
 *
 * @method array findByROperationUniverseId(int $r_operation_universe_id) Return ROperationUniverses objects filtered by the r_operation_universe_id column
 * @method array findByROperationUniverseLabel(string $r_operation_universe_label) Return ROperationUniverses objects filtered by the r_operation_universe_label column
 * @method array findByROperationUniverseActif(int $r_operation_universe_actif) Return ROperationUniverses objects filtered by the r_operation_universe_actif column
 * @method array findByROperationUniverseOrder(int $r_operation_universe_order) Return ROperationUniverses objects filtered by the r_operation_universe_order column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationUniversesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationUniversesQuery object.
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
            $modelName = 'ROperationUniverses';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationUniversesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationUniversesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationUniversesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationUniversesQuery) {
            return $criteria;
        }
        $query = new ROperationUniversesQuery(null, null, $modelAlias);

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
     * @return   ROperationUniverses|ROperationUniverses[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationUniversesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationUniverses A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROperationUniverseId($key, $con = null)
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
     * @return                 ROperationUniverses A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_operation_universe_id`, `r_operation_universe_label`, `r_operation_universe_actif`, `r_operation_universe_order` FROM `r_operation_universes` WHERE `r_operation_universe_id` = :p0';
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
            $obj = new ROperationUniverses();
            $obj->hydrate($row);
            ROperationUniversesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationUniverses|ROperationUniverses[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationUniverses[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationUniversesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationUniversesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_operation_universe_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationUniverseId(1234); // WHERE r_operation_universe_id = 1234
     * $query->filterByROperationUniverseId(array(12, 34)); // WHERE r_operation_universe_id IN (12, 34)
     * $query->filterByROperationUniverseId(array('min' => 12)); // WHERE r_operation_universe_id >= 12
     * $query->filterByROperationUniverseId(array('max' => 12)); // WHERE r_operation_universe_id <= 12
     * </code>
     *
     * @param     mixed $rOperationUniverseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationUniversesQuery The current query, for fluid interface
     */
    public function filterByROperationUniverseId($rOperationUniverseId = null, $comparison = null)
    {
        if (is_array($rOperationUniverseId)) {
            $useMinMax = false;
            if (isset($rOperationUniverseId['min'])) {
                $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $rOperationUniverseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationUniverseId['max'])) {
                $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $rOperationUniverseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $rOperationUniverseId, $comparison);
    }

    /**
     * Filter the query on the r_operation_universe_label column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationUniverseLabel('fooValue');   // WHERE r_operation_universe_label = 'fooValue'
     * $query->filterByROperationUniverseLabel('%fooValue%'); // WHERE r_operation_universe_label LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rOperationUniverseLabel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationUniversesQuery The current query, for fluid interface
     */
    public function filterByROperationUniverseLabel($rOperationUniverseLabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rOperationUniverseLabel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rOperationUniverseLabel)) {
                $rOperationUniverseLabel = str_replace('*', '%', $rOperationUniverseLabel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_LABEL, $rOperationUniverseLabel, $comparison);
    }

    /**
     * Filter the query on the r_operation_universe_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationUniverseActif(1234); // WHERE r_operation_universe_actif = 1234
     * $query->filterByROperationUniverseActif(array(12, 34)); // WHERE r_operation_universe_actif IN (12, 34)
     * $query->filterByROperationUniverseActif(array('min' => 12)); // WHERE r_operation_universe_actif >= 12
     * $query->filterByROperationUniverseActif(array('max' => 12)); // WHERE r_operation_universe_actif <= 12
     * </code>
     *
     * @param     mixed $rOperationUniverseActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationUniversesQuery The current query, for fluid interface
     */
    public function filterByROperationUniverseActif($rOperationUniverseActif = null, $comparison = null)
    {
        if (is_array($rOperationUniverseActif)) {
            $useMinMax = false;
            if (isset($rOperationUniverseActif['min'])) {
                $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ACTIF, $rOperationUniverseActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationUniverseActif['max'])) {
                $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ACTIF, $rOperationUniverseActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ACTIF, $rOperationUniverseActif, $comparison);
    }

    /**
     * Filter the query on the r_operation_universe_order column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationUniverseOrder(1234); // WHERE r_operation_universe_order = 1234
     * $query->filterByROperationUniverseOrder(array(12, 34)); // WHERE r_operation_universe_order IN (12, 34)
     * $query->filterByROperationUniverseOrder(array('min' => 12)); // WHERE r_operation_universe_order >= 12
     * $query->filterByROperationUniverseOrder(array('max' => 12)); // WHERE r_operation_universe_order <= 12
     * </code>
     *
     * @param     mixed $rOperationUniverseOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationUniversesQuery The current query, for fluid interface
     */
    public function filterByROperationUniverseOrder($rOperationUniverseOrder = null, $comparison = null)
    {
        if (is_array($rOperationUniverseOrder)) {
            $useMinMax = false;
            if (isset($rOperationUniverseOrder['min'])) {
                $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ORDER, $rOperationUniverseOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationUniverseOrder['max'])) {
                $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ORDER, $rOperationUniverseOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ORDER, $rOperationUniverseOrder, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationUniversesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $operations->getOperationUniverseId(), $comparison);
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
     * @return ROperationUniversesQuery The current query, for fluid interface
     */
    public function joinOperations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useOperationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Operations', 'OperationsQuery');
    }

    /**
     * Filter the query by a related LnkROperationTypeSubTemplateMediasUniverses object
     *
     * @param   LnkROperationTypeSubTemplateMediasUniverses|PropelObjectCollection $lnkROperationTypeSubTemplateMediasUniverses  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationUniversesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkROperationTypeSubTemplateMediasUniverses($lnkROperationTypeSubTemplateMediasUniverses, $comparison = null)
    {
        if ($lnkROperationTypeSubTemplateMediasUniverses instanceof LnkROperationTypeSubTemplateMediasUniverses) {
            return $this
                ->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $lnkROperationTypeSubTemplateMediasUniverses->getLnkROperationTypeSubTemplateMediaUniverseUniverseId(), $comparison);
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
     * @return ROperationUniversesQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ROperationUniverses $rOperationUniverses Object to remove from the list of results
     *
     * @return ROperationUniversesQuery The current query, for fluid interface
     */
    public function prune($rOperationUniverses = null)
    {
        if ($rOperationUniverses) {
            $this->addUsingAlias(ROperationUniversesPeer::R_OPERATION_UNIVERSE_ID, $rOperationUniverses->getROperationUniverseId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
