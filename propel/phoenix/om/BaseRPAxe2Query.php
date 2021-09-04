<?php


/**
 * Base class that represents a query for the 'r_p_axe2' table.
 *
 *
 *
 * @method RPAxe2Query orderByRPAxe2Id($order = Criteria::ASC) Order by the r_p_axe2_id column
 * @method RPAxe2Query orderByRPAxe2Tag($order = Criteria::ASC) Order by the r_p_axe2_tag column
 * @method RPAxe2Query orderByRPAxe2Libelle($order = Criteria::ASC) Order by the r_p_axe2_libelle column
 * @method RPAxe2Query orderByRPAxe2Actif($order = Criteria::ASC) Order by the r_p_axe2_actif column
 *
 * @method RPAxe2Query groupByRPAxe2Id() Group by the r_p_axe2_id column
 * @method RPAxe2Query groupByRPAxe2Tag() Group by the r_p_axe2_tag column
 * @method RPAxe2Query groupByRPAxe2Libelle() Group by the r_p_axe2_libelle column
 * @method RPAxe2Query groupByRPAxe2Actif() Group by the r_p_axe2_actif column
 *
 * @method RPAxe2Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RPAxe2Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RPAxe2Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RPAxe2Query leftJoinRPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the RPrestations relation
 * @method RPAxe2Query rightJoinRPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RPrestations relation
 * @method RPAxe2Query innerJoinRPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the RPrestations relation
 *
 * @method RPAxe2 findOne(PropelPDO $con = null) Return the first RPAxe2 matching the query
 * @method RPAxe2 findOneOrCreate(PropelPDO $con = null) Return the first RPAxe2 matching the query, or a new RPAxe2 object populated from the query conditions when no match is found
 *
 * @method RPAxe2 findOneByRPAxe2Tag(string $r_p_axe2_tag) Return the first RPAxe2 filtered by the r_p_axe2_tag column
 * @method RPAxe2 findOneByRPAxe2Libelle(string $r_p_axe2_libelle) Return the first RPAxe2 filtered by the r_p_axe2_libelle column
 * @method RPAxe2 findOneByRPAxe2Actif(boolean $r_p_axe2_actif) Return the first RPAxe2 filtered by the r_p_axe2_actif column
 *
 * @method array findByRPAxe2Id(int $r_p_axe2_id) Return RPAxe2 objects filtered by the r_p_axe2_id column
 * @method array findByRPAxe2Tag(string $r_p_axe2_tag) Return RPAxe2 objects filtered by the r_p_axe2_tag column
 * @method array findByRPAxe2Libelle(string $r_p_axe2_libelle) Return RPAxe2 objects filtered by the r_p_axe2_libelle column
 * @method array findByRPAxe2Actif(boolean $r_p_axe2_actif) Return RPAxe2 objects filtered by the r_p_axe2_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPAxe2Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRPAxe2Query object.
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
            $modelName = 'RPAxe2';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RPAxe2Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RPAxe2Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RPAxe2Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RPAxe2Query) {
            return $criteria;
        }
        $query = new RPAxe2Query(null, null, $modelAlias);

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
     * @return   RPAxe2|RPAxe2[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RPAxe2Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RPAxe2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RPAxe2 A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRPAxe2Id($key, $con = null)
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
     * @return                 RPAxe2 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_p_axe2_id`, `r_p_axe2_tag`, `r_p_axe2_libelle`, `r_p_axe2_actif` FROM `r_p_axe2` WHERE `r_p_axe2_id` = :p0';
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
            $obj = new RPAxe2();
            $obj->hydrate($row);
            RPAxe2Peer::addInstanceToPool($obj, (string) $key);
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
     * @return RPAxe2|RPAxe2[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RPAxe2[]|mixed the list of results, formatted by the current formatter
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
     * @return RPAxe2Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RPAxe2Peer::R_P_AXE2_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RPAxe2Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RPAxe2Peer::R_P_AXE2_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_p_axe2_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe2Id(1234); // WHERE r_p_axe2_id = 1234
     * $query->filterByRPAxe2Id(array(12, 34)); // WHERE r_p_axe2_id IN (12, 34)
     * $query->filterByRPAxe2Id(array('min' => 12)); // WHERE r_p_axe2_id >= 12
     * $query->filterByRPAxe2Id(array('max' => 12)); // WHERE r_p_axe2_id <= 12
     * </code>
     *
     * @param     mixed $rPAxe2Id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe2Query The current query, for fluid interface
     */
    public function filterByRPAxe2Id($rPAxe2Id = null, $comparison = null)
    {
        if (is_array($rPAxe2Id)) {
            $useMinMax = false;
            if (isset($rPAxe2Id['min'])) {
                $this->addUsingAlias(RPAxe2Peer::R_P_AXE2_ID, $rPAxe2Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPAxe2Id['max'])) {
                $this->addUsingAlias(RPAxe2Peer::R_P_AXE2_ID, $rPAxe2Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPAxe2Peer::R_P_AXE2_ID, $rPAxe2Id, $comparison);
    }

    /**
     * Filter the query on the r_p_axe2_tag column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe2Tag('fooValue');   // WHERE r_p_axe2_tag = 'fooValue'
     * $query->filterByRPAxe2Tag('%fooValue%'); // WHERE r_p_axe2_tag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe2Tag The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe2Query The current query, for fluid interface
     */
    public function filterByRPAxe2Tag($rPAxe2Tag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe2Tag)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe2Tag)) {
                $rPAxe2Tag = str_replace('*', '%', $rPAxe2Tag);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPAxe2Peer::R_P_AXE2_TAG, $rPAxe2Tag, $comparison);
    }

    /**
     * Filter the query on the r_p_axe2_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe2Libelle('fooValue');   // WHERE r_p_axe2_libelle = 'fooValue'
     * $query->filterByRPAxe2Libelle('%fooValue%'); // WHERE r_p_axe2_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe2Libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe2Query The current query, for fluid interface
     */
    public function filterByRPAxe2Libelle($rPAxe2Libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe2Libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe2Libelle)) {
                $rPAxe2Libelle = str_replace('*', '%', $rPAxe2Libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPAxe2Peer::R_P_AXE2_LIBELLE, $rPAxe2Libelle, $comparison);
    }

    /**
     * Filter the query on the r_p_axe2_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe2Actif(true); // WHERE r_p_axe2_actif = true
     * $query->filterByRPAxe2Actif('yes'); // WHERE r_p_axe2_actif = true
     * </code>
     *
     * @param     boolean|string $rPAxe2Actif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe2Query The current query, for fluid interface
     */
    public function filterByRPAxe2Actif($rPAxe2Actif = null, $comparison = null)
    {
        if (is_string($rPAxe2Actif)) {
            $rPAxe2Actif = in_array(strtolower($rPAxe2Actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPAxe2Peer::R_P_AXE2_ACTIF, $rPAxe2Actif, $comparison);
    }

    /**
     * Filter the query by a related RPrestations object
     *
     * @param   RPrestations|PropelObjectCollection $rPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPAxe2Query The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRPrestations($rPrestations, $comparison = null)
    {
        if ($rPrestations instanceof RPrestations) {
            return $this
                ->addUsingAlias(RPAxe2Peer::R_P_AXE2_ID, $rPrestations->getRPAxe2(), $comparison);
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
     * @return RPAxe2Query The current query, for fluid interface
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
     * @param   RPAxe2 $rPAxe2 Object to remove from the list of results
     *
     * @return RPAxe2Query The current query, for fluid interface
     */
    public function prune($rPAxe2 = null)
    {
        if ($rPAxe2) {
            $this->addUsingAlias(RPAxe2Peer::R_P_AXE2_ID, $rPAxe2->getRPAxe2Id(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
