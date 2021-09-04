<?php


/**
 * Base class that represents a query for the 'r_activity_kpi' table.
 *
 *
 *
 * @method RActivityKpiQuery orderByRActivityKpiId($order = Criteria::ASC) Order by the r_activity_kpi_id column
 * @method RActivityKpiQuery orderByRActivityKpiLibelle($order = Criteria::ASC) Order by the r_activity_kpi_libelle column
 *
 * @method RActivityKpiQuery groupByRActivityKpiId() Group by the r_activity_kpi_id column
 * @method RActivityKpiQuery groupByRActivityKpiLibelle() Group by the r_activity_kpi_libelle column
 *
 * @method RActivityKpiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RActivityKpiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RActivityKpiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RActivityKpiQuery leftJoinRPAxe1($relationAlias = null) Adds a LEFT JOIN clause to the query using the RPAxe1 relation
 * @method RActivityKpiQuery rightJoinRPAxe1($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RPAxe1 relation
 * @method RActivityKpiQuery innerJoinRPAxe1($relationAlias = null) Adds a INNER JOIN clause to the query using the RPAxe1 relation
 *
 * @method RActivityKpi findOne(PropelPDO $con = null) Return the first RActivityKpi matching the query
 * @method RActivityKpi findOneOrCreate(PropelPDO $con = null) Return the first RActivityKpi matching the query, or a new RActivityKpi object populated from the query conditions when no match is found
 *
 * @method RActivityKpi findOneByRActivityKpiLibelle(string $r_activity_kpi_libelle) Return the first RActivityKpi filtered by the r_activity_kpi_libelle column
 *
 * @method array findByRActivityKpiId(int $r_activity_kpi_id) Return RActivityKpi objects filtered by the r_activity_kpi_id column
 * @method array findByRActivityKpiLibelle(string $r_activity_kpi_libelle) Return RActivityKpi objects filtered by the r_activity_kpi_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRActivityKpiQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRActivityKpiQuery object.
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
            $modelName = 'RActivityKpi';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RActivityKpiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RActivityKpiQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RActivityKpiQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RActivityKpiQuery) {
            return $criteria;
        }
        $query = new RActivityKpiQuery(null, null, $modelAlias);

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
     * @return   RActivityKpi|RActivityKpi[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RActivityKpiPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RActivityKpiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RActivityKpi A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRActivityKpiId($key, $con = null)
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
     * @return                 RActivityKpi A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_activity_kpi_id`, `r_activity_kpi_libelle` FROM `r_activity_kpi` WHERE `r_activity_kpi_id` = :p0';
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
            $obj = new RActivityKpi();
            $obj->hydrate($row);
            RActivityKpiPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RActivityKpi|RActivityKpi[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RActivityKpi[]|mixed the list of results, formatted by the current formatter
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
     * @return RActivityKpiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RActivityKpiPeer::R_ACTIVITY_KPI_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RActivityKpiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RActivityKpiPeer::R_ACTIVITY_KPI_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_activity_kpi_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRActivityKpiId(1234); // WHERE r_activity_kpi_id = 1234
     * $query->filterByRActivityKpiId(array(12, 34)); // WHERE r_activity_kpi_id IN (12, 34)
     * $query->filterByRActivityKpiId(array('min' => 12)); // WHERE r_activity_kpi_id >= 12
     * $query->filterByRActivityKpiId(array('max' => 12)); // WHERE r_activity_kpi_id <= 12
     * </code>
     *
     * @param     mixed $rActivityKpiId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RActivityKpiQuery The current query, for fluid interface
     */
    public function filterByRActivityKpiId($rActivityKpiId = null, $comparison = null)
    {
        if (is_array($rActivityKpiId)) {
            $useMinMax = false;
            if (isset($rActivityKpiId['min'])) {
                $this->addUsingAlias(RActivityKpiPeer::R_ACTIVITY_KPI_ID, $rActivityKpiId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rActivityKpiId['max'])) {
                $this->addUsingAlias(RActivityKpiPeer::R_ACTIVITY_KPI_ID, $rActivityKpiId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RActivityKpiPeer::R_ACTIVITY_KPI_ID, $rActivityKpiId, $comparison);
    }

    /**
     * Filter the query on the r_activity_kpi_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRActivityKpiLibelle('fooValue');   // WHERE r_activity_kpi_libelle = 'fooValue'
     * $query->filterByRActivityKpiLibelle('%fooValue%'); // WHERE r_activity_kpi_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rActivityKpiLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RActivityKpiQuery The current query, for fluid interface
     */
    public function filterByRActivityKpiLibelle($rActivityKpiLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rActivityKpiLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rActivityKpiLibelle)) {
                $rActivityKpiLibelle = str_replace('*', '%', $rActivityKpiLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RActivityKpiPeer::R_ACTIVITY_KPI_LIBELLE, $rActivityKpiLibelle, $comparison);
    }

    /**
     * Filter the query by a related RPAxe1 object
     *
     * @param   RPAxe1|PropelObjectCollection $rPAxe1  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RActivityKpiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRPAxe1($rPAxe1, $comparison = null)
    {
        if ($rPAxe1 instanceof RPAxe1) {
            return $this
                ->addUsingAlias(RActivityKpiPeer::R_ACTIVITY_KPI_ID, $rPAxe1->getRActivityKpiId(), $comparison);
        } elseif ($rPAxe1 instanceof PropelObjectCollection) {
            return $this
                ->useRPAxe1Query()
                ->filterByPrimaryKeys($rPAxe1->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRPAxe1() only accepts arguments of type RPAxe1 or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RPAxe1 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RActivityKpiQuery The current query, for fluid interface
     */
    public function joinRPAxe1($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RPAxe1');

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
            $this->addJoinObject($join, 'RPAxe1');
        }

        return $this;
    }

    /**
     * Use the RPAxe1 relation RPAxe1 object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RPAxe1Query A secondary query class using the current class as primary query
     */
    public function useRPAxe1Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRPAxe1($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RPAxe1', 'RPAxe1Query');
    }

    /**
     * Exclude object from result
     *
     * @param   RActivityKpi $rActivityKpi Object to remove from the list of results
     *
     * @return RActivityKpiQuery The current query, for fluid interface
     */
    public function prune($rActivityKpi = null)
    {
        if ($rActivityKpi) {
            $this->addUsingAlias(RActivityKpiPeer::R_ACTIVITY_KPI_ID, $rActivityKpi->getRActivityKpiId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
