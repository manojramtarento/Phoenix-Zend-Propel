<?php


/**
 * Base class that represents a query for the 'r_facture_motifs' table.
 *
 *
 *
 * @method RFactureMotifsQuery orderByRFactMotifId($order = Criteria::ASC) Order by the r_fact_motif_id column
 * @method RFactureMotifsQuery orderByRFactMotifLibelle($order = Criteria::ASC) Order by the r_fact_motif_libelle column
 * @method RFactureMotifsQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method RFactureMotifsQuery groupByRFactMotifId() Group by the r_fact_motif_id column
 * @method RFactureMotifsQuery groupByRFactMotifLibelle() Group by the r_fact_motif_libelle column
 * @method RFactureMotifsQuery groupByActif() Group by the actif column
 *
 * @method RFactureMotifsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RFactureMotifsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RFactureMotifsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RFactureMotifsQuery leftJoinLnkFactureMotifs($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkFactureMotifs relation
 * @method RFactureMotifsQuery rightJoinLnkFactureMotifs($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkFactureMotifs relation
 * @method RFactureMotifsQuery innerJoinLnkFactureMotifs($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkFactureMotifs relation
 *
 * @method RFactureMotifs findOne(PropelPDO $con = null) Return the first RFactureMotifs matching the query
 * @method RFactureMotifs findOneOrCreate(PropelPDO $con = null) Return the first RFactureMotifs matching the query, or a new RFactureMotifs object populated from the query conditions when no match is found
 *
 * @method RFactureMotifs findOneByRFactMotifLibelle(string $r_fact_motif_libelle) Return the first RFactureMotifs filtered by the r_fact_motif_libelle column
 * @method RFactureMotifs findOneByActif(int $actif) Return the first RFactureMotifs filtered by the actif column
 *
 * @method array findByRFactMotifId(int $r_fact_motif_id) Return RFactureMotifs objects filtered by the r_fact_motif_id column
 * @method array findByRFactMotifLibelle(string $r_fact_motif_libelle) Return RFactureMotifs objects filtered by the r_fact_motif_libelle column
 * @method array findByActif(int $actif) Return RFactureMotifs objects filtered by the actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRFactureMotifsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRFactureMotifsQuery object.
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
            $modelName = 'RFactureMotifs';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RFactureMotifsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RFactureMotifsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RFactureMotifsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RFactureMotifsQuery) {
            return $criteria;
        }
        $query = new RFactureMotifsQuery(null, null, $modelAlias);

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
     * @return   RFactureMotifs|RFactureMotifs[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RFactureMotifsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RFactureMotifsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RFactureMotifs A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRFactMotifId($key, $con = null)
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
     * @return                 RFactureMotifs A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_fact_motif_id`, `r_fact_motif_libelle`, `actif` FROM `r_facture_motifs` WHERE `r_fact_motif_id` = :p0';
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
            $obj = new RFactureMotifs();
            $obj->hydrate($row);
            RFactureMotifsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RFactureMotifs|RFactureMotifs[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RFactureMotifs[]|mixed the list of results, formatted by the current formatter
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
     * @return RFactureMotifsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RFactureMotifsPeer::R_FACT_MOTIF_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RFactureMotifsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RFactureMotifsPeer::R_FACT_MOTIF_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_fact_motif_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactMotifId(1234); // WHERE r_fact_motif_id = 1234
     * $query->filterByRFactMotifId(array(12, 34)); // WHERE r_fact_motif_id IN (12, 34)
     * $query->filterByRFactMotifId(array('min' => 12)); // WHERE r_fact_motif_id >= 12
     * $query->filterByRFactMotifId(array('max' => 12)); // WHERE r_fact_motif_id <= 12
     * </code>
     *
     * @param     mixed $rFactMotifId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureMotifsQuery The current query, for fluid interface
     */
    public function filterByRFactMotifId($rFactMotifId = null, $comparison = null)
    {
        if (is_array($rFactMotifId)) {
            $useMinMax = false;
            if (isset($rFactMotifId['min'])) {
                $this->addUsingAlias(RFactureMotifsPeer::R_FACT_MOTIF_ID, $rFactMotifId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactMotifId['max'])) {
                $this->addUsingAlias(RFactureMotifsPeer::R_FACT_MOTIF_ID, $rFactMotifId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFactureMotifsPeer::R_FACT_MOTIF_ID, $rFactMotifId, $comparison);
    }

    /**
     * Filter the query on the r_fact_motif_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactMotifLibelle('fooValue');   // WHERE r_fact_motif_libelle = 'fooValue'
     * $query->filterByRFactMotifLibelle('%fooValue%'); // WHERE r_fact_motif_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rFactMotifLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureMotifsQuery The current query, for fluid interface
     */
    public function filterByRFactMotifLibelle($rFactMotifLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rFactMotifLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rFactMotifLibelle)) {
                $rFactMotifLibelle = str_replace('*', '%', $rFactMotifLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFactureMotifsPeer::R_FACT_MOTIF_LIBELLE, $rFactMotifLibelle, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(1234); // WHERE actif = 1234
     * $query->filterByActif(array(12, 34)); // WHERE actif IN (12, 34)
     * $query->filterByActif(array('min' => 12)); // WHERE actif >= 12
     * $query->filterByActif(array('max' => 12)); // WHERE actif <= 12
     * </code>
     *
     * @param     mixed $actif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureMotifsQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(RFactureMotifsPeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(RFactureMotifsPeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFactureMotifsPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query by a related LnkFactureMotifs object
     *
     * @param   LnkFactureMotifs|PropelObjectCollection $lnkFactureMotifs  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureMotifsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkFactureMotifs($lnkFactureMotifs, $comparison = null)
    {
        if ($lnkFactureMotifs instanceof LnkFactureMotifs) {
            return $this
                ->addUsingAlias(RFactureMotifsPeer::R_FACT_MOTIF_ID, $lnkFactureMotifs->getMotifId(), $comparison);
        } elseif ($lnkFactureMotifs instanceof PropelObjectCollection) {
            return $this
                ->useLnkFactureMotifsQuery()
                ->filterByPrimaryKeys($lnkFactureMotifs->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkFactureMotifs() only accepts arguments of type LnkFactureMotifs or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkFactureMotifs relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RFactureMotifsQuery The current query, for fluid interface
     */
    public function joinLnkFactureMotifs($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkFactureMotifs');

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
            $this->addJoinObject($join, 'LnkFactureMotifs');
        }

        return $this;
    }

    /**
     * Use the LnkFactureMotifs relation LnkFactureMotifs object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkFactureMotifsQuery A secondary query class using the current class as primary query
     */
    public function useLnkFactureMotifsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkFactureMotifs($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkFactureMotifs', 'LnkFactureMotifsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RFactureMotifs $rFactureMotifs Object to remove from the list of results
     *
     * @return RFactureMotifsQuery The current query, for fluid interface
     */
    public function prune($rFactureMotifs = null)
    {
        if ($rFactureMotifs) {
            $this->addUsingAlias(RFactureMotifsPeer::R_FACT_MOTIF_ID, $rFactureMotifs->getRFactMotifId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
