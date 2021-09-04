<?php


/**
 * Base class that represents a query for the 'r_operation_medias' table.
 *
 *
 *
 * @method ROperationMediasQuery orderByROperationMediaId($order = Criteria::ASC) Order by the r_operation_media_id column
 * @method ROperationMediasQuery orderByROperationMediaLabel($order = Criteria::ASC) Order by the r_operation_media_label column
 * @method ROperationMediasQuery orderByROperationMediaActif($order = Criteria::ASC) Order by the r_operation_media_actif column
 * @method ROperationMediasQuery orderByROperationMediaOrder($order = Criteria::ASC) Order by the r_operation_media_order column
 *
 * @method ROperationMediasQuery groupByROperationMediaId() Group by the r_operation_media_id column
 * @method ROperationMediasQuery groupByROperationMediaLabel() Group by the r_operation_media_label column
 * @method ROperationMediasQuery groupByROperationMediaActif() Group by the r_operation_media_actif column
 * @method ROperationMediasQuery groupByROperationMediaOrder() Group by the r_operation_media_order column
 *
 * @method ROperationMediasQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationMediasQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationMediasQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationMediasQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ROperationMediasQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ROperationMediasQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ROperationMediasQuery leftJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 * @method ROperationMediasQuery rightJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 * @method ROperationMediasQuery innerJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 *
 * @method ROperationMedias findOne(PropelPDO $con = null) Return the first ROperationMedias matching the query
 * @method ROperationMedias findOneOrCreate(PropelPDO $con = null) Return the first ROperationMedias matching the query, or a new ROperationMedias object populated from the query conditions when no match is found
 *
 * @method ROperationMedias findOneByROperationMediaLabel(string $r_operation_media_label) Return the first ROperationMedias filtered by the r_operation_media_label column
 * @method ROperationMedias findOneByROperationMediaActif(int $r_operation_media_actif) Return the first ROperationMedias filtered by the r_operation_media_actif column
 * @method ROperationMedias findOneByROperationMediaOrder(int $r_operation_media_order) Return the first ROperationMedias filtered by the r_operation_media_order column
 *
 * @method array findByROperationMediaId(int $r_operation_media_id) Return ROperationMedias objects filtered by the r_operation_media_id column
 * @method array findByROperationMediaLabel(string $r_operation_media_label) Return ROperationMedias objects filtered by the r_operation_media_label column
 * @method array findByROperationMediaActif(int $r_operation_media_actif) Return ROperationMedias objects filtered by the r_operation_media_actif column
 * @method array findByROperationMediaOrder(int $r_operation_media_order) Return ROperationMedias objects filtered by the r_operation_media_order column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationMediasQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationMediasQuery object.
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
            $modelName = 'ROperationMedias';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationMediasQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationMediasQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationMediasQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationMediasQuery) {
            return $criteria;
        }
        $query = new ROperationMediasQuery(null, null, $modelAlias);

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
     * @return   ROperationMedias|ROperationMedias[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationMediasPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationMediasPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationMedias A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROperationMediaId($key, $con = null)
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
     * @return                 ROperationMedias A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_operation_media_id`, `r_operation_media_label`, `r_operation_media_actif`, `r_operation_media_order` FROM `r_operation_medias` WHERE `r_operation_media_id` = :p0';
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
            $obj = new ROperationMedias();
            $obj->hydrate($row);
            ROperationMediasPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationMedias|ROperationMedias[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationMedias[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationMediasQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationMediasQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_operation_media_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationMediaId(1234); // WHERE r_operation_media_id = 1234
     * $query->filterByROperationMediaId(array(12, 34)); // WHERE r_operation_media_id IN (12, 34)
     * $query->filterByROperationMediaId(array('min' => 12)); // WHERE r_operation_media_id >= 12
     * $query->filterByROperationMediaId(array('max' => 12)); // WHERE r_operation_media_id <= 12
     * </code>
     *
     * @param     mixed $rOperationMediaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationMediasQuery The current query, for fluid interface
     */
    public function filterByROperationMediaId($rOperationMediaId = null, $comparison = null)
    {
        if (is_array($rOperationMediaId)) {
            $useMinMax = false;
            if (isset($rOperationMediaId['min'])) {
                $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ID, $rOperationMediaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationMediaId['max'])) {
                $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ID, $rOperationMediaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ID, $rOperationMediaId, $comparison);
    }

    /**
     * Filter the query on the r_operation_media_label column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationMediaLabel('fooValue');   // WHERE r_operation_media_label = 'fooValue'
     * $query->filterByROperationMediaLabel('%fooValue%'); // WHERE r_operation_media_label LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rOperationMediaLabel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationMediasQuery The current query, for fluid interface
     */
    public function filterByROperationMediaLabel($rOperationMediaLabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rOperationMediaLabel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rOperationMediaLabel)) {
                $rOperationMediaLabel = str_replace('*', '%', $rOperationMediaLabel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_LABEL, $rOperationMediaLabel, $comparison);
    }

    /**
     * Filter the query on the r_operation_media_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationMediaActif(1234); // WHERE r_operation_media_actif = 1234
     * $query->filterByROperationMediaActif(array(12, 34)); // WHERE r_operation_media_actif IN (12, 34)
     * $query->filterByROperationMediaActif(array('min' => 12)); // WHERE r_operation_media_actif >= 12
     * $query->filterByROperationMediaActif(array('max' => 12)); // WHERE r_operation_media_actif <= 12
     * </code>
     *
     * @param     mixed $rOperationMediaActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationMediasQuery The current query, for fluid interface
     */
    public function filterByROperationMediaActif($rOperationMediaActif = null, $comparison = null)
    {
        if (is_array($rOperationMediaActif)) {
            $useMinMax = false;
            if (isset($rOperationMediaActif['min'])) {
                $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ACTIF, $rOperationMediaActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationMediaActif['max'])) {
                $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ACTIF, $rOperationMediaActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ACTIF, $rOperationMediaActif, $comparison);
    }

    /**
     * Filter the query on the r_operation_media_order column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationMediaOrder(1234); // WHERE r_operation_media_order = 1234
     * $query->filterByROperationMediaOrder(array(12, 34)); // WHERE r_operation_media_order IN (12, 34)
     * $query->filterByROperationMediaOrder(array('min' => 12)); // WHERE r_operation_media_order >= 12
     * $query->filterByROperationMediaOrder(array('max' => 12)); // WHERE r_operation_media_order <= 12
     * </code>
     *
     * @param     mixed $rOperationMediaOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationMediasQuery The current query, for fluid interface
     */
    public function filterByROperationMediaOrder($rOperationMediaOrder = null, $comparison = null)
    {
        if (is_array($rOperationMediaOrder)) {
            $useMinMax = false;
            if (isset($rOperationMediaOrder['min'])) {
                $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ORDER, $rOperationMediaOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationMediaOrder['max'])) {
                $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ORDER, $rOperationMediaOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ORDER, $rOperationMediaOrder, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationMediasQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ID, $operations->getOperationMediaId(), $comparison);
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
     * @return ROperationMediasQuery The current query, for fluid interface
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
     * @return                 ROperationMediasQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkROperationTypeSubTemplateMediasUniverses($lnkROperationTypeSubTemplateMediasUniverses, $comparison = null)
    {
        if ($lnkROperationTypeSubTemplateMediasUniverses instanceof LnkROperationTypeSubTemplateMediasUniverses) {
            return $this
                ->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ID, $lnkROperationTypeSubTemplateMediasUniverses->getLnkROperationTypeSubTemplateMediaUniverseMediaId(), $comparison);
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
     * @return ROperationMediasQuery The current query, for fluid interface
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
     * @param   ROperationMedias $rOperationMedias Object to remove from the list of results
     *
     * @return ROperationMediasQuery The current query, for fluid interface
     */
    public function prune($rOperationMedias = null)
    {
        if ($rOperationMedias) {
            $this->addUsingAlias(ROperationMediasPeer::R_OPERATION_MEDIA_ID, $rOperationMedias->getROperationMediaId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
