<?php


/**
 * Base class that represents a query for the 'r_p_axe3' table.
 *
 *
 *
 * @method RPAxe3Query orderByRPAxe3Id($order = Criteria::ASC) Order by the r_p_axe3_id column
 * @method RPAxe3Query orderByRPAxe3Tag($order = Criteria::ASC) Order by the r_p_axe3_tag column
 * @method RPAxe3Query orderByRPAxe3Libelle($order = Criteria::ASC) Order by the r_p_axe3_libelle column
 * @method RPAxe3Query orderByRPAxe3Actif($order = Criteria::ASC) Order by the r_p_axe3_actif column
 *
 * @method RPAxe3Query groupByRPAxe3Id() Group by the r_p_axe3_id column
 * @method RPAxe3Query groupByRPAxe3Tag() Group by the r_p_axe3_tag column
 * @method RPAxe3Query groupByRPAxe3Libelle() Group by the r_p_axe3_libelle column
 * @method RPAxe3Query groupByRPAxe3Actif() Group by the r_p_axe3_actif column
 *
 * @method RPAxe3Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RPAxe3Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RPAxe3Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RPAxe3Query leftJoinRPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the RPrestations relation
 * @method RPAxe3Query rightJoinRPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RPrestations relation
 * @method RPAxe3Query innerJoinRPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the RPrestations relation
 *
 * @method RPAxe3 findOne(PropelPDO $con = null) Return the first RPAxe3 matching the query
 * @method RPAxe3 findOneOrCreate(PropelPDO $con = null) Return the first RPAxe3 matching the query, or a new RPAxe3 object populated from the query conditions when no match is found
 *
 * @method RPAxe3 findOneByRPAxe3Tag(string $r_p_axe3_tag) Return the first RPAxe3 filtered by the r_p_axe3_tag column
 * @method RPAxe3 findOneByRPAxe3Libelle(string $r_p_axe3_libelle) Return the first RPAxe3 filtered by the r_p_axe3_libelle column
 * @method RPAxe3 findOneByRPAxe3Actif(boolean $r_p_axe3_actif) Return the first RPAxe3 filtered by the r_p_axe3_actif column
 *
 * @method array findByRPAxe3Id(int $r_p_axe3_id) Return RPAxe3 objects filtered by the r_p_axe3_id column
 * @method array findByRPAxe3Tag(string $r_p_axe3_tag) Return RPAxe3 objects filtered by the r_p_axe3_tag column
 * @method array findByRPAxe3Libelle(string $r_p_axe3_libelle) Return RPAxe3 objects filtered by the r_p_axe3_libelle column
 * @method array findByRPAxe3Actif(boolean $r_p_axe3_actif) Return RPAxe3 objects filtered by the r_p_axe3_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPAxe3Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRPAxe3Query object.
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
            $modelName = 'RPAxe3';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RPAxe3Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RPAxe3Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RPAxe3Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RPAxe3Query) {
            return $criteria;
        }
        $query = new RPAxe3Query(null, null, $modelAlias);

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
     * @return   RPAxe3|RPAxe3[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RPAxe3Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RPAxe3Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RPAxe3 A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRPAxe3Id($key, $con = null)
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
     * @return                 RPAxe3 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_p_axe3_id`, `r_p_axe3_tag`, `r_p_axe3_libelle`, `r_p_axe3_actif` FROM `r_p_axe3` WHERE `r_p_axe3_id` = :p0';
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
            $obj = new RPAxe3();
            $obj->hydrate($row);
            RPAxe3Peer::addInstanceToPool($obj, (string) $key);
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
     * @return RPAxe3|RPAxe3[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RPAxe3[]|mixed the list of results, formatted by the current formatter
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
     * @return RPAxe3Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RPAxe3Peer::R_P_AXE3_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RPAxe3Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RPAxe3Peer::R_P_AXE3_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_p_axe3_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe3Id(1234); // WHERE r_p_axe3_id = 1234
     * $query->filterByRPAxe3Id(array(12, 34)); // WHERE r_p_axe3_id IN (12, 34)
     * $query->filterByRPAxe3Id(array('min' => 12)); // WHERE r_p_axe3_id >= 12
     * $query->filterByRPAxe3Id(array('max' => 12)); // WHERE r_p_axe3_id <= 12
     * </code>
     *
     * @param     mixed $rPAxe3Id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe3Query The current query, for fluid interface
     */
    public function filterByRPAxe3Id($rPAxe3Id = null, $comparison = null)
    {
        if (is_array($rPAxe3Id)) {
            $useMinMax = false;
            if (isset($rPAxe3Id['min'])) {
                $this->addUsingAlias(RPAxe3Peer::R_P_AXE3_ID, $rPAxe3Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPAxe3Id['max'])) {
                $this->addUsingAlias(RPAxe3Peer::R_P_AXE3_ID, $rPAxe3Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPAxe3Peer::R_P_AXE3_ID, $rPAxe3Id, $comparison);
    }

    /**
     * Filter the query on the r_p_axe3_tag column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe3Tag('fooValue');   // WHERE r_p_axe3_tag = 'fooValue'
     * $query->filterByRPAxe3Tag('%fooValue%'); // WHERE r_p_axe3_tag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe3Tag The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe3Query The current query, for fluid interface
     */
    public function filterByRPAxe3Tag($rPAxe3Tag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe3Tag)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe3Tag)) {
                $rPAxe3Tag = str_replace('*', '%', $rPAxe3Tag);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPAxe3Peer::R_P_AXE3_TAG, $rPAxe3Tag, $comparison);
    }

    /**
     * Filter the query on the r_p_axe3_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe3Libelle('fooValue');   // WHERE r_p_axe3_libelle = 'fooValue'
     * $query->filterByRPAxe3Libelle('%fooValue%'); // WHERE r_p_axe3_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe3Libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe3Query The current query, for fluid interface
     */
    public function filterByRPAxe3Libelle($rPAxe3Libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe3Libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe3Libelle)) {
                $rPAxe3Libelle = str_replace('*', '%', $rPAxe3Libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPAxe3Peer::R_P_AXE3_LIBELLE, $rPAxe3Libelle, $comparison);
    }

    /**
     * Filter the query on the r_p_axe3_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe3Actif(true); // WHERE r_p_axe3_actif = true
     * $query->filterByRPAxe3Actif('yes'); // WHERE r_p_axe3_actif = true
     * </code>
     *
     * @param     boolean|string $rPAxe3Actif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe3Query The current query, for fluid interface
     */
    public function filterByRPAxe3Actif($rPAxe3Actif = null, $comparison = null)
    {
        if (is_string($rPAxe3Actif)) {
            $rPAxe3Actif = in_array(strtolower($rPAxe3Actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPAxe3Peer::R_P_AXE3_ACTIF, $rPAxe3Actif, $comparison);
    }

    /**
     * Filter the query by a related RPrestations object
     *
     * @param   RPrestations|PropelObjectCollection $rPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPAxe3Query The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRPrestations($rPrestations, $comparison = null)
    {
        if ($rPrestations instanceof RPrestations) {
            return $this
                ->addUsingAlias(RPAxe3Peer::R_P_AXE3_ID, $rPrestations->getRPAxe3(), $comparison);
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
     * @return RPAxe3Query The current query, for fluid interface
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
     * @param   RPAxe3 $rPAxe3 Object to remove from the list of results
     *
     * @return RPAxe3Query The current query, for fluid interface
     */
    public function prune($rPAxe3 = null)
    {
        if ($rPAxe3) {
            $this->addUsingAlias(RPAxe3Peer::R_P_AXE3_ID, $rPAxe3->getRPAxe3Id(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
