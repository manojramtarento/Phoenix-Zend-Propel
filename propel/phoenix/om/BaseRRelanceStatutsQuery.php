<?php


/**
 * Base class that represents a query for the 'r_relance_statuts' table.
 *
 *
 *
 * @method RRelanceStatutsQuery orderByRRelStatutId($order = Criteria::ASC) Order by the r_rel_statut_id column
 * @method RRelanceStatutsQuery orderByRRelStatutLibelle($order = Criteria::ASC) Order by the r_rel_statut_libelle column
 *
 * @method RRelanceStatutsQuery groupByRRelStatutId() Group by the r_rel_statut_id column
 * @method RRelanceStatutsQuery groupByRRelStatutLibelle() Group by the r_rel_statut_libelle column
 *
 * @method RRelanceStatutsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RRelanceStatutsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RRelanceStatutsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RRelanceStatutsQuery leftJoinRelanceStatuts($relationAlias = null) Adds a LEFT JOIN clause to the query using the RelanceStatuts relation
 * @method RRelanceStatutsQuery rightJoinRelanceStatuts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RelanceStatuts relation
 * @method RRelanceStatutsQuery innerJoinRelanceStatuts($relationAlias = null) Adds a INNER JOIN clause to the query using the RelanceStatuts relation
 *
 * @method RRelanceStatutsQuery leftJoinRelances($relationAlias = null) Adds a LEFT JOIN clause to the query using the Relances relation
 * @method RRelanceStatutsQuery rightJoinRelances($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Relances relation
 * @method RRelanceStatutsQuery innerJoinRelances($relationAlias = null) Adds a INNER JOIN clause to the query using the Relances relation
 *
 * @method RRelanceStatuts findOne(PropelPDO $con = null) Return the first RRelanceStatuts matching the query
 * @method RRelanceStatuts findOneOrCreate(PropelPDO $con = null) Return the first RRelanceStatuts matching the query, or a new RRelanceStatuts object populated from the query conditions when no match is found
 *
 * @method RRelanceStatuts findOneByRRelStatutLibelle(string $r_rel_statut_libelle) Return the first RRelanceStatuts filtered by the r_rel_statut_libelle column
 *
 * @method array findByRRelStatutId(int $r_rel_statut_id) Return RRelanceStatuts objects filtered by the r_rel_statut_id column
 * @method array findByRRelStatutLibelle(string $r_rel_statut_libelle) Return RRelanceStatuts objects filtered by the r_rel_statut_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRRelanceStatutsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRRelanceStatutsQuery object.
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
            $modelName = 'RRelanceStatuts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RRelanceStatutsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RRelanceStatutsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RRelanceStatutsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RRelanceStatutsQuery) {
            return $criteria;
        }
        $query = new RRelanceStatutsQuery(null, null, $modelAlias);

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
     * @return   RRelanceStatuts|RRelanceStatuts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RRelanceStatutsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RRelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RRelanceStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRRelStatutId($key, $con = null)
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
     * @return                 RRelanceStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_rel_statut_id`, `r_rel_statut_libelle` FROM `r_relance_statuts` WHERE `r_rel_statut_id` = :p0';
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
            $obj = new RRelanceStatuts();
            $obj->hydrate($row);
            RRelanceStatutsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RRelanceStatuts|RRelanceStatuts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RRelanceStatuts[]|mixed the list of results, formatted by the current formatter
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
     * @return RRelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RRelanceStatutsPeer::R_REL_STATUT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RRelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RRelanceStatutsPeer::R_REL_STATUT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_rel_statut_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRelStatutId(1234); // WHERE r_rel_statut_id = 1234
     * $query->filterByRRelStatutId(array(12, 34)); // WHERE r_rel_statut_id IN (12, 34)
     * $query->filterByRRelStatutId(array('min' => 12)); // WHERE r_rel_statut_id >= 12
     * $query->filterByRRelStatutId(array('max' => 12)); // WHERE r_rel_statut_id <= 12
     * </code>
     *
     * @param     mixed $rRelStatutId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByRRelStatutId($rRelStatutId = null, $comparison = null)
    {
        if (is_array($rRelStatutId)) {
            $useMinMax = false;
            if (isset($rRelStatutId['min'])) {
                $this->addUsingAlias(RRelanceStatutsPeer::R_REL_STATUT_ID, $rRelStatutId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRelStatutId['max'])) {
                $this->addUsingAlias(RRelanceStatutsPeer::R_REL_STATUT_ID, $rRelStatutId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRelanceStatutsPeer::R_REL_STATUT_ID, $rRelStatutId, $comparison);
    }

    /**
     * Filter the query on the r_rel_statut_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRRelStatutLibelle('fooValue');   // WHERE r_rel_statut_libelle = 'fooValue'
     * $query->filterByRRelStatutLibelle('%fooValue%'); // WHERE r_rel_statut_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rRelStatutLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByRRelStatutLibelle($rRelStatutLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rRelStatutLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rRelStatutLibelle)) {
                $rRelStatutLibelle = str_replace('*', '%', $rRelStatutLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RRelanceStatutsPeer::R_REL_STATUT_LIBELLE, $rRelStatutLibelle, $comparison);
    }

    /**
     * Filter the query by a related RelanceStatuts object
     *
     * @param   RelanceStatuts|PropelObjectCollection $relanceStatuts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRelanceStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRelanceStatuts($relanceStatuts, $comparison = null)
    {
        if ($relanceStatuts instanceof RelanceStatuts) {
            return $this
                ->addUsingAlias(RRelanceStatutsPeer::R_REL_STATUT_ID, $relanceStatuts->getRRelStatId(), $comparison);
        } elseif ($relanceStatuts instanceof PropelObjectCollection) {
            return $this
                ->useRelanceStatutsQuery()
                ->filterByPrimaryKeys($relanceStatuts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRelanceStatuts() only accepts arguments of type RelanceStatuts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RelanceStatuts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RRelanceStatutsQuery The current query, for fluid interface
     */
    public function joinRelanceStatuts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RelanceStatuts');

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
            $this->addJoinObject($join, 'RelanceStatuts');
        }

        return $this;
    }

    /**
     * Use the RelanceStatuts relation RelanceStatuts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RelanceStatutsQuery A secondary query class using the current class as primary query
     */
    public function useRelanceStatutsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRelanceStatuts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RelanceStatuts', 'RelanceStatutsQuery');
    }

    /**
     * Filter the query by a related Relances object
     *
     * @param   Relances|PropelObjectCollection $relances  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRelanceStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRelances($relances, $comparison = null)
    {
        if ($relances instanceof Relances) {
            return $this
                ->addUsingAlias(RRelanceStatutsPeer::R_REL_STATUT_ID, $relances->getRelStatutId(), $comparison);
        } elseif ($relances instanceof PropelObjectCollection) {
            return $this
                ->useRelancesQuery()
                ->filterByPrimaryKeys($relances->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRelances() only accepts arguments of type Relances or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Relances relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RRelanceStatutsQuery The current query, for fluid interface
     */
    public function joinRelances($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Relances');

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
            $this->addJoinObject($join, 'Relances');
        }

        return $this;
    }

    /**
     * Use the Relances relation Relances object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RelancesQuery A secondary query class using the current class as primary query
     */
    public function useRelancesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRelances($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Relances', 'RelancesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RRelanceStatuts $rRelanceStatuts Object to remove from the list of results
     *
     * @return RRelanceStatutsQuery The current query, for fluid interface
     */
    public function prune($rRelanceStatuts = null)
    {
        if ($rRelanceStatuts) {
            $this->addUsingAlias(RRelanceStatutsPeer::R_REL_STATUT_ID, $rRelanceStatuts->getRRelStatutId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
