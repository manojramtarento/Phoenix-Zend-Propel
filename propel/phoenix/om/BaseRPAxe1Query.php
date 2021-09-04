<?php


/**
 * Base class that represents a query for the 'r_p_axe1' table.
 *
 *
 *
 * @method RPAxe1Query orderByRPAxe1Id($order = Criteria::ASC) Order by the r_p_axe1_id column
 * @method RPAxe1Query orderByRPAxe1Tag($order = Criteria::ASC) Order by the r_p_axe1_tag column
 * @method RPAxe1Query orderByRPAxe1Libelle($order = Criteria::ASC) Order by the r_p_axe1_libelle column
 * @method RPAxe1Query orderByRActivityKpiId($order = Criteria::ASC) Order by the r_activity_kpi_id column
 * @method RPAxe1Query orderByRPAxe1Actif($order = Criteria::ASC) Order by the r_p_axe1_actif column
 *
 * @method RPAxe1Query groupByRPAxe1Id() Group by the r_p_axe1_id column
 * @method RPAxe1Query groupByRPAxe1Tag() Group by the r_p_axe1_tag column
 * @method RPAxe1Query groupByRPAxe1Libelle() Group by the r_p_axe1_libelle column
 * @method RPAxe1Query groupByRActivityKpiId() Group by the r_activity_kpi_id column
 * @method RPAxe1Query groupByRPAxe1Actif() Group by the r_p_axe1_actif column
 *
 * @method RPAxe1Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RPAxe1Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RPAxe1Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RPAxe1Query leftJoinKpiActivity($relationAlias = null) Adds a LEFT JOIN clause to the query using the KpiActivity relation
 * @method RPAxe1Query rightJoinKpiActivity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the KpiActivity relation
 * @method RPAxe1Query innerJoinKpiActivity($relationAlias = null) Adds a INNER JOIN clause to the query using the KpiActivity relation
 *
 * @method RPAxe1Query leftJoinRPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the RPrestations relation
 * @method RPAxe1Query rightJoinRPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RPrestations relation
 * @method RPAxe1Query innerJoinRPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the RPrestations relation
 *
 * @method RPAxe1 findOne(PropelPDO $con = null) Return the first RPAxe1 matching the query
 * @method RPAxe1 findOneOrCreate(PropelPDO $con = null) Return the first RPAxe1 matching the query, or a new RPAxe1 object populated from the query conditions when no match is found
 *
 * @method RPAxe1 findOneByRPAxe1Tag(string $r_p_axe1_tag) Return the first RPAxe1 filtered by the r_p_axe1_tag column
 * @method RPAxe1 findOneByRPAxe1Libelle(string $r_p_axe1_libelle) Return the first RPAxe1 filtered by the r_p_axe1_libelle column
 * @method RPAxe1 findOneByRActivityKpiId(int $r_activity_kpi_id) Return the first RPAxe1 filtered by the r_activity_kpi_id column
 * @method RPAxe1 findOneByRPAxe1Actif(boolean $r_p_axe1_actif) Return the first RPAxe1 filtered by the r_p_axe1_actif column
 *
 * @method array findByRPAxe1Id(int $r_p_axe1_id) Return RPAxe1 objects filtered by the r_p_axe1_id column
 * @method array findByRPAxe1Tag(string $r_p_axe1_tag) Return RPAxe1 objects filtered by the r_p_axe1_tag column
 * @method array findByRPAxe1Libelle(string $r_p_axe1_libelle) Return RPAxe1 objects filtered by the r_p_axe1_libelle column
 * @method array findByRActivityKpiId(int $r_activity_kpi_id) Return RPAxe1 objects filtered by the r_activity_kpi_id column
 * @method array findByRPAxe1Actif(boolean $r_p_axe1_actif) Return RPAxe1 objects filtered by the r_p_axe1_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPAxe1Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRPAxe1Query object.
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
            $modelName = 'RPAxe1';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RPAxe1Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RPAxe1Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RPAxe1Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RPAxe1Query) {
            return $criteria;
        }
        $query = new RPAxe1Query(null, null, $modelAlias);

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
     * @return   RPAxe1|RPAxe1[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RPAxe1Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RPAxe1Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RPAxe1 A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRPAxe1Id($key, $con = null)
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
     * @return                 RPAxe1 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_p_axe1_id`, `r_p_axe1_tag`, `r_p_axe1_libelle`, `r_activity_kpi_id`, `r_p_axe1_actif` FROM `r_p_axe1` WHERE `r_p_axe1_id` = :p0';
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
            $obj = new RPAxe1();
            $obj->hydrate($row);
            RPAxe1Peer::addInstanceToPool($obj, (string) $key);
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
     * @return RPAxe1|RPAxe1[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RPAxe1[]|mixed the list of results, formatted by the current formatter
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
     * @return RPAxe1Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RPAxe1Peer::R_P_AXE1_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RPAxe1Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RPAxe1Peer::R_P_AXE1_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_p_axe1_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe1Id(1234); // WHERE r_p_axe1_id = 1234
     * $query->filterByRPAxe1Id(array(12, 34)); // WHERE r_p_axe1_id IN (12, 34)
     * $query->filterByRPAxe1Id(array('min' => 12)); // WHERE r_p_axe1_id >= 12
     * $query->filterByRPAxe1Id(array('max' => 12)); // WHERE r_p_axe1_id <= 12
     * </code>
     *
     * @param     mixed $rPAxe1Id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe1Query The current query, for fluid interface
     */
    public function filterByRPAxe1Id($rPAxe1Id = null, $comparison = null)
    {
        if (is_array($rPAxe1Id)) {
            $useMinMax = false;
            if (isset($rPAxe1Id['min'])) {
                $this->addUsingAlias(RPAxe1Peer::R_P_AXE1_ID, $rPAxe1Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPAxe1Id['max'])) {
                $this->addUsingAlias(RPAxe1Peer::R_P_AXE1_ID, $rPAxe1Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPAxe1Peer::R_P_AXE1_ID, $rPAxe1Id, $comparison);
    }

    /**
     * Filter the query on the r_p_axe1_tag column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe1Tag('fooValue');   // WHERE r_p_axe1_tag = 'fooValue'
     * $query->filterByRPAxe1Tag('%fooValue%'); // WHERE r_p_axe1_tag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe1Tag The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe1Query The current query, for fluid interface
     */
    public function filterByRPAxe1Tag($rPAxe1Tag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe1Tag)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe1Tag)) {
                $rPAxe1Tag = str_replace('*', '%', $rPAxe1Tag);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPAxe1Peer::R_P_AXE1_TAG, $rPAxe1Tag, $comparison);
    }

    /**
     * Filter the query on the r_p_axe1_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe1Libelle('fooValue');   // WHERE r_p_axe1_libelle = 'fooValue'
     * $query->filterByRPAxe1Libelle('%fooValue%'); // WHERE r_p_axe1_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe1Libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe1Query The current query, for fluid interface
     */
    public function filterByRPAxe1Libelle($rPAxe1Libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe1Libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe1Libelle)) {
                $rPAxe1Libelle = str_replace('*', '%', $rPAxe1Libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPAxe1Peer::R_P_AXE1_LIBELLE, $rPAxe1Libelle, $comparison);
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
     * @see       filterByKpiActivity()
     *
     * @param     mixed $rActivityKpiId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe1Query The current query, for fluid interface
     */
    public function filterByRActivityKpiId($rActivityKpiId = null, $comparison = null)
    {
        if (is_array($rActivityKpiId)) {
            $useMinMax = false;
            if (isset($rActivityKpiId['min'])) {
                $this->addUsingAlias(RPAxe1Peer::R_ACTIVITY_KPI_ID, $rActivityKpiId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rActivityKpiId['max'])) {
                $this->addUsingAlias(RPAxe1Peer::R_ACTIVITY_KPI_ID, $rActivityKpiId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPAxe1Peer::R_ACTIVITY_KPI_ID, $rActivityKpiId, $comparison);
    }

    /**
     * Filter the query on the r_p_axe1_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe1Actif(true); // WHERE r_p_axe1_actif = true
     * $query->filterByRPAxe1Actif('yes'); // WHERE r_p_axe1_actif = true
     * </code>
     *
     * @param     boolean|string $rPAxe1Actif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe1Query The current query, for fluid interface
     */
    public function filterByRPAxe1Actif($rPAxe1Actif = null, $comparison = null)
    {
        if (is_string($rPAxe1Actif)) {
            $rPAxe1Actif = in_array(strtolower($rPAxe1Actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPAxe1Peer::R_P_AXE1_ACTIF, $rPAxe1Actif, $comparison);
    }

    /**
     * Filter the query by a related RActivityKpi object
     *
     * @param   RActivityKpi|PropelObjectCollection $rActivityKpi The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPAxe1Query The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByKpiActivity($rActivityKpi, $comparison = null)
    {
        if ($rActivityKpi instanceof RActivityKpi) {
            return $this
                ->addUsingAlias(RPAxe1Peer::R_ACTIVITY_KPI_ID, $rActivityKpi->getRActivityKpiId(), $comparison);
        } elseif ($rActivityKpi instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RPAxe1Peer::R_ACTIVITY_KPI_ID, $rActivityKpi->toKeyValue('PrimaryKey', 'RActivityKpiId'), $comparison);
        } else {
            throw new PropelException('filterByKpiActivity() only accepts arguments of type RActivityKpi or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the KpiActivity relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RPAxe1Query The current query, for fluid interface
     */
    public function joinKpiActivity($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('KpiActivity');

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
            $this->addJoinObject($join, 'KpiActivity');
        }

        return $this;
    }

    /**
     * Use the KpiActivity relation RActivityKpi object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RActivityKpiQuery A secondary query class using the current class as primary query
     */
    public function useKpiActivityQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinKpiActivity($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'KpiActivity', 'RActivityKpiQuery');
    }

    /**
     * Filter the query by a related RPrestations object
     *
     * @param   RPrestations|PropelObjectCollection $rPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPAxe1Query The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRPrestations($rPrestations, $comparison = null)
    {
        if ($rPrestations instanceof RPrestations) {
            return $this
                ->addUsingAlias(RPAxe1Peer::R_P_AXE1_ID, $rPrestations->getRPAxe1(), $comparison);
        } elseif ($rPrestations instanceof PropelObjectCollection) {
            return $this
                ->useRPrestationsQuery()
                ->filterByPrimaryKeys($rPrestations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRPrestations() only accepts arguments of type RPrestations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RPrestations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RPAxe1Query The current query, for fluid interface
     */
    public function joinRPrestations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RPrestations');

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
            $this->addJoinObject($join, 'RPrestations');
        }

        return $this;
    }

    /**
     * Use the RPrestations relation RPrestations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RPrestationsQuery A secondary query class using the current class as primary query
     */
    public function useRPrestationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RPrestations', 'RPrestationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RPAxe1 $rPAxe1 Object to remove from the list of results
     *
     * @return RPAxe1Query The current query, for fluid interface
     */
    public function prune($rPAxe1 = null)
    {
        if ($rPAxe1) {
            $this->addUsingAlias(RPAxe1Peer::R_P_AXE1_ID, $rPAxe1->getRPAxe1Id(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
