<?php


/**
 * Base class that represents a query for the 'r_facture_annulation_motifs' table.
 *
 *
 *
 * @method RFactureAnnulationMotifsQuery orderByRFactureAnnulationMotifsMotifId($order = Criteria::ASC) Order by the r_facture_annulation_motifs_motif_id column
 * @method RFactureAnnulationMotifsQuery orderByRFactureAnnulationMotifsMotifLibelle($order = Criteria::ASC) Order by the r_facture_annulation_motifs_motif_libelle column
 * @method RFactureAnnulationMotifsQuery orderByRFactureAnnulationMotifsActif($order = Criteria::ASC) Order by the r_facture_annulation_motifs_actif column
 *
 * @method RFactureAnnulationMotifsQuery groupByRFactureAnnulationMotifsMotifId() Group by the r_facture_annulation_motifs_motif_id column
 * @method RFactureAnnulationMotifsQuery groupByRFactureAnnulationMotifsMotifLibelle() Group by the r_facture_annulation_motifs_motif_libelle column
 * @method RFactureAnnulationMotifsQuery groupByRFactureAnnulationMotifsActif() Group by the r_facture_annulation_motifs_actif column
 *
 * @method RFactureAnnulationMotifsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RFactureAnnulationMotifsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RFactureAnnulationMotifsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RFactureAnnulationMotifsQuery leftJoinPlanFacturationDetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the PlanFacturationDetails relation
 * @method RFactureAnnulationMotifsQuery rightJoinPlanFacturationDetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PlanFacturationDetails relation
 * @method RFactureAnnulationMotifsQuery innerJoinPlanFacturationDetails($relationAlias = null) Adds a INNER JOIN clause to the query using the PlanFacturationDetails relation
 *
 * @method RFactureAnnulationMotifs findOne(PropelPDO $con = null) Return the first RFactureAnnulationMotifs matching the query
 * @method RFactureAnnulationMotifs findOneOrCreate(PropelPDO $con = null) Return the first RFactureAnnulationMotifs matching the query, or a new RFactureAnnulationMotifs object populated from the query conditions when no match is found
 *
 * @method RFactureAnnulationMotifs findOneByRFactureAnnulationMotifsMotifLibelle(string $r_facture_annulation_motifs_motif_libelle) Return the first RFactureAnnulationMotifs filtered by the r_facture_annulation_motifs_motif_libelle column
 * @method RFactureAnnulationMotifs findOneByRFactureAnnulationMotifsActif(int $r_facture_annulation_motifs_actif) Return the first RFactureAnnulationMotifs filtered by the r_facture_annulation_motifs_actif column
 *
 * @method array findByRFactureAnnulationMotifsMotifId(int $r_facture_annulation_motifs_motif_id) Return RFactureAnnulationMotifs objects filtered by the r_facture_annulation_motifs_motif_id column
 * @method array findByRFactureAnnulationMotifsMotifLibelle(string $r_facture_annulation_motifs_motif_libelle) Return RFactureAnnulationMotifs objects filtered by the r_facture_annulation_motifs_motif_libelle column
 * @method array findByRFactureAnnulationMotifsActif(int $r_facture_annulation_motifs_actif) Return RFactureAnnulationMotifs objects filtered by the r_facture_annulation_motifs_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRFactureAnnulationMotifsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRFactureAnnulationMotifsQuery object.
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
            $modelName = 'RFactureAnnulationMotifs';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RFactureAnnulationMotifsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RFactureAnnulationMotifsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RFactureAnnulationMotifsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RFactureAnnulationMotifsQuery) {
            return $criteria;
        }
        $query = new RFactureAnnulationMotifsQuery(null, null, $modelAlias);

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
     * @return   RFactureAnnulationMotifs|RFactureAnnulationMotifs[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RFactureAnnulationMotifsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RFactureAnnulationMotifsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RFactureAnnulationMotifs A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRFactureAnnulationMotifsMotifId($key, $con = null)
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
     * @return                 RFactureAnnulationMotifs A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_facture_annulation_motifs_motif_id`, `r_facture_annulation_motifs_motif_libelle`, `r_facture_annulation_motifs_actif` FROM `r_facture_annulation_motifs` WHERE `r_facture_annulation_motifs_motif_id` = :p0';
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
            $obj = new RFactureAnnulationMotifs();
            $obj->hydrate($row);
            RFactureAnnulationMotifsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RFactureAnnulationMotifs|RFactureAnnulationMotifs[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RFactureAnnulationMotifs[]|mixed the list of results, formatted by the current formatter
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
     * @return RFactureAnnulationMotifsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RFactureAnnulationMotifsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_facture_annulation_motifs_motif_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactureAnnulationMotifsMotifId(1234); // WHERE r_facture_annulation_motifs_motif_id = 1234
     * $query->filterByRFactureAnnulationMotifsMotifId(array(12, 34)); // WHERE r_facture_annulation_motifs_motif_id IN (12, 34)
     * $query->filterByRFactureAnnulationMotifsMotifId(array('min' => 12)); // WHERE r_facture_annulation_motifs_motif_id >= 12
     * $query->filterByRFactureAnnulationMotifsMotifId(array('max' => 12)); // WHERE r_facture_annulation_motifs_motif_id <= 12
     * </code>
     *
     * @param     mixed $rFactureAnnulationMotifsMotifId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureAnnulationMotifsQuery The current query, for fluid interface
     */
    public function filterByRFactureAnnulationMotifsMotifId($rFactureAnnulationMotifsMotifId = null, $comparison = null)
    {
        if (is_array($rFactureAnnulationMotifsMotifId)) {
            $useMinMax = false;
            if (isset($rFactureAnnulationMotifsMotifId['min'])) {
                $this->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $rFactureAnnulationMotifsMotifId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactureAnnulationMotifsMotifId['max'])) {
                $this->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $rFactureAnnulationMotifsMotifId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $rFactureAnnulationMotifsMotifId, $comparison);
    }

    /**
     * Filter the query on the r_facture_annulation_motifs_motif_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactureAnnulationMotifsMotifLibelle('fooValue');   // WHERE r_facture_annulation_motifs_motif_libelle = 'fooValue'
     * $query->filterByRFactureAnnulationMotifsMotifLibelle('%fooValue%'); // WHERE r_facture_annulation_motifs_motif_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rFactureAnnulationMotifsMotifLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureAnnulationMotifsQuery The current query, for fluid interface
     */
    public function filterByRFactureAnnulationMotifsMotifLibelle($rFactureAnnulationMotifsMotifLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rFactureAnnulationMotifsMotifLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rFactureAnnulationMotifsMotifLibelle)) {
                $rFactureAnnulationMotifsMotifLibelle = str_replace('*', '%', $rFactureAnnulationMotifsMotifLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_LIBELLE, $rFactureAnnulationMotifsMotifLibelle, $comparison);
    }

    /**
     * Filter the query on the r_facture_annulation_motifs_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactureAnnulationMotifsActif(1234); // WHERE r_facture_annulation_motifs_actif = 1234
     * $query->filterByRFactureAnnulationMotifsActif(array(12, 34)); // WHERE r_facture_annulation_motifs_actif IN (12, 34)
     * $query->filterByRFactureAnnulationMotifsActif(array('min' => 12)); // WHERE r_facture_annulation_motifs_actif >= 12
     * $query->filterByRFactureAnnulationMotifsActif(array('max' => 12)); // WHERE r_facture_annulation_motifs_actif <= 12
     * </code>
     *
     * @param     mixed $rFactureAnnulationMotifsActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureAnnulationMotifsQuery The current query, for fluid interface
     */
    public function filterByRFactureAnnulationMotifsActif($rFactureAnnulationMotifsActif = null, $comparison = null)
    {
        if (is_array($rFactureAnnulationMotifsActif)) {
            $useMinMax = false;
            if (isset($rFactureAnnulationMotifsActif['min'])) {
                $this->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_ACTIF, $rFactureAnnulationMotifsActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactureAnnulationMotifsActif['max'])) {
                $this->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_ACTIF, $rFactureAnnulationMotifsActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_ACTIF, $rFactureAnnulationMotifsActif, $comparison);
    }

    /**
     * Filter the query by a related PlanFacturationDetails object
     *
     * @param   PlanFacturationDetails|PropelObjectCollection $planFacturationDetails  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureAnnulationMotifsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlanFacturationDetails($planFacturationDetails, $comparison = null)
    {
        if ($planFacturationDetails instanceof PlanFacturationDetails) {
            return $this
                ->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $planFacturationDetails->getPfdFactAnnulMotifId(), $comparison);
        } elseif ($planFacturationDetails instanceof PropelObjectCollection) {
            return $this
                ->usePlanFacturationDetailsQuery()
                ->filterByPrimaryKeys($planFacturationDetails->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPlanFacturationDetails() only accepts arguments of type PlanFacturationDetails or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PlanFacturationDetails relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RFactureAnnulationMotifsQuery The current query, for fluid interface
     */
    public function joinPlanFacturationDetails($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PlanFacturationDetails');

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
            $this->addJoinObject($join, 'PlanFacturationDetails');
        }

        return $this;
    }

    /**
     * Use the PlanFacturationDetails relation PlanFacturationDetails object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlanFacturationDetailsQuery A secondary query class using the current class as primary query
     */
    public function usePlanFacturationDetailsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPlanFacturationDetails($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PlanFacturationDetails', 'PlanFacturationDetailsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RFactureAnnulationMotifs $rFactureAnnulationMotifs Object to remove from the list of results
     *
     * @return RFactureAnnulationMotifsQuery The current query, for fluid interface
     */
    public function prune($rFactureAnnulationMotifs = null)
    {
        if ($rFactureAnnulationMotifs) {
            $this->addUsingAlias(RFactureAnnulationMotifsPeer::R_FACTURE_ANNULATION_MOTIFS_MOTIF_ID, $rFactureAnnulationMotifs->getRFactureAnnulationMotifsMotifId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
