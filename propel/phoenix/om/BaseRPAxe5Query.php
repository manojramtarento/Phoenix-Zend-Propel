<?php


/**
 * Base class that represents a query for the 'r_p_axe5' table.
 *
 *
 *
 * @method RPAxe5Query orderByRPAxe5Id($order = Criteria::ASC) Order by the r_p_axe5_id column
 * @method RPAxe5Query orderByRPAxe5Tag($order = Criteria::ASC) Order by the r_p_axe5_tag column
 * @method RPAxe5Query orderByRPAxe5Libelle($order = Criteria::ASC) Order by the r_p_axe5_libelle column
 * @method RPAxe5Query orderByRPAxe5Actif($order = Criteria::ASC) Order by the r_p_axe5_actif column
 *
 * @method RPAxe5Query groupByRPAxe5Id() Group by the r_p_axe5_id column
 * @method RPAxe5Query groupByRPAxe5Tag() Group by the r_p_axe5_tag column
 * @method RPAxe5Query groupByRPAxe5Libelle() Group by the r_p_axe5_libelle column
 * @method RPAxe5Query groupByRPAxe5Actif() Group by the r_p_axe5_actif column
 *
 * @method RPAxe5Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RPAxe5Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RPAxe5Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RPAxe5Query leftJoinRPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the RPrestations relation
 * @method RPAxe5Query rightJoinRPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RPrestations relation
 * @method RPAxe5Query innerJoinRPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the RPrestations relation
 *
 * @method RPAxe5 findOne(PropelPDO $con = null) Return the first RPAxe5 matching the query
 * @method RPAxe5 findOneOrCreate(PropelPDO $con = null) Return the first RPAxe5 matching the query, or a new RPAxe5 object populated from the query conditions when no match is found
 *
 * @method RPAxe5 findOneByRPAxe5Tag(string $r_p_axe5_tag) Return the first RPAxe5 filtered by the r_p_axe5_tag column
 * @method RPAxe5 findOneByRPAxe5Libelle(string $r_p_axe5_libelle) Return the first RPAxe5 filtered by the r_p_axe5_libelle column
 * @method RPAxe5 findOneByRPAxe5Actif(boolean $r_p_axe5_actif) Return the first RPAxe5 filtered by the r_p_axe5_actif column
 *
 * @method array findByRPAxe5Id(int $r_p_axe5_id) Return RPAxe5 objects filtered by the r_p_axe5_id column
 * @method array findByRPAxe5Tag(string $r_p_axe5_tag) Return RPAxe5 objects filtered by the r_p_axe5_tag column
 * @method array findByRPAxe5Libelle(string $r_p_axe5_libelle) Return RPAxe5 objects filtered by the r_p_axe5_libelle column
 * @method array findByRPAxe5Actif(boolean $r_p_axe5_actif) Return RPAxe5 objects filtered by the r_p_axe5_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPAxe5Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRPAxe5Query object.
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
            $modelName = 'RPAxe5';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RPAxe5Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RPAxe5Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RPAxe5Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RPAxe5Query) {
            return $criteria;
        }
        $query = new RPAxe5Query(null, null, $modelAlias);

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
     * @return   RPAxe5|RPAxe5[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RPAxe5Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RPAxe5Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RPAxe5 A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRPAxe5Id($key, $con = null)
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
     * @return                 RPAxe5 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_p_axe5_id`, `r_p_axe5_tag`, `r_p_axe5_libelle`, `r_p_axe5_actif` FROM `r_p_axe5` WHERE `r_p_axe5_id` = :p0';
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
            $obj = new RPAxe5();
            $obj->hydrate($row);
            RPAxe5Peer::addInstanceToPool($obj, (string) $key);
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
     * @return RPAxe5|RPAxe5[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RPAxe5[]|mixed the list of results, formatted by the current formatter
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
     * @return RPAxe5Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RPAxe5Peer::R_P_AXE5_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RPAxe5Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RPAxe5Peer::R_P_AXE5_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_p_axe5_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe5Id(1234); // WHERE r_p_axe5_id = 1234
     * $query->filterByRPAxe5Id(array(12, 34)); // WHERE r_p_axe5_id IN (12, 34)
     * $query->filterByRPAxe5Id(array('min' => 12)); // WHERE r_p_axe5_id >= 12
     * $query->filterByRPAxe5Id(array('max' => 12)); // WHERE r_p_axe5_id <= 12
     * </code>
     *
     * @param     mixed $rPAxe5Id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe5Query The current query, for fluid interface
     */
    public function filterByRPAxe5Id($rPAxe5Id = null, $comparison = null)
    {
        if (is_array($rPAxe5Id)) {
            $useMinMax = false;
            if (isset($rPAxe5Id['min'])) {
                $this->addUsingAlias(RPAxe5Peer::R_P_AXE5_ID, $rPAxe5Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPAxe5Id['max'])) {
                $this->addUsingAlias(RPAxe5Peer::R_P_AXE5_ID, $rPAxe5Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPAxe5Peer::R_P_AXE5_ID, $rPAxe5Id, $comparison);
    }

    /**
     * Filter the query on the r_p_axe5_tag column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe5Tag('fooValue');   // WHERE r_p_axe5_tag = 'fooValue'
     * $query->filterByRPAxe5Tag('%fooValue%'); // WHERE r_p_axe5_tag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe5Tag The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe5Query The current query, for fluid interface
     */
    public function filterByRPAxe5Tag($rPAxe5Tag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe5Tag)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe5Tag)) {
                $rPAxe5Tag = str_replace('*', '%', $rPAxe5Tag);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPAxe5Peer::R_P_AXE5_TAG, $rPAxe5Tag, $comparison);
    }

    /**
     * Filter the query on the r_p_axe5_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe5Libelle('fooValue');   // WHERE r_p_axe5_libelle = 'fooValue'
     * $query->filterByRPAxe5Libelle('%fooValue%'); // WHERE r_p_axe5_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe5Libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe5Query The current query, for fluid interface
     */
    public function filterByRPAxe5Libelle($rPAxe5Libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe5Libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe5Libelle)) {
                $rPAxe5Libelle = str_replace('*', '%', $rPAxe5Libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPAxe5Peer::R_P_AXE5_LIBELLE, $rPAxe5Libelle, $comparison);
    }

    /**
     * Filter the query on the r_p_axe5_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe5Actif(true); // WHERE r_p_axe5_actif = true
     * $query->filterByRPAxe5Actif('yes'); // WHERE r_p_axe5_actif = true
     * </code>
     *
     * @param     boolean|string $rPAxe5Actif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPAxe5Query The current query, for fluid interface
     */
    public function filterByRPAxe5Actif($rPAxe5Actif = null, $comparison = null)
    {
        if (is_string($rPAxe5Actif)) {
            $rPAxe5Actif = in_array(strtolower($rPAxe5Actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPAxe5Peer::R_P_AXE5_ACTIF, $rPAxe5Actif, $comparison);
    }

    /**
     * Filter the query by a related RPrestations object
     *
     * @param   RPrestations|PropelObjectCollection $rPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPAxe5Query The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRPrestations($rPrestations, $comparison = null)
    {
        if ($rPrestations instanceof RPrestations) {
            return $this
                ->addUsingAlias(RPAxe5Peer::R_P_AXE5_ID, $rPrestations->getRPAxe5(), $comparison);
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
     * @return RPAxe5Query The current query, for fluid interface
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
     * @param   RPAxe5 $rPAxe5 Object to remove from the list of results
     *
     * @return RPAxe5Query The current query, for fluid interface
     */
    public function prune($rPAxe5 = null)
    {
        if ($rPAxe5) {
            $this->addUsingAlias(RPAxe5Peer::R_P_AXE5_ID, $rPAxe5->getRPAxe5Id(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
