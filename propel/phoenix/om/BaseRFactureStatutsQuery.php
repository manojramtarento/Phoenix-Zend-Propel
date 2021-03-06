<?php


/**
 * Base class that represents a query for the 'r_facture_statuts' table.
 *
 *
 *
 * @method RFactureStatutsQuery orderByRFactStatId($order = Criteria::ASC) Order by the r_fact_stat_id column
 * @method RFactureStatutsQuery orderByRFactStatLibelle($order = Criteria::ASC) Order by the r_fact_stat_libelle column
 *
 * @method RFactureStatutsQuery groupByRFactStatId() Group by the r_fact_stat_id column
 * @method RFactureStatutsQuery groupByRFactStatLibelle() Group by the r_fact_stat_libelle column
 *
 * @method RFactureStatutsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RFactureStatutsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RFactureStatutsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RFactureStatutsQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method RFactureStatutsQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method RFactureStatutsQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method RFactureStatutsQuery leftJoinFactureEditionHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureEditionHistory relation
 * @method RFactureStatutsQuery rightJoinFactureEditionHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureEditionHistory relation
 * @method RFactureStatutsQuery innerJoinFactureEditionHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureEditionHistory relation
 *
 * @method RFactureStatuts findOne(PropelPDO $con = null) Return the first RFactureStatuts matching the query
 * @method RFactureStatuts findOneOrCreate(PropelPDO $con = null) Return the first RFactureStatuts matching the query, or a new RFactureStatuts object populated from the query conditions when no match is found
 *
 * @method RFactureStatuts findOneByRFactStatLibelle(string $r_fact_stat_libelle) Return the first RFactureStatuts filtered by the r_fact_stat_libelle column
 *
 * @method array findByRFactStatId(int $r_fact_stat_id) Return RFactureStatuts objects filtered by the r_fact_stat_id column
 * @method array findByRFactStatLibelle(string $r_fact_stat_libelle) Return RFactureStatuts objects filtered by the r_fact_stat_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRFactureStatutsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRFactureStatutsQuery object.
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
            $modelName = 'RFactureStatuts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RFactureStatutsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RFactureStatutsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RFactureStatutsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RFactureStatutsQuery) {
            return $criteria;
        }
        $query = new RFactureStatutsQuery(null, null, $modelAlias);

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
     * @return   RFactureStatuts|RFactureStatuts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RFactureStatutsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RFactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RFactureStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRFactStatId($key, $con = null)
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
     * @return                 RFactureStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_fact_stat_id`, `r_fact_stat_libelle` FROM `r_facture_statuts` WHERE `r_fact_stat_id` = :p0';
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
            $obj = new RFactureStatuts();
            $obj->hydrate($row);
            RFactureStatutsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RFactureStatuts|RFactureStatuts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RFactureStatuts[]|mixed the list of results, formatted by the current formatter
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
     * @return RFactureStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RFactureStatutsPeer::R_FACT_STAT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RFactureStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RFactureStatutsPeer::R_FACT_STAT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_fact_stat_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactStatId(1234); // WHERE r_fact_stat_id = 1234
     * $query->filterByRFactStatId(array(12, 34)); // WHERE r_fact_stat_id IN (12, 34)
     * $query->filterByRFactStatId(array('min' => 12)); // WHERE r_fact_stat_id >= 12
     * $query->filterByRFactStatId(array('max' => 12)); // WHERE r_fact_stat_id <= 12
     * </code>
     *
     * @param     mixed $rFactStatId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureStatutsQuery The current query, for fluid interface
     */
    public function filterByRFactStatId($rFactStatId = null, $comparison = null)
    {
        if (is_array($rFactStatId)) {
            $useMinMax = false;
            if (isset($rFactStatId['min'])) {
                $this->addUsingAlias(RFactureStatutsPeer::R_FACT_STAT_ID, $rFactStatId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactStatId['max'])) {
                $this->addUsingAlias(RFactureStatutsPeer::R_FACT_STAT_ID, $rFactStatId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFactureStatutsPeer::R_FACT_STAT_ID, $rFactStatId, $comparison);
    }

    /**
     * Filter the query on the r_fact_stat_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactStatLibelle('fooValue');   // WHERE r_fact_stat_libelle = 'fooValue'
     * $query->filterByRFactStatLibelle('%fooValue%'); // WHERE r_fact_stat_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rFactStatLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureStatutsQuery The current query, for fluid interface
     */
    public function filterByRFactStatLibelle($rFactStatLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rFactStatLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rFactStatLibelle)) {
                $rFactStatLibelle = str_replace('*', '%', $rFactStatLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFactureStatutsPeer::R_FACT_STAT_LIBELLE, $rFactStatLibelle, $comparison);
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(RFactureStatutsPeer::R_FACT_STAT_ID, $factures->getFactStatusId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            return $this
                ->useFacturesQuery()
                ->filterByPrimaryKeys($factures->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactures() only accepts arguments of type Factures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Factures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RFactureStatutsQuery The current query, for fluid interface
     */
    public function joinFactures($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Factures');

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
            $this->addJoinObject($join, 'Factures');
        }

        return $this;
    }

    /**
     * Use the Factures relation Factures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturesQuery A secondary query class using the current class as primary query
     */
    public function useFacturesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factures', 'FacturesQuery');
    }

    /**
     * Filter the query by a related FactureEditionHistory object
     *
     * @param   FactureEditionHistory|PropelObjectCollection $factureEditionHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureEditionHistory($factureEditionHistory, $comparison = null)
    {
        if ($factureEditionHistory instanceof FactureEditionHistory) {
            return $this
                ->addUsingAlias(RFactureStatutsPeer::R_FACT_STAT_ID, $factureEditionHistory->getFactStatusId(), $comparison);
        } elseif ($factureEditionHistory instanceof PropelObjectCollection) {
            return $this
                ->useFactureEditionHistoryQuery()
                ->filterByPrimaryKeys($factureEditionHistory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactureEditionHistory() only accepts arguments of type FactureEditionHistory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FactureEditionHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RFactureStatutsQuery The current query, for fluid interface
     */
    public function joinFactureEditionHistory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FactureEditionHistory');

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
            $this->addJoinObject($join, 'FactureEditionHistory');
        }

        return $this;
    }

    /**
     * Use the FactureEditionHistory relation FactureEditionHistory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FactureEditionHistoryQuery A secondary query class using the current class as primary query
     */
    public function useFactureEditionHistoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactureEditionHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactureEditionHistory', 'FactureEditionHistoryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RFactureStatuts $rFactureStatuts Object to remove from the list of results
     *
     * @return RFactureStatutsQuery The current query, for fluid interface
     */
    public function prune($rFactureStatuts = null)
    {
        if ($rFactureStatuts) {
            $this->addUsingAlias(RFactureStatutsPeer::R_FACT_STAT_ID, $rFactureStatuts->getRFactStatId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
