<?php


/**
 * Base class that represents a query for the 'r_facture_options_echeances' table.
 *
 *
 *
 * @method RFactureOptionsEcheancesQuery orderByFactOptEcheanceId($order = Criteria::ASC) Order by the fact_opt_echeance_id column
 * @method RFactureOptionsEcheancesQuery orderByFactOptEcheanceLibelle($order = Criteria::ASC) Order by the fact_opt_echeance_libelle column
 * @method RFactureOptionsEcheancesQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method RFactureOptionsEcheancesQuery orderByFactOptEcheanceLibelleEn($order = Criteria::ASC) Order by the fact_opt_echeance_libelle_en column
 *
 * @method RFactureOptionsEcheancesQuery groupByFactOptEcheanceId() Group by the fact_opt_echeance_id column
 * @method RFactureOptionsEcheancesQuery groupByFactOptEcheanceLibelle() Group by the fact_opt_echeance_libelle column
 * @method RFactureOptionsEcheancesQuery groupByActif() Group by the actif column
 * @method RFactureOptionsEcheancesQuery groupByFactOptEcheanceLibelleEn() Group by the fact_opt_echeance_libelle_en column
 *
 * @method RFactureOptionsEcheancesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RFactureOptionsEcheancesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RFactureOptionsEcheancesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RFactureOptionsEcheancesQuery leftJoinClientFactureOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientFactureOptions relation
 * @method RFactureOptionsEcheancesQuery rightJoinClientFactureOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientFactureOptions relation
 * @method RFactureOptionsEcheancesQuery innerJoinClientFactureOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientFactureOptions relation
 *
 * @method RFactureOptionsEcheancesQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method RFactureOptionsEcheancesQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method RFactureOptionsEcheancesQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method RFactureOptionsEcheancesQuery leftJoinFactureEditionHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureEditionHistory relation
 * @method RFactureOptionsEcheancesQuery rightJoinFactureEditionHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureEditionHistory relation
 * @method RFactureOptionsEcheancesQuery innerJoinFactureEditionHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureEditionHistory relation
 *
 * @method RFactureOptionsEcheances findOne(PropelPDO $con = null) Return the first RFactureOptionsEcheances matching the query
 * @method RFactureOptionsEcheances findOneOrCreate(PropelPDO $con = null) Return the first RFactureOptionsEcheances matching the query, or a new RFactureOptionsEcheances object populated from the query conditions when no match is found
 *
 * @method RFactureOptionsEcheances findOneByFactOptEcheanceLibelle(string $fact_opt_echeance_libelle) Return the first RFactureOptionsEcheances filtered by the fact_opt_echeance_libelle column
 * @method RFactureOptionsEcheances findOneByActif(boolean $actif) Return the first RFactureOptionsEcheances filtered by the actif column
 * @method RFactureOptionsEcheances findOneByFactOptEcheanceLibelleEn(string $fact_opt_echeance_libelle_en) Return the first RFactureOptionsEcheances filtered by the fact_opt_echeance_libelle_en column
 *
 * @method array findByFactOptEcheanceId(int $fact_opt_echeance_id) Return RFactureOptionsEcheances objects filtered by the fact_opt_echeance_id column
 * @method array findByFactOptEcheanceLibelle(string $fact_opt_echeance_libelle) Return RFactureOptionsEcheances objects filtered by the fact_opt_echeance_libelle column
 * @method array findByActif(boolean $actif) Return RFactureOptionsEcheances objects filtered by the actif column
 * @method array findByFactOptEcheanceLibelleEn(string $fact_opt_echeance_libelle_en) Return RFactureOptionsEcheances objects filtered by the fact_opt_echeance_libelle_en column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRFactureOptionsEcheancesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRFactureOptionsEcheancesQuery object.
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
            $modelName = 'RFactureOptionsEcheances';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RFactureOptionsEcheancesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RFactureOptionsEcheancesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RFactureOptionsEcheancesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RFactureOptionsEcheancesQuery) {
            return $criteria;
        }
        $query = new RFactureOptionsEcheancesQuery(null, null, $modelAlias);

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
     * @return   RFactureOptionsEcheances|RFactureOptionsEcheances[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RFactureOptionsEcheancesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RFactureOptionsEcheancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RFactureOptionsEcheances A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFactOptEcheanceId($key, $con = null)
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
     * @return                 RFactureOptionsEcheances A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `fact_opt_echeance_id`, `fact_opt_echeance_libelle`, `actif`, `fact_opt_echeance_libelle_en` FROM `r_facture_options_echeances` WHERE `fact_opt_echeance_id` = :p0';
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
            $obj = new RFactureOptionsEcheances();
            $obj->hydrate($row);
            RFactureOptionsEcheancesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RFactureOptionsEcheances|RFactureOptionsEcheances[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RFactureOptionsEcheances[]|mixed the list of results, formatted by the current formatter
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
     * @return RFactureOptionsEcheancesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RFactureOptionsEcheancesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the fact_opt_echeance_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactOptEcheanceId(1234); // WHERE fact_opt_echeance_id = 1234
     * $query->filterByFactOptEcheanceId(array(12, 34)); // WHERE fact_opt_echeance_id IN (12, 34)
     * $query->filterByFactOptEcheanceId(array('min' => 12)); // WHERE fact_opt_echeance_id >= 12
     * $query->filterByFactOptEcheanceId(array('max' => 12)); // WHERE fact_opt_echeance_id <= 12
     * </code>
     *
     * @param     mixed $factOptEcheanceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureOptionsEcheancesQuery The current query, for fluid interface
     */
    public function filterByFactOptEcheanceId($factOptEcheanceId = null, $comparison = null)
    {
        if (is_array($factOptEcheanceId)) {
            $useMinMax = false;
            if (isset($factOptEcheanceId['min'])) {
                $this->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $factOptEcheanceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factOptEcheanceId['max'])) {
                $this->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $factOptEcheanceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $factOptEcheanceId, $comparison);
    }

    /**
     * Filter the query on the fact_opt_echeance_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByFactOptEcheanceLibelle('fooValue');   // WHERE fact_opt_echeance_libelle = 'fooValue'
     * $query->filterByFactOptEcheanceLibelle('%fooValue%'); // WHERE fact_opt_echeance_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factOptEcheanceLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureOptionsEcheancesQuery The current query, for fluid interface
     */
    public function filterByFactOptEcheanceLibelle($factOptEcheanceLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factOptEcheanceLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factOptEcheanceLibelle)) {
                $factOptEcheanceLibelle = str_replace('*', '%', $factOptEcheanceLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_LIBELLE, $factOptEcheanceLibelle, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(true); // WHERE actif = true
     * $query->filterByActif('yes'); // WHERE actif = true
     * </code>
     *
     * @param     boolean|string $actif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureOptionsEcheancesQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RFactureOptionsEcheancesPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the fact_opt_echeance_libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByFactOptEcheanceLibelleEn('fooValue');   // WHERE fact_opt_echeance_libelle_en = 'fooValue'
     * $query->filterByFactOptEcheanceLibelleEn('%fooValue%'); // WHERE fact_opt_echeance_libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factOptEcheanceLibelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureOptionsEcheancesQuery The current query, for fluid interface
     */
    public function filterByFactOptEcheanceLibelleEn($factOptEcheanceLibelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factOptEcheanceLibelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factOptEcheanceLibelleEn)) {
                $factOptEcheanceLibelleEn = str_replace('*', '%', $factOptEcheanceLibelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_LIBELLE_EN, $factOptEcheanceLibelleEn, $comparison);
    }

    /**
     * Filter the query by a related ClientFactureOptions object
     *
     * @param   ClientFactureOptions|PropelObjectCollection $clientFactureOptions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureOptionsEcheancesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientFactureOptions($clientFactureOptions, $comparison = null)
    {
        if ($clientFactureOptions instanceof ClientFactureOptions) {
            return $this
                ->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $clientFactureOptions->getClFactEcheance(), $comparison);
        } elseif ($clientFactureOptions instanceof PropelObjectCollection) {
            return $this
                ->useClientFactureOptionsQuery()
                ->filterByPrimaryKeys($clientFactureOptions->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClientFactureOptions() only accepts arguments of type ClientFactureOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientFactureOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RFactureOptionsEcheancesQuery The current query, for fluid interface
     */
    public function joinClientFactureOptions($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientFactureOptions');

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
            $this->addJoinObject($join, 'ClientFactureOptions');
        }

        return $this;
    }

    /**
     * Use the ClientFactureOptions relation ClientFactureOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientFactureOptionsQuery A secondary query class using the current class as primary query
     */
    public function useClientFactureOptionsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClientFactureOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientFactureOptions', 'ClientFactureOptionsQuery');
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureOptionsEcheancesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $factures->getFactEcheanceId(), $comparison);
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
     * @return RFactureOptionsEcheancesQuery The current query, for fluid interface
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
     * @return                 RFactureOptionsEcheancesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureEditionHistory($factureEditionHistory, $comparison = null)
    {
        if ($factureEditionHistory instanceof FactureEditionHistory) {
            return $this
                ->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $factureEditionHistory->getFactEcheanceId(), $comparison);
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
     * @return RFactureOptionsEcheancesQuery The current query, for fluid interface
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
     * @param   RFactureOptionsEcheances $rFactureOptionsEcheances Object to remove from the list of results
     *
     * @return RFactureOptionsEcheancesQuery The current query, for fluid interface
     */
    public function prune($rFactureOptionsEcheances = null)
    {
        if ($rFactureOptionsEcheances) {
            $this->addUsingAlias(RFactureOptionsEcheancesPeer::FACT_OPT_ECHEANCE_ID, $rFactureOptionsEcheances->getFactOptEcheanceId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
